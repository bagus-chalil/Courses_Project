<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_sekolah = $db->get_by_id($id);
}
else
{
	header('location:tampil.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_sekolah['id']; ?>"/>
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $data_sekolah['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $data_sekolah['alamat']; ?>"/></td>
	</tr>
	<tr>
		<td>logo</td>
		<td><input type="file" name="logo" value="<?php echo $data_sekolah['logo']; ?>"/></td>
	</tr>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>