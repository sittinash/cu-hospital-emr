-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2015 at 02:46 PM
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
  `doctor_hospital_id` int(10) NOT NULL,
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

--
-- Dumping data for table `default_shift`
--

INSERT INTO `default_shift` (`default_shift_id`, `default_shift_day`, `default_shift_time`, `doctor_hospital_id`) VALUES
(1, 4, 2, 7),
(2, 4, 1, 64),
(3, 3, 1, 77),
(4, 6, 2, 73),
(5, 5, 2, 17),
(6, 7, 2, 75),
(7, 6, 2, 17),
(8, 5, 1, 31),
(9, 5, 1, 31),
(10, 5, 2, 17),
(11, 3, 1, 79),
(12, 1, 1, 42),
(13, 2, 2, 31),
(14, 5, 1, 79),
(15, 3, 1, 12),
(16, 4, 2, 17),
(17, 4, 1, 64),
(18, 2, 2, 92),
(19, 5, 2, 11),
(20, 1, 2, 41),
(21, 5, 1, 47),
(22, 5, 2, 73),
(23, 6, 2, 12),
(24, 4, 2, 64),
(25, 5, 2, 14),
(26, 4, 2, 41),
(27, 4, 1, 1),
(28, 4, 2, 17),
(29, 5, 2, 73),
(30, 6, 2, 73),
(31, 5, 1, 87),
(32, 2, 1, 92),
(33, 6, 2, 47),
(34, 6, 1, 0),
(35, 6, 2, 17),
(36, 6, 2, 31),
(37, 3, 1, 26),
(38, 3, 2, 12),
(39, 2, 1, 38),
(40, 3, 2, 87),
(41, 7, 1, 60),
(42, 6, 1, 87),
(43, 5, 1, 14),
(44, 7, 2, 64),
(45, 4, 2, 45),
(46, 7, 2, 14),
(47, 1, 1, 31),
(48, 1, 1, 77),
(49, 3, 2, 54),
(50, 2, 2, 1),
(51, 7, 1, 1),
(52, 6, 1, 95),
(53, 7, 1, 38),
(54, 6, 2, 7),
(55, 4, 2, 17),
(56, 7, 1, 37),
(57, 2, 2, 73),
(58, 3, 1, 17),
(59, 7, 2, 0),
(60, 1, 2, 87),
(61, 1, 1, 92),
(62, 5, 1, 75),
(63, 1, 1, 64),
(64, 4, 1, 12),
(65, 7, 2, 50),
(66, 4, 2, 1),
(67, 3, 1, 92),
(68, 6, 2, 75),
(69, 7, 2, 14),
(70, 4, 1, 79),
(71, 3, 1, 1),
(72, 5, 1, 41),
(73, 7, 1, 92),
(74, 7, 2, 26),
(75, 7, 2, 38),
(76, 4, 1, 95),
(77, 5, 2, 42),
(78, 3, 2, 42),
(79, 7, 1, 95),
(80, 6, 1, 50),
(81, 5, 1, 0),
(82, 2, 1, 50),
(83, 4, 2, 0),
(84, 7, 1, 79),
(85, 2, 1, 77),
(86, 7, 2, 1),
(87, 2, 2, 38),
(88, 1, 1, 31),
(89, 5, 1, 60),
(90, 3, 1, 38),
(91, 1, 1, 41),
(92, 3, 1, 75),
(93, 2, 2, 75),
(94, 6, 1, 12),
(95, 2, 2, 64),
(96, 6, 2, 47),
(97, 2, 2, 0),
(98, 5, 2, 31),
(99, 3, 2, 26),
(100, 6, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(10) NOT NULL,
  `appoint_id` int(10) NOT NULL,
  `doctor_hospital_id` int(10) NOT NULL,
  `staff_hospital_id` int(10) DEFAULT NULL,
  `medical_record` text CHARACTER SET utf8 COLLATE utf8_bin,
  `vital_pulse_his` int(10) DEFAULT NULL,
  `vital_pulse_dias` int(10) DEFAULT NULL,
  `vital_wieght` int(10) DEFAULT NULL,
  `vital_height` int(10) DEFAULT NULL,
  `vital_note` text CHARACTER SET latin1,
  `editable` tinyint(1) DEFAULT NULL,
  `vital_temperature` int(10) DEFAULT NULL,
  `symptom` text CHARACTER SET latin1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `drug_id` int(10) NOT NULL,
  `drug_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `drug_instruct` text CHARACTER SET utf8 COLLATE utf8_bin,
  `drug_prop` text CHARACTER SET utf8 COLLATE utf8_bin,
  `drug_warn` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`drug_id`, `drug_name`, `drug_instruct`, `drug_prop`, `drug_warn`) VALUES
(1, 'LevothyroxineSodium', NULL, NULL, NULL),
(2, 'Enalapril Maleate', NULL, NULL, NULL),
(3, 'Ibuprofen (Rx)', NULL, NULL, NULL),
(4, 'Lorazepam', NULL, NULL, NULL),
(5, 'Citalopram HBR', NULL, NULL, NULL),
(6, 'Sertraline HCl', NULL, NULL, NULL),
(7, 'Penicillin VK', NULL, NULL, NULL),
(8, 'Spiriva Handihaler', NULL, NULL, NULL),
(9, 'Premarin', NULL, NULL, NULL),
(10, 'Carisoprodol', NULL, NULL, NULL),
(11, 'Omeprazole (Rx)', NULL, NULL, NULL),
(12, 'Lipitor', NULL, NULL, NULL),
(13, 'Azithromycin', NULL, NULL, NULL),
(14, 'Omeprazole (Rx)', NULL, NULL, NULL),
(15, 'Metformin HCl', NULL, NULL, NULL),
(16, 'Cephalexin', NULL, NULL, NULL),
(17, 'Sertraline HCl', NULL, NULL, NULL),
(18, 'Prednisone', NULL, NULL, NULL),
(19, 'Synthroid', NULL, NULL, NULL),
(20, 'Alprazolam', NULL, NULL, NULL),
(21, 'Hydrochlorothiazide', NULL, NULL, NULL),
(22, 'Endocet', NULL, NULL, NULL),
(23, 'Singulair', NULL, NULL, NULL),
(24, 'Atenolol', NULL, NULL, NULL),
(25, 'Alprazolam', NULL, NULL, NULL),
(26, 'Furosemide', NULL, NULL, NULL),
(27, 'Ventolin HFA', NULL, NULL, NULL),
(28, 'Levoxyl', NULL, NULL, NULL),
(29, 'Lidoderm', NULL, NULL, NULL),
(30, 'Pravastatin Sodium', NULL, NULL, NULL),
(31, 'Hydrocodone/APAP', NULL, NULL, NULL),
(32, 'Diovan HCT', NULL, NULL, NULL),
(33, 'Simvastatin', NULL, NULL, NULL),
(34, 'Cephalexin', NULL, NULL, NULL),
(35, 'Sulfamethoxazole/Trimethoprim', NULL, NULL, NULL),
(36, 'Bystolic', NULL, NULL, NULL),
(37, 'Oxycodone/APAP', NULL, NULL, NULL),
(38, 'Oxycontin', NULL, NULL, NULL),
(39, 'APAP/Codeine', NULL, NULL, NULL),
(40, 'Amlodipine Besylate', NULL, NULL, NULL),
(41, 'Metformin HCl', NULL, NULL, NULL),
(42, 'Januvia', NULL, NULL, NULL),
(43, 'Fluticasone Propionate', NULL, NULL, NULL),
(44, 'Klor-Con M20', NULL, NULL, NULL),
(45, 'Levaquin', NULL, NULL, NULL),
(46, 'Clonazepam', NULL, NULL, NULL),
(47, 'Prednisone', NULL, NULL, NULL),
(48, 'Nuvaring', NULL, NULL, NULL),
(49, 'Amlodipine Besylate', NULL, NULL, NULL),
(50, 'Warfarin Sodium', NULL, NULL, NULL),
(51, 'Spiriva Handihaler', NULL, NULL, NULL),
(52, 'Warfarin Sodium', NULL, NULL, NULL),
(53, 'Penicillin VK', NULL, NULL, NULL),
(54, 'Carvedilol', NULL, NULL, NULL),
(55, 'Amoxicillin Trihydrate/Potassium Clavulanate', NULL, NULL, NULL),
(56, 'Amoxicillin', NULL, NULL, NULL),
(57, 'Tramadol HCl', NULL, NULL, NULL),
(58, 'Hydrocodone/APAP', NULL, NULL, NULL),
(59, 'Methylprednisolone', NULL, NULL, NULL),
(60, 'Triamterene/Hydrochlorothiazide', NULL, NULL, NULL),
(61, 'Lisinopril', NULL, NULL, NULL),
(62, 'Sertraline HCl', NULL, NULL, NULL),
(63, 'Zolpidem Tartrate', NULL, NULL, NULL),
(64, 'Oxycontin', NULL, NULL, NULL),
(65, 'Doxycycline Hyclate', NULL, NULL, NULL),
(66, 'Benicar HCT', NULL, NULL, NULL),
(67, 'Fluconazole', NULL, NULL, NULL),
(68, 'Nexium', NULL, NULL, NULL),
(69, 'Klor-Con M20', NULL, NULL, NULL),
(70, 'Carvedilol', NULL, NULL, NULL),
(71, 'Lisinopril/Hydrochlorothiazide', NULL, NULL, NULL),
(72, 'Premarin', NULL, NULL, NULL),
(73, 'Tricor', NULL, NULL, NULL),
(74, 'Simvastatin', NULL, NULL, NULL),
(75, 'Lisinopril', NULL, NULL, NULL),
(76, 'Metoprolol Succinate', NULL, NULL, NULL),
(77, 'Triamterene/Hydrochlorothiazide', NULL, NULL, NULL),
(78, 'Alprazolam', NULL, NULL, NULL),
(79, 'Lorazepam', NULL, NULL, NULL),
(80, 'Ciprofloxacin HCl', NULL, NULL, NULL),
(81, 'Simvastatin', NULL, NULL, NULL),
(82, 'Lantus Solostar', NULL, NULL, NULL),
(83, 'Lexapro', NULL, NULL, NULL),
(84, 'Furosemide', NULL, NULL, NULL),
(85, 'Trazodone HCl', NULL, NULL, NULL),
(86, 'Gianvi', NULL, NULL, NULL),
(87, 'Abilify', NULL, NULL, NULL),
(88, 'Zolpidem Tartrate', NULL, NULL, NULL),
(89, 'Omeprazole (Rx)', NULL, NULL, NULL),
(90, 'Hydrochlorothiazide', NULL, NULL, NULL),
(91, 'Alprazolam', NULL, NULL, NULL),
(92, 'Omeprazole (Rx)', NULL, NULL, NULL),
(93, 'Lantus Solostar', NULL, NULL, NULL),
(94, 'Gabapentin', NULL, NULL, NULL),
(95, 'Alprazolam', NULL, NULL, NULL),
(96, 'Celebrex', NULL, NULL, NULL),
(97, 'Famotidine', NULL, NULL, NULL),
(98, 'Tramadol HCl', NULL, NULL, NULL),
(99, 'Amoxicillin Trihydrate/Potassium Clavulanate', NULL, NULL, NULL),
(100, 'Azithromycin', NULL, NULL, NULL);

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
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
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
  `email` varchar(255) DEFAULT NULL,
  `nationality` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`hospital_id`, `name`, `surname`, `national_id`, `password`, `birthdate`, `religion`, `addr_no`, `addr_village`, `addr_soi`, `addr_road`, `addr_subdistrict`, `addr_district`, `addr_province`, `addr_postcode`, `contact`, `email`, `nationality`) VALUES
(6, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '5', '5', '1', '1', '1111-11-11', '1', '', '', '', '', '', '', '', NULL, '1', '1', ''),
(31, 'Ora', 'M', '1008890653029', 'BWP43NSM1NX', '2016-04-05', NULL, '40', NULL, NULL, 'P.O. Box 671, 7238 Sociis Rd.', NULL, NULL, 'Port Pirie', 0, NULL, 'felis.ullamcorper.viverra@auctorquistristique.org', 'Germany'),
(70, 'Savannah', 'C', '1009112147614', 'IMY35VNW8FN', '2016-03-14', NULL, '67', NULL, NULL, '7086 Dolor St.', NULL, NULL, 'Alma', 64458, NULL, 'id.blandit@estMauriseu.edu', 'Afghanistan'),
(74, 'Vincent', '', '1058863684535', 'QIN58MNL0LT', '2015-07-12', NULL, '69', NULL, NULL, '4962 Lorem Rd.', NULL, NULL, 'Llandrindod Wells', 34881, NULL, 'congue.a.aliquet@elit.ca', 'Honduras'),
(75, 'Aretha', 'R', '1074107925407', 'YNX64EGL2XV', '2016-08-13', NULL, '35', NULL, NULL, '4742 Odio. Street', NULL, NULL, 'Gomz�-Andoumont', 73694, NULL, 'metus.sit@placerat.ca', 'Serbia'),
(1, 'เธียรฉาย', '', '1103701330244', '952748fh', '1994-08-07', 'พุทธ', '20/8', 'ภราดร', 'บางบอน 5 ซอย 7', 'เอกชัย - บางบอน', 'บางบอน', 'บางบอน', 'กรุงเทพมหานคร', 10150, '0815839028', 'tianchai.riengviwat@gmail.com', ''),
(2, 'เธียรภวัต', '', '1103701741449', 'gamemapleob', '1994-09-06', 'พุทธ', '20/8', 'ภราดร', 'บางบอน 5 ซอย 7', 'เอกชัย-บางบอน', 'บางบอน', 'บางบอน', 'กรุงเทพมหานคร', 10150, '0867824633', 'tianpawat.r@gmail.com', ''),
(55, 'Teagan', '', '1105417718179', 'TXA89CWW7LW', '2015-12-03', NULL, '35', NULL, NULL, 'P.O. Box 212, 386 Phasellus Rd.', NULL, NULL, 'Braives', 92318, NULL, 'dolor.sit@mollis.co.uk', 'Micronesia'),
(37, 'Sade', '', '1163865146227', 'LVZ75NCT0YU', '2014-12-09', NULL, '52', NULL, NULL, '153-9053 Magna. Avenue', NULL, NULL, 'Bangalore', 4662, NULL, 'erat@ornareliberoat.com', 'Tuvalu'),
(77, 'Winter', '', '1166573711671', 'IDP71UXH7NK', '2015-03-08', NULL, '56', NULL, NULL, '511-7899 Ac St.', NULL, NULL, 'Vienna', 9765, NULL, 'in.lobortis.tellus@aliquetPhasellus.ca', 'Dominica'),
(82, 'Rhea', '', '1175105173140', 'WOP10PQE5SC', '2015-03-31', NULL, '51', NULL, NULL, '4437 Vivamus Avenue', NULL, NULL, 'East Gwillimbury', 29075, NULL, 'commodo@liberonecligula.org', 'Pakistan'),
(46, 'David', '䡯', '1175719209946', 'ERP80KBM4WT', '2014-12-03', NULL, '100', NULL, NULL, '254-7600 Purus Av.', NULL, NULL, 'Gorinchem', 13589, NULL, 'inceptos@Curae.net', 'Korea, South'),
(16, 'Katell', '䉡', '1238113729283', 'DQN86LKC9GH', '2015-02-26', NULL, '33', NULL, NULL, 'Ap #985-3124 Ante. Rd.', NULL, NULL, 'Wisbech', 0, NULL, 'ac.feugiat.non@sagittisfelisDonec.ca', 'Saint Pierre and Miquelon'),
(58, 'Kimberley', '䝬', '1238183774054', 'IAU83IUS8QT', '2016-05-26', NULL, '61', NULL, NULL, '9824 Eu Av.', NULL, NULL, 'Carcassonne', 6339, NULL, 'metus@pretiumneque.net', 'Cyprus'),
(35, 'Wade', '', '1247655200772', 'YEF95GOT3DO', '2016-03-28', NULL, '82', NULL, NULL, '844-7399 Metus. St.', NULL, NULL, 'North Dum Dum', 8646, NULL, 'metus.Aenean.sed@Proinvelnisl.ca', 'Iran'),
(104, 'Abra', 'B', '1251458751969', 'BVO73GDQ2QC', '2014-12-25', NULL, '60', NULL, NULL, 'P.O. Box 253, 9563 Vehicula. Rd.', NULL, NULL, 'Colwood', 0, NULL, 'facilisis.eget@purus.co.uk', 'Mexico'),
(29, 'Robert', '坥', '1275178124196', 'BUH28BXX5FR', '2015-04-27', NULL, '60', NULL, NULL, '3405 Iaculis, Rd.', NULL, NULL, 'Lieferinge', 0, NULL, 'bibendum.Donec.felis@auctorvitaealiquet.co.uk', 'Mongolia'),
(76, 'Elliott', '䑡', '1300872290507', 'YEY04WCR3CB', '2015-11-12', NULL, '65', NULL, NULL, '615-6520 At Road', NULL, NULL, 'Oviedo', 732075, NULL, 'ullamcorper.Duis@aliquetlobortisnisi.ca', 'Palestine, State of'),
(84, 'Tucker', '', '1337589995004', 'YYW73WMC6ON', '2015-04-03', NULL, '41', NULL, NULL, '427-3056 Orci. Av.', NULL, NULL, 'Cimitile', 47335, NULL, 'mus.Donec@elit.org', 'Rwanda'),
(8, 'Linus', 'M', '1338451568968', 'DJA80HSA0ZH', '2016-08-10', NULL, '67', NULL, NULL, 'P.O. Box 512, 1325 A Av.', NULL, NULL, 'Sterrebeek', 7310, NULL, 'semper@augueut.org', 'Saint Pierre and Miquelon'),
(61, 'Ciaran', 'G', '1351748413406', 'MRK05CRS4BP', '2016-07-03', NULL, '70', NULL, NULL, 'Ap #860-5910 Morbi St.', NULL, NULL, 'Asse', 90303, NULL, 'sagittis.felis.Donec@consectetueripsumnunc.net', 'Saint Pierre and Miquelon'),
(14, 'Bevis', '', '1377731338143', 'RWW39KDM4CG', '2015-08-07', NULL, '77', NULL, NULL, '3626 Feugiat Street', NULL, NULL, 'Serik', 158734, NULL, 'adipiscing@non.org', 'Slovakia'),
(88, 'Mia', '䵯', '1383958999067', 'OUX84VRC3IV', '2015-08-21', NULL, '29', NULL, NULL, '8844 Luctus. Av.', NULL, NULL, 'Armidale', 5017, NULL, 'Vivamus@massarutrum.ca', 'Northern Mariana Islands'),
(57, 'Alma', '', '1391469579190', 'JZQ99FBJ5WG', '2015-01-18', NULL, '49', NULL, NULL, '3778 Nulla Road', NULL, NULL, 'Bay Roberts', 9179, NULL, 'metus.facilisis.lorem@neccursusa.ca', 'Moldova'),
(60, 'Kelly', 'B', '1393935081549', 'MIG74YAK6XK', '2015-08-30', NULL, '70', NULL, NULL, '890 In St.', NULL, NULL, 'Dera Ghazi Khan', 68554, NULL, 'dui.lectus@euligulaAenean.co.uk', 'Denmark'),
(23, 'Colorado', '䡵', '1396087330766', 'QJN41BMF0RX', '2015-10-03', NULL, '86', NULL, NULL, 'Ap #227-4921 Suscipit Ave', NULL, NULL, 'Fratta Todina', 936107, NULL, 'enim.gravida.sit@variusNamporttitor.edu', 'Spain'),
(96, 'Indigo', '䙡', '1422948542051', 'XOK56QJU0WM', '2016-06-30', NULL, '38', NULL, NULL, '526-1992 Volutpat Road', NULL, NULL, 'İzmit', 451197, NULL, 'consequat.nec.mollis@dictummiac.com', 'Madagascar'),
(24, 'Merrill', '偩', '1431287813931', 'SJN27MHQ2CN', '2016-10-14', NULL, '54', NULL, NULL, '133-4486 Eleifend Avenue', NULL, NULL, 'Dro', 23969, NULL, 'a.mi.fringilla@metussit.co.uk', 'Western Sahara'),
(66, 'Samantha', '', '1437136526219', 'BIU18JOE3FS', '2015-02-19', NULL, '82', NULL, NULL, '524-1640 Ut, Ave', NULL, NULL, 'Crato', 195822, NULL, 'Mauris@molestie.net', 'Chad'),
(26, 'Myles', '', '1464616319164', 'BDW38XBW1PB', '2016-07-19', NULL, '20', NULL, NULL, 'P.O. Box 905, 5078 Auctor Ave', NULL, NULL, 'Bruckneudorf', 381, NULL, 'tellus.id@aliquetvelvulputate.ca', 'Czech Republic'),
(38, 'Maya', '', '1474808989092', 'SQF94CVF1RC', '2015-03-23', NULL, '20', NULL, NULL, '723-8487 Sem Avenue', NULL, NULL, 'Orciano Pisano', 248496, NULL, 'felis.orci.adipiscing@etmagnis.net', 'Singapore'),
(44, 'Christen', '', '1476985995657', 'RAI53YTB1BF', '2016-02-15', NULL, '40', NULL, NULL, '803-4547 Consequat, Rd.', NULL, NULL, 'Bras', 78988, NULL, 'Proin.vel@loremfringilla.ca', 'Sri Lanka'),
(95, 'Althea', '', '1482291505672', 'QVW95WTS0QL', '2016-05-27', NULL, '37', NULL, NULL, 'Ap #437-2165 Mollis. St.', NULL, NULL, 'Whithorn', 6343, NULL, 'Cum.sociis.natoque@scelerisque.ca', 'Korea, North'),
(18, 'India', '', '1498266152106', 'RRN12MJY2FR', '2015-12-03', NULL, '71', NULL, NULL, 'P.O. Box 681, 5077 Felis, St.', NULL, NULL, 'Halifax', 52444, NULL, 'sit.amet.massa@enimNuncut.ca', 'Indonesia'),
(47, 'Fletcher', '印', '1507222403772', 'WJI36DYQ9NH', '2015-08-04', NULL, '21', NULL, NULL, 'Ap #960-2270 Sed Av.', NULL, NULL, 'Namur', 40709, NULL, 'quam@sed.edu', 'Venezuela'),
(56, 'Vielka', 'B', '1511141499504', 'IHG22NOW6QS', '2015-02-08', NULL, '55', NULL, NULL, 'P.O. Box 826, 1776 Adipiscing St.', NULL, NULL, 'Cumberland', 0, NULL, 'imperdiet@Aeneanegestashendrerit.net', 'Benin'),
(73, 'Acton', '䩥', '1553332241252', 'JKI67YFN2PB', '2015-03-12', NULL, '54', NULL, NULL, '8524 Turpis. Av.', NULL, NULL, 'Turnhout', 339706, NULL, 'urna@mauriserat.com', 'Tonga'),
(19, 'Denton', '', '1578482721932', 'LZS04LGD1VL', '2016-08-03', NULL, '56', NULL, NULL, '293-9170 Nulla. Rd.', NULL, NULL, 'Kalyan', 3377, NULL, 'ac.turpis@mattis.com', 'Saint Vincent and The Grenadines'),
(53, 'Lawrence', '', '1631766110658', 'NNA89NDY3DW', '2016-10-19', NULL, '28', NULL, NULL, 'Ap #563-144 Urna. Street', NULL, NULL, 'Libramont-Chevigny', 85516, NULL, 'dui@Quisquevarius.org', 'Namibia'),
(21, 'Tana', '却', '1634618925862', 'IRL95MWD5SV', '2015-03-27', NULL, '95', NULL, NULL, 'Ap #536-9751 Nulla Street', NULL, NULL, 'Tczew', 6620, NULL, 'augue.ac.ipsum@miDuis.com', 'South Africa'),
(65, 'Leroy', '坥', '1650619989261', 'JCD63PYF6YQ', '2015-10-21', NULL, '43', NULL, NULL, 'Ap #430-2244 Metus. Av.', NULL, NULL, 'Zelem', 58623, NULL, 'interdum.Sed@liberoestcongue.co.uk', 'Sudan'),
(97, 'Hadley', '䡡', '1659836284816', 'NNX92RTF9CN', '2016-08-19', NULL, '89', NULL, NULL, 'P.O. Box 462, 7678 Sed St.', NULL, NULL, 'Sale', 50945, NULL, 'gravida.sit.amet@tellusSuspendisse.co.uk', 'Cape Verde'),
(106, 'Mikayla', '', '1679868374951', 'LJJ00EVK4ER', '2014-12-15', NULL, '46', NULL, NULL, '474 Amet, Rd.', NULL, NULL, 'Sotteville-lès-Rouen', 2130, NULL, 'non.massa@semmollis.net', 'Christmas Island'),
(49, 'Uta', 'E', '1686977280304', 'RLM62VHK9GM', '2015-07-23', NULL, '27', NULL, NULL, '4779 Sodales Rd.', NULL, NULL, 'Assiniboia', 23443, NULL, 'sed.dui.Fusce@enimnislelementum.co.uk', 'Venezuela'),
(101, 'Alana', '', '1688178076409', 'MKV70TQB7AS', '2015-04-03', NULL, '26', NULL, NULL, 'Ap #705-431 Class St.', NULL, NULL, 'Gijzelbrechtegem', 40551, NULL, 'est.Nunc@placeratvelit.com', 'South Sudan'),
(105, 'Regan', '', '1691843478009', 'ODT18JGI4DT', '2014-11-29', NULL, '100', NULL, NULL, 'P.O. Box 549, 8431 Cursus Rd.', NULL, NULL, 'Bhopal', 41694, NULL, 'eu.sem@maurissagittisplacerat.org', 'Guyana'),
(87, 'Shafira', 'F', '1712157633155', 'UUC38WMR2YS', '2015-05-09', NULL, '76', NULL, NULL, 'P.O. Box 105, 992 Nulla. St.', NULL, NULL, 'Springfield', 86015, NULL, 'ante.Nunc@erateget.ca', 'Lesotho'),
(33, 'Caleb', '', '1722212256864', 'CVW47FOO0QP', '2015-01-12', NULL, '40', NULL, NULL, '631-4491 Dictum. Street', NULL, NULL, 'Williams Lake', 32373, NULL, 'euismod.enim.Etiam@nuncest.edu', 'Mozambique'),
(10, 'Victor', 'B', '1732845675200', 'DQF83KDT5QP', '2014-12-16', NULL, '55', NULL, NULL, '916-6044 Consectetuer Rd.', NULL, NULL, 'Ramsey', 263818, NULL, 'lacinia.orci.consectetuer@Quisqueliberolacus.org', 'Romania'),
(86, 'Chanda', '', '1773905238137', 'QYQ87WEC5JO', '2015-10-27', NULL, '30', NULL, NULL, '1390 Curae; Rd.', NULL, NULL, 'Horsham', 11000, NULL, 'sed.leo@atfringillapurus.com', 'Saint Barthélemy'),
(80, 'Cheryl', 'G', '1786613964476', 'XSY57EIQ3TK', '2016-01-20', NULL, '24', NULL, NULL, '3981 Adipiscing Ave', NULL, NULL, 'Cavaso del Tomba', 9257, NULL, 'imperdiet.erat@temporlorem.org', 'Congo (Brazzaville)'),
(64, 'Harding', '䉲', '1832948676310', 'UNK28CEJ8SJ', '2015-05-09', NULL, '48', NULL, NULL, 'P.O. Box 118, 437 Scelerisque Ave', NULL, NULL, 'Exeter', 11317, NULL, 'Curabitur@lectussitamet.edu', 'Fiji'),
(69, 'Winter', '卡', '1867005906068', 'ONM79EZQ4QA', '2015-08-09', NULL, '94', NULL, NULL, 'P.O. Box 629, 5000 Ut Road', NULL, NULL, 'Tay', 23, NULL, 'bibendum.sed@CuraeDonec.net', 'Côte D''Ivoire (Ivory Coast)'),
(20, 'Kameko', '䉯', '1892860027961', 'NDH83TIW1VQ', '2015-01-24', NULL, '63', NULL, NULL, '126-9446 Donec Ave', NULL, NULL, 'Kirkland', 22, NULL, 'semper@sitamet.edu', 'Comoros'),
(100, 'Lara', 'B', '1919529124163', 'NZC02YFJ3KN', '2014-12-25', NULL, '28', NULL, NULL, '128-4435 Orci St.', NULL, NULL, 'Roccalumera', 97662, NULL, 'vestibulum@Crasconvallis.edu', 'Uruguay'),
(91, 'Echo', '', '1925769938156', 'ACL45BKF0VQ', '2015-12-28', NULL, '71', NULL, NULL, 'P.O. Box 265, 283 Eu St.', NULL, NULL, 'Monmouth', 41604, NULL, 'porttitor.eros.nec@acmattis.co.uk', 'Namibia'),
(34, 'Mia', '䉡', '1936663808301', 'YMI82UJB6TL', '2015-12-04', NULL, '41', NULL, NULL, '6277 Cursus Street', NULL, NULL, 'Glendon', 28105, NULL, 'dolor.egestas.rhoncus@Donecconsectetuer.net', 'Sudan'),
(45, 'Whitney', '䍡', '1948421815410', 'RVD08IGC7AE', '2015-12-08', NULL, '33', NULL, NULL, 'P.O. Box 265, 8905 Quisque Street', NULL, NULL, 'Ussassai', 17519, NULL, 'dignissim.tempor.arcu@duiinsodales.com', 'Iceland'),
(78, 'Isaiah', 'H', '1970506814308', 'BDO03GAN2IS', '2015-04-29', NULL, '80', NULL, NULL, '7802 Et Rd.', NULL, NULL, 'Shawinigan', 11896, NULL, 'pellentesque@odio.co.uk', 'Indonesia'),
(30, 'Marshall', '䍯', '2018520650454', 'QGM21PZJ1GP', '2016-01-21', NULL, '55', NULL, NULL, '963-3448 Parturient Ave', NULL, NULL, 'Deschambault', 1201, NULL, 'dapibus@euenimEtiam.co.uk', 'Spain'),
(28, 'Indira', '', '2021996852010', 'IGA78KQJ5RI', '2016-07-04', NULL, '66', NULL, NULL, '7175 Ac St.', NULL, NULL, 'Nice', 60443, NULL, 'Mauris@Sedpharetra.net', 'Singapore'),
(40, 'Brent', 'O', '2044630938210', 'PMG32KLC2CR', '2015-03-29', NULL, '43', NULL, NULL, '8756 Adipiscing Street', NULL, NULL, 'Visso', 14984, NULL, 'ante.blandit.viverra@morbitristique.com', 'Bermuda'),
(36, 'Britanni', '', '2099577573128', 'KAO50CVF3KL', '2014-11-28', NULL, '42', NULL, NULL, '2432 Nisi. St.', NULL, NULL, 'Canmore', 760516, NULL, 'quis@tempusloremfringilla.co.uk', 'Benin'),
(50, 'Kylee', '', '2101273229346', 'ZOW62UIJ7YN', '2016-08-23', NULL, '28', NULL, NULL, '821-2541 Diam. St.', NULL, NULL, 'Accadia', 93593, NULL, 'vehicula.aliquet.libero@vitaeeratVivamus.net', 'Liberia'),
(94, 'Philip', '坡', '2140087786131', 'VJY59LSP0JM', '2016-09-16', NULL, '32', NULL, NULL, '7343 Non, Road', NULL, NULL, 'Lutterworth', 6165, NULL, 'tellus.justo@etmagnaPraesent.ca', 'Marshall Islands'),
(25, 'Ferris', '䅬', '2154602025636', 'HLN52RAO0JA', '2015-12-26', NULL, '85', NULL, NULL, '2851 Aliquet Street', NULL, NULL, 'Villa Cortese', 26436, NULL, 'nibh.vulputate@diam.org', 'French Polynesia'),
(99, 'Kuame', '䍡', '2159059331752', 'PPK86QDG3VB', '2015-01-30', NULL, '70', NULL, NULL, 'P.O. Box 430, 6625 Facilisis, Rd.', NULL, NULL, 'Pulle', 94057, NULL, 'Donec.non.justo@massaInteger.co.uk', 'Antigua and Barbuda'),
(98, 'Tate', 'L', '2171044697985', 'TTT34BTK7XA', '2015-07-22', NULL, '23', NULL, NULL, 'Ap #803-2478 Fusce Rd.', NULL, NULL, 'Firozabad', 0, NULL, 'nascetur.ridiculus.mus@mi.ca', 'Liechtenstein'),
(81, 'Ebony', '', '2175241686404', 'CXL35LLK4IW', '2016-01-15', NULL, '35', NULL, NULL, '240-2226 Urna. Ave', NULL, NULL, 'New Plymouth', 0, NULL, 'hendrerit.id.ante@Vestibulumante.co.uk', 'Saint Helena, Ascension and Tristan da Cunha'),
(11, 'Ava', 'F', '2196434590034', 'XCW90FHI0ZQ', '2015-12-29', NULL, '53', NULL, NULL, 'P.O. Box 427, 676 Dui, Avenue', NULL, NULL, 'Charlottetown', 6991, NULL, 'orci.Phasellus.dapibus@arcu.org', 'Nigeria'),
(79, 'Dolan', '', '2215478998609', 'NFL67GNW8CK', '2015-05-31', NULL, '83', NULL, NULL, '654-6438 Ipsum. Street', NULL, NULL, 'Bras', 2168, NULL, 'a.mi@nuncinterdumfeugiat.net', 'Equatorial Guinea'),
(62, 'Lucas', '䡯', '2248883793131', 'IMX09ONV7BL', '2016-04-29', NULL, '52', NULL, NULL, 'P.O. Box 168, 2621 Phasellus Rd.', NULL, NULL, 'St. Clears', 13339, NULL, 'vulputate.nisi.sem@rhoncusidmollis.com', 'Timor-Leste'),
(41, 'Medge', '', '2268116914667', 'AFV60CNX6ZM', '2015-09-23', NULL, '96', NULL, NULL, '678-6867 Duis Ave', NULL, NULL, 'Amqui', 1425, NULL, 'dignissim@utpharetrased.co.uk', 'Haiti'),
(12, 'Berk', '', '2311776377261', 'CKG67WRE2OE', '2015-07-13', NULL, '72', NULL, NULL, 'P.O. Box 700, 9182 Est. Street', NULL, NULL, 'Grand Island', 58, NULL, 'pede.blandit.congue@aliquetdiam.com', 'Afghanistan'),
(39, 'Shaine', '䱡', '2374602290802', 'BPH54LUJ9PP', '2016-05-08', NULL, '49', NULL, NULL, 'Ap #159-8880 Commodo Rd.', NULL, NULL, 'Conselice', 20721, NULL, 'pretium.neque.Morbi@id.edu', 'Syria'),
(22, 'Quinn', 'M', '2428384926170', 'WIW39MWS2SX', '2015-06-12', NULL, '86', NULL, NULL, 'P.O. Box 754, 2570 Vivamus Avenue', NULL, NULL, 'Greenwich', 93128, NULL, 'Aenean@ascelerisquesed.net', 'Mozambique'),
(89, 'Barclay', '䡥', '2438244585879', 'WLT08JFL2DE', '2015-05-19', NULL, '83', NULL, NULL, '591-3467 Molestie. Avenue', NULL, NULL, 'Ottignies', 4727, NULL, 'inceptos.hymenaeos.Mauris@aliquet.edu', 'Samoa'),
(51, 'Callie', '', '2440046571195', 'ZUR77ACE0FX', '2016-07-29', NULL, '95', NULL, NULL, '8129 Nostra, Ave', NULL, NULL, 'Palmerston', 5176, NULL, 'nec.urna.et@litoratorquentper.ca', 'Iran'),
(103, 'Paloma', '', '2456312516704', 'XEA78YNP6YL', '2016-04-12', NULL, '86', NULL, NULL, '732-6921 Arcu. Road', NULL, NULL, 'San Leucio del Sannio', 20013, NULL, 'ut@ullamcorpereueuismod.ca', 'Moldova'),
(13, 'Amber', '', '2466525414028', 'VEK00JHB1RW', '2016-10-25', NULL, '59', NULL, NULL, '9806 Facilisis Road', NULL, NULL, 'Muno', 66831, NULL, 'et@facilisisnonbibendum.com', 'Kenya'),
(27, 'Jackson', '䍨', '2487291257829', 'RTW05SEE5HW', '2016-11-01', NULL, '94', NULL, NULL, '2698 Quam Av.', NULL, NULL, 'Lauregno/Laurein', 485027, NULL, 'malesuada@faucibusutnulla.co.uk', 'South Georgia and The South Sandwich Islands'),
(67, 'Rooney', '', '2517696932890', 'OTE75ZJZ6XA', '2014-12-12', NULL, '57', NULL, NULL, 'P.O. Box 194, 4355 Nec Road', NULL, NULL, 'Saint-Maur-des-Fossés', 3566, NULL, 'nonummy.ac@ac.net', 'Bouvet Island'),
(9, 'Emerson', 'M', '2546960555017', 'WLS18ZMT8TT', '2016-03-17', NULL, '27', NULL, NULL, 'Ap #582-8211 Faucibus Rd.', NULL, NULL, 'Fogo', 25, NULL, 'sodales@loremvehicula.co.uk', 'Mongolia'),
(85, 'Tyrone', '', '2572099606507', 'XMG24YYN0RA', '2015-11-02', NULL, '72', NULL, NULL, '809-247 Augue Ave', NULL, NULL, 'Vaulx-lez-Chimay', 65, NULL, 'vulputate@sagittisfelis.co.uk', 'Bulgaria'),
(102, 'Jacob', '䵥', '2588159636595', 'ZFH55OUM1DY', '2016-03-26', NULL, '47', NULL, NULL, '656-7982 Mi St.', NULL, NULL, 'Brussel X-Luchthaven Remailing', 84189, NULL, 'viverra.Maecenas.iaculis@semegestasblandit.com', 'Germany'),
(71, 'Kiona', 'J', '2611159532331', 'ENO88AZL6GY', '2016-05-26', NULL, '24', NULL, NULL, '398-300 Ligula Rd.', NULL, NULL, 'Imst', 71523, NULL, 'velit@consequatdolor.com', 'Martinique'),
(42, 'Vaughan', '䵯', '2627750654705', 'PNH70HRX2QM', '2016-02-14', NULL, '54', NULL, NULL, '3296 Nisi Street', NULL, NULL, 'Imst', 7476, NULL, 'euismod@consectetuerrhoncusNullam.co.uk', 'Bahamas'),
(72, 'Libby', '', '2645582686179', 'IWA47YQZ1XG', '2015-06-23', NULL, '28', NULL, NULL, '370-9636 Cras St.', NULL, NULL, 'Sauveni�re', 20103, NULL, 'laoreet.posuere.enim@Nulla.net', 'Brunei'),
(17, 'Catherine', 'M', '2675636361353', 'FLA78JOW9HF', '2015-05-27', NULL, '94', NULL, NULL, '3174 Facilisis Street', NULL, NULL, 'Namur', 262229, NULL, 'vel@ettristiquepellentesque.net', 'Guinea'),
(93, 'Chelsea', '印', '2709161170759', 'CZD34XCP6VJ', '2016-03-08', NULL, '97', NULL, NULL, '572-1353 Sociis St.', NULL, NULL, 'Nodebais', 17428, NULL, 'Donec.sollicitudin@felisegetvarius.com', 'Tokelau'),
(52, 'Vernon', '', '2741146670655', 'USP86KCV4HY', '2016-08-02', NULL, '82', NULL, NULL, '1278 Mauris Rd.', NULL, NULL, 'Taunusstein', 58803, NULL, 'parturient.montes.nascetur@eudoloregestas.com', 'Fiji'),
(83, 'Sara', 'R', '2760736739263', 'OEO37SFA2TJ', '2016-05-16', NULL, '66', NULL, NULL, '2334 Posuere Street', NULL, NULL, 'Bozeman', 0, NULL, 'eros.non@ametfaucibus.net', 'Mozambique'),
(63, 'Freya', 'L', '2761434953660', 'IOG25AVG9VR', '2015-01-13', NULL, '53', NULL, NULL, 'P.O. Box 928, 5794 Mollis St.', NULL, NULL, 'Dos Hermanas', 53814, NULL, 'tempus@dui.net', 'Kenya'),
(15, 'Chastity', '', '2766503516585', 'PMA30PAT1AY', '2015-09-26', NULL, '64', NULL, NULL, '521-9164 Libero Rd.', NULL, NULL, 'Portigliola', 283923, NULL, 'ipsum.dolor@pedemalesuadavel.com', 'Saint Vincent and The Grenadines'),
(92, 'Brendan', '', '2833883488551', 'HRO25UQV3YZ', '2015-07-09', NULL, '23', NULL, NULL, 'Ap #150-3756 Vel Rd.', NULL, NULL, 'Blankenberge', 4547, NULL, 'Maecenas.ornare@Praesenteunulla.ca', 'Dominican Republic'),
(68, 'Sophia', '', '2835862903856', 'SHH57DSN0JA', '2016-10-04', NULL, '34', NULL, NULL, '8025 Sit Street', NULL, NULL, 'Faridabad', 1074, NULL, 'ultrices.Vivamus@nonbibendumsed.com', 'Monaco'),
(32, 'Anthony', '副', '2838349797763', 'ZSU45KOI7KB', '2015-07-30', NULL, '88', NULL, NULL, 'Ap #118-4717 Blandit Av.', NULL, NULL, 'Newton Stewart', 54338, NULL, 'cursus.luctus.ipsum@estNunclaoreet.org', 'Venezuela'),
(59, 'Nadine', '', '2851023014635', 'XTX36BMS3GY', '2016-09-05', NULL, '78', NULL, NULL, '628-627 Ligula St.', NULL, NULL, 'Corroy-le-Ch�teau', 51500, NULL, 'Duis.mi@egestasascelerisque.net', 'Mexico'),
(7, 'Joan', '䙬', '2931310889312', 'GVO64YYN2SM', '2015-08-28', NULL, '36', NULL, NULL, 'Ap #630-7984 Dui Road', NULL, NULL, 'Notre-Dame-du-Nord', 8300, NULL, 'tortor.Nunc.commodo@orciadipiscing.co.uk', 'Guatemala'),
(43, 'Tara', '', '2962687971071', 'COZ30HPK5TD', '2014-12-08', NULL, '51', NULL, NULL, 'P.O. Box 278, 2496 A St.', NULL, NULL, 'Kortessem', 21114, NULL, 'id.blandit@quamdignissim.edu', 'Sudan'),
(48, 'Fatima', 'C', '2976267292165', 'MXP01VID5AP', '2015-04-01', NULL, '65', NULL, NULL, '8498 Phasellus Road', NULL, NULL, 'Houthalen-Helchteren', 0, NULL, 'quis.lectus@sit.edu', 'Mexico'),
(54, 'Raven', 'H', '2986362896860', 'TZW70ZPL4OI', '2016-10-02', NULL, '78', NULL, NULL, '6252 At Road', NULL, NULL, 'Hay-on-Wye', 5107, NULL, 'Class.aptent.taciti@a.co.uk', 'Western Sahara'),
(90, 'Cameron', '', '2994685592130', 'TYH14JHP2ZC', '2016-01-15', NULL, '62', NULL, NULL, '1198 Id Ave', NULL, NULL, 'Hoogeveen', 0, NULL, 'nascetur.ridiculus.mus@senectuset.co.uk', 'Bhutan'),
(4, '5', '5', '5', '5', '5555-05-05', '5', '', '', '', '', '', '', '', NULL, '5', '5', ''),
(3, 'asd', '', '5555', '555', '2015-08-04', '', '', '', '', '', '', '', '', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `perscription`
--

CREATE TABLE `perscription` (
  `presc_id` int(10) NOT NULL,
  `pharm_hospital_id` int(10) DEFAULT NULL,
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
  `staff_birthdate` date DEFAULT NULL,
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
  `staff_role` enum('doctor','officer','pharmacist') NOT NULL DEFAULT 'officer',
  `stuff_nationality` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_hospital_id`, `staff_name`, `staff_surname`, `staff_national_id`, `staff_password`, `staff_birthdate`, `staff_religion`, `staff_addr_no`, `staff_addr_village`, `staff_addr_soi`, `staff_addr_road`, `staff_addr_subdistrict`, `staff_addr_district`, `staff_addr_province`, `staff_addr_postcode`, `staff_contact`, `staff_email`, `staff_role`, `stuff_nationality`) VALUES
