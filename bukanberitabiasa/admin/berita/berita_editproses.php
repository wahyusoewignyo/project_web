<?php error_reporting(0)?>
<?php
	if(!defined("INDEX")) die("---");

	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	$tanggal	= date('Ymd');	
	$isi 		= addslashes($_POST['isi']);
	
	if($lokasi_gambar==""){
		$mysqli->query("UPDATE berita SET 
				judul	 ='$_POST[judul]', 
				isi      ='$isi',
				kategori ='$_POST[kategori]',
				sumber   ='$_POST[sumber]' 
			WHERE id_berita='$_POST[id]'") or die($mysqli->error);
	}else{
		$data=$mysqli->query("select * from berita where id_berita='$_POST[id]'")->fetch_array();
		if($data['gambar'] != "") unlink("../gambar/berita/$data[gambar]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/berita/$nama_gambar");
		$mysqli->query("UPDATE berita SET
				judul='$_POST[judul]', 
				isi='$isi',
				kategori='$_POST[kategori]',
				sumber='$_POST[sumber]',
				gambar='$nama_gambar' 
			WHERE id_berita='$_POST[id]'") or die($mysqli->error);
	}
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=berita'>";
?>