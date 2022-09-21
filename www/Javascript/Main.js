function MainJS_init(){
	// Disparition du message envoyé
	setTimeout(	function (){$(".envoye").fadeOut(600);}, 3000);			
	// ANIMATION BOUTONS					
	$(".bouton_plus").hover(function() {$(this).animate({width: '150px', backgroundColor: '#ff908b'}, "fast");},function() {$(this).animate({width: '40px', backgroundColor: '#ef655e'}, "fast");});			
	$(".bouton").hover(	function() {$(this).animate({backgroundColor: '#ff908b'}, 150);},function() {$(this).animate({backgroundColor: '#ef655e'}, 150);});
	$(".fadehover").hover(						
		function() {$(this).find("img.a").stop().animate({opacity: "0"}, 150);	$(this).find("img.b").stop().animate({opacity: "1"}, 150);},
		function() {$(this).find("img.a").stop().animate({opacity: "1"}, 150);	$(this).find("img.b").stop().animate({opacity: "0"}, 150);}
	);
	$(".menu").hover(function() {$(this).find("a").animate({color: '#d45a46'}, "fast");},function() {$(this).find("a").animate({color: '#FFF'}, "fast");});

	
	var cw = 0;
	//hover services
	hover_services();		
	// Bouton Service hover			
	$(".block").hover(			
		function(){
			$(this).find(".target_hover").stop().animate({height:cw}, 300);
			$(this).find("h4").stop().animate({color:"#ef655e"}, 300);
		},			
		function(){
			$(this).find(".target_hover").stop().animate({height:0}, 300);
			$(this).find("h4").stop().animate({color:"#bdc3c7"}, 300);					
		}		
	)
	
	function hover_services(){
		cw = $('.hover').width();
		$('.hover').css({'height':cw+'px'});
		$('.hover img').css({'height':cw+'px'});
	}

	//Menu Mobile
	check_mobile_menu();//init mobil menu

	//On resize element
	$(window).resize(function(){
		check_mobile_menu();// mobile menu avec resize				
		hover_services();//hover services
	})

	function check_mobile_menu(){//veriification de la taille de l'ecran de l'utilisateur
		if (document.documentElement.clientWidth  < 700){			
			$("#banniere nav").addClass("mobile_menu");
			$('#banniere nav ul').css({opacity:0, visibility:"hiddden"});
			$('#banniere nav').removeClass("click");
			$('#banniere').css({visibility:"visible"});
		}else{
			$("#banniere nav").removeClass("mobile_menu");	
			$('#banniere nav ul').css({opacity:1, visibility:"visible"});
			$('#banniere').css({visibility:"visible"});
		}				
	}
	
	//Parallax slider proncipale
	$(window).scroll(function(e){
		parallax2();
	})
	function parallax2(){
		var scrolled = $(window).scrollTop();
		$('.slide-back').css('top', -(scrolled * 0.2) +'px');
		$('#bandeau img').css('top', -(scrolled * 0.2) +'px');
	}	
				
	//Bouton click event mobile
	$(document).on("click", ".mobile_menu", function (e) {
		var ul = $('.mobile_menu ul');
		
		if($(".mobile_menu").hasClass("click")){						
				$(this).removeClass("click");
				ul.animate({opacity:0}, 500);	
				for(var i= 0; i < 4 ;i++) {
					ul.find("a").eq(3-i).stop().animate({paddingTop:"0.01%"}, 250*(i+1));				   
				}						
		}else{		
				$(this).addClass("click"); 
				ul.animate({opacity:1}, 300);	
				
				for(var i= 0; i < 4 ;i++) {
					ul.find("a").eq(i).stop().animate({paddingTop:"25%"}, 100*(i+1));				   
				}
		}
	})						
				
	// VERIFICATION DU FORMULAIRE DE CONTACT
	ContactOnLoad();

	function ContactOnLoad(){
			$('#form_contact, #form_contact_index').submit(function(e){
				e.preventDefault();
			$("#nom").parent(".champ").removeClass("erreur_form");
			$("#email").parent(".champ").removeClass("erreur_form");
			$("#sujet").parent(".champ").removeClass("erreur_form");
			$("#message").removeClass("erreur_form");
									
			var validation = true;
			
			if($("#nom").val()==""){
				$("#nom").parent(".champ").addClass("erreur_form");
				validation = false;
			}
			if($("#email").val()==""){
				$("#email").parent(".champ").addClass("erreur_form");
				validation = false;
			}
			if($("#sujet").val()==""){
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
}
				