 Server: localhost -  Database: cts
-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2023 at 06:15 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cts`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE IF NOT EXISTS `alogin` (
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `detail` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `user_name`, `contactnumber`, `email_id`, `purpose`, `detail`) VALUES
(13, 'abhishak', '8957999203', 'abhi@gmail.com', 'general complen', 'from mihinpurwa'),
(12, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `crimecomplain`
--

CREATE TABLE IF NOT EXISTS `crimecomplain` (
  `ccId` int(50) NOT NULL AUTO_INCREMENT,
  `crimetype` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `anysupect` varchar(50) NOT NULL,
  `anyproof` varchar(50) NOT NULL,
  `crimeLocation` varchar(50) NOT NULL,
  `involvePerson` varchar(50) NOT NULL,
  `hideyourIdentity` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `complaner_emailId` varchar(50) NOT NULL,
  `complain date time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`ccId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `crimecomplain`
--

INSERT INTO `crimecomplain` (`ccId`, `crimetype`, `title`, `anysupect`, `anyproof`, `crimeLocation`, `involvePerson`, `hideyourIdentity`, `contactno`, `address`, `complaner_emailId`, `complain date time`, `status`) VALUES
(9, 'rape', 'ouou', 'ouoiuo', 'uoiuoi', 'uoiuoi', 'iuoi', 'radiobutton', 'oiuoi', 'uoiuoi', 'ui@gmail.com', 'uio', '0'),
(10, 'murder', 'iyiuy', 'uiyiu', 'yiuy', 'iuy', 'iyiuy', 'radiobutton', 'oiu', 'oui', '', '2023-07-21 19-21-35', '0'),
(7, 'murder', 'rapping', 'no', 'yes', 'madiyaon', 'amar', 'radiobutton', '100', 'bkt', '', '5656', '0');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `faq_id` int(50) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`) VALUES
(4, '', ''),
(5, '', ''),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `g_Id` int(50) NOT NULL AUTO_INCREMENT,
  `criminl_name` varchar(50) NOT NULL,
  `reword` varchar(50) NOT NULL,
  `afletedby` varchar(50) NOT NULL,
  `joined_year` varchar(50) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`g_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_Id`, `criminl_name`, `reword`, `afletedby`, `joined_year`, `profile_photo`) VALUES
