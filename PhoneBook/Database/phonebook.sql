-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 27 Σεπ 2021 στις 09:00:42
-- Έκδοση διακομιστή: 10.4.21-MariaDB
-- Έκδοση PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `phonebook`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contactdetails`
--

CREATE TABLE `contactdetails` (
  `contact_id` int(11) NOT NULL COMMENT 'Primary Key',
  `contact_name` varchar(255) NOT NULL,
  `contact_surname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `contactdetails`
--

INSERT INTO `contactdetails` (`contact_id`, `contact_name`, `contact_surname`, `phone`, `email`) VALUES
(37, 'George', 'Papadopoulos', 1234567892, 'papadop@gmail.com'),
(36, 'John', 'Mitroudis', 2147483647, 'Mitroudis@gmail.com'),
(35, 'Christina', 'Andreou', 2147483647, 'CristAndr@gmail.com'),
(38, 'Maria', 'Nikolaou', 2147483647, 'Mairin@gmail.com'),
(39, 'Dimitris', 'Vasiliou', 2147483647, 'dimAnd@gmail.com'),
(40, 'Elenh', 'Gewrgiou', 2147483647, 'ElGewrg@gmail.com'),
(41, 'Kwstas', 'Foustanos', 2147483647, 'Fousan@gmail.com'),
(42, 'Grhgorhs', 'Antwniou', 2147483647, 'Antw@hotmail.com'),
(43, 'Nikoleta', 'Nikolaou', 2147483647, 'Nikolou@gmail.com'),
(44, 'Vaggelis', 'Papakwstantinou', 2147483647, 'VagPap@hotmail.com'),
(45, 'Maria', 'Athanasiadou', 2147483647, 'Athanmar@hotmail.com');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `userdetails`
--

CREATE TABLE `userdetails` (
  `contact_id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `userdetails`
--

INSERT INTO `userdetails` (`contact_id`, `name`, `username`, `email`, `password`) VALUES
(9, 'Mitroudis', 'Stergios', 'stergmitr@gmail.com', 'pass');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`contact_id`);

--
-- Ευρετήρια για πίνακα `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT για πίνακα `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
