-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 02:42 PM
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
(1, 'coordinator1@gmail.com', 'admin1', 'ALICIA O. RETONA', 'Coordinator', 'Education Dept.'),
(2, 'coordinator2@gmail.com', 'admin2', 'LENNIE ROSE P. PODRIDO', 'Coordinator', 'Economics Dept.'),
(23, 'phoebeann@gmail.com', 'phoebeann10', 'PHOEBE ANN R. LOPEZ', 'DEOGRACIA P. PRINCESA MEMORIAL HIGH SCHOOL', 'School'),
(25, 'noelcerillo@gmail.com', 'noel.cerillo5', 'NOEL M. CERILLO', 'CITY AGRICULTURE OFFICE\n', 'Company'),
(26, 'ginadavid@gmail.com', 'gina.david2', 'GINA R. DAVID', 'LIGAO MUNICIPAL HALL', 'Company'),
(31, 'shirlygongora@gmail.com', 'shirly.gongora2', 'SHIRLY GONGORA	', 'BARAYONG NATIONAL HIGH SCHOOL', 'School');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `whatfor` longtext NOT NULL,
  `dateAdded` varchar(255) NOT NULL,
  `postedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `name`, `title`, `whatfor`, `dateAdded`, `postedBy`) VALUES
(1, '', 'Orientation', 'Orientation is the process of bringing employees up to speed on organisational policies, job roles and responsibilities and other organisational attributes and concepts that will help them transition efficiently into the position. In larger companies, and for roles with greater responsibilities, the orientation process may include time spent in several departments as well as specialist learning programmes.', 'Sat Sep 10, 2022', 'Mary Merry A. Yudip'),
(3, 'Screenshot 2022-10-09 090534.png', 'asd', 'asd', 'Mon Oct 10, 2022', 'Alicia O. Retona'),
(4, 'logo.jpg', 'Sample report', 'asdadasdasdad', 'Mon Oct 10, 2022', 'Alicia O. Retona');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `courseCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `courseCode`) VALUES
(1, 'BSED English', 'Education Dep.'),
(2, 'BSED Mathematics', 'Education Dep.'),
(3, 'BSED Filipino', 'Education Dep.'),
(4, 'BSED Social Studies', 'Education Dep.'),
(5, 'BSED Values Education', 'Education Dep.'),
(6, 'AB Economics', 'Economic Dep.'),
(7, 'BE Childhood Education', 'Education Dep.');

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
(3, 'asd', 'Before OJT Requirements', '2018-01-0018 ECO', '186731', 'midterm.pdf', 1, '2022-09-29 14:44:42'),
(4, 'sadf', 'Before OJT Requirements', '2018-01-0018 ECO', '186731', 'midterm.pdf', 0, '2022-09-30 10:33:54'),
(5, 'asdas', 'After OJT Requirements', '2018-01-0018 ECO', '186731', 'midterm.pdf', 0, '2022-09-30 10:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `size` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `studentID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `title`, `name`, `date`, `size`, `des`, `studentID`) VALUES
(8, 'asd', 'midterm.pdf', '2022-09-30 11:01:21', '186731', 'Midterm', '2018-01-0018 ECO'),
(9, 'asda', 'midterm.pdf', '2022-09-30 11:01:40', '186731', 'Final', '2018-01-0018 ECO');

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
(1, 'orgchrt.pdf', '577066', '0', 'Sample Report', '2018-01-0018 ECO', '2022-09-24 09:48:48', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `courseCode` varchar(255) DEFAULT NULL,
  `trainees` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school`, `supervisor`, `courseCode`, `trainees`) VALUES
(1, 'DEOGRACIA P. PRINCESA MEMORIAL HIGH SCHOOL', 'PHOEBE ANN R. LOPEZ', 'Education Dept.', 1),
(2, 'BARAYONG NATIONAL HIGH SCHOOL', 'SHIRLY GONGORA	', 'Education Dept.', 1);

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
  `Sbday` varchar(255) DEFAULT NULL,
  `Snumber` varchar(255) DEFAULT NULL,
  `Sphoto` varchar(255) DEFAULT NULL,
  `Sinsurance` varchar(255) DEFAULT NULL,
  `Sph` varchar(255) DEFAULT NULL,
  `Sparentph` varchar(255) DEFAULT NULL,
  `Sphnumber` varchar(255) DEFAULT NULL,
  `Svax` varchar(255) DEFAULT NULL,
  `S1dose` date DEFAULT NULL,
  `S2dose` date DEFAULT NULL,
  `Sbooster` date DEFAULT NULL,
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
  `iSfinal` varchar(255) DEFAULT NULL COMMENT 'NULL = ready to request\r\nrequested = request for evaluation\r\ngraded = done evaluating by the supervisor',
  `midterm` varchar(255) DEFAULT NULL,
  `final` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Sname`, `Slname`, `Smname`, `Semail`, `studentID`, `Spassword`, `Scourse`, `Syear`, `Sblock`, `Sstreet`, `Scity`, `Sstate`, `Szipcode`, `Sage`, `Sgender`, `Sbday`, `Snumber`, `Sphoto`, `Sinsurance`, `Sph`, `Sparentph`, `Sphnumber`, `Svax`, `S1dose`, `S2dose`, `Sbooster`, `Svaxbooster`, `Swstatus`, `Swname`, `Swcompany`, `Swnumber`, `Swlocation`, `Swemployer`, `Swcontact`, `courseCode`, `iSmidterm`, `iSfinal`) VALUES
(1, 'Ian Christopher', 'Espanola', 'M.', 'yhanespanola@gmail.com', '2018-01-0018 ECO', 'LCC-632e608ade52d', 'AB Economics', '4', 'A', 'Maonon', 'Ligao City', 'Albay', '4505', '22', 'Male', '1999-09-15', '09308190521', 'temp-profile.jpg', NULL, NULL, NULL, NULL, 'Pfizer-BioNTech', '2021-11-07', '2021-12-07', '0000-00-00', 'N/A', NULL, NULL, 'Ligao Municipal Hall', '120 hours', 'Ligao City', 'Mrs. Gina R. David', '9999999', 'Economic Dep.', 'graded', 'graded'),
(2, 'asd', 'asd', 'asd', '', '2018-01-0018 ECO', 'LCC-6343d6292a953', 'BSED Mathematics', '4', 'A', NULL, NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Select', NULL, NULL, '', NULL, 'Education Dep.', NULL, NULL),
(3, 'Jessie', 'Santiano', 'Tardecilla', '', '2018-01-0018 ECO', 'LCC-6343d6369df3e', 'BSED Mathematics', '4', 'B', NULL, NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Select', NULL, NULL, '', NULL, 'Education Dep.', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
