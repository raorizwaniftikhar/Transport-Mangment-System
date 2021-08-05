-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2014 at 10:27 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `add_cash` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `remaining` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `driver_id`, `total_amount`, `add_cash`, `date`, `remaining`) VALUES
(1, 2, '300', '200', '2014-08-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`, `type`) VALUES
(1, 'Administartor', 'admin', 'RANA', 'rana.ammar9@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE IF NOT EXISTS `allocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `driver` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`id`, `vehicle`, `vehicle_model`, `driver`, `date`) VALUES
(4, 'qwe879879', 'honda', 1, '2014-08-13'),
(6, 'qwe879879', 'honda', 2, '2014-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `caccounts`
--

CREATE TABLE IF NOT EXISTS `caccounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income` varchar(255) NOT NULL,
  `expense` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `caccounts`
--

INSERT INTO `caccounts` (`id`, `income`, `expense`, `date`, `description`) VALUES
(1, '500', '50', '2014-08-13', 'tea');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `company_name`, `address`, `state`, `phone1`, `phone2`, `fax`, `email`, `url`, `company_logo`) VALUES
(1, 'Mobilink GSM', 'Mobilink GSM', 'F8 islamabad', '', '03137768864', '03137768864', '03137768864', 'arifjamvi@gmail.com', 'http://www.google.com', '010833images3.jpg'),
(7, 'Zong', 'Zong', 'Islamabad', '', '4893489439843894389', '843843894398439', '83489438943843', 'shakeel@rganix.com', 'http://www.google.com', '010858imgres2.jpg'),
(8, 'Telenor', 'Telenor', 'Islamabad Pakistan', 'Dubai', '03137768864', '03137768864', '03137768864', 'arifjamvi@gmail.com', 'http://www.google.com', '010836imgres1.jpg'),
(9, 'Warid', 'Warid', 'F8 islamabad', 'Oman', '03137768864', '03137768864', '03137768864', 'arifjamvi@gmail.com', 'http://www.google.com', '010805images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `finame` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lis_no` varchar(255) NOT NULL,
  `lis_exdate` date NOT NULL,
  `visa_no` varchar(255) NOT NULL,
  `visa_exdate` date NOT NULL,
  `pass_no` varchar(255) NOT NULL,
  `pass_exdate` varchar(255) NOT NULL,
  `lab_no` varchar(255) NOT NULL,
  `lab_exdate` date NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `finame`, `lname`, `fname`, `cnic`, `phone1`, `phone2`, `address`, `lis_no`, `lis_exdate`, `visa_no`, `visa_exdate`, `pass_no`, `pass_exdate`, `lab_no`, `lab_exdate`, `image`) VALUES
(1, 'chaudry', 'asad', 'ch. khan', '3620301679511', '03137768864', '03137768864', '7 no. chungi near LFC ', '030816footer-logo6.png', '2015-05-03', '020804201382218923842_.jpg', '2015-05-03', '020804laser.jpg', '2015-05-03', 'lmk67891234', '2015-05-03', '020804dermatological.jpg'),
(2, 'SOHAIB', 'MEHMOOD', 'CH.MEHMOOD', '362038768768', '03427085885', '03427085885', 'MULTAN', '050842logo.png', '2015-09-08', '050842logo9sm_SHARP.png', '2015-09-08', '050842logo_newmmm_2xsma.jpg', '2015-09-08', '97482377697', '2015-09-08', '050842r3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_title`, `page_description`) VALUES
(1, 'About us', 'Our Mission', '<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique  sollicitudin orci, quis eleifend sapien volutpat eu. Class aptent taciti  sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.  Vivamus eleifend nisl sit amet porttitor congue. Pellentesque eget elit  metus. Integer justo ante, dignissim vitae metus quis, aliquet egestas  ante. Proin condimentum ipsum neque, in egestas est porta in. Ut  adipiscing ipsum dui, sit amet sodales dui viverra ac. Maecenas nibh  sapien, porttitor a arcu sit amet, luctus vestibulum quam. Quisque eget  nisi in urna lacinia fermentum. Vivamus aliquam nulla tellus, rutrum  ornare nibh rutrum at. Quisque eget sem a mi vehicula imperdiet non quis  elit. Vivamus elementum aliquam leo, at pretium elit aliquam in. Sed  convallis massa vitae eros interdum, et auctor lectus mollis. In  sollicitudin, felis id aliquet tincidunt, nisl ligula ornare sapien, nec  ullamcorper magna lacus nec sem. Suspendisse elementum euismod nibh,  lobortis rutrum felis egestas sed.</strong>'),
(6, 'Profile', 'Our Profile', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique sollicitudin orci, quis eleifend sapien volutpat eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eleifend nisl sit amet porttitor congue. Pellentesque eget elit metus. Integer justo ante, dignissim vitae metus quis, aliquet egestas ante. Proin condimentum ipsum neque, in egestas est porta in. Ut adipiscing ipsum dui, sit amet sodales dui viverra ac.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Maecenas nibh sapien, porttitor a arcu sit amet, luctus vestibulum quam. Quisque eget nisi in urna lacinia fermentum. Vivamus aliquam nulla tellus, rutrum ornare nibh rutrum at. Quisque eget sem a mi vehicula imperdiet non quis elit. Vivamus elementum aliquam leo, at pretium elit aliquam in. Sed convallis massa vitae eros interdum, et auctor lectus mollis. In sollicitudin, felis id aliquet tincidunt, nisl ligula ornare sapien, nec ullamcorper magna lacus nec sem. Suspendisse elementum euismod nibh, lobortis rutrum felis egestas sed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique sollicitudin orci, quis eleifend sapien volutpat eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eleifend nisl sit amet porttitor congue. Pellentesque eget elit metus. Integer justo ante, dignissim vitae metus quis, aliquet egestas ante. Proin condimentum ipsum neque, in egestas est porta in. Ut adipiscing ipsum dui, sit amet sodales dui viverra ac.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Maecenas nibh sapien, porttitor a arcu sit amet, luctus vestibulum quam. Quisque eget nisi in urna lacinia fermentum. Vivamus aliquam nulla tellus, rutrum ornare nibh rutrum at. Quisque eget sem a mi vehicula imperdiet non quis elit. Vivamus elementum aliquam leo, at pretium elit aliquam in. Sed convallis massa vitae eros interdum, et auctor lectus mollis. In sollicitudin, felis id aliquet tincidunt, nisl ligula ornare sapien, nec ullamcorper magna lacus nec sem. Suspendisse elementum euismod nibh, lobortis rutrum felis egestas sed.</p>\r\n'),
(5, 'Wha we do', 'What We Do', '<p>this is dummy text to check To checkupdate query</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(7, 'Quality Policy', 'Quality Policy', ''),
(8, 'Why Najmat cargo', 'Why Najmat Cargo', ''),
(9, 'Services', 'Services', ''),
(10, 'Clearing', 'Clearing', ''),
(11, 'Forwarding', 'Forwarding', ''),
(12, 'Cargo Movers', 'Cargo Movers', ''),
(13, 'Relocations', 'Relocations', ''),
(14, 'Consultaion & Customise Services', 'Consultaion & Customise Services', ''),
(15, 'Enquiry', 'Enquiry', ''),
(16, 'Our Locations', 'Our Locations', ''),
(17, 'Shipping', 'Shipping', ''),
(18, 'FAQ', 'FAQ', ''),
(19, 'Our Clients', 'Our Clients', '<h1><strong>Mobilink</strong></h1><br />\r\n<br />\r\n<p><strong>Our best client ect</strong></p><br />\r\n<br />\r\n<h1><strong>Zong</strong></h1><br />\r\n<br />\r\n<h1><img alt="" src="http://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg" style="height:150px; width:200px" /></h1><br />\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_no` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `class_vehicle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `chasis_no` varchar(255) NOT NULL,
  `fitness_upto` date NOT NULL,
  `reg_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `waqala` varchar(255) NOT NULL,
  `regcard` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vehicle_no`, `vehicle_model`, `class_vehicle`, `color`, `engine_no`, `chasis_no`, `fitness_upto`, `reg_date`, `image`, `waqala`, `regcard`) VALUES
(3, 'qwe879879', 'honda', 'luxury', 'white', 'qw76876', 'qw32132', '2014-08-13', '2014-08-13', '120847dr-logo-new3.png', '120832201382218923842_.jpg', '120847argyll_lr.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
