$(document).ready(function(){
  $(document).on("scroll",function(){
    if ($(".navbar-toggle").css("display") == "none") {
      if($(document).scrollTop()>$(".navbar").outerHeight(true)){/*when scrolled down*/
        var heightNav=$('.navbar').outerHeight();
        if($(".navbar").css("position") != "fixed"){
          $(".navbar").css({
                          "top" : -heightNav,
                          "position" : "fixed",
                          "padding-top" : "0"
                         });
          $(".navbar").animate({top: 0}, 250);
          $(".navbar-header").css("width","auto");
        }
        $(".carousel").css("margin-top",heightNav);
        $(".sometimesUp").css("right","0");
      } else { /*when scrolled up */
        $(".navbar").css({
                          "position" : "relative",
                          "padding-top" : "12px"
                         });
        $(".carousel").css("margin-top","0");
        $(".navbar-header").css("width","100%");
        $(".sometimesUp").css("right","-45px");
      }
    }
  });
  var $root = $('html, body');
$('a').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });
    return false;
});
});/*end doc.ready*/

