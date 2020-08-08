-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 03:08 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `carsinfo`
--

CREATE TABLE `carsinfo` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `producing_country` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `remove_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carsinfo`
--

INSERT INTO `carsinfo` (`id`, `manufacturer`, `model`, `year`, `producing_country`, `quantity`, `remove_status`) VALUES
(7, 'BMW', 'Isseta', '1995', 'Germany', 4, 1),
(9, 'Kia', 'Picanto', '2004', 'South Korea', 7, 1),
(10, 'Abarth', '124 Spider', '2015', 'America', 21, 1),
(11, 'AC Car', 'MK VI', '2011', 'Australia', 12, 1),
(12, 'Acura', 'ILX', '2012', 'Nepal', 34, 1),
(13, 'Ariel', 'Ace Motorcycle', '1997', 'England', 15, 1),
(14, 'Bugatti', 'Veyron', '1956', 'Bangladesh', 8, 1),
(15, 'Cadillac', 'Eldorado', '2001', 'India', 9, 1),
(16, 'Chevrolet', 'Captiva', '2013', 'South Africa', 45, 1),
(17, 'Ford', 'Expedition', '1992', 'India', 13, 1),
(18, 'Ferrari', 'Enzo f12tdf', '1934', 'Australia', 25, 1),
(19, 'Honda', 'CR-V', '2020', 'England', 34, 1),
(20, 'Lamborghini', 'Aventador', '1995', 'Bangladesh', 56, 1),
(21, 'McLaren', '675LT', '2016', 'America', 90, 1),
(22, 'Nissan', 'Leaf', '1994', 'South Korea', 23, 1),
(23, 'Volkswagen', 'Passat', '2020', 'Bhutan', 17, 1),
(24, 'Volvo', 'S90', '2005', 'China', 5, 1),
(26, 'Kia', 'Picanto', '2004', 'South Korea', 7, 1),
(27, 'Abarth', '124 Spider', '2015', 'America', 21, 1),
(28, 'AC Car', 'MK VI', '2011', 'Australia', 12, 1),
(29, 'Acura', 'ILX', '2012', 'Nepal', 34, 1),
(30, 'Ariel', 'Ace Motorcycle', '1997', 'England', 15, 1),
(31, 'Bugatti', 'Veyron', '1956', 'Bangladesh', 8, 1),
(32, 'Cadillac', 'Eldorado', '2001', 'India', 9, 1),
(33, 'Chevrolet', 'Captiva', '2013', 'South Africa', 45, 1),
(34, 'Ford', 'Expedition', '1992', 'India', 13, 1),
(35, 'Ferrari', 'Enzo f12tdf', '1934', 'Australia', 25, 1),
(36, 'Honda', 'CR-V', '2020', 'England', 34, 1),
(37, 'Lamborghini', 'Aventador', '1995', 'Bangladesh', 56, 1),
(38, 'McLaren', '675LT', '2016', 'America', 90, 1),
(39, 'Nissan', 'Leaf', '1994', 'South Korea', 23, 1),
(40, 'Volkswagen', 'Passat', '2020', 'Bhutan', 17, 1),
(41, 'Volvo', 'S90', '2005', 'China', 5, 1),
(42, 'Manufacturer', 'Model', 'Year', 'Producing Country', 0, 1),
(43, 'Kia', 'Picanto', '2004', 'South Korea', 7, 1),
(44, 'Abarth', '124 Spider', '2015', 'America', 21, 1),
(45, 'AC Car', 'MK VI', '2011', 'Australia', 12, 1),
(46, 'Acura', 'ILX', '2012', 'Nepal', 34, 1),
(47, 'Ariel', 'Ace Motorcycle', '1997', 'England', 15, 1),
(48, 'Bugatti', 'Veyron', '1956', 'Bangladesh', 8, 1),
(49, 'Cadillac', 'Eldorado', '2001', 'India', 9, 1),
(50, 'Chevrolet', 'Captiva', '2013', 'South Africa', 45, 1),
(51, 'Ford', 'Expedition', '1992', 'India', 13, 1),
(52, 'Ferrari', 'Enzo f12tdf', '1934', 'Australia', 25, 1),
(53, 'Honda', 'CR-V', '2020', 'England', 34, 1),
(54, 'Lamborghini', 'Aventador', '1995', 'Bangladesh', 56, 1),
(55, 'McLaren', '675LT', '2016', 'America', 90, 1),
(56, 'Nissan', 'Leaf', '1994', 'South Korea', 23, 1),
(57, 'Volkswagen', 'Passat', '2020', 'Bhutan', 17, 1),
(58, 'Volvo', 'S90', '2005', 'China', 5, 1),
(59, 'Manufacturer', 'Model', 'Year', 'Producing Country', 0, 1),
(60, 'Kia', 'Picanto', '2004', 'South Korea', 7, 1),
(61, 'Abarth', '124 Spider', '2015', 'America', 21, 1),
(62, 'AC Car', 'MK VI', '2011', 'Australia', 12, 1),
(63, 'Acura', 'ILX', '2012', 'Nepal', 34, 1),
(64, 'Ariel', 'Ace Motorcycle', '1997', 'England', 15, 1),
(65, 'Bugatti', 'Veyron', '1956', 'Bangladesh', 8, 1),
(66, 'Cadillac', 'Eldorado', '2001', 'India', 9, 1),
(67, 'Chevrolet', 'Captiva', '2013', 'South Africa', 45, 1),
(68, 'Ford', 'Expedition', '1992', 'India', 13, 1),
(69, 'Ferrari', 'Enzo f12tdf', '1934', 'Australia', 25, 1),
(70, 'Honda', 'CR-V', '2020', 'England', 34, 1),
(71, 'Lamborghini', 'Aventador', '1995', 'Bangladesh', 56, 1),
(72, 'McLaren', '675LT', '2016', 'America', 90, 1),
(73, 'Nissan', 'Leaf', '1994', 'South Korea', 23, 1),
(74, 'Volkswagen', 'Passat', '2020', 'Bhutan', 17, 1),
(75, 'Volvo', 'S90', '2005', 'China', 5, 1),
(76, 'Manufacturer', 'Model', 'Year', 'Producing Country', 0, 1),
(77, 'Kia', 'Picanto', '2004', 'South Korea', 7, 1),
(78, 'Abarth', '124 Spider', '2015', 'America', 21, 1),
(79, 'AC Car', 'MK VI', '2011', 'Australia', 12, 1),
(80, 'Acura', 'ILX', '2012', 'Nepal', 34, 1),
(81, 'Ariel', 'Ace Motorcycle', '1997', 'England', 15, 1),
(82, 'Bugatti', 'Veyron', '1956', 'Bangladesh', 8, 1),
(83, 'Cadillac', 'Eldorado', '2001', 'India', 9, 1),
(84, 'Chevrolet', 'Captiva', '2013', 'South Africa', 45, 1),
(85, 'Ford', 'Expedition', '1992', 'India', 13, 1),
(86, 'Ferrari', 'Enzo f12tdf', '1934', 'Australia', 25, 1),
(87, 'Honda', 'CR-V', '2020', 'England', 34, 1),
(88, 'Lamborghini', 'Aventador', '1995', 'Bangladesh', 56, 1),
(89, 'McLaren', '675LT', '2016', 'America', 90, 1),
(90, 'Nissan', 'Leaf', '1994', 'South Korea', 23, 1),
(91, 'Volkswagen', 'Passat', '2020', 'Bhutan', 17, 1),
(92, 'Volvo', 'S90', '2005', 'China', 5, 1),
(93, 'BMW', 'A6', '1900', 'London', 2, 1),
(94, 'BMW', 'Isseta', '1907', 'Germany', 7, 1),
(95, 'Kia', 'Picanto', '2004', 'South Korea', 7, 0),
(96, 'Abarth', '124 Spider', '2015', 'America', 24, 0),
(97, 'AC Car', 'MK VI', '2011', 'Australia', 12, 0),
(98, 'Acura', 'ILX', '2012', 'Nepal', 34, 0),
(99, 'Ariel', 'Ace Motorcycle', '1997', 'England', 15, 0),
(100, 'Bugatti', 'Veyron', '1956', 'Bangladesh', 8, 0),
(101, 'Cadillac', 'Eldorado', '2001', 'India', 9, 0),
(102, 'Chevrolet', 'Captiva', '2013', 'South Africa', 45, 0),
(103, 'Ford', 'Expedition', '1992', 'India', 13, 0),
(104, 'Ferrari', 'Enzo f12tdf', '1934', 'Australia', 25, 0),
(105, 'Honda', 'CR-V', '2020', 'England', 34, 0),
(106, 'Lamborghini', 'Aventador', '1995', 'Bangladesh', 56, 0),
(107, 'McLaren', '675LT', '2016', 'America', 90, 0),
(108, 'Nissan', 'Leaf', '1994', 'South Korea', 23, 0),
(109, 'Volkswagen', 'Passat', '2020', 'Bhutan', 17, 0),
(110, 'Volvo', 'S90', '2005', 'China', 5, 0),
(111, 'Corolla', 'A25', '1903', 'Denmark', 31, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carsinfo`
--
ALTER TABLE `carsinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carsinfo`
--
ALTER TABLE `carsinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
