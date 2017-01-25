jQuery(document).ready(function ($) {
    $.init();
    new WOW().init();
    $("#owl-demo").each(function(index, el) {
      $(this).owlCarousel({
        autoPlay: 6000,
        navigation : true,
        slideSpeed : 1000,
        paginationSpeed : 1000, 
        singleItem : true
        
        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

      })
    });
    
    (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=203728599967701";
    fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
/*

/*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').each(function(index, el) {
        $(this).fancybox()
      });

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").each(function(index, el) {
        $(this).fancybox({
          helpers: {
            title : {
              type : 'outside'
            },
            overlay : {
              speedOut : 0
            }
          }
        })
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").each(function(index, el) {
        $(this).fancybox({
          openEffect  : 'none',
          closeEffect : 'none',

          helpers : {
            title : {
              type : 'over'
            }
          }
        })
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").each(function(index, el) {
        $(this).fancybox({
          wrapCSS    : 'fancybox-custom',
          closeClick : true,

          openEffect : 'none',

          helpers : {
            title : {
              type : 'inside'
            },
            overlay : {
              css : {
                'background' : 'rgba(238,238,238,0.85)'
              }
            }
          }
        })
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").each(function(index, el) {
        $(this).fancybox({
          padding: 0,

          openEffect : 'elastic',
          openSpeed  : 150,

          closeEffect : 'elastic',
          closeSpeed  : 150,

          closeClick : true,

          helpers : {
            overlay : null
          }
        })
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').each(function(index, el) {
        $(this).fancybox({
          openEffect  : 'none',
          closeEffect : 'none',

          prevEffect : 'none',
          nextEffect : 'none',

          closeBtn  : false,

          helpers : {
            title : {
              type : 'inside'
            },
            buttons : {}
          },

          afterLoad : function() {
            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
          }
        })
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').each(function(index, el) {
        $(this).fancybox({
          prevEffect : 'none',
          nextEffect : 'none',

          closeBtn  : false,
          arrows    : false,
          nextClick : true,

          helpers : {
            thumbs : {
              width  : 50,
              height : 50
            }
          }
        });
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media').each(function(index, el) {
        $(this)
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });
      });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });
});

$.imgToSvg = function (image) {
    var $img = image;
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function (data) {
        var $svg = jQuery(data).find('svg');
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);

        if ($img.hasClass('map-animate'))
            $.myScrollAnimate();
    }, 'xml');
}

$.init = function () {

    $('.to-svg').each(function (index, el) {
        $.imgToSvg($(this));
    });  
}