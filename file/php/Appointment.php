<?php

use Dompdf\FrameDecorator\Table;

include('koneksi.php');
$db = new database();
$data_karyawan = $db->tampil_data();
$data_pelanggan2 = $db->tampil_data2();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Data Pemesanan</title>
</head>

<body>
	<table style="text-decoration:none;">
		<h2>Data Appointment</h2>
		<?php
		$no = 1;
		foreach ($data_pelanggan2 as $row1) {
		?>
			<table>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $row1['name']; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td><?php if (isset($row1['gender'])) {
							$Gender = $row1['gender'];
							echo "" . $Gender;
						}
						?></td>
				</tr>
				<tr>
					<td>Date</td>
					<td>:</td>
					<td><?php echo $row1["date"]; ?></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>:</td>
					<td><?php echo $row1["email"]; ?></td>
				</tr>
				<tr>
					<td>Doctor/Beauty Therapist</td>
					<td>:</td>
					<td><?php if (isset($row1["appointment"])) {
							echo $row1["appointment"];
						} ?></td>
				</tr>
				<tr>
					<td>Message</td>
					<td>:</td>
					<td><?php echo $row1["message"]; ?></td>
				</tr>
			</table>

			<br><br>

		<?php
		}
		?>
	</table>


</body>

</html>