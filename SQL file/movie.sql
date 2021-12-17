-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 11:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserId` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserId`, `uname`, `pass`, `email`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin'),
(2, 'user', 'user', 'user@gmail.com', 'user'),
(10, 'roro', 'roro', 'Roro@gmail.com', 'user'),
(11, 'test', 'test', 'test@gmail.com', 'user'),
(12, 'user2', 'user2', 'user2@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `production` varchar(50) NOT NULL,
  `availticket` int(50) NOT NULL,
  `numset` int(50) NOT NULL,
  `dayavail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `title`, `genre`, `language`, `year`, `poster`, `director`, `production`, `availticket`, `numset`, `dayavail`) VALUES
(2, 'Eternals', 'Fantasy', 'English', '300', 'upload/20211023165949eternals1.jpg', 'Chloé Zhao', 'Marvels', 250, 2, 'Tuesday'),
(3, 'John Wick 4', 'Action', 'Italian', '350', 'upload/20211023170152john_wick.png', 'Chad Stahelski', 'Thunder Roads Picrture', 200, 4, 'Wednesday'),
(4, 'Spider Man (Spider Verse)', 'Fantasy', 'English', '400', 'upload/20211023170506asdf.jpg', 'Peter Ramsey, Rodney Rothman, and Bob Persichetti', 'Marvels', 300, 4, 'Saturday'),
(5, 'Dito at Doon', 'Drama', 'Filipino', '250', 'upload/20211026094052dddd.jpg', 'Daphne Chiu', 'TBA Studios', 150, 5, 'Thursday'),
(6, 'Farwayland', 'Romance', 'Filipino', '300', 'upload/20211026094206fff.jpg', 'Veronica Velasco', 'MavX Productions', 320, 4, 'Friday'),
(7, 'Hello, Love, Goodbye', 'Romance', 'Filipino', '270', 'upload/20211026094356hhh.jpg', 'Cathy Garcia-Molina', 'ABS-CBN Film Productions', 230, 3, 'Sunday'),
(1212, 'Purge', 'Horror', 'English', '300', 'upload/20211026104654ppp.jpg', 'ruru', 'jasfer', 222, 5, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(8) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `city_name`, `email`) VALUES
(0, 'ruru', 'cruz', 'ne', 'rueljoseph.cruz@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
