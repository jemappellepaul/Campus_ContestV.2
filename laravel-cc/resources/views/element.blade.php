@extends('base')
@section('main')
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact - Manga++</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.blade.php">Connexion</a>
					<a href="index" class="logo">Manga++</a>
					<nav id="nav">
						<a href="index">Accueil</a>
						<a href="generic">Commander</a>
						<a href="contacts">Contact</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<h1>Contactez-nous !</h1>
						<p>Une remarque, une question, n'hésitez pas à nous contacter !</p>
					</header>

		<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<header>
						<h2>Votre message</h2>
					</header>
					<form method="post" action="#">
						<div class="field half first">
							<label for="name">Nom</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Message...</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Envoyer!" class="alt" /></li>
						</ul>
					</form>
					<div class="copyright">
						&copy; Design by <a href="https://templated.co/">Les B1 .</a>
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