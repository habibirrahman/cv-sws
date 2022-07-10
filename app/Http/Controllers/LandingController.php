<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // show home page
    public function index()
    {   
        $data = [
            'menu' => 'home',
            'submenu' => '',
        ];
        return view('landing-page.index', compact('data'));
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
        $data = [
            'menu' => 'our-projects',
            'submenu' => '',
        ];
        return view('landing-page.our-projects', compact('data'));
    }
    // show certification
    public function certification()
    {
        $certifications = [
            0 => [ 'id' => 1 ],
        ];
        $data = [
            'menu' => 'certification',
            'submenu' => '',
        ];
        return view('landing-page.certification', compact('data'));
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
