<?php 
	session_start();
	session_unset();
	session_destroy();
	header("location:index.php");
?>
 
<h2>Anda telah berhasil logout..</h2>
Silahkan klik <b>disini</b> untuk login kembali