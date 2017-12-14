-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 11:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'sayang');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Event'),
(2, 'Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(250) NOT NULL,
  `date` text NOT NULL,
  `description` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `location`, `date`, `description`, `img`, `id_category`, `id_users`, `username`) VALUES
(100, 'Devsummit Hackathon', 'dsfvdsv', '2017-12-14 00:00:00', 'sdffdsfds', 'http://localhost/eventx3/assets/img/caleb-ralston-2160418.jpg', 2, 32, ''),
(101, 'Seminar dan Talkshow Literasi Media', 'Belgium', '2017-12-17', 'sfdf', 'http://localhost/eventx4/assets/img/15107253277211.jpg', 2, 37, ''),
(102, 'Seminar dan Talkshow Literasi Media', 'Belgium', '2017-12-17', 'sfdf', 'http://localhost/eventx4/assets/img/15107253277212.jpg', 2, 37, ''),
(103, 'Food Truck Festival', 'Bogor', '2017-12-16', 'food truck festival', 'http://localhost/eventx4/assets/img/1510868889838.jpg', 1, 37, ''),
(104, 'Motorcycle Modification Contest', 'asas', '2017-12-15', 'snkcfsdkcfn', 'http://localhost/eventx4/assets/img/1510868908758.jpg', 1, 37, ''),
(105, 'safad', 'dsfd', '0445-04-23', '<pre>jkewrgfn</pre><h1>esngfrdjogvnfdongiosrfjioregvndfngvoiewrufnodn</h1>', 'http://localhost/eventx4/assets/img/15107253277213.jpg', 1, 37, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `password`, `signup_date`) VALUES
(31, 'igun997', 'indra.gunanda@gmail.com', 'e24f6e3ce19ee0728ff1c443e4ff488d', '2017-12-04'),
(32, 'finlandia', 'finlandia@gmail.com', '1d203002c58b478773f2c9d810ee1c2c', '2017-12-05'),
(33, 'swedia', 'swedia@gmail.com', '310490e5405998ddb4ebd60ffe1054a9', '2017-12-06'),
(34, 'swedia', 'swedia@gmail.com', '310490e5405998ddb4ebd60ffe1054a9', '2017-12-06'),
(35, 'dsfdsf', 'apaaja@gmail.com', 'e83ef9da2046e040c6a7017fd6912e08', '2017-12-06'),
(36, 'dsfdsf', 'apaaja@gmail.com', '862f5d666d52bc4490574cf85bfc6ead', '2017-12-06'),
(37, 'kanada', 'kanada@gmail.com', '2e628d7e1b65d31254fd7705ff7ee64d', '2017-12-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `as` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_3` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
