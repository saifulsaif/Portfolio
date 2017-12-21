-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 12:17 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`about_id` int(33) NOT NULL,
  `photo` longblob NOT NULL,
  `title` varchar(22) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `photo`, `title`, `description`) VALUES
(5, 0x687474703a2f2f6c6f63616c686f73742f506f7274666f6c696f2f6173736574732f696d672f494d475f3335303261412e6a7067, 'Hello! i''m Saifulsaif', 'I am SaifulSaif, I would like to introduce myself as a web developer to serve you a efficient and professional web application.I Working with different web related projects I have more then 1 year of successful experience in web application development. Basically I am work latest framework of web development.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`contact_id` int(33) NOT NULL,
  `full_name` varchar(33) NOT NULL,
  `email_address` varchar(23) NOT NULL,
  `subject` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `full_name`, `email_address`, `subject`, `message`, `date`) VALUES
(8, 's', 's', 's', 'slectus libero, lobortis sed quam in, congue elementum tellus. Vestibulum dui enim, aliquet in tellus id, luctus tristique velit. Mauris augue sapien, condimentum sed ligula sit amet, facilisis aliquet nulla. Donec sed congue tellus, quis efficitur nisl. Maecenas at sapien orci. Donec dapibus pellentesque orci, nec egestas sapien ultricies eu. Morbi eu sem commodo, pellentesque massa quis, semper tortor. Nulla commodo fermentum sagittis.', '2017-09-28 05:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
`footer_id` int(33) NOT NULL,
  `address` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `number` varchar(111) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `address`, `email`, `number`, `description`) VALUES
(1, 'panthpathah,Dhaka 1212', 'saifulsaif5854@gmail.com', '01759998001', 'Donec quis tincidunt nisl. Mauris ac urna libero. Aliquam cursus, augue eu efficitur dignissim, risus mauris porta diam, in bibendum lectus enim vitae risus. Maecenas sit amet pretium quam, in tristique ante.');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
`header_id` int(32) NOT NULL,
  `logo` varchar(333) NOT NULL,
  `title` varchar(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`header_id`, `logo`, `title`) VALUES
(3, 'SAIFULsaif', 'HELLO, MY NAME IS SaifulSaif');

-- --------------------------------------------------------

--
-- Table structure for table `main_portfolio`
--

CREATE TABLE IF NOT EXISTS `main_portfolio` (
`id` int(33) NOT NULL,
  `main_portfolio_photo` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `main_portfolio`
--

INSERT INTO `main_portfolio` (`id`, `main_portfolio_photo`) VALUES
(3, 0x687474703a2f2f6c6f63616c686f73742f506f7274666f6c696f2f6173736574732f696d672f706f7274666f6c696f2f706f7274666f6c696f322e6a7067),
(4, 0x687474703a2f2f6c6f63616c686f73742f506f7274666f6c696f2f6173736574732f696d672f706f7274666f6c696f2f706f7274666f6c696f312e6a7067),
(5, 0x687474703a2f2f6c6f63616c686f73742f506f7274666f6c696f2f6173736574732f696d672f706f7274666f6c696f2f706f7274666f6c696f332e6a7067),
(6, 0x687474703a2f2f6c6f63616c686f73742f506f7274666f6c696f2f6173736574732f696d672f706f7274666f6c696f2f706f7274666f6c696f342e6a7067),
(7, 0x687474703a2f2f6c6f63616c686f73742f506f7274666f6c696f2f6173736574732f696d672f706f7274666f6c696f2f706f7274666f6c696f362e6a7067),
(8, 0x687474703a2f2f6c6f63616c686f73742f506f7274666f6c696f2f6173736574732f696d672f706f7274666f6c696f2f706f7274666f6c696f352e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`service_id` int(33) NOT NULL,
  `title` varchar(22) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `title`, `description`) VALUES
(1, 'WEB DESIGN', 'Praesent magna neque, dapibus sit amet eros sed, aliquam interdum felis. Nulla rhoncus ipsum dui.'),
(2, 'CODIENG', 'Praesent magna neque, dapibus sit amet eros sed, aliquam interdum felis. Nulla rhoncus ipsum dui.'),
(5, 'FRONT END DEVELOPMENT', 'Front End Development is building out the visual components of a website. Using HTML, CSS , and Javascript, I build fast, interactive websites. This also may include integrating a CMS.'),
(7, 'DESIGN', 'I convert designs to high-performance code whilst respecting your designer’s compositions. I consider design to be just as important as development and aim to combine both to produce high quality user experience.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`admin_id` int(12) NOT NULL,
  `admin_email_address` varchar(22) NOT NULL,
  `admin_password` varchar(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email_address`, `admin_password`) VALUES
(1, 'saiful', 'saif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
 ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
 ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `main_portfolio`
--
ALTER TABLE `main_portfolio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `about_id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `contact_id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
MODIFY `footer_id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
MODIFY `header_id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `main_portfolio`
--
ALTER TABLE `main_portfolio`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `service_id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
