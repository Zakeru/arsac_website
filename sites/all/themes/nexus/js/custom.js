jQuery(window).load(function() {
    
  /* Navigation */

  jQuery('#main-menu > ul').superfish({ 
    delay:       500,               // 0.1 second delay on mouseout 
    animation:   { opacity:'show',height:'show'}, // fade-in and slide-down animation 
    dropShadows: true               // disable drop shadows 
  });   

  jQuery('#main-menu > ul').mobileMenu({
    prependTo:'.mobilenavi'
  });

});


( function() {
  var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
      is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
      is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

  if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
    var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
    window[ eventMethod ]( 'hashchange', function() {
      var element = document.getElementById( location.hash.substring( 1 ) );

      if ( element ) {
        if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
          element.tabIndex = -1;

        element.focus();
      }
    }, false );
  }

})();

( function($) {
  $(document).ready(function(){
    $('#block-block-1').click(function(){
      $('#block-views-vista-de-civil-block-1').fadeIn('fast');
      $('#block-views-vista-de-civil-block').fadeOut('fast');
      $('#block-views-vista-de-civil-block-2').fadeOut('fast');

      $('html, body').animate({
        scrollTop: $("#content_top").offset().top
      }, 1000);
    });

    $('#block-block-2').click(function(){
      $('#block-views-vista-de-civil-block').fadeIn('fast');
      $('#block-views-vista-de-civil-block-1').fadeOut('fast');
      $('#block-views-vista-de-civil-block-2').fadeOut('fast');

      $('html, body').animate({
        scrollTop: $("#content_top").offset().top
      }, 1000);
    });

    $('#block-block-3').click(function(){
      $('#block-views-vista-de-civil-block').fadeOut('fast');
      $('#block-views-vista-de-civil-block-1').fadeOut('fast');
      $('#block-views-vista-de-civil-block-2').fadeIn('fast');

      $('html, body').animate({
        scrollTop: $("#content_top").offset().top
      }, 1000);
    });
  });
})(jQuery);