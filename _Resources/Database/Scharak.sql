-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2018 at 07:40 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Scharak`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE IF NOT EXISTS `Accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nickname` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`id`, `username`, `password`, `email`, `nickname`) VALUES
(1, 'viorel', 'r22825462', 'viorel.omv@gmail.com', 'viorelstk'),
(2, 'florin', 'r22825462', 'florin@gmail.com', 'florinelu'),
(3, 'mitica', 'r22825462', 'mitica@mail.com', 'mtk'),
(4, 'codrut', 'r22825462', 'codrut@gmail.com', 'nasu'),
(5, 'teo', 'r22825462', 'teo@gmail.com', 'teo');

-- --------------------------------------------------------

--
-- Table structure for table `Characters`
--

CREATE TABLE IF NOT EXISTS `Characters` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `stage` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `money` int(11) NOT NULL,
  `st_points` int(11) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Characters`
--

INSERT INTO `Characters` (`id`, `uid`, `level`, `stage`, `class`, `money`, `st_points`, `experience`) VALUES
(5, 1, 1, 1, 'Anime', 1234, 12, 1234),
(6, 2, 2, 1, 'Anime', 1234, 12, 1234),
(8, 3, 3, 2, 'Marvel', 1231, 12312, 12),
(9, 4, 12, 4, 'Archer', 123, 12, 123);

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE IF NOT EXISTS `Items` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `ad` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `ar` int(11) NOT NULL,
  `mr` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `uid`, `type`, `level`, `health`, `ad`, `ap`, `ar`, `mr`) VALUES
(1, 5, 1, 1, 10, 10, 10, 10, 10),
(2, 5, 0, 0, 0, 0, 0, 0, 0),
(3, 5, 1, 1, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Stage`
--

CREATE TABLE IF NOT EXISTS `Stage` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stage`
--

INSERT INTO `Stage` (`id`, `name`) VALUES
(1, 'Stage 1'),
(2, 'Stage 2'),
(3, 'Stage 3'),
(4, 'Stage 4'),
(5, 'Stage 5');

-- --------------------------------------------------------

--
-- Table structure for table `Stats`
--

CREATE TABLE IF NOT EXISTS `Stats` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `ad` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `ar` int(11) NOT NULL,
  `mr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Villains`
--

CREATE TABLE IF NOT EXISTS `Villains` (
  `id` int(11) NOT NULL,
  `stage` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `health` int(11) NOT NULL,
  `ad` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `ar` int(11) NOT NULL,
  `mr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Unique` (`username`);

--
-- Indexes for table `Characters`
--
ALTER TABLE `Characters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `Charaters_Stage` (`stage`);

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Items_Charaters` (`uid`);

--
-- Indexes for table `Stage`
--
ALTER TABLE `Stage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Stats`
--
ALTER TABLE `Stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Charaters_Stats` (`uid`);

--
-- Indexes for table `Villains`
--
ALTER TABLE `Villains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Villains_Stage` (`stage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accounts`
--
ALTER TABLE `Accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Characters`
--
ALTER TABLE `Characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Stage`
--
ALTER TABLE `Stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Stats`
--
ALTER TABLE `Stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Villains`
--
ALTER TABLE `Villains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Characters`
--
ALTER TABLE `Characters`
  ADD CONSTRAINT `Accounts_Charaters` FOREIGN KEY (`uid`) REFERENCES `Accounts` (`id`),
  ADD CONSTRAINT `Charaters_Stage` FOREIGN KEY (`stage`) REFERENCES `Stage` (`id`);

--
-- Constraints for table `Items`
--
ALTER TABLE `Items`
  ADD CONSTRAINT `Items_Charaters` FOREIGN KEY (`uid`) REFERENCES `Characters` (`id`);

--
-- Constraints for table `Stats`
--
ALTER TABLE `Stats`
  ADD CONSTRAINT `Charaters_Stats` FOREIGN KEY (`uid`) REFERENCES `Characters` (`id`);

--
-- Constraints for table `Villains`
--
ALTER TABLE `Villains`
  ADD CONSTRAINT `Villains_Stage` FOREIGN KEY (`stage`) REFERENCES `Stage` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
