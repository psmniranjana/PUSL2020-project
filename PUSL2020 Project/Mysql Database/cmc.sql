-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2023 at 07:28 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve_reject_reasons`
--

DROP TABLE IF EXISTS `approve_reject_reasons`;
CREATE TABLE IF NOT EXISTS `approve_reject_reasons` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `garbage_report_id` int UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` enum('approved','rejected') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `approve_reject_reasons`
--

INSERT INTO `approve_reject_reasons` (`id`, `garbage_report_id`, `reason`, `status`, `created_at`) VALUES
(3, 10, 'Approved', 'approved', '2023-05-10 12:55:49'),
(2, 6, 'Approved', 'approved', '2023-05-07 18:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `image`, `date`) VALUES
(5, 'Green Living: Tips for a Cleaner Environment', 'Discover actionable tips and strategies for a cleaner environment and sustainable living. Learn how to reduce waste, conserve resources, and promote eco-friendly practices in your daily life. Start making a positive impact on the planet today!', 'images/Screenshot 2023-05-11 234037.jpg', '0000-00-00'),
(6, 'The Benefits of Recycling', 'Why It Matters for the Environment\" - Learn about the importance of recycling and how it can help reduce waste, conserve resources, and protect the planet.', 'images/Screenshot 2023-05-11 233910.jpg', '0000-00-00'),
(7, 'Eco-Friendly Cleaning', 'Tips for a Safe and Healthy Home\" - Find out how to clean your home without harsh chemicals or toxic substances, using natural and sustainable cleaning products instead.', 'images/Screenshot 2023-05-11 234106.jpg', '0000-00-00'),
(4, 'Article One', 'A', 'images/1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `garbage_reports`
--

DROP TABLE IF EXISTS `garbage_reports`;
CREATE TABLE IF NOT EXISTS `garbage_reports` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `reporter_name` varchar(50) NOT NULL,
  `report_date` date NOT NULL,
  `report_time` time NOT NULL,
  `nearest_city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `garbage_type` varchar(50) NOT NULL,
  `priority_level` enum('high','medium','low') NOT NULL,
  `garbage_location` varchar(50) NOT NULL,
  `garbage_image` longblob NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `garbage_reports`
--

INSERT INTO `garbage_reports` (`id`, `reporter_name`, `report_date`, `report_time`, `nearest_city`, `district`, `garbage_type`, `priority_level`, `garbage_location`, `garbage_image`, `created_at`, `status`) VALUES
(16, 'Dilshan Fernando', '2023-05-01', '11:58:00', 'Mawanella Garbage Dump (Kunu Kanda)', 'Kegalle', 'Large', 'high', '7.271654301161933, 80.44846329223017', 0x36343563386230316339656463332e33343038303832322e6a7067, '2023-05-11 06:28:17', 'Approved'),
(17, 'Tharindu Perera', '2023-05-05', '14:59:00', 'Katunayeka Seeduwa Urban Council Dump Yard', 'Colombo', 'Medium', 'high', '7.116396624295928, 79.8748840462048', 0x36343563386237373735306133362e34373137383332372e6a7067, '2023-05-11 06:30:15', 'Approved'),
(18, 'Dilshan Fernando', '2023-04-14', '12:05:00', 'Ampara Garbage Dump', 'Ampara', 'Medium', 'high', '7.310794175351843, 81.68945294435875', 0x36343563386264343837613437332e35383235333630382e6a7067, '2023-05-11 06:31:48', 'Approved'),
(19, 'Malith Gunaratne', '2023-04-21', '16:05:00', 'Meethotamulla Garbage Dump', 'Colombo', 'Large', 'high', '6.9386826480164325, 79.89054263086217', 0x36343563386365313333333365332e34393738363839372e6a7067, '2023-05-11 06:36:17', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `latlng` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `latlng`) VALUES
(1, '8.13129680728035,80.56961447831316');

-- --------------------------------------------------------

--
-- Table structure for table `my_table`
--

DROP TABLE IF EXISTS `my_table`;
CREATE TABLE IF NOT EXISTS `my_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `my_table`
--

INSERT INTO `my_table` (`id`, `name`, `password`, `role`, `email`) VALUES
(4, 'cp_asanka', 'asanka123', 'green_captain', 'asanka@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(5, 'gtf_amalp', 'amal123', 'gtf_member', 'amalperera@gmail.com'),
(6, 'gtf_kasunm', 'kasun123', 'gtf_member', 'kasunmadusanka@gmail.com'),
(7, 'gtf_amithk', 'admith123', 'gtf_member', 'amithkarunathilake@gmail.com'),
(8, 'gtf_jayashan', 'jayayshan123', 'collecting', 'jayashaanamarasinge@gmail.com'),
(9, 'admin_malith', 'admin123', 'admin', 'admin@gmail.com'),
(12, 'gtf_jayashana', '$2y$10$FMcLe7SUq.yPGEvI8jIO9OZePbS0pMcrXHE15dKB6Ir', 'gtf_member', 'aaa@gmail.com'),
(11, 'gc_asanka', 'asanka123', 'green_capt', 'asanka@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
