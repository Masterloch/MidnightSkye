
<!-- JEWELERY TYPE DIVS -->
<style>
    #bottomImage {
    bottom: 0;
}
</style>

<!--<div class="container">
     AWARDS MODULE 
    <div class="row mt-5 mb-5 d-none d-md-flex">
        <div class="col-md-8 text-center" id="awardText">  
            <p class="awardText" id="awardText1">Award Winning</p>
            <p class="awardText" id="awardText2">Ocean & Sea Inspired</p>
            <p class="awardText" id="awardText3">Hand Crafted Glass</p>
        </div>
        <div class="col-md-4 text-center container align-self-center"> 
            <div class="polaroid">
                <img src="core/images/awards/award05.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</div>-->
<div class="row d-none d-md-block">
    <div class="col-md-12">
        <div class="row jumbotron h-100">
            <div class="col-md-4 text-center my-auto">
                <h1 class="display-4">Necklaces</h1>
                <p class="lead">Shop by Jewelery Type.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/store?type=2" role="button">View Products</a>
                </p>
            </div>
            <div class="col-md-3 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
            </div>
            <div class="col-md-3 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>

<div class="row d-none d-md-block">
    <div class="col-md-12">
        <div class="row jumbotron h-100">
            <div class="col-md-3 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
            </div>
            <div class="col-md-3 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
            </div>
            <div class="col-md-4 text-center my-auto">
                <h1 class="display-4">Earrings</h1>
                <p class="lead">Shop by Jewelery Type.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/store?type=3" role="button">View Products</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row d-none d-md-block">
    <div class="col-md-12">
        <div class="row jumbotron h-100">
            <div class="col-md-4 text-center my-auto">
                <h1 class="display-4">Bracelets</h1>
                <p class="lead">Shop by Jewelery Type.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/store?type=1" role="button">View Products</a>
                </p>
            </div>
            <div class="col-md-3 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
            </div>
            <div class="col-md-3 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>

<div class="row d-none d-md-block">
    <div class="col-md-12">
        <div class="row jumbotron h-100">
            <div class="col-md-4 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
                <img src="core/images/necklace01.jpg" class="mt-5 bottom-0 img-fluid"/>
            </div>
            <div class="col-md-4 text-center my-auto">
                <h1 class="display-4">Gallery</h1>
                <p class="lead">View a Gallery of all my work!</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/gallery" role="button">View All Products</a>
                </p>
            </div>
            <div class="col-md-4 my-auto">
                <img src="core/images/necklace01.jpg" class="img-fluid"/>
                <img src="core/images/necklace01.jpg" class="mt-5 img-fluid"/>
            </div>
        </div>
    </div>
</div>

<!-- MOBILE VIEW -->
<div class="row d-none d-md-blocke">
    <div class="col-lg-12 mt-4" id="bannerDiv">
        <p class="text-center" id="pageHeaderText">SHOP BY JEWELERY TYPE</p>
    </div>
</div> 

<div class="row  d-md-none d-md-blocke">
    <div class="col-xs-12 col-sm-4 text-center" id="necklaces">
        <a href="store?type=2" id="necklaceLink">
            <p id="necklaceHeader" class="text-dark btn">Necklaces</p>
            <img src="core/images/necklace01.jpg" class="img-fluid" id="necklaceImage"/>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 text-center" id="earrings">
        <a href="store?type=3" id="earringLink">
            <p id="earringHeader" class="text-dark btn">Earrings</p>
            <img src="core/images/earring01.jpg" class="img-fluid" id="earringImage"/>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 text-center" id="bracelets">
        <a href="store?type=1" id="braceletLink">
            <p id="braceletHeader" class="text-dark btn">Bracelets</p>
            <img src="core/images/bracelet01.jpg" class="img-fluid" id="braceletImage"/>
        </a>
    </div>
</div>


<script>
    var textArray = ["braceletHeader", "necklaceHeader", "earringHeader"];
    var imageArray = ["braceletImage", "necklaceImage", "earringImage"];

    textArray.forEach(setHeaderStyles);
    imageArray.forEach(setImageStyles);
    
    document.getElementById('bannerDiv').style.backgroundImage = "url('core/images/bannerImage.jpg')";

    function setHeaderStyles(item, index) {
        document.getElementById(item).style.fontFamily = "Tangerine";
        document.getElementById(item).style.fontSize = "4em"; 
    }
    function setImageStyles(item, index) {
        document.getElementById(item).style.borderRadius = "50px";
        document.getElementById(item).style.boxShadow = "0px 0px 20px black";
        document.getElementById(item).style.marginTop = "-25px";
    }
</script>


 
