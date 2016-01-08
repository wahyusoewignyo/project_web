<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Tambah Berita</h2>

<form name="tambah" method="post" action="?tampil=kategori_tambahproses" enctype="multipart/form-data" class="form-horizontal">	
		
		<div class="form-group">
			<label class="label-control col-md-2">Kategori</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="kategori" size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
</form>