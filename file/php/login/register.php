<?php
// narik function register
require 'function.php';

// ketika tombol register di click
if (isset($_POST["register"])) {

    // kondisi yg akan muncul jika berhasil dan gagal.
    if (registrasi($_POST) > 0) {
        echo "<script>
              alert('user baru berhasil dibuat!.');
            </script>";
        header('location:login.php');
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Register</title>
    <link rel="stylesheet" href="../../css/Register.css">
</head>

<body>
    <!-- form register akun baru -->
    <form action="" method="post">
        <div class="container">
            <!-- Register Form -->
            <div class="register">
                <h2>REGISTER ADMIN</h2>

                <input type="text" placeholder="Username" name="username" id="username">
                <input type="password" placeholder="Password" name="password" id="password">
                <input type="text" placeholder="Nama" name="nama" id="nama">
                <input type="text" placeholder="Email" name="email" id="email">
                <button type="submit" name="register" onclick="alert('Registrasi Berhasil !')">Register</button>
            </div>
            <!-- img -->
            <div class="img">
                <img src="../../img/regis.jpg" width="300px" alt="register">
            </div>
        </div>
    </form>
</body>

</html>