


(function ($) {


  $(function () {
    let isSearchOpen = false;

    const $input = $('.search-field');
    const $searchBar = $('.header-search-bar');

    $('.site-header .icon-search').on('click', function () {
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

  $(function () {
    $(window).scroll(function () {
      var top = $(this).scrollTop();
      var changeNav = $('.main-img-logo').height();
      if (top > changeNav) {
        $('.nav-header-flexbox').addClass('scroll-nav-header');
      }else{
        $('.nav-header-flexbox').removeClass('scroll-nav-header');
      }
    });

  });




})(jQuery);
//IIFE

