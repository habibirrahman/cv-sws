  <!--NAVIGATION ******************************************************************************************-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#1d1d1d" data-pages="{{ $data['menu'] }}">
    <div class="container">
      <a class="navbar-brand" href="{{ route('landing-page.index') }}">
        <img src="{{ asset('assets/img/logo-new.png') }}" alt="logo-sws" width="100">
      </a>
      <!--end navbar-brand-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--end navbar-toggler-->
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link ts-scroll {{ $data['menu'] === 'home' ? 'active' : '' }}" href="{{ route('landing-page.index') }}">Home <span class="sr-only">(current)</span></a>
          <div class="dropdown">
            <a class="nav-item nav-link ts-scroll {{ $data['menu'] === 'about-us' ? 'active' : '' }}" href="#" role="button" id="dropdownAboutUs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About Us
            </a>
            <div class="text-sm dropdown-menu" aria-labelledby="dropdownAboutUs">
              <a class="dropdown-item {{ $data['submenu'] === 'company-overview' ? 'actived' : '' }}" href="{{ route('landing-page.company-overview') }}">Company Overview</a>
              <a class="dropdown-item {{ $data['submenu'] === 'vision-mision' ? 'actived' : '' }}" href="{{ route('landing-page.vision-mission') }}">Vision and Mission</a>
              <a class="dropdown-item {{ $data['submenu'] === 'organization-chart' ? 'actived' : '' }}" href="{{ route('landing-page.organization-chart') }}">Organization Chart</a>
            </div>
          </div>
          <a class="nav-item nav-link ts-scroll {{ $data['menu'] === 'our-projects' ? 'active' : '' }}" href="{{ route('landing-page.our-projects') }}">Our Projects</a>
          <a class="nav-item nav-link ts-scroll {{ $data['menu'] === 'certifications' ? 'active' : '' }}" href="{{ route('landing-page.certifications') }}">Certifications</a>
          <!-- <a class="nav-item nav-link ts-scroll {{ $data['menu'] === 'contact-us' ? 'active' : '' }}" href="{{ route('landing-page.contact-us') }}">Contact Us</a> -->
          <a class="nav-item nav-link ts-scroll" href="#contact">Contact</a>
          <!-- <a class="ts-scroll btn btn-outline-light btn-sm m-1 px-3 ts-width__auto" href="#">
            <i class="fas fa-sign-in-alt ts-opacity__80 pr-2"></i>
            Log In
          </a>
          <a class="ts-scroll btn btn-primary btn-sm m-1 px-3 ts-width__auto" href="#">Register</a> -->
        </div>
        <!--end navbar-nav-->
      </div>
      <!--end collapse-->
    </div>
    <!--end container-->
  </nav>
  <!--end navbar-->

  <style>
    .always-show {
      opacity: 1 !important;
    }
    .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }
    .dropdown-item.actived {
      font-weight: bold;
      background-color: rgba(0, 0, 0, 0.1);
    }
  </style>