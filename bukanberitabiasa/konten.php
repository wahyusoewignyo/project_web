<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "home";
?>

<div class='box'>

<?php	
	if( $tampil == "home" )		include("konten/home.php");	
		
	elseif( $tampil == "pencarian" )		include("konten/pencarian.php");
	elseif( $tampil == "berita_detail" )	include("konten/berita_detail.php");
	elseif( $tampil == "kontak" )			include("konten/kontak.php");
	elseif( $tampil == "home_religi" )		include("konten/home_religi.php");
    elseif( $tampil == "home_politik" )		include("konten/home_politik.php");
    elseif( $tampil == "home_kriminal" )	include("konten/home_kriminal.php");
	elseif( $tampil == "home_otomotif" )	include("konten/home_otomotif.php");
    elseif( $tampil == "home_ekonomi" )	    include("konten/home_ekonomi.php");
    elseif( $tampil == "home_bisnis" )	    include("konten/home_bisnis.php");
    elseif( $tampil == "home_olahraga" )	include("konten/home_olahraga.php");
    elseif( $tampil == "home_teknologi" )	include("konten/home_teknologi.php");
    elseif( $tampil == "home_senidanbudaya")include("konten/home_senidanbudaya.php");
	elseif( $tampil == "tentangkami" )		include("konten/tentangkami.php");
	elseif( $tampil == "kontak_proses" )	include("konten/kontak_proses.php");
	elseif( $tampil == "vote" )				include("konten/vote.php");
	elseif( $tampil == "komentar_proses" )	include("konten/komentar_proses.php");
	else echo"Halaman tidak ditemukan";
?>

</div>