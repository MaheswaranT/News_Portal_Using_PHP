-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 07:57 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `govt`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`name`, `ron`, `mno`, `em`, `pa`, `pea`, `place`, `date`) VALUES
('varsh', 'TNPSC Group I', 'IAS', 'varshini7323@gmail.com', 'What is qualification for IAS?\r\nCandidates applying for IAS Exam must hold a Graduation degree in any discipline from any recognized University. Candidate must be more than 21 years of age and the upper age limit is 32 years for general candidates.\r\n', '\r\nFounder: Parliament of India\r\nFounded: 26 January 1950\r\nCabinet Secretary of India: Rajiv Gauba, IAS\r\nCadre controlling authority: Department of Personnel and Training, Ministry of Personnel, Public Grievances and Pensions\r\nSelection: Civil Services Examination\r\nAssociation: IAS (Central) association', '8889023456', '27.04.21'),
('varshini', 'TNPSC Group III', 'Teacher', 'varshinijayaram9749@gmail.com', 'What defines a good teacher?\r\nGreat teachers are warm, accessible, enthusiastic and caring. Teachers with these qualities are known to stay after school and make themselves available to students and parents who need them. They are involved in school-wide committees and activities, and they demonstrate a commitment to the school.', 'Qualities of Effective Teachers\r\nLove Their Students, Listen to Students, Make Time for Each Student, Learn Something New Every Day, Fill the Classroom with Positivity, Patiently Handle Challenging Situations, Constantly Look for Ways to Become Better,Collaborate with Other Teachers.\r\n', '9087654870', '27.04.21'),
('varshini', 'TNPSC Group II', ' Chief Secretary', 'varshini7323@gmail.com', 'Who is Tamil Nadu Chief Secretary?\r\nGovernment of Tamil Nadu\r\nExecutive\r\nChief Minister	Edappadi K. Palaniswami\r\nDeputy Chief Minister	O. Panneerselvam\r\nChief Secretary	Rajeev Ranjan, I.A.S.\r\n\r\n\r\n', 'What is the work of chief secretary?\r\nChief Secretaries are members of the Indian Administrative Service (IAS) who are the administrative head of state governments. A Chief Secretary functions as the central point of interdepartmental coordination at the departmental level and is classified as being in the Apex grade.', '8889023456', '27.04.21'),
('stf0001', 'TNPSC Group IV', 'GROUP 4', 'ngm123@gmail.com', 'The following services are included in the TNPSC Group 4 exam:\r\nTamil Nadu Ministerial Service.\r\nTamil Nadu Judicial Ministerial Service.\r\nTamil Nadu Survey and Land Records Subordinate Service.\r\nTamil Nadu Secretariat Service.\r\nTamil Nadu Legislative Assembly Secretariat Service.\r\n', 'What is the salary of Vao in Tamilnadu?\r\nTNPSC Group 4 VAO Exam Vacancy Increased details:\r\nJob Role	VAO, Junior Assistant, Bill Collector, Field Surveyor, Draftsman, Typist, Steno-Typist\r\nQualification	Minimum 10th\r\nTotal Vacancies	6491 9398\r\nSalary	Rs.19,500-65,500/Month\r\nJob location	Tamilnadu\r\n', '9087606543', '27.04.21');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `foliono` text NOT NULL,
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `dep` text NOT NULL,
  `col` text NOT NULL,
  `title` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `cls` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `spe` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`name`, `ron`, `mno`, `em`, `pa`, `pea`, `place`, `date`) VALUES
('sv80721', 'Varshini', '9876543290', 'varshinijayaram9749@gmail.com', '2/45,mullainagar.', 'Varshini-B.Sc.,Information Technology- Tresasurer of Rotaract NGM.', '3452', '27.04.21'),
('stf0001', 'varsh', '7373825062', 'varshini7323@gmail.com', '432/4,pethappampatti.', 'varsh-IT student-B.Sc Graduated.', '8907', '27.04.21'),
('stf002', 'Ramya', '9087654321', 'ramya6780@gmail.com', '123/2,shreenagar.', 'Ramya-Developer', '234', '27.04.21'),
('90876ram', 'Ram', '9123456789', 'ram908@gmail.com', '45/9,aishwaryanagar.', 'Ram-M Tech IT', 'ram', '27.04.21');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`id` int(11) NOT NULL,
  `appname` text NOT NULL,
  `appmime` text NOT NULL,
  `appsize` bigint(20) NOT NULL,
  `appdata` blob NOT NULL,
  `appcreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE IF NOT EXISTS `icon` (
`id` int(11) NOT NULL,
  `appiconname` text NOT NULL,
  `appiconmime` text NOT NULL,
  `appiconsize` bigint(20) NOT NULL,
  `appicondata` blob NOT NULL,
  `appiconcreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE IF NOT EXISTS `learner` (
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`name`, `ron`, `mno`, `em`, `pa`, `pea`, `place`, `date`) VALUES
('mcv789', 'Varshini', '9876543290', 'varshinijayaram9749@gmail.com', '2/8,MullaiNagar,\r\nVenjamadai(east),SV mill(po),\r\nUdumalpet - 642128.', 'I am varshini,\r\nD/O Jayaram,\r\nfrom Udumalpet,\r\nStudent of NGM college.', '789', '26.04.2021'),
('stf0001', 'varsh', '7373825062', 'varshini7323@gmail.com', '2/134,udumalpet.', 'varsh 18-IT-52 B.Sc.,Information technology', 'ngm', '27.04.21'),
('78690shree', 'shree', '6789054321', 'shree7890@gmail.com', '11/195,Palappampatti.', 'Shree from Palappampatti-642143.', '654', '27.04.21'),
('ramya5', 'Ramya', '6789067890', 'ramya6780@gmail.com', '44/5,vidhya nagar,Mukoonam.', 'Ramya-Government arts and science-Udumalpet.', '654', '27.04.21');

-- --------------------------------------------------------

--
-- Table structure for table `miappbox`
--

CREATE TABLE IF NOT EXISTS `miappbox` (
  `foliono` text NOT NULL,
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `dep` text NOT NULL,
  `col` text NOT NULL,
  `title` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `cls` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `spe` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL,
  `appid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `name` text NOT NULL,
  `nan` text NOT NULL,
  `top` text NOT NULL,
  `title` text NOT NULL,
  `org` text NOT NULL,
  `pos` text NOT NULL,
  `web` text NOT NULL,
  `cl` text NOT NULL,
  `pin` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `sex` text NOT NULL,
  `pa` text NOT NULL,
  `ca` text NOT NULL,
  `dt` text NOT NULL,
  `age` text NOT NULL,
  `spe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
