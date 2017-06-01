window.onload = function() {
    $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  $('#fullpage').fullpage();
  $('.hname').fadeOut('slow');
  $('#nick').click(function(){
    $('.hname').fadeIn('slow');
  })
  $('.ball-scale-multiple').loaders();
  $("img.lazy").lazyload();
});
