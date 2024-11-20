-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2023 at 05:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `nama`, `judul`, `deskripsi`) VALUES
(25, 'Faiz Nur Ramadan ', 'Pengembangan energi terbarukan', 'Ilmu sains dapat dimanfaatkan untuk mengembangkan sumber energi terbarukan seperti energi surya, energi angin, energi air, dan energi geothermal.'),
(26, 'Barkah Abdi Hidayat', 'Penyembuhan penyakit melalui terapi gen', 'Pemahaman mendalam tentang genetika dan ilmu molekuler telah membuka pintu bagi pengembangan terapi gen untuk penyakit-penyakit genetik. '),
(27, 'Dwi Arfian', 'Pemetaan otak dan penelitian tentang kecerdasan buatan', ' Ilmu sains telah memberikan kontribusi besar dalam pemahaman kita tentang otak manusia. '),
(28, 'Daffa Naufal Fathin', 'Pertanian berkelanjutan dengan bantuan teknologi', 'Pemanfaatan ilmu sains dalam pertanian dapat membantu mengembangkan metode pertanian berkelanjutan yang lebih efisien dan ramah lingkungan. '),
(29, 'Lasmana Adi Nugraha', 'Pemulihan lingkungan melalui bioremediasi', 'Bioremediasi adalah proses menggunakan organisme hidup, seperti bakteri, jamur, atau tanaman, untuk membersihkan polutan atau mengurangi dampak pencemaran lingkungan.'),
(30, 'Isa Asmaul Husna', 'Pengembangan material inovatif', 'Ilmu sains memungkinkan pengembangan material inovatif dengan sifat-sifat yang unik dan berguna. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(10, 'Daffa Naufal Fathin', 'Daffa@gmail.com', '38f629170ac3ab74b9d6d2cc411c2f3c'),
(11, 'Isa', 'isa@gmail.com', 'f1c1592588411002af340cbaedd6fc33'),
(12, 'Senku', 'Senku@gmail.com', '310dcbbf4cce62f762a2aaa148d556bd'),
(13, 'Faiz balelong', 'faiz@gmai.com', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
