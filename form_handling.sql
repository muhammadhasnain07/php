-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2026 at 07:21 AM
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
-- Database: `form_handling`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) DEFAULT NULL,
  `cat_images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`cat_id`, `cat_name`, `cat_images`) VALUES
(8, 'watches', 'banner-07.jpg'),
(9, 'Bag', 'banner-08.jpg'),
(10, 'Women', 'product-07.jpg'),
(11, 'Men', 'product-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_description` varchar(50) DEFAULT NULL,
  `p_price` int(11) DEFAULT NULL,
  `p_qnty` int(11) DEFAULT NULL,
  `p_status` varchar(50) DEFAULT 'stock',
  `p_image` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`p_id`, `p_name`, `p_description`, `p_price`, `p_qnty`, `p_status`, `p_image`, `category_id`) VALUES
(3, 'watch', 'best quality product', 5000, 3, 'stock', 'product-06.jpg', 8),
(4, 't-shirt', 'best quality product', 2000, 3, 'stock', 'product-11.jpg', 11),
(5, 'bag', 'best quality product', 5000, 10, 'stock', 'banner-08.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Email`, `Password`, `Address`, `role`) VALUES
(1, 'ali khan', 'ali@gmail.com', 'ali45454', 'lahore', 'user'),
(2, 'zain', 'zain@gmail.com', 'zain123', 'lahore', 'user'),
(3, 'abeer', 'abeer123@gmail.com', 'abee9760', 'lahore', 'user'),
(4, 'riya', 'riya@gmail.com', 'riya123', 'karachi', 'user'),
(5, 'faiez', 'faiez@gmail.com', 'faiez123', 'lahore', 'admin'),
(8, 'ali', 'ali@gmail.com', 'ali343', 'karachi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `add_product_ibfk_1` (`category_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_product`
--
ALTER TABLE `add_product`
  ADD CONSTRAINT `add_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `add_category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
