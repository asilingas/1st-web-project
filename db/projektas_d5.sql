-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2019 at 08:12 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
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
(14, 'tomas@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Tomas', 'Tomsonas', 'Tomo g. 9', '22211', 'Kaunas', '2019-02-16 18:14:09', 0),
(15, 'topas@delfi.lt', '6f990a1cd5311155c390089235c47a2bc7f83d742e47c5b60706208748e0988dc80e0f929bc116f6a48bad746eb2d89b191ed37c5aa0d841803855fb7a3856f0', 'Topas', 'Topsonas', 'Topo g. 1 ', '11553', 'Kaunas', '2019-02-16 18:16:53', 0),
(16, 'rita@pop.com', '2ff61c6c56baff1d06c543f8a66aa69b92e3dcd42362b93514eaeaf81fd12dd78bf5dfafbcbcc07217b9c4fca7e8757299908c5b2567fa0b015e1acf5e5b3001', 'Rita', 'Rota', 'Polo g. 52', '88112', 'Kelme', '2019-02-16 18:18:54', 0),
(17, 'mayoctt@gmail.com', 'b1ca9c90bef9eb16e8ebeff67280d819cda081ccebcaaeef3f5162d593c8427658f127ccd88caa5c74e3c0b60de0a821587d08ff602fcb5a0f81081437d4e20b', 'Artūras Šilingas', 'Šilingas', 'S. Žukausko g. 5-22', '49405', 'Kaunas', '2019-02-16 18:46:51', 0),
(18, 'tetis@gmail.com', '52b526411070a0a92075ea7c2575f759f480f2f4788d56300091696fc7eabb71a74a5fbca04b1934e215ca00bb6b977f6069a34588caa81f622616caacbc83bf', 'Testukas', 'Testis', 'Testo 5-2', '35122', 'Kaunas', '2019-02-16 20:14:36', 0),
(19, 'mama@gmail.com', '00332a8bfbd08305d87216497a4eb79f966d5a25baa70b1a87385ac8623af8f4ff9f4d453599713c01193fd3d4b8dd6e7f7bd448c3ed872f27122ede131c0638', 'Mama', 'Mama', 'Mamops', '241412', 'Ignalina', '2019-02-16 20:31:16', 0),
(20, 'sese@gmail.com', '9ae86a653727e8ae8dea9c09f38b991f724c9b57ba7b2a929fde4529e210f5e6c8a7b5835f776d2ede0196599b809aed2ef6966b92880ab5e109a95e32fcb1d7', 'Ses', 'Ses', 'SESES', '342565', 'Ukm', '2019-02-16 20:32:17', 0),
(21, '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '', '', '', '', '', '2019-02-16 21:00:52', 0),
(22, 'super@gmail.com', '26857f0074d5e2393884b7b1aa9efc5e919d1111cef6e3b06c13dba5119cf882c317f8f4987a30e533eb786f138a876df4b3258a195bee819692600b7b6236bf', 'Super', 'Manas', 'Super', '21452', 'Kaunas', '2019-02-16 21:25:57', 0),
(23, 'mayoctt@gmail.com', '25ff47de4984a0a4911b047f4543264e3cb3ca7d5a6a41b13689f6d16b0ae7f70bb6d0d9e9a0b1e21f00ef11a2963056f4952d80f72fe1cda863b176aaac0c6b', 'Artūras Šilingas', 'Šilingas', 'S. Žukausko g. 5-22', '49405', 'Kaunas', '2019-02-16 21:31:51', 0),
(24, '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '', '', '', '', '', '2019-02-16 21:32:26', 0),
(25, 'mayoctt@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', 'Artūras Šilingas', 'Šilingas', 'S. Žukausko g. 5-22', '49405', 'Kaunas', '2019-02-16 21:33:20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
