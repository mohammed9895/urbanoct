$(document).ready(function(){
    const owl = $('#events');
    owl.owlCarousel({
        margin: 20,
        rtl: true,
        autoplay:true,
        autoplayHoverPause: 100,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('#next').click(function() {
        owl.trigger('next.owl.carousel');
    })
    $('#prev').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    })
    $('.owl-carousel').owlCarousel({
        margin: 20,
        rtl: true,
        autoplay:true,
        autoplayHoverPause: 100,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
});
