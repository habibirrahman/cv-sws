@extends('landing-page.layout.app')
@section('content')

<!--*********************************************************************************************************-->
<!--************ HERO ***************************************************************************************-->
<!--*********************************************************************************************************-->
<header id="ts-hero" class="ts-full-screen ts-separate-bg-element" data-mask-bottom-wn-color="#fff" data-bg-image="{{ asset('assets/img/bg-1920x1100.jpg') }}" data-bg-color="#737373" data-bg-image-opacity=".8" data-bg-parallax="scroll" data-bg-parallax-speed="3">
  @include('landing-page.layout.header')
  <!--HERO CONTENT ****************************************************************************************-->
  <div class="container align-self-center align-items-center">
    <div class="row">
      <div class="col-md-6">
        <h3 class="ts-opacity__50">We Are Introducing</h3>
        <h1>Startup Landing Page Pack</h1>
      </div>
    </div>
    <a href="#what-youll-get" class="btn btn-primary ts-scroll">Learn More</a>
    <a href="https://vimeo.com/63502573" class="btn btn-outline-light video-popup">
      <i class="fa fa-play mr-2"></i>
      Video
    </a>
  </div>
  <!--end container-->
</header>
<!--end #hero-->

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content">
  <!--WHAT YOU'LL GET *************************************************************************************-->
  <section id="what-youll-get" class="ts-block text-center pt-4">
    <div class="container">
      <div class="ts-title">
        <h2>What You’ll Get</h2>
      </div>
      <!--end ts-title-->
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
        <!--end col-xl-4-->
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
        <!--end col-xl-4-->
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
        <!--end col-xl-4-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--END HOW IT WORKS ************************************************************************************-->

  <!--PARTNERS ********************************************************************************************-->
  <section id="partners" class="ts-block pb-3" data-bg-color="#f6f6f6" data-mask-top-nw-color="#fff">
    <!--container-->
    <div class="container">
      <!--block of logos-->
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
      <!--end logos-->
    </div>
    <!--end container-->
  </section>
  <!--END PARTNERS ****************************************************************************************-->

  <!--NUMBERS *********************************************************************************************-->
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
            <!--end ts-promo-number-->
          </div>
          <!--end col-sm-4-->
          <div class="col-sm-4">
            <div class="ts-promo-number text-center">
              <h2 data-animate="ts-zoomIn" data-delay="0.2s">$3,15 M</h2>
              <h3 class="mb-0 ts-opacity__50">Invested</h3>
              <span class="ts-promo-number-divider"></span>
            </div>
            <!--end ts-promo-number-->
          </div>
          <!--end col-sm-4-->
          <div class="col-sm-4">
            <div class="ts-promo-number text-center">
              <h2 data-animate="ts-zoomIn" data-delay="0.2s">14%</h2>
              <h3 class="mb-0 ts-opacity__50">Growth p.a.</h3>
            </div>
            <!--end ts-promo-number-->
          </div>
          <!--end col-sm-4-->
        </div>
        <!--end row-->
      </div>
      <!--end ts-promo-numbers-->
    </div>
    <!--end container-->
  </section>
  <!--END NUMBERS *****************************************************************************************-->

  <!--ADVANCED FEATURES ***********************************************************************************-->
  <section id="advanced-features" class="ts-block">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
          <div class="ts-title">
            <h2>Advanced Features</h2>
          </div>
          <!--end ts-title-->
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
        <!--end col-xl-5-->
        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3">
            <img src="{{ asset('assets/img/image-630x350.png') }}" class="mw-100" alt="">
          </div>
        </div>
        <!--end col-xl-7-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--END ADVANCED FEATURES *******************************************************************************-->

  <!--RESPONSIVE ***********************************************************************************-->
  <section id="responsive" class="ts-block">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3 mb-4">
            <img src="{{ asset('assets/img/image-630x350.png') }}" class="mw-100" alt="">
          </div>
        </div>
        <!--end col-xl-7-->
        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
          <div class="ts-title">
            <h2>Responsive</h2>
          </div>
          <!--end ts-title-->
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
        <!--end col-xl-5-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--END ADVANCED FEATURES *******************************************************************************-->

  <!--PRICING *********************************************************************************************-->
  <section id="pricing" class="ts-block ts-separate-bg-element" data-bg-image="{{ asset('assets/img/bg-1920x1400.jpg') }}" data-bg-color="#000" data-bg-image-opacity=".5" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#eaeaea">
    <div class="container">
      <div class="ts-title text-center text-white">
        <h2>Affordable Prices</h2>
      </div>
      <!--end ts-title-->
      <div class="row no-gutters ts-cards-same-height">
        <!--Price Box-->
        <div class="col-sm-4 col-lg-4">
          <div class="card text-center ts-price-box" data-animate="ts-fadeInUp">
            <div class="card-header p-0">
              <h5 class="mb-0 py-3" style="background: linear-gradient(90deg, rgba(252, 231, 39, 1) 10%, rgba(228, 110, 76, 1) 100%)">Basic</h5>
              <div class="ts-title py-5 mb-0">
                <h3 class="mb-0 font-weight-normal">Free</h3>
                <small class="ts-opacity__50">forever</small>
              </div>
            </div>
            <!--end card-header-->
            <div class="card-body p-0">
              <ul class="list-unstyled ts-list-divided">
                <li>3 Sport Activity</li>
                <li>60 Days Track Record</li>
                <li><s class="ts-opacity__50">Cloud Backup</s></li>
                <li><s class="ts-opacity__50">Ads Removed</s></li>
              </ul>
              <!--end list-->
            </div>
            <!--end card-body-->
            <div class="card-footer bg-transparent pt-0 ts-border-none">
              <a href="#" class="btn btn-outline-dark ts-btn-border-muted">Select Now</a>
            </div>
          </div>
          <!--end card-->
        </div>
        <!--end price-box col-md-4-->

        <!--Price Box Promoted-->
        <div class="col-sm-4 col-lg-4">
          <div class="card text-center ts-price-box ts-price-box__promoted" data-animate="ts-fadeInUp" data-delay="0.1s">
            <!-- <div class="card-header p-0" data-bg-color="#e46e4c"> -->
            <div class="card-header p-0">
              <h5 class="mb-0 py-3" style="background: linear-gradient(90deg, rgba(252, 231, 39, 1) 10%, rgba(228, 110, 76, 1) 100%)">Premium</h5>
              <div class="ts-title py-5 mb-0">
                <h3 class="mb-0 font-weight-normal">
                  <sup>$</sup>9,99
                </h3>
                <small class="ts-opacity__50">per month</small>
              </div>
            </div>
            <!--end card-header-->
            <div class="card-body p-0">
              <ul class="list-unstyled ts-list-divided">
                <li>3 Sport Activity</li>
                <li>60 Days Track Record</li>
                <li>Cloud Backup</li>
                <li>Ads Removed</li>
              </ul>
              <!--end list-->
            </div>
            <!--end card-body-->
            <div class="card-footer bg-transparent pt-0 ts-border-none">
              <a href="#" class="btn btn-primary">Select Now</a>
            </div>
          </div>
          <!--end card-->
        </div>
        <!--end price-box col-md-4-->

        <!--Price Box-->
        <div class="col-sm-4 col-lg-4">
          <div class="card text-center ts-price-box" data-animate="ts-fadeInUp" data-delay="0.2s">
            <div class="card-header p-0">
              <h5 class="mb-0 py-3" style="background: linear-gradient(90deg, rgba(252, 231, 39, 1) 10%, rgba(228, 110, 76, 1) 100%)">Premium</h5>
              <div class="ts-title py-5 mb-0">
                <h3 class="mb-0 font-weight-normal">
                  <sup>$</sup>19,99
                </h3>
                <small class="ts-opacity__50">per month</small>
              </div>
            </div>
            <!--end card-header-->
            <div class="card-body p-0">
              <ul class="list-unstyled ts-list-divided">
                <li>5 Sport Activity</li>
                <li>Unlimited Days Track Record</li>
                <li>Cloud Backup</li>
                <li>Ads Removed</li>
              </ul>
              <!--end list-->
            </div>
            <!--end card-body-->
            <div class="card-footer bg-transparent pt-0 ts-border-none">
              <a href="#" class="btn btn-outline-dark ts-btn-border-muted">Select Now</a>
            </div>
          </div>
          <!--end card-->
        </div>
        <!--end price-box col-md-4-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--END PRICING *****************************************************************************************-->

  <!--BUY NOW *********************************************************************************************-->
  <section id="buy-now" class="ts-block text-center pt-4" data-bg-color="#eaeaea" data-mask-bottom-wn-color="#fff">
    <div class="container">
      <div class="ts-title">
        <h2>Buy The StartUps Now!</h2>
        <h5>Curabitur tellus enim, aliquet et porttitor id suspendisse tempor turpis mattis </h5>
      </div>
      <!--end ts-title-->
      <a href="#" class="btn btn-primary">Buy Now!</a>
    </div>
  </section>
  <!--END BUY NOW *****************************************************************************************-->

  <section id="our-clients" class="ts-block text-center py-4">
    <div class="container">
      <div class="ts-title">
        <h2>Our Clients</h2>
      </div>
      <!--end ts-title-->
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote">
              <!--person image-->
              <div class="ts-circle__lg" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
              <!--end person image-->
              <!--cite-->
              <p>
                Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                uthicula sagitti
              </p>
              <!--end cite-->
              <!--person name-->
              <footer class="blockquote-footer">
                <h4>Jane Doe</h4>
                <h6>CEO at MarketsGuru</h6>
              </footer>
              <!--end person name-->
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote">
              <!--person image-->
              <div class="ts-circle__lg" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
              <!--end person image-->
              <!--cite-->
              <p>
                Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                uthicula sagitti
              </p>
              <!--end cite-->
              <!--person name-->
              <footer class="blockquote-footer">
                <h4>Jane Doe</h4>
                <h6>CEO at MarketsGuru</h6>
              </footer>
              <!--end person name-->
            </blockquote>
            <!--end blockquote-->
          </div>
          <!--end ts-carousel-blockquote-->
        </div>
        <!--end col-md-8-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--end #our-clients.ts-block-->

  <!--SUBSCRIBE *******************************************************************************************-->
  <section id="subscribe" class="ts-block ts-separate-bg-element" data-bg-image="{{ asset('assets/img/bg-1920x700.jpg') }}" data-bg-image-opacity=".1" style="background: linear-gradient(90deg, rgba(252, 231, 39, 1) 10%, rgba(228, 110, 76, 1) 100%)" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#fff">
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
            <!--end form-group-->
          </div>
          <!--end col-md-10-->
          <div class="col-md-2" style="margin-top: 30px;">
            <button type="submit" class="btn btn-dark w-100">Submit</button>
          </div>
          <!--end col-md-2-->
        </div>
        <!--end row-->
      </form>
      <!--end ts-form-->
    </div>
    <!--end container-->
  </section>
  <!--END SUBSCRIBE ***************************************************************************************-->

  <!--FEATURES ********************************************************************************************-->
  <section id="organize" class="ts-block pt-5">
    <div class="container">
      <div class="ts-title text-center">
        <h2>Organize Everything!</h2>
      </div>
      <!--end ts-title-->
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
        <!--end col-md-4-->

        <div class="col-md-4 my-5 d-flex justify-content-center align-items-center">
          <div class="image position-relative">
            <img src="{{ asset('assets/img/img-300x550.png') }}" class="mw-100" alt="" data-animate="ts-zoomInShort" data-delay=".1s">
          </div>
        </div>
        <!--end col-md-4-->

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
        <!--end col-md-4-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--END FEATURES ****************************************************************************************-->

  <img class="ts-hr-skewed" src="{{ asset('assets/img/hr-skewed.png') }}">

  <!--OUR TEAM ********************************************************************************************-->
  <section id="our-team" class="ts-block text-center">
    <div class="container">
      <div class="ts-title">
        <h2>Our Team</h2>
      </div>
      <!--end ts-title-->
      <div class="row">
        <div class="col-md-4">
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft">
            <a href="#" class="ts-circle__md position-absolute ts-right__0 ts-top__0" data-bg-color="#e46e4c">
              <div class="text-white ts-h2">
                <i class="far fa-envelope"></i>
              </div>
            </a>
            <!--end small circle-->
            <div class="ts-circle__xxl ts-shadow__md mb-4" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            <!--end image circle-->
            <h4 class="my-2">Jane Doe</h4>
            <h5 class="ts-opacity__50">Company CEO</h5>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-md-4">
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".1s">
            <a href="#" class="ts-circle__md position-absolute ts-right__0 ts-top__0" data-bg-color="#e46e4c">
              <div class="text-white ts-h2">
                <i class="far fa-envelope"></i>
              </div>
            </a>
            <!--end small circle-->
            <div class="ts-circle__xxl ts-shadow__md mb-4" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            <!--end image circle-->
            <h4 class="my-2">Peter Daniels</h4>
            <h5 class="ts-opacity__50">Marketing</h5>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-md-4">
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <a href="#" class="ts-circle__md position-absolute ts-right__0 ts-top__0" data-bg-color="#e46e4c">
              <div class="text-white ts-h2">
                <i class="far fa-envelope"></i>
              </div>
            </a>
            <!--end small circle-->
            <div class="ts-circle__xxl ts-shadow__md mb-4" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            <!--end image circle-->
            <h4 class="my-2">Suzane Smith</h4>
            <h5 class="ts-opacity__50">Support Team</h5>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
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