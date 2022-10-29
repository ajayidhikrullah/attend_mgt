-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 08:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee_tb`
--

CREATE TABLE `attendee_tb` (
  `attendee_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `dob` datetime NOT NULL,
  `specialty_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `avatar_path` varchar(250) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendee_tb`
--

INSERT INTO `attendee_tb` (`attendee_id`, `firstname`, `lastname`, `dob`, `specialty_id`, `email`, `phone`, `avatar_path`, `users_id`) VALUES
(1, 'Sikiru', 'Ajayi', '2022-10-26 00:00:00', 1, 'ajayidhikrullah@gmail.com', '+447732774822', 'prof_uploads/+447732774822.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `specialty_tb`
--

CREATE TABLE `specialty_tb` (
  `specialty_id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialty_tb`
--

INSERT INTO `specialty_tb` (`specialty_id`, `name`) VALUES
(1, 'Project management');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`) VALUES
(1, 'Admin', 'a89e27a9a61ca3cc4cdbe2b77fc0e5bc'),
(2, 'Super-Admin', '2aef35c03c80d237bcc55b5ac287b726'),
(3, 'user', '4d45974e13472b5a0be3533de4666414');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee_tb`
--
ALTER TABLE `attendee_tb`
  ADD PRIMARY KEY (`attendee_id`);

--
-- Indexes for table `specialty_tb`
--
ALTER TABLE `specialty_tb`
  ADD PRIMARY KEY (`specialty_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendee_tb`
--
ALTER TABLE `attendee_tb`
  MODIFY `attendee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialty_tb`
--
ALTER TABLE `specialty_tb`
  MODIFY `specialty_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
