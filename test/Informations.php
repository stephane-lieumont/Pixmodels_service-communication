<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<title>Fond extensible - version JQUERY</title>
		<link rel="stylesheet" href="Styles/style.min.css" type="text/css" media="screen">
		<link rel="stylesheet" href="Styles/style_infos.min.css" type="text/css" media="screen">	
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Oswald:300,400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php require "Include/nav.inc.php";?>	
		<header>
			<div class="BGminimize" ><img alt="Pixmodels - Profil" src="Images/Apropos-BG.jpg" width="1240" height="458"/></div>
			<div id="coverBG" class="Minimize">				
				<?php require "Include/logo.inc.php";?>
				<div id="present">
					<div id="attract">
						<h2 class="letterfx">Graphiste & Webdesigner indépendant</h2>
					</div>
				</div>
			</div>
		</header>
		<main>
			<section id="Informations" class="overTitle">
				<h2>~ Qui suis-je ? ~</h2>
				<hr>
				<blockquote><p>« Plus qu'un métier, une passion »</p></blockquote>
				<div class="descSection">
					<img alt="Auto-portrait pixmodels" src="Images/Auto-portrait-min-Pixmodels.jpg" />
					<div class="resume">
						<p>Auto-entrepreneur et passionné de nouvelles technologies depuis 2006, j’exécute diverses prestations graphiques au service de mes clients. Mon savoir-faire en matière de graphisme 3D et de développement web me permet de réaliser tous types de prestations. J'exécute mes missions avec un grand sérieux dans les meilleurs délais pour répondre à la demande de mes clients.</p>
						<p>Je me tiens à votre écoute pour étudier votre projet et je m’engage à vous accompagner tout au long de son exécution. Grâce à mon expérience, je mets à votre service mes conseils et ma créativité pour orienter votre projet et le rendre le plus cohérent possible.</p>
						<p>Si vous êtes indépendant, gérant d’une entreprise ou particulier et si vous recherchez un graphiste disponible, sérieux et à votre écoute, je vous invite à prendre contact afin d’étudier, ensemble, votre demande. Si vous avez besoin d’une ressource supplémentaire au sein de votre agence, je me tiens à votre disposition pour intégrer une équipe dans la communication audio-visuel. 						</p>
					</div>
				</div>
			</section>
			<section id="Competences">
				<ul class="listComp">
					<li><div class="round" data-min="0" data-max="100"><p>90%</p></div><h3>Webdesigner</h3></li>
					<li><div class="round" data-min="0" data-max="100"><p>95%</p></div><h3>Graphiste 3D</h3></li>
					<li><div class="round" data-min="0" data-max="100"><p>80%</p></div><h3>Illustration - Print</h3></li>
					<li><div class="round" data-min="0" data-max="100"><p>70%</p></div><h3>Montage vidéos</h3></li>
				</ul>
				<h2>Compétences</h2>
				<ul class="listLog">
					<li><span class="log">Photoshop :</span><span class="progressBarre" data-min="0" data-max="100">90</span></li>
					<li><span class="log">Illustrator :</span><span class="progressBarre" data-min="0" data-max="100">70</span></li>
					<li><span class="log">Indesign :</span><span class="progressBarre" data-min="0" data-max="100">75</span></li>
					<li><span class="log">Dreamweaver :</span><span class="progressBarre" data-min="0" data-max="100">80</span></li>
					<li><span class="log">After Effect :</span><span class="progressBarre" data-min="0" data-max="100">75</span></li>
					<li><span class="log">3DS max :</span><span class="progressBarre" data-min="0" data-max="100">95</span></li>
					<li><span class="log">Z-Brush :</span><span class="progressBarre" data-min="0" data-max="100">90</span></li>
					<li><span class="log">CATIA V5 :</span><span class="progressBarre" data-min="0" data-max="100">96</span></li>
				</ul>
			</section>
		</main>
		<?php require "Include/footer.inc.php";?>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="JS/jquery-nicescroll.min.js"></script>
		<script src="JS/jquery-letterfx.min.js"></script>
		<script src="JS/main.min.js"></script>
		<script src="JS/infos.min.js"></script>		
		<script type="text/javascript">	
				$(document).ready(function(){
					$(window).scroll(function(e){parallax();apparBarr();apparCircle();NavFix();});				
					$("html").niceScroll({cursorcolor:"#545454", zindex:"999",cursorwidth:"10px", cursorborder:"none",background:"rgba(0,0,0,0.3)", mousescrollstep:45 });				
					$(".letterfx").letterfx({"fx":"fade","backwards":false,"timing":30,"fx_duration":"600ms","letter_end":"restore","element_end":"restore"});
					
					// Menu Mobile
					initMenuMobile();
				});
			 
		</script>  
	</body>
</html>