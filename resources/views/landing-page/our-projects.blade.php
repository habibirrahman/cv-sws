@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content" style="padding-top: 5rem;">

  <!--OUR TEAM ********************************************************************************************-->
  <section id="our-team" class="ts-block text-center">
    <div class="container">
      <div class="ts-title">
        <h2>Our Projects</h2>
      </div>
      <!--end ts-title-->
      <div class="d-flex flex-wrap">
        <div class="col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft">
            <!--end image circle-->
            <h4 class="my-2">Modifikasi Platform WTP N</h4>
            <h5 class="ts-opacity__50">PT. Otsuka Indonesia di Lawang</h5>
            <p class="text-center">07 Nov 2018</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".1s">
            <!--end image circle-->
            <h4 class="my-2">Fabrikasi dan Pemasangan Ducting</h4>
            <h5 class="ts-opacity__50">PT. Molindo Raya Industrial Lawang</h5>
            <p class="text-center">04 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <h4 class="my-2">Repair Saluran Dryer 2 by Design</h4>
            <h5 class="ts-opacity__50">PT. Molindo Raya Industrial Lawang</h5>
            <p class="text-center">08 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <h4 class="my-2">Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.6</h4>
            <h5 class="ts-opacity__50">PT. Molindo Raya Industrial Lawang</h5>
            <p class="text-center">12 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <h4 class="my-2">Reparasi Quench Tangki Bocor DP 3</h4>
            <h5 class="ts-opacity__50">PT. Molindo Raya Industrial Lawang</h5>
            <p class="text-center">16 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <div class="ts-square__xxl ts-shadow__md" data-bg-image="{{ asset('assets/img/circle-270x270.jpg') }}"></div>
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <h4 class="my-2">Modifikasi Saluran Pipa CWS dan CWR</h4>
            <h5 class="ts-opacity__50">PT. Molindo Raya Industrial Lawang</h5>
            <p class="text-center">25 Jan 2019</p>
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