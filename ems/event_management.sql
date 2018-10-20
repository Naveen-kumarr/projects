-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 11:18 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `registration_id` int(100) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone_no` bigint(12) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`registration_id`, `first_name`, `middle_name`, `last_name`, `dob`, `gender`, `father_name`, `mother_name`, `email`, `password`, `phone_no`, `qualification`, `country`) VALUES
(1, 'Naveen', '', 'srivastav', '1997-03-29', 'Male', 'Raman kumar', 'Poonam srivastava', 'naveen29395@gmail.com', '', 2147483647, 'B.E', 'none'),
(2, 'Naveen', '', 'srivastav', '1997-03-29', 'Male', 'Raman kumar', 'Poonam srivastava', 'naveen29395@gmail.com', '', 2147483647, 'B.E', 'canada'),
(3, 'Naveen', '', 'srivastav', '1997-03-29', 'Male', 'Raman kumar', 'Poonam srivastava', 'naveen29395@gmail.com', 'naveenrock', 8370056324, 'B.E', 'australia'),
(4, 'nandan', 'kumar', 'burnawal', '1997-03-29', 'Male', 'akb', 'ad', 'menandan1995@gmail.com', 'nandan', 8370056324, 'B.E', 'australia'),
(5, 'NAVEEN', '', 'SRIVASTAV', '1997-03-29', 'Male', 'RAMAN KUMAR', 'POONAM SRIVASTAV', 'naveen29395@gmail.com', 'naveen123', 8370056324, 'B.E', 'australia');

-- --------------------------------------------------------

--
-- Table structure for table `event1`
--

CREATE TABLE `event1` (
  `id` int(100) NOT NULL,
  `event_type` int(10) NOT NULL,
  `your_name` varchar(20) NOT NULL,
  `club_name` varchar(40) NOT NULL,
  `music_grp_name` varchar(40) NOT NULL,
  `contact_no` bigint(12) NOT NULL,
  `game_name` varchar(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL,
  `booking_date` date NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event1`
--

INSERT INTO `event1` (`id`, `event_type`, `your_name`, `club_name`, `music_grp_name`, `contact_no`, `game_name`, `email_id`, `address`, `booking_date`, `created_date`, `created_by`) VALUES
(15, 1, 'Naveen', '', '', 8370056324, '', 'naveen29395gmail.com', 'telco', '2015-02-19', '0000-00-00', ''),
(7, 2, 'NAVEEN', '', '', 8370056324, '', 'naveen29395@gmail.com', 'bistupur', '2015-02-19', '0000-00-00', ''),
(10, 3, 'NAVEEN', '', '', 123, '', 'naveen29395@gmail.com', 'sakchi', '2015-02-19', '0000-00-00', ''),
(11, 4, 'Naveen', '', '', 8370056324, '', 'naveen29395@gmail.com', 'bistupur', '2015-02-19', '0000-00-00', ''),
(8, 5, 'Naveen', 'NAVEEN', '', 8370056324, 'telco', '', 'telco', '2015-02-19', '0000-00-00', ''),
(9, 6, 'Naveen', '', 'MSC', 8370056324, '', '', 'bistupur', '2015-02-19', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `event_type` int(10) NOT NULL,
  `your_name` varchar(20) NOT NULL,
  `club_name` varchar(40) NOT NULL,
  `music_grp_name` varchar(40) NOT NULL,
  `contact_no` bigint(12) NOT NULL,
  `game_name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `booking_date` date NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_type`, `your_name`, `club_name`, `music_grp_name`, `contact_no`, `game_name`, `email_id`, `address`, `booking_date`, `created_date`, `created_by`) VALUES
(1, 0, 'NAVEEN', '', '', 8370056324, '', 'naveen29395@gmail.co', 'sakchi', '2015-02-19', '0000-00-00', ''),
(2, 0, 'Naveen', '', '', 8370056324, '', 'naveen29395gmail.com', 'bistupur', '2015-02-19', '0000-00-00', ''),
(3, 0, 'NAVEEN', '', '', 8370056324, '', 'naveen29395@gmail.co', 'bistupur', '2015-02-19', '0000-00-00', ''),
(4, 0, 'Naveen', '', '', 8370056324, '', 'naveen29395@gmail.co', 'kadma', '2015-02-19', '0000-00-00', ''),
(5, 0, 'Naveen', 'MCC', '', 8370056324, 'kadma', '', 'kadma', '2015-02-19', '0000-00-00', ''),
(6, 0, 'Naveen', '', 'MSC', 8370056324, '', '', 'govindpur', '2015-02-19', '0000-00-00', ''),
(7, 0, 'Naveen srivastav', '', 'MSC', 8370056324, '', '', 'adityapur', '2015-02-19', '0000-00-00', ''),
(8, 0, 'Naveen srivastav', '', 'MSC', 8370056324, '', '', 'adityapur', '2015-02-19', '0000-00-00', ''),
(9, 1, 'Naveen', '', '', 8370056324, '', 'naveen29395gmail.com', 'telco', '2015-02-19', '0000-00-00', ''),
(10, 1, 'Naveen', '', '', 123, '', 'naveen29395gmail.com', 'sakchi', '2015-02-19', '0000-00-00', ''),
(11, 2, 'NAVEEN', '', '', 8370056324, '', 'naveen29395@gmail.co', 'kadma', '2015-02-19', '0000-00-00', ''),
(12, 5, 'Naveen', 'NAVEEN', '', 123, 'sakchi', '', 'sakchi', '2015-02-19', '0000-00-00', ''),
(13, 5, 'Naveen', 'MCC', '', 8370056324, 'cricket', '', 'sakchi', '2015-02-19', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `event1`
--
ALTER TABLE `event1`
  ADD PRIMARY KEY (`event_type`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `registration_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event1`
--
ALTER TABLE `event1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
