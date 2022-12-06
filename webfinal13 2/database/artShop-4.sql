-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 05:32 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artshop-4`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iamount` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `tprice` int(11) NOT NULL,
  `picpath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `locationID` int(15) NOT NULL,
  `country` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `street` varchar(25) NOT NULL,
  `House_no` int(10) NOT NULL,
  `neborhood` varchar(25) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locationID`, `country`, `city`, `street`, `House_no`, `neborhood`, `userID`) VALUES
(100, 'KSA', 'Dammam', '1010', 20, 'Hammra', 1001),
(101, 'KSA', 'Dharan', '1100', 10, 'aljeser', 1010),
(200, 'KSA', 'Khobar', '1020', 14, 'Northern Khobar', 1002),
(300, 'KSA', 'Jeddah', '1030', 17, 'alnaseem', 1003),
(400, 'UAE', 'Dubai', '1040', 44, 'Marina', 1004),
(500, 'KSA', 'Riyadh', '1050', 77, 'Hammra', 1005),
(600, 'Kuwait', 'Kuwait', '1060', 12, 'aldera', 1006),
(700, 'Bahrain', 'Manama', '1070', 50, 'alkabeer', 1007),
(800, 'UAE', 'Abu Dhabi', '1080', 22, 'aldera', 1008),
(900, 'KSA', 'Dammam', '1090', 11, 'Abdullah Fouad', 1009),
(901, '02', 'Dammam', 'KSA', 548, 'Dammam', 1007),
(902, 'KSA', 'Okara', '54', 57, 'Dammam', 1011),
(903, 'KSA', 'Okara', '54', 54, 'Dammam', 1011),
(904, 'KSA', 'Okara', '54', 54, 'Dammam', 1011),
(905, 'KSA', 'Okara', '87', 21, 'Dammam', 1011),
(906, 'KSA', 'Okara', '65', 87, 'Dammam', 1011),
(907, 'KSA', 'Okara', '54', 87, 'Dammam', 1011);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetailID` int(15) NOT NULL,
  `orderDate` date NOT NULL,
  `orderProductName` varchar(25) NOT NULL,
  `orderProductQuantity` varchar(25) NOT NULL,
  `orderProductPrice` decimal(25,0) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderDetailID`, `orderDate`, `orderProductName`, `orderProductQuantity`, `orderProductPrice`, `orderID`, `productID`) VALUES
(2001, '2021-02-01', 'Acrylic', '05', '100', 10001, 1),
(2002, '2021-03-05', 'Oil', '03', '60', 10002, 2),
(2003, '2021-02-11', 'WaterColor', '03', '60', 10003, 3),
(2004, '2021-01-29', 'Guash', '09', '90', 10004, 4),
(2005, '2021-01-12', 'SketchPad', '15', '300', 10005, 5),
(2006, '2021-03-03', 'WatetcolorPad', '11', '220', 10006, 6),
(2007, '2021-01-10', 'StretchedCanvas', '2', '30', 10007, 7),
(2008, '2021-02-13', 'BoxCanvas', '07', '105', 10008, 8),
(2009, '2021-02-06', 'Pencil', '10', '300', 10009, 9),
(2010, '2021-02-09', 'ColoringPencils', '12', '360', 10010, 10),
(2011, '2021-03-27', 'Guash', '1', '150', 10016, 4),
(2012, '2021-03-27', 'Oil', '1', '105', 10016, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL,
  `orderDate` date NOT NULL,
  `orderQuantity` int(10) NOT NULL,
  `orderTotalPrice` decimal(10,0) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `orderQuantity`, `orderTotalPrice`, `userID`, `productID`) VALUES
