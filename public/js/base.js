$(function () {
  $(".toTop").click(function() {
      $("html,body").animate({scrollTop:0}, 500);
  });
});
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
		window.scrollReveal = new scrollReveal({reset: true});
	})();
};

// $("body").niceScroll({
//   cursorcolor:"#999999",
//   zIndex:9999999,
//   background:"#ececec",
//   cursoropacitymax:1,
//   cursoropacitymin:1,
//   touchbehavior:false,
//   railoffset :true,
//   cursorwidth:"8px",
//   cursorborder:"1px solid #808080",
//   railoffset:true,
//   cursorborderradius:"5px"
// });
$("#ascrail2000").css({
    "z-index":"99999",
    "border":"1px solid #d3d3d3",
    "border-radius":"5px"
});

var swiper = new Swiper('.banner', {
    pagination: '.swiper-pagination',
    prevButton:'.swiper-button-prev',
    nextButton:'.swiper-button-next',
    paginationClickable: true,
    loop : true,
    autoplay: 4000,
    mousewheelControl : true,
    autoplayDisableOnInteraction: false
});