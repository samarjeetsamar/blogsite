$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items : 5,
        autoPlay: true,
        stopOnHover: true,
        slideSpeed : 8000,
        paginationSpeed : 800,
        rewindSpeed : 3000,
        itemsDesktop : [1024,5],
	    itemsDesktopSmall : [968,4],
	    itemsTablet: [768,4],
	    itemsMobile : [479,2],
	    itemsTabletSmall: false,
    });
});


$(function() {
    $( '#dl-menu' ).dlmenu({
        animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
    });
});



