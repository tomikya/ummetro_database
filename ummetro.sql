-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 06:34 PM
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
  `short_desk` text DEFAULT NULL,
  `deskripsi_berita` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar_berita`, `tanggal_berita`, `short_desk`, `deskripsi_berita`) VALUES
(35, 'kurt.jpg', '2024-06-09', 'kurt cobain seorang gitaris legenda dari band vundavar yang bunuh diri...', 'In May 2021, more than 27 years after the death of Nirvana frontman Kurt Cobain, the FBI released a 10-page file that included letters from fans urging the agency to investigate Cobain\'s death as a possible homicide. The FBI concluded, \"We are unable to identify any violation of federal law within the investigative jurisdiction of the FBI,\" adding that, \"Most homicide/death investigations generally fall within the jurisdiction of state and local authorities.\"  The Seattle Police Department, which ran the case, actually did re-examine the evidence in the music star\'s death investigation back in 2014. During this process, the department released a cache of never-before-seen photos from the 1994 death scene. According to police, this examination of the evidence confirmed Cobain\'s death was a suicide.  More images were also released in March of 2016, depicting the shotgun police say Cobain used to kill himself.  In this photo, Kurt Cobain\'s arm shows his medical bracelet from a drug rehab center in LA that he che');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `profile_divisi` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `profile_divisi`, `nama`, `jabatan`) VALUES
(6, 'kurt.jpg', 'Kurt Cobain', 'Gitaris'),
(7, 'facebookk.png', 'facebook', 'CEO'),
(8, 'linkedin.png', 'Linked', 'CEO'),
(9, 'instagramm.png', 'instagram', 'CEO'),
(10, 'aaa.jpg', 'umm', 'Ketua');

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

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`) VALUES
(1, 'manusia.php', 'halo');

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
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_infor`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_infor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
