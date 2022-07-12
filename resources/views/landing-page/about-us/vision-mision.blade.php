@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content" style="padding-top: 8rem;">
  <!--WHAT YOU'LL GET *************************************************************************************-->
  <section id="what-youll-get" class="ts-block text-center pt-4">
    <div class="container">
      <div class="ts-title">
        <h2>Vision and Mission</h2>
      </div>
      <p>
        Pada saat ini CV. Sumber Waras Sukses berkomitmen menawarkan dan memberikan solusi terbaik
        dalam melaksanakan pekerjaan sesuai kontrak yang disepakati. Komitmen perusahaan tersebut dibangun
        dengan tujuan untuk meningkatkan kepuasan pelanggan secara nyata dengan menghasilkan kontruksi
        berkualitas dan tepat waktu yang didukung dengan tenaga SDM yang profesional.
      </p>
      <!--end ts-title-->
      <div class="row">
        <div class="col-sm-6 col-md-6 col-xl-6">
          <figure data-animate="ts-fadeInUp">
            <figure class="icon mb-5 p-2">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" alt="">
              <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
            </figure>
            <h4>Vision</h4>
            <p>
              CV. Sumber Waras Sukses akan menjadi salah satu
              perusahaan kontruksi terbaik di Indonesia dengan
              penekanan laju pertumbuhan yang berkelanjutan dan
              pembangunan kompetensi melalui pengembangan
              sumber daya manusia, manajemen teknologi dan tata
              kelola perusahaan yang baik agar dapat berkontribusi
              dalam rangka pembangunan kemajuan Indonesia.
            </p>
          </figure>
        </div>
        <!--end col-xl-4-->
        <div class="col-sm-6 col-md-6 col-xl-6">
          <figure data-animate="ts-fadeInUp" data-delay="0.1s">
            <figure class="icon mb-5 p-2">
              <img src="{{ asset('assets/img/icon-50x80.png') }}" alt="">
              <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image=""></div>
            </figure>
            <h4>Mision</h4>
            <p>
              Meningkatkan daya saing perusahaan di industri jasa
              kontruksi dengan mengembangkan pelayanan dan
              teknologi terbaik kepada konsumen dalam memenuhi
              harapan pemangku kepentingan. Meningkatkan
              pelatihan SDM untuk menghasilkan tenaga kerja yang
              berkualitas dan menciptakan lingkungan kerja yang
              kondusif, serta menyediakan lapangan kerja yang luas.
            </p>
          </figure>
        </div>
        <!--end col-xl-4-->
      </div>
      <!--end row-->
      <div class="form-group clearfix">
        <a role="button" class="btn btn-primary float-left" id="form-contact-submit" href="{{ route('landing-page.company-overview') }}">Company Overview</a>
        <a role="button" class="btn btn-primary float-right" id="form-contact-submit" href="{{ route('landing-page.organization-chart') }}">Organization Chart</a>
      </div>
    </div>
    <!--end container-->
  </section>
  <!--END HOW IT WORKS ************************************************************************************-->

</main>
<!--end #content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
@include('landing-page.layout.footer')
<!--end #footer-->
@endsection