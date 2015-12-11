-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 09:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kubergem_gem_insert`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gem`
--

CREATE TABLE IF NOT EXISTS `tbl_gem` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `weight_type` varchar(20) NOT NULL DEFAULT 'Carat',
  `measurement` varchar(50) NOT NULL,
  `gravity` varchar(50) DEFAULT NULL,
  `ri` varchar(10) DEFAULT NULL,
  `cut` varchar(10) NOT NULL,
  `clarity` varchar(25) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `color` varchar(25) DEFAULT NULL,
  `create_date` varchar(10) DEFAULT NULL,
  `fluoresence` varchar(25) DEFAULT NULL,
  `finish` varchar(25) DEFAULT NULL,
  `table` varchar(25) DEFAULT NULL,
  `crown` varchar(25) DEFAULT NULL,
  `pavelion` varchar(25) DEFAULT NULL,
  `gridle` varchar(25) DEFAULT NULL,
  `culet_size` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gem`
--

INSERT INTO `tbl_gem` (`id`, `name`, `image`, `weight`, `weight_type`, `measurement`, `gravity`, `ri`, `cut`, `clarity`, `remarks`, `color`, `create_date`, `fluoresence`, `finish`, `table`, `crown`, `pavelion`, `gridle`, `culet_size`) VALUES
(12345, 'gem_app', '12345.jpg', '0.0004', 'Carat', '6.02 x 4.08 x 3.45 mm', '2121', '21212', '32323', '544', 'Jadeite Jada', 'Green', '14-12-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1159145607, 'admin', '1159145607.jpg', '0.0003', 'Carat', '6.02 x 4.08 x 3.45 mm', '651', 'Sample', '32323', '544', 'Jadeite Jada', 'Green', '14-12-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1385350222, 'bappa', '1385350222.jpg', '0.0004', 'rati', '6.02 x 4.08 x 3.45 mm', '651', 'Sample', '656', '544', 'Jadeite Jada', 'Green', '14-12-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
