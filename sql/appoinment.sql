-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 01, 2022 at 11:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appoinment`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(22) NOT NULL AUTO_INCREMENT,
  `dname` varchar(22) NOT NULL,
  `userid` int(22) NOT NULL,
  `dcontact` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `fee` varchar(22) NOT NULL,
  `pname` varchar(22) NOT NULL,
  `pcontact` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dates` date NOT NULL,
  `timing` varchar(22) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `dname`, `userid`, `dcontact`, `expertise`, `fee`, `pname`, `pcontact`, `email`, `address`, `dates`, `timing`) VALUES
(1, 'Dr. Yogesh Batliwala', 1001, '01734761999', 'Cardiologist', '500', 'Kanchan Sanjay Joshi', '9999999999', 'kanchan@xyz.com', 'Indapur', '2022-02-11', '11.00am'),
(6, 'Dr. Soni Jhunjhunwala', 1016, '1234567890', 'Neurologist', '1500', 'Kanchan Sanjay Joshi', '', 'kanchan@xyz.com', 'Pune', '2022-05-01', '2:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `cat` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`) VALUES
(3, 'Orthopedic'),
(5, 'Cardiologist'),
(6, 'Plastic Surgeon'),
(7, 'General Physician'),
(8, 'Neurologist');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `comment` varchar(111) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `email`, `comment`) VALUES
(3, 'Kanchan', 'Joshi', 'kanchan@xyz.com', 'Very nice');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` int(22) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `email` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `id` int(11) NOT NULL,
  `fee` varchar(111) NOT NULL,
  `userid` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `pic` varchar(111) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doctor_id`, `name`, `address`, `contact`, `email`, `expertise`, `id`, `fee`, `userid`, `password`, `pic`) VALUES
(1, '2', 'Dr. Yogesh Batliwala', 'Indapur', '01734761999', 'yogesh@gmail.com', 'Cardiologist', 2, '500', '1001', '123', 'doctor1.jpg'),
(2, '1', 'Dr. Smith Jones', 'Dinajpur', '01764761919', 'smith@gmail.com', 'Cardiologist', 1, '500', '1002', '123', 'd9.jpg'),
(3, '1', 'Dr. Rajesh Jinde', 'Jamnagar', '01521670654', 'rajesh@gmail.com', 'Neurologist', 1, '600', '1003', '123', 'd7.jpg'),
(4, '4', 'Dr. Shankar Seth', 'Pune', '01949389983', 'shankar@gmail.com', 'Cardiologist', 4, '700', '1004', '123', 'd10.jpg'),
(5, '5', 'Dr. Nur Patel', 'Jamnagar', '01674546856', 'nur@gmail.com', 'Cardiologist', 5, '700', '1005', '123', 'itsme.jpg'),
(6, '1', 'Dr. Sandeep Sharma', 'Indapur', '01734761999', 'sandeep@gmail.com', 'General Physician', 1, '800', '1006', '123', 'd11.jpg'),
(7, '8', 'Dr. Rajnath Kumar', 'Dinajpur', '01674546563', 'rajnath@gmail.com', 'Neurologist', 8, '600', '1007', '123', 'd12.jpg'),
(8, '', 'Dr. Satish Godbole', 'Pune', '01521470368', 'satish@gmail.com', 'General Physician', 0, '800', '1008', '123', 'd8.jpg'),
(9, '9', 'Dr. Priya Khande', 'Pune', '1234567890', 'priya@gmail.com', 'Plastic Surgeon', 9, '1000', '1009', '123', 'd16.jpg'),
(10, '10', 'Dr. Shriya Sathe', 'Jamnagar', '1234567890', 'shriya@gmail.com', 'General Physician', 10, '900', '1010', '123', 'd17.jpg'),
(21, '11', 'Dr. Sandhu Shrivastav', 'Indapur', '1234567890', 'sandhu@gmail.com', 'Orthopedic', 11, '1000', '1011', '123', 'doctor5.jpg'),
(22, '10', 'Dr. Priyanka Kakade', 'Dinajpur', '1234567890', 'priyanka@gmail.com', 'Plastic Surgeon', 12, '1200', '1012', '123', 'header_img.jpg'),
(24, '13', 'Dr. Manas Kulkarni', 'Dinajpur', '1234567890', 'manas@gmail.com', 'Orthopedic', 13, '1000', '1013', '123', 'd13.jpg'),
(25, '14', 'Dr. Manasi Kokate', 'Dinajpur', '1234567890', 'manasi@gmail.com', 'General Physician', 13, '1000', '1014', '123', 'aboutimag33.jpg'),
(26, '15', 'Dr. Akanksha Sharma', 'Indapur', '1234567890', 'akanksha@gmail.com', 'Plastic Surgeon', 15, '1000', '1015', '123', 'aboutus.jpg'),
(27, '16', 'Dr. Soni Jhunjhunwala', 'Indapur', '1234567890', 'soni@gmail.com', 'Neurologist', 16, '1500', '1016', '123', 'docfemale.png'),
(28, '17', 'Dr.Jitendra Bajaj', 'Jamnagar', '1234567890', 'jitendra@gmail.com', 'Orthopedic', 17, '1000', '1017', '123', 'd14.jpg'),
(29, '18', 'Dr.Lina Bajaj', 'Jamnagar', '1234567890', 'lina@gmail.com', 'Plastic Surgeon', 18, '1000', '1018', '123', 'doctor2.jpg'),
(30, '19', 'Dr. Asutosh Dixit', 'Pune', '1234567890', 'asutosh@gmail.com', 'Neurologist', 19, '1000', '1019', '123', 'd15.jpg'),
(31, '20', 'Dr. Kanchan Joshi', 'Pune', '1234567890', 'kanchan@gmail.com', 'Orthopedic', 20, '1000', '1020', '123', 'header_img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(22) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(1, 'kanchan@xyz.com', 'GOOOOOOOD'),
(2, 'kanchan@xyz.com', 'GOOOOOOOOOOD'),
(3, 'kanchan@xyz.com', 'YOU GET A S GRADE		'),
(4, 'kanchan@xyz.com', 'YOU GET A S GRADE		'),
(5, 'kanchan@xyz.com', 'Nice job!!! Very good website!!! You have got a S grade.						'),
(6, 'kanchan@xyz.com', 'Yay you got a S grade			'),
(7, 'kanchan@xyz.com', 'Gooooood!!!');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(22) NOT NULL,
  `age` varchar(22) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `bgroup` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `contact`, `address`, `bgroup`, `email`, `password`) VALUES
(7, 'Kanchan ', '12', '9999999999', 'Pune', 'O+', 'kanchan@xyz.com', '123'),
(8, 'Hari', '12', '999999999', 'Mumbai', 'A+', 'hariom@xyz.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
