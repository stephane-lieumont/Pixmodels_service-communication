function NavFix(){
	var scrolled = $(window).scrollTop();

	if(scrolled > 300 && $(window).width() > 760){
		if(!$(".navFix").length ){
			$(".MainNav").addClass("navFix");
			$(".navFix").css({opacity:0, top:-100, backgroundPosition:"-300px"}).animate({opacity:1, top:0},300);
			setTimeout(function(){								
				$(".navFix").animate({backgroundPosition:"0px"},300);
			},500);
		}
	}else{
		$(".MainNav").removeClass("navFix");			
	}
}
				
function initMenuMobile(){
	$(".MainNav ul").click(
		function(){							
			if($(".Mclick").length){
				$(".MainNav").removeClass("Mclick");
			}													
		}						
	)

	$(".MobileClose").click(
		function(){							
			if($(".Mclick").length){
				$(".MainNav").removeClass("Mclick");
			}													
		}						
	)
	
	$(".MobileNav").click(
		function(){							
			if($(".Mclick").length){
				$(".MainNav").removeClass("Mclick");
			}else{
				$(".MainNav").addClass("Mclick");
			}													
		}						
	)
}
				