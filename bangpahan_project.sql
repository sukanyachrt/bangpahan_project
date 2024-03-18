-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 03:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `customer_telephone`, `c_address`, `c_email`, `c_password`, `customer_username`, `c_status`) VALUES
(1, 'ทดสอบ', 'ทดสอบ', '0123456789', '909 หมู่ที่ 2 ', 'test.ck@gmail.comsss', '123456', 'test', '1'),
(2, 'สุกัญญา', 'ไชยรัตน์', '0987150308', '85', 'sukanya.chrt@gmail.com', '123456', 'customer1', '1'),
(3, 'สุกัญญา', 'ไชยรัตน์', '0987150308', '85', 'sukanya.chrt@gmail.com', '123456', 'customer1', '1'),
(4, 'สุกัญญา', 'ไชยรัตน์', '0987150308', '85', 'sukanya.chrt@gmail.com', '123456', 'customer2', '0'),
(5, 'ปัณ', 'ขำสุข', '0821234567', 'หอพัก', 'wry.2702@gmail.com', '123456', 'pancharat', '1'),
(6, 'sdad', 'dasfadf', '0000000000', 'daadg', 'testt@mail.com', '0000000000', 'testt', '0'),
(7, 'aaaaa', 'bbbbbbb', '0742822100', 'กกกdd', 'test.ck@gmail.com', '123456', 'test.ck', '0'),
(8, 'พีพี', 'พีพี', '0844486753', '123/34 ต.สมพง อ.ตะวันออก จ.สุรนคร 12345', 'test@mail.com', '123456', 'pp', '1'),
(9, 'ส้ม', 'สุ', '0982740981', 'หอ', 'som@gmail.com', '123456', '123456', '1'),
(10, 'ww', 'ww', '0000000000', 'หอพัก', 'tye@gmail.com', '123456', 'ww', '1');

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

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_fname`, `employee_lname`, `employee_username`, `employee_password`, `employee_status`) VALUES
(1, 'admin-1', 'admin-1', 'admin', '123456', '1'),
(2, 'เจ้าของ', 'เจ้าของ-1', 'owner', '123456', '1'),
(3, 'pp', '-pp', 'ppadmin', '123456', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL COMMENT 'รหัสการสั่งซื้อ',
  `customer_id` int(11) NOT NULL COMMENT 'รหัสผู้สั่งซื้อ',
  `order_date` datetime NOT NULL COMMENT 'วันที่สั่งซื้อ',
  `order_status` varchar(1) NOT NULL COMMENT 'สถานะการสั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `order_status`) VALUES
(1, 1, '2024-02-26 21:57:00', '4'),
(2, 1, '2024-02-26 22:02:00', '4'),
(3, 1, '2024-02-26 22:23:00', '4'),
(4, 5, '2024-02-27 15:08:00', '4'),
(5, 5, '2024-02-27 15:33:00', '5'),
(6, 5, '2024-02-27 15:49:00', '5'),
(7, 5, '2024-02-27 15:50:00', '4'),
(8, 1, '2024-02-28 09:41:00', '1'),
(9, 5, '2024-02-28 20:05:00', '4'),
(10, 5, '2024-02-28 20:20:00', '4'),
(11, 8, '2024-02-28 20:39:00', '5'),
(12, 8, '2024-02-28 20:44:00', '4'),
(13, 8, '2024-02-28 20:46:00', '5'),
(14, 9, '2024-02-29 15:12:00', '4'),
(15, 5, '2024-02-29 15:34:00', '4'),
(16, 5, '2024-02-29 15:36:00', '3'),
(17, 5, '2024-02-29 15:42:00', '4'),
(18, 5, '2024-02-29 15:47:00', '1'),
(19, 5, '2024-02-29 15:53:00', '1'),
(20, 5, '2024-03-07 16:00:00', '4'),
(21, 5, '2024-03-07 20:19:00', '4'),
(22, 10, '2024-03-07 21:09:00', '4');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `orderdetail_id` int(11) NOT NULL COMMENT 'รหัสการสั่งซื้อสินค้า',
  `order_id` int(11) NOT NULL COMMENT 'รหัสการสั่งซื้อสินค้า',
  `product_id` int(11) NOT NULL COMMENT 'รหัสสินค้า',
  `order_qty` varchar(10) NOT NULL COMMENT 'จำนวนสินค้า',
  `product_price` varchar(10) NOT NULL COMMENT 'ราคาสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`orderdetail_id`, `order_id`, `product_id`, `order_qty`, `product_price`) VALUES
(1, 1, 2, '2', '80'),
(2, 2, 2, '98', '80'),
(3, 3, 3, '44', '65'),
(4, 4, 5, '33', '46'),
(5, 5, 11, '3', '50'),
(6, 6, 9, '1', '46'),
(7, 7, 8, '1', '53'),
(8, 8, 4, '1', '74'),
(9, 9, 5, '2', '46'),
(10, 10, 5, '1', '46'),
(11, 11, 6, '1', '36'),
(12, 12, 5, '1', '46'),
(13, 13, 5, '1', '46'),
(14, 14, 7, '1', '53'),
(15, 15, 5, '1', '46'),
(16, 16, 5, '1', '46'),
(17, 17, 6, '3', '36'),
(18, 18, 4, '3', '74'),
(19, 19, 7, '3', '53'),
(20, 20, 8, '1', '53'),
(21, 21, 11, '4', '50'),
(22, 22, 7, '1', '53'),
(23, 23, 8, '2', '53'),
(24, 24, 9, '1', '46'),
(25, 25, 4, '1', '74'),
(26, 26, 9, '2', '46'),
(27, 27, 9, '2', '46'),
(28, 28, 6, '2', '36'),
(29, 29, 21, '20', '50'),
(30, 30, 5, '1', '46'),
(31, 31, 18, '1', '540'),
(32, 32, 18, '1', '540'),
(33, 33, 1, '1', '60'),
(34, 34, 2, '1', '80'),
(35, 35, 3, '1', '65'),
(36, 36, 15, '1', '80'),
(37, 37, 16, '1', '60'),
(38, 38, 17, '1', '60'),
(39, 39, 7, '1', '53'),
(40, 40, 18, '1', '540'),
(41, 14, 4, '1', '74'),
(42, 14, 5, '3', '46'),
(43, 14, 6, '2', '36'),
(44, 15, 4, '1', '74'),
(45, 15, 5, '1', '46'),
(46, 16, 5, '1', '46'),
(47, 16, 6, '1', '36'),
(48, 17, 12, '1', '80'),
(49, 17, 13, '1', '55'),
(50, 17, 9, '1', '46'),
(51, 18, 9, '1', '46'),
(52, 19, 20, '1', '27'),
(53, 20, 22, '2', '40'),
(54, 21, 20, '1', '27'),
(55, 22, 4, '1', '74');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL COMMENT 'เลขที่การชำระเงิน',
  `order_id` int(11) NOT NULL COMMENT 'รหัสการสั่งซื้อ',
  `pay_date` date NOT NULL COMMENT 'วันที่ชำระเงิน',
  `pay_total` varchar(20) NOT NULL COMMENT 'ยอดในการชำระ',
  `pay_bank` varchar(100) NOT NULL COMMENT 'ธนาคารที่ชำระ',
  `pay_image` varchar(255) NOT NULL COMMENT 'รูปภาพสลิปในการชำระ',
  `pay_time` time NOT NULL COMMENT 'เวลาที่ทำการชำระ',
  `pay_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `order_id`, `pay_date`, `pay_total`, `pay_bank`, `pay_image`, `pay_time`, `pay_detail`) VALUES
