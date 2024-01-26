-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 09:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_fname` varchar(100) NOT NULL,
  `admin_lname` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_repassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_fname`, `admin_lname`, `admin_email`, `admin_password`, `admin_repassword`) VALUES
('Sadeeptha', 'lakinduPerera', 'sadeepthlakindu@gmail.com', '12345', '12345'),
('Sanduni', 'chamindi', 'sandunichamindi@gmail.com', '98765', '98765'),
('Sithagi', 'kumara', 'sithagikumara@gmail.com', 'sssss90', 'sssss90');

-- --------------------------------------------------------

--
-- Table structure for table `bank_deposit_details`
--

CREATE TABLE `bank_deposit_details` (
  `Bank` varchar(30) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Bank_slip` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_deposit_details`
--

INSERT INTO `bank_deposit_details` (`Bank`, `Branch`, `Bank_slip`) VALUES
('Bank of Ceylon', 'Kurunegala', 0x53637265656e73686f74202831292e706e67),
('Sampath bank', 'Kurunegala', 0x53637265656e73686f742028313239292e706e67),
('Commercial bank', 'Malabe', 0x53637265656e73686f74202831292e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `NIC` varchar(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`NIC`, `Name`, `Email`, `Mobile`, `Message`) VALUES
('200275700459', 'S.V.P.Kumara', 'kumarasithagi@gmail.com', 742794102, 'I need to know more information about claim submisson');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Full_Name` varchar(100) NOT NULL,
  `Policy_number` varchar(50) NOT NULL,
  `NIC/Passport` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Premium` float NOT NULL,
  `Pay_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Full_Name`, `Policy_number`, `NIC/Passport`, `Email`, `Premium`, `Pay_method`) VALUES
('Aruna', '56843', '199929927475', 'fjwifwfbuiof@gmail.com', 2400, 'card'),
('Ruwanyaa', '09877', '200134728954', 'ruwanya123@gmail.com', 5000, 'card'),
('thamadhi', '5468', '20024789329', 'thamadhi@gmail.com', 7600, 'bank'),
('Ruwanya Hettiarachchi', '001123', '200264504047', 'ruuhettiarachchi@gmail.com', 20000, 'bank'),
('Ruwanya Hettiarachchi', '001123', '200264504048', 'ruuhettiarachchi@gmail.com', 20000, 'card'),
('ruu', '12345', '5464339736253', 'jffdidbdowf@gmail.com', 10000, 'card');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_Id` int(11) NOT NULL,
  `profilepic` blob NOT NULL,
  `NIC` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `TypeOfPlan` varchar(100) NOT NULL,
  `AddressLine01` varchar(100) NOT NULL,
  `AddressLine02` varchar(100) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `Gender` enum('Male','Female','Other','') NOT NULL,
  `contactNumber` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UpdateMedical` blob NOT NULL,
  `Paymethod` varchar(100) NOT NULL,
  `Paymentfrequency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_Id`, `profilepic`, `NIC`, `FirstName`, `LastName`, `TypeOfPlan`, `AddressLine01`, `AddressLine02`, `DateOfBirth`, `Gender`, `contactNumber`, `Email`, `UpdateMedical`, `Paymethod`, `Paymentfrequency`) VALUES
(25, '', '2001092041', 'gfgh', 'cugvjb', 'Silver Package', 'dryfcd', 'b', '2023-06-10', 'Male', 'hjbn ', 'YTG@MY.LK', 0x41637469766974792077697468206f7574207061727469636974696f6e20637573746f6d657220627579207061636b2e64726177696f5f706167652d303030312e6a7067, 'Debit Card', 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `User_ID` int(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Repeat_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`User_ID`, `First_Name`, `Last_Name`, `User_Name`, `Email`, `Password`, `Repeat_Password`) VALUES
(3, 'lasal', 'dissanayake', 'gemmak_sumane', 'lasalmethdissanayake28029@gmail.com', '1234', '1234'),
(4, 'HMCGCMDCJDDCSDCD', 'CDVDV', 'DVDSVSDV', 'SHHH@HCDJH', '456', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`NIC/Passport`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `User_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
