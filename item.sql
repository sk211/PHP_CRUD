-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 07:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item`, `description`, `image`) VALUES
(3, 'hello welcome', '', ''),
(4, 'bangaldesh is a lina of river', '', ''),
(5, 'sonar bangla', '', ''),
(6, 'sonar bangla', '', ''),
(7, 'hello welcome', '', ''),
(8, 'dhaka', '', ''),
(34, 'hello welcome', ' dsfkldskfjdjfkldfdkljfkldjfkjdkfjkdjfk lkdfjkldjflkjd dkfjkdjfkjdk dkjflkdjfkjd djfkdjfkjdkf dkjfkdjfkjdlkfj dkflkdjfjdlkjf dklkdjkfjd dkfkdjkfjdkj sdljamaijf fnasod bang ami umait vabalo bas coroding tumar akash tumar batash ami tumai balobai amar sonar', ''),
(35, '1111111', 'dsfkldskfjdjfkldfdkljfkldjfkjdkfjkdjfk lkdfjkldjflkjd dkfjkdjfkjdk dkjflkdjfkjd djfkdjfkjdkf dkjfkdjfkjdlkfj dkflkdjfjdlkjf dklkdjkfjd dkfkdjkfjdkj sdljamaijf fnasod bang ami umait vabalo bas coroding tumar akash tumar batash ami tumai balobai amar sonar ', ''),
(36, 'fdfdfdfdfdf', ' \r\n            500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', ''),
(37, 'Bangladeh ', ' 500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n            ', ''),
(38, 'hello welcome', ' \r\n            ', ''),
(39, 'tomato -2', ' \r\n     amar sonar bangla ami tumai valobasi coro din tumar akash tumar batash ami tumi valobasi       ', ''),
(40, 'hello welcome', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum  \r\n            ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
