-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 06:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallmanagement`
--
DROP DATABASE IF EXISTS `hallmanagement`;
CREATE DATABASE IF NOT EXISTS `hallmanagement` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hallmanagement`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hostel_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sn`, `name`, `username`, `password`, `hostel_no`) VALUES
(3, 'Aroshi Ali', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hall_bill`
--

CREATE TABLE `hall_bill` (
  `sn` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `hostel_no` int(11) NOT NULL,
  `mess_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hall_staff`
--

CREATE TABLE `hall_staff` (
  `sn` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `nid` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `hostel_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `sn` int(11) NOT NULL,
  `hostel_no` int(11) NOT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `no_of_rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`sn`, `hostel_no`, `hostel_name`, `no_of_rooms`) VALUES
(1, 1, 'Birprotik Taraman Bibi Hall', 300);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `sn` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `seat_available` int(11) NOT NULL,
  `hostel_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`sn`, `room_no`, `seat_available`, `hostel_no`) VALUES
(2, 101, 4, 1),
(3, 102, 4, 1),
(4, 103, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sn` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `room_no` int(11) DEFAULT NULL,
  `hostel_no` int(11) DEFAULT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sn`),
  ADD KEY `hostel_no` (`hostel_no`);

--
-- Indexes for table `hall_bill`
--
ALTER TABLE `hall_bill`
  ADD PRIMARY KEY (`sn`),
  ADD KEY `student_id` (`student_id`,`hostel_no`),
  ADD KEY `bill_of_hostel` (`hostel_no`);

--
-- Indexes for table `hall_staff`
--
ALTER TABLE `hall_staff`
  ADD PRIMARY KEY (`sn`),
  ADD KEY `hostel_no` (`hostel_no`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `hostel_no` (`hostel_no`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `room_no` (`room_no`),
  ADD KEY `hostel_no` (`hostel_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `hostel_no` (`hostel_no`),
  ADD KEY `strudent_of_room` (`room_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hall_bill`
--
ALTER TABLE `hall_bill`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall_staff`
--
ALTER TABLE `hall_staff`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_of_hostel` FOREIGN KEY (`hostel_no`) REFERENCES `hostel` (`hostel_no`);

--
-- Constraints for table `hall_bill`
--
ALTER TABLE `hall_bill`
  ADD CONSTRAINT `bill_of_hostel` FOREIGN KEY (`hostel_no`) REFERENCES `hostel` (`hostel_no`),
  ADD CONSTRAINT `bill_of_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `hall_staff`
--
ALTER TABLE `hall_staff`
  ADD CONSTRAINT `staff_of_hostel` FOREIGN KEY (`hostel_no`) REFERENCES `hostel` (`hostel_no`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_of_hostel` FOREIGN KEY (`hostel_no`) REFERENCES `hostel` (`hostel_no`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `strudent_of_room` FOREIGN KEY (`room_no`) REFERENCES `room` (`room_no`),
  ADD CONSTRAINT `student_of_hostel` FOREIGN KEY (`hostel_no`) REFERENCES `hostel` (`hostel_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
