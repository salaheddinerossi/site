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
    $('.slick_menu').slick({

        infinite: false,
        speed: 300,
        slidesToShow: 7,
        slidesToScroll: 1,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 3,
              infinite: true

            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
       });
       $("#div_form_menu").hide();

       $( "#articles" ).removeClass( "col-sm-8" );
       $( "#articles" ).addClass( "col-sm-12" );
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
    if($(window).width() <=575)
{
    $("#div_form").css("right","0px");
    $("#div_form").css("bottom","1em");

}
      $( "#div_form" ).show();
    }

    function hide(){
        if($(window).width() <=575)
        {
            $("#div_form").css("right","5em");
            $("#div_form").css("bottom","110px");

        }
    $("#div_form").hide();

       }
  var j=0;

  var thisid="produit1";
  function toggle_menu(id){
    idselected=id;
   j++;
   if(thisid==id)
     if(j%2)
       slide_menu();
     else
       hide_menu();

  else{
     slide_menu();
     thisid=id;
}
}

function slide_menu(){
// Show hidden paragraphs2
if ($(window).width() <800) {

  $("#div_form_menu").removeClass( "div_form_menu" );
  $("#div_form_menu").addClass( "div_form" );
  $("#div_form_menu").css("right","0px");
  $("#div_form_menu").css("bottom","1em");
  $("#div_form_menu").prepend('<span class="iconify fermer" onclick="hide_menu()" data-icon="bi:x-lg" data-inline="false"></span>');

  $("#div_form_menu").show();



}
else {
    $( "#slick_menu" ).removeClass( "col-sm-12" );

   $( "#articles" ).removeClass( "col-sm-12" );
   $( "#articles" ).addClass( "col-sm-8" );
   $("#div_form_menu").show();}

}
function hide_menu(){
 if ($(window).width() < 800) {
  $("#div_form_menu").removeClass( "div_form" );
  $("#div_form_menu").addClass( "div_form_menu" );
  $("#div_form_menu").remove("span");

  $("#div_form_menu").hide();

     }
else {
 $("#div_form_menu").hide();/*
 $( "#slick_menu" ).removeClass( "col-sm-8" );
 $( "#slick_menu" ).addClass( "col-sm-12" );
 $( "#slick_menu" ).css("transition-duration","1s");*/
 $( "#articles" ).removeClass( "col-sm-8" );
 $( "#articles" ).addClass( "col-sm-12" );

  } }
  function popup(id){
if($(window).width() < 800){
    $("#"+id).addClass("produit_sel");
    
}
  }




