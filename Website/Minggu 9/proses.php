<?php
include "koneksi.php";
$input = new Databases();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {

    $input->input($_POST['nama'], $_POST['alamat'], $_POST['logo']);
    header("location:index.php");
} elseif ($aksi == "hapus") {
    $input->hapus($_GET['id']);
    header("location:index.php");
} elseif ($aksi == "update") {
    $input->update($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['logo']);
    header("location:index.php");
}
