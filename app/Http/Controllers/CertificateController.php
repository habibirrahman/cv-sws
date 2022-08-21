<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index(Auth $auth)
    {
        $user = $auth::user();
        $certificates = Certificate::all();
        return view('admin.certificates.index', compact('user', 'certificates'));
    }

    public function add(Auth $auth)
    {
        $user = $auth::user();
        return view('admin.certificates.add', compact('user'));
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $title = $request->input('title');
        $certificates = Certificate::all();
        foreach ($certificates as $certificate) {
            if ($certificate->title === $title) {
                return redirect()
                    ->route('certificates.index')
                    ->with('failed', $title . ' already exists');
            }
        }
        $certificate = Certificate::create($request->all());
        if ($certificate) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            Storage::disk('public')->put('assets/certificates/' . $file_name, file_get_contents($file));
            $certificate->images()->create(['url' => $file_name]);
            return redirect()
                ->route('certificates.index')
                ->with('success', $title . ' created successfully');
        } else {
            return redirect()
                ->route('certificates.index')
                ->with('failed', $title . ' failed to create');
        }
    }

    public function edit(Auth $auth, Certificate $certificate)
    {
        $user = $auth::user();
        return view('admin.certificates.edit', compact('user', 'certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        date_default_timezone_set('Asia/Jakarta');
        $title = $request->input('title');
        if ($request->file('image')) {
            foreach ($certificate->images as $image) {
                Storage::disk('public')->delete('assets/certificates/' . $image->url);
                $image->delete();
            }
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            Storage::disk('public')->put('assets/certificates/' . $file_name, file_get_contents($file));
            $certificate->images()->create(['url' => $file_name]);
        }
        if ($certificate->update($request->all())) {
            return redirect()->route('certificates.index')
                ->with('success', $title . ' updated successfully');
        } else {
            return redirect()->route('certificates.index')
                ->with('failed', $title . ' failed to update');
        }
    }

    public function destroy(Certificate $certificate)
    {
        date_default_timezone_set('Asia/Jakarta');
        foreach ($certificate->images as $image) {
            Storage::disk('public')->delete('assets/certificates/' . $image->url);
            $image->delete();
        }
        $certificate->delete();
        return redirect()
            ->route('certificates.index')
            ->with('success', $certificate->title . ' were successfully deleted');
    }
}
