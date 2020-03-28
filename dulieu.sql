-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2019 at 05:47 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dulieu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dsnd`
--

DROP TABLE IF EXISTS `dsnd`;
CREATE TABLE IF NOT EXISTS `dsnd` (
  `tendangnhap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dsnd`
--

INSERT INTO `dsnd` (`tendangnhap`, `matkhau`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `giavecn`
--

DROP TABLE IF EXISTS `giavecn`;
CREATE TABLE IF NOT EXISTS `giavecn` (
  `doituong` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `giave` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giavecn`
--

INSERT INTO `giavecn` (`doituong`, `giave`) VALUES
('Nguoi lon', '15.000 '),
('Tre em *', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `giavethang`
--

DROP TABLE IF EXISTS `giavethang`;
CREATE TABLE IF NOT EXISTS `giavethang` (
  `doituong` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `giave` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giavethang`
--

INSERT INTO `giavethang` (`doituong`, `giave`) VALUES
('Hoc sinh, sinh vien', '150000'),
('Nguoi lon *', '215.000 ');

-- --------------------------------------------------------

--
-- Table structure for table `lichgio`
--

DROP TABLE IF EXISTS `lichgio`;
CREATE TABLE IF NOT EXISTS `lichgio` (
  `noidi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiden` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ben` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gio` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lichgio`
--

INSERT INTO `lichgio` (`noidi`, `noiden`, `ben`, `gio`) VALUES
('Quy Nhơn', 'Nhơn Hải', 'Siêu Thị', '13h30');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(100) NOT NULL,
  `tieude` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `ngaydang`, `noidung`) VALUES
(1, 'Tạm dừng hoạt động tuyến xe buýt T7 (Quy Nhơn - Cát Tiến)', '2019-08-20', 'Hiện nay, trên tỉnh lộ ĐT.640 đang thi công thay bờ tràn bằng cống thoát nước, các đường công vụ mặt đường rất xấu, bị lầy lún, không đảm bảo an toàn cho phương tiện xe buýt của Xí nghiệp hoạt động phục vụ hành khách.\r\n\r\n    Xí nghiệp thông báo kể từ ngày 22/08/2019. Xí nghiệp tạm ngưng hoạt động tuyến xe buýt T7 từ Quy Nhơn đi Cát Tiến và ngược lại. Đến khi nào việc thi công nâng cấp tuyến đường nêu trên hoàn thành, đơn vị sẽ tiếp tục hoạt động trở lại.\r\n\r\n      Nay, Xí nghiệp kính thông báo quý khách hàng được biết.\r\n\r\n      Mọi chi tiết liên hệ: 035874126x');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
