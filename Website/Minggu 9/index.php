<?php
include 'koneksi.php';
$mysqli = new Databases();

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<h1>CRUD OOP PHP</h1>
<br>
<h3>Data Sekolah</h3>
<a href="tambah.php?id=<?php echo $tampils['id']; ?>aksi=tambah"class="btn btn-danger" style="margin-left:90%"> ADD Data</a>
<h1></h1>
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
        <?php foreach ($mysqli->tampilkan() as $tampils) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tampils['nama'] ?></td>
                <td><?php echo $tampils['alamat'] ?></td>
                <td style="text-align: center;"><img src="gambar/<?php echo $row['logo']; ?>" style="width: 120px;"></td>
                <td>
                    <a href="pdf.php?id=<?php echo $tampils['id']; ?>" target="_blank" class="btn btn-warning"> PDF </a>
                    <a href="cetak.php?id=<?php echo $tampils['id']; ?>" class="btn btn-warning"> Download </a>
                    <a href="edit.php?id=<?php echo $tampils['id']; ?>&aksi=update" class="btn btn-warning"> EDIT </a>
                    <a href="proses.php?id=<?php echo $tampils['id']; ?>&aksi=hapus" class="btn btn-warning"> HAPUS </a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
