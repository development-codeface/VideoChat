-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 04:22 PM
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
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed_like`
--

CREATE TABLE `feed_like` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feed_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_like`
--

INSERT INTO `feed_like` (`id`, `user_id`, `feed_id`) VALUES
(1, 1, 11),
(2, 9, 10),
(5, 9, 13),
(6, 17, 17),
(7, 17, 16),
(8, 17, 15),
(9, 32, 29),
(10, 17, 30),
(11, 18, 30),
(12, 22, 30);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `status`) VALUES
(14, 5, 1, 1),
(15, 1, 5, 1),
(16, 9, 1, 1),
(17, 1, 9, 1),
(18, 11, 9, 0),
(19, 10, 9, 0),
(20, 5, 9, 0),
(21, 12, 9, 1),
(22, 9, 13, 1),
(23, 13, 9, 1),
(24, 1, 13, 1),
(25, 13, 1, 1),
(26, 1, 13, 1),
(27, 13, 1, 1),
(28, 2, 9, 0),
(29, 9, 14, 1),
(30, 14, 9, 1),
(31, 15, 9, 1),
(32, 9, 15, 1),
(33, 9, 12, 1),
(34, 1, 12, 0),
(35, 2, 12, 0),
(36, 14, 12, 0),
(37, 5, 12, 0),
(38, 16, 9, 0),
(39, 18, 17, 1),
(40, 16, 17, 0),
(41, 17, 18, 1),
(42, 18, 19, 1),
(43, 19, 18, 1),
(44, 21, 20, 1),
(45, 20, 21, 1),
(46, 17, 22, 1),
(47, 22, 17, 1),
(48, 1, 22, 0),
(49, 21, 22, 0),
(50, 20, 22, 0),
(51, 19, 22, 0),
(52, 24, 17, 1),
(53, 17, 24, 1),
(54, 27, 28, 1),
(55, 28, 27, 1),
(56, 22, 34, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hide_post`
--

CREATE TABLE `hide_post` (
  `hd_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `feed_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hide_post`
--

INSERT INTO `hide_post` (`hd_id`, `user_id`, `feed_id`) VALUES
(21, 22, 36);

-- --------------------------------------------------------

--
-- Table structure for table `online_user`
--

CREATE TABLE `online_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `logged_time` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `logout_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_user`
--

INSERT INTO `online_user` (`id`, `user_id`, `logged_time`, `status`, `logout_time`) VALUES
(32, 1, '2018-08-01 12:38:34', 1, NULL),
(33, 5, '2018-08-01 12:50:29', 1, NULL),
(34, 9, '2018-08-01 14:33:24', 1, NULL),
(35, 13, '2018-08-01 16:16:31', 1, NULL),
(36, 14, '2018-08-09 14:47:46', 1, NULL),
(37, 15, '2018-08-09 15:19:59', 1, NULL),
(38, 12, '2018-08-09 16:10:22', 1, NULL),
(39, 8, '2018-08-13 14:31:29', 1, NULL),
(40, 16, '2018-08-28 16:21:36', 1, NULL),
(41, 17, '2018-09-04 15:16:48', 0, '2018-09-19 18:47:45'),
(42, 18, '2018-09-04 16:49:40', 0, '2018-09-17 11:56:28'),
(43, 19, '2018-09-05 11:15:22', 0, '2018-09-05 11:17:31'),
(44, 20, '2018-09-05 12:00:44', 0, '2018-09-05 12:25:22'),
(45, 21, '2018-09-05 12:01:18', 0, '2018-09-05 12:26:09'),
(46, 22, '2018-09-07 10:16:30', 1, NULL),
(47, 23, NULL, 0, '2018-09-11 09:42:46'),
(48, 24, NULL, 0, '2018-09-19 18:38:12'),
(49, 25, NULL, 0, '2018-09-13 14:56:52'),
(50, 27, NULL, 0, '2018-09-14 18:34:06'),
(51, 28, NULL, 1, NULL),
(52, 31, NULL, 0, '2018-09-17 11:56:09'),
(53, 32, NULL, 0, '2018-09-17 10:39:00'),
(54, 33, NULL, 0, '2018-09-18 12:48:17'),
(55, 34, NULL, 0, '2018-09-19 17:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `profile_visit`
--

CREATE TABLE `profile_visit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `visited_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_visit`
--

INSERT INTO `profile_visit` (`id`, `user_id`, `visitor_id`, `visited_at`) VALUES
(24, 2, 1, '2018-07-28 13:02:41'),
(31, 5, 1, '2018-07-28 13:11:42'),
(32, 9, 1, '2018-08-01 12:03:38'),
(59, 1, 9, '2018-08-01 16:06:43'),
(82, 13, 1, '2018-08-01 16:23:26'),
(99, 13, 9, '2018-08-01 18:54:57'),
(100, 14, 9, '2018-08-09 15:25:42'),
(109, 15, 9, '2018-08-09 15:28:41'),
(119, 9, 12, '2018-08-09 16:13:48'),
(136, 12, 9, '2018-08-28 16:23:59'),
(137, 18, 17, '2018-09-04 17:43:05'),
(138, 24, 17, NULL),
(139, 11, 28, '2018-09-14 18:17:59'),
(140, 22, 17, '2018-09-18 12:48:53'),
(141, 17, 22, '2018-09-18 14:16:36'),
(142, 22, 22, '2018-09-18 16:55:13'),
(143, 17, 17, '2018-09-19 17:15:41'),
(144, 17, 24, '2018-09-19 18:37:02'),
(145, 24, 22, '2018-09-19 18:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `fb_id` varchar(255) DEFAULT NULL,
  `twitter_id` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `session_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `user_name`, `password`, `gender`, `mobile`, `fb_id`, `twitter_id`, `status`, `created_at`, `session_id`) VALUES
(1, 'Ramachandran k', 'ram@gmail.com', 'ram', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '1234', '', '', 1, '2018-07-23 20:51:59', NULL),
(2, 'tester', 'sk@s.com', 'test', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(3, 'tester1', 'sk1@s.com', 'test1', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(4, 'tester2', 'sk2@s.com', 'test2', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(5, 'tester3', 'sk3@s.com', 'test3', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(6, 'tester4', 'sk4@s.com', 'test4', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(7, 'tester5', 'sk5@s.com', 'test5', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(8, 'jaison', 'jaisongeorgephilip@gmail.com', 'ja', 'c332903a80e5f83500c760326603fc8a', 0, '918501933395', NULL, NULL, 1, '2018-07-30 20:54:56', NULL),
(9, 'abhi', 'abhi@gmail.com', 'abhi', '167784d36ab99e49738fe6a6a98798b7', 0, '1234567893', NULL, NULL, 1, '2018-07-30 22:13:48', NULL),
(10, 'irshad', 'irshadillias@gmail.com', 'irshadillias', '583d8c3bc38a14fa7e6c8ab317dd6c1a', 0, '8714488419', NULL, NULL, 1, '2018-07-31 23:36:32', NULL),
(11, 'FebinJoy', 'febin@febinjoy.com', 'FebinJoy', 'fc75b1b545dc48232c30685f6eaba5ed', 0, '9567224808', NULL, NULL, 1, '2018-08-01 00:05:32', NULL),
(12, 'sajith', 'sajithsmgodwin@gmail.com', 'sajith', '8848718ee97fa510d2f4985892193c20', 0, '9597097129', NULL, NULL, 1, '2018-08-01 15:19:38', NULL),
(13, 'abcd', 'abcd@gmail.com', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 0, '1212', NULL, NULL, 1, '2018-08-01 16:16:22', NULL),
(14, 'samabhi', 'abhisam@gmail.com', 'samabhi', '202cb962ac59075b964b07152d234b70', 0, '9656566356', NULL, NULL, 1, '2018-08-09 14:47:01', NULL),
(15, 'codeface', 'codeface@gmail.com', 'code', 'c13367945d5d4c91047b3b50234aa7ab', 0, '12', NULL, NULL, 1, '2018-08-09 15:19:38', NULL),
(16, 'name', 'email@e.com', 'name', 'e10adc3949ba59abbe56e057f20f883e', 0, '2222', NULL, NULL, 1, '2018-08-28 16:21:28', NULL),
(17, 'der', 'derin@gmail.com', 'der', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0, '8089245010', NULL, NULL, 1, '2018-09-04 15:13:24', '2_MX40NjE2MzI5Mn5-MTUzNjIzNzM5NzYyOX4wdk1IVE1oVGZxV2tHMVNVam5vUW1oVmx-fg'),
(18, 'manu', 'manu@gmail.com', 'manu', '25d55ad283aa400af464c76d713c07ad', 0, '78878778878787', NULL, NULL, 1, '2018-09-04 16:49:27', '2_MX40NjE2MzI5Mn5-MTUzNjIzNzQ5NTA4Mn54MUxxN1BJbUhzMGhqV04wQkZId29MbWx-fg'),
(19, 'abc', 'abc@gmail.com', 'qqq', '25d55ad283aa400af464c76d713c07ad', 0, '12345678', NULL, NULL, 1, '2018-09-05 11:15:12', '2_MX40NjE2MzI5Mn5-MTUzNjEyNjM3ODMyOX41RHA5L1ZVT3NLV0xOWHhuVWhSSTR5L0J-fg'),
(20, 'raja', 'raja@gmail.com', 'raja', '25d55ad283aa400af464c76d713c07ad', 0, '8089245010', NULL, NULL, 1, '2018-09-05 12:00:32', '2_MX40NjE2MzI5Mn5-MTUzNjEyOTAzODMyOH5mYTRoNVY2cjJORm02TGlVM2N5MW1DZ2h-fg'),
(21, 'rani', 'rani@gmail.com', 'rani', '25d55ad283aa400af464c76d713c07ad', 0, '8089245010', NULL, NULL, 1, '2018-09-05 12:01:07', '2_MX40NjE2MzI5Mn5-MTUzNjEyOTA3MjE3NX5JWERmbVNlRUxldXdDTDliQnIyZnliYTl-fg'),
(22, 'alp', 'all@gmail.com', 'alp', '25d55ad283aa400af464c76d713c07ad', 2, '87878878787', NULL, NULL, 1, '2018-09-07 10:14:38', '2_MX40NjE2MzI5Mn5-MTUzNjI5NTU3OTI5Nn5tK0k0Mmc1aG95OXRuY3h1Y1NuY3M5RER-fg'),
(23, 'dell', 'dell@gmail.com', 'dell', '25d55ad283aa400af464c76d713c07ad', 0, '8089245010', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjYzNzMyODQ1NH42eUc0U3J0a3hnVUpmTmU4TUZxY05Wcm1-fg'),
(24, 'rem', 'rem@gmail.com', 'rem', '25d55ad283aa400af464c76d713c07ad', 0, '787887887878', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjgxNTU2NjAzMH4xMTFRYzE1c0ptYWVOTFZTV24zM0d5OGJ-fg'),
(25, 'bijo', 'bijo@mail.com', 'bijo', '25d55ad283aa400af464c76d713c07ad', 1, '57637567756', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjgyMTg0OTkxOH56Y1RsUFV2aTFvZzFoZFVLcTNJMW02NGF-fg'),
(26, 'vbvb', 'dfh@mail.comyh', '55', '949be6221e0a43f9a1f3725c7ae52bec', 2, '45767575', NULL, NULL, 1, NULL, NULL),
(27, 'alphnse', 'apll@djhjd.com', 'alphnse', '25d55ad283aa400af464c76d713c07ad', 2, '5456456456', NULL, NULL, 1, NULL, '2_MX40NjE2MzI5Mn5-MTUzNjgyOTI0MTI5Mn5QSUxDQlZ3SWh4Q0F5ZVVGSFoxdXdpNG9-fg'),
(28, 'derin', 'der@xdgd.com', 'derin', '25d55ad283aa400af464c76d713c07ad', 1, '789797899', NULL, NULL, 1, '2018-09-14 18:16:18', '1_MX40NjE2MzI5Mn5-MTUzNjkyOTE5NTc5NX5VUkNuU2hNMUpoZmR0Zkc3WlBLUmZJZG9-fg'),
(29, 'rt', 'rttt@cghcfj', 'rt', '25d55ad283aa400af464c76d713c07ad', 1, '78987978789', NULL, NULL, 1, '2018-09-14 18:37:18', NULL),
(30, 'sa', 'cfemp08wd@gmail.com', 'kuttu', '363ab055963fb24eff2cfc02437ec228', 1, '76898090980', NULL, NULL, 1, '2018-09-14 18:59:52', NULL),
(31, 'abc', 'hderin@gmail.com', 'ooo', '25d55ad283aa400af464c76d713c07ad', 2, '5447477564', NULL, NULL, 1, '2018-09-14 19:46:08', '2_MX40NjE2MzI5Mn5-MTUzNjkzNDU4MTI1N35QSVRYSzltWWRqbE00SHRJSjhKTUdHRjJ-fg'),
(32, 'anja', 'anja@mail.com', 'anjaly', '25d55ad283aa400af464c76d713c07ad', 2, '8089245010', NULL, NULL, 1, '2018-09-17 09:41:17', '1_MX40NjE2MzI5Mn5-MTUzNzE1NzQ4NTA3M35OVktMQzlDUXNRb05NZXZOWVFsTno1dyt-fg'),
(33, 'fgfg', 'fgdf@gmail.com', 'lal', '25d55ad283aa400af464c76d713c07ad', 1, '34366634', NULL, NULL, 1, '2018-09-18 12:38:48', '1_MX40NjE2MzI5Mn5-MTUzNzI1NDU0MjUzMX45Qms5MGZ6TXB2WVJLSUJGdzAyWUVPcHl-fg'),
(34, 'don', 'deon@gmail.com', 'don', 'e10adc3949ba59abbe56e057f20f883e', 1, '987456123', NULL, NULL, 1, '2018-09-19 16:33:58', '1_MX40NjE2MzI5Mn5-MTUzNzM1NTAyNzM4NH4zMUMyOEw0aGQrOWI0VWJZbnlBOWFLUWh-fg'),
(35, 'dd', 'cfeddmp08d@gmail.com', '12', '3a08fe7b8c4da6ed09f21c3ef97efce2', 1, '12354534', NULL, NULL, 1, '2018-09-19 18:03:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_feed`
--

CREATE TABLE `user_feed` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feeds` text NOT NULL,
  `no_likes` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_feed`
--

INSERT INTO `user_feed` (`id`, `user_id`, `feeds`, `no_likes`, `status`, `created_at`) VALUES
(10, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ... The first word, “Lorem,” isn\'t even a word; instead it\'s a piece of the word “dolorem,” meaning pain, suffering, or sorrow', 1, 1, '2018-08-07 23:32:05'),
(11, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ... The first word, “Lorem,” isn\'t even a word; instead it\'s a piece of the word “dolorem,” meaning pain, suffering, or sorrow.Mar', 1, 1, '2018-08-07 23:32:05'),
(13, 12, 'sajith text', 1, 1, '2018-08-09 16:10:42'),
(14, 9, 'eegrgrvrhrhrh', 0, 1, '2018-08-13 14:43:17'),
(15, 18, 'text\r\n', 1, 0, '2018-09-04 16:52:23'),
(16, 22, 'cfgcfh', 1, 0, '2018-09-07 11:13:01'),
(17, 22, 'cghfgh', 1, 0, '2018-09-07 11:28:58'),
(18, 23, 'hai', 0, 1, NULL),
(26, 17, 'rtgdtd', 0, 0, NULL),
(29, 32, 'gfd', 1, 1, '2018-09-17 10:32:29'),
(36, 22, 'gdrgdfuu', 0, 1, '2018-09-19 16:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_photos`
--

CREATE TABLE `user_photos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_photos`
--

INSERT INTO `user_photos` (`id`, `user_id`, `file_name`, `create_at`, `status`) VALUES
(1, 17, 'Chrysanthemum.jpg', '2018-09-14 16:34:57', 1),
(2, 17, 'Chrysanthemum.jpg', '2018-09-14 16:52:10', 1),
(3, 17, 'fbcp2.jpg', '2018-09-14 16:52:43', 1),
(4, 17, 'Koala.jpg', '2018-09-14 17:58:00', 1),
(5, 27, 'Hydrangeas.jpg', '2018-09-14 18:09:35', 0),
(6, 17, 'Penguins.jpg', '2018-09-17 09:35:37', 1),
(7, 32, 'Chrysanthemum.jpg', '2018-09-17 09:46:16', 0),
(8, 17, 'Tulips.jpg', '2018-09-19 14:52:06', 1),
(9, 17, 'Hydrangeas.jpg', '2018-09-19 14:52:39', 1),
(10, 17, 'Tulips.jpg', '2018-09-19 14:52:48', 1),
(11, 17, 'download.jpg', '2018-09-19 15:00:45', 1),
(12, 17, 'download (2).jpg', '2018-09-19 15:00:59', 1),
(13, 17, 'download (1).jpg', '2018-09-19 15:01:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `visibility` varchar(255) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `description` text,
  `address` text,
  `country_id` varchar(255) DEFAULT NULL,
  `interest_area` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `gender`, `dob`, `visibility`, `nick_name`, `profile_pic`, `cover_photo`, `description`, `address`, `country_id`, `interest_area`, `created_at`) VALUES
(1, 2, 2, '', 'true', 'tesr', NULL, NULL, 'testing', NULL, NULL, NULL, '2018-07-24 13:56:25'),
(3, 1, 2, '2018-07-11', 'true', 'ramu', NULL, 'company-cover.jpg', 'Testing Make sense means perfects', 'Perumkadavila', 'India', 'Boy', '2018-07-24 14:40:39'),
(4, 3, 2, '', 'false', 'Tester', NULL, NULL, 'testing purpose', NULL, 'India', NULL, '2018-07-24 14:40:51'),
(5, 5, 1, NULL, 'true', NULL, NULL, NULL, NULL, NULL, 'India', NULL, '2018-07-24 14:40:51'),
(6, 8, 1, '10/04/1987', 'false', 'hhhh', NULL, NULL, NULL, 'asas', 'Country', NULL, '2018-07-30 20:54:56'),
(7, 9, 1, '2018-08-05', 'true', 'sam123', '75b6533d-1537-4b6f-bc16-b1944d467715.jpg', '01_(1).jpg', 'jbsafhgafgjabfbjgafm', 'kerala', 'Kazakhstan', 'Boy', '2018-07-30 22:13:48'),
(8, 10, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-31 23:36:32'),
(9, 11, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 00:05:32'),
(10, 12, NULL, NULL, 'true', NULL, 'about-absolute.png', NULL, NULL, NULL, NULL, NULL, '2018-08-01 15:19:38'),
(11, 13, 1, '', 'false', 'abcd1', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 16:16:22'),
(12, 14, 2, '2018-08-17', 'true', 'samual', NULL, NULL, 'hfhghbnhgvbnvhgjhjhjmbmjhk', 'keral', 'India', NULL, '2018-08-09 14:47:01'),
(13, 15, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-09 15:19:38'),
(14, 16, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-28 16:21:28'),
(15, 17, 1, '2018-09-05', 'false', 'der', 'm-img4.png', 'download (7).jpg', 'dgdgdfgh', 'sss', 'American Samoa', NULL, '2018-09-04 15:13:24'),
(16, 18, NULL, NULL, 'true', NULL, 'Koala.jpg', NULL, NULL, NULL, NULL, NULL, '2018-09-04 16:49:28'),
(17, 19, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 11:15:12'),
(18, 20, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 12:00:33'),
(19, 21, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 12:01:07'),
(20, 22, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-07 10:14:38'),
(21, 23, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 24, NULL, NULL, 'true', NULL, 'download (4).jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 25, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 26, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 27, NULL, NULL, 'true', NULL, 'fbcp.jpg', 'fbcp3.jpg', NULL, NULL, NULL, NULL, NULL),
(26, 28, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 18:16:18'),
(27, 29, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 18:37:18'),
(28, 30, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 18:59:52'),
(29, 31, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 19:46:08'),
(30, 32, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-17 09:41:17'),
(31, 33, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-18 12:38:48'),
(32, 34, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-19 16:33:58'),
(33, 35, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-19 18:03:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feed_like`
--
ALTER TABLE `feed_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hide_post`
--
ALTER TABLE `hide_post`
  ADD PRIMARY KEY (`hd_id`);

--
-- Indexes for table `online_user`
--
ALTER TABLE `online_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_visit`
--
ALTER TABLE `profile_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `user_feed`
--
ALTER TABLE `user_feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_photos`
--
ALTER TABLE `user_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feed_like`
--
ALTER TABLE `feed_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `hide_post`
--
ALTER TABLE `hide_post`
  MODIFY `hd_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `profile_visit`
--
ALTER TABLE `profile_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_feed`
--
ALTER TABLE `user_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_photos`
--
ALTER TABLE `user_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