(10001, '2021-02-01', 5, '100', 1001, 1),
(10002, '2021-03-05', 3, '60', 1002, 2),
(10003, '2021-02-11', 3, '60', 1003, 3),
(10004, '2021-01-29', 9, '90', 1004, 4),
(10005, '2021-01-12', 15, '300', 1005, 5),
(10006, '2021-03-03', 11, '220', 1006, 6),
(10007, '2021-01-10', 2, '30', 1007, 7),
(10008, '2021-02-13', 7, '105', 1008, 8),
(10009, '2021-02-06', 10, '300', 1009, 9),
(10010, '2021-02-09', 12, '360', 1010, 10),
(10011, '2021-03-27', 2, '155', 1011, 2),
(10012, '2021-03-27', 2, '230', 1011, 1),
(10014, '2021-03-27', 2, '255', 1011, 2),
(10015, '2021-03-27', 2, '230', 1011, 1),
(10016, '2021-03-27', 2, '255', 1011, 2);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `productCatpgoryID` int(15) NOT NULL,
  `productCatpgoryname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`productCatpgoryID`, `productCatpgoryname`) VALUES
(20, 'PaintBrushes'),
(40, 'Drawing'),
(50, 'ArtPaint'),
(80, 'Sketchbooks،Canvas');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(15) NOT NULL,
  `productType` varchar(25) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `productPrice` decimal(15,0) NOT NULL,
  `productStock` int(15) NOT NULL,
  `productPicture` varchar(75) NOT NULL,
  `productDescription` varchar(25) NOT NULL,
  `productCatpgoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productType`, `productName`, `productPrice`, `productStock`, `productPicture`, `productDescription`, `productCatpgoryID`) VALUES
(1, 'ArtPaint', 'Acrylic', '80', 20, 'ProductImage/Acrylic.png', 'Acrylic paint', 50),
(2, 'ArtPaint', 'Oil', '105', 20, 'ProductImage/Oil.png', 'Oil paint', 50),
(3, 'ArtPaint', 'WaterColor', '50', 20, 'ProductImage/WaterColor.png', 'Watercolor paint ', 50),
(4, 'ArtPaint', 'Guash', '150', 0, 'ProductImage/Guash.png', 'Guash paint', 50),
(5, 'Sketchbooks,Canvas', 'SketchPad', '30', 20, 'ProductImage/SketchPad.png', 'Sketchpad sketchbook	', 80),
(6, 'Sketchbooks,Canvas', 'WatetcolorPad', '35', 20, 'ProductImage/WatetcolorPad.png		', 'WatetcolorPad  sketchbook', 80),
(7, 'Sketchbooks,Canvas', 'StretchedCanvas', '50', 15, 'ProductImage/StretchedCanvas.png', 'Stretched Canvas', 80),
(8, 'Sketchbooks,Canvas ', 'BoxCanvas', '50', 15, 'ProductImage/BoxCanvas.png', 'Box Canvas', 80),
(9, 'Drawing', 'Pencil', '10', 30, 'ProductImage/Pencil.png', 'Pencils', 40),
(10, 'Drawing', 'ColoringPencils', '90', 30, 'ProductImage/ColoringPencils.png', 'Coloring Pencils set', 40),
(11, 'Drawing', 'Pastels', '115', 19, 'ProductImage/Pastels.png', 'Pastels drawing pencils', 40),
(12, 'Flat', 'PaintBrushes', '10', 30, 'ProductImage/Flat.png', 'Flat brush', 20),
(13, 'PaintBrushes', 'Round', '10', 30, 'ProductImage/Round.png', 'Round brush', 20),
(14, 'PaintBrushes', 'Linear', '10', 30, 'ProductImage/Linear.png', 'Linear brush', 20),
(15, 'PaintBrushes', 'BruahSet', '60', 20, 'ProductImage/BruahSet.png', 'Bruah Set', 20),
(16, 'Drawing', 'Markers', '30', 30, 'ProductImage/DMarkers.png', 'Drawing Markers', 40),
(17, 'Sketchbooks,Canvas', 'SquareCanvas', '35', 30, 'ProductImage/CSq.png', 'Square canvas', 80),
(18, 'Sketchbooks,Canvas', 'RoundCanvas', '45', 30, 'ProductImage/CRo.png	', 'Round canvas', 80);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `TypeID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `password`, `Email`, `Phone_no`, `TypeID`) VALUES
(1001, 'sara', 'Omar', 'Saraomar11', 'Sara.omar@gmail.com', 505111111, 1),
(1002, 'lama', 'sami', 'Lamasami22', 'Lama.sami@gmail.com', 505222222, 2),
(1003, 'hana', 'ahmad', 'Hanaahmad33', 'Hana.ahmad@gmail.com', 505333333, 2),
(1004, 'leen', 'ali', 'Leenali44', 'Leen.ali@gmail.com', 505444444, 2),
(1005, 'tala', 'salem', 'talasalem55', 'Tala.salem@hotmail.com', 505555555, 2),
(1006, 'noura', 'majed', 'Nouramajed66', 'Nouramajed@hotmail.com', 505666666, 2),
(1007, 'jood', 'waleed', 'Joodwaleed77', 'Jood.waleed77@ gmail.com', 505777777, 2),
(1008, 'dana', 'adam', 'danaadam88', 'Dana.adam88@hotmail.com', 505888888, 1),
(1009, 'deema', 'adel', 'deemaadel99', 'Deema.adel@hotmail.com', 505999999, 2),
(1010, 'rana', 'hamza', 'ranahamza10', 'Rana.hamza@gmail.com', 505101010, 1),
(1011, 'Rana', 'Omar', '12345', 'rana@gmail.com', 56974564, 2),
(1012, 'Nora', 'Majeed', '54321', 'nora@gmail.com', 5458654, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `TypeID` int(2) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`TypeID`, `Type`) VALUES
(1, 'admin'),
(2, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locationID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetailID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `orderDate` (`orderDate`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `orderDate` (`orderDate`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`productCatpgoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `productCatpgoryID` (`productCatpgoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `TypeID` (`TypeID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`TypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locationID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetailID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2013;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10017;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `productCatpgoryID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `TypeID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderDetails_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orderDetails_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `orders` (`productID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orderDetails_ibfk_3` FOREIGN KEY (`orderDate`) REFERENCES `orders` (`orderDate`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productCatpgoryID`) REFERENCES `productcategory` (`productCatpgoryID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
