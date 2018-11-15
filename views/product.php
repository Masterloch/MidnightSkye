<?php ?>

<div class="container" id="product_container">
    <div class="row">
        <div class="col-md-12 col-lg-7 text-center">
            <img src="/core/images/image01.png" class="img-fluid my-5"/>
        </div>
        <div class="col-lg-5 my-5">
            <h2 id="productName"></h2>
            <p id ="productDescription"></p>
            <strong><p id ="productPrice"></p></strong>
            <button class="btn btn-secondary">Add Product to Cart</button>
        </div>
    </div>
</div>

<script>
    document.getElementById("productName").innerHTML = product.name;
    document.getElementById("productPrice").innerHTML = "$" + product.price;
    document.getElementById("productDescription").innerHTML = product.description;
</script>

