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
					<span id="connexion"> <a href="index.html" class="connexion">Connexion</a> </span>
					<a class="logo">Manga++</a>
					<nav id="nav">
						<a href="index">Accueil</a>
						<a href="generic">Commander</a>
						<a href="{{ route('contacts.create')}}" class="btn btn-primary">Contact</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Sidebar -->
		<div class="sidebar">
				<a href="dashboard">Dashboard</a>
				<a href="members">Membres</a>
				<a href="books">Livres</a>
				<a href="borrows">Locations</a>
				<a href="contacts_dash">Contacts</a>
		</div>

		<div>
			<?php
			$name = "Le Fonds du Ciel";
			$bdd = new PDO('mysql:host=localhost;dbname=dbcc' , 'root' , '');
			$quantity = $bdd->query('SELECT quantity FROM books WHERE name ="'.$name.'"')->fetch()[0];
			echo $quantity;
			$quantity -= 1;
			$bdd->query('UPDATE books SET quantity ="'.$quantity.'"WHERE name ="'.$name.'"');
			$quantity = $bdd->query('SELECT quantity FROM books WHERE name ="'.$name.'"')->fetch()[0];
			echo $quantity;
			?>
		</div>
		
		<!-- End Sidebar -->
		
		<!-- Footer -->
			
			<section id="footer">
               
                 <div class="fb">
                 <img src="image/facebook.png" alt="" height="43px"/>
                 </div>

                 <div class="insta">
                 <img src="image/instagram.png" alt="" href="https://www.instagram.com/" height="45px"/>
                  </div>

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