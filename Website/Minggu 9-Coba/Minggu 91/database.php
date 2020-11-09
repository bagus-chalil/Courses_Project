<?php

class Databases
{

    public $host = 'localhost';
    public $name = 'root';
    public $pass = '';
    public $dbname = 'crud_pbo';

    public $mysqli;

    function __construct()
    {

        $this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
    }


    public function tampil_data()
    {
        $data = "SELECT * FROM sekolah ";
        $hasil = $this->mysqli->query($data);

        while ($d = mysqli_fetch_array($hasil)) {
            $result[] = $d;
        }

        return $result;
    }

    public function input($nama, $alamat, $logo)
    {

        if (isset($_POST['submit'])) {
            $data = [
                'logo' => $_FILES['file']['name'],
                'tmp'    => $_FILES['file']['tmp_name']

            ];
            move_uploaded_file($data['tmp'], 'assets/logo/' . $data['logo']);
            parent::insert($data['logo']);
        }
        mysqli_query($this->mysqli, "INSERT INTO sekolah VALUES('','$nama','$alamat','$data')");
    }

    public function getId($id)
    {
        $query = mysqli_query($this->mysqli, "SELECT FROM sekolah WHERE id='$id'");
        return $query->fetch_array();
    }

    public function delete($id)
    {
        mysqli_query($this->mysqli, "DELETE FROM sekolah WHERE id = '$id'");
    }

    function edit($id)
    {
        $data = mysqli_query($this->mysqli, "select * from sekolah where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nama, $alamat, $logo)
    {
        mysqli_query($this->mysqli, "update sekolah set nama='$nama', alamat='$alamat', logo='$logo' where id='$id'");
    }

    public function cetak($id)
    {
        $data = mysqli_query($this->mysqli, "select * from sekolah where id='$id'");
        while ($do = mysqli_fetch_array($data)) {
            $hasils[] = $do;
        }
        return $hasils;
    }
}
