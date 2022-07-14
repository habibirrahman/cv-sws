@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content" style="padding-top: 5rem;">
  <!--ADVANCED FEATURES ***********************************************************************************-->
  <section id="advanced-features" class="ts-block">
    <div class="container">
      <div class="ts-title text-center">
        <h2>Certifications</h2>
      </div>
      <div class="row col-sm-12 col-md-12 col-xl-10 ml-auto mr-auto" style="padding-bottom: 4rem;">
        <div class="col-sm-8 col-md-8 col-xl-8" data-animate="ts-fadeInUp">
          <div class="ts-title mb-0">
            <h2 class="mb-2">Akta Pendirian</h2>
          </div>
          <!--end ts-title-->
          <p>
            <pre style="font-size: 1rem;">
  <i>Notaris    : Wulandari Saputri, SH., M.Kn</i>
  <i>Nomor      : 1</i>
  <i>Tanggal    : 01 Februari 2018</i>
            </pre>
          </p>
        </div>
        <!--end col-xl-5-->
        <div class="col-sm-4 col-md-4 col-xl-4 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3">
            <img src="{{ asset('assets/img/800x1200.png') }}" class="mw-100" alt="">
          </div>
        </div>
        <!--end col-xl-7-->
      </div>
      <!--end row-->
      <div class="row col-sm-12 col-md-12 col-xl-10 ml-auto mr-auto" style="padding-bottom: 4rem;">
        <div class="col-sm-4 col-md-4 col-xl-4 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3 mb-4">
            <img src="{{ asset('assets/img/800x1200.png') }}" class="mw-100" alt="">
          </div>
        </div>
        <!--end col-xl-7-->
        <div class="col-sm-8 col-md-8 col-xl-8" data-animate="ts-fadeInUp">
          <div class="ts-title mb-0">
            <h2 class="mb-2">Pendaftaran di Pengadilan Negeri</h2>
          </div>
          <!--end ts-title-->
          <p>
          <pre style="font-size: 1rem;">
  <i>Kota       : Kepanjen</i>
  <i>Kelas      : Kelas I-B</i>
  <i>Nomor      : 60/CV/II/2018</i>
  <i>Tanggal    : 07 Februari 2018</i>
            </pre>
          </p>
        </div>
        <!--end col-xl-5-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--END ADVANCED FEATURES *******************************************************************************-->

</main>
<!--end #content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
@include('landing-page.layout.footer')
<!--end #footer-->
@endsection