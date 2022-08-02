<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<title>Fond extensible - version JQUERY</title>		
		<link rel="stylesheet" href="Styles/style.min.css" type="text/css" media="screen">	
		<link rel="stylesheet" href="Styles/style_services.min.css" type="text/css" media="screen">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Oswald:300,400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php require "Include/nav.inc.php";?>	
		<header>
			<div class="BGminimize" ><img alt="Pixmodels - Services et prestations" src="Images/Services-BG.jpg" width="1240" height="462"/></div>
			<div id="coverBG" class="Minimize">				
				<?php require "Include/logo.inc.php";?>	
				<div id="present">
					<div id="attract">
						<h2 class="letterfx">Mes compétences à votre disposition</h2>
					</div>
				</div>
			</div>
		</header>
		<main>
			<section id="prestation" class="overTitle">
				<h2>~ Prestations ~</h2>
				<hr>
				<blockquote><p>« Une gamme de prestations adaptées à votre projet »</p></blockquote>
				<article id="service3d" class="descSection">					
					<div class="imgServ">
						<h3 class="service-a hi-icon icon-pix-models"><span>Graphisme 3D</span></h3>
					</div>
					<div class="resume">
						<p>
						Pour mettre en valeur vos illustrations, vos vidéos ou votre site web, je vous propose mes compétences de Graphiste dans le domaine de la 3D. Je réaliserai des environnements architecturaux, personnages 3D ou divers objets marketing avec un rendu de qualité adapté à vos besoins.<br />
						Projetez vous avant d'acheter ! Vous pourrez visualiser vos projets de construction où de rénovation pour valider vos idées. J'exécuterais ma prestation en faisant une simulation 3D réaliste, et en y intégrant les éléments que vous aurez choisi.
						</p>
						<ul class="listTech">
							<li class="vert" >Modélisation</li>
							<li class="bleu" >Mapping</li>
							<li class="violet" >Textures</li>
							<li class="pale" >Shaders</li>
							<li class="rouge" >Animation</li>
							<li class="orange" >Eclairage</li>
							<li class="vertf" >Compositing</li>							
						</ul>
					</div>
				</article>
				<article id="serviceweb" class="descSection rightPresta">
					<div class="imgServ">
						<h3 class="service-d hi-icon icon-pix-web"><span>Webdesign</span></h3>
					</div>
					<div class="resume">
						<p>
						Profitez du web pour répandre vos idées, développer vos projets, ou encore, présenter votre entreprise. Si vous êtes une entreprise, un artiste ou un particulier, je vous propose de réaliser un site web à votre image. Je mettrai à votre disposition mes compétences et mon savoir-faire pour vous accompagner dans la réussite de votre projet.
						</p>
						<ul class="listOpt">
							<li class="hi-icon icon-pix-chrome"><span>Compatibilité</span></li>
							<li class="hi-icon icon-pix-responsive"><span>Responsive</span></li>
							<li class="hi-icon icon-pix-admin"><span>BackOffice</span></li>
							<li class="hi-icon icon-pix-maintenace"><span>Maintenance</span></li>						
						</ul>
					</div>
				</article>
				<article id="servicePrint" class="descSection">					
					<div class="imgServ">
						<h3 class="service-b hi-icon icon-pix-logo"><span>Identité graphique</span></h3>
					</div>
					<div class="resume">
						<ul>
							<li>
								<h3>Print</h3>					
								<p>Un évènement, une soirée ou une annonce ?<br />					
								Je vous propose de faire une mise en page moderne et attractive pour des affiches ou des flyers. </p>		
							</li>
							<li>
								<h3>Logo</h3>					
								<p>Un logo permet de véhiculer une identité professionnelle, moderne et explicite.<br />
								Quelque que soit votre métier, je peux réaliser votre logo sur-mesure en fonction de vos critères, vos goûts et vos envies.</p>							
							</li>
							<li>
								<h3>Vidéos</h3>					
								<p>Vous voulez partager un événement, mettre en avant votre projet ou présenter votre entreprise ?<br />
								Je vous propose de réaliser un montage vidéo unique et en adéquation avec vos idées. </p>							
							</li>
						</ul>
					</div>
				</article>
			</section>
		</main>
		<?php require "Include/footer.inc.php";?>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="JS/jquery-nicescroll.min.js"></script>
		<script src="JS/jquery-letterfx.min.js"></script>
		<script src="JS/jquery-transit.min.js"></script>
		<script src="JS/main.min.js"></script>
		<script type="text/javascript">
				function parallax(){
					var scrolled = $(window).scrollTop();
					var isSafari = navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent); // true or false
					
					if(!isSafari){
						$('.BGminimize').css('top', (scrolled * 0.5) +'px');						
					}				
				}
				
				function AnimComp(time, interval){
					$(".listTech li").css({opacity:0});
					$(".listTech li").each(					
						function(){	
							var e=$(this);						
							setTimeout( function(){
								e.transition({rotateX:"360deg", opacity:1},600,'Ease').stop();
							}, time);
							time += interval;
						}					
					)
				}
				
				$(document).ready(function(){
					$(window).scroll(function(e){parallax();NavFix();});				
					$("html").niceScroll({cursorcolor:"#545454", zindex:"999",cursorwidth:"10px", cursorborder:"none",background:"rgba(0,0,0,0.3)", mousescrollstep:45 });
					$(".letterfx").letterfx({"fx":"fade","backwards":false,"timing":30,"fx_duration":"600ms","letter_end":"restore","element_end":"restore"});
					
					AnimComp(0, 300);
										
					// Menu Mobile
					initMenuMobile();
				});
			 
		</script>  
	</body>
</html>