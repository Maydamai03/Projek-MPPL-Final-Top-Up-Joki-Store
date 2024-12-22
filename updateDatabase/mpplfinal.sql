-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 09:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerservice`
--

CREATE TABLE `customerservice` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `nama` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `perihal` varchar(99) NOT NULL,
  `deskripsi` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `name`, `type`, `price`, `quantity`) VALUES
('d1', '5(5+0) Diamonds', 'dm', 2100, 9999),
('d10', '600(546+54) Diamonds', 'dm', 165511, 9999),
('d11', '751(676+75) Diamonds', 'dm', 202199, 9999),
('d12', '874(779+95) Diamonds', 'dm', 233799, 9999),
('d13', '1048(936+112) Diamonds', 'dm', 280200, 9999),
('d14', '2195(1860+335) Diamonds', 'dm', 566322, 9999),
('d15', '4394(3724+670) Diamonds', 'dm', 1034700, 9999),
('d2', '18(17+1) Diamonds', 'dm', 4002, 9999),
('d3', '44(40+4) Diamonds', 'dm', 11067, 9999),
('d4', '74(67+7) Diamonds', 'dm', 19120, 9999),
('d5', '110(100+10) Diamonds', 'dm', 30101, 9999),
('d6', '240(217+23) Diamonds', 'dm', 62710, 9999),
('d7', '344(312+32) Diamonds', 'dm', 97432, 9999),
('d8', '406(366+40) Diamonds', 'dm', 109410, 9999),
('d9', '514(468+46) Diamonds', 'dm', 140600, 9999),
('j1', 'Promo Paket 5 Star Epic', 'joki', 34500, 9999),
('j10', '5 Star Warrior', 'joki', 10100, 9999),
('j11', '5 Star Elite', 'joki', 15002, 9999),
('j12', '5 Star Master', 'joki', 20067, 9999),
('j13', '5 Star Grand Master', 'joki', 25100, 9999),
('j14', '5 Star Epic', 'joki', 30002, 9999),
('j15', '5 Star Legend', 'joki', 35067, 9999),
('j16', '5 Star Mythic', 'joki', 65100, 9999),
('j17', '5 Star Mythic Honor', 'joki', 75002, 9999),
('j18', '5 Star Mythic Glory', 'joki', 105067, 9999),
('j19', '5 Star Mythic', 'joki', 125100, 9999),
('j2', 'Paket Promo 5 Star Legend', 'joki', 44499, 9999),
('j3', 'Paket Promo 5 Star Mythic', 'joki', 65600, 9999),
('j4', 'Paket Warrior 3 - Elite 4', 'joki', 75500, 9999),
('j5', 'Paket Elite 4 - Master 4', 'joki', 85499, 9999),
('j6', 'Paket Master 4 - Grand Master 4', 'joki', 95600, 9999),
('j7', 'Joki Grand Master 5 - Epic 5', 'joki', 104500, 9999),
('j8', 'Paket Epic 5 - Legend 5', 'joki', 140499, 9999),
('j9', 'Paket Legend 5 - Mythic Grading', 'joki', 170600, 9999),
('sm1', 'Starlight Member', 'dm', 75600, 9999),
('tp1', 'Twilight Pass', 'dm', 115499, 9999),
('wd1', 'Weekly Diamond Pass', 'dm', 26500, 9999);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idPayment` varchar(99) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `userID` int(99) NOT NULL,
  `status` varchar(20) NOT NULL,
  `itemID` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `email` varchar(99) NOT NULL,
  `pw` varchar(99) NOT NULL,
  `req` varchar(99) NOT NULL,
  `note` varchar(99) NOT NULL,
  `idPlayer` varchar(20) NOT NULL,
  `idServer` varchar(20) NOT NULL,
  `nomor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(20) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idPlayer` int(20) NOT NULL,
  `server` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerservice`
--
ALTER TABLE `customerservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idPayment`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerservice`
--
ALTER TABLE `customerservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6661;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
