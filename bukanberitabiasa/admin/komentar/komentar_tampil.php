<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Data Komentar</h2>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Komentar</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = $mysqli->query("SELECT * FROM komentar") or die($mysqli->error);
		while($data=$tampil->fetch_array()){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['komentar']; ?> </td>
		<td> <?php echo $data['tanggal']; ?> </td>
		<td> 
			<a href="?tampil=komentar_hapus&id=<?php echo $data['id_komentar']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>