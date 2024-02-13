-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 04:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangpahan_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(100) NOT NULL COMMENT 'ชื่อลูกค้า',
  `customer_lname` varchar(100) NOT NULL COMMENT 'นามสกุลลุกค้า',
  `customer_telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `c_address` varchar(255) NOT NULL COMMENT 'ที่อยู่',
  `c_email` varchar(100) NOT NULL COMMENT 'อีเมลที่ลงทะเบียน',
  `c_password` varchar(100) NOT NULL COMMENT 'รหัสผ่าน',
  `customer_username` varchar(100) NOT NULL COMMENT 'username ',
  `c_status` varchar(1) NOT NULL COMMENT 'สถานะลูกค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_fname` varchar(100) NOT NULL COMMENT 'ชื่อพนักงาน',
  `employee_lname` varchar(100) NOT NULL COMMENT 'นามสกุลพนักงาน',
  `employee_username` varchar(100) NOT NULL COMMENT 'username',
  `employee_password` varchar(100) NOT NULL COMMENT 'password',
  `employee_status` varchar(1) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `progroup_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL COMMENT 'ชื่อสินค้า',
  `product_detail` varchar(255) NOT NULL COMMENT 'รายละเอียดสินค้า',
  `product_price` varchar(10) NOT NULL COMMENT 'ราคาสินค้า',
  `product_num` varchar(10) NOT NULL COMMENT 'จำนวนสินค้า',
  `product_status` varchar(1) NOT NULL COMMENT 'สถานะ',
  `product_image` varchar(255) NOT NULL COMMENT 'รูปสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `progroup_id`, `product_name`, `product_detail`, `product_price`, `product_num`, `product_status`, `product_image`) VALUES
(1, 8, 'ชุดช้อนตวง', 'ชุดช้อนตวงสแตนเลส 4 ชิ้น', '60', '50', '1', 'equipment/ชุดช้อนตวง.png'),
(2, 8, 'ตะกร้อมือสแตนเลส M', 'ตะกร้อมือสแตนเลส อย่างหนา ไซส์ M', '80', '20', '1', 'equipment/ตะกร้อมือสแตนเลสM.png'),
(3, 8, 'ตะกร้อมือสแตนเลส S', 'ตะกร้อมือสแตนเลส อย่างหนา ไซส์ S', '65', '20', '1', 'equipment/ตะกร้อมือสแตนเลสS.png'),
(4, 3, 'T55 French Wheat Flour', 'แป้งอเนกประสงค์ฝรั่งเศส 1kg (แบ่งบรรจุ)', '74', '10', '1', 'flour/T55.png'),
(5, 3, 'แป้งพัดโบก', 'แป้งพัดโบก แป้งเค้ก', '46', '15', '1', 'flour/พัดโบกแป้งเค้ก.png'),
(6, 3, 'แป้งยานอวกาศ แป้งขนมปัง', 'แป้งยานอวกาศ แป้งขนมปัง 1kg', '36', '5', '1', 'flour/ยานอวกาศ.png'),
(7, 3, 'แป้งขนมปัง NS-Venus', 'แป้งขนมปังญี่ปุ่น NS-Venus 1kg (แบ่งบรรจุ)', '53', '', '1', 'flour/แป้งขนมปัง.png'),
(8, 3, 'แป้งขนมปัง NS-Great', 'แป้งขนมปังญี่ปุ่น NS-Great 1kg (แบ่งบรรจุ)', '53', '', '1', 'flour/แป้งขนมปังญี่ปุ่น.png'),
(9, 3, 'พัดโบก แป้งเค้ก', 'แป้งพัดโบก แป้งเค้ก', '46', '', '1', 'flour/แป้งพัดโบก.png'),
(10, 3, 'ระฆังแดง แป้งขนมปัง', 'แป้งขนมปัง ตราระฆังแดง', '38', '', '1', 'flour/แป้งระฆังแดง.png'),
(11, 3, 'บัวแดง แป้งเค้ก', 'บัวแดง แป้งเค้ก', '50', '', '1', 'flour/แป้งว่าว.png'),
(12, 8, 'ตะแกรงพักเคลือบเทฟล่อน L', 'ตะแกรงพักเคลือบเทฟล่อน ไซส์ L ', '80', '10', '1', 'equipment/ตะแกรงพักเคลือบเทฟล่อนL.png'),
(13, 8, 'ตะแกรงร่อนแป้ง', 'ตะแกรงร่อนแป้งสแตนเลส', '55', '8', '1', 'equipment/ตะแกรงร่อนแป้ง.png'),
(14, 8, 'ถ้วยตวงพลาสติก', 'ถ้วยตวงพลาสติก ขนาด 300 ml', '60', '7', '1', 'equipment/ถ้วยตวงพลาสติก300ml.png'),
(15, 8, 'ถ้วยตวงพลาสติก', 'ถ้วยตวงพลาสติก ขนาด 600 ml', '80', '2', '1', 'equipment/ถ้วยตวงพลาสติก600ml.png'),
(16, 8, 'เซ็ตถ้วยตวง 5 ชิ้น', 'ชุดเซ็ตถ้วยตวงพลาสติก 5 ชิ้น (คละสี)', '60', '15', '1', 'equipment/เซ็ตถ้วยตวง.png');

-- --------------------------------------------------------

--
-- Table structure for table `productgroup`
--

CREATE TABLE `productgroup` (
  `progroup_id` int(11) NOT NULL COMMENT 'รหัสกลุ่มสินค้า',
  `protype_id` int(11) NOT NULL COMMENT 'ประเภทสินค้า',
  `progroup_name` varchar(255) NOT NULL COMMENT 'ชื่อกลุ่มสินค้า',
  `progroup_image` varchar(255) NOT NULL,
  `progroup_status` varchar(1) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productgroup`
--

INSERT INTO `productgroup` (`progroup_id`, `protype_id`, `progroup_name`, `progroup_image`, `progroup_status`) VALUES
(1, 1, 'กลิ่นและสีผสมอาหาร', 'กลิ่นและสีผสมอาหาร.png', '1'),
(2, 1, 'ช็อคโกแลต', 'ช็อกโกแลต.png', '1'),
(3, 1, 'แป้ง', 'แป้ง.png', '1'),
(4, 1, 'เนย', 'เนย.png', '1'),
(5, 1, 'ผงฟู/ผงวุ้น/เจลาติน', 'ผงฟู.png', '1'),
(6, 1, 'ผงโกโก้', 'ผงโกโก้.png', '1'),
(7, 1, 'วิปปิ้งครีม', 'วิปปิ้งครีม.png', '1'),
(8, 2, 'อุปกรณ์', 'อุปกรณ์.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `protype_id` int(11) NOT NULL,
  `protype_name` varchar(255) NOT NULL COMMENT 'ชื่อประเภทสินค้า',
  `protype_status` varchar(1) NOT NULL COMMENT 'สถานะสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`protype_id`, `protype_name`, `protype_status`) VALUES
(1, 'วัตถุดิบ', '1'),
(2, 'อุปกรณ์', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `productgroup`
--
ALTER TABLE `productgroup`
  ADD PRIMARY KEY (`progroup_id`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`protype_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productgroup`
--
ALTER TABLE `productgroup`
  MODIFY `progroup_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกลุ่มสินค้า', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `protype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
