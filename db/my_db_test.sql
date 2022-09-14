-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 01:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counter`
--

CREATE TABLE `tbl_counter` (
  `c_id` int(10) NOT NULL,
  `c_ipadr` varchar(50) NOT NULL,
  `c_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_counter`
--

INSERT INTO `tbl_counter` (`c_id`, `c_ipadr`, `c_datesave`) VALUES
(1, '::1', '2022-03-08 23:48:32'),
(2, '::1', '2022-03-08 23:51:13'),
(3, '::1', '2022-03-08 23:59:10'),
(4, '::1', '2022-03-09 00:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_fname` varchar(255) NOT NULL,
  `m_lname` varchar(255) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `m_username` varchar(255) NOT NULL,
  `m_phone` int(15) NOT NULL,
  `m_level` varchar(10) NOT NULL DEFAULT 'MEMBER',
  `m_img` varchar(255) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`m_id`, `m_name`, `m_fname`, `m_lname`, `m_email`, `m_password`, `m_username`, `m_phone`, `m_level`, `m_img`, `datesave`) VALUES
(1, 'MR.', 'sear', 'thor', 'searthor@gmail.com', '202cb962ac59075b964b07152d234b70', 'searthor', 2076208750, 'ADMIN', '49871756720220309_010841.jpg', '2022-01-05 01:39:17'),
(2, 'MR.', 'koob', 'vang', 'koobvang@gmail.com', '202cb962ac59075b964b07152d234b70', 'koobvang', 2022937241, 'MEMBER', '110735863920220110_035250.png', '2022-01-05 01:44:03'),
(3, 'MR.', 'see', 'vang', 'seevang@gmail.com', '202cb962ac59075b964b07152d234b70', 'see', 2022937241, 'MEMBER', '13058183820220127_052536.png', '2022-01-05 05:10:09'),
(4, 'MR.', 'sa', 'ly', 'saly@gmail', '202cb962ac59075b964b07152d234b70', 'saly', 2022937241, 'MEMBER', '198536120220220110_053219.png', '2022-01-10 04:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prd`
--

CREATE TABLE `tbl_prd` (
  `p_id` int(10) NOT NULL,
  `ref_m_id` int(11) NOT NULL,
  `ref_t_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_datesave` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_prd`
--

INSERT INTO `tbl_prd` (`p_id`, `ref_m_id`, `ref_t_id`, `p_name`, `p_detail`, `p_price`, `p_img`, `p_datesave`) VALUES
(3, 1, 7, 'guitar yamaha', 'ddd', 1111, '120556956120220110_101539.png', '2022-01-10 03:16:07'),
(4, 1, 3, 'camera', 'dfdfdfd', 12222, '85158123020220110_094340.jpg', '2022-01-10 02:43:32'),
(5, 1, 3, 'computer ', 'qqqq', 1222, '56858164820220110_093754.png', '2022-01-10 08:37:54'),
(6, 1, 6, 'smartphone', 'smartphone', 1222, '31058249820220110_094436.jpg', '2022-01-10 02:44:56'),
(7, 2, 6, 'smartphone', 'fgfgf', 122222, '171626174220220111_013613.jpg', '2022-01-10 18:36:07'),
(8, 1, 8, 'tavivsion', 'dssss', 3999, '207520031120220113_015749.png', '2022-01-12 19:03:44'),
(9, 1, 8, 'tavivsion', 'ssa', 3999, '15143024320220113_015940.jpg', '2022-01-12 19:03:54'),
(10, 1, 3, 'computer ', 'computer', 1999, '199614595820220113_020005.jpg', '2022-01-13 01:00:05'),
(11, 1, 6, 'smartphone', 'hdfdfsdf', 1222, '174527282820220113_020044.jpg', '2022-01-13 01:00:44'),
(12, 1, 7, 'speaker', 'speaker', 122, '8737210420220113_020128.jpg', '2022-01-13 01:01:28'),
(13, 1, 9, 'camera', 'dddd', 1222, '55422827120220113_020212.jpg', '2022-01-13 01:02:12'),
(14, 1, 10, 'smartwatch', 'sss', 1222, '180795812320220113_020340.jpg', '2022-01-13 01:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prd_type`
--

CREATE TABLE `tbl_prd_type` (
  `t_id` int(10) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_prd_type`
--

INSERT INTO `tbl_prd_type` (`t_id`, `t_name`) VALUES
(3, 'computer'),
(4, 'Guitar'),
(5, 'iphone'),
(6, 'smartphone'),
(7, 'speaker'),
(8, 'TV'),
(9, 'camera'),
(10, 'smartwatch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_prd`
--
ALTER TABLE `tbl_prd`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_prd_type`
--
ALTER TABLE `tbl_prd_type`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_prd`
--
ALTER TABLE `tbl_prd`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_prd_type`
--
ALTER TABLE `tbl_prd_type`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
