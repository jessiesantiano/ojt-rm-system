-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 02:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojt_rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `studentID` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1=admin , 2=supervisor, 3=student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `studentID`, `name`, `email`, `password`, `type`) VALUES
(1, '', 'Administrator', 'admin@admin.com', 'admin123', 1),
(2, '', 'Supervisor', 'super@super.com', 'super123', 2),
(3, 'lcc-01-2022', 'Student Test', 'lcc-01-2022', 'test123', 3),
(4, 'lcc-02-2022', 'Student Test 2', 'lcc-02-2022', 'test123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `studentID` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `downloads` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `downloads` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `studentID` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL COMMENT '1=pending, 2=checked, 3=failed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `studentID` varchar(255) NOT NULL,
  `Sname` varchar(255) NOT NULL,
  `Slname` varchar(255) NOT NULL,
  `Smname` varchar(255) NOT NULL,
  `Sstreet` varchar(255) NOT NULL,
  `Scity` varchar(255) NOT NULL,
  `Sstate` varchar(255) NOT NULL,
  `Szipcode` varchar(255) NOT NULL,
  `Sage` varchar(255) NOT NULL,
  `Sbday` date NOT NULL,
  `Snumber` varchar(255) NOT NULL,
  `Semail` varchar(255) NOT NULL,
  `Sphoto` varchar(255) NOT NULL,
  `Sinsurance` varchar(255) NOT NULL,
  `Sph` varchar(255) NOT NULL,
  `Sparentph` varchar(255) NOT NULL,
  `Sphnumber` varchar(255) NOT NULL,
  `Svax` varchar(255) NOT NULL,
  `S1dose` date NOT NULL,
  `S2dose` date NOT NULL,
  `Sbooster` varchar(255) NOT NULL,
  `Svaxbooster` varchar(255) NOT NULL,
  `Swstatus` varchar(255) NOT NULL,
  `Swname` varchar(255) NOT NULL,
  `Swcompany` varchar(255) NOT NULL,
  `Swnumber` varchar(255) NOT NULL,
  `Swlocation` varchar(255) NOT NULL,
  `Swemployer` varchar(255) NOT NULL,
  `Swcontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`studentID`, `Sname`, `Slname`, `Smname`, `Sstreet`, `Scity`, `Sstate`, `Szipcode`, `Sage`, `Sbday`, `Snumber`, `Semail`, `Sphoto`, `Sinsurance`, `Sph`, `Sparentph`, `Sphnumber`, `Svax`, `S1dose`, `S2dose`, `Sbooster`, `Svaxbooster`, `Swstatus`, `Swname`, `Swcompany`, `Swnumber`, `Swlocation`, `Swemployer`, `Swcontact`) VALUES
('lcc-02-2022', 'Juan', 'Dela Cruz', 'Rizal', 'Rizal Street', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
