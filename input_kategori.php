<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$save="insert into kategori (id_kategori, nama_kategori)
	values('".$_POST['id_kategori']."',
			'".$_POST['nama_kategori']."')";
	$proses=mysql_query($save);
	if($proses){
		header("Location:tampil_kategori.php");
	}else{
		echo mysql_errno();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Kategori</td>
			<td><input type="text" name="id_kategori"></td>
		</tr>
		<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="nama_kategori"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
<a href="manu.php">Menu Utama</a>