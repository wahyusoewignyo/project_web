	<link rel="stylesheet" type="text/css" href="plugin/fancybox/jquery.fancybox.css">
	<script type="text/javascript" src="plugin/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.fancybox').fancybox();
		});
	</script>
<?php
	if(!defined("INDEX")) die("---");
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Galeri foto</li>
	</ul>
	
	<div class="galeri">
		<div class="row">
<?php	
	$no = 1;
	$artikel = mysql_query("select * from galeri order by id_galeri desc limit 12");
	while($data=mysql_fetch_array($artikel)){
?>
		<div class="col-md-3">
			<a class="fancybox" href="gambar/galeri/<?php echo $data['gambar']; ?>" title="<?php echo $data['judul']; ?>">
				<img src="gambar/galeri/<?php echo $data['gambar']; ?>" width="100%" class="thumbnail" >
				<p align="center"> <?php echo $data['judul']; ?></p>
			</a>
		</div>
<?php
		if($no==4) echo"</div><div class='row'>";
		$no++;
	}
?>
		</div>
	</div>