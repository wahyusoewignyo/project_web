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
		<th>Subjek</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM pesan") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['email']; ?> </td>
		<td> <a href='?tampil=pesan_balas&id=<?php echo $data['id_pesan']; ?>'> <?php echo $data['subjek']; ?> </a></td>
		<td> <?php echo $data['tanggal']; ?> </td>
		<td> 
			<a href="?tampil=pesan_hapus&id=<?php echo $data['id_pesan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>