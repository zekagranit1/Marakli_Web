-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 09:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marakli_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blerjet`
--

CREATE TABLE `blerjet` (
  `id` int(11) NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `User_ID_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blerjet`
--

INSERT INTO `blerjet` (`id`, `Item_ID`, `User_ID_`) VALUES
(319, 22, 18),
(320, 23, 18),
(321, 25, 18);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `Emri_eventit` varchar(255) NOT NULL,
  `Data_e` datetime NOT NULL,
  `Description_e` text NOT NULL,
  `Foto_eventi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Emri_eventit`, `Data_e`, `Description_e`, `Foto_eventi`) VALUES
(4, 'Granit', '2022-02-04 15:22:00', 'aswefasef', '../../photos/28n.jpg'),
(6, 'event41', '2022-02-25 15:25:00', 'eafsefaseeafasefsasf\r\nafsefase\r\nfa\r\nsef\r\na\r\n\r\nasefaesefasef', '../../photos/main1.jpg'),
(7, 'event1', '2022-02-27 15:26:00', 'eqwrfwefw', '../../photos/bg1.jpg'),
(8, 'event412', '2022-03-03 15:27:00', 'saefasefaef ase asecfas', '../../photos/bg3.jpg'),
(10, '28 nentori', '2022-02-26 16:34:00', '28 nentori ', '../../photos/28 nentori.jpg'),
(11, 'kancer', '2022-03-04 19:47:00', 'dita e kancerit', '../../photos/4 shkurt.jpg'),
(12, 'Granit', '2022-02-27 21:45:00', 'faserf', '../../photos/bg2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_pic` varchar(255) NOT NULL DEFAULT '../../photos/bg1.jpg',
  `emri` varchar(255) NOT NULL,
  `cmimi` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_pic`, `emri`, `cmimi`, `category`) VALUES
(22, '../../photos/shirt.jpg', 'item nr 1', 12, 1),
(23, '../../photos/akse4.jpg', 'item nr 2', 32, 2),
(25, '../../photos/akse2.jpg', 'item nr 1', 12, 2),
(26, '../../photos/logo.png', 'item nr 1', 12, 3),
(27, '../../photos/logo2.png', 'item nr 444', 32, 3),
(28, '../../photos/default.jpg', 'saerfasefasef', 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `item_cat`
--

CREATE TABLE `item_cat` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_cat`
--

INSERT INTO `item_cat` (`id`, `emri`) VALUES
(1, 'veshje\r\n'),
(2, 'aksesor'),
(3, 'stikera');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Mbiemri` varchar(255) NOT NULL,
  `Mosha` int(11) NOT NULL,
  `Adresa` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Is_admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Emri`, `Mbiemri`, `Mosha`, `Adresa`, `Email`, `Pass`, `Is_admin`) VALUES
(18, 'Granit', 'zeka', 19, 'prishtin', 'zekagranit1@gmail.com', '123', 1),
(19, 'albini', 'saraqi', 12, 'prsh', 'albinsaraqi@ubt-uni.net', 'abc', 1),
(21, 'Granit', 'Zeka', 17, 'ase', 'zekagranit1@gmail', 'Graniti123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vizitat`
--

CREATE TABLE `vizitat` (
  `id` int(11) NOT NULL,
  `Event_ID` int(11) NOT NULL,
  `User_ID_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vizitat`
--

INSERT INTO `vizitat` (`id`, `Event_ID`, `User_ID_`) VALUES
(4, 8, 18),
(5, 12, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blerjet`
--
ALTER TABLE `blerjet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_cat`
--
ALTER TABLE `item_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vizitat`
--
ALTER TABLE `vizitat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blerjet`
--
ALTER TABLE `blerjet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `item_cat`
--
ALTER TABLE `item_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vizitat`
--
ALTER TABLE `vizitat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
