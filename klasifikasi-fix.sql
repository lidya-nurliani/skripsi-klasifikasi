-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klasifikasi-fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataken`
--

CREATE TABLE `dataken` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merk_id` bigint(20) NOT NULL,
  `jenis_id` bigint(20) NOT NULL,
  `tahun_pembuatan` varchar(255) NOT NULL,
  `no_polisi` varchar(255) NOT NULL,
  `no_mesin` varchar(255) NOT NULL,
  `no_rangka` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dataken`
--

INSERT INTO `dataken` (`id`, `merk_id`, `jenis_id`, `tahun_pembuatan`, `no_polisi`, `no_mesin`, `no_rangka`, `created_at`, `updated_at`, `deleted_at`) VALUES
(105, 8, 3, '1997', 'KT 8275 B', '7K-0191496', 'MHF31KF000005766', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(106, 9, 3, '2008', 'KT 1716 BZ', 'DC15385', 'MHFM1BA3J7K039806', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(107, 10, 3, '2009', 'KT 1934 B', 'MR20-002711R', 'MHBF2CC3F9001501', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(108, 11, 3, '2009', 'KT 1254 BZ', 'G15AID193769', 'MHYGDN42V9-327577', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(109, 12, 3, '2009', 'KT 1239 BZ', 'K3 DE40281', 'MHFM1BA3J9K171192', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(110, 13, 3, '2011', 'KT 37', '4D56UCCY9756', 'MMBGYKH40CF0022825', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(111, 14, 3, '2013', 'KT 8392 BZ', '2KDS173430', 'MROFR22G1D0753856', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(112, 14, 3, '2013', 'KT 8440 BZ', '2KDS147190', 'MROFR22G2D075J431', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(113, 15, 3, '2022', 'KT 8950 M', '2GD1203703', 'MR0BB3CD6N0002976', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(114, 16, 3, '2022', 'KT 23', '4D56YBH7061', 'MK2KSWMDNNJ000510', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(115, 17, 3, '2008', 'KT 1746 MZ', 'DC67046', 'MHFM1BA3J8K071529', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(116, 18, 1, '2008', 'KT 4522 MZ', 'HB61E-1403882', 'MH1HB61128K403561', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(117, 18, 1, '2008', 'KT 4523 MZ', 'HB61E-1220372', 'MH1HB61177K219571', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(118, 18, 1, '2008', 'KT 4524 MZ', 'HB61E-1216481', 'MH1HB61137K215128', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(119, 18, 1, '2008', 'KT 4520 MZ', 'HB61E-1399422', 'MH1HB61148K408468', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(120, 18, 1, '2008', 'KT 4526 MZ', 'HB61E-1403137', 'MH1HB61118K412039', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(121, 18, 1, '2008', 'KT 4527 MZ', 'HB61E-1403971', 'MH1HB611X8K403548', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(122, 18, 1, '2008', 'KT 4528 MZ', 'HB61E-1403069', 'MH1HB61148K412018', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(123, 18, 1, '2008', 'KT 4530 MZ', 'HB61E-1409616', 'MH1HB61168K411890', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(124, 18, 1, '2008', 'KT 4531 MZ', 'HB61E-1421864', 'MH1HB61158K423609', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(125, 18, 1, '2008', 'KT 4532 MZ', 'HB61E-1411841', 'MH1HB61188K415570', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(126, 18, 1, '2008', 'KT 4533 MZ', 'HB61E-1427928', 'MH1HB61148K427523', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(127, 18, 1, '2008', 'KT 4534 MZ', 'HB61E-1393510', 'MH1HB61198K397872', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(128, 18, 1, '2008', 'KT 4536 MZ', 'HB61E-1420242', 'MH1HB61138K425987', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(129, 18, 1, '2008', 'KT 4538 MZ', 'HB61E-1197802', 'MH1HB61167K202809', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(130, 18, 1, '2008', 'KT 4539 MZ', 'HB61E-1413690', 'MH1HB61178K416662', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(131, 18, 1, '2008', 'KT 4540 MZ', 'HB61E-1420271', 'MH1HB61148K425982', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(132, 18, 1, '2008', 'KT 4541 MZ', 'HB61E-1403002', 'MH1HB61198K412080', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(133, 18, 1, '2008', 'KT 4542 MZ', 'HB61E-1403020', 'MH1HB61198K412046', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(134, 18, 1, '2008', 'KT 4543 MZ', 'HB61E-1206396', 'MH1HB61117K217895', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(135, 18, 1, '2008', 'KT 4546 MZ', 'HB61E-1407139', 'MH1HB61108K407348', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(136, 18, 1, '2008', 'KT 4548 MZ', 'HB61E-1409609', 'MH1HB61108K420021', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(137, 18, 1, '2008', 'KT 4549 MZ', 'HB61E-1410360', 'MH1HB61188K41089', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(138, 18, 1, '2008', 'KT 4550 MZ', 'HB61E-1424446', 'MH1HB61158K429149', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(139, 18, 1, '2008', 'KT 4551 MZ', 'HB61E-1403147', 'MH1HB61188K412037', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(140, 18, 1, '2008', '-', '-', '-', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(141, 19, 1, '2009', 'KT 4761 MZ', 'JBC2E-1053385', 'MH1JBC2199K052583', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(142, 19, 1, '2009', 'KT 4762 MZ', 'JBC2E-1053352', 'MH1JBC2169K052573', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(143, 19, 1, '2009', 'KT 4763 MZ', 'JBC2E-1053382', 'MH1JBC2179K052579', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(144, 19, 1, '2009', 'KT 4765 MZ', 'JBC2E-1053395', 'MH1JBC2119K052576', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(145, 19, 1, '2009', 'KT 4766 MZ', 'JBC2E-1053397', 'MH1JBC2149K052605', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(146, 19, 1, '2009', 'KT 4767 MZ', 'JBC2E-1050486', 'MH1JBC2139K047654', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(147, 19, 1, '2009', 'KT 4768 MZ', 'JBC2E-1050480', 'MH1JBC2109K0476661', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(148, 19, 1, '2009', 'KT 4769 MZ', 'JBC2E-1050459', 'MH1JBC2109K047658', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(149, 19, 1, '2009', 'KT 4770 MZ', 'JBC2E-1050436', 'MH1JBC2129K047662', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(150, 19, 1, '2009', 'KT 4771 MZ', 'JBC2E-1050474', 'MH1JBC2169K047650', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(151, 19, 1, '2009', 'KT 4773 MZ', 'JBC2E-1052855', 'MH1JBC2129K0552117', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(152, 19, 1, '2009', 'KT 4774 MZ', 'JBC2E-1050539', 'MH1JBC2149K052023', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(153, 19, 1, '2009', 'KT 4775 MZ', 'JBC2E-1050542', 'MH1JBC2129K052036', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(154, 19, 1, '2009', 'KT 4776 MZ', 'JBC2E-1052876', 'MH1JBC2139K052062', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(155, 19, 1, '2009', 'KT 4777 MZ', 'JBC2E1052868', 'MH1JBC2139K052112', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(156, 19, 1, '2009', 'KT 4778 MZ', 'JBC2E1052853', 'MH1JBC2149K052118', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(157, 19, 1, '2009', 'KT 4779 MZ', 'JBC2E1052859', 'MH1JBC2119K052108', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(158, 19, 1, '2009', 'KT 4781 MZ', 'JBC2E1050543', 'MH1JBC2189K052042', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(159, 19, 1, '2009', 'KT 4782 MZ', 'JBC2E1052891', 'MH1JBC2169K052055', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(160, 19, 1, '2009', 'KT 4783 MZ', 'JBC2E1052896', 'MH1JBC2179K052078', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(161, 19, 1, '2009', 'KT 4784 MZ', 'JBC2E1052871', 'MH1JBC2149K052104', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(162, 19, 1, '2009', 'KT 4785 MZ', 'JBC2E1052913', 'MH1JBC2179K052064', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(163, 19, 1, '2009', 'KT 4793 MZ', 'JBC2E1052925', 'MH1JBC2189KO52090', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(164, 19, 1, '2009', 'KT 4794 MZ', 'JBC2E1052933', 'MH1JBC2129K052084', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(165, 19, 1, '2009', 'KT 4798 MZ', 'JBC2E1052901', 'MH1JBC2129KO52067', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(166, 19, 1, '2009', 'KT 4799 MZ', 'JBC2E1050536', 'MH1JBC2149K052037', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(167, 19, 1, '2009', 'KT 4800 MZ', 'JBC2E1052887', 'MH1JBC2159K052046', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(168, 19, 1, '2009', 'KT 4801 MZ', 'JBC2E1052866', 'MH1JBC21X9K052110', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(169, 19, 1, '2009', 'KT 4802 MZ', 'JBC2E01052864', 'MH1JBC2169K052105', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(170, 19, 1, '2009', 'KT 4803 MZ', 'JBC2E1050415', 'MH1JBC2139KO47671', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(171, 19, 1, '2009', 'KT 4804 MZ', 'JBC2E1050495', 'MH1JBC2119KO47584', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(172, 19, 1, '2009', 'KT 4805 MZ', 'JBC2E1052607', 'MH1JBC21X9KO47960', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(173, 19, 1, '2009', 'KT 4813 MZ', 'JBC2E1049967', 'MH1JBC2159KO47350', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(174, 19, 1, '2009', 'KT 4814 MZ', 'JBC2E1050531', 'MH1JBC2119KO52030', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(175, 20, 1, '2009', 'KT 4810 MZ', 'JBA1E1089528', 'MH1JBA1129KO89948', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(176, 20, 1, '2009', 'KT 4811 MZ', 'JBA1E1089529', 'MH1JBA1129KO89951', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(177, 20, 1, '2009', 'KT 4812 MZ', 'JBA1E1089379', 'MH1JBA1109KO89768', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(178, 21, 1, '2009', 'KT 2310 XB', 'EX250YEA25601', '-', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(179, 22, 1, '2011', 'KT 3259 M', 'JBO1E1161412', 'MH1JBO118BK162921', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(180, 22, 1, '2009', 'KT 3260 M', 'JBO1E1160274', 'MH1JB0111BK161724', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(181, 22, 1, '2009', 'KT 3261 M', 'JBO1E1161446', 'MH1JBO118BK162954', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(182, 22, 1, '2009', 'KT 6624 BZ', 'JBO1E1160641', 'MH1JBO114BK162253', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(183, 22, 1, '2011', 'KT 6202 BZ', 'JBO1E1159921', 'MH1JBO110BK161567', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(184, 22, 1, '2011', 'KT 3264 M', 'JBO1E1162929', 'MH1JBO117BK164577', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(185, 22, 1, '2011', 'KT 3265 M', 'JBO1E1161911', 'MH1JBO115BK163492', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(186, 22, 1, '2011', 'KT 3266 M', 'JBO1E1163320', 'MH1JBO11XBK164976', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(187, 23, 1, '2011', 'KT 6190 BZ', 'JBA1E1127216', 'MH1JBA118BK128953', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(188, 23, 1, '2011', 'KT 6199 BZ', 'JBA1E1126931', 'MH1JBA114BK128688', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(189, 23, 1, '2011', 'KT 3255 M', 'JBA1E1124547', 'MH1JBA119BK125902', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(190, 23, 1, '2011', 'KT 3256 M', 'JBA1E1126723', 'MH1JBA118BK128323', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(191, 23, 1, '2011', 'KT 3257 M', 'JBA1E1126654', 'MH1JBA114BK128352', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(192, 23, 1, '2011', 'KT 3258 M', 'JBA1E1124998', 'MH1JBA114BK', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(193, 24, 1, '2011', 'KT 6191 BZ', 'KC31E1080586', 'MH1KC3178BK080634', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(194, 25, 1, '2011', 'KT 6204 BZ', 'CF71E1105664', 'MH1JF7110BK106257', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(195, 25, 1, '2011', 'KT 3251 M', 'JF71E1099924', 'MH11JF7110BK100426', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(196, 26, 1, '2012', 'KT 3254 MZ', 'LX150CEB74859', 'MH4LX150CCKP48606', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(197, 26, 1, '2012', 'KT 3253 MZ', 'LX150CEP72408', 'MH4LX150CCKP46671', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(198, 26, 1, '2012', 'KT 3252 MZ', 'LX150CEP72418', 'MH4LX150CCHP46198', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(199, 26, 1, '2012', 'KT 3251 MZ', 'LX150CEP73036', 'MH4LX150CCKP47318', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(200, 26, 1, '2012', 'KT 3250 MZ', 'LX150CCP72386', 'MH4LX150CCKP46856', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(201, 27, 1, '2013', '-', '-', '-', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(202, 28, 1, '2013', '-', '-', '-', '2023-08-15 04:39:30', '2023-08-15 04:39:30', NULL),
(203, 28, 1, '2019', 'KT 2426 NE', 'lidyaa', '123', '2023-08-15 06:47:04', '2023-08-15 06:47:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` bigint(20) NOT NULL,
  `jenis_kendaraan` varchar(35) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis_kendaraan`, `created_at`, `updated_at`) VALUES
(1, 'Roda 2', '2023-08-12 10:21:16', '2023-08-12 10:21:16'),
(3, 'Roda 4', '2023-08-12 11:51:28', '2023-08-12 11:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dataken_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(255) NOT NULL,
  `tahun_pembuatan` varchar(255) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `komponen_mesin` varchar(255) NOT NULL,
  `ban` varchar(255) NOT NULL,
  `lampu_utama` varchar(255) NOT NULL,
  `kondisi_rem` varchar(255) NOT NULL,
  `kelayakan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `dataken_id`, `jenis_kendaraan`, `tahun_pembuatan`, `bahan_bakar`, `komponen_mesin`, `ban`, `lampu_utama`, `kondisi_rem`, `kelayakan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 201, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-08-15 05:59:51', '2023-08-15 05:59:51', NULL),
(7, 196, 'Roda 2', '>10 tahun', 'Pertamax', 'Sedang', 'Baik', 'Baik', 'Sedang', 'Layak', '2023-08-15 06:02:13', '2023-08-15 06:02:13', NULL),
(8, 194, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Sedang', 'Sedang', 'Buruk', 'Tidak Layak', '2023-08-15 06:02:53', '2023-08-15 06:02:53', NULL),
(9, 202, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-08-15 06:04:29', '2023-08-15 06:28:02', NULL),
(10, 187, 'Roda 2', '>10 tahun', 'Pertamax', 'Buruk', 'Baik', 'Sedang', 'Baik', 'Tidak Layak', '2023-08-15 06:09:09', '2023-08-15 06:09:09', NULL),
(11, 179, 'Roda 2', '>10 tahun', 'Pertamax', 'Sedang', 'Baik', 'Baik', 'Baik', 'Layak', '2023-08-15 06:10:49', '2023-08-15 06:10:49', NULL),
(12, 143, 'Roda 2', '<10 tahun', 'Pertamax', 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'Tidak Layak', '2023-08-15 06:30:11', '2023-08-15 06:30:11', NULL),
(13, 116, 'Roda 2', '<10 tahun', 'Pertamax', 'Sedang', 'Sedang', 'Baik', 'Sedang', 'Layak', '2023-08-15 06:31:03', '2023-08-15 06:31:03', NULL),
(14, 117, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Baik', 'Sedang', 'Sedang', 'Layak', '2023-08-15 06:32:05', '2023-08-15 06:32:05', NULL),
(15, 114, 'Roda 4', '>10 tahun', 'Dexlite', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-08-15 06:33:01', '2023-08-15 06:33:01', NULL),
(16, 115, 'Roda 4', '<10 tahun', 'Pertamax', 'Baik', 'Baik', 'Sedang', 'Sedang', 'Layak', '2023-08-15 06:33:50', '2023-08-15 06:33:50', NULL),
(17, 111, 'Roda 4', '>10 tahun', 'Dexlite', 'Sedang', 'Baik', 'Baik', 'Sedang', 'Layak', '2023-08-15 06:35:24', '2023-08-15 06:35:24', NULL),
(18, 144, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Buruk', 'Buruk', 'Sedang', 'Tidak Layak', '2023-08-15 06:36:27', '2023-08-15 06:36:27', NULL),
(19, 189, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Sedang', 'Baik', 'Layak', '2023-08-15 06:37:23', '2023-08-15 06:37:23', NULL),
(20, 197, 'Roda 2', '>10 tahun', 'Pertamax', 'Buruk', 'Buruk', 'Baik', 'Sedang', 'Tidak Layak', '2023-08-15 06:38:24', '2023-08-15 06:38:24', NULL),
(21, 122, 'Roda 2', '<10 tahun', 'Pertamax', 'Buruk', 'Baik', 'Sedang', 'Sedang', 'Tidak Layak', '2023-08-15 06:39:03', '2023-08-15 06:39:03', NULL),
(22, 145, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-08-15 06:39:47', '2023-08-15 06:39:47', NULL),
(23, 179, 'Roda 2', '>10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Baik', 'Layak', '2023-08-15 06:42:31', '2023-08-15 06:42:31', NULL),
(24, 189, 'Roda 2', '>10 tahun', 'Pertamax', 'Sedang', 'Baik', 'Baik', 'Baik', 'Layak', '2023-08-15 06:43:24', '2023-08-15 06:43:24', NULL),
(25, 182, 'Roda 2', '<10 tahun', 'Pertamax', 'Baik', 'Baik', 'Baik', 'Sedang', 'Layak', '2023-08-15 06:43:59', '2023-08-15 06:43:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` bigint(20) NOT NULL,
  `merk` varchar(35) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `merk`, `created_at`, `updated_at`) VALUES
