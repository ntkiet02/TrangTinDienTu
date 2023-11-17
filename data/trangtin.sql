-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2023 at 08:13 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trangtin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

DROP TABLE IF EXISTS `tbl_baiviet`;
CREATE TABLE IF NOT EXISTS `tbl_baiviet` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `MaChuDe` int NOT NULL,
  `MaNguoiDung` int NOT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `TomTat` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NoiDung` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NgayDang` datetime NOT NULL,
  `LuotXem` int NOT NULL,
  `KiemDuyet` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `MaChuDe` (`MaChuDe`),
  KEY `MaNguoiDung` (`MaNguoiDung`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chude`
--

DROP TABLE IF EXISTS `tbl_chude`;
CREATE TABLE IF NOT EXISTS `tbl_chude` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tbl_chude`
--

INSERT INTO `tbl_chude` (`ID`, `TenChuDe`) VALUES
(1, 'Đời sống'),
(2, 'Du lịch'),
(3, 'Giải trí'),
(4, 'Giáo dục'),
(5, 'Góc nhìn'),
(6, 'Hài'),
(7, 'Khoa học'),
(8, 'Kinh doanh'),
(9, 'Pháp luật'),
(10, 'Số hóa'),
(11, 'Sức khỏe'),
(12, 'Tâm sự'),
(13, 'Thế giới'),
(14, 'Thể thao'),
(15, 'Thời sự'),
(16, 'Video'),
(17, 'Xe'),
(18, 'Ý kiến');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoidung`
--

DROP TABLE IF EXISTS `tbl_nguoidung`;
CREATE TABLE IF NOT EXISTS `tbl_nguoidung` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `HoVaTen` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `MatKhau` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`ID`, `HoVaTen`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Nguyễn Hoàng Tùng', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 0),
(2, 'Lê Hoàng Thảo My', 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD CONSTRAINT `tbl_baiviet_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tbl_nguoidung` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_baiviet_ibfk_2` FOREIGN KEY (`MaChuDe`) REFERENCES `tbl_chude` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
