$(document).ready(function(){

    var color1=$(":root").css("--c1");
    var color=String(color1).slice(2);
$(":root").css("--next_button", "url('https://api.iconify.design/carbon:next-filled.svg?color=%23"+$.trim(color)+"&width=54&height=54')");
$(":root").css("--prev_button", "url('https://api.iconify.design/carbon:previous-outline.svg?color=%23"+$.trim(color)+"&width=54&height=54')");

$('.responsive').slick({

 infinite: false,
 speed: 300,
 slidesToShow: 4,
 slidesToScroll: 1,
/* prevArrow: '<a class="slick-next slick-arrow"><span class="iconify " data-icon="carbon:previous-outline" data-inline="false" aria-hidden="true"></span></a>',*/
 /*nextArrow:'<a><span class="iconify next-button" data-icon="carbon:next-filled" data-inline="false"aria-hidden="true"style="position:absolute;top:40%;right:-4%"></span></a>',*/

 responsive: [
   {
     breakpoint: 1024,
     settings: {
       slidesToShow: 3,
       slidesToScroll: 3,
       infinite: true

     }
   },
   {
     breakpoint: 600,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 2
     }
   },
   {
     breakpoint: 480,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1
     }
   }
   // You can unslick at a given breakpoint now by adding:
   // settings: "unslick"
   // instead of a settings object
 ]
});

});
