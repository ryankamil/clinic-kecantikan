<?php
include('koneksi.php');
$db = new database();

$data_karyawan = $db->tampil_data();

require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$html = '<center><h3>Daftar Nama Karyawan</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Jenis Kelamin</th>
 <th>Posisi</th>
 </tr>';
$no = 1;
foreach($data_karyawan as $row){
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['jenis_kelamin']."</td>
 <td>".$row['posisi']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_karyawan.pdf');
