/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.


/*==================================
=            Kompakt JS            =
==================================*/



(function($) {


/*====================================
=            Product Caro            =
====================================*/



var productCarousel = $(".product-carousel .owl-carousel").owlCarousel({
    nav : false,
    loop : true,
    auto : true,
    center:true,
    responsive : {
      // breakpoint from 0 up
      0 : {
          items:1
      },
      // breakpoint from 600 up
      750 : {
          items:1
      },
      // breakpoint from 992 up
      1200 : {
           items:1
      }
    }
   });
$('.product-carousel .owl-prev').click(function() {
    productCarousel.trigger('prev.owl.carousel');
});
$('.product-carousel .owl-next').click(function() {
    productCarousel.trigger('next.owl.carousel');
});

/*====================================
=           Home Slider         =
====================================*/

var owl = $(".owlCarousel .owl-carousel").owlCarousel({
    nav : false,
    loop : true,
    center:true,
    responsive : {
      // breakpoint from 0 up
      0 : {
          items:1
      },
      // breakpoint from 600 up
      750 : {
          items:2
      },
      // breakpoint from 992 up
      1200 : {
           items:3
      }
    }
   });
$('.owlCarousel .owl-prev').click(function() {
    owl.trigger('prev.owl.carousel');
});
$('.owlCarousel .owl-next').click(function() {
    owl.trigger('next.owl.carousel');
});



  var options = { valueNames: [ 'size', 'keywords','container_type','search-title' ] };
  var productList = new List('productSearch', options);

$(document).ready(function(){


  ListSearch(productList);
  //chosenActivate(".select-chosen");
});
  function chosenActivate(tag){
    $(tag).chosen(); 
  }



$('.image-gallery-button').on('click', function (event) {
    event.preventDefault();
    blueimp.Gallery($('#links a'));
  })

 

function ListSearch(list){
$( "#searchBlock input" ).keyup(function( event ) {
  list.search($('#searchBlock input').val());
  });

$("#filterSize").chosen().change(function(e, params){
    list.search(params.selected, ['size']);
});

$("#filterContainer").chosen().change(function(e, params){
  list.search(params.selected, ['container_type']);
});

}
/*===============================
=            Popover            =
===============================*/




})(jQuery); // Fully reference jQuery after this point.
