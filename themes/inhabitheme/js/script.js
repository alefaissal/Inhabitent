


(function($) {


    $(function() {
      const $input = $('.search-field');
      const $searchBar = $('.header-search-bar');
      $('.search-submit').on('click', function() {
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




  })(jQuery);
//IIFE

