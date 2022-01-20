-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2022 at 08:57 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiene`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints_comments`
--

CREATE TABLE `complaints_comments` (
  `id` int(20) NOT NULL,
  `complaint_id` int(20) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(27, 15, 'ddsm', 'fsdfs', '2022-01-20 21:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `is_admin` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`) VALUES
(2, 'Daniel Mabadeje', 'mabadejedaniel1@gmail.com', '$2y$10$/x5hvWWTvA0mp6taFIqIBuj27cnvv97xixv8iRPMUaDC91duAllUW', 0, '2019-10-23 17:13:16'),
(3, 'Greatest', 'greatest@gmail.com', '$2y$10$g10m899lxK4P0lagmvmAk.HvQZuHz/BS2/8ZHdVm7kJjsjVBlnoE2', 0, '2019-10-23 20:29:59'),
(4, '123456789', 'mabadejedaniel13@gmail.com', '$2y$10$uWxbR1AY7Qssu3JlqWaSoOVV87XU3erYJwA5ajgsAlq.gmlcTDglm', 0, '2019-10-23 20:31:34'),
(5, 'Nexton logistics', 'mabadejedaniel71@gmail.com', '$2y$10$kWhJf/R8MteSjDZ8kO3M6OsY1K.8NkHYX8rkXu9Xx0QvwoWW8stSu', 0, '2019-10-23 20:33:28'),
(6, 'Nexton logistics', 'mabadejedaniel122@gmail.com', '$2y$10$8qqwoaTxjyXq63PbeGVN8.8IEtT.Nuc6qiU20xK26SLwaNlti2K9W', 0, '2019-11-03 13:44:52'),
(7, 'Daniel Mabadeje', 'mabadejedaniel1356@gmail.com', '$2y$10$yTUTBsKUiue6GUCqyBewT.SJnDMk3FL3DeXQbgXa7t9Q/D2rEr6AW', 0, '2019-12-17 16:34:57'),
(8, 'Nexton logisti', 'mabadejedaniel124@gmail.com', '$2y$10$JtYZnc1MEs2OtVHN8ZFqFOZORxmVBIMcOGAQF6EElZf3lFUDd24Bi', 0, '2020-02-13 20:56:54'),
(9, 'Nexton logisti', 'mabadejedaniel188@gmail.com', '$2y$10$q0dprkkPTY6JWqsAaJyMneRxkADGVqCeKswdABf7C5LHkWBSowpke', 0, '2020-02-13 20:58:53'),
(10, 'Nexton logisti', 'mabadejedaniel186@gmail.com', '$2y$10$KtIGUo2RkVS8R4DzqxhX..Seo/Ww97TVdah1dgEX6kAr396snS9kG', 0, '2020-02-13 20:59:25'),
(11, 'ee', 'nn@r.com', '$2y$10$ZGL4zWjD3UwuXUdjXy8OleJ/yoi1TtrhDNDEY7kn4cFob5oXc1toq', 0, '2020-02-13 21:35:28'),
(12, 'mabadejedaniel1@gmail.com', 'root@gmail.com', '$2y$10$8uOzZzPNbTmWqXa1EcWfK.ibbCo29IFsA7w0WYsnsUesz4kKywade', 0, '2020-03-01 14:13:17'),
(13, 'Nexton logistics', 'mabadejedaniel1ff3@gmail.com', '$2y$10$bTdsT2eDEYRF4p7gV13YQ.KpAkKc9aSqV8Dsl4Sk9RbxtJ4t8lTd.', 0, '2020-03-01 23:01:47'),
(14, 'Nexton logisti', 'mabadejedaniel12jjjj4@gmail.com', '$2y$10$emnEwtr/HLQK4/4Dv2m1EO8IcwenDpD5P2knHC2x.UPPJwFo5FduC', 0, '2020-03-01 23:02:41'),
(15, 'Daniel Mabadeje', 'mabadejedaniel@tutanota.com', '$2y$10$hdpjJcU619IIRTf5qWx7QOVCjeIJLGfJyqd9yIEYoc9ASpqFqnvZ6', 1, '2022-01-20 20:37:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints_comments`
--
ALTER TABLE `complaints_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `complaints_comments`
--
ALTER TABLE `complaints_comments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
