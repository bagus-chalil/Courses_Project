<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "crud_pbo";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from sekolah");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }
    function tambah_data($nama,$alamat,$logo)
	{
        mysqli_query($this->koneksi, "insert into sekolah values ('','$nama','$alamat','$logo')");
    }
    function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from sekolah where id='$id'");
		return $query->fetch_array();
    }
    function update_data($nama,$alamat,$logo,$id)
	{
		$query = mysqli_query($this->koneksi,"update sekolah set nama='$nama',alamat='$alamat',logo='$logo' where id='$id'");
    }
    function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from sekolah where id='$id'");
    }
}
