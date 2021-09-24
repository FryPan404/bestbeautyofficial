-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 03:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_bestbeautyofficial`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`) VALUES
(1, 'Superadmin'),
(3, 'Owner'),
(5, 'Sub Owner'),
(7, 'Distributor'),
(9, 'Agen'),
(11, 'Reseller'),
(13, 'Member'),
(15, 'End User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL DEFAULT '',
  `address` varchar(400) NOT NULL DEFAULT '',
  `sub_district` varchar(128) NOT NULL DEFAULT '',
  `district` varchar(128) NOT NULL DEFAULT '',
  `province` varchar(128) NOT NULL DEFAULT '',
  `country` varchar(128) NOT NULL DEFAULT 'Indonesia',
  `country_id` varchar(128) NOT NULL DEFAULT 'ID',
  `phone` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `facebook` varchar(300) NOT NULL DEFAULT '',
  `instagram` varchar(300) NOT NULL DEFAULT '',
  `bio` varchar(400) NOT NULL DEFAULT '',
  `id_number` varchar(128) NOT NULL DEFAULT '',
  `role_id` int(11) NOT NULL DEFAULT 0,
  `upline_id` int(11) NOT NULL DEFAULT 0,
  `image` varchar(128) NOT NULL DEFAULT 'default.png',
  `password` varchar(300) NOT NULL DEFAULT '',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `login_attempt` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`id`, `name`, `address`, `sub_district`, `district`, `province`, `country`, `country_id`, `phone`, `email`, `facebook`, `instagram`, `bio`, `id_number`, `role_id`, `upline_id`, `image`, `password`, `created_by`, `is_active`, `login_attempt`) VALUES
(1, 'Narko Mekanik', 'Dsn. Bancang Ds. Tahulu Kec. Merakurak - Tuban', 'Merakurak', 'Tuban', 'Jawa Timur', 'Indonesia', 'ID', '081231431212', 'tubanweb1@gmail.com', '', '', '', '123456', 1, 0, 'default.png', '$2y$05$2BabS4Kd6hjKZtEyu/VzPeXdS2TKckeSk6o3kXjkfZKo1RF1ilFpm', 0, 1, 5),
(2, 'asd', 'asd', 'HI', 'HI', 'HI', 'HI', 'ID', 'asd', 'narko@gmail.com', '', '', '', '2', 0, 1, 'default.png', '', 1, 1, 5),
(3, 'Narko', 'd', 'AK', 'AK', 'AK', 'HI', 'ID', '081231431212', 'santomobancang@gmail.com', '', '', '', '000003', 0, 1, 'default.png', '', 1, 1, 5),
(4, 'Narko', 'sdfdsf', 'HI', 'AK', 'AK', 'AK', 'ID', 'asd', 'santomobancang@gmail.com', '', '', '', '000004', 0, 1, 'default.png', '', 1, 1, 5),
(5, 'Narko', 'asddas', 'HI', 'HI', 'HI', 'AK', 'ID', 'asd', 'santomobancang@gmail.com', '', '', '', '000005', 0, 1, 'default.png', '', 1, 1, 5),
(6, 'Narko', 'sdf', 'HI', 'AK', 'AK', 'AK', 'ID', 'asd', 'santomobancang@gmail.com', '', '', '', '000006', 0, 1, 'default.png', '', 1, 1, 5),
(7, 'Supervisor 1', 'adf', 'HI', 'AK', 'AK', 'HI', 'ID', '081231431212', 'santomobancang@gmail.com', '', '', '', '000007', 0, 1, 'default.png', '', 1, 1, 5),
(8, 'Narko', 'asdad', 'AK', 'AK', 'HI', 'HI', 'ID', 'asd', 'santomobancang@gmail.com', '', '', '', '000008', 0, 1, 'default.png', '', 1, 1, 5),
(9, 'Narko', 'asd', 'HI', 'HI', 'HI', 'HI', 'ID', '081231431212', 'santomobancang@gmail.com', '', '', '', '0009', 0, 1, 'default.png', '', 1, 1, 5),
(10, 'Narko', 'd', 'HI', 'HI', 'AK', 'HI', 'ID', '081231431212', 'santomobancang@gmail.com', '', '', '', '000009', 0, 1, 'default.png', '', 1, 1, 5),
(11, 'asd', 'asd', 'HI', 'HI', 'HI', 'HI', 'ID', '081231431212', 'santomobancang@gmail.com', '', '', '', '000010', 0, 1, 'default.png', '', 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL DEFAULT '',
  `raja_ongkir_api_key` varchar(300) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `name`, `raja_ongkir_api_key`) VALUES
(1, 'Best Beauty Official', '1cb6ca038ddb281f174dbc4264474df0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
