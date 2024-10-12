-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2024 at 06:59 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kutubxona`
--

-- --------------------------------------------------------

--
-- Table structure for table `janr`
--

CREATE TABLE `janr` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `janr`
--

INSERT INTO `janr` (`id`, `name`) VALUES
(1, 'Badiiy Adabiyoti'),
(2, 'Fantaziya'),
(6, 'Ilmiy fantastik');

-- --------------------------------------------------------

--
-- Table structure for table `kitoblar`
--

CREATE TABLE `kitoblar` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `janr_id` int NOT NULL,
  `muallif_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kitoblar`
--

INSERT INTO `kitoblar` (`id`, `title`, `description`, `text`, `img`, `janr_id`, `muallif_id`) VALUES
(1, '1984', '\"1984\" is a dystopian novel set in a totalitarian society governed by the Party and its leader, Big Brother.  ', '\"War is peace.\r\nFreedom is slavery.\r\nIgnorance is strength.\"', 'Images/1.jpg', 6, 7),
(2, '1984', '\"1984\" is a dystopian novel set in a totalitarian society governed by the Party and its leader, Big Brother. ', '\"War is peace.\nFreedom is slavery.\nIgnorance is strength.\"', 'Images/1.jpg', 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `muallif`
--

CREATE TABLE `muallif` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muallif`
--

INSERT INTO `muallif` (`id`, `name`) VALUES
(2, 'Abdulla Oripov1'),
(3, 'Erkin Vohidov'),
(5, 'Paulo Koelo'),
(6, 'Nabijon Boqiy'),
(7, 'George Orwell ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `phone`, `img`) VALUES
(1, 'elbek', 'elbek@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '+998942021651', 'none'),
(2, 'Boltavoy', 'boltavoy@gmail.com', '123', 'user', '+49489465165', 'nonoe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `janr`
--
ALTER TABLE `janr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitoblar`
--
ALTER TABLE `kitoblar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muallif`
--
ALTER TABLE `muallif`
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
-- AUTO_INCREMENT for table `janr`
--
ALTER TABLE `janr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kitoblar`
--
ALTER TABLE `kitoblar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `muallif`
--
ALTER TABLE `muallif`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
