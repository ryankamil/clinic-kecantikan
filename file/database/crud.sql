-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tb`
--

CREATE TABLE `appointment_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `appointment` varchar(25) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_tb`
--

INSERT INTO `appointment_tb` (`id`, `name`, `gender`, `date`, `email`, `appointment`, `message`) VALUES
(60, 'tina tun', 'Perempuan', '12/17/2021', 'tinatun@gmail.com', 'Doctor', 'konsul tentang kesehatan'),
(61, 'Eren Jaeger', 'Laki-laki', '12/23/2021', 'jaegaeren@gmail.com', 'Beauty Therapist', 'luluran dan trapi sauna'),
(62, 'Hinata Uzumaki', 'Perempuan', '12/02/2021', 'hinata@konoha.gakure', 'Doctor', 'Konsul dengan dokter andy'),
(63, 'Majin bu', 'Laki-laki', '12/12/2021', 'majinbuuuu@namek.com', 'Beauty Therapist', 'mandi coklat dan susu'),
(64, 'Vegeta', 'Laki-laki', '12/31/2021', 'vegeta@namek.com', 'Doctor', 'bertemu dengan Dr Sandy');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`) VALUES
(9, 'Sulistiana', '086646464', 'sulis1332@gmail.com', 'terimakasih atas pelayananya,\r'),
(10, 'Ucup Surucup', '0814648486', 'ucupganteng@gmail.com', 'jadi tambah ganteng perawataan'),
(16, 'cuplis', '084848648646', 'cuplis21@gmail.com', 'wifi lemot, tidak bisa mabar'),
(29, 'sarah niati', '08126564799', 'sarahniati@gmail.com', 'pelayanan sudah bagus, cuman a'),
(30, 'ramdani', '08468486468', 'ramdain@gmail.com', 'parkiran kurang luas, naro mot'),
(31, 'ryan', '088486464', 'ryan@gmail.com', 'pelayanan baik, ada wifinya ju');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `posisi` varchar(25) DEFAULT NULL,
  `gaji` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jenis_kelamin`, `posisi`, `gaji`) VALUES
(91, 'Elsha Viola', 'Wanita', 'Kasir 1', '5000'),
(94, 'Sulitia Wina', 'Wanita', 'Kasir 2', '5000'),
(95, 'Delian Putri', 'Wanita', 'Product Kosmetik', '4000'),
(96, 'Mamad ', 'Pria', 'IT Support', '5000'),
(97, 'Cuplis', 'Pria', 'Bagian Gudang', '3000'),
(99, 'Ahmad', 'Pria', 'Kurir Pengatar', '3000'),
(102, 'Alfian', 'Pria', 'Teknisi Jaringan', '6000'),
(103, 'Dr Indri', 'Wanita', 'Dokter', '7000'),
(104, 'Dr Windy', 'Wanita', 'Dokter', '7000'),
(105, 'Dr Sandy', 'Pria', 'Dokter', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `product` varchar(40) NOT NULL,
  `quantity` varchar(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tb`
--

INSERT INTO `order_tb` (`id`, `name`, `email`, `product`, `quantity`, `address`, `delivery`, `message`) VALUES
(2, 'elisa mazeral', 'elsa@gmail.com', 'Ascorbyl', '17', 'jln kengangan indah', 'JNT', 'packing yang aman ya '),
(3, 'arofah rahmana', 'arofah@gmail.com', 'Ascorbyl', '3', 'jln indah kabuk no2', 'JNE', 'semoga cepat sampai'),
(4, 'dfsd', 'dfsdf', 'Peeling', '1', 'fdssdf', 'JNT', 'dfsfd');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `nm_customer` varchar(100) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tgl_penjualan`, `nm_customer`, `total`) VALUES
(1, '2020-01-08', 'Agus', '10000000.00'),
(2, '2020-02-02', 'Edi', '9000000.00'),
(3, '2020-03-08', 'Bambang', '11000000.00'),
(4, '2020-04-18', 'Yuli', '10000000.00'),
(5, '2020-05-08', 'Efendi', '6000000.00'),
(6, '2020-06-08', 'Aprilia', '7000000.00'),
(7, '2020-07-08', 'Eko', '13000000.00'),
(8, '2020-08-08', 'Meilani', '9000000.00'),
(9, '2020-09-08', 'Bambang', '5000000.00'),
(10, '2020-10-08', 'Santoso', '12000000.00'),
(11, '2020-11-08', 'Suratno', '8000000.00'),
(12, '2020-12-28', 'Khalisa', '15000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`) VALUES
(5, 'admin', 'admin', 'Alice wonderland', 'alicewonder@clinic_kecant'),
(6, 'admin2', 'admin2', 'Elisa Niara', 'Niarael@clinic_kecantikan'),
(9, 'admin8', 'admin8', 'Mamatsuramat', 'Mamat@gmail.com'),
(10, 'admin11', 'admin11', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `order_tb`
--
ALTER TABLE `order_tb`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
