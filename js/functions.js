window.onload = function() {
    $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  wHeight = $(window).innerHeight();
  wScroll = $()
  ajustesIniciales();
  function ajustesIniciales(){
    $('.wrapper').css({'height':wHeight+'px'});
    $('.h-wrapp').css({'height':wHeight/2+'px'});
    $('.w-wrapp').css({'height':wHeight*2+'px'});
  };
  $('.ball-scale-multiple').loaders();
  //Mouse Over
});
