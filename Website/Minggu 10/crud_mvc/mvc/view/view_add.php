<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>Input Data Siswa</title>

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
														<i class="glyphicon glyphicon-check"></i> Input Data Siswa
												</h4>
										</div>
										<div class="panel panel-default">
												<div class="panel-heading">
														<h3 class="panel-title">Input Data Siswa</h3>
												</div>

												<div class="panel-body">
                            <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">

									<div class="form-group">
                                        <label>Nomor</label>
                                        <input type="text" class="form-control" name="id" autocomplete="off" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" autocomplete="off" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" autocomplete="off" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>logo</label>
                                        <input type="file" class="form-control" name="logo" autocomplete="off"/>
                                    </div>
				
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success btn-submit" name="submit">
                                        <button type="reset" class="btn btn-danger btn-reset" data-dismiss="modal" aria-hidden="true">Batal</button>
                                    </div>

                                </form>
                            </div>
												</div>
										</div>
								</div>
						</div>
				</div>

				
		</body>
</html>

<?php

    if(isset($_POST['submit'])){//jika button submit diklik maka panggil fungsi insert pada controller
        $main = new controller();
        $main->insert();
    }

?>
