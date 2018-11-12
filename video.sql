-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2018 at 07:43 PM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intbuddy_db`
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
(1, 'Afghanistan', 0),
(2, 'Albania', 0),
(3, 'Algeria', 0),
(4, 'Andorra', 0),
(5, 'Angola', 0),
(6, 'Antigua and Barbuda', 0),
(7, 'Argentina', 0),
(8, 'Armenia', 0),
(9, 'Australia', 0),
(10, 'Austria', 0),
(11, 'Azerbaijan', 0),
(12, 'Bahamas', 0),
(13, 'Bahrain', 0),
(14, 'Bangladesh', 0),
(15, 'Barbados', 0),
(16, 'Belarus', 0),
(17, 'Belgium', 0),
(18, 'Belize', 0),
(19, 'Benin', 0),
(20, 'Bhutan', 0),
(21, 'Bolivia', 0),
(22, 'Bosnia and Herzegovi', 0),
(23, 'Botswana', 0),
(24, 'Brazil', 0),
(25, 'Brunei', 0),
(26, 'Bulgaria', 0),
(27, 'Burkina Faso', 0),
(28, 'Burma', 0),
(29, 'Burundi', 0),
(30, 'Cambodia', 0),
(31, 'Cameroon', 0),
(32, 'Canada', 0),
(33, 'Cape Verde', 0),
(34, 'Central African Repu', 0),
(35, 'Chad', 0),
(36, 'Chile', 0),
(37, 'China', 0),
(38, 'Colombia', 0),
(39, 'Comoros', 0),
(40, 'Congo', 0),
(41, 'Cook Islands', 0),
(42, 'Costa Rica', 0),
(43, 'Croatia', 0),
(44, 'Cuba', 0),
(45, 'Cyprus', 0),
(46, 'Czech Republic', 0),
(47, 'C?te d\'Ivoire', 0),
(48, 'Denmark', 0),
(49, 'Djibouti', 0),
(50, 'Dominica', 0),
(51, 'Dominican Republic', 0),
(52, 'East Timor', 0),
(53, 'Ecuador', 0),
(54, 'Egypt', 0),
(55, 'El Salvador', 0),
(56, 'Equatorial Guinea', 0),
(57, 'Eritrea', 0),
(58, 'Estonia', 0),
(59, 'Ethiopia', 0),
(60, 'Fiji', 0),
(61, 'Finland', 0),
(62, 'France', 0),
(63, 'Gabon', 0),
(64, 'Gambia', 0),
(65, 'Georgia', 0),
(66, 'Germany', 0),
(67, 'Ghana', 0),
(68, 'Greece', 0),
(69, 'Grenada', 0),
(70, 'Guatemala', 0),
(71, 'Guinea', 0),
(72, 'Guinea-Bissau', 0),
(73, 'Guyana', 0),
(74, 'Haiti', 0),
(75, 'Honduras', 0),
(76, 'Hungary', 0),
(77, 'Iceland', 0),
(78, 'India', 0),
(79, 'Indonesia', 0),
(80, 'Iran', 0),
(81, 'Iraq', 0),
(82, 'Ireland', 0),
(83, 'Israel', 0),
(84, 'Italy', 0),
(85, 'Ivory Coast', 0),
(86, 'Jamaica', 0),
(87, 'Japan', 0),
(88, 'Jordan', 0),
(89, 'Kazakhstan', 0),
(90, 'Kenya', 0),
(91, 'Kiribati', 0),
(92, 'Korea, North', 0),
(93, 'Korea, South', 0),
(94, 'Kosovo', 0),
(95, 'Kuwait', 0),
(96, 'Kyrgyzstan', 0),
(97, 'Laos', 0),
(98, 'Latvia', 0),
(99, 'Lebanon', 0),
(100, 'Lesotho', 0),
(101, 'Liberia', 0),
(102, 'Libya', 0),
(103, 'Liechtenstein', 0),
(104, 'Lithuania', 0),
(105, 'Luxembourg', 0),
(106, 'Macedonia', 0),
(107, 'Madagascar', 0),
(108, 'Malawi', 0),
(109, 'Malaysia', 0),
(110, 'Maldives', 0),
(111, 'Mali', 0),
(112, 'Malta', 0),
(113, 'Marshall Islands', 0),
(114, 'Mauritania', 0),
(115, 'Mauritius', 0),
(116, 'Mexico', 0),
(117, 'Micronesia', 0),
(118, 'Moldova', 0),
(119, 'Monaco', 0),
(120, 'Mongolia', 0),
(121, 'Montenegro', 0),
(122, 'Morocco', 0),
(123, 'Mozambique', 0),
(124, 'Myanmar / Burma', 0),
(125, 'Nagorno-Karabakh', 0),
(126, 'Namibia', 0),
(127, 'Nauru', 0),
(128, 'Nepal', 0),
(129, 'Netherlands', 0),
(130, 'New Zealand', 0),
(131, 'Nicaragua', 0),
(132, 'Niger', 0),
(133, 'Nigeria', 0),
(134, 'Niue', 0),
(135, 'Northern Cyprus', 0),
(136, 'Norway', 0),
(137, 'Oman', 0),
(138, 'Pakistan', 0),
(139, 'Palau', 0),
(140, 'Palestine', 0),
(141, 'Panama', 0),
(142, 'Papua New Guinea', 0),
(143, 'Paraguay', 0),
(144, 'Peru', 0),
(145, 'Philippines', 0),
(146, 'Poland', 0),
(147, 'Portugal', 0),
(148, 'Qatar', 0),
(149, 'Romania', 0),
(150, 'Russia', 0),
(151, 'Rwanda', 0),
(152, 'Sahrawi Arab Democra', 0),
(153, 'Saint Kitts and Nevi', 0),
(154, 'Saint Lucia', 0),
(155, 'Saint Vincent and th', 0),
(156, 'Samoa', 0),
(157, 'San Marino', 0),
(158, 'Saudi Arabia', 0),
(159, 'Senegal', 0),
(160, 'Serbia', 0),
(161, 'Seychelles', 0),
(162, 'Sierra Leone', 0),
(163, 'Singapore', 0),
(164, 'Slovakia', 0),
(165, 'Slovenia', 0),
(166, 'Solomon Islands', 0),
(167, 'Somalia', 0),
(168, 'Somaliland', 0),
(169, 'South Africa', 0),
(170, 'South Ossetia', 0),
(171, 'Spain', 0),
(172, 'Sri Lanka', 0),
(173, 'Sudan', 0),
(174, 'Suriname', 0),
(175, 'Swaziland', 0),
(176, 'Sweden', 0),
(177, 'Switzerland', 0),
(178, 'Syria', 0),
(179, 'S?o Tom? and Pr?ncip', 0),
(180, 'Taiwan', 0),
(181, 'Tajikistan', 0),
(182, 'Tanzania', 0),
(183, 'Thailand', 0),
(184, 'Timor-Leste / East T', 0),
(185, 'Togo', 0),
(186, 'Tonga', 0),
(187, 'Trinidad and Tobago', 0),
(188, 'Tunisia', 0),
(189, 'Turkey', 0),
(190, 'Turkmenistan', 0),
(191, 'Tuvalu', 0),
(192, 'Uganda', 0),
(193, 'Ukraine', 0),
(194, 'United Arab Emirates', 0),
(195, 'United Kingdom', 0),
(196, 'United States', 0),
(197, 'Uruguay', 0),
(198, 'Uzbekistan', 0),
(199, 'Vanuatu', 0),
(200, 'Vatican City', 0),
(201, 'Venezuela', 0),
(202, 'Vietnam', 0),
(203, 'Yemen', 0),
(204, 'Zambia', 0),
(205, 'Zimbabwe', 0);

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
(1, 9, 67),
(2, 5, 77),
(3, 23, 95),
(4, 54, 86),
(5, 54, 84);

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
(1, 2, 4, 1),
(2, 3, 4, 1),
(3, 4, 3, 1),
(4, 4, 2, 1),
(5, 2, 4, 1),
(6, 4, 5, 1),
(7, 1, 5, 0),
(8, 5, 4, 1),
(9, 5, 4, 1),
(10, 1, 4, 0),
(11, 4, 2, 1),
(15, 3, 5, 0),
(16, 9, 5, 0),
(17, 7, 2, 0),
(18, 2, 5, 1),
(19, 4, 12, 1),
(20, 8, 12, 0),
(21, 12, 4, 1),
(22, 5, 2, 1),
(23, 4, 5, 1),
(24, 18, 19, 1),
(25, 19, 18, 1),
(26, 19, 20, 0),
(27, 18, 20, 0),
(28, 4, 20, 0),
(29, 21, 22, 1),
(31, 20, 24, 1),
(32, 17, 24, 0),
(33, 24, 20, 1),
(34, 18, 27, 0),
(35, 19, 27, 0),
(36, 19, 27, 0),
(37, 22, 21, 1),
(38, 7, 4, 0),
(39, 17, 4, 0),
(40, 24, 4, 1),
(41, 20, 4, 1),
(42, 4, 20, 1),
(43, 16, 28, 0),
(44, 20, 29, 1),
(45, 24, 29, 1),
(46, 29, 20, 1),
(47, 4, 24, 1),
(48, 29, 24, 1),
(49, 20, 37, 1),
(50, 37, 20, 1),
(51, 20, 41, 0),
(52, 31, 44, 0),
(53, 19, 44, 0),
(54, 18, 44, 0),
(55, 18, 45, 0),
(56, 19, 45, 0),
(57, 31, 45, 0),
(58, 51, 52, 1),
(59, 52, 51, 1),
(60, 54, 3, 1),
(61, 3, 54, 1);

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
(1, 2, 82),
(2, 2, 82),
(3, 2, 82),
(4, 2, 82),
(5, 2, 79);

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
  `link` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`n_id`, `messages`, `fri_id`, `user_id`, `cur_time`, `link`, `status`) VALUES
(1, 'derin joseph sent a friend request to you', 54, 3, '2018-11-12 19:34:55.877516', 'https://intbuddy.com/index.php/Profile/profileView/3', 1),
(2, 'sajith sm Accepted your friend request', 3, 54, '2018-11-12 19:35:57.036826', 'https://intbuddy.com/index.php/Profile/profileView/54', 1),
(3, 'sajith sm Liked your post', 3, 54, '2018-11-12 19:36:16.307452', 'https://intbuddy.com/index.php/Profile/notificationview/86', 1),
(4, 'sajith sm Liked your post', 3, 54, '2018-11-12 19:36:20.405328', 'https://intbuddy.com/index.php/Profile/notificationview/84', 1);

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
(1, 1, NULL, 1, NULL),
(2, 2, NULL, 1, NULL),
(3, 3, NULL, 0, '2018-11-12 19:37:44'),
(4, 4, NULL, 1, NULL),
(5, 5, NULL, 1, NULL),
(6, 8, NULL, 1, '2018-11-08 16:29:18'),
(7, 9, NULL, 0, '2018-11-12 19:35:26'),
(8, 10, NULL, 1, NULL),
(9, 11, NULL, 1, '2018-11-08 22:43:42'),
(10, 12, NULL, 1, NULL),
(11, 13, NULL, 1, NULL),
(12, 14, NULL, 1, NULL),
(13, 15, NULL, 1, NULL),
(14, 16, NULL, 0, '2018-11-09 23:56:38'),
(15, 17, NULL, 0, '2018-11-10 00:58:57'),
(16, 18, NULL, 1, NULL),
(17, 19, NULL, 1, NULL),
(18, 20, NULL, 1, NULL),
(19, 21, NULL, 1, NULL),
(20, 22, NULL, 1, '2018-11-10 00:19:00'),
(21, 23, NULL, 1, NULL),
(22, 24, NULL, 1, NULL),
(23, 26, NULL, 1, '2018-11-10 06:13:11'),
(24, 27, NULL, 1, '2018-11-10 10:05:16'),
(25, 28, NULL, 1, '2018-11-10 15:01:44'),
(26, 29, NULL, 1, '2018-11-10 15:17:03'),
(27, 30, NULL, 1, '2018-11-10 18:04:49'),
(28, 31, NULL, 0, '2018-11-10 22:58:45'),
(29, 33, NULL, 1, '2018-11-11 05:05:47'),
(30, 36, NULL, 1, '2018-11-11 05:27:08'),
(31, 37, NULL, 1, NULL),
(32, 38, NULL, 1, '2018-11-11 13:06:44'),
(33, 39, NULL, 1, NULL),
(34, 40, NULL, 1, '2018-11-11 16:21:15'),
(35, 41, NULL, 0, '2018-11-11 20:13:21'),
(36, 42, NULL, 1, '2018-11-11 22:00:28'),
(37, 44, NULL, 1, '2018-11-12 00:47:56'),
(38, 45, NULL, 1, '2018-11-12 01:36:59'),
(39, 49, NULL, 1, '2018-11-12 04:42:53'),
(40, 50, NULL, 1, '2018-11-12 08:47:47'),
(41, 51, NULL, 1, NULL),
(42, 52, NULL, 1, NULL),
(43, 53, NULL, 0, '2018-11-12 10:40:06'),
(44, 54, NULL, 1, NULL),
(45, 55, NULL, 1, '2018-11-12 13:41:33'),
(46, 56, NULL, 1, '2018-11-12 14:30:59'),
(47, 57, NULL, 1, '2018-11-12 15:20:12'),
(48, 58, NULL, 1, '2018-11-12 16:42:05'),
(49, 59, NULL, 1, '2018-11-12 16:42:36');

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
(1, 3, 4, '2018-11-08 13:05:05'),
(2, 4, 3, '2018-11-08 13:06:36'),
(3, 4, 2, '2018-11-08 13:08:39'),
(4, 1, 2, '2018-11-08 13:08:45'),
(5, 2, 4, '2018-11-08 13:10:41'),
(6, 3, 5, '2018-11-08 17:11:56'),
(7, 8, 4, '2018-11-08 17:13:52'),
(8, 3, 9, '2018-11-08 19:41:02'),
(9, 4, 9, '2018-11-08 19:41:44'),
(10, 4, 5, '2018-11-08 20:19:02'),
(11, 9, 5, '2018-11-08 20:25:09'),
(12, 7, 4, '2018-11-08 23:22:21'),
(13, 4, 12, '2018-11-09 00:04:31'),
(14, 12, 4, '2018-11-09 01:02:05'),
(15, 17, 4, '2018-11-09 17:27:17'),
(16, 12, 2, '2018-11-09 21:45:41'),
(17, 12, 18, '2018-11-09 21:53:27'),
(18, 12, 5, '2018-11-10 00:34:12'),
(19, 16, 5, '2018-11-10 00:34:21'),
(20, 18, 26, '2018-11-10 06:14:44'),
(21, 27, 20, '2018-11-10 10:33:53'),
(22, 16, 28, '2018-11-10 15:07:31'),
(23, 28, 20, '2018-11-10 15:29:25'),
(24, 30, 20, '2018-11-10 18:13:26'),
(25, 4, 31, '2018-11-10 22:57:59'),
(26, 32, 20, '2018-11-11 00:22:08'),
(27, 38, 20, '2018-11-11 13:40:00'),
(28, 39, 20, '2018-11-11 14:00:52'),
(29, 40, 20, '2018-11-11 19:19:44'),
(30, 42, 20, '2018-11-12 00:04:11'),
(31, 31, 44, '2018-11-12 00:54:12'),
(32, 51, 52, '2018-11-12 09:56:37'),
(33, 19, 53, '2018-11-12 10:36:12'),
(34, 51, 20, '2018-11-12 10:58:42'),
(35, 24, 20, '2018-11-12 11:41:08'),
(36, 4, 20, '2018-11-12 11:42:26'),
(37, 29, 20, '2018-11-12 11:42:44'),
(38, 3, 3, '2018-11-12 13:14:49'),
(39, 52, 51, '2018-11-12 13:55:33'),
(40, 59, 20, '2018-11-12 17:39:00'),
(41, 58, 20, '2018-11-12 17:39:12'),
(42, 8, 20, '2018-11-12 17:39:54'),
(43, 31, 20, '2018-11-12 17:40:14'),
(44, 3, 54, '2018-11-12 19:35:49'),
(45, 54, 3, '2018-11-12 19:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `stranger_det`
--

CREATE TABLE `stranger_det` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `requestedtime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stranger_det`
--

INSERT INTO `stranger_det` (`id`, `user_id`, `status`, `requestedtime`) VALUES
(67, 59, 1, '2018-11-12 08:45:25');

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
(1, '7a392dcabcb9f744721a', 33, 1);

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
(3, 'derin joseph', 'cfemp08d@gmail.comrr', 'der', '25d55ad283aa400af464c76d713c07ad', 1, '2000-11-01', 18, '', NULL, NULL, 1, '2018-11-08 12:46:48', '1_MX40NjIxNjY1Mn5-MTU0MTY1MjQxNzMyOX5IbFIyd0xZNnc5NHU1MG9WV3FWV3dGRlZ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(4, 'Tom Jose', 'tomjoseme@gmail.com', 'tom', '9c13087e143212128e5c568cc0976813', 1, '1990-10-18', 28, '', NULL, NULL, 1, '2018-11-08 12:49:13', '1_MX40NjIxNjY1Mn5-MTU0MTY1MjU2NzAxMH5oSTkrTHdLUUVmY05BL0s1Z0IwWU83aDJ-fg', '', '', '0000-00-00 00:00:00', '07b40ffbd2b33f8e1781a86c8b2f820e8fc58000', 'c4367c9cd92a9a54ed85bb55b04ae369774038ff'),
(5, 'aneesh cleetus', 'aneeshcleetus1986@gmail.com', 'anishcleetus', 'e10adc3949ba59abbe56e057f20f883e', 1, '2000-11-08', 18, '', NULL, NULL, 1, '2018-11-08 13:30:55', '1_MX40NjIxNjY1Mn5-MTU0MTY1NTA2NzE4NX5tRzN4SkVpWW1PWjllRlZncjNqeTFxdW1-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(7, 'anee cleet', 'an@a.com', 'aneeshcleet', 'e10adc3949ba59abbe56e057f20f883e', 1, '1987-11-17', 31, '', NULL, NULL, 1, '2018-11-08 16:27:43', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(8, 'mintu tom', 'm@m.com', 'mintu', 'e10adc3949ba59abbe56e057f20f883e', 1, '1995-11-09', 23, '', NULL, NULL, 1, '2018-11-08 16:29:08', '2_MX40NjIxNjY1Mn5-MTU0MTY2NTc1NzkwN34wYVB3L1BydUdlREwvaU1TSXR4cE9LWlJ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(9, 'sajith1 1', 'tss@test.com', 'sajith1', 'e10adc3949ba59abbe56e057f20f883e', 1, '2000-11-01', 18, '', NULL, NULL, 1, '2018-11-08 19:36:40', '1_MX40NjIxNjY1Mn5-MTU0MTY3NzAwNzI3OX5wb3cxRHpuUDBMYy9zWm83ZWx1Z1YrZWN-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(12, 'Aneesh Chandran', 'aneeshp555@gmail.com', 'aneeshp555', '0f1ea9c002c3d0912fc9d4388db3be0c', 1, '1986-03-01', 32, '', NULL, NULL, 1, '2018-11-09 00:00:28', '1_MX40NjIxNjY1Mn5-MTU0MTY5Mjg0MDY0Nn42YjdJdEZBdGl5OGJEYUxuZlgwaThYb2x-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(13, 'Aneesh Cleetus', 'aneeshcleetus93@gmail.com', 'aneeshcleetus93@gmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-08 16:04:23', '1_MX40NjIxNjY1Mn5-MTU0MTY5MzA2NDI3N35tRi9QZzhaY2NYNlhTZFVLZ0xDQ0lJWFl-fg', 'facebook', '1881254538659072', '2018-11-09 16:00:31', NULL, NULL),
(15, 'Muhammad Sajid', 'sajidnp29@gmail.com', 'Sajidnp29', '054094928b097fd619cddbed8c83364e', 1, '1989-12-18', 29, '', NULL, NULL, 1, '2018-11-09 00:44:38', '1_MX40NjIxNjY1Mn5-MTU0MTY5NTQ5ODA2OH5RMm5IZHNxYUVlbzVEc1BVMHVKNEZiZXJ-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(16, 'Code Face', 'cfseo2018@gmail.com', 'cfseo2018@gmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-08 18:36:57', '2_MX40NjIxNjY1Mn5-MTU0MTcwMjIxOTcwOX5KUmY5cWMvOFJPWGZ3QnNoeHhVOHdEQlJ-fg', 'facebook', '139745576999184', '2018-11-09 15:56:18', NULL, NULL),
(17, 'Tony Mathew', 'tonyyohannanmathew@gmail.com', 'tonyyohannanmathew@gmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-09 07:45:32', '2_MX40NjIxNjY1Mn5-MTU0MTc0OTUzNDM3Nn5abUh0UGF2OWMwaENtakM4YVo3YVFjUVR-fg', 'facebook', '10217215804485744', '2018-11-09 16:56:41', NULL, NULL),
(18, 'Aly Dingle', 'imalysadingle@gmail.com', 'aly26', '78dbb7cb997ebe8b710bfb7c09ef15fe', 2, '1992-09-26', 26, '', NULL, NULL, 1, '2018-11-09 21:52:07', '1_MX40NjIxNjY1Mn5-MTU0MTc3MTUzOTM2MX5BV3BnbHVXdVJmOHpVSTFoSWlrY1BncG9-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(19, 'Joann jayona', 'joannjayona_0829@yahoo.com', 'jjj000', '7adf6f17a83572434cd1a7a3fd30bb4b', 2, '1989-08-29', 29, '', NULL, NULL, 1, '2018-11-09 21:53:52', '1_MX40NjIxNjY1Mn5-MTU0MTc3MTYzNzQxNn5abHBudEVYNXRzODZnYWIwY0FTeEcxU1p-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(20, 'Tony Mathew', 'tony@emfordglobal.com', 'Donton', 'e10adc3949ba59abbe56e057f20f883e', 1, '1985-01-01', 33, '', NULL, NULL, 1, '2018-11-09 21:58:41', '1_MX40NjIxNjY1Mn5-MTU0MTc3MTkyNTk4Nn43QWVqQlhPa0Zsb3ZNbytSS2s3b0VObnh-fg', '', '', '0000-00-00 00:00:00', 'ad2b7d0afafb7eb094a938e4f030d8a89ee35fba', 'a71718d938c7d75131487d9fcefba39362792191'),
(21, 'Irshad Illias', 'irshadstar@gmail.com', 'irshadstar@gmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-09 16:01:52', '1_MX40NjIxNjY1Mn5-MTU0MTc3OTMxMzc4Nn5KODBSQ0lsNE10eFFFeXRZY2FKelM2Lzh-fg', 'facebook', '1925073884266675', '2018-11-10 02:21:58', NULL, NULL),
(22, 'Nazneen Mohammed', 'nazneenm4@gmail.com', 'nazneenm4@gmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-09 16:18:58', '1_MX40NjIxNjY1Mn5-MTU0MTc4MDMzOTkzNX5hNGgwcWJuWXFRbUNIYi9hdkhjQkoweHB-fg', 'facebook', '10217413818279495', '2018-11-09 16:18:58', NULL, NULL),
(23, 'Joby Mathew', 'jobymathew.2013@gmail.com', 'jobymathew', '8fd18aa43de44a3dc381aa6eb8278b2b', 1, '1976-12-03', 42, '', NULL, NULL, 1, '2018-11-10 01:34:52', '1_MX40NjIxNjY1Mn5-MTU0MTc4NTU1NTM2MX41T2hvQlc2cWhiNkR4WFhrOWVNRXlaNEh-fg', '', '', '0000-00-00 00:00:00', '56f71677762fd3ca8e9e81e78bad2db52b9a334c', '0144e5d198d0cb074c95075170fcd85499370815'),
(24, 'Evette Marin', 'evettemb@yahoo.co.in', 'evettemb@yahoo.co.in', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-09 18:24:22', '2_MX40NjIxNjY1Mn5-MTU0MTc4Nzg2MzYyOH5MbGNGWkl2L0VhOXdWUmtiK2dzU3hwazZ-fg', 'facebook', '10217971183055061', '2018-11-10 10:13:44', NULL, NULL),
(25, 'MO ;', 'moahmed.62@outlook.com', 'MO_DA_BEAST0', 'cfb3eda399111783850136ae3c86f9a4', 1, '1990-11-06', 28, '', NULL, NULL, 1, '2018-11-10 03:56:17', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(26, 'V amp', 'lol418.com@gmail.com', 'Vamp', '655fd3f909c3f48f646e8edb1dc96532', 1, '1994-02-28', 24, '', NULL, NULL, 1, '2018-11-10 06:12:53', '1_MX40NjIxNjY1Mn5-MTU0MTgwMTU5MTM2M35OZUE4cVljRDdIVnlWbDVkZkVxM2VKelJ-fg', '', '', '0000-00-00 00:00:00', '08b555296aadd18448d1f159ef264d515a150962', '3e7de55fe41d938d4c79dcb9b72cc354b3007e6b'),
(27, 'Toby anderson', 'xacu@xcodes.net', 'Tobeymquire', '6b77ed636e42a4458c900350897e2d5a', 1, '2000-02-05', 18, '', NULL, NULL, 1, '2018-11-10 10:05:02', '2_MX40NjIxNjY1Mn5-MTU0MTgxNTUxNjI2Mn5wUXNzeUJLd3diQjR6ZFhkUk1qOWx5V1B-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(28, 'aryan singh', 'aryansingh270@yahoo.com', 'aryansingh270', 'b2087912a9c28dc9cd64b4fa4ff9b3be', 1, '1986-03-23', 32, '', NULL, NULL, 1, '2018-11-10 15:01:28', '2_MX40NjIxNjY1Mn5-MTU0MTgzMzMwNDEzNX5aenFKM3RXbVlrUk9ycFNVRkFEd0FhNDN-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(29, 'Biji Thomas', 'beesbiji@gmail.com', 'beesbiji@gmail.com', '', 1, '0000-00-00', 2019, '', NULL, NULL, 1, '2018-11-10 07:17:01', '1_MX40NjIxNjY1Mn5-MTU0MTgzNDIyMzIwMH5JRWpWOVBPbk1VclFrYlV3S2RTZURlaWF-fg', 'facebook', '10218236645938471', '2018-11-10 07:17:01', NULL, NULL),
(30, 'Fadli Perdana', 'fadliwindwalker@yahoo.co.id', 'fadliwindwalker@yahoo.co.id', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-10 10:04:48', '1_MX40NjIxNjY1Mn5-MTU0MTg0NDI4OTAyMX40QmJOVFNNOU1LSGQ4NDQxV3NQdnhUK2h-fg', 'facebook', '2165352770141482', '2018-11-10 10:04:48', NULL, NULL),
(31, 'Elsa Tom ', 'elsajalal@gmail.com', 'elsamintu', 'fe36f6b99c3db519089848d4873a29a1', 2, '1991-04-24', 27, '', NULL, NULL, 1, '2018-11-10 22:56:56', '1_MX40NjIxNjY1Mn5-MTU0MTg2MTg0MDA4OH5sUE1RWG1DNWZjZHpTU3ovTVFOZ1lnZE1-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(32, 'Jijo Thomas', 'thomasaudit@gmai.com', 'thomasaudit', '8d5d8518ac2f85e6c17bf9ba16b04b38', 1, '1985-06-11', 33, '', NULL, NULL, 1, '2018-11-10 23:08:00', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(33, 'hanafi zakarya', 'lilzakofficiel12@gmail.com', 'lilzakofficiel12', '2d1a578af1be7f8d3fd0c4f8975fba8e', 1, '1987-11-04', 31, '', NULL, NULL, 1, '2018-11-11 04:59:19', '2_MX40NjIxNjY1Mn5-MTU0MTg4Mzk0NzY0OH5qQ2JidG9VQ0MrOFBvcmhVd0dmN2F0Ykx-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(36, 'praveen kumar', 'kumarazadpraveen@gmail.com', 'prav998', 'd29b6c396caef15060b3547ba0e7ee6e', 1, '1998-11-01', 20, '', NULL, NULL, 1, '2018-11-11 05:26:39', '2_MX40NjIxNjY1Mn5-MTU0MTg4NTIyODM3Mn5WWmJPSU9qU2NBSlZIQWRERGpoUFF2M0N-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(37, 'Eappen PANICKER', 'realestate.zarooni@gmail.com', 'Eappen', 'ef7af9b8c970db061ad97db4ffe2502e', 1, '1991-06-22', 27, '', NULL, NULL, 1, '2018-11-11 12:46:58', '2_MX40NjIxNjY1Mn5-MTU0MTkxMTYzOTUwOX4vOEVtVE0vMkM1RWdzUmxIUjNtRy9lamV-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(38, 'jhon real', 'Tcummins93@gmail.com', 'tc', '4bb7b616d85e3fbc4fbde34bb6dcc6f8', 1, '2000-11-02', 18, '', NULL, NULL, 1, '2018-11-11 13:06:27', '2_MX40NjIxNjY1Mn5-MTU0MTkxMjgwNDEwM35TVlpybTUweEFiUmZYL1MwZFcwTktmNjR-fg', '', '', '0000-00-00 00:00:00', '73bb3800a9770769beee6b2483279fc2120cc71f', '04f8338fa200542fdbe148da21cee3e27e32e1be'),
(39, 'Monic Shan', 'varundecker11@gmail.com', 'Monic', '9e4755f8eab67fd0204784f20c2ce915', 1, '1987-11-30', 31, '', NULL, NULL, 1, '2018-11-11 13:47:49', '1_MX40NjIxNjY1Mn5-MTU0MTkxNTI5MzY5NX5QdG16YS91NStUcGlGSGF2SWdYTnU5ZHF-fg', '', '', '0000-00-00 00:00:00', '4158a8ca2fc11e9d7380202d0147891df1958a0e', '0fc3e2971deb51df4242e472438b82dabf566836'),
(40, 'sanju m', 'sanju1919baby@gmail.com', 'sanju1919', '993150c427b0fe6caa5e27bc34c52864', 1, '1997-11-15', 21, '', NULL, NULL, 1, '2018-11-11 16:13:52', '1_MX40NjIxNjY1Mn5-MTU0MTkyNDQ3NDc4MH5yKzZRMlJ1R3VOSThCdHZsa1FseHhUL0h-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(41, 'eric tom biji', 'erictombiji1990@gmail.com', 'itme14', 'f4ba7703a0af45acbde31b65c19ef897', 1, '1990-05-10', 28, '', NULL, NULL, 1, '2018-11-11 20:10:25', '1_MX40NjIxNjY1Mn5-MTU0MTkzODIzNjkwM341Y3g0cmIzbWpSdUsvT3h4U3A0ZHNibGp-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(42, 'fahdi cheema', 'alixee843@gmail.com', 'cheema007', '896cef6cae827adce2012b94c6433191', 1, '1994-11-01', 24, '', NULL, NULL, 1, '2018-11-11 21:59:37', '1_MX40NjIxNjY1Mn5-MTU0MTk0NDgyNzYxNX5xbEloVjJOZERXeEloQXlLKytvelVnNXp-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(43, 'alby alby', 'alby@gmail.com', 'alby', 'e10adc3949ba59abbe56e057f20f883e', 1, '2000-11-08', 18, '', NULL, NULL, 1, '2018-11-12 00:40:31', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(44, 'bagas khoro', 'goyyago@gmail.com', 'bagasasw', '2ef03fce96061738b4d506c4e587854f', 1, '1995-03-17', 23, '', NULL, NULL, 1, '2018-11-12 00:47:33', '1_MX40NjIxNjY1Mn5-MTU0MTk1NDg3NjU3Nn4yWElxMkRPRk96bDI4KysxYmVNYkh0RVN-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(45, 'Aarav kundra', 'arav9086@gmail.com', 'Aarav9086', '9a39a754c38dbbfa6ce1232755ea845b', 1, '2000-11-01', 18, '', NULL, NULL, 1, '2018-11-12 01:36:35', '1_MX40NjIxNjY1Mn5-MTU0MTk1NzgxODkwMn56dFRIeE01QVQvSXVYODI0dFR3cWNqRkR-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(46, 'Adriian Jayakarta', 'andrickwijayanto@yahoo.com', 'Adriian', 'ce5491dd8c67798cd51a755416e21e5f', 1, '1995-09-17', 23, '', NULL, NULL, 1, '2018-11-12 02:11:09', NULL, '', '', '0000-00-00 00:00:00', NULL, NULL),
(49, 'Denny Burton', 'dpv@hotmail.com', 'Tundra2015', '8e893a5850ebcf8147e33aad159624c0', 1, '1983-11-01', 35, '', NULL, NULL, 1, '2018-11-12 04:42:29', '2_MX40NjIxNjY1Mn5-MTU0MTk2ODk3MzEyM35WQnpnTzhlciszcThmUWp6TVdIek5ieFd-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(50, 'George Ppg', 'g.ppgnis@hotmail.com', 'g.ppgnis@hotmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-12 00:47:45', '1_MX40NjIxNjY1Mn5-MTU0MTk4MzY2Njg5MH5CVmFXTHdkclNkbjZPRXN0L2ljSCt0Y0Z-fg', 'facebook', '320228575228859', '2018-11-12 00:47:45', NULL, NULL),
(51, 'Kai Zander', 'K14.kgn@gmail.com', 'kz14', 'da616a4fe54e0f4a3cbceccfce0f2494', 1, '1998-02-06', 20, '', NULL, NULL, 1, '2018-11-12 09:43:01', '1_MX40NjIxNjY1Mn5-MTU0MTk4Njk5Mzc4OX5pQ0M4MmlBdENhMDd1cWhDcFlMbnFzeGx-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(52, 'L X', 'jagged.edge@icloud.com', 'lancey', '63fd79001f6784c48f43a2fff7a1bbfd', 1, '2000-05-07', 18, '', NULL, NULL, 1, '2018-11-12 09:52:13', '2_MX40NjIxNjY1Mn5-MTU0MTk4NzU1NTY4MH5Wb0oxNTRXUVZJVHkwK0gwT28wUncvSE5-fg', '', '', '0000-00-00 00:00:00', 'f6e628479b8348f30006b7c6d6df0009df1be211', 'a3fac3536bc34a513d21870dc0bc3811dbf539ee'),
(53, 'Mahesh Ravi Bose', 'mwmaheshwaran@gmail.com', 'mwmaheshwaran@gmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-12 02:35:01', '1_MX40NjIxNjY1Mn5-MTU0MTk5MDEwMzE2Nn5NejFONG4vNU5DV2x6Ni85Wm0rMHFnYVp-fg', 'facebook', '1947779298647824', '2018-11-12 02:35:01', NULL, NULL),
(54, 'sajith sm', 'admin@gmail.com', 'sajith123', 'e10adc3949ba59abbe56e057f20f883e', 1, '2000-11-01', 18, '', NULL, NULL, 1, '2018-11-12 12:34:59', '1_MX40NjIxNjY1Mn5-MTU0MTk5NzMwODY3MX4xMnh4Mzk3eFhnQS9vejY5ODg5bXF1WGp-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(55, 'Jake V', 'thalesbrazildf@hotmail.com', 'thalesvasconcelos', '9c33b522aadb75053123b52bc4413556', 1, '2000-05-27', 18, '', NULL, NULL, 1, '2018-11-12 13:40:41', '1_MX40NjIxNjY1Mn5-MTU0MjAwMTI5MzI4Nn5OMTlWcEtWcXA1OGtodzdOck1TczRBSmN-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(56, 'Ivan Drago', 'hravich@hotmail.com', 'Drago', 'c5b9e3606ec1682a66b04eb4b228b193', 1, '1991-11-28', 27, '', NULL, NULL, 1, '2018-11-12 14:28:18', '2_MX40NjIxNjY1Mn5-MTU0MjAwNDI1OTU4Nn5STGlUZ0xISGpUL0ZsZHZqWUU1SU1BWVR-fg', '', '', '0000-00-00 00:00:00', NULL, NULL),
(57, 'Matthias Goukens', 'matthiasje222@hotmail.com', 'matthiasje222@hotmail.com', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-12 07:20:11', '1_MX40NjIxNjY1Mn5-MTU0MjAwNzIxMjE5MH5KQkJnV3VONDl5L2ZFd3AvM2xGUHhMUnF-fg', 'facebook', '1982179965173724', '2018-11-12 07:20:11', NULL, NULL),
(58, 'George Fappiano Jr.', 'g.fapps@att.net', 'g.fapps@att.net', '', 0, '0000-00-00', 0, '', NULL, NULL, 1, '2018-11-12 08:42:03', '2_MX40NjIxNjY1Mn5-MTU0MjAxMjEyNDkxOH5xSmxnUEtHTEU5eTV2d3dZUjlWY1VQaFR-fg', 'facebook', '1986516331467120', '2018-11-12 08:42:03', NULL, NULL),
(59, 'simon puli', 'simonpulivarthi@gmail.com', 'simonpuli', 'd4e5b5f0235a8be96640cc2de6886161', 1, '1997-10-02', 21, '', NULL, NULL, 1, '2018-11-12 16:42:28', '1_MX40NjIxNjY1Mn5-MTU0MjAxMjE1NjcwOH5CN0xvNjJ3SVcxMnF1ajBzeUgweEl0UCt-fg', '', '', '0000-00-00 00:00:00', NULL, NULL);

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
(1, 2, 'we', 0, 1, '2018-11-08 11:41:32'),
(4, 2, 'https://www.alibaba.com/?src=sem_bing&cmpgn=131985261&adgrp=2732589898&tgt=kwd-38995164004:loc-90&KwdID=38995164004&mtchtyp=b&bdmtchtyp%20=bb&ntwrk=s&device=c&creative=14787500154&p1=default&p2=default&p3=default&Query=flipkart%20online%20shopping%20offer%20today', 0, 1, '2018-11-08 11:42:44'),
(5, 2, 'https://www.flipkart.com', 0, 1, '2018-11-08 11:43:08'),
(6, 2, 'https://www.youtube.com/watch?v=yiNrVLIOOtw', 0, 1, '2018-11-08 11:43:55'),
(7, 2, 'https://www.youtube.com/watch?v=pbg78Dbl_m0', 0, 1, '2018-11-08 11:44:03'),
(8, 2, 'https://www.bigstockphoto.com/', 0, 1, '2018-11-08 11:44:29'),
(9, 2, 'https://www.youtube.com/watch?v=pbg78Dbl_m0', 0, 1, '2018-11-08 11:44:40'),
(10, 2, 'https://www.youtube.com/watch?v=tQDlaVYoETk', 0, 1, '2018-11-08 11:44:55'),
(12, 2, 'https://www.youtube.com/watch?v=HLSYAscUXnQ', 0, 1, '2018-11-08 12:43:06'),
(13, 2, 'https://www.youtube.com/watch?v=HLSYAscUXnQ&list=RDHLSYAscUXnQ&start_radio=1&t=6', 0, 1, '2018-11-08 12:43:21'),
(14, 3, 'df', 0, 1, '2018-11-08 12:47:02'),
(15, 3, 'df', 0, 1, '2018-11-08 12:47:05'),
(16, 3, 'sdf', 0, 1, '2018-11-08 12:47:08'),
(17, 3, 'sf', 0, 1, '2018-11-08 12:47:11'),
(18, 3, 'sdf', 0, 1, '2018-11-08 12:47:14'),
(19, 3, 'sdffsa', 0, 1, '2018-11-08 12:47:17'),
(20, 3, 'sdff', 0, 1, '2018-11-08 12:47:21'),
(21, 3, 'sdfdf', 0, 1, '2018-11-08 12:47:29'),
(22, 3, 'sfd', 0, 1, '2018-11-08 12:47:31'),
(23, 3, 'https://www.youtube.com/watch?v=_dLvcprbEg4', 0, 1, '2018-11-08 12:49:20'),
(24, 3, 'dd', 0, 1, '2018-11-08 12:49:37'),
(25, 3, 'https://www.youtube.com/watch?v=z4tHcGx9BLg', 0, 1, '2018-11-08 12:50:20'),
(26, 3, 'https://www.youtube.com/watch?v=c-0RtRdhlKg', 0, 1, '2018-11-08 12:50:42'),
(27, 4, 'hi', 0, 1, '2018-11-08 12:51:39'),
(28, 4, 'hi', 0, 1, '2018-11-08 12:51:59'),
(29, 4, 'https://www.youtube.com/watch?v=CEHayLnKvwY\r\n', 0, 1, '2018-11-08 12:53:24'),
(30, 4, 'https://www.youtube.com/watch?v=rF0d30gyGjU', 0, 1, '2018-11-08 12:53:51'),
(31, 4, 'https://www.youtube.com/watch?v=rtBZhSY_y-M', 0, 1, '2018-11-08 12:54:03'),
(32, 4, 'https://www.youtube.com/watch?v=500rq54Wo2w', 0, 1, '2018-11-08 12:54:24'),
(33, 4, 'https://www.youtube.com/watch?v=JeLpNDBK6qM', 0, 1, '2018-11-08 12:54:49'),
(34, 4, 'https://www.youtube.com/watch?v=mSCejPjoEUM', 0, 1, '2018-11-08 12:55:08'),
(35, 4, 'https://www.youtube.com/watch?v=KXGLSF3MuZw\r\n', 0, 1, '2018-11-08 13:01:18'),
(36, 4, 'https://www.youtube.com/watch?v=KXGLSF3MuZw\r\n', 0, 1, '2018-11-08 13:01:21'),
(37, 4, 'https://www.google.co.in/imgres?imgurl=https%3A%2F%2Fricks-motorcycles.com%2Fwp-content%2Fuploads%2F2017%2F10%2FMGL9092-1024x683.jpg&imgrefurl=https%3A%2F%2Fricks-motorcycles.com%2Fen%2Fbikes%2Fsoftail%2F1st-milwaukee-8-fat-boy%2F&docid=5ny95xbN_qyy-M&tbnid=hNomPMhFDhFlsM%3A&vet=10ahUKEwjcg5uBgMTeAhUC448KHQpLA4MQMwhwKAgwCA..i&w=1024&h=683&bih=626&biw=1366&q=harley%20fatboy&ved=0ahUKEwjcg5uBgMTeAhUC448KHQpLA4MQMwhwKAgwCA&iact=mrc&uact=8', 0, 1, '2018-11-08 13:19:40'),
(38, 4, 'https://www.google.co.in/imgres?imgurl=https%3A%2F%2Fricks-motorcycles.com%2Fwp-content%2Fuploads%2F2017%2F10%2FMGL9092-1024x683.jpg&imgrefurl=https%3A%2F%2Fricks-motorcycles.com%2Fen%2Fbikes%2Fsoftail%2F1st-milwaukee-8-fat-boy%2F&docid=5ny95xbN_qyy-M&tbnid=hNomPMhFDhFlsM%3A&vet=10ahUKEwjcg5uBgMTeAhUC448KHQpLA4MQMwhwKAgwCA..i&w=1024&h=683&bih=626&biw=1366&q=harley%20fatboy&ved=0ahUKEwjcg5uBgMTeAhUC448KHQpLA4MQMwhwKAgwCA&iact=mrc&uact=8#h=683&imgdii=15egshfYudjYJM:&vet=10ahUKEwjcg5uBgMTeAhUC448KHQpLA4MQMwhwKAgwCA..i&w=1024', 0, 1, '2018-11-08 13:20:14'),
(39, 4, 'https://www.apple.com/', 0, 1, '2018-11-08 13:21:34'),
(40, 4, 'https://www.facebook.com/', 0, 1, '2018-11-08 13:22:22'),
(42, 3, '', 0, 1, '2018-11-08 13:29:51'),
(43, 5, 'haiii', 0, 1, '2018-11-08 13:31:48'),
(44, 5, 'hellaaaaaaaaa\r\n', 0, 1, '2018-11-08 13:31:56'),
(45, 5, 'nvbwsacdhgaefdb\r\n', 0, 1, '2018-11-08 13:32:01'),
(46, 5, 'gasvdfgeafdkjea', 0, 1, '2018-11-08 13:32:14'),
(47, 5, 'hgdcewsqgdvewqdjk', 0, 1, '2018-11-08 13:32:20'),
(48, 5, '', 0, 1, '2018-11-08 13:35:11'),
(49, 5, '', 0, 1, '2018-11-08 13:35:23'),
(50, 5, '', 0, 1, '2018-11-08 13:35:35'),
(51, 5, '', 0, 1, '2018-11-08 13:35:46'),
(52, 5, 'https://www.apple.com/', 0, 1, '2018-11-08 13:36:38'),
(53, 5, 'https://www.facebook.com/', 0, 1, '2018-11-08 13:36:47'),
(54, 5, 'https://en.wikipedia.org/wiki/Image', 0, 1, '2018-11-08 13:38:05'),
(62, 3, 'https://khabar.ndtv.com/news/crime/chhattisgarh-maoist-attack-maoists-blow-up-bus-in-dantewada-and-4-killed-1944373', 0, 1, '2018-11-08 17:09:52'),
(63, 9, 'cdfgdfg', 0, 1, '2018-11-08 19:36:53'),
(64, 9, 'https://www.youtube.com/watch?v=VkmXX_jKmZw', 0, 1, '2018-11-08 19:37:17'),
(65, 9, 'https://news.google.com/articles/CAIiEAjhOVgqotJD-2sKX0utaqQqGQgEKhAIACoHCAowzrL9CjDC7vQCMJHmnQY?hl=en-IN&gl=IN&ceid=IN%3Aen', 0, 1, '2018-11-08 19:37:41'),
(66, 9, 'https://news.google.com/articles/CAIiEK2QZChyUih-pF3Z_JUe-4sqGQgEKhAIACoHCAowj8n_CjDIrfkCMNKc6AU?hl=en-IN&gl=IN&ceid=IN%3Aen', 0, 1, '2018-11-08 19:38:15'),
(67, 9, 'https://www.manoramaonline.com/news/latest-news/2018/11/08/arun-jaitley-on-demonetisation-second-anniversary.html', 1, 1, '2018-11-08 19:39:16'),
(68, 3, 'https://www.manoramaonline.com/news/latest-news/2018/11/08/arun-jaitley-on-demonetisation-second-anniversary.html', 0, 1, '2018-11-08 21:01:38'),
(69, 3, 'https://www.manoramaonline.com/news/latest-news/2018/11/08/arun-jaitley-on-demonetisation-second-anniversary.html', 0, 1, '2018-11-08 21:05:33'),
(70, 3, 'sdffssff', 0, 1, '2018-11-08 21:29:13'),
(71, 2, 'https://www.youtube.com/watch?v=yw2KOm2Oy2E&list=RDyw2KOm2Oy2E&start_radio=1 testing', 0, 1, '2018-11-08 22:25:35'),
(72, 2, 'https://www.youtube.com/watch?v=EqlAoCmv2Q0&index=8&list=RDyw2KOm2Oy2E test 2', 0, 1, '2018-11-08 22:27:15'),
(75, 5, '', 0, 1, '2018-11-08 23:52:09'),
(76, 5, '', 0, 1, '2018-11-08 23:52:17'),
(77, 5, '', 1, 1, '2018-11-08 23:52:19'),
(78, 5, '', 0, 1, '2018-11-08 23:53:24'),
(79, 5, '', 0, 1, '2018-11-08 23:53:38'),
(82, 4, '', 0, 1, '2018-11-09 01:10:19'),
(83, 3, 'hmm', 0, 1, '2018-11-09 13:15:35'),
(84, 3, 'https://www.youtube.com/watch?v=gAJG8JwmUpw', 1, 1, '2018-11-09 13:24:52'),
(85, 3, 'https://www.manoramaonline.com/news/latest-news/2018/11/08/arun-jaitley-on-demonetisation-second-anniversary.html', 0, 1, '2018-11-09 13:25:44'),
(86, 3, '', 1, 1, '2018-11-09 13:26:33'),
(87, 2, 'kgklyliu\r\n', 0, 1, '2018-11-09 21:46:55'),
(88, 20, '', 0, 1, '2018-11-09 22:08:15'),
(93, 2, '', 0, 1, '2018-11-09 22:20:36'),
(94, 20, 'https://www.youtube.com/watch?v=5YMN5C1sGCo', 0, 1, '2018-11-09 23:21:34'),
(95, 23, 'test', 1, 1, '2018-11-10 01:55:52'),
(96, 33, 'hi\r\n', 0, 1, '2018-11-11 05:06:14'),
(97, 40, 'i love music', 0, 1, '2018-11-11 16:21:40');

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
(1, '253399.png', 1, 0),
(2, '', 2, 0),
(3, '', 3, 0),
(4, '', 4, 0),
(5, '', 5, 0),
(6, '', 6, 0),
(7, '', 7, 0),
(8, '', 8, 0),
(9, '', 9, 0),
(10, '', 10, 0),
(11, '', 11, 0),
(12, '', 12, 0),
(13, '', 13, 0),
(14, '', 14, 0),
(15, '', 15, 0),
(16, '', 16, 0),
(17, '', 17, 0),
(18, '', 18, 0),
(19, '', 19, 0),
(20, '', 20, 0),
(21, '', 21, 0),
(22, '', 22, 0),
(23, '', 23, 0),
(24, 'download (5).jpg', 24, 0),
(25, '', 25, 0),
(26, '', 26, 0),
(27, 'logo.png', 27, 0),
(28, 'logo.png', 28, 0),
(29, '', 29, 0),
(30, '', 30, 0),
(31, '', 31, 0),
(32, '', 32, 0),
(33, '', 33, 0),
(34, '', 34, 0),
(35, '', 35, 0),
(36, '', 36, 0),
(37, '', 37, 0),
(38, '', 38, 0),
(39, '', 39, 0),
(40, '', 40, 0),
(41, '', 41, 0),
(42, 'Desert.jpg', 42, 0),
(43, '', 43, 0),
(44, '', 44, 0),
(45, '', 45, 0),
(46, '', 46, 0),
(47, '', 47, 0),
(48, 'Chrysanthemum.jpg', 48, 0),
(49, 'Penguins.jpg', 49, 0),
(50, 'Tulips.jpg', 50, 0),
(51, 'Koala.jpg', 51, 0),
(52, '', 52, 0),
(53, '', 53, 0),
(54, '', 54, 0),
(55, '', 55, 0),
(56, '', 56, 0),
(57, '', 57, 0),
(58, '', 58, 0),
(59, '', 59, 0),
(60, '', 60, 0),
(61, '', 61, 0),
(62, '', 62, 0),
(63, '', 63, 0),
(64, '', 64, 0),
(65, '', 65, 0),
(66, '', 66, 0),
(67, '', 67, 0),
(68, '', 68, 0),
(69, '', 69, 0),
(70, 'Chrysanthemum.jpg', 70, 0),
(71, '', 71, 0),
(72, '', 72, 0),
(73, '', 73, 0),
(74, '', 74, 0),
(75, '', 75, 0),
(76, '', 76, 0),
(77, '', 77, 0),
(78, '', 78, 0),
(79, '', 79, 0),
(80, '', 80, 0),
(81, '', 81, 0),
(82, '0-neu-d2-f855876567408fc041b01312824d9ff4.jpg', 82, 0),
(83, '', 83, 0),
(84, '', 84, 0),
(85, '', 85, 0),
(86, 'Desert.jpg', 86, 0),
(87, '', 87, 0),
(88, '0-neu-d2-f855876567408fc041b01312824d9ff4.jpg', 88, 0),
(89, '', 89, 0),
(90, '', 90, 0),
(91, '', 91, 0),
(92, '', 92, 0),
(93, '', 93, 0),
(94, '', 94, 0),
(95, '', 95, 0),
(96, '', 96, 0),
(97, '', 97, 0);

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

--
-- Dumping data for table `user_intrest_list`
--

INSERT INTO `user_intrest_list` (`int_id`, `user_id`, `intrest_id`, `status`) VALUES
(1, 4, 16, 1),
(2, 4, 14, 1),
(39, 3, 5, 1),
(40, 3, 8, 1),
(41, 3, 11, 1),
(51, 2, 4, 1),
(52, 2, 6, 1),
(53, 2, 9, 1),
(55, 20, 39, 1);

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
(1, 4, 'logo2 (1).png', '2018-11-08 12:51:08', 0);

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
  `age_hide` varchar(20) NOT NULL DEFAULT 'true',
  `friendlist_hide` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `gender`, `dob`, `visibility`, `nick_name`, `profile_pic`, `cover_photo`, `description`, `address`, `country_id`, `interest_area`, `created_at`, `age_hide`, `friendlist_hide`) VALUES
(1, 1, NULL, NULL, 'true', 'Tony Mathew', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 03:54:06', 'true', 'false'),
(2, 2, NULL, NULL, 'true', 'jai', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 11:41:03', 'false', 'false'),
(3, 3, NULL, NULL, 'true', 'derr', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 12:46:48', 'false', 'false'),
(4, 4, NULL, NULL, 'true', 'david', NULL, NULL, NULL, NULL, '194', NULL, '2018-11-08 12:49:13', 'true', 'false'),
(5, 5, NULL, NULL, 'true', 'tony', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 13:30:55', 'true', 'false'),
(6, 7, NULL, NULL, 'true', 'anii', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 16:27:43', 'true', 'false'),
(7, 8, NULL, NULL, 'true', 'mintu', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 16:29:08', 'true', 'false'),
(8, 9, NULL, NULL, 'true', 'sa', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 19:36:40', 'true', 'false'),
(9, 10, NULL, NULL, 'true', 'Code Face', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 22:43:37', 'true', 'false'),
(10, 11, NULL, NULL, 'true', 'Irshad Illias', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 22:43:41', 'true', 'false'),
(11, 12, NULL, NULL, 'true', 'Aneesh', '1495 - Copy.JPG', '138 - Copy.JPG', NULL, NULL, NULL, NULL, '2018-11-09 00:00:28', 'true', 'false'),
(12, 13, NULL, NULL, 'true', 'Aneesh Cleetus', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09 00:04:23', 'true', 'false'),
(13, 14, NULL, NULL, 'true', 'Irshad Illias', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09 00:05:38', 'true', 'false'),
(14, 15, NULL, NULL, 'true', 'Sajid', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09 00:44:38', 'true', 'false'),
(15, 16, NULL, NULL, 'true', 'Code Face', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09 02:36:57', 'true', 'false'),
(16, 17, NULL, NULL, 'true', 'Tony Mathew', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09 15:45:32', 'true', 'false'),
(17, 18, NULL, NULL, 'true', 'aly26', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09 21:52:07', 'true', 'false'),
(18, 19, NULL, NULL, 'true', 'jjj000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09 21:53:52', 'true', 'false'),
(19, 20, NULL, NULL, 'true', 'Don', 'IMG_2890.JPG', '587ca16f5db0a-770x440.jpg', NULL, NULL, '194', NULL, '2018-11-09 21:58:41', 'false', 'true'),
(20, 21, NULL, NULL, 'true', 'Irshad Illias', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 00:01:52', 'true', 'false'),
(21, 22, NULL, NULL, 'true', 'Nazneen Mohammed', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 00:18:58', 'true', 'false'),
(22, 23, NULL, NULL, 'false', 'Joby', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 01:34:52', 'true', 'false'),
(23, 24, NULL, NULL, 'true', 'Evette Marin', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 02:24:22', 'true', 'true'),
(24, 25, NULL, NULL, 'true', 'THEBOSS', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 03:56:17', 'true', 'false'),
(25, 26, NULL, NULL, 'true', 'Vamps', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 06:12:53', 'true', 'false'),
(26, 27, NULL, NULL, 'true', 'Tobeymquire', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 10:05:02', 'true', 'false'),
(27, 28, NULL, NULL, 'true', 'aryan', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 15:01:29', 'true', 'false'),
(28, 29, NULL, NULL, 'true', 'Biji N Thomas', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 15:17:01', 'true', 'false'),
(29, 30, NULL, NULL, 'true', 'Fadli Perdana', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 18:04:48', 'true', 'false'),
(30, 31, NULL, NULL, 'true', 'elsa', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 22:56:56', 'true', 'false'),
(31, 32, NULL, NULL, 'true', 'Jo', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 23:08:00', 'true', 'false'),
(32, 33, NULL, NULL, 'true', 'zaki12', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 04:59:19', 'true', 'false'),
(33, 36, NULL, NULL, 'true', 'prav998', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 05:26:39', 'true', 'false'),
(34, 37, NULL, NULL, 'true', 'Epz', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 12:46:59', 'true', 'false'),
(35, 38, NULL, NULL, 'true', 'tc', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 13:06:27', 'true', 'false'),
(36, 39, NULL, NULL, 'true', 'Monic', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 13:47:50', 'true', 'false'),
(37, 40, NULL, NULL, 'true', 'Sanju@1919', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 16:13:52', 'true', 'false'),
(38, 41, NULL, NULL, 'false', 'Rics', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 20:10:25', 'true', 'false'),
(39, 42, NULL, NULL, 'true', 'cheema', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-11 21:59:37', 'true', 'false'),
(40, 43, NULL, NULL, 'true', 'alby', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 00:40:31', 'true', 'false'),
(41, 44, NULL, NULL, 'true', 'bags123', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 00:47:33', 'true', 'false'),
(42, 45, NULL, NULL, 'false', 'Aarav9086', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 01:36:35', 'true', 'false'),
(43, 46, NULL, NULL, 'true', 'Adriian', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 02:11:09', 'true', 'false'),
(44, 49, NULL, NULL, 'true', 'Tundra2015', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 04:42:29', 'true', 'false'),
(45, 50, NULL, NULL, 'true', 'George Ppg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 08:47:45', 'true', 'false'),
(46, 51, NULL, NULL, 'false', 'kz14', 'axc.png', '22089965_1893241391003684_9100243795192742254_n.jpg', '              Knives. and cigarettes.', NULL, NULL, NULL, '2018-11-12 09:43:01', 'true', 'false'),
(47, 52, NULL, NULL, 'true', 'l', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 09:52:13', 'true', 'false'),
(48, 53, NULL, NULL, 'false', 'Mahesh Waran Ravi Bose', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 10:35:01', 'true', 'false'),
(49, 54, NULL, NULL, 'true', 'sm', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 12:34:59', 'true', 'false'),
(50, 55, NULL, NULL, 'true', 'jakee', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 13:40:41', 'true', 'false'),
(51, 56, NULL, NULL, 'true', 'Strummer', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 14:28:18', 'true', 'false'),
(52, 57, NULL, NULL, 'true', 'Matthias Goukens', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 15:20:11', 'true', 'false'),
(53, 58, NULL, NULL, 'true', 'George A Fappiano Jr.', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 16:42:03', 'true', 'false'),
(54, 59, NULL, NULL, 'true', 'simon', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-12 16:42:28', 'true', 'false');

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
  MODIFY `c_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `feed_like`
--
ALTER TABLE `feed_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `hide_post`
--
ALTER TABLE `hide_post`
  MODIFY `hd_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `profile_visit`
--
ALTER TABLE `profile_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `stranger_det`
--
ALTER TABLE `stranger_det`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `t_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_feed`
--
ALTER TABLE `user_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `user_feed_image`
--
ALTER TABLE `user_feed_image`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `user_intrest`
--
ALTER TABLE `user_intrest`
  MODIFY `in_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_intrest_list`
--
ALTER TABLE `user_intrest_list`
  MODIFY `int_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_photos`
--
ALTER TABLE `user_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
