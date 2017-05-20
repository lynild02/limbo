$(document).ready(function(){
  var colwidth = $('.samehw').innerWidth();
  fix();
  function fix(){
    $('.samehw').css({
      'height':colwidth+'px'
    })
  }
});
