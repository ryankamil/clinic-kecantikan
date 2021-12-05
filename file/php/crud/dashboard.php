<?php
include('koneksi.php');
$db = new database();
$data_karyawan = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="refresh" content="9" />
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
                    <a class="nav-link active text-black activ" href="dashboard.php"><i class="bi bi-bar-chart-fill mr-2"></i>Dashboard</a>
                    <hr class="bg-white">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="karyawan.php" active><i class="bi bi-people-fill mr-2"></i>Daftar Karyawan</a>
                    <hr class="bg-white">
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-black" href="gaji.php"><i class="bi bi-cash-coin mr-2"></i>Daftar Gaji</a>
                    <hr class="bg-white">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="appointment.php"><i class="bi bi-calendar-date-fill mr-2"></i>Appointment</a>
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
        <divlass class="col-md-10 p-5 pt-2 ">

            <!-- Dasboard content -->
            <h3><i class="bi bi-bar-chart-fill mr-2"></i>Dashboard</h3>
            <hr>

            <!-- cards -->
            <div class="row text-white ">
                <!-- Product -->
                <div class="card info ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="bi bi-bag-fill mr-2"></i>
                        </div>
                        <h5 class="card-title">Jumlah Product</h5>
                        <div class="display-4">15</div>
                        <a href="">
                            <p class="card-text detail">Lihat Detail<i class="bi bi-arrow-right-short ml-2 detail"></i></p>
                        </a>
                    </div>
                </div>
                <!-- end -->

                <!-- Dokter -->
                <div class="card danger ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="bi bi-person-fill mr-2"></i>
                        </div>
                        <h5 class="card-title">Jumlah Dokter</h5>
                        <div class="display-4">
                            <?php
                            $jumlah1 = $db->jumlah1();
                            echo $jumlah1;
                            ?>
                        </div>
                        <a href="">
                            <p class="card-text detail">Lihat Detail<i class="bi bi-arrow-right-short ml-2 detail"></i></p>
                        </a>
                    </div>
                </div>
                <!-- end -->

                <!-- Karyawan -->
                <div class="card success ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="bi bi-people-fill mr-2"></i>
                        </div>
                        <h5 class="card-title">Jumlah Karyawan</h5>
                        <div class="display-4">
                            <?php
                            $jumlah = $db->jumlah();
                            echo $jumlah;
                            ?>
                        </div>
                        <a href="../crud/karyawan.php">
                            <p class="card-text detail">Lihat Detail<i class="bi bi-arrow-right-short ml-2 detail"></i></p>
                        </a>
                    </div>
                </div>
                <!-- end -->

                <!-- Appointment -->
                <div class="card secondary ml-5 mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="bi bi-calendar-check-fill mr-2"></i>
                        </div>
                        <h5 class="card-title">Pesan Appointment
                            <div class="display-4">
                                <?php
                                $jumlah2 = $db->jumlah2();
                                echo $jumlah2;
                                ?>
                            </div>
                            <a href="../crud/appointment.php">
                                <p class="card-text detail app">Lihat Detail<i class="bi bi-arrow-right-short ml-2 detail"></i></p>
                            </a>
                    </div>
                </div>
                <!-- end -->

                <!-- Contact -->
                <div class="card primary ml-5 mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="bi bi-chat-dots-fill mr-2"></i>
                        </div>
                        <h5 class="card-title">Pesan Kritik & Saran</h5>
                        <div class="display-4">
                            <?php
                            $jumlah3 = $db->jumlah3();
                            echo $jumlah3;
                            ?>
                        </div>
                        <a href="../crud/contact.php">
                            <p class="card-text detail">Lihat Detail<i class="bi bi-arrow-right-short ml-2 detail"></i></p>
                        </a>
                    </div>
                </div>
                <!-- end -->

                <!-- List 6 -->
                <div class="card warn ml-5 mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="bi bi-people-fill mr-2"></i>
                        </div>
                        <h5 class="card-title">Card 6</h5>
                        <div class="display-4">
                            <?php
                            echo $jumlah;
                            ?>
                        </div>
                        <a href="#">
                            <p class="card-text detail">Lihat Detail<i class="bi bi-arrow-right-short ml-2 detail"></i></p>
                        </a>
                    </div>
                </div>
                <!-- end -->




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