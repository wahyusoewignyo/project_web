<link rel="stylesheet" type="text/css" href="plugin/validity/jquery.validity.css">
<script type="text/javascript" src="plugin/validity/jquery.validity.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#formkontak').validity(function(){
			$('#nama')
					.require(' Nama tidak boleh kosong!');
			$('#email')
					.require(' Email tidak boleh kosong!')
					.match('email',' Email tidak valid!');
			$('#subyek')
					.require(' Subyek tidak boleh kosong!');
			$('#pesan')
					.require(' Pesan tidak boleh kosong');			
		});
	});
</script>
<?php
	if(!defined("INDEX")) die("---");	
?>

<ul class="breadcrumb">
	<li>Home</li>
	<li class="active">Kontak kami</li>
</ul>

<form method="post" action="?tampil=kontak_proses" id="formkontak" class="form-horizontal well">
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
		<label for="subyek" class="control-label col-md-2">Subjek</label>
		<div class="col-md-10">
			<input type="text" name="subyek" id="subyek" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="pesan" class="control-label col-md-2">Pesan</label>
		<div class="col-md-10">
			<textarea name="pesan" id="pesan" rows="8" class="form-control"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-10 col-md-offset-2">
			<input type="submit" value="Kirim Pesan" class="btn btn-primary">
		</div>
	</div>
</form>