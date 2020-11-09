<?php
include "assets/dompdf/autoload.inc.php";
//include "controller/controller.php"
$main = new controller();
$pdf = $main->model->cetak1($id);


use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
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
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream('laporan.pdf', array('Attachment' => 0)); ?>
?>
?>