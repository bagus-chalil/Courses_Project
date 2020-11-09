<?php
include('database.php');
include("dompdf1/dompdf/autoload.inc.php");
$db = new database();
$id = $_GET["id"];
$query = "SELECT * FROM sekolah WHERE id=$id";
$read = $db->print($query);

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Logo</th>
 </tr>';
if ($read) {
    
    $no = 1;
    while($row = $read->fetch_assoc()){
    $html .= "<tr>
 <td>".$no++."</td>
 <td>" .$row['nama'] . "</td>
 <td>" .$row['alamat'] . "</td>
 <td><img src='imagess/" .$row['logo'] . "'  class='img-circle' width='100'</td>
 </tr>";
}
}
$html .= "</html>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream('laporan.pdf', array('Attachment' => 0)); 
?>