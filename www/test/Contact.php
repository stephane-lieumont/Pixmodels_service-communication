<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<title>Fond extensible - version JQUERY</title>
		<link rel="stylesheet" href="Styles/style.min.css" type="text/css" media="screen">
		<link rel="stylesheet" href="Styles/style_contact.min.css" type="text/css" media="screen">	
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Oswald:300,400,700' rel='stylesheet' type='text/css'>
	</head>
	<?php
		define ("DOMAINE_SERVER_PHP" , '/');	
		define ("CHEMIN_RACINE" , 'http://'.$_SERVER['HTTP_HOST'].DOMAINE_SERVER_PHP);
		$envoi = false;

		if($_POST){
			// verfification des élément obligatoire
			Prepare_mail($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['ville'], $_POST['date'], $_POST['budget'], nl2br($_POST['message']));
			$envoi = true;
		}

		function Prepare_mail($Nom, $Email, $Sujet, $Ville, $Date, $Budget, $Message){		
			$mess = get_email($Nom, $Email, $Sujet, $Ville, $Date, $Budget, $Message);
			$headers_mail  = 'MIME-Version: 1.0'                           ."\r\n";
			$headers_mail .= 'Content-type: text/html; charset=utf-8'      ."\r\n";
			$headers_mail .= 'From:clients@pixmodels.com';
			// Envoi du mail
			mail("stephane-19@hotmail.fr", 'Nouveau message de '.$Nom, $mess, $headers_mail);
			
		}

		function get_email($Nom, $Email, $Sujet, $Ville, $Date, $Budget, $Message){
			ob_start();
			include "Include/mail_contact.inc.php";
			return ob_get_clean();
		}
	?>
	<body>
		<?php if($envoi == true){ echo"<div class='envoye'><p>Votre message a bien été envoyé</p></div>";	}	?>
		<?php require "Include/nav.inc.php";?>
		<header>
			<div class="BGminimize" ><img alt="Contacter pixmodels - devis gratuit" src="Images/Contact-BG.jpg" width="1240" height="596"/></div>
			<div id="coverBG" class="Minimize">				
				<?php require "Include/logo.inc.php";?>
				<div id="present">
					<div id="attract">
						<h2 class="letterfx">Réalisons ensemble votre projet !</h2>
					</div>
				</div>
			</div>
		</header>
		<main>
			<section id="Contact" class="overTitle">
				<h2>~ Une estimation budgètaire ~</h2>
				<hr>
				<blockquote><p>« Une étude gratuite de votre projet sans aucun engagement »</p></blockquote>
				<div class="descSection">
					<div class="contain">
						<div class="resume">
							<h3>Stéphane Lieumont<br /><span>Graphiste 3D & Webdesigner Freelance</span></h3>
							<p>
							Vous aimeriez créer un site internet design et ergonomique ? Vous voulez donner un impact visuel à vos clients avec des illustrations et des vidéos de qualité ?<br />
							Je vous propose mes services en garantissant des prestations adaptées à vos besoin à des tarifs concurrentiels.<br />
							N’hésitez pas à prendre contact avec moi pour des conseils ou un devis de votre futur projet.				
							</p>
						</div>
					</div>
					<ul class="coordonnees">
						<li ><div class="hi-icon icon-pix-telephone"><span>Téléphone</span></div><p><a href:"tel:+33637353579">06.37.35.35.79</a></p></li>
						<li ><div class="hi-icon icon-pix-mail"><span>Mail</span></div><p>S.lieumont@pixmodels.com</p></li>
						<li ><div class="hi-icon icon-pix-localisation"><span>Adresse</span></div><p>31700 BLAGNAC</p></li>				
					</ul>
				</div>
				<div id="formContact">			
					<form id="form_contact_index" action="Pixmodels-Contact.html#Contact" method="post">
						<div> 
							<div class="champ table-row">
								<input id="nom" name="nom" type="text"  onblur="javascript: if(this.value == ''){this.value='Nom :'}" onclick="javascript: if(this.value == 'Nom :'){this.value=''}" value="Nom :" />
							</div>
							<div class="champ table-row">
								<input id="email" name="email" type="text"  onblur="javascript: if(this.value == ''){this.value='Email :'}" onclick="javascript: this.value=''" value="Email :" />
							</div>
							<div class="champ table-row">
								<input id="sujet" name="sujet" type="text" onblur="javascript: if(this.value == ''){this.value='Objet :'}" onclick="javascript: this.value=''" value="Objet :" />
							</div>
						</div>
						<label class="table-row">Votre message :</label>
						<textarea class="champ table-row" id="message" name="message"></textarea>
						<div class="btn_center"><input class="bouton-red" type="submit" value="Envoyer" />	</div>				
					</form>
					<div id="imgLocalise" class="parallax-window" data-parallax="scroll" data-image-src="./Images/Pixmodels-localisation-Blagnac.jpg" data-z-index="100" data-naturalWidth="1900" data-naturalWidth="700"></div>				
				</div>
			</section>
		</main>
		<?php require "Include/footer.inc.php";?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="JS/jquery-nicescroll.min.js"></script>
		<script src="JS/jquery-letterfx.min.js"></script>
		<script src="JS/jquery-parallax.min.js"></script>
		<script src="JS/main.min.js"></script>
		<script src="JS/contact.min.js"></script>
		
		<script type="text/javascript">				
				$(document).ready(function(){
					$(window).scroll(function(e){parallax();NavFix();})
					$("html").niceScroll({cursorcolor:"#545454", zindex:"999",cursorwidth:"10px", cursorborder:"none",background:"rgba(0,0,0,0.3)", mousescrollstep:45 });
					$(".letterfx").letterfx({"fx":"fade","backwards":false,"timing":30,"fx_duration":"600ms","letter_end":"restore","element_end":"restore"});
					//Disparition de la mention envoyé
					setTimeout(	function (){$(".envoye").fadeOut(1000);}, 2000);	
					//parralaxBackground
					$('.parallax-window').parallax();
					// Menu Mobile
					initMenuMobile();
					
					// Detect appereil navigation					
					var isAndroid = /(android)/i.test(navigator.userAgent);
					var isMobile = /(mobile)/i.test(navigator.userAgent);
					var ios = navigator.userAgent.match(/(iPad)/)
										
					if(isAndroid || isMobile || ios){
						$("#imgLocalise").removeClass("parallax-window").addClass("BG_imgLocalise");
					}else{
						//parralaxBackground
						$('.parallax-window').parallax();
					}
				});	
			 
		</script>  
	</body>
</html>