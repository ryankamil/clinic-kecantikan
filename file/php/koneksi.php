<?php

//inisialisasi variable 
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "klinik_dbs";
    var $koneksi = "";

    //koneksikan ke database
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi ke database gagal :" . mysqli_connect_error();
        }
    }

    // tambah data contact
    function tambah_data($name, $phone, $email, $message)
    {
        mysqli_query($this->koneksi, "insert into contact values('','$name','$phone','$email','$message')");
    }

    //tambah data appoitment
    function tambah_data2($name, $gender, $date, $email, $appointment, $message)
    {
        mysqli_query($this->koneksi, "insert into appointment_tb values('','$name', '$gender', '$date', '$email', '$appointment', '$message')");
    }
    //tambah data order
    function tambah_data3($name, $email, $product, $quantity, $address, $delivery, $message)
    {
        mysqli_query($this->koneksi, "insert into order_tb values('','$name', '$email', '$product', '$quantity', '$address', '$delivery', '$message')");
    }

    // tampilkan data contact
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "select * from contact");
        $hasil = array();
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    //  tampilkan data appointment 
    function tampil_data2()
    {
        $data2 = mysqli_query($this->koneksi, "select * from appointment_tb ");
        $hasil2 = array();
        while ($row = mysqli_fetch_array($data2)) {
            $hasil2[] = $row;
        }
        return $hasil2;
    }
    //  tampilkan data Order
    function tampil_data3()
    {
        $data3 = mysqli_query($this->koneksi, "select * from order_tb");
        $hasil3 = array();
        while ($row = mysqli_fetch_array($data3)) {
            $hasil3[] = $row;
        }
        return $hasil3;
    }
}
