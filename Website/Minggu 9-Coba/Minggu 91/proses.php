<?php
include "koneksi.php";
$input = new Databases();

$aksi = $_GET['action'];
if ($aksi == "add") {

    $input->input($_POST['nama'], $_POST['alamat'], $_POST['logo']);
    header("location:tampil.php");
} elseif ($action == "delete") {
    $input->delete($_GET['id']);
    header("location:tampil.php");
} elseif ($action == "update") {
    $input->update($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['logo']);
    header("location:tampil.php");
}
