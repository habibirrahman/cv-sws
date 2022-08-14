<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Paragraph;
use App\Models\Certificate;

class LandingController extends Controller
{
    // show home page
    public function index()
    {
        $data = [
            'menu' => 'home',
            'submenu' => '',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->profile = $this->getProfile();
        $paragraphs->scopeOfWork = $this->getScopeOfWork();
        $paragraphs->companyCapability = $this->getCompanyCapability();
        $paragraphs->latestProjectsTitle = Paragraph::where('identifier', 'latest-projects-title')->first()->text;
        $paragraphs->ourClientsTitle = Paragraph::where('identifier', 'our-clients-title')->first()->text;
        $paragraphs->contactUs = $this->getContactUs();
        $projects = Project::orderByDesc('date')->take(3)->get();
        // dd($paragraphs);
        return view('landing-page.index', compact('data', 'paragraphs', 'projects'));
    }

    // show about us
    public function companyOverview()
    {
        $data = [
            'menu' => 'about-us',
            'submenu' => 'company-overview',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->companyOverview = $this->getCompanyOverview();
        $paragraphs->contactUs = $this->getContactUs();
        return view('landing-page.about-us.company-overview', compact('data', 'paragraphs'));
    }
    public function visionMission()
    {
        $data = [
            'menu' => 'about-us',
            'submenu' => 'vision-mission',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->visionMission = $this->getVisionMission();
        $paragraphs->contactUs = $this->getContactUs();
        return view('landing-page.about-us.vision-mission', compact('data', 'paragraphs'));
    }
    public function organizationChart()
    {
        $data = [
            'menu' => 'about-us',
            'submenu' => 'organization-chart',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->organizationChart = $this->getOrganizationChart();
        $paragraphs->contactUs = $this->getContactUs();
        return view('landing-page.about-us.organization-chart', compact('data', 'paragraphs'));
    }
    // show our projects
    public function ourProjects()
    {
        $data = [
            'menu' => 'our-projects',
            'submenu' => '',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->ourProjectsTitle = Paragraph::where('identifier', 'our-projects-title')->first()->text;
        $paragraphs->contactUs = $this->getContactUs();
        $projects = Project::orderByDesc('date')->paginate(6);
        $projects->withPath('/our-projects');
        return view('landing-page.our-projects', compact('data', 'paragraphs', 'projects'));
    }
    // show certifications
    public function certifications()
    {
        $data = [
            'menu' => 'certifications',
            'submenu' => '',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->certificationsTitle = Paragraph::where('identifier', 'certifications-title')->first()->text;
        $paragraphs->contactUs = $this->getContactUs();
        $certificates = Certificate::orderBy('created_at')->get();
        return view('landing-page.certifications', compact('data', 'paragraphs', 'certificates'));
    }
    // show contact us
    public function contactUs()
    {
        $data = [
            'menu' => 'contact-us',
            'submenu' => '',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->contactUs = $this->getContactUs();
        return view('landing-page.contact-us', compact('data', 'paragraphs'));
    }
}
