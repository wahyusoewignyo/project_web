<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )		include("beranda.php");	
	elseif( $tampil == "keluar" )	include("keluar.php");
	
	elseif( $tampil == "berita" )				include("berita/berita_tampil.php");
	elseif( $tampil == "berita_tambah" )		include("berita/berita_tambah.php");
	elseif( $tampil == "berita_tambahproses" )	include("berita/berita_tambahproses.php");
	elseif( $tampil == "berita_edit" )			include("berita/berita_edit.php");
	elseif( $tampil == "berita_editproses" )	include("berita/berita_editproses.php");
	elseif( $tampil == "berita_hapus" )			include("berita/berita_hapus.php");

	elseif( $tampil == "kategori" )					include("kategori/kategori_tampil.php");
	elseif( $tampil == "kategori_tambah" )			include("kategori/kategori_tambah.php");
	elseif( $tampil == "kategori_tambahproses" )	include("kategori/kategori_tambahproses.php");
	elseif( $tampil == "kategori_edit" )			include("kategori/kategori_edit.php");
	elseif( $tampil == "kategori_editproses" )		include("kategori/kategori_editproses.php");
	elseif( $tampil == "kategori_hapus" )			include("kategori/kategori_hapus.php");
	
	elseif( $tampil == "pesan" )				include("pesan/pesan_tampil.php");
	elseif( $tampil == "pesan_penuh" )			include("pesan/pesan_penuh.php");	
	elseif( $tampil == "pesan_hapus" )			include("pesan/pesan_hapus.php");

	elseif( $tampil == "komentar" )				include("komentar/komentar_tampil.php");	
	elseif( $tampil == "komentar_hapus" )		include("komentar/komentar_hapus.php");
	
	elseif( $tampil == "user_edit" ) 			include("user/user_edit.php");
	elseif( $tampil == "user_editproses" )		include("user/user_editproses.php");
	
	else echo"Konten tidak ada";
?>