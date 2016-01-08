<?php
	if(!defined("INDEX")) die("---");

	$tampil = $mysqli->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'") or die($mysqli->error);
	$data  	= $tampil->fetch_array();
?>
<h2 class="sub-header">Edit Berita</h2>

<form name="edit" method="post" action="?tampil=berita_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_berita']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Judul Berita</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="judul" size="50" value="<?php echo $data['judul']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Gambar</label>
			<div class="col-md-4"><img src="../gambar/berita/<?php echo $data['gambar']; ?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div> 
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Kategori</label>	
			<select name="kategori">
            <option name="kategori" value=0 selected >- Pilih Kategori -</option>";
            <?php
            $tampil=$mysqli->query("SELECT * FROM kategori ORDER BY kategori");
            while($r=$tampil->fetch_array()){
              echo "<option> $r[kategori] </option>";
            }
            ?>
            </select> 		
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Isi berita</label>			
			<div class="col-md-9"><textarea name="isi" cols="80" rows="15" class="form-control"><?php echo $data['isi']; ?></textarea></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Sumber</label>	
			<div class="col-md-4"> <input type="link" class="form-control"  name="sumber" size="50" value="<?php echo $data['sumber']; ?>"></div>
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div> 
		</div>
	
</form>