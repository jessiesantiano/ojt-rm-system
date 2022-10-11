-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2022 at 11:20 AM
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
(21, 'shirlygongora@gmail.com', 'shirly.gongora3', 'SHIRLY GONGORA', 'BARAYONG NATIONAL HIGH SCHOOL', 'School'),
(23, 'phoebeann@gmail.com', 'phoebeann10', 'PHOEBE ANN R. LOPEZ', 'DEOGRACIA P. PRINCESA MEMORIAL HIGH SCHOOL', 'School'),
(25, 'noelcerillo@gmail.com', 'noel.cerillo5', 'NOEL M. CERILLO	', 'CITY AGRICULTURE OFFICE', 'Company'),
(26, 'ginadavid@gmail.com', 'gina.david2', 'GINA R. DAVID', 'LIGAO MUNICIPAL HALL', 'Company');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `whatfor` longtext NOT NULL,
  `dateAdded` varchar(255) NOT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `whatfor`, `dateAdded`, `postedBy`, `name`) VALUES
(3, 'OJT Orientation', 'On January 28, 2023 at precisely 1:00pm, there will be an orientation for all OJT students through google meet (https://meet.google.com/zjv-seyj-mjb).\r\n', 'Tue Sep 27, 2022', 'Alicia O. Retona', NULL),
(6, 'grssfsafss', 'zcvxbfhg', 'Thu Oct 06, 2022', 'Alicia O. Retona', NULL);

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
(7, 'Certificate', 'After OJT Requirements', '2018-01-0069-ECO', '273122', 'Certificate_Ralph Opena.pdf', 0, '2022-09-27 20:31:39'),
(16, 'Parents Permit', 'Before OJT Requirements', '2018-01-0069-ECO', '418108', 'Parents-Permit_Ralph Opena.pdf', 1, '2022-09-28 18:07:09'),
(17, 'Application Letter', 'Before OJT Requirements', '2018-01-0020-ECO', '446801', 'Poot_Application letter.pdf', 0, '2022-09-29 23:32:52'),
(18, 'Parents Permit', 'Before OJT Requirements', '2018-01-0020-ECO', '552400', 'Poot_parents permit.pdf', 0, '2022-09-29 23:33:40'),
(19, 'Certificate', 'After OJT Requirements', '2018-01-0020-ECO', '249548', 'Poot certificate.pdf', 0, '2022-09-29 23:36:14'),
(20, 'Philhealth', 'Before OJT Requirements', '2018-01-0006-Ed', '537919', 'Barde_Philhealth.pdf', 0, '2022-10-01 13:29:07'),
(21, 'Parents Permit', 'Before OJT Requirements', '2018-01-0006-Ed', '573059', 'Barde_ParentsPermit.pdf', 0, '2022-10-01 13:29:37'),
(22, 'Certificate', 'After OJT Requirements', '2018-01-0006-Ed', '58592', 'Certificate_Judy Ann Barde.pdf', 0, '2022-10-01 13:29:56');

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
(6, 'Narrative Report_Marco Poot.pdf', '501123', '0', 'Narrative Report', '2018-01-0020-ECO', '2022-09-29 23:40:37', '', 'pending'),
(7, 'Narrative Report_Ralph Opeña.pdf', '8219652', '0', 'Narrative Report', '2018-01-0069-ECO', '2022-10-01 13:15:15', '', 'pending'),
(8, 'Barde, Judy Ann_Portfolio.pdf', '1117254', '0', 'Portfolio', '2018-01-0006-Ed', '2022-10-01 13:30:21', '', 'checked');

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
(12, 'BARAYONG NATIONAL HIGH SCHOOL', 'SHIRLY GONGORA', 'Education Dept.', 1),
(14, 'DEOGRACIA P. PRINCESA MEMORIAL HIGH SCHOOL', 'PHOEBE ANN R. LOPEZ', 'Education Dept.', 1);

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

INSERT INTO `students` (`id`, `Sname`, `Slname`, `Smname`, `Semail`, `studentID`, `Spassword`, `Scourse`, `Syear`, `Sblock`, `Sstreet`, `Scity`, `Sstate`, `Szipcode`, `Sage`, `Sgender`, `Sbday`, `Snumber`, `Sphoto`, `Sinsurance`, `Sph`, `Sparentph`, `Sphnumber`, `Svax`, `S1dose`, `S2dose`, `Sbooster`, `Svaxbooster`, `Swstatus`, `Swname`, `Swcompany`, `Swnumber`, `Swlocation`, `Swemployer`, `Swcontact`, `courseCode`, `iSmidterm`, `iSfinal`, `midterm`, `final`) VALUES
(5, 'RALPH', 'OPENA', 'ORPIANA', 'ralphopena378@gmail.com', '2018-01-0069-ECO', 'LCC-633062469fbd9', 'AB Economics', '', 'A', 'P-2 Inamnan Grande', 'Guinobatan', 'Albay', '4503', '22', 'Male', '2000-06-07', '09664622660', 'Opeña_Pic.jpg', NULL, NULL, NULL, NULL, 'Pfizer-BioNTech', '2021-10-13', '2021-11-03', '0000-00-00', 'N/A', NULL, NULL, 'CITY AGRICULTURE OFFICE', '200', 'Binatagan, Ligao City', 'Noel M. Cerillo', '', 'Economics Dept.', 'requested', NULL, '0', NULL),
(6, 'IAN CHRISSTOPHER', 'ESPANOLA', 'MASARATE', 'yhanespanola@gmail.com', '2018-01-0018-ECO', 'LCC-63306552c8c6d', 'AB Economics', '', 'A', 'P5, Maonon', 'Ligao City', 'Albay', '4504', '22', 'Male', '', '09308190521', NULL, NULL, NULL, NULL, NULL, 'Pfizer-BioNTech', '2021-11-07', '2021-12-28', '0000-00-00', '', NULL, NULL, 'LIGAO MUNICIPAL HALL', '120', 'Binatagan, Ligao City', 'Gina R. David', '', 'Economics Dept.', 'requested', NULL, '0', NULL),
(7, 'MARY JOY', 'ORENSE', 'RELOX', '', '2018-01-0057-Ed', 'LCC-6330f37c53efe', 'BSED English', '', 'A', NULL, NULL, NULL, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARAYONG NATIONAL HIGH SCHOOL', NULL, NULL, 'SHIRLY GONGORA', NULL, 'Education Dept.', 'graded', NULL, '0', NULL),
(9, 'JUDY ANN', 'BARDE', 'APARICIO', 'judeannbarde@gmail.com', '2018-01-0006-Ed', 'LCC-6335358a2270a', 'BSED Filipino', '', 'A', 'P6, Pinamaniquian,', 'Ligao City', 'Albay', '4504', '25', 'Female', '1996-11-17', '09517507803', 'FB_IMG_1664602253473.jpg', NULL, NULL, NULL, NULL, 'Moderna', '2021-10-14', '2021-11-21', '0000-00-00', '', NULL, NULL, 'DEOGRACIA P. PRINCESA MEMORIAL HIGH SCHOOL', '360', 'Ranao - Ranao, Ligao City', 'PHOEBE ANN R. LOPEZ', '', 'Education Dept.', 'graded', 'requested', '0', NULL),
(10, 'MARCO', 'POOT', 'POCUA', '', '2018-01-0020-ECO', 'LCC-6335b5cd4b911', 'AB Economics', '', 'A', NULL, NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LIGAO MUNICIPAL HALL', NULL, NULL, 'Gina R. David', NULL, 'Economics Dept.', NULL, NULL, '0', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
