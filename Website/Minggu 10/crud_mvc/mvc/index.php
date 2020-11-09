<?php
	//include class controller
	include "controller/controller.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();
	
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['e'])){ //kondisi untuk mengakses halaman edit
		$id = $_GET['e'];
		$main->viewEdit($id);
	}else if(isset($_GET['p'])){ //kondisi untuk menghapus data (mengakses fungsi pdf)
		$id = $_GET['p'];
		$main->cetak($id);
	}else if(isset($_GET['c'])){ //kondisi untuk menghapus data (mengakses fungsi cetak)
		$id = $_GET['c'];
		$main->cetak($id);
	}else if(isset($_GET['d'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$id = $_GET['d'];
		$main->delete($id);
	}else if(isset($_GET['i'])){
		$main->viewInsert(); //kondisi untuk mengakses halaman add
	}else{
		$main->index(); //kondisi awal (menampilkan seluruh data)
	}
?>