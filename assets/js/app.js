/* Driver for the mobile nav */
$(document).ready(function () {


    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar-inverse').after($('<div class="inverse" id="navbar-height-col"></div>'));

    $('#slide-nav.navbar-default').after($('<div id="navbar-height-col"></div>'));

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';


    $("#slide-nav").on("click", toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            left: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            left: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });


        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');


        $('#page-content, body, .navbar-header').toggleClass('slide-active');


    });


    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }


    });

    //Drive the interior page navigation
    $('#nav').onePageNav({currentClass: "selected"});

    try{
      $(window).scroll(function(){
      var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
      var div_top = $('#nav-anchor').offset().top;
      if (window_top > div_top) {
          $('#nav').addClass('stick');
      } else {
          $('#nav').removeClass('stick');
      }
      });
    }catch(e){/*lol*/}


    //Drives the landing page's overlay fades
    $('.img-overlaid').mouseenter(function(){
      $(this).next('div').fadeIn(200);
    });
    $('.overlay-opacity').mouseleave(function(){
      $(this).fadeOut(200);
    });

});
