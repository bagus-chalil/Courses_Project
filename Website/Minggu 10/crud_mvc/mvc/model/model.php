<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			$connect = mysql_connect("localhost", "root", "");
			$db = mysql_select_db("mvc");
		}
		
		function execute($query){
			return mysql_query($query);
		}
		
		function selectAll(){
			$query = "select * from sekolah2";
			return $this->execute($query);
		}
		
		function select1($id){
			$query = "select * from sekolah2 where id='$id'";
			return $this->execute($query);
		}
		
		function update1($id, $nama, $alamat, $logo){
			$query = "update sekolah2 set nama='$nama', alamat='$alamat', logo='$logo' where id='$id'";
			return $this->execute($query);
		}
		
		function delete1($id){
			$query = "delete from sekolah2 where id='$id'";
			return $this->execute($query);
		}
		
		function insert1($id, $nama, $alamat,$logo){
			$query = "insert into sekolah2 values ('$id', '$nama', '$alamat', '$logo')";
			return $this->execute($query);
		}
		
		function cetak1($id){
			$query = "select * from sekolah2 where id='$id'";
			return $this->execute($query);
		}

		function fetch($var){
			return mysql_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>