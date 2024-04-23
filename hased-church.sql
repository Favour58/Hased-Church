-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 12:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hased-church`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutimage`
--

CREATE TABLE `aboutimage` (
  `id` int(11) NOT NULL,
  `aboutimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutimage`
--

INSERT INTO `aboutimage` (`id`, `aboutimage`) VALUES
(1, 0x7365726965732d323030302e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `userName` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `userName`, `password`) VALUES
(1, 'hasedchurch_', 'passtor');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Favour Obigba', 'favourobigba@gmail.com', '099999999999999', 'jhhjdcmmdndnma,ma,sm,,m');

-- --------------------------------------------------------

--
-- Table structure for table `daat_bible_school`
--

CREATE TABLE `daat_bible_school` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `courses` varchar(1000) NOT NULL,
  `duration` varchar(1000) NOT NULL,
  `questions` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daat_bible_school`
--

INSERT INTO `daat_bible_school` (`id`, `name`, `email`, `phone`, `courses`, `duration`, `questions`) VALUES
(1, 'Favour Obigba', 'favourobigba@gmail.com', '9999999999999', 'Administrative Support', '>Part-time', 'wyd?'),
(3, 'Favour Obigba', 'favourobigba@gmail.com', '09999999999999999', 'Prayer Team', '>Part-time', 'hhhy?');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventTitle` varchar(1000) NOT NULL,
  `msg` varchar(3000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventTitle`, `msg`, `date`, `time`, `location`) VALUES
(1, 'Prayer Team.', 'Ullam tenetur ipsa et ratione nihil doloribus harum quas cupiditate. Minus sunt sequi sed minus est qui. Rerum molestias iusto. Sapiente consectetur nihil recusandae perferendis in magni perspiciatis at. Non modi ratione. Sit quaerat eaque sint. Eius natus inventore eveniet hic architecto tempora.', 'monday june 4th 2014', '8:45 - 9:50', '1600 Amphitheatre Parkway Mountain View, California 94043 US');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE `homeimage` (
  `id` int(11) NOT NULL,
  `homeimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `homeimage`) VALUES
(1, 0x6865726f2d62672d333030302e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutimage`
--
ALTER TABLE `aboutimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daat_bible_school`
--
ALTER TABLE `daat_bible_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutimage`
--
ALTER TABLE `aboutimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daat_bible_school`
--
ALTER TABLE `daat_bible_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
