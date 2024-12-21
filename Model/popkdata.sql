-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 03:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `popkdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartitems`
--

INSERT INTO `cartitems` (`cartId`, `productId`, `Id`) VALUES
(13, 21, 11),
(14, 17, 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productname` varchar(191) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(191) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productname`, `quantity`, `image`, `price`) VALUES
(29, 'photo card', 0, 'IMG_3893.JPG', 600),
(30, 'photo card', 78, 'IMG_3894.JPG', 320),
(31, 'photo card', 0, 'IMG_3895.JPG', 500),
(32, 'photo card', 65, 'IMG_3896.JPG', 850),
(33, 'photo card', 185, 'IMG_3897.JPG', 950),
(34, 'photo card', 10, 'IMG_3898.JPG', 650),
(35, 'photo card', 499, 'IMG_3900.JPG', 452),
(36, 'photo card', 653, 'IMG_3902.JPG', 750),
(37, 'photo card', 985, 'IMG_3903.JPG', 1200),
(38, 'photo card', 657, 'IMG_3905.JPG', 690);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userpm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `email`, `password`, `userpm`) VALUES
(1, 'jerome', 'jerbz1122@gmail.com', '123456789', 0),
(2, 'karen', 'kjligaya@gmail.com', '987654321', 1),
(3, 'sdfsdgbsdf', '06609905@dwc-legazpi.edu', 'dsgsdgfa', 1),
(4, 'sdfsdfisjnmfk', 'pokemaine@onlyfans.com', 'ytsdgbfusndufjinmf', 1),
(5, 'sdfsdfisjnmfk', 'pokemaine@onlyfans.com', 'ytsdgbfusndufjinmf', 1),
(6, 'Rea', 'rea@gmail.com', 'd12345678', 1),
(7, 'Rea', 'rea@gmail.com', 'd12345678', 1),
(8, 'ygtsvdbfjds', '09957749599@gmail.com', 'dsbfusdnfmasfioasnmjf', 1),
(9, 'tempox066', 'uysdfbuhsdnf@gmail.com', 'sdhufbdsuhbfhu', 0),
(10, 'emersonpogi', 'emerson@gmail.com', '12345678', 0),
(11, 'kj', 'jerbz1122@gmail.com', '12345678', 0),
(12, '06609905@dwc-legazpi.edu', 'dsjfkls@gmail.com', '12345678', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD CONSTRAINT `cartitems_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
