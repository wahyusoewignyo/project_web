<?php
	if(!defined("INDEX")) die("---");
	
	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Daftar Kategori</h2>

<a href="?tampil=kategori_tambah" class="btn btn-primary">Tambah Kategori</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Kategori</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = $mysqli->query("SELECT * FROM kategori") or die($mysqli->error);
		while($data= $tampil->fetch_array()){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['kategori']; ?> </td>
		<td> 
			<a href="?tampil=kategori_edit&id=<?php echo $data['id_kategori']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=kategori_hapus&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>