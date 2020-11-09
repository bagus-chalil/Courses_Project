<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
<h1>FORM INPUT CRUD OOP<h1>
<h1></h1>
<form  action="proses.php?aksi=tambah" method="post" enctype=”multipart/form-data”>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" name="nama" style="width:45%">
  </div>
  <div class="form-group">
    <label for="">Alamat</label>
    <input type="text" class="form-control" name="alamat" style="width:45%">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Logo</label>
    <input type="file" class="form-control" name="logo"  id="exampleInputFile" style="width:25%" >
  </div>
  <div class="form-group form-check">
    
  <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
</form>
</div>

        