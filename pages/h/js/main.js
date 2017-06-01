window.onload = function() {
    $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  var wHeight = $(window).innerHeight();
  ajustesIniciales();
  function ajustesIniciales(){
    //$('.wrapp').css({'height':wHeight+'px'})
  };
  $('.ball-scale-multiple').loaders();
});
