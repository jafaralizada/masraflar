-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 19 Oca 2020, 19:19:19
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `masraflar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `expense_id` int(150) NOT NULL AUTO_INCREMENT,
  `expense_description` varchar(150) COLLATE utf8_bin NOT NULL,
  `expense_price` decimal(15,4) DEFAULT NULL,
  `expense_user_id` varchar(150) COLLATE utf8_bin NOT NULL,
  `expense_year` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `expense_month_id` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `expense_status` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `month`
--

DROP TABLE IF EXISTS `month`;
CREATE TABLE IF NOT EXISTS `month` (
  `month_id` int(11) NOT NULL AUTO_INCREMENT,
  `month_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `month_year` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`month_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `month`
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
-- Tablo için tablo yapısı `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_no` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `plan_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `plan_date` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_no`, `plan_name`, `plan_date`) VALUES
(1, '12', 'fatura', '12.15.2020'),
(2, '11', 'dfdf', '65');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_password` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_mail` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `users_namesurname` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `users_authority` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_status` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `users_date` date DEFAULT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_password`, `users_mail`, `users_namesurname`, `users_authority`, `users_status`, `users_date`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'ssss@gmail.com', 'Cefer Elizade', '5', '1', '2020-01-03');

-- --------------------------------------------------------

--
