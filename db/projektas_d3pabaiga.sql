-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2019 at 03:08 PM
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
(1, 'Paveikslas žemėlapis: Viena', 'Paveikslas žemėlapis: Viena 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '12.50', '30x40', 'ofsetinis', 0, '2019-02-13 21:13:41'),
(2, 'Paveikslas žemėlapis: Roma', 'Paveikslas žemėlapis: Roma 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '12.50', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:20'),
(3, 'Paveikslas žemėlapis: Vilnius', 'Paveikslas žemėlapis: Vilnius 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '13.50', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:20'),
(4, 'Paveikslas žemėlapis: Kaunas', 'Paveikslas žemėlapis: Kaunas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '15.50', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:20'),
(5, 'Paveikslas žemėlapis: Paryžius', 'Paveikslas žemėlapis: Paryžius 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '22.50', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:20'),
(6, 'Paveikslas žemėlapis: Berlynas', 'Paveikslas žemėlapis: Berlynas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '32.50', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:20'),
(7, 'Paveikslas žemėlapis: Amsterdamas', 'Paveikslas žemėlapis: Amsterdamas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '9.50', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:20'),
(8, 'Paveikslas žemėlapis: Briuselis', 'Paveikslas žemėlapis: Briuselis 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '20.99', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:20'),
(9, 'Paveikslas žemėlapis: Londonas', 'Paveikslas žemėlapis: Londonas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '17.00', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:21'),
(10, 'Paveikslas žemėlapis: Bostonas', 'Paveikslas žemėlapis: Bostonas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', '11.50', '30x40', 'ofsetinis', 0, '2019-02-14 13:35:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
