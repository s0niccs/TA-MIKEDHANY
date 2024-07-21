-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 04:19 PM
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
-- Database: `ethanol2`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_28_125759_create_orderrs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderrs`
--

CREATE TABLE `orderrs` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` int(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `status` enum('Unpaid','Paid') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderrs`
--

INSERT INTO `orderrs` (`id`, `nama`, `alamat`, `no_telepon`, `kota`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'lala', 'dd', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(2, 'lala', 'sss', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(3, 'lala', 'ss', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(4, 'lala', 'ss', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(5, 'lala', 'ss', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(6, 'lala', 'rungkut', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(7, 'mirojul', 'rungkut', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(8, 'lala', 'rungkut', 222, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(9, 'lele', 'kkk', 7878, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(10, 'lala', 'hkk', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(11, 'mirojul', 'hvjghg', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(12, 'mirojul', 'hvjghg', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(13, 'mirojul', 'sss', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(14, 'mirojul', 'nn', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(15, 'lala', 'mm', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(16, 'lala', 'mm', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(17, 'lala', 's', 222, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(18, 'lala', ',', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(19, 'lala', 'm', 222, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(20, 'lala', 's', 222, 'dadea', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(21, 'lala', 'cc', 0, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(22, 'lala', 'cc', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(23, 'lala', 'cc', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(24, 'mirojul', 'ktt', 8908980, 'dadea', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(25, 'mirojul', 'ktt', 8908980, 'dadea', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(26, 'mirojul', 'ktt', 8908980, 'dadea', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(27, 'mirojul', 'ktt', 8908980, 'dadea', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(28, 'nininini', 'sxsx', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(29, 'nininini', 'sxsx', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(30, 'kio', 'sscs', 222, 'ww', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(31, 'kio', 'sscs', 222, 'ww', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(32, 'rojul', 'scs', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(33, 'rojul', 'scs', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(34, 'rojul', 'scs', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(35, 'rojul', 'scs', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(36, 'lala', 'jhkj', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(37, 'lala', 'jhkj', 0, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(38, 'mirojul', 'kk', 9, 'vdvd', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(39, 'lele', 'kk', 980809, 'ww', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(40, 'lele', 'kk', 980809, 'ww', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(41, 'lalass', 'jk', 322312, 'dadea', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(42, 'rojul', 'lll', 9, 'vdvd', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(43, 'lala', 'kjbkj', 980809, 'surabaya', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(44, 'rojul', 'jnn', 322312, 'surabaya', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(45, 'koo', 'jkhj', 9, 'cc', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(46, 'mirojul', 'nk', 980809, 'cc', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(47, 'nininini', 'm', 8908980, 'vdvd', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(48, 'lala', 'cc', 9, 'dadea', 0, 'Unpaid', '2024-06-30', '2024-06-30'),
(49, 'lele', 'j', 8908980, 'dadea', 10000, 'Unpaid', '2024-06-30', '2024-06-30'),
(50, 'mirojul', 'axax', 980809, 'dadea', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(51, 'kio', 'lala', 322312, 'surabaya', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(52, 'nininini', 'ss', 9, 'dadea', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(53, 'lala', 'ssx', 980809, 'vdvd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(54, 'lala', 'xxa', 22, 'dsd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(55, 'lelecc', 'c', 322312, 'surabaya', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(56, 'lele', 'xx', 8908980, 'dadea', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(57, 'lala', 'v', 9, 'dsd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(58, 'kio', 'pandugo', 8908980, 'surabaya', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(59, 'kio', 'pandugo', 8908980, 'surabaya', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(60, 'putri', 'pandugo', 8908980, 'surabaya', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(61, 'lele', 'vss', 980809, 'ww', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(62, 'mirojul', 'dsds', 322312, 'cc', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(63, 'mirojul', 'dsds', 322312, 'cc', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(64, 'kio', 'hai', 222, 'dsd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(65, 'lala', 'kmkm', 222, 'dsd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(66, 'lala', 'mm', 322312, 'surabaya', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(67, 'mirojul', 'sss', 980809, 'dsd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(68, 'kio', 'l', 9, 'ww', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(69, 'nininini', 'M', 9, 'ww', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(70, 'lala', 'N', 980809, 'cc', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(71, 'rojul', 'S', 322312, 'dsd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(72, 'kio', 'cc', 222, 'vdvd', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(73, 'mirojul', 'k', 8908980, 'ww', 10000, 'Unpaid', '2024-07-01', '2024-07-01'),
(74, 'kio', 'ye', 9, 'vdvd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(75, 'mirojul', 'x', 980809, 'ww', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(76, 'lele', 'c', 222, 'cc', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(77, 'nininini', 'c', 322312, 'cc', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(78, 'lala', '2', 8908980, 'vdvd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(79, 'mirojul', 's', 9, 'dsd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(80, 'lala', 'c', 222, 'dsd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(81, 'bismillah', 'aamiin', 0, 'surabaya', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(82, 'mirojul', 'c', 0, 'c', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(83, 'mirojul', 'c', 980809, 'c', 0, 'Unpaid', '2024-07-02', '2024-07-02'),
(84, 'mirojul', 'c', 8908980, 'c', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(85, 'lala', 'e', 322312, 'e', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(86, 'lala', 'mm', 9, 'dsd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(87, 'mirojul', 'c', 222, 'cc', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(88, 'lala', 's', 322312, 'ww', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(89, 'lele', 'c', 980809, 'cc', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(90, 'lala', 's', 8908980, 's', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(91, 'kio', 'c', 9, 'vdvd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(92, 'kio', 'c', 9, 'vdvd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(93, 'mirojul', 'c', 222, 'dsd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(94, 'nininini', 'c', 980809, 'vdvd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(95, 'lala', 's', 8908980, 'ww', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(96, 'lala', 'x', 322312, 'cc', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(97, 'nininini', 'd', 9, 'dsd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(98, 'lala', 'c', 980809, 'vdvd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(99, 'lala', 'c', 222, 'cc', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(100, 'nininini', 'mm', 322312, 'surabaya', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(101, 'lala', 'm', 8908980, 'dsd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(102, 'lala', 'f', 9, 'r', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(103, 'lala', 's', 222, 'ww', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(104, 'mirojul', 'r', 980809, 'vdvd', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(105, 'lala', ',', 322312, 'ww', 10000, 'Unpaid', '2024-07-02', '2024-07-02'),
(106, 'nininini', 'm', 9, 'ww', 10000, 'Unpaid', '2024-07-02', '2024-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_harga` double(12,4) NOT NULL,
  `tanggal_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status` enum('Unpaid','Paid') NOT NULL,
  `lacak` enum('Dibuat','Dikemas','Dikirim','Diterima') DEFAULT 'Dibuat',
  `kurir` varchar(255) DEFAULT NULL,
  `verifikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama`, `alamat`, `kota`, `no_telepon`, `user_id`, `total_harga`, `tanggal_order`, `tanggal_update`, `bukti_pembayaran`, `status`, `lacak`, `kurir`, `verifikasi`) VALUES
