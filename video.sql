-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 03:30 PM
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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `c_id` int(2) NOT NULL,
  `country` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`c_id`, `country`, `status`) VALUES
(1, 'India', 0),
(2, 'America', 0),
(3, 'India', 0),
(4, 'America', 0),
(5, 'China', 0),
(6, 'Pakistan', 0),
(7, 'China', 0),
(8, 'Pakistan', 0),
(9, 'Japan', 0),
(10, 'Saudi Arabia', 0),
(11, 'Japan', 0),
(12, 'Saudi Arabia', 0),
(13, 'Sri Lanka', 0),
(14, 'Malaysia', 0),
(15, 'Sri Lanka', 0),
(16, 'Malaysia', 0),
(17, 'United States', 0),
(18, 'Russia', 0),
(19, 'United States', 0),
(20, 'Russia', 0),
(21, 'Germany', 0),
(22, 'France', 0),
(23, 'Germany', 0),
(24, 'France', 0);

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
(12, 22, 30),
(18, 17, 5),
(16, 17, 6),
(17, 17, 3),
(19, 39, 7),
(20, 42, 9),
(21, 42, 8),
(22, 17, 12),
(23, 17, 11),
(24, 17, 13),
(25, 17, 14),
(26, 17, 4),
(27, 17, 9),
(28, 17, 10),
(29, 17, 2),
(30, 17, 1),
(31, 22, 16),
(32, 22, 15),
(33, 22, 14),
(34, 22, 12),
(35, 22, 9),
(36, 22, 8),
(37, 22, 6),
(38, 22, 5),
(39, 22, 4),
(40, 22, 2),
(41, 22, 17);

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
(56, 22, 34, 0),
(57, 9, 17, 0),
(58, 1, 28, 0),
(59, 9, 28, 0),
(60, 25, 28, 0),
(61, 19, 28, 0),
(62, 2, 28, 0),
(63, 5, 28, 0),
(64, 10, 28, 0),
(65, 1, 17, 0),
(66, 2, 17, 0),
(67, 5, 17, 0),
(68, 10, 17, 0),
(69, 11, 17, 0),
(70, 12, 17, 0),
(71, 14, 17, 0),
(72, 15, 17, 0),
(73, 19, 17, 0),
(74, 20, 17, 0),
(75, 21, 17, 0),
(76, 23, 17, 0),
(77, 28, 36, 0),
(78, 28, 32, 0),
(79, 39, 38, 0),
(80, 38, 40, 1),
(81, 40, 38, 1),
(82, 38, 17, 0),
(83, 38, 24, 0),
(84, 42, 41, 0),
(85, 42, 17, 1),
(86, 17, 42, 1),
(87, 22, 24, 1),
(88, 24, 22, 1),
(89, 25, 17, 0),
(90, 37, 17, 0),
(91, 36, 17, 1),
(92, 17, 36, 1),
(93, 17, 36, 1),
(94, 39, 17, 0),
(95, 34, 17, 0),
(96, 40, 17, 1),
(97, 17, 40, 1),
(98, 25, 22, 0),
(99, 42, 22, 0),
(100, 58, 17, 0);

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
(44, 17, 14),
(45, 17, 15),
(46, 17, 13),
(47, 17, 12),
(48, 17, 11);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `n_id` int(2) NOT NULL,
  `messages` varchar(50) NOT NULL,
  `fri_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `cur_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`n_id`, `messages`, `fri_id`, `user_id`, `cur_time`, `status`) VALUES
