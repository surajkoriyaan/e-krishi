-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 05:48 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekrishi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aprv_order`
--

CREATE TABLE `aprv_order` (
  `sl_no` int(200) NOT NULL,
  `f_id` int(100) NOT NULL,
  `crop_t` varchar(15) NOT NULL,
  `crop_nm` varchar(20) NOT NULL,
  `sale_price` int(200) NOT NULL,
  `discount` int(2) NOT NULL,
  `w_id` int(100) NOT NULL,
  `w_nm` varchar(30) NOT NULL,
  `del_day` varchar(15) NOT NULL,
  `amount` int(100) NOT NULL,
  `dis_price` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `book_date` date NOT NULL,
  `apr_by_frmr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `sl_no` int(200) NOT NULL,
  `f_id` int(100) NOT NULL,
  `crop_t` varchar(15) NOT NULL,
  `crop_nm` varchar(20) NOT NULL,
  `sale_price` int(200) NOT NULL,
  `discount` int(2) NOT NULL,
  `w_id` int(100) NOT NULL,
  `w_nm` varchar(30) NOT NULL,
  `del_day` varchar(15) NOT NULL,
  `quantity` int(100) NOT NULL,
  `cprice` int(100) NOT NULL,
  `dis_price` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `book_date` date NOT NULL,
  `apr_by_frmr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`sl_no`, `f_id`, `crop_t`, `crop_nm`, `sale_price`, `discount`, `w_id`, `w_nm`, `del_day`, `quantity`, `cprice`, `dis_price`, `total_price`, `book_date`, `apr_by_frmr`) VALUES
(1, 1, 'rabi', 'Wheat', 20, 10, 4, 'Rohan', '1-2 day', 43, 860, 86, 774, '2014-07-14', 'No'),
(2, 4, 'rabi', 'Maize', 28, 10, 4, 'Rohan', '3-4 day', 58, 1624, 162, 1462, '2014-07-14', 'Yes'),
(3, 2, 'rabi', 'onion', 80, 12, 4, 'Rohan', '5-6 day', 54, 4320, 518, 3802, '2014-07-14', 'No'),
(4, 2, 'rabi', 'Potato', 32, 14, 4, 'Rohan', '6-7 day', 80, 2560, 358, 2202, '2014-07-14', 'No'),
(5, 2, 'rabi', 'Wheat', 34, 15, 4, 'Rohan', '3-4 day', 46, 1564, 235, 1329, '2014-07-14', 'No'),
(6, 4, 'rabi', 'onion', 80, 12, 4, 'Rohan', '1-2 day', 42, 3360, 403, 2957, '2014-07-14', 'Yes'),
(7, 3, 'rabi', 'Jowar', 26, 12, 4, 'Rohan', '1-2 day', 80, 2080, 250, 1830, '2014-07-14', 'No'),
(8, 3, 'rabi', 'Jowar', 26, 12, 4, 'Rohan', '1-2 day', 80, 2080, 250, 1830, '2014-07-14', 'No'),
(9, 3, 'rabi', 'Jowar', 26, 12, 4, 'Rohan', '1-2 day', 80, 2080, 250, 1830, '2014-07-14', 'No'),
(10, 3, 'rabi', 'Jowar', 26, 12, 4, 'Rohan', '1-2 day', 80, 2080, 250, 1830, '2014-07-14', 'No'),
(11, 3, 'rabi', 'Jowar', 26, 12, 4, 'Rohan', '1-2 day', 80, 2080, 250, 1830, '2014-07-14', 'No'),
(12, 2, 'rabi', 'onion', 80, 12, 6, 'Rohan', '5-6 day', 65, 5200, 624, 4576, '2015-07-14', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `c_discount`
--

CREATE TABLE `c_discount` (
  `id` int(100) NOT NULL,
  `dis` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_discount`
--

