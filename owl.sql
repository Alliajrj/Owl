-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2023 at 03:43 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owl`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int NOT NULL,
  `post_author_id` int DEFAULT NULL,
  `post_content` text COLLATE utf8mb4_general_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `post_tag` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_author_id`, `post_content`, `post_date`, `post_tag`, `image_url`) VALUES
(199, 15, 'michou fortnite', '2023-05-28 12:41:54', 'mystere', ''),
(200, 15, 'blablablabla le code blablablabla', '2023-05-28 12:42:15', 'mystere', ''),
(201, 18, 'loseeeeeeer', '2023-05-28 12:43:05', 'mystere', ''),
(218, 6, 'img test', '2023-05-28 15:44:07', 'preuves', 'cachedImage.jpg'),
(219, 6, 'image test', '2023-05-28 15:44:39', 'mystere', 'cachedImage.jpg'),
(220, 6, 'img test', '2023-05-28 16:30:38', 'mystere', 'cachedImage.jpg'),
(221, 6, 'blablab test', '2023-05-28 16:33:59', 'enigmes', 'May waterfall desktop HD.png'),
(222, 6, 'azertyui', '2023-05-28 17:01:30', 'mystere', 'May waterfall desktop HD.png'),
(223, 6, 'azaertyui', '2023-05-28 17:03:14', 'mystere', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `user_nickname` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `user_pic` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_mail` text COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_nickname`, `user_pic`, `user_mail`, `user_password`) VALUES
(6, 'allia', 'alliaa', 'allia', 'allia@gmail.com', '76e105bbb8305e8b79e5ca190bc72bb6fc3c3c59'),
(15, 'michel', 'michou', 'michou', 'michou@fortnite.com', '11b13f83535c942a4dde042230905e8b54dca77d'),
(16, 'sam', 'sam', 'sam', 'sam@gmail.com', 'f16bed56189e249fe4ca8ed10a1ecae60e8ceac0'),
(17, 'baltloser', 'rivaux', 'balt', 'balthazar@lache.com', '7e2486f6386f32bcc55c6cc2b189920ed12b6f87'),
(18, 'leo', 'loser', 'leo', 'riche@gmail.com', '1f0a51c36efaa0f44e4899c26d2028681997c8ea'),
(19, 'bulbizarre', 'bulbibulbi', 'May waterfall desktop HD.png', 'bulbi@bulbi.com', '8f40c9eaca35b6a86bfcc1356f833fd711fd1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
