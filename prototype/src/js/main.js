$(function(){

  // UTILITY
  //------------------
  var $body = $('body');
  var $window = $(window);

  function isMobile() {
    return (window.innerWidth < 768);
  }


  // HEADER
  //------------------
  var header = (function(){

    var $header = $('header');
    var $mobileBtn = $header.find('.mobile-btn');

    var headerHeight = $header.height() * 2;
    var showHeight = $window.height();

    function watchTop() {
      $window.scroll(function(){
        var position = $window.scrollTop();

        window.requestAnimationFrame(function(){
          $body.toggleClass('sticky', (position > headerHeight));
          $header.toggleClass('show', (position > showHeight));
        });

      });
    }
    function bindMobile() {
      $mobileBtn.click(function(){
        $header.toggleClass('open');
      });
    }

    function init(){

      if ( isMobile() ) {
        bindMobile();
      } else {
        watchTop();
      }

    }

    return {
      init: init
    };
  })();

  header.init();


  var homeScroll = (function(){
    var $backLetters = $('.back-letter');
    var midScreen = $window.height() * .7;

    function hideBackLetters() {
      $backLetters.addClass('hide');
    }
    function showLetters(position) {
      $window.scroll(function(){
        var position = $window.scrollTop();
        var showSpot = position + midScreen;

        // if at the top, re-hide the letters
        if (!position) {
          hideBackLetters();
          return;
        }

        // loop through letters and show the ones in view
        for (var i = 0; i < $backLetters.length; i++) {
          var $el = $backLetters.eq(i);

          if ($el.offset().top < showSpot) {
            $el.removeClass('hide');

          } else {
            break;
          }
        }

      });
        
    }
    function init() {
      hideBackLetters();
      showLetters();
    }

    return {
      init: init
    };
  })();

  homeScroll.init();


  var toTopBtn = (function(){
    var $topBtn = $('.to-top-btn');
    var showSpot = $window.height();

    function scrollWatch() {
      $window.scroll(function(){
        var position = $window.scrollTop();

        $topBtn.toggleClass('show', (position > showSpot) );
      });
    }
    function bindClick() {
      $topBtn.click(function(){
        $body.animate({
          scrollTop: 0
        }, 600);
      });

    }

    function init() {
      bindClick();
      scrollWatch();
    }

    return {
      init: init
    }
  })();

  toTopBtn.init();

});