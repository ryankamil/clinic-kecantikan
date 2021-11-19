-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 05:31 PM
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
-- Database: `klinik_dbs`
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
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_tb`
--

INSERT INTO `appointment_tb` (`id`, `name`, `gender`, `date`, `email`, `appointment`, `message`) VALUES
(49, 'Eren Jaegger', 'Laki-laki', '2021-11-19', 'erentitan@gmail.com', 'Doctor', 'Konsultasi masalah jerawat diwajah'),
(50, 'Alice Wonderland', 'Perempuan', '2021-11-19', 'alicewonder@gmail.com', 'Beauty Therapist', 'Terapi dan perawatan wajah');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
