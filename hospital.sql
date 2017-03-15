-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 15 mrt 2017 om 10:06
-- Serverversie: 5.7.9
-- PHP-versie: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) NOT NULL,
  `adress` varchar(1024) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `pet_name` varchar(1024) NOT NULL,
  `cheked_in` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cheked_out` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `client`
--

INSERT INTO `client` (`id`, `name`, `adress`, `age`, `email`, `pet_name`, `cheked_in`, `cheked_out`) VALUES
(4, 'Jan willem', 'Mollenburgse weg', 32, 'unknow@hotmail.com', 'Kitten', '2017-03-14 00:16:14', NULL),
(2, 'Kirsten', 'Klaverstraat 24 a', 43, 'Kirsten@live.nl', 'Jazzzz', '2017-03-13 09:46:42', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `species` varchar(50) DEFAULT NULL,
  `status` text,
  `gender` enum('Male','Female','Unkown','') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `patient`
--

INSERT INTO `patient` (`id`, `name`, `species`, `status`, `gender`) VALUES
(5, 'Daisy', 'turtle', 'Cry all the time and has too much energie', 'Male'),
(6, 'Kittie', 'Cat', 'Won`t eat and cry every time', 'Female'),
(7, 'Jazzz', 'Kitten', 'Wont eat and drink', 'Unkown'),
(8, 'IEDERE DAG', 'Kitten', 'Stabiel', 'Male'),
(9, 'Siep', 'hond', 'Wil niet eten en Jankt', 'Unkown'),
(10, 'Hond', 'Cat', 'Wont sleep', 'Unkown');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `species`
--

DROP TABLE IF EXISTS `species`;
CREATE TABLE IF NOT EXISTS `species` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `species`
--

INSERT INTO `species` (`id`, `sort`) VALUES
(1, 'Dog'),
(2, 'Cat'),
(3, 'turtle'),
(4, 'Puppy'),
(6, 'Bird'),
(8, 'Camel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
