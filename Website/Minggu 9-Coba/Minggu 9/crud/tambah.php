<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=add">
<table> 
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
        <td><input type="file" name="logo"></td> 
    </tr> 
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>