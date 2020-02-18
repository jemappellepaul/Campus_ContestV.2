@extends('base')

<!DOCTYPE HTML>
<html>
	<head>
		<title>Commander</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
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
						<a href="{{ route('contacts.create')}}" class="btn btn-primary">Contact</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<!-- Main -->

			<section id="main" >
				<div class="inner">
					<header class="major special">
						<h1>Prêt à commander ?</h1>
					</header>					
				</div>

				<!-- slider -->
				<div class="contain">
				<h2><u>Mangas</u></h2>
			      <div class="row">
			        <div class="row__inner">
			            <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="Image/naruto.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  Manga 1
			                </div>
			              </div>
			            </div>
			            <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/fairy.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  Manga 2
			                </div>
			              </div>
			            </div>
			          <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/One.png" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  Manga 3
			                </div>
			              </div>
			            </div><div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/One_punch.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  Manga 4
			                </div>
			              </div>
			            </div><div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/naruto1.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  Manga 5
			                </div>
			              </div>
			            </div>
			            <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/Fullmetal.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  Manga 5
			                </div>
			              </div>
			            </div>
			      </div>
			    </div>
			    <br>
			   <h2><u>BD's</u></h2>
			      <div class="row">
			        <div class="row__inner">
			            <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/lucky.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  BD 1
			                </div>
			              </div>
			            </div>
			            <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/simpson.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  BD 2
			                </div>
			              </div>
			            </div>
			          <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/garfield.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  BD 3
			                </div>
			              </div>
			            </div><div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/lapin.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  BD 4
			                </div>
			              </div>
			            </div><div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/gaston.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  BD 5
			                </div>
			              </div>
			            </div>
			            <div class="tile">
			              <div class="tile__media">
			                <img class="tile__img" src="image/asterix.jpg" alt=""/>
			              </div>
			              <div class="tile__details">
			                <div class="tile__title">
			                  BD 6
			                </div>
			              </div>
			            </div>
			      </div>
			    </div>
			</section>

			<section id="emprunter">
				<div class="inner">
					<header>
						<h2>emprunter</h2>
					</header>
					<form method="post" action="#">
						<div class="fhf">
							<label for="name">Titre de l'ouvrage</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="fh">
							<label for="email">Numéro du tome</label>
							<input type="text" name="email" id="email" />
						</div>
						
						<ul class="actions">
							<li><input type="submit" value="Emprunter" class="alt" /></li>
						</ul>
					</form>
				</div>
			</section>

			<!-- Footer -->
			
			<section id="footer">
               
                 <p class="fb">
                 <img src="image/facebook.png" alt="" height="43px"/>
                  </p>

                 <p class="insta">
                 <img src="image/instagram.png" alt="" height="45px"/>
                  </p>

				<div class="inner">
					<header>
					</header>
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