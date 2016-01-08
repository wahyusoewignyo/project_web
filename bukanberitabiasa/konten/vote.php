<?php

@session_start();
$_SESSION['cek']=1;

	if(!defined("INDEX")) die("---");
	
	$mysqli->query("UPDATE berita set 
			vote		=vote+1
			WHERE id_berita='$_POST[id]'")
			or die($mysqli->error);
	echo"<meta http-equiv='refresh' content='1; url=?tampil=berita_detail&id=$_POST[id]'>";
?>