<?php
include('koneksi.php');
$db = new database();
$data_appointment = $db->tampil_data1();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

	<!-- My Style -->
	<link rel="stylesheet" href="../../css/Dashboard.css" />

	<!-- icons bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<style>

	</style>
	<title>Menu | Appointment</title>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark warna-bg">
		<a class="navbar-brand" href="#">Klinik Kecantikan | Eilidh</a>
		<form class="form-inline my-2 my-lg-0 ml-auto">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
			<button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Search</button>
		</form>

		<!-- icons -->
		<div class="icons ml-3 mt-1 ">
			<a href="../../../index.html">
				<h4><i class="bi bi-box-arrow-in-right my-icon" data-toggle="tooltip" title="Sign Out"></i></h4>
			</a>
		</div>

	</nav>
	<!-- end Navbar -->

	<!-- Sidebar -->
	<div class="row no-gutters">
		<!-- md-2 berisi menu -->
		<div class="col-md-2 pr-2 pt-5 warna-sd ">
			<ul class="nav flex-column ml-2 mb-2">
				<li class="nav-item ">
					<a class="nav-link active text-white " href="dashboard.php"><i class="bi bi-bar-chart-fill mr-2"></i>Dashboard</a>
					<hr class="bg-dark">
				</li>
				<li class="nav-item active">
					<a class="nav-link text-white rounded-lg" href="karyawan.php" active><i class="bi bi-people-fill mr-2"></i>Daftar Karyawan</a>
					<hr class="bg-dark">
				</li>
				<li class="nav-item ">
					<a class="nav-link text-white rounded-lg" href="gaji.php"><i class="bi bi-cash-coin mr-2"></i>Daftar Gaji</a>
					<hr class="bg-dark">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white rounded-lg" href="appointment.php"><i class="bi bi-calendar-date-fill mr-2"></i>Appointment</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="contact.php"><i class="bi  bi-chat-dots-fill mr-2"></i>Contact</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#"><i class="bi bi-award-fill mr-2"></i> List 6</a>
					<hr class="bg-white">
				</li>
			</ul>
		</div>
		<!-- end sidebar -->
		<!-- md-10 isi content -->
		<divlass class="col-md-10 p-5 pt-2">

			<!-- Dasboard content -->
			<h3><i class="bi bi-calendar-date-fill mr-2"></i>Daftar Appointment</h3>
			<hr>
			<!-- tabel kritik dan saran -->
			<div class="table-responsive-md">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Name</th>
							<th scope="col">Gender</th>
							<th scope="col">Date</th>
							<th scope="col">E-mail</th>
							<th scope="col">Appointment</th>
							<th scope="col">Message</th>
							<th colspan="3" scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<!-- menampung data dari database -->
						<?php
						$no = 1;
						foreach ($data_appointment as $row) {
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td><?php echo $row['date']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['appointment']; ?></td>
								<td><?php echo $row['message']; ?></td>
								<td>
									<!-- button delete -->
									<a href="proses_simpan.php?action=delete1&id=<?php echo $row['id']; ?>"><i class="bi bi-trash-fill bg-danger p-2 text-white rounded" data-toggle="tooltip" title="hapus" onclick="alert('Data Berhasil dihapus !')"></i>
									</a>
								</td>
							</tr>
						<?php
						}
						?>

					</tbody>
				</table>
			</div>

			<!-- end tabel -->
	</div>
	</div>
	<!-- end sidebar -->


	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<script src="script.js">
	</script>
</body>

</html>