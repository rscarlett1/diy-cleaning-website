-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2016 at 02:03 am
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diy_cleaning_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(10) unsigned NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `recipe_id` int(10) unsigned NOT NULL,
  `ceated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `recipe_id`, `ceated_at`, `updated_at`) VALUES
(29, 'dgdgdgdgdgdgdfg', 3, 38, '2016-08-25 23:32:34', '2016-08-25 23:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_database`
--

CREATE TABLE IF NOT EXISTS `recipe_database` (
`recipe_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` enum('Kitchen','Bathroom','Laundry','Garage','Other') NOT NULL DEFAULT 'Other',
  `method` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Pending','Approved','Declined','') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `recipe_database`
--

INSERT INTO `recipe_database` (`recipe_id`, `user_id`, `title`, `description`, `category`, `method`, `image`, `status`) VALUES
(38, 3, 'test', 'trfafasfeawefwaeg', 'Other', 'rqrrdascScS', '57bf8008ce0d5.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `privilege` enum('user','admin') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `privilege`) VALUES
(3, 'Raewynne', 'Scarlett', 'raewynne.scarlett@gmail.com', '$2y$10$4L4NiwVugHJr7.n2IyFADupQ5Sm6AHfaPNtkEPrerEjmrP/iIXW2y', 'admin'),
(4, 'Richard', 'hpa', 'richard.hpa@hotmail.com', '$2y$10$A8AzyVErNdGqis38oR/2V.cZtYtXngZyh.3Vx3oSir5HmHesnQfO2', 'user'),
(5, 'Patrick', 'Scarlett', 'go@gmail.com', '$2y$10$yJlHVeL19Su/stc/revw9.CAVTPw3q/hCASt3bPgS25Cfq5D.8YNG', 'user'),
(6, 'max', 'scarlett', 'max@diggers.com', 'password', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipe_database`
--
ALTER TABLE `recipe_database`
 ADD UNIQUE KEY `recipe_id_2` (`recipe_id`), ADD KEY `recipe_id` (`recipe_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `recipe_database`
--
ALTER TABLE `recipe_database`
MODIFY `recipe_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe_database` (`recipe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe_database`
--
ALTER TABLE `recipe_database`
ADD CONSTRAINT `recipe_database_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
