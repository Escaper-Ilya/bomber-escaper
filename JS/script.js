$(document).ready(function(){
    $('.slider').slick({
        arrows: false,
        dots: true,
        infinite: true,
        speed: 1000,
        easing:'ease',
        fade: true,
        autoplay: true,
        autoplaySpeed: 300,
    });   
});

$(document).ready(function(){
    $('.spoiler_links').click(function(){
     $(this).parent().children('div.spoiler_body').slideToggle('normal');
     return false;
    });
});



   