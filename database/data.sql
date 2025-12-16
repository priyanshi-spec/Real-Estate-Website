-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2025 at 09:14 AM
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
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `photo`, `type`, `location`, `status`, `price`) VALUES
(11, '6.jpg', '2 bhk bunglow', 'chennai, tamil nadu', 'Available', '2 crore'),
(12, '18.jpeg', '2 bhk luxury villa', 'varkala, kerela', 'Available', '75,00,000'),
(17, '2.jpg', '2 bhk house', 'anekal,banglore', 'Available', ''),
(18, '14.jpeg', '4 bhk luxury villa', 'jaynagar,rajasthan', 'Available', '1.20crore'),
(22, '1.jpg', '2 bhk house', 'worli,mumbai', 'Available', '92,00,000'),
(24, '5.jpg', '2 bhk luxury villa', 'bhopal,mp', 'Available', '1.2 crore'),
(25, '9.jpeg', '4 bhk bunglow', 'krishna colonies,jaipur', 'Available', '65,00,000'),
(26, '15.jpeg', '4 bhk luxury villa', 'oberoi heights,banglore', 'Available', '4 crore'),
(27, '11.jpg', '2 bhk house', 'vijay square,gurgaon', 'Available', '85,00,000'),
(28, 'house7.webp', '3 bhk villa', 'ayodhya,uttar pradesh', 'Available', '90,0000'),
(29, 'house1.webp', '3 bhk bunglow', 'shanti nagar, nagpur', 'Available', '1.5 crore'),
(30, 'house6.webp', '2 bhk house', 'vijawada,pune', 'Available', '57,00,000'),
(32, '12.jpg', '3 bhk house', 'Saket, Delhi', 'Available', '79,00,000'),
(33, '7.jpg', '3 bhk villa', 'Green Valley Heights,Mumbai', 'Available', '88,00,000'),
(34, 'house8.webp', '3 bhk bunglow', ' Banjara Hills, Hyderabad, Telangana', 'Available', '50,00,000'),
(35, 'house9.webp', '4 bhk home', 'Lakeview Apartments,Maharashtra', 'Available', '1 crore'),
(36, 'house10.webp', '2 bhk house', '55, Sunrise Enclave,Kolkata', 'Available', '80,00,000'),
(37, 'house1.webp', '3 bhk bunglow', 'worli,mumbai', 'Available', '80,00,000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
