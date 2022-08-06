@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content" style="padding-top: 3rem;">

    <!--OUR TEAM ********************************************************************************************-->
    <section id="our-team" class="ts-block text-center">
        <div class="container">
            <div class="ts-title">
                <h2>Our Projects</h2>
            </div>
            <!--end ts-title-->
            <div class="d-flex flex-wrap">
                @foreach ($data['projects'] as $project)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                        @foreach ($project->images as $image)
                        <blockquote class="blockquote image mb-0 pb-0">
                            <img id="project-{{ $image->id }}" onclick="openModalImage('project-{{ $image->id }}')" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $project->description }}">
                        </blockquote>
                        @endforeach
                    </div>
                    <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft">
                        <div class="my-2 font-weight-bold">{{ $project->name }}</div>
                        <div class="ts-opacity__80">{{ $project->location }}</div>
                        <p class="text-center">{{ $project->date }}</p>
                    </div>
                </div>
                @endforeach

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--END OUR TEAM ****************************************************************************************-->

</main>
<!--end #content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
@include('landing-page.layout.footer')
<!--end #footer-->
@endsection
