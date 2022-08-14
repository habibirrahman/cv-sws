<?php

namespace App\Http\Controllers;


use App\Models\Paragraph;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getProfile()
    {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'profile-title')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'profile-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'profile-text-2')->first()->text;
        $payload->text3 = Paragraph::where('identifier', 'profile-text-3')->first()->text;
        $payload->text4 = Paragraph::where('identifier', 'profile-text-4')->first()->text;
        $payload->image = Image::where('identifier', 'profile-1')->first();
        return $payload;
    }

    public function getScopeOfWork()
    {
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

    public function getCompanyCapability()
    {
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

    public function getContactUs()
    {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'contact-us-title')->first()->text;
        $payload->address1 = Paragraph::where('identifier', 'contact-us-address-1')->first()->text;
        $payload->address2 = Paragraph::where('identifier', 'contact-us-address-2')->first()->text;
        $payload->address3 = Paragraph::where('identifier', 'contact-us-address-3')->first()->text;
        $payload->address4 = Paragraph::where('identifier', 'contact-us-address-4')->first()->text;
        $payload->address5 = Paragraph::where('identifier', 'contact-us-address-5')->first()->text;
        $payload->email1 = Paragraph::where('identifier', 'contact-us-email-1')->first()->text;
        $payload->email2 = Paragraph::where('identifier', 'contact-us-email-2')->first()->text;
        $payload->email3 = Paragraph::where('identifier', 'contact-us-email-3')->first()->text;
        $payload->phone1 = Paragraph::where('identifier', 'contact-us-phone-1')->first()->text;
        $payload->phone2 = Paragraph::where('identifier', 'contact-us-phone-2')->first()->text;
        $payload->phone3 = Paragraph::where('identifier', 'contact-us-phone-3')->first()->text;
        $payload->phone4 = Paragraph::where('identifier', 'contact-us-phone-4')->first()->text;
        $payload->phone5 = Paragraph::where('identifier', 'contact-us-phone-5')->first()->text;
        return $payload;
    }

    public function getCompanyOverview()
    {
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
        $payload->image = Image::where('identifier', 'company-overview-1')->first();
        return $payload;
    }

    public function getVisionMission()
    {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'vision-mission-title')->first()->text;
        $payload->text = Paragraph::where('identifier', 'vision-mission-text')->first()->text;
        $payload->subtitle1 = Paragraph::where('identifier', 'vision-mission-subtitle-1')->first()->text;
        $payload->subtitle2 = Paragraph::where('identifier', 'vision-mission-subtitle-2')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'vision-mission-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'vision-mission-text-2')->first()->text;
        $payload->image = Image::where('identifier', 'vison-misson-1')->first();
        return $payload;
    }

    public function getOrganizationChart()
    {
        $payload = new Paragraph();
        $payload->title = Paragraph::where('identifier', 'organization-chart-title')->first()->text;
        $payload->text1 = Paragraph::where('identifier', 'organization-chart-text-1')->first()->text;
        $payload->text2 = Paragraph::where('identifier', 'organization-chart-text-2')->first()->text;
        $payload->text3 = Paragraph::where('identifier', 'organization-chart-text-3')->first()->text;
        $payload->text4 = Paragraph::where('identifier', 'organization-chart-text-4')->first()->text;
        $payload->image = Image::where('identifier', 'organozation-chart-1')->first();
        return $payload;
    }

    public function saveImageByIdentifier($request, $identifier, $path, $route)
    {
        foreach ($request->file() as $key => $file) {
            $extension = strtolower($file->getClientOriginalExtension());
            if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
                $file_name = $file->getClientOriginalName();
                $payload = Image::where('identifier', $identifier . '-' . substr($key, -1))->first();
                Storage::disk('public')->put($path . $file_name, file_get_contents($file));
                Storage::disk('public')->delete($path . $payload->url);
                $payload->url = $file_name;
                $payload->save();
            } else {
                return redirect()
                    ->route($route)
                    ->with('failed', 'Your image file extension is wrong, please select png, jpg, or jpeg image file');
            }
        }
    }
}
