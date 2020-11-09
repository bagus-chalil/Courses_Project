<?php
include 'koneksi.php';
$mysqli = new Databases();

?>

<form action="proses.php?action=update" method="post">
    <?php
    foreach ($mysqli->edit($_GET['id']) as $datas) :
    ?>
        <table>
            <tr>
                <td>Nama</td>
                <input type="hidden" name="id" value="<?php echo $datas['id'] ?>">
                <td><input type="text" name="nama" value="<?= $datas['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $datas['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><input type="text" name="logo" value="<?= $datas['logo']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    <?php endforeach ?>
</form>