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
                                    <li class="{{ (request()->is('reservation')) ? 'active' : '' }}"><a href="{{ url('/reservation') }}">Reservation</a></li>
                                    <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                                    <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact us</a></li>
                                    <ul class="nav navbar-nav navbar-right"><li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNTS  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                      <ul class="dropdown-menu" style="background-color: #686868;">
                                        <li><a href="register.html" style="color: #ffffff;">Register</a></li>
                                        <li data-toggle="modal" data-target="#myModal" ><a href="#" style="color: #ffffff;">Login</a></li>
                                        <li><a href="" style="color: #ffffff;">Log Out</a></li>
                                      </ul>
                                    </li>
                                  </ul>
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
                  <form name="loginform" id="loginform" method="POST" action="login.php">
                    <div class="form-group">
                        <label for="useremail"><span class="glyphicon glyphicon-user"></span>Email</label>
                        <input type="text" class="form-control" id="useremail" name="useremail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="userpassword"><span class="glyphicon glyphicon-eye-open"></span>Password</label>
                      <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                      <button type="submit" class="btn btn-success btn-block" onclick="loginAccount()" name="btnlogin">
                        <span class="glyphicon glyphicon-off"></span>
                        Login
                      </button>
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
