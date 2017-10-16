
//sticky navbar
$(document).ready(function()
  {
   $(window).bind('scroll', function()
   {
   var navHeight = $( window ).height() - 70;
     if ($(window).scrollTop() > navHeight)
     {
       $('nav').addClass('fixed');
     }
     else
     {
       $('nav').removeClass('fixed');
     }
  });
});

//smooth scroll button
$(document).ready(function()
  {
   $(window).bind('scroll', function()
   {
   var navHeight = $( window ).height() - 70;
     if ($(window).scrollTop() > navHeight)
     {
       $("#scroll-top-id").css("visibility","visible");
       $("#scroll-top-id").fadeIn(1000);
     }
     else
     {
       $("#scroll-top-id").css("visibility","hidden");
       $("#scroll-top-id").fadeOut(1000);
     }
  });
});

//smooth scroll
$(document).ready(function () 
{
    
  $('a[href^="#"]').on('click', function(event) 
  {

    var target = $( $(this).attr('href'));

    if( target.length ) 
    {
        event.preventDefault();
        $('html, body').animate(
        {
          scrollTop: target.offset().top
        }, 1350);
    }

});
});


//slick carousel
$(document).ready(function(){
/*$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});*/
$('.slider-for').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});
});
