<?php error_reporting(0)?>
<?php

	if(!defined("INDEX")) die("---");

	$data=$mysqli->query("select * from berita where id_berita='$_GET[id]'")->fetch_array();
	if($data['gambar'] != "") unlink("../gambar/berita/$data[gambar]");

	$mysqli->query("delete from berita where id_berita='$_GET[id]'") or die($mysqli->error);
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=berita'>";
?>