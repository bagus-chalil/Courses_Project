<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM tb_user where username='$username' && password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['Nama'] = $data['Nama'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['Hak'] = $data['Hak'];

	

	if ($_SESSION["Hak"]=$data["Hak"]==1){
		setcookie("message","delete",time()-1);
		header("location:crud/index.php");
	}else if ($_SESSION["Hak"]=$data["Hak"]==2) {
		setcookie("message","delete",time()-1);
		header("location:crud2/index.php");
	}

} else {
	setcookie("message", "Maaf, Username atau Password salah", time()+3600);
	header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
?>