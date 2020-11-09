<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>Data Sekolah</title>

				<link href="style/css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" href="style/style.css">

		</head>
		<body>
				<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container-fluid">
								<div class="navbar-header">
										<a class="navbar-brand" href="index.php">
												<i class="glyphicon glyphicon-check"></i>
													Aplikasi CRUD PHP Menggunakan Metode MVC
										</a>
								</div>
						</div>
				</nav>

				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="page-header">
												<h4>
														<i class="glyphicon glyphicon-user"></i> Data Siswa
														<a class="btn btn-success pull-right" href="index.php?i=add" data-target="#modal_tambah" data-toggle="modal">
																<i class="glyphicon glyphicon-plus"></i> Tambah
														</a>
												</h4>
										</div>
										<div class="panel panel-default">
												<div class="panel-heading">
														<h3 class="panel-title">Data Siswa</h3>
												</div>
												<div class="panel-body">
														<table class="table table-striped table-hover">
																<thead>
																	<tr>
																		<td>Nomor</td>
																		<td>Nama</td>
																		<td>Alamat</td>
																		<td>Logo</td>
																		<td colspan="4">Aksi</td>
																	</tr>
																	</thead>

																	<?php
																	
																	while($row = $this->model->fetch($data)){
																	?>	
																		<tr>
																		<td><?php echo $row['0']; ?></td>
																		<td><?php echo $row['1']; ?></td>
																		<td><?php echo $row['2']; ?></td>
																		<td style="text-align: center;"><img src="assets/logo/<?php echo $row['3']; ?>" style="width: 120px;"></td>
																		<td>
																			<a href="index.php?p=<?php echo $row['0']; ?>"class="btn btn-warning" target="_blank" > PDF </a>
																			<a href="index.php?c=<?php echo $row['0']; ?>"class="btn btn-warning" > Download </a>
																			<a href="index.php?e=<?php echo $row['0']; ?>"class="btn btn-warning" > EDIT </a>
																			<a href="index.php?d=<?php echo $row['0']; ?>"class="btn btn-warning" > HAPUS </a>
																		
																		</td>
                                                                        </tr>
																						 
																<?php	} ?>
														</table>
												</div>
										</div>
								</div>
						</div>
				</div>

				
		</body>
</html>