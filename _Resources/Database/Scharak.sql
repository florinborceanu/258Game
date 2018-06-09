-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2018 at 08:51 AM
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

CREATE TABLE if not EXISTS `Accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nickname` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`id`, `username`, `password`, `email`, `nickname`) VALUES

(2, 'florin', '098f6bcd4621d373cade', 'florin@gmail.com', 'florin'),
(3, 'mitica', '098f6bcd4621d373cade', 'mitica@gmail.com', 'mitica'),
(4, 'teo', '098f6bcd4621d373cade', 'teo@gmail.com', 'teo'),
(5, 'codrut', '098f6bcd4621d373cade', 'codrut@gmail.com', 'codrut'),
(6, 'marian', '12c8e64e158e1112ed34', 'marian@gmail.com', 'marian'),
(7, 'gabriel', '098f6bcd4621d373cade', 'gabriel@gmail.com', 'gabriel'),
(8, 'ionut', '098f6bcd4621d373cade', 'ionut@gmail.com', 'ionut'),
(9, 'test', '098f6bcd4621d373cade', 'test@gmail.com', 'test'),
(10, 'onica', '12c8e64e158e1112ed34d470f37af644', 'onica@gmail.com', 'onica'),
(11, 'teodora', '7e8b07800ef8b0511ddaa3a632be87da', 'Teodora@gmail.com', 'teodora');

-- --------------------------------------------------------

--
-- Table structure for table `Characters`
--

CREATE TABLE if not EXISTS `Characters` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `stage` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `money` int(11) NOT NULL,
  `st_points` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Characters`
--

INSERT INTO `Characters` (`id`, `uid`, `level`, `stage`, `class`, `money`, `st_points`, `experience`, `Score`) VALUES
(1, 1, 1, 1, 'Anime', 1000, 10, 100, 325),
(2, 2, 2, 2, 'Marvel', 1234, 12, 1234, 100),
(3, 3, 2, 3, 'Anime', 1234, 12, 1234, 390),
(4, 4, 3, 4, 'Marvel', 1231, 12312, 12, 850),
(5, 5, 12, 5, 'Archer', 123, 12, 123, 50),
(6, 6, 2, 5, 'Mag', 5, 41, 1424, 1234),
(7, 7, 2, 5, 'Mageant', 4, 41, 350, 2345),
(8, 8, 2, 5, 'Mage-ic', 3, 10, 100, 300),
(9, 9, 2, 5, 'Werewolf', 5, 41, 14, 150);

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE IF NOT EXISTS `Items` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `helmet` int(11) NOT NULL,
  `chest` int(11) NOT NULL,
  `pants` int(11) NOT NULL,
  `primaryWeapon` int(11) NOT NULL,
  `secondaryWeapon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Characters`
--
ALTER TABLE `Characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
