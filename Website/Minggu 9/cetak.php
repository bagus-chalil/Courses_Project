<?php
include "koneksi.php";
$mysqli = new Databases();
require_once("assets/dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>DATA SISWA</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>

 <th>Nama</th>
 <th>Alamat</th>
 <th>Logo</th>
 </tr>';

foreach ($mysqli->cetak($_GET['id']) as $tampils) {
    $html .= "<tr>

 <td>" . $tampils['nama'] . "</td>
 <td>" . $tampils['alamat'] . "</td>
 <td><img src='assets/logo/" . $tampils['logo'] . "'  class='img-circle' width='100'</td>
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
