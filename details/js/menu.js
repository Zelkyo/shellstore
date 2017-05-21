$(".topper-log").click(function(e){
	$(".topper-right").toggleClass("toppered");
});
var num = 95; 
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});