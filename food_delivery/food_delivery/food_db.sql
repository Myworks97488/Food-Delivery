-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 12:43 PM
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
-- Database: `food_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `pass`) VALUES
(1, 'bstm@gmail.com', 'bstm', '54321'),
(2, 'iiit@gmail.com', 'iiit', '12345'),
(3, 'admin@gmail.com', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE `book_order` (
  `id` int(11) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `contact_number` varchar(500) NOT NULL,
  `customer_address` text NOT NULL,
  `odate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`id`, `pname`, `category`, `price`, `description`, `cname`, `contact_number`, `customer_address`, `odate`) VALUES
(1, 'food', 'gold', '', 'soper survice', 'Anjali', '5678990453', 'm  hj', '1698433885'),
(2, 'food', 'gold', '', 'soper survice', 'Rinki', '5677089354', 'dvfdg', '1698434286'),
(3, 'Birth Day Events', 'premium,gold', '100000', '<p>No need to worry about your birthday plans this year, there are so many things to do on your birthday to celebrate yourself. </p>', 'jhv m', '9087670031', ' mj jk,', '1698434353'),
(4, 'Pani Puri', 'Indian', '1501', '        The crispy, hollow spheres commonly come with a filling of mashed potatoes and chickpeas, mixed with freshly chopped onions, cucumber, lime, coriander and green chillies in a chaat masala blend.\r\n        ', 'Rik', '4653332145', 'gjhgk', '1698663583');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `image`, `description`) VALUES
(1, 'Pasta', '300', 'Italian', '1698656392Instant-Pot-Creamy-Cajun-Pasta-with-Sausage-featured-720x720.jpg', 'Satisfy your craving for carbs with one of these all-time-best&nbsp;<em>pasta</em>&nbsp;recipes from Food Network.\n'),
(2, 'Pani Puri', '1501', 'Indian', '1698659603Pani-Puri.jpg', '        The crispy, hollow spheres commonly come with a filling of mashed potatoes and chickpeas, mixed with freshly chopped onions, cucumber, lime, coriander and green chillies in a chaat masala blend.\r\n        ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_order`
--
ALTER TABLE `book_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
