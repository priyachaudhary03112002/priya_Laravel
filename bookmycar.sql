-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 02:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmycar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Name`, `Username`, `Password`) VALUES
(1, 'dev', 'devarsh', 123456),
(2, 'saumil', 'saumil', 123456),
(3, 'vishal', 'vishal', 123456),
(4, 'rohan', 'rohan', 123456),
(5, 'dhiren', 'dhiren', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Blog_ID` int(11) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Blog_ID`, `Title`, `Image`, `Description`) VALUES
(59, 'Five Days Booking', '5 Days Left.jpg', 'If You Book Car For Five Days Then You Will Get Twenty Percent Off Book Now Five Days...'),
(67, 'On First Booking', 'AAFiftyOFF.jpg', 'ON First Booking There Is FIFTY Percent OFF So What Are You Waiting  Hurry Up Offer Valid For This Week Only Book Now...');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Adv_ID` int(11) NOT NULL,
  `Bookdate_From` date NOT NULL,
  `Days` int(255) NOT NULL,
  `Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_ID`, `Customer_ID`, `Adv_ID`, `Bookdate_From`, `Days`, `Amount`) VALUES
(18, 46, 43, '2023-02-28', 1, '1200'),
(19, 47, 42, '2023-02-28', 2, '2000'),
(20, 45, 44, '2023-02-28', 2, '20000'),
(21, 45, 42, '2023-02-27', 4, '4000');

-- --------------------------------------------------------

--
-- Table structure for table `car_advertisement`
--

CREATE TABLE `car_advertisement` (
  `Adv_ID` int(11) NOT NULL,
  `Location_ID` int(11) NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `RC_Number` varchar(255) NOT NULL,
  `Car_No` varchar(255) NOT NULL,
  `Contact` bigint(255) NOT NULL,
  `Rent_Time` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_advertisement`
--

INSERT INTO `car_advertisement` (`Adv_ID`, `Location_ID`, `Category_ID`, `Customer_ID`, `Title`, `Amount`, `RC_Number`, `Car_No`, `Contact`, `Rent_Time`, `Images`, `Description`) VALUES
(50, 17, 29, 0, 'suv', 1000, '778899445566', 'GJ01AB4123', 9963211111, 'Day', 'gallery-3.jpg', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(11) NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`, `Category_Image`) VALUES
(29, 'SUV', 'download (1).jpg'),
(30, 'Luxury', 'Luxury Car.jpg'),
(31, 'Commercial', 'Commercial.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Id_Proof_No` int(16) NOT NULL,
  `Status` enum('BLOCK','UNBLOCK') NOT NULL DEFAULT 'UNBLOCK',
  `Image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Name`, `Username`, `Password`, `Email`, `Mobile`, `Address`, `Id_Proof_No`, `Status`, `Image`) VALUES
(45, 'devarsh', 'devarsh', 'e10adc3949ba59abbe56e057f20f883e', 'devarsh@gmail.com', 9956545666, 'qqq', 2147483647, 'UNBLOCK', 'carousel-2.jpg'),
(46, 'Pritesh Vyas', 'Pritesh', 'd821e72d0b9f832d6cde431111057d96', 'pritesh@gmail.com', 7777988543, '73  N S Patkar Marg Grant Road, Astodiya,Ahmedabad,380027,India', 2147483647, 'UNBLOCK', 'profile_photo.jpg'),
(47, 'Jaimini Parmar', 'jaimini', '72182ffe530664921261f8a990f48aa0', 'jaimini@gmail.com', 9985474555, '181 / Narayan Dhuru Street Near TGB ,Ahmedabad,380065,India', 2147483647, 'UNBLOCK', 'jaimini.jpg'),
(48, 'zalak', 'zalak', 'c2ee08a97d1ff82cf3f90b6a34410676', 'zalak@gmail.com', 7789445566, 'xyz', 2147483647, 'UNBLOCK', 'bg-banner.jpg'),
(49, 'priya', 'priya', '0b1c8bc395a9588a79cd3c191c22a6b4', 'priya@gmail.com', 1234567890, 'bvgv', 2147483647, 'UNBLOCK', 'car-rent-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Emp_Name` varchar(255) NOT NULL,
  `Emp_Username` varchar(255) NOT NULL,
  `Password` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Email`, `Emp_Name`, `Emp_Username`, `Password`) VALUES
(1, 'devarsh@gmail.com', 'devarsh ', 'devarsh rana', 123456),
(2, 'saumil@gmail.com', 'saumil', 'saumil rana', 123456),
(3, 'vishal@gmail.com', 'vishal', 'vishal rana', 123456),
(4, 'ramesh@gmail.com', 'ramesh', 'ramesh upadhay', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `location_area`
--

CREATE TABLE `location_area` (
  `Location_ID` int(11) NOT NULL,
  `Location_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location_area`
--

INSERT INTO `location_area` (`Location_ID`, `Location_Name`) VALUES
(15, 'Maninagar'),
(16, 'Raipur'),
(17, 'GeetaMandir'),
(18, 'Iskon'),
(19, 'Kalupur'),
(20, 'LawGarden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`),
  ADD KEY `Adv_ID` (`Adv_ID`);

--
-- Indexes for table `car_advertisement`
--
ALTER TABLE `car_advertisement`
  ADD PRIMARY KEY (`Adv_ID`),
  ADD KEY `Location_ID` (`Location_ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `location_area`
--
ALTER TABLE `location_area`
  ADD PRIMARY KEY (`Location_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `car_advertisement`
--
ALTER TABLE `car_advertisement`
  MODIFY `Adv_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `location_area`
--
ALTER TABLE `location_area`
  MODIFY `Location_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Adv_ID`) REFERENCES `car_advertisement` (`Adv_ID`);

--
-- Constraints for table `car_advertisement`
--
ALTER TABLE `car_advertisement`
  ADD CONSTRAINT `car_advertisement_ibfk_1` FOREIGN KEY (`Location_ID`) REFERENCES `location_area` (`Location_ID`),
  ADD CONSTRAINT `car_advertisement_ibfk_2` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`Category_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
