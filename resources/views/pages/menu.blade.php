@extends('page/layout/layout')

@section('pageTitle', 'Menu')

@section('content')


{{-- <div id="banner" class="banner full-screen-mode parallax">
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
--}}
<div id="menu" class="menu-main pad-top-100 pad-bottom-100" style="padding-top: 120px">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="padding-left: 40px;">
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
           <!--  <div class=" cart-row">
                <span class="cart-item cart-header cart-column cart-column-subh">ITEM</span>
                <span class="cart-price cart-header cart-column cart-column-subh">PRICE</span>
                <span class="cart-quantity cart-header cart-column cart-column-subh">QUANTITY</span>
                <span class=" cart-col-space "></span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div> -->
            <table class="table">
              <thead  class="thead-light">
                <tr class=" cart-row">
                <th scope="col"></th>
                  <th scope="col" class="cart-item cart-header ">Item </th>
                  <th scope="col" class="cart-price cart-header">Price</th>
                  <th scope="col" class="cart-quantity cart-header">Quantity</th>
              </tr>
          </thead>
          <tbody class="cart-items">
            <!-- <tr class="cart-item">          
            <td><img class="cart-item-image" src="${imageSrc}" width="100" height="100"></td>    
              <td class="cart-item-title cart-column">${title}</td>
              <td class="cart-price cart-column ">${price}</td>
              <td class="cart-quantity cart-column">            
                 <input class="cart-quantity-input" type="number" value="1">
                 <button class="btn btn-danger" type="button">x</button>
            </td>
          </tr> -->
      </tbody>
  </table>
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


{{-- <div class="special-menu pad-top-100 parallax">
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
--}}

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
        if(mainDishes[i].show == 1){
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
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)
    //side dish
    var div = document.createElement("DIV")
    for (var i = sideDishes.length - 1; i >= 0; i--) {
        if(sideDishes[i].show == 1){
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
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)
    //dessert
    var div = document.createElement("DIV")
    for (var i = desserts.length - 1; i >= 0; i--) {
        if(desserts[i].show == 1){
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
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)
    //drinks
    var div = document.createElement("DIV")
    for (var i = drinks.length - 1; i >= 0; i--) {
        if(drinks[i].show == 1){
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
    }
    document.getElementsByClassName("menu-slider")[0].appendChild(div)
</script>

<!-- ALL JS FILES -->
<script src="{{ URL::asset('js/all.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ URL::asset('js/custom.js') }}"></script>

@endsection
