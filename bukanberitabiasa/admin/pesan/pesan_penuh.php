<?php
	if(!defined("INDEX")) die("---");

	$tampil = $mysqli->query("SELECT * FROM pesan WHERE id_pesan='$_GET[id]'") or die($msqli->error);
	$data  	= $tampil->fetch_array();
?>

<h2 class="sub-header">Pesan</h2>

<form name="edit" method="post" action="?tampil=pesan_balasproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_pesan']; ?>">

		<div class="form-group">
			<label class="label-control col-md-2">Dari</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="nama" size="50" value="<?php echo $data['nama']; ?>"></div> 
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Email</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="email" size="50" value="<?php echo $data['email']; ?>"></div> 
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">subjek</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="subjek" size="50" value="Re: <?php echo $data['subyek']; ?>"></div> 
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Pesan</label>			
			<div class="col-md-8"> <textarea name="pesan" class="form-control" rows="15">
			<?php echo $data['pesan']; ?>						
				</textarea></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<a href="?tampil=pesan_hapus&id=<?php echo $data['id_pesan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</div>
</form>
