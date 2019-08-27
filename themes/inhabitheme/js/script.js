


(function($) {


    $(function() {
      const $input = $('.search-field');
      const $searchBar = $('.header-search-bar');
      $('.site-header .icon-search').on('click', function() {
        if ($input.val().length === 0) {
            event.preventDefault();
          }
        $searchBar.toggleClass('search-on');
        $input.focus();
      });
  
      $input.on('blur', function () { 
        if ($input.val().length > 0) {
          return false;
        }
        $searchBar.removeClass('search-on');
      });
    });

    // $('#primary-menu').append('<li id="search-icon" > <i class="fas fa-search"></i></li>');


$(function() {
    $('.comment-form-author').prepend('<div class="journal-single-comment-author-email"');
    $('.comment-form-email').apend('</div>');
});

  })(jQuery);
//IIFE

