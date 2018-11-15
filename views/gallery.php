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
<div class="text-center">
    <img src="/core/images/image01.png"  data-toggle="modal" data-target="#exampleModalVertical" id="modalImage">
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalVertical" tabindex="-1" role="dialog" aria-labelledby="exampleModalVerticalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalVerticalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center" id="modalImageLink">
                    <img src="/core/images/image01.png"> <!-- CHANGE HERE -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<!-- <div class="pt-5 pb-5 mt-5 mb-5" id="background-div1">
    <div class="container pb-2" id="necklaceText">
        Necklaces
    </div>
    <div  id="carouselContainer1">
        <div class="owl-carousel loop" id="carousel1">
            <div> <a href="/home"><img class="d-block img-fluid" src="/core/images/image01.png" alt="First slide"></a></div>
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
        <div class="owl-carousel loop" id="carousel2">
            <div> <img class="d-block img-fluid" src="/core/images/image01.png" alt="First slide"> </div>
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
        <div class="owl-carousel loop" id="carousel3">
            <div> <img class="d-block img-fluid" src="/core/images/image01.png" alt="First slide"> </div>
        </div>
        <div class="view-text">
            Drag left or right to view more!
        </div>
    </div>
</div> -->

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

    $('#modalImage').on('click', function() {
        $('#modalImageLink').attr(src,'/core/images/image03.png');
    }));

    $('.modal-dialog').on('click tap', function(e){
        if ($(e.target).hasClass('modal-dialog')) {
            $('.modal').modal('hide');
        }
    });
</script>

