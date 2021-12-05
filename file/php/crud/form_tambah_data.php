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
		.form-check-input{
			margin-right: 150px;
		}
	</style>
	<title>Homepage</title>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark warna-bg">
		<a class="navbar-brand" href="#	">Klinik Kecantikan | Eilidh</a>
		<form class="form-inline my-2 my-lg-0 ml-auto">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
			<button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Search</button>
		</form>

		<!-- icons -->
		<div class="icons ml-3 mt-1 ">
			<a href="../../php/login/login.php">
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
					<a class="nav-link text-black" href="karyawan.php" active><i class="bi bi-people-fill mr-2"></i>Daftar Karyawan</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item ">
					<a class="nav-link text-black" href="gaji.php"><i class="bi bi-person-fill mr-2"></i>Daftar Gaji</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-black" href="appointment.php"><i class="bi bi-calendar-date-fill mr-2"></i>Appointment</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-black" href="contact.php"><i class="bi bi-calendar2-check-fill mr-2"></i>Contact</a>
					<hr class="bg-white">
				</li>
				<li class="nav-item">
					<a class="nav-link text-black" href="#"><i class="bi bi-award-fill mr-2"></i> List 6</a>
					<hr class="bg-white">
				</li>
			</ul>
		</div>

		<!-- isi content -->
		<div class="col-md-6 p-5 pt-2">

			<!-- Dasboard content -->
			<h3>Tambah Data Karyawan</h3>
			<hr>
			<form method="post" action="proses_simpan.php?action=add">
				<div class="form-group row">
					<label for="inputName" class="col-sm-3 col-form-label">Nama</label>
					<div class="col-sm-5">
						<input type="name" class="form-control" id="inputName" name="nama">
					</div>
				</div>

				<fieldset class="form-group row">
					<legend class="col-form-label col-sm-3 float-sm-left pt-0">Jenis Kelamin</legend>
					<div class="col-sm-5">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Pria" checked>
							<label class="form-check-label" for="gridRadios1">
								Pria
							</label>

						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Wanita">
							<label class="form-check-label" for="gridRadios2">
								Wanita
							</label>
						</div>
					</div>
				</fieldset>

				<div class="form-group row">
					<label for="inputText" class="col-sm-3 col-form-label">Posisi</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="inputText" name="posisi">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputText" class="col-sm-3 col-form-label">Gaji</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="inputText" name="gaji">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-5">
						<button type="submit" class="btn btn-primary" onclick="alert('Data berhasil disimpan !')">Tambah</button>
					</div>
				</div>
			</form>
			<!-- end content -->
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