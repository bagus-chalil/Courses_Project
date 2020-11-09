<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>Nomor</td>
					<td>:</td>
					<td><input type="text" name="id" value="<?=$row['0']?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row['1']?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" value="<?=$row['2']?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Logo</td>
					<td>:</td>
					<td><input type="file" name="logo" value="<?=$row['3']?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();
	}
?>