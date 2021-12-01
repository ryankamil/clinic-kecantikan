<?php
// membuat inisial database
class database
{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "crud";
	var $koneksi = "";

	// koneksi/hubungkan localhost dengan database
	function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	// jumlah karyawan
	function jumlah()
	{
		$data = mysqli_query($this->koneksi, "select * from karyawan");
		$jumlah_data = mysqli_num_rows($data);

		return $jumlah_data;
	}

	// jumlah dokter

	function jumlah1()
	{
		$data = mysqli_query($this->koneksi, "SELECT * FROM karyawan WHERE posisi = 'Dokter'");
		$jumlah_data = mysqli_num_rows($data);

		return $jumlah_data;
	}

	// jumlah appointment
	function jumlah2()
	{
		$data = mysqli_query($this->koneksi, "SELECT * FROM appointment_tb");
		$jumlah_data = mysqli_num_rows($data);

		return $jumlah_data;
	}

	// jumlah contact
	function jumlah3()
	{
		$data = mysqli_query($this->koneksi, "SELECT * FROM contact");
		$jumlah_data = mysqli_num_rows($data);

		return $jumlah_data;
	}

	// tampilkan data karyawan
	// Memberikan Syntax SQL limit / jadi membatasi berapa nilai yg ingin ditampilkan
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi, "select * from karyawan post LIMIT 10");
		$hasil = array();
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}



	//  tampilkan data appointment 
	function tampil_data1()
	{
		$data2 = mysqli_query($this->koneksi, "select * from appointment_tb ");
		$hasil2 = array();
		while ($row = mysqli_fetch_array($data2)) {
			$hasil2[] = $row;
		}
		return $hasil2;
	}


	//  tampilkan data Order
	function tampil_data2()
	{
		$data3 = mysqli_query($this->koneksi, "select * from order_tb");
		$hasil3 = array();
		while ($row = mysqli_fetch_array($data3)) {
			$hasil3[] = $row;
		}
		return $hasil3;
	}

	// tampilkan data contact
	function tampil_data3()
	{
		$data = mysqli_query($this->koneksi, "select * from contact");
		$hasil = array();
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	// tambah data ke db karyawan
	function tambah_data($nama, $jenis_kelamin, $posisi, $gaji)
	{
		mysqli_query($this->koneksi, "insert into karyawan values ('','$nama','$jenis_kelamin','$posisi','$gaji')");
	}


	// update & edit data db karyawan
	function update_data($nama, $jenis_kelamin, $posisi, $gaji, $id)
	{
		$query = mysqli_query($this->koneksi, "update karyawan set nama='$nama',jenis_kelamin='$jenis_kelamin',posisi='$posisi', gaji='$gaji' 
		where id='$id'");
	}

	//tambah data appoitment
	function tambah_data1($name, $gender, $date, $email, $appointment, $message)
	{
		mysqli_query($this->koneksi, "insert into appointment_tb values('','$name', '$gender', '$date', '$email', '$appointment', '$message')");
	}

	//tambah data order
	function tambah_data2($name, $email, $product, $quantity, $address, $delivery, $message)
	{
		mysqli_query($this->koneksi, "insert into order_tb values('','$name', '$email', '$product', '$quantity', '$address', '$delivery', '$message')");
	}

	// tambah data contact
	function tambah_data3($name, $phone, $email, $message)
	{
		mysqli_query($this->koneksi, "insert into contact values('','$name','$phone','$email','$message')");
	}

	// menarik data sesuai dengan id primary key
	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi, "select * from karyawan where id='$id'");
		return $query->fetch_array();
	}

	// delete data berdasarkan id primary key
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi, "delete from karyawan where id='$id'");
	}

	// delete data appointment
	function delete_data1($id)
	{
		$query = mysqli_query($this->koneksi, "delete from appointment_tb where id='$id'");
	}

	// delete data contact
	function delete_data3($id)
	{
		$query = mysqli_query($this->koneksi, "delete from contact where id='$id'");
	}
}
