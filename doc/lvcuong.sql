-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2018 at 04:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lvcuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `cachbaoquan`
--

CREATE TABLE `cachbaoquan` (
  `cbq_ma` int(255) NOT NULL,
  `cbq_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cachbaoquan`
--

INSERT INTO `cachbaoquan` (`cbq_ma`, `cbq_ten`) VALUES
(1, 'Lạnh');

-- --------------------------------------------------------

--
-- Table structure for table `dangthuoc`
--

CREATE TABLE `dangthuoc` (
  `dt_ma` int(255) NOT NULL,
  `dt_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dongia`
--

CREATE TABLE `dongia` (
  `dg_id` int(255) NOT NULL,
  `dg_ngay` datetime NOT NULL,
  `dg_banle` int(255) NOT NULL,
  `dg_mathuoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donvitinh`
--

CREATE TABLE `donvitinh` (
  `dvt_ma` int(255) NOT NULL,
  `dvt_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donvitinh`
--

INSERT INTO `donvitinh` (`dvt_ma`, `dvt_ten`) VALUES
(1, 'Viên'),
(2, 'Vĩ'),
(3, 'Hộp');

-- --------------------------------------------------------

--
-- Table structure for table `gocthuoc`
--

CREATE TABLE `gocthuoc` (
  `gt_ma` int(255) NOT NULL,
  `gt_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `ncc_ma` int(255) NOT NULL,
  `ncc_ten` varchar(255) NOT NULL,
  `ncc_diachi` varchar(255) NOT NULL,
  `ncc_sdt` int(255) NOT NULL,
  `ncc_stk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ncc_ma`, `ncc_ten`, `ncc_diachi`, `ncc_sdt`, `ncc_stk`) VALUES
(1, 'Trung Sơn', '2923888999', 29, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `nsx_ma` int(255) NOT NULL,
  `nsx_ten` varchar(255) NOT NULL,
  `nsx_diachi` varchar(255) NOT NULL,
  `nsx_sdt` int(255) NOT NULL,
  `nsx_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`nsx_ma`, `nsx_ten`, `nsx_diachi`, `nsx_sdt`, `nsx_website`) VALUES
(1, 'Dược Hậu Giang', '2923666777', 8, 'dhg.com');

-- --------------------------------------------------------

--
-- Table structure for table `nhomthuoc`
--

CREATE TABLE `nhomthuoc` (
  `nt_ma` int(255) NOT NULL,
  `nt_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quyentruycap`
--

CREATE TABLE `quyentruycap` (
  `quyen_ma` varchar(255) NOT NULL,
  `quyen_ten` varchar(255) NOT NULL,
  `quyen_ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `quyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thuoc`
--

CREATE TABLE `thuoc` (
  `mathuoc` varchar(255) NOT NULL,
  `tenthuoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cachbaoquan`
--
ALTER TABLE `cachbaoquan`
  ADD PRIMARY KEY (`cbq_ma`);

--
-- Indexes for table `dangthuoc`
--
ALTER TABLE `dangthuoc`
  ADD PRIMARY KEY (`dt_ma`);

--
-- Indexes for table `dongia`
--
ALTER TABLE `dongia`
  ADD PRIMARY KEY (`dg_id`),
  ADD KEY `dg_mathuoc` (`dg_mathuoc`);

--
-- Indexes for table `donvitinh`
--
ALTER TABLE `donvitinh`
  ADD PRIMARY KEY (`dvt_ma`);

--
-- Indexes for table `gocthuoc`
--
ALTER TABLE `gocthuoc`
  ADD PRIMARY KEY (`gt_ma`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`ncc_ma`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`nsx_ma`);

--
-- Indexes for table `nhomthuoc`
--
ALTER TABLE `nhomthuoc`
  ADD PRIMARY KEY (`nt_ma`);

--
-- Indexes for table `quyentruycap`
--
ALTER TABLE `quyentruycap`
  ADD PRIMARY KEY (`quyen_ma`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quyen` (`quyen`);

--
-- Indexes for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`mathuoc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cachbaoquan`
--
ALTER TABLE `cachbaoquan`
  MODIFY `cbq_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dangthuoc`
--
ALTER TABLE `dangthuoc`
  MODIFY `dt_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dongia`
--
ALTER TABLE `dongia`
  MODIFY `dg_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donvitinh`
--
ALTER TABLE `donvitinh`
  MODIFY `dvt_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gocthuoc`
--
ALTER TABLE `gocthuoc`
  MODIFY `gt_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `ncc_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `nsx_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhomthuoc`
--
ALTER TABLE `nhomthuoc`
  MODIFY `nt_ma` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
