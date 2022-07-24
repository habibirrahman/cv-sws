@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content" style="padding-top: 4rem;">
  <!--ADVANCED FEATURES ***********************************************************************************-->
  <section id="advanced-features" class="ts-block">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
          <div class="ts-title">
            <h2>Company Overview</h2>
          </div>
          <!--end ts-title-->
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
            Pemilihan nama CV. Sumber Waras Sukses
            sendiri berasal dari daerah tempat
            tinggal kami yaitu Sumber Waras, sedangkan
            Sukses, itulah tujuan yang ingin dicapai dari
            pendirian perusahaan ini, yaitu menjadi
            perusahaan yang didukung oleh tenaga-tenaga
            profesional yang melakukan pekerjaannya
            secara profesional.
          </p>
          <!-- <ul class="ts-list-colored-bullets">
            <li>Sed a venenatis mi, vel tempus neque. </li>
            <li>Diam in hendrerit facilisis, enim diam cursus augue.</li>
            <li>Nullam tellus turpis, molestie ac urna</li>
          </ul> -->
        </div>
        <!--end col-xl-5-->
        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
          <div class="px-3 mb-4">
            <img src="{{ asset('assets/img/company-overview-650x650.png') }}" class="mw-100" alt="">
            <!-- <img src="https://placehold.jp/48/3d4070/ffffff/650x650.png?text=650%20x%20650%0ACompany%20Overview&css=%7B%22border-radius%22%3A%2215px%22%2C%22background%22%3A%22%20-webkit-linear-gradient(40deg%2C%20rgba(252%2C%20231%2C%2039%2C%201)%200%25%2C%20rgba(228%2C%20110%2C%2076%2C%201)%2050%25%2C%20rgba(252%2C%20231%2C%2039%2C%201)%20100%25)%22%7D" class="mw-100" alt=""> -->
          </div>
        </div>
        <!--end col-xl-7-->
      </div>
      <div class="row">
        <div class="col-md-12 col-xl-12" data-animate="ts-fadeInUp">
          <p>
            Selain itu, pendirian CV. Sumber Waras Sukses
            dimaksudkan untuk membuka
            lapangan kerja yang seluas-luasnya terutama
            untuk pekerja-pekerja muda di daerah tempat
            tinggal kami. Sehingga dapat
            lebih memaksimalkan kemampuan SDM para
            engineer-nya dalam melakukan pekerjaan secara
            profesional dalam bidang-bidang di atas.
          </p>
          <p>
            Dengan didukung tenaga kerja yang
            profesional dan terlatih dalam bidang
            konstruksi, mekanikal, piping, insulation pipa,
            sipil dan maintenance service kami selalu
            mengedepankan kualitas, kecepatan serta
            harga yang terbaik untuk membuat seluruh
            mitra dan klien kami merasa puas. Komitmen
            kami untuk menyelesaikan setiap karya
            kontruksi yang telah dipercayakan tidak terlepas
            dari peran setiap personil kami dalam
            melakukan perencanaan, pelaksanaan dan
            pengendalian proyek dengan berbagai
            manajemen dan metode kontruksi yang efektif,
            efisien dan selalu memperhatikan
            K3 (Keselamatan Kesehatan Kerja) karena
            sebagai wujud dari rangkaian proses
            pembelajaran dan pengalaman perusahaan
            melalui manajemen teknologi dan metode
            kontruksi yang efektif dan efisien kami siap
            memberikan pelayanan jasa kontruksi terbaik
            dalam menciptakan karya kontruksi yang lebih
            nyata.
          </p>
        </div>
      </div>
      <!--end row-->
      <div class="form-group clearfix">
        <a role="button" class="btn btn-primary float-right" id="to-vision-mission" href="{{ route('landing-page.vision-mission') }}">{{ "Vision and Mission >" }}</a>
      </div>
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