-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maha-e-seva`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_users_cert`
--

CREATE TABLE `all_users_cert` (
  `id` int(255) NOT NULL,
  `user_doc_id` int(255) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `mother_name` varchar(45) NOT NULL,
  `place_of_birth` varchar(45) NOT NULL,
  `hospital_name` varchar(45) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `state_val` int(45) NOT NULL,
  `city_value` int(45) NOT NULL,
  `gender` int(10) NOT NULL,
  `usertype` int(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `updated_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `salutation_val` int(45) NOT NULL,
  `salutation_txt` varchar(10) NOT NULL,
  `occupation` int(45) NOT NULL,
  `otp` varchar(5) NOT NULL,
  `registration_option` int(2) NOT NULL,
  `district` varchar(45) NOT NULL,
  `adhar_card_num` varchar(12) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `temporary_addr` varchar(255) NOT NULL,
  `file_pan_card` varchar(100) NOT NULL,
  `file_passport` varchar(100) NOT NULL,
  `file_rsby_card` varchar(100) NOT NULL,
  `file_adhar_card` varchar(100) NOT NULL,
  `file_voter_id_card` varchar(100) NOT NULL,
  `file_driving_license` varchar(100) NOT NULL,
  `file_pan_card_addr` varchar(255) NOT NULL,
  `file_passport_addr` varchar(255) NOT NULL,
  `file_adhar_card_addr` varchar(255) NOT NULL,
  `file_voter_id_card_addr` varchar(255) NOT NULL,
  `file_driving_license_addr` varchar(255) NOT NULL,
  `yourPhoto` varchar(255) NOT NULL,
  `file_rsby_card_addr` varchar(255) NOT NULL,
  `permenant_addr` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `building` varchar(45) NOT NULL,
  `landmark` varchar(45) NOT NULL,
  `village` varchar(45) NOT NULL,
  `pincode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_users_cert`
--

INSERT INTO `all_users_cert` (`id`, `user_doc_id`, `firstname`, `middlename`, `lastname`, `mother_name`, `place_of_birth`, `hospital_name`, `dob`, `age`, `state_val`, `city_value`, `gender`, `usertype`, `email`, `phoneNum`, `password`, `id_proof`, `updated_on`, `salutation_val`, `salutation_txt`, `occupation`, `otp`, `registration_option`, `district`, `adhar_card_num`, `nationality`, `temporary_addr`, `file_pan_card`, `file_passport`, `file_rsby_card`, `file_adhar_card`, `file_voter_id_card`, `file_driving_license`, `file_pan_card_addr`, `file_passport_addr`, `file_adhar_card_addr`, `file_voter_id_card_addr`, `file_driving_license_addr`, `yourPhoto`, `file_rsby_card_addr`, `permenant_addr`, `section`, `building`, `landmark`, `village`, `pincode`) VALUES
(30, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 09:24:25.690254', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 09:24:44.523772', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 09:33:42.415606', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:25:14.531008', 0, '', 0, '', 0, '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 6, 'xghdfg', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-08', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 10:26:13.616438', 0, '', 2, '', 0, '2', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', '', 'KATAI', '321', '212', '2121', '1', '401305'),
(35, 6, 'xghdfg', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-08', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 10:26:44.727071', 0, '', 2, '', 0, '2', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', 'upload/FB_IMG_15600022012859269.jpg', 'upload/FB_IMG_15600021718227226.jpg', 'upload/IMG_2136.JPG', 'upload/IMG_20190719_191404.JPG', 'upload/IMG_2362.JPG', '', 'upload/IMG_2137.JPG', 'KATAI', '321', '212', '2121', '1', '401305'),
(36, 6, 'xghdfg', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-08', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 10:27:47.152360', 0, '', 2, '', 0, '2', '', '', '', 'upload/Choti 20190815_093506.jpg', 'upload/IMG_20190609_113454_900.jpg', 'upload/IMG_20190901_163852.jpg', 'upload/IMG_20190902_102256.jpg', 'upload/IMG_20191006_000829_720.jpg', 'upload/IMG_20191008_002256_967.jpg', 'upload/FB_IMG_15600022012859269.jpg', 'upload/FB_IMG_15600021718227226.jpg', 'upload/IMG_2136.JPG', 'upload/IMG_20190719_191404.JPG', 'upload/IMG_2362.JPG', '', 'upload/IMG_2137.JPG', 'KATAI', '321', '212', '2121', '1', '401305'),
(37, 6, 'xghdfg', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-08', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 10:31:40.303511', 0, '', 2, '', 0, '2', '', '', '', 'upload/Choti 20190815_093506.jpg', 'upload/IMG_20190609_113454_900.jpg', 'upload/IMG_20190901_163852.jpg', 'upload/IMG_20190902_102256.jpg', 'upload/IMG_20191006_000829_720.jpg', 'upload/IMG_20191008_002256_967.jpg', 'upload/FB_IMG_15600022012859269.jpg', 'upload/FB_IMG_15600021718227226.jpg', 'upload/IMG_2136.JPG', 'upload/IMG_20190719_191404.JPG', 'upload/IMG_2362.JPG', 'upload/IMG_20190609_113159_640.jpg', 'upload/IMG_2137.JPG', 'KATAI', '321', '212', '2121', '1', '401305'),
(38, 6, 'xghdfg', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-08', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 10:33:24.641773', 0, '', 2, '', 0, '2', '', '', '', 'upload/Choti 20190815_093506.jpg', 'upload/IMG_20190609_113454_900.jpg', 'upload/IMG_20190901_163852.jpg', 'upload/IMG_20190902_102256.jpg', 'upload/IMG_20191006_000829_720.jpg', 'upload/IMG_20191008_002256_967.jpg', 'upload/FB_IMG_15600022012859269.jpg', 'upload/FB_IMG_15600021718227226.jpg', 'upload/IMG_2136.JPG', 'upload/IMG_20190719_191404.JPG', 'upload/IMG_2362.JPG', 'upload/IMG_20190609_113159_640.jpg', 'upload/IMG_2137.JPG', 'KATAI', '321', '212', '2121', '1', '401305'),
(39, 6, 'xghdfg', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-08', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 10:33:50.464737', 0, '', 2, '', 0, '2', '', '', '', 'upload/Choti 20190815_093506.jpg', 'upload/IMG_20190609_113454_900.jpg', 'upload/IMG_20190901_163852.jpg', 'upload/IMG_20190902_102256.jpg', 'upload/IMG_20191006_000829_720.jpg', 'upload/IMG_20191008_002256_967.jpg', 'upload/FB_IMG_15600022012859269.jpg', 'upload/FB_IMG_15600021718227226.jpg', 'upload/IMG_2136.JPG', 'upload/IMG_20190719_191404.JPG', 'upload/IMG_2362.JPG', 'upload/IMG_20190609_113159_640.jpg', 'upload/IMG_2137.JPG', 'KATAI', '321', '212', '2121', '1', '401305'),
(40, 6, 'xghdfg', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-08', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 10:33:53.124824', 0, '', 2, '', 0, '2', '', '', '', 'upload/Choti 20190815_093506.jpg', 'upload/IMG_20190609_113454_900.jpg', 'upload/IMG_20190901_163852.jpg', 'upload/IMG_20190902_102256.jpg', 'upload/IMG_20191006_000829_720.jpg', 'upload/IMG_20191008_002256_967.jpg', 'upload/FB_IMG_15600022012859269.jpg', 'upload/FB_IMG_15600021718227226.jpg', 'upload/IMG_2136.JPG', 'upload/IMG_20190719_191404.JPG', 'upload/IMG_2362.JPG', 'upload/IMG_20190609_113159_640.jpg', 'upload/IMG_2137.JPG', 'KATAI', '321', '212', '2121', '1', '401305'),
(41, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:35:09.000734', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', ''),
(42, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:35:46.157663', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', ''),
(43, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:41:24.324860', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', ''),
(44, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:44:50.498062', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', ''),
(45, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:45:54.882351', 0, '', 0, '', 0, '', '', '', '', '', 'upload/IMG_2136.JPG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:52:57.058894', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', '', '', ''),
(47, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:55:57.865649', 0, '', 0, '', 0, '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:56:34.144690', 0, '', 0, '', 0, '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 10:58:04.944470', 0, '', 0, '', 0, '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:25:43.787905', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/IMG_2137.JPG', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:26:51.807032', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'upload/IMG_2137.JPG', '', '', '', '', '', '', '', '', ''),
(52, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:30:54.213603', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:33:03.137609', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:34:08.419953', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:34:40.588389', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:35:18.767434', 0, '', 0, '', 0, '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:36:31.180394', 0, '', 0, '', 0, '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 6, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '2024-03-24 11:37:25.149013', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', 'upload/Choti 20190815_093506.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 6, 'saurabh', 'kj1dhfkjh', 'kasekar', '', '', '', '2024-03-10', 0, 0, 1, 1, 0, '', '0741490994', '', '', '2024-03-24 11:47:43.136925', 0, '', 1, '', 0, '2', '', '', '', '', '', '', '', '', '', 'upload/FB_IMG_15600021718227226.jpg', '', '', '', '', '', '', 'GHASSKOPARI', '356', '', 'wrwet', '1', '401203'),
(60, 162, 'rutik', 'ganesh', 'palkar', 'savitri', 'mirvane', 'life care', '2024-03-19', 0, 1, 0, 0, 0, '', '', '', '', '2024-03-24 11:48:56.663875', 0, '', 0, '', 0, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 163, 'rutik', 'ganesh', 'palkar', 'savitri', 'mirvane', 'life care', '2024-03-19', 0, 1, 1, 0, 0, '', '', '', '', '2024-03-24 11:50:52.909579', 0, '', 0, '', 0, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 6, 'rekha', '', 'kadam', '', '', '', '2025-12-01', 0, 0, 0, 1, 0, '', '0741490994', '', '', '2024-04-10 17:42:51.835209', 0, '', 1, '', 0, '', '', '', '', '', '', '', '', '', '', 'upload/IMG_20190722_152904.jpg', '', '', '', '', 'upload/FB_IMG_15600022012859269.jpg', '', 'GHASSKOPARI', '', 'aqwe', 'wrwet', '', '401203');

-- --------------------------------------------------------

--
-- Table structure for table `birthcertificate`
--

CREATE TABLE `birthcertificate` (
  `id` int(255) NOT NULL,
  `child_name` varchar(45) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `mother_name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `place_of_birth` varchar(45) NOT NULL,
  `hospital_name` varchar(45) NOT NULL,
  `registration_date` date NOT NULL,
  `district` int(10) NOT NULL,
  `taluka` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `allDocid` int(45) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthcertificate`
--

INSERT INTO `birthcertificate` (`id`, `child_name`, `father_name`, `mother_name`, `surname`, `place_of_birth`, `hospital_name`, `registration_date`, `district`, `taluka`, `status`, `allDocid`, `updated_on`) VALUES
(1, 'virat', 'sandesh', 'sujata', 'kohli', 'mumbai', 'virar', '2024-01-01', 1, 1, 'INACTIVE', 2, '2024-01-13 06:48:21'),
(2, 'sdhjk', 'kj1dhfkjh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-09', 1, 1, 'INACTIVE', 3, '2024-01-13 07:34:57'),
(3, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 1, 'INACTIVE', 4, '2024-01-13 07:36:49'),
(4, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 1, 'INACTIVE', 5, '2024-01-13 07:37:18'),
(5, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 1, 'INACTIVE', 6, '2024-01-13 07:51:17'),
(6, 'dfd', 'dgfdgfdgfd', 'fdgfdgfdg', 'fdgfg', 'dfgfdg', 'fdgfdg', '2024-01-25', 1, 1, 'INACTIVE', 7, '2024-01-14 06:44:51'),
(7, 'dfd', 'dgfdgfdgfd', 'fdgfdgfdg', 'fdgfg', 'dfgfdg', 'fdgfdg', '2024-01-25', 1, 1, 'INACTIVE', 8, '2024-01-14 06:45:08'),
(8, 'dfd', 'dgfdgfdgfd', 'fdgfdgfdg', 'fdgfg', 'dfgfdg', 'fdgfdg', '2024-01-25', 1, 1, 'INACTIVE', 9, '2024-01-14 06:46:47'),
(9, 'SAURABH', 'SUBHASH', 'SUPRIYA', 'PALAKAR', 'CHIPLUN', 'LIFE CARE', '1998-01-01', 1, 1, 'INACTIVE', 6, '2024-01-22 15:20:06'),
(10, 'virat', 'vijay', 'supriya', 'pagade', 'guhagar', 'skf1jh', '2024-01-04', 1, 1, 'INACTIVE', 11, '2024-01-22 15:53:56'),
(11, 'virat', 'vijay', 'supriya', 'pagade', 'guhagar', 'skf1jh', '2024-01-04', 1, 1, 'INACTIVE', 12, '2024-01-22 15:55:34'),
(12, 'virat', 'vijay', 'supriya', 'pagade', 'guhagar', 'skf1jh', '2024-01-04', 1, 1, 'INACTIVE', 13, '2024-01-22 15:56:54'),
(13, 'virat', 'vijay', 'supriya', 'pagade', 'guhagar', 'skf1jh', '2024-01-04', 1, 1, 'INACTIVE', 15, '2024-01-22 16:04:15'),
(14, 'virat', 'vijay', 'supriya', 'pagade', 'guhagar', 'skf1jh', '2024-01-04', 1, 1, 'INACTIVE', 16, '2024-01-22 16:07:54'),
(15, 'virat', 'vijay', 'supriya', 'pagade', 'guhagar', 'skf1jh', '2024-01-04', 1, 1, 'INACTIVE', 17, '2024-01-22 16:10:52'),
(16, 'virat', 'vijay', 'supriya', 'pagade', 'guhagar', 'skf1jh', '2024-01-04', 1, 1, 'INACTIVE', 18, '2024-01-22 16:11:45'),
(17, 'saurbah', 'sandesh', 'savitri', 'pagade', 'chiplun', 'life care', '2024-01-19', 1, 1, 'INACTIVE', 21, '2024-01-22 17:04:49'),
(18, 'viru', 'saurabh', 'sadi', 'palkar', 'guhagar', 'life care', '2024-01-01', 1, 2, 'INACTIVE', 22, '2024-01-23 14:48:03'),
(19, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 27, '2024-02-10 10:59:32'),
(20, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 28, '2024-02-10 10:59:49'),
(21, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 29, '2024-02-10 11:03:48'),
(22, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 30, '2024-02-10 11:04:21'),
(23, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 31, '2024-02-10 11:04:58'),
(24, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 32, '2024-02-10 11:06:26'),
(25, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 33, '2024-02-10 11:06:59'),
(26, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 34, '2024-02-10 11:11:55'),
(27, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 35, '2024-02-10 11:24:32'),
(28, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 36, '2024-02-10 11:25:05'),
(29, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 37, '2024-02-10 11:25:07'),
(30, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 38, '2024-02-10 11:26:30'),
(31, 'rutik', 'jhjfdh', 'jfhskjhf', 'pagade', 'guhagar', 'djfghdhfgqshfh', '2024-02-08', 1, 2, 'INACTIVE', 39, '2024-02-10 11:50:19'),
(32, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 40, '2024-02-10 14:14:19'),
(33, 'virat', 'sandesh', 'savitri', 'palkar', 'mirvane', 'life care', '2024-01-10', 1, 0, 'INACTIVE', 41, '2024-02-10 14:14:25'),
(34, 'namita', 'prakash', 'sunita', 'palkar', 'mirvane', 'life care', '2024-11-26', 1, 1, 'INACTIVE', 42, '2024-02-13 15:05:28'),
(35, 'namita', 'prakash', 'sunita', 'palkar', 'mirvane', 'life care', '2024-11-26', 1, 0, 'INACTIVE', 43, '2024-02-13 15:37:20'),
(36, 'vivek', 'pasete', 'supriya', 'palkar', 'mirvane', 'life care', '2018-12-31', 1, 1, 'INACTIVE', 44, '2024-02-21 17:22:06'),
(37, 'akashay', 'subhash', 'supriya', 'ghadwale', 'chiplun', 'ejhgw', '2024-02-01', 1, 1, 'INACTIVE', 45, '2024-02-21 17:23:24'),
(38, 'vilas', 'ganesh', 'visha', 'palakr', 'mirvane', 'life care', '2024-12-31', 1, 1, 'INACTIVE', 46, '2024-02-22 17:09:41'),
(39, 'sdhjk', 'kj1dhfkjh', 'supriya', 'pagade', 'sdjhfjksdh', 'djfghdhfgqshfh', '2024-02-03', 1, 2, 'INACTIVE', 47, '2024-02-22 17:27:01'),
(40, 'virat', 'earqed1', '``', 'fgwaf', 'chiplun', 'djfghdhfgqshfh', '2024-02-14', 1, 1, 'INACTIVE', 48, '2024-02-24 07:48:45'),
(41, 'virat', 'earqed1', 'xdfcz', 'fgwaf', 'chiplun', 'djfghdhfgqshfh', '2024-02-14', 1, 0, 'INACTIVE', 49, '2024-02-24 08:07:30'),
(42, 'virat', 'earqed1', 'xdfcz', 'fgwaf', 'chiplun', 'djfghdhfgqshfh', '2024-02-14', 1, 1, 'INACTIVE', 50, '2024-02-24 08:08:00'),
(43, 'sdhjk', 'jhjfdh', 'savitri', 'palkar', 'chiplun', 'djfghdhfgqshfh', '2024-01-31', 1, 1, 'INACTIVE', 51, '2024-02-24 08:10:12'),
(44, 'saurbah', 'sandesh', 'savitri', 'pagade', 'chiplun', 'djfghdhfgqshfh', '2024-02-07', 1, 2, 'INACTIVE', 52, '2024-02-24 08:11:00'),
(45, 'virat', 'subhash', 'kj1dfhkjh', 'pagade', 'chiplun', 'djfghdhfgqshfh', '2024-02-08', 1, 1, 'INACTIVE', 53, '2024-02-24 08:13:44'),
(46, 'virat', 'sandesh', 'jfhskjhf', 'skj1dhfkjh', 'chiplun', 'skf1jh', '2024-02-02', 1, 1, 'INACTIVE', 54, '2024-02-24 08:17:22'),
(47, 'virat', 'jhjfdh', 'supriya', 'pagade', 'chiplun', 'djfghdhfgqshfh', '2024-02-10', 1, 1, 'INACTIVE', 55, '2024-02-24 08:18:18'),
(48, 'wer', 'wer', 'erwe', '23423', 'chiplun', 'djfghdhfgqshfh', '2024-02-14', 1, 1, 'INACTIVE', 56, '2024-02-25 06:13:21'),
(49, 'wer', 'wer', 'erwe', '23423', 'chiplun', 'djfghdhfgqshfh', '2024-02-14', 1, 1, 'INACTIVE', 57, '2024-02-25 06:15:30'),
(50, 'dhanjay', 'ganesh', 'savita', 'kale', 'mirvane', 'guhagar', '2024-12-30', 1, 1, 'INACTIVE', 58, '2024-02-25 06:52:27'),
(51, 'ankita', 'anil', 'sunita', 'palkar', 'mirvane', 'life care', '2024-11-30', 1, 1, 'INACTIVE', 59, '2024-02-25 07:08:29'),
(52, 'sajan', 'anat', 'vaishali', 'palkar', 'mirvane', 'life care', '2024-01-02', 1, 1, 'INACTIVE', 60, '2024-02-25 07:37:00'),
(53, 'kane', 'kane', 'aline', 'rechard', 'miravanr', 'life care', '2024-01-03', 1, 1, 'INACTIVE', 61, '2024-03-04 17:16:16'),
(54, 'kiran', 'pollard', 'pollarf', 'pollart', 'miravanr', 'calife carew', '2025-01-31', 1, 1, 'INACTIVE', 62, '2024-03-04 17:27:47'),
(55, 'alksj', 'kjsafkj', ';sljfj', 'l;sdfj;lj', ';lsjfj', ';sljfkj', '2024-05-04', 1, 1, 'INACTIVE', 63, '2024-03-07 16:57:04'),
(56, 'vinay', 'narayan', 'sunita', 'gudhekar', 'chiplun', 'life care', '2018-12-31', 1, 1, 'INACTIVE', 64, '2024-03-07 17:10:42'),
(57, 'vinay', 'narayan', 'sunita', 'gudhekar', 'chiplun', 'life care', '2018-12-31', 1, 1, 'INACTIVE', 65, '2024-03-07 17:11:17'),
(58, 'vinay', 'narayan', 'sunita', 'gudhekar', '', 'life care', '2018-12-31', 1, 1, 'INACTIVE', 66, '2024-03-07 17:12:15'),
(59, 'vinay', 'narayan', 'sunita', 'gudhekar', 'chiplun', 'life care', '2018-12-31', 1, 1, 'INACTIVE', 67, '2024-03-07 17:12:35'),
(60, 'karishma', 'santosh', 'usha', 'gudhekar', 'mirvane', 'life care', '2012-02-03', 1, 1, 'INACTIVE', 68, '2024-03-07 18:15:34'),
(61, 'victoriya', 'victory', 'victoriya', 'cictori', 'miravanr', 'life care', '2021-01-31', 1, 1, 'INACTIVE', 69, '2024-03-11 16:11:54'),
(62, 'aarya', 'aaryan', 'akshata', 'kasekar', 'miravanr', 'life care', '2013-12-01', 1, 1, 'INACTIVE', 74, '2024-03-13 16:38:51'),
(63, 'gopinat', 'gopu', 'gopika', 'munde', 'miravanr', 'life care', '2024-12-30', 1, 1, 'INACTIVE', 76, '2024-03-16 04:07:15'),
(64, 'vaibhav', 'pollard', 'sadf', 'kadam', 'miravanr', 'calife carew', '2024-03-28', 1, 0, 'INACTIVE', 77, '2024-03-16 04:45:23'),
(65, 'vaibhav', 'pollard', 'sadf', 'kadam', 'miravanr', 'calife carew', '2024-03-28', 1, 0, 'INACTIVE', 78, '2024-03-16 04:46:43'),
(66, 'viraj', 'jahd', 'kjsafhd', 'sjfh', 'lhfs', 'calife carew', '2024-03-07', 1, 1, 'INACTIVE', 79, '2024-03-16 05:06:35'),
(67, 'aaryan', 'ravindra', 'nandunu', 'kaseka', 'miravanr', 'life care', '2024-12-31', 1, 1, 'INACTIVE', 80, '2024-03-16 06:32:45'),
(68, 'aarayan', 'ravi', 'nandini', 'kasekar', 'miravanr', 'life care', '2015-12-31', 1, 1, 'INACTIVE', 1, '2024-03-16 07:59:41'),
(69, 'suraj', 'ravi', 'nandini', 'kasekar', 'miravanr', 'life care', '2024-03-12', 1, 1, 'INACTIVE', 2, '2024-03-16 08:13:59'),
(70, 'prachi', 'ravi', 'nandini', 'kasekar', 'miravanr', 'life care', '2017-11-03', 1, 1, 'INACTIVE', 4, '2024-03-16 15:25:09'),
(71, 'vaibhav', 'kane', 'nandini', 'kasekar', 'miravanr', 'life care', '2024-02-28', 1, 1, 'INACTIVE', 5, '2024-03-16 15:51:58'),
(72, 'kiran', 'ravi', 'nandini', 'kasekar', 'miravanr', 'calife carew', '2024-03-09', 1, 1, 'INACTIVE', 6, '2024-03-16 16:00:30'),
(73, 'kiran', 'ravi', 'nandini', 'kasekar', 'miravanr', 'calife carew', '2024-03-09', 1, 0, 'INACTIVE', 7, '2024-03-16 16:01:35'),
(74, 'victoriya', 'pollard', 'aline', 'kane', 'miravanr', 'life care', '2024-02-28', 1, 1, 'INACTIVE', 8, '2024-03-16 16:02:10'),
(75, 'gopinat', 'gopu', 'gopika', 'munde', 'miravanr', 'life care', '2024-03-14', 1, 1, 'INACTIVE', 9, '2024-03-16 17:25:37'),
(76, 'gopinat', 'gopu', 'gopika', 'munde', 'miravanr', 'life care', '2024-03-14', 1, 0, 'INACTIVE', 10, '2024-03-16 17:26:53'),
(77, 'kiran', 'gopu', 'gopika', 'kasekar', 'miravanr', 'life care', '2024-03-01', 1, 1, 'INACTIVE', 11, '2024-03-16 17:27:19'),
(78, 'gopinat', 'ravi', 'gopika', 'kasekar', 'miravanr', 'life care', '2024-03-07', 1, 1, 'INACTIVE', 12, '2024-03-16 17:42:52'),
(79, 'kiran', 'pollard', 'nandini', 'kasekar', 'miravanr', 'life care', '2024-03-14', 1, 1, 'INACTIVE', 13, '2024-03-16 17:45:20'),
(80, 'kiran', 'pollard', 'gopika', 'munde', 'miravanr', 'life care', '2024-02-29', 1, 1, 'INACTIVE', 14, '2024-03-16 17:47:09'),
(81, 'yogita ', 'yogesh', 'yofu', 'khande', 'miravanr', 'life care', '2016-01-01', 1, 1, 'INACTIVE', 15, '2024-03-16 18:53:32'),
(82, 'aaksha', 'praksh', 'nandini', 'munde', 'miravanr', 'life care', '0009-08-07', 0, 0, 'INACTIVE', 17, '2024-03-17 11:50:03'),
(83, 'aaksha', 'praksh', 'gopika', 'kasekar', 'miravanr', 'life care', '0009-08-07', 1, 1, 'INACTIVE', 18, '2024-03-17 11:50:44'),
(84, 'aaksha', 'praksh', 'nandini', 'kasekar', 'lhfs', 'life care', '0009-08-07', 1, 1, 'INACTIVE', 19, '2024-03-17 11:51:27'),
(85, 'yogita ', 'yogesh', 'yofu', 'khande', 'miravanr', 'life care', '2016-01-01', 1, 0, 'INACTIVE', 20, '2024-03-18 15:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `city_table`
--

CREATE TABLE `city_table` (
  `id` int(255) NOT NULL,
  `cityName` varchar(45) NOT NULL,
  `cityValue` int(45) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `taluka_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city_table`
--

INSERT INTO `city_table` (`id`, `cityName`, `cityValue`, `updated_on`, `taluka_id`) VALUES
(1, 'Chiplun', 1, '2024-01-10 17:54:10', 1),
(2, 'Guhagar', 2, '2024-01-10 17:54:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `district_val` int(45) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `district_val`, `updated_on`, `state_id`) VALUES
(1, 'Mumbai', 1, '2024-03-06 18:30:00', 1),
(2, 'Pune', 2, '2024-03-06 18:30:00', 1),
(3, 'Nagpur', 3, '2024-03-06 18:30:00', 1),
(4, 'Nashik', 4, '2024-03-06 18:30:00', 1),
(5, 'Aurangabad', 5, '2024-03-06 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `domicialcertificate`
--

CREATE TABLE `domicialcertificate` (
  `id` int(11) NOT NULL,
  `applicant_salutation` int(45) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `applicant_dob` date NOT NULL,
  `applicant_age` int(20) NOT NULL,
  `applicant_num` int(10) NOT NULL,
  `applicant_gender` int(10) NOT NULL,
  `applicant_email` varchar(255) NOT NULL,
  `applicant_adhaar` varchar(12) NOT NULL,
  `applicant_natilanality` varchar(45) NOT NULL,
  `allDocid` int(45) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `certificate_types` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees_structure`
--

CREATE TABLE `fees_structure` (
  `id` int(11) NOT NULL,
  `document_value` int(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gov_fees` int(45) DEFAULT NULL,
  `service_charge` int(45) DEFAULT NULL,
  `sgst` int(45) DEFAULT NULL,
  `cgst` int(45) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fees_structure`
--

INSERT INTO `fees_structure` (`id`, `document_value`, `name`, `gov_fees`, `service_charge`, `sgst`, `cgst`, `amount`, `added_on`) VALUES
(1, 1, 'Birth Certificate', 50, 30, 15, 5, 100, '2024-03-16 14:44:12'),
(2, 4, 'Nationality Certifiacte', 70, 30, 10, 10, 120, '2024-03-16 15:38:51'),
(3, 5, 'Age Domical Certificate', 50, 10, 5, 5, 70, '2024-03-17 06:51:42'),
(4, 2, 'Income Certificate', 70, 50, 10, 10, 70, '2024-03-24 12:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE `new_user` (
  `id` int(45) NOT NULL,
  `salutation_val` int(45) NOT NULL,
  `salutationtxt` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `age` int(45) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `razorpay`
--

CREATE TABLE `razorpay` (
  `id` int(11) NOT NULL,
  `userid` int(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user_doc_id` int(45) DEFAULT NULL,
  `gov_fees` int(45) DEFAULT NULL,
  `service_charge` int(45) DEFAULT NULL,
  `sgst` int(45) DEFAULT NULL,
  `cgst` int(45) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `razorpay`
--

INSERT INTO `razorpay` (`id`, `userid`, `name`, `user_doc_id`, `gov_fees`, `service_charge`, `sgst`, `cgst`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 6, '', 1, 50, 50, 5, 5, 110, 'complete', 'pay_NmxMF3KQ3UfV5T', '2024-03-16 09:05:24'),
(2, 6, '', 2, 50, 50, 5, 5, 110, 'complete', 'pay_NmxOlek846Q5tt', '2024-03-16 09:14:41'),
(3, 6, '', 3, 70, 0, 10, 10, 120, 'complete', 'pay_Nn4YbY79xzf3Q1', '2024-03-16 03:40:39'),
(4, 6, '', 8, 50, 0, 15, 5, 100, 'complete', 'pay_Nn6kwEIaclYkc6', '2024-03-16 05:03:30'),
(5, 6, '', 11, 50, 0, 15, 5, 100, 'complete', 'pay_Nn70nla7QezlR3', '2024-03-16 06:28:30'),
(6, 6, '', 12, 50, 30, 15, 5, 100, 'complete', 'pay_Nn75EL8QhLNMh5', '2024-03-16 06:43:05'),
(7, 6, '', 13, 50, 30, 15, 5, 100, 'complete', 'pay_Nn78MaxeCzSA11', '2024-03-16 06:45:32'),
(8, 6, '', 14, 50, 30, 15, 5, 100, 'complete', 'pay_Nn7j5HXWeNZuxq', '2024-03-16 06:47:14'),
(9, 6, '', 15, 50, 30, 15, 5, 100, 'complete', 'pay_Nn8Hma5rhkY1DJ', '2024-03-16 07:53:47'),
(10, 6, '', 16, 50, 10, 5, 5, 70, 'complete', 'pay_NnJX26ANYi87Qu', '2024-03-17 06:53:52'),
(11, 6, '', 163, 50, 30, 15, 5, 100, 'complete', 'pay_NwymfMogTelljN', '2024-04-10 06:05:57'),
(12, 6, '', 166, 70, 50, 10, 10, 70, 'complete', 'pay_Nx0QxfLaUZlq3M', '2024-04-10 07:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `salutation_table`
--

CREATE TABLE `salutation_table` (
  `id` int(45) NOT NULL,
  `salutation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salutation_table`
--

INSERT INTO `salutation_table` (`id`, `salutation`) VALUES
(1, 'Mr'),
(2, 'Miss'),
(3, 'Mrs');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(245) NOT NULL,
  `stateName` varchar(45) NOT NULL,
  `stateValue` int(45) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `stateValue`, `updated_on`) VALUES
(1, 'Maharashtra', 1, '2024-01-10 17:53:05'),
(2, 'Goa', 2, '2024-01-10 17:53:05'),
(3, 'Andhra Pradesh', 1, '2024-01-10 18:01:36'),
(4, 'Arunachal Pradesh', 2, '2024-01-10 18:01:36'),
(5, 'Assam', 3, '2024-01-10 18:01:36'),
(6, 'Bihar', 4, '2024-01-10 18:01:36'),
(7, 'Chhattisgarh', 5, '2024-01-10 18:01:36'),
(9, 'Gujarat', 7, '2024-01-10 18:01:36'),
(10, 'Haryana', 8, '2024-01-10 18:01:36'),
(11, 'Himachal Pradesh', 9, '2024-01-10 18:01:36'),
(12, 'Jharkhand', 10, '2024-01-10 18:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `id` int(45) NOT NULL,
  `taluka_name` varchar(45) NOT NULL,
  `district_id` varchar(45) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`id`, `taluka_name`, `district_id`, `updated_on`) VALUES
(1, 'pune', '2', '2024-03-24 08:52:56'),
(2, 'yerwada', '2', '2024-03-24 08:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` int(10) NOT NULL,
  `usertype` int(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `updated_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `salutation_val` int(45) NOT NULL,
  `salutation_txt` varchar(10) NOT NULL,
  `occupation` int(45) NOT NULL,
  `otp` varchar(5) NOT NULL,
  `registration_option` int(2) NOT NULL,
  `district` varchar(45) NOT NULL,
  `adhar_card_num` varchar(12) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `temporary_addr` varchar(255) NOT NULL,
  `pan_card` varchar(100) NOT NULL,
  `passport_card` varchar(100) NOT NULL,
  `rsby_card` varchar(100) NOT NULL,
  `adhar_card` varchar(100) NOT NULL,
  `voter_card` varchar(100) NOT NULL,
  `driving_card` varchar(100) NOT NULL,
  `addr_pan_card` varchar(255) NOT NULL,
  `addr_password_card` varchar(255) NOT NULL,
  `addr_rsby_card` varchar(255) NOT NULL,
  `addr_adhar_card` varchar(255) NOT NULL,
  `addr_voter_card` varchar(255) NOT NULL,
  `addr_driving_card` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `dob`, `age`, `gender`, `usertype`, `email`, `phoneNum`, `password`, `id_proof`, `updated_on`, `salutation_val`, `salutation_txt`, `occupation`, `otp`, `registration_option`, `district`, `adhar_card_num`, `nationality`, `temporary_addr`, `pan_card`, `passport_card`, `rsby_card`, `adhar_card`, `voter_card`, `driving_card`, `addr_pan_card`, `addr_password_card`, `addr_rsby_card`, `addr_adhar_card`, `addr_voter_card`, `addr_driving_card`) VALUES
(1, 'Saurabh Palkar', '', '', '1998-06-09', 0, 1, 1, 'saurabhpalkar00@gmail.com', '7414909949', '123', 'upload/photos.png', '2024-01-10 17:43:22.000000', 1, 'Mr.', 0, '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'subhash palkar', '', '', '1981-05-12', 0, 1, 2, 'subhash@gmail.com', '7414909949', '123', 'upload/subhash.png', '2024-01-10 17:47:07.000000', 1, 'Mr.', 0, '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'sadi', 'subhash', '', '2024-02-02', 12, 1, 0, 'sadi@gmial.com', '456789232', '', '', '2024-01-14 07:26:27.000000', 1, '', 0, '', 0, '', '123456748945', 'india', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'sadi', 'saurabh', 'palkar', '', 24, 2, 2, 'mywork202324@gmail.com', '', '123', '', '2024-01-23 14:46:48.643633', 0, '', 0, '10699', 1, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'vijay', '', '', '2024-01-02', 0, 1, 2, 'vijay@gmail.com', '7414909949', '123', 'upload/photos.png', '2024-02-17 03:26:35.000000', 1, 'Mr.', 0, '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'aaryan kasekar', '', '', '2017-01-01', 0, 1, 2, 'aaryankasekar@gmail.com', '7414606645', '123', 'upload/photos.png', '2024-03-13 16:37:31.000000', 1, 'Mr.', 0, '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdocuments`
--

CREATE TABLE `userdocuments` (
  `id` int(255) NOT NULL,
  `document_name` varchar(45) NOT NULL,
  `document_value` int(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `userid` int(45) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdocuments`
--

INSERT INTO `userdocuments` (`id`, `document_name`, `document_value`, `status`, `userid`, `updated_on`) VALUES
(80, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(81, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(82, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(83, 'Income Certificate', 3, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(84, 'Income Certificate', 3, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(85, 'Income Certificate', 3, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(86, 'Income Certificate', 3, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(87, 'Income Certificate', 3, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(88, 'Income Certificate', 3, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(89, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(90, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(91, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(92, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(93, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(94, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(95, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(96, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(97, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(98, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(99, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(100, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(101, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(102, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(103, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(104, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(105, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(106, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(107, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(108, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(109, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(110, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(111, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(112, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(113, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(114, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(115, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(116, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(117, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(118, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(119, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(120, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(121, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(122, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(123, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(124, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(125, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(126, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(127, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(128, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(129, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(130, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(131, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(132, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(133, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(134, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(135, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(136, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(137, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(138, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(139, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(140, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(141, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(142, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(143, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(144, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(145, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(146, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(147, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(148, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(149, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(150, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(151, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(152, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(153, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(154, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(155, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(156, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(157, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(158, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(159, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(160, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(161, 'Income Certificate', 2, 'ACTIVE', 6, '2024-03-23 18:30:00'),
(162, 'Birth Certificate', 1, 'INACTIVE', 6, '2024-03-24 11:48:56'),
(163, 'Birth Certificate', 1, 'INACTIVE', 6, '2024-03-24 11:50:52'),
(164, 'Income Certificate', 2, 'ACTIVE', 6, '2024-04-09 18:30:00'),
(165, 'Income Certificate', 2, 'ACTIVE', 6, '2024-04-09 18:30:00'),
(166, 'Income Certificate', 2, 'ACTIVE', 6, '2024-04-09 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(255) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `state` int(45) NOT NULL,
  `city` int(45) NOT NULL,
  `status` int(10) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `fullname`, `email`, `contact`, `state`, `city`, `status`, `updated_on`) VALUES
(1, 'saurabh', '', '45', 1, 1, 1, '2024-03-05 17:26:19'),
(2, 'saurabh', '', '45', 1, 1, 1, '2024-03-05 17:27:19'),
(3, 'ajay', '', '37', 1, 1, 1, '2024-03-05 17:27:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_users_cert`
--
ALTER TABLE `all_users_cert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthcertificate`
--
ALTER TABLE `birthcertificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_table`
--
ALTER TABLE `city_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domicialcertificate`
--
ALTER TABLE `domicialcertificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_structure`
--
ALTER TABLE `fees_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `razorpay`
--
ALTER TABLE `razorpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salutation_table`
--
ALTER TABLE `salutation_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `userdocuments`
--
ALTER TABLE `userdocuments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_users_cert`
--
ALTER TABLE `all_users_cert`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `birthcertificate`
--
ALTER TABLE `birthcertificate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `city_table`
--
ALTER TABLE `city_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `domicialcertificate`
--
ALTER TABLE `domicialcertificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees_structure`
--
ALTER TABLE `fees_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `razorpay`
--
ALTER TABLE `razorpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `salutation_table`
--
ALTER TABLE `salutation_table`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdocuments`
--
ALTER TABLE `userdocuments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
