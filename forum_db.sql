-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 09:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post`, `date`) VALUES
(1, '1', 'text', '2023-05-22'),
(2, '1', 'Second post', '2023-05-22'),
(3, '1', 'udo second post', '2023-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`, `image`) VALUES
(1, 'mattidungafa', 'mattidungafa@gmail.com', '$2y$10$poGAVmy0f0IAWKLp7LSVieNDCbABP/wevJe1Vbg8QtX5Pyv1JPajm', '2023-05-20', NULL),
(2, 'mattidungafa@gmail.com', 'g@gmail.com', '$2y$10$o/tdPgAugnf40hO7TGSxL.i4kSf/uwZFgtt6101JZcaxAUSApcvPW', '2023-05-20', NULL),
(3, 'kemsguy', 'matngafa@gmail.com', '$2y$10$XSlhvSFdJ7oe.cScfzlAWeZoMLs8Q9i4xEKPTPEBaSpQbqWpLca8S', '2023-05-21', NULL),
(4, 'mattidungafa@gmail.com', 'mattafa@gmail.com', '$2y$10$dbDqDeP1XMi9o9NEKUeD9.Z4sI6E46UAmD3/ui7KULkyzyJwhKiju', '2023-05-21', NULL),
(5, 'mattidu', 'mattidunfa@gmail.com', '$2y$10$wBIicpiFLC/9AH3huxXplOugzDOcRBdYK5Gua1ju4/uwIeK0oHAx.', '2023-05-21', NULL),
(6, 'mattidu', 'matti@gmail.com', '$2y$10$MbcGbFJkNfZNf27yueZZRO.lpo8mO/vVRtKB.CARIDSOIBc5CkS6i', '2023-05-21', 'bg.png'),
(7, 'mattidung', 'matafa@gmail.com', '$2y$10$lcmRXQbibZc1NwcESPTYzey5.IAZJyerl9il/bINQ2i6fq2T5FnNy', '2023-05-22', 'bg.png'),
(8, 'mattidungafa@gmail.com', 'mattidfa@gmail.com', '$2y$10$TGUay9aAsd0/rrZJMj0Dmu76s/yL3mV.tvHQ6iD0H10XQzbkC5/h.', '2023-05-22', 'bg.png'),
(9, 'mattidungafa@gmail.com', 'mat@gmail.com', '$2y$10$wzu.uxxYxHlKG8Mki.C6Xe4evD9VMvsKqaVqxRyPs5vbFFCzG3lI2', '2023-05-22', 'bg.png'),
(10, 'mattidungafa@gmail.com', 'marft@gmail.com', '$2y$10$kr9.Ns/JvhGvBth9j1VZl.nPl2FtWkv4TYL31quIbl5RpbD8Znc02', '2023-05-22', 'bg.png'),
(11, 'mattidungafa@gmail.com', 'mafia@gmail.com', '$2y$10$NZax4R0owRcb0BxHR.vqJ.zLhV2m0Vj/.DIjT2D7EA122bJGH8YBW', '2023-05-22', 'bg.png'),
(12, 'mattidungafa@gmail.com', 'maf@gmail.com', '$2y$10$ZKo.UOk6sXYgfB39sqlKmuGt1BAWm/7OhieRgY6l1u3VRjL3d3Xj.', '2023-05-22', 'bg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
