-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 04:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `interview_schedule`
--

CREATE TABLE `interview_schedule` (
  `id` int(11) NOT NULL,
  `InterviewTitle` varchar(255) NOT NULL,
  `ListOfPeople` varchar(255) NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interview_schedule`
--

INSERT INTO `interview_schedule` (`id`, `InterviewTitle`, `ListOfPeople`, `StartTime`, `EndTime`) VALUES
(2, 'Interview 1', 'anand.pandey2702@gmail.com,ankitself9e@gmail.com', '2020-11-13 22:30:00', '2020-11-09 12:30:00'),
(60, 'Interview 8', 'anand.pandey2702@gmail.com,ankitself9e@gmail.com', '2020-11-30 06:54:00', '2020-12-10 01:54:00'),
(61, 'Interview 10', 'anand.pandey2702@gmail.com,ana2702nd@gmail.com', '2021-01-20 03:15:00', '2021-02-10 03:15:00'),
(62, 'Interview 10', 'anand.pandey2702@gmail.com,ana2702nd@gmail.com', '2021-01-20 03:16:00', '2021-02-10 03:15:00'),
(63, 'Hello there', 'anand.pandey2702@gmail.com,ankitself9e@gmail.com', '2021-01-01 03:18:00', '2021-01-03 03:18:00'),
(64, 'Hello there', 'anand.pandey2702@gmail.com,ankitself9e@gmail.com', '2021-01-01 03:18:00', '2021-01-03 03:18:00'),
(65, 'Heyy', 'anand.pandey2702@gmail.com,ana2702nd@gmail.com', '2021-04-15 03:20:00', '2021-04-16 03:20:00'),
(66, 'Heyy', 'anand.pandey2702@gmail.com,ana2702nd@gmail.com', '2021-04-15 03:20:00', '2021-04-16 03:20:00'),
(67, 'TVD', 'anand.pandey2702@gmail.com,ana2702nd@gmail.com', '2021-06-24 03:23:00', '2021-06-25 03:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Free_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `Free_at`) VALUES
('akshaygautam@gmail.com', 'Akshay', NULL),
('anand.pandey2702@gmail.com', 'Anand Kumar', NULL),
('ankitself9e@gmail.com', 'Ankit Sharma', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_interview_details`
--

CREATE TABLE `user_interview_details` (
  `email` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_interview_details`
--

INSERT INTO `user_interview_details` (`email`, `start`, `end`) VALUES
('anand.pandey2702@gmail.com', '2020-11-30 06:54:00', '2020-12-10 01:54:00'),
('ankitself9e@gmail.com', '2020-11-30 06:54:00', '2020-12-10 01:54:00'),
('anand.pandey2702@gmail.com', '2021-01-20 03:16:00', '2021-02-10 03:15:00'),
('ana2702nd@gmail.com', '2021-01-20 03:16:00', '2021-02-10 03:15:00'),
('anand.pandey2702@gmail.com', '2021-01-01 03:18:00', '2021-01-03 03:18:00'),
('ankitself9e@gmail.com', '2021-01-01 03:18:00', '2021-01-03 03:18:00'),
('anand.pandey2702@gmail.com', '2021-04-15 03:20:00', '2021-04-16 03:20:00'),
('ana2702nd@gmail.com', '2021-04-15 03:20:00', '2021-04-16 03:20:00'),
('anand.pandey2702@gmail.com', '2021-06-24 03:23:00', '2021-06-25 03:23:00'),
('ana2702nd@gmail.com', '2021-06-24 03:23:00', '2021-06-25 03:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interview_schedule`
--
ALTER TABLE `interview_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interview_schedule`
--
ALTER TABLE `interview_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
