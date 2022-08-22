@extends('landing-page.layout.app')
@section('content')

<header id="ts-hero" class="ts-full-screen ts-separate-bg-element" data-mask-bottom-wn-color="#fff" data-bg-image="{{ asset('assets/img/hero.jpg') }}" data-bg-color="#737373" data-bg-image-opacity=".8" data-bg-parallax="scroll" data-bg-parallax-speed="3">
    @include('landing-page.layout.header')
    <div class="container align-self-center align-items-center">
        <div class="row">
            <div class="col-md-6">
                <h3 class="ts-opacity__50">We Are Introducing</h3>
                <h1>CV. Sumber Waras Suskes</h1>
            </div>
        </div>
        <!-- <a href="#what-youll-get" class="btn btn-primary ts-scroll">Learn More</a>
    <a href="https://vimeo.com/63502573" class="btn btn-outline-light video-popup">
      <i class="fa fa-play mr-2"></i>
      Video
    </a> -->
    </div>
</header>

<main id="ts-content">
    <section id="profile" class="ts-block" data-mask-bottom-wn-color="#f6f6f6">
        <div class="container">
            <div class="ts-title">
                <h2>{{ $paragraphs->profile->title }}</h2>
            </div>
            <div class="row">
                <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
                    <p>{{ $paragraphs->profile->text1 }}</p>
                    <p>{{ $paragraphs->profile->text2 }}</p>
                </div>
                <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                    <div class="pb-4 image-holder">
                        <img src="{{ asset('assets/img/'.$paragraphs->profile->image->url) }}" class="mw-100" alt="{{ $paragraphs->profile->image->identifier }}">
                    </div>
                </div>
            </div>
            <p>{{ $paragraphs->profile->text3 }}</p>
            <p>{{ $paragraphs->profile->text4 }}</p>
        </div>
    </section>
    <section id="scope-of-works" class="ts-block text-center" data-bg-color="#f6f6f6" data-mask-bottom-wn-color="#fff">
        <div class="container">
            <div class="ts-title">
                <h2>{{ $paragraphs->scopeOfWork->title }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <figure data-animate="ts-fadeInUp">
                        <figure class="icon mb-5 blockquote image">
                            <img src="{{ asset('assets/img/'.$paragraphs->scopeOfWork->image1->url) }}" class="w-100" alt="{{ $paragraphs->scopeOfWork->image1->identifier }}">
                        </figure>
                        <h4>{{ $paragraphs->scopeOfWork->subtitle1 }}</h4>
                        <p>{{ $paragraphs->scopeOfWork->text1 }}</p>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                        <figure class="icon mb-5 blockquote image">
                            <img src="{{ asset('assets/img/'.$paragraphs->scopeOfWork->image2->url) }}" class="w-100" alt="{{ $paragraphs->scopeOfWork->image2->identifier }}">
                        </figure>
                        <h4>{{ $paragraphs->scopeOfWork->subtitle2 }}</h4>
                        <p>{{ $paragraphs->scopeOfWork->text2 }}</p>
                    </figure>
                </div>
                <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                    <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                        <figure class="icon mb-5 blockquote image">
                            <img src="{{ asset('assets/img/'.$paragraphs->scopeOfWork->image3->url) }}" class="w-100" alt="{{ $paragraphs->scopeOfWork->image3->identifier }}">
                        </figure>
                        <h4>{{ $paragraphs->scopeOfWork->subtitle3 }}</h4>
                        <p>{{ $paragraphs->scopeOfWork->text3 }}</p>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="company-capability" class="ts-block text-center" data-mask-bottom-wn-color="#f6f6f6">
        <div class="container">
            <div class="ts-title">
                <h2>{{ $paragraphs->companyCapability->title }}</h2>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                        <blockquote class="blockquote">
                            <p style="padding-top: 4rem; font-size: 1rem;">{{ $paragraphs->companyCapability->text1 }}</p>
                            <footer class="blockquote-footer">
                                <h4>{{ $paragraphs->companyCapability->subtitle1 }}</h4>
                            </footer>
                        </blockquote>
                        <blockquote class="blockquote">
                            <p style="padding-top: 4rem; font-size: 1rem;">{{ $paragraphs->companyCapability->text2 }}</p>
                            <footer class="blockquote-footer">
                                <h4>{{ $paragraphs->companyCapability->subtitle2 }}</h4>
                            </footer>
                        </blockquote>
                        <blockquote class="blockquote">
                            <p style="padding-top: 4rem; font-size: 1rem;">{{ $paragraphs->companyCapability->text3 }}</p>
                            <footer class="blockquote-footer">
                                <h4>{{ $paragraphs->companyCapability->subtitle3 }}</h4>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (count($projects) > 0)
    <section id="project-review" class="ts-block" data-bg-color="#f6f6f6" data-mask-bottom-wn-color="#fff">
        <div class="container">
            <div class="ts-title text-center">
                <h2>{{ $paragraphs->latestProjectsTitle }}</h2>
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-md-4 text-center mb-2" data-animate="ts-fadeInUp" data-delay="0.1s">
                    <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                        @foreach ($projects[0]->images as $image)
                        <blockquote class="blockquote image mb-0 px-1 py-0">
                            <img id="project-{{ $image->id }}" onclick="openModalImage('project-{{ $image->id }}')" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $projects[0]->description }}">
                        </blockquote>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6 col-md-8" data-animate="ts-fadeInUp">
                    <div class="ts-title mb-0">
                        <h3 class="mb-2">{{ $projects[0]->name }}</h3>
                    </div>
                    <p class="mb-1">{{ $projects[0]->description }}</p>
                    {{ $projects[0]->dateFormatted }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex flex-column-reverse flex-sm-row mb-4 px-0">
                    <div class="col-sm-6" data-animate="ts-fadeInUp">
                        <div class="ts-title mb-0">
                            <h4 class="mb-2">{{ $projects[1]->name }}</h4>
                        </div>
                        <p class="mb-1">{{ $projects[1]->description }}</p>
                        {{ $projects[1]->dateFormatted }}
                    </div>
                    <div class="col-md-6 text-center mb-2" data-animate="ts-fadeInUp" data-delay="0.1s">
                        <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                            @foreach ($projects[1]->images as $image)
                            <blockquote class="blockquote image-sm mb-0 px-1 py-0">
                                <img id="project-{{ $image->id }}" onclick="openModalImage('project-{{ $image->id }}')" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $projects[1]->description }}">
                            </blockquote>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-flex flex-column-reverse flex-sm-row mb-4 px-0">
                    <div class="col-md-6" data-animate="ts-fadeInUp">
                        <div class="ts-title mb-0">
                            <h4 class="mb-2">{{ $projects[2]->name }}</h4>
                        </div>
                        <p class="mb-1">{{ $projects[2]->description }}</p>
                        {{ $projects[2]->dateFormatted }}
                    </div>
                    <div class="col-md-6 text-center mb-2" data-animate="ts-fadeInUp" data-delay="0.1s">
                        <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                            @foreach ($projects[2]->images as $image)
                            <blockquote class="blockquote image-sm mb-0 px-1 py-0">
                                <img id="project-{{ $image->id }}" onclick="openModalImage('project-{{ $image->id }}')" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $projects[2]->description }}">
                            </blockquote>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <a role="button" class="float-right" id="to-our-projects" href="{{ route('landing-page.our-projects') }}">
                    <h5>Read More ...</h5>
                </a>
            </div>
        </div>
    </section>
    @endif
    <section id="our-clients" class="ts-block text-center pb-5" data-mask-top-nw-color="#fff">
        <div class="container">
            <div class="ts-title mb-3">
                <h2>{{ $paragraphs->ourClientsTitle }}</h2>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center ts-partners">
                <a href="#" class="col-6 col-md-2" title="PT Meiji Indonesian Pharmaceutical Industries">
                    <img src="{{ asset('assets/our-clients/PT Meiji Indonesian Pharmaceutical Industries.jpg') }}" alt="PT Meiji Indonesian Pharmaceutical Industries">
                </a>
                <a href="#" class="col-6 col-md-2" title="PT Molindo Raya Industri">
                    <img src="{{ asset('assets/our-clients/PT Molindo Raya Industri.jpg') }}" alt="PT Molindo Raya Industri">
                </a>
                <a href="#" class="col-6 col-md-2" title="PT Otsuka Indonesia">
                    <img src="{{ asset('assets/our-clients/PT Otsuka Indonesia.png') }}" alt="PT Otsuka Indonesia">
                </a>
                <a href="#" class="col-6 col-md-2" title="PT Widatra Bhakti">
                    <img src="{{ asset('assets/our-clients/PT Widatra Bhakti.png') }}" alt="PT Widatra Bhakti">
                </a>
            </div>

        </div>

    </section>

    <!-- <section id="what-youll-get" class="ts-block text-center pt-4">
    <div class="container">
      <div class="ts-title">
        <h2>What You’ll Get</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-xl-4">
          <figure data-animate="ts-fadeInUp">
            <figure class="icon mb-5 p-2">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" alt="">
              <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
            </figure>
            <h4>Monitor Your Activity</h4>
            <p>
              Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
            </p>
          </figure>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-4">
          <figure data-animate="ts-fadeInUp" data-delay="0.1s">
            <figure class="icon mb-5 p-2">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" alt="">
              <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
            </figure>
            <h4>Analyze Your Results</h4>
            <p>
              Curabitur tellus enim, aliquet et porttitor id, accumsan at nulla. Praesent vestibulum
            </p>
          </figure>
        </div>
        <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
          <figure data-animate="ts-fadeInUp" data-delay="0.2s">
            <figure class="icon mb-5 p-2">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" alt="">
              <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
            </figure>
            <h4>Get Better!</h4>
            <p>
              In non turpis convallis nunc fermentum porttitor sed quis sapien. Etiam et neque
            </p>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section id="partners" class="ts-block pb-3" data-bg-color="#f6f6f6" data-mask-top-nw-color="#fff">

    <div class="container">

      <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners ">
        <a href="#">
          <img src="{{ asset('assets/img/logo-150x30.png') }}" alt="">
        </a>
        <a href="#">
          <img src="{{ asset('assets/img/logo-150x30.png') }}" alt="">
        </a>
        <a href="#">
          <img src="{{ asset('assets/img/logo-150x30.png') }}" alt="">
        </a>
        <a href="#">
          <img src="{{ asset('assets/img/logo-150x30.png') }}" alt="">
        </a>
        <a href="#">
          <img src="{{ asset('assets/img/logo-150x30.png') }}" alt="">
        </a>
      </div>

    </div>

  </section>

  <section id="numbers" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-image="{{ asset('assets/img/bg-1920x640.jpg') }}" data-bg-image-opacity=".5" data-bg-color="#2d2d2d" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#f6f6f6" data-mask-bottom-wn-color="#fff">
    <div class="container">
      <div class="ts-promo-numbers">
        <div class="row">
          <div class="col-sm-4">
            <div class="ts-promo-number text-center">
              <h2 data-animate="ts-zoomIn">1,200+</h2>
              <h3 class="mb-0 ts-opacity__50">Clients</h3>
              <span class="ts-promo-number-divider"></span>
            </div>

          </div>

          <div class="col-sm-4">
            <div class="ts-promo-number text-center">
              <h2 data-animate="ts-zoomIn" data-delay="0.2s">$3,15 M</h2>
              <h3 class="mb-0 ts-opacity__50">Invested</h3>
              <span class="ts-promo-number-divider"></span>
            </div>

          </div>

          <div class="col-sm-4">
            <div class="ts-promo-number text-center">
              <h2 data-animate="ts-zoomIn" data-delay="0.2s">14%</h2>
              <h3 class="mb-0 ts-opacity__50">Growth p.a.</h3>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section id="advanced-features" class="ts-block">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
          <div class="ts-title">
            <h2>Advanced Features</h2>
          </div>

          <p>
            Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
            Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
          </p>
          <ul class="ts-list-colored-bullets">
            <li>Sed a venenatis mi, vel tempus neque. </li>
            <li>Diam in hendrerit facilisis, enim diam cursus augue.</li>
            <li>Nullam tellus turpis, molestie ac urna</li>
          </ul>
        </div>

        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3">
            <img src="{{ asset('assets/img/image-630x350.png') }}" class="mw-100" alt="">
          </div>
        </div>

      </div>

    </div>

  </section>

  <section id="responsive" class="ts-block">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3 mb-4">
            <img src="{{ asset('assets/img/image-630x350.png') }}" class="mw-100" alt="">
          </div>
        </div>

        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
          <div class="ts-title">
            <h2>Responsive</h2>
          </div>

          <p>
            Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
            Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
          </p>
          <ul class="ts-list-colored-bullets">
            <li>Sed a venenatis mi, vel tempus neque. </li>
            <li>Diam in hendrerit facilisis, enim diam cursus augue.</li>
            <li>Nullam tellus turpis, molestie ac urna</li>
          </ul>
        </div>

      </div>

    </div>

  </section>

  <section id="pricing" class="ts-block ts-separate-bg-element" data-bg-image="{{ asset('assets/img/bg-1920x1400.jpg') }}" data-bg-color="#000" data-bg-image-opacity=".5" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#eaeaea">
    <div class="container">
      <div class="ts-title text-center text-white">
        <h2>Affordable Prices</h2>
      </div>

      <div class="row no-gutters ts-cards-same-height">

        <div class="col-sm-4 col-lg-4">
          <div class="card text-center ts-price-box" data-animate="ts-fadeInUp">
            <div class="card-header p-0">
              <h5 class="mb-0 py-3" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 30%, rgba(228, 110, 76, 1) 70%, rgba(252, 231, 39, 1) 100%)">Basic</h5>
              <div class="ts-title py-5 mb-0">
                <h3 class="mb-0 font-weight-normal">Free</h3>
                <small class="ts-opacity__50">forever</small>
              </div>
            </div>

            <div class="card-body p-0">
              <ul class="list-unstyled ts-list-divided">
                <li>3 Sport Activity</li>
                <li>60 Days Track Record</li>
                <li><s class="ts-opacity__50">Cloud Backup</s></li>
                <li><s class="ts-opacity__50">Ads Removed</s></li>
              </ul>

            </div>

            <div class="card-footer bg-transparent pt-0 ts-border-none">
              <a href="#" class="btn btn-outline-dark ts-btn-border-muted">Select Now</a>
            </div>
          </div>

        </div>



        <div class="col-sm-4 col-lg-4">
          <div class="card text-center ts-price-box ts-price-box__promoted" data-animate="ts-fadeInUp" data-delay="0.1s">

            <div class="card-header p-0">
              <h5 class="mb-0 py-3" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 30%, rgba(228, 110, 76, 1) 70%, rgba(252, 231, 39, 1) 100%)">Premium</h5>
              <div class="ts-title py-5 mb-0">
                <h3 class="mb-0 font-weight-normal">
                  <sup>$</sup>9,99
                </h3>
                <small class="ts-opacity__50">per month</small>
              </div>
            </div>

            <div class="card-body p-0">
              <ul class="list-unstyled ts-list-divided">
                <li>3 Sport Activity</li>
                <li>60 Days Track Record</li>
                <li>Cloud Backup</li>
                <li>Ads Removed</li>
              </ul>

            </div>

            <div class="card-footer bg-transparent pt-0 ts-border-none">
              <a href="#" class="btn btn-primary">Select Now</a>
            </div>
          </div>

        </div>



        <div class="col-sm-4 col-lg-4">
          <div class="card text-center ts-price-box" data-animate="ts-fadeInUp" data-delay="0.2s">
            <div class="card-header p-0">
              <h5 class="mb-0 py-3" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 30%, rgba(228, 110, 76, 1) 70%, rgba(252, 231, 39, 1) 100%)">Premium</h5>
              <div class="ts-title py-5 mb-0">
                <h3 class="mb-0 font-weight-normal">
                  <sup>$</sup>19,99
                </h3>
                <small class="ts-opacity__50">per month</small>
              </div>
            </div>

            <div class="card-body p-0">
              <ul class="list-unstyled ts-list-divided">
                <li>5 Sport Activity</li>
                <li>Unlimited Days Track Record</li>
                <li>Cloud Backup</li>
                <li>Ads Removed</li>
              </ul>

            </div>

            <div class="card-footer bg-transparent pt-0 ts-border-none">
              <a href="#" class="btn btn-outline-dark ts-btn-border-muted">Select Now</a>
            </div>
          </div>

        </div>

      </div>

    </div>

  </section>

  <section id="buy-now" class="ts-block text-center pt-4" data-bg-color="#eaeaea" data-mask-bottom-wn-color="#fff">
    <div class="container">
      <div class="ts-title">
        <h2>Buy The StartUps Now!</h2>
        <h5>Curabitur tellus enim, aliquet et porttitor id suspendisse tempor turpis mattis </h5>
      </div>

      <a href="#" class="btn btn-primary">Buy Now!</a>
    </div>
  </section>

  <section id="our-clients" class="ts-block text-center py-4">
    <div class="container">
      <div class="ts-title">
        <h2>Our Clients</h2>
      </div>

      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote">

              <div class="ts-circle__lg" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>


              <p>
                Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                uthicula sagitti
              </p>


              <footer class="blockquote-footer">
                <h4>Jane Doe</h4>
                <h6>CEO at MarketsGuru</h6>
              </footer>

            </blockquote>

            <blockquote class="blockquote">

              <div class="ts-circle__lg" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>


              <p>
                Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                uthicula sagitti
              </p>


              <footer class="blockquote-footer">
                <h4>Jane Doe</h4>
                <h6>CEO at MarketsGuru</h6>
              </footer>

            </blockquote>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section id="subscribe" class="ts-block ts-separate-bg-element text-white" data-bg-image="{{ asset('assets/img/bg-1920x700.jpg') }}" data-bg-image-opacity=".1" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 30%, rgba(228, 110, 76, 1) 70%, rgba(252, 231, 39, 1) 100%)" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#fff">
    <div class="container">
      <h3>Subscribe For The Latest News!</h3>
      <form class="ts-form ts-form-email ts-labels-inside-input" data-php-path="assets/php/email.php">
        <div class="row">
          <div class="col-md-10">
            <label for="email-subscribe">Email address</label>
            <div class="form-group mb-0">
              <input type="email" class="form-control" id="email-subscribe" aria-describedby="subscribe" name="email" placeholder="" required>
              <small class="form-text mt-2 ts-opacity__50">*You’ll get only relevant news once a week</small>
            </div>

          </div>

          <div class="col-md-2" style="margin-top: 30px;">
            <button type="submit" class="btn btn-dark w-100">Submit</button>
          </div>

        </div>

      </form>

    </div>

  </section>

  <section id="organize" class="ts-block pt-5">
    <div class="container">
      <div class="ts-title text-center">
        <h2>Organize Everything!</h2>
      </div>

      <div class="row align-items-center">
        <div class="col-md-4">
          <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp">
            <figure class="icon">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" class="" alt="">
            </figure>
            <h4 class="mb-2">Monitor Your Activity</h4>
            <p>
              Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
            </p>
          </figure>
          <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
            <figure class="icon">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" class="" alt="">
            </figure>
            <h4 class="mb-2">Analyze Your Results</h4>
            <p>
              Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
            </p>
          </figure>
          <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
            <figure class="icon">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" class="" alt="">
            </figure>
            <h4 class="mb-2">Get Better!</h4>
            <p>
              Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
            </p>
          </figure>
        </div>


        <div class="col-md-4 my-5 d-flex justify-content-center align-items-center">
          <div class="image position-relative">
            <img src="{{ asset('assets/img/img-300x550.png') }}" class="mw-100" alt="" data-animate="ts-zoomInShort" data-delay=".1s">
          </div>
        </div>


        <div class="col-md-4">
          <figure class="ts-xs-text-center" data-animate="ts-fadeInUp">
            <figure class="icon">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" class="" alt="">
            </figure>
            <h4 class="mb-2">Support Chat</h4>
            <p>
              Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
            </p>
          </figure>
          <figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
            <figure class="icon">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" class="" alt="">
            </figure>
            <h4 class="mb-2">Runs on Any Place</h4>
            <p>
              Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
            </p>
          </figure>
          <figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
            <figure class="icon">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" class="" alt="">
            </figure>
            <h4 class="mb-2">Video Tutorials</h4>
            <p>
              Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
            </p>
          </figure>
        </div>

      </div>

    </div>

  </section>

  <img class="ts-hr-skewed" src="{{ asset('assets/img/hr-skewed.png') }}">

  <section id="our-team" class="ts-block text-center">
    <div class="container">
      <div class="ts-title">
        <h2>Our Team</h2>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft">
            <a href="#" class="ts-circle__md position-absolute ts-right__0 ts-top__0" data-bg-color="#e46e4c">
              <div class="text-white ts-h2">
                <i class="far fa-envelope"></i>
              </div>
            </a>

            <div class="ts-circle__xxl ts-shadow__md mb-4" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>

            <h4 class="my-2">Jane Doe</h4>
            <h5 class="ts-opacity__50">Company CEO</h5>
          </div>

        </div>

        <div class="col-md-4">
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".1s">
            <a href="#" class="ts-circle__md position-absolute ts-right__0 ts-top__0" data-bg-color="#e46e4c">
              <div class="text-white ts-h2">
                <i class="far fa-envelope"></i>
              </div>
            </a>

            <div class="ts-circle__xxl ts-shadow__md mb-4" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>

            <h4 class="my-2">Peter Daniels</h4>
            <h5 class="ts-opacity__50">Marketing</h5>
          </div>

        </div>

        <div class="col-md-4">
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <a href="#" class="ts-circle__md position-absolute ts-right__0 ts-top__0" data-bg-color="#e46e4c">
              <div class="text-white ts-h2">
                <i class="far fa-envelope"></i>
              </div>
            </a>

            <div class="ts-circle__xxl ts-shadow__md mb-4" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>

            <h4 class="my-2">Suzane Smith</h4>
            <h5 class="ts-opacity__50">Support Team</h5>
          </div>

        </div>

      </div>

    </div>

  </section> -->

</main>

@include('landing-page.layout.footer')
@endsection
