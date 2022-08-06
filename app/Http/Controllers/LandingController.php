<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Certificate;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // show home page
    public function index()
    {
        $projects = Project::orderByDesc('created_at')->take(3)->get();
        // $projects = [];
        $data = [
            'menu' => 'home',
            'submenu' => '',
        ];
        return view('landing-page.index', compact('data', 'projects'));
    }
    // show about us
    public function companyOverview()
    {
        $data = [
            'menu' => 'about-us',
            'submenu' => 'company-overview',
        ];
        return view('landing-page.about-us.company-overview', compact('data'));
    }
    public function visionMision()
    {
        $data = [
            'menu' => 'about-us',
            'submenu' => 'vision-mision',
        ];
        return view('landing-page.about-us.vision-mision', compact('data'));
    }
    public function organizationChart()
    {
        $data = [
            'menu' => 'about-us',
            'submenu' => 'organization-chart',
        ];
        return view('landing-page.about-us.organization-chart', compact('data'));
    }
    // show our projects
    public function ourProjects()
    {
        $projects = Project::orderByDesc('date')->get();
        $data = [
            'menu' => 'our-projects',
            'submenu' => '',
            'projects' => $projects,
        ];
        return view('landing-page.our-projects', compact('data'));
    }
    // show certifications
    public function certifications()
    {
        $certificates = Certificate::orderBy('created_at')->get();
        $data = [
            'menu' => 'certifications',
            'submenu' => '',
        ];
        return view('landing-page.certifications', compact('data', 'certificates'));
    }
    // show contact us
    public function contactUs()
    {
        $data = [
            'menu' => 'contact-us',
            'submenu' => '',
        ];
        return view('landing-page.contact-us', compact('data'));
    }
}