INSERT INTO `c_discount` (`id`, `dis`) VALUES
(1, 10),
(2, 15),
(3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `c_name`
--

CREATE TABLE `c_name` (
  `id` int(10) NOT NULL,
  `c_name1` varchar(20) NOT NULL,
  `c_name2` varchar(20) NOT NULL,
  `c_name3` varchar(20) NOT NULL,
  `c_name4` varchar(20) NOT NULL,
  `c_name5` varchar(20) NOT NULL,
  `c_name6` varchar(20) NOT NULL,
  `c_name7` varchar(20) NOT NULL,
  `c_name8` varchar(20) NOT NULL,
  `c_name9` varchar(20) NOT NULL,
  `c_name10` varchar(20) NOT NULL,
  `c_name11` varchar(20) NOT NULL,
  `c_name12` varchar(20) NOT NULL,
  `c_name13` varchar(20) NOT NULL,
  `c_name14` varchar(20) NOT NULL,
  `c_name15` varchar(15) NOT NULL,
  `c_name16` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_name`
--

INSERT INTO `c_name` (`id`, `c_name1`, `c_name2`, `c_name3`, `c_name4`, `c_name5`, `c_name6`, `c_name7`, `c_name8`, `c_name9`, `c_name10`, `c_name11`, `c_name12`, `c_name13`, `c_name14`, `c_name15`, `c_name16`) VALUES
(1, 'Wheat', 'Maize', 'Paddy', 'Mansur', 'Lucerne ', 'Cumin', 'Coriender', 'Fenugreek', 'Gram', 'Pea', 'Onion', 'Mustard', 'Tomato', 'Potato', 'Oat', 'Isabgol'),
(2, 'Paddy', 'Guar', 'Castor', 'Nagali', 'Hy Cotton', 'Cotton', 'Chilly', 'Jowar', 'Sesamum', 'Soyabean', 'Maize', 'Urid', 'Bajri', 'Arhar', 'Ground Nut', 'Fennel'),
(3, 'bittergourd', 'watermelon', 'turmeric', 'onion', 'garlic', 'chilly', 'mint', 'dhania', 'jeera', 'pepper', 'cucumber', 'muskmelon', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_ac`
--

CREATE TABLE `farmer_ac` (
  `reg_id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `block` varchar(100) NOT NULL,
  `vill` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_ac`
--

INSERT INTO `farmer_ac` (`reg_id`, `name`, `aadhar_no`, `photo`, `ph_no`, `block`, `vill`, `district`, `dob`) VALUES
(1, 'Kanchan Kumari', '200913694271', 'kishan9.jpg', '9308674320', 'Karama Nagar', 'Dhankunda', 'Palamu', '1989-09-06'),
(2, 'Sonali Suman', '349000451178', 'kishan2.jpg', '9835711738', 'Boarijore', 'Hijri', 'Godda', '1987-05-10'),
(3, 'Kavita Sah', '560001212453', 'kishan7.jpg', '9431442389', 'kirlum', 'Hoshiyarpur', 'Giridih', '1987-06-24'),
(4, 'Lalmani Dhan', '658810034824', 'kishan8.jpg', '9334214586', 'Anmiragarh', 'Govinpur', 'Dhanbad', '1978-05-15'),
(5, 'Shanti Visha', '890023874562', 'kishan1.jpg', '8804736508', 'Basant Nagar', 'Hiranpur', 'Pakur', '1972-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_auction`
--

CREATE TABLE `farmer_auction` (
  `sl_no` int(200) NOT NULL,
  `farmer_id` int(100) NOT NULL,
  `farmer_name` varchar(100) NOT NULL,
  `c_type` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `sale_price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_auction`
--

INSERT INTO `farmer_auction` (`sl_no`, `farmer_id`, `farmer_name`, `c_type`, `c_name`, `sale_price`, `quantity`, `discount`, `date`) VALUES
(1, 4, 'Sonali Suman', '1', 'Wheat', 24, 2, 15, '2014-07-14'),
(2, 4, 'Sonali Suman', '2', 'Paddy', 23, 2, 15, '2014-07-14'),
(3, 7, 'Lalmani Dhan', '2', 'Maize', 20, 3, 20, '2014-07-14'),
(4, 5, 'Kavita Sah', '2', 'Paddy', 35, 3, 20, '2014-07-14'),
(5, 4, 'Sonali Suman', '3', 'dhania', 80, 1, 10, '2014-07-14'),
(6, 5, '', '2', 'Arhar', 80, 3, 20, '2015-07-14'),
(7, 5, '', '3', 'jeera', 78, 3, 20, '2015-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `kharif`
--

CREATE TABLE `kharif` (
  `sl_no` int(200) NOT NULL,
  `reg_id` int(100) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `crop_typ` varchar(20) NOT NULL,
  `crop_nm` varchar(30) NOT NULL,
  `quantity` int(100) NOT NULL,
  `sale_price` int(100) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kharif`
--

INSERT INTO `kharif` (`sl_no`, `reg_id`, `aadhar_no`, `crop_typ`, `crop_nm`, `quantity`, `sale_price`, `discount`) VALUES
(1, 5, '560001212453', 'kharif', 'Jowar', 2, 26, 12),
(2, 5, '560001212453', 'kharif', 'Sesamum', 3, 42, 20),
(3, 5, '560001212453', 'kharif', 'Castor', 3, 80, 18),
(4, 7, '658810034824', 'kharif', 'Maize', 3, 28, 10),
(5, 4, '349000451178', 'kharif', 'Guar', 1, 18, 10),
(6, 4, '349000451178', 'kharif', 'Soyabean', 2, 58, 16);

-- --------------------------------------------------------

--
-- Table structure for table `log_in_detail`
--

CREATE TABLE `log_in_detail` (
  `sl_no` int(100) NOT NULL,
  `reg_id` int(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `aadhar_no` varchar(100) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in_detail`
--

INSERT INTO `log_in_detail` (`sl_no`, `reg_id`, `pass`, `aadhar_no`, `login_date`, `login_time`) VALUES
(1, 1, 'd1920287bb', '200913694271', '2014-07-14', '03:58:54'),
(2, 4, '75a3d677ed', '349000451178', '2014-07-14', '04:02:09'),
(3, 2, '01ac0d749c', '300984673892', '2014-07-14', '04:12:42'),
(4, 4, '75a3d677ed', '349000451178', '2014-07-14', '04:15:55'),
(5, 2, '01ac0d749c', '300984673892', '2014-07-14', '04:17:30'),
(6, 5, '940e0af485', '560001212453', '2014-07-14', '04:21:48'),
(7, 2, '01ac0d749c', '300984673892', '2014-07-14', '04:34:04'),
(8, 2, '01ac0d749c', '300984673892', '2014-07-14', '05:00:17'),
(9, 4, '75a3d677ed', '349000451178', '2014-07-14', '06:37:39'),
(10, 5, '940e0af485', '560001212453', '2014-07-14', '07:51:10'),
(11, 6, '5cb3895189', '238445423545', '2014-07-14', '07:52:07'),
(12, 7, 'd6cae55aec', '658810034824', '2014-07-14', '07:57:28'),
(13, 7, 'd6cae55aec', '658810034824', '2014-07-14', '08:00:54'),
(14, 4, '75a3d677ed', '349000451178', '2014-07-14', '08:07:06'),
(15, 4, '75a3d677ed', '349000451178', '2014-07-14', '08:07:40'),
(16, 5, '940e0af485', '560001212453', '2014-07-15', '03:25:08'),
(17, 1, 'd1920287bb', '200913694271', '2014-07-15', '03:54:16'),
(18, 6, '5cb3895189', '238445423545', '2014-07-15', '04:48:00'),
(19, 3, 'e613cc2c05', '668445423128', '2014-07-15', '06:02:31'),
(20, 3, 'e613cc2c05', '668445423128', '2014-07-15', '06:15:43'),
(21, 3, 'e613cc2c05', '668445423128', '2014-07-15', '06:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `log_in_verify`
--

CREATE TABLE `log_in_verify` (
  `reg_id` int(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `type_of_usr` varchar(10) NOT NULL,
  `ac_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in_verify`
--

INSERT INTO `log_in_verify` (`reg_id`, `pass`, `aadhar_no`, `type_of_usr`, `ac_id`) VALUES
(1, 'd1920287bb', '200913694271', '?Farmer?', 1),
(2, '01ac0d749c', '300984673892', '??Buyer??', 1),
(3, 'e613cc2c05', '668445423128', '???User???', 1),
(4, '75a3d677ed', '349000451178', '?Farmer?', 2),
(5, '940e0af485', '560001212453', '?Farmer?', 3),
(6, '5cb3895189', '238445423545', '??Buyer??', 2),
(7, 'd6cae55aec', '658810034824', '?Farmer?', 4),
(8, '723a938957', '890023874562', '?Farmer?', 5);

-- --------------------------------------------------------

--
-- Table structure for table `rabi`
--

CREATE TABLE `rabi` (
  `sl_no` int(100) NOT NULL,
  `reg_id` int(100) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `crop_typ` varchar(20) NOT NULL,
  `crop_nm` varchar(30) NOT NULL,
  `quantity` int(100) NOT NULL,
  `sale_price` int(100) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rabi`
--

INSERT INTO `rabi` (`sl_no`, `reg_id`, `aadhar_no`, `crop_typ`, `crop_nm`, `quantity`, `sale_price`, `discount`) VALUES
(1, 1, '200913694271', 'rabi', 'Wheat', 2, 20, 10),
(2, 4, '349000451178', 'rabi', 'Wheat', 3, 34, 15),
(3, 4, '349000451178', 'rabi', 'Gram', 2, 12, 10),
(4, 4, '349000451178', 'rabi', 'Pea', 2, 45, 12),
(5, 4, '349000451178', 'rabi', 'Potato', 2, 32, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_ac`
--

CREATE TABLE `user_ac` (
  `reg_id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `block` varchar(100) NOT NULL,
  `vill` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ac`
--

INSERT INTO `user_ac` (`reg_id`, `name`, `aadhar_no`, `photo`, `ph_no`, `block`, `vill`, `district`, `dob`) VALUES
(1, 'Ujjwal Kumar', '668445423128', 'kishan4.jpg', '9431662389', 'Karama Nagar', 'East Chainpur', 'Lohardaga', '1994-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler_ac`
--

CREATE TABLE `wholesaler_ac` (
  `reg_id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `block` varchar(100) NOT NULL,
  `vill` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wholesaler_ac`
--

INSERT INTO `wholesaler_ac` (`reg_id`, `name`, `aadhar_no`, `photo`, `ph_no`, `block`, `vill`, `district`, `dob`) VALUES
(1, 'Nayan Deep', '300984673892', 'kishan5.jpg', '9082365432', 'Harihar Road', 'Bariatu', 'Ranchi', '1978-02-02'),
(2, 'Rohan Kumar', '238445423545', 'kishan6.jpg', '9308334320', 'Lalpur', 'Nagra Toli', 'Ranchi', '1984-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `zaid`
--

CREATE TABLE `zaid` (
  `sl_no` int(200) NOT NULL,
  `reg_id` int(100) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `crop_typ` varchar(20) NOT NULL,
  `crop_nm` varchar(30) NOT NULL,
  `quantity` int(100) NOT NULL,
  `sale_price` int(100) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zaid`
--

INSERT INTO `zaid` (`sl_no`, `reg_id`, `aadhar_no`, `crop_typ`, `crop_nm`, `quantity`, `sale_price`, `discount`) VALUES
(1, 5, '560001212453', 'zaid', 'bittergourd', 3, 28, 30),
(2, 7, '658810034824', 'zaid', 'onion', 3, 80, 12),
(3, 4, '349000451178', 'zaid', 'onion', 1, 16, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aprv_order`
--
ALTER TABLE `aprv_order`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `c_discount`
--
ALTER TABLE `c_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_ac`
--
ALTER TABLE `farmer_ac`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`),
  ADD UNIQUE KEY `aadhar_no_2` (`aadhar_no`);

--
-- Indexes for table `farmer_auction`
--
ALTER TABLE `farmer_auction`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `kharif`
--
ALTER TABLE `kharif`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `log_in_detail`
--
ALTER TABLE `log_in_detail`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `log_in_verify`
--
ALTER TABLE `log_in_verify`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`),
  ADD UNIQUE KEY `aadhar_no_2` (`aadhar_no`),
  ADD UNIQUE KEY `aadhar_no_3` (`aadhar_no`);

--
-- Indexes for table `rabi`
--
ALTER TABLE `rabi`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `user_ac`
--
ALTER TABLE `user_ac`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`);

--
-- Indexes for table `wholesaler_ac`
--
ALTER TABLE `wholesaler_ac`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`);

--
-- Indexes for table `zaid`
--
ALTER TABLE `zaid`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprv_order`
--
ALTER TABLE `aprv_order`
  MODIFY `sl_no` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sl_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `c_discount`
--
ALTER TABLE `c_discount`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `farmer_ac`
--
ALTER TABLE `farmer_ac`
  MODIFY `reg_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farmer_auction`
--
ALTER TABLE `farmer_auction`
  MODIFY `sl_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kharif`
--
ALTER TABLE `kharif`
  MODIFY `sl_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_in_detail`
--
ALTER TABLE `log_in_detail`
  MODIFY `sl_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `log_in_verify`
--
ALTER TABLE `log_in_verify`
  MODIFY `reg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rabi`
--
ALTER TABLE `rabi`
  MODIFY `sl_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_ac`
--
ALTER TABLE `user_ac`
  MODIFY `reg_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wholesaler_ac`
--
ALTER TABLE `wholesaler_ac`
  MODIFY `reg_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zaid`
--
ALTER TABLE `zaid`
  MODIFY `sl_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
