<?php
include 'koneksi.php';
$mysqli = new Databases();

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<table class="table table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($mysqli->tampil_data() as $tampils) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tampils['nama'] ?></td>
                <td><?php echo $tampils['alamat'] ?></td>
                <td>
                    <img src="assets/logo/<?php echo $tampils['logo'] ?>" class="img-circle" width="100"></td>
                <td>
                    <a href="pdf.php?id=<?php echo $tampils['id']; ?>" target="_blank" class="btn btn-warning"> PDF </a>
                    <a href="cetak.php?id=<?php echo $tampils['id']; ?>" class="btn btn-warning"> Download </a>
                    <a href="edit.php?id=<?php echo $tampils['id']; ?>&action=update" class="btn btn-warning"> EDIT </a>
                    <a href="proses.php?id=<?php echo $tampils['id']; ?>&action=delete" class="btn btn-warning"> HAPUS </a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>