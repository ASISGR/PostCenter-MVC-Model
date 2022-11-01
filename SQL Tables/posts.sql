-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 30 Οκτ 2022 στις 12:34:37
-- Έκδοση διακομιστή: 10.4.13-MariaDB
-- Έκδοση PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `postcenter`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `POST` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `posts`
--

INSERT INTO `posts` (`ID`, `POST`) VALUES
(38, 'Αλλαγή κειμένου'),
(39, 'Πόση δημιουργικότητα χωράει σε ένα Hot Dog;  Αυτά τα λαχταριστά Τex-Mex Hot Dogs με αφράτα ψωμάκια για sandwich Καραμολέγκος είναι η απάντηση που ψάχνετε'),
(41, 'Πόση δημιουργικότητα χωράει σε ένα Hot Dog;  Αυτά τα λαχταριστά Τex-Mex Hot Dogs με αφράτα ψωμάκια για sandwich Καραμολέγκος είναι η απάντηση που ψάχνετε'),
(42, 'wefewqfewqf'),
(43, 'Πόση δημιουργικότητα χωράει σε ένα Hot Dog;  Αυτά τα λαχταριστά Τex-Mex Hot Dogs με αφράτα ψωμάκια για sandwich Καραμολέγκος είναι η απάντηση που ψάχνετε'),
(44, 'grqwgrewqfweqfqewf'),
(46, 'okay\'its wokings.');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
