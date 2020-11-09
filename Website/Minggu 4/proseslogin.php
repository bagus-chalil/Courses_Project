<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "bagus" && $pass == "dti") {
        echo "<h2>login Berhasil</h2>";
    }else {
        echo "<h2>Login Gagal</h2>";
    }
}
?>