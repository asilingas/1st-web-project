-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2019 at 05:07 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas`
--
CREATE DATABASE IF NOT EXISTS `projektas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `projektas`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` smallint(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` mediumtext COLLATE utf8_unicode_ci,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` smallint(10) NOT NULL,
  `img_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` smallint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` smallint(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` int(10) DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_id` smallint(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `product_quantity` smallint(10) DEFAULT NULL,
  `total_price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `lname`, `email`, `address`, `postcode`, `city`, `shipping_id`, `date`, `product_quantity`, `total_price`) VALUES
(1, 'Artūras Šilingas', 'Šilingas', 'mayoctt@gmail.com', 'S. Žukausko g. 5-22', 49405, 'Artūras Šilingas', 3, '2019-02-15 16:53:12', 1, '22.99'),
(2, 'Artūras ', 'Tagas', 'dddd@gmail.com', 'Ro g. 5-22', 49405, 'Artūras ', 3, '2019-02-15 17:03:50', 1, '22.99'),
(3, 'Artūras ', 'Tagas', 'dddd@gmail.com', 'Ro g. 5-22', 49405, 'Artūras ', 3, '2019-02-15 17:04:23', 1, '22.99'),
(4, 'Artūras ', 'Tagas', 'dddd@gmail.com', 'Ro g. 5-22', 49405, 'Artūras ', 3, '2019-02-15 17:12:35', 1, '22.99');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` smallint(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` decimal(5,2) DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` smallint(10) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `size`, `type`, `quantity`, `date_creation`) VALUES
(1, 'Paveikslas žemėlapis: Viena', 'Paveikslas žemėlapis: Viena 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '12.50', '30x40', 'Europos', 0, '2019-02-13 21:13:41'),
(2, 'Paveikslas žemėlapis: Roma', 'Paveikslas žemėlapis: Roma 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '12.50', '30x40', 'Europos', 0, '2019-02-14 13:35:20'),
(3, 'Paveikslas žemėlapis: Vilnius', 'Paveikslas žemėlapis: Vilnius 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '13.50', '30x40', 'Lietuvos', 0, '2019-02-14 13:35:20'),
(5, 'Paveikslas žemėlapis: Paryžius', 'Paveikslas žemėlapis: Paryžius 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '22.50', '30x40', 'Europos', 5, '2019-02-14 13:35:20'),
(6, 'Paveikslas žemėlapis: Berlynas', 'Paveikslas žemėlapis: Berlynas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '32.50', '30x40', 'Europos', 0, '2019-02-14 13:35:20'),
(7, 'Paveikslas žemėlapis: Amsterdamas', 'Paveikslas žemėlapis: Amsterdamas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '9.50', '30x40', 'Europos', 1, '2019-02-14 13:35:20'),
(8, 'Paveikslas žemėlapis: Briuselis', 'Paveikslas žemėlapis: Briuselis 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '20.99', '30x40', 'Europos', 0, '2019-02-14 13:35:20'),
(9, 'Paveikslas žemėlapis: Londonas', 'Paveikslas žemėlapis: Londonas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '17.00', '30x40', 'Europos', 0, '2019-02-14 13:35:21'),
(10, 'Paveikslas žemėlapis: Bostonas', 'Paveikslas žemėlapis: Bostonas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '11.50', '30x40', 'Pasaulio', 0, '2019-02-14 13:35:21'),
(12, 'Tokyo', 'Tokyo zemelapis labai geras', '25.00', '30x40', 'Pasaulio', 2, '2019-02-15 14:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` smallint(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `user_id` smallint(10) DEFAULT NULL,
  `product_id` smallint(10) DEFAULT NULL,
  `order_id` smallint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` smallint(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `duration` tinyint(3) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `description`, `duration`, `price`) VALUES
(1, 'Pasiimti vietoje', 'Prekes atsiimti iš sandėlio Berželio gatvėje, Kaune', 0, '0.00'),
(2, 'Lietuvos paštas', 'Standartinis siuntimas visoje Lietuvoje', 3, '2.99'),
(3, 'DPD', 'Express siuntimas per kurjerį', 2, '5.99');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `order_quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `lname`, `address`, `postcode`, `city`, `date`, `order_quantity`) VALUES
(1, 'mano@hote.com', 'sa', 'Registruotis', 'Romson', 'Mazoji g 233', '55233', 'Kaunas', '2019-02-14 15:12:15', 0),
(2, 'tromson@hote.com', 'sa', 'Registruotis', 'Romson', 'Didžioji g. 1-12', '11233', 'Vilnius', '2019-02-14 15:13:50', 0),
(3, 'ripert@gmail.com', 'sa', 'Registruotis', 'Jomson', 'Kauno g. 5', '44233', 'Utena', '2019-02-14 15:14:51', 0),
(4, 'rita@hotmail.com', 'ra', 'Rita', 'Opa', 'Ritos g. 1', '33225', 'Jurbarkas', '2019-02-14 15:16:06', 0),
(5, 'topas@delfi.t', 'haha', 'Topolis', 'Petrauskas', 'Tomo g. 9', '99112', 'Kaunas', '2019-02-14 15:23:12', 0),
(6, 'topas@delfi.t', 'haha', 'Topolis', 'Petrauskas', 'Tomo g. 9', '99112', 'Kaunas', '2019-02-14 15:23:59', 0),
(7, 'topas@delfi.lt', 'haha', 'Ropolis', 'Retrauskas', 'Romo g. 9', '99112', 'Kaunas', '2019-02-14 15:24:17', 0),
(8, 'mayoctt@gmail.com', 'haha', 'Artūras Šilingas', 'Šilingas', 'S. Žukausko g. 5-22', '49405', 'Kaunas', '2019-02-14 15:28:20', 0),
(9, 'dasd@gmail.com', 'wa', 'Gedas', 'Rytas', 'Darausko g. 5-22', '22405', 'Kaunas', '2019-02-14 15:33:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
