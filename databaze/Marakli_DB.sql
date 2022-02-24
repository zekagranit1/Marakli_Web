-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 07:27 PM
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
-- Database: `gjejpuntor`
--
CREATE DATABASE IF NOT EXISTS `gjejpuntor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gjejpuntor`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `NAME` varchar(128) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`NAME`, `category`, `id`) VALUES
('Agricultural Equipment Operators', 1, 1),
('Agricultural Inspectors', 1, 2),
('Agricultural Sciences Teachers, Postsecondary', 1, 3),
('Animal Breeders', 1, 4),
('Animal Scientists', 1, 5),
('Butchers and Meat Cutters', 1, 6),
('Buyers and Purchasing Agents, Farm Products', 1, 7),
('Cartographers and Photogrammetrists', 1, 8),
('Commercial Divers', 1, 9),
('Continuous Mining Machine Operators', 1, 10),
('Derrick Operators, Oil and Gas', 1, 11),
('Environmental Compliance Inspectors', 1, 12),
('Environmental Engineering Technicians', 1, 13),
('Environmental Engineers', 1, 14),
('Environmental Science and Protection Technicians, Including Health', 1, 15),
('Explosives Workers, Ordnance Handling Experts, and Blasters', 1, 16),
('Fallers', 1, 17),
('Farm and Home Management Advisors', 1, 18),
('Farm Equipment Mechanics and Service Technicians', 1, 19),
('Farmworkers and Laborers, Crop\r\n', 1, 20),
('Farmworkers and Laborers, Crop, Nursery, and Greenhouse\r\n', 1, 21),
('Farmworkers, Farm, Ranch, and Aquacultural Animals', 1, 22),
('Financial Managers, Branch or Department', 1, 23),
('First-Line Supervisors of Agricultural Crop and Horticultural Workers\r\n', 1, 24),
('First-Line Supervisors of Animal Husbandry and Animal Care Workers\r\n', 1, 25),
('First-Line Supervisors of Aquacultural Workers', 1, 26),
('First-Line Supervisors of Farming, Fishing, and Forestry Workers', 1, 27),
('First-Line Supervisors of Landscaping, Lawn Service, and Groundskeeping Workers', 1, 28),
('First-Line Supervisors of Logging Workers', 1, 29),
('First-Line Supervisors of Retail Sales Workers', 1, 30),
('Fish and Game Wardens', 1, 31),
('Fishers and Related Fishing Workers', 1, 32),
('Food and Tobacco Roasting, Baking, and Drying Machine Operators and Tenders', 1, 33),
('Food Batchmakers', 1, 34),
('Food Cooking Machine Operators and Tenders', 1, 35),
('Food Scientists and Technologists', 1, 36),
('Forest and Conservation Technicians', 1, 37),
('Forest and Conservation Workers', 1, 38),
('Foresters', 1, 39),
('Gas Compressor and Gas Pumping Station Operators', 1, 40),
('Gas Plant Operators', 1, 41),
('Geological and Petroleum Technicians', 1, 42),
('Geological Sample Test Technicians', 1, 43),
('Geophysical Data Technicians', 1, 44),
('Graders and Sorters, Agricultural Products', 1, 45),
('Helpers--Extraction Workers', 1, 46),
('Hunters and Trappers', 1, 47),
('Loading Machine Operators, Underground Mining\r\n', 1, 48),
('Log Graders and Scalers', 1, 49),
('Logging Equipment Operators', 1, 50),
('Meat, Poultry, and Fish Cutters and Trimmers', 1, 51),
('Mine Cutting and Channeling Machine Operators', 1, 52),
('Mine Shuttle Car Operators', 1, 53),
('Natural Sciences Managers', 1, 54),
('Nonfarm Animal Caretakers', 1, 55),
('Nursery Workers', 1, 56),
('Occupational Health and Safety Specialists', 1, 57),
('Occupational Health and Safety Technicians', 1, 58),
('Parts Salespersons', 1, 59),
('Pest Control Workers', 1, 60),
('Pesticide Handlers, Sprayers, and Applicators, Vegetation', 1, 61),
('Petroleum Pump System Operators, Refinery Operators, and Gaugers', 1, 62),
('Precision Agriculture Technicians', 1, 63),
('Pump Operators, Except Wellhead Pumpers', 1, 64),
('Pump Operators, Except Wellhead Pumpers', 1, 65),
('Recycling and Reclamation Workers', 1, 66),
('Recycling Coordinators', 1, 67),
('Refuse and Recyclable Material Collectors', 1, 68),
('Rock Splitters, Quarry', 1, 69),
('Roof Bolters, Mining', 1, 70),
('Rotary Drill Operators, Oil and Gas', 1, 71),
('Roustabouts, Oil and Gas', 1, 72),
('Sawing Machine Setters, Operators, and Tenders, Wood\r\n', 1, 73),
('Service Unit Operators, Oil, Gas, and Mining', 1, 74),
('Slaughterers and Meat Packers', 1, 75),
('Soil and Plant Scientists', 1, 76),
('Soil and Water Conservationists', 1, 77),
('Tree Trimmers and Pruners', 1, 78),
('Veterinarians', 1, 79),
('Veterinary Assistants and Laboratory Animal Caretakers', 1, 80),
('Veterinary Technologists and Technicians', 1, 81),
('Water and Wastewater Treatment Plant and System Operators', 1, 82),
('Wellhead Pumpers', 1, 83),
('Zoologists and Wildlife Biologists', 1, 84),
('Architects, Except Landscape and Naval\r\n', 2, 85),
('Brickmasons and Blockmasons', 2, 86),
('Carpenters', 2, 87),
('Carpet Installers\r\n', 2, 88),
('Cement Masons and Concrete Finishers', 2, 89),
('Civil Engineering Technicians', 2, 90),
('Civil Engineers', 2, 91),
('Construction and Building Inspectors', 2, 92),
('Construction Carpenters', 2, 93),
('Construction Laborers', 2, 94),
('Construction Managers', 2, 95),
('Control and Valve Installers and Repairers, Except Mechanical Door', 2, 96),
('Conveyor Operators and Tenders', 2, 97),
('Cost Estimators', 2, 98),
('Crane and Tower Operators', 2, 99),
('Dredge Operators', 2, 100),
('Drywall and Ceiling Tile Installers', 2, 101),
('Earth Drillers, Except Oil and Gas', 2, 102),
('Electrical and Electronics Repairers, Powerhouse, Substation, and Relay', 2, 103),
('Electrical Power-Line Installers and Repairers', 2, 104),
('Electricians', 2, 105),
('Elevator Installers and Repairers', 2, 106),
('Excavating and Loading Machine and Dragline Operators\r\n', 2, 107),
('Fence Erectors', 2, 108),
('First-Line Supervisors of Construction Trades and Extraction Workers', 2, 109),
('Floor Layers, Except Carpet, Wood, and Hard Tiles', 2, 110),
('Floor Sanders and Finishers', 2, 111),
('Geothermal Technicians', 2, 112),
('Glaziers', 2, 113),
('Hazardous Materials Removal Workers', 2, 114),
('Heating and Air Conditioning Mechanics and Installers', 2, 115),
('Heating, Air Conditioning, and Refrigeration Mechanics and Installers', 2, 116),
('Helpers--Brickmasons, Blockmasons, Stonemasons, and Tile and Marble Setters', 2, 117),
('Helpers--Carpenters', 2, 118),
('Helpers--Electricians', 2, 119),
('Helpers--Installation, Maintenance, and Repair Workers', 2, 120),
('Helpers--Painters, Paperhangers, Plasterers, and Stucco Masons', 2, 121),
('Helpers--Pipelayers, Plumbers, Pipefitters, and Steamfitters', 2, 122),
('Helpers--Roofers', 2, 123),
('Highway Maintenance Workers', 2, 124),
('Hoist and Winch Operators', 2, 125),
('Home Appliance Repairers', 2, 126),
('Insulation Workers, Floor, Ceiling, and Wall', 2, 127),
('Insulation Workers, Mechanical', 2, 128),
('Interior Designers', 2, 129),
('Landscape Architects', 2, 130),
('Landscaping and Groundskeeping Workers', 2, 131),
('Manufactured Building and Mobile Home Installers\r\n', 2, 132),
('Mechanical Door Repairers', 2, 133),
('Mechanical Drafters', 2, 134),
('Operating Engineers and Other Construction Equipment Operators', 2, 135),
('Painters, Construction and Maintenance', 2, 136),
('Paperhangers', 2, 137),
('Paving, Surfacing, and Tamping Equipment Operators', 2, 138),
('Pile-Driver Operators', 2, 139),
('Pipe Fitters and Steamfitters', 2, 140),
('Pipelayers', 2, 141),
('Plasterers and Stucco Masons', 2, 142),
('Plumbers', 2, 143),
('Plumbers, Pipefitters, and Steamfitters', 2, 144),
('Refractory Materials Repairers, Except Brickmasons', 2, 145),
('Refrigeration Mechanics and Installers', 2, 146),
('Reinforcing Iron and Rebar Workers', 2, 147),
('Riggers', 2, 148),
('Roofers', 2, 149),
('Rough Carpenters', 2, 150),
('Segmental Pavers', 2, 151),
('Septic Tank Servicers and Sewer Pipe Cleaners', 2, 152),
('Sheet Metal Workers', 2, 153),
('Solar Energy Installation Managers', 2, 154),
('Solar Thermal Installers and Technicians', 2, 155),
('Stationary Engineers and Boiler Operators', 2, 156),
('Stonemasons', 2, 157),
('Structural Iron and Steel Workers', 2, 158),
('Structural Metal Fabricators and Fitters', 2, 159),
('Surveyors', 2, 160),
('Tapers', 2, 161),
('Terrazzo Workers and Finishers\r\n', 2, 162),
('Tile and Marble Setters', 2, 163),
('Weatherization Installers and Technicians', 2, 164);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` varchar(36) NOT NULL,
  `user_one` int(11) DEFAULT NULL,
  `user_two` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_one`, `user_two`) VALUES
