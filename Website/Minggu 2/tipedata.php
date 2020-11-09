<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>
<body>
<?php $nim = "A22.2019.00273"; 
$nama = 'Bagus'; 
$umur = 23; 
$nilai = 25; 
$status = TRUE; 
echo "NIM : " . $nim . "<br>"; 
echo "Nama : $nama<br>"; 
print "Umur : " . $umur; 
print "<br>"; 
printf ("Nilai : %.3f<br>", $nilai); 
if ($status) 
echo "Status : Aktif"; 
else 
echo "Status : Tidak Aktif"; 
?>   
</body>
</html>