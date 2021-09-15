-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 04:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopeemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `billingaddress`
--

CREATE TABLE `billingaddress` (
  `id` int(10) NOT NULL,
  `fName` varchar(255) DEFAULT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `payment` float DEFAULT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billingaddress`
--

INSERT INTO `billingaddress` (`id`, `fName`, `lName`, `email`, `address`, `payment`, `userid`) VALUES
(1, 'Jarif', 'Arafat', 'jarif@gmail.com', 'xyz', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(12) NOT NULL,
  `productid` int(10) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productid`, `userid`) VALUES
(1, 1, 1),
(2, 4, 1),
(3, 5, 1),
(4, 7, 1),
(5, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(12) NOT NULL,
  `date` date DEFAULT NULL,
  `totalPrice` float DEFAULT NULL,
  `userid` int(10) NOT NULL,
  `productid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `date`, `totalPrice`, `userid`, `productid`) VALUES
(1, '2020-11-17', 628.99, 1, 0),
(2, '2020-11-17', 628.99, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `picSrc` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `sellType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `details`, `picSrc`, `brand`, `type`, `sellType`) VALUES
(1, 'Biker-set', 628.99, 'Rider jacket\r\npant\r\nshoes\r\nboot\r\nt-shirt', 'images\\product\\men\\biker-set-1.jpg', 'X-Crude', 'men', 'NEW'),
(2, 'Jacket-Men', 285.99, 'Full salve\r\nleather\r\nbiker rider\r\nWater proof', 'images\\product\\men\\jacket-1.jpg', 'Yellow', 'men', 'HOT'),
(3, 'Google Pixel 4a', 2599.85, 'Google Pixel 4a\r\nAndroid 11.02\r\nYear : 2020', 'images\\product\\mobile\\google-pixel-4a.jpg', 'google', 'mobile', 'NEW'),
(4, 'Google Pixel 5', 2796.25, 'Google Pixel 4a\r\nAndroid 11.02\r\nYear : 2020', 'images\\product\\mobile\\google-pixel-5.jpg', 'Google', 'mobile', 'HOT'),
(5, 'Boy-full-set', 199.99, 'boys\r\npant\r\nshirt\r\nshoes', 'images\\product\\kids\\boy-full-set-1.jpg', 'Zara', 'kids', 'SELL'),
(6, 'Boy-full-set', 299.5, 'boys\r\npant\r\nshirt\r\nshoes', 'images\\product\\kids\\boy-full-set-2.jpg', 'YELLOW', 'kids', 'NEW'),
(7, 'Alienware area 51', 6400.85, 'Ram : 32 GB\r\nRom : 2TB\r\nGPU : 2080Ti\r\nCPU : i9 9900k', 'images\\product\\pc\\alienware-area-51.jpg', 'DELL', 'laptop', 'HOT'),
(8, 'Alienware m 15', 5680.5, 'Ram : 16 GB\r\nRom : 2TB\r\nGPU : 2080Ti\r\nCPU : i9 9900k', 'images\\product\\pc\\alienware-m15-r2.jpg', 'DELL', 'laptop', 'NEW'),
(9, 'Burka', 499.2, 'Color : Black\r\nType : long\r\nDate : 2020', 'images\\product\\women\\burka-1.jpg', 'Yellow', 'women', 'NEW'),
(10, 'Burka - set', 599.8, 'Color : Black\r\nType : long\r\nDate : 2020', 'images\\product\\women\\burka-2.jpg', 'Yellow', 'women', 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fName` varchar(255) DEFAULT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fName`, `lName`, `email`, `password`) VALUES
(1, 'Jarif', 'Arafat', 'arafat@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billingaddress`
--
ALTER TABLE `billingaddress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKbillingAdd73945` (`userid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKcart255578` (`productid`),
  ADD KEY `FKcart381905` (`userid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKcheckout477970` (`userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billingaddress`
--
ALTER TABLE `billingaddress`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billingaddress`
--
ALTER TABLE `billingaddress`
  ADD CONSTRAINT `FKbillingAdd73945` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FKcart255578` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FKcart381905` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `FKcheckout477970` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
