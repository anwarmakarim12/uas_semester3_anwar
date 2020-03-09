<?php
include('koneksi.php');
$tampil_kategori = mysql_query("select * from kategori");
?>
<table border="1">
	<tr>
		<td>ID Kategori</td>
		<td>Nama Kategori</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_kategori)) { ?>
	<tr>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="manu.php">Menu Utama</a>