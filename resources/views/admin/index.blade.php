@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4 mb-4">Home</h1>
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
        <div class="accordion" id="accordionHome">
            <div class="btn-group btn-group-toggle btn-block mb-4" data-toggle="buttons" role="group" aria-label="Basic example">
                <label class="btn btn-outline-secondary active">
                    <input type="radio" name="options" id="profile" checked data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true" aria-controls="collapseProfile">Profile
                </label>
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" id="scope" data-toggle="collapse" data-target="#collapseScope" aria-expanded="true" aria-controls="collapseScope">Scope of Work
                </label>
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" id="capability" data-toggle="collapse" data-target="#collapseCompanyCapability" aria-expanded="true" aria-controls="collapseCompanyCapability">Company Capability
                </label>
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" id="contact" data-toggle="collapse" data-target="#collapseContactUs" aria-expanded="true" aria-controls="collapseContactUs">Contact Us
                </label>
            </div>
            <section id="headingProfile">
                @include('admin.home.profile', ['data' => $paragraphs->profile])
            </section>
            <section id="headingScopeOfWork">
                @include('admin.home.scope-of-work', ['data' => $paragraphs->scopeOfWork])
            </section>
            <section id="headingCompanyCapability">
                @include('admin.home.company-capability', ['data' => $paragraphs->companyCapability])
            </section>
            <section id="headingContactUs">
                @include('admin.home.contact-us', ['data' => $paragraphs->contactUs])
            </section>
        </div>
    </div>
</main>

@endsection
