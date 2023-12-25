jQuery(document).ready(function($){
    $(document).ready(function(){       
        $('#IncomForm').modal('show');
         }); 
    // date range
    $(function() {
        $('#date_start, #date_end')
            .calendricalDateRange(); 
    });
    // inspired_trips Carousel
    $('.hero_charousel').owlCarousel({
        loop:false,
        margin:0,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            600:{
                items:1,
                nav:false,
            },
            1000:{
                items:1
            }
        }
    });
    $('.our_services').owlCarousel({
        loop:true,
        dots:true,
        margin:15,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
     // testimonials Carousel
    $('.testimonials').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });
});