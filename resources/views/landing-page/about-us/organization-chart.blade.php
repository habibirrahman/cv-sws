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
            <div class="row align-items-center">
                <div class="col-md-12 my-5 d-flex justify-content-center align-items-center">
                    <div class="image position-relative">
                        <img src="{{ asset('assets/img/'.$paragraphs->organizationChart->image->url) }}" class="mw-100" alt="{{ $paragraphs->organizationChart->image->identifier }}" data-animate="ts-zoomInShort" data-delay=".1s">
                    </div>
                </div>
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
