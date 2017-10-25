jQuery(document).ready(function($) {

  $('.desc-link').click(function() {
    $(this).find('.glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
  });

  // $('video').mediaelementplayer();

  $('img.replace').svgmagic({
    forceReplacements: true
  });

});