(8, 'toyota kijang pick up', '2023-08-15 03:59:09', '2023-08-15 03:59:09'),
(9, 'toyota new avanza/1300 CC', '2023-08-15 03:59:38', '2023-08-15 03:59:38'),
(10, 'nissan X trail', '2023-08-15 03:59:57', '2023-08-15 03:59:57'),
(11, 'suzuki APV 6x', '2023-08-15 04:00:13', '2023-08-15 04:00:13'),
(12, 'toyota avanza 1.3 g', '2023-08-15 04:00:28', '2023-08-15 04:00:28'),
(13, 'mitsubishi / pajero sport', '2023-08-15 04:00:51', '2023-08-15 04:00:51'),
(14, 'toyota hilux tipe G double cabin', '2023-08-15 04:01:13', '2023-08-15 04:01:13'),
(15, 'hilux double cabin 2.4', '2023-08-15 04:01:29', '2023-08-15 04:01:29'),
(16, 'Mitsubishi pajero sport 2.5 glx', '2023-08-15 04:01:52', '2023-08-15 04:01:52'),
(17, 'toyota avanza 1300', '2023-08-15 04:02:08', '2023-08-15 04:02:08'),
(18, 'honda revo / bebek 110 cc', '2023-08-15 04:02:29', '2023-08-15 04:02:29'),
(19, 'honda NF', '2023-08-15 04:02:46', '2023-08-15 04:02:46'),
(20, 'honda C12', '2023-08-15 04:03:02', '2023-08-15 04:03:02'),
(21, 'Kawasaki Ninja 250R', '2023-08-15 04:03:20', '2023-08-15 04:03:20'),
(22, 'Honda supra X 125', '2023-08-15 04:03:55', '2023-08-15 04:03:55'),
(23, 'honda CS 1', '2023-08-15 04:04:07', '2023-08-15 04:04:07'),
(24, 'Honda new Megapro CW', '2023-08-15 04:04:28', '2023-08-15 04:04:28'),
(25, 'Vario Techno CBS', '2023-08-15 04:04:42', '2023-08-15 04:04:42'),
(26, 'kawasaki LX 150 c', '2023-08-15 04:05:02', '2023-08-15 04:05:02'),
(27, 'honda megapro', '2023-08-15 04:05:15', '2023-08-15 04:05:15'),
(28, 'honda', '2023-08-15 04:05:28', '2023-08-15 04:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_14_114938_create_dataken_table', 1),
(6, '2023_05_14_115512_create_klasifikasi_table', 1),
(7, '2023_08_06_040850_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lidyanurliani27@gmail.com', '$2y$10$hYtIV9.1Y8SO9iXguqaumO3znK42JMVTx0cNi1wt7vB13gtqixitq', '2023-08-15 07:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', NULL, NULL),
(2, 'user', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'lidya', 'lidyanurliani27@gmail.com', NULL, '$2y$10$FDPMlXPsx03xBqTHkHLU/ux/d9orEILfGZyVg9T1FSFLTki1at/MW', NULL, '2023-08-08 08:18:08', '2023-08-12 15:24:30'),
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$IX5/VCs4G2kE.w4.FvWWOOx0ix6huwhAO1JtINF0.Npr8dtAiAfSC', 'bN7T30FdDEYUTHSA64uA5FBOariDlfGwMvVrOZwd0Qz9l6JEqa4x14D7fzbT', '2023-08-08 08:20:07', '2023-08-15 02:05:27'),
(5, 'klasifikasi', 'klasifikasiapk@gmail.com', NULL, '$2y$10$33tABk07ej3aHmlV3j4YuuTNKVZi88.wwG1w1hoaB75nM2U0SYP/6', '2a2kPnj1q3wwryZzRLg7pO4TJ1z9HFN6LKfrHozMKsOMs1BFi2vbFn5rHpAr', '2023-08-08 19:17:32', '2023-08-08 19:51:02'),
(6, 'Kasubbag', 'Kasubbagkeu@gmail.com', NULL, '$2y$10$gQ9T/KzzB3xJ5oZMTOVLzuUFUj1Tg5LgDHs42EMSxqzuQuC0FSlp2', NULL, '2023-08-11 08:05:55', '2023-08-15 06:57:11'),
(7, 'nknkj', 'fxfdfs@gmail.com', NULL, '$2y$10$MRuIQykXelJaijEBMDE0suoOSm/9HjMaKPuLjKKSHCo7fmTEimtF2', NULL, '2023-08-15 01:39:43', '2023-08-15 01:39:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataken`
--
ALTER TABLE `dataken`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merk_id` (`merk_id`),
  ADD KEY `jenis_id` (`jenis_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klasifikasi_dataken_id_foreign` (`dataken_id`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD CONSTRAINT `klasifikasi_dataken_id_foreign` FOREIGN KEY (`dataken_id`) REFERENCES `dataken` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
