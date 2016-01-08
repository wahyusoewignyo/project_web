<?php
	if(!defined("INDEX")) die("---");
	
	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	$tanggal	= date('Ymd');	
	$isi 		= addslashes($_POST['isi']);
	
	if($lokasi_gambar==""){
		$mysqli->query("INSERT INTO berita set
				judul	= '$_POST[judul]',
				isi		= '$isi',
				kategori='$_POST[kategori]',
				sumber	= '$_POST[sumber]',
				tanggal	= '$tanggal' 
			") or die($mysqli->error());
	}else{
		move_uploaded_file($lokasi_gambar,"../gambar/berita/$nama_gambar");
		$mysqli->query("INSERT INTO berita set
				judul	= '$_POST[judul]',
				isi		= '$isi',
				kategori='$_POST[kategori]',
				sumber	= '$_POST[sumber]',
				tanggal	= '$tanggal',
				gambar 	= '$nama_gambar'
			") or die($mysql->error());
	}
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=berita'>";
?>