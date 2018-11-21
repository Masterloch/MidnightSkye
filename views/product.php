<?php ?>

<div class="container" id="product_container">
    <div class="row">
        <div class="col-md-12 col-lg-7 text-center">
            <img src="../core/images/whoopsSheltie.gif" class="img-fluid my-5" id="productImage"/>
        </div>
        <div class="col-lg-5 my-5">
            <h2 id="productName"></h2>
            <p id ="productDescription"></p>
            <strong><p id ="productPrice"></p></strong>
            <form action="../cart/added" method="GET">
                <strong>Qty: </strong><input type="number" name="quantity" min="1" max="5" value="1" required>
                <button class="btn btn-secondary ml-5" name="product" id="productButton">Add Product to Cart</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById("productName").innerHTML = product.name;
    document.getElementById("productPrice").innerHTML = "$" + product.price;
    document.getElementById("productDescription").innerHTML = product.description;
    document.getElementById("productImage").src = product.image_path;
    document.getElementById("productButton").value = product.id

</script>

