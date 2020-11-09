<?php
include "koneksi.php";
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>

 <th>Nama</th>
 <th>Alamat</th>
 <th>Logo</th>
 </tr>';

foreach ($koneksi->cetak($_GET['id']) as $row) {
    $html .= "<tr>

 <td>" . $row['nama'] . "</td>
 <td>" . $row['alamat'] . "</td>
 <td><img src='assets/logo/" . $row['logo'] . "'  class='img-circle' width='100'</td>
 </tr>";
}
$html .= "</html>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream('laporan.pdf', array('Attachment' => 0)); ?>
?>
?>