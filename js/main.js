$(document).ready(function(){
  $(".sticker").sticky({topSpacing:0,zIndex:10});
  $('.sameh').matchHeight();
  $('.animout').click(function(){

  });
});
$(window).scroll(function(){
  var wScroll = $(this).scrollTop();
  if(wScroll > $('#what').offset().top - $(window).height()){
    $('.lc-img-1').css({'background-position':'center '+ (wScroll - $('#what').offset().top)/15 +'px'});
  }
  if(wScroll > $('#portfolio').offset().top - $(window).height()){
    $('.lc-img-2').css({'background-position':'center '+ (wScroll - $('#portfolio').offset().top)/15 +'px'});
  }
});
