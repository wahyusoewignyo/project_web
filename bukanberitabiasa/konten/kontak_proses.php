<?php
	if(!defined("INDEX")) die("---");
	
	$nama	= $_POST['nama'];
	$subyek	= $_POST['subyek'];
	$email	= $_POST['email'];
	$pesan	= $_POST['pesan'];
	
	$subjek	= "Pesan dari pengunjung website";
	$dari	= "pemilik.website@gmail.com";
	$tgl	= date('Ymd');
	
	//mail($email,$subjek,$pesan,$dari);
	
	$mysqli->query("insert into pesan set nama='$nama', email='$email', subyek='$subyek', pesan='$pesan', tanggal='$tgl'") or die($mysqli->error);
	
	echo"Pesan telah terkirim";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=kontak'>";
?>