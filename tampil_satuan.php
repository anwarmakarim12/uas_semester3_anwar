<?php
include('koneksi.php');
$tampil_satuan = mysql_query("select * from satuan");
?>
<table border="1">
	<tr>
		<td>ID Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_satuan)) { ?>
	<tr>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="manu.php">Menu Utama</a>