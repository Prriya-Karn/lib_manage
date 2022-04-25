-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:7882
-- Generation Time: Apr 24, 2022 at 04:24 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `ID` int(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `ROLLNO.` int(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `BRANCH` varchar(30) NOT NULL,
  `VALUE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`ID`, `NAME`, `ROLLNO.`, `EMAIL`, `BRANCH`, `VALUE`) VALUES
(1, 'Priya Karn', 1902111051, 'priyakarn2000@gmail.com', 'ITES&M', ''),
(2, 'Himanshu Karn', 1902111052, 'himanshu@gmail.com', 'CS', ''),
(3, 'Himanshu Karn', 1902111052, 'himanshu@gmail.com', 'CS', ''),
(4, 'Rachna karn ', 1902111053, 'rachna@gmail.com', 'ITES&M', ''),
(18, 'Anshika Kumari', 1902111055, 'anshika@gmail.com', 'CS', ''),
(19, 'kusum kumari', 1902111036, 'kusumkumari@gmail.com', 'ITES&M', ''),
(20, 'xyz', 1902111051, 'priyakarn2000@gmail.com', 'CS', '');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@1234', 1148458757);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `userid` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`userid`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `at_id` int(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`at_id`, `value`, `ID`, `date`) VALUES
(107, 'Present', 3, '20-03-22'),
(108, 'Absent', 4, '20-03-22'),
(109, 'Present', 5, '20-03-22'),
(110, 'Present', 18, '20-03-22'),
(111, 'Absent', 19, '20-03-22'),
(112, 'Present', 20, '20-03-22'),
(113, 'Present', 1, '01-04-22'),
(114, 'Absent', 2, '01-04-22'),
(115, 'Present', 3, '01-04-22'),
(116, 'Absent', 4, '01-04-22'),
(117, 'Present', 5, '01-04-22'),
(118, 'Absent', 18, '01-04-22'),
(119, 'Present', 19, '01-04-22'),
(120, 'Absent', 20, '01-04-22'),
(121, 'Present', 21, '01-04-22'),
(122, 'Present', 1, '05-04-22'),
(123, 'Present', 2, '05-04-22'),
(124, 'Absent', 3, '05-04-22'),
(125, 'Present', 4, '05-04-22'),
(126, 'Present', 5, '05-04-22'),
(127, 'Absent', 18, '05-04-22'),
(128, 'Present', 19, '05-04-22'),
(129, 'Present', 20, '05-04-22'),
(130, 'Absent', 21, '05-04-22'),
(131, 'Present', 22, '05-04-22'),
(132, 'Absent', 1, '17-04-22'),
(133, 'Absent', 2, '17-04-22'),
(134, 'Absent', 3, '17-04-22'),
(135, 'Absent', 4, '17-04-22'),
(136, 'Absent', 5, '17-04-22'),
(137, 'Absent', 18, '17-04-22'),
(138, 'Absent', 19, '17-04-22'),
(139, 'Absent', 20, '17-04-22'),
(140, 'Present', 21, '17-04-22'),
(141, 'Present', 22, '17-04-22'),
(142, 'Present', 1, '20-04-22'),
(143, 'Absent', 2, '20-04-22'),
(144, 'Present', 3, '20-04-22'),
(145, 'Present', 4, '20-04-22'),
(146, 'Absent', 18, '20-04-22'),
(147, 'Present', 19, '20-04-22'),
(148, 'Absent', 20, '20-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(200) NOT NULL,
  `author_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(103, 'krishna'),
(104, 'kusum'),
(105, 'Priya');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(20) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `book_no` int(30) NOT NULL,
  `book_price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author_name`, `category`, `book_no`, `book_price`) VALUES
(12, 'admin', 'admin', 'test', 1234, 123456),
(13, 'test', 'test', 'test', 1234, 1234),
(15, 'Web Developer', 'Priya karn', 'IT', 8, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Engineering'),
(2, 'Machine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'kusum'),
(102, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Fname`, `Lname`, `Email`, `Message`) VALUES
(3, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(4, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(5, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(6, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(7, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(8, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(9, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(10, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(11, ' Priya ', 'Karn', 'priyakarn2000@gmail.com', 'Hi this is priya here 🙂'),
(12, ' kusum', 'kumari', 'kusum.krp@gmail.com', 'hi this is kusum kumari i love'),
(13, ' Sonam', 'kumari', 'sonam@gmail.com', 'fhdsj'),
(14, ' Shabnam ', 'Khatun', 'shabnam@gmail.com', 'hi'),
(15, ' Shabnam ', 'Khatun', 'shabnam@gmail.com', 'hi'),
(16, ' Anjali', 'Kumari', 'anjali@gmail.com', 'hi'),
(17, ' Anjali', 'Kumari', 'anjali@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_books` (
  `s_no` int(30) NOT NULL,
  `book_no` int(20) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_author` varchar(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `status` int(30) NOT NULL,
  `issue_date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books`
--

INSERT INTO `issued_books` (`s_no`, `book_no`, `book_name`, `book_author`, `student_id`, `status`, `issue_date`) VALUES
(1, 6541, 'Data structure', 'D S Gupta', 4, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `jobregistration`
--

CREATE TABLE `jobregistration` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DEGREE` varchar(255) NOT NULL,
  `MOBILE` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `REFER` varchar(255) NOT NULL,
  `POST` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobregistration`
--

INSERT INTO `jobregistration` (`ID`, `NAME`, `DEGREE`, `MOBILE`, `EMAIL`, `REFER`, `POST`, `PASSWORD`) VALUES
(1, 'priya', 'it', '5823115522', 'priyakarn@gmail.com', 'himanshu', 'web developer', ''),
(8, 'shruti', 'it', '7879797978', 'shruti@gmail.com', 'himanshu', 'web developer', '123434343'),
(18, 'Anjali\r\n', 'it', '8368744279', 'priyakarn2000@gmail.com', 'ankita', 'web developer', ''),
(19, 'Himanshu Karn', 'CS', '454545454545', 'himanshu@gmail.com', 'vinod', 'business man', ''),
(20, 'Rachna karn ', 'NEET', '4564545454', 'rachna@gmail.com', 'Priya karn', 'Doctor', ''),
(21, 'Jitendra kumar lal', 'BCoM', '545454545', 'jitendra@gmail.com', 'Himanshu ', 'CA', ''),
(24, 'gitu', 'architecture', '78878787878', 'gitu@gmail.com', 'himanshu', 'architecture', ''),
(28, 'nancy ', 'bcom', '68787879', 'nancy@gmail.com', 'priya karn', 'CA', '12378478785'),
(31, 'avantika', 'it', '8368744279', 'priyakarn2000@gmail.com', 'himanshu', 'software developer', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Email`, `Password`) VALUES
(1, 'priyakarn2000@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ConfirmPassword` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`fname`, `lname`, `password`, `ConfirmPassword`, `email`) VALUES
('ankita', 'karn', 'ankita', 'ankita', 'ankitakarn04@gmail.com'),
('Priya Karn', 'karn', 'priya', 'priya', 'priyakarn2000@gmail.com'),
('himanshu', 'karn', 'himanshu', 'himanshu', 'himanshu@gmail.com'),
('rachna', 'karn', '$2y$10$Tep5gce.agpuBp6snYKjuuQ', '$2y$10$KGusebAmTjdLkCi2hwhLXuK', 'rachna@gmail.com'),
('shabnam', 'khatun', '$2y$10$z0dhCfIwG/tXfIeeAigVvea', '$2y$10$cq0A5WsSUoqGca0.eSOhGeo', 'shabnam@gmail.com'),
('shruti', 'kumari', '$2y$10$aU5hXY.MEP0AE7C6FHpQHuX', '$2y$10$qCFhgmLA0WZAB3RZykZJje8', 'shruti@gmail.com'),
('anjali', 'kumari', '$2y$10$zVvW1/.JdssuwziUBUTdqeZ', '$2y$10$t8O5VITPX/Ml2N4bhb.0lO0', 'anjali@gmail.com'),
('ambika', 'karn', '$2y$10$4WB5clzU6kMJfa217wDKIei', '$2y$10$h/.wVFKuc8Kp.YbzTGtRLey', 'ambika@gmail.com'),
('sonam', 'kumari', '$2y$10$nvk5mOEd4PIZ0ZXFWlRjx.0', '$2y$10$HnltZ23eMTKwrGoXr0k0dep', 'sonam@gmail.com'),
('lata', 'mangeshkar', '$2y$10$GJQ5IqvAxzdM1RrGDSV90um', '$2y$10$8cHo8CUS8xuCQdXP2n5lreG', 'lata@gmail.com'),
('jitendra kumar', 'lal', '$2y$10$ynEzStKCO2LdLK5ijsJbSO1', '$2y$10$9apoHqCVdFxfTCV.SniEee7', 'jitendra@gmail.com'),
('pooja', 'kumari', 'pooja', 'pooja', 'pooja@gmail.com'),
('vicky', 'verma', 'vicky', 'vicky', 'vicky@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Fname`, `Lname`, `Email`, `Password`, `Cpassword`) VALUES
(17, 'Himanshu', 'karn', 'himanshu@gmail.com', '1234', '1234'),
(19, 'Priya ', 'karn', 'priyakarn2000@gmail.com', '1234', '1234'),
(20, 'Rachna', 'Karn', 'rachna@gmail.com', '1234', '1234'),
(21, 'Sonam', 'Kumari', 'sonam@gmail.com', '1234', '1234'),
(22, 'krishna', 'kumar', 'krishna@gmail.com', '1234', '1234'),
(23, 'test', 'test', 'test@gmail.com', '897', '897');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `name` varchar(30) NOT NULL,
  `rno` int(23) NOT NULL,
  `class` varchar(30) NOT NULL,
  `p1` int(30) NOT NULL,
  `p2` int(30) NOT NULL,
  `p3` int(30) NOT NULL,
  `p4` int(30) NOT NULL,
  `p5` int(30) NOT NULL,
  `marks` int(30) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `rno`, `class`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES
('priya', 51, 'IT', 70, 78, 80, 75, 60, 0, 0),
('priya', 51, 'IT', 60, 87, 56, 70, 50, 323, 64.6),
('Anjali', 8, 'CS', 80, 78, 90, 87, 86, 421, 84.2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(30) NOT NULL,
  `rno` int(30) NOT NULL,
  `class_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `rno`, `class_name`) VALUES
('Anjali', 8, 'CS'),
('priya', 51, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `ID` int(30) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`ID`, `Image`) VALUES
(110, '10_maths_key_notes_ch_04_quadratic_equation.pdf'),
(111, '12_physics_notes_ch01_electric_charges_and_field.pdf'),
(112, 'EWS-ITWS  LAB MANUAL.pdf'),
(113, 'BHMAECC-II.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(4, 'user', 'user@gmail.com', 'user@1234', 67687687, 'hjdhfjhaj'),
(6, 'priya karn', 'priyakarn2000@gmail.com', '1234', 878257878, 'jgskjkhgkfjs'),
(7, 'test', 'test@gmail.com', '1234', 68698696, 'hjkhkjhjk'),
(8, 'test', 'priyakarn2000@gmail.com', '1234', 2147483647, 'G-159A, Jai vihar, Najafgarh, New-Delhi 43'),
(9, 'krishna', 'krishna@gmail.com', '1234', 2147483647, 'hjshkjfhksjhk'),
(10, 'krishna', 'krishna@gmail.com', '1234', 2147483647, 'hjshkjfhksjhk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `jobregistration`
--
ALTER TABLE `jobregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `at_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `issued_books`
--
ALTER TABLE `issued_books`
  MODIFY `s_no` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobregistration`
--
ALTER TABLE `jobregistration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
