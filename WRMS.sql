-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2018 at 04:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WRMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `C_ID` int(11) NOT NULL,
  `C_Name` varchar(50) NOT NULL,
  `C_Address` varchar(100) NOT NULL,
  `C_Country` varchar(20) NOT NULL,
  `C_Email` varchar(20) NOT NULL,
  `C_ContactNum` varchar(10) NOT NULL,
  `C_BusinessType` varchar(20) NOT NULL,
  `C_IntensityType` enum('LI','MI','HI','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `R_ID` int(11) NOT NULL,
  `R_C_ID` int(11) NOT NULL,
  `R_Year` year(4) NOT NULL,
  `R_TotalWithdrawal` tinyint(1) NOT NULL,
  `R_WaterAffected` tinyint(1) NOT NULL,
  `R_RecycleReused` tinyint(1) NOT NULL,
  `R_WaterRisk` tinyint(1) NOT NULL,
  `R_Facility` tinyint(1) NOT NULL,
  `R_Governance` tinyint(1) NOT NULL,
  `R_Compliance` tinyint(1) NOT NULL,
  `R_Target` tinyint(1) NOT NULL,
  `R_TotalDisclosure` tinyint(1) NOT NULL,
  `R_Risk` enum('Low Risk','Moderate Risk','High Risk','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`R_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
