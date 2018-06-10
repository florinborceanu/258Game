-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2018 at 01:08 PM
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
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'viorel', '12c8e64e158e1112ed34d470f37af644', 'viorel@gmail.com');

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
  `experience` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `nickname` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Characters`
--

INSERT INTO `Characters` (`id`, `uid`, `level`, `stage`, `class`, `money`, `st_points`, `experience`, `score`, `nickname`) VALUES
(1, 1, 1, 1, '0', 0, 0, 0, 0, 'viorel');

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE IF NOT EXISTS `Items` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `Helmet` int(11) DEFAULT NULL,
  `Chest` int(11) DEFAULT NULL,
  `Pants` int(11) DEFAULT NULL,
  `firstWeapon` int(11) DEFAULT NULL,
  `secondWeapon` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `uid`, `Helmet`, `Chest`, `Pants`, `firstWeapon`, `secondWeapon`) VALUES
(1, 1, 1, 1, 1, 1, 1);

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
(1, 'Hawk_Eye'),
(2, 'Capt_America'),
(3, 'Hulk'),
(4, 'Iron_Man'),
(5, 'Thor');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stats`
--

INSERT INTO `Stats` (`id`, `uid`, `health`, `ad`, `ap`, `ar`, `mr`) VALUES
(1, 1, 1, 1, 1, 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Villains`
--

INSERT INTO `Villains` (`id`, `stage`, `name`, `class`, `health`, `ad`, `ap`, `ar`, `mr`) VALUES
(1, 1, 'Hawk Eye', 'Archer', 2100, 10, 10, 10, 10),
(2, 5, 'Thor', 'Warrior', 5000, 100, 50, 100, 50);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Characters`
--
ALTER TABLE `Characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Stage`
--
ALTER TABLE `Stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Stats`
--
ALTER TABLE `Stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Villains`
--
ALTER TABLE `Villains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Characters`
--
ALTER TABLE `Characters`
  ADD CONSTRAINT `Accounts_Charaters` FOREIGN KEY (`uid`) REFERENCES `Accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Charaters_Stage` FOREIGN KEY (`stage`) REFERENCES `Stage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Items`
--
ALTER TABLE `Items`
  ADD CONSTRAINT `Items_Charaters` FOREIGN KEY (`uid`) REFERENCES `Characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Stats`
--
ALTER TABLE `Stats`
  ADD CONSTRAINT `Charaters_Stats` FOREIGN KEY (`uid`) REFERENCES `Characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Villains`
--
ALTER TABLE `Villains`
  ADD CONSTRAINT `Villains_Stage` FOREIGN KEY (`stage`) REFERENCES `Stage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
