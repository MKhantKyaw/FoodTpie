<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>FoodTPie</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" type="" href="images/FoodTPie_logo2.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!-- Cart Js -->
    <script src="js/cart.js" async></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
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
                                  <li><a href="index.html">Home</a></li>
                                  <li class="active"><a href="menu.html">Menu</a></li>
                                  <li><a href="pricing.html">pricing</a></li>
                                  <li><a href="reservation.html">Reservation</a></li>
                                  <li><a href="about_us.html">About</a></li>
                                  <li><a href="contact_us.html">Contact us</a></li>
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

<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                      Our Menu
                  </h2>
                  <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
              </div>
              <div class="tab-menu">
                <div class="slider slider-nav">
                    <div class="tab-title-menu">
                        <h2>MAIN DISHES</h2>
                        <p> <i class="flaticon-dinner"></i> </p>
                    </div>
                    <div class="tab-title-menu">
                        <h2>SIDE DISHES</h2>
                        <p> <i class="flaticon-canape"></i> </p>
                    </div>
                    <div class="tab-title-menu">
                        <h2>DESERTS</h2>
                        <p> <i class="flaticon-desert"></i> </p>
                    </div>
                    <div class="tab-title-menu">
                        <h2>DRINKS</h2>
                        <p> <i class="flaticon-coffee"></i> </p>
                    </div>
                </div>
                <div class="slider slider-single menu-slider">
                    
                </div>
            </div>
            <!-- end tab-menu -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end menu -->

<!-- cart Nav -->
    <div class="side-menu" id="sidenav">
      <button type="button" id="cart"  class="btn btn-primary" data-toggle="modal" data-target="#cartModal">
  Cart<i class="fas fa-shopping-cart icart "  aria-hidden="true"></i>
   <span id="itemCount"></span>
    
</button>
  </div><!-- closing of sidemenu-->
<!-- container-->

<!-- end of cart nav -->

<!-- Cart demo   -->


<!-- Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Shopping Cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class=" cart-row">
                <span class="cart-item cart-header cart-column cart-column-subh">ITEM</span>
                <span class="cart-price cart-header cart-column cart-column-subh">PRICE</span>
                <span class="cart-quantity cart-header cart-column cart-column-subh">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
      </div>
    </div>
  </div>
</div>


<div class="special-menu pad-top-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title color-white text-center"> Today's Special </h2>
                    <h5 class="title-caption text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia,nostrud exercitation ullamco. </h5>
                </div>
                <div class="special-box">
                    <div id="owl-demo">
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-1.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        ITALIAN PIZZA
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-2.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-3.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-1.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-2.jpg" alt="sp-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end special-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end special-menu -->

<div id="footer" class="footer-main">
    <div class="footer-box pad-top-70">
        <div class="container">
            <div class="row">
                <div class="footer-in-main">
                    <div class="footer-logo">
                        <div class="text-center">
                            <img src="images/FoodTPie_logo2.png" alt="logo" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-a">
                            <h3>About Us</h3>
                            <p>Food Service.<br> </p>
                            <ul class="socials-box footer-socials pull-left">
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-instagram"></i></div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- end footer-box-a -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-b">
                            <h3>New Menu</h3>
                            <ul>
                                <li><a href="#">Italian Bomba Sandwich</a></li>
                                <li><a href="#">Double Dose of Pork Belly</a></li>
                                <li><a href="#">Spicy Thai Noodles</a></li>
                                <li><a href="#">Triple Truffle Trotters</a></li>
                            </ul>
                        </div>
                        <!-- end footer-box-b -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-c">
                            <h3>Contact Us</h3>
                            <p>
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                <span><a href="https://goo.gl/maps/mFRhokdE6Sm" class="hover_footer">Parami Road, Universities' Hlaing Campus, Ward (12), Hlaing Township, Yangon, Myanmar</a></span>
                            </p>
                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span>
                                   <a href="tel: +959766410019" class="hover_footer"> +95 976 641 100 19</a>
                               </span>
                           </p>
                           <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span><a href="#">getfood@foodtpie.com</a></span>
                        </p>
                    </div>
                    <!-- end footer-box-c -->
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-d">
                        <h3>Opening Hours</h3>

                        <ul>
                            <li>
                                <p>Monday - Friday </p>
                                <span> 10:00 AM - 8:00 PM</span>
                            </li>
                            <li>
                                <p>Friday - Saturday </p>
                                <span>  11:00 AM - 5:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    <!-- end footer-box-d -->
                </div>
                <!-- end col -->
            </div>
            <!-- end footer-in-main -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div id="copyright" class="copyright-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="copy-title"> Copyright &copy; 2019 FoodTPie. All right received.<a href="" target="_blank"></a> </h6>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end copyright-main -->
