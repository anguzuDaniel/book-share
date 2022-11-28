-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2022 at 10:56 AM
-- Server version: 8.0.26
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book-share`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `file` text NOT NULL,
  `description` text NOT NULL,
  `category` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `image`, `file`, `description`, `category`) VALUES
(12, 'They think I\'m crazy', 'Helittle thiner', 'crazy.jpg', 'A - Container Properties (1).pdf', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora natus voluptates nobis ratione nulla similique culpa voluptate veritatis dignissimos voluptatum a molestiae libero odit, repellat deserunt quaerat odio? Optio, labore!', 1),
(13, 'They think I\'m crazy', 'Helittle thiner', 'crazy.jpg', 'UserManual.pdf', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora natus voluptates nobis ratione nulla similique culpa voluptate veritatis dignissimos voluptatum a molestiae libero odit, repellat deserunt quaerat odio? Optio, labore!', 6),
(14, 'They think I\'m crazy', 'The magic stolen from him', 'stolen.jpg', 'B - Child Properties.pdf', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora natus voluptates nobis ratione nulla similique culpa voluptate veritatis dignissimos voluptatum a molestiae libero odit, repellat deserunt quaerat odio? Optio, labore!', 5),
(15, 'The bone crines dawn', 'Kathrryn purdie', 'twins.jpg', 'A - Container Properties.pdf', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora natus voluptates nobis ratione nulla similique culpa voluptate veritatis dignissimos voluptatum a molestiae libero odit, repellat deserunt quaerat odio? Optio, labore!', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
