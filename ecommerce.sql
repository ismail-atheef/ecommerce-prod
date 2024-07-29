-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 07:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `icon`) VALUES
(22, 'Baby Care', 'Baby Care.png'),
(23, 'Beauty and Hygiene', 'Beauty and Hygiene.png'),
(24, 'Cereals', 'Cereals.png'),
(25, 'Hair Care', 'Hair Care.png');

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

CREATE TABLE `command` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statut` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `command`
--

INSERT INTO `command` (`id`, `id_product`, `quantity`, `dat`, `statut`, `id_user`) VALUES
(69, 14, 1, '2017-02-07 19:14:55', 'paid', 5),
(129, 12, 3, '2024-04-18 08:05:19', 'paid', 5),
(130, 11, 5, '2024-04-18 08:05:48', 'paid', 5),
(131, 8, 1, '2024-04-25 04:05:17', 'paid', 5),
(134, 7, 5, '2024-04-25 04:06:28', 'paid', 5),
(175, 9, 2, '2024-05-02 20:47:33', 'paid', 30),
(179, 18, 2, '2024-05-02 20:47:33', 'paid', 30),
(180, 8, 3, '2024-05-03 16:16:47', 'paid', 30),
(181, 3, 3, '2024-05-03 13:25:44', 'paid', 30),
(182, 1, 1, '2024-05-02 21:15:55', 'paid', 30),
(183, 3, 3, '2024-05-03 13:25:44', 'paid', 30),
(184, 7, 3, '2024-05-03 15:35:42', 'paid', 30),
(185, 2, 2, '2024-05-03 16:15:57', 'paid', 30),
(186, 2, 2, '2024-05-03 16:15:57', 'paid', 30),
(187, 2, 2, '2024-05-03 16:15:57', 'paid', 30),
(188, 6, 1, '2024-05-02 21:22:16', 'paid', 30),
(189, 2, 2, '2024-05-03 16:15:57', 'paid', 30),
(190, 7, 3, '2024-05-03 15:35:42', 'paid', 30),
(191, 6, 1, '2024-05-02 21:22:16', 'paid', 30),
(210, 7, 3, '2024-05-03 15:37:18', 'paid', 30),
(213, 2, 2, '2024-05-03 16:17:44', 'paid', 30),
(214, 8, 3, '2024-05-03 16:17:44', 'paid', 30),
(216, 2, 3, '2024-05-04 04:29:42', 'paid', 30),
(217, 22, 2, '2024-05-04 04:29:42', 'paid', 30),
(218, 23, 1, '2024-05-04 04:29:42', 'paid', 30),
(219, 25, 1, '2024-05-04 13:46:41', 'paid', 30),
(220, 40, 1, '2024-05-04 13:46:41', 'paid', 30),
(221, 39, 1, '2024-05-04 13:46:41', 'paid', 30),
(222, 41, 3, '2024-05-05 06:13:16', 'paid', 30),
(223, 42, 1, '2024-05-04 13:46:41', 'paid', 30),
(224, 59, 1, '2024-05-04 13:46:41', 'paid', 30),
(225, 62, 1, '2024-05-04 13:46:41', 'paid', 30),
(226, 56, 1, '2024-05-04 13:46:41', 'paid', 30),
(227, 44, 1, '2024-05-04 22:49:13', 'paid', 30),
(228, 39, 1, '2024-05-04 22:49:13', 'paid', 30),
(229, 41, 3, '2024-05-05 06:13:16', 'paid', 30),
(231, 56, 1, '2024-05-05 06:01:14', 'paid', 30),
(232, 41, 3, '2024-05-05 06:49:08', 'paid', 30),
(233, 56, 1, '2024-05-05 06:49:08', 'paid', 30),
(234, 43, 1, '2024-05-05 06:49:08', 'paid', 30),
(235, 44, 1, '2024-05-05 06:49:08', 'paid', 30),
(236, 46, 1, '2024-05-05 06:49:08', 'paid', 30),
(238, 41, 2, '2024-05-05 11:55:48', 'ordered', 30),
(239, 56, 1, '2024-05-05 11:55:38', 'ordered', 30);

-- --------------------------------------------------------

--
-- Table structure for table `details_command`
--

CREATE TABLE `details_command` (
  `id` int(11) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_command` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `country` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `statut` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `details_command`
--

