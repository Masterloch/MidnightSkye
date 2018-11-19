<?php ?>

<div class="container mt-5">
    <div class="col-lg-12">
        <p class="text-center" id="storeTitle" ></p>
    </div>
</div>
<div class="container" id="product_container">
    
</div>

<script>
    var container = document.getElementById("product_container");

    setStoreTitle(product_array[0]); //pass in a single product to determine type
    product_array.forEach(populateProducts); //loops through each product passed into the page by controllers/store.php
    $(document).ready(wrapRows()); 

    function populateProducts(item, index) {
        var div = document.createElement("DIV");
        div.classList.add("col-xs-12");
        div.classList.add("col-sm-4");
        div.classList.add("py-3");
        div.classList.add("px-3");

        var card = document.createElement("DIV");       //Main card div
        card.classList.add("card");

        var img = document.createElement("IMG");        //Card image
        img.src = item.image_path;
        img.classList.add("card-img-top");
        card.appendChild(img);

        var cardBody = document.createElement("DIV");   //Card body that holds text
        card.classList.add("card-body");
        card.appendChild(cardBody);
        
        var itemNameDiv = document.createElement("DIV");                //Div that holds the card body text
        itemNameDiv.classList.add("my-2");  
        itemNameDiv.style.whiteSpace = "nowrap";
        itemNameDiv.style.overflow = "hidden";
        itemNameDiv.style.textOverflow = "ellipsis";
        itemNameDiv.title = item.name;
        itemNameDiv.dataset.toggle = "tooltip";
        itemNameDiv.dataset.placement = "right";
        var itemNameText = document.createTextNode(item.name);          //Card body text - Product Name
        itemNameDiv.appendChild(itemNameText);

        var itemPrice = document.createElement("P");
        itemPrice.style.fontWeight = 700;
        itemPrice.style.display = "inline-block";
        itemPrice.style.textAlign = "center";
        itemPrice.style.marginLeft = "500";
        var itemPriceText = document.createTextNode("$" + item.price);       //Card body text - Product Price
        itemPrice.appendChild(itemPriceText);

        var itemButton = document.createElement("BUTTON");           //Card button
        var buttonText = document.createTextNode("View Product");    //Text on button
        itemButton.value = item.id;
        itemButton.name = "productID";
        itemButton.type = "submit";
        itemButton.classList.add("btn");                     
        itemButton.classList.add("btn-secondary");
        itemButton.appendChild(buttonText);

        var buttonForm = document.createElement("FORM");            //Form for button
        buttonForm.action = "/store/product";
        buttonForm.type = "GET";
        buttonForm.style.display = "inline-block";
        buttonForm.classList.add("float-right");
        buttonForm.appendChild(itemButton);

        cardBody.appendChild(itemNameDiv);     //Add item name to card
        cardBody.appendChild(itemPrice);   //Add price to card
        cardBody.appendChild(buttonForm);
        // cardBody.appendChild(itemButton);       //Add button to card

        div.appendChild(card);      //Append the card to the div
        container.appendChild(div); //Append the div to the page container
    };

    //This function wraps every 3 products in a new row tag for bootstrap formatting
    function wrapRows() {
        var divs = $("div#product_container > div");
        for(var i = 0; i < divs.length; i+=3) {
            divs.slice(i, i+3).wrapAll("<div class='row'></div>");
        }
    };

    function setStoreTitle(product) {
        console.log(product.collection);
        if (product.collection == 'none') {
            var type = product.product_name;
            document.getElementById('storeTitle').innerHTML = type.charAt(0).toUpperCase() + type.slice(1) + 's';
            document.getElementById('storeTitle').style.fontFamily = "Tangerine";
            document.getElementById('storeTitle').style.fontSize = "4em";
        }
        else {
            var type = product.collection;
            document.getElementById('storeTitle').innerHTML = type.charAt(0).toUpperCase() + type.slice(1) + 's';
            document.getElementById('storeTitle').style.fontFamily = "Tangerine";
            document.getElementById('storeTitle').style.fontSize = "4em";
        }
    }

    //This function enables bootstrap 4 tooltips on this page.  Tooltips have high performance impact
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

