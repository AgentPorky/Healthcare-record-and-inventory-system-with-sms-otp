-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `patient_id` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminpatient_record`
--

INSERT INTO `adminpatient_record` (`patient_id`, `patient_name`, `age`, `gender`, `birthdate`, `address`) VALUES
('20-2222', 'MEMANGS', 12, 'MALE', '2024-10-16', 'BALINTAWAK, MAMBAJAO, CAMIGUIN');

-- --------------------------------------------------------

--
-- Table structure for table `admin_healthcare_unit`
--

CREATE TABLE `admin_healthcare_unit` (
  `healthcare_id` varchar(100) NOT NULL,
  `healthcarestaff_name` varchar(100) NOT NULL,
  `position_of_staff` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_healthcare_unit`
--

INSERT INTO `admin_healthcare_unit` (`healthcare_id`, `healthcarestaff_name`, `position_of_staff`, `address`) VALUES
('1 ', 'BHW_GUILLER', 'BHW', 'BONBON, CAT , CAM '),
('2 ', 'BHW_IAN MIGUEL', 'BHW', 'BALINTAWAK, MAMBAJAO, CAMIGUIN ');

-- --------------------------------------------------------

--
-- Table structure for table `admin_medicine_inventory`
--

CREATE TABLE `admin_medicine_inventory` (
  `medicine_id` int(100) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `medicine_quantity` int(100) NOT NULL,
  `date_manufactured` date NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_medicine_inventory`
--

INSERT INTO `admin_medicine_inventory` (`medicine_id`, `medicine_name`, `medicine_quantity`, `date_manufactured`, `expiration_date`) VALUES
(1, 'BIOGESIC', 1000, '2024-10-15', '2024-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`admin_username`, `admin_password`, `admin_name`) VALUES
('GUILLERJAMES', 'bdaa0cdd1ac7ab433375b6ac433d4a28', 'ADMIN_GUILLER');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
