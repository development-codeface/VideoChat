-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2018 at 06:31 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alitqanl_videochat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED ZEROFILL NOT NULL DEFAULT '0000000000',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0bea5b14e071113c8b3223f61f0b5f52bd8c4fa3', '::1', 1543424720, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432343732303b4642524c485f73746174657c733a33323a223466303537336438386265366537636665373430336136646630633734363632223b757365725f69647c733a323a223630223b757365725f6e616d657c733a373a226e617a6e65656e223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394d5459774d544a6c4d444a68596a646d4f5441324e4441314d54426a4f4445324e6a55305a5455794e5467784d544e6b5a5745334e7a707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52464e55314555544e5057445578563168736155737963334a6a656d78335a473573516c6c72536d744e4d57677757544a57635652744e53316d5a795a6a636d56686447566664476c745a5430784e54517a4e4445354d4451314a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d546b774e4455754e7a67784e4441344f4445794d6a45784a6d6c756158527059577866624746356233563058324e7359584e7a5832787063335139223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5445354d4451334f58353157586c694b327372637a6c77646e6c42596b4a6b4d31683059325671546d352d6667223b),
('2228936a925d90fa6f692ee074416d906d5332db', '::1', 1543425816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432353534353b4642524c485f73746174657c733a33323a223564393162613137336639313639396137306237313861356636343061343661223b757365725f69647c733a323a223630223b757365725f6e616d657c733a373a226e617a6e65656e223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394e475a684d4459334f544a6c5957497a4d4745325932466b5a6a686d4d7a59774f4451334d44637a4d4455774f444d3159545a6b596a707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52464e55314555544e5057445578563168736155737963334a6a656d78335a473573516c6c72536d744e4d57677757544a57635652744e53316d5a795a6a636d56686447566664476c745a5430784e54517a4e4449314e5451344a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d6a55314e4467754e6a597a4d7a51344e7a41774d6a496d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5445354d4451334f58353157586c694b327372637a6c77646e6c42596b4a6b4d31683059325671546d352d6667223b),
('57a7f819d3679105197df62051b0a31d9a5562f7', '::1', 1543426230, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432363233303b4642524c485f73746174657c4e3b66625f6578706972657c693a313534383630313834313b66625f6163636573735f746f6b656e7c733a3138343a22454141436562654759767749424143536d6d415a4367715273566e664777727079566432425746307075616866336c714372556f393948634345336870754b4f33445a4139375a41434b6f59595533695762744a316b5a435935754a59435a41746b383566634f526336775a425a434e30635473436b78365a425a41364e413867393979545737646e7263555a424f505049697a6532505a42474877393664504d7330565a42575a4155374870394878476b56415a445a44223b757365725f69647c733a323a223638223b757365725f6e616d657c733a32303a226972736861647374617240676d61696c2e636f6d223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394e7a49354d7a4a6c4e6d4d304e6a41324f5759784f574d304f4442694e544d304e7a526d4d6a4d775a5445334d54526c4d4445794e44707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52424d303555597a4a4f4d7a56765a46686b65464d77576b315a563368775a56686b535752584d5531534d306f795631524f646d497a6243316d5a795a6a636d56686447566664476c745a5430784e54517a4e4449314e5441354a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d6a55314d446b754d4449344f5459334d44677a4f544d6d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5441334e5463324e33356f6458647853305a4d59577870655864496457314d52334a3257544e7662336c2d6667223b),
('62eddd3d6cc3317be48d54d75fb99f43f4a3f4c9', '::1', 1543423614, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432333631343b4642524c485f73746174657c4e3b66625f6578706972657c693a313534383630313834313b66625f6163636573735f746f6b656e7c733a3137343a2245414143656265475976774942414244646e314656705541464a5337354f717756716e557151556f554e72644e4870776a7968634a4d6c544f4f6d344a516757545a426b6e5950306152726b7a4858646f50663175414f6554375a425530774a3738326659464d456d494b31307650613034774754786f4a70664d61374b346c6643646749515a424e76567a374a715869514533646f754a66436c4b6e617678387655374636354f39675a445a44223b757365725f69647c733a323a223638223b757365725f6e616d657c733a32303a226972736861647374617240676d61696c2e636f6d223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394d444178595463314d7a6b344d4751334e324e6c4d445a6c5a44566c4d5749324d7a4d775a54426d4d324e6a4d7a4669596d45334e44707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52424d303555597a4a4f4d7a56765a46686b65464d77576b315a563368775a56686b535752584d5531534d306f795631524f646d497a6243316d5a795a6a636d56686447566664476c745a5430784e54517a4e4445354d444d784a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d546b774d7a45754d7a49304e5445794e7a63354d54516d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5441334e5463324e33356f6458647853305a4d59577870655864496457314d52334a3257544e7662336c2d6667223b),
('69ac2dcb3ac88ddb667360b7500954f4b27a4a3b', '::1', 1543425540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432353534303b4642524c485f73746174657c733a33323a223466303537336438386265366537636665373430336136646630633734363632223b757365725f69647c733a323a223630223b757365725f6e616d657c733a373a226e617a6e65656e223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763395a4449325a4449334d4749334f5446694e6d4a6a4d544e6c5a574a6c5a6a51774d324e6a4e5745334e7a49774e7a6b334d325a694d54707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52464e55314555544e5057445578563168736155737963334a6a656d78335a473573516c6c72536d744e4d57677757544a57635652744e53316d5a795a6a636d56686447566664476c745a5430784e54517a4e4449304e7a49304a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d6a51334d6a51754e6a55344e446b314e4459314e54676d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5445354d4451334f58353157586c694b327372637a6c77646e6c42596b4a6b4d31683059325671546d352d6667223b),
('6f460f830258a5ae69f62d5d404fbe0747c03dd7', '::1', 1543425690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432353639303b4642524c485f73746174657c4e3b66625f6578706972657c693a313534383630313834313b66625f6163636573735f746f6b656e7c733a3138343a22454141436562654759767749424143536d6d415a4367715273566e664777727079566432425746307075616866336c714372556f393948634345336870754b4f33445a4139375a41434b6f59595533695762744a316b5a435935754a59435a41746b383566634f526336775a425a434e30635473436b78365a425a41364e413867393979545737646e7263555a424f505049697a6532505a42474877393664504d7330565a42575a4155374870394878476b56415a445a44223b757365725f69647c733a323a223638223b757365725f6e616d657c733a32303a226972736861647374617240676d61696c2e636f6d223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394e7a49354d7a4a6c4e6d4d304e6a41324f5759784f574d304f4442694e544d304e7a526d4d6a4d775a5445334d54526c4d4445794e44707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52424d303555597a4a4f4d7a56765a46686b65464d77576b315a563368775a56686b535752584d5531534d306f795631524f646d497a6243316d5a795a6a636d56686447566664476c745a5430784e54517a4e4449314e5441354a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d6a55314d446b754d4449344f5459334d44677a4f544d6d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5441334e5463324e33356f6458647853305a4d59577870655864496457314d52334a3257544e7662336c2d6667223b),
('8ebacc70012710be2482c89990aa873cc727836d', '::1', 1543425365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432353336353b4642524c485f73746174657c733a33323a226566393331663438646430396137366331323339623438373330386234633034223b),
('bb5c5e94390f646fa0956603893ddb48f0a61375', '::1', 1543423926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432333932313b4642524c485f73746174657c4e3b66625f6578706972657c693a313534383630313834313b66625f6163636573735f746f6b656e7c733a3137343a2245414143656265475976774942414244646e314656705541464a5337354f717756716e557151556f554e72644e4870776a7968634a4d6c544f4f6d344a516757545a426b6e5950306152726b7a4858646f50663175414f6554375a425530774a3738326659464d456d494b31307650613034774754786f4a70664d61374b346c6643646749515a424e76567a374a715869514533646f754a66436c4b6e617678387655374636354f39675a445a44223b757365725f69647c733a323a223638223b757365725f6e616d657c733a32303a226972736861647374617240676d61696c2e636f6d223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394d444178595463314d7a6b344d4751334e324e6c4d445a6c5a44566c4d5749324d7a4d775a54426d4d324e6a4d7a4669596d45334e44707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52424d303555597a4a4f4d7a56765a46686b65464d77576b315a563368775a56686b535752584d5531534d306f795631524f646d497a6243316d5a795a6a636d56686447566664476c745a5430784e54517a4e4445354d444d784a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d546b774d7a45754d7a49304e5445794e7a63354d54516d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5441334e5463324e33356f6458647853305a4d59577870655864496457314d52334a3257544e7662336c2d6667223b),
('d5f4798886e4575363b2b32666a9b52b73aa1027', '::1', 1543426231, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432363233303b4642524c485f73746174657c4e3b66625f6578706972657c693a313534383630313834313b66625f6163636573735f746f6b656e7c733a3138343a22454141436562654759767749424143536d6d415a4367715273566e664777727079566432425746307075616866336c714372556f393948634345336870754b4f33445a4139375a41434b6f59595533695762744a316b5a435935754a59435a41746b383566634f526336775a425a434e30635473436b78365a425a41364e413867393979545737646e7263555a424f505049697a6532505a42474877393664504d7330565a42575a4155374870394878476b56415a445a44223b757365725f69647c733a323a223638223b757365725f6e616d657c733a32303a226972736861647374617240676d61696c2e636f6d223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394e7a49354d7a4a6c4e6d4d304e6a41324f5759784f574d304f4442694e544d304e7a526d4d6a4d775a5445334d54526c4d4445794e44707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52424d303555597a4a4f4d7a56765a46686b65464d77576b315a563368775a56686b535752584d5531534d306f795631524f646d497a6243316d5a795a6a636d56686447566664476c745a5430784e54517a4e4449314e5441354a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d6a55314d446b754d4449344f5459334d44677a4f544d6d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5441334e5463324e33356f6458647853305a4d59577870655864496457314d52334a3257544e7662336c2d6667223b),
('edbc5a375daaabad7628d1fba1ad20f75715b771', '::1', 1543423936, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432333933363b4642524c485f73746174657c733a33323a223466303537336438386265366537636665373430336136646630633734363632223b757365725f69647c733a323a223630223b757365725f6e616d657c733a373a226e617a6e65656e223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394d5459774d544a6c4d444a68596a646d4f5441324e4441314d54426a4f4445324e6a55305a5455794e5467784d544e6b5a5745334e7a707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52464e55314555544e5057445578563168736155737963334a6a656d78335a473573516c6c72536d744e4d57677757544a57635652744e53316d5a795a6a636d56686447566664476c745a5430784e54517a4e4445354d4451314a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d546b774e4455754e7a67784e4441344f4445794d6a45784a6d6c756158527059577866624746356233563058324e7359584e7a5832787063335139223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5445354d4451334f58353157586c694b327372637a6c77646e6c42596b4a6b4d31683059325671546d352d6667223b),
('f4c7d87270313ba6e13a5c7bd34104ad9cf0536e', '::1', 1543423921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534333432333932313b4642524c485f73746174657c4e3b66625f6578706972657c693a313534383630313834313b66625f6163636573735f746f6b656e7c733a3137343a2245414143656265475976774942414244646e314656705541464a5337354f717756716e557151556f554e72644e4870776a7968634a4d6c544f4f6d344a516757545a426b6e5950306152726b7a4858646f50663175414f6554375a425530774a3738326659464d456d494b31307650613034774754786f4a70664d61374b346c6643646749515a424e76567a374a715869514533646f754a66436c4b6e617678387655374636354f39675a445a44223b757365725f69647c733a323a223638223b757365725f6e616d657c733a32303a226972736861647374617240676d61696c2e636f6d223b746f6b656e7c733a3332383a2254313d3d634746796447356c636c39705a4430304e6a49784e6a59314d695a7a615763394d444178595463314d7a6b344d4751334e324e6c4d445a6c5a44566c4d5749324d7a4d775a54426d4d324e6a4d7a4669596d45334e44707a5a584e7a6157397558326c6b50544a66545667304d4535715358684f616c6b78545734314c5531555654424e56474d7a546c52424d303555597a4a4f4d7a56765a46686b65464d77576b315a563368775a56686b535752584d5531534d306f795631524f646d497a6243316d5a795a6a636d56686447566664476c745a5430784e54517a4e4445354d444d784a6e4a76624755396348566962476c7a614756794a6d3576626d4e6c505445314e444d304d546b774d7a45754d7a49304e5445794e7a63354d54516d6157357064476c686246397359586c76645852665932786863334e6662476c7a6444303d223b6f70656e53657373696f6e49647c733a37323a22325f4d5834304e6a49784e6a59314d6e352d4d5455304d5463334e5441334e5463324e33356f6458647853305a4d59577870655864496457314d52334a3257544e7662336c2d6667223b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;