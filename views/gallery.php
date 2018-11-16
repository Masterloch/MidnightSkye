<?php ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">  

<style>
.view-text {
    padding-bottom: 10px;
    text-align: center; 
    opacity: .35;
}
</style>
<!-- <div class="text-center">
    <img src="/core/images/image01.png"  data-toggle="modal" data-target="#exampleModalVertical" id="modalImage">
</div> -->
<div>
    <div class="pt-5 pb-5 mt-5 mb-5" id="background-div1">
        <div class="container pb-2" id="necklaceText">
            Necklaces
        </div>
        <div  id="carouselContainer1">
            <div class="owl-carousel loop" id="carouselProductType2">
            </div>
            <div class="view-text">
                Drag left or right to view more!
            </div>
        </div>
    </div>

    <div class="pt-5 pb-5 mb-5" id="background-div2">
        <div class="container pb-2" id="earringText">
            Earrings
        </div>
        <div id="carouselContainer2">
            <div class="owl-carousel loop" id="carouselProductType3">
            </div>
            <div class="view-text">
                Drag left or right to view more!
            </div>
        </div>
    </div>

    <div class="pt-5 pb-5 mb-5" id="background-div3">
        <div class="container pb-2" id="braceletText">
            Bracelets
        </div>
        <div id="carouselContainer3">
            <div class="owl-carousel loop" id="carouselProductType1">
            </div>
            <div class="view-text">
                Drag left or right to view more!
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    var textArray = ["braceletText", "necklaceText", "earringText"];
    var container = "carouselContainer";
    var background = "background-div";

    textArray.forEach(setStyles);

    function setStyles(item, index) {
        document.getElementById(item).style.fontFamily = "Brush Script MT";
        document.getElementById(item).style.fontSize = "5em";
    }

    for(var i = 1; i < 4; i++) {
        document.getElementById("carouselContainer" + i).style.boxShadow = "0px 5px 10px #aaaaaa";
    }
    for(var i = 1; i < 4; i++) {
        document.getElementById("background-div" + i).style.backgroundColor = "#f8f9fa";
    }

    necklaceArray.forEach(setImages);
    earringArray.forEach(setImages);
    braceletArray.forEach(setImages);
    $(".modalImage").attr("data-toggle", "modal");
    $(".modalImage").attr("data-target", "#exampleModalVertical");

// box-shadow: 0px 0px 10px #aaaaaa; <--- image


    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });

    var owl = $('.owl-carousel');
    $('.loop').owlCarousel({
        center: true,
        items:2,
        loop:true,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:6
            }
        }
    });

    function setImages(item, index) {
        var carousel = document.getElementById('carouselProductType' + item.product_type_id);
        var img = document.createElement("IMG");
        img.src = item.image_path;
        img.classList.add("img-fluid");
        img.classList.add("d-block");
        img.classList.add("modalImage");
        img.setAttribute("id", item.name);
        img.style.boxShadow = "0px 0px 10px #aaaaaa";
        carousel.appendChild(img);
    }

    $(function() {
        $('.modalImage').on('click tap', function(e) {
            $('#modalImageLink').attr('src', this.src);
            $('#exampleModalVerticalLabel').text(this.id);
            $('#modalProductLink').attr('href', '/product')
        });
    });
    

    $('.modal-dialog').on('click tap', function(e){
        if ($(e.target).hasClass('modal-dialog')) {
            $('.modal').modal('hide');
        }
    });
</script>