INSERT INTO `details_command` (`id`, `product`, `quantity`, `price`, `id_command`, `id_user`, `user`, `address`, `country`, `city`, `statut`) VALUES
(62, 'Oil Free Acne Wash ', 2, 46, 217, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(63, 'Deep Clean facial Cleanser', 1, 25, 218, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(64, 'Oil Free Acne Wash 175ml', 1, 23, 221, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(65, 'Deep Clean Facial Cleanser 200ml', 1, 25, 222, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(66, 'Deep Clean Foaming Cleanser 200ml', 1, 18, 223, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(67, 'Ultra Doux Hair Oil 100ml', 1, 9, 224, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(68, 'Fall Resist 3X Anti Dandruff Shampoo 175ml', 1, 19, 225, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(69, 'Special K 435g', 1, 25, 226, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(70, 'Baby care collection Blue', 1, 25, 227, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(71, 'Oil Free Acne Wash 175ml', 1, 23, 228, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(72, 'Deep Clean Facial Cleanser 200ml', 2, 50, 229, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(73, 'Special K 435g', 1, 25, 231, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(74, 'Deep Clean Facial Cleanser 200ml', 3, 75, 232, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(75, 'Special K 435g', 1, 25, 233, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(76, 'Oil Free SPF Facial Moisturiser 115ml', 1, 15, 234, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(77, 'Baby care collection Blue', 1, 25, 235, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready'),
(78, 'Baby Care Collection Green', 1, 25, 236, 30, 'ahmed adam manik', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', '', 'fulidhoo', 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `id_category` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  `photo4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `name`, `price`, `id_category`, `description`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(39, 'Oil Free Acne Wash 175ml', 23.00, 23, 'Neutrogena', '1-Oil Free Acne Wash 175ml.png', '', '', ''),
(41, 'Deep Clean Facial Cleanser 200ml', 25.00, 23, 'Neutrogena', '2- Deep Clean Facial Cleanser.png', '', '', ''),
(42, 'Deep Clean Foaming Cleanser 200ml', 18.00, 23, 'Neutrogena', '3- Deep Clean Foaming Cleanser 200ml.png', '', '', ''),
(43, 'Oil Free SPF Facial Moisturiser 115ml', 15.00, 23, 'Neutrogena', '4- Oil Free SPF Facial Moisturiser 115ml.png', '', '', ''),
(44, 'Baby care collection Blue', 25.00, 22, 'Johnsons and Johnsons', '9-Baby care collecyion Blue.png', '', '', ''),
(45, 'Baby care collection Purple', 25.00, 22, 'Johnsons and Johnsons', '10- Baby Care Collection Purple.png', '', '', ''),
(46, 'Baby Care Collection Green', 25.00, 22, 'Johnsons and Johnsons', '11- Baby Care Collection Green.png', '', '', ''),
(47, 'Daily Moisturizing Lotion 71 ml', 12.00, 22, 'Aveeno', '12- Daily Moisturing Lotion 71 ml.png', '', '', ''),
(48, 'Baby Dermexa Moisturizing Cream 206g', 22.00, 22, 'Aveeno', '13- Baby Dermexa Moisturising Cream 206g.png', '', '', ''),
(49, 'Baby Lotion Soap', 5.00, 22, 'Johnsons and Johnsons', '14- Baby Lotion Soap.png', '', '', ''),
(50, 'Baby Milk Soap', 5.00, 22, 'Johnsons and Johnsons', '15- Baby Milk Soap.png', '', '', ''),
(51, 'Baby Toothbrush', 2.00, 22, 'Johnsons and Johnsons', '16- Baby Toothbrush.png', '', '', ''),
(52, 'Kellogs Original Corn Flakes 100g', 15.00, 24, 'Kellogs', '17- Kellogs Original Corn Flakes 100g.png', '', '', ''),
(53, 'Chocos 700g', 25.00, 24, 'Kellogs', '18 Chocos 700g.png', '', '', ''),
(54, 'Chocos Duet 375g', 20.00, 24, 'Kellogs', '19- Chocos Duet 375g.png', '', '', ''),
(55, 'Chocos spiderman 180g', 15.00, 24, 'Kellogs', '20 - Chocos spiderman 180g.png', '', '', ''),
(56, 'Special K 435g', 25.00, 24, 'Kellogs', '21 Special K 435g.png', '', '', ''),
(57, 'Fruit Loop 180g', 15.00, 24, 'Kellogs', '22 Fruit Loop 180g.png', '', '', ''),
(58, 'Ultra blends shampoo 5 precious herb 75ml', 10.00, 25, 'Garnier', '23- Ultra blends shampoo 5 precious herb 75ml.png', '', '', ''),
(59, 'Ultra Doux Hair Oil 100ml', 9.00, 25, 'Garnier', '24- Ultra Doux Hair Oil 100ml.png', '', '', ''),
(60, 'Color protect conditioner 175ml', 14.00, 25, 'Loreal', '25- Colour protect conditioner 175ml.png', '', '', ''),
(61, 'Total Repair 5 Conditioner 65ml', 12.00, 25, 'Loreal', '26 - Total Repair 5 Conditioner 65ml.png', '', '', ''),
(62, 'Fall Resist 3X Anti Dandruff Shampoo 175ml', 19.00, 25, 'Loreal', '27- Fall Resist 3X Anti Dandruff Shampoo 175ml.png', '', '', ''),
(63, 'Oil Nourish Shampoo 366ml', 25.00, 25, 'Loreal', '28- Oil Nourish Shampoo 366ml.png', '', '', ''),
(66, 'Baby Skin Care Wipes 20pcs', 8.00, 22, 'Johnsons and Johnsons', '+2 Skin care Wipes.png', '', '', ''),
(67, 'Muesli Nuts Delight 500g', 15.00, 24, 'Kellogs', '+1 Muesli Nuts Delight 500g.png', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `country` varchar(1000) NOT NULL,
  `role` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `address`, `city`, `country`, `role`) VALUES
(5, 'admin@email.com', 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Piazza Raniero 44, Quarto Raoul, AV 08746', 'funadhoo', 'Maldives', 'admin'),
(12, 'kareem_a@kd.com', 'kareem', 'a', '202cb962ac59075b964b07152d234b70', 'hhh', 'hulhumale', 'Maldives', 'user'),
(13, 'a@a.a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 'Piazza Raniero 44, Quarto Raoul, AV 08746', 'Male', 'Maldives', 'user'),
(30, 'user', 'ahmed', 'adam manik', '202cb962ac59075b964b07152d234b70', 'Piazza Antonio 220, Piano 7, Maria del friuli, IM 10374', 'fulidhoo', 'Maldives', 'user'),
(32, 'test@email.com', 'test', 'user', '202cb962ac59075b964b07152d234b70', 'male', 'hulhule', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_command`
--
ALTER TABLE `details_command`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `command`
--
ALTER TABLE `command`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `details_command`
--
ALTER TABLE `details_command`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
