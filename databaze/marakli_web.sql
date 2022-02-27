-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 11:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
(321, 25, 18),
(322, 36, 2);

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
(8, '8 marsi', '2022-03-03 15:27:00', 'Individi duhet detyrimisht te kete helmeten dhe pajisjet mbrojtes. Duhet te keni parasysh qe rrugtimi eshte i gjate andaj merrni ushqim, uje dhe te holla mjafstushem.', '../../photos/marsi.jpg'),
(10, '28 nentori', '2022-02-26 16:34:00', 'Individi duhet detyrimisht te kete helmeten dhe pajisjet mbrojtes. Duhet te keni parasysh qe rrugtimi eshte i gjate andaj merrni ushqim, uje dhe te holla mjafstushem.', '../../photos/28 nentori.jpg'),
(11, 'kanceri', '2022-03-04 19:47:00', 'Individi duhet detyrimisht te kete helmeten dhe pajisjet mbrojtes. Duhet te keni parasysh qe rrugtimi eshte i gjate andaj merrni ushqim, uje dhe te holla mjafstushem.', '../../photos/4 shkurt.jpg'),
(12, 'Prizren', '2022-02-27 21:45:00', 'Individi duhet detyrimisht te kete helmeten dhe pajisjet mbrojtes. Duhet te keni parasysh qe rrugtimi eshte i gjate andaj merrni ushqim, uje dhe te holla mjafstushem.', '../../photos/prizren.jpg');

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
(26, '../../photos/logo.png', 'Stiker\"LovLov\"', 2, 3),
(27, '../../photos/logo2.png', 'Stiker\"Livines\"', 1, 3),
(31, '../../photos/logo1.png', 'Stiker\"Anakonda\"', 1, 3),
(32, '../../photos/akse2.jpg', 'Termos', 5, 2),
(33, '../../photos/akse3.jpg', 'Helmet', 22, 2),
(34, '../../photos/akse4.jpg', 'Pompe', 7, 2),
(35, '../../photos/shirt3.jpg', 'Bluze \" Marakli \"', 27, 1),
(36, '../../photos/shirt.jpg', 'Bluze \" Marakli \"', 12, 1),
(37, '../../photos/shirt1.jpg', 'Bluze \" Marakli \"', 25, 1),
(38, '../../photos/shirt2.jpg', 'Bluze \" Marakli \"', 17, 1);

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
(1, 'Granit', 'Zeka', 17, 'Ukraine', 'gz51982@ubt-uni.net', '123', 1),
(2, 'Albin', 'Saraqi', 20, 'Dardania', 'as51465@ubt-uni.net', '123', 1),
(18, 'Marakli', 'Web', 19, 'Peje', 'marakli_web@ubt-uni.net', '123', 0),
(19, 'Blerina', 'Rrmoku', 12, 'Prishtine', 'blerina.rrmoku@ubt-uni.net', '123', 0);

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
(5, 12, 18),
(6, 8, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `item_cat`
--
ALTER TABLE `item_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vizitat`
--
ALTER TABLE `vizitat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
