-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 12:45 AM
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
(3, 'user', 'qwe', 'qwe', 'user'),
(5, '123', '123', '123', 'user'),
(7, 'zxc', 'zxc', 'zxc', 'user'),
(8, 'userasd', 'userasd', 'userasd', 'user'),
(9, 'jasfer', 'jasfer', 'Jasfer@gmail.com', 'user');

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
(8, 'zcx', 'zxc', 'zxc', '333', 'upload/20211013224745242747795_552376055980416_574', 'zxc', 'zxc', 122, 2, ''),
(11, '11', '11', '11', '11', 'upload/20211011234911giveaway.jpg', '11', '11', 11, 11, ''),
(12, '12', '12', '12', '12', 'upload/20211011234857slp 1.jpg', '12', '12', 12, 12, ''),
(15, 'dm', 'Drama', 'japanese', '2021', 'upload/20211010215753tanjirp.jpg', 'mugen', 'marvels', 150, 3, ''),
(25, 'Ino', 'Comedy', 'japanese', '2522', 'upload/20211011221739Inosuke_.jpg', 'director 1', 'marvels', 252, 2, ''),
(33, '33', '33', '33', '33', 'upload/20211011234924GAME.jpg', '33', '33', 33, 33, ''),
(66, '66', '66', '66', '66', 'upload/20211011234943DC.jpg', '66', '66', 66, 66, ''),
(88, 'Shinobu', 'Horror', 'language 1', '2021', 'upload/20211011222223images.jpeg', 'director 1', 'production 1', 123, 1, ''),
(101, 'Kimetsu', 'Action', 'english', '2004', 'upload/20211013225436unknown.png', 'Ruru', 'marvels', 200, 3, ''),
(111, 'DC', 'Action', 'English', '2021', 'upload/20211013230722DC.jpg', 'DC', 'DC prod', 22, 1, 'Monday');

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
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
