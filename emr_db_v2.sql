-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 11:15 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emr`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoint_id` int(10) NOT NULL,
  `appoint_trans_date` date NOT NULL,
  `appoint_date` date NOT NULL,
  `shift_id` int(10) NOT NULL,
  `staff_hospital_id` int(10) NOT NULL,
  `hospital_id` int(10) NOT NULL,
  `document_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cancel_patrol`
--

CREATE TABLE `cancel_patrol` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `patrol_am` int(10) UNSIGNED DEFAULT NULL,
  `patrol_pm` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `default_shift`
--

CREATE TABLE `default_shift` (
  `default_shift_id` int(10) NOT NULL,
  `default_shift_day` int(10) NOT NULL,
  `default_shift_time` int(10) NOT NULL,
  `doctor_hospital_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(10) NOT NULL,
  `appoint_id` int(10) NOT NULL,
  `doctor_hospital_id` int(10) NOT NULL,
  `staff_hospital_id` int(10) NOT NULL,
  `medical_record` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `vital_pulse_his` int(10) NOT NULL,
  `vital_pulse_dias` int(10) NOT NULL,
  `vital_wieght` int(10) NOT NULL,
  `vital_height` int(10) NOT NULL,
  `vital_note` text CHARACTER SET latin1 NOT NULL,
  `editable` tinyint(1) NOT NULL,
  `vital_temperature` int(10) NOT NULL,
  `symptom` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `drug_id` int(10) NOT NULL,
  `drug_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `drug_instruct` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `drug_prop` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `drug_warn` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `druglist`
--

CREATE TABLE `druglist` (
  `druglist_id` int(10) UNSIGNED NOT NULL,
  `persc_id` int(10) NOT NULL,
  `drug_id` int(10) UNSIGNED NOT NULL,
  `drug_quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `hospital_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
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
  `addr_postcode` int(10) UNSIGNED DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`hospital_id`, `name`, `surname`, `national_id`, `password`, `birthdate`, `religion`, `addr_no`, `addr_village`, `addr_soi`, `addr_road`, `addr_subdistrict`, `addr_district`, `addr_province`, `addr_postcode`, `contact`, `email`) VALUES
(1, 'เธียรฉาย', 'เรียงวิวัฒน์', '1103701330244', '952748fh', '1994-08-07', 'พุทธ', '20/8', 'ภราดร', 'บางบอน 5 ซอย 7', 'เอกชัย - บางบอน', 'บางบอน', 'บางบอน', 'กรุงเทพมหานคร', 10150, '0815839028', 'tianchai.riengviwat@gmail.com'),
(2, 'เธียรภวัต', 'เรียงวิวัฒน์', '1103701741449', 'gamemapleob', '1994-09-06', 'พุทธ', '20/8', 'ภราดร', 'บางบอน 5 ซอย 7', 'เอกชัย-บางบอน', 'บางบอน', 'บางบอน', 'กรุงเทพมหานคร', 10150, '0867824633', 'tianpawat.r@gmail.com'),
(3, 'asd', 'asd', '5555', '555', '2015-08-04', '', '', '', '', '', '', '', '', NULL, NULL, ''),
(4, '5', '5', '5', '5', '5555-05-05', '5', '', '', '', '', '', '', '', NULL, '5', '5'),
(5, '5', '5', '1', '1', '1111-11-11', '1', '', '', '', '', '', '', '', NULL, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `perscription`
--

CREATE TABLE `perscription` (
  `presc_id` int(10) NOT NULL,
  `pharm_hospital_id` int(10) NOT NULL,
  `dispensed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `shift_id` int(10) NOT NULL,
  `shift_date` date NOT NULL,
  `shift_time` int(10) NOT NULL,
  `shift_queue_quan` int(10) NOT NULL,
  `shift_open` tinyint(1) NOT NULL DEFAULT '1',
  `shift_active` tinyint(1) NOT NULL DEFAULT '0',
  `doctor_hospital_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_hospital_id` int(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_surname` varchar(255) NOT NULL,
  `staff_national_id` varchar(255) NOT NULL,
  `staff_password` varchar(255) NOT NULL,
  `staff_birthdate` date NOT NULL,
  `staff_religion` varchar(255) DEFAULT NULL,
  `staff_addr_no` varchar(255) DEFAULT NULL,
  `staff_addr_village` varchar(255) DEFAULT NULL,
  `staff_addr_soi` varchar(255) DEFAULT NULL,
  `staff_addr_road` varchar(255) DEFAULT NULL,
  `staff_addr_subdistrict` varchar(255) DEFAULT NULL,
  `staff_addr_district` varchar(255) DEFAULT NULL,
  `staff_addr_province` varchar(255) DEFAULT NULL,
  `staff_addr_postcode` int(10) UNSIGNED DEFAULT NULL,
  `staff_contact` varchar(255) DEFAULT NULL,
  `staff_email` varchar(255) DEFAULT NULL,
  `staff_role` enum('doctor','officer','pharmacist') NOT NULL DEFAULT 'officer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_hospital_id`, `staff_name`, `staff_surname`, `staff_national_id`, `staff_password`, `staff_birthdate`, `staff_religion`, `staff_addr_no`, `staff_addr_village`, `staff_addr_soi`, `staff_addr_road`, `staff_addr_subdistrict`, `staff_addr_district`, `staff_addr_province`, `staff_addr_postcode`, `staff_contact`, `staff_email`, `staff_role`) VALUES
(1, 'admin', 'doctor', '11400800332', 'admin', '2015-11-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'doctor'),
(2, 'admin', 'officer', '11400800332', 'admin', '2015-11-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'officer'),
(3, 'admin', 'pharmacist', '123456789222', 'admin', '2015-11-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pharmacist'),
(4, 'admin', 'pharmacist', '123456789222', 'admin', '2015-11-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pharmacist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `cancel_patrol`
--
ALTER TABLE `cancel_patrol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `default_shift`
--
ALTER TABLE `default_shift`
  ADD PRIMARY KEY (`default_shift_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `druglist`
--
ALTER TABLE `druglist`
  ADD PRIMARY KEY (`druglist_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `perscription`
--
ALTER TABLE `perscription`
  ADD PRIMARY KEY (`presc_id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_hospital_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoint_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cancel_patrol`
--
ALTER TABLE `cancel_patrol`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `default_shift`
--
ALTER TABLE `default_shift`
  MODIFY `default_shift_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `drug_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `druglist`
--
ALTER TABLE `druglist`
  MODIFY `druglist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `hospital_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `perscription`
--
ALTER TABLE `perscription`
  MODIFY `presc_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `shift_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_hospital_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
