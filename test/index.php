<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Fond extensible - version JQUERY</title>
		<link rel="stylesheet" href="Styles/style.min.css" type="text/css" media="screen">
		<link rel="stylesheet" href="Styles/style_accueil.min.css" type="text/css" media="screen">
		<link rel="stylesheet" href="Styles/Shadowbox.min.css" type="text/css" media="screen">			
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
		<div id="chargement">
			<canvas id="Loader" width="300" height="300"></canvas> 
			<canvas id="PreLoader" width="300" height="300"></canvas> 		
		</div>		
		<div id="LoadContainer">
			<?php if($envoi == true){ echo"<div class='envoye'><p>Votre message a bien été envoyé</p></div>";	}	?>
			<?php require "Include/nav.inc.php";?>
			<header id="BGzoom">			
				<ul class="containBG">
					<li id="diapo1" class="superbg activebg">
						<figure>
							<img class="initZoom" alt="Maison moderne 3d - Pixmodel" src="Images/Main-Slider-Pixmodels-Maison-Moderne.jpg" width="1900" height="1069" />
						</figure>
					</li>
					<li id="diapo2" class="superbg-hidden">
						<figure>
							<img alt="Maison moderne 3d - Pixmodls" src="Images/Main-Slider-Pixmodels-Decoration.jpg" width="1900" height="1069"/>
						</figure>
					</li>
					<li id="diapo3" class="superbg-hidden">
						<figure>
							<img alt="Maison moderne 3d - Pixmodles" src="Images/Main-Slider-Pixmodels-Publicite.jpg" width="1900" height="1069"/>
						</figure>
					</li>
					<li id="diapo4" class="superbg-hidden">
						<figure>
							<img alt="Maison moderne 3d - Pixmodels" src="Images/Main-Slider-Pixmodels-Personnage.jpg" width="1900" height="1069"/>
						</figure>
					</li>				
				</ul>
				<div id="coverBG">
					<?php require "Include/logo.inc.php";?>
					<div>
						<div id="present">
							<ul id="attract">
								<li class="accHide">
									<h2>Stéphane Lieumont</h2>
									<p>Graphiste 3D et Webdesigner </p>							
								</li>
								<li class="accHide">
									<h2>Aperçu avant impression ?</h2>
									<p>Faites une simulation 3D pour concrétiser vos idées !</p>
								</li>
								<li class="accHide">
									<h2>Développez votre communication !</h2>
									<p>Optimisez l'image de votre marque auprès de vos clients.<br /> 
									Valorisez votre commerce et vos produits.
									</p>						
								</li>
								<li class="accHide">
									<h2>Animation et modélisation !</h2>
									<p>Je suis à votre service pour tous types de prestations 3D.</p>							
								</li>						
							</ul>
							<div class="lienPortfolio"><a href="#MainPortfolio" class="btn-border-white">Réalisations</a></div>
							<ul id="icon-services">
								<li class="Sorange"><a href="#MainWeb">www</a></li>
								<li class="Svert"><a href="#MainPortfolio">3D</a></li>
								<li class="Sbleu"><a href="#MainPortfolio">Print</a></li>
							</ul>
						</div>
						<ul id="HeaderSociaux" class="hi-icon-effect-3 hi-icon-effect-3b">
							<li ><a class="hi-icon icon-pix-facebook" href="https://www.facebook.com/pages/Pixmodels/725144007533591?ref=hl" ><span>Facebook</span></a></li>
							<li ><a class="hi-icon icon-pix-twitter" href="https://twitter.com/Pixmodels" ><span>Twitter</span></a></li>
							<li ><a class="hi-icon icon-pix-viadeo" href="http://www.viadeo.com/profile/0022c2qtyggpu0so" ><span>Viadéo</span></a></li>
							<li ><a class="hi-icon icon-pix-linkedin" href="https://www.linkedin.com/profile/view?id=432829635" ><span>Linkedin</span></a></li>
						</ul>					
						<a href="#MainServices" id="ScroolDown" class="hi-icon icon-pix-scrool"><span>Défilez ver le bas</span></a>
					</div>
				</div>
			</header>
			<main>
				<section id="MainServices">
					<div>
						<h2><a href="Pixmodels-Services.html">~ Mes services ~</a></h2>
						<hr>
						<blockquote><p>« Matérialiser vos idées en œuvres numérique »</p></blockquote>
					</div>
						<ul id="logo-presta" class="hi-icon-effect-3 hi-icon-effect-3b">
							<li class="smoove service-a hi-icon icon-pix-models"><span >Graphisme 3D</span></li>
							<li class="smoove service-b hi-icon icon-pix-logo"><span >Identité graphique</span></li>
							<li class="smoove service-c hi-icon icon-pix-videos"><span >Communication</span></li>
							<li class="smoove service-d hi-icon icon-pix-web"><span >Responsive design</span></li>
						</ul>
					<div id="art-presta">
						<div class="Block-dble">
							<h3>Pourquoi faire appel à un professionnel ?</h3>
							<p>
							Le web et les illustrations sont des outils indispensables pour donner une image sérieuse et engagée d’une entreprise.<br />
							Un professionnel peut façonner votre site à l’image de votre entreprise tout en intégrant les dernières nouveautés. Il vous aidera également à mettre en valeur votre stratégie marketing.<br />
							Vous serez référencé sur la toile et votre impact de communication sera d’autant plus fort.<br />			
							</p>
						</div>
						<div class="Block-dble">
							<h3>Mes engagements</h3>
							<p>
							Quelque que soit votre entreprise, Vous disposerez de mes connaissances qui répondront à vos critères, afin de vous orienter et créer un site professionnel ergonomique. Vous serez assisté dans vos premiers pas sur la toile pour faire évoluer votre identité dans les meilleurs conditions.<br />
							Je mettrai en valeur l'image de votre entreprise grâce à des supports marketing de qualité. 			
							</p>
						</div>
					</div>
				</section>			
				<section id="MainPortfolio"  class="parallax-window" data-parallax="scroll" data-image-src="./Images/Main-BG-Portfolio.jpg" data-z-index="-1" data-naturalWidth="1200" data-naturalWidth="800">
					<h2>~ Dernières réalisations ~</h2>
					<hr>
					<blockquote><p>« Trouvez des solutions qui répondent à vos attentes »</p></blockquote>
					<div id="Portfolio">				
						<div class="container">
							<!-- Work category -->
							<ul class="cat-list" id = "showhidetarget">
								<li class="filter active btn-outline-white" data-filter="all">Tous</li>
								<li class="filter btn-outline-white" data-filter="objet3d">Modélisation 3D</li>
								<li class="filter btn-outline-white" data-filter="arch3d">Architecture 3D</li>
								<li class="filter btn-outline-white" data-filter="graphics">Illustrations</li>
							</ul>
						</div>
							<ul class="list-portfolio">
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/1_1-escart-wild-2015.jpg" data-rel="shadowbox" data-title="<h2>Escart Wild</h2><h3>3DS max | Vray | Zbrush - 2015</h3>" title="Escart Wild">										
											<div class="thumb-item"><img src="Images/Portfolio/Illustrations/1_thumb-escart-wild-2015.jpg" width="700" height="394" alt="Escart Wild" ></div>
											<div class="meta">
												<h3>Escart Wild</h3>
												<div class="btnZoom"></div>
												<h4>3DS max - Vray - Zbrush</h4>
											</div>										
										</a>
									</figure>
								</li>
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/2_1-bibopp-2015.jpg" data-rel="shadowbox" data-title="<h2>Bibopp</h2><h3>3DS max | Vray | Zbrush - 2015</h3>" title="Bibopp">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/2_thumb-bibopp-2015.jpg" width="700" height="394" alt="Bibopp"></div>
											<div class="meta">
												<h3>Bibopp</h3>
												<div class="btnZoom"></div>
												<h4>3DS max - Vray - Zbrush</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/3_1-pelluche-2015.jpg" data-rel="shadowbox" data-title="<h2>Pelluche 3D</h2><h3>3DS max | Vray | Zbrush - 2014</h3>" title="Pelluche 3D">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/3_thumb-pelluche-2015.jpg" width="700" height="525" alt="Pelluche 3D"></div>
											<div class="meta">
												<h3>Pelluche 3D</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray | Zbrush</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/4_1-gorgotte-2015.jpg" data-rel="shadowbox" data-title="<h2>Gorgotte</h2><h3>3DS max | Vray | Zbrush - 2014</h3>" title="Gorgotte">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/4_thumb-gorgotte-2015.jpg" width="484" height="484" alt="Gorgotte"></div>
											<div class="meta">
												<h3>Gorgotte</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray | Zbrush</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/5_1-auto-portrait-pixmodels-2014.jpg" data-rel="shadowbox" data-title="<h2>Caricature - Stéphane Lieumont</h2><h3>3DS max | Vray | Zbrush - 2014</h3>" title="Auto-portrait">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/5_thumb-auto-portrait-pixmodels-2014.jpg" width="768" height="768" alt="Auto-portrait"></div>
											<div class="meta">
												<h3>Caricature - Stéphane Lieumont</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray | Zbrush</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix arch3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/6_1-immeuble-2015.jpg" data-rel="shadowbox" data-title="<h2>Bâtiment 3D</h2><h3>3DS max | Vray - 2014</h3>" title="Bâtiment 3D">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/6_thumb-immeuble-2015.jpg" width="700" height="589" alt="Bâtiment 3D"></div>
											<div class="meta">
												<h3>Bâtiment 3D</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix arch3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/7_1_maison-moderne-2014.jpg" data-rel="shadowbox" data-title="<h2>Maison Moderne</h2><h3>3DS max | Vray - 2014</h3>" title="Maison Moderne">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/7_thumb_maison-moderne-2014.jpg" width="900" height="335" alt="Maison Moderne"></div>
											<div class="meta">
												<h3>Maison Moderne</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray </h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix arch3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/8_1_maison-abondon-2015.jpg" data-rel="shadowbox" data-title="<h2>Maison abandonnée</h2><h3>3DS max | Vray - 2014</h3>" title="Maison abandonnée">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/8_thumb_maison-abondon-2015.jpg" width="833" height="440" alt="Maison abandonnée"></div>
											<div class="meta">
												<h3>Maison abandonnée</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix arch3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/9_1_salon-decoration1-nuit-2015.jpg" data-rel="shadowbox[9]" data-title="<h2>Décoration intérieur - Nuit</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration intérieur1">										
											<div class="thumb-item"><img src="Images/Portfolio/Illustrations/9_thumb_salon-decoration1-nuit-2015.jpg" width="800" height="411" alt="Décoration intérieur" ></div>
											<div class="meta">
												<h3>Décoration intérieur</h3>
												<div class="btnZoom"></div>
												<h4>3DS max - Vray</h4>
											</div>										
										</a>
										<a href="Images/Portfolio/Illustrations/9_2_salon-decoration1-nuit-2015.jpg" data-rel="shadowbox[9]" data-title="<h2>Décoration intérieur - Nuit</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration intérieur2"></a>
										<a href="Images/Portfolio/Illustrations/12_1_salon-decoration1-jour-2015.jpg" data-rel="shadowbox[9]" data-title="<h2>Décoration intérieur - Jour</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration intérieur3"></a>
										<a href="Images/Portfolio/Illustrations/12_2_salon-decoration1-jour-2015.jpg" data-rel="shadowbox[9]" data-title="<h2>Décoration intérieur - Jour</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration intérieur4"></a>
										<a href="Images/Portfolio/Illustrations/12_3_salon-decoration1-jour-2015.jpg" data-rel="shadowbox[9]" data-title="<h2>Décoration intérieur - Jour</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration intérieur5"></a>
										<a href="Images/Portfolio/Illustrations/12_4_salon-decoration1-jour-2015.jpg" data-rel="shadowbox[9]" data-title="<h2>Décoration intérieur - Jour</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration intérieur6"></a>
									</figure>
								</li>	
								<li class="mix arch3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/10_1_chambre-decoration-jour-2015.jpg" data-rel="shadowbox[10]" data-title="<h2>Décoration de chambre</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration chambre1">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/10_thumb_chambre-decoration-jour-2015.jpg" width="800" height="597" alt="Décoration chambre"></div>
											<div class="meta">
												<h3>Décoration de chambre</h3>
												<div class="btnZoom"></div>
												<h4>3DS max - Vray</h4>
											</div>
										</a>									
										<a href="Images/Portfolio/Illustrations/10_2_chambre-decoration-jour-2015.jpg" data-rel="shadowbox[10]" data-title="<h2>Décoration de chambre</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration chambre2"></a>
										<a href="Images/Portfolio/Illustrations/10_3_chambre-decoration-jour-2015.jpg" data-rel="shadowbox[10]" data-title="<h2>Décoration de chambre</h2><h3>3DS max | Vray - 2015</h3>" title="Décoration chambre3"></a>
									</figure>
								</li>
								<li class="mix arch3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/11_1_sdb-decoration-jour-2015.jpg" data-rel="shadowbox[11]" data-title="<h2>Salle de bain</h2><h3>3DS max | Vray | Zbrush - 2015</h3>" title="Salle de bain1">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/11_thumb_sdb-decoration-jour_2015.jpg" width="800" height="507" alt="Salle de bain"></div>
											<div class="meta">
												<h3>Salle de bain</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
										<a href="Images/Portfolio/Illustrations/11_2_sdb-decoration-jour-2015.jpg" data-rel="shadowbox[11]" data-title="<h2>Salle de bain</h2><h3>3DS max | Vray | Zbrush - 2015</h3>" title="Salle de bain2"></a>
										<a href="Images/Portfolio/Illustrations/11_3_sdb-decoration-jour-2015.jpg" data-rel="shadowbox[11]" data-title="<h2>Salle de bain</h2><h3>3DS max | Vray | Zbrush - 2015</h3>" title="Salle de bain3"></a>
									</figure>
								</li>							
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/13_1_ampoule-2014.jpg" data-rel="shadowbox" data-title="<h2>Ampoule réaliste</h2><h3>3DS max | Vray - 2014</h3>" title="Ampoule réaliste">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/13_thumb-ampoule-2014.jpg" width="700" height="700" alt="Ampoule réaliste"></div>
											<div class="meta">
												<h3>Ampoule réaliste</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>	
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/14_1_canette-de-soda-2014.jpg" data-rel="shadowbox" data-title="<h2>Canette de soda</h2><h3>3DS max | Vray - 2014</h3>" title="Canette de soda">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/14_thumb_canette-de-soda-2014.jpg" width="348" height="371" alt="Canette de soda"></div>
											<div class="meta">
												<h3>Canette de soda</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>							
								<li class="mix arch3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/15_1_salle-des-fetes-2015.jpg" data-rel="shadowbox[15]" data-title="<h2>Salle des fêtes</h2><h3>3DS max | Vray - 2015</h3>" title="Salle des fêtes1">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/15_thumb_salle-des-fetes-2015.jpg" width="700" height="394" alt="Salle des fêtes"></div>
											<div class="meta">
												<h3>Salle des fêtes</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
										<a href="Images/Portfolio/Illustrations/15_2_salle-des-fetes-2015.jpg" data-rel="shadowbox[15]" data-title="<h2>Salle des fêtes</h2><h3>3DS max | Vray - 2015</h3>" title="Salle des fêtes2"></a>
										<a href="Images/Portfolio/Illustrations/15_3_salle-des-fetes-2015.jpg" data-rel="shadowbox[15]" data-title="<h2>Salle des fêtes</h2><h3>3DS max | Vray - 2015</h3>" title="Salle des fêtes3"></a>
									</figure>
								</li>
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/18_1_herbe-realiste_2014.jpg" data-rel="shadowbox" data-title="<h2>Herbe réaliste</h2><h3>3DS max | Vray - 2014</h3>" title="Herbe réaliste">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/18_thumb_herbe-realiste_2014.jpg" width="700" height="494" alt="Herbe réaliste"></div>
											<div class="meta">
												<h3>Herbe réaliste</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>							
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/19_1_pommes-2014.jpg" data-rel="shadowbox" data-title="<h2>Pommes réalistes</h2><h3>3DS max | Vray - 2014</h3>" title="Pommes réalistes">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/19_thumb_pommes-2014.jpg" width="700" height="393" alt="Pommes réalistes"></div>
											<div class="meta">
												<h3>Pommes réalistes</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>							
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/20_1_tomates-2014.jpg" data-rel="shadowbox" data-title="<h2>Tomates réalistes</h2><h3>3DS max | Vray - 2014</h3>" title="Tomates réalistes">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/20_thumb_tomates-2014.jpg" width="700" height="393" alt="Tomates réalistes"></div>
											<div class="meta">
												<h3>Tomates réalistes</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>	
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/21_1_decoration-mariage-2014.jpg" data-rel="shadowbox[21]" data-title="<h2>Décorations de mariage</h2><h3>3DS max | Vray - 2014</h3>" title="Décorations de mariage1">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/21_thumb_decoration-mariage-2014.jpg" width="700" height="525" alt="Décorations de mariage"></div>
											<div class="meta">
												<h3>Décorations de mariage</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
										<a href="Images/Portfolio/Illustrations/21_2_decoration-mariage-2014.jpg" data-rel="shadowbox[21]" data-title="<h2>Décorations de mariage</h2><h3>3DS max | Vray - 2014</h3>" title="Décorations de mariage2"></a>
										<a href="Images/Portfolio/Illustrations/21_3_decoration-mariage-2014.jpg" data-rel="shadowbox[21]" data-title="<h2>Décorations de mariage</h2><h3>3DS max | Vray - 2014</h3>" title="Décorations de mariage3"></a>
									</figure>
								</li>
								<li class="mix objet3d">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/24_1_Legos-minions-2015.jpg" data-rel="shadowbox" data-title="<h2>Légos - Pause bannana!!</h2><h3>3DS max | Vray - 2015</h3>" title="Légos - Pause bannana!!">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/24_thumb_Legos-minions-2015.jpg" width="700" height="393" alt="Légos - Pause bannana!!"></div>
											<div class="meta">
												<h3>Légos - Pause bannana!!</h3>
												<div class="btnZoom"></div>
												<h4>3DS max | Vray</h4>
											</div>
										</a>
									</figure>
								</li>							
								<li class="mix graphics">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/25-Double-exposition-2015.jpg" data-rel="shadowbox" data-title="<h2>Double exposition</h2><h3>Photoshop CS5 - 2015</h3>" title="Double exposition">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/25-thumb-Double-exposition-2015.jpg" width="700" height="393" alt="Double exposition"></div>
											<div class="meta">
												<h3>Double exposition</h3>
												<div class="btnZoom"></div>
												<h4>Photoshop CS5</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix graphics">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/26-Man_desintegration-2015.jpg" data-rel="shadowbox" data-title="<h2>Désintégration</h2><h3>Photoshop CS5 - 2015</h3>" title="Désintégration">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/26-Man_desintegration-2015.jpg" width="700" height="466" alt="Désintégration"></div>
											<div class="meta">
												<h3>Désintégration</h3>
												<div class="btnZoom"></div>
												<h4>Photoshop CS5</h4>
											</div>
										</a>
									</figure>
								</li>
								<li class="mix graphics">
									<figure class="portfolio-item">
										<a href="Images/Portfolio/Illustrations/27-Portrait-Text-2015.jpg" data-rel="shadowbox" data-title="<h2>Portrait Texte</h2><h3>Photoshop CS5 - 2015</h3>" title="Portrait Texte">
											<div class="thumb-item"><img class="img-responsive" src="Images/Portfolio/Illustrations/27-thumb-Portrait-Text-2015.jpg" width="664" height="513" alt="Portrait Texte"></div>
											<div class="meta">
												<h3>Portrait Texte</h3>
												<div class="btnZoom"></div>
												<h4>Photoshop CS5</h4>
											</div>
										</a>
									</figure>
								</li>
							</ul>
						<!-- End Work Thumbnail portion-->
					</div>			
					<div id="MainWeb">				
						<div id="SlideWeb">
							<article class="table">	
								<div class="artWeb_contain">
									<figure class="table-cell">
										<img alt="" src="Images/Portfolio/Web/Coins-recettes-fr_apercu.png" width="485" height="328" />										
									</figure>
									<div class="table-cell">
										<h3 class="uppercase"><a href="http://www.coins-recettes.fr" target="_blank">Coins-recettes.fr</a></h3>
										<p>
											Ce site communautaire est le résultat d’un projet centré sur la gastronomie française.
											L'objectif était d’obtenir un design épuré et moderne afin de donner un aspect simple et convivial 
											pour ce type de blog. Sa conception comprend une interface utilisateur simple pour gérer un livre de 
											recettes et permettre aux utilisateurs de publier leurs créations culinaires.
											C'est un développement en Php et javascript, avec de nombreuses classes spécialement créées pour le projet. Cela permet
											d'avoir une plus grande rapidité de navigation, un traitement plus fiable et une compatibilité maitrisée.
											Une interface administrateur permet de contrôler et de gérer les publications ainsi que tous leurs commentaires.						
										</p>
										<hr>
										<p class="hi-icon-effect-3 hi-icon-effect-3b"><a class="hi-icon icon-pix-lien" href="http://www.coins-recettes.fr" target="_blank"><span>Visiter le site</span></a></p>
									</div>
								</div>
							</article>
							<article class="table">
								<div class="artWeb_contain">
									<figure class="table-cell">
										<img alt="" src="Images/Portfolio/Web/Coins-recettes-fr_apercu.png" width="485" height="328" />										
									</figure>
									<div class="table-cell">
										<h3 class="uppercase"><a href="http://www.mademoiselle-madame.fr" target="_blank">Mademoiselle-Madame.fr</a></h3>
										<p>
											Ce site communautaire est le résultat d’un projet centré sur la gastronomie française.
											L'objectif était d’obtenir un design épuré et moderne afin de donner un aspect simple et convivial 
											pour ce type de blog. Sa conception comprend une interface utilisateur simple pour gérer un livre de 
											recettes et permettre aux utilisateurs de publier leurs créations culinaires.
											C'est un développement en Php et javascript, avec de nombreuses classes spécialement créées pour le projet. Cela permet
											d'avoir une plus grande rapidité de navigation, un traitement plus fiable et une compatibilité maitrisée.
											Une interface administrateur permet de contrôler et de gérer les publications ainsi que tous leurs commentaires.						
										</p>
										<hr>
										<p class="hi-icon-effect-3 hi-icon-effect-3b"><a class="hi-icon icon-pix-lien" href="http://www.coins-recettes.fr" target="_blank"><span>Visiter le site</span></a></p>
									</div>
								</div>
							</article>
							<div class="LargeNav hi-icon-effect-3 hi-icon-effect-3b">
								<div class="prec hi-icon icon-pix-nav"><span>Précédent</span></div>
								<div class="suiv hi-icon icon-pix-nav" style="transform:scaleX(-1);float:right;-webkit-transform:scaleX(-1);-moz-transform:scaleX(-1);-ms-transform:scaleX(-1);"><span>Suivant</span></div>						
							</div>
						</div>
					</div>
				</section>
				<section id="MainContact" class="parallax-window" data-parallax="scroll" data-image-src="./Images/Main-BG-Contact.jpg" data-z-index="-2" data-naturalWidth="1200" data-naturalWidth="772">				
					<div class="titleWhite">
						<h2><a href="Pixmodels-Contact.html">Contactez-moi</a></h2>
						<hr>
						<blockquote><p>« Réalisons ensemble votre projet »</p></blockquote>
					</div>
					<form id="form_contact_index" action="Pixmodels-Graphiste3d-Webdesigner-freelance.html#MainContact" method="post">
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
					<ul class="coordonnees">
						<li><div class="hi-icon icon-pix-localisation"><span>Adresse: </span></div><p>31700 Blagnac</p></li>
						<li><div class="hi-icon icon-pix-mail"><span>Mail: </span></div><p>S.Lieumont@pixmodels.com</p></li>
						<li><div class="hi-icon icon-pix-telephone"><span>Tel: </span></div><p><a href:"tel:+33637353579">06.37.35.35.79</a></p></li>
					</ul>
				</section>
			</main>
			<?php require "Include/footer.inc.php";?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="JS/jquery-nicescroll.min.js"></script>
		<script src="JS/jquery-transit.min.js"></script>
		<script src="JS/jquery-letterfx.min.js"></script>
		<script src="JS/jquery-shadowbox.min.js"></script>
		<script src="JS/jquery-mixitup.min.js"></script>
		<script src="JS/jquery-parallax.min.js"></script>
		<script src="JS/index.min.js"></script>
		<script src="JS/main.min.js"></script>
		<script type="text/javascript">					
				$(document).ready(function(){
					// Detect appereil navigation					
					var isAndroid = /(android)/i.test(navigator.userAgent);
					var isMobile = /(mobile)/i.test(navigator.userAgent);
					var ios = navigator.userAgent.match(/(iPad)/)										
					if(isAndroid || isMobile || ios){
						$('.containBG').css('position','static');
						$("#MainContact").removeClass("parallax-window").addClass("BG_MainContact");
						$("#MainPortfolio").removeClass("parallax-window").addClass("BG_MainPortfolio");
					}else{
						//parralaxBackground
						$('.parallax-window').parallax();
						$('.superbg img').removeClass("initZoom").addClass('zoom');
					}
					// Prechargement de la page
					$.pageLoader();	
					
					//Disparition de la mention envoyé
					setTimeout(	function (){$(".envoye").fadeOut(1000);}, 2000);	
					//Portfolio thumb
					jQuery('#Portfolio').mixitup({});
					setTimeout(function(){
						initPortfolio();						
					},200)

					// En cas de redimensionnement de la fenêtre
					$(window).resize(function(){ redimensionnement();initPortfolio();});						
					
												
					/* Scrollbar personnalise */
					var is_chrome = window.chrome;
					var is_safari = navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent); // true or false
					$("html").niceScroll({cursorcolor:"#545454", zindex:"999",cursorwidth:"10px", cursorborder:"none",background:"rgba(0,0,0,0.3)", mousescrollstep:45 });
					if(is_chrome || is_safari){$('.containBG').css('position','static')};//Fix le probleme de saccade sous chrome					
					/*Slider principale accueil */
					$(window).scroll(function(e){parallax();apparService();NavFix();})					
					//Scroll down action
					$('a[href^="#"]').click(function(){
						var the_id = $(this).attr("href");
						$('html, body').animate({
							scrollTop:$(the_id).offset().top
						}, '300');
						return false;
					});	
					// Init bouton services, portfolio
					apparService();
					SliderWeb();
					// Service anime					
					transformService(200);								
					// Verification du formulaire de contact
					ContactOnLoad();
					Shadowbox.init({players: ['img', 'iframe'], overlayOpacity:0.93});	
					// Menu Mobile
					initMenuMobile();
				});
		</script>  
	</body>
</html>