<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("update berita set hits=hits+1 where id_berita='$_GET[id]'");
	
	$berita = mysql_query("select * from berita where id_berita='$_GET[id]'");
	$data=mysql_fetch_array($berita);
	$isi = $data['isi'];
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Berita detail</li>
	</ul>
	
	<div class="berita">
		<h2 class="judul"><?php echo $data['judul']; ?></h2>
		<p>			
			<?php if($data['gambar']!="") ?> <img src="gambar/berita/<?php echo $data['gambar']; ?>" class="thumbnail" width="100%">
				
			<?php echo $isi; ?> 
		</p>
	</div>

<?php
	$komentar = mysql_query("select * from komentar where id_berita='$_GET[id]'");
	$jmlkomentar = mysql_num_rows($komentar);
?>
	<h3><?php echo $jmlkomentar; ?> Komentar </h3>
	<hr>
<?php
	while($datakomen = mysql_fetch_array($komentar)){
		$tgl_komen = tgl_indonesia($datakomen['tanggal']);
?>
	<div class="komentar">
		<h5><b><?php echo $datakomen['nama']; ?> - <?php echo $tgl_komen; ?></b></h5> 
		<p><?php echo $datakomen['komentar']; ?></p>
	</div>
	<hr>
<?php
	}
?>

<h3>Isi Komentar</h3>

<form method="post" action="?tampil=komentar_proses" id="formkomentar" class="form-horizontal well">
	<input type="hidden" name="id" value="<?php echo $data['id_berita']; ?>">
	<div class="form-group">
		<label for="nama" class="control-label col-md-2">Nama</label>
		<div class="col-md-10">
			<input type="text" name="nama" id="nama" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="control-label col-md-2">Email</label>
		<div class="col-md-10">
			<input type="text" name="email" id="email" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="komentar" class="control-label col-md-2">Komentar</label>
		<div class="col-md-10">
			<textarea name="komentar" id="komentar" rows="8" class="form-control"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-10 col-md-offset-2">
			<input type="submit" value="Kirim Pesan" class="btn btn-primary">
		</div>
	</div>
</form>