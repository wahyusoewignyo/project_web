<?php
	if(!defined("INDEX")) die("---");
	
	$mysqli->query("delete from kategori where id_kategori='$_GET[id]'") or die($mysqli->error);
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=kategori'>";
?>