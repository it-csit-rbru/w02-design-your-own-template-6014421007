-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2019 at 02:16 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `php-pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(10) NOT NULL,
  `image` text NOT NULL,
  `users_id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `data_time` datetime NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `users_id`, `name`, `price`, `category_id`, `data_time`, `content`) VALUES
(1, 'images/upload/product.png', '1', 'test1', 1000, 'cat001', '2019-01-18 00:00:00', 'text text <br>\r\nภาษาไทย');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `time_register` date NOT NULL,
  `time_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `time_register`, `time_login`, `status`) VALUES
(1, 'admin@admin.com', '$2y$10$4JDTHCEE6Jqi.RVTD9M9lOFcf94iiOhMLmsQSsLPhDEmiAs.L/7zm', 'nice', 'Test Name', '2019-01-17', '2019-01-17 12:57:20', 'S99'),
(2, 'devnice.n@gmail.com', '$2y$10$Qny9zHkYB1tfqod3YIWruu3AU5fWzOrBwLWsLc3yPEJwj/D6DkKnm', 'nice', 'nice', '2019-01-17', '2019-01-17 14:04:12', 'm11'),
(3, 'audhchh21@gmail.com', '$2y$10$YncAaYou7M5GRzqwiDwr1OPW31.YkciPn1lRTiqStMcyO4Y34Ow0i', 'audhchh21', 'nice', '2019-01-21', '2019-01-21 12:39:10', 'm11'),
(4, 'usdjpy@gmail.com', '$2y$10$sm71KXCKIInflOHoDF0Ir.vgoYmqUSbOfJ8aX8WwX68hT5Ef4Li/6', 'usd', 'jpy', '2019-01-21', '2019-01-21 12:42:30', 'm11');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `id` bigint(10) NOT NULL,
  `user_id` bigint(10) NOT NULL,
  `image` text NOT NULL,
  `paypal` text NOT NULL,
  `money` int(20) NOT NULL,
  `facebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `user_id`, `image`, `paypal`, `money`, `facebook`) VALUES
(1, 1, 'images/def_image_user.png', '', 0, ''),
(2, 2, 'images/def_image_user.png', '', 0, ''),
(3, 3, 'images/def_image_user.png', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
