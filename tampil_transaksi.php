<?php
include('koneksi.php');
$tampil_barang = mysql_query("select tr.id_transaksi, tr.nama_transaksi, br.nama_barang, tr.tgl_transaksi, stn.nama_satuan, qty, harga, qty*harga as total 
from transaksi as tr
inner join barang as br 
on tr.id_barang=br.id_barang 
inner join satuan as stn 
on br.satuan_id=stn.id_satuan
");
?>
<h1>Tampil Transaksi</h1>
<table border="1">
	<tr>
		<td>ID Transaksi</td>
		<td>Nama Transaksi</td>
		<td>Nama Barang</td>
		<td>Tanggal </td>
		<td>Satuan</td>
		<td>Quantity</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_barang)) { ?>
	<tr>
		<td><?php echo $data['id_transaksi']; ?></td>
		<td><?php echo $data['nama_transaksi']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['tgl_transaksi']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="manu.php">Menu Utama</a>