('3c1feebd-fe2e-4b3e-9983-d68fd0de81ed', 34, 32),
('cec5b900-75b9-4e6f-ac8c-966027808c57', 31, 29),
('d377e5ff-a6a7-45f8-9194-2d8231b64f80', 31, 27),
('ee5d3182-dc7a-4303-ad6f-caf1001ca91f', 34, 33);

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `user_id` int(11) DEFAULT NULL,
  `chat_id` varchar(36) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `timestamp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`user_id`, `chat_id`, `message`, `timestamp`) VALUES
(31, 'd377e5ff-a6a7-45f8-9194-2d8231b64f80', 'sdf', '2020-02-27'),
(31, 'd377e5ff-a6a7-45f8-9194-2d8231b64f80', 'sfesdfsefs dsfgrv sefsejkl jkjsefsd', '2020-02-27'),
(34, '3c1feebd-fe2e-4b3e-9983-d68fd0de81ed', 'hello', '2020-02-27'),
(34, '3c1feebd-fe2e-4b3e-9983-d68fd0de81ed', 'I need your help', '2020-02-27'),
(34, 'ee5d3182-dc7a-4303-ad6f-caf1001ca91f', 'hello', '2020-02-27'),
(34, 'ee5d3182-dc7a-4303-ad6f-caf1001ca91f', 'im here to help you', '2020-02-27'),
(34, 'ee5d3182-dc7a-4303-ad6f-caf1001ca91f', 'What do you need me to do', '2020-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `employer` int(11) NOT NULL,
  `TIMESTAMP` bigint(20) DEFAULT NULL,
  `_from` text DEFAULT NULL,
  `_to` text DEFAULT NULL,
  `employee` int(11) DEFAULT NULL,
  `max_money` varchar(10) DEFAULT NULL,
  `completed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `description`, `employer`, `TIMESTAMP`, `_from`, `_to`, `employee`, `max_money`, `completed`) VALUES
