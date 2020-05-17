-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 12:13 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi`
--

-- --------------------------------------------------------
CREATE DATABASE `pi`;

USE `pi`;

--
-- Table structure for table `biznesi`
--

CREATE TABLE `biznesi` (
  `idBiznesi` int(11) NOT NULL,
  `bEmri` varchar(100) NOT NULL,
  `bAdresa` varchar(150) NOT NULL,
  `bTel` int(30) NOT NULL,
  `bEmail` varchar(100) NOT NULL,
  `bPass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biznesi`
--

INSERT INTO `biznesi` (`idBiznesi`, `bEmri`, `bAdresa`, `bTel`, `bEmail`, `bPass`) VALUES
(1, 'Adriaktiu', 'Podujev', 44455455, 'adriatiku@gmail.com', 'adriatiku'),
(2, 'UjvaraDrinit', 'Peje', 447475, 'ujvara@gmail.com', 'ujvaradrinit'),
(3, 'Adriaktiu', 'Podujev', 44455455, 'adriatiku@gmail.com', 'adriatiku'),
(4, 'UjvaraDrinit', 'Peje', 447475, 'ujvara@gmail.com', 'ujvaradrinit'),
(5, 'Adriaktiu', 'Podujev', 44455455, 'adriatiku@gmail.com', 'adriatiku'),
(6, 'UjvaraDrinit', 'Peje', 447475, 'ujvara@gmail.com', 'ujvaradrinit'),
(7, 'Adriaktiu', 'Podujev', 44455455, 'adriatiku@gmail.com', 'adriatiku'),
(8, 'UjvaraDrinit', 'Peje', 447475, 'ujvara@gmail.com', 'ujvaradrinit'),
(9, 'Adriaktiu', 'Podujev', 44455455, 'adriatiku@gmail.com', 'adriatiku'),
(10, 'UjvaraDrinit', 'Peje', 447475, 'ujvara@gmail.com', 'ujvaradrinit'),
(11, 'Adriaktiu', 'Podujev', 44455455, 'adriatiku@gmail.com', 'adriatiku'),
(12, 'UjvaraDrinit', 'Peje', 447475, 'ujvara@gmail.com', 'ujvaradrinit'),
(13, 'Adriaktiu', 'Podujev', 44455455, 'adriatiku@gmail.com', 'adriatiku'),
(14, 'UjvaraDrinit', 'Peje', 447475, 'ujvara@gmail.com', 'ujvaradrinit');

-- --------------------------------------------------------

--
-- Table structure for table `eventet`
--

CREATE TABLE `eventet` (
  `idEventet` int(11) NOT NULL,
  `eEmri` varchar(45) NOT NULL,
  `eData` date NOT NULL,
  `eFillimit` varchar(45) NOT NULL,
  `eMbarimit` varchar(45) DEFAULT NULL,
  `eMuzika` varchar(100) DEFAULT NULL,
  `idBiznesi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventet`
--

INSERT INTO `eventet` (`idEventet`, `eEmri`, `eData`, `eFillimit`, `eMbarimit`, `eMuzika`, `idBiznesi`) VALUES
(1, '8 Marsi', '2020-03-08', '19:00', '22:00', 'Grupi 403', 1),
(2, '8 Marsi', '2020-03-08', '19:00', '22:00', 'Grupi 403', 1),
(3, '7 Marsi', '2020-03-07', '20:00', '24:00', 'Xeni', 2),
(4, 'E Diel', '2020-03-20', '19:00', '22:00', 'Labi', 1),
(5, '28 Nentori', '2020-11-28', '19:00', '22:00', 'Troja', 1),
(6, '8 Marsi', '2020-03-08', '19:00', '22:00', 'Grupi 403', 1),
(7, '7 Marsi', '2020-03-07', '20:00', '24:00', 'Xeni', 2),
(8, 'E Diel', '2020-03-20', '19:00', '22:00', 'Labi', 1),
(9, '28 Nentori', '2020-11-28', '19:00', '22:00', 'Troja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `klienti`
--

CREATE TABLE `klienti` (
  `idKlienti` int(11) NOT NULL,
  `kEmri` varchar(60) NOT NULL,
  `kMbiemri` varchar(60) NOT NULL,
  `kEmail` varchar(100) NOT NULL,
  `kPass` varchar(150) NOT NULL,
  `kTel` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klienti`
--

