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
		<meta charset="UTF-8">
		<title>Pixmodels - Graphiste et Web, Développez votre Communication.</title>
		<meta content="Pixmodels" property="og:site_name">
		<meta name="robots" content="noindex">
 		<meta content="fr_FR" property="og:locale">
		<meta content="website" property="og:type">
		<meta content="Pixmodels - Graphiste et Web, Devellopez votre Communication." property="og:title">
		<meta content="Spécialiste dans le domaine du Web, je vous propose de donner vie à vos projets grâce à internet! 
		Offrez vous un site sur mesure qui représente les valeurs de votre entreprise. 
		Exposez vos idées et vos produits à travers la toile." name="og:description">
		<meta content="http://www.pixmodels.com/" property="og:url">
		<meta content="Spécialiste dans le domaine du Web, je vous propose de donner vie à vos projets grâce à internet! Offrez vous un site sur mesure qui représente les valeurs de votre entreprise. Exposez vos idées et vos produits à travers la toile." name="description">
		<meta content="https://www.facebook.com/pages/Pixmodels/725144007533591" property="article:publisher">
		<meta content="https://www.facebook.com/pages/Pixmodels/725144007533591" property="article:author">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href="Styles/styles.css" type="text/css" rel="stylesheet">
		<link href="Styles/shadowbox.css" type="text/css" rel="stylesheet">
		<link href="Styles/stylesMainSlider.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="megafolio/css/settings.css" media="screen" />
	</head>
	<body>
		<div class="demo-banner">DEMO</div>
		<header id="header" role="banner">
			<?php include "Includes/header.inc.php";?>
			<?php if($envoi == true){ echo"<div class='envoye'><p>Votre message a bien été envoyé</p></div>";	}	?>
			
			<section id="slider" class="fadeInHover">
				<a href="javascript:void(0)" class="prev1 target"></a>
				<a href="javascript:void(0)" class="next1 target"></a>
				<ul id="slides">	
				</ul>
			</section>			
		</header>
		<main>
			<section id="services" class="max_width_art">
				<h2 class="uppercase">Mes services</h2>
				<hr>
				<div id="portrait"><img src="Images/Auto-portrait-min-Pixmodels.jpg" alt="auto-portrait pixmodels" width="200" height="200" /></div>
				<ul id="listServices">
					<li class="block" id="logoGraph">
						<a href="services.php#presta_3d">
							<h4>Graphiste 3D</h4>
							<div class="hover">
								<picture>
								<img srcset="Images/Logos/1_3D-logo_large.png 135w,  Images/Logos/1_3D-logo.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
								   src="Images/Logos/1_3D-logo.png" alt="service pixmodels prestations 3d" width="90" height="90"/>
								</picture>
								<span class="target_hover">																	
									<picture>
									<img srcset="Images/Logos/1_3D-logo_hover_large.png 135w,  Images/Logos/1_3D-logo_hover.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
									   src="Images/Logos/1_3D-logo_hover.png" alt="service pixmodels prestations 3d" width="90" height="90"/>
									</picture>
								</span>
							</div>
						</a>
					</li>
					<li class="block" id="logoVideos">
						<a href="services.php#list_presta">
							<h4>Vidéos</h4>
							<div class="hover">
								<picture>
								<img srcset="Images/Logos/1_video-logo_large.png 135w,  Images/Logos/1_video-logo.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
								   src="Images/Logos/1_video-logo.png" alt="service pixmodels prestations vidéos" width="90" height="90"/>
								</picture>
								<span class="target_hover">																	
									<picture>
									<img srcset="Images/Logos/1_video-logo_hover_large.png 135w,  Images/Logos/1_video-logo_hover.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
									   src="Images/Logos/1_video-logo_hover.png" alt="service pixmodels prestations vidéos" width="90" height="90"/>
									</picture>
								</span>
							</div>
						</a>
					</li>
					<li class="block" id="logoWeb">
						<a href="services.php#presta_web">
							<h4>Web-designer</h4>
							<div class="hover">
								<picture>
								<img srcset="Images/Logos/1_web-logo_large.png 135w,  Images/Logos/1_web-logo.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
								   src="Images/Logos/1_web-logo.png" alt="service pixmodels prestations webmaster webdesign" width="90" height="90"/>
								</picture>
								<span class="target_hover">																		
									<picture>
									<img srcset="Images/Logos/1_web-logo_hover_large.png 135w,  Images/Logos/1_web-logo_hover.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
									   src="Images/Logos/1_web-logo_hover.png" alt="service pixmodels prestations webmaster webdesign" width="90" height="90"/>
									</picture>
								</span>
							</div>
						</a>
					</li>
					<li class="block" id="logoLogo">
						<a href="services.php#list_presta">
							<h4>Logos</h4>
							<div class="hover">
								<picture>
								<img srcset="Images/Logos/1_logo-logo_large.png 135w,  Images/Logos/1_logo-logo.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
								   src="Images/Logos/1_logo-logo.png" alt="service pixmodels prestations logo entreprise" width="90" height="90"/>
								</picture>
								<span class="target_hover">																	
									<picture>
									<img srcset="Images/Logos/1_logo-logo_hover_large.png 135w,  Images/Logos/1_logo-logo_hover.png 90w"  sizes="('min-width: 30em ) 50.0vw, 100vw"
									   src="Images/Logos/1_logo-logo_hover.png" alt="service pixmodels prestations logo entreprise" width="90" height="90"/>
									</picture>
								</span>
							</div>
						</a>
					</li>
				</ul>
				<div id="pservices">
					<div class="pleft">
						<div class="zigzag"><h3>Pourquoi faire appel à un professionnel ?</h3></div>
						<p class="pfirst">Le web et les illustrations sont des outils indispensables pour
						donner une image sérieuse et engagée d’une entreprise.<br />
						Un professionnel peut façonner votre site à l’image de votre 
						entreprise tout  en intégrant les dernières nouveautés. 
						Il vous aidera également à mettre en valeur votre stratégie 
						marketing.<br />
						Vous serez référencé sur la toile et votre impact de
						communication sera d’autant plus fort.
						</p>
					</div>
					<div class="pright">
						<div class="zigzag"><h3>Mes engagements</h3></div>
						<p class="pfirst">Quelque que soit votre entreprise, Vous disposerez de mes connaissances 
						qui répondront à vos critères, afin de vous orienter et créer un site professionnel ergonomique.
						Vous serez assisté dans vos premiers pas sur la toile pour faire
						évoluer votre identité dans les meilleurs conditions.<br />
						Je mettrai en valeur l'image de votre entreprise grâce à des supports 
						marketing de qualité.
						</p>
					</div>
				</div>
			</section>
			<section id="creation_graphique">
				<h2 class="uppercase">Portfolio</h2>
				<hr>
				<div class="category-filter">
					<div class="center">
						<ul>
							<li class="filter selected" data-category="cat-all">Travaux 3D</li>
							<li class="filter" data-category="cat-one">Personnages 3D</li>
							<li class="filter" data-category="cat-two">Architecture</li>
							<li class="filter" data-category="cat-three">Décoration</li>
							<li class="filter" data-category="cat-four">Objets 3d</li>
							<li class="filter" data-category="cat-five">Vidéos</li>
						</ul>
					</div>
				</div>
				<div class="portfolio-container">
					<div class="grid-fullwidth">
						<div class="megafolio-container noborder norounded">
							<!--Thumbnail 1 Start-->
							<div class="mega-entry cat-all cat-one" id="entry-24" data-src="Images/Portfolio/Graphiste/24_thumb_Legos-minions_2015.jpg" data-width="504" data-height="400">
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Légos Minions - Pause Bannana !
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Légos Minions - Pause Bannana !" href="Images/Portfolio/Graphiste/24_1_Legos-Minions_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 1 Start-->
							<div class="mega-entry cat-all cat-one" id="entry-1" data-src="Images/Portfolio/Graphiste/1_thumb_escart-wild_2015.jpg" data-width="504" data-height="400">
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Escart Wild
										<div class="mega-hoversubtitle">3DS max - Vray - Zbrush</div>
									</div>
									<a data-rel="shadowbox" title="Escart Wild" href="Images/Portfolio/Graphiste/1_1_escart-wild_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 2 Start-->
							<div class="mega-entry cat-all cat-one" id="entry-2" data-src="Images/Portfolio/Graphiste/2_thumb_bibopp_2015.jpg" data-width="504" data-height="400">
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Bibopp
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Bibopp le robot"  href="Images/Portfolio/Graphiste/2_1_bibopp_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 3 Start-->
							<div class="mega-entry cat-all cat-one" id="entry-3" data-src="Images/Portfolio/Graphiste/3_thumb_pelluche_2015.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Pelluche 3D
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Pelluche 3D"  href="Images/Portfolio/Graphiste/3_1_pelluche_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 4 Start-->
							<div class="mega-entry cat-all cat-one" id="entry-4" data-src="Images/Portfolio/Graphiste/4_thumb_gorgotte_2015.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Gorgotte
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Gorgotte"  href="Images/Portfolio/Graphiste/4_1_gorgotte_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 5 Start-->
							<div class="mega-entry cat-all cat-one" id="entry-5" data-src="Images/Portfolio/Graphiste/5_thumb_auto-portrait_2014.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Auto-portrait
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Auto-portrait - Stéphane Lieumont"  href="Images/Portfolio/Graphiste/5_1_auto-portrait_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 6 Start-->
							<div class="mega-entry cat-all cat-three" id="entry-6" data-src="Images/Portfolio/Graphiste/6_thumb_immeuble_2015.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Immeuble
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Immeuble"  href="Images/Portfolio/Graphiste/6_1_immeuble_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 7 Start-->
							<div class="mega-entry cat-all cat-three" id="entry-7" data-src="Images/Portfolio/Graphiste/7_thumb_maison-moderne_2014.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Maison Moderne
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Maison Moderne"  href="Images/Portfolio/Graphiste/7_1_maison-moderne_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 8 Start-->
							<div class="mega-entry cat-all cat-three" id="entry-8" data-src="Images/Portfolio/Graphiste/8_thumb_maison-abondon_2015.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Maison abandonnée
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Maison abandonnée"  href="Images/Portfolio/Graphiste/8_1_maison-abondon_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 9 Start-->
							<div class="mega-entry cat-all cat-two" id="entry-9" data-src="Images/Portfolio/Graphiste/9_thumb_salon-decoration1-nuit_2015.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">	
									<div class="mega-hovertitle">Décoration salon - Nuit
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox[salon-decoration1-nuit]" title="Décoration salon - Caméra 1 Nuit"  href="Images/Portfolio/Graphiste/9_1_salon-decoration1-nuit_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
									<a data-rel="shadowbox[salon-decoration1-nuit]" title="Décoration salon - Caméra 2 Nuit"  href="Images/Portfolio/Graphiste/9_2_salon-decoration1-nuit_2015.jpg">					
									</a>				
								</div>
							</div>
							<!--Thumbnail End-->	
							<!--Thumbnail 10 Start-->
							<div class="mega-entry cat-all cat-two" id="entry-10" data-src="Images/Portfolio/Graphiste/10_thumb_chambre-decoration1-jour.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">
									<div class="mega-hovertitle">Décoration chambre
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox[chambre-decoration1-jour]" title="Décoration chambre - Caméra 1"  href="Images/Portfolio/Graphiste/10_1_chambre-decoration1-jour.jpg">
										<div class="mega-hoverview"></div>
									</a>
									<a data-rel="shadowbox[chambre-decoration1-jour]" title="Décoration chambre - Caméra 2"  href="Images/Portfolio/Graphiste/10_2_chambre-decoration1-jour.jpg">
									</a>
									<a data-rel="shadowbox[chambre-decoration1-jour]" title="Décoration chambre - Caméra 3"  href="Images/Portfolio/Graphiste/10_3_chambre-decoration1-jour.jpg">
									</a>	
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 11 Start-->
							<div class="mega-entry cat-all cat-two" id="entry-11" data-src="Images/Portfolio/Graphiste/11_thumb_sdb-decoration-jour_2015.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">						
									<div class="mega-hovertitle">Décoration salle de bain
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>			
									<a data-rel="shadowbox[sdb-decoration-jour]" title="Décoration salle de bain - Caméra 1"  href="Images/Portfolio/Graphiste/11_1_sdb-decoration-jour_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
									<a data-rel="shadowbox[sdb-decoration-jour]" title="Décoration salle de bain - Caméra 2"  href="Images/Portfolio/Graphiste/11_2_sdb-decoration-jour_2015.jpg">
									</a>
									<a data-rel="shadowbox[sdb-decoration-jour]" title="Décoration salle de bain - Caméra 3"  href="Images/Portfolio/Graphiste/11_3_sdb-decoration-jour_2015.jpg">
									</a>						
								</div>
							</div>
							<!--Thumbnail End-->				
							<!--Thumbnail 12 Start-->
							<div class="mega-entry cat-all cat-two" id="entry-12" data-src="Images/Portfolio/Graphiste/12_thumb_salon-decoration1-jour_2015.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">			
									<div class="mega-hovertitle">Décoration salon
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>						
									<a data-rel="shadowbox[salon-decoration1-jour]" title="Décoration salon - Caméra 1"  href="Images/Portfolio/Graphiste/12_1_salon-decoration1-jour_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
									<a data-rel="shadowbox[salon-decoration1-jour]" title="Décoration salon - Caméra 2"  href="Images/Portfolio/Graphiste/12_2_salon-decoration1-jour_2015.jpg">
									</a>
									<a data-rel="shadowbox[salon-decoration1-jour]" title="Décoration salon - Caméra 3"  href="Images/Portfolio/Graphiste/12_3_salon-decoration1-jour_2015.jpg">
									</a>
									<a data-rel="shadowbox[salon-decoration1-jour]" title="Décoration salon - Caméra 4"  href="Images/Portfolio/Graphiste/12_4_salon-decoration1-jour_2015.jpg">
									</a>									
								</div>
							</div>
							<!--Thumbnail End-->					
							<!--Thumbnail 13 Start-->
							<div class="mega-entry cat-all cat-four" id="entry-13" data-src="Images/Portfolio/Graphiste/13_thumb_ampoule_2014.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">						
									<div class="mega-hovertitle">Ampoule 3D
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>						
									<a data-rel="shadowbox" title="Ampoule 3D"  href="Images/Portfolio/Graphiste/13_1_ampoule_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>						
								</div>
							</div>
							<!--Thumbnail End-->				
							<!--Thumbnail 14 Start-->
							<div class="mega-entry cat-all cat-four" id="entry-14" data-src="Images/Portfolio/Graphiste/14_thumb_canette-de-soda_2014.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">					
									<div class="mega-hovertitle">Canette de soda
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>				
									<a data-rel="shadowbox" title="Canette de soda"  href="Images/Portfolio/Graphiste/14_1_canette-de-soda_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>						
								</div>
							</div>
							<!--Thumbnail End-->				
							<!--Thumbnail 15 Start-->
							<div class="mega-entry cat-all cat-four" id="entry-15" data-src="Images/Portfolio/Graphiste/15_thumb_salle-des-fetes_2015.jpg" data-width="504" data-height="400">						
								<div class="mega-hover alone">		
									<div class="mega-hovertitle">Salle des fêtes
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>				
									<a data-rel="shadowbox[salle-des-fetes_2015.jpg]" title="Salle des fêtes - Caméra 1"  href="Images/Portfolio/Graphiste/15_1_salle-des-fetes_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
									<a data-rel="shadowbox[salle-des-fetes_2015.jpg]" title="Salle des fêtes - Caméra 2"  href="Images/Portfolio/Graphiste/15_2_salle-des-fetes_2015.jpg">
									</a>
									<a data-rel="shadowbox[salle-des-fetes_2015.jpg]" title="Salle des fêtes - Caméra 3"  href="Images/Portfolio/Graphiste/15_3_salle-des-fetes_2015.jpg">
									</a>								
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 16 Start-->
							<div class="mega-entry cat-all cat-foor" id="entry-16" data-src="Images/Portfolio/Graphiste/16_thumb_biere_2015.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">						
									<div class="mega-hovertitle">Bières " Publicité "
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title='Bières " Publicité "'  href="Images/Portfolio/Graphiste/16_1_biere_2015.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->			
							<!--Thumbnail 19 Start-->
							<div class="mega-entry cat-all cat-three" id="entry-19" data-src="Images/Portfolio/Graphiste/17_thumb_Interieur-blanc_2014.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">						
									<div class="mega-hovertitle">Intérieur Blanc
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Intérieur Blanc"  href="Images/Portfolio/Graphiste/17_1_Interieur-blanc_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>						
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 20 Start-->
							<div class="mega-entry cat-all cat-foor" id="entry-20" data-src="Images/Portfolio/Graphiste/18_thumb_herbe-realiste_2014.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">			
									<div class="mega-hovertitle">Herbe réaliste 3D
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Herbe réaliste"  href="Images/Portfolio/Graphiste/18_1_herbe-realiste_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 21 Start-->
							<div class="mega-entry cat-all cat-foor" id="entry-21" data-src="Images/Portfolio/Graphiste/19_thumb_pommes_2014.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">				
									<div class="mega-hovertitle">Pommes reinettes 3D
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Pommes reinettes 3D"  href="Images/Portfolio/Graphiste/19_1_pommes_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>							
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 22 Start-->
							<div class="mega-entry cat-all cat-foor" id="entry-22" data-src="Images/Portfolio/Graphiste/20_thumb_tomates_2014.jpg" data-width="504" data-height="400">							
								<div class="mega-hover alone">				
									<div class="mega-hovertitle">Tomates réalistes 3D
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox" title="Tomates réalistes 3D"  href="Images/Portfolio/Graphiste/20_1_tomates_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>						
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 15 Start-->
							<div class="mega-entry cat-all cat-four" id="entry-15" data-src="Images/Portfolio/Graphiste/21_thumb_decoration-mariage_2014.jpg" data-width="504" data-height="400">						
								<!--Hover Effect Start-->
								<div class="mega-hover alone">						
									<div class="mega-hovertitle">Décoration de mariage
										<div class="mega-hoversubtitle">3DS max - Vray</div>
									</div>
									<a data-rel="shadowbox[deco-mariage]" title="Décoration de mariage - Caméra 1"  href="Images/Portfolio/Graphiste/21_1_decoration-mariage_2014.jpg">
										<div class="mega-hoverview"></div>
									</a>
									<a data-rel="shadowbox[deco-mariage]" title="Décoration de mariage - Caméra 2"  href="Images/Portfolio/Graphiste/21_2_decoration-mariage_2014.jpg">
									</a>
									<a data-rel="shadowbox[deco-mariage]" title="Décoration de mariage - Caméra 3"  href="Images/Portfolio/Graphiste/21_3_decoration-mariage_2014.jpg">
									</a>								
								</div>
							</div>
							<!--Thumbnail End-->							
							<!--Thumbnail 23 Start-->
							<div class="mega-entry cat-all cat-five" id="entry-23" data-src="Images/Portfolio/Graphiste/22_thumb_mars-planete-rouge_2010.jpg" data-width="504" data-height="400">
								<div class="mega-hover alone">				
									<div class="mega-hovertitle">Mars, la planète rouge
										<div class="mega-hoversubtitle">3DS max - Mental Ray</div>
									</div>		
									<a href="http://www.youtube.com/v/ShOBMB5Qhw4" title="Mars, la planète rouge- Production 2010" data-rel="shadowbox;width=900;height=507;player=iframe"><div class="mega-hoverview"></div></a>									
								</div>
							</div>
							<!--Thumbnail End-->
							<!--Thumbnail 24 Start-->
							<div class="mega-entry cat-all cat-five" id="entry-24" data-src="Images/Portfolio/Graphiste/23_thumb_voyage-sys-sol_2010.jpg" data-width="504" data-height="400">
								<div class="mega-hover alone">				
									<div class="mega-hovertitle">Voyage au cœur du système solaire
										<div class="mega-hoversubtitle">3DS max - Mental Ray</div>
									</div>						
									<a href="http://www.youtube.com/v/ShOBMB5Qhw4" title="Voyage au cœur du système solaire - Production 2010" data-rel="shadowbox;width=900;height=507;player=iframe"><div class="mega-hoverview"></div></a>								
								</div>
							</div>
						<!--Thumbnail End-->
					   </div>
					</div>
				</div>
			</section>
			<section id="creation_web">
				<h2 class="uppercase">Réalisations web</h2>
				<hr>
				<div id="navSites">
					<div class="precedent_slider">Précédent</div>
					<div class="suivant_slider">Suivant</div>
				</div>
				<div id="slide_web">
					<article id="Site1" data-name="Coins1"  data-year="2014">				
						<div class="pleft">
							<p class="bouton_plus"><a href="#"  target="_blank" title="coins-recettes.fr">Visiter le site</a></p>
							<div class="crea_web_slide">
								<ul class="slides">
									<li><img alt="" src="Images/Portfolio/Web/Coins-recettes-fr_apercu.png" width="485" height="328" /></li>
									<li><img alt="" src="Images/Portfolio/Web/Coins-recettes-fr_apercu2.jpg" width="485" height="328" /></li>
									<li><img alt="" src="Images/Portfolio/Web/Coins-recettes-fr_apercu3.jpg" width="485" height="328" /></li>
									<li><img alt="" src="Images/Portfolio/Web/Coins-recettes-fr_apercu4.jpg" width="485" height="328" /></li>
								</ul>
							</div>
						</div>
						<div class="pright">
							<div class="zigzag"><h3>Coins-recettes.fr</h3></div>						
							<p class="pfirst">
								Ce site communautaire est le résultat d’un projet centré sur la gastronomie française.
								L'objectif était d’obtenir un design épuré et moderne afin de donner un aspect simple et convivial 
								pour ce type de blog. Sa conception comprend une interface utilisateur simple pour gérer un livre de 
								recettes et permettre aux utilisateurs de publier leurs créations culinaires.
							</p>
							<p>
								C'est un développement en Php et javascript, avec de nombreuses classes spécialement créées pour le projet. Cela permet
								d'avoir une plus grande rapidité de navigation, un traitement plus fiable et une compatibilité maitrisée.
								Une interface administrateur permet de contrôler et de gérer les publications ainsi que tous leurs commentaires.						
							</p>							
						</div>										
					</article>		
					<article id="Site2" data-name="Coins2" data-year="2014">					
						<div class="pleft">
							<p class="bouton_plus"><a href="#"  target="_blank" title="mademoiselle-madame.fr">Visiter le site</a></p>
							<div class="crea_web_slide">
								<ul class="slides">
									<li><img alt="" src="Images/Portfolio/Web/mademoiselle-madame_apercu.png" width="485" height="328" /></li>
									<li><img alt="" src="Images/Portfolio/Web/Madmoiselle_madame_responsive.png" width="485" height="328" /></li>
								</ul>
							</div>
						</div>
						<div class="pright">
							<div class="zigzag"><h3>Mademoiselle-madame.fr</h3></div>			
							<p class="pfirst">
								Site crée en septembre 2014 pour le compte de Mlle-Mme, Wedding-Planer dans la région Midi-Pyrénées.<br />
								Pour développer ce site, je devais respecter les exigences de ma cliente qui souhaitait un site représentatif de son domaine d'activité.
								Il m'a été également demandé d'y incorporer un espace administrateur pour y ajouter des articles sur des décorations de mariage.<br />
							</p>
							<p>
								Mon objectif été de réaliser un site avec un design sobre et moderne qui devait respecter sa personnalité.<br />
								L'ergonomie a été pensé pour faciliter la navigation des personnes à la recherche d'un Wedding-Planer.					
							</p>							
						</div>										
					</article>
				</div>
				<ul class="dates_timlines">
					<li id="2011"><span>2011</span></li>
					<li id="2012"><span>2012</span></li>
					<li id="2013"><span>2013</span></li>
					<li id="2014"><span>2014</span></li>
					<li id="2015"><span>2015</span></li>
				</ul>
			</section>
			<section id="contact">
				<h2 class="uppercase">Contactez-moi</h2>
				<hr>
				<div id="localisation"><img alt="localisation" src="Images/localisation.jpg"/></div>
				<form id="form_contact_index" action="Pixmodels-Graphiste-web-freelance-midi-pyrenees.html" method="post">
					<ul>
						<li><strong>Mail : </strong>S.Lieumont@pixmodels.com</li>
						<li><strong>Add : </strong>9 Boulevard de l'europe 31700 BLAGNAC</li>
						<li><strong>Tel : </strong>06.37.35.35.79</li>
					</ul>
					<div> 
						<div class="champ">
							<label for="nom">Votre Nom :</label>
							<input id="nom" name="nom" type="text" /><br />
						</div>
						<div class="champ">
							<label for="email">Votre Email :</label>
							<input id="email" name="email" type="text" /><br />
						</div>
						<div class="champ">
							<label for="sujet">Objet :</label>
							<input id="sujet" name="sujet" type="text" /><br />
						</div>
					</div>							
					<div>
						<textarea class="champ" id="message" name="message"></textarea><br />
						<input class="bouton" type="submit" value="Envoyer" />
					</div>
				</form>
			</section>			
		</main>
		<?php include "Includes/footer.inc.php";?>
		<?php include "Includes/analyticstracking.php";?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="Javascript/jquery-cycle-all.js"></script>	
		<script type="text/javascript" src="Javascript/jquery-easing.js"></script>
		<script type="text/javascript" src="megafolio/js/jquery-themepunch-plugins-min.js"></script>
		<script type="text/javascript" src="megafolio/js/jquery-themepunch-megafoliopro.js"></script>		
		<script type="text/javascript" src="Javascript/shadowbox.js"></script>	
		<script type="text/javascript" src="Javascript/jquery-flexslider.js"></script>	
		<script type="text/javascript" src="Javascript/jquery-animate-colors-min.js"></script>	
		<script type="text/javascript" src="Javascript/Main.js"></script>
		<script type="text/javascript">		
		
		$(document).ready(function(){			
			// Initialisation main js
			MainJS_init();
			// Ajout des images Slider principal dans le code HTML
			append_img_slide(1, 'Images/Slide1',"Architecture Design","Nouvelle dimension pour vos projets !", "Plus question de commencer les travaux les yeux fermés !<br> Donnez vie à vos futurs projets grâce à un rendu 3D de qualité.");
			append_img_slide(2, 'Images/Slide2',"Décoration et rénovation","Aperçu avant impression ?", "Faites une simulation 3D pour concrétiser vos idées !");
			append_img_slide(3, 'Images/Slide3',"Développez votre communication","Un message à faire passer ?", "Optimisez l'image de votre marque auprès de vos clients.<br /> Valorisez votre commerce et vos produits.");
			append_img_slide(4, 'Images/Slide4',"Personnages 3D","Animation ou modélisation ?", "Je suis à votre service pour tous types de prestations 3D.");
		
			//CREATION WEB				
			var nbr_site = $('#slide_web > *').length;			
			var width_max_ul = (nbr_site * 100) + "%";
			var width_max_li = (100 / nbr_site) - ((10 / nbr_site)*2) + "%"; //On calcul le pourcentage de width pour divisé les sites
			var pad_max_li = (10 / nbr_site) + "%"; //On calcul le pourcentage de padding pour divisé les sites
			var left_max = -((nbr_site-1) * 100);
			var pourcentLeft = parseInt($('#slide_web').css('left'))/ $(window).width()*100;
			//Slider creation web
			$('.crea_web_slide').flexslider({
				animation: "slide",
				controlNav: true,
				directionNav: false
			});
			// Variable pour la mise a jour de la date du site
			var SiteSelectID = 1;
			var SiteSelect = 'Site1';
			var ElementSiteSelect = document.getElementById(SiteSelect);
			var Year = ElementSiteSelect.dataset.year;
			var pourcent = parseInt($('#slide_web').css("left"))/ $(window).width()*100;
			
			udt_year(Year);// On met a jour la date 1er site présenté				
			$("#creation_web #slide_web").css({"width":width_max_ul});
			$("#creation_web article").css({"width":width_max_li, "padding-left":pad_max_li, "padding-right":pad_max_li});					
			// Slider Web Creation principale - configuration boutons
			$(".suivant_slider").click(function(){				
				SiteSelectID++;				
				check_nav(SiteSelectID,"left");	// cacher bouton nav
				udt_year(udt_var(SiteSelectID));//mise a jour de l'année de création
				udt_position("left");// animation du slider création web				
			})
			
			$(".precedent_slider").click(function(){				
				SiteSelectID--;
				check_nav(SiteSelectID,"right");	// cacher bouton nav		
				udt_year(udt_var(SiteSelectID));//mise a jour de l'année de création
				udt_position("right");// animation du slider création web
			})
			
			function udt_year(year){
				$(".dates_timlines li").removeClass("selected");
				$("#" + year).addClass("selected");		
			}
			function udt_var(id){
				SiteSelect = 'Site' + id;
				ElementSiteSelect = document.getElementById(SiteSelect);
				Year = ElementSiteSelect.dataset.year;				
				return Year			
			}			
			function udt_position(direction){
				pourcent = parseInt($('#slide_web').css("left"))/ $(window).width()*100;
				if(direction == "left"){					
					$("#creation_web #slide_web").animate({"left": pourcent - 100 +"%"}, 200);					
				}else if(direction == "right"){
					$("#creation_web #slide_web").animate({"left": pourcent + 100 +"%"}, 200);				
				}
			}
			function check_nav(siteID, direction){
				var target_visible;
				var target_hidden;				
				if(direction == "left"){
					target_hidden = $(".suivant_slider");
					target_visible = $(".precedent_slider");
					Next_siteID = siteID + 1;
				}else if(direction == "right"){
					target_hidden = $(".precedent_slider");
					target_visible = $(".suivant_slider");
					Next_siteID = siteID - 1;
				}				
				SiteSelect = '#Site' + Next_siteID;				
				if($(SiteSelect).length === 0){					
					$(target_hidden).css({visibility:"hidden"});
					$(target_visible).css({visibility:"visible"});
				}
			}
			
			//FADE HOVER DOUBLE Images			
			$(".fadehover").hover(						
				function() {
					$(this).find("img.a").stop().animate({opacity: "0"}, 150);
					$(this).find("img.b").stop().animate({opacity: "1"}, 150);
				},
				function() {
					$(this).find("img.a").stop().animate({opacity: "1"}, 150);
					$(this).find("img.b").stop().animate({opacity: "0"}, 150);
				}
			);	
			
			// MEGAFOLIO PRO GALLERY SETTING
			var api=jQuery('.megafolio-container').megafoliopro(
			{
				filterChangeAnimation:"rotatescale",
				filterChangeSpeed:600,
				filterChangeRotate:30,
				filterChangeScale:0.6,          
				delay:20,
				paddingHorizontal:0,
				paddingVertical:0,
				layoutarray:[17]
			 });
			
			jQuery('.filter').click(function() {
				jQuery('.filter').each(function() { jQuery(this).removeClass("selected")});
				api.megafilter(jQuery(this).data('category'));
				jQuery(this).addClass("selected");
			 });
			 			 

			// hover slider principale
			$(".fadeInHover").find(".target").hide();
			$(".fadeInHover").hover(
				function(){$(".fadeInHover .target").fadeIn(300);},
				function(){$(".fadeInHover .target").fadeOut(300);}
			)

			
			
			// SHADOWBOX INIT
			Shadowbox.init({players: ['img', 'iframe'], overlayOpacity:0.93})
			
			
		})
			
		$(window).load(			
		// INITIALISATION DU SLIDER
		function(){		
			// init Cycle for slider
			$('#slides').after('<div id="circle-pager">').cycle({
				fx:      'fade', 
				speed:    800, 
				timeout:  8000,
				cleartype:  true,
				cleartypeNoBg: false,
				pager: '#circle-pager',
				next:  '#slider .next1', 
				prev:  '#slider .prev1',
				slideResize: false,
				fit: 0,
				width: '100%',
				before:  function(currSlideElement, nextSlideElement) { 
					// hide elements and put them in start position		
					$(this).find('.slide-image').css({
						'opacity': '0',
						'right': '-50px'
					});
					$(this).find('.slide-text').css({
						'opacity': '0',
						'left': '-50px'
					});
					$(this).find('.slide-text p').css({
						'opacity': '0',
						'left': '15px'
					});
					$(this).find('.slide-image img').css({
						'opacity': '0',
						'right': '-100px'
					});
				},
				after:  function(currSlideElement, nextSlideElement) { 			
					// fade in image
					$(this).find('.slide-image').animate({
						'opacity': '1',
						'right': '0'
					}, 500, 'linear');
					// bring the text box from top
					$(this).find('.slide-text').delay(500).animate({
						'opacity': '1',
						'left': '0'
					}, 500, 'easeOutBack');
					// bring the paragraphs in
					$(this).find('.slide-text p:eq(0)').delay(500).animate({
						'opacity': '1',
						'left': '0'
					}, 500, 'easeOutBack');
					$(this).find('.slide-text p:eq(1)').delay(700).animate({
						'opacity': '1',
						'left': '0'
					}, 500, 'easeOutBack');
					$(this).find('.slide-text p:eq(2)').delay(900).animate({
						'opacity': '1',
						'left': '0'
					}, 500, 'easeOutBack');
					$(this).find('.slide-text p:eq(3)').delay(1100).animate({
						'opacity': '1',
						'left': '0'
					}, 500, 'easeOutBack');
					// bring the front images in
					$(this).find('.slide-image img:eq(0)').delay(500).animate({
						'opacity': '1',
						'right': '0'
					}, 800, 'easeOutBack');
					$(this).find('.slide-image img:eq(1)').delay(700).animate({
						'opacity': '1',
						'right': '0'
					}, 800, 'easeOutBack');
					$(this).find('.slide-image img:eq(2)').delay(900).animate({
						'opacity': '1',
						'right': '0'
					}, 800, 'easeOutBack');
					$(this).find('.slide-image img:eq(3)').delay(1100).animate({
						'opacity': '1',
						'right': '0'
					}, 800, 'easeOutBack');

				} 
			});
		});

		function append_img_slide(id, src, msg1, msg2, msg3){// Ajout d'image dans le slider
			var screen_width = document.documentElement.clientWidth 
			var prefix_img = "small";
		
			if (screen_width > 1024){
				prefix_img = "large";			
			}else if (screen_width > 900){
				prefix_img = "medium";
			}else if (screen_width > 480){
				prefix_img = "small";
			}
			
			$("#slides").last().append("<li class='slide'><div class='wrapper'><div class='slide-text'><p class='sub-heading-upper'>"+msg1+"</p><p class='big'>"+msg2+"</p><p>"+msg3+"</p></div><div class='slide-image'></div></div><div id='slide-back"+id+"' class='slide-back'></div></li>")
			
			var img = new Image();
			img.onload = function()
			{				
				$("#slide-back"+id).hide();
				$("#slide-back"+id).append(img);
				$("#slide-back"+id).fadeIn(1000);
				setTimeout(function(){
					$("#header").css({"background-image":"none"});					
				},1500)			
			}

			img.ready = function()
			{				
				$("#slide-back"+id).fadeIn(1000);
				setTimeout(function(){
					$("#header").css({"background-image":"none"});					
				},1500)			
			}
			
			img.src = src+"_"+prefix_img+".jpg";
		}	

	</script>
	
	</body>	
</html>