(1, 'job', 'job', 31, 1582836447703, '0000-00-00', '0000-00-00', 41, '35 €', 1),
(2, 'jqw', 'wejorj', 31, 1582836593413, '0000-00-00', '0000-00-00', NULL, '12 €', 0),
(3, 'jqw', 'wejorj', 31, 1582836713411, '0000-00-00', '0000-00-00', NULL, '12 €', 0),
(4, 'tww', 'wertw', 31, 1582836790217, '0000-00-00', '0000-00-00', NULL, '12 $', 0),
(5, 'qew', 'qertwerw', 31, 1582836879613, '0000-00-00', '0000-00-00', NULL, '123 ₤', 0),
(6, 'qew', 'qertwerw', 31, 1582836892583, '0000-00-00', '0000-00-00', NULL, '123 ₤', 0),
(7, 'tww', 'wertw', 31, 1582836892584, '0000-00-00', '0000-00-00', NULL, '12 $', 0),
(8, 'employed job', 'fesf efsefdf esfefsdf esf', 29, NULL, '0000-00-00', '0000-00-00', 31, '312 E', 0),
(9, 'I need help on my logo design', 'I need a nice logo design for my company', 32, NULL, '0000-00-00', '0000-00-00', 40, '75$', 1),
(10, 'My washing machine broke down', 'The valve seems to have been detached and I need someone to help me fix it', 33, NULL, '2020/4/10', '2020/5/10', 40, '85$', 0),
(13, 'Broken Boiler', 'I need some help on my broken boiler', 34, 1582840242523, '0000-00-00', '0000-00-00', NULL, '45 €', 0),
(15, 'My computer is broken', 'My RAM is going at half power because of some physical contact, please help me', 34, 1582842410444, '0000-00-00', '0000-00-00', NULL, '50 €', 0),
(16, 'the real job', 'this a job description. this a job description. this a job description. this a job description. this a job description. this a job description. this a job description. this a job description. this a job description. ', 39, 1601052472318, '1234/12/12', '5343/12/54', NULL, '23 $', 0),
(17, 'job job', 'job job job', 39, 1601052592332, '0000-00-00', '0000-00-00', NULL, '23 $', 0),
(18, 'work work work', 'work work work work work work work work work work work work', 41, 1603379037410, '0000-00-00', '0000-00-00', NULL, '12 $', 0),
(19, 'wer', 'qwretsd', 40, 1605796780955, '0000-00-00', '0000-00-00', NULL, '12 ₤', 0),
(20, '', '', 40, 1605796978479, '0000-00-00', '0000-00-00', NULL, '121 ', 0),
(21, 'rqeq2e', 'qwrq2eqw', 40, 1605797035420, '0000-00-00', '0000-00-00', NULL, '412 $', 0),
(22, '3rw', 'qwewew', 40, 1605797101262, '0000-00-00', '0000-00-00', NULL, '12 €', 0),
(23, '12as2', '123dsfawesd', 40, 1605797155592, '0000-00-00', '0000-00-00', NULL, '12 ₤', 0),
(24, '14sdf', '1afsq2', 40, 1605797193696, '0000-00-00', '0000-00-00', NULL, '43 ₤', 0),
(25, '14sdf', '1afsq2', 40, 1605797199498, '0000-00-00', '0000-00-00', NULL, '43 ₤', 0),
(26, 'ew', 'qweds', 40, 1605797247546, '0000-00-00', '0000-00-00', NULL, '21 $', 0),
(27, 'ew', 'qweds', 40, 1605797255252, '0000-00-00', '0000-00-00', NULL, '21 $', 0),
(28, 'ert', '213dfs', 40, 1605797404928, '0000-00-00', '0000-00-00', NULL, '20 ₤', 0),
(29, '34twe', '12sdq2as', 40, 1605797487212, '0', '0', NULL, '26 $', 0),
(30, 'awe', 'qrasdfaweaasad', 40, 1605797573045, '', '4131-12-31', NULL, '12 €', 0),
(31, 'broken washing machine', 'its broken', 40, 1605797624718, '2020-04-10', '2020-05-10', NULL, '56 $', 0),
(32, 'fW', 'Q2R', 40, 1605798013336, '0311-12-12', '1231-12-04', NULL, '25 $', 0),
(33, 'qe', 'qweq', 40, 1605798047082, '1243-12-12', '2342-12-31', NULL, '23 €', 0),
(34, 'qwer21q', 'WdfWW', 40, 1605798078528, '0312-02-12', '1412-12-04', NULL, '12 €', 0),
(35, 'qwer21q', 'WdfWW', 40, 1605798124486, '0312-02-12', '1412-12-04', NULL, '12 €', 0),
(36, '123wqdas', '123qwdasda weadsa wd a', 40, 1605798277386, '2314-12-31', '', NULL, '2142 $', 0),
(37, 'qweq', 'adwa', 40, 1605798355585, '0024-12-31', '', NULL, '15 ₤', 0),
(38, 'qweq', 'adwa', 40, 1605798454758, '0024-12-31', '', NULL, '15 ₤', 0),
(39, 'qasd', 'awdas wadasd awda', 40, 1605798484006, '0003-12-31', '', NULL, '12 ₤', 0),
(40, 'qasd', 'awdas wadasd awda', 40, 1605798504029, '0003-12-31', '', NULL, '12 ₤', 0),
(41, 'work work workqweqwe', 'qweqweqwrew', 43, 1609783294005, '231212/12/31', '2312/2-/2-', NULL, '132 €', 0),
(42, 'work work workqweqwe', 'qweqweqwrew', 43, 1609783414013, '231212/12/31', '2312/2-/2-', NULL, '132 €', 0),
(43, 'job job asdadw', 'awdae w ae sd aw  ds', 40, 1610017471212, '12121/12/12', '1212/-1/-1', NULL, '24 €', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `category` int(11) DEFAULT NULL,
  `job` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`category`, `job`) VALUES
