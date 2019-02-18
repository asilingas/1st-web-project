-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2019 at 10:46 AM
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
(18, 'tetis@gmail.com', '52b526411070a0a92075ea7c2575f759f480f2f4788d56300091696fc7eabb71a74a5fbca04b1934e215ca00bb6b977f6069a34588caa81f622616caacbc83bf', 'Testukas', 'Testis', 'Testo 5-2', '35122', 'Kaunas', '2019-02-16 20:14:36', 0),
(19, 'mama@gmail.com', '00332a8bfbd08305d87216497a4eb79f966d5a25baa70b1a87385ac8623af8f4ff9f4d453599713c01193fd3d4b8dd6e7f7bd448c3ed872f27122ede131c0638', 'Mama', 'Mama', 'Mamops', '241412', 'Ignalina', '2019-02-16 20:31:16', 0),
(20, 'sese@gmail.com', '9ae86a653727e8ae8dea9c09f38b991f724c9b57ba7b2a929fde4529e210f5e6c8a7b5835f776d2ede0196599b809aed2ef6966b92880ab5e109a95e32fcb1d7', 'Ses', 'Ses', 'SESES', '342565', 'Ukm', '2019-02-16 20:32:17', 0),
(22, 'super@gmail.com', '26857f0074d5e2393884b7b1aa9efc5e919d1111cef6e3b06c13dba5119cf882c317f8f4987a30e533eb786f138a876df4b3258a195bee819692600b7b6236bf', 'Super', 'Manas', 'Super', '21452', 'Kaunas', '2019-02-16 21:25:57', 0),
(29, 'testas@gmail.com', 'b551ea951724d66921f7e4991ee3b86e883921abf6a14552c73a4032cc87fa4900b2faa27d1cca5139d71a12937797cd29b589561fcc7fbb60dca460141afa65', '', '', '', '', '', '2019-02-17 20:32:49', 0),
(30, 'useris@u.lt', 'b14361404c078ffd549c03db443c3fede2f3e534d73f78f77301ed97d4a436a9fd9db05ee8b325c0ad36438b43fec8510c204fc1c1edb21d0941c00e9e2c1ce2', 'Useris', 'Userinis', 'Userio g. 5', '', '', '2019-02-17 20:34:06', 0),
(31, 'jonas@jonu.lt', '02f37242760ba3bf1d48853a6a75b24e3c800c18fe5e087a0676bb91b7da071e466f7e1a845dfeb0425eb8570ab42ea5e10c815be2ecfd0f40dbbac2d3b0df38', 'Jonas', 'Jonu', 'Jono g. 5 ', '32422', 'Kaunas', '2019-02-17 20:41:04', 0),
(32, 'petras@jonu.lt', '8459d7498f2de6e8194121add0f3a0580372c3cd48e04e56c93889c978e05e675261d64bf85ab555b9bc2a2dbc53920746f219350d47550a29718173bc6aac76', 'Petras', 'Petrauskas', 'Jono g. 5 ', 'afs', 'Kaunas', '2019-02-17 20:42:03', 0),
(33, 'jonas2@jonu.lt', '5aadb45520dcd8726b2822a7a78bb53d794f557199d5d4abdedd2c55a4bd6ca73607605c558de3db80c8e86c3196484566163ed1327e82e8b6757d1932113cb8', '', '', '', 'asdc', '', '2019-02-17 20:43:00', 0),
(34, 'tomas@gla.lt', '6e1b9b3fe840680e37051f7ad5e959d6f39ad0f8885d855166f55c659469d3c8b78118c44a2a49c72ddb481cd6d8731034e11cc030070ba843a90b3495cb8d3e', '', '', '', '2424', '', '2019-02-17 20:45:09', 0),
(35, 'a@g.lt', '1f40fc92da241694750979ee6cf582f2d5d7d28e18335de05abc54d0560e0f5302860c652bf08d560252aa5e74210546f369fbbbce8c12cfc7957b2652fe9a75', 'a', 'a', 'a', '23523', 'Kaunas', '2019-02-17 20:50:22', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
