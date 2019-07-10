@extends('page/layout/layout')

@section('pageTitle' , 'Register')

@section('content')
   

    <div id="pricing" class="pricing-main pad-top-100 pad-bottom-100" style="padding-top: 150px">
        <div class="container">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">Register Now!!!</h2>
                </div>
                <form class="form-horizontal" name="regform" action="{{ route('register') }}" method="POST">
                    @csrf
                  <!-- Form 1 starts here -->
                  <div id="form1">
                  <div class="form-group">
                    <label class="control-label col-sm-3">Account Name :</label>
                    <div class="col-sm-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Email :</label>
                    <div class="col-sm-6">
                      <input id="password" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="" placeholder="gmail@user.com" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Password :</label>
                    <div class="col-sm-6">
                      <input id ="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" placeholder="*********" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Re-confirm password:</label>
                    <div class="col-sm-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Phone number :</label>
                    <div class="col-sm-6">
                      <input id="phone_num" type="text" class="form-control" name="phone_num" required autocomplete="phone_num">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Address  :</label>
                    <div class="col-sm-6">
                      <input id="address" type="text" class="form-control" name="address" required>
                    </div>
                  </div>
                </div>

                <div class="col-sm-offset-3 col-sm-10">
                      <button type="submit" class="btn btn-default">Reset</button>
                      <button type="submit" name="btnregister" class="col-sm-offset-4 btn btn-default" onclick="">Register</button>
                      <br>
                </div>
              </form>
        </div>
        <!-- end container -->
    </div>
    <!-- end pricing-main -->
@endsection
