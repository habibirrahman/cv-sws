@extends('landing-page.layout.app')
@section('content')

<!--*********************************************************************************************************-->
<!--************ HERO ***************************************************************************************-->
<!--*********************************************************************************************************-->
<header id="ts-hero" class="ts-full-screen ts-separate-bg-element" data-mask-bottom-wn-color="#fff" data-bg-image="{{ asset('assets/img/bg-1920x1100.jpg') }}" data-bg-color="#737373" data-bg-image-opacity=".8" data-bg-parallax="scroll" data-bg-parallax-speed="3">
  @include('landing-page.layout.header')
</header>
<!--end #hero-->

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content">
  <!--ADVANCED FEATURES ***********************************************************************************-->
  <section id="advanced-features" class="ts-block">
    <div class="container">
      <div class="row pb-4">
        <div class="col-sm-8 col-md-8 col-xl-8" data-animate="ts-fadeInUp">
          <div class="ts-title">
            <h2>Akta Pendirian</h2>
          </div>
          <!--end ts-title-->
          <table class="ts-list-colored-bullets">
            <tr>
              <td width="160">Notaris</td>
              <td>:</td>
              <td>Wulandari Saputri, SH., M.Kn</td>
            </tr>
            <tr>
              <td>Nomor</td>
              <td>:</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td>:</td>
              <td>01 February 2018</td>
            </tr>
          </table>
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
      <div class="row pb-4">
        <div class="col-md-4 col-xl-4 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3 mb-4">
            <img src="{{ asset('assets/img/800x1200.png') }}" class="mw-100" alt="">
          </div>
        </div>
        <!--end col-xl-7-->
        <div class="col-md-8 col-xl-8" data-animate="ts-fadeInUp">
          <div class="ts-title">
            <h2>Pendaftaran di Pengadilan Negeri</h2>
          </div>
          <!--end ts-title-->

          <table class="ts-list-colored-bullets">
            <tr>
              <td width="160">Kota / Kelas</td>
              <td>:</td>
              <td>Kepanjen / Kelas I-B</td>
            </tr>
            <tr>
              <td>Nomor</td>
              <td>:</td>
              <td>60/CV/II/2018</td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td>:</td>
              <td>07 February 2018</td>
            </tr>
          </table>
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