(12, 'dona send a friend request to you', 42, 41, '2018-09-21 16:28:34.652343', 0),
(13, 'der send a friend request to you', 42, 17, '2018-09-21 16:34:31.426757', 0),
(14, 'subin Accepted your friend request', 17, 42, '2018-09-21 16:36:12.247070', 0),
(15, 'subin Liked your post', 17, 42, '2018-09-21 16:38:33.423828', 0),
(16, 'subin Liked your post', 17, 42, '2018-09-21 16:38:36.319335', 0),
(17, 'rem send a friend request to you', 22, 24, '2018-09-24 17:09:25.727539', 0),
(18, 'alp Accepted your friend request', 24, 22, '2018-09-24 17:10:33.043945', 0),
(19, 'der send a friend request to you', 25, 17, '2018-09-25 18:57:12.091796', 0),
(20, 'der Liked your post', 22, 17, '2018-09-27 18:43:21.160156', 0),
(21, 'der Liked your post', 22, 17, '2018-09-27 18:43:24.172851', 0),
(22, 'der Liked your post', 22, 17, '2018-09-27 18:43:25.033203', 0),
(23, 'der Liked your post', 22, 17, '2018-09-27 18:43:25.715820', 0),
(24, 'der Liked your post', 22, 17, '2018-09-27 18:43:25.977539', 0),
(25, 'der Liked your post', 22, 17, '2018-09-27 18:43:26.290039', 0),
(26, 'der Liked your post', 22, 17, '2018-09-27 18:43:26.967773', 0),
(27, 'der Liked your post', 22, 17, '2018-09-27 18:43:27.350586', 0),
(28, 'der Liked your post', 22, 17, '2018-09-27 18:43:27.731445', 0),
(29, 'der Liked your post', 22, 17, '2018-09-27 18:43:27.826171', 0),
(30, 'der Liked your post', 22, 17, '2018-09-27 18:43:28.596679', 0),
(31, 'der Liked your post', 22, 17, '2018-09-27 18:43:28.915039', 0),
(32, 'der Liked your post', 22, 17, '2018-09-27 18:43:29.179687', 0),
(33, 'der Liked your post', 22, 17, '2018-09-27 18:43:29.268554', 0),
(34, 'der Liked your post', 22, 17, '2018-09-27 18:43:33.354492', 0),
(35, 'der Liked your post', 22, 17, '2018-09-27 18:43:33.583984', 0),
(36, 'der Liked your post', 22, 17, '2018-09-27 18:43:33.671875', 0),
(37, 'der Liked your post', 22, 17, '2018-09-27 18:43:34.404296', 0),
(38, 'der Liked your post', 22, 17, '2018-09-27 18:43:34.727539', 0),
(39, 'der Liked your post', 22, 17, '2018-09-27 18:43:42.097656', 0),
(40, 'der Liked your post', 22, 17, '2018-09-27 18:43:42.683593', 0),
(41, 'der Liked your post', 22, 17, '2018-09-27 18:43:43.676757', 0),
(42, 'der Liked your post', 22, 17, '2018-09-27 18:43:43.851562', 0),
(43, 'der Liked your post', 22, 17, '2018-09-27 18:43:46.545898', 0),
(44, 'der Liked your post', 22, 17, '2018-09-27 18:43:47.861328', 0),
(45, 'der Liked your post', 22, 17, '2018-09-27 18:43:48.186523', 0),
(46, 'der Liked your post', 22, 17, '2018-09-27 18:43:49.091796', 0),
(47, 'der Liked your post', 22, 17, '2018-09-27 18:43:49.281250', 0),
(48, 'der Liked your post', 22, 17, '2018-09-27 18:43:49.766601', 0),
(49, 'der Liked your post', 22, 17, '2018-09-27 18:43:49.943359', 0),
(50, 'der Liked your post', 22, 17, '2018-09-27 18:43:50.115234', 0),
(51, 'der Liked your post', 22, 17, '2018-09-27 18:43:51.010742', 0),
(52, 'der Liked your post', 22, 17, '2018-09-27 18:43:51.350586', 0),
(53, 'der Liked your post', 22, 17, '2018-09-27 18:43:51.470703', 0),
(54, 'der Liked your post', 22, 17, '2018-09-27 18:43:51.556640', 0),
(55, 'der Liked your post', 22, 17, '2018-09-27 18:43:51.676757', 0),
(56, 'der Liked your post', 22, 17, '2018-09-27 18:43:51.825195', 0),
(57, 'der Liked your post', 22, 17, '2018-09-27 18:43:51.937500', 0),
(58, 'der Liked your post', 22, 17, '2018-09-27 18:43:52.342773', 0),
(59, 'der Liked your post', 22, 17, '2018-09-27 18:43:57.253906', 0),
(60, 'alp Liked your post', 22, 22, '2018-09-27 18:44:23.671875', 0),
(61, 'alp Liked your post', 22, 22, '2018-09-27 18:44:26.996093', 0),
(62, 'alp Liked your post', 22, 22, '2018-09-27 18:46:53.982421', 0),
(63, 'alp Liked your post', 22, 22, '2018-09-27 18:46:55.730468', 0),
(64, 'alp Liked your post', 22, 22, '2018-09-27 18:46:56.057617', 0),
(65, 'alp Liked your post', 22, 22, '2018-09-27 18:46:56.271484', 0),
(66, 'alp Liked your post', 22, 22, '2018-09-27 18:46:57.647461', 0),
(67, 'alp Liked your post', 22, 22, '2018-09-27 18:46:57.832031', 0),
(68, 'alp Liked your post', 22, 22, '2018-09-27 18:46:58.159179', 0),
(69, 'alp Liked your post', 22, 22, '2018-09-27 18:46:58.252929', 0),
(70, 'alp Liked your post', 22, 22, '2018-09-27 18:46:59.245117', 0),
(71, 'alp Liked your post', 22, 22, '2018-09-27 18:46:59.434570', 0),
(72, 'alp Liked your post', 22, 22, '2018-09-27 18:46:59.935546', 0),
(73, 'alp Liked your post', 22, 22, '2018-09-27 18:47:00.635742', 0),
(74, 'alp Liked your post', 22, 22, '2018-09-27 18:47:00.739257', 0),
(75, 'alp Liked your post', 22, 22, '2018-09-27 18:47:00.908203', 0),
(76, 'alp Liked your post', 22, 22, '2018-09-27 18:47:01.672851', 0),
(77, 'alp Liked your post', 22, 22, '2018-09-27 18:47:02.281250', 0),
(78, 'alp Liked your post', 22, 22, '2018-09-27 18:47:02.574218', 0),
(79, 'alp Liked your post', 22, 22, '2018-09-27 18:47:02.692382', 0),
(80, 'alp Liked your post', 22, 22, '2018-09-27 18:47:02.825195', 0),
(81, 'alp Liked your post', 22, 22, '2018-09-27 18:47:02.916015', 0),
(82, 'alp Liked your post', 22, 22, '2018-09-27 18:47:03.060546', 0),
(83, 'alp Liked your post', 22, 22, '2018-09-27 18:47:03.194336', 0),
(84, 'alp Liked your post', 22, 22, '2018-09-27 18:47:03.285156', 0),
(85, 'alp Liked your post', 22, 22, '2018-09-27 18:47:29.836914', 0),
(86, 'alp Liked your post', 22, 22, '2018-09-27 18:47:30.998046', 0),
(87, 'alp Liked your post', 22, 22, '2018-09-27 18:47:34.380859', 0),
(88, 'alp Liked your post', 22, 22, '2018-09-27 18:47:34.995117', 0),
(89, 'alp Liked your post', 22, 22, '2018-09-27 18:47:50.299804', 0),
(90, 'alp Liked your post', 22, 22, '2018-09-27 18:49:20.536132', 0),
(91, 'alp Liked your post', 22, 22, '2018-09-27 18:49:27.897461', 0),
(92, 'alp Liked your post', 22, 22, '2018-09-27 18:49:30.533203', 0),
(93, 'alp Liked your post', 22, 22, '2018-09-27 18:49:33.367187', 0),
(94, 'alp Liked your post', 22, 22, '2018-09-27 18:49:35.878906', 0),
(95, 'alp Liked your post', 17, 22, '2018-09-27 18:51:56.885742', 0),
(96, 'undefined send a friend request to you', 37, 17, '2018-10-01 17:59:25.952148', 0),
(97, 'undefined send a friend request to you', 36, 17, '2018-10-01 17:59:32.207031', 0),
(98, 'jibin Accepted your friend request', 17, 36, '2018-10-01 18:01:38.023437', 0),
(99, 'jibin Accepted your friend request', 17, 36, '2018-10-01 18:01:38.984375', 0),
(100, 'undefined send a friend request to you', 39, 17, '2018-10-01 18:14:20.134765', 0),
(101, 'undefined send a friend request to you', 34, 17, '2018-10-01 18:14:31.209960', 0),
(102, 'undefined send a friend request to you', 40, 17, '2018-10-01 18:14:37.304687', 0),
(103, 'son Accepted your friend request', 17, 40, '2018-10-01 18:31:51.461914', 0),
(104, 'undefined send a friend request to you', 25, 22, '2018-10-02 10:53:10.252929', 0),
(105, 'undefined send a friend request to you', 42, 22, '2018-10-02 10:53:17.919921', 0),
(106, 'undefined send a friend request to you', 58, 17, '2018-10-03 18:52:50.754882', 0);

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
(41, 17, '2018-09-04 15:16:48', 0, '2018-10-03 18:52:54'),
(42, 18, '2018-09-04 16:49:40', 0, '2018-10-01 11:57:38'),
(43, 19, '2018-09-05 11:15:22', 0, '2018-09-05 11:17:31'),
(44, 20, '2018-09-05 12:00:44', 0, '2018-09-05 12:25:22'),
(45, 21, '2018-09-05 12:01:18', 0, '2018-09-05 12:26:09'),
(46, 22, '2018-09-07 10:16:30', 0, '2018-10-03 18:03:07'),
(47, 23, NULL, 0, '2018-09-11 09:42:46'),
(48, 24, NULL, 0, '2018-10-02 19:06:09'),
(49, 25, NULL, 0, '2018-09-13 14:56:52'),
(50, 27, NULL, 1, NULL),
(51, 28, NULL, 0, '2018-10-02 17:56:33'),
(52, 31, NULL, 0, '2018-09-17 11:56:09'),
(53, 32, NULL, 0, '2018-09-21 13:29:26'),
(54, 33, NULL, 0, '2018-09-18 12:48:17'),
(55, 34, NULL, 0, '2018-09-19 17:37:54'),
(56, 36, NULL, 0, '2018-10-01 18:12:48'),
(57, 38, NULL, 0, '2018-09-21 16:08:00'),
(58, 39, NULL, 0, '2018-09-21 14:40:07'),
(59, 40, NULL, 1, NULL),
(60, 41, NULL, 0, '2018-10-01 14:32:11'),
(61, 42, NULL, 0, '2018-10-01 18:13:37'),
(62, 43, NULL, 0, '2018-09-26 11:51:27'),
(63, 57, NULL, 0, '2018-10-03 16:12:46'),
(64, 58, NULL, 1, NULL);

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
(145, 24, 22, '2018-09-19 18:38:41'),
(146, 42, 17, '2018-09-25 18:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `t_id` int(2) NOT NULL,
  `token` varchar(20) NOT NULL,
  `user_id` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`t_id`, `token`, `user_id`, `status`) VALUES
