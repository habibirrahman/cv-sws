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
                <h2>Profile</h2>
            </div>
            <div class="row">
                <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
                    <p>
                        Berawal dari aktifitas dan kegiatan sebagai
                        tenaga freelance dalam bidang konstruksi,
                        mekanikal, piping, insulation pipa, sipil, dan
                        maintenance service di beberapa perusahaan
                        area Jawa Timur, maka berkumpullah kami para
                        engineer muda ini untuk memulai pengabdian
                        dan karir profesional kami sebuah melalui
                        perusahaan yang mandiri CV. Sumber Waras Sukses.
                    </p>
                    <p>
                        CV. Sumber Waras Sukses didirikan di
                        Malang pada tanggal 1 Februari 2018. Sekalipun
                        masih relatif muda, namun para engineer kami
                        adalah personil yang telah mempunyai
                        pengalaman yang sangat banyak dalam bidangbidang
                        konstruksi baja, konstruksi sipil,
                        insulation pipa, fabrikasi manufaktur, erection
                        struktur, dan pekerjaan sejenis lainnya.
                    </p>
                </div>
                <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                    <div class="pb-4 image-holder">
                        <img src="{{ asset('assets/img/profile.jpg') }}" class="mw-100" alt="">
                    </div>
                </div>
            </div>
            <p>
                Pemilihan nama CV. Sumber Waras Sukses
                sendiri berasal dari daerah tempat
                tinggal kami yaitu Sumber Waras, sedangkan
                Sukses, itulah tujuan yang ingin dicapai dari
                pendirian perusahaan ini, yaitu menjadi
                perusahaan yang didukung oleh tenaga-tenaga
                profesional yang melakukan pekerjaannya
                secara profesional.
            </p>
        </div>
    </section>
    <section id="scope-of-works" class="ts-block text-center" data-bg-color="#f6f6f6" data-mask-bottom-wn-color="#fff">
        <div class="container">
            <div class="ts-title">
                <h2>Scope of Work</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <figure data-animate="ts-fadeInUp">
                        <figure class="icon mb-5 blockquote image">
                            <img src="{{ asset('assets/img/scope-of-work-1.jpg') }}" class="w-100" alt="">
                            <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
                        </figure>
                        <h4>General Contractor</h4>
                        <p>
                            Melaksanakan pekerjaan sesuai dengan gambar perencanaan dan ketentuan mengenai
                            risalah penjelasan pekerjaan yang telah ditetapkan oleh klien. Kami selalu konsentrasi dengan
                            gambar pelaksanaan pekerjaan agar teknik pekerjaan terukur dengan baik sehingga lancar dalam
                            pelaksanaan kontruksi. Kami juga membuat laporan hasil pekerjaan dengan disiplin, tepat waktu
                            guna menjaga efisiensi agar sesuai dengan target pekerjaan.
                        </p>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                        <figure class="icon mb-5 blockquote image">
                            <img src="{{ asset('assets/img/scope-of-work-2.jpg') }}" class="w-100" alt="">
                            <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
                        </figure>
                        <h4>Steel Structure Design & Build</h4>
                        <p>
                            Kami dapat membuat gambar perencanaan pekerjaan mulai dari desain dan analisa,
                            desain kontruksi, fabrikasi maupun desain erection karena kami ahli dalam bidang konstruksi baja,
                            konstruksi sipil, insulation pipa, fabrikasi manufaktur, erection struktur, dan pekerjaan sejenis
                            lainnya maka dari itu klien akan merasa sangat terbantu dengan kami, karena dalam
                            pelaksanaannya dapat terselesaikan dengan cepat, efisien dan mudah.
                        </p>
                    </figure>
                </div>
                <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                    <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                        <figure class="icon mb-5 blockquote image">
                            <img src="{{ asset('assets/img/scope-of-work-3.jpg') }}" class="w-100" alt="">
                            <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
                        </figure>
                        <h4>Maintenance Service</h4>
                        <p>
                            Kami juga melayani pekerjaan maintenance dan service mesin-mesin, perpipaan,
                            peralatan, bangunan atau gedung, modifikasi dan pekerjaan sejenis lainnya yang termasuk dalam
                            pekerjaan pemeliharaan. Kami memberikan solusi dan umapan balik yang cepat dan tepat kepada
                            klien dalam mengatasi permasalahan yang ada dan mengutamakan profesionalisme kerja, agar
                            semua pekerjaan dapat selesai dengan tepat waktu.
                        </p>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="company-capability" class="ts-block text-center" data-mask-bottom-wn-color="#f6f6f6">
        <div class="container">
            <div class="ts-title">
                <h2>Company Capability</h2>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                        <blockquote class="blockquote">
                            <!-- <div class="ts-circle__lg" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div> -->
                            <p style="padding-top: 4rem; font-size: 1rem;">
                                Kunci perusahaan dalam bekerja yaitu terletak pada karyawan,dibuktikan dengan
                                etos kerja, profesionalisme dalam bekerja, kualifikasi teknis yang tinggi, integritas dan
                                rasa kebersamaan yang kuat, sehingga kami mampu melaksanakan pekerjaan dengan
                                baik.
                            </p>
                            <footer class="blockquote-footer">
                                <h4>TEAM KAMI ADALAH KEKUATAN KAMI</h4>
                                <!-- <h6>CEO at MarketsGuru</h6> -->
                            </footer>
                        </blockquote>
                        <blockquote class="blockquote">
                            <!-- <div class="ts-circle__lg" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div> -->
                            <p style="padding-top: 4rem; font-size: 1rem;">
                                Perusahaan kami memliki kemampuan untuk menawarkan ide kreatif dan
                                informasi yang tepat yang bertujuan untuk memberikan solusi yang optimal terhadap
                                kebutuhan klien.
                            </p>
                            <footer class="blockquote-footer">
                                <h4>SOLUSI YANG KOMPETITIF</h4>
                                <!-- <h6>CEO at MarketsGuru</h6> -->
                            </footer>
                        </blockquote>
                        <blockquote class="blockquote">
                            <!-- <div class="ts-circle__lg" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div> -->
                            <p style="padding-top: 4rem; font-size: 1rem;">
                                Perusahaan kami sangat kritis dalam mengelola proyek-proyek pekerjaan, dengan
                                mempertahankan fleksibilitas untuk merespon pekerjaan dengan cepat ,efektif dan
                                efisien. Kami telah berhasil melakukan pekerjaan dengan target yang tepat waktu dan
                                sesuai budget.
                            </p>
                            <footer class="blockquote-footer">
                                <h4>KAPASITAS DAN FLEKSIBILITAS</h4>
                                <!-- <h6>CEO at MarketsGuru</h6> -->
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
                <h2>Latest Projects</h2>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 col-xl-4 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                    <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                        @foreach ($projects[0]->images as $image)
                        <blockquote class="blockquote image mb-0 pb-0">
                            <img id="project-{{ $image->id }}" onclick="openModalImage('project-{{ $image->id }}')" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $projects[0]->description }}">
                        </blockquote>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-8 col-xl-8 mb-4" data-animate="ts-fadeInUp">
                    <div class="ts-title mb-0">
                        <h3 class="mb-2">{{ $projects[0]->name }}</h3>
                    </div>
                    <p class="mb-1">{{ $projects[0]->description }}</p>
                    {{ $projects[0]->date }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-xl-6 d-flex flex-column-reverse flex-sm-row mb-4 px-0">
                    <div class="col-md-6 col-xl-6" data-animate="ts-fadeInUp">
                        <div class="ts-title mb-0 mt-4">
                            <h4 class="mb-2">{{ $projects[1]->name }}</h4>
                        </div>
                        <p class="mb-1">{{ $projects[1]->description }}</p>
                        {{ $projects[1]->date }}
                    </div>
                    <div class="col-md-6 col-xl-6 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                        <div class="owl-carousel ts-carousel-blockquote mt-4" data-owl-dots="1" data-animate="ts-zoomInShort">
                            @foreach ($projects[1]->images as $image)
                            <blockquote class="blockquote image-sm mb-0 pb-0">
                                <img id="project-{{ $image->id }}" onclick="openModalImage('project-{{ $image->id }}')" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $projects[1]->description }}">
                            </blockquote>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-6 d-flex flex-column-reverse flex-sm-row mb-4 px-0">
                    <div class="col-md-6 col-xl-6" data-animate="ts-fadeInUp">
                        <div class="ts-title mb-0 mt-4">
                            <h4 class="mb-2">{{ $projects[2]->name }}</h4>
                        </div>
                        <p class="mb-1">{{ $projects[2]->description }}</p>
                        {{ $projects[2]->date }}
                    </div>
                    <div class="col-md-6 col-xl-6 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                        <div class="owl-carousel ts-carousel-blockquote mt-4" data-owl-dots="1" data-animate="ts-zoomInShort">
                            @foreach ($projects[2]->images as $image)
                            <blockquote class="blockquote image-sm mb-0 pb-0">
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
                <h2>Our Clients</h2>
            </div>
            <div class="d-flex flex-warp justify-content-between align-items-center ts-partners invisible-scrollbar">
                <a href="#" class="col-6 col-md-2 image-our-client">
                    <img src="{{ asset('assets/our-clients/PT Meiji Indonesian Pharmaceutical Industries.jpg') }}" alt="PT Meiji Indonesian Pharmaceutical Industries">
                </a>
                <a href="#" class="col-6 col-md-2 image-our-client">
                    <img src="{{ asset('assets/our-clients/PT Molindo Raya Industri.jpg') }}" alt="PT Molindo Raya Industri">
                </a>
                <a href="#" class="col-6 col-md-2 image-our-client">
                    <img src="{{ asset('assets/our-clients/PT Otsuka Indonesia.png') }}" alt="PT Otsuka Indonesia">
                </a>
                <a href="#" class="col-6 col-md-2 image-our-client">
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
              <h5 class="mb-0 py-3" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 50%, rgba(252, 231, 39, 1) 100%)">Basic</h5>
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
              <h5 class="mb-0 py-3" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 50%, rgba(252, 231, 39, 1) 100%)">Premium</h5>
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
              <h5 class="mb-0 py-3" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 50%, rgba(252, 231, 39, 1) 100%)">Premium</h5>
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

  <section id="subscribe" class="ts-block ts-separate-bg-element text-white" data-bg-image="{{ asset('assets/img/bg-1920x700.jpg') }}" data-bg-image-opacity=".1" style="background: linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 50%, rgba(252, 231, 39, 1) 100%)" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#fff">
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
