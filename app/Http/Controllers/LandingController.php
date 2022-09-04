<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Paragraph;
use App\Models\Certificate;
use App\Models\Image;

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
        $images = [];
        array_push($images, $this->assignChart(1, 'Yunani Puji Astuti', 'Director', 'DIRECTOR-YUNANI PUJI ASTUTI'));
        array_push($images, $this->assignChart(2, 'Hariyanto', 'Project Manager', 'PROJECT MANAGER-HARIYANTO'));
        array_push($images, $this->assignChart(3, 'Hendra Gunawan', 'Tax Officer', 'TAX OFFICER-HENDRA GUNAWAN'));
        array_push($images, $this->assignChart(4, 'Rosarina A.', 'Admin Manager', 'ADMIN MANAGER-ROSARINA A.'));
        array_push($images, $this->assignChart(5, 'Putri Audina', 'HSE Officer', 'HSE OFFICER-PUTRI AUDINA'));
        array_push($images, $this->assignChart(6, 'Irsa A.', 'Warehouse Admin', 'WAREHOUSE ADMIN-IRSA A.'));
        array_push($images, $this->assignChart(7, 'Suhariyadi', 'Logistic', 'LOGISTIC-SUHARIYADI'));
        array_push($images, $this->assignChart(8, 'Anjarnoko', 'Civil Structure', 'CIVIL STRUCTURE-ANJARNOKO'));
        array_push($images, $this->assignChart(9, 'Slamet Riwayadi', 'Steel Structure', 'STEEL STRUCTURE-SLAMET RIWAYADI'));
        array_push($images, $this->assignChart(10, 'Arif Wahyudi', 'Driver', 'DRIVER-ARIF WAHYUDI'));
        return view('landing-page.about-us.organization-chart', compact('data', 'paragraphs', 'images'));
    }
    public function assignChart($id, $name, $position, $url)
    {
        $image = new Image();
        $image->id = $id;
        $image->name = $name;
        $image->position = $position;
        $image->url = $url . '.png';
        $image->urlOverlay = $url . ' OVER.png';
        return $image;
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
