-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 01:03 PM
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
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_master`
--

CREATE TABLE `calendar_event_master` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `calendar_event_master`
--

INSERT INTO `calendar_event_master` (`event_id`, `event_name`, `event_start_date`, `event_end_date`) VALUES
(1, 'Meeting', '2024-03-25', '2024-03-26'),
(2, 'Conference', '2024-04-01', '2024-04-03'),
(3, 'Birthday Party', '2024-04-10', '2024-04-10'),
(4, 'Seminar', '2024-04-15', '2024-04-16'),
(5, 'Workshop', '2024-04-20', '2024-04-22'),
(6, 'Training Session', '2024-04-25', '2024-04-27'),
(7, 'Product Launch', '2024-05-02', '2024-05-02'),
(8, 'Exhibition', '2024-05-10', '2024-05-12'),
(9, 'Team Building', '2024-05-15', '2024-05-16'),
(10, 'Networking Event', '2024-05-20', '2024-05-21'),
(11, 'birtday', '2024-02-28', '2024-02-29'),
(12, 'ntacom training', '2024-03-06', '2024-03-09'),
(13, 'workshop', '2024-02-28', '2024-02-29'),
(14, 'exam period', '2024-03-10', '2024-03-15'),
(15, 'ww', '2024-04-04', '2024-04-05'),
(16, 'natcom job', '2024-02-26', '2024-02-27'),
(17, 'vacance', '2024-02-29', '2024-03-03'),
(18, 'bbbb', '2024-03-29', '2024-03-06'),
(19, 'missing class', '2024-03-03', '2024-03-10'),
(20, 'workshop', '2024-02-27', '2024-02-28'),
(21, 'manzi wedding', '2024-05-05', '2024-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'edsnkvn', '1234', 'codewithediosn@gmail.com', '2024-03-23 06:30:05'),
(13, 'gatanazi011', '12234', 'gatanazi@gmail.com', '2024-03-23 07:11:18'),
(17, 'codewithedsn', 'qwerty', 'codemw@g.me', '2024-03-23 08:58:11'),
(18, 'datch', '.', 'gasanze@n.c', '2024-03-23 09:00:32'),
(19, 'edsn1', '1231', 'edsnkvn@gmail.com', '2024-03-23 09:00:59'),
(25, 'edsn', '1234', 'edsnkvn@gmail.com', '2024-03-24 18:15:34'),
(28, 'natcom', 'natcom', 'natcom@gmail.com', '2024-03-24 18:42:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
