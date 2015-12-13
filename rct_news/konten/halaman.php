<?php
	if(!defined("INDEX")) die("---");
	
	$artikel = mysql_query("select * from halaman where id_halaman='$_GET[id]'");
	$data=mysql_fetch_array($artikel);
	$isi = $data['isi'];
?>
<ul class="breadcrumb">
	<li>Home</li>
	<li class="active"><?php echo $data['judul']; ?></li>
</ul>

	<div class="halaman">
		<h2 class="judul"><?php echo $data['judul']; ?></h2>
		<p>							
			<?php echo $isi; ?> 
		</p>
	</div>