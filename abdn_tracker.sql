-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 02:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdn_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `my_key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_addresses` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `my_key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, 'test_uni', 0, 0, 0, NULL, '2022-10-27 22:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `course_details_tbl`
--

CREATE TABLE `course_details_tbl` (
  `id` int(11) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `ucas_id` varchar(25) NOT NULL,
  `course_title` varchar(150) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `description` varchar(550) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details_tbl`
--

INSERT INTO `course_details_tbl` (`id`, `course_code`, `ucas_id`, `course_title`, `qualification`, `description`, `keywords`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'te_6355f4f62e216', 'gggg88', 'test', 'test', 'test', 'hj,jjk,kk', '1', 'priyanka.philip93@gmail.com', '2022-10-27 04:14:14', '', '0000-00-00 00:00:00'),
(2, 'te_6356a0cf4e3de', 'yyjj88', 'test', 'btech', 'test test test', 'hj,jjk,kk', '1', 'priyanka.philip93@gmail.com', '2022-10-27 19:35:10', '', '0000-00-00 00:00:00'),
(3, 'bs_6356f53668360', '44446', 'bsc hons nursing', 'a level', 'y4tryuhgfuefifyu3rhi34ury873tr3gu3igfeuiregfr3fedcvegfi3urt34tryrgchueteyrguorgofgejfbef', 'bsc nurse, uk', '1', 'priyanka.philip93@gmail.com', '2022-10-27 19:36:08', 'priyanka.philip@gmail.com', '2022-10-27 20:31:19'),
(4, 'fi_635b0af75d3f6', 'B1234', 'final test', 'BSC', 'test description. test update', 'gh,kj', '1', 'priyanka.philip93@gmail.com', '2022-10-28 00:49:27', 'priyanka.philip@gmail.com', '2022-10-28 00:49:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_details_tbl`
--
ALTER TABLE `course_details_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_details_tbl`
--
ALTER TABLE `course_details_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
