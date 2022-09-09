@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<main id="ts-content" style="padding-top: 4rem;">
    <section id="advanced-features" class="ts-block">
        <div class="container">
            <div class="ts-title text-center">
                <h2>{{ $paragraphs->companyOverview->title }}</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                    <div class="px-0 mb-4">
                        <img src="{{ asset('assets/img/'.$paragraphs->companyOverview->image->url) }}" class="w-100" alt="{{ $paragraphs->companyOverview->image->identifier }}"  style="border-radius: 10px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12" data-animate="ts-fadeInUp">
                    <p>{{ $paragraphs->companyOverview->text1 }}</p>
                    <p>{{ $paragraphs->companyOverview->text2 }}</p>
                    <p>{{ $paragraphs->companyOverview->text3 }}</p>
                    <p>{{ $paragraphs->companyOverview->text4 }}</p>
                    <p>{{ $paragraphs->companyOverview->text5 }}</p>
                    <p>{{ $paragraphs->companyOverview->text6 }}</p>
                    <p>{{ $paragraphs->companyOverview->text7 }}</p>
                    <p>{{ $paragraphs->companyOverview->text8 }}</p>
                </div>
            </div>
            <div class="form-group clearfix">
                <a role="button" class="btn btn-primary float-right" id="to-vision-mission" href="{{ route('landing-page.vision-mission') }}">{{ "Vision and Mission >" }}</a>
            </div>
        </div>
    </section>
</main>

@include('landing-page.layout.footer')
@endsection