INSERT INTO `klienti` (`idKlienti`, `kEmri`, `kMbiemri`, `kEmail`, `kPass`, `kTel`) VALUES
(1, 'alban', 'blakqori', 'shokualban@gmail.com', '123456', 2342342),
(2, 'alban', 'blakqori', 'shokualban@gmail.com', '123456', 2342342),
(3, 'test', 'testt', 'test@gmail.com', '$2y$10$tqDm.sPcHBp6e0R.0ld/AOVlX.65co1rwhJQ.r4iD2nDSIUA0adXK', 123123),
(4, 'prove', 'prova', 'prove@gmail.com', '$2y$10$K/6VuHn6meNUawRBrMRFOus9R1bgVcdRIXQVbab7ATuHLDKanr746', 1231241),
(5, 'Filan', 'Fisteku', 'filani@gmail.com', '$2y$10$gvXAKv9uTYeBP9vRxjM5xeGy52UQYXPzVkHmI8qufzMBU6AhLXE7W', 49876543),
(6, 'Albin', 'Thaqi', 'alchi@gmail.com', '$2y$10$eAhl3opcB9eT.i6qXaYeoecX/0mGM87h7gyDRwDt/E/hAi5Q6xPz2', 44049043);
(7,'Dikush','Dikushi','Dikushi@gmail.com','dikush','234234234');

-- --------------------------------------------------------

--
-- Table structure for table `punetoret`
--

