<?php
include "koneksi.php";
include "dompdf/autoload.inc.php";
$cetak = cetak($_GET['id']);


use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>DATA SISWA</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>

 <th>Nama</th>
 <th>Alamat</th>
 <th>Logo</th>
 </tr>';

foreach ($cetak as $tampils) {
    $html .= "<tr>

 <td>" . $row['nama'] . "</td>
 <td>" . $row['alamat'] . "</td>
 <td><img src='gambar" . $row['logo'] . "'  class='img-circle' width='100'</td>
 </tr>";
}
$html .= "</html>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Laporan.pdf');
