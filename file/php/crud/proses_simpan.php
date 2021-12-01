<?php
// koneksi kedatabase
include('koneksi.php');
$koneksi = new database();

// narik data dari form inputan
$action = $_GET['action'];

// tambah data karyawan
if ($action == "add") {
	$koneksi->tambah_data($_POST['nama'], $_POST['jenis_kelamin'], $_POST['posisi'], $_POST['gaji']);
	header('location:karyawan.php');

	// update/edit data karyawan
} elseif ($action == "update") {
	$koneksi->update_data($_POST['nama'], $_POST['jenis_kelamin'], $_POST['posisi'], $_POST['gaji'], $_POST['id']);
	header('location:karyawan.php');

	//proses simpan data appointment
} else if ($action == "add1") {
	$koneksi->tambah_data1($_POST['name'], $_POST['gender'], $_POST['date'], $_POST['email'], $_POST['appointment'], $_POST['message']);
	header('location:../../html/Appointment.html');

	//proses simpan data contact
} else if ($action == "add3") {
	$koneksi->tambah_data3($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);
	header('location:../../html/Contact.html');

	// delete data karyawan
} elseif ($action == "delete") {
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:karyawan.php');

	// delete data appointment
} elseif ($action == "delete1") {
	$id = $_GET['id'];
	$koneksi->delete_data1($id);
	header('location:appointment.php');

	// delete data contact
} elseif ($action == "delete3") {
	$id = $_GET['id'];
	$koneksi->delete_data3($id);
	header('location:contact.php');
}
