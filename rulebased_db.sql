-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 03:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rulebased_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `atap_tb`
--

CREATE TABLE `atap_tb` (
  `id_atap` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `luas_A` int(11) NOT NULL,
  `luas_B` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_atap` float NOT NULL,
  `tingkat_kerusakan_atap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atap_tb`
--

INSERT INTO `atap_tb` (`id_atap`, `id_sekolah`, `luas_A`, `luas_B`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_atap`, `tingkat_kerusakan_atap`) VALUES
(1, 1, 100, 100, 1, 1, 3, 2, 3, 4, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `balok_tb`
--

CREATE TABLE `balok_tb` (
  `id_balok` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_balok` float NOT NULL,
  `tingkat_kerusakan_balok` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balok_tb`
--

INSERT INTO `balok_tb` (`id_balok`, `id_sekolah`, `jumlah_unit`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_balok`, `tingkat_kerusakan_balok`) VALUES
(1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dinding_tb`
--

CREATE TABLE `dinding_tb` (
  `id_dinding` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `luas_total` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_dinding` float NOT NULL,
  `tingkat_kerusakan_dinding` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinding_tb`
--

INSERT INTO `dinding_tb` (`id_dinding`, `id_sekolah`, `luas_total`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_dinding`, `tingkat_kerusakan_dinding`) VALUES
(1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `finishing_dinding_tb`
--

CREATE TABLE `finishing_dinding_tb` (
  `id_finishing_dinding` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `luas_total` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_finishing_dinding` float NOT NULL,
  `tingkat_kerusakan_finishing_dinding` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finishing_dinding_tb`
--

INSERT INTO `finishing_dinding_tb` (`id_finishing_dinding`, `id_sekolah`, `luas_total`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_finishing_dinding`, `tingkat_kerusakan_finishing_dinding`) VALUES
(1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `finishing_kusen_tb`
--

CREATE TABLE `finishing_kusen_tb` (
  `id_finishing_kusen` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `luas_total` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_finishing_kusen` float NOT NULL,
  `tingkat_kerusakan_finishing_kusen` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finishing_kusen_tb`
--

INSERT INTO `finishing_kusen_tb` (`id_finishing_kusen`, `id_sekolah`, `luas_total`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_finishing_kusen`, `tingkat_kerusakan_finishing_kusen`) VALUES
(1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `finishing_plafond_tb`
--

CREATE TABLE `finishing_plafond_tb` (
  `id_finishing_plafond` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `luas_total` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_finishing_plafond` float NOT NULL,
  `tingkat_kerusakan_finishing_plafond` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finishing_plafond_tb`
--

INSERT INTO `finishing_plafond_tb` (`id_finishing_plafond`, `id_sekolah`, `luas_total`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_finishing_plafond`, `tingkat_kerusakan_finishing_plafond`) VALUES
(1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `instalasi_air_tb`
--

CREATE TABLE `instalasi_air_tb` (
  `id_instalasi_air` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `klasifikasi_kerusakan` float NOT NULL,
  `tingkat_kerusakan_instalasi_air` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instalasi_air_tb`
--

INSERT INTO `instalasi_air_tb` (`id_instalasi_air`, `id_sekolah`, `klasifikasi_kerusakan`, `tingkat_kerusakan_instalasi_air`) VALUES
(1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `instalasi_listrik_tb`
--

CREATE TABLE `instalasi_listrik_tb` (
  `id_instalasi_listrik` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `klasifikasi_kerusakan` float NOT NULL,
  `tingkat_kerusakan_instalasi_listrik` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instalasi_listrik_tb`
--

INSERT INTO `instalasi_listrik_tb` (`id_instalasi_listrik`, `id_sekolah`, `klasifikasi_kerusakan`, `tingkat_kerusakan_instalasi_listrik`) VALUES
(5, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jendela_tb`
--

CREATE TABLE `jendela_tb` (
  `id_jendela` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_jendela` float NOT NULL,
  `tingkat_kerusakan_jendela` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jendela_tb`
--

INSERT INTO `jendela_tb` (`id_jendela`, `id_sekolah`, `jumlah_unit`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_jendela`, `tingkat_kerusakan_jendela`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kolom_tb`
--

CREATE TABLE `kolom_tb` (
  `id_kolom` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_kolom` float NOT NULL,
  `tingkat_kerusakan_kolom` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kusen_tb`
--

CREATE TABLE `kusen_tb` (
  `id_kusen` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_kusen` float NOT NULL,
  `tingkat_kerusakan_kusen` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kusen_tb`
--

INSERT INTO `kusen_tb` (`id_kusen`, `id_sekolah`, `jumlah_unit`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_kusen`, `tingkat_kerusakan_kusen`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lantai_tb`
--

CREATE TABLE `lantai_tb` (
  `id_lantai` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `luas_total` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_lantai` float NOT NULL,
  `tingkat_kerusakan_lantai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lantai_tb`
--

INSERT INTO `lantai_tb` (`id_lantai`, `id_sekolah`, `luas_total`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_lantai`, `tingkat_kerusakan_lantai`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 143);

-- --------------------------------------------------------

--
-- Table structure for table `pintu_tb`
--

CREATE TABLE `pintu_tb` (
  `id_pintu` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_pintu` float NOT NULL,
  `tingkat_kerusakan_pintu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pintu_tb`
--

INSERT INTO `pintu_tb` (`id_pintu`, `id_sekolah`, `jumlah_unit`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_pintu`, `tingkat_kerusakan_pintu`) VALUES
(12, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `plafond_tb`
--

CREATE TABLE `plafond_tb` (
  `id_plafond` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `panjang_a` int(11) NOT NULL,
  `panjang_b` int(11) NOT NULL,
  `panjang_c` int(11) NOT NULL,
  `luas_total` float NOT NULL,
  `tidak_rusak` float NOT NULL,
  `rusak_sangat_ringan` float NOT NULL,
  `rusak_ringan` float NOT NULL,
  `rusak_sedang` float NOT NULL,
  `rusak_berat` float NOT NULL,
  `rusak_sangat_berat` float NOT NULL,
  `komponen_tidak_sesuai` float NOT NULL,
  `total_kerusakan_plafond` float NOT NULL,
  `tingkat_kerusakan_plafond` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plafond_tb`
--

INSERT INTO `plafond_tb` (`id_plafond`, `id_sekolah`, `panjang_a`, `panjang_b`, `panjang_c`, `luas_total`, `tidak_rusak`, `rusak_sangat_ringan`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `rusak_sangat_berat`, `komponen_tidak_sesuai`, `total_kerusakan_plafond`, `tingkat_kerusakan_plafond`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pondasi_tb`
--

CREATE TABLE `pondasi_tb` (
  `id_pondasi` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `klasifikasi_kerusakan` float NOT NULL,
  `tingkat_kerusakan_pondasi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pondasi_tb`
--

INSERT INTO `pondasi_tb` (`id_pondasi`, `id_sekolah`, `klasifikasi_kerusakan`, `tingkat_kerusakan_pondasi`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah_tb`
--

CREATE TABLE `sekolah_tb` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `luas_bangunan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah_tb`
--

INSERT INTO `sekolah_tb` (`id_sekolah`, `nama_sekolah`, `alamat`, `kabupaten`, `luas_bangunan`) VALUES
(1, 'SDN 24 Pullewa', 'Tapalang', 'Majene', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atap_tb`
--
ALTER TABLE `atap_tb`
  ADD PRIMARY KEY (`id_atap`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `balok_tb`
--
ALTER TABLE `balok_tb`
  ADD PRIMARY KEY (`id_balok`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `dinding_tb`
--
ALTER TABLE `dinding_tb`
  ADD PRIMARY KEY (`id_dinding`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `finishing_dinding_tb`
--
ALTER TABLE `finishing_dinding_tb`
  ADD PRIMARY KEY (`id_finishing_dinding`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `finishing_kusen_tb`
--
ALTER TABLE `finishing_kusen_tb`
  ADD PRIMARY KEY (`id_finishing_kusen`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `finishing_plafond_tb`
--
ALTER TABLE `finishing_plafond_tb`
  ADD PRIMARY KEY (`id_finishing_plafond`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `instalasi_air_tb`
--
ALTER TABLE `instalasi_air_tb`
  ADD PRIMARY KEY (`id_instalasi_air`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `instalasi_listrik_tb`
--
ALTER TABLE `instalasi_listrik_tb`
  ADD PRIMARY KEY (`id_instalasi_listrik`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `jendela_tb`
--
ALTER TABLE `jendela_tb`
  ADD PRIMARY KEY (`id_jendela`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `kolom_tb`
--
ALTER TABLE `kolom_tb`
  ADD PRIMARY KEY (`id_kolom`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `kusen_tb`
--
ALTER TABLE `kusen_tb`
  ADD PRIMARY KEY (`id_kusen`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `lantai_tb`
--
ALTER TABLE `lantai_tb`
  ADD PRIMARY KEY (`id_lantai`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `pintu_tb`
--
ALTER TABLE `pintu_tb`
  ADD PRIMARY KEY (`id_pintu`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `plafond_tb`
--
ALTER TABLE `plafond_tb`
  ADD PRIMARY KEY (`id_plafond`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `pondasi_tb`
--
ALTER TABLE `pondasi_tb`
  ADD PRIMARY KEY (`id_pondasi`),
  ADD UNIQUE KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `sekolah_tb`
--
ALTER TABLE `sekolah_tb`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atap_tb`
--
ALTER TABLE `atap_tb`
  MODIFY `id_atap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `balok_tb`
--
ALTER TABLE `balok_tb`
  MODIFY `id_balok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dinding_tb`
--
ALTER TABLE `dinding_tb`
  MODIFY `id_dinding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finishing_dinding_tb`
--
ALTER TABLE `finishing_dinding_tb`
  MODIFY `id_finishing_dinding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finishing_kusen_tb`
--
ALTER TABLE `finishing_kusen_tb`
  MODIFY `id_finishing_kusen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finishing_plafond_tb`
--
ALTER TABLE `finishing_plafond_tb`
  MODIFY `id_finishing_plafond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instalasi_air_tb`
--
ALTER TABLE `instalasi_air_tb`
  MODIFY `id_instalasi_air` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instalasi_listrik_tb`
--
ALTER TABLE `instalasi_listrik_tb`
  MODIFY `id_instalasi_listrik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jendela_tb`
--
ALTER TABLE `jendela_tb`
  MODIFY `id_jendela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kolom_tb`
--
ALTER TABLE `kolom_tb`
  MODIFY `id_kolom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kusen_tb`
--
ALTER TABLE `kusen_tb`
  MODIFY `id_kusen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lantai_tb`
--
ALTER TABLE `lantai_tb`
  MODIFY `id_lantai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pintu_tb`
--
ALTER TABLE `pintu_tb`
  MODIFY `id_pintu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `plafond_tb`
--
ALTER TABLE `plafond_tb`
  MODIFY `id_plafond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pondasi_tb`
--
ALTER TABLE `pondasi_tb`
  MODIFY `id_pondasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah_tb`
--
ALTER TABLE `sekolah_tb`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
