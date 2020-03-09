<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$save="insert into transaksi (id_transaksi, nama_transaksi, tgl_transaksi,
									harga, qty, id_barang)
	values('".$_POST['id_transaksi']."',
			'".$_POST['nama_transaksi']."',
			'".$_POST['tgl_transaksi']."',
			'".$_POST['harga']."',
			'".$_POST['qty']."',
			'".$_POST['id_barang']."')";
	$proses=mysql_query($save);
	if($proses){
		header("Location:tampil_transaksi.php");
	}else{
		echo mysql_errno();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Transaksi</td>
			<td><input type="text" name="id_transaksi"></td>
		</tr>
		<tr>
			<td>Nama Transaksi</td>
			<td><input type="text" name="nama_transaksi"></td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td><input type="date" name="tgl_transaksi"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td><input type="text" name="qty"></td>
		</tr>
		<tr>
			<td>ID Barang</td>
			<td><input type="text" name="id_barang"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
<a href="manu.php">Menu Utama</a>