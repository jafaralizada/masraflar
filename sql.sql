-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Oca 2020, 21:08:39
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
-- Tablo için tablo yapısı `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_no` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `plan_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `plan_date` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_no`, `plan_name`, `plan_date`) VALUES
(1, '12', 'fatura', '12.15.2020');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_password`, `users_mail`, `users_namesurname`, `users_authority`, `users_status`, `users_date`) VALUES
(1, 'Admin', '12345', 'asasas@gmail.com', 'jr aa', '5', '1', '2020-01-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
