-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2019 at 04:16 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

DROP TABLE IF EXISTS `bloodbank`;
CREATE TABLE IF NOT EXISTS `bloodbank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `name`, `state`, `city`, `address`) VALUES
(7, 'Meera Nursing Home Blood Bank', 'Bihar', 'Begusarai', 'Pokharia Rd, Chitragupta Nagar, Begusarai'),
(6, 'Deshratan Rajendra Prasad Memorial Rotary Blood Bank', 'Bihar', 'Begusarai', 'Kali Asthan, P.O. Pokhanlya'),
(8, 'Rastra Kavi Dinkar Blood Bank', 'Bihar', 'Begusarai', 'Sadar Hospital, Begusarai'),
(10, 'Sadar Hospital Aurangabad Blood Bank', 'Bihar', 'Aurangabad', 'Old G.T.Road');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgp`
--

DROP TABLE IF EXISTS `bloodgp`;
CREATE TABLE IF NOT EXISTS `bloodgp` (
  `bg_id` int(11) NOT NULL AUTO_INCREMENT,
  `bg_name` varchar(100) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgp`
--

INSERT INTO `bloodgp` (`bg_id`, `bg_name`) VALUES
(9, 'A+'),
(3, 'B-'),
(4, 'B+'),
(5, 'O-'),
(7, 'A-'),
(11, 'AB+'),
(12, 'AB-'),
(13, 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `c_name`, `pincode`, `district`, `state`) VALUES
(7, 'Aurangabad', 824101, 'Aurangabad', 'Bihar'),
(8, 'Begusarai', 851101, 'Begusarai', 'Bihar'),
(9, 'Bhavnagar', 364001, 'Bhavnagar', 'Gujarat'),
(10, 'Bharuch', 392001, 'Bharuch', 'Gujarat'),
(11, 'Hisar', 125001, 'Hisar', 'Haryana'),
(12, 'Karnal', 132001, 'Karnal', 'Haryana'),
(13, 'Bagalkot', 587102, 'Bagalkot', 'Karnataka'),
(14, 'Hassan', 573201, 'Hassan', 'Karnataka'),
(15, 'Allahabad', 211002, 'Allahabad', 'UttarPradesh'),
(16, 'Bareilly', 243001, 'Bareilly', 'UttarPradesh'),
(17, 'Jhansi', 284002, 'Jhansi', 'UttarPradesh'),
(18, 'Lucknow', 226020, 'Lucknow', 'UttarPradesh'),
(19, 'Kanpur ', 208004, 'Kanpur Nagar', 'UttarPradesh');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobnum` varchar(50) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobnum`, `sub`, `message`) VALUES
(1, '', '', '', '', ''),
(2, 'gksdcg', 'kxgfvk@gmail.com', '7845784578', 'gjsdgf', 'hbkcxjhfv'),
(3, 'sakshi shukla', 'sakshi123@gmail.com', '7845789865', 'Donate the blood', 'Its good..'),
(4, 'as', 'asdsf@gmail.com', 'fdf', 'sdf', 'dfssdss'),
(5, 'as', 'asdsf@gmail.com', 'fdf', 'sdf', 'dfssdss'),
(6, 'nisha', 'nisha123@gmail.com', '7845784578', 'donation', 'my blood group is O+....'),
(7, 'kdfjf', 'jkbah@gmail.com', 'jhfgiuh', 'uhuifg', 'iyiuugf'),
(8, 'sakshi', 'sakshi123@gmail.com', '4574711545', 'donation', 'jdgk'),
(9, 'gsdg', 'SAKSHI@gmail.com', '4545', 'HKJ', 'NN'),
(10, 'gsdg', 'SAKSHI@gmail.com', '4545', 'HKJ', 'NN');

-- --------------------------------------------------------

--
-- Table structure for table `donarreg`
--

DROP TABLE IF EXISTS `donarreg`;
CREATE TABLE IF NOT EXISTS `donarreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(20) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobnum` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bloodgp` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarreg`
--

INSERT INTO `donarreg` (`id`, `name`, `gender`, `age`, `weight`, `state`, `city`, `mobnum`, `email`, `bloodgp`, `password`, `date`, `image`, `message`) VALUES
(5, 'Ravi Srivastava', 'male', '28', '65', 'uttarpradesh', 'lucknow', '658984595', 'ravi899@gmail.com', 'A+', 'ravi8', '1987-12-28', 'images/pic2.jpg', 'Required'),
(4, 'Priya Saxena', 'female', '22', '50', 'uttarpradesh', 'kanpur', '8654569874', 'priya14@gmail.com', 'A+', 'priya45', '1991-12-30', 'images/pic1.jpg', 'Urgent need...'),
(3, 'Savita Verma', 'female', '24', '55', 'uttarpradesh', 'kanpur', '8978986985', 'savita45@gmail.com', 'A-', 'savita78', '1992-12-31', 'images/i1.jpg', 'Donate'),
(7, 'Divakar', 'male', '25', '68', 'uttarpradesh', 'lucknow', '99563933', 'rajputdivakar668@gmail.com', 'O+', '123456', '1994-07-01', '', 'I want to donate blood');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `news`, `image`) VALUES
(37, 'Young Blood Unproven as Anti-Aging Treatment: US FDA\r\nCarolyn Wilke | Feb 20, 2019\r\nThe agency warns that plasma treatments costing thousands of dollars, which supposedly treat the infirmities of old age, have not been proven â€œsafe o', 'img/img1.jpg'),
(38, '\r\nProtein Changes Detected in Blood Years Before Alzheimerâ€™s Onset\r\nJef Akst | Jan 21, 2019\r\nThe observation could pave the way for a blood test to predict disease progression in people with a genetic predisposition to developing the neurodegenerative disorder.', 'img/img2.jpg'),
(39, 'Keeping the Blood Supply Zika-Free\r\nDiana Kwon | Apr 7, 2017\r\nBlood donation centers across the U.S. are required to screen samples for signs of the mosquito-borne virus. Some have questioned whether itâ€™s always necessar', 'img/img3.jpg'),
(44, 'World blood donor day: PGIMER urges people to donate platelets On the World Blood Donor Day, the blood transfusion department of the Post Graduate Institute of Medical Education and Research (PGIMER) urges you to become a platelet donor.Platelets are blood cells that form clots and stop bleeding. These tiny cells of blood are most crucial to save the lives of those fighting cancer, chronic diseases and traumatic injuries.', 'img/img5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `bloodgp` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mobnum` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `priority` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `pname`, `dname`, `bloodgp`, `state`, `city`, `address`, `cname`, `mobnum`, `date`, `priority`, `email`, `message`) VALUES
(1, 'hjkkh', 'hjkhj', 'A+', 'Karnataka', 'Aurangabad', 'hkjh', 'gkjg', '54654654565', '2019-12-31', 'Normal', 'gjkg', 'hkjh'),
(2, 'ikasj', 'bikash', 'O+', 'Bihar', 'Begusarai', 'test address', 'sakshi', '7860455533', '2019-12-31', 'Normal', 'test@mail.com', 'test form');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `s_name`) VALUES
(1, 'Bihar'),
(3, 'Gujarat'),
(4, 'Haryana'),
(5, 'Karnataka'),
(6, 'UttarPradesh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
