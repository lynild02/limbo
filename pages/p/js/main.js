window.onload = function() {
  $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  var colwidth = $('.samehw').innerWidth();
  var wHeight = $(window).innerHeight();
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
    $(".sticker").sticky({topSpacing:20,zIndex:-10});
    $('.page-scroll').smoothScroll();
  }
});