(1, '640cf1856292939149eb', 17, 1),
(2, 'c3fe8ac6d08d0e723de1', 55, 1),
(3, '8990f6c55f37084ba914', 55, 1),
(4, '23f9709ea7614b0ae86c', 55, 1);

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
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
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

INSERT INTO `users` (`user_id`, `full_name`, `email`, `user_name`, `password`, `gender`, `dob`, `age`, `mobile`, `fb_id`, `twitter_id`, `status`, `created_at`, `session_id`) VALUES
(1, 'Ramachandran k', 'ram@gmail.com', 'ram', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '1234', '', '', 1, '2018-07-23 20:51:59', NULL),
(2, 'tester', 'sk@s.com', 'test', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(3, 'tester1', 'sk1@s.com', 'test1', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(4, 'tester2', 'sk2@s.com', 'test2', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(5, 'tester3', 'sk3@s.com', 'test3', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(6, 'tester4', 'sk4@s.com', 'test4', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(7, 'tester5', 'sk5@s.com', 'test5', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL),
(8, 'jaison', 'jaisongeorgephilip@gmail.com', 'ja', 'c332903a80e5f83500c760326603fc8a', 0, '0000-00-00', 0, '918501933395', NULL, NULL, 1, '2018-07-30 20:54:56', NULL),
(9, 'abhi', 'abhi@gmail.com', 'abhi', '167784d36ab99e49738fe6a6a98798b7', 0, '0000-00-00', 0, '1234567893', NULL, NULL, 1, '2018-07-30 22:13:48', NULL),
(10, 'irshad', 'irshadillias@gmail.com', 'irshadillias', '583d8c3bc38a14fa7e6c8ab317dd6c1a', 0, '0000-00-00', 0, '8714488419', NULL, NULL, 1, '2018-07-31 23:36:32', NULL),
(11, 'FebinJoy', 'febin@febinjoy.com', 'FebinJoy', 'fc75b1b545dc48232c30685f6eaba5ed', 0, '0000-00-00', 0, '9567224808', NULL, NULL, 1, '2018-08-01 00:05:32', NULL),
(12, 'sajith', 'sajithsmgodwin@gmail.com', 'sajith', '8848718ee97fa510d2f4985892193c20', 0, '0000-00-00', 0, '9597097129', NULL, NULL, 1, '2018-08-01 15:19:38', NULL),
(13, 'abcd', 'abcd@gmail.com', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 0, '0000-00-00', 0, '1212', NULL, NULL, 1, '2018-08-01 16:16:22', NULL),
(14, 'samabhi', 'abhisam@gmail.com', 'samabhi', '202cb962ac59075b964b07152d234b70', 0, '0000-00-00', 0, '9656566356', NULL, NULL, 1, '2018-08-09 14:47:01', NULL),
(15, 'codeface', 'codeface@gmail.com', 'code', 'c13367945d5d4c91047b3b50234aa7ab', 0, '0000-00-00', 0, '12', NULL, NULL, 1, '2018-08-09 15:19:38', NULL),
(16, 'name', 'email@e.com', 'name', 'e10adc3949ba59abbe56e057f20f883e', 0, '0000-00-00', 0, '2222', NULL, NULL, 1, '2018-08-28 16:21:28', NULL),
(17, 'undefined', 'derin@gmail.com', 'der', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1, '1970-01-01', 0, '8089245010', NULL, NULL, 1, '2018-09-04 15:13:24', '2_MX40NjE2MzI5Mn5-MTUzNjIzNzM5NzYyOX4wdk1IVE1oVGZxV2tHMVNVam5vUW1oVmx-fg'),
(18, 'manu', 'manu@gmail.com', 'manu', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0, '0000-00-00', 0, '78878778878787', NULL, NULL, 1, '2018-09-04 16:49:27', '2_MX40NjE2MzI5Mn5-MTUzNjIzNzQ5NTA4Mn54MUxxN1BJbUhzMGhqV04wQkZId29MbWx-fg'),
(19, 'abc', 'abc@gmail.com', 'qqq', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '12345678', NULL, NULL, 1, '2018-09-05 11:15:12', '2_MX40NjE2MzI5Mn5-MTUzNjEyNjM3ODMyOX41RHA5L1ZVT3NLV0xOWHhuVWhSSTR5L0J-fg'),
(20, 'raja', 'raja@gmail.com', 'raja', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-05 12:00:32', '2_MX40NjE2MzI5Mn5-MTUzNjEyOTAzODMyOH5mYTRoNVY2cjJORm02TGlVM2N5MW1DZ2h-fg'),
(21, 'rani', 'rani@gmail.com', 'rani', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-05 12:01:07', '2_MX40NjE2MzI5Mn5-MTUzNjEyOTA3MjE3NX5JWERmbVNlRUxldXdDTDliQnIyZnliYTl-fg'),
(22, 'undefined', 'all@gmail.com', 'alp', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2, '0000-00-00', 0, '87878878787', NULL, NULL, 1, '2018-09-07 10:14:38', '2_MX40NjE2MzI5Mn5-MTUzNjI5NTU3OTI5Nn5tK0k0Mmc1aG95OXRuY3h1Y1NuY3M5RER-fg'),
(23, 'dell', 'dell@gmail.com', 'dell', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '8089245010', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjYzNzMyODQ1NH42eUc0U3J0a3hnVUpmTmU4TUZxY05Wcm1-fg'),
(24, 'rem', 'rem@gmail.com', 'rem', '25d55ad283aa400af464c76d713c07ad', 1, '1990-11-11', 18, '787887887878', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjgxNTU2NjAzMH4xMTFRYzE1c0ptYWVOTFZTV24zM0d5OGJ-fg'),
(25, 'bijo', 'bijo@mail.com', 'bijo', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '57637567756', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjgyMTg0OTkxOH56Y1RsUFV2aTFvZzFoZFVLcTNJMW02NGF-fg'),
(26, 'vbvb', 'dfh@mail.comyh', '55', '949be6221e0a43f9a1f3725c7ae52bec', 2, '0000-00-00', 0, '45767575', NULL, NULL, 1, NULL, NULL),
(27, 'alphnse', 'apll@djhjd.com', 'alphnse', '25d55ad283aa400af464c76d713c07ad', 2, '2011-11-11', 0, '5456456456', NULL, NULL, 1, NULL, '2_MX40NjE2MzI5Mn5-MTUzNjgyOTI0MTI5Mn5QSUxDQlZ3SWh4Q0F5ZVVGSFoxdXdpNG9-fg'),
(28, 'son', 'der@xdgd.com', 'derin', '25d55ad283aa400af464c76d713c07ad', 1, '1990-01-01', 0, '789797899', NULL, NULL, 1, '2018-09-14 18:16:18', '1_MX40NjE2MzI5Mn5-MTUzNjkyOTE5NTc5NX5VUkNuU2hNMUpoZmR0Zkc3WlBLUmZJZG9-fg'),
(29, 'rt', 'rttt@cghcfj', 'rt', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '78987978789', NULL, NULL, 1, '2018-09-14 18:37:18', NULL),
(30, 'sa', 'cfemp08wd@gmail.com', 'kuttu', '363ab055963fb24eff2cfc02437ec228', 1, '0000-00-00', 0, '76898090980', NULL, NULL, 1, '2018-09-14 18:59:52', NULL),
(31, 'abc', 'hderin@gmail.com', 'ooo', '25d55ad283aa400af464c76d713c07ad', 2, '0000-00-00', 0, '5447477564', NULL, NULL, 1, '2018-09-14 19:46:08', '2_MX40NjE2MzI5Mn5-MTUzNjkzNDU4MTI1N35QSVRYSzltWWRqbE00SHRJSjhKTUdHRjJ-fg'),
(32, 'anja', 'anja@mail.com', 'anjaly', '25d55ad283aa400af464c76d713c07ad', 2, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-17 09:41:17', '1_MX40NjE2MzI5Mn5-MTUzNzE1NzQ4NTA3M35OVktMQzlDUXNRb05NZXZOWVFsTno1dyt-fg'),
(33, 'fgfg', 'fgdf@gmail.com', 'lal', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '34366634', NULL, NULL, 1, '2018-09-18 12:38:48', '1_MX40NjE2MzI5Mn5-MTUzNzI1NDU0MjUzMX45Qms5MGZ6TXB2WVJLSUJGdzAyWUVPcHl-fg'),
(34, 'don', 'deon@gmail.com', 'don', 'e10adc3949ba59abbe56e057f20f883e', 1, '0000-00-00', 0, '987456123', NULL, NULL, 1, '2018-09-19 16:33:58', '1_MX40NjE2MzI5Mn5-MTUzNzM1NTAyNzM4NH4zMUMyOEw0aGQrOWI0VWJZbnlBOWFLUWh-fg'),
(35, 'dd', 'cfeddmp08d@gmail.com', '12', '3a08fe7b8c4da6ed09f21c3ef97efce2', 1, '0000-00-00', 0, '12354534', NULL, NULL, 1, '2018-09-19 18:03:25', NULL),
(36, 'jibin', 'jin@gmail.com', 'jibin', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '4545454544', NULL, NULL, 1, '2018-09-20 10:58:43', '1_MX40NjE2MzI5Mn5-MTUzNzQyMTM1MDkwNH5mcU55dkp2VGhqNndxZE1PMjBId0dpQkV-fg'),
(37, 'ammu', 'ammu@hmdkd.com', 'ammuz', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '8777666665', NULL, NULL, 1, '2018-09-20 12:41:10', NULL),
(38, 'god', 'god@gmail.com', 'god', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-21 14:10:21', '1_MX40NjE2MzI5Mn5-MTUzNzUxOTI2OTI4MH5BamZrYjRSV1BHRi9mQXhGZk1FZnZ2UFF-fg'),
(39, 'angel', 'angel@gmail.com', 'angel', '25d55ad283aa400af464c76d713c07ad', 2, '0000-00-00', 0, '98989898', NULL, NULL, 1, '2018-09-21 14:11:01', '1_MX40NjE2MzI5Mn5-MTUzNzUxOTI5NzA4MX5Za1l3aHVEY0RkZmlkVDNlRTdCN2N1THF-fg'),
(40, 'son', 'son@mai.com', 'son', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '9874561278', NULL, NULL, 1, '2018-09-21 14:41:59', '1_MX40NjE2MzI5Mn5-MTUzNzUyMTEyMTMyOX44S0pzSC8xaUxqSENPcUNUdFJJZVRBM0d-fg'),
(41, 'ddoo', 'daon@nhajka.com', 'dona', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1, '0000-00-00', 0, '98989898', NULL, NULL, 1, '2018-09-21 16:27:25', '1_MX40NjE2MzI5Mn5-MTUzNzUyNzQ2NjUyMH5WU3F5Um14L2c0K3N5RXprcnB5TjBTb1N-fg'),
(42, 'subin', 'subin@mail.com', 'subin', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '987654656', NULL, NULL, 1, '2018-09-21 16:28:00', '2_MX40NjE2MzI5Mn5-MTUzNzUyNzYwNjQ3OH40U1BrWHdGYXdSVjUwMEd2QlliMUhmYUZ-fg'),
(43, 'ajo joseph', 'ajo@mail.com', 'ajo', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '78979779', NULL, NULL, 1, '2018-09-26 11:50:34', '1_MX40NjE2MzI5Mn5-MTUzNzk0Mjg3NTgwMn5teWU5dXNwOHBhb1ZaU045bXRubGc4WmN-fg'),
(44, 'dfg df', 'cfemp08d@gmail.com', 'dfgdg', 'af1cdd976628f311b3ff1a3510eb4c6c', 2, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 11:57:09', NULL),
(46, 'wq qw', 'sdffsd@gmail', 'wq', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 12:03:34', NULL),
(47, 'g d', 'dfgfdgg@rtgd', 'jhkkkjjkk', '4767fcced49357286f525acfc715ea13', 1, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 12:26:34', NULL),
(48, 'ghghfhfh fgdgdfgdg', 'dfall@gmail.com', 'fgdgdgdgfd', 'fdce95690bca1428184fbc0feb476782', 2, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 14:02:11', NULL),
(49, 'df sdf', 'dsf@hdfhh', 'dfsgsg', 'b73b601e6d8792108b49b230ad3e0def', 1, '1970-01-01', 0, '', NULL, NULL, 1, '2018-09-26 14:05:30', NULL),
(50, 'sf sdf', 'sdfsfd@gsnfgngh', 'dhhdhd', '75f8800f49110f43145a35b0d8043ae0', 1, '1970-01-01', 0, '', NULL, NULL, 1, '2018-09-26 14:22:16', NULL),
(51, 'dgalex gh', 'degrin@gmail.com', 'gh', 'b4ddd6b79be053b61c7aa86caa351c5a', 2, '2011-11-11', 0, '', NULL, NULL, 1, '2018-09-26 14:23:36', NULL),
(52, 'der sdf', 'bhcf@dfd', 'fuuf', '72c4ca7185f759cf0965566f8e7ac3f8', 1, '1970-01-01', 0, '', NULL, NULL, 1, '2018-09-26 16:13:54', NULL),
(53, 'dgd', 'dfdfdf@sttst', 'fghdh', '71d5e6204fb08b452563bfdcb95e71bf', 0, '0000-00-00', 0, '4543334', NULL, NULL, 1, '2018-09-26 19:05:39', NULL),
(54, ' sdf', 'derin@gmail.comtttt', 'wwwe', 'ddc452e6f101fdac7ff6f1ee83d8ce8b', 1, '2000-05-09', 0, '', NULL, NULL, 1, '2018-09-27 12:02:44', NULL),
(55, ' df', 'cfemp07@gmail.com', 'sajitj123', '88312213c3492c4cd89d297f16cb0fc4', 1, '2000-12-09', 0, '', NULL, NULL, 1, '2018-09-27 12:12:30', NULL),
(56, 'ju ju', 'juj@yjhj', 'juju', '25d55ad283aa400af464c76d713c07ad', 1, '2000-01-01', 18, '', NULL, NULL, 1, '2018-10-03 14:30:52', NULL),
(57, 'ambrozia kaa', 'amnsdjk@fjk', 'ambro', '25d55ad283aa400af464c76d713c07ad', 1, '1995-01-01', 23, '', NULL, NULL, 1, '2018-10-03 14:37:08', '2_MX40NjE2MzI5Mn5-MTUzODU1NzY0MjQxNH5WMGZRYWNacERmSmlSSmt1VHArTW1qNzd-fg'),
(58, 'sh yni', 'shyni@gmail.com', 'shyni', '25d55ad283aa400af464c76d713c07ad', 2, '2000-01-10', 18, '', NULL, NULL, 1, '2018-10-03 16:43:48', '2_MX40NjE2MzI5Mn5-MTUzODU2NTM0ODYzN34wVzBYWGJUY3NtWi9BQXhzeHpZWTQvQXN-fg');

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
(1, 17, 'derin 1', 1, 1, '2018-09-20 15:40:23'),
(2, 17, 'derin 2', 2, 1, '2018-09-20 15:40:30'),
(3, 17, 'derin 3', 1, 1, '2018-09-20 15:40:38'),
(4, 22, 'alp1gg', 2, 1, '2018-09-20 16:30:11'),
(5, 22, 'alp2', 2, 1, '2018-09-20 16:30:16'),
(6, 22, 'alp3', 2, 1, '2018-09-20 16:30:21'),
(7, 38, 'god', 1, 1, '2018-09-21 14:39:35'),
(8, 17, 'gggg', 2, 1, '2018-09-21 15:04:40'),
(9, 17, 'fdfdbdbf', 3, 1, '2018-09-21 15:11:14'),
(10, 22, 'fdgdgdfgdgdfgd', 1, 1, '2018-09-21 15:13:09'),
(11, 22, 'derrrrrr', 1, 1, '2018-09-24 15:43:54'),
(12, 22, 'derurtyty', 2, 1, '2018-09-24 15:43:59'),
(13, 22, 'derin', 1, 1, '2018-09-24 15:46:40'),
(14, 24, 'remm', 2, 1, '2018-09-24 17:09:00'),
(15, 24, 'alp watch me\r\n', 1, 1, '2018-09-24 17:09:10'),
(16, 22, 'cvcvnncnncn', 1, 1, '2018-09-27 16:29:52'),
(17, 17, 'likeeeeee', 1, 1, '2018-09-27 18:51:18'),
(18, 28, 'bhjj', 0, 1, '2018-10-02 16:36:34');

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
(13, 17, 'download (1).jpg', '2018-09-19 15:01:10', 1),
(14, 17, 'Desert.jpg', '2018-09-24 17:42:45', 1),
(15, 17, 'download (4).jpg', '2018-10-02 10:05:35', 0),
(16, 17, 'download (5).jpg', '2018-10-02 10:05:51', 0),
(17, 17, 'images (1).jpg', '2018-10-02 10:06:04', 0),
(18, 17, 'images.jpg', '2018-10-02 10:06:13', 0),
(19, 17, 'Hydrangeas.jpg', '2018-10-02 10:10:17', 0),
(20, 28, 'download.jpg', '2018-10-02 11:01:43', 0),
(21, 28, 'download.jpg', '2018-10-02 11:26:54', 1),
(22, 28, 'download (9).jpg', '2018-10-02 11:27:36', 0);

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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `age_hide` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `gender`, `dob`, `visibility`, `nick_name`, `profile_pic`, `cover_photo`, `description`, `address`, `country_id`, `interest_area`, `created_at`, `age_hide`) VALUES
(1, 2, 2, '', 'true', 'tesr', NULL, NULL, 'testing', NULL, NULL, NULL, '2018-07-24 13:56:25', 1),
(3, 1, 2, '2018-07-11', 'true', 'ramu', NULL, 'company-cover.jpg', 'Testing Make sense means perfects', 'Perumkadavila', 'India', 'Boy', '2018-07-24 14:40:39', 1),
(4, 3, 2, '', 'false', 'Tester', NULL, NULL, 'testing purpose', NULL, 'India', NULL, '2018-07-24 14:40:51', 1),
(5, 5, 1, NULL, 'true', NULL, NULL, NULL, NULL, NULL, 'India', NULL, '2018-07-24 14:40:51', 1),
(6, 8, 1, '10/04/1987', 'false', 'hhhh', NULL, NULL, NULL, 'asas', 'Country', NULL, '2018-07-30 20:54:56', 1),
(7, 9, 1, '2018-08-05', 'true', 'sam123', '75b6533d-1537-4b6f-bc16-b1944d467715.jpg', '01_(1).jpg', 'jbsafhgafgjabfbjgafm', 'kerala', 'Kazakhstan', 'Boy', '2018-07-30 22:13:48', 1),
(8, 10, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-31 23:36:32', 1),
(9, 11, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 00:05:32', 1),
(10, 12, NULL, NULL, 'true', NULL, 'about-absolute.png', NULL, NULL, NULL, NULL, NULL, '2018-08-01 15:19:38', 1),
(11, 13, 1, '', 'false', 'abcd1', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 16:16:22', 1),
(12, 14, 2, '2018-08-17', 'true', 'samual', NULL, NULL, 'hfhghbnhgvbnvhgjhjhjmbmjhk', 'keral', 'India', NULL, '2018-08-09 14:47:01', 1),
(13, 15, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-09 15:19:38', 1),
(14, 16, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-28 16:21:28', 1),
(15, 17, 0, 'undefined', 'false', 'undefined', 'm-img4.png', 'download (7).jpg', 'dgdgdfghrfg', 'undefined', '3', '1', '2018-09-04 15:13:24', 1),
(16, 18, NULL, NULL, 'true', NULL, 'Koala.jpg', NULL, NULL, NULL, NULL, NULL, '2018-09-04 16:49:28', 1),
(17, 19, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 11:15:12', 1),
(18, 20, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 12:00:33', 1),
(19, 21, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 12:01:07', 1),
(20, 22, 0, 'undefined', 'false', 'undefined', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-07 10:14:38', 1),
(21, 23, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 24, NULL, NULL, 'false', '', 'download (4).jpg', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(23, 25, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 26, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, 27, 1, '', 'false', 'all', 'fbcp.jpg', 'fbcp3.jpg', 'fghfhfgffgasdfff', 'undefined', '10', '2', NULL, 1),
(26, 28, NULL, NULL, 'false', '', NULL, NULL, NULL, 'undefined', '6', NULL, '2018-09-14 18:16:18', 1),
(27, 29, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 18:37:18', 1),
(28, 30, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 18:59:52', 1),
(29, 31, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 19:46:08', 1),
(30, 32, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-17 09:41:17', 1),
(31, 33, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-18 12:38:48', 1),
(32, 34, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-19 16:33:58', 1),
(33, 35, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-19 18:03:25', 1),
(34, 36, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-20 10:58:44', 1),
(35, 37, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-20 12:41:10', 1),
(36, 38, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-21 14:10:21', 1),
(37, 39, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-21 14:11:01', 1),
(38, 40, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, '2', '2018-09-21 14:42:00', 1),
(39, 41, 2, '2000-11-11', 'false', 'nna', NULL, NULL, 'grfgfddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sss', 'Country', NULL, '2018-09-21 16:27:25', 1),
(40, 42, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-21 16:28:00', 1),
(41, 43, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 11:50:34', 1),
(42, 44, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 11:57:09', 1),
(43, 46, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 12:03:34', 1),
(44, 47, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 12:26:34', 1),
(45, 48, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:02:11', 1),
(46, 49, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:05:30', 1),
(47, 50, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:22:16', 1),
(48, 51, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:23:36', 1),
(49, 52, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 16:13:54', 1),
(50, 53, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 19:05:39', 1),
(51, 54, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-27 12:02:44', 1),
(52, 55, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-27 12:12:30', 1),
(53, 56, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-03 14:30:52', 1),
(54, 57, NULL, NULL, 'true', NULL, NULL, NULL, NULL, 'undefined', '9', NULL, '2018-10-03 14:37:08', 1),
(55, 58, NULL, NULL, 'true', NULL, NULL, NULL, NULL, 'undefined', '10', NULL, '2018-10-03 16:43:48', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`c_id`);

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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`n_id`);

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
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`t_id`);

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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `c_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feed_like`
--
ALTER TABLE `feed_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `hide_post`
--
ALTER TABLE `hide_post`
  MODIFY `hd_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `profile_visit`
--
ALTER TABLE `profile_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `t_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_feed`
--
ALTER TABLE `user_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_photos`
--
ALTER TABLE `user_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
