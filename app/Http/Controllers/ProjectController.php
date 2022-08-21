<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Auth $auth)
    {
        $user = $auth::user();
        $projects = Project::orderBy('date', 'DESC')->get();
        return view('admin.projects.index', compact('user', 'projects'));
    }

    public function add(Auth $auth)
    {
        $user = $auth::user();
        return view('admin.projects.add', compact('user'));
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $name = $request->input('name');
        $projects = Project::all();
        foreach ($projects as $project) {
            if ($project->name === $name) {
                return redirect()
                    ->route('projects.index')
                    ->with('failed', $name . ' already exists');
            }
        }
        $project = Project::create($request->all());
        if ($project) {
            foreach ($request->file('images') as $file) {
                $file_name = $file->getClientOriginalName();
                Storage::disk('public')->put('assets/projects/' . $file_name, file_get_contents($file));
                $project->images()->create(['url' => $file_name]);
            }
            return redirect()
                ->route('projects.index')
                ->with('success', $name . ' created successfully');
        } else {
            return redirect()
                ->route('projects.index')
                ->with('failed', $name . ' failed to create');
        }
    }

    public function edit(Auth $auth, Project $project)
    {
        $user = $auth::user();
        return view('admin.projects.edit', compact('user', 'project'));
    }

    public function update(Request $request, Project $project)
    {
        date_default_timezone_set('Asia/Jakarta');
        $name = $request->input('name');
        if ($request->file('images')) {
            foreach ($project->images as $image) {
                Storage::disk('public')->delete('assets/projects/' . $image->url);
                $image->delete();
            }
            foreach ($request->file('images') as $file) {
                $file_name = $file->getClientOriginalName();
                Storage::disk('public')->put('assets/projects/' . $file_name, file_get_contents($file));
                $project->images()->create(['url' => $file_name]);
            }
        }
        if ($project->update($request->all())) {
            return redirect()->route('projects.index')
                ->with('success', $name . ' updated successfully');
        } else {
            return redirect()->route('projects.index')
                ->with('failed', $name . ' failed to update');
        }
    }

    public function destroy(Project $project)
    {
        date_default_timezone_set('Asia/Jakarta');
        foreach ($project->images as $image) {
            Storage::disk('public')->delete('assets/projects/' . $image->url);
            $image->delete();
        }
        $project->delete();
        return redirect()
            ->route('projects.index')
            ->with('success', $project->name . ' were successfully deleted');
    }
}
