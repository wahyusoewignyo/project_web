<ul class="breadcrumb">
	<li>Home</li>
	<li class="active">Hasil pencarian</li>
</ul>

<?php
	if(!defined("INDEX")) die("---");
	
	$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
	$posisi = $hal - 1;
	$batas	= 5;
	
	$berita = mysql_query("select * from berita where isi like '%$_POST[kata]%' order by id_berita desc limit $posisi, $batas");
	$jmldata = mysql_num_rows($berita);
	if($jmldata > 0){
		echo "Hasil pencarian dari <b>$_POST[kata]</b>";
		while($data=mysql_fetch_array($berita)){
			$isi = substr($data['isi'],0,500);
			$isi = substr($data['isi'],0,strrpos($isi," "));
	?>
	
	<div class="berita">
		<h3 class="judul"><?php echo $data['judul']; ?></h3>
		<div class="row">
			<div class="col-md-4">
				<?php if($data['gambar']!="") ?> <img src="gambar/berita/<?php echo $data['gambar']; ?>" class="thumbnail" width="100%" height="150px">
			</div>
			<div class="col-md-8">
				<?php echo $isi; ?> ... 
				<a href="?tampil=berita_detail&id=<?php echo $data['id_berita']; ?>" class="btn btn-primary btn-xs">Selengkapnya</a>
			</div>
		</div>
	</div>
	<?php
		}
		
	$semua = mysql_query("select * from berita");
	$jmldata = mysql_num_rows($semua);
	$jmlhal	 = ceil($jmldata/$batas);	
	$sebelumnya = $hal - 1;
	$berikutnya = $hal + 1;
	
	echo "<br><div class='paging'>";
	
	if($hal > 1){
		echo "<span class='btn btn-default'><a  href='?tampil=home&hal=1'> Pertama</a></span> ";
		echo "<span class='btn btn-default'><a href='?tampil=home&hal=$sebelumnya'> Sebelumnya</a></span> ";
	}else{
		echo "<span class='btn btn-default'> Pertama</span> ";
		echo "<span class='btn btn-default'> Sebelumnya</span> ";
	}
	
	for($i=1; $i<=$jmlhal; $i++){
		if($i == $hal) echo "<span class='btn btn-default'> <b>$i</b> </span> ";
		else echo "<span class='btn btn-default'><a href='?tampil=home&hal=$i'> $i </a></span> ";
	}
	
	if($hal < $jmlhal){
		echo "<span class='btn btn-default'><a href='?tampil=home&hal=$berikutnya'> Berikutnya </a></span> ";
		echo "<span class='btn btn-default'><a href='?tampil=home&hal=$jmlhal'> Terakhir </a></span> ";
	}else{
		echo "<span class='btn btn-default'> Berikutnya </span> ";
		echo "<span class='btn btn-default'> Terakhir </span> ";		
	}
	
	echo "</div><br>";
	
	}else{
		echo "Kata yang dicari tidak ada";
	}
?>