<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
	header('location:tampil_data.php');
}
?>