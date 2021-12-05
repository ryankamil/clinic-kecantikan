<?php
require 'function.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE 
    username = '$username' and password ='$password'");

    // cek user name
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        header('location:../crud/dashboard.php');
        exit;
    } 
    else {
        echo

        " <script> alert('Login Gagal')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | login</title>
    <link rel="stylesheet" href="../../css/Login.css">
</head>

<body>
    <!-- form register akun baru -->
    <form action="" method="post">
        <div class="container">
            <!-- Login Form -->
            <div class="Admin">
                <h2>LOGIN ADMIN</h2>
                <input type="text" placeholder="Username" name="username" id="username">
                <input type="password" name="password" id="password" placeholder="Password">
                <!-- <div class="register">
                    <a href="../login/register.php">Register</a>
                </div> -->
                <button type="submit" name="login">LOGIN</button>
            </div>
            <!-- img -->
            <div class="img">
                <img src="../../img/admin.jpg" width="300px" alt="">
            </div>
        </div>
    </form>
</body>

</html>