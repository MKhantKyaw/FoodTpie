if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}


function ready() {

    var removeCkItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCkItemButtons.length; i++) {
        var button = removeCkItemButtons[i]
        button.addEventListener('click', removeCkItem)
    }

    // var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    // for (var i = 0; i < quantityInputs.length; i++) {
    //     var input = quantityInputs[i]
    //     input.addEventListener('change', quantityChanged)
    // }
    document.getElementsByClassName('btn-order-submit')[0].addEventListener('click', orderClicked)
}

function orderClicked(event){

    var pids = []
    var qtys = []

    var ckpid = document.getElementsByClassName('ck-pid')
    var ckqty = document.getElementsByClassName('ck-qty')

    for (var i = 0; i < ckpid.length; i++) {
        pids.push(ckpid[i].innerText)
    }
    for (var i = 0; i < ckqty.length; i++) {
        qtys.push(ckqty[i].innerText)
    }

    var form = document.getElementById('ck-form')
    var prodIn = document.createElement("input")
    prodIn.setAttribute("type","text")
    prodIn.setAttribute("name","products")
    prodIn.setAttribute("value",JSON.stringify(pids))
    prodIn.setAttribute("style","display:none")
    form.appendChild(prodIn)
    var quantIn = document.createElement("input")
    quantIn.setAttribute("type","text")
    quantIn.setAttribute("name","quantities")
    quantIn.setAttribute("value",JSON.stringify(qtys))
    quantIn.setAttribute("style","display:none")
    form.appendChild(quantIn)
    var totalPrice = document.createElement("input")
    totalPrice.setAttribute("type","text")
    totalPrice.setAttribute("name","total_price")
    var tP = document.getElementsByClassName('total-price')[0].innerText.replace('$','')
    totalPrice.setAttribute("value",tP)
    totalPrice.setAttribute("style","display:none")
    form.appendChild(totalPrice)
    document.getElementsByClassName('form-status')[0].value = "on cash"
    alert("Thank you for ordering")
    form.submit()
}

function onlinePay(){

    var pids = []
    var qtys = []

    var ckpid = document.getElementsByClassName('ck-pid')
    var ckqty = document.getElementsByClassName('ck-qty')

    for (var i = 0; i < ckpid.length; i++) {
        pids.push(ckpid[i].innerText)
    }
    for (var i = 0; i < ckqty.length; i++) {
        qtys.push(ckqty[i].innerText)
    }

    var form = document.getElementById('ck-form')
    var prodIn = document.createElement("input")
    prodIn.setAttribute("type","text")
    prodIn.setAttribute("name","products")
    prodIn.setAttribute("value",JSON.stringify(pids))
    prodIn.setAttribute("style","display:none")
    form.appendChild(prodIn)
    var quantIn = document.createElement("input")
    quantIn.setAttribute("type","text")
    quantIn.setAttribute("name","quantities")
    quantIn.setAttribute("value",JSON.stringify(qtys))
    quantIn.setAttribute("style","display:none")
    form.appendChild(quantIn)
    var totalPrice = document.createElement("input")
    totalPrice.setAttribute("type","text")
    totalPrice.setAttribute("name","total_price")
    var tP = document.getElementsByClassName('total-price')[0].innerText.replace('$','')
    totalPrice.setAttribute("value",tP)
    totalPrice.setAttribute("style","display:none")
    form.appendChild(totalPrice)
    document.getElementsByClassName('form-status')[0].value = "online payment"
    alert("Thank you for ordering")
    form.submit()
}

function removeCkItem(event){
    var buttonClicked=event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCkTotal()
}


// function purchaseClicked(event) {
    // alert("Thanks for your purchase.")
//     var cartItems = document.getElementsByClassName('cart-items')[0]
//     while (cartItems.hasChildNodes()) {
//         cartItems.removeChild(cartItems.firstChild)
//     }
//     updateCartTotal()
// }

 // purchaseClicked
function purchaseClicked(event) {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    for (var i=0; i<cartRows.length;i++){
        var cartRow= cartRows[i]
        var title=cartRow.getElementsByClassName('cart-item-title')[0].innerText
        var priceElement = cartRow.getElementsByClassName('cart-price')[0].innerText
        var quantity = cartRow.getElementsByClassName('cart-quantity-input')[0].value
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        addItemToCkTB(i,title, price, quantity)
    }
    updateCkTotal()
}

    // add item into Checkout tableContent
    function addItemToCkTB( no, id , title, price, quantity){
    var ckRow = document.createElement('tr')
    ckRow.classList.add('ck-tr')
    var ckItems = document.getElementsByClassName('ck-items')[0]
    var ckRowContents=`
                                <th scope="row">${no+1}</th>
                                <td><button class="btn btn-danger" type="button">x</button></td>
                                <td class="ck-item">${title}</td>
                                <td class="ck-price">$${price}</td>
                                <td class="ck-qty">${quantity}</td>
                                <td class="ck-total-price">${price * quantity}</td>
                                <td class="ck-pid" style="display : none">${id}</td>`

    ckRow.innerHTML=ckRowContents
    ckItems.append(ckRow)
     ckRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCkItem)
}

// updat ckeck out table total
function updateCkTotal() {
    var cartItemContainer = document.getElementsByClassName('ck-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('ck-tr')
    
    var total=0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var amount = cartRow.getElementsByClassName('ck-total-price')[0]
        total+=parseInt(amount.innerText)
    }
        document.getElementsByClassName('ck-oAmount')[0].innerText = '$' + total
    var tax=(total * 0.05);
    	document.getElementsByClassName('ck-tax')[0].innerText='$' + tax
    	var deliFee=0;
    	var total_F = total + tax + deliFee
    	total_F = Math.round(total_F *100) / 100
    	document.getElementsByClassName('total-price')[0].innerText= '$' + total_F
        document.getElementById('server-total').innerText = total_F
    
}



function phoneMask() { 
    var num = $(this).val().replace(/\D/g,''); 
    $(this).val(num.substring(0,2) + '-'+ num.substring(2,5) + ' ' + num.substring(5,8) + ' ' + num.substring(8,12)); 
}
$('[type="tel"]').keyup(phoneMask);



