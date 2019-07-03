<h1>Cart</h1>
<ul id="datalist">
        <li>Data</li>
    </ul>
    <p>{{ $products }}</p>
    <button>Purchase</button>
    <p id="cart"></p>
    <script>
        document.getElementById("cart").innerHTML = "hi"
        var obj = JSON.parse('<?php echo json_encode($products) ?>')
        for (var i = obj.length - 1; i >= 0; i--) {
                var li = document.createElement("LI")
                var a = document.createElement("A")
                var textnode = document.createTextNode(obj[i].product_name)
                a.appendChild(textnode)
                a.setAttribute("href","/products/"+obj[i].id)
                li.setAttribute("value", obj[i].id)
                li.appendChild(a)
                document.getElementById("datalist").appendChild(li)
        }
    </script>