(14, 9),
(103, 13),
(105, 15),
(1, 16),
(103, 16),
(104, 16),
(105, 16),
(1, 17),
(103, 17),
(104, 17),
(105, 17),
(16, 18),
(20, 18),
(1, 19),
(19, 19),
(22, 19),
(17, 21),
(18, 21),
(50, 22),
(26, 22),
(7, 23),
(4, 24),
(6, 24),
(7, 24),
(4, 25),
(6, 25),
(7, 25),
(7, 26),
(7, 27),
(152, 28),
(1, 29),
(19, 29),
(116, 30),
(145, 30),
(146, 30),
(82, 31),
(7, 32),
(17, 33),
(18, 33),
(16, 34),
(22, 34),
(16, 35),
(22, 35),
(1, 36),
(2, 36),
(6, 37),
(4, 37),
(6, 38),
(4, 38),
(1, 39),
(2, 39),
(1, 40),
(2, 40),
(27, 10),
(134, 10),
(1, 41),
(19, 41),
(22, 41),
(1, 42),
(19, 42),
(22, 42),
(103, 43),
(104, 43),
(105, 43);

-- --------------------------------------------------------

--
-- Table structure for table `job_request`
--

CREATE TABLE `job_request` (
  `id` int(11) NOT NULL,
  `USER` int(11) DEFAULT NULL,
  `job` int(11) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_request`
--

INSERT INTO `job_request` (`id`, `USER`, `job`, `accepted`) VALUES
(3, 30, 13, NULL),
(4, 40, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `job` int(11) DEFAULT NULL,
  `USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`job`, `USER`) VALUES
