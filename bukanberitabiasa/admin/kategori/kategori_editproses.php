<?php
	if(!defined("INDEX")) die("---");

	$mysqli->query("UPDATE kategori set  
			kategori	='$_POST[kategori]'
		WHERE id_kategori='$_POST[id]'") or die($mysqli->error);

	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=kategori'>";
?>



