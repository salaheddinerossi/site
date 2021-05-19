$(document).ready(function(){
    $("#div_form").hide();

    var color1=$(":root").css("--c1");
    var color=String(color1).slice(2);
$(":root").css("--next_button", "url('https://api.iconify.design/carbon:next-filled.svg?color=%23"+$.trim(color)+"&width=54&height=54')");
$(":root").css("--prev_button", "url('https://api.iconify.design/carbon:previous-outline.svg?color=%23"+$.trim(color)+"&width=54&height=54')");

$('.responsive ').slick({

 infinite: false,
 speed: 300,
 slidesToShow: 4,
 slidesToScroll: 1,

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
$('.envie').slick({

    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,

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
    ]});
});
var i=0;

       var thisid="produit1";
       function toggle(id){
        i++;
        if(thisid==id)
          if(i%2)
            slide();
          else
            hide();

       else{
          slide();
          thisid=id;
       } }

function slide(){
      $( "#div_form" ).show();
    }

    function hide(){
    $("#div_form").hide();

       }