</div>
<!-- end footer-box -->
</div>
<!-- end footer-main -->

<form id="order-submit-form" action="/passOrder" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" class="scrollup" style="display: none;">Scroll</a>

<script>
    var productColCls = "col-lg-6 col-md-6 col-sm-12 col-xs-12 offer"
    var productContCls = "offer-item"
    var imgCls = "img-responsive menu-item-image"
    var titleCls = "menu-item-title"
    var priceCls = "offer-price"
    var cartCls = "food_cart"
    var buttonCls = "btn  food_cart_a shop-item-button"
    var buttonDT = "Add to Cart"
    var buttonICls = "fas fa-shopping-cart"
    var buttonISty = "color: #fff;"
    var loremIp = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus."

    var prods = JSON.parse('<?php echo json_encode($products) ?>')
    var mainDishes = []
    var sideDishes = []
    var desserts = []
    var drinks = []

    for (var i = prods.length - 1; i >= 0; i--) {
        if(prods[i].category == "Main Dish"){
            mainDishes.push(prods[i])
        }else if(prods[i].category == "Side Dish"){
            sideDishes.push(prods[i])
        }else if(prods[i].category == "Dessert"){
            desserts.push(prods[i])
        }else{
            drinks.push(prods[i])
        }
    }
    //main dish
    var div = document.createElement("DIV")
     for (var i = mainDishes.length - 1; i >= 0; i--) {
        var productCol = document.createElement("DIV")
        productCol.setAttribute("class", productColCls)
        var productCont = document.createElement("DIV")
        productCont.setAttribute("class", productContCls)
        var img = document.createElement("IMG")
        img.setAttribute("src",mainDishes[i].image_url)
        img.setAttribute("alt","")
        img.setAttribute("class",imgCls)
        productCont.appendChild(img)
        var cont = document.createElement("DIV")
        var title = document.createElement("H3")
        title.setAttribute("class",titleCls)
        var titleTxt = document.createTextNode(mainDishes[i].product_name)
        title.appendChild(titleTxt)
        cont.appendChild(title)
        var description = document.createElement("P")
        var descriptionTxt = document.createTextNode(loremIp)
        description.appendChild(descriptionTxt)
        cont.appendChild(description)
        productCont.appendChild(cont)
        var price = document.createElement("SPAN")
        price.setAttribute("class",priceCls)
        var priceTxt = document.createTextNode("$"+mainDishes[i].price)
        price.appendChild(priceTxt)
        productCont.appendChild(price)
        productCol.appendChild(productCont)
        var cart = document.createElement("DIV")
        cart.setAttribute("class",cartCls)
        var button = document.createElement("BUTTON")
        button.setAttribute("class",buttonCls)
        button.setAttribute("type","button")
        button.setAttribute("data-tip",buttonDT)
        var buttonI = document.createElement("I")
        buttonI.setAttribute("class",buttonICls)
        buttonI.setAttribute("style",buttonISty)
        button.appendChild(buttonI)
        cart.appendChild(button)
        productCol.appendChild(cart)
        var idHolder = document.createElement("div")
        idHolder.setAttribute("class","product-id")
        idHolder.setAttribute("style","display:none")
        var idTxt = document.createTextNode(mainDishes[i].id)
        idHolder.appendChild(idTxt)
        productCol.appendChild(idHolder)
        div.appendChild(productCol) 
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)

    //side dish
    var div = document.createElement("DIV")
     for (var i = sideDishes.length - 1; i >= 0; i--) {
        var productCol = document.createElement("DIV")
        productCol.setAttribute("class", productColCls)
        var productCont = document.createElement("DIV")
        productCont.setAttribute("class", productContCls)
        var img = document.createElement("IMG")
        img.setAttribute("src",sideDishes[i].image_url)
        img.setAttribute("alt","")
        img.setAttribute("class",imgCls)
        productCont.appendChild(img)
        var cont = document.createElement("DIV")
        var title = document.createElement("H3")
        title.setAttribute("class",titleCls)
        var titleTxt = document.createTextNode(sideDishes[i].product_name)
        title.appendChild(titleTxt)
        cont.appendChild(title)
        var description = document.createElement("P")
        var descriptionTxt = document.createTextNode(loremIp)
        description.appendChild(descriptionTxt)
        cont.appendChild(description)
        productCont.appendChild(cont)
        var price = document.createElement("SPAN")
        price.setAttribute("class",priceCls)
        var priceTxt = document.createTextNode("$"+sideDishes[i].price)
        price.appendChild(priceTxt)
        productCont.appendChild(price)
        productCol.appendChild(productCont)
        var cart = document.createElement("DIV")
        cart.setAttribute("class",cartCls)
        var button = document.createElement("BUTTON")
        button.setAttribute("class",buttonCls)
        button.setAttribute("type","button")
        button.setAttribute("data-tip",buttonDT)
        var buttonI = document.createElement("I")
        buttonI.setAttribute("class",buttonICls)
        buttonI.setAttribute("style",buttonISty)
        button.appendChild(buttonI)
        cart.appendChild(button)
        productCol.appendChild(cart)
        var idHolder = document.createElement("div")
        idHolder.setAttribute("class","product-id")
        idHolder.setAttribute("style","display:none")
        var idTxt = document.createTextNode(sideDishes[i].id)
        idHolder.appendChild(idTxt)
        productCol.appendChild(idHolder)
        div.appendChild(productCol) 
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)

    //dessert
    var div = document.createElement("DIV")
     for (var i = desserts.length - 1; i >= 0; i--) {
        var productCol = document.createElement("DIV")
        productCol.setAttribute("class", productColCls)
        var productCont = document.createElement("DIV")
        productCont.setAttribute("class", productContCls)
        var img = document.createElement("IMG")
        img.setAttribute("src",desserts[i].image_url)
        img.setAttribute("alt","")
        img.setAttribute("class",imgCls)
        productCont.appendChild(img)
        var cont = document.createElement("DIV")
        var title = document.createElement("H3")
        title.setAttribute("class",titleCls)
        var titleTxt = document.createTextNode(desserts[i].product_name)
        title.appendChild(titleTxt)
        cont.appendChild(title)
        var description = document.createElement("P")
        var descriptionTxt = document.createTextNode(loremIp)
        description.appendChild(descriptionTxt)
        cont.appendChild(description)
        productCont.appendChild(cont)
        var price = document.createElement("SPAN")
        price.setAttribute("class",priceCls)
        var priceTxt = document.createTextNode("$"+desserts[i].price)
        price.appendChild(priceTxt)
        productCont.appendChild(price)
        productCol.appendChild(productCont)
        var cart = document.createElement("DIV")
        cart.setAttribute("class",cartCls)
        var button = document.createElement("BUTTON")
        button.setAttribute("class",buttonCls)
        button.setAttribute("type","button")
        button.setAttribute("data-tip",buttonDT)
        var buttonI = document.createElement("I")
        buttonI.setAttribute("class",buttonICls)
        buttonI.setAttribute("style",buttonISty)
        button.appendChild(buttonI)
        cart.appendChild(button)
        productCol.appendChild(cart)
        var idHolder = document.createElement("div")
        idHolder.setAttribute("class","product-id")
        idHolder.setAttribute("style","display:none")
        var idTxt = document.createTextNode(desserts[i].id)
        idHolder.appendChild(idTxt)
        productCol.appendChild(idHolder)
        div.appendChild(productCol) 
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)

    //drinks
    var div = document.createElement("DIV")
     for (var i = drinks.length - 1; i >= 0; i--) {
        var productCol = document.createElement("DIV")
        productCol.setAttribute("class", productColCls)
        var productCont = document.createElement("DIV")
        productCont.setAttribute("class", productContCls)
        var img = document.createElement("IMG")
        img.setAttribute("src",drinks[i].image_url)
        img.setAttribute("alt","")
        img.setAttribute("class",imgCls)
        productCont.appendChild(img)
        var cont = document.createElement("DIV")
        var title = document.createElement("H3")
        title.setAttribute("class",titleCls)
        var titleTxt = document.createTextNode(drinks[i].product_name)
        title.appendChild(titleTxt)
        cont.appendChild(title)
        var description = document.createElement("P")
        var descriptionTxt = document.createTextNode(loremIp)
        description.appendChild(descriptionTxt)
        cont.appendChild(description)
        productCont.appendChild(cont)
        var price = document.createElement("SPAN")
        price.setAttribute("class",priceCls)
        var priceTxt = document.createTextNode("$"+drinks[i].price)
        price.appendChild(priceTxt)
        productCont.appendChild(price)
        productCol.appendChild(productCont)
        var cart = document.createElement("DIV")
        cart.setAttribute("class",cartCls)
        var button = document.createElement("BUTTON")
        button.setAttribute("class",buttonCls)
        button.setAttribute("type","button")
        button.setAttribute("data-tip",buttonDT)
        var buttonI = document.createElement("I")
        buttonI.setAttribute("class",buttonICls)
        buttonI.setAttribute("style",buttonISty)
        button.appendChild(buttonI)
        cart.appendChild(button)
        productCol.appendChild(cart)
        var idHolder = document.createElement("div")
        idHolder.setAttribute("class","product-id")
        idHolder.setAttribute("style","display:none")
        var idTxt = document.createTextNode(drinks[i].id)
        idHolder.appendChild(idTxt)
        productCol.appendChild(idHolder)
        div.appendChild(productCol) 
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)
</script>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
</body>

</html>
