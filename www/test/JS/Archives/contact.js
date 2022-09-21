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


function parallax(){
	var scrolled = $(window).scrollTop();
	var isSafari = navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent); // true or false
	
	if(!isSafari){
		$('.BGminimize').css('top', (scrolled * 0.5) +'px');						
	}	
}