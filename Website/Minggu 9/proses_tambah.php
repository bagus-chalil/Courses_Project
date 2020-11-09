<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $input = new Databases();
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
      $insert = $input->insert($uery);
    }

  }

