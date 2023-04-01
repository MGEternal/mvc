-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 05:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `tea_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `department`, `tea_id`) VALUES
(1, '软件S19-1', '软件', 1),
(3, '软件S19-21', '软件', 2),
(11, '机电S19-5', '机电', 3);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sche_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `tea_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sche_id`, `class_id`, `tea_id`, `subject`) VALUES
(0, 11, 3, 'Vue'),
(1, 1, 3, 'English'),
(3, 3, 2, 'JAVA'),
(6, 1, 1, 'Mysql');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tea_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tea_id`, `name`, `age`, `sex`, `tel`, `email`, `department`) VALUES
(1, 'lisu', 27, 'female', '142265847599', 'zaqwsx@qq.com', 'English'),
(2, 'Zhangsi', 38, 'male', '153364488796', 'xswqaz@qq.com', 'English'),
(3, '陈文利', 28, 'female', '126485236551', 'aiganline@gmail.com', '机电');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` varchar(5) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `class_id` varchar(30) DEFAULT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `age`, `sex`, `tel`, `email`, `class_id`, `user_type`) VALUES
(1, '1111', '111', '11', '11 ', 'female', '11111111', 'gmgame1020@gmail.com', '1', 'student'),
(6, 'admin', '12345678', 'Elon', '21', 'male', '142265847599', 'qwerrr@qq.com', '', 'admin'),
(7, 'aaaa', 'aaaaa', 'aaaa', '11 ', 'male', '1111', 'gmgame1020@outlook.com', '1', 'student'),
(8, '111', '11', '11', '11 ', 'male', '11', 'gmgame1020@gmail.com', '11', 'student'),
(10, '12', '12', '11', '11 ', 'male', '11', 'gmgame1020@gmail.com', '1', 'student'),
(11, 'ssss', 'sss', '11', '11 ', 'male', '11', 'gmgame1020@outlook.com', '3', 'student'),
(12, 'ssssff', 'ff', 'ff', '11 ', 'male', '11', 'gmgame1020@gmail.com', '3', 'student'),
(13, 'hdf', 'fgdf', 'dgdfg', '36 ', 'male', '532', 'gmgame1020@outlook.com', '11', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sche_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tea_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sche_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
