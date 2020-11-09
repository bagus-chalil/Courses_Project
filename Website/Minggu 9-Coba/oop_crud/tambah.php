<?php
include "database.php";

//insert data query ..............................................................................
$db = new database();
if (isset($_POST['submit'])){
	$nama  = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	if (isset($_FILES['logo']['tmp_name'])) {
                $tmp_name = $_FILES['logo']['tmp_name'];
  				$target = "imagess/.";
  				$name = $_FILES["logo"]["name"];
  				move_uploaded_file($tmp_name, "$target/$name");	
  			}
  			$logo = $name;
  			

			if ($nama == ''|| $alamat == '' ) {
				$msg = "Field must not be empty";
			}else{
				$uery = "INSERT INTO sekolah(nama,alamat,logo) VALUES('$nama','$alamat','$logo')";
				$insert = $db->insert($uery);
			}

		}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
<form method="POST" action="tambah.php" enctype="multipart/form-data">
<h1>Tambah Siswa</h1>
<table class="table">
	<tr>
		<td>Nama</td>
		<td>
			<input type="text" name="nama" class="form-control" >
		</td>
	
	</tr>
	<tr>
		<td>Alamat</td>
		<td>
			<input type="taxt" class="form-control" name="alamat" >
		</td>
	</tr>
	<tr>
		<td>Logo</td>
		<td>
			<input type="file" class="form-control" name="logo" >
		</td>
	</tr>

	<tr>
		<td colspan="2" align="content">
				<button type="submit" class="btn btn-primary" name="submit">Save</button>

		</td>
		
	</tr>
</table>
</form>
</div>
</body>
</html>