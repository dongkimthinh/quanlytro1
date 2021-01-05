-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 12:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlytro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(255) NOT NULL,
  `ten_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_admin` int(11) NOT NULL,
  `diachi_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `ten_admin`, `sdt_admin`, `diachi_admin`, `email_admin`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(2, 'Kim Thinh', 312, 'da', 'das', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id_hd` int(10) UNSIGNED NOT NULL,
  `id_phong` int(11) UNSIGNED NOT NULL,
  `id_pttt` int(11) DEFAULT NULL,
  `soluong` int(255) NOT NULL,
  `dongia` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`id_hd`, `id_phong`, `id_pttt`, `soluong`, `dongia`, `created_at`, `updated_at`) VALUES
(13, 1, NULL, 1, 0, NULL, NULL),
(13, 6, NULL, 1, 0, NULL, NULL),
(13, 75, NULL, 2, 0, NULL, NULL),
(14, 1, NULL, 1, 0, NULL, NULL),
(14, 6, NULL, 1, 0, NULL, NULL),
(14, 75, NULL, 2, 0, NULL, NULL),
(15, 1, NULL, 1, 0, NULL, NULL),
(15, 75, NULL, 2, 0, NULL, NULL),
(16, 1, NULL, 1, 0, NULL, NULL),
(16, 75, NULL, 2, 0, NULL, NULL),
(17, 1, NULL, 1, 0, NULL, NULL),
(17, 75, NULL, 2, 0, NULL, NULL),
(22, 1, NULL, 1, 0, NULL, NULL),
(22, 75, NULL, 2, 0, NULL, NULL),
(23, 1, NULL, 1, 0, NULL, NULL),
(23, 75, NULL, 2, 0, NULL, NULL),
(24, 1, NULL, 1, 0, NULL, NULL),
(24, 75, NULL, 2, 0, NULL, NULL),
(25, 1, NULL, 1, 0, NULL, NULL),
(25, 75, NULL, 2, 0, NULL, NULL),
(26, 1, NULL, 1, 0, NULL, NULL),
(26, 75, NULL, 2, 0, NULL, NULL),
(27, 1, NULL, 1, 0, NULL, NULL),
(27, 6, NULL, 1, 0, NULL, NULL),
(28, 1, NULL, 1, 0, NULL, NULL),
(28, 6, NULL, 1, 0, NULL, NULL),
(29, 1, NULL, 1, 0, NULL, NULL),
(29, 6, NULL, 1, 0, NULL, NULL),
(30, 1, NULL, 1, 0, NULL, NULL),
(31, 1, NULL, 1, 0, NULL, NULL),
(32, 1, NULL, 1, 0, NULL, NULL),
(44, 1, NULL, 1, 0, NULL, NULL),
(44, 6, NULL, 2, 0, NULL, NULL),
(44, 1, NULL, 1, 0, NULL, NULL),
(44, 6, NULL, 2, 0, NULL, NULL),
(100, 1, NULL, 1, 0, NULL, NULL),
(100, 6, NULL, 2, 0, NULL, NULL),
(101, 1, NULL, 1, 0, NULL, NULL),
(101, 6, NULL, 2, 0, NULL, NULL),
(102, 1, NULL, 1, 0, NULL, NULL),
(102, 6, NULL, 2, 0, NULL, NULL),
(103, 1, NULL, 1, 0, NULL, NULL),
(103, 6, NULL, 2, 0, NULL, NULL),
(104, 1, NULL, 1, 0, NULL, NULL),
(104, 6, NULL, 2, 0, NULL, NULL),
(105, 1, NULL, 1, 0, NULL, NULL),
(105, 6, NULL, 2, 0, NULL, NULL),
(106, 1, NULL, 1, 0, NULL, NULL),
(107, 1, NULL, 1, 0, NULL, NULL),
(109, 1, NULL, 1, 2200000, NULL, NULL),
(110, 1, NULL, 1, 2200000, NULL, NULL),
(111, 1, NULL, 1, 2200000, NULL, NULL),
(112, 1, NULL, 1, 2200000, NULL, NULL),
(113, 1, NULL, 1, 2200000, NULL, NULL),
(114, 1, NULL, 1, 2200000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dichvuchung`
--

CREATE TABLE `dichvuchung` (
  `id` int(11) NOT NULL,
  `tendichvu` varchar(2500) NOT NULL,
  `mota` varchar(2500) NOT NULL,
  `hinh` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dichvuchung`
--

INSERT INTO `dichvuchung` (`id`, `tendichvu`, `mota`, `hinh`) VALUES
(1, 'An Ninh', 'Được trang bị cammera quan sát 24/24 ', '1d0add9e0bb4faeaa3a529.jpg,1efed651007bf125a86a51.jpg,6801de9408bef9e0a0af28.jpg,8db2ab197d338c6dd52254.jpg'),
(2, 'Thang Máy', 'Toàn bộ đều dùng thang máy ', '4f660fc4d9ee28b071ff48.jpg,6ede7d72ab585a06034950.jpg,140b30aae68017de4e9146.jpg'),
(3, 'Giữ xe', 'Hầm giữ xe ra vào bằng vân tay', '62b1ddca08e0f9bea0f114.jpg,bac73d43eb691a37437816.jpg,52bfc7c512efe3b1bafe15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dieukiengiam`
--

CREATE TABLE `dieukiengiam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dieu_kien_giam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dieukiengiam`
--

INSERT INTO `dieukiengiam` (`id`, `dieu_kien_giam`, `created_at`, `updated_at`) VALUES
(1, 'Giảm theo %', NULL, NULL),
(2, 'Giảm theo tiền', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magiamgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `ten`, `tieude`, `noidung`, `anh`, `magiamgia`, `created_at`, `updated_at`) VALUES
(1, 'Tết Tây', 'Ngày Tết 31/12', 'Cảm ơn các bạn đã đến với Thuetro.com', 'about-p1.jpg,about-p2.jpg,about-p3.jpg', 'gjHqTz9bnG	', NULL, NULL),
(2, 'Lễ 30/4', 'demo', 'das', 'images (1).jpg', 'a', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hieu_ung`
--

CREATE TABLE `hieu_ung` (
  `id` int(10) UNSIGNED NOT NULL,
  `hieu_ung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hieu_ung`
--

INSERT INTO `hieu_ung` (`id`, `hieu_ung`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Mặt định', 'On', NULL, '2021-01-05 11:31:10'),
(2, 'Tuyết rơi', 'Off', NULL, '2021-01-05 11:31:10'),
(3, 'Hoa mai rơi', 'Off', NULL, '2021-01-05 11:11:41'),
(4, 'Lá vàng rơi', 'Off', NULL, '2020-11-28 04:39:48'),
(5, 'Noel', 'Off', NULL, '2021-01-05 11:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hd` int(10) UNSIGNED NOT NULL,
  `id_tk` int(11) UNSIGNED NOT NULL,
  `ngay_lap` datetime NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giamgia` int(255) NOT NULL,
  `tongtien` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id_hd`, `id_tk`, `ngay_lap`, `ghichu`, `giamgia`, `tongtien`, `created_at`, `updated_at`) VALUES
(4, 38, '0000-00-00 00:00:00', 'as', 0, 0, NULL, NULL),
(5, 38, '2020-12-22 18:59:40', 'asd', 0, 0, NULL, NULL),
(6, 38, '2020-12-22 19:00:35', 'asd', 0, 0, NULL, NULL),
(7, 38, '2020-12-22 19:07:14', 'asd', 0, 0, NULL, NULL),
(8, 38, '2020-12-22 19:10:26', 'asd', 0, 0, NULL, NULL),
(9, 38, '2020-12-22 19:12:55', 'asd', 0, 0, NULL, NULL),
(10, 38, '2020-12-22 19:14:26', 'asd', 0, 0, NULL, NULL),
(11, 38, '2020-12-22 19:14:58', 'asd', 0, 0, NULL, NULL),
(12, 38, '2020-12-22 19:15:12', 'asd', 0, 0, NULL, NULL),
(13, 38, '2020-12-22 19:15:38', 'asd', 0, 0, NULL, NULL),
(14, 38, '2020-12-22 19:26:42', 'asd', 0, 0, NULL, NULL),
(15, 38, '2020-12-23 01:51:02', 'asd', 0, 0, NULL, NULL),
(16, 38, '2020-12-23 01:55:11', 'asd', 0, 0, NULL, NULL),
(17, 38, '2020-12-23 02:02:34', 'asd', 0, 0, NULL, NULL),
(18, 38, '2020-12-23 02:10:04', 'asd', 0, 0, NULL, NULL),
(19, 38, '2020-12-23 02:10:44', 'asd', 0, 0, NULL, NULL),
(20, 38, '2020-12-23 02:11:02', 'asd', 0, 0, NULL, NULL),
(21, 38, '2020-12-23 02:12:10', 'asd', 0, 0, NULL, NULL),
(22, 38, '2020-12-23 02:12:26', 'asd', 0, 0, NULL, NULL),
(23, 38, '2020-12-23 02:12:53', 'asd', 0, 0, NULL, NULL),
(24, 38, '2020-12-23 02:13:00', 'asd', 0, 0, NULL, NULL),
(25, 38, '2020-12-23 02:13:02', 'asd', 0, 0, NULL, NULL),
(26, 38, '2020-12-23 03:05:29', 'asd', 0, 0, NULL, NULL),
(27, 38, '2020-12-23 19:05:27', 'asd', 0, 0, NULL, NULL),
(28, 38, '2020-12-23 19:07:29', 'asd', 0, 0, NULL, NULL),
(29, 38, '2020-12-23 19:08:31', 'asd', 0, 0, NULL, NULL),
(30, 38, '2020-12-23 19:10:58', 'asd', 0, 0, NULL, NULL),
(31, 38, '2020-12-23 19:14:00', 'asd', 0, 0, NULL, NULL),
(32, 38, '2020-12-23 19:16:21', 'asd', 0, 0, NULL, NULL),
(33, 38, '2020-12-23 21:24:28', 'asd', 0, 0, NULL, NULL),
(34, 38, '2020-12-23 21:24:58', 'asd', 0, 0, NULL, NULL),
(35, 38, '2020-12-23 21:25:01', 'asd', 0, 0, NULL, NULL),
(36, 38, '2020-12-23 21:25:14', 'asd', 0, 0, NULL, NULL),
(41, 38, '2020-12-23 21:30:20', 'asd', 0, 0, NULL, NULL),
(43, 38, '2020-12-23 21:33:19', 'asd', 0, 0, NULL, NULL),
(44, 38, '2020-12-23 21:33:55', 'asd', 0, 0, NULL, NULL),
(47, 38, '2020-12-23 21:43:25', 'asd', 0, 0, NULL, NULL),
(48, 38, '2020-12-24 11:48:29', 'asd', 0, 0, NULL, NULL),
(89, 38, '2020-12-24 12:59:24', 'asd', 0, 0, NULL, NULL),
(90, 38, '2020-12-24 13:00:08', 'asd', 0, 0, NULL, NULL),
(91, 38, '2020-12-24 13:01:21', 'asd', 0, 0, NULL, NULL),
(92, 38, '2020-12-24 13:02:17', 'asd', 0, 0, NULL, NULL),
(95, 38, '2020-12-24 13:04:33', 'asd', 0, 0, NULL, NULL),
(100, 38, '2020-12-24 13:08:01', 'asd', 0, 0, NULL, NULL),
(101, 38, '2020-12-24 13:12:53', 'asd', 0, 0, NULL, NULL),
(102, 38, '2020-12-24 13:13:38', 'asd', 0, 0, NULL, NULL),
(103, 38, '2020-12-24 13:14:37', 'asd', 0, 0, NULL, NULL),
(104, 38, '2020-12-24 13:16:23', 'asd', 0, 0, NULL, NULL),
(105, 38, '2020-12-24 13:19:31', 'asd', 0, 0, NULL, NULL),
(106, 38, '2020-12-25 02:17:52', 'asd', 0, 0, NULL, NULL),
(107, 38, '2020-12-25 11:31:18', 'das', 0, 0, NULL, NULL),
(109, 38, '2020-12-31 11:39:09', NULL, 110000, 2090000, NULL, NULL),
(110, 38, '2021-01-05 15:01:48', NULL, 0, 2200000, NULL, NULL),
(111, 38, '2021-01-05 16:58:51', NULL, 0, 2200000, NULL, NULL),
(112, 38, '2021-01-05 17:00:52', NULL, 0, 2200000, NULL, NULL),
(113, 38, '2021-01-05 17:01:53', NULL, 0, 2200000, NULL, NULL),
(114, 38, '2021-01-05 17:05:12', NULL, 0, 2200000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(255) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_kh` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_kh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_kh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `sdt_kh`, `anh`, `diachi_kh`, `gioitinh`, `email_kh`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(2, 'thịnh', 123, 'sđasd', 'adsdsd', 'Nữ', 'adsdsd', NULL, NULL, '2020-11-24 03:19:06'),
(4, 'da', 12, 'das', 'das', 'Nữ', 'das', NULL, NULL, '2020-11-24 03:19:10'),
(5, 'das', 312, 'da', 'da', 'Nam', 'das', NULL, NULL, '2020-11-24 03:19:13'),
(6, 'asdasdadada', 703150380, '', 'Hồ chí minh,Quận Bình trị đông,Phường 1', 'Nữ', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 21:04:51', '2020-12-20 05:11:09'),
(7, 'asdasdadada', 703150380, 'NULL', 'Hồ chí minh,Quận Bình trị đông,Phường 1', 'Nam', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 21:28:17', '2020-12-20 05:11:17'),
(8, 'asdasdadada', 703150380, 'NULL', 'Hồ chí minh,Quận Bình trị đông,Phường 1', 'Nữ', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 21:29:30', '2020-12-20 05:11:26'),
(9, 'asdasdadada', 703150380, 'NULL', 'Hồ chí minh,Quận Bình trị đông,Phường 2', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 21:32:23', '2020-11-09 21:32:23'),
(10, 'asdasdadada', 703150380, 'NULL', 'Hồ chí minh,Quận Bình trị đông,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 21:34:29', '2020-11-09 21:34:29'),
(11, 'asdasdadada', 703150380, 'NULL', 'Hồ chí minh,Quận Bình trị đông,Phường 2', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 21:36:12', '2020-11-09 21:36:12'),
(12, 'dasdasdasda', 703150380, 'NULL', 'Hồ chí minh,Quận Bình trị đông,Phường 2', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 22:31:43', '2020-11-09 22:31:43'),
(13, 'Thịnh', 703150380, 'NULL', 'dasdasdasdas,Quận Bình trị đông,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 22:34:37', '2020-11-09 22:34:37'),
(14, 'dasdas', 703150380, 'NULL', 'dasdasdasdas,Quận Bình trị đông,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 22:39:35', '2020-11-09 22:39:35'),
(15, 'dasdas', 703150380, 'NULL', 'dasdasdasdas,Quận Bình trị đông,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 23:40:54', '2020-11-09 23:40:54'),
(16, 'dasdas', 703150380, 'NULL', 'dasdasdasdas,Quận Bình trị đông,Phường 2', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 23:41:06', '2020-11-09 23:41:06'),
(17, 'dasdas', 703150380, 'NULL', 'dasdasdasdas,Quận 5,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 23:48:47', '2020-11-09 23:48:47'),
(18, 'dasdas', 703150380, 'NULL', 'dasdasdasdas,Quận Bình trị đông,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 23:51:24', '2020-11-09 23:51:24'),
(19, 'dasdas', 703150380, 'NULL', 'dasdasdasdas,Quận Bình trị đông,Phường 2', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 23:54:43', '2020-11-09 23:54:43'),
(20, 'dasdada', 703150380, 'NULL', 'dasdasdasdada,Quận Bình trị đông,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-09 23:58:25', '2020-11-09 23:58:25'),
(21, 'dsadada', 703150380, 'NULL', 'dasdasda,Quận Bình trị đông,Phường 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-10 00:01:50', '2020-11-10 00:01:50'),
(22, 'dsadasda', 703150380, 'NULL', 'Hồ chí minh,Phường Bình trị đông,Quận 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-10 00:12:14', '2020-11-10 00:12:14'),
(23, 'dasdasdasdasdadada', 703150380, 'NULL', 'dasdasdasdas,Phường Bình trị đông,Quận 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-10 00:14:15', '2020-11-10 00:14:15'),
(24, 'dadasda', 703150380, 'NULL', 'dsadasdasda,Phường Bình trị đông,Quận 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-10 00:17:35', '2020-11-10 00:17:35'),
(25, 'dasdas', 703150380, 'footer-logo1.png', 'Hồ chí minh,Phường Bình trị đông,Quận 1', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-10 01:41:27', '2020-11-10 01:41:27'),
(26, 'dasdas', 703150380, 'nomane.jpg', 'dadasdasdasdasdq,Phường Bình trị đông,Quận 2', '', 'dongkimthinh123@gmail.com', NULL, '2020-11-10 06:59:56', '2020-11-10 06:59:56'),
(27, 'kimthinh', 703150380, 'nomane.jpg', 'dasdasdasdasda,Phường Bình trị đông,Quận 2', 'Nam', 'dongkimthinh123@gmail.com', NULL, '2020-11-12 10:07:50', '2020-11-24 03:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id_loai_phong` int(10) UNSIGNED NOT NULL,
  `ten_loai_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthietbi` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_phong`
--

INSERT INTO `loai_phong` (`id_loai_phong`, `ten_loai_phong`, `trangthietbi`, `created_at`, `updated_at`) VALUES
(1, 'Phòng Cao Cấp', 'Điều hòa,Ti Vi,Tủ lạnh,Máy Giặt,Máy Lạnh,Wifi', '2020-11-13 15:45:46', '2020-12-01 19:38:51'),
(2, 'Phòng Chuẩn', 'Điều hòa,Ti Vi,Tủ lạnh,Máy Giặt', '2020-11-13 15:45:46', '2020-11-29 20:23:47'),
(3, 'Phòng Trung', 'Điều hòa,Ti Vi', '2020-11-13 15:48:14', '2020-12-02 02:49:11'),
(4, 'Phòng Bình Dân', 'Điều hòa,Ti Vi', '2020-11-13 15:48:14', '2020-12-05 04:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_ma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magiamgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dieu_kien_giam` bigint(255) UNSIGNED NOT NULL,
  `gia_giam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magiamgia`
--

INSERT INTO `magiamgia` (`id`, `ten_ma`, `magiamgia`, `soluong`, `dieu_kien_giam`, `gia_giam`, `created_at`, `updated_at`) VALUES
(1, 'Giảm giá 20k', '73mpLO1F3f', 10, 2, '200000', '2020-12-21 05:49:32', '2020-12-21 10:28:15'),
(3, 'Giảm giá Covid', 'gjHqTz9bnG', 10, 1, '5', '2020-12-21 10:37:49', '2020-12-21 10:37:49'),
(4, 'Giảm giá 20k', 'iQ0b4LnvSb', 10, 1, '12', '2020-12-21 13:42:22', '2020-12-21 13:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_04_092829_thinh_create_slide', 1),
(5, '2020_11_08_064121_thinh_create_taikhoan', 2),
(6, '2020_11_08_064320_thinh_create_khachhang', 3),
(7, '2020_11_08_065825_thinh_create_admin', 4),
(8, '2020_11_08_070756_thinh_create_taikhoan', 5),
(9, '2020_11_08_070957_thinh_create_khachhang', 6),
(10, '2020_11_09_075051_thinh_create_taikhoan', 7),
(11, '2020_11_09_081244_thinh_create_taikhoan', 8),
(12, '2020_11_09_081415_thinh_create_admin', 9),
(13, '2020_11_09_081925_thinh_create_khachhang', 10),
(14, '2020_11_13_061252_thinh_create_pt_thanh_toan', 11),
(15, '2020_11_13_061721_thinh_create_chi_tiet_hoa_don', 12),
(16, '2020_11_13_062341_thinh_create_hoa_don', 13),
(17, '2020_11_13_063024_thinh_create_tin_tuc', 14),
(18, '2020_11_13_063520_thinh_create_trang_thiet_bi', 15),
(19, '2020_11_13_063636_thinh_create_loai_phong', 16),
(20, '2020_11_13_063816_thinh_create_phong', 17),
(21, '2020_11_27_181444_thinh_create_hieuung', 18),
(22, '2020_12_21_115121_thinh_create_magiamgia', 19),
(23, '2020_12_21_194750_create_dieukiengiam', 20),
(24, '2020_12_29_165538_create_gioithieu', 21);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(10) UNSIGNED NOT NULL,
  `id_loai_phong` int(11) UNSIGNED DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `songuoi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dientich` float DEFAULT NULL,
  `mota` varchar(2550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_phong` varchar(2550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id_phong`, `id_loai_phong`, `gia`, `songuoi`, `dientich`, `mota`, `hinh_phong`, `soluong`, `created_at`, `updated_at`) VALUES
(1, 1, 2200000, '2 người lớn-2 trẻ em', 50, 'a', 'download.jpg,download.jpg,20200916111314-3cfen.jpg,nha_tro_con_nha_giau4_kugp.jpg', 85, '2020-11-13 15:49:24', '2020-12-31 05:02:29'),
(6, 2, 1800000, '2 ngưới lớn - 0 trẻ em', 50, 'das', 'TVShelf.png,unnamed.png', 3, '2020-11-13 15:53:52', '2021-01-05 04:50:24'),
(71, 4, 1800000, '2 người lớn - 2 trẻ em', 50, 'das', 'nha_tro_con_nha_giau4_kugp.jpg,20200916111314-3cfen.jpg,0d5310f57ce980b7d9f817_1596879786.jpg,images.jpg,download.jpg', 50, '2020-11-27 04:12:54', '2021-01-05 10:54:10'),
(75, 3, 20, '2 người lớn - 2 trẻ em', 50, NULL, 'download.jpg,hinh1.png,hinh2.png,hinh3.png,hinh4.png,hinh5.png,hinh6.png,hinh7.png,hinh8.png,hinh9.png,hinh10.png,hinh11.png,hinh12.png,hinh13.png,hinh14.png,hinh15.png,hinh16.png,hinh17.png,hinh18.png,hinh19.png,download.jpg', 48, '2020-11-29 01:04:04', '2020-12-02 02:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `pt_thanhtoan`
--

CREATE TABLE `pt_thanhtoan` (
  `id_pttt` int(12) NOT NULL,
  `ten_pttt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `tieude`, `noidung`, `anh`, `created_at`, `updated_at`) VALUES
(1, 'Cho Thuê Phòng Trọ Giá Rẻ,Tiện Nghi', 'Với hệ thống gửi xe ra vào bảo mật,sử dụng thang máy.....', 'IMG_0025.JPG', NULL, NULL),
(3, 'Cho thuê', 'asdasd', 'IMG_0019.JPG', '2020-12-03 03:50:44', '2020-12-07 18:43:46'),
(6, 'demo', 'dahdashkjda', 'test.jpg', '2020-12-05 07:11:14', '2020-12-05 07:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(255) UNSIGNED NOT NULL,
  `id_ad` int(255) DEFAULT NULL,
  `id_kh` int(255) DEFAULT NULL,
  `ten_tk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `id_ad`, `id_kh`, `ten_tk`, `password`, `quyen`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 2, 4, 'das', 'das', 'das', 'dsa', NULL, NULL),
(26, NULL, 2, 'SA', 'sa', 'das', 'das', NULL, NULL),
(28, NULL, 5, 'das', 'das', 'das', NULL, NULL, NULL),
(29, NULL, NULL, 'da', '12das', 'dsa', 'das', NULL, NULL),
(30, NULL, 10, 'dsada', 'dasdas', 'dsadsa', NULL, NULL, NULL),
(31, NULL, 13, 'dasdsadasdasdasdas', '$2y$10$7Ms1W7vMVF59Oo.V0YmU9OIJmkxwcHukqcUyGarTDLALf74luHq76', 'Khách hàng', NULL, '2020-11-09 23:54:43', '2020-11-09 23:54:43'),
(32, NULL, 20, 'dasdada', '$2y$10$9h57oivIuqFQLvuZpXJW4Ov/RMEL1jqAIjBKUYLva9T.mnGyiAs/W', 'Khách hàng', NULL, '2020-11-09 23:58:25', '2020-11-09 23:58:25'),
(33, NULL, 21, 'admindasdasdasdadsa', '$2y$10$Pfk9P5EWh9WwNimxAR7mf.y184zNUgLjEl2QuKdqjuiHXDGmRhcsW', 'Khách hàng', NULL, '2020-11-10 00:01:50', '2020-11-10 00:01:50'),
(34, NULL, 22, 'dsadasdsadasda', '$2y$10$SOzAVEeRUKEHmhVyVv3zNujKQbbMacxm1O5dnVStDUxLn43DFnbVa', 'Khách hàng', NULL, '2020-11-10 00:12:14', '2020-11-10 00:12:14'),
(35, NULL, 23, 'dasdasasyuioaueoiuioeqa', '$2y$10$Bpm6o1RLguOkpe9./paCvuu24VaCD0qZWC4Hs7x3W/7CGdUdPpZuS', 'Khách hàng', NULL, '2020-11-10 00:14:16', '2020-11-10 00:14:16'),
(36, NULL, 24, 'dasdadasdasd', '24327924313024506F506F4952626D32546A695242612F66456F344F2E45416F5766314B45334932756564616A78513648492E474433764C46557547', 'Khách hàng', NULL, '2020-11-10 00:17:35', '2020-11-10 00:17:35'),
(37, NULL, 13, 'thinh', '$2y$10$hm0NyIWl9/GmrauyEZ4ziuw82NwaTInUXIfHGfazq5eoWw1psxT.q', '1', NULL, '2020-11-10 01:41:27', '2020-11-10 01:41:27'),
(38, NULL, 13, 'dongkimthinh', '$2y$10$JcDI9r/t/tnDBGVY9kXEfuXP8.iJDBnuHL5nChwCvhoE6EN5HoUSK', 'Khách hàng', NULL, '2020-11-10 06:59:57', '2020-11-10 06:59:57'),
(39, 2, NULL, 'admin', '$2y$10$mF1N59g.Im0gXaKy5kENu.5ElhhaqZkXViy/8ZFDd1QkSe6pzqYaK', 'Admin', NULL, '2020-11-12 10:07:50', '2020-11-12 10:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tin` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh_tin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trang_thiet_bi`
--

CREATE TABLE `trang_thiet_bi` (
  `id_ttb` int(10) UNSIGNED NOT NULL,
  `ten_ttb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_ttb` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trang_thiet_bi`
--

INSERT INTO `trang_thiet_bi` (`id_ttb`, `ten_ttb`, `hinh_ttb`, `created_at`, `updated_at`) VALUES
(1, 'Điều hòa', 'AirConditioner.png', '2020-11-13 15:35:11', '2020-11-29 20:22:29'),
(2, 'Ti Vi', 'TVShelf.png', '2020-12-04 15:35:11', '2020-12-07 15:35:11'),
(3, 'Tủ lạnh', 'Fridge.png', '2020-11-13 15:37:06', '2020-11-29 20:22:52'),
(4, 'Máy Giặt', 'WashingMachine.png', '2020-11-13 15:37:06', '2020-11-29 20:23:10'),
(13, 'Máy Lạnh', 'AirConditioner.png', '2020-11-29 23:28:49', '2020-11-29 23:28:49'),
(14, 'Wifi', 'Internet.png', '2020-12-01 19:37:47', '2020-12-01 19:37:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD KEY `id_pttt` (`id_pttt`),
  ADD KEY `id_hd` (`id_hd`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Indexes for table `dichvuchung`
--
ALTER TABLE `dichvuchung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dieukiengiam`
--
ALTER TABLE `dieukiengiam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hieu_ung`
--
ALTER TABLE `hieu_ung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id_loai_phong`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dieu_kien_giam` (`dieu_kien_giam`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `id_loai_phong` (`id_loai_phong`);

--
-- Indexes for table `pt_thanhtoan`
--
ALTER TABLE `pt_thanhtoan`
  ADD PRIMARY KEY (`id_pttt`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`),
  ADD KEY `id_ad` (`id_ad`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id_tin`);

--
-- Indexes for table `trang_thiet_bi`
--
ALTER TABLE `trang_thiet_bi`
  ADD PRIMARY KEY (`id_ttb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dichvuchung`
--
ALTER TABLE `dichvuchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dieukiengiam`
--
ALTER TABLE `dieukiengiam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hieu_ung`
--
ALTER TABLE `hieu_ung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id_loai_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pt_thanhtoan`
--
ALTER TABLE `pt_thanhtoan`
  MODIFY `id_pttt` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id_tin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trang_thiet_bi`
--
ALTER TABLE `trang_thiet_bi`
  MODIFY `id_ttb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_2` FOREIGN KEY (`id_hd`) REFERENCES `hoa_don` (`id_hd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_3` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD CONSTRAINT `magiamgia_ibfk_1` FOREIGN KEY (`dieu_kien_giam`) REFERENCES `dieukiengiam` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`id_loai_phong`) REFERENCES `loai_phong` (`id_loai_phong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_ad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
