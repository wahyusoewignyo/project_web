<?php include ('head.php'); ?>

<?php include ('menu.php'); ?>

<?php include ('dashboard.php'); ?>


    <!-- Main Content -->
<?php
  	session_start();
	
	include("lib/koneksi.php");
	include("lib/fungsi_tglindonesia.php");
	define("INDEX",true);

?>

<html>
	<head>
		<title>Citizen Journalism</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=0">		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/style.css">
		
		<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
	</head>
	<body>				
			
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"><?php include("konten.php"); ?> </div>
				</div>
			
		<footer id="footer"> 
				<div class="row">
					<div class="col-md-12"> <p align="center">Copyright &copy; Citizen Journalism</p> </div>
				</div>
		</footer>
	
    <!-- Footer -->
<?php include "footer.php"; ?>


	</body>
</html>
