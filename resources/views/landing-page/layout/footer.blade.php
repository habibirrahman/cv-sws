<footer id="ts-footer">
    <!-- <div class="map ts-height__600px" id="map" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#1f1f1f"></div> -->
    <section id="contact" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-image="{{ asset('assets/img/footer.jpg') }}" data-bg-image-opacity="1" data-bg-color="#1f1f1f" data-mask-top-nw-color="#fff">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>{{ $paragraphs->contactUs->title }}</h3>
                    <address>
                        <figure>
                            <div>{{ $paragraphs->contactUs->address1 }}</div>
                            <div>{{ $paragraphs->contactUs->address2 }}</div>
                            <div>{{ $paragraphs->contactUs->address3 }}</div>
                            <div>{{ $paragraphs->contactUs->address4 }}</div>
                            <div>{{ $paragraphs->contactUs->address5 }}</div>
                        </figure>
                        <br>
                        <figure>
                            <div class="font-weight-bold">Email:</div>
                            <div>{{ $paragraphs->contactUs->email1 }}</div>
                            <div>{{ $paragraphs->contactUs->email2 }}</div>
                            <div>{{ $paragraphs->contactUs->email3 }}</div>
                        </figure>
                        <figure>
                            <div class="font-weight-bold">Phone:</div>
                            <div>{{ $paragraphs->contactUs->phone1 }}</div>
                            <div>{{ $paragraphs->contactUs->phone2 }}</div>
                            <div>{{ $paragraphs->contactUs->phone3 }}</div>
                            <div>{{ $paragraphs->contactUs->phone4 }}</div>
                            <div>{{ $paragraphs->contactUs->phone5 }}</div>
                        </figure>
                    </address>
                </div>
                <!-- <div class="col-md-8">
                    <h3>Contact Form</h3>
                    <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="assets/php/email.php">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="form-contact-name">Your Name *</label>
                                    <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="form-contact-email">Your Email *</label>
                                    <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form-contact-message">Your Message *</label>
                                    <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send a Message</button>
                        </div>
                        <div class="form-contact-status"></div>
                    </form>
                </div> -->
            </div>
        </div>
    </section>

    <div class="text-center text-white py-4" data-bg-color="linear-gradient(40deg, rgba(252, 231, 39, 1) 0%, rgba(228, 110, 76, 1) 10%, rgba(228, 110, 76, 1) 90%, rgba(252, 231, 39, 1) 100%)">
        @php ($year = date('Y'))
        <small>© {{ $year }} CV. Sumber Waras Sukses</small>
    </div>
</footer>
