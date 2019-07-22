@extends('page/layout/layout')

@section('pageTitle', 'Home')
    
@section('content')
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Dinner with <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates:Loves " data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Good Food Equals Good Mood </h2>
                            <p>If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.</p>
                            <div class="book-btn">
                                <a href="{{ url('/menu') }}" class="table-btn hvr-underline-from-center">Order Now</a>
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

    
@endsection
