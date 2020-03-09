<?php
include('koneksi.php');
$tampil_barang = mysql_query("select *from barang
							inner join kategori on barang.kategori_id=kategori.id_kategori
							inner join satuan on barang.satuan_id=satuan.id_satuan");
?>
<table border="1">
	<tr>
		<td>ID Barang</td>
		<td>Nama Barang</td>
		<td>Nama Kategori</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_barang)) { ?>
	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="manu.php">Menu Utama</a>