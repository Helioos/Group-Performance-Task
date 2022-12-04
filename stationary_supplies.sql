-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 09:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stationary_supplies`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `Identifier` int(10) NOT NULL,
  `Customer_Name` varchar(80) DEFAULT NULL,
  `Phone_Number` bigint(11) DEFAULT NULL,
  `Delivery_Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`Identifier`, `Customer_Name`, `Phone_Number`, `Delivery_Address`) VALUES
(1, 'Samantha Duhaylungsod', 9151524167, 'Purok 1-B Harvard United States'),
(2, 'Maja Alexandra Inferno', 9631546257, 'Purok 3-A, Lacang Street Iligan City'),
(3, 'James Smith', 9153648753, 'Purok 9, Ilang Ilang Street Quezon City'),
(4, 'Peter Jasper Akinola', 9556437184, 'Santa Elena Village Block 3'),
(9, 'Hanabi Otome', 9458354967, 'Block 14, Paitan Village'),
(15, 'Balmond Harvard', 9634875129, 'Pampam Village Near Blue Store'),
(20, 'Michael Jackson Alfonso', 9148576329, 'Bernondo Block 1 Yellow Gate'),
(33, 'Ino Yamanaka', 9556811248, 'Purok 5-B Paitan, Iligan City'),
(53, 'Naruto Uzumaki', 9985369724, 'Hidden Village, Black Apartment Second Floor, Red Door'),
(69, 'Junichi Hashiba', 964831946, 'Adromenda Block 9, House Number 8');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Unique_ID` int(80) NOT NULL,
  `Product_Name` varchar(80) DEFAULT NULL,
  `Comments` text DEFAULT NULL,
  `Price_Tag` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Unique_ID`, `Product_Name`, `Comments`, `Price_Tag`) VALUES
(1, 'Orbital Keys', 'Can i have some free item please :)', '₱ 99.00'),
(2, 'Swish Wallet', 'I wish the item would be delivered safely', '₱ 300.50'),
(3, 'Rhino Case', 'Can i have some free item please :)', '₱ 100.00'),
(4, 'Handy Mop', 'Nice mop', '₱ 399.00'),
(9, 'Hand Towel', 'I always want to buy hand towel here', '₱ 50.00'),
(15, 'Earphone Plus 6', 'Nice reviews, let me try', '₱ 299.00'),
(20, 'Universal Key', 'good for someone who always go home late', '₱ 99.00'),
(33, 'Floor Wax', 'I need some floor wax for school purposes', '₱ 125.25'),
(53, 'Rag High Quality', 'It says high quality so okay', '₱ 200.00'),
(69, 'Water Bottle', 'I always drink water during exercise so I need water bottle', '₱ 250.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`Identifier`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Unique_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
