(function ($) {

  'use strict';
  $( document ).ready(function() {

    //Opens and closes the proper content.
    $('.accordion').accordion({
      collapsible: true,
      active: false,
      header: 'h2',
      animated: false,
      heightStyle: 'content'
    });
  });
})(jQuery);