-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 01:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masraflar`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(255) NOT NULL,
  `expense_description` varchar(555) COLLATE utf8_bin NOT NULL,
  `expense_price` int(155) NOT NULL,
  `expense_user_id` int(255) NOT NULL,
  `expense_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `expense_description`, `expense_price`, `expense_user_id`, `expense_date`) VALUES
(13, 'sd', 2323, 2, '2021-12-25 11:46:36'),
(14, 'maas aldim', 250, 2, '2021-12-25 11:49:21'),
(15, 'PARA ALDIM2', 250, 2, '2021-12-25 11:53:34'),
(16, 'cevad maaş aldım', 1000, 2, '2021-12-25 11:55:13'),
(17, '50', 15, 2, '2021-12-28 15:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_id` int(255) NOT NULL,
  `income_description` varchar(555) COLLATE utf8_bin NOT NULL,
  `income_price` int(155) NOT NULL,
  `income_user_id` int(255) NOT NULL,
  `income_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_id`, `income_description`, `income_price`, `income_user_id`, `income_date`) VALUES
(13, 'sd', 2323, 2, '2021-12-25 11:46:36'),
(14, 'maas aldim', 250, 2, '2021-12-25 11:49:21'),
(15, 'PARA ALDIM2', 250, 2, '2021-12-25 11:53:34'),
(16, 'cevad maaş aldım', 1000, 2, '2021-12-25 11:55:13'),
(17, '50', 2147483647, 2, '2021-12-28 15:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `month_year` varchar(11) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_name`, `month_year`) VALUES
(1, 'Ocak', '2020'),
(2, 'Şubat', '2020'),
(3, 'Mart', '2020'),
(4, 'Nısan', '2020'),
(5, 'Mayıs', '2020'),
(6, 'Hazıran', '2020'),
(7, 'Temmuz', '2020'),
(8, 'Agustos', '2020'),
(9, 'Eylul', '2020'),
(10, 'Ekım', '2020'),
(11, 'Kasım', '2020'),
(12, 'Aralık', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(11) NOT NULL,
  `plan_no` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `plan_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `plan_date` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_no`, `plan_name`, `plan_date`) VALUES
(1, '12', 'fatura', '12.15.2020'),
(2, '11', 'dfdf', '65'),
(3, '13', 'alis-veris', '23.12.2021'),
(4, '1111', 'esde', '23.12.2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_password` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_mail` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `users_namesurname` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `users_authority` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_status` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_password`, `users_mail`, `users_namesurname`, `users_authority`, `users_status`, `users_date`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'ceferelizade@gmail.com', 'Cefer Elizade', '5', '1', '2020-01-03'),
(6, 'cefer', '827ccb0eea8a706c4c34a16891f84e7b', 'cefererer', NULL, NULL, NULL, NULL),
(7, 'jraa', '827ccb0eea8a706c4c34a16891f84e7b', 'Jafar Alizada', 'Jafar Alizada', NULL, NULL, NULL),
(2, 'ali', '827ccb0eea8a706c4c34a16891f84e7b', 'Ali Osman', 'Ali Osman', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `year_id` int(255) NOT NULL,
  `year` varchar(11) COLLATE utf8_bin NOT NULL,
  `year_user_id` int(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`year_id`, `year`, `year_user_id`) VALUES
(1, '2020', 1),
(12, '2021', 1),
(11, '2022', 1),
(10, '2222', 1),
(9, '2022', 1),
(6, '2021', 1),
(8, '2021', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `year_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
