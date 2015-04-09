/*
 * jQuery throttle / debounce - v1.1 - 3/7/2010
 * http://benalman.com/projects/jquery-throttle-debounce-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function(b,c){var $=b.jQuery||b.Cowboy||(b.Cowboy={}),a;$.throttle=a=function(e,f,j,i){var h,d=0;if(typeof f!=="boolean"){i=j;j=f;f=c}function g(){var o=this,m=+new Date()-d,n=arguments;function l(){d=+new Date();j.apply(o,n)}function k(){h=c}if(i&&!h){l()}h&&clearTimeout(h);if(i===c&&m>e){l()}else{if(f!==true){h=setTimeout(i?k:l,i===c?e-m:e)}}}if($.guid){g.guid=j.guid=j.guid||$.guid++}return g};$.debounce=function(d,e,f){return f===c?a(d,e,false):a(d,f,e!==false)}})(this);

var amScrolling = false;
jQuery.fx.step.scrollTop = function(E) {
  amScrolling = true;
  E.elem.scrollTop = E.now;
  amScrolling = false;
};

$('.interior-content').scroll(
  $.debounce(100, true, function(){
    //animate expand contained divs to 740px height
    $('.interior-content').children("div").each(function(){
      $(this).animate({
        height : "auto"
      }, 200);
    });

  })
);

$('.interior-content').scroll(
  $.debounce(100, function(){
    var cont = {};

    console.log("**STARTING A SCROLL**");
    //calc difference between each div and scrollTop, store them in array, sort so position 0 is
    //smallest positive difference
    $(this).children("div").each(function(){
      cont[$(this).attr("id")] = $(this).position().top
    });
    $(this).children("div").each(function(){
      if(cont[$(this).attr("id")] > 0){
        if(cont["top"] > 0){
          return;
        }
        cont["top"] = $(this).attr("id");
        console.log(cont["top"]);
      }
    });

    //Scroll to the position of the key for the smallest difference in the above array
    $('.interior-content').scrollTop(
      $('.interior-content').scrollTop() + $('#' + cont["top"]).position().top
    );

    //animate contract contained divs to auto height
    $('.interior-content').children("div").each(function(){
      $(this).animate({
        height: "740px"
      }, 200);
    });
  })
);
