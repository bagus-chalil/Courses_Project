<?php

include "database.php";
$connection = new database();
		//delect data........................................................................................
    //    $id = $_GET['id'];
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$del = "DELETE FROM sekolah WHERE id=$id";
            $connection->delete($del);
            
            header("location:index.php");
		}	 	 



?>