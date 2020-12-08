-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 03:52 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lion1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `about_name` varchar(100) NOT NULL,
  `about_name1` varchar(100) NOT NULL,
  `about_detail` text NOT NULL,
  `about_detail1` text NOT NULL,
  `about_photo` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_name`, `about_name1`, `about_detail`, `about_detail1`, `about_photo`, `status`) VALUES
(2, 'Who We Are', 'Why Choose Us?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about1`
--

CREATE TABLE `about1` (
  `id` int(10) NOT NULL,
  `about1_name` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about1`
--

INSERT INTO `about1` (`id`, `about1_name`, `status`) VALUES
(1, 'Years of Experience', 1),
(2, 'Fully Insured', 1),
(3, 'Cost Control Experts', 1),
(4, '100% Satisfaction Guarantee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `banner_name` varchar(100) NOT NULL,
  `banner_detail` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_detail`, `status`) VALUES
(2, 'Home Construction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner1`
--

CREATE TABLE `banner1` (
  `id` int(10) NOT NULL,
  `banner_name1` varchar(100) NOT NULL,
  `banner_name2` varchar(100) NOT NULL,
  `banner_name3` varchar(100) NOT NULL,
  `banner_detail1` varchar(100) NOT NULL,
  `banner_detail2` varchar(100) NOT NULL,
  `banner_detail3` varchar(100) NOT NULL,
  `banner_detail4` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner1`
--

INSERT INTO `banner1` (`id`, `banner_name1`, `banner_name2`, `banner_name3`, `banner_detail1`, `banner_detail2`, `banner_detail3`, `banner_detail4`, `status`) VALUES
(1, 'Home Construction', '& Remodeling', 'Cost for your home renovation project', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed c', 'LEARN MORE', 'Get started today and complete our form to request your free estimate', 'FREE ESTIMATE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_detail` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `contact_detail`, `status`) VALUES
(1, 'Get In Touch', 'Please fill out the form below to send us an email and we will get back to you as soon as possible.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact1`
--

CREATE TABLE `contact1` (
  `id` int(10) NOT NULL,
  `contact1_name` varchar(100) NOT NULL,
  `contact1_detail1` text NOT NULL,
  `contact1_detail2` text NOT NULL,
  `contact1_detail3` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact1`
--

INSERT INTO `contact1` (`id`, `contact1_name`, `contact1_detail1`, `contact1_detail2`, `contact1_detail3`, `status`) VALUES
(2, 'Contact Info', 'Address', '4321 California St,', 'San Francisco, CA 12345', 1),
(3, '', 'Phone', '+1 123 456 1234', '', 1),
(4, '', 'Email', 'info@company.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(10) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_message` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `guest_name`, `guest_email`, `guest_message`, `status`) VALUES
(3, 'sdsadas', 'fsdfff@fgfdg', 'gdfgdfg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_detail` text NOT NULL,
  `service_photo` varchar(100) NOT NULL DEFAULT 'service_default_photo.jpg',
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_detail`, `service_photo`, `status`) VALUES
(78, 'New Home Construction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '78.jpg', 1),
(79, 'Home Additions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '79.jpg', 1),
(80, 'Bathroom Remodels', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '80.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services1`
--

CREATE TABLE `services1` (
  `id` int(10) NOT NULL,
  `service_name1` varchar(100) NOT NULL,
  `service_detail1` text NOT NULL,
  `service_photo1` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services1`
--

INSERT INTO `services1` (`id`, `service_name1`, `service_detail1`, `service_photo1`, `status`) VALUES
(1, 'Kitchen Remodels', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '1.jpg', 1),
(2, 'Windows & Doors', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '2.jpg', 1),
(3, 'Decks & Porches', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) NOT NULL,
  `social_icon` varchar(100) NOT NULL,
  `social_link` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_icon`, `social_link`, `status`) VALUES
(1, 'fa fa-facebook', 'https://www.facebook.com/', 1),
(2, 'fa fa-twitter', 'https://twitter.com/', 1),
(3, 'fa fa-google-plus', 'https://plus.google.com', 1),
(4, 'fa fa-youtube', 'https://www.youtube.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) NOT NULL,
  `testimonials_name` varchar(100) NOT NULL,
  `testimonials_detail` text NOT NULL,
  `testimonials_photo` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonials_name`, `testimonials_detail`, `testimonials_photo`, `status`) VALUES
(4, '- John Doe ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.\"', '4.jpg', 1),
(6, '- Johnathan Doe ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis.\"', '6.jpg', 1),
(7, '- John Doe', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.\"', '7.jpg', 1),
(8, '- Johnathan Doe ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.\"', '8.jpg', 1),
(9, '- John Doe ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.\"', '9.jpg', 1),
(10, '- Johnathan Doe', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis.\"', '10.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` varchar(100) NOT NULL DEFAULT 'default_profile_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `name`, `email`, `password`, `profile_photo`) VALUES
(3, 'sal', 'sal@gmail.com', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(4, 'syed', 'syed@gmail.com', '202cb962ac59075b964b07152d234b70', '20.jpg'),
(5, 'ism', 'ism@dd', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(6, '', 'sa@dd', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(7, '', 'aa@ww', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(8, '', 'gg@ww', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(9, '', 'fff@ww', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(10, 'fdfdsf', 'fff@ww', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(11, 'sdfsdfdfdsf', 'dsffff@ww', '202cb962ac59075b964b07152d234b70', 'default_profile_photo.jpg'),
(12, 'ASAS', 'sdfsdf@fgfdg', 'ae6e334f62fb5d989398deed87568c94', 'default_profile_photo.jpg'),
(13, 'fgfdffg', 'fggf@gffg', '202cb962ac59075b964b07152d234b70', '13.jpeg'),
(15, 'Nirvana', 'nir@gmail.com', '202cb962ac59075b964b07152d234b70', '15.jpeg'),
(16, 'sdsa', 'sda@sdsd', 'd81f9c1be2e08964bf9f24b15f0e4900', '16.jpg'),
(17, 'fdsfsdf', 'dfsadf@dsad', 'f2fc990265c712c49d51a18a32b39f0c', '17.jpg'),
(18, 'mmm', 'mmm@gmail.com', '202cb962ac59075b964b07152d234b70', '18.PNG'),
(19, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'default_profile_photo.jpg'),
(20, 'mmm', 'mmm@gmail.com', '202cb962ac59075b964b07152d234b70', '20.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about1`
--
ALTER TABLE `about1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner1`
--
ALTER TABLE `banner1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact1`
--
ALTER TABLE `contact1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services1`
--
ALTER TABLE `services1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about1`
--
ALTER TABLE `about1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner1`
--
ALTER TABLE `banner1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact1`
--
ALTER TABLE `contact1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `services1`
--
ALTER TABLE `services1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
