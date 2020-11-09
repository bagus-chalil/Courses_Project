<?php
include "database.php";
$db = new database();
//show all data query.............................................................................
$query = "SELECT * FROM sekolah";
$read = $db->select($query);



if(isset($_POST['cari'])){
	$db = new database();
	$searched = $_GET['key'];
	$data = "SELECT * FROM sekolah WHERE nama LIKE '%%$searched%%'" ;
	$show = $db->select($data)->fetch_assoc();

	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
                <div class="row">
					<div class="col-12">

					<!-- Form pencarian -->
					<div class="py-4 d-flex justify-content-end align-items-center">
					<h1 class="h2 mr-auto">
						<a class="text-info" href="">Tabel Siswa</a>
					</h1>
					<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
					<form class="w-25 ml-4" method="get">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="search"
						name="key">
						<div class="input-group-append">
						<button type="submit" class="btn btn-outline-secondary" name="cari">Cari</button>
						</div>
					</div>
					</form>
					</div>
                </div>
						<table class="table table-bordered">
							<thead class="thead-dark">
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama</th>
									<th scope="col">Alamat</th>
									<th scope="col">Logo</th>
									<th scope="col text-center">Action</th>
								</tr>
							</thead>
								<?php if ($read) { ?>

                                    <?php 
                                    $no = 1;
                                        while($row = $read->fetch_assoc()) {  ?>
										<tr>
											<td><?php echo $no++;?></td>
											<td><?php echo $row['nama'];?></td>
											<td><?php echo $row['alamat'];?></td>
											<td>
												<img src="<?php echo 'imagess/'.$row['logo'];?>" width="80px" height="80px" />
												

											</td>
											<td>
												<a href="ubah.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a>
												<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
												<a target="blank" href="pdf.php?id=<?php echo $row['id']; ?>" class="btn btn-info">PDF</a>
												<a href="download.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Download</a>
												
											</td>
										</tr>
									<?php } ;?>
								<?php } ;?>
								
							</table>
				</div>
			</div>		
</body>
</html>