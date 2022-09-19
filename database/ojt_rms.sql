-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2022 at 02:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `accountFor` varchar(255) NOT NULL,
  `courseCode` varchar(255) DEFAULT NULL COMMENT 'NULL is equal to school account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `name`, `accountFor`, `courseCode`) VALUES
(1, 'coordinator1@gmail.com', 'admin1', 'Alicia O. Retona', 'Coordinator', 'Education Dep.'),
(2, 'coordinator2@gmail.com', 'admin2', 'Lennie Rose P. Podrido', 'Coordinator', 'Economic Dep.'),
(4, 'supervisor1', 'supervisor1', 'Mrs. Diana L. Desuyo', 'AMTIC HIGH SCHOOL', NULL),
(5, 'schoolhead1', 'schoolhead1', 'Mrs. Iniz R. Paz', 'BARAYONG HIGH SCHOOL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `whatfor` longtext NOT NULL,
  `dateAdded` varchar(255) NOT NULL,
  `postedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `whatfor`, `dateAdded`, `postedBy`) VALUES
(1, 'Orientation', 'Orientation is the process of bringing employees up to speed on organisational policies, job roles and responsibilities and other organisational attributes and concepts that will help them transition efficiently into the position. In larger companies, and for roles with greater responsibilities, the orientation process may include time spent in several departments as well as specialist learning programmes.', 'Sat Sep 10, 2022', 'Mary Merry A. Yudip');

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

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `destination`, `studentID`, `size`, `name`, `downloads`, `date`) VALUES
(1, 'MLBB Tournament 2021', 'Before OJT Requirements', 'LCC-0001', '226577', 'Drivers License.pdf', 1, '2022-09-13 19:12:27'),
(2, 'COD ', 'Before OJT Requirements', 'LCC-0002', '226577', 'Drivers License.pdf', 0, '2022-09-14 09:53:42'),
(3, 'COD ', 'After OJT Requirements', 'LCC-0001', '226577', 'Drivers License.pdf', 1, '2022-09-14 14:15:24'),
(4, 'sample req', 'After OJT Requirements', 'LCC-0002', '3902636', 'layout.docx', 0, '2022-09-15 22:43:59'),
(5, 'sample pdf', 'After OJT Requirements', 'LCC-0002', '150738', 'Jessie Santiano.pdf', 0, '2022-09-15 22:48:03');

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
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL COMMENT '1=pending, 2=checked, 3=failed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `size`, `downloads`, `title`, `studentID`, `date`, `comment`, `status`) VALUES
(1, 'Drivers License.pdf', '226577', '0', 'MLBB Tournament 2021', 'LCC-0001', '2022-09-11 21:05:58', '', 'checked'),
(2, 'Santiano, Jessie T. (PSA).pdf', '1672525', '0', 'sample', 'LCC-0002', '2022-09-15 22:42:58', 'sample comment', 'fa'),
(3, 'Jessie Santiano.pdf', '150738', '0', 'sample report', 'LCC-0002', '2022-09-15 22:48:14', '', 'checked'),
(4, 'img20220731_08060207.pdf', '886279', '0', 'Sample Report Pending', 'LCC-0002', '2022-09-16 10:20:03', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school`, `supervisor`) VALUES
(1, 'AMTIC HIGH SCHOOL', 'Mrs. Diana L. Desuyo'),
(2, 'BARAYONG HIGH SCHOOL', 'Mrs. Iniz R. Paz');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Sname` varchar(255) DEFAULT NULL,
  `Slname` varchar(255) DEFAULT NULL,
  `Smname` varchar(255) DEFAULT NULL,
  `Semail` varchar(255) DEFAULT NULL,
  `studentID` varchar(255) DEFAULT NULL,
  `Spassword` varchar(255) DEFAULT NULL,
  `Scourse` varchar(255) DEFAULT NULL,
  `Syear` varchar(255) DEFAULT NULL,
  `Sblock` varchar(255) DEFAULT NULL,
  `Sstreet` varchar(255) DEFAULT NULL,
  `Scity` varchar(255) DEFAULT NULL,
  `Sstate` varchar(255) DEFAULT NULL,
  `Szipcode` varchar(255) DEFAULT NULL,
  `Sage` varchar(255) DEFAULT NULL,
  `Sgender` varchar(255) DEFAULT NULL,
  `Sbday` date DEFAULT NULL,
  `Snumber` varchar(255) DEFAULT NULL,
  `Sphoto` varchar(255) DEFAULT NULL,
  `Sinsurance` varchar(255) DEFAULT NULL,
  `Sph` varchar(255) DEFAULT NULL,
  `Sparentph` varchar(255) DEFAULT NULL,
  `Sphnumber` varchar(255) DEFAULT NULL,
  `Svax` varchar(255) DEFAULT NULL,
  `S1dose` date DEFAULT NULL,
  `S2dose` date DEFAULT NULL,
  `Sbooster` varchar(255) DEFAULT NULL,
  `Svaxbooster` varchar(255) DEFAULT NULL,
  `Swstatus` varchar(255) DEFAULT NULL,
  `Swname` varchar(255) DEFAULT NULL,
  `Swcompany` varchar(255) DEFAULT NULL,
  `Swnumber` varchar(255) DEFAULT NULL,
  `Swlocation` varchar(255) DEFAULT NULL,
  `Swemployer` varchar(255) DEFAULT NULL,
  `Swcontact` varchar(255) DEFAULT NULL,
  `courseCode` varchar(255) DEFAULT NULL,
  `iSmidterm` varchar(255) DEFAULT NULL COMMENT 'NULL = ready to request\r\nrequested = request for evaluation\r\ngraded = done evaluating by the supervisor',
  `iSfinal` varchar(255) DEFAULT NULL COMMENT 'NULL = ready to request\r\nrequested = request for evaluation\r\ngraded = done evaluating by the supervisor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Sname`, `Slname`, `Smname`, `Semail`, `studentID`, `Spassword`, `Scourse`, `Syear`, `Sblock`, `Sstreet`, `Scity`, `Sstate`, `Szipcode`, `Sage`, `Sgender`, `Sbday`, `Snumber`, `Sphoto`, `Sinsurance`, `Sph`, `Sparentph`, `Sphnumber`, `Svax`, `S1dose`, `S2dose`, `Sbooster`, `Svaxbooster`, `Swstatus`, `Swname`, `Swcompany`, `Swnumber`, `Swlocation`, `Swemployer`, `Swcontact`, `courseCode`, `iSmidterm`, `iSfinal`) VALUES
(1, 'Merdilene', 'Pomay', 'B.', 'merdilene.pomay@gmail.com', 'LCC-0001', 'LCC-631dc11a867b1', '', '', '', NULL, NULL, NULL, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARAYONG HIGH SCHOOL', NULL, NULL, NULL, NULL, 'Education Dep.', NULL, NULL),
(2, 'Jonalyn', 'Bataller', 'B.', 'jonalyn.btaller@gmail.com', 'LCC-0002', 'LCC-631dd6d733f40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AMTIC HIGH SCHOOL', NULL, NULL, NULL, NULL, 'Education Dep.', 'requested', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
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
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
