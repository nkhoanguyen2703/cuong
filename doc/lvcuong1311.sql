-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2018 at 10:50 AM
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
(1, 'Lạnh'),
(2, 'Bình thường');

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieuhuy`
--

CREATE TABLE `chitietphieuhuy` (
  `phieuhuy` int(255) NOT NULL,
  `lothuoc` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `dongia` int(255) NOT NULL,
  `thanhtien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cuahang`
--

CREATE TABLE `cuahang` (
  `ch_ma` int(255) NOT NULL,
  `ch_ten` varchar(255) NOT NULL,
  `ch_sdt` int(255) NOT NULL,
  `ch_diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuahang`
--

INSERT INTO `cuahang` (`ch_ma`, `ch_ten`, `ch_sdt`, `ch_diachi`) VALUES
(1, 'CH1', 2147483647, '28 Trần Hưng Đạo, Ninh Kiều, Cần Thơ'),
(2, 'CH2', 912999999, '102 Xô Viết Nghệ Tĩnh, Ninh Kiều, Cần Thơ');

-- --------------------------------------------------------

--
-- Table structure for table `dangthuoc`
--

CREATE TABLE `dangthuoc` (
  `dt_ma` int(255) NOT NULL,
  `dt_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dangthuoc`
--

INSERT INTO `dangthuoc` (`dt_ma`, `dt_ten`) VALUES
(1, 'D1'),
(2, 'D2');

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

--
-- Dumping data for table `dongia`
--

INSERT INTO `dongia` (`dg_id`, `dg_ngay`, `dg_banle`, `dg_mathuoc`) VALUES
(1, '2018-11-09 15:00:19', 3000, 'PND12');

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

--
-- Dumping data for table `gocthuoc`
--

INSERT INTO `gocthuoc` (`gt_ma`, `gt_ten`) VALUES
(1, 'G1'),
(2, 'G2');

-- --------------------------------------------------------

--
-- Table structure for table `lothuoc`
--

CREATE TABLE `lothuoc` (
  `lt_solo` int(255) NOT NULL,
  `lt_ngaysanxuat` datetime NOT NULL,
  `lt_hansudung` datetime NOT NULL,
  `lt_soluongnhap` int(255) NOT NULL,
  `lt_dongianhap` int(255) NOT NULL,
  `lt_vat` int(255) NOT NULL,
  `lt_trangthai` int(255) NOT NULL,
  `lt_mathuoc` varchar(255) NOT NULL,
  `lt_ngaynhap` datetime NOT NULL,
  `lt_nhacungcap` int(255) NOT NULL,
  `lt_nhanvien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lothuoc`
--

INSERT INTO `lothuoc` (`lt_solo`, `lt_ngaysanxuat`, `lt_hansudung`, `lt_soluongnhap`, `lt_dongianhap`, `lt_vat`, `lt_trangthai`, `lt_mathuoc`, `lt_ngaynhap`, `lt_nhacungcap`, `lt_nhanvien`) VALUES
(1, '2018-01-10 00:00:00', '2019-01-10 00:00:00', 1000, 3000, 10, 0, 'PND12', '2018-11-10 04:22:37', 1, 'adminkho'),
(2, '2018-10-31 00:00:00', '2020-11-02 00:00:00', 1700, 2800, 10, 0, 'PND12', '2018-11-12 14:38:26', 1, 'adminkho');

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
(1, 'Trung Sơn', '2923888999', 29, 2147483647),
(2, 'Việt Pharmacy', '2923555789', 209, 2147483647);

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
(1, 'Dược Hậu Giang', '2923666777', 8, 'dhg.com'),
(2, 'Dược Hòa Bình', '7103827333', 8, 'hbpharma.com');

-- --------------------------------------------------------

--
-- Table structure for table `nhomthuoc`
--

CREATE TABLE `nhomthuoc` (
  `nt_ma` int(255) NOT NULL,
  `nt_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhomthuoc`
--

INSERT INTO `nhomthuoc` (`nt_ma`, `nt_ten`) VALUES
(2, 'N1'),
(4, 'N2');

-- --------------------------------------------------------

--
-- Table structure for table `phieuhuy`
--

CREATE TABLE `phieuhuy` (
  `ph_so` int(255) NOT NULL,
  `ph_ngay` datetime NOT NULL,
  `ph_tongtien` int(255) NOT NULL,
  `ph_ghichu` varchar(255) NOT NULL,
  `ph_nhanvien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuat`
--

CREATE TABLE `phieuxuat` (
  `px_id` int(255) NOT NULL,
  `px_cuahang` int(255) NOT NULL,
  `px_solo` int(255) NOT NULL,
  `px_soluong` int(255) NOT NULL DEFAULT '0',
  `px_ngayxuat` datetime NOT NULL,
  `px_nhanvien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phieuxuat`
--

INSERT INTO `phieuxuat` (`px_id`, `px_cuahang`, `px_solo`, `px_soluong`, `px_ngayxuat`, `px_nhanvien`) VALUES
(1, 2, 1, 500, '2018-11-12 10:13:20', 'adminkho'),
(2, 2, 1, 400, '2018-11-12 14:34:49', 'adminkho'),
(3, 1, 1, 50, '2018-11-12 16:44:49', 'adminkho'),
(8, 2, 2, 1100, '2018-11-13 03:39:43', 'adminkho'),
(9, 2, 1, 30, '2018-11-13 03:45:03', 'adminkho'),
(10, 2, 2, 1000, '2018-11-13 03:45:16', 'adminkho');

-- --------------------------------------------------------

--
-- Table structure for table `quyentruycap`
--

CREATE TABLE `quyentruycap` (
  `quyen_ma` varchar(255) NOT NULL,
  `quyen_ten` varchar(255) NOT NULL,
  `quyen_ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quyentruycap`
--

INSERT INTO `quyentruycap` (`quyen_ma`, `quyen_ten`, `quyen_ghichu`) VALUES
('ADMIN', 'Quản trị hệ thống', ''),
('KETOANKHO', 'Kế toán kho', ''),
('QUANLYCUAHANG', 'Quản lý cửa hàng', ''),
('QUANLYKHO', 'Quản lý kho', ''),
('QUAY', 'Nhân viên đứng quầy bán thuốc', '');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(255) NOT NULL,
  `trinhdo` varchar(255) NOT NULL,
  `quyen` varchar(255) NOT NULL,
  `cuahang` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `pass`, `ten`, `ngaysinh`, `diachi`, `sdt`, `trinhdo`, `quyen`, `cuahang`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Văn Min', '0000-00-00 00:00:00', '', 0, '', 'ADMIN', 0),
('adminkho', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn Kho', '0000-00-00 00:00:00', '', 0, '', 'QUANLYKHO', 0),
('IDNE', '3d8300f5975acd19af4fbf446bbc8357', 'Tên nhân viên', '2018-11-27 00:00:00', '27 lí tự trọng', 939094490, 'Thạc Sĩ', 'QUAY', 2),
('ketoankho', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Văn Đông', '2018-11-27 00:00:00', '23 Nguyễn Trãi , Ninh Kiều, Cần Thơ', 939457928, 'Thạc Sĩ', 'KETOANKHO', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thuoc`
--

