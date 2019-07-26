@extends('page/layout/layout')

@section('pageTitle', 'Contact Us')

@section('content')    

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Meal with <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates:Loves " data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Good Food Equals Good Mood </h2>
                            <p>If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Order Now</a>
                            </div>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
            Contact Us
          </h2>
                        <p class="title-caption text-center">We always looking forward your suggestion. Thank you!</p>
                    </div>

                    <div class="row">
        <!-- Contact Details -->

        <!-- / End Contact Details -->

        <!-- Contact Form -->
        <div class="contact-form col-12 col-md-6 " >
          <form id="contact-form" method="post" action="" role="form">

            <div class="form-group">
              <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
              <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
              <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
            </div>

            <div class="form-group">
              <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
            </div>


            <div class="book-btn">
                <a class="btn btn-lg btn-block hvr-underline-from-center" href="">Send</a>
            </div>

          </form>
        </div>
        <!-- ./End Contact Form -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.409065015922!2d96.13317361435068!3d16.855647188399352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb5a634a7f33%3A0x4fa272a704e38513!2sUniversity+of+Information+Technology+-+UIT!5e0!3m2!1sen!2smm!4v1535598823596" width="480" height="370" frameborder="0"   style="border:0" allowfullscreen></iframe>
      </div> <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->

    @endsection
