<?php

  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "crud_oop_php"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
    }
    function getId($id)
    {
        $query = mysqli_query($this->mysqli, "SELECT FROM sekolah WHERE id='$id'");
        return $query->fetch_array();
    }

    function cetak($id)
    {
        $data = mysqli_query($this->mysqli, "select * from sekolah where id='$id'");
        while ($do = mysqli_fetch_array($data)) {
            $hasils[] = $do;
        }
        return $hasils;
    } 
?>
