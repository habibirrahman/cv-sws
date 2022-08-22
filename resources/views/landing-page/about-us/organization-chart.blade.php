@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<main id="ts-content" style="padding-top: 6rem;">
    <section id="organize" class="ts-block pt-5">
        <div class="container">
            <div class="ts-title text-center">
                <h2>{{ $paragraphs->organizationChart->title }}</h2>
            </div>
            <p>{{ $paragraphs->organizationChart->text1 }}</p>
            <p>{{ $paragraphs->organizationChart->text2 }}</p>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($images as $image)
                <div class="col-4 mb-4" style="cursor: pointer;">
                    <div class="position-relative">
                        <div class="image-holder chart-image position-absolute" style="top: 0; left: 0; z-index: 10;">
                            <img src="{{ asset('assets/organization-chart/'.$image->urlOverlay) }}" alt="{{ $image->name.' as '.$image->position }}" onclick="openModalImage('chart-{{ $image->id }}')">
                        </div>
                        <div class="image-holder">
                            <img id="chart-{{ $image->id }}" src="{{ asset('assets/organization-chart/'.$image->url) }}" alt="{{ $image->name.' as '.$image->position }}">
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mt-2">{{ $image->name }}</div>
                        <div class="mt-2"><b>{{ $image->position }}</b></div>
                    </div>
                </div>
                @endforeach
            </div>
            <p>{{ $paragraphs->organizationChart->text3 }}</p>
            <p>{{ $paragraphs->organizationChart->text4 }}</p>
            <div class="form-group clearfix">
                <a role="button" class="btn btn-primary float-left" id="to-vision-mission" href="{{ route('landing-page.vision-mission') }}">{{ "< Vision and Mission" }}</a>
            </div>
        </div>
    </section>
</main>

@include('landing-page.layout.footer')
@endsection