CREATE TABLE `thuoc` (
  `t_ma` varchar(255) NOT NULL,
  `t_ten` varchar(255) NOT NULL,
  `t_donvitinh` int(255) NOT NULL,
  `t_nhomthuoc` int(255) NOT NULL,
  `t_nhasanxuat` int(255) NOT NULL,
  `t_cachbaoquan` int(255) NOT NULL,
  `t_dangthuoc` int(255) NOT NULL,
  `t_gocthuoc` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thuoc`
--

INSERT INTO `thuoc` (`t_ma`, `t_ten`, `t_donvitinh`, `t_nhomthuoc`, `t_nhasanxuat`, `t_cachbaoquan`, `t_dangthuoc`, `t_gocthuoc`) VALUES
('PND12', 'Panadol', 1, 2, 1, 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cachbaoquan`
--
ALTER TABLE `cachbaoquan`
  ADD PRIMARY KEY (`cbq_ma`);

--
-- Indexes for table `chitietphieuhuy`
--
ALTER TABLE `chitietphieuhuy`
  ADD KEY `phieuhuy` (`phieuhuy`),
  ADD KEY `lothuoc` (`lothuoc`);

--
-- Indexes for table `cuahang`
--
ALTER TABLE `cuahang`
  ADD PRIMARY KEY (`ch_ma`);

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
-- Indexes for table `lothuoc`
--
ALTER TABLE `lothuoc`
  ADD PRIMARY KEY (`lt_solo`),
  ADD KEY `lt_mathuoc` (`lt_mathuoc`),
  ADD KEY `lt_nhacungcap` (`lt_nhacungcap`),
  ADD KEY `lt_nhanvien` (`lt_nhanvien`);

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
-- Indexes for table `phieuhuy`
--
ALTER TABLE `phieuhuy`
  ADD PRIMARY KEY (`ph_so`),
  ADD KEY `ph_nhanvien` (`ph_nhanvien`);

--
-- Indexes for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD PRIMARY KEY (`px_id`),
  ADD KEY `px_cuahang` (`px_cuahang`),
  ADD KEY `px_solo` (`px_solo`),
  ADD KEY `px_nhanvien` (`px_nhanvien`);

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
  ADD KEY `quyen` (`quyen`),
  ADD KEY `cuahang` (`cuahang`);

--
-- Indexes for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`t_ma`),
  ADD KEY `t_donvitinh` (`t_donvitinh`),
  ADD KEY `t_nhomthuoc` (`t_nhomthuoc`),
  ADD KEY `t_nhasanxuat` (`t_nhasanxuat`),
  ADD KEY `t_cachbaoquan` (`t_cachbaoquan`),
  ADD KEY `t_dangthuoc` (`t_dangthuoc`),
  ADD KEY `t_gocthuoc` (`t_gocthuoc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cachbaoquan`
--
ALTER TABLE `cachbaoquan`
  MODIFY `cbq_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cuahang`
--
ALTER TABLE `cuahang`
  MODIFY `ch_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dangthuoc`
--
ALTER TABLE `dangthuoc`
  MODIFY `dt_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dongia`
--
ALTER TABLE `dongia`
  MODIFY `dg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donvitinh`
--
ALTER TABLE `donvitinh`
  MODIFY `dvt_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gocthuoc`
--
ALTER TABLE `gocthuoc`
  MODIFY `gt_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lothuoc`
--
ALTER TABLE `lothuoc`
  MODIFY `lt_solo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `ncc_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `nsx_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhomthuoc`
--
ALTER TABLE `nhomthuoc`
  MODIFY `nt_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phieuhuy`
--
ALTER TABLE `phieuhuy`
  MODIFY `ph_so` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  MODIFY `px_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietphieuhuy`
--
ALTER TABLE `chitietphieuhuy`
  ADD CONSTRAINT `chitietphieuhuy_ibfk_1` FOREIGN KEY (`phieuhuy`) REFERENCES `phieuhuy` (`ph_so`),
  ADD CONSTRAINT `chitietphieuhuy_ibfk_2` FOREIGN KEY (`lothuoc`) REFERENCES `lothuoc` (`lt_solo`);

--
-- Constraints for table `lothuoc`
--
ALTER TABLE `lothuoc`
  ADD CONSTRAINT `lothuoc_ibfk_1` FOREIGN KEY (`lt_mathuoc`) REFERENCES `thuoc` (`t_ma`),
  ADD CONSTRAINT `lothuoc_ibfk_2` FOREIGN KEY (`lt_nhacungcap`) REFERENCES `nhacungcap` (`ncc_ma`),
  ADD CONSTRAINT `lothuoc_ibfk_3` FOREIGN KEY (`lt_nhanvien`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `phieuhuy`
--
ALTER TABLE `phieuhuy`
  ADD CONSTRAINT `phieuhuy_ibfk_1` FOREIGN KEY (`ph_nhanvien`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD CONSTRAINT `phieuxuat_ibfk_1` FOREIGN KEY (`px_cuahang`) REFERENCES `cuahang` (`ch_ma`),
  ADD CONSTRAINT `phieuxuat_ibfk_2` FOREIGN KEY (`px_solo`) REFERENCES `lothuoc` (`lt_solo`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`quyen`) REFERENCES `quyentruycap` (`quyen_ma`);

--
-- Constraints for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD CONSTRAINT `thuoc_ibfk_1` FOREIGN KEY (`t_donvitinh`) REFERENCES `donvitinh` (`dvt_ma`),
  ADD CONSTRAINT `thuoc_ibfk_2` FOREIGN KEY (`t_nhomthuoc`) REFERENCES `nhomthuoc` (`nt_ma`),
  ADD CONSTRAINT `thuoc_ibfk_3` FOREIGN KEY (`t_nhasanxuat`) REFERENCES `nhasanxuat` (`nsx_ma`),
  ADD CONSTRAINT `thuoc_ibfk_4` FOREIGN KEY (`t_cachbaoquan`) REFERENCES `cachbaoquan` (`cbq_ma`),
  ADD CONSTRAINT `thuoc_ibfk_5` FOREIGN KEY (`t_dangthuoc`) REFERENCES `dangthuoc` (`dt_ma`),
  ADD CONSTRAINT `thuoc_ibfk_6` FOREIGN KEY (`t_gocthuoc`) REFERENCES `gocthuoc` (`gt_ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
