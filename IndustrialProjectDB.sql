-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 17 Μάη 2020 στις 13:50:56
-- Έκδοση διακομιστή: 10.4.8-MariaDB
-- Έκδοση PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `industrialproject`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admins`
--

CREATE TABLE `admins` (
  `adminuser` varchar(40) NOT NULL,
  `adminpass` varchar(40) NOT NULL,
  `adminsecure` varchar(40) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `applicants`
--

CREATE TABLE `applicants` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `school` varchar(40) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `bday` int(11) DEFAULT NULL,
  `bmonth` int(11) DEFAULT NULL,
  `byear` int(11) DEFAULT NULL,
  `accepted` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminuser`,`adminpass`,`adminsecure`);

--
-- Ευρετήρια για πίνακα `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`username`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
