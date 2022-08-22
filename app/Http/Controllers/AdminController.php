<?php

namespace App\Http\Controllers;

use App\Models\Paragraph;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Auth $auth)
    {
        $user = auth::user();
        $paragraphs = new Paragraph();
        $paragraphs->profile = $this->getProfile();
        $paragraphs->scopeOfWork = $this->getScopeOfWork();
        $paragraphs->companyCapability = $this->getCompanyCapability();
        $paragraphs->contactUs = $this->getContactUs();
        return view('admin/index', compact('user', 'paragraphs'));
    }

    public function aboutUs(Auth $auth)
    {
        $user = auth::user();
        $paragraphs = new Paragraph();
        $paragraphs->companyOverview = $this->getCompanyOverview();
        $paragraphs->visionMission = $this->getVisionMission();
        $paragraphs->organizationChart = $this->getOrganizationChart();
        return view('admin/about-us', compact('user', 'paragraphs'));
    }

    public function saveProfile(Request $request)
    {
        dd($request->file());
        $this->saveContent($request, 'profile');
        $this->saveImageByIdentifier($request, 'profile', 'assets/img/', 'admin');
        return redirect()->route('admin')
            ->with('success', 'Profile has been updated!');;
    }

    public function saveScopeOfWork(Request $request)
    {
        $this->saveContent($request, 'scope-of-work');
        $this->saveImageByIdentifier($request, 'scope-of-work', 'assets/img/', 'admin');
        return redirect()->route('admin')
            ->with('success', 'Scope of work has been updated!');;
    }

    public function saveCompanyCapability(Request $request)
    {
        $this->saveContent($request, 'company-capability');
        return redirect()->route('admin')
            ->with('success', 'Company capability has been updated!');;
    }
    public function saveContactUs(Request $request)
    {
        $this->saveContent($request, 'contact-us');
        return redirect()->route('admin')
            ->with('success', 'Contact has been updated!');;
    }
    public function saveCompanyOverview(Request $request)
    {
        $this->saveContent($request, 'company-overview');
        $this->saveImageByIdentifier($request, 'company-overview', 'assets/img/', 'admin.about-us');
        return redirect()->route('admin.about-us')
            ->with('success', 'Company overview has been updated!');;
    }
    public function saveVisionMission(Request $request)
    {
        $this->saveContent($request, 'vision-mission');
        $this->saveImageByIdentifier($request, 'vision-mission', 'assets/img/', 'admin.about-us');
        return redirect()->route('admin.about-us')
            ->with('success', 'Vision mission has been updated!');;
    }
    public function saveOrganizationChart(Request $request)
    {
        $this->saveContent($request, 'organization-chart');
        return redirect()->route('admin.about-us')
            ->with('success', 'Organization chart has been updated!');;
    }

    public function saveContent($request, $identifier)
    {
        foreach ($request->input() as $input => $value) {
            if ($input !== '_token') {
                $payload = Paragraph::where('identifier', $identifier . '-' . $input)->first();
                $payload->text = $value;
                $payload->save();
            }
        }
    }
}
