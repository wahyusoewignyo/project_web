<?php
	if(!defined("INDEX")) die("---");

	$tampil = $mysqli->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id]'") or die($mysqli->error);
	$data  	= $tampil->fetch_array();
?>
<h2 class="sub-header">Edit Kategori</h2>

<form name="edit" method="post" action="?tampil=kategori_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_kategori']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Kategori</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="kategori" size="50" value="<?php echo $data['kategori']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div> 
		</div>
	
</form>