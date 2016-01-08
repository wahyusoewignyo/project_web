

<?php
	if(!defined("INDEX")) die("---");
	
	$mysqli->query("update berita set hits=hits+1 where id_berita='$_GET[id]'");
	
	$berita = $mysqli->query("select * from berita where id_berita='$_GET[id]'");
	$data= $berita->fetch_array();
	$isi = $data['isi'];
?>
	<div class="center">
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">berita detail</li>
	</ul>
	
	<div class="berita" align="justify">
		<h2 class="judul" align="center"><strong><?php echo $data['judul']; ?></strong></h2>
		<p>			
			<?php if($data['gambar']!="") ?> <img src="gambar/berita/<?php echo $data['gambar']; ?>" class="thumbnail" width="100% " height="500px">
				
			<?php echo $isi; ?> 
			<br><br>
			<h5 class="sumber"> Sumber : <strong><i> <?php echo $data['sumber']; ?><i></strong></h5>	
			<h5 class="sumber"> Diposting pada : <strong> <?php echo $data['tanggal']; ?></strong></h5>
			<h4 class="sumber"> <strong> <?php echo $data['vote']; ?> </strong><i> Votes</i></h4><br>

<body>

<form name="tambah" method="post" action="<?php if(isset($_SESSION['cek'])==1){ echo '#';} else { echo '?tampil=vote';}?>" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $data['id_berita']; ?>">
<h4> Klik tombol vote jika menurut anda berita diatas berkualitas :</h4>	
		<div class="form-group">
			<label class="label-control col-md"></label>				
			<div class="col-md-4"> <input type="submit" value="Vote" class="btn btn-primary"></div>
		</div>
		
</form>
</body>
			
</div>

<?php
	$komentar = $mysqli->query("select * from komentar where id_berita='$_GET[id]'");
	$jmlkomentar = $komentar->num_rows;
?>
	<h3><?php echo $jmlkomentar; ?> Komentar </h3>
	<hr>
<?php
	while($datakomen = $komentar->fetch_array()){
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


<link rel="stylesheet" type="text/css" href="plugin/validity/jquery.validity.css">
<script type="text/javascript" src="plugin/validity/jquery.validity.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#formkomentar').validity(function(){
			$('#nama')
					.require(' Nama tidak boleh kosong!');
			$('#email')
					.require(' Email tidak boleh kosong!')
					.match('email',' Email tidak valid!');
			$('#komentar')
					.require(' Komentar tidak boleh kosong!');		
		});
	});
</script>
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
</div>