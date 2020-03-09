<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$save="insert into barang (id_barang, nama_barang, kategori_id, satuan_id)
	values('".$_POST['id_barang']."',
			'".$_POST['nama_barang']."',
			'".$_POST['kategori_id']."',
			'".$_POST['satuan_id']."')";
	$proses=mysql_query($save);
	if($proses){
		header("location:tampil_barang.php");
	}else{
		echo mysql_errno();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Barang</td>
			<td><input type="text" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Kategori ID</td>
			<td><input type="text" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Satuan ID</td>
			<td><input type="text" name="satuan_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
<a href="manu.php">Menu Utama</a>