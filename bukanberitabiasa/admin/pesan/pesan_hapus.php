<?php
if(!defined("INDEX")) die("---");

$mysqli->query("delete from pesan where id_pesan='$_GET[id]'") or die($mysqli->error);
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=pesan'>";
?>