(1, 'admin', 'doctor', '11400800332', 'admin', '2015-11-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'doctor', NULL),
(2, 'admin', 'officer', '11400800332', 'admin', '2015-11-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'officer', NULL),
(3, 'admin', 'pharmacist', '123456789222', 'admin', '2015-11-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pharmacist', NULL),
(4, 'admin', 'pharmacist', '123456789222', 'admin', '2015-11-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pharmacist', NULL),
(5, 'Leo', 'Blevins', '1833515675738', 'YIB41NIE8BN', '2015-05-19', NULL, '48', NULL, NULL, 'P.O. Box 764, 1948 Ac, Rd.', NULL, NULL, 'Warburg', 32, NULL, 'ullamcorper@nisl.co.uk', 'officer', 'Cambodia'),
(6, 'Austin', 'Hunter', '1587335449643', 'NIZ57SEU8AV', '2015-03-30', NULL, '51', NULL, NULL, 'P.O. Box 522, 2952 Scelerisque St.', NULL, NULL, 'Gijzelbrechtegem', 0, NULL, 'Mauris@tristiquealiquetPhasellus.co.uk', 'pharmacist', 'Algeria'),
(7, 'Sasha', 'Gould', '2467684002593', 'KZN74ZPI7PT', '2015-05-25', NULL, '54', NULL, NULL, 'P.O. Box 822, 4848 Libero. St.', NULL, NULL, 'Fleurus', 4967, NULL, 'inceptos.hymenaeos.Mauris@necenimNunc.org', 'doctor', 'Jamaica'),
(8, 'Ursula', 'Todd', '2040692049079', 'PZA31AYM6VM', '2015-02-04', NULL, '40', NULL, NULL, 'P.O. Box 533, 3548 Egestas. Street', NULL, NULL, 'Wittenberg', 2879, NULL, 'dignissim@Maecenas.ca', 'pharmacist', 'Saint Lucia'),
(9, 'Slade', 'Barber', '2030304261483', 'LEN55YVF6TP', '2016-04-10', NULL, '87', NULL, NULL, '3100 Vitae Street', NULL, NULL, 'Tiruvarur', 6675, NULL, 'Vivamus@ametornarelectus.com', '', 'Myanmar'),
(10, 'Kyla', 'Clarke', '2732949063182', 'CGQ36TRQ1MH', '2014-11-20', NULL, '35', NULL, NULL, 'Ap #978-5767 Quisque St.', NULL, NULL, 'Castelluccio Valmaggiore', 41228, NULL, 'magnis@vestibulum.net', 'pharmacist', 'Mexico'),
(11, 'Cameran', 'Garrett', '1845717997290', 'WCE53WDD0UP', '2016-08-16', NULL, '100', NULL, NULL, '4913 Ornare Road', NULL, NULL, 'Orta San Giulio', 98142, NULL, 'mattis@in.ca', 'doctor', 'Malta'),
(12, 'Michelle', 'Watson', '2160632390529', 'NYH89CCC2MA', '2014-12-13', NULL, '84', NULL, NULL, '928-4863 Vulputate, Ave', NULL, NULL, 'Campli', 4368, NULL, 'mauris@dolorsit.co.uk', 'doctor', 'Thailand'),
(13, 'Rae', 'Vance', '1272447990253', 'LID09GGU3XQ', '2015-01-11', NULL, '90', NULL, NULL, 'P.O. Box 137, 7701 Eu Road', NULL, NULL, 'Wekweti', 2264, NULL, 'eu@nectellusNunc.edu', 'pharmacist', 'Israel'),
(14, 'Elvis', 'Duran', '2507858774625', 'BEP35LYE7CO', '2014-12-06', NULL, '86', NULL, NULL, '578 Vel Rd.', NULL, NULL, 'Haren', 192960, NULL, 'nascetur.ridiculus@Crasvehiculaaliquet.org', 'doctor', 'Egypt'),
(15, 'Nathaniel', 'Hutchinson', '1008915689773', 'WIV09OKP1WX', '2016-02-12', NULL, '58', NULL, NULL, 'Ap #215-9327 Facilisis. Rd.', NULL, NULL, 'Tulsa', 27015, NULL, 'lobortis.ultrices.Vivamus@interdum.org', '', 'Israel'),
(16, 'Scarlett', 'Alvarado', '2798308043741', 'APF67BOK3BR', '2016-08-22', NULL, '80', NULL, NULL, '179-2377 Vitae, Rd.', NULL, NULL, 'Allein', 21429, NULL, 'lacus.Ut.nec@mauris.co.uk', 'officer', 'Botswana'),
(17, 'Odessa', 'Bullock', '1745009116828', 'HHF96CSB5SH', '2016-02-28', NULL, '39', NULL, NULL, 'P.O. Box 875, 4637 Nulla. Rd.', NULL, NULL, 'Martelange', 9221, NULL, 'felis.orci@Donec.org', 'doctor', 'Jordan'),
(18, 'Victoria', 'Jordan', '2809945344925', 'JLA24RMV9WY', '2015-01-22', NULL, '61', NULL, NULL, 'Ap #833-1579 Aliquam Street', NULL, NULL, 'Pepingen', 59224, NULL, 'luctus@nonhendreritid.net', 'pharmacist', 'Ethiopia'),
(19, 'Sonia', 'Walton', '2785189013929', 'WIR73ODV8KR', '2016-04-10', NULL, '75', NULL, NULL, 'Ap #129-4137 Et St.', NULL, NULL, 'Hudson''s Hope', 5317, NULL, 'Cras.pellentesque@habitant.org', 'officer', 'Antarctica'),
(20, 'Ria', 'Bush', '1495874525979', 'QUD71JCS3XS', '2016-05-24', NULL, '65', NULL, NULL, '561-4473 Sed Av.', NULL, NULL, 'Parchim	City', 1806, NULL, 'massa.Mauris.vestibulum@arcu.edu', 'pharmacist', 'Poland'),
(21, 'Finn', 'Edwards', '2203440329991', 'KYC01LVC5PK', '2015-03-07', NULL, '37', NULL, NULL, '950-1017 Mi St.', NULL, NULL, 'Columbus', 10525, NULL, 'venenatis.a@aliquamadipiscing.com', 'pharmacist', 'Suriname'),
(22, 'Ferdinand', 'Wallace', '2022375718690', 'WNT22DVS8AQ', '2014-11-22', NULL, '42', NULL, NULL, 'Ap #682-6472 Sed Road', NULL, NULL, 'Uberlândia', 65, NULL, 'sem@malesuada.org', 'pharmacist', 'Portugal'),
(23, 'Leroy', 'Webb', '1864394943230', 'IGU44UYN8LW', '2015-08-19', NULL, '21', NULL, NULL, '9947 Consectetuer St.', NULL, NULL, 'Leamington', 8222, NULL, 'tincidunt@acliberonec.net', 'pharmacist', 'Jamaica'),
(24, 'Linda', 'Riggs', '1967676945962', 'BIR90BIA5JL', '2015-05-25', NULL, '32', NULL, NULL, 'Ap #574-4361 Arcu Street', NULL, NULL, 'Tewkesbury', 79765, NULL, 'dis.parturient.montes@sitamet.net', '', 'Anguilla'),
(25, 'Yolanda', 'Franklin', '2270477477461', 'GWS96VVM2FF', '2016-02-05', NULL, '60', NULL, NULL, '1789 Velit Avenue', NULL, NULL, 'Castres', 73913, NULL, 'non.enim.Mauris@nec.ca', 'officer', 'Dominica'),
(26, 'Logan', 'Mendoza', '1541464027017', 'KAK11YHP6OW', '2016-02-29', NULL, '69', NULL, NULL, 'P.O. Box 472, 2502 Eget Street', NULL, NULL, 'Cañas', 584274, NULL, 'nec.quam@Phasellusnulla.edu', 'doctor', 'Saint Pierre and Miquelon'),
(27, 'Zahir', 'Mcintosh', '1233901412226', 'TLZ61ADS9WD', '2016-11-16', NULL, '32', NULL, NULL, 'P.O. Box 901, 8510 Egestas St.', NULL, NULL, 'Sydney', 9984, NULL, 'nascetur.ridiculus@Nullaeuneque.org', 'officer', 'Congo (Brazzaville)'),
(28, 'Yvonne', 'Holland', '2671732128598', 'UOF13YQC9CO', '2015-07-06', NULL, '48', NULL, NULL, 'Ap #948-6724 Elit. Rd.', NULL, NULL, 'Cork', 31839, NULL, 'sem@congue.org', '', 'Seychelles'),
(29, 'Hop', 'Talley', '2657159365714', 'ESK81FHQ0AM', '2016-08-31', NULL, '78', NULL, NULL, '568 Ut St.', NULL, NULL, 'North Saanich', 0, NULL, 'dignissim.tempor@tortordictum.co.uk', 'officer', 'Papua New Guinea'),
(30, 'Leslie', 'Battle', '1732518623583', 'VXI51VDS9PD', '2016-10-17', NULL, '38', NULL, NULL, '8573 Pede. Av.', NULL, NULL, 'Aparecida de Goiânia', 7201, NULL, 'non.lobortis.quis@blandit.net', 'officer', 'India'),
(31, 'Bruce', 'Middleton', '1107487804256', 'NQU46ZJC0BV', '2015-05-22', NULL, '84', NULL, NULL, 'Ap #214-7254 Iaculis Street', NULL, NULL, 'Vegreville', 76, NULL, 'consectetuer.adipiscing.elit@Nuncac.ca', 'doctor', 'Eritrea'),
(32, 'Nadine', 'Hunter', '1827560230158', 'IXO20ZXA6YF', '2016-07-13', NULL, '64', NULL, NULL, '8813 Eros Rd.', NULL, NULL, 'Herne', 90245, NULL, 'aliquet@mieleifendegestas.com', '', 'Fiji'),
(33, 'Austin', 'Harding', '1346798310987', 'SUA69PBA8PM', '2015-09-09', NULL, '50', NULL, NULL, '8814 Vulputate, Avenue', NULL, NULL, 'Dunoon', 162660, NULL, 'elementum@feugiat.net', 'officer', 'Afghanistan'),
(34, 'Kathleen', 'Weiss', '2103437058628', 'ILM93AWL5FL', '2016-11-04', NULL, '36', NULL, NULL, '6475 Nulla. Avenue', NULL, NULL, 'Oromocto', 50016, NULL, 'eu@semmollis.edu', 'pharmacist', 'Uruguay'),
(35, 'Grady', 'Kirby', '1304646338336', 'DCX58OPB3DM', '2016-10-13', NULL, '56', NULL, NULL, '235-6410 At, Rd.', NULL, NULL, 'Hengelo', 11517, NULL, 'metus.In@parturientmontesnascetur.ca', '', 'Saint Pierre and Miquelon'),
(36, 'Leo', 'Mullins', '1355875845067', 'BZH59VWE9HB', '2015-04-25', NULL, '76', NULL, NULL, '103-3088 Cras Road', NULL, NULL, 'Serramonacesca', 51349, NULL, 'nibh.dolor@arcu.co.uk', 'pharmacist', 'Angola'),
(37, 'Germane', 'Ayers', '2746766474098', 'CAF94FCU5RF', '2016-08-18', NULL, '80', NULL, NULL, 'Ap #294-8552 Sem, Rd.', NULL, NULL, 'Hamilton', 39431, NULL, 'eu.odio@neque.net', 'doctor', 'Barbados'),
(38, 'Phyllis', 'Torres', '1646834784187', 'NVZ85FGG7GW', '2016-05-15', NULL, '54', NULL, NULL, 'P.O. Box 815, 2629 Fringilla Av.', NULL, NULL, 'Hove', 11708, NULL, 'mi.eleifend.egestas@sagittis.co.uk', 'doctor', 'Cape Verde'),
(39, 'Tanya', 'Tyson', '2384471327067', 'PQL21XVX8ZU', '2014-11-28', NULL, '79', NULL, NULL, 'P.O. Box 202, 8402 Quis St.', NULL, NULL, 'Norwich', 57, NULL, 'neque.non.quam@consectetuer.co.uk', 'officer', 'Virgin Islands, British'),
(40, 'Patience', 'Wooten', '1155496123246', 'IXQ20RLT5ZD', '2014-11-28', NULL, '59', NULL, NULL, '820-9682 Pede Rd.', NULL, NULL, 'Seloignes', 56, NULL, 'enim@atauctor.co.uk', 'pharmacist', 'Mauritius'),
(41, 'Lewis', 'Joseph', '1126730346120', 'WUW31FJR4ZO', '2015-02-06', NULL, '42', NULL, NULL, 'Ap #155-915 Sollicitudin Rd.', NULL, NULL, 'Marbaix', 23606, NULL, 'fermentum.metus@elitelit.net', 'doctor', 'United Kingdom (Great Britain)'),
(42, 'Rama', 'Lopez', '2157914757729', 'AZQ95ZNH3YV', '2016-07-01', NULL, '25', NULL, NULL, 'P.O. Box 477, 7756 Consectetuer Ave', NULL, NULL, 'Baltimore', 60918, NULL, 'Nunc.mauris@lacinia.co.uk', 'doctor', 'Netherlands'),
(43, 'Portia', 'Pierce', '1354822155088', 'CFP94ZYN2ZV', '2015-08-27', NULL, '83', NULL, NULL, '283-2342 Phasellus St.', NULL, NULL, 'Liverpool', 586303, NULL, 'Phasellus@aclibero.edu', 'pharmacist', 'Uruguay'),
(44, 'Petra', 'Gilbert', '1564318058081', 'JQU56EHE0HX', '2016-01-13', NULL, '93', NULL, NULL, 'Ap #572-7158 Vulputate Rd.', NULL, NULL, 'New Sarepta', 69618, NULL, 'tempor@Curabitursed.edu', '', 'Yemen'),
(45, 'Amena', 'Barron', '2746854388155', 'RVP17QON8WT', '2015-05-20', NULL, '73', NULL, NULL, 'P.O. Box 183, 3380 Ipsum Street', NULL, NULL, 'Shahjahanpur', 20662, NULL, 'metus@aliquetmetusurna.co.uk', 'doctor', 'British Indian Ocean Territory'),
(46, 'Quincy', 'Mckay', '2853951067664', 'XVZ02UNX8HT', '2016-11-06', NULL, '96', NULL, NULL, '2992 Iaculis Rd.', NULL, NULL, 'Coaldale', 370976, NULL, 'habitant.morbi@iaculisquis.org', 'officer', 'Niger'),
(47, 'Kibo', 'Cardenas', '2003479501233', 'KRT02UTU3AV', '2016-05-25', NULL, '20', NULL, NULL, '6369 Nisi. Ave', NULL, NULL, 'Merseburg', 25999, NULL, 'lobortis.nisi.nibh@lobortisquam.edu', 'doctor', 'Singapore'),
(48, 'Charissa', 'Wolf', '2527111457661', 'JXX13ZXF1NH', '2016-08-02', NULL, '35', NULL, NULL, 'P.O. Box 475, 5987 Sed Ave', NULL, NULL, 'Rouvroy', 0, NULL, 'lorem@eget.edu', 'officer', 'Colombia'),
(49, 'Madison', 'Bradley', '2232522374950', 'EXM27GSR6RE', '2016-10-27', NULL, '53', NULL, NULL, '7941 Eget, Rd.', NULL, NULL, 'Segovia', 86, NULL, 'Mauris.non.dui@Proin.net', 'officer', 'Belize'),
(50, 'Brittany', 'Houston', '2720482246951', 'VSH23CFA0UA', '2014-12-29', NULL, '88', NULL, NULL, '415-8210 Magna, Av.', NULL, NULL, 'Woodlands County', 585376, NULL, 'et@arcuAliquam.com', 'doctor', 'Mayotte'),
(51, 'Len', 'Hicks', '2262665959075', 'BRI39TWV0HQ', '2015-05-27', NULL, '86', NULL, NULL, '485-9757 Ornare Rd.', NULL, NULL, 'Neerrepen', 0, NULL, 'a.mi.fringilla@arcuet.edu', '', 'Faroe Islands'),
(52, 'Illiana', 'Kelly', '2514015977271', 'RYA05BEH6ZY', '2015-04-09', NULL, '94', NULL, NULL, 'Ap #757-1865 A St.', NULL, NULL, 'Itanagar', 0, NULL, 'vulputate.dui@magnaa.net', 'pharmacist', 'Tanzania'),
(53, 'Hasad', 'Carroll', '2042320905253', 'PGM98TEU9XM', '2015-05-16', NULL, '73', NULL, NULL, 'P.O. Box 400, 8105 Nullam Street', NULL, NULL, 'Albi', 64927, NULL, 'luctus.vulputate@at.ca', 'officer', 'Vanuatu'),
(54, 'Cleo', 'Mejia', '2039092659019', 'OEO54FFQ2PA', '2015-04-20', NULL, '72', NULL, NULL, '898 Mauris Rd.', NULL, NULL, 'Jasper', 10127, NULL, 'Proin@egestas.co.uk', 'doctor', 'French Polynesia'),
(55, 'Hermione', 'Golden', '2103739905171', 'LOK14NLM1YU', '2016-02-28', NULL, '22', NULL, NULL, 'Ap #296-5397 Erat Av.', NULL, NULL, 'Rockville', 24695, NULL, 'neque.venenatis.lacus@eleifendnon.net', 'pharmacist', 'United States Minor Outlying Islands'),
(56, 'Hamish', 'Flynn', '1436091510579', 'SNL67JAJ3KS', '2015-01-03', NULL, '73', NULL, NULL, 'Ap #616-5448 Varius St.', NULL, NULL, 'Karapınar', 29675, NULL, 'dui@odioauctor.ca', 'pharmacist', 'French Guiana'),
(57, 'Zoe', 'Alvarado', '1572271487675', 'LSQ84XER2QI', '2014-12-23', NULL, '33', NULL, NULL, '544-7457 Nulla. St.', NULL, NULL, 'Paignton', 0, NULL, 'et.malesuada@temporest.ca', 'officer', 'Samoa'),
(58, 'Jane', 'Humphrey', '1079290992580', 'SGA13TMH6LP', '2016-04-15', NULL, '86', NULL, NULL, '4175 Bibendum. Av.', NULL, NULL, 'Sousa', 756687, NULL, 'aliquet@rutrumjustoPraesent.com', 'pharmacist', 'Tanzania'),
(59, 'Lynn', 'Walter', '1111255229450', 'ADM52UNC4NI', '2016-08-09', NULL, '48', NULL, NULL, '2595 At, Avenue', NULL, NULL, 'Chepstow', 0, NULL, 'pede.Cras@ornareIn.com', 'officer', 'Tonga'),
(60, 'Adele', 'Blanchard', '1623280314728', 'PRA17JIU3BU', '2015-08-23', NULL, '51', NULL, NULL, '7672 Lobortis St.', NULL, NULL, 'Langley', 26343, NULL, 'luctus.sit.amet@semperrutrum.net', 'doctor', 'Jordan'),
(61, 'Timothy', 'Knox', '2147143212147', 'VXE84DLU7MU', '2016-04-23', NULL, '63', NULL, NULL, 'P.O. Box 642, 501 Cum Av.', NULL, NULL, 'Ch�telet', 6904, NULL, 'quis.tristique@Integer.org', 'officer', 'Maldives'),
(62, 'Portia', 'Atkinson', '1311773704365', 'MFS80LLZ6QT', '2016-01-16', NULL, '45', NULL, NULL, '1446 Turpis Rd.', NULL, NULL, 'Pietracatella', 8967, NULL, 'elit@Duisvolutpatnunc.net', '', 'Turkey'),
(63, 'Leila', 'Black', '2213099724613', 'RAS30YRY2MJ', '2015-03-28', NULL, '74', NULL, NULL, '222-3696 Dignissim St.', NULL, NULL, 'Vadodara', 4455, NULL, 'lacinia@acturpis.ca', 'officer', 'Burkina Faso'),
(64, 'Thor', 'Ayers', '2198462261818', 'YBU16YHK0JH', '2016-07-13', NULL, '75', NULL, NULL, '7780 Orci Road', NULL, NULL, 'Scarborough', 68734, NULL, 'euismod@volutpat.com', 'doctor', 'Tanzania'),
(65, 'Wang', 'Day', '1966152941808', 'URK31KSA4IT', '2015-06-22', NULL, '84', NULL, NULL, '449-3050 Pellentesque St.', NULL, NULL, 'Butzbach', 2881, NULL, 'sem@metusIn.co.uk', 'pharmacist', 'Saint Helena, Ascension and Tristan da Cunha'),
(66, 'Bethany', 'Acevedo', '2410007631406', 'WAI06OLA9CL', '2016-06-03', NULL, '53', NULL, NULL, 'P.O. Box 996, 314 Fringilla. St.', NULL, NULL, 'Kearny', 30734, NULL, 'Duis@sempertellusid.com', 'pharmacist', 'Cape Verde'),
(67, 'Hanae', 'England', '1259490631520', 'WMU53JUZ3BC', '2015-10-18', NULL, '38', NULL, NULL, 'P.O. Box 309, 2466 Ridiculus Road', NULL, NULL, 'Cabano', 31814, NULL, 'Donec.at.arcu@Donecdignissim.org', '', 'Slovenia'),
(68, 'Abraham', 'Martin', '1485995553434', 'INB65NFS4UP', '2016-04-01', NULL, '31', NULL, NULL, '603-6011 Sem. Av.', NULL, NULL, 'Seborga', 65068, NULL, 'est@sollicitudin.co.uk', 'officer', 'Singapore'),
(69, 'Quamar', 'Mcbride', '1656330801546', 'PXN43DWR5ZT', '2016-10-23', NULL, '86', NULL, NULL, '528-8714 Litora Street', NULL, NULL, 'Modena', 96967, NULL, 'sit@nulla.com', 'pharmacist', 'Singapore'),
(70, 'Alexandra', 'Suarez', '1776857899502', 'EXK70GHB7DE', '2015-04-27', NULL, '54', NULL, NULL, 'P.O. Box 947, 1562 Leo. Rd.', NULL, NULL, 'Cardiff', 54077, NULL, 'purus.Nullam.scelerisque@vehiculaaliquet.edu', 'pharmacist', 'Palestine, State of'),
(71, 'Francis', 'Navarro', '2323028057814', 'BRN41XFY7VR', '2015-12-09', NULL, '49', NULL, NULL, '339-7902 Iaculis St.', NULL, NULL, 'Liernu', 68146, NULL, 'Nulla.facilisi.Sed@velvulputateeu.org', 'officer', 'Falkland Islands'),
(72, 'Tallulah', 'Moses', '1689483227208', 'WJU07VDZ7XP', '2016-11-10', NULL, '39', NULL, NULL, 'Ap #808-911 Lobortis Road', NULL, NULL, 'Osnabr�ck', 31369, NULL, 'cubilia@placerat.org', 'officer', 'Sao Tome and Principe'),
(73, 'Aquila', 'Waters', '2669233324938', 'WAL94NNU2CL', '2014-12-15', NULL, '86', NULL, NULL, '471-8097 Ullamcorper, Av.', NULL, NULL, 'Antalya', 849425, NULL, 'gravida.molestie@Duis.com', 'doctor', 'Austria'),
(74, 'Philip', 'Price', '2181295982562', 'LCD90TCD8UN', '2016-01-06', NULL, '39', NULL, NULL, 'P.O. Box 725, 6999 Ac, Avenue', NULL, NULL, 'Phoenix', 34, NULL, 'egestas.Fusce@mattisvelitjusto.ca', 'pharmacist', 'Heard Island and Mcdonald Islands'),
(75, 'Andrew', 'Wells', '1476551773958', 'BGY99QRK7RN', '2015-07-09', NULL, '24', NULL, NULL, 'P.O. Box 589, 9356 Tellus. St.', NULL, NULL, 'St. Clears', 20485, NULL, 'metus.facilisis.lorem@eleifendCras.com', 'doctor', 'Bosnia and Herzegovina'),
(76, 'Wylie', 'Abbott', '2430124587380', 'TLG08UCR6FL', '2015-01-10', NULL, '60', NULL, NULL, '8586 Facilisis Ave', NULL, NULL, 'Robelmont', 9845, NULL, 'tellus.id@ligulaelit.net', '', 'Saint Lucia'),
(77, 'Cassandra', 'Harrell', '1955829263665', 'ZTL62IYJ4OU', '2016-11-14', NULL, '60', NULL, NULL, 'Ap #986-5173 Quisque Road', NULL, NULL, 'Hattersheim am Main', 44602, NULL, 'sem.Nulla@Donecvitaeerat.co.uk', 'doctor', 'Mayotte'),
(78, 'Ori', 'Barnett', '1325302570127', 'UDG54TEW3IC', '2016-08-11', NULL, '71', NULL, NULL, '9802 Vestibulum. Avenue', NULL, NULL, 'Wals-Siezenheim', 15982, NULL, 'augue@Lorem.org', '', 'Palau'),
(79, 'Lacota', 'Mcgowan', '1244851671159', 'CIN14IAO6ZI', '2016-08-16', NULL, '61', NULL, NULL, 'Ap #632-860 Metus St.', NULL, NULL, 'Emblem', 5930, NULL, 'tempus.lorem@temporaugue.net', 'doctor', 'Belize'),
(80, 'Ruby', 'Dickson', '1596218965947', 'CHL15BME9WV', '2015-09-25', NULL, '72', NULL, NULL, '704-7167 Metus. Ave', NULL, NULL, 'Gembloux', 7613, NULL, 'sagittis.Nullam.vitae@lobortis.ca', '', 'Kazakhstan'),
(81, 'Phoebe', 'Shannon', '1207499312237', 'DKL06AMA2GA', '2014-12-17', NULL, '63', NULL, NULL, '201-9896 Donec Rd.', NULL, NULL, 'Aguacaliente (San Francisco)', 8392, NULL, 'ut.mi.Duis@elementumategestas.edu', '', 'New Caledonia'),
(82, 'Dai', 'Meyer', '2293135488406', 'OPJ81ZVL6FB', '2016-08-22', NULL, '25', NULL, NULL, 'P.O. Box 105, 1092 Lorem, Street', NULL, NULL, 'Wageningen', 7636, NULL, 'vulputate@acmetusvitae.ca', '', 'Côte D''Ivoire (Ivory Coast)'),
(83, 'Brian', 'Mckenzie', '2868148107082', 'KAL46JMQ7HO', '2015-11-30', NULL, '31', NULL, NULL, '8541 Curabitur St.', NULL, NULL, 'Rezé', 5453, NULL, 'tellus.sem@Pellentesquehabitantmorbi.com', 'pharmacist', 'Greenland'),
(84, 'Gwendolyn', 'Cabrera', '1453268928453', 'KBZ28IPJ8BA', '2016-04-03', NULL, '100', NULL, NULL, '5674 Consequat Avenue', NULL, NULL, 'Papasidero', 30259, NULL, 'Phasellus.at.augue@turpis.edu', 'officer', 'United States Minor Outlying Islands'),
(85, 'Colleen', 'Cross', '1328466249630', 'TOW63HKK7IQ', '2015-02-21', NULL, '69', NULL, NULL, 'Ap #727-4773 Massa Avenue', NULL, NULL, 'San Isidro de El General', 89919, NULL, 'adipiscing.Mauris.molestie@nisimagnased.com', 'pharmacist', 'France'),
(86, 'Dieter', 'Burch', '2363655706868', 'BBZ76YBZ8XH', '2016-06-06', NULL, '54', NULL, NULL, '3029 At, Avenue', NULL, NULL, 'Kanchipuram', 37, NULL, 'ac.facilisis.facilisis@euaugue.edu', 'pharmacist', 'Montenegro'),
(87, 'Uta', 'Montgomery', '2379927957431', 'BKK90VPO7OZ', '2016-06-30', NULL, '24', NULL, NULL, '2833 Eu Ave', NULL, NULL, 'Obaix', 5019, NULL, 'dignissim@a.com', 'doctor', 'Turkey'),
(88, 'Harding', 'Reed', '1335716128349', 'BFD99BGE8ZD', '2015-05-09', NULL, '55', NULL, NULL, 'Ap #664-5338 Id Ave', NULL, NULL, 'Peine', 32224, NULL, 'tincidunt.vehicula.risus@sit.com', 'officer', 'United Arab Emirates'),
(89, 'Uriah', 'Goodwin', '2376219269820', 'LMO89YHC8LA', '2016-02-06', NULL, '66', NULL, NULL, '1406 Dui. Rd.', NULL, NULL, 'Ramagundam', 79, NULL, 'sed@egestas.org', 'officer', 'Saint Martin'),
(90, 'Ignatius', 'Madden', '1239243989810', 'LPK31VMO7OT', '2015-12-04', NULL, '92', NULL, NULL, '622 Ante. Av.', NULL, NULL, 'Dongelberg', 24659, NULL, 'diam.Sed.diam@facilisismagnatellus.edu', 'officer', 'Marshall Islands'),
(91, 'Desirae', 'Bray', '2987616108731', 'XJA37RVQ2AY', '2016-08-22', NULL, '83', NULL, NULL, 'Ap #409-693 Ultrices Av.', NULL, NULL, 'Kerkhove', 38314, NULL, 'Cras.vehicula@sodalesMauris.net', 'officer', 'Heard Island and Mcdonald Islands'),
(92, 'Grant', 'Calhoun', '2232548569329', 'JWB22ARL1TB', '2016-10-06', NULL, '26', NULL, NULL, '986-3597 Euismod Street', NULL, NULL, 'Chester', 88317, NULL, 'nonummy@varius.com', 'doctor', 'Jordan'),
(93, 'Jonah', 'Summers', '1177692417055', 'URN14VVT5QU', '2016-06-11', NULL, '100', NULL, NULL, 'Ap #893-5424 Mus. Avenue', NULL, NULL, 'Ambala', 99105, NULL, 'amet@eratvitae.ca', 'pharmacist', 'Mexico'),
(94, 'Chancellor', 'Johnson', '2337797544897', 'DAH19PHE4RJ', '2014-12-15', NULL, '50', NULL, NULL, 'Ap #571-4545 Ipsum St.', NULL, NULL, 'Chelsea', 2871, NULL, 'malesuada.augue.ut@anteblandit.ca', 'pharmacist', 'Swaziland'),
(95, 'Rebecca', 'Shepard', '1300898508168', 'QLU32GJA1JE', '2015-05-12', NULL, '48', NULL, NULL, '8711 Ante. St.', NULL, NULL, 'Schellebelle', 5374, NULL, 'Quisque.fringilla.euismod@ipsum.net', 'doctor', 'Norway'),
(96, 'Eliana', 'Sanchez', '2319906809367', 'JWZ17RXS0IY', '2016-09-01', NULL, '75', NULL, NULL, '475-4555 Phasellus Ave', NULL, NULL, 'Frankfort', 463559, NULL, 'massa.Suspendisse@aptent.co.uk', 'pharmacist', 'Honduras'),
(97, 'George', 'Frazier', '1276450506411', 'VJO78NDR9SZ', '2015-08-29', NULL, '65', NULL, NULL, '3067 A, Ave', NULL, NULL, 'R�sselsheim', 57949, NULL, 'lacus.Nulla@felisadipiscing.co.uk', 'pharmacist', 'Curaçao'),
(98, 'Colton', 'Ramirez', '1278548744507', 'EJA27DJK8UI', '2015-05-25', NULL, '34', NULL, NULL, 'P.O. Box 413, 1248 Feugiat. St.', NULL, NULL, 'Fréjus', 193719, NULL, 'blandit.enim.consequat@auctornuncnulla.org', 'pharmacist', 'Swaziland'),
(99, 'Alice', 'Holloway', '1268885234370', 'BCM62ATH3JY', '2015-03-10', NULL, '49', NULL, NULL, 'Ap #466-2186 Duis Av.', NULL, NULL, 'Rattray', 704, NULL, 'elit.pretium@consequat.ca', 'officer', 'Spain'),
(100, 'Fletcher', 'Little', '1901086097583', 'DUK73CJH4FL', '2014-12-17', NULL, '72', NULL, NULL, '273-7826 Dui. Avenue', NULL, NULL, 'Piegaro', 93045, NULL, 'risus.Duis@nonmagnaNam.org', 'doctor', 'Congo, the Democratic Republic of the'),
(101, 'Desiree', 'Carrillo', '2129368545488', 'XNU99RHC0BI', '2016-05-01', NULL, '99', NULL, NULL, 'P.O. Box 452, 1058 Nunc St.', NULL, NULL, 'Çarşamba', 37676, NULL, 'Sed.congue.elit@necleo.com', 'doctor', 'Guinea-Bissau'),
(102, 'Omar', 'Kerr', '1646514425054', 'TCY76YFT5VQ', '2016-06-28', NULL, '22', NULL, NULL, 'P.O. Box 253, 6786 Ornare Street', NULL, NULL, 'Galzignano Terme', 1738, NULL, 'Fusce.mi@bibendum.edu', 'pharmacist', 'Cuba'),
(103, 'Ciara', 'Pennington', '2626682396047', 'SWC55KHV9AU', '2015-02-08', NULL, '21', NULL, NULL, 'Ap #402-3567 Dui Rd.', NULL, NULL, 'Latinne', 10, NULL, 'luctus.vulputate@natoque.com', 'officer', 'Bahamas'),
(104, 'Evangeline', 'Faulkner', '2030586995184', 'SSG80MRA8DX', '2015-10-27', NULL, '88', NULL, NULL, 'Ap #826-2973 Pharetra Rd.', NULL, NULL, 'Huntsville', 0, NULL, 'et@nislelementumpurus.org', 'doctor', 'United Arab Emirates');

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
  ADD UNIQUE KEY `national_id` (`national_id`),
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
  MODIFY `default_shift_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `drug_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `druglist`
--
ALTER TABLE `druglist`
  MODIFY `druglist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `hospital_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
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
  MODIFY `staff_hospital_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
