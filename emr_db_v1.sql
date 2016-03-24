-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2015 at 01:18 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opd_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancel_patrol`
--

CREATE TABLE IF NOT EXISTS `cancel_patrol` (
  `id` int(10) unsigned NOT NULL,
  `doctor_id` int(10) unsigned NOT NULL,
  `date` date NOT NULL,
  `patrol_am` int(10) unsigned DEFAULT NULL,
  `patrol_pm` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `patrol_am` int(11) DEFAULT NULL,
  `patrol_pm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `druglist`
--

CREATE TABLE IF NOT EXISTS `druglist` (
  `id` int(10) unsigned NOT NULL,
  `list_no` int(10) unsigned NOT NULL,
  `ptt_nt_id` varchar(255) NOT NULL,
  `ptt_hos_id` varchar(255) NOT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `drug_code` int(10) unsigned DEFAULT NULL,
  `drug_quantity` int(10) unsigned DEFAULT NULL,
  `drug_instruction` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `id` int(10) unsigned NOT NULL,
  `nurse_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `id` int(10) unsigned NOT NULL,
  `officer_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `hospital_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `addr_no` varchar(255) DEFAULT NULL,
  `addr_village` varchar(255) DEFAULT NULL,
  `addr_soi` varchar(255) DEFAULT NULL,
  `addr_road` varchar(255) DEFAULT NULL,
  `addr_subdistrict` varchar(255) DEFAULT NULL,
  `addr_district` varchar(255) DEFAULT NULL,
  `addr_province` varchar(255) DEFAULT NULL,
  `addr_postcode` int(10) unsigned DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `surname`, `national_id`, `hospital_id`, `password`, `birthdate`, `religion`, `addr_no`, `addr_village`, `addr_soi`, `addr_road`, `addr_subdistrict`, `addr_district`, `addr_province`, `addr_postcode`, `contact`, `email`) VALUES
(13, 'เธียรฉาย', 'เรียงวิวัฒน์', '1103701330244', NULL, '952748fh', '1994-08-07', 'พุทธ', '20/8', 'ภราดร', 'บางบอน 5 ซอย 7', 'เอกชัย - บางบอน', 'บางบอน', 'บางบอน', 'กรุงเทพมหานคร', 10150, '0815839028', 'tianchai.riengviwat@gmail.com'),
(14, 'เธียรภวัต', 'เรียงวิวัฒน์', '1103701741449', NULL, 'gamemapleob', '1994-09-06', 'พุทธ', '20/8', 'ภราดร', 'บางบอน 5 ซอย 7', 'เอกชัย-บางบอน', 'บางบอน', 'บางบอน', 'กรุงเทพมหานคร', 10150, '0867824633', 'tianpawat.r@gmail.com'),
(15, 'asd', 'asd', '5555', NULL, '555', '2015-08-04', '', '', '', '', '', '', '', '', NULL, NULL, ''),
(16, '5', '5', '5', NULL, '5', '5555-05-05', '5', '', '', '', '', '', '', '', NULL, '5', '5'),
(17, '5', '5', '1', NULL, '1', '1111-11-11', '1', '', '', '', '', '', '', '', NULL, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(10) unsigned NOT NULL,
  `pt_nt_id` varchar(255) NOT NULL,
  `pt_hos_id` varchar(255) NOT NULL,
  `appoint_date` date NOT NULL,
  `weight` int(10) unsigned DEFAULT NULL,
  `height` int(10) unsigned DEFAULT NULL,
  `temperature` int(10) unsigned DEFAULT NULL,
  `pulse` varchar(255) DEFAULT NULL,
  `blood_pressure` int(10) unsigned DEFAULT NULL,
  `symptom` varchar(255) DEFAULT NULL,
  `conclusion` varchar(255) DEFAULT NULL,
  `code_disease` varchar(255) DEFAULT NULL,
  `druglist_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancel_patrol`
--
ALTER TABLE `cancel_patrol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `druglist`
--
ALTER TABLE `druglist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancel_patrol`
--
ALTER TABLE `cancel_patrol`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `druglist`
--
ALTER TABLE `druglist`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
