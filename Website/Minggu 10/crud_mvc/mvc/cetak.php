<?php
require_once("assets/dompdf/autoload.inc.php");
$main = new controller();
$pdf = $main->model->cetak($id);
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>DATA SISWA</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>

 <th>Nama</th>
 <th>Alamat</th>
 <th>Logo</th>
 </tr>';

 foreach($pdf as $row){
    $html .= "<tr>

 <td>" . $row['1'] . "</td>
 <td>" . $row['2'] . "</td>
 <td><img src='assets/logo/" . $row['3'] . "'  class='img-circle' width='100'</td>
 </tr>";
}
$html .= "</html>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Uwuw.pdf');
