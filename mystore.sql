-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Versace Couture'),
(2, 'Dsquared2'),
(3, 'Hugo Boss'),
(4, 'Cetaphil'),
(5, 'Richard Mille'),
(6, 'Oakley'),
(7, 'Bburago'),
(8, 'Nike'),
(9, 'Marshall');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(3, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'chocolates'),
(2, 'hygiene'),
(3, 'Milk prodcuts'),
(4, 'Caps'),
(5, 'Soaps'),
(6, 'Watches'),
(7, 'toy cars'),
(8, 'Shoes'),
(9, 'Belts'),
(10, 'Speakers');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `price`, `date`, `status`) VALUES
(1, 'Cetaphil soaps', 'Cetaphil soaps', 'Cetaphil soaps', 5, 4, ' soap.jpg', ' ', ' ', 500, '2023-09-12 12:09:47', 'true'),
(2, 'Bburago F1 model Car', 'Bburago F1 model Car 1:24 scale', 'F1 model Car   Car toy', 7, 7, ' car2.jpg', ' car.jpg', ' car.jpg', 15000, '2023-09-12 12:09:58', 'true'),
(3, 'Dsquared2 Cap', 'Dsquared2 Cap Made in Canada', 'Dsquared2 Cap Cap', 4, 2, ' cap.jpg', ' ', ' ', 250000, '2023-09-12 12:10:09', 'true'),
(4, 'Cetaphil Sanitizer', 'Organic Sanitizer', 'Organic Sanitizer', 2, 4, ' sanitizer.jpg', ' ', ' ', 2500, '2023-09-12 12:10:18', 'true'),
(5, 'Richard Mille Watch', 'Richard Mille Watch', 'Richard Mille Watch Watch', 6, 5, ' watch.jpg', ' ', ' ', 30000000, '2023-09-14 09:51:32', 'true'),
(6, 'Versace Couture Belt', 'Versace Couture Belt by Versace', 'Versace Couture Belt  Belt', 9, 1, ' belt.jpeg', ' ', ' ', 25000, '2023-09-12 12:10:44', 'true'),
(7, 'Marshall Speaker', 'Marshall Speaker', 'Marshall Speaker', 10, 9, ' speaker.jpg', ' ', ' ', 25000, '2023-09-12 12:09:35', 'true'),
(8, 'Cetaphil Face Cleanser', 'Cetaphil Face Cleanser ', 'Cetaphil Face Cleanser', 2, 4, ' skin clenser.jpg', ' ', ' ', 1500, '2023-09-14 10:03:46', 'true'),
(9, 'Nike Air Shoes', 'Nike Shoes', 'Nike Shoes  Nike Air', 8, 8, ' shoe1.jpg', ' nike shoe.jpeg', ' ', 30000, '2023-09-13 15:50:03', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'sandeep komal', ' sandeepkomalp@gmail.com', '$2y$10$/L2uh63M6hdt4bU6lRVvW.kAO4JS3qDpVSfBi0qm14yGYTqyFj5N.', ' MostlyCloudyDay[1].png', ' ::1', ' ap', '  8978204743');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
