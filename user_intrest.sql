-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 04:42 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_intrest`
--

CREATE TABLE `user_intrest` (
  `in_id` int(2) NOT NULL,
  `intrest` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_intrest`
--

INSERT INTO `user_intrest` (`in_id`, `intrest`, `status`) VALUES
(1, 'Acting', 1),
(2, 'Archeology', 1),
(3, 'Archery', 1),
(4, 'Architecture', 1),
(5, 'Art', 1),
(6, 'Arts & Crafts', 1),
(7, 'Astronomy', 1),
(8, 'Backpacking', 1),
(9, 'Band', 1),
(10, 'Baseball', 1),
(11, 'Basketball', 1),
(12, 'Bird Watching', 1),
(13, 'Bowling', 1),
(14, 'Camping', 1),
(15, 'Canoeing', 1),
(16, 'Cards', 1),
(17, 'Cars', 1),
(18, 'Carving', 1),
(19, 'Chess', 1),
(20, 'Cleaning', 1),
(21, 'Collecting', 1),
(22, 'Computer Activites', 1),
(23, 'Cooking', 1),
(24, 'Dancing', 1),
(25, 'Decorating', 1),
(26, 'Design', 1),
(27, 'Dioramas', 1),
(28, 'Doing Good', 1),
(29, 'Drinking', 1),
(30, 'Driving', 1),
(31, 'Eating', 1),
(32, 'Exploring', 1),
(33, 'Family Time', 1),
(34, 'Fantasy Time', 1),
(35, 'Fantasy Football', 1),
(36, 'Fashion', 1),
(37, 'Firewoks/Pyro Staff', 1),
(38, 'Fishing', 1),
(39, 'Football', 1),
(40, 'Gambling', 1),
(41, 'Gardening', 1),
(42, 'Golf', 1),
(43, 'Hiking', 1),
(44, 'Hunting', 1),
(45, 'Jewellery Making', 1),
(46, 'Knitting', 1),
(47, 'Listening to music', 1),
(48, 'Metal Work', 1),
(49, 'Paintball', 1),
(50, 'Party Planning', 1),
(51, 'Photography', 1),
(52, 'Playing Sports', 1),
(53, 'Poker', 1),
(54, 'Racing', 1),
(55, 'Reading', 1),
(56, 'Sewing', 1),
(57, 'Shopping', 1),
(58, 'Shopping', 1),
(59, 'Skiing', 1),
(60, 'Sleeping', 1),
(61, 'Snowboarding', 1),
(62, 'Soccer', 1),
(63, 'Studying', 1),
(64, 'Tennis', 1),
(65, 'Traveling', 1),
(66, 'Video Games', 1),
(67, 'Watching TV', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_intrest`
--
ALTER TABLE `user_intrest`
  ADD PRIMARY KEY (`in_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_intrest`
--
ALTER TABLE `user_intrest`
  MODIFY `in_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
