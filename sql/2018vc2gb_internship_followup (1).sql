-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 04:13 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2018vc2gb_internship_followup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `userrole_id`) VALUES
(1, 'admin', '$2a$08$ZEyUWIE30Jb/ioesMhO0rOHB1sEI.GSk1AIF2my3QtC2e/py6i5Mu', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `alluser`
-- (See below for the actual view)
--
CREATE TABLE `alluser` (
`UserName` varchar(45)
,`Password` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `itemdescription` varchar(200) DEFAULT NULL,
  `postaladdress` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `phone` varchar(45) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `itemdescription`, `postaladdress`, `location`, `phone`, `url`, `lat`, `lng`) VALUES
(7, 'Cloude net', 'IT company solution', 'No. 59, Oknha Pich St. (242), Phnom Penh, Phnom Penh', '', '07646468', 'https://www.mekongnet.com.kh/', 11.585, 104.913),
(8, 'Me kong net', 'IPS company', 'Phnom Penh', '92 Preah Norodom Blvd (41), Phnom Penh, Cambodia', '016999333', 'www.aba.com.kh', 11.5618, 104.926),
(9, 'Manulife', 'manulife insurance', 'Cambodia', 'Street Sothearos, Phnom Penh, Cambodia', '097808989', 'https://www.manulife.com.kh/Landing-Page?ocmsLang=fr', 11.5538, 104.934),
(10, 'Credit Microfinance', 'The simple and affordable life insurance policy.', 'Cambodia', 'St 368, Phnom Penh, Cambodia', '012999927', 'https://www.kredit.com.kh/en', 11.5473, 104.914),
(11, 'Camsolution', 'IT company solution in Cambodia', 'cambodia', 'St 558, Phnom Penh, Cambodia', '015224499', 'http://www.camsolution.biz/', 11.5796, 104.902),
(12, 'prudentail Anssurence', 'Your family will inherit your love instead of a loan.', 'cambodia', '34 Sivatha Blvd, Krong Siem Reap, Cambodia', '09544335', 'https://www.prudential.com.kh/en/', 13.3581, 103.854),
(13, 'Plan B', 'Provide IT solotion', 'cambodia', '244b Yothapol Khemarak Phoumin Blvd (271), Phnom Penh, Cambodia', '09544335', 'https://www.prudential.com.kh/en/', 11.5379, 104.91),
(14, 'Enventory', 'Provide IT solotion', 'cambodia', 'Manteca, CA 95336, USA', '09544335', 'https://www.enventory.com.kh/en/', 37.7981, -121.218);

-- --------------------------------------------------------

--
-- Stand-in structure for view `countstu`
-- (See below for the actual view)
--
CREATE TABLE `countstu` (
`suName` varchar(91)
,`numStu` bigint(21)
,`company_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(8) NOT NULL DEFAULT '#3a87ad',
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `allDay` varchar(45) NOT NULL DEFAULT 'true',
  `email` varchar(200) NOT NULL,
  `userEmail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start`, `end`, `allDay`, `email`, `userEmail`, `password`) VALUES
(42, 'Meeting', 'lkjhgfdsuytre', '#18b315', '2018-05-02 00:00:00', '2018-05-03 00:00:00', 'true', 'premmannpnc@gmail.com', 'davit.chea123@gmail.com', 'davit123'),
(50, 'Meeting', 'Dear student ', '#3a87ad', '2018-05-09 00:00:00', '2018-05-10 00:00:00', 'true', 'devit.chea@student.passerellesnumeriques.org', 'davit.chea123@gmail.com', 'davit123'),
(52, 'test last version', 'testingasdkfalksdfladlasfasd', '#eba61a', '2018-05-11 00:00:00', '2018-05-12 00:00:00', 'true', 'bunthean.mov2727@gmail.com', 'bunthean.mov2727@gmail.com', '1234567bb'),
(60, 'test version', 'test', '#f52586', '2018-04-30 00:00:00', '2018-05-01 00:00:00', 'true', 'devit.chea@student.passerellesnumeriques.org', 'bunthean.mov2727@gmail.com', '1234567bb'),
(61, 'asdfasdfasdfasdfasdfasfasdfasdfas', 'asdfasdf', '#5132c2', '2018-05-07 00:00:00', '2018-05-08 00:00:00', 'true', 'bunthean.mov2727@gmail.com', 'bunthean.mov2727@gmail.com', '1234567bb');

-- --------------------------------------------------------

--
-- Stand-in structure for view `getcid`
-- (See below for the actual view)
--
CREATE TABLE `getcid` (
`name` varchar(45)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getemail`
-- (See below for the actual view)
--
CREATE TABLE `getemail` (
`email` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getnumstu`
-- (See below for the actual view)
--
CREATE TABLE `getnumstu` (
`name` varchar(45)
,`numStu` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getstuid`
-- (See below for the actual view)
--
CREATE TABLE `getstuid` (
`stuName` varchar(91)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getsuid`
-- (See below for the actual view)
--
CREATE TABLE `getsuid` (
`suName` varchar(91)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gettid`
-- (See below for the actual view)
--
CREATE TABLE `gettid` (
`tName` varchar(91)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getusers`
-- (See below for the actual view)
--
CREATE TABLE `getusers` (
`username` varchar(45)
,`password` varchar(200)
,`userrole_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int(11) NOT NULL,
  `question1` int(11) DEFAULT NULL,
  `question2` int(11) DEFAULT NULL,
  `question3` int(11) DEFAULT NULL,
  `question4` int(11) DEFAULT NULL,
  `question5` int(11) DEFAULT NULL,
  `question6` int(11) DEFAULT NULL,
  `question7` int(11) DEFAULT NULL,
  `question8` int(11) DEFAULT NULL,
  `question9` int(11) DEFAULT NULL,
  `question10` int(11) DEFAULT NULL,
  `question11` int(11) DEFAULT NULL,
  `question12` int(11) DEFAULT NULL,
  `question13` int(11) DEFAULT NULL,
  `question14` int(11) DEFAULT NULL,
  `question15` int(11) DEFAULT NULL,
  `question16` varchar(100) DEFAULT NULL,
  `question17` varchar(100) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `major` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `student_id`, `major`, `gender`) VALUES
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL, NULL),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '                                                   ', '                                                   ', 0, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '                                                   ', '                                                   ', 21, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '                                                   ', '                                                   ', 27, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '                                                   ', '                                                   ', 28, NULL, NULL),
(43, NULL, 1, 1, 4, 3, 5, 3, 4, 5, 4, 5, 0, 3, 3, 3, '', '', 21, 'WEB', 'Male'),
(44, 5, 1, 1, 4, 3, 5, 3, 4, 5, 4, 5, 0, 3, 3, 3, 'test', 'test', 21, 'WEB', 'Male'),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'testing', 'testing', 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `batch` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `schoolemail` varchar(45) DEFAULT NULL,
  `peremail` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `hire` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `supervisor_id` int(11) NOT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `batch`, `year`, `schoolemail`, `peremail`, `phone`, `hire`, `password`, `username`, `picture`, `supervisor_id`, `userrole_id`) VALUES
(21, 'Bunthean', 'MOV', 'Web', 2018, 'bunthean.mov2727@gmail.com', 'bunthean.mov2727@gmail.com', 964282301, NULL, NULL, 'bunthean', 'photo.jpg', 14, 4),
(27, 'Soben', 'Khun', 'Web', 2018, 'soben.khun@student.passerellesnumeriques.org', 'soben.khun@gmail.com', 12399993, NULL, '$2a$08$ZEyUWIE30Jb/ioesMhO0rOHB1sEI.GSk1AIF2my3QtC2e/py6i5Mu', 'soben.khun', 'IMG_0715_Résolution_de_lécran1.JPG', 14, 4),
(28, 'devit', 'chea', 'Web', 2018, 'devit.chea@student.passerellesnumeriques.org', 'davit.chea123@gmail.com', 988383848, NULL, NULL, 'devit chea', 'IMG_3661.JPG', 14, 4),
(30, 'Chan', 'Thintha', 'Web', 2018, 'thintha.chan@student.passerellesnumeriques.or', 'Thintha.chan99@gmail.com', 9544335, NULL, NULL, 'Thintha', 'IMG_0565_Résolution_de_lécran.JPG', 14, 4),
(33, 'Daken', 'SOK', 'Web', 2018, 'daken.sok@student.passerellesnumeriqu.org', 'daken.sok@gmail.com', 964282301, NULL, '$2a$08$DB3aa1.b.wQ5VDoPoQbGd.IlxM.0cC47ptuZyinkn5YM.VuweRPHu', 'daken', 'IMG_0535_Résolution_de_lécran.JPG', 16, 4);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `firstname`, `lastname`, `position`, `email`, `phone`, `picture`, `password`, `username`, `company_id`, `userrole_id`) VALUES
(14, 'Bun', 'Vat', 'Project Manager', 'bunvat@gmail.com', 70646468, '', '$2a$08$ZEyUWIE30Jb/ioesMhO0rOHB1sEI.GSk1AIF2my3QtC2e/py6i5Mu', 'premmann', 9, 3),
(16, 'Borith', 'Yok', 'Project Manager', 'Premmannpnc@gmail.com', 7646468, 'images_(2)1.png', '$2a$08$51MxY7fJ8QEOVJNmrifwE.SKYTztKn8RKLIE38wuprB3MFBP1NlmK', 'yborith', 11, 3),
(17, 'Kolab', 'Vann', 'Project Manager', 'Premmannpnc@gmail.com', 987654, '806962_user_512x5122.png', '$2a$08$ZEyUWIE30Jb/ioesMhO0rOHB1sEI.GSk1AIF2my3QtC2e/py6i5Mu', 'vkolab', 13, 3),
(18, 'Theary', 'Rern', 'Project manager', 'bunthean.mov2727@gmail.com', 964282301, 'photo(3).jpg', '$2a$08$1Gf.OHsG.19AecROuuIz0Og35U3GvVsVFJPc14JPkreQmeSEbkddO', 'theary', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `firstname`, `lastname`, `position`, `email`, `phone`, `picture`, `password`, `username`, `company_id`, `userrole_id`) VALUES
(18, 'Rith', 'Nhel', 'Web Trainer', 'example@gmail.com', 7646468, '806962_user_512x512.png', '$2a$08$ZEyUWIE30Jb/ioesMhO0rOHB1sEI.GSk1AIF2my3QtC2e/py6i5Mu', 'nrith', 7, 2),
(19, 'Vuthy', 'kry', 'Education Team', 'example@gmail.com', 7646468, 'avatar-2027365_960_720.png', '$2a$08$ZEyUWIE30Jb/ioesMhO0rOHB1sEI.GSk1AIF2my3QtC2e/py6i5Mu', 'kvuthy', 8, 2),
(20, 'Pisey', 'Nith', 'SNA Trainer', 'example@gmail.com', 987654, '186037.png', '$2a$08$aehbwmepH4T1ZgQeVzBvPuGCS6kUSz2qZlAATZ8qDdWLkhYRB52bS', 'npisey', 9, 2),
(21, 'Chanak', 'Chun', 'Web Trainer', 'example@gmail.com', 9876543, '194826.png', '$2a$08$OJBifOqfGlX8GbqFOL2Y.eEAdfm4v4NvDJGZM/lt0ZiKh8HvleGAK', 'cchanak', 10, 2),
(22, 'Kea', 'Lonh', 'SNA Trainer', 'example@gmail.com', 987654, 'images_(2).png', '$2a$08$j7B7p3xEZybXNoOFppK56eA.ILv3.id.1q21HooDH3ROmH5m5mAHK', 'lkea', 11, 2),
(23, 'sokphek', 'Ros', 'SNA Trainer', 'example@gmail.com', 9876543, 'IMG_0709_Résolution_de_lécran.JPG', '$2a$08$qXJBO9YwydLXJc2lZXofXeOwwl7vrO2DkW5S5TiSmP8criK0WgQbq', 'rsokphek', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'tutor'),
(3, 'supervisor'),
(4, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `worklog`
--

CREATE TABLE `worklog` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  `workactivities` text,
  `youhavelearn` text,
  `issues` text,
  `solutions` text,
  `todo` text,
  `comment` text,
  `workreflections` text,
  `student_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worklog`
--

INSERT INTO `worklog` (`id`, `date`, `starttime`, `endtime`, `workactivities`, `youhavelearn`, `issues`, `solutions`, `todo`, `comment`, `workreflections`, `student_id`) VALUES
(2, '2018-05-10', '01:02:00', '01:02:00', 'Weekly Work-log report', 'Weekly Work-log report', 'Weekly Work-log report', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure for view `alluser`
--
DROP TABLE IF EXISTS `alluser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alluser`  AS  select `admin`.`username` AS `UserName`,`admin`.`password` AS `Password` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `countstu`
--
DROP TABLE IF EXISTS `countstu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countstu`  AS  select concat(`supervisor`.`firstname`,' ',`supervisor`.`lastname`) AS `suName`,count(0) AS `numStu`,`supervisor`.`company_id` AS `company_id` from (`supervisor` join `student`) where (`student`.`supervisor_id` = `supervisor`.`id`) group by `supervisor`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `getcid`
--
DROP TABLE IF EXISTS `getcid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getcid`  AS  select `company`.`name` AS `name`,`company`.`id` AS `id` from `company` ;

-- --------------------------------------------------------

--
-- Structure for view `getemail`
--
DROP TABLE IF EXISTS `getemail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getemail`  AS  select `student`.`schoolemail` AS `email` from `student` union select `supervisor`.`email` AS `email` from `supervisor` union select `tutor`.`email` AS `email` from `tutor` union select `admin`.`email` AS `email` from `admin` ;

-- --------------------------------------------------------

--
-- Structure for view `getnumstu`
--
DROP TABLE IF EXISTS `getnumstu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getnumstu`  AS  select `company`.`name` AS `name`,`countstu`.`numStu` AS `numStu` from (`countstu` join `company`) where (`countstu`.`company_id` = `company`.`id`) group by `company`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `getstuid`
--
DROP TABLE IF EXISTS `getstuid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getstuid`  AS  select concat(`student`.`firstname`,' ',`student`.`lastname`) AS `stuName`,`student`.`id` AS `id` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `getsuid`
--
DROP TABLE IF EXISTS `getsuid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getsuid`  AS  select concat(`supervisor`.`firstname`,' ',`supervisor`.`lastname`) AS `suName`,`supervisor`.`id` AS `id` from `supervisor` ;

-- --------------------------------------------------------

--
-- Structure for view `gettid`
--
DROP TABLE IF EXISTS `gettid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gettid`  AS  select concat(`tutor`.`firstname`,' ',`tutor`.`lastname`) AS `tName`,`tutor`.`id` AS `id` from `tutor` ;

-- --------------------------------------------------------

--
-- Structure for view `getusers`
--
DROP TABLE IF EXISTS `getusers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getusers`  AS  select `admin`.`username` AS `username`,`admin`.`password` AS `password`,`admin`.`userrole_id` AS `userrole_id` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password`,`tutor`.`userrole_id` AS `userrole_id` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password`,`supervisor`.`userrole_id` AS `userrole_id` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password`,`student`.`userrole_id` AS `userrole_id` from `student` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`userrole_id`),
  ADD KEY `fk_admin_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_student1_idx` (`student_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questionnaire_student1_idx` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_supervisor1_idx` (`supervisor_id`),
  ADD KEY `fk_student_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`,`company_id`,`userrole_id`),
  ADD KEY `fk_supervisor_company1_idx` (`company_id`),
  ADD KEY `fk_supervisor_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`,`company_id`,`userrole_id`),
  ADD KEY `fk_tutor_company_idx` (`company_id`),
  ADD KEY `fk_tutor_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worklog`
--
ALTER TABLE `worklog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worklog`
--
ALTER TABLE `worklog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `fk_supervisor_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_supervisor_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `fk_tutor_company` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tutor_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
