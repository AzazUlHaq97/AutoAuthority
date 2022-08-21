-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2016 at 03:23 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoauthority`
--

-- --------------------------------------------------------

--
-- Table structure for table `carsforrent`
--

CREATE TABLE IF NOT EXISTS `carsforrent` (
  `id` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `carname` varchar(30) NOT NULL,
  `perdayamount` int(11) NOT NULL,
  `transmission` varchar(30) NOT NULL,
  `passengers` varchar(30) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carsforrent`
--

INSERT INTO `carsforrent` (`id`, `class`, `carname`, `perdayamount`, `transmission`, `passengers`, `Image`) VALUES
(1, 'Standard', 'Lamborghini', 2000, '25000', '5', 0x3169642e706e67),
(2, 'Economy', 'Kai Rio', 58, '260', '5', 0x312e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `carsforsale`
--

CREATE TABLE IF NOT EXISTS `carsforsale` (
  `id` int(11) NOT NULL,
  `Passengers` int(11) NOT NULL,
  `Bags` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Mileage` varchar(30) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `FuelType` varchar(30) NOT NULL,
  `Transmission` varchar(30) NOT NULL,
  `Image` blob NOT NULL,
  `CarName` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carsforsale`
--

INSERT INTO `carsforsale` (`id`, `Passengers`, `Bags`, `Price`, `Mileage`, `Color`, `FuelType`, `Transmission`, `Image`, `CarName`) VALUES
(1, 123, 25000, 123, '23000', 'Purple', 'Normal', 'Automatic', '', 'Cultus'),
(2, 123, 25000, 123, '23000', 'Purple', 'Normal', 'Automatic', '', 'Cultus'),
(3, 123, 25000, 10, '23000', 'Purple', 'Normal', 'Automatic', '', 'Cultus'),
(4, 123, 25000, 10, '23000', 'Purple', 'Normal', 'Automatic', '', 'Cultus'),
(5, 12, 20000, 10, '23000', 'Purple', 'Normal', 'Automatic', 0x616c746f3830302e706e67, 'Cultus'),
(6, 123, 25000, 123, '23000', 'Purple', 'Normal', 'Automatic', 0x616e64726f69642e706e67, 'Cultus'),
(7, 4, 3, 89000, '100000', 'White', 'Premium Unleaded Petrol', 'Manual', 0x616e64726f69642e706e67, 'Cuore'),
(8, 12, 4, 67000, '30000', 'Grey', 'LPG', 'Manual', 0x3169642e706e67, 'Toyota Grande'),
(9, 3, 2, 8900, '55000', 'Green', 'LPG', '25000', 0x3169642e706e67, 'VXR');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `ResNo` int(11) NOT NULL,
  `PickUpLocation` varchar(30) NOT NULL,
  `DropOffLocation` varchar(30) NOT NULL,
  `PickUpTime` time NOT NULL,
  `DropOffTime` time NOT NULL,
  `PickUpDate` date NOT NULL,
  `DropOffDate` date NOT NULL,
  `VehicleClass` varchar(30) NOT NULL,
  `VehicleName` varchar(30) NOT NULL,
  `PerDayAmount` int(11) NOT NULL,
  `NumberOfDays` int(11) NOT NULL,
  `TokenNumber` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ResNo`, `PickUpLocation`, `DropOffLocation`, `PickUpTime`, `DropOffTime`, `PickUpDate`, `DropOffDate`, `VehicleClass`, `VehicleName`, `PerDayAmount`, `NumberOfDays`, `TokenNumber`, `TotalAmount`) VALUES
(1, 'Airport', 'Defence', '04:09:07', '04:09:07', '2016-01-13', '2016-01-13', 'auto', 'Lamborghini', 2000, 7, 28003, 12600),
(2, 'Airport', 'Defence', '09:00:00', '05:00:00', '0000-00-00', '0000-00-00', 'Standard', 'Lamborghini', 2000, 3, 28003, 5400),
(3, 'Maymar', 'Gulshan', '09:00:00', '09:00:00', '2016-02-03', '2016-02-04', 'Standard', 'Lamborghini', 2000, 2, 69812, 3600);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `StreetAddress` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `ZipCode` int(11) NOT NULL,
  `NumberOne` int(11) NOT NULL,
  `NumberTwo` int(11) NOT NULL,
  `BirthDate` date NOT NULL,
  `DriveLicenseNumber` int(11) NOT NULL,
  `ExpirationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `Email`, `Password`, `StreetAddress`, `City`, `ZipCode`, `NumberOne`, `NumberTwo`, `BirthDate`, `DriveLicenseNumber`, `ExpirationDate`) VALUES
('Azaz', 'Ul Haq', 'azazulhaq1997@gmail.com', 'azaz123', 'R655,Sector-8,NK', 'Karachi', 42807, 2104948, 2261706, '1997-11-18', 1234521, '2015-12-31'),
('Azaz', 'Ali', 'aleehakhann@gmail.com', 'azaz', 'R655', 'Karachi', 8081, 2147483647, 2147483647, '0000-00-00', 12345, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carsforrent`
--
ALTER TABLE `carsforrent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carsforsale`
--
ALTER TABLE `carsforsale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ResNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carsforrent`
--
ALTER TABLE `carsforrent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `carsforsale`
--
ALTER TABLE `carsforsale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `ResNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
