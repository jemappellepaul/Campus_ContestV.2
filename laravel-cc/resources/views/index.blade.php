@extends('base')
<!DOCTYPE HTML>
<html>
	<head>
		<title>Manga++</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		
			<header id="header">
				<div class="inner">
					<span id="connexion"> <a href="connexion" class="connexion">Connexion</a> </span>
					<a href="index" class="logo">Manga++</a>
					<nav id="nav">
						<a href="index">Accueil</a>
						<a href="generic">Commander</a>

						<!-- bdd contact  -->
						<a href="{{ route('contacts.create')}}" class="btn btn-primary">Contact</a>

						<!-- lien dashboard-->

						<div class="DB">
                        <a href="index"><img src="image/dashboard.png" height="65px"> </a>
                        </div>

					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->

			<section id="banner">
				<div class="inner">
					<h1><span>Location de Bandes Dessinnées et de Mangas.</span></h1>
					<ul class="actions">
						<li><a href="#" class="button alt">Je commande</a></li>
					</ul>
				</div>
			</section>

		<!-- description principale -->

			<section id="one">
				<div class="inner">
					<header>
						<h2>Qui sommes-nous ?</h2>
					</header>
					    <p>Nous sommes spécialisés dans la Location de Bandes Dessinnées et de Mangas.
						Ce site est à la disposition de nos clients et de nos futurs clients pour permettre une dématérialisation 
						et une meilleure gestion de nos services.<p>
						Mais rien ne vous empêche de commander votre livre directement en magasin !</p>
				</div>
			</section>

		<!-- description des BD's -->

			<section id="two">
				<div class="inner">
					<article>
						<div class="content">
							<header>
								<h3>Bandes dessinées</h3>
							</header>
							<div class="image fit">
								<img src="image/pic01.jpg" alt="" />
							</div>
							<p>Nous possèdons une très large gamme de BDs, Des BD Françaises aux BD étrangères, des BD récentes aux plus anciennes ( certaines plus anciennes peuvent tenir lieu de cautions beaucoup plus importantes).</p>
						</div>
					</article>

					<!-- Description des mangas -->

					<article class="alt">
						<div class="content">
							<header>
								<h3>Mangas</h3>
							</header>
							<div class="image fit">
								<img src="image/pic02.jpg" alt="" />
							</div>
							<p>Nous possèdons des milliers de Mangas, et nous sommes également en partenariat avec plusieurs éditeurs et sites de scans japonais, Nous avons donc le droit à des exclusivités, et également de reçevoir les ouvrages quelques jours seulement après leur sortie au japon.</p>
						</div>
					</article>
				</div>
			</section>

		<!-- Footer -->
			
			<section id="footer">
               
                 <div class="fb">
                 <img src="image/facebook.png" alt="" height="43px"/>
                  </div>

                 <div class="insta">
                 <img src="image/instagram.png" alt="" height="45px"/>
                  </div>

				<div class="inner">

					<form method="post" action="#">
						<ul class="actions">
							<li><input type="submit" value="mentions légales" class="alt" /></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Manga++ - 2020
					</div>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

<!-- fin -->