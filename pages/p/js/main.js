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
  }
  //$('.bravhac').mouseover(function(){
    //$('.back-big-g').css({
      //'background':'url(img/bravhac.jpg)'
    //})
  //})
});
