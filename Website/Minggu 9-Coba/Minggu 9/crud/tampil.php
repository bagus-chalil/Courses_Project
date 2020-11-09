<?php 	
include('koneksi.php');
$db = new database();
$data_sekolah = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>CRUD OOP PHP</h1>
<BR>
<h3>Data Sekolah<h3>
<a href="tambah.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Logo</th>
			<th colspan="4">Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_sekolah as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><img class="img-mini" src="assets/foto/<?php echo 
                $row['logo'];?>"></td>
				<td><a href="edit.php?id=<?php echo $row['id']; ?>">Update</a></td>
				<td><a onclick="return confirm('Hapus Data<?php echo $row['nama'];?>')"><a href="tampil.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