(13, 32);

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `NAME` varchar(128) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`NAME`, `id`) VALUES
('Agriculture, Food and Natural Resources', 1),
('Architecture and Construction', 2),
('Arts, Audio/Video Technology and Communications', 3),
('Business Management and Administration', 4),
('Education and Training', 5),
('Finance', 6),
('Government and Public Administration', 7),
('Health Science', 8),
('Hospitality and Tourism', 9),
('Human Services', 10),
('Information Technology', 11),
('Law, Public Safety, Corrections and Security', 12),
('Manufacturing', 13),
('Marketing, Sales and Service', 14),
('Science, Technology, Engineering and Mathematics', 15),
('Transportation, Distribution and Logistics', 16);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `employee` int(11) DEFAULT NULL,
  `employer` int(11) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `COMMENT` varchar(128) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `premium` tinyint(1) NOT NULL,
  `NAME` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `birthday` date NOT NULL,
  `user_password` text NOT NULL,
  `phone_number` varchar(32) DEFAULT NULL,
  `bio` varchar(1000) DEFAULT NULL,
  `headline` varchar(50) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `work` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `banner` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `premium`, `NAME`, `email`, `surname`, `birthday`, `user_password`, `phone_number`, `bio`, `headline`, `photo`, `work`, `education`, `banner`) VALUES
