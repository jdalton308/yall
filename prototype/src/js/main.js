$(function(){

  // UTILITY
  //------------------
  var $body = $('body');

  function isMobile() {
    return (window.innerWidth < 768);
  }


  // HEADER
  //------------------
  var header = (function(){

    var $header = $('header');
    var $window = $(window);
    var $mobileBtn = $header.find('.mobile-btn');
    var stickThreshold = 500;
    var desktopHeight = 252;
    var isPlaceholder = false;

    // function addPlaceholder() {
    //   var placeholderEl = '<div class="placeholder"></div>';
    //   $body.prepend(placeholderEl);
    //   isPlaceholder = true;
    // }
    // function removePlaceholder() {
    //   var $placeholder = $('.placeholder');
    //   $placeholder.remove();
    //   isPlaceholder = false;
    // }

    function watchTop() {
      $window.scroll(function(){
        var position = $window.scrollTop();
        // var belowThresh = (position > stickThreshold);

        if (position > stickThreshold) {
          $body.addClass('sticky');

          // if (!isPlaceholder) {
          //   addPlaceholder();
          // }
        } else {
          // if (isPlaceholder) {
          //   removePlaceholder();
          // }
          $body.removeClass('sticky');
        }
      });
    }
    function bindMobile() {
      $mobileBtn.click(function(){
        $header.toggleClass('open');
      });
    }

    function init(){
      watchTop();
      bindMobile();
    }

    return {
      init: init
    };
  })();

  header.init();



});