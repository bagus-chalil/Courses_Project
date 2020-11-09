<?php
include 'koneksi.php';
$mysqli = new Databases();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
<h1>FORM EDIT CRUD OOP<h1>
<h1></h1>
<form  action="proses.php?aksi=update" method="post" enctype=”multipart/form-data”>
<?php
    foreach ($mysqli->edit($_GET['id']) as $datas) :
?>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="hidden" name="id" value="<?php echo $datas['id'] ?>">
    <input type="text" class="form-control" name="nama" style="width:45%" value="<?= $datas['nama']; ?>">
  </div>
  <div class="form-group">
    <label for="">Alamat</label>
    <input type="text" class="form-control" name="alamat" style="width:45%" value="<?= $datas['alamat']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Logo</label>
    <input type="file" class="form-control" name="logo" style="width:25%"  value="<?= $datas['logo']; ?>">
  </div>
  <div class="form-group form-check">
    
  <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
  <?php endforeach ?>
</form>
</div>
