<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Paragraph;
use App\Models\Certificate;
use App\Models\Image;
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
        $paragraphs = new Paragraph();
        $paragraphs->profile = $this->getProfile();
        $paragraphs->scopeOfWork = $this->getScopeOfWork();
        $paragraphs->companyCapability = $this->getCompanyCapability();
        $paragraphs->latestProjectsTitle= Paragraph::where('identifier', 'latest-projects-title')->first()->text;
        $paragraphs->ourClientsTitle= Paragraph::where('identifier', 'our-clients-title')->first()->text;
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
    public function visionMision()
    {
        $data = [
            'menu' => 'about-us',
            'submenu' => 'vision-mision',
        ];
        $paragraphs = new Paragraph();
        $paragraphs->visionMision = $this->getVisionMision();
        $paragraphs->contactUs = $this->getContactUs();
        return view('landing-page.about-us.vision-mision', compact('data', 'paragraphs'));
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

    private function getProfile() {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'profile-title')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'profile-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'profile-text-2')->first()->text;
        $payload->text3 = Paragraph::where('identifier', 'profile-text-3')->first()->text;
        $payload->text4 = Paragraph::where('identifier', 'profile-text-4')->first()->text;
        $payload->image = Image::where('identifier', 'profile')->first();
        return $payload;
    }
    private function getScopeOfWork() {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'scope-of-work-title')->first()->text;
        $payload->subtitle1 = Paragraph::where('identifier', 'scope-of-work-subtitle-1')->first()->text;
        $payload->subtitle2 = Paragraph::where('identifier', 'scope-of-work-subtitle-2')->first()->text;
        $payload->subtitle3 = Paragraph::where('identifier', 'scope-of-work-subtitle-3')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'scope-of-work-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'scope-of-work-text-2')->first()->text;
        $payload->text3 = Paragraph::where('identifier', 'scope-of-work-text-3')->first()->text;
        $payload->image1 = Image::where('identifier', 'scope-of-work-1')->first();
        $payload->image2 = Image::where('identifier', 'scope-of-work-2')->first();
        $payload->image3 = Image::where('identifier', 'scope-of-work-3')->first();
        return $payload;
    }
    private function getCompanyCapability() {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'company-capability-title')->first()->text;
        $payload->subtitle1 = Paragraph::where('identifier', 'company-capability-subtitle-1')->first()->text;
        $payload->subtitle2 = Paragraph::where('identifier', 'company-capability-subtitle-2')->first()->text;
        $payload->subtitle3 = Paragraph::where('identifier', 'company-capability-subtitle-3')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'company-capability-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'company-capability-text-2')->first()->text;
        $payload->text3 = Paragraph::where('identifier', 'company-capability-text-3')->first()->text;
        return $payload;
    }
    private function getContactUs() {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'contact-us-title')->first()->text;
        $payload->address1 = Paragraph::where('identifier', 'address-1')->first()->text;
        $payload->address2 = Paragraph::where('identifier', 'address-2')->first()->text;
        $payload->address3 = Paragraph::where('identifier', 'address-3')->first()->text;
        $payload->address4 = Paragraph::where('identifier', 'address-4')->first()->text;
        $payload->address5 = Paragraph::where('identifier', 'address-5')->first()->text;
        $payload->email1 = Paragraph::where('identifier', 'email-1')->first()->text;
        $payload->email2 = Paragraph::where('identifier', 'email-2')->first()->text;
        $payload->email3 = Paragraph::where('identifier', 'email-3')->first()->text;
        $payload->phone1 = Paragraph::where('identifier', 'phone-1')->first()->text;
        $payload->phone2 = Paragraph::where('identifier', 'phone-2')->first()->text;
        $payload->phone3 = Paragraph::where('identifier', 'phone-3')->first()->text;
        $payload->phone4 = Paragraph::where('identifier', 'phone-4')->first()->text;
        $payload->phone5 = Paragraph::where('identifier', 'phone-5')->first()->text;
        return $payload;
    }
    private function getCompanyOverview() {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'company-overview-title')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'company-overview-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'company-overview-text-2')->first()->text;
        $payload->text3 = Paragraph::where('identifier', 'company-overview-text-3')->first()->text;
        $payload->text4 = Paragraph::where('identifier', 'company-overview-text-4')->first()->text;
        $payload->text5 = Paragraph::where('identifier', 'company-overview-text-5')->first()->text;
        $payload->text6 = Paragraph::where('identifier', 'company-overview-text-6')->first()->text;
        $payload->text7 = Paragraph::where('identifier', 'company-overview-text-7')->first()->text;
        $payload->text8 = Paragraph::where('identifier', 'company-overview-text-8')->first()->text;
        $payload->image = Image::where('identifier', 'company-overview')->first();
        return $payload;
    }
    private function getVisionMision() {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'vision-mission-title')->first()->text;
        $payload->text = Paragraph::where('identifier', 'vision-mission-text')->first()->text;
        $payload->subtitle1 = Paragraph::where('identifier', 'vision-mission-subtitle-1')->first()->text;
        $payload->subtitle2 = Paragraph::where('identifier', 'vision-mission-subtitle-2')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'vision-mission-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'vision-mission-text-2')->first()->text;
        $payload->image = Image::where('identifier', 'vison-misson')->first();
        return $payload;
    }
    private function getOrganizationChart() {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'organization-chart-title')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'organization-chart-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'organization-chart-text-2')->first()->text;
        $payload->text3 = Paragraph::where('identifier', 'organization-chart-text-3')->first()->text;
        $payload->text4 = Paragraph::where('identifier', 'organization-chart-text-4')->first()->text;
        $payload->image = Image::where('identifier', 'organozation-chart')->first();
        return $payload;
    }
}
