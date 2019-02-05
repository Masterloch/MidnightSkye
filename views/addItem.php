<?php ?>


<div class="row d-none d-md-block">
    <div class="col-md-12">
        <div class="row jumbotron h-100">
            <div class="col-md-4 text-center my-auto mx-auto">
                <img src="../core/images/whoopsSheltie.gif" class="img-fluid w-51 mb-5" id="itemPicture"/>
                <h1 class="display-4">Item Added</h1>
                <p class="lead" id="itemName"></p>
                <p class="lead"><span id="itemQty"></span><span class="ml-5" id="itemPrice"></span></p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/checkout" role="button">Checkout Now</a>
                </p>
            </div>

            <div class="col-md-5 text-center my-auto mx-auto" id="cartDisplay">
                <h1 class="display-4">Cart</h1>
                <div class="row" id="cartHeader">
                    <div class="col-6 clearfix" id="cartName">
                        <p class="lead float-left w-100" style="border-bottom: 1px solid black">
                            <strong><span class="float-left">Item</span></strong>
                        </p>
                    </div>
                    <div class="col-2" id="cartQty" style="border-bottom: 1px solid black">
                        <p class="lead" style="border-bottom: 1px solid black">
                            <strong>Qty</strong>
                        </p>
                    </div>
                    <div class="col-2" id="cartPrice" style="border-bottom: 1px solid black">
                        <p class="lead" style="border-bottom: 1px solid black">
                            <strong>Price</strong>
                        </p>
                    </div>
                    <div class="col-2" id="cartTotal" style="border-bottom: 1px solid black">
                        <p class="lead" style="border-bottom: 1px solid black">
                            <strong>Total</strong>
                        </p>
                    </div>
                </div>
                    <p class="lead float-right" id="cartFinalTotal">
                    </p>
                <div>
                </div>
                
                <p class="lead mt-5">
                    <a class="btn btn-primary btn-lg" href="/cart" role="button">View Cart</a>
                </p>
            </div>
            
        </div>
    </div>
</div>

<script>
    document.getElementById('itemPicture').style.boxShadow = "0px 10px 25px #000000";
    document.getElementById('itemPrice').style.fontWeight = "700";
    document.getElementById('itemQty').style.fontWeight = "700";
    document.getElementById('cartFinalTotal').style.fontWeight = "700";
    document.getElementById('cartDisplay').style.backgroundColor = "#FFFFFF";
    var cartName = document.getElementById('cartName');
    var cartQty = document.getElementById('cartQty');
    var cartPrice = document.getElementById('cartPrice');
    var cartTotal = document.getElementById('cartTotal');
    var cartFinalTotal = document.getElementById('cartFinalTotal');
    var total = 0;

    cartArray.forEach(cartDisplay);
    var cartTotal = document.createTextNode("Total: \xa0\xa0\xa0\xa0$" + total); 
    cartFinalTotal.appendChild(cartTotal);


    $('#itemName').text(product.name);
    $('#itemQty').text("\nQuantity: " + product.quantity);
    $('#itemPrice').text(" Price: $"+ (product.quantity * product.price));
    $('#itemPicture').attr("src", ".." + product.image_path);

    function cartDisplay(item, index) {
        total += item.quantity * item.price;
        var paragraphName = document.createElement("P");
        paragraphName.style.clear = "left";  
        paragraphName.style.whiteSpace = "nowrap";
        paragraphName.style.overflow = "hidden";
        paragraphName.style.textOverflow = "ellipsis";
        paragraphName.title = item.name;
        paragraphName.dataset.toggle = "tooltip";
        paragraphName.dataset.placement = "left";
        var paragraphQty = document.createElement("P");
        var paragraphPrice = document.createElement("P");
        var paragraphTotal = document.createElement("P");
        var cartItemName = document.createTextNode(item.name);     
        var cartItemQty = document.createTextNode("x " + item.quantity);  
        var cartItemPrice = document.createTextNode("$" + item.price);
        var cartItemTotal = document.createTextNode("$" + item.quantity * item.price);

        paragraphName.appendChild(cartItemName);
        paragraphQty.appendChild(cartItemQty);
        paragraphPrice.appendChild(cartItemPrice);
        paragraphTotal.appendChild(cartItemTotal);

        cartName.appendChild(paragraphName);
        cartQty.appendChild(paragraphQty);
        cartPrice.appendChild(paragraphPrice);
        cartTotal.appendChild(paragraphTotal);
    }
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>