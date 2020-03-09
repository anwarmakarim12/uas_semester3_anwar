<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$save="insert into satuan (id_satuan, nama_satuan)
	values('".$_POST['id_satuan']."',
			'".$_POST['nama_satuan']."')";
	$proses=mysql_query($save);
	if($proses){
		header("Location:tampil_satuan.php");
	}else{
		echo mysql_errno();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Satuan</td>
			<td><input type="text" name="id_satuan"></td>
		</tr>
		<tr>
			<td>Nama Satuan</td>
			<td><input type="text" name="nama_satuan"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
<a href="manu.php">Menu Utama</a>