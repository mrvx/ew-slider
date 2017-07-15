/*jQuery(document).ready(function($) {
    $("#owl-container").owlCarousel({
        slideSpeed : 300,
        paginationSpeed : 400,
        autoPlay : 3000,
        stopOnHover : true,
        navigation: false,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        autoHeight : true,
        autoPlay : true,
        singleItem:true
    });
           


});*/


$(".owl-carousel").owlCarousel({

    /*items: 1,*/
    /*autoplay: true,
    loop: true,
    singleItem:true,
    autoplayTimeout: 10000,*/
    /*slideSpeed : 300,*/
    items:1,
    paginationSpeed : 400,
    autoPlay : 3000,
    stopOnHover : true,
    navigation: true,
/*  paginationSpeed : 1000,
    goToFirstSpeed : 2000,*/
    autoHeight : true,
    autoPlay : true,
    singleItem:true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'

});
$(".owl-item:first-child .item").addClass('animate_center');