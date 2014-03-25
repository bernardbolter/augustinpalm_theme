// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop; 
        }
    }
}());

$(document).ready(function(){
  $("#navigation").sticky({topSpacing:0});
});

$(document).ready(function(){

    if ($(window).width() >= 480) {

        var stickyNavigation = $('#navigation').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyNavigation ) {
                        $('#erik_text').css({display: 'inline-block'}).fadeIn( "slow" );
                } else {
                        $('#erik_text').css({display: 'none'});
                }
        });
    }
});

$(window).resize(function(){

    if ($(window).width() >= 480) {

        var stickyNavigation = $('#navigation').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyNavigation ) {
                        $('#erik_text').css({display: 'inline-block'}).fadeIn( "slow" );
                } else {
                        $('#erik_text').css({display: 'none'});
                }
        });
    }
});

$(document).ready( function() {
    $(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
      $("#title_text").css({
         "margin-top":"-"+scrollTop+"px"
  });
 });
});

$(document).ready( function() {
 $('#nav_right').singlePageNav({
    speed: 4000
    });
});