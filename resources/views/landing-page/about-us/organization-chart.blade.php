@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content" style="padding-top: 8rem;">
  <section id="organize" class="ts-block pt-5">
    <div class="container">
      <div class="ts-title text-center">
        <h2>Organization Chart</h2>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="row align-items-center">
        <!-- <div class="col-md-4">
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
        </div> -->
        <div class="col-md-12 my-5 d-flex justify-content-center align-items-center">
          <div class="image position-relative">
            <img src="{{ asset('assets/img/800x1200.png') }}" class="mw-100" alt="" data-animate="ts-zoomInShort" data-delay=".1s">
          </div>
        </div>
        <!-- <div class="col-md-4">
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
        </div> -->
      </div>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
      <div class="form-group clearfix">
        <a role="button" class="btn btn-primary float-left" id="to-vision-mission" href="{{ route('landing-page.vision-mission') }}">{{ "< Vision and Mission" }}</a>
      </div>
    </div>
  </section>
</main>
<!--end #content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
@include('landing-page.layout.footer')
<!--end #footer-->
@endsection