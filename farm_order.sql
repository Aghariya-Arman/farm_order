-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 07:39 AM
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
-- Database: `farm_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `p_image` varchar(255) NOT NULL,
  `order_date` date DEFAULT NULL,
  `order_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `product_id`, `p_image`, `order_date`, `order_at`) VALUES
(1, ' p1', '', '2024-09-26', '2024-09-02 12:44:54'),
(2, ' p1', '', '2024-09-29', '2024-09-02 12:46:38'),
(3, ' p12', '', '2024-10-24', '2024-09-02 13:03:40'),
(4, ' p12', 'item5.png', '2024-10-06', '2024-09-02 14:55:01'),
(5, ' p2', 'item2.jpg', '2024-09-28', '2024-09-02 17:51:41'),
(6, ' p1', 'item1.jpg', '0000-00-00', '2024-09-03 10:33:25'),
(7, ' p1', 'item1.jpg', '2024-09-28', '2024-09-03 12:50:57'),
(8, ' p1', 'item1.jpg', '2024-09-05', '2024-09-03 12:51:40'),
(9, ' p1', 'item1.jpg', '2024-09-07', '2024-09-03 12:53:08'),
(10, ' p1', 'item1.jpg', '2024-09-06', '2024-09-03 12:53:51'),
(11, ' p1', 'item1.jpg', '2024-09-07', '2024-09-03 13:08:13'),
(12, ' p1', 'item1.jpg', '2024-09-05', '2024-09-03 13:09:01'),
(13, ' p3', 'item3.jpg', '2024-09-06', '2024-09-03 14:51:48'),
(14, ' p13', 'item6.png', '2024-09-06', '2024-09-03 15:52:58'),
(15, ' p13', 'item6.png', '2024-09-06', '2024-09-03 15:53:16'),
(16, ' p11', 'item4.png', '2024-09-05', '2024-09-03 17:19:50'),
(17, ' p11', 'item4.png', '2024-09-07', '2024-09-03 17:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_number` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`customer_id`, `customer_name`, `customer_number`, `customer_email`, `customer_gender`, `created_at`) VALUES
(1, 'arman', '2345678901', 'aghariyaarman@gmail.com', 'male', '2024-08-30 18:08:29'),
(2, 'aghariya', '1234567898', 'am@gmail.com', 'male', '2024-08-30 18:53:07'),
(3, 'mr Malik', '5678456784', 'sp.sahoo.in@gmail.com', 'male', '2024-08-31 10:39:59'),
(4, 'ammu007', '5698454986', 'admin@gmail.com', 'male', '2024-08-31 10:47:15'),
(5, 'aghariya', '5698454986', 'aghariyaking@gmail.com', 'male', '2024-08-31 10:48:09'),
(6, 'aghariya', '5698454986', 'aghariyaking@gmail.com', 'male', '2024-08-31 11:22:30'),
(7, 'ammu', '7056875607', 'aghariyaarman123@gmail.com', 'male', '2024-08-31 16:12:41'),
(8, 'ammu007', '2345678901', 'aghariyaking@gmail.com', 'male', '2024-09-02 10:26:30'),
(9, 'mr Malik', '5678456784', 'admin@gmail.com', 'male', '2024-09-02 10:54:44'),
(10, 'aghariya', '2345678989', 'admin@gmail.com', 'male', '2024-09-02 11:33:41'),
(11, 'mohammad', '2345675343', 'nedariya@gmail.com', 'male', '2024-09-02 13:02:41'),
(12, 'aghariya', '8789879676', 'aghariyaarman@gmail.com', 'male', '2024-09-02 17:50:59'),
(13, 'rehman', '6784605960', 'rehman@gmail.com', 'male', '2024-09-03 10:28:02'),
(14, 'ehsan', '9076789790', 'ali@gmail.com', 'male', '2024-09-03 14:50:46'),
(15, 'fathekahn', '3630744826', 'fate@gmail.com', 'male', '2024-09-03 14:55:28'),
(16, 'rnai', '2353654756', 'rani@gmail.com', 'female', '2024-09-03 14:56:39'),
(17, 'yik', '6868797055', 'sp.sahoo.in@gmail.com', 'female', '2024-09-03 15:00:47'),
(18, 'user', '0856483733', 'user@gmail.com', 'female', '2024-09-03 15:52:50'),
(19, 'aghariya', '6887890098', 'admin@gmail.com', 'male', '2024-09-03 17:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `address_id` int(11) NOT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `customer_florno` varchar(50) DEFAULT NULL,
  `customer_city` varchar(50) DEFAULT NULL,
  `customer_pincode` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`address_id`, `customer_address`, `customer_florno`, `customer_city`, `customer_pincode`) VALUES
(1, ' momin vas', ' A12345', '  palanpur', 454656),
(2, ' bavalchudi', ' PK 123A', '  siddhpur', 385210),
(3, ' kalupur', ' 145609a', '  Ahmedabad', 456765),
(4, ' sherpura(majadar)', ' PK 123A', '  siddhpur', 456765),
(5, ' tiptur', ' ch4577', '  kolkata', 976586),
(6, ' rajasthan', ' RJ457', '  udaipur', 908696),
(7, ' punjab', ' PJ578', '  panda', 980797),
(12, ' kanodar', ' ka3456', '  palanpur', 677867),
(14, ' kalup', ' A12345', '  kolkata', 454656),
(15, ' momin vas', ' M13324', '  siddhpur', 976586),
(16, ' momin vas', ' M13324', '  siddhpur', 976586);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
