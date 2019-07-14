<nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="index.html">
                                        <img src="images/FoodTPie_logo2.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="{{ (request()->is('menu')) ? 'active' : '' }}"><a href="{{ url('/menu') }}">Menu</a></li>
                                    <li class="{{ (request()->is('pricing')) ? 'active' : '' }}"><a href="{{ url('/pricing') }}">pricing</a></li>
                                    {{-- <li class="{{ (request()->is('reservation')) ? 'active' : '' }}"><a href="{{ url('/reservation') }}">Reservation</a></li> --}}
                                    <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                                    <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact us</a></li>
                                    @if(Auth::guard('web')->check()==false)
                                        <ul class="nav navbar-nav navbar-right"><li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNTS  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                          <ul class="dropdown-menu" style="background-color: #00000;">
                                            <li><a href="{{ url('registerUser') }}" style="color: #ffffff;">Register</a></li>
                                            <li data-toggle="modal" data-target="#myModal" ><a href="#" style="color: #ffffff;">Login</a></li>
                                            {{-- <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #ffffff;">Log Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            </li> --}}
                                          </ul>
                                        </li>
                                      </ul>
                                  @else
                                        <ul class="nav navbar-nav navbar-right"><li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ auth()->user()->name }}  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                            <ul class="dropdown-menu" style="background-color: #00000;">
                                                <li><a href="{{ url('/userDashboard') }}" style="color: black">User Panel</a></li>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: black;">Log Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            </li>
                                            </ul>
                                        </ul>
                                  @endif
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="padding:35px 50px;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                  <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" name="btnlogin">
                  <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                  <p>Not a member? <a href="register.php">Register Now</a></p>
                <p><a href="#">Forgot Password?</a></p>
              </div>
          </div>
        </div>
    </div>
