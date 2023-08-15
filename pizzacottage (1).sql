-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2022 at 06:34 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzacottage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `houseno` varchar(20) NOT NULL,
  `streetname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `mobileno` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `password`, `firstname`, `lastname`, `houseno`, `streetname`, `city`, `district`, `mobileno`) VALUES
('john@gmail.com', 'John123@', 'John', 'Lambert', '10', 'Delkanda', 'Colombo', 'Nugegoda', 771234567);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

DROP TABLE IF EXISTS `orderitems`;
CREATE TABLE IF NOT EXISTS `orderitems` (
  `orderid` varchar(50) NOT NULL,
  `productid` varchar(100) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pprice` double DEFAULT NULL,
  `oimage` varchar(8000) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  PRIMARY KEY (`orderid`,`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`orderid`, `productid`, `pname`, `pprice`, `oimage`, `qty`) VALUES
('001', '1', 'Normal Pizza', 4.99, 'http://localhost/Products/pizza-1.png', 2),
('001', '3', 'Cheese Pizza', 8.75, 'http://localhost/Products/pizza-2.png', 3),
('001', '2', 'Chicken Pizza', 10.55, 'http://localhost/Products/pizza-3.png', 1),
('001', '4', 'Mushroom Pizza', 12.64, 'http://localhost/Products/pizza-4.png', 2),
('001', '5', 'Spicy Pizza', 19.99, 'http://localhost/Products/pizza-4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` varchar(50) NOT NULL,
  `cusid` varchar(50) DEFAULT NULL,
  `ototal` int(10) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `cusid`, `ototal`) VALUES
('001', 'john@gmail.com', 16);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(8000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Normal Pizza', 'normal_pizza', 4.99, 'pizza-1.png'),
(2, 'Chicken Pizza', 'chicken_pizza', 10.55, 'pizza-3.png'),
(3, 'Cheese Pizza', 'cheese_pizza', 8.75, 'pizza-4.png'),
(4, 'Mushroom Pizza', 'mushroom_pizza', 12.64, 'pizza-1.png'),
(5, 'Spicy Pizza', 'spicy_pizza', 19.99, 'pizza-2.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
