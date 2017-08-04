$(document).ready(function(){
  $(".sticker").sticky({topSpacing:0,zIndex:10});
  $('.sameh').matchHeight();
  $('.animout').click(function(){
  });
  //click
  $('.svg-inject').click(function(){window.open('http://www.limbocity.xyz');});
});
$(window).scroll(function(){
  var wScroll = $(this).scrollTop();
  if(wScroll > $('#what').offset().top - $(window).height()){
    $('.lc-img-1').css({'background-position':'center '+ (wScroll - $('#what').offset().top)/15 +'px'});
  }
  if(wScroll > $('#portfolio').offset().top - $(window).height()){
    $('.lc-img-2').css({'background-position':'center '+ (wScroll - $('#portfolio').offset().top)/15 +'px'});
  }
  if(wScroll > $('#art').offset().top - $(window).height()){
    $('.lc-img-3').css({'background-position':'center '+ (wScroll - $('#art').offset().top)/15 +'px'});
  }
});
