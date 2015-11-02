<?php session_start(); 
include "koneksi.php"; 
$username=$_POST['username']; 
$password=$_POST['password']; 
$query=mysql_query("select * from db_berita where username='$username' and password='$password'"); 
$cek=mysql_num_rows($query); 
if($cek){ 
$_SESSION['username']=$username; 
?>Anda berhasil login. silahkan menuju <a href="berhasil.php">Halaman HOME</a><?php 
}else{ 
?>Anda gagal login. silahkan <a href="login.php">Login kembali</a><?php 
echo mysql_error(); 
} 
?> 
