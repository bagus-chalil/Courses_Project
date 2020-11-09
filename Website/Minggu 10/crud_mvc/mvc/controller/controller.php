<?php
	//include class model
	include "model/model.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
			include "view/view.php"; //memamnggil view.php pada folder view
		}
		
		function viewEdit($id){
			$data = $this->model->select1($id); //select data siswa dengan nomor ...
			$row = $this->model->fetch($data); //fetch hasil select
			include "view/view_edit.php"; //menampilkan halaman untuk mengedit data
		}
		
		function viewInsert(){
			include "view/view_add.php"; //menampilkan halaman add data
		}
		
		//fungsi updata data
		function update(){
			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$logo = $_POST['logo'];
			
			$update = $this->model->update1($id, $nama, $alamat, $logo);
			header("location:index.php");
		}
		
		function delete($id){
			$delete = $this->model->delete1($id);
			header("location:index.php");
		}
		
		function insert(){
			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$logo = "";
			if($_FILES['logo']['tmp_name']!=""){ 
				$tmp_logo = $_FILES['logo']['tmp_name']; 
				$logo = $_FILES['logo']['name']; 
				move_uploaded_file($tmp_logo, "assets/logo/".$logo); 
			} 
			$insert = $this->model->insert1($id, $nama, $alamat, $logo);
			header("location:index.php");
		}
		
		function cetak($id){
		$cetak = $this->model->cetak1($id);
		include "pdf.php";
		}
		
		function __destruct(){
		}
	}
?>