(26, 'real real', 0, 'real real', 'real@real.com', 'real real', '2004-10-04', '$2a$12$IQ2P798Dovd/BFCGJ92pzexkN16g91tQcuqy/MfDtjwYZi9H5oTkq', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'aewe', 0, 'aweasdf', '32aw2@sdfs', '3aw3r', '0212-11-02', '$2a$12$9c87Tx0/9um1t1j6tI8GCuHQwtJyN60s.wlZPkzQV9c7co2gJSlku', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'wqorwepo', 0, 'wpeoriwp', 'weor@wpoeirwo', 'powiepoiod', '0121-12-21', '$2a$12$JLTEKY09eUK012L36BdvauyU9/YuJm3X/nenCruyeBKrDfeyNnU7S', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'qwpem', 0, 'skjflsjkl', 'kjfs@ldskdjf', 'sslkjelkj', '0021-02-11', '$2a$12$ZaGMGNqfj1XFageRa4/fq.HjGgP3k794d5lwFy2VVtJAw8UECTkdm', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'qwerq', 0, 'qwer', 'QWER@QWER', 'qwer', '0012-12-12', 'asdf', NULL, 'qwerqwerqwe adfasd qw sasddx awd', 'engineer', 'default_profile_picture.png', 'Worked for 3 years at NASA qwer qwer qasdawer s', 'Engineering at MIT qwer qwer', NULL),
(31, 'hello2', 0, 'hello', 'hello@hello.com', 'hello', '0012-12-12', '$2a$12$IUOspwUyUD52BhregpoO4.NEVUPomGQ/WJ/dP2yT/gykk1GhM8pES', NULL, '213s 3qdsf 3wf34wfd', '3rw', 'default_profile_picture.png', NULL, NULL, NULL),
(32, 'GranitZeka', 0, 'Granit', 'g@gamil.com', 'Zeka', '2020-02-03', 'gra', NULL, NULL, 'engineer', NULL, NULL, NULL, NULL),
(33, 'Pendaa', 0, 'Penda', 'p@gamil.com', 'Smajljaj', '2020-02-03', 'gra', NULL, NULL, 'programmer', NULL, NULL, NULL, NULL),
(34, 'OltG', 0, 'Olt', 'oltgashi@gmail.com', 'Gashi', '2004-10-04', '$2a$12$B.KIyMWbNrWOFkm7LMsWIuBNoeFFwNGWc7HdTdOCpacitkUY6kJj.', NULL, 'Hello my name is Olt Gashi and Im an engineer', 'Olt Gashi', 'default_profile_picture.png', NULL, NULL, NULL),
(35, 'Idriz', 0, 'Idriz', 'Idriz@gmail.com', 'Pelaj', '2004-11-07', '$2a$12$3fSiSPGfyHA1zyNBSpcNXuGcoHhJf9T7sPnIUxl78t/NeFu4unrHy', NULL, 'Hi my name is Idriz', 'Idriz Pelaj', 'default_profile_picture.png', NULL, NULL, NULL),
(36, 'Olt', 0, 'Olt', 'olt@gmail.com', 'Gashi', '2004-10-04', '$2a$12$tMm3kDIEpVtEdHdg4lBbeOk1lQ9RiwVSTesnU2X.FJZBr9OhxU0ne', NULL, 'Hi, this is my description', 'Olt Headline', 'default_profile_picture.png', NULL, NULL, NULL),
(37, 'Erona', 0, 'Erona', 'e@gmail.com', 'Vrapcani', '1999-12-23', '$2a$12$SLc8os54zTy3rfB7mlefJ.R5NER7lQg5JJsGqDIBcHscIeKzaRac2', NULL, 'This is my description', 'Erona\'s Headline', 'default_profile_picture.png', NULL, NULL, NULL),
(38, 'nb', 0, 'oijm', 'jh@jhk.com', 'kj jh', '0012-12-12', '$2a$12$2.FfE.tKRw3U.6rooDomD.bZH.v6UFE.RByDwm42goiFl33T9o9eC', NULL, '', '', 'default_profile_picture.png', 'hello', 'hello there', NULL),
(39, 'tier', 0, 'rwoitueo', 'oriu@gsiu', 'woiertu', '0012-12-12', '$2a$12$ftYHX6q3nxLjqvtUy7lQNu6C5NoQevD3nZiqwmwsQ95IHmR7ocoF2', NULL, 'hello hi how you doin', 'top tier headline', 'default_profile_picture.png', 'worked for 2 years', 'studied for 2 years', NULL),
(40, 'qwer', 0, 'qwerqwer', 'qwerqewr@qwerqwer.com', 'qwerqewr', '1212-12-12', '$2a$12$uNvPxTFbMkBuCGsr6pxvSugScyAT8VwA/07XhupLxGHY4KQd39Jm6', NULL, 'this is my description', 'my headline', 'default_profile_picture.png', 'work wokr wkro', 'education edciation eictinoid\n ', NULL),
(41, 'zxcv', 0, 'zxcv', 'zxcv@zxcv', 'zxcv', '0012-12-12', '$2a$12$GJ98lnswiRhqQ7SXRCnpvu22Jt6SdXMOOCSwGCqoqPQdLjgtd1VHC', NULL, '', 'engineer', 'default_profile_picture.png', '', '', NULL),
(42, 'OltGashi123', 0, 'Olt', 'oltgashi1230234@gmail.com', 'Gashi', '1212-12-12', '$2a$12$3KpXkEQ.MWgYM2V5XUbCguxo99UKhzE03bH0lNjXKxbkq6kCIN4N2', NULL, 'desc desc desc desc desc desc des c', 'my headline', 'default_profile_picture.png', 'This is my work expred', 'university degrees are here', NULL),
(43, 'oltoltqq', 0, 'oltolt', 'oltolt@oltolt.com', 'oltolt', '0012-12-12', '$2a$12$hOUPOMqN7faaBS1vblzpEuybKiXlXMVejXODv2U1Ma1EX4ydtNuea', NULL, 'qwe qwe   ', 'hedahead', 'default_profile_picture.png', 'qwe fds', ' qwe vrsef', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`user_id`, `category_id`) VALUES
(25, 1),
(25, 2),
(25, 86),
(25, 87),
(25, 88),
(25, 89),
(26, 1),
(26, 2),
(26, 86),
(26, 87),
(26, 88),
(27, 1),
(27, 2),
(27, 3),
(27, 86),
(27, 88),
(27, 87),
(28, 1),
(28, 2),
(28, 3),
(28, 86),
(28, 87),
(28, 88),
(29, 2),
(29, 3),
(29, 86),
(29, 87),
(31, 2),
(31, 3),
(35, 9),
(35, 97),
(35, 98),
(34, 2),
(34, 3),
(34, 4),
(34, 5),
(34, 6),
(34, 103),
(34, 102),
(36, 1),
(36, 88),
(37, 3),
(37, 102),
(37, 104),
(38, 2),
(38, 1),
(38, 2),
(41, 2),
(41, 5),
(41, 6),
(41, 8),
(42, 1),
(42, 1),
(42, 2),
(42, 2),
(42, 3),
(42, 3),
(42, 4),
(42, 4),
(30, 1),
(30, 2),
(30, 62),
(39, 24),
(39, 23),
(39, 132),
(39, 129),
(40, 1),
(40, 2),
(40, 1),
(40, 32),
(43, 2),
(43, 5),
(43, 7),
(43, 87),
(43, 90);

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `USER` int(11) DEFAULT NULL,
  `permission` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_one` (`user_one`),
  ADD KEY `user_two` (`user_two`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `chat_id` (`chat_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer` (`employer`),
  ADD KEY `employee` (`employee`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD KEY `category` (`category`),
  ADD KEY `job` (`job`);

--
-- Indexes for table `job_request`
--
ALTER TABLE `job_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job` (`job`),
  ADD KEY `USER` (`USER`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD KEY `USER` (`USER`),
  ADD KEY `job` (`job`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD KEY `job_id` (`job_id`),
  ADD KEY `employee` (`employee`),
  ADD KEY `employer` (`employer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD KEY `USER` (`USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `job_request`
--
ALTER TABLE `job_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`category`) REFERENCES `main_category` (`id`);

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`user_one`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`user_two`) REFERENCES `users` (`id`);

