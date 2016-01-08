<?php
	if(!defined("INDEX")) die("---");
	
	$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
	
	$batas	= 3;
	$posisi = ($hal-1) * $batas ;
	
	$berita = $mysqli->query("SELECT * FROM berita WHERE kategori = 'Politik' ORDER BY id_berita DESC LIMIT $posisi, $batas");
	while($data=$berita->fetch_array()){
		$isi = substr($data['isi'],0,300);
		$isi = substr($data['isi'],0,strrpos($isi," "));
?>
	<div class="berita">
		<h3 class="judul"><strong><?php echo $data['judul']; ?></strong></h3>
		<div class="row">
			<div class="col-md-4">
			<?php if($data['gambar']!="") ?> <img src="gambar/berita/<?php echo $data['gambar']; ?>" class="thumbnail" width="100%" height="150px">
			</div>
			<div class="col-md-8">
				<?php echo $isi; ?> ... 
				<h5 class="sumber"> <i> Diposting pada :</i> <strong><?php echo $data['tanggal']; ?></strong></h5>
				<h5 class="sumber"> <i> Sumber :</i> <strong><?php echo $data['sumber']; ?></strong></h5>
				<a href="?tampil=berita_detail&id=<?php echo $data['id_berita']; ?>" class="btn btn-primary btn-xs">Selengkapnya</a>
			</div>
		</div>
	</div>
<?php
	}
	
	$semua         = $mysqli->query("select * from berita");
	$jmldata       = $semua->num_rows;
	$jmlhal	       = ceil($jmldata/$batas);	
	$sebelumnya    = $hal - 1;
	$berikutnya    = $hal + 1;
	
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
?>