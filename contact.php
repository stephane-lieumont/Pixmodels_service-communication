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
		include "Includes/mail_contact.inc.php";
		return ob_get_clean();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Graphiste et créateur de site Internet en Midi Pyrénées - Contactez Stéphane LIEUMONT Freelance dans la création graphique</title>
		<meta content="fr_FR" property="og:locale">
		<meta content="website" property="og:type">
		<meta content="Pixmodels - Graphiste et Web, Devellopez votre Communication." property="og:title">
		<meta content="Une question ? Un projet ? Infographiste freelance de Midi Pyrénées, 
		vous pouvez me contacter grâce au formulaire de contact. 
		Je répondrai à toutes vos questions dans les meilleurs délais." name="og:description">
		<meta content="http://www.pixmodels.com/" property="og:url">
		<meta content="Pixmodels" property="og:site_name">
		<meta content="Une question ? Un projet ? Infographiste freelance de Midi Pyrénées, vous pouvez me contacter grâce au formulaire de contact. Je répondrai à toutes vos questions dans les meilleurs délais." name="description">
		<meta content="https://www.facebook.com/pages/Pixmodels/725144007533591" property="article:publisher">
		<meta content="https://www.facebook.com/pages/Pixmodels/725144007533591" property="article:author">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">		
		
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->		
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href="Styles/styles.css" type="text/css" rel="stylesheet">	
	</head>
	<body>
		<header>
			<?php include "Includes/header.inc.php";?>
			<?php 			
				if($envoi == true){
					echo"<div class='envoye'><p>Votre message a bien été envoyé</p></div>";				
				}	
			?>
			<section id="bandeau">
				<img src="Images/BG4_slider.jpg" width="1248" height="600" alt="Contactez pixmodels - Stéphane Lieumont"/>
				<div class="msg">	
					<h2 class="textfx">Réalisons ensemble votre projet</h2>
					<p  class="textfx">Contactez-moi pour une estimation budgétaire.</p>				
				</div>
		</section>	
		</header>
		<main>
		<section id="Scontact" class="max_width_art">
				<h2 class="uppercase">Une étude gratuite</h2>
				<hr>
				<h3 class="uppercase">« Une étude gratuite de votre projet sans aucun engagement »</h3>
				<h4>Stéphane LIEUMONT - Graphiste freelance 3D & Web</h4>
				<div id="contact_title">
					<p class="pfirst">Vous aimeriez créer un site internet design et ergonomique ?
					Vous voulez donner un impact visuel à vos clients avec des illustrations et des vidéos de qualité ?<br />
					Je vous propose mes services en garantissant des prestations adaptées à vos besoin à des tarifs concurrentiels.<br />
					N’hésitez pas à prendre contact avec moi pour des conseils ou un devis de votre futur projet.
					</p>
				</div>
				<div id="coordonnees">
				<ul>
						<li><strong>Adresse : </strong>9 Boulevard de l'Europe 31700 Blagnac</li>
						<li><strong>Mail : </strong><a href="mailto:S.Lieumont@pixmodels.com" target="_blank">S.Lieumont@pixmodels.com</a></li>
						<li><strong>Tel : </strong>06.37.35.35.79</li>
						<li><strong>SIRET : </strong>808 298 384 00013</li>
					</ul>
				</div>
			</section>
			<section id="Sform_contact">
				<form id="form_contact" action="Pixmodels-Contact-web-freelance-midi-pyrenees.html" method="post">
					<div class="block_left"> 
						<div class="champ">
							<label for="nom">Votre Nom (*) :</label>
							<input id="nom" name="nom" type="text" /><br />
						</div>
						<div class="champ">
							<label for="email">Votre Email (*) :</label>
							<input id="email" name="email" type="text" /><br />
						</div>
						<div class="champ">
							<label for="sujet">Sujet (*) :</label>
							<input id="sujet" name="sujet" type="text" /><br />
						</div>
					</div>
					<div class="block_right"> 
						<div class="champ">
							<label for="ville">Votre Ville :</label>
							<input id="ville" name="ville" type="text" /><br />
						</div>
						<div class="champ">
							<label for="date">Date du projet :</label>
							<input id="date" name="date" type="text" /><br />
						</div>
						<div class="champ">
							<label for="budget">Budget :</label>
							<input id="budget" name="budget" type="text" /><br />
						</div>
					</div>
					<div class="block_full">
						<label for="message">Message (*):</label>	
						<textarea class="champ" id="message" name="message"></textarea><br />
						<input class="bouton" type="submit" value="Envoyer" />
					</div>
				</form>
				<p class="clear_left"> (*) Champs obligatoires </p>
			</section>
		</main>
		<?php include "Includes/footer.inc.php";?>
		<?php include "Includes/analyticstracking.php";?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="Javascript/jquery-animate-colors-min.js"></script>
		<script type="text/javascript" src="Javascript/jquery-letterfx-min.js"></script>
		<script type="text/javascript" src="Javascript/Main.js"></script>
		<script type="text/javascript">			
			$(document).ready(function(){			
				// Initialisation main js
				MainJS_init();			
				$(".textfx").letterfx({"fx":"fade","backwards":false,"timing":30,"fx_duration":"600ms","letter_end":"restore","element_end":"restore"});
			})
		</script>
	</body>	
</html>
