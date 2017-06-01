window.onload = function loader() {
    $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  var wHeight = $(window).innerHeight();
  ajustesIniciales();
  function ajustesIniciales(){
    //$('.wrapp').css({'height':wHeight+'px'})
  };
  $('.ball-scale-multiple').loaders();
  $('#fullpage').fullpage();
  $('#container').imagesLoaded()
    .always( function( instance ) {
      console.log('all images loaded');
    })
    .done( function( instance ) {
      console.log('all images successfully loaded');
    })
    .fail( function() {
      console.log('all images loaded, at least one is broken');
    })
    .progress( function( instance, image ) {
      var result = image.isLoaded ? 'loaded' : 'broken';
      console.log( 'image is ' + result + ' for ' + image.img.src );
    })
    $('#container').imagesLoaded( { background: '.item' }, function() {
      console.log('all .item background images loaded');
  });
});
