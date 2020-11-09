<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
    <style>

table {
    padding:5px;
    margin :10px;
    width:75%;
    border :1px solid blue;
}
input[type=text],[type=number] ,select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
body {
    font-size :25px;
    font-family :arial;
    margin-left :15%;
}
input[type=submit] {
    width: 20%;
    margin-left:50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>    
</head>
<body>
<form action="validasiform3.php" method="post" name="dd">
        <table>
        <tr>
            <td>NIM <td><input type="text"name="nim">
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><select name="ps">
            <option value ="Teknik Informatika S1">Teknik Informatika S1</option>
            <option value ="Sistem Informasi S1">Sistem Informasi S1</option>
            <option value ="Teknik Informatika D3">Teknik Informatika D3</option>
        </select>

                </select>
        </tr>
       <tr>
            <td>Nilai Tugas <td><input type="number"name="tgs" min="0" max="100">
       </tr>
       <tr>
            <td>Nilai UTS <td><input type="number"name="uts" min="0" max="100">
       </tr>
       <tr>
            <td>Nilai UAS <td><input type="number"name="uas" min="0" max="100">
       </tr>
       <tr>
       <td>Catatan Khusus</td>
       <td>
            <input type="checkbox" name="check_box1[]" value="
            Kehadiran >=70%">Kehadiran >=70%<br>
            <input type="checkbox" name="check_box2[]" value="
            Interaktif di kelas">Interaktif di kelas<br>
            <input type="checkbox" name="check_box3[]" value="Tidak
            Terlambat mengumpulkan tugas">Tidak
            Terlambat mengumpulkan tugas<br>
        </td>
        </tr>
       
   <tr><td></td>
       <td><input type="submit" value="kirim" name="kirim"></td>
    </tr>
</table>
</form>
</body>