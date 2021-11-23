<?php
//koneksi ke database
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
//proses simpan data contanct
if ($action == "add") {
    $koneksi->tambah_data($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);
    header('location:../../file/html/Contact.html');

    //proses simpan data appointment
} else if ($action == "add2") {
    $koneksi->tambah_data2($_POST['name'], $_POST['gender'], $_POST['date'], $_POST['email'], $_POST['appointment'], $_POST['message']);
    header('location:../../file/html/Appointment.html');
} else if ($action == "add3") {
    $koneksi->tambah_data3($_POST['name'], $_POST['email'], $_POST['product'], $_POST['quantity'], $_POST['address'], $_POST['delivery'], $_POST['message']);
    header('location:../../file/html/Order.html');
}
