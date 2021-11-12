<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Pemesanan</title>
</head>
<body>
	<?php header("Content-type: application/vnd-ms-excel");
		  header("Content-Disposition: attachment; filename=Appointment.xls");
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
			<td><?php echo $_POST["name"]; ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td><?php if (isset($_POST['Gender'])) {
					$Gender=$_POST['Gender'];
    				echo "".$Gender;
					}
					?></td>
		</tr>
		<tr>
			<td>Date</td>
			<td>:</td>
			<td><?php echo $_POST["date"]; ?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><?php echo $_POST["email"]; ?></td>
		</tr>
		<tr>
			<td>Doctor/Beauty Therapist</td>
			<td>:</td>
			<td><?php if (isset($_POST["Appointment"])) {
				echo $_POST["Appointment"];} ?></td>
		</tr>
		<tr>
			<td>Message</td>
			<td>:</td>
			<td><?php echo $_POST["Message"]; ?></td>
		</tr>
	</table>


</body>
</html>