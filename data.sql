-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 12:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('mcc321', 'mcc@321');

-- --------------------------------------------------------

--


-- --------------------------------------------------------


-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `first` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `last` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `first`, `last`, `username`, `password`) VALUES
('deepali321@gmail.com', 'deepali', 'gadiyar', 'deepali123', 'ddd'),
('sindhuss214@gmail.com', 'sindhu s', 'shastry', 'sindhuss214', 'sss'),
('sindhuss@gmail.com', 'sindhu', 'shastry', 'sindhuss', 'ss21'),
('vnsubrahmanian@gmail.com', 'V n', 'Subrahmanian', 'vnsubbu', 'vnsubbu');

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `NAME` varchar(100) NOT NULL,
  `BuildingNumber` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Area` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------


-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `fullName` varchar(100) NOT NULL,
  `phoneNumber` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wardNumber` varchar(10) NOT NULL,
  `buildingNumber` varchar(10) NOT NULL,
  `streetName` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `pinCode` int(6) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`fullName`, `phoneNumber`, `email`, `wardNumber`, `buildingNumber`, `streetName`, `area`, `pinCode`) VALUES
('deepali gadiyar', 918197792115, 'deepali321@gmail.com', '14', '217', 'dd road', 'gokulam', 570012),
('sindhu', 918197792115, 'sindhuss214@gmail.com', '14', '217', '#217 devi krupa ,8th Cross Vishweshwaraiah main road, vijayshreepura', 'jayanagar', 570006),
('v n subrahmanian', 918197792115, 'vnsubrahmanian@gmail.com', '14', '107', '#217 devi krupa ,8th Cross Vishweshwaraiah main road', 'jayanagar', 570006);

--
-- Table structure for table `keyboard`
--

CREATE TABLE `keyboard` (
  `email` varchar(100) NOT NULL,
  `k_type` varchar(100) NOT NULL,
  `k_companyname` varchar(100) NOT NULL,
  `k_brand` varchar(50) NOT NULL,
  `k_switch` varchar(10) NOT NULL,
  `k_port` varchar(10) NOT NULL,
  `k_work` varchar(10) NOT NULL,
  `k_specs` varchar(200) NOT NULL,
  PRIMARY KEY (`email`, `k_companyname`),
  CONSTRAINT `p_foreign` FOREIGN KEY (`email`) REFERENCES `personal_details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `email` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `screen_size` int(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `batterypower` int(50) NOT NULL,
  `ram` int(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `operating_system` varchar(50) NOT NULL,
  `os_version` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `specs` varchar(200) NOT NULL,
  PRIMARY KEY (`email`, `company_name`),
  CONSTRAINT `personal_foreign` FOREIGN KEY (`email`) REFERENCES `personal_details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`email`, `company_name`, `model_name`, `screen_size`, `cpu`, `batterypower`, `ram`, `storage`, `operating_system`, `os_version`, `work`, `specs`) VALUES
('sindhuss214@gmail.com', 'Acer', 'aspire 7', 15, 'intel core i5', 9000, 6, '512 gb sdd', 'Windows', '10', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `user_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_type` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user_name`, `email`, `id_type`, `id_number`, `app_date`, `app_time`) VALUES
('deepali gadiyar', 'deepali321@gmail.com', 'aadhar', '2748738595737', '2022-02-10', '10:30:00'),
('sindhu s shastry', 'sindhuss214@gmail.com', 'dl', 'ka09-4y735y38', '2022-02-03', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `email` varchar(100) NOT NULL,
  `m_companyname` varchar(100) NOT NULL,
  `m_modelname` varchar(100) NOT NULL,
  `m_screensize` int(50) NOT NULL,
  `m_batterypower` int(50) NOT NULL,
  `m_sim` varchar(10) NOT NULL,
  `m_port` varchar(50) NOT NULL,
  `m_pcamera` int(100) NOT NULL,
  `m_fcamera` int(100) NOT NULL,
  `m_ram` int(10) NOT NULL,
  `m_work` varchar(10) NOT NULL,
  `m_specs` varchar(200) NOT NULL,
  PRIMARY KEY (`email`, `m_companyname`),
  CONSTRAINT `mobile_foreign` FOREIGN KEY (`email`) REFERENCES `personal_details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `email` varchar(100) NOT NULL,
  `o_proname` varchar(100) NOT NULL,
  `o_company` varchar(100) NOT NULL,
  `o_work` varchar(10) NOT NULL,
  `o_specs` varchar(200) NOT NULL,
  PRIMARY KEY (`email`, `o_proname`),
  CONSTRAINT `o_foreign` FOREIGN KEY (`email`) REFERENCES `personal_details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `email` varchar(100) NOT NULL,
  `p_companyname` varchar(100) NOT NULL,
  `p_speed` int(50) NOT NULL,
  `p_hd` int(100) NOT NULL,
  `p_screensize` int(50) NOT NULL,
  `p_ram` int(10) NOT NULL,
  `p_work` varchar(10) NOT NULL,
  `p_specs` varchar(200) NOT NULL,
  PRIMARY KEY (`email`, `p_companyname`),
  CONSTRAINT `pc_foreign` FOREIGN KEY (`email`) REFERENCES `personal_details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`email`, `p_companyname`, `p_speed`, `p_hd`, `p_screensize`, `p_ram`, `p_work`, `p_specs`) VALUES
('deepali321@gmail.com', 'Sony', 35, 720, 15, 4, 'no', '');

-- --------------------------------------------------------

--

-- --------------------------------------------------------

-- Table structure for table `camera`
--

-- --------------------------------------------------------
-- Table structure for table `camera`
-- --------------------------------------------------------

CREATE TABLE `camera` (
  `email` varchar(100) NOT NULL,
  `c_companyname` varchar(100) NOT NULL,
  `c_modelname` varchar(100) NOT NULL,
  `c_storage` int(10) NOT NULL,
  `c_batterypower` int(50) NOT NULL,
  `c_maxres` int(50) NOT NULL,
  `c_lowres` int(10) NOT NULL,
  `c_zoom` int(10) NOT NULL,
  `c_dim` varchar(100) NOT NULL,
  `c_work` char(10) NOT NULL,
  `c_specs` varchar(200) NOT NULL,
  PRIMARY KEY (`email`, `c_companyname`),
  CONSTRAINT `c_foreign` FOREIGN KEY (`email`) REFERENCES `personal_details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
