(function ($) {
	"use strict";

  
/*  Fixed Header*/
 $(window).scroll(function() {
        if ($(this).scrollTop() > 90) {
            $(".header-section").addClass("fixed");
        } else {
            $(".header-section").removeClass("fixed");
        }
});
/*  Slider */
$('.testimonial-slider').slick({
  dots: true,
  arrows : true,
  infinite: true,
  speed: 1000,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 3000
});
/*  Preloader */
$(window).on('load',function(){
	var preLoder = $(".preloader");
	preLoder.fadeOut(1000);
   
});  		 
/*  Scrolltop  */
        function scrolltop(){

            
            var wind = $(window);
        
            wind.on("scroll" ,function(){
        
                var scrollTop = wind.scrollTop();
        
                if(scrollTop >=500) {
        
                    $(".top-scollbar").addClass("show");
        
                } else {
                
                    $(".top-scollbar").removeClass("show");
                }
                
        });

        $(".top-scollbar").on("click", function(){

            var bodyTop =  $("html, body");
       
              bodyTop.animate({scrollTop: 0},500,"easeOutCubic");
        });
       
        }
    

    scrolltop();
	
/*  AOS  */
AOS.init({
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: true, 
  mirror: false, 
  anchorPlacement: 'top-bottom', 

});



}(jQuery));
 