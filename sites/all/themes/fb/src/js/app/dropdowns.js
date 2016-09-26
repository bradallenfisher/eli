(function ($) {

  'use strict';
  $( document ).ready(function() {

    $('.menu-expander').click (
	    function() {
        $('ul.dl-menu').toggleClass('dl-menuopen');
        $('.mobile-menu').toggleClass('open');
				$('#block-psu-search-psu-search').removeClass('open');
				$('#block-block-6').removeClass('open');
			}
    );

    $('.search-expander').click (function(event) {
				$('#block-psu-search-psu-search').toggleClass('open');
				$('ul.dl-menu').removeClass('dl-menuopen');
				$('.mobile-menu').removeClass('open');
			}
    );

    $('.top-search-expander').click (function(event) {
		  $('#block-psu-search-psu-search').toggleClass('open');
		  }
    );

    $('.main').click (function(event) {
		  $('#block-psu-search-psu-search').removeClass('open');
		  $('#block-block-6').removeClass('open');
		  $('ul.dl-menu').removeClass('dl-menuopen');
		  $('.mobile-menu').removeClass('open');
			}
    );

    $('.footer').click (function(event) {
      $('#block-psu-search-psu-search').removeClass('open');
      $('#block-block-6').removeClass('open');
      $('ul.dl-menu').removeClass('dl-menuopen');
      $('.mobile-menu').removeClass('open');
      }
    );

    $('.view-all').click (function(event) {
      $(this).next('.departments').addClass('open');
      $(this).children('.hide-all').addClass('show');
      $(this).addClass('hide');
      event.preventDefault();
      }
    );
    $('.hide-all').click (function(event) {
      $(this).parent().removeClass('open');
      $(this).parent().prev().removeClass('hide');
      event.preventDefault();
      }
    );
  });
})(jQuery);