(1, 10026, '2024-02-24', '376.00', 'kbank', '176dbd56-ee12-4965-a9d2-ff4c343b5904.jfif', '21:58:00', ''),
(2, 10027, '2024-02-26', '212', 'kbank', '176dbd56-ee12-4965-a9d2-ff4c343b5904.jfif', '22:02:00', ''),
(3, 10028, '2024-02-26', '253', 'bbl', '176dbd56-ee12-4965-a9d2-ff4c343b5904.jfif', '22:26:00', ''),
(4, 10029, '2024-02-27', '226', 'scb', '429111580_702925185333865_8743884903092698081_n.jpg', '15:08:00', ''),
(5, 10030, '2024-02-27', '92', 'ktb', '429111580_702925185333865_8743884903092698081_n.jpg', '15:33:00', ''),
(6, 10031, '2024-02-27', '92', 'ktb', '429111580_702925185333865_8743884903092698081_n.jpg', '15:49:00', ''),
(7, 10032, '2024-02-27', '72', 'kbank', '429111580_702925185333865_8743884903092698081_n.jpg', '15:50:00', ''),
(8, 10034, '2024-02-28', '540', 'scb', '429111580_702925185333865_8743884903092698081_n.jpg', '20:06:00', ''),
(9, 10035, '2024-02-28', '540', 'ktb', 'shopping.webp', '20:20:00', ''),
(10, 10036, '2024-02-28', '405', 'kbank', 'f2w2gcldh.png', '20:40:00', ''),
(11, 10037, '2024-02-28', '53', 'kbank', '1bmsjwcm.png', '20:44:00', ''),
(12, 10038, '2024-02-28', '540', 'ktb', 'เนยจืด_เนยเค็ม.jpg', '20:46:00', ''),
(13, 14, '2024-02-29', '100000', 'scb', '3A007958-9DA5-469E-BF6E-F4DAE74081F7.png', '15:26:00', ''),
(14, 15, '2024-02-29', '166', 'bbl', 'f2w2gcldh.png', '15:35:00', ''),
(15, 16, '2024-02-29', '128', 'ktb', '429111580_702925185333865_8743884903092698081_n.jpg', '15:36:00', ''),
(16, 17, '2024-02-29', '289', 'kbank', '429111580_702925185333865_8743884903092698081_n.jpg', '15:42:00', ''),
(17, 20, '2024-03-07', '133', 'scb', 'EEgmYqfU0AEoRhw.jpg', '16:01:00', ''),
(18, 21, '2024-03-07', '227', 'bbl', 'ดาวน์โหลด.jpeg', '20:22:00', ''),
(19, 22, '2024-03-07', '127', 'scb', 'ดาวน์โหลด.jpeg', '21:10:00', '');

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
(1, 8, 'ชุดช้อนตวง', 'ชุดช้อนตวงสแตนเลส 4 ชิ้น', '60', '499', '1', 'ชุดช้อนตวง.png'),
(2, 8, 'ตะกร้อมือสแตนเลส M', 'ตะกร้อมือสแตนเลส อย่างหนา ไซส์ M', '80', '19', '0', 'ตะกร้อมือสแตนเลสM.png'),
(3, 8, 'ตะกร้อมือสแตนเลส S', 'ตะกร้อมือสแตนเลส อย่างหนา ไซส์ S', '65', '19', '1', 'ตะกร้อมือสแตนเลสS.png'),
(4, 3, 'T55 French Wheat Flour', 'แป้งอเนกประสงค์ฝรั่งเศส 1kg (แบ่งบรรจุ)', '74', '7', '1', 'T55.png'),
(5, 3, 'แป้งพัดโบก', 'แป้งพัดโบก แป้งเค้ก', '46', '9', '1', 'พัดโบกแป้งเค้ก.png'),
(6, 3, 'แป้งยานอวกาศ แป้งขนมปัง', 'แป้งยานอวกาศ แป้งขนมปัง 1kg', '36', '97', '1', 'ยานอวกาศ.png'),
(7, 3, 'แป้งขนมปัง NS-Venus', 'แป้งขนมปังญี่ปุ่น NS-Venus 1kg (แบ่งบรรจุ)', '53', '99', '1', 'แป้งขนมปัง.png'),
(8, 3, 'แป้งขนมปัง NS-Great', 'แป้งขนมปังญี่ปุ่น NS-Great 1kg (แบ่งบรรจุ)', '53', '70', '1', 'แป้งขนมปังญี่ปุ่น.png'),
(9, 3, 'พัดโบก แป้งเค้ก', 'แป้งพัดโบก แป้งเค้ก', '46', '48', '1', 'แป้งพัดโบก.png'),
(10, 3, 'ระฆังแดง แป้งขนมปัง', 'แป้งขนมปัง ตราระฆังแดง', '38', '56', '1', 'แป้งระฆังแดง.png'),
(11, 3, 'บัวแดง แป้งเค้ก', 'บัวแดง แป้งเค้ก', '50', '39', '1', 'แป้งว่าว.png'),
(12, 8, 'ตะแกรงพักเคลือบเทฟล่อน L', 'ตะแกรงพักเคลือบเทฟล่อน ไซส์ L ', '80', '99', '1', 'ตะแกรงพักเคลือบเทฟล่อนL.png'),
(13, 8, 'ตะแกรงร่อนแป้ง', 'ตะแกรงร่อนแป้งสแตนเลส', '55', '79', '1', 'ตะแกรงร่อนแป้ง.png'),
(14, 8, 'ถ้วยตวงพลาสติก', 'ถ้วยตวงพลาสติก ขนาด 300 ml', '60', '100', '1', 'ถ้วยตวงพลาสติก300ml.png'),
(15, 8, 'ถ้วยตวงพลาสติก', 'ถ้วยตวงพลาสติก ขนาด 600 ml', '80', '19', '1', 'ถ้วยตวงพลาสติก600ml.png'),
(16, 8, 'เซ็ตถ้วยตวง 5 ชิ้น', 'ชุดเซ็ตถ้วยตวงพลาสติก 5 ชิ้น (คละสี)', '60', '14', '1', 'เซ็ตถ้วยตวง.png'),
(17, 8, 'ชุดช้อนตวง', 'ชุดช้อนตวงสแตนเลส 4 ชิ้น', '60', '49', '1', 'ชุดช้อนตวง.png'),
(18, 6, 'Barry Cocoa Powder Plein Arome 1kg', 'ผงโกโก้ Barry Cocoa Powder Arome (Dark Brown#2) 1KG', '540', '97', '1', 'barry dark.png'),
(19, 4, 'เนยเค็ม', 'เนย', '50', '30', '1', 'เนยจืด_เนยเค็ม.jpg'),
(20, 1, 'กลิ่นWinner วินเนอร์ ', 'กลิ่นส้ม 60 ml', '27', '8', '1', 'winnerssom.jpeg'),
(21, 7, 'แองเคอร์ วิปปิ้งครีม 200ML', 'Anchor Whipping Cream ครีมนมแท้ 100%', '100', '12', '1', 'Anchor-Whipping-Cream-200ml.jpg'),
(22, 5, 'นางเงือก ผงวุ้น AA 25G', 'นางเงือก ผงวุ้น AA (ซองเขียว) 25G', '40', '8', '1', 'Mermaid-AA-Green-25g.jpg'),
(23, 5, 'แม็กกาแรต เจลาตินผง 100G', 'McGarrett Gelatin แม็กกาแรต เจลาตินผง 100G', '78', '10', '1', 'McGarrett-Gelatin-200g-1.jpg');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`orderdetail_id`,`order_id`,`product_id`) USING BTREE;

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการสั่งซื้อ', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `orderdetail_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการสั่งซื้อสินค้า', AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'เลขที่การชำระเงิน', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
