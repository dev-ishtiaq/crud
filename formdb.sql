-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 11:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `sl` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `comm` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`sl`, `title`, `comm`, `time`) VALUES
(1, 'Alpha', 'Writting Alphabet A B C', '2023-08-20 01:10:09'),
(2, 'Fruits', 'It\'s very healthy for us.', '2023-08-20 01:49:59'),
(4, 'Frog', 'Its a sorisrip', '2023-08-21 00:49:58'),
(5, 'j2', 'hgjgj2', '2023-08-21 00:49:20'),
(6, 'Programming', 'IM practicing PHP Programming language.', '2023-08-21 01:11:03'),
(8, 'BFB', 'Its a random', '2023-08-21 01:40:37'),
(12, 'ddd', 'dssss', '2023-08-21 01:53:28'),
(13, '', '', '2023-08-23 02:25:35'),
(14, '', '', '2023-08-23 02:32:21'),
(15, '', '', '2023-08-23 02:32:23'),
(16, '', '', '2023-08-23 02:32:25'),
(17, '', '', '2023-08-23 02:32:33'),
(18, '', '', '2023-08-23 02:37:37'),
(19, '', '', '2023-08-23 02:37:41'),
(20, '', '', '2023-08-23 02:38:46'),
(21, '', '', '2023-08-23 02:44:19'),
(22, '', '', '2023-08-23 02:44:36'),
(23, '', '', '2023-08-23 02:57:50'),
(24, '', '', '2023-08-23 02:58:10'),
(25, '', '', '2023-08-23 03:00:44'),
(26, '', '', '2023-08-23 03:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `fname`, `lname`, `username`, `email`, `password`, `date`) VALUES
(1, 'Ishtiaq', 'Ahmed', 'ishtiaq', 'ahmedishti50@gmail.com', '$2y$04$xLmgENrd9sdeG7aCV3/P5ufPHOOZejKkBWeIO9ufxh3SbxZMkLOl6', '2023-08-03'),
(6, 'Ishtiaq', 'Ahmed', 'ishti2', 'ahmedishti50@gmail.com', '$2y$04$5Ku/Dr1LWj0eqQNn23ZB6u4MxK0NtUVC214rUo9QSAmfWmhttC8x6', '2023-08-04'),
(30, 'Hasan', 'Mahmud', 'hello dear...', 'hasan23@gmail.com', '12124AAdf', '2023-08-16'),
(31, 'Hasan', 'Mahmud', 'hello dear...', 'hasan23@gmail.com', '12124AAdf', '2023-08-16'),
(32, 'Hasan', 'Mahmud', 'hello dear...', 'hasan23@gmail.com', '12124AAdf', '2023-08-16'),
(33, 'Hasan', 'Mahmud', 'hello dear...', 'hasan23@gmail.com', '12124AAdf', '2023-08-16'),
(34, 'Hasan', 'Mahmud', 'hello dear...', 'hasan23@gmail.com', '12124AAdf', '2023-08-16'),
(35, 'Hasan', 'Mahmud', 'hello dear...', 'hasan23@gmail.com', '12124AAdf', '2023-08-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
