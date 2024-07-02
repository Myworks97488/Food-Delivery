-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 06:41 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product`, `price`, `description`, `image`, `category`, `id`) VALUES
('pasta', 300, '  good food good test\r\n   ', '1696055867download (4).jpeg', 'veg,Non Veg', 20),
('biriyani', 275, '  good test and good for health   ', '1696055937_Hyderabadi_Dum_Biryani_.jpg', 'veg,Non Veg', 21),
('softdrinks', 500, 'refrashment your life', '1696056008cold-drink-recipe-formulation.jpeg', ' Soft Drinks', 22),
('motton kasha', 780, '  testy and delicious   ', '1696056225kasha.mangsho.recipes.jpg', 'Non Veg', 23),
('chiken bharta', 450, 'good test', '1696056181Chicken-Bharta-Recipe-500x500.jpg', 'Non Veg', 24),
('maduvada', 160, 'south indian camak', '1696056371Medu-Vada-1300x867.jpg', 'veg', 25),
('butter chiken', 650, 'yummmy and testy enjoy your food', '1696056455butter-chicken-recipe.jpg', 'Non Veg', 26),
('chole bhature', 280, 'panjabi tadka and maza', '1696056541Chole-Bhature-scaled.jpg', 'veg', 27),
('white sos pasta', 520, '  creamy and delicious   ', '1696056754download (5).jpeg', 'veg,Non Veg', 28),
('bargar', 380, 'spicyest', '1696056872download (3).jpeg', 'veg,Non Veg', 29),
('kabab', 560, 'catpata and testy ', '1696056993download.jpeg', 'veg,Non Veg', 30),
('motton giloti kabab', 420, 'juciest  yummy and testy', '1696057090download (1).jpeg', 'Non Veg', 31),
('rashgula', 50, '  soft spongy and yummy   ', '1696057377know-about-rasgulla-is-good-for-your-health.jpg', 'Dessert', 32),
('pawbhaji', 380, '  panjabi chatka   ', '1696057531images.jpeg', 'veg', 33),
('chiken kasha', 300, 'healthy food', '1696057698download (2).jpeg', 'Non Veg', 34),
('chowmin', 280, '  testy   ', '1696057869noodles.jpg', 'veg,Non Veg', 35),
('crishpy chiken', 280, '    crispy and testy      ', '1696137731download (7).jpeg', 'Starter,Non Veg', 36),
('kaju katli', 200, '  sweet your life   ', '1696227215kaju katli.jpeg', 'Dessert', 38);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `date` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('archismangupta33@gmail.com', '1234'),
('archismangupta33@gmail.com', '1234'),
('archismangupta33@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
