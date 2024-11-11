-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 06:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ths_healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpatient_record`
--

CREATE TABLE `adminpatient_record` (
  `patient_id` varchar(50) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='DATABASEOF PATIENT''S RECORD';

--
-- Dumping data for table `adminpatient_record`
--

INSERT INTO `adminpatient_record` (`patient_id`, `patient_name`, `age`, `gender`, `birthdate`, `address`) VALUES
('20-2002', 'IAN MIGUEL APOLINAR', '100', 'MALE', '2024-11-05', 'BALINTAWAK');

-- --------------------------------------------------------

--
-- Table structure for table `admin_healthcare_unit`
--

CREATE TABLE `admin_healthcare_unit` (
  `healthcare_id` varchar(50) NOT NULL,
  `healthcarestaff_name` varchar(50) NOT NULL,
  `position_of_staff` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='ADMIN''S POSITION IN HEALTHCARE';

--
-- Dumping data for table `admin_healthcare_unit`
--

INSERT INTO `admin_healthcare_unit` (`healthcare_id`, `healthcarestaff_name`, `position_of_staff`, `address`) VALUES
('22-2222 ', 'GUILLER JAMES C MANTALA', 'BHW', 'BONBON '),
('22-3333 ', 'JESSHRON TOYHORADA', 'BHW', 'BALINTAWAK '),
('22-2222 ', 'GUILLER JAMES C MANTALA', 'BHW', 'BALINTAWAK ');

-- --------------------------------------------------------

--
-- Table structure for table `admin_medicine_inventory`
--

CREATE TABLE `admin_medicine_inventory` (
  `medicine_id` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_quantity` varchar(50) NOT NULL,
  `date_manufactured` varchar(50) NOT NULL,
  `expiration_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='DATABASE OF MEDICINE''S AVAILABILITY';

--
-- Dumping data for table `admin_medicine_inventory`
--

INSERT INTO `admin_medicine_inventory` (`medicine_id`, `medicine_name`, `medicine_quantity`, `date_manufactured`, `expiration_date`) VALUES
('1', 'PARACETAMOL', '0', '2024-11-04', '2024-11-05'),
('2', 'BIOGESIC', '50', '2024-11-05', '2024-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `admin_id` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='ADMIN''S REGISTERED USER';

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`admin_id`, `admin_username`, `admin_password`, `admin_name`) VALUES
('', 'ADMINGUILLER', 'c2ea28cb352204b55c5126f572a6d338', 'GUILLER JAMES C MANTALA');

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `consultation_id` varchar(50) NOT NULL,
  `healthcare_id` varchar(50) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `medicine_id` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `time_` varchar(50) NOT NULL,
  `date_` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`consultation_id`, `healthcare_id`, `patient_id`, `patient_name`, `medicine_id`, `medicine_name`, `quantity`, `time_`, `date_`) VALUES
('1', '22-2222', '20-2002', 'IAN MIGUEL APOLINAR', '1', 'PARACETAMOL', 50, '22:12', '2024-11-04'),
('1', '22-2222', '20-2002', 'IAN MIGUEL APOLINAR', '1', 'BIOGESIC', 50, '14:17', '2024-11-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