(28, 'Himanshu', '155000', 'dk', '2022', 'OIP (10).jpeg'),
(27, 'jain', '14702', 'rohan', '2011', 'images (3).jpeg'),
(26, 'mohan', '741852', 'dinash', '2014', 'a.jpg'),
(25, 'Ramchander', '410000', 'vivke', '1015', 'OIP.jpeg'),
(24, 'Ramchander', '410000', 'vivke', '1015', 'OIP.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gc`
--

CREATE TABLE IF NOT EXISTS `gc` (
  `gcId` int(50) NOT NULL AUTO_INCREMENT,
  `complaintitle` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `complainr_emailid` varchar(50) NOT NULL,
  `conplaner` varchar(50) NOT NULL,
  `complain_date_time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`gcId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gc`
--

INSERT INTO `gc` (`gcId`, `complaintitle`, `detail`, `complainr_emailid`, `conplaner`, `complain_date_time`, `status`) VALUES
(6, 'rytry', '4tet', '', 'yty', '23-07-21 19:25:26', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email_id`, `password`) VALUES
('ag55@gmail.com', '7412'),
('akv123@gmail.com', '1230'),
('om65@gmail.com', '6901'),
('vk12@gmail.com', '8520'),
('ab28@gmail.com', '509'),
('rm12@gmail.com', '741');

-- --------------------------------------------------------

--
-- Table structure for table `mp`
--

CREATE TABLE IF NOT EXISTS `mp` (
  `mp_Id` int(50) NOT NULL AUTO_INCREMENT,
  `mp_name` varchar(50) NOT NULL,
  `mp_contactno` varchar(50) NOT NULL,
  `mp_aadharcardno` varchar(50) NOT NULL,
  `lastview_location` varchar(50) NOT NULL,
  `body_mark` varchar(50) NOT NULL,
  `body_color` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `reword` varchar(50) NOT NULL,
  `complaner_email` varchar(50) NOT NULL,
  `Complain_date_time` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mp_photo` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`mp_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mp`
--

INSERT INTO `mp` (`mp_Id`, `mp_name`, `mp_contactno`, `mp_aadharcardno`, `lastview_location`, `body_mark`, `body_color`, `dob`, `reword`, `complaner_email`, `Complain_date_time`, `address`, `mp_photo`, `status`) VALUES
(15, 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', '', '2023-07-21 20:45:48', 'r', 'OIP (8).jpeg', '0'),
(16, 'iu', 'uoi', 'uoiu', 'oiu', 'oiu', 'oiuo', 'iuoi', 'uou', '', '2023-07-21 20:51:31', 'oi', 'OIP (4).jpeg', '0'),
(14, 'rani', '89080808', '098098979878', 'iuyiy', 'iuyiuy', 'iyiu', 'yiuy', 'yiuyiuy', '', '2023-07-21 20:31:08', 'uyiy', 'OIP (9).jpeg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mv`
--

CREATE TABLE IF NOT EXISTS `mv` (
  `mv_Id` int(50) NOT NULL AUTO_INCREMENT,
  `valvablename` varchar(50) NOT NULL,
  `valvableType` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `anysuspect` varchar(50) NOT NULL,
  `complainer_emailid` varchar(50) NOT NULL,
  `any reword` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `complainer date time` varchar(50) NOT NULL,
  `statues` varchar(50) NOT NULL,
  PRIMARY KEY (`mv_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mv`
--

INSERT INTO `mv` (`mv_Id`, `valvablename`, `valvableType`, `price`, `anysuspect`, `complainer_emailid`, `any reword`, `contactno`, `address`, `detail`, `complainer date time`, `statues`) VALUES
(5, 'rtttr', 'radiobutton', 'jkhk', 'jhkjhkjh', '', 'hkjh', 'khkj', 'hkjh', 'hkh', '23-07-21 20:38:21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsId` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `post date time` varchar(50) NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `policeststion`
--

CREATE TABLE IF NOT EXISTS `policeststion` (
  `ps_id` int(50) NOT NULL AUTO_INCREMENT,
  `chaukiIncharge` varchar(50) NOT NULL,
  `cog_no` varchar(50) NOT NULL,
  `agentName` varchar(50) NOT NULL,
  `agentContact no1` varchar(50) NOT NULL,
  `agentContact no2` varchar(50) NOT NULL,
  `agent email_id` varchar(50) NOT NULL,
  `thanaPrabhari` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `psPhoto` varchar(255) NOT NULL,
  PRIMARY KEY (`ps_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `policeststion`
--

INSERT INTO `policeststion` (`ps_id`, `chaukiIncharge`, `cog_no`, `agentName`, `agentContact no1`, `agentContact no2`, `agent email_id`, `thanaPrabhari`, `address`, `pincode`, `psPhoto`) VALUES
(5, 'Abhay Kumar', '741258963012', 'Ramnath', '9919497477', '9954567175', 'ak12@gmail.com', 'Raj gupta ', 'Kanpur', '222701', 'FNTcf0jacAAoe-H.jpg'),
(4, 'Anand Gupta', '94544400248', 'Vipin Gupta ', '9555740271', '9919497477', 'vg@342gmail.com', 'Braj Kishnor Diwedi', '16 togore road', '271856', 'download (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `reg_Id` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin_code` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `h_qualification` varchar(50) NOT NULL,
  `aadharcard_no` varchar(50) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`reg_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`reg_Id`, `user_name`, `password`, `gender`, `email_id`, `contact_no`, `address`, `pin_code`, `dob`, `h_qualification`, `aadharcard_no`, `profile_photo`) VALUES
(31, 'Vinay kumar', '8520', 'mail', 'vk12@gmail.com', '07412589630', 'BKT', '226021', '02/02/2005', '12th', '741852963074', 'OIP (1).jpeg');

