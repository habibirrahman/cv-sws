@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<main id="ts-content" style="padding-top: 7rem;">
    <section id="what-youll-get" class="ts-block text-center pt-4">
        <div class="container">
            <div class="ts-title">
                <h2>{{ $paragraphs->visionMission->title }}</h2>
            </div>
            <p>{{ $paragraphs->visionMission->text }}</p>
            <figure data-animate="ts-fadeInUp">
                <figure class="icon mb-5 p-2">
                    <img src="{{ asset('assets/img/'.$paragraphs->visionMission->image->url ) }}" class="w-100" alt="{{ $paragraphs->visionMission->image->identifier }}">
                    <!-- <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="{{ asset('assets/img/'.$paragraphs->visionMission->image->url ) }}"></div> -->
                </figure>
            </figure>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-xl-6">
                    <figure data-animate="ts-fadeInUp">
                        <h4>{{ $paragraphs->visionMission->subtitle1 }}</h4>
                        <p>{{ $paragraphs->visionMission->text1 }}</p>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-6">
                    <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                        <h4>{{ $paragraphs->visionMission->subtitle2 }}</h4>
                        <p>{{ $paragraphs->visionMission->text2 }}</p>
                    </figure>
                </div>
            </div>
            <div class="form-group clearfix">
                <a role="button" class="btn btn-primary float-left mb-4" id="to-company-overview" href="{{ route('landing-page.company-overview') }}">{{ "< Company Overview" }}</a>
                <a role="button" class="btn btn-primary float-right mb-4" id="to-organization-chart" href="{{ route('landing-page.organization-chart') }}">{{ "Organization Chart >" }}</a>
            </div>
        </div>
    </section>
</main>

@include('landing-page.layout.footer')
@endsection
