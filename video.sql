-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 02:08 PM
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
(41, 22, 17),
(42, 17, 21),
(43, 17, 20),
(44, 17, 19),
(45, 17, 22),
(46, 17, 23),
(47, 17, 24),
(48, 22, 25),
(49, 69, 26),
(50, 70, 26),
(51, 70, 27);

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
(65, 82, 78, 1),
(66, 78, 82, 1);

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
(75, 72, 32),
(76, 69, 34),
(77, 69, 33),
(78, 69, 32),
(79, 72, 32),
(80, 72, 32),
(81, 72, 32),
(82, 72, 32),
(83, 72, 32),
(84, 72, 32);

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
(106, 'undefined send a friend request to you', 58, 17, '2018-10-03 18:52:50.754882', 0),
(107, 'undefined Liked your post', 17, 22, '2018-10-05 11:00:54.236328', 0),
(108, 'ddd Accepted your friend request', 34, 22, '2018-10-05 11:09:00.298828', 0),
(109, 'ddd send a friend request to you', 38, 22, '2018-10-05 11:11:44.367187', 0),
(110, 'god Accepted your friend request', 17, 38, '2018-10-05 11:13:43.521484', 0),
(111, 'undefined Liked your post', 17, 17, '2018-10-05 12:13:25.423828', 0),
(112, 'undefined Liked your post', 17, 17, '2018-10-05 12:13:27.279296', 0),
(113, 'undefined Liked your post', 17, 17, '2018-10-05 12:13:30.081054', 0),
(114, 'undefined Liked your post', 17, 17, '2018-10-05 12:35:02.820312', 0),
(115, 'undefined Liked your post', 17, 17, '2018-10-05 12:35:15.609375', 0),
(116, 'undefined Liked your post', 17, 17, '2018-10-05 13:08:12.445312', 0),
(117, 'ddd Liked your post', 22, 22, '2018-10-05 17:25:45.503906', 0),
(118, 'nazneen mohammed send a friend request to you', 59, 60, '2018-10-09 22:53:55.293078', 1),
(119, 'irshad illias Accepted your friend request', 60, 59, '2018-10-11 18:19:38.649172', 0),
(120, 'nazneen mohammed sent a friend request to you', 64, 60, '2018-10-13 22:08:45.118945', 0),
(121, 'irshadstar test Accepted your friend request', 60, 64, '2018-10-13 22:09:17.560627', 0),
(122, 'mary mary sent a friend request to you', 69, 70, '2018-10-22 12:33:42.886312', 1),
(123, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-22 12:34:05.852132', 1),
(124, 'mary mary Liked your post', 69, 70, '2018-10-22 12:34:24.844320', 1),
(125, 'mary mary Liked your post', 69, 70, '2018-10-22 12:34:46.417562', 1),
(126, 'joseph joseph sent a friend request to you', 21, 69, '2018-10-22 20:03:06.489257', 0),
(127, 'mary mary sent a friend request to you', 69, 70, '2018-10-22 20:04:11.547851', 1),
(128, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-22 20:04:33.337890', 1),
(129, 'mary mary sent a friend request to you', 69, 70, '2018-10-22 20:05:34.127929', 1),
(130, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-22 20:05:53.806640', 1),
(131, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 11:37:38.856445', 1),
(132, 'mary mary Accepted your friend request', 69, 70, '2018-10-24 11:42:13.608398', 1),
(133, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 11:52:38.625976', 1),
(134, 'mary mary Accepted your friend request', 69, 70, '2018-10-24 12:11:19.378906', 1),
(135, 'mary mary sent a friend request to you', 69, 70, '2018-10-24 12:13:59.064453', 1),
(136, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 12:15:57.012695', 1),
(137, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 12:20:15.820312', 1),
(138, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 12:23:08.469726', 1),
(139, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 12:27:58.435546', 1),
(140, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 12:29:58.741210', 1),
(141, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 12:32:13.143554', 1),
(142, 'mary mary Accepted your friend request', 69, 70, '2018-10-24 12:32:48.767578', 1),
(143, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 14:19:04.881835', 1),
(144, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 14:19:27.407226', 1),
(145, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 14:20:11.922851', 1),
(146, 'mary mary Accepted your friend request', 69, 70, '2018-10-24 14:27:04.374023', 1),
(147, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 14:27:51.760742', 1),
(148, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 14:29:30.829101', 1),
(149, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:13:05.063476', 1),
(150, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:13:35.221679', 1),
(151, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:16:53.811523', 1),
(152, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:17:17.693359', 1),
(153, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:17:27.178710', 1),
(154, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:17:36.830078', 1),
(155, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:17:40.869140', 1),
(156, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:17:41.359375', 1),
(157, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:21:13.519531', 1),
(158, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:22:47.116210', 1),
(159, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:22:49.707031', 1),
(160, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:22:58.908203', 1),
(161, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:23:42.922851', 1),
(162, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:37:44.132812', 1),
(163, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:38:01.324218', 1),
(164, 'mary mary sent a friend request to you', 43, 70, '2018-10-24 15:40:14.793945', 0),
(165, 'dq qq sent a friend request to you', 70, 71, '2018-10-24 15:42:08.865234', 1),
(166, 'mary mary Accepted your friend request', 71, 70, '2018-10-24 15:42:44.272460', 0),
(167, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:50:49.864257', 1),
(168, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:51:02.259765', 1),
(169, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:52:53.089843', 1),
(170, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:55:36.451171', 1),
(171, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:55:41.123046', 1),
(172, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:56:41.047851', 1),
(173, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:56:47.429687', 1),
(174, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:57:09.775390', 1),
(175, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:57:33.241210', 1),
(176, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:59:09.843750', 1),
(177, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:59:17.869140', 1),
(178, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:59:25.139648', 1),
(179, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:59:31.554687', 1),
(180, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 15:59:40.605468', 1),
(181, 'joseph joseph sent a friend request to you', 71, 69, '2018-10-24 16:00:34.456054', 0),
(182, 'joseph joseph sent a friend request to you', 71, 69, '2018-10-24 16:01:00.492187', 0),
(183, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 16:01:17.918945', 1),
(184, 'joseph joseph sent a friend request to you', 71, 69, '2018-10-24 16:01:24.304687', 0),
(185, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 16:03:31.954101', 1),
(186, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 16:03:41.395507', 1),
(187, 'joseph joseph sent a friend request to you', 71, 69, '2018-10-24 16:03:47.929687', 0),
(188, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-24 16:31:14.971679', 1),
(189, 'mary mary Accepted your friend request', 69, 70, '2018-10-24 16:31:27.417968', 1),
(190, 'joseph joseph sent a friend request to you', 5, 69, '2018-10-24 17:04:55.868164', 0),
(191, 'joseph joseph sent a friend request to you', 9, 69, '2018-10-24 17:05:02.671875', 0),
(192, 'mary mary sent a friend request to you', 69, 70, '2018-10-24 17:15:10.183593', 1),
(193, 'joseph joseph sent a friend request to you', 11, 69, '2018-10-25 12:02:52.828125', 0),
(194, 'joseph joseph sent a friend request to you', 1, 69, '2018-10-25 12:10:13.358398', 0),
(195, 'joseph joseph sent a friend request to you', 5, 69, '2018-10-25 12:10:15.227539', 0),
(196, 'joseph joseph sent a friend request to you', 2, 69, '2018-10-25 12:10:20.721679', 0),
(197, 'joseph joseph sent a friend request to you', 1, 69, '2018-10-25 12:13:56.946289', 0),
(198, 'joseph joseph sent a friend request to you', 2, 69, '2018-10-25 12:13:57.488281', 0),
(199, 'joseph joseph sent a friend request to you', 5, 69, '2018-10-25 12:13:58.640625', 0),
(200, 'joseph joseph sent a friend request to you', 9, 69, '2018-10-25 12:13:59.231445', 0),
(201, 'joseph joseph sent a friend request to you', 1, 69, '2018-10-25 12:17:49.688476', 0),
(202, 'joseph joseph sent a friend request to you', 5, 69, '2018-10-25 12:17:51.239257', 0),
(203, 'joseph joseph sent a friend request to you', 9, 69, '2018-10-25 12:17:51.817382', 0),
(204, 'joseph joseph sent a friend request to you', 2, 69, '2018-10-25 12:21:08.825195', 0),
(205, 'joseph joseph sent a friend request to you', 9, 69, '2018-10-25 12:21:10.530273', 0),
(206, 'joseph joseph sent a friend request to you', 12, 69, '2018-10-25 12:21:14.137695', 0),
(207, 'joseph joseph sent a friend request to you', 16, 69, '2018-10-25 12:31:25.228515', 0),
(208, 'joseph joseph sent a friend request to you', 18, 69, '2018-10-25 12:31:26.607421', 0),
(209, 'joseph joseph sent a friend request to you', 21, 69, '2018-10-25 12:31:30.753906', 0),
(210, 'joseph joseph sent a friend request to you', 23, 69, '2018-10-25 12:31:32.369140', 0),
(211, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 10:31:37.047734', 1),
(212, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 10:32:06.108281', 1),
(213, 'alp nsa sent a friend request to you', 69, 72, '2018-10-29 11:06:58.154179', 1),
(214, 'alp nsa sent a friend request to you', 70, 72, '2018-10-29 11:07:06.584843', 1),
(215, 'joseph joseph sent a friend request to you', 1, 69, '2018-10-29 11:09:03.711796', 0),
(216, 'joseph joseph sent a friend request to you', 5, 69, '2018-10-29 11:09:05.481328', 0),
(217, 'alp nsa sent a friend request to you', 69, 72, '2018-10-29 11:37:11.585820', 1),
(218, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-29 12:06:56.163945', 0),
(219, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-29 12:06:58.966679', 0),
(220, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-29 12:06:59.682500', 0),
(221, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-29 12:07:00.609257', 0),
(222, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-29 12:07:10.150273', 0),
(223, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:11:03.859257', 1),
(224, 'mary mary sent a friend request to you', 72, 70, '2018-10-29 12:11:04.933476', 0),
(225, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:11:46.947148', 1),
(226, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:14:35.981328', 1),
(227, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:15:38.983281', 1),
(228, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:15:46.845585', 1),
(229, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:19:22.710820', 1),
(230, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:21:30.902226', 1),
(231, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:21:40.951054', 1),
(232, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:25:21.628789', 1),
(233, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:30:09.730351', 1),
(234, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:40:32.813359', 1),
(235, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:41:03.671757', 1),
(236, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:41:49.620000', 1),
(237, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:42:11.881718', 1),
(238, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:44:11.489140', 1),
(239, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:49:40.025273', 1),
(240, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:52:00.231328', 1),
(241, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:52:04.173710', 1),
(242, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 12:52:11.348515', 1),
(243, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:53:38.593632', 1),
(244, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 12:55:51.039921', 1),
(245, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 14:16:21.058593', 1),
(246, 'joseph joseph sent a friend request to you', 72, 69, '2018-10-29 14:27:26.271484', 0),
(247, 'joseph joseph sent a friend request to you', 72, 69, '2018-10-29 14:27:34.688476', 0),
(248, 'mary mary sent a friend request to you', 1, 70, '2018-10-29 14:39:16.885742', 0),
(249, 'mary mary sent a friend request to you', 2, 70, '2018-10-29 14:39:18.058593', 0),
(250, 'mary mary sent a friend request to you', 11, 70, '2018-10-29 14:39:21.638671', 0),
(251, 'mary mary sent a friend request to you', 12, 70, '2018-10-29 14:39:23.415039', 0),
(252, 'mary mary sent a friend request to you', 15, 70, '2018-10-29 14:39:25.478515', 0),
(253, 'mary mary sent a friend request to you', 16, 70, '2018-10-29 14:39:26.966796', 0),
(254, 'mary mary sent a friend request to you', 9, 70, '2018-10-29 14:39:29.329101', 0),
(255, 'mary mary sent a friend request to you', 14, 70, '2018-10-29 14:39:31.161132', 0),
(256, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-29 18:07:22.904296', 1),
(257, 'mary mary Accepted your friend request', 69, 70, '2018-10-29 18:07:48.169921', 1),
(258, 'joseph joseph sent a friend request to you', 72, 69, '2018-10-29 19:03:21.446289', 0),
(259, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-29 19:21:48.892578', 1),
(260, 'mary mary Accepted your friend request', 69, 70, '2018-10-29 19:25:39.166015', 1),
(261, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 19:33:47.540039', 1),
(262, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-29 19:35:08.749023', 1),
(263, 'mary mary Accepted your friend request', 69, 70, '2018-10-29 19:59:18.299804', 1),
(264, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-29 20:30:41.750000', 1),
(265, 'mary mary Accepted your friend request', 69, 70, '2018-10-29 20:31:14.744140', 1),
(266, 'mary mary sent a friend request to you', 69, 70, '2018-10-29 20:32:25.431640', 1),
(267, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-29 20:32:44.964843', 1),
(268, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-29 20:33:46.102539', 1),
(269, 'mary mary Accepted your friend request', 69, 70, '2018-10-29 20:34:01.849609', 1),
(270, 'joseph joseph sent a friend request to you', 70, 69, '2018-10-30 11:47:17.533203', 0),
(271, 'mary mary Accepted your friend request', 69, 70, '2018-10-30 11:47:48.556640', 1),
(272, 'mary mary sent a friend request to you', 69, 70, '2018-10-30 11:48:18.370117', 1),
(273, 'alp nsa sent a friend request to you', 69, 72, '2018-10-30 12:45:39.221679', 1),
(274, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-30 12:46:23.912109', 0),
(275, 'joseph joseph sent a friend request to you', 2, 69, '2018-10-30 12:46:38.239257', 0),
(276, 'joseph joseph sent a friend request to you', 5, 69, '2018-10-30 12:46:39.820312', 0),
(277, 'joseph joseph sent a friend request to you', 11, 69, '2018-10-30 12:46:42.750976', 0),
(278, 'mary mary sent a friend request to you', 69, 70, '2018-10-30 12:50:26.950195', 1),
(279, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-30 12:51:05.429687', 0),
(280, 'alp nsa sent a friend request to you', 69, 72, '2018-10-30 15:58:01.208984', 0),
(281, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-30 15:59:27.836914', 0),
(282, 'alp nsa sent a friend request to you', 69, 72, '2018-10-30 17:55:26.010742', 0),
(283, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-30 17:56:15.843750', 0),
(284, 'mary mary sent a friend request to you', 11, 70, '2018-10-31 09:56:18.011718', 0),
(285, 'mary mary sent a friend request to you', 5, 70, '2018-10-31 09:56:19.731445', 0),
(286, 'mary mary sent a friend request to you', 1, 70, '2018-10-31 09:56:20.872070', 0),
(287, 'mary mary sent a friend request to you', 69, 70, '2018-10-31 10:02:18.074218', 0),
(288, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-31 10:02:31.599609', 0),
(289, 'mary mary sent a friend request to you', 69, 70, '2018-10-31 10:04:55.820312', 0),
(290, 'alp nsa sent a friend request to you', 69, 72, '2018-10-31 10:09:46.708984', 0),
(291, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-31 10:11:23.752929', 0),
(292, 'joseph joseph Accepted your friend request', 72, 69, '2018-10-31 10:11:28.087890', 0),
(293, 'mary mary sent a friend request to you', 69, 70, '2018-10-31 10:19:28.423828', 0),
(294, 'joseph joseph Accepted your friend request', 70, 69, '2018-10-31 10:19:43.153320', 0),
(295, 'martin tgdrfgdbwin sent a friend request to you', 1, 84, '2018-11-01 17:16:32.291015', 0),
(296, 'martin tgdrfgdbwin sent a friend request to you', 83, 84, '2018-11-01 17:16:48.106445', 0),
(297, 'martin tgdrfgdbwin sent a friend request to you', 82, 84, '2018-11-01 17:16:49.194335', 0),
(298, 'martin tgdrfgdbwin sent a friend request to you', 11, 84, '2018-11-01 17:18:03.620117', 0),
(299, 'martin tgdrfgdbwin sent a friend request to you', 80, 84, '2018-11-01 17:35:09.902343', 0),
(300, 'martin tgdrfgdbwin sent a friend request to you', 78, 84, '2018-11-01 17:35:11.806640', 1),
(301, 'martin tgdrfgdbwin sent a friend request to you', 78, 84, '2018-11-01 17:35:17.365234', 1),
(302, 'vasu sss Accepted your friend request', 84, 78, '2018-11-01 18:26:37.052734', 0),
(303, 'vasu sss Accepted your friend request', 84, 78, '2018-11-01 18:26:40.077148', 0),
(304, 'vasu sss sent a friend request to you', 2, 78, '2018-11-01 18:28:25.159179', 0),
(305, 'vasu sss sent a friend request to you', 82, 78, '2018-11-01 18:29:07.053710', 0),
(306, 'jiss ss Accepted your friend request', 84, 82, '2018-11-01 18:29:49.509765', 0),
(307, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 18:32:03.180664', 0),
(308, 'jiss ss sent a friend request to you', 83, 82, '2018-11-01 18:32:16.016601', 0),
(309, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 18:38:55.624023', 0),
(310, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 18:53:16.607421', 0),
(311, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 18:53:20.711914', 0),
(312, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 18:57:29.803710', 0),
(313, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 18:59:27.636718', 0),
(314, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 19:01:48.897460', 0),
(315, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 19:02:13.806640', 0),
(316, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 19:02:49.145507', 0),
(317, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 19:04:07.350585', 0),
(318, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 19:07:53.012695', 0),
(319, 'jiss ss sent a friend request to you', 80, 82, '2018-11-01 19:08:05.306640', 0),
(320, 'jhon homnay Accepted your friend request', 82, 80, '2018-11-01 19:11:21.421875', 0),
(321, 'jiss ss sent a friend request to you', 78, 82, '2018-11-02 10:32:01.231445', 1),
(322, 'vasu sss sent a friend request to you', 82, 78, '2018-11-02 10:49:10.672851', 0),
(323, 'vasu sss sent a friend request to you', 82, 78, '2018-11-02 10:52:57.041015', 0),
(324, 'vasu sss sent a friend request to you', 82, 78, '2018-11-02 10:53:05.534179', 0),
(325, 'vasu sss sent a friend request to you', 82, 78, '2018-11-02 10:58:30.725585', 0),
(326, 'vasu sss sent a friend request to you', 82, 78, '2018-11-02 11:01:56.709960', 0),
(327, 'jiss ss sent a friend request to you', 78, 82, '2018-11-02 11:07:08.510742', 1),
(328, 'jiss ss sent a friend request to you', 78, 82, '2018-11-02 11:23:08.465820', 1),
(329, 'vasu sss Accepted your friend request', 82, 78, '2018-11-02 11:23:55.586914', 0),
(330, 'jiss ss sent a friend request to you', 78, 82, '2018-11-02 11:30:14.189453', 1),
(331, 'jiss ss sent a friend request to you', 78, 82, '2018-11-02 11:30:38.387695', 1),
(332, 'jiss ss sent a friend request to you', 78, 82, '2018-11-02 11:30:43.126953', 1),
(333, 'vasu sss sent a friend request to you', 82, 78, '2018-11-02 11:30:47.500976', 0),
(334, 'vasu sss Accepted your friend request', 82, 78, '2018-11-02 11:30:57.942382', 0),
(335, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 14:54:43.794921', 0),
(336, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 14:55:09.607421', 0),
(337, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 14:55:14.480468', 0),
(338, 'jiss ss Accepted your friend request', 78, 82, '2018-11-02 14:55:43.195312', 1),
(339, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 15:33:58.206054', 0),
(340, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 15:34:12.124023', 0),
(341, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 15:34:18.329101', 0),
(342, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 15:34:25.452148', 0),
(343, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 15:34:50.230468', 0),
(344, 'vasu ssst sent a friend request to you', 85, 78, '2018-11-02 15:40:41.534179', 0),
(345, 'vasu ssst sent a friend request to you', 85, 78, '2018-11-02 15:40:46.868164', 0),
(346, 'vasu ssst sent a friend request to you', 84, 78, '2018-11-02 15:48:17.768554', 0),
(347, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 15:48:18.432617', 0),
(348, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:51:47.235351', 0),
(349, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:51:50.003906', 0),
(350, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:51:52.255859', 0),
(351, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:52:53.878906', 0),
(352, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:52:56.614257', 0),
(353, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:53:00.034179', 0),
(354, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:53:30.817382', 0),
(355, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 15:59:05.164062', 0),
(356, 'vasu ssst sent a friend request to you', 55, 78, '2018-11-02 16:29:42.236328', 0),
(357, 'vasu ssst sent a friend request to you', 85, 78, '2018-11-02 16:37:52.342773', 0),
(358, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:38:56.249023', 0),
(359, 'jiss ss Accepted your friend request', 78, 82, '2018-11-02 16:39:16.198242', 0),
(360, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:39:58.510742', 0),
(361, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:41:25.069335', 0),
(362, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:42:56.575195', 0),
(363, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:43:00.250000', 0),
(364, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:43:27.866210', 0),
(365, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:44:54.508789', 0),
(366, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:46:18.465820', 0),
(367, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:46:22.689453', 0),
(368, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:46:51.443359', 0),
(369, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:46:51.689453', 0),
(370, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:47:41.137695', 0),
(371, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:49:28.699218', 0),
(372, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:49:40.199218', 0),
(373, 'vasu ssst sent a friend request to you', 82, 78, '2018-11-02 16:49:48.784179', 0),
(374, 'jiss ss Accepted your friend request', 78, 82, '2018-11-02 16:50:11.775390', 0);

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
(41, 17, '2018-09-04 15:16:48', 0, '2018-10-05 14:10:00'),
(42, 18, '2018-09-04 16:49:40', 0, '2018-10-01 11:57:38'),
(43, 19, '2018-09-05 11:15:22', 0, '2018-09-05 11:17:31'),
(44, 20, '2018-09-05 12:00:44', 0, '2018-09-05 12:25:22'),
(45, 21, '2018-09-05 12:01:18', 0, '2018-09-05 12:26:09'),
(46, 22, '2018-09-07 10:16:30', 1, NULL),
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
(57, 38, NULL, 0, '2018-10-05 14:11:20'),
(58, 39, NULL, 0, '2018-09-21 14:40:07'),
(59, 40, NULL, 1, NULL),
(60, 41, NULL, 0, '2018-10-01 14:32:11'),
(61, 42, NULL, 0, '2018-10-01 18:13:37'),
(62, 43, NULL, 0, '2018-09-26 11:51:27'),
(63, 57, NULL, 0, '2018-10-03 16:12:46'),
(64, 58, NULL, 1, NULL),
(65, 10, NULL, 0, '2018-10-07 14:09:19'),
(66, 59, NULL, 0, '2018-10-20 23:54:21'),
(67, 60, NULL, 0, '2018-10-21 17:42:58'),
(68, 61, NULL, 1, NULL),
(69, 63, NULL, 1, NULL),
(70, 64, NULL, 1, '2018-10-13 22:06:27'),
(71, 65, NULL, 1, NULL),
(72, 66, NULL, 1, NULL),
(73, 67, NULL, 1, '2018-10-21 11:08:04'),
(74, 68, NULL, 1, NULL),
(75, 69, NULL, 0, '2018-11-01 12:54:29'),
(76, 70, NULL, 1, NULL),
(77, 71, NULL, 1, NULL),
(78, 72, NULL, 0, '2018-10-31 10:09:53'),
(79, 78, NULL, 1, NULL),
(80, 80, NULL, 1, NULL),
(81, 81, NULL, 0, '2018-11-01 18:07:42'),
(82, 84, NULL, 0, '2018-11-01 17:35:22'),
(83, 82, NULL, 1, NULL),
(84, 85, NULL, 1, '2018-11-02 12:34:45');

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
(146, 42, 17, '2018-09-25 18:39:41'),
(147, 63, 59, '2018-10-14 22:55:25'),
(148, 59, 68, '2018-10-21 11:24:10'),
(149, 70, 69, '2018-10-22 20:05:56'),
(150, 69, 70, '2018-10-22 20:10:27'),
(151, 70, 70, '2018-10-24 14:29:07'),
(152, 71, 69, '2018-10-24 16:33:15'),
(153, 2, 69, '2018-10-24 17:35:51'),
(154, 5, 69, '2018-10-25 12:10:14'),
(155, 14, 69, '2018-10-25 12:21:14'),
(156, 72, 69, '2018-10-29 14:27:18'),
(157, 14, 70, '2018-10-29 17:42:06'),
(158, 11, 69, '2018-10-29 18:06:51'),
(159, 12, 70, '2018-10-29 18:30:33'),
(160, 72, 70, '2018-10-29 18:39:56'),
(161, 9, 69, '2018-10-29 18:47:24'),
(162, 69, 72, '2018-10-29 19:07:59'),
(163, 1, 69, '2018-10-30 15:54:34'),
(164, 1, 70, '2018-10-31 09:56:20'),
(165, 2, 84, '2018-11-01 17:16:33'),
(166, 1, 84, '2018-11-01 17:18:22'),
(167, 84, 78, '2018-11-01 17:36:55'),
(168, 5, 78, '2018-11-01 18:09:00'),
(169, 2, 78, '2018-11-01 18:28:39'),
(170, 78, 82, '2018-11-01 18:29:34'),
(171, 84, 82, '2018-11-01 18:29:45'),
(172, 2, 82, '2018-11-01 18:30:19'),
(173, 80, 82, '2018-11-01 18:33:02'),
(174, 82, 80, '2018-11-01 19:08:50'),
(175, 82, 78, '2018-11-02 10:32:31'),
(176, 85, 78, '2018-11-02 15:40:28'),
(177, 55, 78, '2018-11-02 15:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `stranger_det`
--

CREATE TABLE `stranger_det` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `requestedtime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stranger_det`
--

INSERT INTO `stranger_det` (`id`, `user_id`, `status`, `requestedtime`) VALUES
(209, 69, 1, '2018-10-31'),
(210, 69, 1, '2018-10-31'),
(217, 78, 1, '2018-11-01');

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
  `session_id` varchar(100) DEFAULT NULL,
  `oauth_provider` varchar(50) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `modified` datetime NOT NULL,
  `series_identifier` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `user_name`, `password`, `gender`, `dob`, `age`, `mobile`, `fb_id`, `twitter_id`, `status`, `created_at`, `session_id`, `oauth_provider`, `oauth_uid`, `modified`, `series_identifier`, `token`) VALUES
(1, 'Ramachandran k', 'ram@gmail.com', 'ram', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '1234', '', '', 1, '2018-07-23 20:51:59', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(2, 'tester', 'sk@s.com', 'test', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(3, 'tester1', 'sk1@s.com', 'test1', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(4, 'tester2', 'sk2@s.com', 'test2', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(5, 'tester3', 'sk3@s.com', 'test3', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(6, 'tester4', 'sk4@s.com', 'test4', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(7, 'tester5', 'sk5@s.com', 'test5', 'c20ad4d76fe97759aa27a0c99bff6710', 0, '0000-00-00', 0, '5467', NULL, NULL, 1, '2018-07-24 13:19:51', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(8, 'jaison', 'jaisongeorgephilip@gmail.com', 'ja', 'c332903a80e5f83500c760326603fc8a', 0, '0000-00-00', 0, '918501933395', NULL, NULL, 1, '2018-07-30 20:54:56', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(9, 'abhi', 'abhi@gmail.com', 'abhi', '167784d36ab99e49738fe6a6a98798b7', 0, '0000-00-00', 0, '1234567893', NULL, NULL, 1, '2018-07-30 22:13:48', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(11, 'FebinJoy', 'febin@febinjoy.com', 'FebinJoy', 'fc75b1b545dc48232c30685f6eaba5ed', 0, '0000-00-00', 0, '9567224808', NULL, NULL, 1, '2018-08-01 00:05:32', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(12, 'sajith', 'sajithsmgodwin@gmail.com', 'sajith', '8848718ee97fa510d2f4985892193c20', 0, '0000-00-00', 0, '9597097129', NULL, NULL, 1, '2018-08-01 15:19:38', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(13, 'abcd', 'abcd@gmail.com', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 0, '0000-00-00', 0, '1212', NULL, NULL, 1, '2018-08-01 16:16:22', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(14, 'samabhi', 'abhisam@gmail.com', 'samabhi', '202cb962ac59075b964b07152d234b70', 0, '0000-00-00', 0, '9656566356', NULL, NULL, 1, '2018-08-09 14:47:01', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(15, 'codeface', 'codeface@gmail.com', 'code', 'c13367945d5d4c91047b3b50234aa7ab', 0, '0000-00-00', 0, '12', NULL, NULL, 1, '2018-08-09 15:19:38', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(16, 'name', 'email@e.com', 'name', 'e10adc3949ba59abbe56e057f20f883e', 0, '0000-00-00', 0, '2222', NULL, NULL, 1, '2018-08-28 16:21:28', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(18, 'manu', 'manu@gmail.com', 'manu', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0, '0000-00-00', 0, '78878778878787', NULL, NULL, 1, '2018-09-04 16:49:27', '2_MX40NjE2MzI5Mn5-MTUzNjIzNzQ5NTA4Mn54MUxxN1BJbUhzMGhqV04wQkZId29MbWx-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(19, 'abc', 'abc@gmail.com', 'qqq', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '12345678', NULL, NULL, 1, '2018-09-05 11:15:12', '2_MX40NjE2MzI5Mn5-MTUzNjEyNjM3ODMyOX41RHA5L1ZVT3NLV0xOWHhuVWhSSTR5L0J-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(20, 'raja', 'raja@gmail.com', 'raja', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-05 12:00:32', '2_MX40NjE2MzI5Mn5-MTUzNjEyOTAzODMyOH5mYTRoNVY2cjJORm02TGlVM2N5MW1DZ2h-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(21, 'rani', 'rani@gmail.com', 'rani', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-05 12:01:07', '2_MX40NjE2MzI5Mn5-MTUzNjEyOTA3MjE3NX5JWERmbVNlRUxldXdDTDliQnIyZnliYTl-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(22, 'ddd', 'all@gmail.com', 'alp', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1, '2018-10-20', 0, '87878878787', NULL, NULL, 1, '2018-09-07 10:14:38', '2_MX40NjE2MzI5Mn5-MTUzNjI5NTU3OTI5Nn5tK0k0Mmc1aG95OXRuY3h1Y1NuY3M5RER-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(23, 'dell', 'dell@gmail.com', 'dell', '25d55ad283aa400af464c76d713c07ad', 0, '0000-00-00', 0, '8089245010', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjYzNzMyODQ1NH42eUc0U3J0a3hnVUpmTmU4TUZxY05Wcm1-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(24, 'rem', 'rem@gmail.com', 'rem', '25d55ad283aa400af464c76d713c07ad', 1, '1990-11-11', 18, '787887887878', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjgxNTU2NjAzMH4xMTFRYzE1c0ptYWVOTFZTV24zM0d5OGJ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(25, 'bijo', 'bijo@mail.com', 'bijo', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '57637567756', NULL, NULL, 1, NULL, '1_MX40NjE2MzI5Mn5-MTUzNjgyMTg0OTkxOH56Y1RsUFV2aTFvZzFoZFVLcTNJMW02NGF-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(26, 'vbvb', 'dfh@mail.comyh', '55', '949be6221e0a43f9a1f3725c7ae52bec', 2, '0000-00-00', 0, '45767575', NULL, NULL, 1, NULL, NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(27, 'alphnse', 'apll@djhjd.com', 'alphnse', '25d55ad283aa400af464c76d713c07ad', 2, '2011-11-11', 0, '5456456456', NULL, NULL, 1, NULL, '2_MX40NjE2MzI5Mn5-MTUzNjgyOTI0MTI5Mn5QSUxDQlZ3SWh4Q0F5ZVVGSFoxdXdpNG9-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(28, 'son', 'der@xdgd.com', 'derin', '25d55ad283aa400af464c76d713c07ad', 1, '1990-01-01', 0, '789797899', NULL, NULL, 1, '2018-09-14 18:16:18', '1_MX40NjE2MzI5Mn5-MTUzNjkyOTE5NTc5NX5VUkNuU2hNMUpoZmR0Zkc3WlBLUmZJZG9-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(29, 'rt', 'rttt@cghcfj', 'rt', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '78987978789', NULL, NULL, 1, '2018-09-14 18:37:18', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(30, 'sa', 'cfemp08wd@gmail.com', 'kuttu', '363ab055963fb24eff2cfc02437ec228', 1, '0000-00-00', 0, '76898090980', NULL, NULL, 1, '2018-09-14 18:59:52', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(31, 'abc', 'hderin@gmail.com', 'ooo', '25d55ad283aa400af464c76d713c07ad', 2, '0000-00-00', 0, '5447477564', NULL, NULL, 1, '2018-09-14 19:46:08', '2_MX40NjE2MzI5Mn5-MTUzNjkzNDU4MTI1N35QSVRYSzltWWRqbE00SHRJSjhKTUdHRjJ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(32, 'anja', 'anja@mail.com', 'anjaly', '25d55ad283aa400af464c76d713c07ad', 2, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-17 09:41:17', '1_MX40NjE2MzI5Mn5-MTUzNzE1NzQ4NTA3M35OVktMQzlDUXNRb05NZXZOWVFsTno1dyt-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(33, 'fgfg', 'fgdf@gmail.com', 'lal', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '34366634', NULL, NULL, 1, '2018-09-18 12:38:48', '1_MX40NjE2MzI5Mn5-MTUzNzI1NDU0MjUzMX45Qms5MGZ6TXB2WVJLSUJGdzAyWUVPcHl-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(34, 'don', 'deon@gmail.com', 'don', 'e10adc3949ba59abbe56e057f20f883e', 1, '0000-00-00', 0, '987456123', NULL, NULL, 1, '2018-09-19 16:33:58', '1_MX40NjE2MzI5Mn5-MTUzNzM1NTAyNzM4NH4zMUMyOEw0aGQrOWI0VWJZbnlBOWFLUWh-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(35, 'dd', 'cfeddmp08d@gmail.com', '12', '3a08fe7b8c4da6ed09f21c3ef97efce2', 1, '0000-00-00', 0, '12354534', NULL, NULL, 1, '2018-09-19 18:03:25', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(36, 'jibin', 'jin@gmail.com', 'jibin', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '4545454544', NULL, NULL, 1, '2018-09-20 10:58:43', '1_MX40NjE2MzI5Mn5-MTUzNzQyMTM1MDkwNH5mcU55dkp2VGhqNndxZE1PMjBId0dpQkV-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(37, 'ammu', 'ammu@hmdkd.com', 'ammuz', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '8777666665', NULL, NULL, 1, '2018-09-20 12:41:10', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(38, 'god', 'god@gmail.com', 'god', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '8089245010', NULL, NULL, 1, '2018-09-21 14:10:21', '1_MX40NjE2MzI5Mn5-MTUzNzUxOTI2OTI4MH5BamZrYjRSV1BHRi9mQXhGZk1FZnZ2UFF-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(39, 'angel', 'angel@gmail.com', 'angel', '25d55ad283aa400af464c76d713c07ad', 2, '0000-00-00', 0, '98989898', NULL, NULL, 1, '2018-09-21 14:11:01', '1_MX40NjE2MzI5Mn5-MTUzNzUxOTI5NzA4MX5Za1l3aHVEY0RkZmlkVDNlRTdCN2N1THF-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(40, 'son', 'son@mai.com', 'son', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '9874561278', NULL, NULL, 2, '2018-09-21 14:41:59', '1_MX40NjE2MzI5Mn5-MTUzNzUyMTEyMTMyOX44S0pzSC8xaUxqSENPcUNUdFJJZVRBM0d-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(41, 'ddoo', 'daon@nhajka.com', 'dona', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1, '0000-00-00', 0, '98989898', NULL, NULL, 1, '2018-09-21 16:27:25', '1_MX40NjE2MzI5Mn5-MTUzNzUyNzQ2NjUyMH5WU3F5Um14L2c0K3N5RXprcnB5TjBTb1N-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(42, 'subin', 'subin@mail.com', 'subin', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '987654656', NULL, NULL, 1, '2018-09-21 16:28:00', '2_MX40NjE2MzI5Mn5-MTUzNzUyNzYwNjQ3OH40U1BrWHdGYXdSVjUwMEd2QlliMUhmYUZ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(43, 'ajo joseph', 'ajo@mail.com', 'ajo', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '78979779', NULL, NULL, 1, '2018-09-26 11:50:34', '1_MX40NjE2MzI5Mn5-MTUzNzk0Mjg3NTgwMn5teWU5dXNwOHBhb1ZaU045bXRubGc4WmN-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(44, 'dfg df', 'cfemp08d@gmail.com', 'dfgdg', 'af1cdd976628f311b3ff1a3510eb4c6c', 2, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 11:57:09', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(46, 'wq qw', 'sdffsd@gmail', 'wq', '25d55ad283aa400af464c76d713c07ad', 1, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 12:03:34', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(47, 'g d', 'dfgfdgg@rtgd', 'jhkkkjjkk', '4767fcced49357286f525acfc715ea13', 1, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 12:26:34', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(48, 'ghghfhfh fgdgdfgdg', 'dfall@gmail.com', 'fgdgdgdgfd', 'fdce95690bca1428184fbc0feb476782', 2, '0000-00-00', 0, '', NULL, NULL, 1, '2018-09-26 14:02:11', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(49, 'df sdf', 'dsf@hdfhh', 'dfsgsg', 'b73b601e6d8792108b49b230ad3e0def', 1, '1970-01-01', 0, '', NULL, NULL, 1, '2018-09-26 14:05:30', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(50, 'sf sdf', 'sdfsfd@gsnfgngh', 'dhhdhd', '75f8800f49110f43145a35b0d8043ae0', 1, '1970-01-01', 0, '', NULL, NULL, 1, '2018-09-26 14:22:16', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(51, 'dgalex gh', 'degrin@gmail.com', 'gh', 'b4ddd6b79be053b61c7aa86caa351c5a', 2, '2011-11-11', 0, '', NULL, NULL, 1, '2018-09-26 14:23:36', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(52, 'der sdf', 'bhcf@dfd', 'fuuf', '72c4ca7185f759cf0965566f8e7ac3f8', 1, '1970-01-01', 0, '', NULL, NULL, 1, '2018-09-26 16:13:54', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(53, 'dgd', 'dfdfdf@sttst', 'fghdh', '71d5e6204fb08b452563bfdcb95e71bf', 0, '0000-00-00', 0, '4543334', NULL, NULL, 1, '2018-09-26 19:05:39', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(54, ' sdf', 'derin@gmail.comtttt', 'wwwe', 'ddc452e6f101fdac7ff6f1ee83d8ce8b', 1, '2000-05-09', 0, '', NULL, NULL, 1, '2018-09-27 12:02:44', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(55, ' df', 'cfemp07@gmail.com', 'sajitj123', '88312213c3492c4cd89d297f16cb0fc4', 1, '2000-12-09', 0, '', NULL, NULL, 1, '2018-09-27 12:12:30', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(56, 'ju ju', 'juj@yjhj', 'juju', '25d55ad283aa400af464c76d713c07ad', 1, '2000-01-01', 18, '', NULL, NULL, 1, '2018-10-03 14:30:52', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(57, 'ambrozia kaa', 'amnsdjk@fjk', 'ambro', '25d55ad283aa400af464c76d713c07ad', 1, '1995-01-01', 23, '', NULL, NULL, 1, '2018-10-03 14:37:08', '2_MX40NjE2MzI5Mn5-MTUzODU1NzY0MjQxNH5WMGZRYWNacERmSmlSSmt1VHArTW1qNzd-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(58, 'sh yni', 'shyni@gmail.com', 'shyni', '25d55ad283aa400af464c76d713c07ad', 2, '2000-01-10', 18, '', NULL, NULL, 1, '2018-10-03 16:43:48', '2_MX40NjE2MzI5Mn5-MTUzODU2NTM0ODYzN34wVzBYWGJUY3NtWi9BQXhzeHpZWTQvQXN-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(60, 'nazneen mohammed', 'nazneen@gmail.com', 'nazneen', '583d8c3bc38a14fa7e6c8ab317dd6c1a', 2, '1980-07-10', 38, '', NULL, NULL, 1, '2018-10-09 22:53:27', '1_MX40NjIwMTA5Mn5-MTUzOTI1MzE2OTAyN35XVUIvdHRsRXdsT2s2OS85MS9NMnA2dkV-fg', '', '', '0000-00-00 00:00:00', 'b6b738ac81c97181e36a2dfcb3e5a5e65567a5da', 'dcc53e69442629fb843f1a3cfce36bcec561889a'),
(63, 'irshadtest test', 'irshadtest@gmail.com', 'irshadtest', 'e71ec642c41049181fe837ee9f2ec9fb', 1, '1970-01-01', 48, '', NULL, NULL, 1, '2018-10-13 20:57:51', '1_MX40NjIwMTA5Mn5-MTUzOTQzNTUwODUyN35qcHJITlVwaHZjbENtanhESjZSOVBFdXZ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(64, 'irshadstar test', 'irshadstartest@gmail.com', 'irshadtest1', '583d8c3bc38a14fa7e6c8ab317dd6c1a', 1, '1970-01-01', 48, '', NULL, NULL, 1, '2018-10-13 22:05:35', '1_MX40NjIwMTA5Mn5-MTUzOTQzOTU5NjE3MX5ybnZNRDZwL3dRK1o4K3MwWlRjdFN6V2V-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(68, 'Irshad Illias', 'irshadstar@gmail.com', 'irshadstar@gmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-10-21 05:09:17', '2_MX40NjIwMTA5Mn5-MTU0MDA5MTM2MjE2MX5GZGhZS2RyQzdaS0x0Q0tXRk55TVBUL0h-fg', 'facebook', '1895854510521946', '2018-10-21 11:13:32', NULL, NULL),
(69, 'joseph joseph', 'derin@gmail.comf', 'joseph', '25d55ad283aa400af464c76d713c07ad', 3, '1996-06-11', 22, '', NULL, NULL, 1, '2018-10-22 12:14:39', '1_MX40NjIwMTA5Mn5-MTU0MDE5MDY4MTYxM351ZDBCMWtQb05RYXNrcHZwUzNTZXdYSDB-fg', '', '', '0000-00-00 00:00:00', 'fbab888cc4e405d646bafb0e8d843cc00ffa9941', 'f31cf3b062e3a972adaa80be79198bd65ff493f1'),
(70, 'mary mary', 'derin@gmail.comyy', 'mary', '25d55ad283aa400af464c76d713c07ad', 3, '1990-01-10', 28, '', NULL, NULL, 1, '2018-10-22 12:29:45', '2_MX40NjIwMTA5Mn5-MTU0MDE5MTY3OTIxN35ROGhONlNjL0t3Q2laeThHLzE3My9BUDZ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(71, 'dq qq', 'cfemp08d@gmail.comqq', 'dq', '25d55ad283aa400af464c76d713c07ad', 1, '2000-04-10', 18, '', NULL, NULL, 1, '2018-10-24 15:41:11', '1_MX40NjIwMTA5Mn5-MTU0MDM3NTg1OTk2MX5hdDd4UU9hNmVCN1Ara096ZkEyd2VlRlZ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(72, 'alp nsa', 'derin@gmail.comrr', 'aru', '25d55ad283aa400af464c76d713c07ad', 1, '2000-02-10', 18, '', NULL, NULL, 1, '2018-10-29 11:06:25', '2_MX40NjIwMTA5Mn5-MTU0MDc5MTM5MjI4NH5VN3ZVVkFzSHpPTDhaUE81d05qcFNLKzN-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(73, 'jijo sdf', 'cfemp08d@gmail.comh', 'jijo', '7fa8282ad93047a4d6fe6111c93b308a', 1, '0000-00-00', 48, '', NULL, NULL, 1, '2018-10-31 11:53:03', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(74, 'rr rr', 'rtrt@gdfgdr', 'rrr', '25d55ad283aa400af464c76d713c07ad', 1, '1970-01-01', 48, '', NULL, NULL, 1, '2018-10-31 12:26:37', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(75, 'we we', 'derin@gmail.comerr', 'yuy', '25d55ad283aa400af464c76d713c07ad', 1, '1970-01-01', 48, '', NULL, NULL, 1, '2018-10-31 12:27:16', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(76, 'er er', 'cfemp08d@gmail.comrr', 'rr', '0dbab03f8212aef25beec61dcf26c370', 1, '0000-00-00', 0, '', NULL, NULL, 1, '2018-10-31 15:30:40', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(77, 'frr dffd', 'degrin@gmail.comdfd', 'sdfs', '25d55ad283aa400af464c76d713c07ad', 1, '1970-01-01', 48, '', NULL, NULL, 1, '2018-10-31 16:41:12', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(78, 'vasu ssst', 'cfemp08d@gmail.comcc', 'vasu', '25d55ad283aa400af464c76d713c07ad', 2, '0000-00-00', 2018, '', NULL, NULL, 1, '2018-11-01 12:37:48', '1_MX40NjIwMTA5Mn5-MTU0MTA1NjA3NTk3M35ISGM0QTN4U3F3c0RWNlVhQzVMQ1c1RHl-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(79, 'fr ff', 'cfemp08d@gmail.comff', 'ffff', '9b2e91684227b22239d022c0e9c424e5', 1, '1997-11-11', 21, '', NULL, NULL, 1, '2018-11-01 14:09:41', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(80, 'jhon homnay', 'cfemp08d@gmail.comrrfff', 'jhon', '25d55ad283aa400af464c76d713c07ad', 1, '1970-01-01', 25, '', NULL, NULL, 1, '2018-11-01 14:10:54', '2_MX40NjIwMTA5Mn5-MTU0MTA2MTY2MjE2OX4xZTR5NTVWaDhEeFRlQUNiS2w0Z0dUN2N-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(81, 'abin rtr', 'all@gmail.comsss', 'abin', '25d55ad283aa400af464c76d713c07ad', 3, '1993-01-01', 25, '', NULL, NULL, 1, '2018-11-01 14:13:07', '2_MX40NjIwMTA5Mn5-MTU0MTA2MTgyMjQxMH4vb2grcUFaNkNlN3h1dUFvaUN5VDc2T1N-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(82, 'jiss ss', 'cfemp08d@gmail.comrrss', 'jiss', '25d55ad283aa400af464c76d713c07ad', 2, '1995-03-01', 23, '', NULL, NULL, 1, '2018-11-01 14:15:33', '2_MX40NjIwMTA5Mn5-MTU0MTA3NzE1MjI4Nn5WMjhQdmNYZmJqOFNXZ3BWSzBPZ2lPNTZ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(83, 'fgh g', 'cfemp08d@gmail.comrrgh', 'ghgh', '79c5202b7c271f69f709f618ccc5e50e', 1, '1993-08-17', 25, '', NULL, NULL, 1, '2018-11-01 15:19:27', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(84, 'martin tgdrfgdbwin', 'cfemp08d@gmail.comgg', 'martin', '25d55ad283aa400af464c76d713c07ad', 1, '2000-11-01', 18, '', NULL, NULL, 1, '2018-11-01 15:21:29', '1_MX40NjIwMTA5Mn5-MTU0MTA2NTkwODI3Nn44WDFkbFAzQ05ZNVYxQWozSmVadU1QSHZ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(85, 'dona joseph', 'derin@gmail.comggg', 'do', '25d55ad283aa400af464c76d713c07ad', 1, '2000-11-01', 18, '', NULL, NULL, 1, '2018-11-02 12:34:33', '2_MX40NjIwMTA5Mn5-MTU0MTE0MjI3MDkyOX5wRnVYTEtIUDhIRUxWM3dTUFpxYzlzc1B-fg', '', '', '0000-00-00 00:00:00', NULL, NULL);

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
(18, 28, 'bhjj', 0, 1, '2018-10-02 16:36:34'),
(19, 38, 'fgyhfgy', 1, 1, '2018-10-05 12:10:03'),
(20, 38, 'der', 1, 1, '2018-10-05 12:11:25'),
(21, 17, 'sajiththth', 1, 1, '2018-10-05 12:12:43'),
(22, 17, 'sdddsdsddddsddsds', 1, 1, '2018-10-05 12:16:18'),
(23, 17, 'uuu', 1, 1, '2018-10-05 12:35:13'),
(24, 17, 'hi', 1, 1, '2018-10-05 13:08:03'),
(25, 22, 'dd', 1, 1, '2018-10-05 17:25:35'),
(26, 69, 'sdfsffsd', 2, 1, '2018-10-22 12:25:56'),
(27, 69, 'fgd', 1, 1, '2018-10-22 12:34:39'),
(30, 69, 'derin', 0, 1, '2018-10-30 15:56:54'),
(31, 69, 'derin12', 0, 1, '2018-10-30 15:57:03'),
(32, 72, 'aru test', 0, 1, '2018-10-30 15:58:27'),
(33, 70, 'mary', 0, 1, '2018-10-30 15:58:42'),
(34, 70, 'bnmb', 0, 1, '2018-10-30 16:06:16'),
(35, 69, '												\r\n												\r\n													\r\n												\r\n												', 0, 1, '2018-10-31 18:52:46'),
(36, 69, '												\r\n												\r\n													fffffff\r\n												\r\n												', 0, 1, '2018-10-31 19:00:39'),
(37, 78, '												\r\n												\r\n													\r\n												\r\n												', 0, 1, '2018-11-02 14:49:26'),
(38, 78, '												\r\n												\r\n													\r\n												\r\n												', 0, 1, '2018-11-02 14:49:49'),
(39, 78, '												\r\n												\r\n													\r\n												\r\n												', 0, 1, '2018-11-02 14:52:51'),
(40, 78, '												\r\n												\r\n													\r\n												\r\n												', 0, 1, '2018-11-02 15:38:50'),
(41, 78, '												\r\n												\r\n						gggggg  https://www.youtube.com/watch?v=6fD-XLMiUso&list=RD6fD-XLMiUso&start_radio=1							\r\n												\r\n												', 0, 1, '2018-11-02 17:44:47'),
(42, 78, '												\r\n												\r\n							https://www.manoramaonline.com/news/latest-news/2018/11/02/some-ornaments-of-lord-ayyappa-is-missing-swami-sandeepanandagiri.html				\r\n												\r\n												', 0, 1, '2018-11-02 17:45:57'),
(43, 78, 'https://www.manoramaonline.com/news/latest-news/2018/11/02/some-ornaments-of-lord-ayyappa-is-missing-swami-sandeepanandagiri.html\r\n\r\n\r\ngffgfdgggggggggggggggggggggggggggggd\r\n												\r\n													\r\n												\r\n												', 0, 1, '2018-11-02 18:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_feed_image`
--

CREATE TABLE `user_feed_image` (
  `id` int(2) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `feed_id` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_feed_image`
--

INSERT INTO `user_feed_image` (`id`, `image_name`, `feed_id`, `status`) VALUES
(1, 'PHOTO-2018-10-29-10-23-45.jpg', 35, 0),
(2, 'images.jpg', 36, 0),
(3, 'PHOTO-2018-10-29-10-23-45.jpg', 37, 0),
(4, 'PHOTO-2018-10-29-10-23-45.jpg', 38, 0),
(5, 'PHOTO-2018-10-29-10-23-45.jpg', 39, 0),
(6, '', 40, 0),
(7, '', 41, 0),
(8, '', 42, 0),
(9, '', 43, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `user_intrest_list`
--

CREATE TABLE `user_intrest_list` (
  `int_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `intrest_id` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(22, 28, 'download (9).jpg', '2018-10-02 11:27:36', 0),
(23, 22, 'download (4).jpg', '2018-10-05 17:47:28', 0),
(24, 22, 'download (1).jpg', '2018-10-05 17:47:39', 0),
(25, 22, 'download (6).jpg', '2018-10-05 17:47:45', 0),
(26, 22, 'download (2).jpg', '2018-10-05 17:47:53', 0),
(27, 22, 'download (1).jpg', '2018-10-05 17:48:08', 0),
(31, 69, 'Chrysanthemum.jpg', '2018-10-30 14:33:09', 0);

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
  `age_hide` varchar(20) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `gender`, `dob`, `visibility`, `nick_name`, `profile_pic`, `cover_photo`, `description`, `address`, `country_id`, `interest_area`, `created_at`, `age_hide`) VALUES
(1, 2, 2, '', 'true', 'tesr', NULL, NULL, 'testing', NULL, NULL, NULL, '2018-07-24 13:56:25', '1'),
(3, 1, 2, '2018-07-11', 'true', 'ramu', NULL, 'company-cover.jpg', 'Testing Make sense means perfects', 'Perumkadavila', 'India', 'Boy', '2018-07-24 14:40:39', '1'),
(4, 3, 2, '', 'false', 'Tester', NULL, NULL, 'testing purpose', NULL, 'India', NULL, '2018-07-24 14:40:51', '1'),
(5, 5, 1, NULL, 'true', NULL, NULL, NULL, NULL, NULL, 'India', NULL, '2018-07-24 14:40:51', '1'),
(6, 8, 1, '10/04/1987', 'false', 'hhhh', NULL, NULL, NULL, 'asas', 'Country', NULL, '2018-07-30 20:54:56', '1'),
(7, 9, 1, '2018-08-05', 'true', 'sam123', '75b6533d-1537-4b6f-bc16-b1944d467715.jpg', '01_(1).jpg', 'jbsafhgafgjabfbjgafm', 'kerala', 'Kazakhstan', 'Boy', '2018-07-30 22:13:48', '1'),
(8, 10, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-31 23:36:32', '1'),
(9, 11, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 00:05:32', '1'),
(10, 12, NULL, NULL, 'true', NULL, 'about-absolute.png', NULL, NULL, NULL, NULL, NULL, '2018-08-01 15:19:38', '1'),
(11, 13, 1, '', 'false', 'abcd1', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 16:16:22', '1'),
(12, 14, 2, '2018-08-17', 'true', 'samual', NULL, NULL, 'hfhghbnhgvbnvhgjhjhjmbmjhk', 'keral', 'India', NULL, '2018-08-09 14:47:01', '1'),
(13, 15, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-09 15:19:38', '1'),
(14, 16, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-28 16:21:28', '1'),
(15, 17, 0, 'undefined', 'false', 'undefined', 'm-img4.png', 'download (7).jpg', 'dgdgdfghrfg', 'undefined', '3', '3', '2018-09-04 15:13:24', '2'),
(16, 18, NULL, NULL, 'true', NULL, 'Koala.jpg', NULL, NULL, NULL, NULL, NULL, '2018-09-04 16:49:28', '1'),
(17, 19, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 11:15:12', '1'),
(18, 20, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 12:00:33', '1'),
(19, 21, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-05 12:01:07', '1'),
(20, 22, 0, 'undefined', 'false', 'fsad', NULL, NULL, 'bjhkhlh', 'undefined', '11', '2', '2018-09-07 10:14:38', '1'),
(21, 23, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(22, 24, NULL, NULL, 'false', '', 'download (4).jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2'),
(23, 25, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(24, 26, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(25, 27, 1, '', 'false', 'all', 'fbcp.jpg', 'fbcp3.jpg', 'fghfhfgffgasdfff', 'undefined', '10', '2', NULL, '1'),
(26, 28, NULL, NULL, 'false', '', NULL, NULL, NULL, 'undefined', '6', NULL, '2018-09-14 18:16:18', '1'),
(27, 29, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 18:37:18', '1'),
(28, 30, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 18:59:52', '1'),
(29, 31, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-14 19:46:08', '1'),
(30, 32, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-17 09:41:17', '1'),
(31, 33, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-18 12:38:48', '1'),
(32, 34, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-19 16:33:58', '1'),
(33, 35, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-19 18:03:25', '1'),
(34, 36, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-20 10:58:44', '1'),
(35, 37, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-20 12:41:10', '1'),
(36, 38, NULL, NULL, 'true', NULL, NULL, NULL, NULL, 'undefined', '12', NULL, '2018-09-21 14:10:21', '1'),
(37, 39, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-21 14:11:01', '1'),
(38, 40, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, '2', '2018-09-21 14:42:00', '1'),
(39, 41, 2, '2000-11-11', 'false', 'nna', NULL, NULL, 'grfgfddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sss', 'Country', NULL, '2018-09-21 16:27:25', '1'),
(40, 42, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-21 16:28:00', '1'),
(41, 43, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 11:50:34', '1'),
(42, 44, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 11:57:09', '1'),
(43, 46, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 12:03:34', '1'),
(44, 47, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 12:26:34', '1'),
(45, 48, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:02:11', '1'),
(46, 49, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:05:30', '1'),
(47, 50, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:22:16', '1'),
(48, 51, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 14:23:36', '1'),
(49, 52, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 16:13:54', '1'),
(50, 53, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-26 19:05:39', '1'),
(51, 54, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-27 12:02:44', '1'),
(52, 55, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-27 12:12:30', '1'),
(53, 56, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-03 14:30:52', '1'),
(54, 57, NULL, NULL, 'true', NULL, NULL, NULL, NULL, 'undefined', '9', NULL, '2018-10-03 14:37:08', '1'),
(55, 58, NULL, NULL, 'true', NULL, NULL, NULL, NULL, 'undefined', '10', NULL, '2018-10-03 16:43:48', '1'),
(56, 59, NULL, NULL, 'true', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 22:51:29', '1'),
(57, 60, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 22:53:27', '1'),
(60, 64, NULL, NULL, 'true', 'irshu123', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 22:05:35', '1'),
(63, 68, NULL, NULL, 'true', 'Irshad Illias', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-21 11:09:17', '1'),
(64, 69, NULL, NULL, 'false', 'joseph', NULL, NULL, '                      yhfgh      bjnb', NULL, '9', '1', '2018-10-22 12:14:39', '1'),
(65, 70, NULL, NULL, 'false', 'mary', NULL, NULL, NULL, NULL, '8', '1', '2018-10-22 12:29:46', 'true'),
(66, 71, NULL, NULL, 'true', 'ddd', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-24 15:41:12', 'true'),
(67, 72, NULL, NULL, 'true', '12', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-29 11:06:25', 'true'),
(68, 73, NULL, NULL, 'true', 'aaaa', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-31 11:53:04', 'true'),
(69, 74, NULL, NULL, 'true', 'rrr', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-31 12:26:37', 'true'),
(70, 75, NULL, NULL, 'true', 'aaaa', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-31 12:27:17', 'true'),
(71, 76, NULL, NULL, 'true', 'jay', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-31 15:30:41', 'true'),
(72, 77, NULL, NULL, 'true', 'sffs', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-31 16:41:13', 'true'),
(73, 78, NULL, NULL, 'true', 'vasut', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01 12:37:48', 'false'),
(74, 79, NULL, NULL, 'true', 'werwe', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01 14:09:41', 'true'),
(75, 80, NULL, NULL, 'true', 'jhon', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01 14:10:55', 'true'),
(76, 81, NULL, NULL, 'false', 'abin', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01 14:13:07', '1'),
(77, 82, NULL, NULL, 'true', 'jids', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01 14:15:33', 'true'),
(78, 83, NULL, NULL, 'true', 'fghh', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01 15:19:27', 'true'),
(79, 84, NULL, NULL, 'true', 'martinbwin', NULL, NULL, '              fhffhfh', NULL, '7', NULL, '2018-11-01 15:21:30', 'false'),
(80, 85, NULL, NULL, 'true', 'dona', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-02 12:34:33', 'true');

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
-- Indexes for table `stranger_det`
--
ALTER TABLE `stranger_det`
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
-- Indexes for table `user_feed_image`
--
ALTER TABLE `user_feed_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_intrest`
--
ALTER TABLE `user_intrest`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `user_intrest_list`
--
ALTER TABLE `user_intrest_list`
  ADD PRIMARY KEY (`int_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `hide_post`
--
ALTER TABLE `hide_post`
  MODIFY `hd_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `profile_visit`
--
ALTER TABLE `profile_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `stranger_det`
--
ALTER TABLE `stranger_det`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `t_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user_feed`
--
ALTER TABLE `user_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_feed_image`
--
ALTER TABLE `user_feed_image`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_intrest`
--
ALTER TABLE `user_intrest`
  MODIFY `in_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_intrest_list`
--
ALTER TABLE `user_intrest_list`
  MODIFY `int_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_photos`
--
ALTER TABLE `user_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
