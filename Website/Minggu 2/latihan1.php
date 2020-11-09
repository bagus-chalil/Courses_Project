<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>

table {
    padding:5px;
    margin :10px;
    width:75%;
    border :1px solid blue;
}
input[type=number],[type=text], select {
    width: 50%;
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
    width: 50%;
    margin-left:80%;
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
    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            #var_dump($_POST);
            $op=$_POST["op"];
            switch ($op){
                case"+":
                    $c=$_POST["bil1"]+$_POST["bil2"];
                break;
                case"-":
                    $c=$_POST["bil1"]-$_POST["bil2"];
                break;
                case"/":
                    $c=$_POST["bil1"]/$_POST["bil2"];
                break;
                case"*":
                    $c=$_POST["bil1"]*$_POST["bil2"];
                break;
            }
        }?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="fcalf">
        <table>
        <tr>
        <td>bilangan 1 <td>:<input type="number"name="bil1" value="<?php if (!empty($_POST["op"])) {echo $_POST["bil1"];};?>"></td>
        </tr>
        <tr>
        <td>bilangan 2 <td>:<input type="number"name="bil2" value="<?php if (!empty($_POST["op"])) {echo $_POST["bil2"];};?>"></td>
        </tr>
        <tr>
        <td>operator   </td>
        <td>:<select name="op">
            <option value ="+"> + (tambah) </option>
            <option value ="-"> - (kurang) </option>
            <option value ="/"> / (bagi) </option>
            <option value ="*"> * (perkalian) </option>
        </select>
        </td>
       </tr>
    <tr>
    <td>Hasil</td>
    <td>:<input type="text" name="fhasil" value="<?php if (!empty($_POST["op"]))
    {ECHO round($c,2);};?>"></td>
    </tr>
    <tr>
       <td><input type="submit" value="kirim" name="fsubmit"></td>
    </tr>
</table>
</form>

</body>
</html>