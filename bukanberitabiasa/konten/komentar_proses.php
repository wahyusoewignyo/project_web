<?php
	if(!defined("INDEX")) die("---");
	
	$tgl	= date('Ymd');
		
	$mysqli->query("insert into komentar set 
			id_berita 	= '$_POST[id]',
			nama		='$_POST[nama]', 
			email		='$_POST[email]', 
			komentar	='$_POST[komentar]', 
			tanggal		='$tgl'
		") or die($mysql->error);
	
	echo"Komentar telah terkirim";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=berita_detail&id=$_POST[id]'>";
?>