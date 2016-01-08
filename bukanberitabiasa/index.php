<?php
	session_start();
	
	include("lib/koneksi.php");
	include("lib/fungsi_tglindonesia.php");
	define("INDEX",true);
?>

<html>
	<head>
		<title>Bukan Berita Biasa</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/style.css">
		
		<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
	</head>
	<body>
		<header id="header"> 
			<div class="container">
				<div class="row">
					<div class="col-md-12"><img src="judul.png" width="40%"></div>
				</div>
			</div>
		</header>			
			
		<nav id="menu"> 	
			<div class="container">
				<div class="row">
					<div class="col-md-12"><?php include("menu.php"); ?> </div>
				</div>
			</div>
		</nav>			
			
		<content id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"><?php include("konten.php"); ?> </div>	
				</div>
			</div>
		</content>
			
		<footer id="footer"> 
			<div class="container">
				<div class="row">
					<div class="col-md-12"> <p align="center">Copyright &copy; BukanBeritaBiasa</p> </div>
				</div>
			</div>
		</footer>
		
		
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
