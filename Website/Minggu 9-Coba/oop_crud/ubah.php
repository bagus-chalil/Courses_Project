<?php 
include "database.php";
//edit data by id query..............................................................................
if (isset($_GET['edit'])) {
    $id = $_GET['edit'] ;
    $db = new database();
    $query = "SELECT * FROM sekolah WHERE id = $id";
    $data = $db->edit($query)->fetch_assoc();

}
    





//update data.......................................................................................

$db = new database();
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $nama  = $_POST['nama'];
    $alamat = $_POST['alamat'];
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
        $update = "UPDATE  sekolah SET nama ='$nama', alamat ='$alamat', logo='$logo' WHERE id= $id";
    $save = $db->update($update);
    }
    
    

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-4">
    <form method="POST" action="ubah.php" enctype="multipart/form-data">
    <h1>Edit Siswa</h1>
    <table class="table">
        <tr>
        <input type="hidden"  value="<?php if(isset($_GET['edit']))  echo  $data['id']; ?>" name="id" >
        
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" class="form-control" value="<?php if(isset($_GET['edit']))   echo $data['nama']; ?>" name="nama" placeholder="Enter product name">
                
            </td>
        
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <input type="taxt" class="form-control" name="alamat" value="<?php if(isset($_GET['edit']))   echo $data['alamat']; ?>" placeholder="Enter Product Price" >
            </td>
        </tr>
        <tr>
            <td>Logo</td>
            <td>
                <input type="file" class="form-control" name="logo" value="<?php if(isset($_GET['edit']))   echo  $data['logo']; ?>" placeholder="Enter Product image" >
            </td>
        </tr>

        <tr>
            <td colspan="2" align="content">
            <?php if(isset($_GET['edit'])) {?>
           
                <button type="submit" class="btn btn-primary" name="update">Ubah</button>
            <?php }?>


            </td>
            
        </tr>
    </table>
    </form>
    </div>
</body>
</html>