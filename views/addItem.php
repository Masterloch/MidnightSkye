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
            <div class="col-md-4 text-center my-auto mx-auto" id="cartDisplay">
                <h1 class="display-4">Cart</h1>
                <p class="lead" id="itemName"></p>
                <div id="cartItems">
                </div>
                <p class="lead">
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
    document.getElementById('cartDisplay').style.backgroundColor = "#FFFFFF";
    var cartRows = document.getElementById('cartItems');

    cartArray.forEach(cartDisplay);

    $('#itemName').text(product.name);
    $('#itemQty').text("\nQuantity: " + product.quantity);
    $('#itemPrice').text(" Price: $"+ (product.quantity * product.price));
    $('#itemPicture').attr("src", ".." + product.image_path);

    function cartDisplay(item, index) {
        var cartImage = document.createElement("IMG");           
        var cartQty = document.createTextNode("View Product");   
        var cartPrice = document.createTextNode("View Product");
//        itemButton.value = item.;
//        itemButton.name = "productID";
//        itemButton.type = "submit";
//        itemButton.classList.add("btn");                     
//        itemButton.classList.add("btn-secondary");
//        itemButton.appendChild(cartRows);
    }
</script>