(function($) {
	/**
	 * Loader de page
	 */
	$.pageLoader = function() {
		// Selection des images en src="
		var $elements = $('body').find('img[src]');
		// Selection des images en background-image
		$('body [style]').each(function() {
			var src = $(this).css('background-image').replace(/^url\(["']?/, '').replace(/["']?\)$/, '');
			if(src && src != 'none') {
				$elements = $elements.add($('<img src="' + src + '"/>'));
			}
		});
		
		makeCanvas();
		
		var $chargement = $('#chargement');
		var $chargementInfos = $('#chargement-infos');
		var elementsCharges = 0;
		var dureeMs = 1000;
		
		function makeCanvas(){
			var c = document.getElementById("Loader");
			var ctx = c.getContext("2d");
			ctx.beginPath();
			ctx.arc(150,150,80,0,2*Math.PI);
			ctx.lineWidth = 4;
			ctx.strokeStyle = '#dedede';
			ctx.stroke();
		}
		
		function makeCanvasProgress(pourcent){
			var c = document.getElementById("PreLoader");
			var ctx = c.getContext("2d");
			ctx.clearRect(0,0,300,300);
			ctx.beginPath();
			ctx.arc(150,150,80,-1/2 * Math.PI, (pourcent/100)*2*Math.PI - 1/2*Math.PI);
			ctx.lineWidth = 2;
			ctx.strokeStyle = '#545454';
			ctx.stroke();
		}
		
		function animateStep(now, fx) {
			var pourcent = parseInt(now);					
			makeCanvasProgress(pourcent);
		}
		
		function chargementEnCours() {
			var pourcentage = 0;
			if($elements.length) {
				pourcentage = parseInt((elementsCharges / $elements.length) * 100);
			}
			
			// Affichage du pourcentage
			$chargementInfos
				.stop() // stop les anciennes animations
				.animate({width:pourcentage + '%'}, dureeMs);
			$chargement
				.stop() // stop les anciennes animations
				.animate({pourcentage:pourcentage}, {
					duration: dureeMs,
					step: animateStep
				});
		}
		
		function chargementTermine() {
			var pourcentage = 100;
			
			// Affichage du pourcentage
			$chargementInfos
				.stop() // stop les anciennes animations
				.animate({width:pourcentage + '%'}, (dureeMs / 2));
			$chargement
				.stop() // stop les anciennes animations
				.animate({pourcentage:pourcentage}, {
					duration: (dureeMs / 2),
					step: animateStep
				})
				// Disparition du chargement et affichage de la page
				.css({opacity: 1})
				.animate({opacity: 0}, function() {
					// La page est prete
					$chargement.css({display:'none'});
					$('#LoadContainer')
						.css({
							opacity: 0,
							visibility:'visible'
						})
						.animate({opacity:1});
				});
				
			var is_safari = navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent); // true or false
		
			// init diapo principale
			MainDiapo(9900);
			TempoAccSlide(10000, is_safari);
			// affichage des parralax


		}
		
		// La page contient des elements permettant d'afficher une barre de progression
		if($elements.length) {
			chargementEnCours();					
			$elements.load(function() {
				$(this).off('load');
				elementsCharges++;
				chargementEnCours();
			});
		}
		
		$(window).load(function() {
			// La page est integralement chargee
			chargementTermine();

		});
		
		};	
})(jQuery);

		
function initPortfolio(){					
	$("#Portfolio .mix").each(function(){	
			if($(this).find("img").height() < $(this).height()){
				$(this).find("img").css({height:"100%", width:"auto"})					
			}else if($(this).find("img").width() < $(this).width()){
				$(this).find("img").css({height:"auto", width:"100%"})							
			}
	})		
}

function transformService(delay){					
	var i = 0 + delay;
	
	$("#icon-services li").each(function(){						
		var target = $(this);
		
		setTimeout(function(){
			target.addClass("anim");							
		}, i)
		i += delay;
	})	
}
		
function redimensionnement(){
	var $image = $('.containBG img');
	var image_width = $image.width(); 
	var image_height = $image.height();     
	 
	var over = image_width / image_height; 
	var under = image_height / image_width; 
	 
	var body_width = $(window).width(); 
	var body_height = $(window).height(); 
	 
	if (body_width / body_height >= over) { 
	  $image.css({ 
		'width': body_width + 'px', 
		'height': Math.ceil(under * body_width) + 'px', 
		'left': '0px', 
		'top': Math.abs((under * body_width) - body_height) / -2 + 'px'
	  }); 
	}  
	 
	else { 
	  $image.css({ 
		'width': Math.ceil(over * body_height) + 'px', 
		'height': body_height + 'px', 
		'top': '0px', 
		'left': Math.abs((over * body_height) - body_width) / -2 + 'px'
	  }); 
	} 
}

function parallax(){
	var scrolled = $(window).scrollTop();
	$('.containBG').css('top', (scrolled * 0.9) +'px');
}

function MainDiapo(del){
	var nbImg = 4;
	var i = 0;
	var transition;
	var diapo;
	var delay = del-900;
	redimensionnement();
	
	function diapoTimer() {
		i++;
		if ( i >= nbImg ) {
			i = 0;
			diapoHide = $("#diapo" + nbImg);					
			diapo = $("#diapo" + (i+1));
			diapoHide.css("opacity","1").animate({"opacity":"0"}, 900);							
		}else{
			diapoHide = $("#diapo" + i);
			diapo = $("#diapo" + (i+1));
			diapo.css("opacity","0").animate({"opacity":"1"}, 900);
		}	
					
		diapo.addClass("activebg superbg").removeClass("superbg-hidden");						
		diapo.find("img").removeClass("initZoom").addClass("zoom");							
								
		transition = setInterval(function() {
				diapoHide.removeClass("activebg superbg").addClass("superbg-hidden");
				diapoHide.find("img").removeClass("zoom").addClass("initZoom");
													
				clearInterval(transition);
				setTimeout(diapoTimer, delay);
		}, 1000);
	}
	
	setTimeout(diapoTimer, delay);
}


function AnimSevicesIn(time, Interval){
	$("#logo-presta li").each(					
		function(){	
			var e=$(this);						
			setTimeout( function(){
				e.transition({rotateY:"0deg", opacity:1},600,'Ease').stop();
			}, time);
			time += Interval;
		}					
	)
}

function TempoAccSlide(delay,safari){
	var time = 0;
	var NbrAcc = $("#attract li").length;
	var i = 0;
	var eqprev = i-1;
	var eqactif = i;
	
	AnimAccSlide(eqactif, eqprev, delay,safari);
	
	setInterval(
		function(){
			i++;
			eqactif = i;
			eqprev = i-1;							
			
			if(i == NbrAcc){									
				i=0;
				eqprev = NbrAcc-1;
				eqactif = i;
			}
			AnimAccSlide(eqactif, eqprev, delay, safari);					
		}, delay)
}

function AnimAccSlide(actif, prev, delay, safari){						
	$("#attract li").css("opacity", 0).eq(actif).removeClass("accHide").addClass("accShow").animate({"opacity":1},(delay/10));	
	$("#attract li").eq(actif).find("h2").addClass("letfx");
	$("#attract li").eq(actif).find("p").css({"opacity":0, "padding-top":"30px"}).animate({"opacity":1, "padding-top":"0px"},500);
	
	setTimeout(function(){
		$("#attract li").eq(actif).animate({"opacity":0},(delay/20));
	}, (delay - (delay/20))
	)
	$("#attract li").eq(prev).removeClass("accShow").addClass("accHide");
	$("#attract li").eq(prev).find("h2").removeClass("letfx");								
	// TextFx accroche
	if(!safari){
		$(".letfx").letterfx({"fx":"fade fall","backwards":false,"timing":50,"fx_duration":"300ms","letter_end":"restore","element_end":"stay"});		
	}
	
}
		
function apparService(){
	var scrolled = $(window).scrollTop();
	var hauteur_fenetre = $(window).height();
	var decallage = 0.39 * hauteur_fenetre;

	if(scrolled > decallage && scrolled < (decallage+hauteur_fenetre)){
		AnimSevicesIn(0, 200);
	}
}

function apparThumb(){
	var scrolled = $(window).scrollTop();
	var hauteur_fenetre = $(window).height();
	var decallage = 1.25 * hauteur_fenetre;
						
	if(scrolled > decallage && scrolled < (decallage+hauteur_fenetre*1.4)){						
		$("#MainThumb .container").transition({scale:1, opacity:1},800,'Ease');	
	}		
}
									
function SliderWeb(){		
	var NbrSite = $("#MainWeb article").length;
	var SiteSelect = 1;
	var SliderWebWidth = 100 * NbrSite;
	
	var position_Slider=$('#SlideWeb').offset();
	var valeur_marginleft = position_Slider.left;
	var valeur_pourcent=(valeur_marginleft/$(window).width())*100;	
	
	
	$( "#SlideWeb" ).attr( "data-actif" , "actif");
	$( ".LargeNav .prec" ).attr( "data-actif" , "actif");
	$( ".LargeNav .suiv" ).attr( "data-actif" , "actif");
	
	function checkSlidNav(){
		if(SiteSelect == 1){
			$(".LargeNav .prec").addClass("gel");
			$(".LargeNav .suiv").removeClass("gel");
			$( ".LargeNav .prec" ).attr( "data-actif" , "inactif");
			$( ".LargeNav .suiv" ).attr( "data-actif" , "actif");
		}else if(SiteSelect == NbrSite){
			$(".LargeNav .suiv").addClass("gel");
			$(".LargeNav .prec").removeClass("gel");
			$( ".LargeNav .suiv" ).attr( "data-actif" , "inactif");
			$( ".LargeNav .prec" ).attr( "data-actif" , "actif");
		}
	}
	
	checkSlidNav();
	
	$(".LargeNav .prec").click(						
		function(){
			if($( "#SlideWeb" ).attr( "data-actif") == "actif" && $( ".LargeNav .prec" ).attr("data-actif") == "actif"){
				$( "#SlideWeb" ).attr( "data-actif" , "inactif");
				SiteSelect--;
				checkSlidNav()
				var position_Slider=$('#SlideWeb').offset();
				var valeur_marginleft = position_Slider.left;
				var valeur_pourcent=(valeur_marginleft/$(window).width())*100;						
				$("#SlideWeb").animate({"margin-left":valeur_pourcent + 100 + "%"}, 300);
				setTimeout(function(){$( "#SlideWeb" ).attr( "data-actif" , "actif");}, 300);
			}
		}					
	)
	
	$(".LargeNav .suiv").click(						
		function(){
			if($( "#SlideWeb" ).attr( "data-actif") == "actif" && $( ".LargeNav .suiv" ).attr("data-actif") == "actif"){
				$( "#SlideWeb" ).attr( "data-actif" , "inactif");
				SiteSelect++;
				checkSlidNav()
				var position_Slider=$('#SlideWeb').offset();
				var valeur_marginleft = position_Slider.left;
				var valeur_pourcent=(valeur_marginleft/$(window).width())*100;						
				$("#SlideWeb").animate({"margin-left":valeur_pourcent - 100 + "%"}, 300);
				setTimeout(function(){$( "#SlideWeb" ).attr( "data-actif" , "actif");}, 300);							
			}							
		}					
	)
}

// VERIFICATION DU FORMULAIRE DE CONTACT


function ContactOnLoad(){
		$('#form_contact, #form_contact_index').submit(function(){
		$("#nom").parent(".champ").removeClass("erreur_form");
		$("#email").parent(".champ").removeClass("erreur_form");
		$("#sujet").parent(".champ").removeClass("erreur_form");
		$("#message").removeClass("erreur_form");
								
		var validation = true;
		
		if($("#nom").val()=="" || $("#nom").val()=="Nom :"){
			$("#nom").parent(".champ").addClass("erreur_form");
			validation = false;
		}
		if($("#email").val()=="" || $("#email").val()=="Email :"){
			$("#email").parent(".champ").addClass("erreur_form");
			validation = false;
		}
		if($("#sujet").val()=="" || $("#sujet").val()=="Objet :"){
			$("#sujet").parent(".champ").addClass("erreur_form");
			validation = false;
		}
		
		var email_field = $('#email');
		var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		if (!emailFilter.test(email_field.val())) {
			$("#email").parent(".champ").addClass("erreur_form");
			validation = false;
		}
		if($("#message").val()==""){
			$("#message").addClass("erreur_form");
			validation = false;
		}
		if(validation == true){
			return true;
		}else{
			return false;
		}
	});

	$('#nom').change(function() {
		$("#nom").parent(".champ").removeClass("erreur_form");
	});
	$('#email').change(function() {
		$("#email").parent(".champ").removeClass("erreur_form");
	});
	$('#sujet').change(function() {
		$("#sujet").parent(".champ").removeClass("erreur_form");
	});
	$('#message').change(function() {
		$("#message").removeClass("erreur_form");
	}); 
}