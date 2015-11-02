<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="db_berita";
    $koneksi=mysql_connect ($servername, $username, $password);

  if ($koneksi) {
    mysql_select_db ($database) or die ("Database Tidak Ditemukan");
     echo "<b> Koneksi Berhasil </b>";
   } else {
     echo "<b> Koneksi Gagal </b>";
   }

?>