$(document).ready(function(){
  wHeight = $(window).innerHeight();
  ajustesIniciales();
  function ajustesIniciales(){
    $('.wrapp').css({'height':wHeight+'px'});
    $('.h-wrapp').css({'height':wHeight/2+'px'});
  };
});
$(window).scroll(function(){
  var wScroll = $(this).scrollTop();
  if(wScroll>$('.pics').offset().top - ($(window).height() / 2.8)){
    $('.pics figure').each(function(i){
      setTimeout(function(){
        $('.pics figure').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });
  };
});