CREATE TABLE `punetoret` (
  `idPunetoret` int(11) NOT NULL,
  `idBiznesi` int(11) NOT NULL,
  `pRoli` enum('Kamarier','Banakier','Menagjer') NOT NULL,
  `Pervoja` int(11) NOT NULL,
  `pEmri` varchar(45) NOT NULL,
  `pMbiemri` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rezervimet`
--

CREATE TABLE `rezervimet` (
  `idRezervimet` int(11) NOT NULL,
  `idKlienti` int(11) NOT NULL,
  `idTavolinat` int(11) NOT NULL,
  `idEventet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezervimet`
--

INSERT INTO `rezervimet` (`idRezervimet`, `idKlienti`, `idTavolinat`, `idEventet`) VALUES
(1, 1, 3, 2),
(2, 5, 6, 8),
(3, 3, 5, 9),
(4, 6, 2, 6),
(6, 2, 3, 5),
(7, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tavolinat`
--

CREATE TABLE `tavolinat` (
  `idTavolinat` int(11) NOT NULL,
  `idBiznesi` int(11) NOT NULL,
  `Karrigat` int(11) NOT NULL,
  `tStatus` enum('Free','Reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tavolinat`
--

INSERT INTO `tavolinat` (`idTavolinat`, `idBiznesi`, `Karrigat`, `tStatus`) VALUES
(1, 1, 4, 'Free'),
(2, 1, 4, 'Free'),
(3, 1, 4, 'Free'),
(4, 1, 4, 'Reserved'),
(5, 1, 4, 'Free'),
(6, 1, 4, 'Free'),
(7, 1, 4, 'Reserved'),
(8, 1, 4, 'Free'),
(9, 1, 4, 'Free'),
(10, 1, 4, 'Free'),
(11, 1, 4, 'Free'),
(12, 1, 4, 'Reserved'),
(13, 1, 4, 'Free'),
(14, 1, 4, 'Free'),
(15, 1, 4, 'Reserved'),
(16, 1, 4, 'Free'),
(17, 1, 4, 'Free'),
(18, 2, 4, 'Free'),
(19, 2, 4, 'Free'),
(20, 2, 2, 'Free'),
(21, 2, 3, 'Free'),
(22, 2, 5, 'Free'),
(23, 2, 2, 'Free'),
(24, 2, 3, 'Free'),
(25, 2, 6, 'Free'),
(26, 2, 5, 'Free'),
(27, 1, 4, 'Free'),
(28, 1, 4, 'Free'),
(29, 1, 4, 'Reserved'),
(30, 1, 4, 'Free'),
(31, 1, 4, 'Free'),
(32, 1, 4, 'Reserved'),
(33, 1, 4, 'Free'),
(34, 1, 4, 'Free'),
(35, 2, 4, 'Free'),
(36, 2, 4, 'Free'),
(37, 2, 2, 'Free'),
(38, 2, 3, 'Free'),
(39, 2, 5, 'Free'),
(40, 2, 2, 'Free'),
(41, 2, 3, 'Free'),
(42, 2, 6, 'Free'),
(43, 2, 5, 'Free'),
(44, 1, 4, 'Free'),
(45, 1, 4, 'Free'),
(46, 1, 4, 'Reserved'),
(47, 1, 4, 'Free'),
(48, 1, 4, 'Free'),
(49, 1, 4, 'Reserved'),
(50, 1, 4, 'Free'),
(51, 1, 4, 'Free'),
(52, 2, 4, 'Free'),
(53, 2, 4, 'Free'),
(54, 2, 2, 'Free'),
(55, 2, 3, 'Free'),
(56, 2, 5, 'Free'),
(57, 2, 2, 'Free'),
(58, 2, 3, 'Free'),
(59, 2, 6, 'Free'),
(60, 2, 5, 'Free'),
(61, 1, 4, 'Free'),
(62, 1, 4, 'Free'),
(63, 1, 4, 'Reserved'),
(64, 1, 4, 'Free'),
(65, 1, 4, 'Free'),
(66, 1, 4, 'Reserved'),
(67, 1, 4, 'Free'),
(68, 1, 4, 'Free'),
(69, 2, 4, 'Free'),
(70, 2, 4, 'Free'),
(71, 2, 2, 'Free'),
(72, 2, 3, 'Free'),
(73, 2, 5, 'Free'),
(74, 2, 2, 'Free'),
(75, 2, 3, 'Free'),
(76, 2, 6, 'Free'),
(77, 2, 5, 'Free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biznesi`
--
ALTER TABLE `biznesi`
  ADD PRIMARY KEY (`idBiznesi`);

--
-- Indexes for table `eventet`
--
ALTER TABLE `eventet`
  ADD PRIMARY KEY (`idEventet`),
  ADD KEY `biz_to_event_idx` (`idBiznesi`);

--
-- Indexes for table `klienti`
--
ALTER TABLE `klienti`
  ADD PRIMARY KEY (`idKlienti`);

--
-- Indexes for table `punetoret`
--
ALTER TABLE `punetoret`
  ADD PRIMARY KEY (`idPunetoret`),
  ADD KEY `biznes_to_punetoret_idx` (`idBiznesi`);

--
-- Indexes for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD PRIMARY KEY (`idRezervimet`),
  ADD KEY `klient_to_rezer_idx` (`idKlienti`),
  ADD KEY `tavo_to_rezer_idx` (`idTavolinat`),
  ADD KEY `event_to_rezer_idx` (`idEventet`);

--
-- Indexes for table `tavolinat`
--
ALTER TABLE `tavolinat`
  ADD PRIMARY KEY (`idTavolinat`),
  ADD KEY `biznesi_to_tavolinat_idx` (`idBiznesi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biznesi`
--
ALTER TABLE `biznesi`
  MODIFY `idBiznesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `eventet`
--
ALTER TABLE `eventet`
  MODIFY `idEventet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `klienti`
--
ALTER TABLE `klienti`
  MODIFY `idKlienti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `punetoret`
--
ALTER TABLE `punetoret`
  MODIFY `idPunetoret` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rezervimet`
--
ALTER TABLE `rezervimet`
  MODIFY `idRezervimet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tavolinat`
--
ALTER TABLE `tavolinat`
  MODIFY `idTavolinat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventet`
--
ALTER TABLE `eventet`
  ADD CONSTRAINT `biz_to_event` FOREIGN KEY (`idBiznesi`) REFERENCES `biznesi` (`idBiznesi`);

--
-- Constraints for table `punetoret`
--
ALTER TABLE `punetoret`
  ADD CONSTRAINT `biznes_to_punetoret` FOREIGN KEY (`idBiznesi`) REFERENCES `biznesi` (`idBiznesi`);

--
-- Constraints for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD CONSTRAINT `event_to_rezer` FOREIGN KEY (`idEventet`) REFERENCES `eventet` (`idEventet`),
  ADD CONSTRAINT `klient_to_rezer` FOREIGN KEY (`idKlienti`) REFERENCES `klienti` (`idKlienti`),
  ADD CONSTRAINT `tavo_to_rezer` FOREIGN KEY (`idTavolinat`) REFERENCES `tavolinat` (`idTavolinat`);

--
-- Constraints for table `tavolinat`
--
ALTER TABLE `tavolinat`
  ADD CONSTRAINT `biznesi_to_tavolinat` FOREIGN KEY (`idBiznesi`) REFERENCES `biznesi` (`idBiznesi`);
COMMIT;

TRUNCATE TABLE klieni;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
