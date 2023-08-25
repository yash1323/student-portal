-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 02:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplestresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`userid`, `password`) VALUES
('admin', 'D00F5D5217896FB7FD601412CB890830');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `name` varchar(30) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`name`, `id`) VALUES
('forth', 4),
('Eight', 8),
('Nine', 9),
('Ten', 10),
('demo1', 13);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class` varchar(30) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `marks` int(3) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `rno`, `class`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES
('Thomas', 11, 'Eight', 50, 50, 50, 50, 49, 249, 49.8),
('Emma Ashley', 21, 'Ten', 72, 68, 82, 59, 76, 357, 71.4),
('dhvanik', 124, 'forth', 89, 93, 67, 78, 89, 416, 83.2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `password` varchar(23) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `age` int(18) NOT NULL,
  `School_Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `rno`, `class_name`, `password`, `phone`, `age`, `School_Address`) VALUES
('abc', 3, 'Ten', '', '', 0, ''),
('Amit', 21, 'Nine', '', '', 0, ''),
('Bhavesh', 33, 'Ten', '123456', '', 0, ''),
('dhvanik', 124, 'forth', '123456', '1234567890', 18, ''),
('Emma Ashley', 21, 'Ten', '', '', 0, ''),
('Harsh', 34, 'Nine', '', '', 0, ''),
('James Peterson', 9, 'Nine', '1234', '6784567890', 15, ''),
('jay', 55, 'Ten', 'jay12345', '3244324234', 18, ''),
('Kaushal', 27, 'Ten', '', '', 0, ''),
('Kirit', 8, 'Ten', '123456', '', 0, ''),
('Kirtan', 7, 'Eight', '', '', 0, ''),
('Lucia Muff', 12, 'Nine', '', '', 0, ''),
('Ramesh', 43, 'Eight', '123456', '3234567854', 14, ''),
('Rod Glover', 11, 'Nine', '', '', 0, ''),
('Taral', 43, 'Nine', '', '', 0, ''),
('Tarang', 20, 'Ten', '123456', '1234567890', 18, 'Shree Ganesh Vidhya Mandir School,Near Vishram Park Society,Vasna,Ahmedabad-380007. Phone No:- 079 3664 2822'),
('Tarang Desai', 30, 'Ten', '', '', 0, ''),
('Thomas', 11, 'Eight', 'thomas1234', '', 0, ''),
('yash thakkar', 23, 'Eight', '12345678', '1234567890', 18, '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(1, '20220318141312__Aankh_Marey__Ranveer_Singh,_Sara_Ali_Khan__Tanishk_Bagchi,_Mika,_Neha_Kakkar,_Kumar_Sanu(48k).mp3', '_Aankh_Marey__Ranveer_Singh,_Sara_Ali_Khan__Tanishk_Bagchi,_Mika,_Neha_Kakkar,_Kumar_Sanu(48k).mp3'),
(2, '20220321175641_1 (1).JPG', '1 (1).JPG'),
(3, '20220321175703__Bad_Boy__Saaho__Prabhas,_Jacqueline_Fernandez__Badshah,_Neeti_Mohan(48k).mp3', '_Bad_Boy__Saaho__Prabhas,_Jacqueline_Fernandez__Badshah,_Neeti_Mohan(48k).mp3'),
(4, '20220321175717__Aabaad_Barbaad_(Full_VIdeo)_Abhishek_B,_Aditya_K,_Rajkummar_R,_Sanya,_Fatima__Arijit,_Pritam(256k).mp3', '_Aabaad_Barbaad_(Full_VIdeo)_Abhishek_B,_Aditya_K,_Rajkummar_R,_Sanya,_Fatima__Arijit,_Pritam(256k).mp3'),
(5, '20220321180051_12.JPG', '12.JPG'),
(6, '20220321180109_#Flashup_By_Knox_Artiste__#14SONGSON1BEAT__Mi_Gente__J._Balvin_x_Willy_William(48k).mp3', '#Flashup_By_Knox_Artiste__#14SONGSON1BEAT__Mi_Gente__J._Balvin_x_Willy_William(48k).mp3'),
(7, '20220324054651_sp1.png', 'sp1.png'),
(8, '20220324070824_53.jpg', '53.jpg'),
(9, '20220401080602_53.jpg', '53_2.jpg'),
(10, '20220401083522_Student Portal_report-Tarang Desai.pdf', 'Student Portal_report-Tarang Desai.pdf'),
(11, '20220401084709_20220401083522_Student Portal_report-Tarang Desai.pdf', '20220401083522_Student Portal_report-Tarang Desai.pdf'),
(12, '20220401084726_20220401084709_20220401083522_Student Portal_report-Tarang Desai.pdf', '20220401084709_20220401083522_Student Portal_report-Tarang Desai.pdf'),
(13, '20220401092406_20220401084726_20220401084709_20220401083522_Student Portal_report-Tarang Desai (1).pdf', '20220401084726_20220401084709_20220401083522_Student Portal_report-Tarang Desai (1).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `class` (`class`),
  ADD KEY `name` (`name`,`rno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`name`,`rno`),
  ADD KEY `class_name` (`class_name`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`class`) REFERENCES `class` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`name`,`rno`) REFERENCES `students` (`name`, `rno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_name`) REFERENCES `class` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
