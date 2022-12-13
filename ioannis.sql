-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 10 Ιαν 2022 στις 17:12:16
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `ioannis`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ioannis`
--

CREATE TABLE `ioannis` (
  `date` date DEFAULT NULL,
  `discname` varchar(100) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `rate_3` int(11) DEFAULT NULL,
  `rate_4` int(11) DEFAULT NULL,
  `rate_5` int(11) DEFAULT NULL,
  `rate_6` int(11) DEFAULT NULL,
  `rate_7` int(11) DEFAULT NULL,
  `song` varchar(100) DEFAULT NULL,
  `textarea` text DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `ioannis`
--

INSERT INTO `ioannis` (`date`, `discname`, `rate`, `rate_3`, `rate_4`, `rate_5`, `rate_6`, `rate_7`, `song`, `textarea`, `username`) VALUES
(NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 'iye', '            cscscs', 'ΙΟΑΝ ΚΡΟΙΤΟΡ ΚΑΤΑΡΤΖΙΟΥ'),
(NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, 'efla', '            dwdw', 'ioannis'),
(NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 'stl', '            retert', 'ertgert'),
(NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 'stl', '            retert', 'ertgert'),
(NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 'ah', '            reger', 'erger'),
(NULL, NULL, 5, 5, 5, 5, 5, 5, 'efla', '            wdaaw', 'awdawd'),
('2020-03-20', 'kjl', 5, 5, 5, 3, 2, 4, 'tl', '            dfgdfgd', 'FatGaming2017'),
('2020-03-20', 'σδ', 5, 4, 1, 1, 1, 1, 'uibo', '            σδφσδ', 'δφσδ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
