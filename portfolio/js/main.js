window.onload = function() {
  $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  var colwidth = $('.samehw').innerWidth();
  var wHeight = $(window).innerHeight();
  var bbtheight = $('#about').height();
  fix();
  function fix(){
    $('.samehw').css({
      'height':colwidth+'px'
    })
  };
  ajustesIniciales();
  function ajustesIniciales(){
    $('.wrapp').css({'height':wHeight+'px'})
    $('.equalheight').matchHeight();
    $(".sticker").sticky({topSpacing:20,bottomSpacing:bbtheight,zIndex:-100});
    $('.page-scroll').smoothScroll();
  }
  if(screen.width<1050){
    $('.work-image').removeClass('js-tilt');
  };
});
