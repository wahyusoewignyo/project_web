<?php
	if(!defined("INDEX")) die("---");

	
		$mysqli->query("INSERT INTO kategori set
				kategori	= '$_POST[kategori]'
			") or die($mysqli->error);

	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=kategori'>";
?>