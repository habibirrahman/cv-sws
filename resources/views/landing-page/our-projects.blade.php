@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<main id="ts-content" style="padding-top: 3rem;">
    <section id="our-team" class="ts-block text-center">
        <div class="container">
            <div class="ts-title">
                <h2>{{ $paragraphs->ourProjectsTitle }}</h2>
            </div>
            <div class="d-flex flex-wrap">
                @foreach ($projects as $project)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                        @foreach ($project->images as $image)
                        <blockquote class="blockquote image mb-0 px-1 py-0">
                            <img id="project-{{ $image->id }}" onclick="openModalImage('project-{{ $image->id }}')" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $project->description }}">
                        </blockquote>
                        @endforeach
                    </div>
                    <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft">
                        <div class="my-2 font-weight-bold">{{ $project->name }}</div>
                        <div class="ts-opacity__80">{{ $project->location }}</div>
                        <p class="text-center">{{ $project->dateFormatted }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @if ($projects->hasPages())
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                @if ($projects->currentPage() != 1)
                @if ($projects->lastPage() > 2)
                <a class="pagination" href="{{ $projects->url('1') }}">first</a>
                @endif
                <!-- <a class="pagination" href="{{ $projects->previousPageUrl() }}">previous</a> -->
                @endif
                @for ($page = 1; $page <= $projects->lastPage(); $page++)
                    <a class="pagination {{ $projects->currentPage() == $page ? 'actived' : ''}}" href="{{ $projects->url($page) }}">{{ $page }}</a>
                    @endfor
                    @if ($projects->currentPage() != $projects->lastPage())
                    <!-- <a class="pagination" href="{{ $projects->nextPageUrl() }}">next</a> -->
                    @if ($projects->lastPage() > 2)
                    <a class="pagination" href="{{ $projects->url($projects->lastPage()) }}">last</a>
                    @endif
                    @endif
            </div>
            @endif
        </div>
    </section>
</main>

@include('landing-page.layout.footer')
@endsection
