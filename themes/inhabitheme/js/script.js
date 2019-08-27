


(function($) {


    $(function() {
      let isSearchOpen = false;

      const $input = $('.search-field');
      const $searchBar = $('.header-search-bar');

      $('.site-header .icon-search').on('click', function() {
        isSearchOpen = true;
        if ($input.val().length === 0) {
            event.preventDefault();
          }
        $searchBar.toggleClass('search-on');
        $input.focus();
      });

      // setTimeout(function(){

      // }, 500);
  
      $input.on('blur', function () { 
        if (!$input.val().length > 0 && isSearchOpen) {
          console.log('removed class');
          $searchBar.removeClass('search-on');
          isSearchOpen = false;
        } 
        else {
          isSearchOpen = true;
        }
      });
    });

    // $('#primary-menu').append('<li id="search-icon" > <i class="fas fa-search"></i></li>');


$(function() {
    $('.comment-form-author').prepend('<div class="journal-single-comment-author-email"');
    $('.comment-form-email').apend('</div>');
});

  })(jQuery);
//IIFE

