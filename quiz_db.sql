-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2019 at 11:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) COLLATE armscii8_bin NOT NULL,
  `choice1` varchar(50) COLLATE armscii8_bin NOT NULL,
  `choice2` varchar(50) COLLATE armscii8_bin NOT NULL,
  `choice3` varchar(50) COLLATE armscii8_bin NOT NULL,
  `choice4` varchar(50) COLLATE armscii8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`) VALUES
(1, 'Which one is the first web browser invented in 1990?', 'Internet Explorer', 'Mosaic', 'Mozilla', 'Nexus'),
(2, 'First computer virus is known as?', 'Rabbit', 'Creeper Virus', 'Elk Cloner', 'SCA Virus'),
(3, 'Firewall in computer is used for?', 'Security', 'Data Transmission', 'Authentication', 'Monitoring'),
(4, 'Which of the following is not an operating system?', 'DOS', 'Mac', 'C', 'Linux'),
(5, 'Which of the following is not a database management software?', 'MySQL', 'Oracle', 'Sybase', 'COBOL');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `q1` varchar(11) COLLATE armscii8_bin NOT NULL,
  `q2` varchar(11) COLLATE armscii8_bin NOT NULL,
  `q3` varchar(11) COLLATE armscii8_bin NOT NULL,
  `q4` varchar(11) COLLATE armscii8_bin NOT NULL,
  `q5` varchar(11) COLLATE armscii8_bin NOT NULL,
  `score` int(11) NOT NULL,
  `name` varchar(50) COLLATE armscii8_bin NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `score`, `name`) VALUES
(1, 'D', 'B', 'A', 'C', 'D', 5, 'Master'),
(2, 'D', 'B', 'A', 'C', 'D', 5, 'Duane'),
(3, 'D', 'D', 'D', 'D', 'D', 2, 'ralph'),
(4, 'D', 'D', 'D', 'D', 'D', 2, 'Marvin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
