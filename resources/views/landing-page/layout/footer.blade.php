<!-- <div class="map ts-height__600px" id="map" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#1f1f1f"></div> -->
<!--end map-->
<section id="contact" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-image="{{ asset('assets/img/bg-desk.jpg') }}" data-bg-image-opacity=".1" data-bg-color="#1f1f1f" data-mask-bottom-wn-color="#000">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Contact Us</h3>
        <address>
          <figure>
            Jl. Sumber Waras I No.11 RT.05 RW 08
            <br>
            Kelurahan Kalirejo, Kecamatan Lawang
            <br>
            Kabupaten Malang, Provinsi Jawa Timur
          </figure>
          <br>
          <figure>
            <div class="font-weight-bold">Email:</div>
            <a href="#">sumberwaras011@gmail.com</a>
          </figure>
          <figure>
            <div class="font-weight-bold">Phone:</div>
            (0341) 430 94 25
          </figure>
          <figure>
            <div class="font-weight-bold">Malang:</div>
            (+62 ) 81 233 200 918
            <div class="font-weight-bold">Other:</div>
            (+62) 82 134 613 708
          </figure>
        </address>
        <!--end address-->
      </div>
      <!--end col-md-4-->
      <div class="col-md-8">
        <h3>Contact Form</h3>
        <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="assets/php/email.php">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="form-contact-name">Your Name *</label>
                <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
              </div>
              <!--end form-group -->
            </div>
            <!--end col-md-6 col-sm-6 -->
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="form-contact-email">Your Email *</label>
                <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
              </div>
              <!--end form-group -->
            </div>
            <!--end col-md-6 col-sm-6 -->
          </div>
          <!--end row -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form-contact-message">Your Message *</label>
                <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Your Message" required></textarea>
              </div>
              <!--end form-group -->
            </div>
            <!--end col-md-12 -->
          </div>
          <!--end row -->
          <div class="form-group clearfix">
            <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send a Message</button>
          </div>
          <!--end form-group -->
          <div class="form-contact-status"></div>
        </form>
        <!--end form-contact -->
      </div>
    </div>
    <!--end row-->
  </div>
  <!--end container-->
</section>