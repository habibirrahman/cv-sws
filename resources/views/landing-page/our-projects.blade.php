@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content" style="padding-top: 3rem;">

  <!--OUR TEAM ********************************************************************************************-->
  <section id="our-team" class="ts-block text-center">
    <div class="container">
      <div class="ts-title">
        <h2>Our Projects</h2>
      </div>
      <!--end ts-title-->
      <div class="d-flex flex-wrap">
        <div class="col-6 col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-1" onclick="openModal('project-1')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Modifikasi Platform WTP N">
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-2" onclick="openModal('project-2')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Modifikasi Platform WTP N">
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft">
            <!--end image circle-->
            <div class="my-2 font-weight-bold">Modifikasi Platform WTP N</div>
            <div class="ts-opacity__80">PT. Otsuka Indonesia di Lawang</div>
            <p class="text-center">07 Nov 2018</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-6 col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-3" onclick="openModal('project-3')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Fabrikasi dan Pemasangan Ducting">
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-4" onclick="openModal('project-4')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Fabrikasi dan Pemasangan Ducting">
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".1s">
            <!--end image circle-->
            <div class="my-2 font-weight-bold">Fabrikasi dan Pemasangan Ducting</div>
            <div class="ts-opacity__80">PT. Molindo Raya Industrial Lawang</div>
            <p class="text-center">04 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-6 col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-5" onclick="openModal('project-5')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Repair Saluran Dryer 2 by Design">
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-6" onclick="openModal('project-6')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Repair Saluran Dryer 2 by Design">
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <div class="my-2 font-weight-bold">Repair Saluran Dryer 2 by Design</div>
            <div class="ts-opacity__80">PT. Molindo Raya Industrial Lawang</div>
            <p class="text-center">08 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-6 col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-7" onclick="openModal('project-7')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.">
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-8" onclick="openModal('project-8')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.">
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <div class="my-2 font-weight-bold">Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.6</div>
            <div class="ts-opacity__80">PT. Molindo Raya Industrial Lawang</div>
            <p class="text-center">12 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-6 col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-10" onclick="openModal('project-10')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Reparasi Quench Tangki Bocor DP 3">
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-11" onclick="openModal('project-11')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Reparasi Quench Tangki Bocor DP 3">
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <div class="my-2 font-weight-bold">Reparasi Quench Tangki Bocor DP 3</div>
            <div class="ts-opacity__80">PT. Molindo Raya Industrial Lawang</div>
            <p class="text-center">16 Jan 2019</p>
          </div>
          <!--end ts-element-->
        </div>
        <!--end col-md-4-->
        <div class="col-6 col-md-4">
          <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-12" onclick="openModal('project-12')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Modifikasi Saluran Pipa CWS dan CWR">
            </blockquote>
            <!--end blockquote-->
            <blockquote class="blockquote mb-0 pb-0">
              <img id="project-13" onclick="openModal('project-13')" src="{{ asset('assets/img/project-300x300.png') }}" class="mw-100 px-1 pb-2" alt="Modifikasi Saluran Pipa CWS dan CWR">
            </blockquote>
            <!--end blockquote-->
          </div>
          <div class="ts-element d-inline-block mb-4" data-animate="ts-fadeInLeft" data-delay=".2s">
            <!--end image circle-->
            <div class="my-2 font-weight-bold">Modifikasi Saluran Pipa CWS dan CWR</div>
            <div class="ts-opacity__80">PT. Molindo Raya Industrial Lawang</div>
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
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>
</main>
<!--end #content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
@include('landing-page.layout.footer')
<!--end #footer-->
@endsection

<script>
  function openModal(imgId) {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(imgId);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  }
</script>