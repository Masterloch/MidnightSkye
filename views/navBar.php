<!DOCTYPE html>
<html lang="en">
<head>
  <title>MidnightSkye</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
        .vertical-divider{
             border-right: 2px solid rgba(192,192,192,0.2);
        }
        .sticky.is-sticky {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 1000;
            width: 100%;
        }
    </style>
</head>
<body>
        <div class="container">
            <h1 class="d-xs-none">Marlene McDonald</h1>
        </div>
        <nav class="navbar navbar-light bg-light navbar-expand-sm" data-toggle="sticky-onscroll">
            <div class="container">
                <ul class="navbar-nav">
                    <div class="navbar-header hidden-sm-down float-right">
                        <a class="navbar-brand" href="/">MidnightSkye</a>
                    </div>
                    <li class="nav-item vertical-divider"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item dropdown vertical-divider">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Shop For Jewelery
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="/store?type=2">Necklaces</a>
                          <a class="dropdown-item" href="/store?type=1">Bracelets</a>
                          <a class="dropdown-item" href="/store?type=3">Earrings</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/store?type=Atlantean">Atlantean Talisman Collection</a>
                          <a class="dropdown-item" href="/store?type=Mermaids">Mermaids & Goddesses</a>
                        </div>
                      </li>
                    <li class="nav-item vertical-divider"><a class="nav-link" href="/schedule">Show Schedules & Awards</a></li>
                    <li class="nav-item vertical-divider"><a class="nav-link" href="/contact">Contact Me</a></li>
                    <li class="nav-item vertical-divider"><a class="nav-link" href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                //
                // JQuery for sticky navbar
                //
                // https://bootbites.com/articles/freebie-sticky-bootstrap-navbar-scroll-bootstrap-4/ 
                var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() >= stickyTop){
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else{
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };
                
                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function() {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper');
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');
                    
                    //Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });
                    
                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });
            });
        </script>
    </body>
</html>