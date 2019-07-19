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
    <link rel="shortcut icon" type="" href="{{ URL::asset('images/FoodTPie_logo2.png') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{ URL::asset('css/colors/orange.css') }}" />

    <!-- Modernizer -->
    <script src="{{ URL::asset('js/modernizer.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ URL::asset('js/cart.js') }}" async></script>
    <script src="{{ URL::asset('js/checkout.js') }}"></script>

    <!-- ALL JS FILES -->
    <script src="{{ URL::asset('js/all.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    <script src="{{ URL::asset('/path/to/jquery.cookie.js') }}"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AcNJcmeW59L94YUUw7eVKhsgrB7oIZFu9z8-9md-8ni3Sd_rhTcsdX-fY7PVsXD5nYKuVG-VSsz0MdPx"></script>

</head>
<body class="wave-bg">
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top2">
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
                                    <a class="navbar-b   js-scroll-trigger logo-header" href="index.html">
                                        <img src="images/FoodTPie_logo2.png" class="img-responsive" alt="logo">
                                    </a>
                                </div>
                            </div>                          
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

    <div class="container-fluid ">
        <div class="container form-bo">
            <div class="row">
                <div class="col-12 confirm-content">
                    <div class="col-md-4 col-sm-12 ">
                        <h1 class="abs">Order <br/>Confirmation</h1>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <form method="POST" action="/orders" id="ck-form">
                            @csrf
                            <div class="sub-h">
                                <h3>Deliver to</h3>
                            </div>
                            <div class="form-div">
                                <div class="col-md-6 in-pudding">
                                    <input type="text" name="customer_name" placeholder="Name" class="inp"
                                        @if(Auth::guard('web')->check())
                                            value="{{ auth()->user()->name }}" 
                                        @endif
                                    >
                                </div>
                                <div class="col-md-6 in-pudding">
                                    <input type="tel" name="phone_num" aria-label="Please enter your phone number" placeholder="Phone No.(ex. 09-123 456 7890)" class="inp"
                                        @if(Auth::guard('web')->check())
                                            value="{{ auth()->user()->phone_num }}" 
                                        @endif
                                    >
                                </div>
                            </div>
                            <div class="sub-h">
                                <h3>Address</h3>
                            </div>
                            <div id="formgp" class="col-md-12 in-pudding">
                                <label for="exampleFormControlTextarea1">Address:</label>
                                <textarea class=" inp" name="order_location" id="exampleFormControlTextarea1" placeholder="Address" rows="3">@if(Auth::guard('web')->check()){{ auth()->user()->address }}@endif</textarea>
                            </div>
                            <div id="formgp" class="col-md-12 in-pudding">
                                <label for="exampleFormControlTextarea1">Order Remarks:</label>
                                <input type="text" name="remark" class=" inp" placeholder="Order Remarks">
                            </div>
                            <input type="text" style="display: none" name="order_date" placeholder="order_date" value="{{ date('Y-m-d') }}">
                            <input type="text" class="form-status" style="display: none" name="status" placeholder="order_date" value="on cash">

                            <div id="formgp" class="col-md-12"> 
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Cash_on_delivery" value="option1" checked onclick="cashPayClicked()">
                                    <label class="check-label " for="Cash_on_delivery">Cash on Delivery</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Online Payment" value="option2" onclick="onlinePayClicked()">
                                    <label class="check-label" for="Online Payment">Online Payment</label>
                                </div>                              
                            </div>
                            <div id="formgp" class="col-md-12 text-center subCanBut">
                            <button type="button" class="btn btn-primary btn-lg btn-c btn-order-submit">Submit Order</button>            
                            <button type="button" class="btn btn-secondary btn-lg btn-c">Cancel</button>
                        </div>
                        <div id="paypal-button-container" style="display: none"></div>
                        <div id="server-total" style="display: none;">{{ $totalPrice }}</div>
                        <script>
                              paypal.Buttons({
                                createOrder: function(data, actions) {
                                  return actions.order.create({
                                    purchase_units: [{
                                      amount: {
                                        value: document.getElementById('server-total').innerHTML
                                      }
                                    }]
                                  });
                                },
                                onApprove: function(data, actions) {
                                  return actions.order.capture().then(function(details) {
                                    alert('Transaction completed by ' + details.payer.name.given_name);
                                    onlinePay();
                                    // Call your server to save the transaction
                                    return fetch('/paypal-transaction-complete', {
                                      method: 'post',
                                      headers: {
                                        'content-type': 'application/json'
                                      },
                                      body: JSON.stringify({
                                        orderID: data.orderID
                                      })
                                    });
                                  });
                                }
                              }).render('#paypal-button-container');
                        </script>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 confirm-content">
                    <div class="sub-h">
                                <h3>Order Summary</h3>
                            </div>
                    <table class="table table-hover table-color">
                        <thead class="ck-th">
                            <tr>            
                                <th scope="col">#</th>      
                                <th>    </th>           
                                <th scope="col">Item</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quality</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody class="ck-items">

                            <!-- cart item will be dislay here -->

                            {{-- <tr class="ck-tr">
                                <th scope="row">1</th>
                                <td><button class="btn btn-danger" type="button">x</button></td>
                                <td class="ck-item">Milk</td>
                                <td class="ck-price">$30</td>
                                <td class="ck-qty">2</td>
                                <td class="ck-total-price">$60</td>
                            </tr>
                            <tr class="ck-tr">
                                <th scope="row">1</th>
                                <td><button class="btn btn-danger" type="button">x</button></td>
                                <td class="ck-item">Chocolate</td>
                                <td class="ck-price">$35</td>
                                <td class="ck-qty">2</td>
                                <td class="ck-total-price">$70</td>
                            </tr>
                            <tr class="ck-tr">
                                <th scope="row">1</th>
                                <td><button class="btn btn-danger "  type="button">x</button></td>
                                <td class="ck-item">Apple</td>
                                <td class="ck-price">$30</td>
                                <td class="ck-qty">1</td>
                                <td class="ck-total-price">$30</td>
                            </tr> --}}
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-right ">Order Amount:</td>
                                <td class="ck-oAmount ">$0</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right no-border">Tax:</td>
                                <td class="ck-tax">$0</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right no-border">Delivery charge:</td>
                                <td class="ck-deli">$0</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right no-border">Total: </td>
                                <td class="total-price">$0</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <script>
        //data fetching
        var quants = []
        var packs = []
        var prods = JSON.parse('<?php echo json_encode($products) ?>')
        var prodLen = JSON.parse('<?php echo json_encode($prodCnt) ?>')
        var quantJson = JSON.parse('<?php echo json_encode($data->quantities) ?>')
        var packsJson = JSON.parse('<?php echo json_encode($packages) ?>')
        for (var i = quantJson.length - 1; i >= 0; i--) {
            quants.push(quantJson[i])
        }
        for (var i = 0; i < packsJson.length; i++) {
            packs.push(packsJson[i])
        }
        //displaying cart items
        for (var i = 0; i < prodLen; i++) {
            addItemToCkTB(i,prods[i][0].id,prods[i][0].product_name,prods[i][0].price,quants[i])
        }
        updateCkTotal()

        function onlinePayClicked(){
            document.getElementById('paypal-button-container').style.display = "block"
            document.getElementsByClassName('subCanBut')[0].style.display = "none"
        }

        function cashPayClicked(){
            document.getElementById('paypal-button-container').style.display = "none"
            document.getElementsByClassName('subCanBut')[0].style.display = "block"
        }

    </script>

</body>
</html>
