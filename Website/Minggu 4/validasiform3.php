<?php
    if(isset($_POST[kirim]))    {
        
        $nim   = $_POST['nim'];
        $prodi    =$_POST['ps'];
        $tgs   = $_POST['tgs'];
        $tgs  = 0.4*$tgs;
        $uts   = $_POST['uts'];
        $uts  = 0.3*$uts;
        $uas   = $_POST['uas'];
        $uas  = 0.3*$uas;
        $akhir = $tgs+$uts+$uas;
        
        echo "<h1>Your Data</h1>";
        echo "<br>";
        echo "<table bgcolor=aqua=100% border=1>";
        echo "<tr>";
        echo "<td>NIM</td>";
        echo "<td>Program Studi</td>";
        echo "<td>Nilai Akhir</td>";
        echo "<td>Status</td>";
        echo "<td>Catatan Khusus</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$nim</td>";
        echo "<td>$prodi</td>";


        if ($akhir >=84)    {
            echo "<td>Nilai Akhir    =<b>A</b></td>";
        }else if ($akhir >=70)    {
            echo "<td>B</td>";
        }else if ($akhir >=60)    {
            echo "<td>C</td>";
        }else if ($akhir >=50)    {
            echo "<td>D</td>";
        }else if ($akhir <=50)    {
            echo "<td>E</td>";
        }
        if ($akhir >=60)    {
            echo "<td>Anda LULUS</td>";
        }else{
            echo "<td>Anda GAGAL</td>";
        }
        
        if (isset($_POST['ck01'])) {
            echo "<td>+ " . $_POST['ck01'] . "<br>";
        }
        if (isset($_POST['ck01'])) {
            echo "+ " . $_POST['ck02'] . "<br>";
        }
        if (isset($_POST['ck01'])) {
            echo "+ " . $_POST['ck03'] . "<br></td>";
        }
        if(!empty($_POST['check_box1'])){
            foreach($_POST['check_box1'] as $selected){
                echo "<td>".$selected."<br>";
            }
        }
        if(!empty($_POST['check_box2'])){
            foreach($_POST['check_box2'] as $selected){
                echo $selected."<br>";
            }
        }if(!empty($_POST['check_box3'])){
            foreach($_POST['check_box3'] as $selected){
                echo $selected."<br></td>";
            }
        }
    }
?>