<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Graphiste et créateur de site Internet en Midi Pyrénées - Stéphane LIEUMONT est un passionné de nouvelles technologies</title>
		<meta content="fr_FR" property="og:locale">
		<meta content="website" property="og:type">
		<meta content="Pixmodels - Graphiste et Web, Développez votre Communication." property="og:title">
		<meta content="Réalisons ensemble vos projets pour développer votre image. Je m'engage à vous accompagner pour donner une image engagé de votre entreprise." name="og:description">
		<meta content="http://www.pixmodels.com/" property="og:url">
		<meta content="Pixmodels" property="og:site_name">
		<meta content="Réalisons ensemble vos projets pour développer votre image. Je m'engage à vous accompagner pour donner une image engagé de votre entreprise." name="description">
		<meta content="https://www.facebook.com/pages/Pixmodels/725144007533591" property="article:publisher">
		<meta content="https://www.facebook.com/pages/Pixmodels/725144007533591" property="article:author">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">	
		
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->				
		<link href="Styles/styles.css" type="text/css" rel="stylesheet">	
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<?php include "Includes/header.inc.php";?>
			<section id="bandeau">
				<img src="Images/BG2_slider.jpg" width="1024" height="678" alt="Caricature de Stéphane Lieumont - Pixmodels"/>
				<div class="msg">	
					<h2 class="textfx">Graphiste indépendant</h2>
					<p  class="textfx">A votre écoute pour la réalisation de tous vos projets</p>
				</div>
			</section>		
		</header>		
		<main>
			<section id="informations" class="max_width_art">
				<h2 class="center uppercase">Qui suis-je ?</h2>
				<hr>				
				<div id="info_sup">
					<picture>
						<img id="autoPortrait" srcset="Images/Auto-portrait-Pixmodels.jpg 135w,  Images/Auto-portrait-Pixmodels_small.jpg 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
					   src="Images/Auto-portrait-Pixmodels_small.jpg" alt="Caricature de Stéphane Lieumont - Pixmodels" width="635" height="355"/>
					</picture>
					<div id="exp_info">						
						<ul>
							<li class="color_green">Expérience professionnel</li>
							<li class="color_orange">Expérience amateur</li>
						</ul>						
						<img id="exp" src="Images/Competences.png" height="100" width="100" alt="Caricature de Stéphane Lieumont - Pixmodels"/>
					</div>
				</div>	
				<h3>« Plus qu'un métier, une passion »</h3>			
				<p class="pfirst">Auto-entrepreneur et passionné de nouvelles technologies depuis 2006, j’exécute diverses prestations
				graphiques au service de mes clients. Mon savoir-faire en matière de graphisme 3D et de développement web me permet de réaliser
				tous types de prestations. J'exécute mes missions avec un grand sérieux dans les meilleurs délais pour répondre à la demande de mes clients.</p>
				<p>Je me tiens à votre écoute pour étudier votre projet et je m’engage à vous accompagner tout au long de son exécution.
				Grâce à mon expérience, je mets à votre service mes conseils et ma créativité pour orienter votre projet et le rendre
				le plus cohérent possible.<br />
				Si vous êtes indépendant, gérant d’une entreprise ou particulier et si vous recherchez un graphiste disponible,
				sérieux et à votre écoute, je vous invite à prendre contact afin d’étudier, ensemble, votre demande.
				Si vous avez besoin d’une ressource supplémentaire au sein de votre agence, je me tiens à votre disposition
				pour intégrer une équipe dans la communication audio-visuel.
				</p>
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
