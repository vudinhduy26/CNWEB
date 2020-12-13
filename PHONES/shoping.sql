-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 10:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(50) UNSIGNED NOT NULL,
  `id_customer` int(50) UNSIGNED DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL,
  `payment` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`, `id_user`) VALUES
(7, 8, '2020-11-05', 28000000, 'ATM', 'z', '2020-11-05 11:01:18', '2020-11-05 11:01:18', NULL),
(9, NULL, '2020-11-27', 2800000, 'PAY', 'OK', '2020-11-25 17:18:10', '2020-11-26 17:18:35', 3),
(10, NULL, '2020-11-28', 28000000, 'ATM', 'Z', '2020-11-26 18:01:44', '2020-11-26 18:02:23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(50) UNSIGNED NOT NULL,
  `id_bill` int(50) UNSIGNED DEFAULT NULL,
  `id_product` int(50) UNSIGNED DEFAULT NULL,
  `quantily` int(50) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantily`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 7, 3, 1, 28000000, '2020-11-05 11:01:19', '2020-11-05 11:01:19'),
(3, 9, 6, 1, 7900000, '2020-12-27 15:39:00', '2020-12-03 15:39:23'),
(4, 10, 3, 1, 15000000, '2020-12-28 15:40:05', '2020-12-03 15:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) UNSIGNED NOT NULL,
  `id_user` int(50) UNSIGNED DEFAULT NULL,
  `id_product` int(50) UNSIGNED DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_product`, `content`, `created_at`, `updated_at`, `id_admin`) VALUES
(1, 1, 3, 'OK BAN', '2020-11-11 18:34:38', '2020-11-11 18:34:38', NULL),
(2, 3, 2, 'OK', '2020-11-25 18:13:05', '2020-11-25 18:13:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`, `id_user`) VALUES
(8, 'vu duy', 'nam', 'pikaduy26@gmail.com', 'Ha Noi', '+84368817999', 'z', '2020-11-05 11:01:18', '2020-11-05 11:01:18', NULL),
(9, 'vu hong', 'nu', 'pikaduy@gmail.com', 'hcm', '0368817998', 'ok', '2020-11-25 17:35:07', '2020-11-25 17:36:04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(50) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `new` int(11) DEFAULT NULL,
  `sl_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `created_at`, `updated_at`, `new`, `sl_product`) VALUES
(2, 'Oppo F11 Pro', 1, 'Yes', 11000000, 10000000, 'oppo-f11-pro-didongviet_1_1.jpg', 'ok', '2020-11-02 15:56:19', '2020-11-02 15:56:19', NULL, NULL),
(3, 'iPhone 12 Pro Max 512GB', 2, 'iPhone 12 Pro Max 512GB chính hãng (VN/A) là phiên bản lớn nhất với màn hình rộng 6.7 inch, đi cùng công nghệ màn hình Super Retina XDR OLED. Máy sở hữu hiệu nưng vượt trội với chip A14 Bionic, bộ nhớ khủng 512GB. Camera iPhone 12 Pro Max siêu đỉnh với bộ 3 camera 12MP', 28000000, 0, 'iphone-12-pro-256gb.jpg', 'OK', '2020-10-29 16:52:51', '2020-10-29 16:52:51', 1, NULL),
(4, 'Redmi Note 8 (6GB|64GB)\r\n', 4, 'Redmi Note 8 (6GB|64GB)\r\n', 13000000, 0, 'redmino8.jpg', 'OK', '2020-10-29 16:54:50', '2020-10-29 16:54:50', 1, NULL),
(5, 'Samsung Galaxy Note 10 Plus (12GB|256GB)', 3, 'Samsung Galaxy Note 10 Plus 256GB BHĐT được bán tại Di Động Việt là máy nguyên seal hộp chưa khui, được bảo hành 12 tháng tại các trung tâm bảo hành chính hãng và hưởng đầy đủ các đặc quyền theo chính sách Samsung tại Việt Nam đồng thời nhận nhiều ưu đãi hấp dẫn tại Di Động Việt.', 10000000, 9000000, 'samsung-galaxy-note-10-cu-didongviet.jpg', 'OK', '2020-10-29 16:56:48', '2020-10-29 16:56:48', 1, NULL),
(6, 'iPhone Xs Max 256GB', 2, 'Điện thoại iPhone Xs Max 256GB có ngoại hình mới đẹp. Điện thoại có màn hình Super AMOLED rộng 6.5 inches, iOS 12 cùng chipset A12 Bionic mạnh mẽ, cho trải nghiệm ổn định.', 15000000, 13000000, 'iphone-xs-max-didongviet_15.jpg', 'dt', '2020-10-30 11:01:55', '2020-10-30 11:01:55', 1, NULL),
(7, 'Xiaomi Redmi Note 7', 4, 'Thương hiệu: Xiaomi\r\nThể loại: Điện thoại di động\r\nBộ xử lý: Qualcomm SDM660 Snapdragon 660 Octa-core (4x2,2 GHz Kryo 260 + 4x1,8 GHz Kryo 260)\r\nRAM: 3 GB, 4 GB, 6 GB\r\nBộ nhớ: 32 GB, 64 GB, 128 GB\r\nMàn hình: 6,3 inch\r\nMáy ảnh: 48 MP (rộng) + cảm biến độ sâu 5 MP hoặc cảm biến độ sâu 12 MP (rộng) + 2 MP\r\nPin: Pin Li-Po 4000 mAh không thể tháo rời + Sạc nhanh 18W (Sạc nhanh 4)\r\nXẾP HẠNG CỦA CHÚNG TÔI\r\nĐánh giá tổng thể dựa trên đánh giá của các biên tập viên của chúng tôi\r\n\r\n7.8\r\nThiết kế8/10\r\nHiển thị7 / 10\r\nCamera8/10\r\nTính năng8/10\r\nKết nối7 / 10\r\nKhả năng sử dụng9/10\r\nHiệu suất7 / 10\r\nPin8/10\r\nXiaomi Redmi Note 7 được trang bị bộ vi xử lý Qualcomm SDM660 Snapdragon 660 Octa-core (4 × 2,2 GHz Kryo 260 + 4 × 1,8 GHz Kryo 260). Điện thoại thông minh đi kèm với màn hình cảm ứng điện dung IPS LCD 6,3 inch và độ phân giải 1080 x 2340 pixel. Màn hình của thiết bị được bảo vệ bởi Corning Gorilla Glass 5.\r\nCamera sau bao gồm cảm biến độ sâu 48 MP (rộng) + 5 MP hoặc ống kính cảm biến độ sâu 12 MP (rộng) + 2 MP.\r\nCamera trước có cảm biến 13 MP. Các cảm biến của điện thoại bao gồm Vân tay (gắn phía sau), gia tốc kế, con quay hồi chuyển, độ gần và la bàn.\r\nXiaomi Redmi Note 7 có các màu khác nhau như Xanh lam, Đen, Vàng Chạng vạng và Trắng. Nó có tính năng 2.0, đầu nối có thể đảo ngược Type-C 1.0.', 9000000, 8000000, 'Redmi-Note-7.jpg', 'dt', '2020-10-30 11:01:55', '2020-10-30 11:01:55', 0, NULL),
(8, 'Oppo A9', 1, '<ol><li><strong>Pin 5000mAh</strong></li><li><strong>Camera Siêu Góc Rộng 48MP</strong></li></ol>', 6990000, 4890000, 'vo6h_637185093476652805_oppo-a9-tim-1.png', 'ok', '2020-11-07 18:01:22', '2020-11-07 18:01:22', 1, 10),
(9, 'Oppo A92', 1, '<h4><strong>OPPO A92 Chính hãng</strong></h4>', 6490000, 5850000, 'mHes_oppo-a92-den-hai-phong_61a3f27cf1994280a3b787a4e14525f9_grande.jpg', 'ok', '2020-11-30 15:28:11', '2020-11-30 15:28:11', 0, 10),
(10, 'iPhone 8 Plus 64GB', 2, '<h2>iPhone 8 Plus 64GB</h2><p>&nbsp;</p>', 7990000, 6650000, 'E7hw_iphone-8-plus-den-600x600-400x400.jpg', 'ok', '2020-11-30 15:31:38', '2020-11-30 15:31:38', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE `shipper` (
  `id` int(50) UNSIGNED NOT NULL,
  `id_bill` int(50) UNSIGNED DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(50) UNSIGNED NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(2, NULL, 'Xiaomi.jpg'),
(3, NULL, 'iPhone12.jpg'),
(4, NULL, 'OPPO.jpg'),
(5, NULL, 'unnamed.png');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(50) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'OPPO', 'NO no no no', NULL, '2020-10-29 16:49:30', '2020-10-29 16:49:30'),
(2, 'IPHONE', 'a', NULL, '2020-10-29 16:50:08', '2020-10-29 16:50:08'),
(3, 'SAMSUNG', 'b', NULL, '2020-10-29 16:50:08', '2020-10-29 16:50:08'),
(4, 'XIAOMI', 'c', NULL, '2020-10-29 16:50:28', '2020-10-29 16:50:28'),
(6, 'WHO', '<p><strong>WHOo</strong></p>', NULL, '2020-11-07 17:54:51', '2020-11-07 17:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMND` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `gender`, `CMND`, `address`, `phone_number`, `permission`, `image`) VALUES
(1, 'vu duy', 'pikaduy26@gmail.com', '$2y$10$rw7dlHqKudSeEiPPGTHDdezt2nWF9fjvClq4.a0lQj697aDBguWk2', 'IfUj7eEDZ4QS7Rq2uwt59BTzNzQdB9wbzEW9t9s6zagLsUzLS0LtV5UHmsfQ', '2020-11-04 17:29:11', '2020-11-04 17:29:11', 'nam', '012345678191', 'Ha Noi', '+84368817999', 1, 'https://assets.entrepreneur.com/content/3x2/2000/20151221204701-chase-money.jpeg?width=700&crop=2:1'),
(3, 'vu hong', 'pikaduy@gmail.com', '$2y$10$YFtOvAPcdj2rzHocHmLufeAmGJ9nTH833KBnsx.n4jcOF6VPtcniu', NULL, '2020-11-18 14:22:25', '2020-11-18 14:22:25', 'nam', '012345678190', 'Ha Noi', '+84368817998', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shipper`
--
ALTER TABLE `shipper`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `comment_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);

--
-- Constraints for table `shipper`
--
ALTER TABLE `shipper`
  ADD CONSTRAINT `shipper_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
