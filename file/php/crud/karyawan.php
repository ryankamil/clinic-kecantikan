<?php
include('koneksi.php');
$db = new database();
$data_karyawan = $db->tampil_data();

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
	<title>Homepage</title>
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
					<a class="nav-link active text-black " href="dashboard.php"><i class="bi bi-bar-chart-fill mr-2"></i>Dashboard</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item active">
					<a class="nav-link text-black " href="karyawan.php" active><i class="bi bi-people-fill mr-2"></i>Daftar Karyawan</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item ">
					<a class="nav-link text-black " href="gaji.php"><i class="bi bi-cash-coin mr-2"></i>Daftar Gaji</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-black " href="appointment.php"><i class="bi bi-calendar-date-fill mr-2"></i>Appointment</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-black" href="contact.php"><i class="bi  bi-chat-dots-fill mr-2"></i>Contact</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-black" href="#"><i class="bi bi-award-fill mr-2"></i> List 6</a>
					<hr class="bg-white">
				</li>
			</ul>
		</div>
		<!-- end sidebar -->
		<!-- md-10 isi content -->
		<divlass class="col-md-10 p-5 pt-2">

			<!-- Dasboard content -->
			<h3><i class="bi bi-people-fill mr-2"></i>Daftar Karyawan </h3>
			<hr>
			<!-- tabel -->
			<a href="../crud/form_tambah_data.php" class="btn btn-info mb-3 add-karyawan"><i class="bi mr-2 add-karyawan"></i>Tambah Data Karyawan</a>

			<table class="table table-striped table-hover css-table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Jenis_Kelamin</th>
						<th scope="col">Posisi</th>
						<th colspan="3" scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($data_karyawan as $row) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['jenis_kelamin']; ?></td>
							<td><?php echo $row['posisi']; ?></td>
							<td>
								<a href="form_edit.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a> |
								<a href="proses_simpan.php?action=delete&id=<?php echo $row['id']; ?>"><i class="bi bi-trash-fill bg-danger p-2 text-white rounded" data-toggle="tooltip" title="hapus" onclick="alert('Data Berhasil dihapus !')"></i>
								</a>
							</td>
						</tr>
					<?php
					}
					?>

				</tbody>
			</table>

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