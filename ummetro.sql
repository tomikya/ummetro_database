-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 11:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ummetro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `akademik`
--

CREATE TABLE `akademik` (
  `id_akademik` int(11) NOT NULL,
  `judul_akademik` varchar(225) DEFAULT NULL,
  `deskripsi_akademik` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akademik`
--

INSERT INTO `akademik` (`id_akademik`, `judul_akademik`, `deskripsi_akademik`) VALUES
(4, 'Bakso', 'Bakso adalah makanan khas Trimurjo yang enak'),
(5, 'Somay asli ogan', 'Berisi gurita sekampung jelujur rrrrrrrrrrrrrrr'),
(6, 'SATE JAWA', 'Sate terenak didunia');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `tanggal_berita` varchar(255) DEFAULT NULL,
  `deskripsi_berita` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar_berita`, `tanggal_berita`, `deskripsi_berita`) VALUES
(27, 'Pameran Seni Rupa.jpg', '2024-05-19', 'poster seni budayaaaaaaaa'),
(29, 'img2.jpg', '2024-05-19', 'Berita ini adalah hoaks'),
(32, 'WhatsApp Image 2024-05-02 at 02.17.20.jpeg', '2024-02-08', 'Foto Resepsionis di SMK MUHAMMADIYAH 3 METRO');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_infor` int(11) NOT NULL,
  `gambar_infor` varchar(255) NOT NULL,
  `desk_infor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_infor`, `gambar_infor`, `desk_infor`) VALUES
(4, 'photobooth (1).png', 'aadadsadsadsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_infor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `akademik`
--
ALTER TABLE `akademik`
  MODIFY `id_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_infor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
