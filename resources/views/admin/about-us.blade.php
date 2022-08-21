@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4 mb-4">About</h1>
        @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
        @endif
        @if (session('failed'))
        <div class="alert alert-danger mb-4">
            {{ session('failed') }}
        </div>
        @endif
        <div class="accordion" id="accordionAbout">
            <div class="btn-group btn-group-toggle btn-block mb-4" data-toggle="buttons" role="group" aria-label="Basic example">
                <label class="btn btn-outline-secondary active">
                    <input type="radio" name="options" id="company" checked data-toggle="collapse" data-target="#collapseCompanyOverview" aria-expanded="true" aria-controls="collapseCompanyOverview">Company Overview
                </label>
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" id="visionMission" data-toggle="collapse" data-target="#collapseVisionMission" aria-expanded="true" aria-controls="collapseVisionMission">Vision Mission
                </label>
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" id="organization" data-toggle="collapse" data-target="#collapseOrganizationChart" aria-expanded="true" aria-controls="collapseOrganizationChart">Organization Chart
                </label>
            </div>
            <section id="headingCompanyOverview">
                @include('admin.about.company-overview', ['data' => $paragraphs->companyOverview])
            </section>
            <section id="headingVisionMission">
                @include('admin.about.vision-mission', ['data' => $paragraphs->visionMission])
            </section>
            <section id="headingOrganizationChart">
                @include('admin.about.organization-chart', ['data' => $paragraphs->organizationChart])
            </section>
        </div>
    </div>
</main>

@endsection
