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
    var $mobileBtn = $header.find('.icon-logo');
    var $navLinks = $header.find('.menu-item');

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
      $mobileBtn.click(function(e){
        e.preventDefault();
        $header.toggleClass('open');
      });
    }
    function setCurrentPage() {
      var path = window.location.pathname;

      $navLinks.each(function(i){
        var $this = $(this);
        var thisTarget = $this.attr('href');
        if (thisTarget === path) {
          $this.addClass('current-menu-item');
        }
      });
    }

    function init(){

      if ( isMobile() ) {
        bindMobile();
      } else {
        watchTop();
      }

      setCurrentPage();
    }

    return {
      init: init
    };
  })();

  header.init();


  // BACKGROUND LETTERS ON HOMEPAGE
  //-------------------------------
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


  // TO-TOP BTN
  //-------------------------------
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


  // MORE ITEMS IMGs, TO BACKGROUND
  //------------------------------------
  var moveToBackground = (function(){
    var $moreGrid = $('.more-grid');
    var $moreItems = $moreGrid.find('.more-item');

    function init() {
      console.log('Hi');
      $moreItems.each(function(){
        var $this = $(this);
        var $imgContainer = $this.find('.img-container');
        var $realImg = $imgContainer.find('img');
        var imgSrc = $realImg.attr('src');
        var srcString = 'url(' + imgSrc + ')';

        // set background image
        $imgContainer.css({backgroundImage: srcString});

        // delete img
        $realImg.remove();
      });
    }
    return {
      init: init
    };
  })();

  moveToBackground.init();

});