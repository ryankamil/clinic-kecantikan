<?php
//koneksi ke databsae

$conn = mysqli_connect("localhost", "root", "", "crud");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $row[] = $row;
    }
    return $row;
}

function registrasi($data)
{
    global $conn;

    $username = $data['username'];
    $password = $data['password'];
    $nama = $data['nama'];
    $email = $data['email'];


    // tambah user baru

    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$nama','$email')");

    return mysqli_affected_rows($conn);
}
