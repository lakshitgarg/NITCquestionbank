-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 06:33 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('rahul', '123'),
('lakshit', 'garg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `pid` varchar(20) DEFAULT NULL,
  `sem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `pid`, `sem`) VALUES
('CS2001', 'Logic Design', 'MCA', 1),
('CS2004', 'Computer Organization', 'MCA', 2),
('CS2005', 'Data Structure And Algorithms', 'MCA', 2),
('CS2094', 'DATA STRUCTURES LABORATORY', 'MCA', 2),
('CS2301', 'Introduction to Programming', 'MCA', 1),
('CS2391', 'Introduction To Programming Laboratory', 'MCA', 1),
('CS3002', 'Database Management System', 'MCA', 3),
('CS3003', 'Operating System', 'MCA', 3),
('CS3004', 'SOFTWARE ENGINEERING', 'MCA', 4),
('CS3006', 'Computer Networks', 'MCA', 4),
('CS3095', 'Database Management System Laboratory', 'MCA', 3),
('CS3301', 'OBJECT ORIENTED PROGRAMMING', 'MCA', 4),
('MA6010', 'Discrete Mathematics', 'MCA', 1),
('MS1001', 'Professional Communication', 'MCA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `did` varchar(20) NOT NULL,
  `dname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`did`, `dname`) VALUES
('CH102', 'CHEMISTRY'),
('CSED', 'Computer Science and Engineering'),
('ee101', 'EEE'),
('ph100', 'PHYSICS');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `password`) VALUES
('rahul', 'raj'),
('pratyush', '123');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `pprid` varchar(20) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`pprid`, `cid`, `year`, `type`) VALUES
('p100', 'CS2001', 2014, 'T1'),
('p101', 'CS2001', 2010, 'ES'),
('p103', 'CS2301', 2014, 'T2'),
('p104', 'CS2391', 2016, 'ES');

-- --------------------------------------------------------

--
-- Table structure for table `pdesc`
--

CREATE TABLE `pdesc` (
  `pprid` varchar(20) NOT NULL,
  `qstn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdesc`
--

INSERT INTO `pdesc` (`pprid`, `qstn`) VALUES
('p100', 'Determine the decimal value of the fractional binary number 0.1011.  '),
('p100', 'Perform 2â€™s complement subtraction of 010110-100101 '),
('p100', 'Convert (53) 10 to EX-3 code. '),
('p100', 'Why digital circuits are more frequently constructed with NAND or NOR gates than       \n    with AND & OR gates .'),
('p100', 'Convert 110011 into hexadecimal through octal. '),
('p100', 'What is variable mapping? '),
('p100', 'What is the feature of gray code? '),
('p100', 'Name the two canonical forms for Boolean algebra. '),
('p100', 'What is the BCD equivalent for the gray code 1110? '),
('p100', 'What is a data selector? '),
('p103', 'What does LIFO stand for in the context of data structures?'),
('p103', 'When is the Requirements Document finished?'),
('p103', 'A data type where values can only represent one of a limited number of pre-defined categories is called a(n)Â _______data type.'),
('p103', 'Which of the following translates and executes program code line by line rather than the whole program in one step?'),
('p103', 'A procedure in programming is also called _____.'),
('p103', 'What are the three generations of programming languages?Â '),
('p103', 'What is the problem with programming in machine code?Â Â '),
('p103', 'How did assembly language attempt to solve the problem?'),
('p103', 'What is one advantage of using a high-level programming language?Â '),
('p103', 'What is one dis-advantage of using a high-level programming language?Â '),
('p104', 'C program to print character without using format specifiers.'),
('p104', 'cprogram to print weekday of a given date'),
('p104', 'c program to fing binary additon and binary substraction'),
('p104', 'c program to convert the number from decimal to binary'),
('p104', 'c program to ascii table'),
('p101', 'Design A Full Adder And A Full Subtractor. '),
('p101', 'Design A Full subtractor with using two half subtractor.'),
('p101', 'Design A Full Adder with using two half adder .'),
('p101', 'Design A Full Adder circuit  with using two half adder circuit  .'),
('p101', ' Design A Full subtractor circuit  with using two half subtractor circuit.'),
('p101', 'Implement the given function in 4:1 mux f= âˆ‘m(0,1,3,5,8)'),
('p101', 'Design a half adder using NAND â€“ NAND logic. '),
('p101', 'Explain how a full adder can be built using two half adders.'),
('p101', 'Design a half adder using at most three NOR gates. '),
('p101', 'Design a 8421 to gray code converter. ');

-- --------------------------------------------------------

--
-- Table structure for table `prog`
--

CREATE TABLE `prog` (
  `pid` varchar(20) NOT NULL,
  `did` varchar(20) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prog`
--

INSERT INTO `prog` (`pid`, `did`, `pname`) VALUES
('BTCSE', 'CSED', 'Batchelor of Technology'),
('CE100', 'CH102', 'Chemical engineering'),
('MCA', 'CSED', 'Master Of Computer Application'),
('PTH100', 'ph100', 'THERMODYNAMIC ENGINERRING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`did`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`pprid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `pdesc`
--
ALTER TABLE `pdesc`
  ADD KEY `pprid` (`pprid`);
ALTER TABLE `pdesc` ADD FULLTEXT KEY `qstn` (`qstn`);

--
-- Indexes for table `prog`
--
ALTER TABLE `prog`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `did` (`did`),
  ADD KEY `pid` (`pid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `prog` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `paper_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `pdesc`
--
ALTER TABLE `pdesc`
  ADD CONSTRAINT `pdesc_ibfk_1` FOREIGN KEY (`pprid`) REFERENCES `paper` (`pprid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prog`
--
ALTER TABLE `prog`
  ADD CONSTRAINT `prog_ibfk_1` FOREIGN KEY (`did`) REFERENCES `dept` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