--
-- Constraints for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD CONSTRAINT `chat_messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chat_messages_ibfk_2` FOREIGN KEY (`chat_id`) REFERENCES `chats` (`id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`employer`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`employee`) REFERENCES `users` (`id`);

--
-- Constraints for table `job_category`
--
ALTER TABLE `job_category`
  ADD CONSTRAINT `job_category_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `job_category_ibfk_2` FOREIGN KEY (`job`) REFERENCES `job` (`id`);

--
-- Constraints for table `job_request`
--
ALTER TABLE `job_request`
  ADD CONSTRAINT `job_request_ibfk_1` FOREIGN KEY (`job`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `job_request_ibfk_2` FOREIGN KEY (`USER`) REFERENCES `users` (`id`);

--
-- Constraints for table `job_user`
--
ALTER TABLE `job_user`
  ADD CONSTRAINT `job_user_ibfk_1` FOREIGN KEY (`USER`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `job_user_ibfk_2` FOREIGN KEY (`job`) REFERENCES `job` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`employee`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ratings_ibfk_3` FOREIGN KEY (`employer`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD CONSTRAINT `user_permissions_ibfk_1` FOREIGN KEY (`USER`) REFERENCES `users` (`id`);
--
-- Database: `marakli_web`
--
CREATE DATABASE IF NOT EXISTS `marakli_web` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `marakli_web`;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"relation_lines\":\"true\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"marakli_web\",\"table\":\"item\"},{\"db\":\"produktet\",\"table\":\"menu\"},{\"db\":\"produktet\",\"table\":\"contacts\"},{\"db\":\"produktet\",\"table\":\"cart\"},{\"db\":\"produktet\",\"table\":\"products\"},{\"db\":\"produktet\",\"table\":\"users\"},{\"db\":\"gjejpuntor\",\"table\":\"job\"},{\"db\":\"gjejpuntor\",\"table\":\"users\"},{\"db\":\"gjejpuntor\",\"table\":\"user_category\"},{\"db\":\"gjejpuntor\",\"table\":\"user_permissions\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-02-24 18:16:28', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `produktet`
--
CREATE DATABASE IF NOT EXISTS `produktet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `produktet`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user-id` int(11) NOT NULL,
  `product-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_logo` varchar(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_logo`, `menu_title`, `menu_body`) VALUES
(1, 'cm7v4jwetbt21.png', 'pr1', 'pr1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `stock`, `category`, `description`, `price`) VALUES
(0, 'VW Golf 5 Engine', 3, 'car-parts', 'A Volkswagen engine, factory condition', 1999.99),
(1, 'Steering Wheel', 12, 'accessory', 'Custom Steering Wheel for many types of cars', 559.69);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`) VALUES
(0, 0, 'Filan Fisteku', 'filan.fisteku@gmail.com', '12341234'),
(1, 1, 'admin', 'admin.ubt@ubt-uni.net', '12344321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `product-id` (`product-id`),
  ADD KEY `user-id` (`user-id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product-id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user-id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
