<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Data Pesan</h2>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Subyek</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = $mysqli->query("SELECT * FROM pesan ORDER BY id_pesan DESC") or die($mysqli->error);
		while($data= $tampil->fetch_array()){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['email']; ?> </td>
		<td> <?php echo $data['subyek']; ?> </td>
		<td> <?php echo $data['tanggal']; ?> </td>
		<td> 
			<a href="?tampil=pesan_penuh&id=<?php echo $data['id_pesan']; ?>" class="btn btn-primary btn-sm"> Baca </a> 
			<a href="?tampil=pesan_hapus&id=<?php echo $data['id_pesan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>