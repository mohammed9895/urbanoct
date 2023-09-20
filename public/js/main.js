$(document).ready(function(){
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
