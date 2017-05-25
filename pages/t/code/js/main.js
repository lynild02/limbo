window.onload = function() {
    $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  $('.ball-scale-multiple').loaders();
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
  });
  //Iniciamos Masonry.js para la carga de las imagenes
  var $grid = $('.grid').imagesLoaded( function() {
    $grid.masonry({
      // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.grid-item',
      // use element for option
      columnWidth: '.grid-sizer',
      percentPosition: true
    })
  })
});
