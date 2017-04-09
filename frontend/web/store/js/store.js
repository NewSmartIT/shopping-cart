$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
    $('.product-slide').owlCarousel({
        navigation: true,  
        slideSpeed: 500,
        singleItem: true,
        pagination: true,
        autoplay: false,
        margin: 0,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },

            480: {
                items: 2

            },

            767: {
                items: 4
            },

            1025: {
                items: 6
            }
        }
    });
    $('.owl-controls .owl-prev').html('<i class="fa fa-angle-left"></i>');
    $('.owl-controls .owl-next').html('<i class="fa fa-angle-right"></i>');
});