-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 03:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcomplaints_tb`
--

CREATE TABLE `addcomplaints_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addmission` varchar(20) NOT NULL,
  `datex` varchar(30) NOT NULL,
  `complaint` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcomplaints_tb`
--

INSERT INTO `addcomplaints_tb` (`id`, `name`, `addmission`, `datex`, `complaint`) VALUES
(1, 'adil', '112233', '27-08-2019', 'broken a chair and glass');

-- --------------------------------------------------------

--
-- Table structure for table `addfood_tb`
--

CREATE TABLE `addfood_tb` (
  `id` int(11) NOT NULL,
  `da` varchar(20) NOT NULL,
  `breakfast` varchar(20) NOT NULL,
  `btime` varchar(30) NOT NULL,
  `lunch` varchar(30) NOT NULL,
  `ltime` varchar(30) NOT NULL,
  `dinner` varchar(30) NOT NULL,
  `dtime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfood_tb`
--

INSERT INTO `addfood_tb` (`id`, `da`, `breakfast`, `btime`, `lunch`, `ltime`, `dinner`, `dtime`) VALUES
(1, 'monday', 'putt,kadala', '7:00 AM', 'rice,curry', '12:31 PM', 'poratta,beef', '7:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent_tb`
--

CREATE TABLE `addstudent_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addmission` varchar(20) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent_tb`
--

INSERT INTO `addstudent_tb` (`id`, `name`, `addmission`, `mobile`, `place`, `sex`, `image`) VALUES
(1, 'adil', '112233', '955645132', 'HI', 'male', 'download (2).jfif'),
(2, 'ashik', '221133', '86365412132', 'CA', 'male', 'download.jfif'),
(3, 'Amir', '12345', '89451521312', 'CA', 'male', 'vlcsnap-2019-10-23-21h03m46s75'),
(4, 'Razik', '54321', '65645212121', 'HI', 'male', '590607e00cbeef0acff9a649.png');

-- --------------------------------------------------------

--
-- Table structure for table `addwarden_tb`
--

CREATE TABLE `addwarden_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addwarden_tb`
--

INSERT INTO `addwarden_tb` (`id`, `name`, `username`, `password`, `mobile`, `place`, `sex`, `image`) VALUES
(4, 'Amir', 'amir', '123', '94546456123', 'OR', 'male', 'download.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studentcomplaints_tb`
--

CREATE TABLE `studentcomplaints_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addmission` varchar(20) NOT NULL,
  `datex` varchar(30) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcomplaints_tb`
--
ALTER TABLE `addcomplaints_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addfood_tb`
--
ALTER TABLE `addfood_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstudent_tb`
--
ALTER TABLE `addstudent_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addwarden_tb`
--
ALTER TABLE `addwarden_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentcomplaints_tb`
--
ALTER TABLE `studentcomplaints_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcomplaints_tb`
--
ALTER TABLE `addcomplaints_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addfood_tb`
--
ALTER TABLE `addfood_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addstudent_tb`
--
ALTER TABLE `addstudent_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addwarden_tb`
--
ALTER TABLE `addwarden_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentcomplaints_tb`
--
ALTER TABLE `studentcomplaints_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
