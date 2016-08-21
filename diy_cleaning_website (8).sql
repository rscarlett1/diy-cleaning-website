-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2016 at 01:53 am
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `recipe_id`, `ceated_at`, `updated_at`) VALUES
(1, 'great recipe', 3, 12, '2016-08-17 22:44:40', '2016-08-17 22:44:40'),
(2, 'easy to make', 5, 15, '2016-08-17 22:45:08', '2016-08-17 22:45:08'),
(3, 'I have  better recipe than this', 5, 17, '2016-08-17 22:45:44', '2016-08-17 22:45:44'),
(6, 'Tihis is a test', 5, 9, '2016-08-19 04:36:51', '2016-08-19 04:36:51'),
(7, 'i like this recipe\r\n', 3, 9, '2016-08-19 04:37:42', '2016-08-19 04:37:42'),
(8, 'i like this recipe\r\n', 5, 9, '2016-08-19 04:39:10', '2016-08-19 04:39:10'),
(9, 'fudge', 6, 9, '2016-08-19 04:39:43', '2016-08-19 04:39:43'),
(10, 'hi there', 3, 9, '2016-08-19 04:40:29', '2016-08-21 03:27:16'),
(11, 'how r u', 3, 15, '2016-08-19 04:49:04', '2016-08-19 04:49:04'),
(12, 'how r u', 3, 15, '2016-08-19 06:29:27', '2016-08-19 06:29:27'),
(13, 'how r u', 3, 15, '2016-08-19 06:34:14', '2016-08-19 06:34:14'),
(14, 'how r u', 3, 15, '2016-08-19 06:50:08', '2016-08-19 06:50:08'),
(15, 'how r u', 3, 15, '2016-08-19 06:55:15', '2016-08-19 06:55:15'),
(16, 'how r u', 3, 15, '2016-08-19 07:00:02', '2016-08-19 07:00:02'),
(17, 'how r u', 3, 15, '2016-08-19 07:00:17', '2016-08-19 07:00:17'),
(18, 'how r u', 3, 15, '2016-08-19 07:03:51', '2016-08-19 07:03:51'),
(19, 'how r u', 3, 15, '2016-08-19 07:09:12', '2016-08-19 07:09:12'),
(20, 'how r u', 3, 15, '2016-08-19 08:14:01', '2016-08-19 08:14:01'),
(21, 'dfsfsf', 3, 9, '2016-08-21 03:31:52', '2016-08-21 22:17:43');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `recipe_database`
--

INSERT INTO `recipe_database` (`recipe_id`, `user_id`, `title`, `description`, `category`, `method`, `image`, `status`) VALUES
(8, 3, 'Kitchen Sink Cleaner', 'Great to make it shine', 'Kitchen', '1 T Baking Soda\r\n1 t Lemon', '', 'Approved'),
(9, 3, 'Bathroom', 'Tile Cleaner', 'Bathroom', '2 T Baking Soda\r\n\r\n1 t White Vinegar\r\n\r\n1 t washing soda', '', 'Approved'),
(12, 3, 'Concrete Floor Cleaner', 'Clean concreate floors easily with this cleaner', 'Garage', '1 C Borax\r\n1 Tb Washing Soda\r\n2 T White Vinegar\r\n', 'http://placehold.it/320x400', 'Approved'),
(13, 3, 'Plant Cleaner', 'Spray on to indoor plants so they shine', 'Other', '2T Baking Soda\r\n1T White Vinegar', 'http://placehold.it/320x400', 'Approved'),
(14, 3, 'Kitchen Floor Cleaner', 'Easy to clean cleaner', 'Kitchen', '1 T borax\r\n1 C washing soda\r\n2 t lemons\r\n2 drops lavender', 'http://placehold.it/320x400', 'Approved'),
(15, 3, 'Envirionment Smelling sprap', 'Make the bathroom small great all the time', 'Bathroom', '1 c water\r\n5 drops essence\r\n1 t oil', 'http://placehold.it/320x400', 'Approved'),
(16, 3, 'Economic laundry powder', 'Great easy to make economical washing powder', 'Laundry', '1 C washing soda\r\n1/2 c borax\r\n1 bar soap', 'http://placehold.it/320x400', 'Pending'),
(17, 3, 'Bug Off for cars', 'Put this as a windscreen cleaner in the car', 'Garage', '1 T Baking Powder\r\n1 T white vineigar\r\n1 t lemon juice', 'http://placehold.it/320x400', 'Approved'),
(18, 3, 'All over surface spray', 'Clen all surfaces of the house', 'Other', '3 T Baking soda\r\n1 T white vinegar\r\n1 t lemon juice\r\n3 drops of your favourite essential oil', 'http://placehold.it/320x400', 'Approved'),
(20, 3, 'Brighten Clothes With This Awesome Dry Laundry Booster', 'Brighten dingy laundry with this homemade eco-friendly dry laundry booster. Instead of paying for commercial brands, you can easily make your own with basic ingredients found at any grocery store. And once you pick up the basic ingredients, each batch costs cents to make. Keep your all-natural booster contained in a small jar so it is handy — and seriously potent — when you''re doing laundry.', 'Laundry', 'What You''ll Need:\r\n\r\n2 cups washing soda\r\n1/4 cup hydrogen peroxide\r\nMixing bowl\r\nFork\r\nSmall container\r\nDirections:\r\n\r\nThink of laundry booster as your detergent''s best friend. Using washing soda really amps up this laundry helper, while hydrogen peroxide works together with your detergent to help clean your garments.\r\n\r\nMeasure and add the washing soda to a mixing bowl, and then add the hydrogen peroxide. Gently stir with a fork.\r\n\r\nUse the fork to break up any lumps, creating a sand-like texture. When the mixture interacts with water, it creates bubbles of oxygen, which help lift tough stains and gently whiten whites.\r\n\r\nPour the booster into a small container with a lid, and you''re all set for tackling the laundry.\r\n\r\nFor tough stains and dingy whites, soak clothes in warm water mixed with 1/4 cup of the laundry booster for 20 minutes or overnight before washing. And you can keep things all natural and make your own homemade eco-friendly liquid laundry detergent. In a rush? Simply add 1/4 cup of booster directly to your next load of laundry to give your detergent a bit of a kick.\r\n\r\n', 'img/uploads/original/laundry-booster.jpeg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(3, 'Raewynne', 'Scarlett', 'raewynne.scarlett@gmail.com', '$2y$10$4L4NiwVugHJr7.n2IyFADupQ5Sm6AHfaPNtkEPrerEjmrP/iIXW2y'),
(4, 'Richard', 'hpa', 'richard.hpa@hotmail.com', '$2y$10$A8AzyVErNdGqis38oR/2V.cZtYtXngZyh.3Vx3oSir5HmHesnQfO2'),
(5, 'Patrick', 'Scarlett', 'go@gmail.com', '$2y$10$yJlHVeL19Su/stc/revw9.CAVTPw3q/hCASt3bPgS25Cfq5D.8YNG'),
(6, 'max', 'scarlett', 'max@diggers.com', 'password');

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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `recipe_database`
--
ALTER TABLE `recipe_database`
MODIFY `recipe_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
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
