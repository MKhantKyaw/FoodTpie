@extends('user/layout/layout')

@section('pageTitle', 'My Profile')

@section('content')
		
		        <div class="container" align="center">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 30px">
                    <h2 class="block-title text-center">Your Profile</h2>
                </div>
                <form class="form-horizontal" name="regform" action="/update/{{ auth()->user()->id }}" method="POST">
                	@method('PATCH')
                    @csrf
                  <!-- Form 1 starts here -->
                  <div id="form1">
                  <div class="form-group">
                    <label class="control-label col-sm-3">Account Name :</label>
                    <div class="col-sm-6">
                      <input id="name" type="text"  value="{{ $users[0] -> name}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" required autocomplete="name"autofocus>
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
                      <input id="password" type="text" value="{{ $users[0] -> email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="" placeholder="gmail@user.com" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Phone number :</label>
                    <div class="col-sm-6">
                      <input id="phone_num" type="text" value="{{ $users[0] -> phone_num }}" class="form-control" name="phone_num" required autocomplete="phone_num">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Address  :</label>
                    <div class="col-sm-6">
                      <input id="address" type="text" value="{{ $users[0] -> address }}"class="form-control" name="address" required>
                    </div>
                  </div>
                </div>

                <div class="col-sm-offset-3 col-sm-10" style="margin-bottom: 30px">
                     
                      <button type="submit" name="btnregister" class="btn btn-success" onclick="">Edit</button>
                      <br>
                </div>
              </form>
        </div>
		
@endsection
@section('script')
 
  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('administrator/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('administrator/js/sb-admin-2.min.js') }}"></script>
 @endsection
