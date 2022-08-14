<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing-page.index');
Route::get('/about-us', [LandingController::class, 'companyOverview'])->name('landing-page.company-overview');
Route::get('/about-us/vision-mission', [LandingController::class, 'visionMission'])->name('landing-page.vision-mission');
Route::get('/about-us/organization-chart', [LandingController::class, 'organizationChart'])->name('landing-page.organization-chart');
Route::get('/our-projects', [LandingController::class, 'ourProjects'])->name('landing-page.our-projects');
Route::get('/certifications', [LandingController::class, 'certifications'])->name('landing-page.certifications');
Route::get('/contact-us', [LandingController::class, 'contactUs'])->name('landing-page.contact-us');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin/profile', [AdminController::class, 'saveProfile'])->name('save.profile');
    Route::post('/admin/scope-of-work', [AdminController::class, 'saveScopeOfWork'])->name('save.scope-of-work');
    Route::post('/admin/company-capability', [AdminController::class, 'saveCompanyCapability'])->name('save.company-capability');
    Route::post('/admin/contact-us', [AdminController::class, 'saveContactUs'])->name('save.contact-us');

    Route::get('/admin/about-us', [AdminController::class, 'aboutUs'])->name('admin.about-us');
    Route::post('/admin/company-overview', [AdminController::class, 'saveCompanyOverview'])->name('save.company-overview');
    Route::post('/admin/vision-mission', [AdminController::class, 'saveVisionMission'])->name('save.vision-mission');
    Route::post('/admin/organization-chart', [AdminController::class, 'saveOrganizationChart'])->name('save.organization-chart');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
