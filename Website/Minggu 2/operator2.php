<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 4;
    echo "<br>Nilai a :".$a;
    echo "<br>Nilai b :".$b;
    echo "<br>$a == $b : ".($a == $b);
    echo "<br>$a > $b : ". ($a > $b); 
    echo "<br>$a < $b : ". ($a < $b); 
    echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b)); 
    echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b)); 
    ?>
</body>
</html>