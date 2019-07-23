if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {

    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }


    var addToCartButtons = document.getElementsByClassName('shop-item-button')

    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]         
        
        button.addEventListener('click', addToCartClicked)

    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    // alert('Thank you for your purchase')
    var prodIds = []
    var quantities = []
    var totalPrice = document.getElementsByClassName('cart-total-price')[0].innerText.replace('$', '')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var idCont = cartItems.getElementsByClassName('product-id')
    var quantityCont = cartItems.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < idCont.length; i++) {
        var id = idCont[i].getAttribute("value")
        prodIds.push(id)
        var quant = quantityCont[i].value
        quantities.push(quant)
    }
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    itemCount = 0
    $('#itemCount').html(itemCount).css('display', 'none');
    updateCartTotal()
    var form = document.getElementById('order-submit-form')
    var pids = document.createElement("input")
    pids.setAttribute("type","text")
    pids.setAttribute("name","pids")
    pids.setAttribute("value",JSON.stringify(prodIds))
    form.appendChild(pids)
    var quant = document.createElement("input")
    quant.setAttribute("type","text")
    quant.setAttribute("name","quantities")
    quant.setAttribute("value",JSON.stringify(quantities))
    form.appendChild(quant)
    var tPrice = document.createElement("input")
    tPrice.setAttribute("type","text")
    tPrice.setAttribute("name","totalPrice")
    tPrice.setAttribute("value",JSON.stringify(totalPrice))
    form.appendChild(tPrice)
    form.submit()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal(itemCount)
    itemCount--
    if (itemCount == 0) {
        $('#itemCount').html(itemCount).css('display', 'none');
    }else{
        $('#itemCount').html(itemCount).css('display', 'block');
    }
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

var itemCount=0;
    

function addToCartClicked(event) {
  
    var button = event.target
    var shopItem = button.parentElement.parentElement
    if (typeof shopItem.getElementsByClassName('product-id')[0] != 'undefined') {
        var id = shopItem.getElementsByClassName('product-id')[0].innerText
        var title = shopItem.getElementsByClassName('menu-item-title')[0].innerText
        var price = shopItem.getElementsByClassName('offer-price')[0].innerText
        var imageSrc = shopItem.getElementsByClassName('menu-item-image')[0].src
        addItemToCart(id, title, price, imageSrc)
    }
    updateCartTotal()
}

function addItemToCart(id, title, price, imageSrc) {
      
    var cartRow = document.createElement('tr')
    cartRow.classList.add('cart-item')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
                  
            <td><img class="cart-item-image img-fluid img-thumbnail hidden-xs-down" src="${imageSrc}" ></td>    
              <td class="cart-item-title cart-column">${title}</td>
              <td class="cart-price cart-column ">${price}</td>
              <td  class="cart-quantity cart-column">            
                 <input class="cart-quantity-input" type="number" value="1">
                 <button class="btn btn-danger" type="button">x</button>
            </td>
          `
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    var idHolder = document.createElement("DIV")
    idHolder.setAttribute("class","product-id")
    idHolder.setAttribute("style","display:none")
    idHolder.setAttribute("value",id)
    idHolder.innerText = "hello"
    cartRow.appendChild(idHolder)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    itemCount++;
    $('#itemCount').html(itemCount).css('display', 'block');
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-item')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}
