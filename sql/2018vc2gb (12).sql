-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 07:48 AM
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
-- Database: `2018vc2gb`
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

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `status`, `student_id`) VALUES
(3, '<p>Add comment and validate comment to studen', 0, 9),
(4, '<p>Working hard.</p>', 0, 9),
(6, '<p>He is for testing&nbsp;</p>', NULL, 10),
(7, '<p>for a;lskdf</p>', NULL, 10),
(17, NULL, NULL, 10);

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
(6, 'Codingate', 'My friend company', 'No. 59, Oknha Pich St. (242), Phnom Penh, Phnom Penh', '80809 Munich, Germany', '07646468', 'www.codingate.com', 48.1865, 11.5615),
(7, 'BMW', 'MY company for first InternShip', 'Phnom Penh', '242 Oknha Pich St. (242), Phnom Penh, Cambodia', '07646468', 'www.bmw.com', 11.5576, 104.922),
(8, 'RCI', 'MY company for first InternShip', 'Phnom Penh', 'Unnamed Road, Krong Preah Sihanouk, Cambodia', '07646468', 'www.rci.com.kh', 10.6547, 103.538);

-- --------------------------------------------------------

--
-- Stand-in structure for view `councompany`
-- (See below for the actual view)
--
CREATE TABLE `councompany` (
`firstname` varchar(45)
,`lastname` varchar(45)
,`count(*)` bigint(21)
,`id` int(11)
);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Stand-in structure for view `getuser`
-- (See below for the actual view)
--
CREATE TABLE `getuser` (
`username` varchar(45)
,`password` varchar(200)
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
  `major` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 'Bunthean', 'gigi', 'SNA', 2018, 's.gigi@gmail.com', 'gigi@gmail.com', 987654, NULL, '$2a$08$bU7Hk4eCvpJBoVqG6VmBuuUbG63G3.E3sB.hdO4rRo.HtTM9EMPQe', 'gigi', NULL, 8, 4),
(10, 'G-gevit', 'PNCs', 'Web', 2018, 's.gigi@gmail.com', 'gigi@gmail.com', 987657, NULL, '$2a$08$r5EJ.0yNYzUyc0iWc6fHkOm1YhqPEBtnAg9ecUqfZLoPf6wjgARLW', 'premmann', 'Capture3.PNG', 13, 4),
(11, 'Touch', 'Ban', 'SNA', 2018, 's.gigi@gmail.com', 'gigi@gmail.com', 9876543, NULL, '$2a$08$2buPX9lYbvFk3fKQsBnJ5.CFAkPg8fSs/sdgAewr0Mz6llQ6h9giu', 'btouch', 'CMS_database2.PNG', 12, 4);

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
(8, 'Ronaldo', 'Real Madrid', 'Web Trainer', 'ero@gmail.com', 987654, 'youtube3.jpg', '$2a$08$8P/ln7I27YHWbexB/5aFK.KISObgSyPjFh3yUfUT9hzr.AdyJ10Q.', 'premmann', 6, 3),
(12, 'Messi', 'Barcelona', 'Web Trainer', 'ero@gmail.com', 7646468, 'Capture4.PNG', '$2a$08$2hgwSMtGMbn0BFzy.5Mw2edjp8.Qbi3xu5kTaFGl9gTlB091dSvXq', 'premmann', 8, 3),
(13, 'dftyuio', 'dfghuiop', 'Web Trainer', 'Premmannpnc@gmail.com', 9876543, 'CMS_database5.PNG', '$2a$08$5jeV4wSOgoU8WRgzYOysC.eKHI1gorV9tZmJ1d6YO9SUj2/97Uogu', 'dfghjk', 7, 3);

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
(9, 'Asernal', 'English', 'Football Club', 'Asernal@gmail.com', 9876543, 'Capture.PNG', '$2a$08$WSI6.wQugB2txiWg4u2s2OEolRbNZMXcVdmTVdh9ZQHuz59C29Ek2', 'asernal', 7, 2),
(10, 'Prem', 'Mann', 'Web Trainer', 'pnc@gmail.com', 9876543, 'github7.png', '$2a$08$ZEyUWIE30Jb/ioesMhO0rOHB1sEI.GSk1AIF2my3QtC2e/py6i5Mu', 'prem', 8, 2),
(11, 'Rady', 'gigi', 'Web Trainer', 'pnc@gmail.com', 987654, 'github6.png', '$2a$08$G333DP/xVD9aL8dLMtCgjeRbGyiPn/U7IAN0YtIVfwa7ZTTRYWZvi', 'ssss', 6, 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worklog`
--

INSERT INTO `worklog` (`id`, `date`, `starttime`, `endtime`, `workactivities`, `youhavelearn`, `issues`, `solutions`, `todo`, `comment`, `workreflections`, `student_id`) VALUES
(1, '2018-05-28', '07:30:00', '11:00:00', NULL, NULL, NULL, NULL, NULL, 'No task to do', NULL, 10);

-- --------------------------------------------------------

--
-- Structure for view `alluser`
--
DROP TABLE IF EXISTS `alluser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alluser`  AS  select `admin`.`username` AS `UserName`,`admin`.`password` AS `Password` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `councompany`
--
DROP TABLE IF EXISTS `councompany`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `councompany`  AS  select `supervisor`.`firstname` AS `firstname`,`supervisor`.`lastname` AS `lastname`,count(0) AS `count(*)`,`supervisor`.`id` AS `id` from (`student` join `supervisor`) where (`supervisor`.`id` = `student`.`supervisor_id`) group by `supervisor`.`firstname` ;

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
-- Structure for view `getuser`
--
DROP TABLE IF EXISTS `getuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getuser`  AS  select `admin`.`username` AS `username`,`admin`.`password` AS `password` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password` from `student` ;

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
  ADD KEY `stu_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worklog`
--
ALTER TABLE `worklog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD CONSTRAINT `fk_questionnaire_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_supervisor1` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `worklog`
--
ALTER TABLE `worklog`
  ADD CONSTRAINT `worklog_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
