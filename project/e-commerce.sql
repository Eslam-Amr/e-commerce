-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2023 at 04:41 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `quantity`, `total`, `product_id`) VALUES
(224, 9, 1, 22, 22),
(225, 9, 1, 18, 18),
(226, 9, 1, 25, 25),
(227, 9, 1, 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `stock` int NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `stock`, `description`, `image`, `price`, `name`) VALUES
(18, 50, 'new iphone 11', '1694011177.jpeg', 10000000, 'iphone 11'),
(21, 10, 'new iphone 4', '1694103416.jpeg', 4000, 'iphone 4'),
(22, 11, 'new iphone 5', '1694103439.jpeg', 5000, 'iphone 5'),
(23, 15, 'new iphone 5c', '1694103481.jpeg', 5500, 'iphone 5c'),
(24, 20, 'new iphone 6', '1694103507.png', 6000, 'iphone 6'),
(25, 30, 'new iphone 7', '1694103538.jpeg', 7000, 'iphone 7'),
(26, 30, 'new iphone 8', '1694103558.jpeg', 8000, 'iphone 8'),
(27, 30, 'new iphone x', '1694103577.jpeg', 9000, 'iphone x'),
(28, 30, 'new iphone 11', '1694103600.jpeg', 10000, 'iphone 11'),
(29, 50, 'new iphone 12', '1694103627.jpeg', 120000, 'iphone 12'),
(30, 30, 'new iphone 13', '1694103651.png', 15100, 'iphone 13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `role`, `name`, `image`) VALUES
(1, '123456789', 'eslamamr537@gmail.com', 'admin', 'eslam amr', 'png'),
(2, '123456789', 'eslamamr537@gmail.com', 'admin', 'eslam amr', '1.jpg'),
(3, '123456789', 'm@m.com', 'user', 'bhn', '3.jpg'),
(4, '123456789', 'eslamamhr537@gmail.com', 'user', 'bhn', '3.jpg'),
(5, 'ngh k, ,k', 'eslamamlhjr537@gmail.com', 'user', 'bhn', 'png'),
(6, '123456789', 'eslamamhhr537@gmail.com', 'user', 'bhn', 'png'),
(7, 'erfewrgferg', 'test@test.com', 'user', 'test', 'webp'),
(8, 'jhfghjgvjh', 'a@a.a', 'user', 'nbn, khv', '../registerImage/1694007549.jpeg'),
(9, '123456789', 'mario@gmail.com', 'user', 'mario', '1694011928.jpeg'),
(10, '123456789', 'm@sdm.com', 'user', 'bhnloo', '1694104825.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
