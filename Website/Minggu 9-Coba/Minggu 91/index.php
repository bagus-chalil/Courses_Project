<form action="proses.php?action=add" method="post" enctype=”multipart/form-data”> <table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>Logo</td>
        <td>
            <label for="exampleInputFile">Pilih Gambar</label>
            <input type="file" name="logo" id="exampleInputFile">
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
    </table>
</form>