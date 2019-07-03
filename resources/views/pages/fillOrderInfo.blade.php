<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h3>Products</h3>
<ul>
    @foreach($products as $product)
        <li>{{ $product[0] }}</li>
    @endforeach
</ul>
<h3>Quantities</h3>
<ul>
    @foreach($data->quantities as $qunatity)
        <li class="prod-quantity">{{ $qunatity }}</li>
    @endforeach
</ul>
<h3>Total Price</h3>
<div>${{ $data->totalPrice }}</div>
<form class="order-info-form" method="POST" action="/orders">
    @csrf
    <input type="text" name="customer_name" placeholder="customer_name">
    <input type="text" name="order_date" placeholder="order_date" value="{{ date("Y-m-d") }}">
    <input type="text" name="order_location" placeholder="order_location">
    <input type="text" name="total_price" value="{{ $data->totalPrice }}" style="display: none">
    <button type="submit">Order Now</button>
</form>
<script>
    var pds = []
    var quants = []
    var prods = JSON.parse('<?php echo json_encode($products) ?>')
    var prodLen = JSON.parse('<?php echo json_encode($prodCnt) ?>')
    var quantJson = JSON.parse('<?php echo json_encode($data->quantities) ?>')
    for (var i = prodLen - 1; i >= 0; i--) {
        pds.push(prods[i][0].id)
    }
    for (var i = quantJson.length - 1; i >= 0; i--) {
        quants.push(quantJson[i])
    }
    var form = document.getElementsByClassName('order-info-form')[0]
    var prodIn = document.createElement("input")
    prodIn.setAttribute("type","text")
    prodIn.setAttribute("name","products")
    prodIn.setAttribute("value",JSON.stringify(pds))
    prodIn.setAttribute("style","display:none")
    form.appendChild(prodIn)
    var quantIn = document.createElement("input")
    quantIn.setAttribute("type","text")
    quantIn.setAttribute("name","quantities")
    quantIn.setAttribute("value",JSON.stringify(quants))
    quantIn.setAttribute("style","display:none")
    form.appendChild(quantIn)
</script>
</body>
</html>