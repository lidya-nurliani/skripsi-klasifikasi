-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 05:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_klasifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataken`
--

CREATE TABLE `dataken` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merk_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembuatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_mesin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rangka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dataken`
--

INSERT INTO `dataken` (`id`, `merk_kendaraan`, `jenis_kendaraan`, `tahun_pembuatan`, `no_polisi`, `no_mesin`, `no_rangka`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'toyota kijang pick up', 'Roda 4', '1997', 'KT 8275 B', '7K-0191496', 'MHF31KF000005766', '2023-06-15 05:41:48', '2023-06-15 05:41:48', NULL),
(3, 'toyota new avanza/1300 CC', 'Roda 4', '2008', 'KT 1716 BZ', 'DC15385', 'MHFM1BA3J7K039806', '2023-06-15 05:43:55', '2023-06-15 05:43:55', NULL),
(4, 'nissan X trail', 'Roda 4', '2009', 'KT 1934 B', 'MR20-002711R', 'MHBF2CC3F9001501', '2023-06-15 05:45:16', '2023-06-15 05:45:16', NULL),
(5, 'suzuki APV 6x', 'Roda 4', '2009', 'KT 1254 BZ', 'G15AID193769', 'MHYGDN42V9-327577', '2023-06-15 05:46:27', '2023-06-15 05:46:27', NULL),
(6, 'toyota avanza 1.3 g', 'Roda 4', '2009', 'KT 1239 BZ', 'K3 DE40281', 'MHFM1BA3J9K171192', '2023-06-15 05:50:43', '2023-06-15 05:50:43', NULL),
(7, 'mitsubishi / pajero sport', 'Roda 4', '2011', 'KT 37', '4D56UCCY9756', 'MMBGYKH40CF0022825', '2023-06-15 05:52:49', '2023-06-15 05:52:49', NULL),
(8, 'toyota hilux tipe G double cabin', 'Roda 4', '2013', 'KT 8392 BZ', '2KDS173430', 'MROFR22G1D0753856', '2023-06-15 05:59:51', '2023-06-15 05:59:51', NULL),
(9, 'toyota hilux tipe G double cabin', 'Roda 4', '2013', 'KT 8440 BZ', '2KDS147190', 'MROFR22G2D075J431', '2023-06-15 06:01:42', '2023-06-15 06:01:42', NULL),
(10, 'hilux double cabin 2.4', 'Roda 4', '2022', 'KT 8950 M', '2GD1203703', 'MR0BB3CD6N0002976', '2023-06-15 06:04:30', '2023-06-15 06:04:30', NULL),
(11, 'Mitsubishi Pajero Sport 2.5 glx', 'Roda 4', '2022', 'KT 23', '4D56YBH7061', 'MK2KSWMDNNJ000510', '2023-06-15 06:06:00', '2023-06-15 06:06:00', NULL),
(12, 'toyota avanza 1300', 'Roda 4', '2008', 'KT 1746 MZ', 'DC67046', 'MHFM1BA3J8K071529', '2023-06-15 06:07:13', '2023-06-15 06:07:13', NULL),
(13, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4522 MZ', 'HB61E-1403882', 'MH1HB61128K403561', '2023-06-15 06:17:10', '2023-06-15 06:17:10', NULL),
(15, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4523 MZ', 'HB61E-1220372', 'MH1HB61177K219571', '2023-06-15 06:18:17', '2023-06-15 06:40:32', NULL),
(16, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4524 MZ', 'HB61E-1216481', 'MH1HB61137K215128', '2023-06-15 06:33:18', '2023-06-15 06:41:03', NULL),
(17, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4520 MZ', 'HB61E-1399422', 'MH1HB61148K408468', '2023-06-15 06:35:09', '2023-06-15 06:35:09', NULL),
(18, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4526 MZ', 'HB61E-1403137', 'MH1HB61118K412039', '2023-06-15 06:39:19', '2023-06-15 06:39:19', NULL),
(19, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4527 MZ', 'HB61E-1403971', 'MH1HB611X8K403548', '2023-06-15 06:47:59', '2023-06-15 06:47:59', NULL),
(20, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4528 MZ', 'HB61E-1403069', 'MH1HB61148K412018', '2023-06-15 06:49:42', '2023-06-15 06:49:42', NULL),
(21, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4530 MZ', 'HB61E-1409616', 'MH1HB61168K411890', '2023-06-15 06:53:35', '2023-06-15 06:53:35', NULL),
(22, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4531 MZ', 'HB61E-1421864', 'MH1HB61158K423609', '2023-06-15 06:54:52', '2023-06-15 06:54:52', NULL),
(23, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4532 MZ', 'HB61E-1411841', 'MH1HB61188K415570', '2023-06-15 06:55:56', '2023-06-15 06:55:56', NULL),
(24, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4533 MZ', 'HB61E-1427928', 'MH1HB61148K427523', '2023-06-15 06:57:15', '2023-06-15 06:57:15', NULL),
(25, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4534 MZ', 'HB61E-1393510', 'MH1HB61198K397872', '2023-06-15 06:58:51', '2023-06-15 06:58:51', NULL),
(26, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4536 MZ', 'HB61E-1420242', 'MH1HB61138K425987', '2023-06-15 07:00:51', '2023-06-15 07:00:51', NULL),
(27, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4538 MZ', 'HB61E-1197802', 'MH1HB61167K202809', '2023-06-15 07:01:53', '2023-06-15 07:01:53', NULL),
(28, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4539 MZ', 'HB61E-1413690', 'MH1HB61178K416662', '2023-06-15 07:03:15', '2023-06-15 07:03:15', NULL),
(29, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4540 MZ', 'HB61E-1420271', 'MH1HB61148K425982', '2023-06-15 07:08:56', '2023-06-15 07:08:56', NULL),
(30, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4541 MZ', 'HB61E-1403002', 'MH1HB61198K412080', '2023-06-15 07:09:51', '2023-06-15 07:09:51', NULL),
(31, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4542 MZ', 'HB61E-1403020', 'MH1HB61198K412046', '2023-06-15 07:11:17', '2023-06-15 07:11:17', NULL),
(32, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4543 MZ', 'HB61E-1206396', 'MH1HB61117K217895', '2023-06-15 07:12:36', '2023-06-15 07:12:36', NULL),
(33, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4546 MZ', 'HB61E-1407139', 'MH1HB61108K407348', '2023-06-15 07:14:34', '2023-06-15 07:14:34', NULL),
(34, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4548 MZ', 'HB61E-1409609', 'MH1HB61108K420021', '2023-06-15 07:15:42', '2023-06-15 07:15:42', NULL),
(35, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4549 MZ', 'HB61E-1410360', 'MH1HB61188K41089', '2023-06-15 07:16:44', '2023-06-15 07:16:44', NULL),
(36, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4550 MZ', 'HB61E-1424446', 'MH1HB61158K429149', '2023-06-15 07:18:12', '2023-06-15 07:18:12', NULL),
(37, 'honda revo / bebek 110 cc', 'Roda 2', '2008', 'KT 4551 MZ', 'HB61E-1403147', 'MH1HB61188K412037', '2023-06-15 07:19:32', '2023-06-15 07:19:32', NULL),
(38, 'honda revo / bebek 110 cc', 'Roda 2', '2008', '-', '-', '-', '2023-06-15 07:20:17', '2023-06-15 07:20:17', NULL),
(39, 'honda NF', 'Roda 2', '2009', 'KT 4761 MZ', 'JBC2E-1053385', 'MH1JBC2199K052583', '2023-06-15 07:21:47', '2023-06-15 07:21:47', NULL),
(40, 'honda NF', 'Roda 2', '2009', 'KT 4762 MZ', 'JBC2E-1053352', 'MH1JBC2169K052573', '2023-06-15 07:24:36', '2023-06-15 07:24:36', NULL),
(41, 'honda NF', 'Roda 2', '2009', 'KT 4763 MZ', 'JBC2E-1053382', 'MH1JBC2179K052579', '2023-06-15 07:25:49', '2023-06-15 07:25:49', NULL),
(42, 'honda NF', 'Roda 2', '2009', 'KT 4765 MZ', 'JBC2E-1053395', 'MH1JBC2119K052576', '2023-06-15 07:29:01', '2023-06-15 07:29:01', NULL),
(43, 'honda NF', 'Roda 2', '2009', 'KT 4766 MZ', 'JBC2E-1053397', 'MH1JBC2149K052605', '2023-06-15 07:30:44', '2023-06-15 07:30:44', NULL),
(44, 'honda NF', 'Roda 2', '2009', 'KT 4767 MZ', 'JBC2E-1050486', 'MH1JBC2139K047654', '2023-06-15 07:31:45', '2023-06-15 07:31:45', NULL),
(45, 'honda NF', 'Roda 2', '2009', 'KT 4768 MZ', 'JBC2E-1050480', 'MH1JBC2109K0476661', '2023-06-15 07:34:49', '2023-06-15 07:34:49', NULL),
(46, 'honda NF', 'Roda 2', '2009', 'KT 4769 MZ', 'JBC2E-1050459', 'MH1JBC2109K047658', '2023-06-15 07:35:47', '2023-06-15 07:35:47', NULL),
(47, 'honda NF', 'Roda 2', '2009', 'KT 4770 MZ', 'JBC2E-1050436', 'MH1JBC2129K047662', '2023-06-15 07:36:53', '2023-06-15 07:36:53', NULL),
(48, 'honda NF', 'Roda 2', '2009', 'KT 4771 MZ', 'JBC2E-1050474', 'MH1JBC2169K047650', '2023-06-15 07:38:22', '2023-06-15 07:38:22', NULL),
(49, 'honda NF', 'Roda 2', '2009', 'KT 4773 MZ', 'JBC2E-1052855', 'MH1JBC2129K0552117', '2023-06-15 07:39:17', '2023-06-15 07:39:17', NULL),
(50, 'honda NF', 'Roda 2', '2009', 'KT 4774 MZ', 'JBC2E-1050539', 'MH1JBC2149K052023', '2023-06-15 07:41:43', '2023-06-15 07:41:43', NULL),
(51, 'honda NF', 'Roda 2', '2009', 'KT 4775 MZ', 'JBC2E-1050542', 'MH1JBC2129K052036', '2023-06-15 07:42:40', '2023-06-15 07:42:40', NULL),
(52, 'honda NF', 'Roda 2', '2009', 'KT 4776 MZ', 'JBC2E-1052876', 'MH1JBC2139K052062', '2023-06-15 07:43:38', '2023-06-15 07:43:38', NULL),
(53, 'Honda megapro', 'Roda 2', '2013', 'KT. 1231 MZ', 'A23ASDQWJHK45', 'JFKJSDHS83298', '2023-06-19 23:30:38', '2023-06-19 23:30:38', NULL),
(54, 'Kawasaki LX150 C', 'Roda 2', '2012', 'KT. 1223 mz', '2JKLYE12WE2J', '2LKUKIW23EW', '2023-06-19 23:31:39', '2023-06-19 23:31:39', NULL),
(55, 'Vario Techno CBS', 'Roda 2', '2011', 'KT. 1441 MZ', 'KBJ23H2IO3P1', 'ASD23HF9H', '2023-06-19 23:35:20', '2023-06-19 23:35:20', NULL),
(56, 'Honda CS 1', 'Roda 2', '2011', 'KT. 6121 MZ', 'PA2SD8A9S8SW', 'KLAI92HS28H', '2023-06-19 23:36:35', '2023-06-19 23:36:35', NULL),
(57, 'Honda Supra x 125', 'Roda 2', '2011', 'KT. 4213 MZ', 'SI28ND20NKL3', 'KJS92H2GI1GS', '2023-06-19 23:37:30', '2023-06-19 23:37:30', NULL),
(58, 'Honda CS 1', 'Roda 2', '2011', 'KT. 3212 MZ', 'KA92JF4P3U29D', 'JK22H92320', '2023-06-19 23:39:34', '2023-06-19 23:39:34', NULL),
(59, 'Kawasaki LX150 C', 'Roda 2', '2012', 'KT. 2213 MZ', 'JK3UJ3K2905J', 'JKL29HJ32L', '2023-06-19 23:40:50', '2023-06-19 23:40:50', NULL),
(60, 'Honda Supra x 125', 'Roda 2', '2011', 'KT. 2387 BZ', 'K2WIAA02IO32', 'AL2KOJ3KJHL', '2023-06-19 23:42:51', '2023-06-19 23:42:51', NULL),
(61, 'Honda CS 1', 'Roda 2', '2011', 'KT. 4423 MZ', 'JK8LK9JKH9L', 'JDSI7GGU83', '2023-06-19 23:45:00', '2023-06-19 23:45:00', NULL),
(62, 'Honda Supra x 125', 'Roda 2', '2011', 'KT. 1238 MZ', 'K2H3HJG8P7', 'SDJK979', '2023-06-19 23:46:03', '2023-06-19 23:46:03', NULL);

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
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dataken_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembuatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komponen_mesin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampu_utama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi_rem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelayakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `dataken_id`, `jenis_kendaraan`, `tahun_pembuatan`, `bahan_bakar`, `komponen_mesin`, `ban`, `lampu_utama`, `kondisi_rem`, `kelayakan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 53, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-06-20 00:23:57', '2023-06-20 00:23:57', NULL),
(3, 54, 'Roda 2', '>10 tahun', 'Pertamax', 'Sedang', 'Baik', 'Baik', 'Sedang', 'Layak', '2023-06-20 00:27:34', '2023-06-20 00:27:34', NULL),
(4, 55, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Sedang', 'Sedang', 'Buruk', 'Tidak Layak', '2023-06-20 01:24:07', '2023-06-20 01:24:07', NULL),
(5, 56, 'Roda 2', '>10 tahun', 'Pertamax', 'Buruk', 'Baik', 'Sedang', 'Baik', 'Tidak Layak', '2023-06-20 01:24:49', '2023-06-20 01:24:49', NULL),
(6, 57, 'Roda 2', '>10 tahun', 'Pertamax', 'Sedang', 'Baik', 'Baik', 'Baik', 'Layak', '2023-06-20 01:25:23', '2023-06-20 01:25:23', NULL),
(7, 39, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-06-20 01:26:05', '2023-06-20 01:26:05', NULL),
(8, 42, 'Roda 2', '<10 tahun', 'Pertamax', 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'Tidak Layak', '2023-06-20 01:27:28', '2023-06-20 01:27:28', NULL),
(9, 13, 'Roda 2', '<10 tahun', 'Pertamax', 'Sedang', 'Sedang', 'Baik', 'Sedang', 'Layak', '2023-06-20 01:28:02', '2023-06-20 01:28:02', NULL),
(10, 15, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Baik', 'Sedang', 'Sedang', 'Layak', '2023-06-20 01:28:23', '2023-06-20 01:28:23', NULL),
(11, 11, 'Roda 4', '>10 tahun', 'Dexlite', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-06-20 01:28:50', '2023-06-20 01:28:50', NULL),
(12, 3, 'Roda 4', '<10 tahun', 'Pertamax', 'Baik', 'Sedang', 'Sedang', 'Sedang', 'Layak', '2023-06-20 01:29:36', '2023-06-20 01:29:36', NULL),
(13, 8, 'Roda 4', '>10 tahun', 'Dexlite', 'Sedang', 'Baik', 'Baik', 'Sedang', 'Layak', '2023-06-20 01:30:10', '2023-06-20 01:30:10', NULL),
(14, 41, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Buruk', 'Buruk', 'Sedang', 'Tidak Layak', '2023-06-20 01:30:40', '2023-06-20 01:30:40', NULL),
(15, 58, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Sedang', 'Baik', 'Layak', '2023-06-20 01:31:18', '2023-06-20 01:31:18', NULL),
(16, 59, 'Roda 2', '>10 tahun', 'Pertamax', 'Buruk', 'Buruk', 'Baik', 'Sedang', 'Tidak Layak', '2023-06-20 01:31:57', '2023-06-20 01:31:57', NULL),
(17, 22, 'Roda 2', '<10 tahun', 'Pertamax', 'Buruk', 'Baik', 'Sedang', 'Sedang', 'Tidak Layak', '2023-06-20 01:32:34', '2023-06-20 01:32:34', NULL),
(18, 47, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-06-20 01:33:17', '2023-06-20 01:33:17', NULL),
(19, 60, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-06-20 01:33:40', '2023-06-20 01:33:40', NULL),
(20, 61, 'Roda 2', '>10 tahun', 'Pertamax', 'Sedang', 'Baik', 'Baik', 'Baik', 'Layak', '2023-06-20 01:34:03', '2023-06-20 01:34:03', NULL),
(21, 62, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Sedang', 'Layak', '2023-06-20 01:34:19', '2023-06-20 01:34:19', NULL);

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
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2023_05_14_114938_create_dataken_table', 1),
(35, '2023_05_14_115512_create_klasifikasi_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lidya nurliani', 'lidyanurliani27@gmail.com', NULL, '$2y$10$a1h8.Hu0t3ww9HB6U10AcOUSOaLZXdHxtp1ddADFogTDxP6.4R1zG', NULL, '2023-06-08 09:05:23', '2023-06-08 09:05:23'),
(2, 'admin', 'admin@mail.com', NULL, '$2y$10$1SxrSNzyvGO29d4wx3veGed/P2Qva3FOseeLayMikszqz1OmfAZZe', NULL, '2023-06-19 19:19:21', '2023-06-19 19:19:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataken`
--
ALTER TABLE `dataken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klasifikasi_dataken_id_foreign` (`dataken_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataken`
--
ALTER TABLE `dataken`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD CONSTRAINT `klasifikasi_dataken_id_foreign` FOREIGN KEY (`dataken_id`) REFERENCES `dataken` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