(35, 'mike', 'rungkut', 'surabaya', '098878789', 13, 1700000.0000, '2024-06-13 13:37:07', '2024-07-08 15:41:34', NULL, 'Unpaid', 'Dibuat', NULL, 'diterima'),
(36, 'mirojul', 'timur', 'sidoarjo', '08908980', 13, 3400000.0000, '2024-06-19 15:30:44', '2024-07-07 17:00:00', NULL, 'Unpaid', 'Dikemas', NULL, ''),
(37, 'mirojul', 'asdsdsd', 'surabaya', '322312', 13, 3400000.0000, '2024-06-25 12:18:18', '2024-07-07 17:00:00', '1719318474.png', 'Unpaid', 'Diterima', NULL, ''),
(38, 'rojul', 'prms', 'surabaya', '980809', 13, 120000.0000, '2024-06-28 13:15:29', '2024-07-07 17:00:00', NULL, 'Unpaid', 'Diterima', NULL, ''),
(39, NULL, NULL, 'jakarta', NULL, 13, 1700000.0000, '2024-06-28 13:28:48', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(40, NULL, NULL, 'jombang', NULL, 13, 1700000.0000, '2024-06-28 13:32:12', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(41, NULL, NULL, 'mojokerto', NULL, 13, 1700000.0000, '2024-06-28 13:33:29', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(42, NULL, NULL, 'lamongan', NULL, 13, 3400000.0000, '2024-06-28 13:35:00', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(43, 'lala', 'lklkl', 'surabaya', '0000', 13, 150000.0000, '2024-06-28 13:39:32', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(44, 'lele', 'lll', 'surabaya', '0000', 13, 120000.0000, '2024-06-28 13:42:25', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(45, NULL, NULL, 'gresik', NULL, 13, 120000.0000, '2024-06-28 13:47:25', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(46, NULL, NULL, 'bandung', NULL, 13, 150000.0000, '2024-06-28 14:03:55', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(47, 'deded', NULL, 'aceh', NULL, 13, 150000.0000, '2024-06-28 14:06:09', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(48, 'gggg', NULL, 'padang', NULL, 13, 150000.0000, '2024-06-28 14:10:07', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(49, 'vavavva', NULL, 'pontianak', NULL, 13, 150000.0000, '2024-06-28 14:13:56', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(50, 'bismillah', NULL, 'padang', NULL, 13, 1700000.0000, '2024-06-28 14:17:53', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(51, 'lala', NULL, 'manado', NULL, 13, 1700000.0000, '2024-06-28 14:23:14', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(52, NULL, NULL, 'siantara', NULL, 13, 120000.0000, '2024-06-28 14:32:30', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(53, NULL, NULL, 'bintar', NULL, 13, 120000.0000, '2024-06-28 14:37:02', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(54, NULL, NULL, 'bima', NULL, 13, 120000.0000, '2024-06-28 14:38:37', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(55, 'mirojul', NULL, 'fakfak', NULL, 13, 120000.0000, '2024-06-28 14:41:20', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(56, 'kkioo', NULL, 'semarang', NULL, 13, 120000.0000, '2024-06-28 14:45:46', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(57, 'koko', NULL, 'solo', NULL, 13, 150000.0000, '2024-06-29 04:49:32', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(58, 'nininini', NULL, 'bekasi', NULL, 13, 1700000.0000, '2024-06-29 04:51:05', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(59, NULL, NULL, 'tangerang', NULL, 13, 120000.0000, '2024-06-29 05:05:51', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(60, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-29 05:12:49', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(61, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-29 05:15:31', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(62, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-29 05:24:13', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(63, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-29 05:25:58', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(64, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-29 05:26:26', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(65, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-29 05:49:47', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(66, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-29 05:56:27', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(67, NULL, NULL, NULL, NULL, 13, 300000.0000, '2024-06-29 06:02:45', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(68, NULL, NULL, NULL, NULL, 13, 150000.0000, '2024-06-30 05:00:44', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(69, NULL, NULL, NULL, NULL, 13, 150000.0000, '2024-06-30 05:01:59', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(70, 'lala', 'rff', 'surabaya', '0000', 13, 150000.0000, '2024-06-30 05:02:35', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(71, NULL, NULL, NULL, NULL, 13, 150000.0000, '2024-06-30 05:33:58', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(72, NULL, NULL, NULL, NULL, 13, 1700000.0000, '2024-06-30 05:38:51', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(73, NULL, NULL, NULL, NULL, 13, 1700000.0000, '2024-06-30 05:43:39', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(74, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-30 05:44:30', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(75, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-30 05:46:39', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(76, 'rojul', NULL, NULL, NULL, 13, 120000.0000, '2024-06-30 05:47:04', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(77, 'mirojul', NULL, NULL, NULL, 13, 150000.0000, '2024-06-30 05:48:13', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(78, NULL, NULL, NULL, NULL, 13, 1700000.0000, '2024-06-30 05:50:50', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(79, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-30 05:54:22', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(80, NULL, NULL, NULL, NULL, 13, 1700000.0000, '2024-06-30 06:02:26', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(81, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-30 06:04:25', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(82, NULL, NULL, NULL, NULL, 13, 3520000.0000, '2024-06-30 07:09:06', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(83, NULL, NULL, NULL, NULL, 13, 1700000.0000, '2024-06-30 07:47:28', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(84, 'lala', 'ss', 'surabaya', '0000', 13, 120000.0000, '2024-06-30 08:00:48', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(85, 'lele', 'www', 'surabaya', '0000', 13, 300000.0000, '2024-06-30 08:38:27', '2024-07-07 17:00:00', '1719736726.png', 'Unpaid', NULL, NULL, ''),
(86, NULL, NULL, NULL, NULL, 13, 1700000.0000, '2024-06-30 08:55:53', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(87, NULL, NULL, NULL, NULL, 13, 120000.0000, '2024-06-30 09:10:33', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(88, 'lalass', 'ss', 'surabaya', '980809', 13, 1700000.0000, '2024-06-30 09:22:55', '2024-07-07 17:00:00', NULL, 'Unpaid', NULL, NULL, ''),
(89, 'mirojul', 'purimas', 'surabaya', '08908980', 13, 150000.0000, '2024-07-08 13:25:31', '2024-07-11 06:34:00', NULL, 'Paid', 'Diterima', 'kurir1', ''),
(90, 'mike', 'rungkut', 'KAB. SIDOARJO', '98098098', 13, 1700000.0000, '2024-07-08 13:46:42', '2024-07-07 17:00:00', NULL, 'Paid', 'Dibuat', 'kurir2', ''),
(91, NULL, NULL, NULL, NULL, 13, 1700000.0000, '2024-07-10 13:33:40', '2024-07-10 13:33:40', NULL, 'Unpaid', 'Dibuat', NULL, NULL),
(92, 'slatem', 'Jalan Ketintang Selatan no 85A', 'KAB. SIDOARJO', '081252700059', 13, 1700000.0000, '2024-07-10 16:20:37', '2024-07-10 16:20:37', NULL, 'Paid', 'Dibuat', NULL, NULL),
(93, 'lala', 'e', 'surabaya', '08908980', 13, 150000.0000, '2024-07-10 16:32:09', '2024-07-10 16:32:09', NULL, 'Paid', 'Dibuat', NULL, NULL),
(94, 'rojul', 'w', 'cc', '0', 13, 1700000.0000, '2024-07-10 16:36:17', '2024-07-10 16:36:17', NULL, 'Paid', 'Dibuat', 'kurir1', NULL),
(95, 'mirojul', 'mm', 'surabaya', '222', 13, 150000.0000, '2024-07-13 16:14:04', '2024-07-13 16:14:04', NULL, 'Unpaid', 'Dibuat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('kioputri8@gmail.com', '$2y$10$cxL3EtT78cPqwH5.Zy/6COHqIxvv1HCiTz9rcZyvPFzMmAGrbu/aC', '2023-12-08 04:34:20'),
('mikedany58@gmail.com', '$2y$10$XMLUybhYkg304Y9doQg6Pe3uDRUY.2ioq88GdsKfjT/3g6Aazyzc.', '2023-12-08 04:37:07'),
('mikedhanny58@gmail.com', '$2y$10$rIDNUKcj6F5MDkr8yGI5buFwMDFZc4gLqT2NIAR/pEnTLQWETv1dm', '2023-12-08 04:36:16');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `harga` double(12,4) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_barang`, `deskripsi`, `harga`, `stok`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'FUEL Grade Ethanol', 'Adalah Produk Utama\r\nPT Energi Agro Nusantara yang berasal dari proses fermentasi, evaporasi, destilasi dan dehidrasi tetes tebu berkualitas yang memiliki Tingkat kemurnian 99,9%', 1700000.0000, 143, '1718887775.jpeg', '2023-08-23 00:36:17', '2024-06-29 23:02:26'),
(3, 'EXTRA NEUTRAL ALCOHOL', 'Adalah Produk Utama\r\nPT Energi Agro Nusantara yang berasal dari proses fermentasi, evaporasi, destilasi dan redestilasi tetes tebu berkualitas yang memiliki Tingkat kemurnian\r\n99% dan 96 %\r\nFOOD GRADE', 1700000.0000, 135, '1718888467.jpeg', '2023-10-30 04:34:42', '2024-07-10 09:36:17'),
(6, 'TECHINCAL ALCOHOL', 'PT Energi Agro Nusantara yang berasal dari proses fermentasi, evaporasi, destilasi tetes tebu berkualitas yang memiliki Tingkat kemurnian kandungan\r\nAlcohol 96%', 150000.0000, 135, '1718891786.jpeg', '2023-11-30 09:05:32', '2024-07-13 09:14:04'),
(12, 'CARYZ HAND SANITIZER', 'PT Energi Agro Nusantara yang berasal dari proses fermentasi, evaporasi, destilasi tetes tebu berkualitas yang memiliki Tingkat kemurnian kandungan\r\nAlcohol 96%\r\nNetto : 30 ml\r\nNetto : 100 ml\r\nNetto : 1 Liter\r\nNetto : 5 Liter\r\nNetto : 20 Liter', 120000.0000, 137, '1718892052.jpeg', '2024-06-19 06:19:47', '2024-06-30 02:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `rating`, `komentar`, `product_id`, `user_id`, `updated_at`, `created_at`, `order_id`) VALUES
(58, 5, NULL, 12, 13, '2024-07-10 08:06:32', '2024-07-10 08:06:32', NULL),
(59, 5, NULL, 12, 13, '2024-07-10 08:07:34', '2024-07-10 08:07:34', NULL),
(60, 4, NULL, 12, 13, '2024-07-10 08:07:45', '2024-07-10 08:07:45', NULL),
(61, 1, NULL, 12, 13, '2024-07-10 08:23:45', '2024-07-10 08:23:45', 38),
(62, 1, NULL, 12, 13, '2024-07-10 08:35:55', '2024-07-10 08:35:55', 38),
(63, 1, NULL, 12, 13, '2024-07-10 08:38:32', '2024-07-10 08:38:32', 38),
(64, 1, NULL, 12, 13, '2024-07-10 08:38:46', '2024-07-10 08:38:46', 38);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `jumlah`, `product_id`, `order_id`, `tanggal_transaksi`) VALUES
(47, 1, 1, 35, '2024-06-13 13:37:07'),
(48, 2, 1, 36, '2024-06-19 15:30:44'),
(49, 1, 3, 37, '2024-06-25 12:18:18'),
(50, 1, 1, 37, '2024-06-25 12:18:18'),
(51, 1, 12, 38, '2024-06-28 13:15:29'),
(52, 1, 1, 39, '2024-06-28 13:28:48'),
(53, 1, 1, 40, '2024-06-28 13:32:12'),
(54, 1, 1, 41, '2024-06-28 13:33:29'),
(55, 1, 1, 42, '2024-06-28 13:35:00'),
(56, 1, 3, 42, '2024-06-28 13:35:00'),
(57, 1, 6, 43, '2024-06-28 13:39:32'),
(58, 1, 12, 44, '2024-06-28 13:42:25'),
(59, 1, 12, 45, '2024-06-28 13:47:25'),
(60, 1, 6, 46, '2024-06-28 14:03:55'),
(61, 1, 6, 47, '2024-06-28 14:06:09'),
(62, 1, 6, 48, '2024-06-28 14:10:07'),
(63, 1, 3, 50, '2024-06-28 14:17:53'),
(64, 1, 3, 51, '2024-06-28 14:23:14'),
(65, 1, 12, 52, '2024-06-28 14:32:30'),
(66, 1, 12, 56, '2024-06-28 14:45:46'),
(67, 1, 6, 57, '2024-06-29 04:49:32'),
(68, 1, 1, 58, '2024-06-29 04:51:05'),
(69, 1, 12, 59, '2024-06-29 05:05:51'),
(70, 2, 6, 67, '2024-06-29 06:02:45'),
(71, 1, 6, 68, '2024-06-30 05:00:44'),
(72, 1, 6, 71, '2024-06-30 05:33:58'),
(73, 1, 3, 72, '2024-06-30 05:38:51'),
(74, 1, 12, 74, '2024-06-30 05:44:30'),
(75, 1, 12, 76, '2024-06-30 05:47:04'),
(76, 1, 6, 77, '2024-06-30 05:48:13'),
(77, 1, 3, 78, '2024-06-30 05:50:50'),
(78, 1, 12, 79, '2024-06-30 05:54:22'),
(79, 1, 1, 80, '2024-06-30 06:02:26'),
(80, 1, 12, 81, '2024-06-30 06:04:25'),
(81, 2, 3, 82, '2024-06-30 07:09:06'),
(82, 1, 12, 82, '2024-06-30 07:09:06'),
(83, 1, 3, 83, '2024-06-30 07:47:28'),
(84, 1, 12, 84, '2024-06-30 08:00:48'),
(85, 2, 6, 85, '2024-06-30 08:38:27'),
(86, 1, 3, 86, '2024-06-30 08:55:53'),
(87, 1, 12, 87, '2024-06-30 09:10:33'),
(88, 1, 3, 88, '2024-06-30 09:22:55'),
(89, 1, 6, 89, '2024-07-08 13:25:31'),
(90, 1, 3, 90, '2024-07-08 13:46:42'),
(91, 1, 3, 91, '2024-07-10 13:33:40'),
(92, 1, 3, 92, '2024-07-10 16:20:37'),
(93, 1, 6, 93, '2024-07-10 16:32:09'),
(94, 1, 3, 94, '2024-07-10 16:36:17'),
(95, 1, 6, 95, '2024-07-13 16:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '', '2024-01-07 13:36:16', '$2y$10$kXmBx6b19qSA98DIuTHCsuXC9fCyZC7yB0FaCDSbfB2a2lUQ1LPWC', 'admin', NULL, '2023-07-08 22:27:48', '2023-07-08 22:27:48'),
(2, 'kurir1', 'kurir1@gmail.com', 'aaaa', '2024-06-09 12:55:25', '$2y$10$UB1bBi3Bn6rskG.2lYpfPOUojPjtIF/ICn5XyJjRM3uad2xIeH0Aa', 'kurir1', NULL, '2024-06-09 05:55:07', '2024-06-19 08:26:21'),
(3, 'kurir2', 'kurir2@gmail.com', 'rrrf', NULL, '$2y$10$UB1bBi3Bn6rskG.2lYpfPOUojPjtIF/ICn5XyJjRM3uad2xIeH0Aa', 'kurir2', NULL, '2024-06-28 22:57:45', '2024-06-28 22:57:45'),
(4, 'kurir3', 'kurir3@gmail.com', '', '2024-07-08 14:17:38', '$2y$10$UB1bBi3Bn6rskG.2lYpfPOUojPjtIF/ICn5XyJjRM3uad2xIeH0Aa', 'kurir3', NULL, NULL, NULL),
(13, 'mike', 'mikedany23@gmail.com', 'rungkut', '2024-06-09 05:22:00', '$2y$10$f9T86l.luHMTCn.y5uqVvulKO32pFf0It.rGEmS3ZnlJj7C4q7oHq', 'user', NULL, '2024-06-09 05:00:11', '2024-06-09 05:22:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderrs`
--
ALTER TABLE `orderrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_foreign` (`product_id`),
  ADD KEY `user_id_foreign` (`user_id`) USING BTREE,
  ADD KEY `order_id_foreign` (`order_id`) USING BTREE;

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderrs`
--
ALTER TABLE `orderrs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD CONSTRAINT `product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
