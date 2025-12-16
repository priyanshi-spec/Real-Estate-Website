-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2025 at 09:15 AM
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
-- Database: `realdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`name`, `email`, `contact`, `photo`) VALUES
('sejal', 'sejal904@gmail.com', '9089098000', '5.jpg'),
('lisa', 'reh@gmail.com', '9708970110', '2.jpg'),
('shaheer', 'peo012@gmail.com', '9597869503', '5.jpg'),
('shreyas', 'shreyas3@gmail.com', '89778675410', '20.jpg'),
('priyanshi homkar', 'priyahomkar@gmail.com', '90782290522', '2.jpg'),
('radhika', 'radha512rr@gmail.com', '9090787960', '16.jpeg'),
('divya kapoor', 'divyak6@gmail.com', '9340915780', '19.jpg'),
('jay', 'jay@gmail.com', '8970897089', '15.jpeg'),
('shree', 'shree@gmail.com', '9708967500', 'feature8.jpg'),
('shreyansh', 'shreyansh@gmail.com', '9597869503', 'house9.webp'),
('jay', 'jay@gmail.com', '90782290522', 'house2.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
