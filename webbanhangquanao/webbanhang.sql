-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 02:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'gunny123');

-- --------------------------------------------------------

--
-- Table structure for table `anh`
--

CREATE TABLE `anh` (
  `id` int(11) NOT NULL,
  `Img` varchar(400) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anh`
--

INSERT INTO `anh` (`id`, `Img`) VALUES
(1, 'https://360boutique.vn/wp-content/uploads/2019/11/Ảnh-bìa-web-16.06.2020-01.jpg'),
(2, 'https://360boutique.vn/wp-content/uploads/2019/11/Ảnh-bìa-web-kids-16.06.2020-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `Tensanpham` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Tennguoimua` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Sodt` int(11) DEFAULT NULL,
  `Diachi` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `Tensanpham`, `Soluong`, `Tennguoimua`, `Sodt`, `Diachi`) VALUES
(20, 'ASM-KD 03', 2, 'Duy', 368817989, 'ND'),
(21, 'QUẦN BÉ GÁI QDG19301', 2, 'Duy', 368817989, 'ND'),
(22, 'ÁO NỈ BÉ TRAI ANT393004', 2, 'Duy', 368817989, 'ND');

-- --------------------------------------------------------

--
-- Table structure for table `kichthuockids`
--

CREATE TABLE `kichthuockids` (
  `Idsanphamkid` int(11) DEFAULT NULL,
  `Kichthuocsanpham` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kichthuockids`
--

INSERT INTO `kichthuockids` (`Idsanphamkid`, `Kichthuocsanpham`) VALUES
(1, '5'),
(1, '6'),
(1, '7'),
(1, '8'),
(1, '9'),
(1, '10'),
(2, '8'),
(2, '9'),
(2, '10'),
(2, '11'),
(2, '12'),
(2, '13'),
(3, '10'),
(3, '11'),
(3, '12'),
(3, '13'),
(3, '14'),
(3, '15');

-- --------------------------------------------------------

--
-- Table structure for table `kichthuocnam`
--

CREATE TABLE `kichthuocnam` (
  `Idsanphamnam` int(11) DEFAULT NULL,
  `Kichthuocsanpham` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kichthuocnam`
--

INSERT INTO `kichthuocnam` (`Idsanphamnam`, `Kichthuocsanpham`) VALUES
(1, '34'),
(1, 'XL'),
(1, '30'),
(1, '31'),
(2, '34'),
(2, '31'),
(2, '28'),
(2, '29'),
(3, '28'),
(3, '29');

-- --------------------------------------------------------

--
-- Table structure for table `mausackids`
--

CREATE TABLE `mausackids` (
  `Idsanphamkid` int(11) DEFAULT NULL,
  `Mausacsanpham` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mausackids`
--

INSERT INTO `mausackids` (`Idsanphamkid`, `Mausacsanpham`) VALUES
(1, 'den'),
(1, 'hong'),
(1, 'xanh'),
(1, 'nau'),
(2, 'den'),
(2, 'do'),
(2, 'hong'),
(3, 'trang'),
(3, 'do'),
(3, 'den');

-- --------------------------------------------------------

--
-- Table structure for table `mausacnam`
--

CREATE TABLE `mausacnam` (
  `Idsanphamnam` int(11) DEFAULT NULL,
  `Mausacsanpham` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mausacnam`
--

INSERT INTO `mausacnam` (`Idsanphamnam`, `Mausacsanpham`) VALUES
(1, 'den'),
(1, 'do'),
(1, 'vang'),
(1, 'cam'),
(2, 'den'),
(2, 'nau'),
(2, 'xanh'),
(2, 'do'),
(3, 'trang'),
(3, 'do'),
(3, 'den'),
(3, 'xanh');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamkids`
--

CREATE TABLE `sanphamkids` (
  `Idsanphamkid` int(11) NOT NULL,
  `Tensanphamkids` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Img1` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Img2` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Tieude` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Noidung` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Giasanphamkids` int(11) DEFAULT NULL,
  `loaisanphamkids` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinhkids` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `sale` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanphamkids`
--

INSERT INTO `sanphamkids` (`Idsanphamkid`, `Tensanphamkids`, `Img1`, `Img2`, `Tieude`, `Noidung`, `Giasanphamkids`, `loaisanphamkids`, `gioitinhkids`, `sale`) VALUES
(1, 'QUẦN BÉ GÁI QDG19301', 'https://360boutique.vn/wp-content/uploads/2019/11/QDG19301-480x635.jpg', 'https://360boutique.vn/wp-content/uploads/2019/11/QDG19301-480x635.jpg', 'QUẦN BÉ GÁI QDG19301', '– Chất liệu: cao cấp\r\n– Màu sắc: nâu\r\n– Size: 90 – 100 – 110 – 120 – 130 – 140\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 230000, 'vay', 'benu', NULL),
(2, 'QUẦN BÉ GÁI QDG19031', 'https://360boutique.vn/wp-content/uploads/2019/11/QDG19031-1-480x635.jpg', 'https://360boutique.vn/wp-content/uploads/2019/11/QDG19031-2-480x635.jpg', 'QUẦN BÉ GÁI QDG19031', '– Chất liệu: cao cấp\r\n– Màu sắc: Hồng\r\n– Size: 90 – 100 – 110 – 120 – 130 – 140\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 250000, 'vay', 'benu', NULL),
(3, 'ÁO NỈ BÉ TRAI ANT393004', 'https://360boutique.vn/wp-content/uploads/2019/11/ANT393004-1-480x635.jpg', 'https://360boutique.vn/wp-content/uploads/2019/11/ANT393004-2-480x635.jpg', 'ÁO NỈ BÉ TRAI ANT393004', '– Vải cao cấp, khả năng thấm hút mồ hôi cực tốt\r\n– Màu sắc: nâu\r\n– size: 90 – 100 – 110 – 120 – 130 – 140\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 230000, 'aoni', 'benam', NULL),
(6, 'ÁO NỈ BÉ TRAI ANT8230', 'http://localhost/TT/webbanhangquanao/login/doashboard/uploads/ANT8230-1-480x635-20200728-013703.jpg', 'http://localhost/TT/webbanhangquanao/login/doashboard/uploads/ANT8230-2-480x635-20200728-013703.jpg', 'ÁO NỈ BÉ TRAI ANT8230', 'ÁO NỈ BÉ TRAI ANT8230', 320000, 'aoni', NULL, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamnam`
--

CREATE TABLE `sanphamnam` (
  `Idsanphamnam` int(11) NOT NULL,
  `Tensanphamnam` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Img1` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Img2` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Tieude` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Noidung` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `Giasanphamnam` int(11) DEFAULT NULL,
  `loaisanphamnam` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanphamnam`
--

INSERT INTO `sanphamnam` (`Idsanphamnam`, `Tensanphamnam`, `Img1`, `Img2`, `Tieude`, `Noidung`, `Giasanphamnam`, `loaisanphamnam`, `sale`) VALUES
(1, 'ÁO SƠ MI NAM SMNTK123', 'https://360boutique.vn/wp-content/uploads/2020/07/DSC_9671-480x635.jpg', 'https://360boutique.vn/wp-content/uploads/2020/07/DSC_9671-480x635.jpg', 'ÁO SƠ MI NAM SMNTK123', '– Vải cao cấp, khả năng thấm hút mồ hôi cực tốt\r\n– Màu sắc: xanh navy\r\n– Có đầy đủ các size: M – L – XL – XXL\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống', 99000, 'ao', NULL),
(2, 'QUẦN SHORT NAM QSVTK002', 'https://360boutique.vn/wp-content/uploads/2020/07/DSC_9200-480x635.jpg', 'https://360boutique.vn/wp-content/uploads/2020/07/DSC_9199-480x635.jpg', 'QUẦN SHORT NAM QSVTK002', '– Chất liệu: Vải cao cấp\r\n– Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n– Màu sắc:  xanh da trời, be\r\n– Kiểu dáng: Ống Suông\r\n– Size: 29 – 32', 99000, 'quan', 'ok'),
(3, 'ÁO SƠ MI NAM SMNTK016', 'https://360boutique.vn/wp-content/uploads/2020/07/SMNTK016-1-480x635.jpg', 'https://360boutique.vn/wp-content/uploads/2020/07/SMNTK016-1-480x635.jpg', 'ÁO SƠ MI NAM SMNTK016', '– Vải cao cấp, khả năng thấm hút mồ hôi cực tốt\r\n– Màu sắc: xanh lá\r\n– Có đầy đủ các size: M – L – XL – XXL\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống', 250000, 'ao', NULL),
(32, 'ASM-KD 03', 'http://localhost/TT/webbanhangquanao/login/doashboard/uploads/SMNTK013-1-20200723-083731.jpg', 'http://localhost/TT/webbanhangquanao/login/doashboard/uploads/SMNTK013-1-20200723-083731.jpg', 'ASM-KD 03', 'Áo Đẹp', 300000, 'ao', NULL),
(40, 'ÁO PHÔNG NAM APHCTK035', 'http://localhost/TT/webbanhangquanao/login/doashboard/uploads/APHTK035-1-480x635-20200728-012204.jpg', 'http://localhost/TT/webbanhangquanao/login/doashboard/uploads/APHTK035-5-480x635-20200728-012204.jpg', 'ÁO PHÔNG NAM APHCTK035', 'Oke', 220000, 'ao', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tinmoi`
--

CREATE TABLE `tinmoi` (
  `id` int(11) NOT NULL,
  `img1` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `img2` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `tieude` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `noidung` varchar(500) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinmoi`
--

INSERT INTO `tinmoi` (`id`, `img1`, `img2`, `tieude`, `noidung`) VALUES
(1, 'https://360boutique.vn/wp-content/uploads/2020/07/1.jpg', 'https://360boutique.vn/wp-content/uploads/2020/07/2.jpg', 'CHẤT LIỆU VẢI TỐT NHẤT CHO LÀN DA TRẺ', 'Khi lựa chọn quần áo cho trẻ, vải là yếu tố quyết định đến giá trị sử dụng. Đối với bé, việc mặc đẹp đã quan trọng nhưng sự an toàn, thoải mái còn đặc biệt quan trọng hơn. Hiểu được những khó khăn đó, thời trang trẻ em 360 Kids sẽ chia sẻ dưới này để giúp phụ huynh có thể lựa chọn được quần áo vừa phù hợp vừa an toàn cho trẻ.\r\n    Quần áo trẻ em từ chất liệu 100% Cotton\r\nChất liệu vải Cotton được mệnh danh là loại vải “biết thở” bởi khả năng thấm hút mồ hôi cực tốt và cực lành tính với làn da củ'),
(2, 'https://360boutique.vn/wp-content/uploads/2020/07/104799254_1695094647320738_7081336622890787777_o.jpg', 'https://360boutique.vn/wp-content/uploads/2020/07/104799254_1695094647320738_7081336622890787777_o.jpg', 'NGẮM BIỂN XANH CÁT TRẮNG NẮNG VÀNG TẠI ĐẢO CÔ TÔ 2N1Đ', 'Team 360 Boutique chúng mình vừa trở về từ chuyến đi Cô Tô 2 ngày 1 đêm cho kỳ nghỉ thường niên của 360 mỗi năm. Và thực sự thấy Cô Tô là điểm đến chất lượng, giá cả lại phải chăng (nhất là trong mùa này) nên chúng tớ quyết định viết bài review để chia sẻ tới cả nhà những tip nhỏ trong việc đi chơi cũng như việc chụp hình để các bạn có thêm chút kinh nghiệm trước khi quyết định in dấu chân mình tại Cô Tô nhé!'),
(3, 'https://360boutique.vn/wp-content/uploads/2020/05/SMDTK013-1.jpg', 'https://360boutique.vn/wp-content/uploads/2020/05/QAUTK004-5.jpg', 'MẸO HAY GIẶT VÀ BẢO QUẢN QUẦN ÂU NAM ĐÚNG CÁCH', 'Theo lời khuyên của các chuyên gia, quần âu chỉ nên giặt khi thực sự cần. Trung bình bạn chỉ nên giặt từ 1 tới 2 lần trong vòng 3 tuần. Chất liệu cũng với màu quần sẽ được gìn giữ đẹp hơn khi bạn hạn chế giặt chúng.Bạn có thể giặt quần âu với nước pha giấm. Lượng giấm cho vào vừa phải, khoảng 300ml giấm pha với 3 lít nước lạnh. Giấm sẽ giúp làm sạch vết bẩn, không làm phai màu quần mà còn giúp màu quần âu luôn mới.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kichthuockids`
--
ALTER TABLE `kichthuockids`
  ADD KEY `Idsanphamkid` (`Idsanphamkid`);

--
-- Indexes for table `kichthuocnam`
--
ALTER TABLE `kichthuocnam`
  ADD KEY `Idsanphamnam` (`Idsanphamnam`);

--
-- Indexes for table `mausackids`
--
ALTER TABLE `mausackids`
  ADD KEY `Idsanphamkid` (`Idsanphamkid`);

--
-- Indexes for table `mausacnam`
--
ALTER TABLE `mausacnam`
  ADD KEY `Idsanphamnam` (`Idsanphamnam`);

--
-- Indexes for table `sanphamkids`
--
ALTER TABLE `sanphamkids`
  ADD PRIMARY KEY (`Idsanphamkid`);

--
-- Indexes for table `sanphamnam`
--
ALTER TABLE `sanphamnam`
  ADD PRIMARY KEY (`Idsanphamnam`);

--
-- Indexes for table `tinmoi`
--
ALTER TABLE `tinmoi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sanphamkids`
--
ALTER TABLE `sanphamkids`
  MODIFY `Idsanphamkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanphamnam`
--
ALTER TABLE `sanphamnam`
  MODIFY `Idsanphamnam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tinmoi`
--
ALTER TABLE `tinmoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kichthuockids`
--
ALTER TABLE `kichthuockids`
  ADD CONSTRAINT `kichthuockids_ibfk_1` FOREIGN KEY (`Idsanphamkid`) REFERENCES `sanphamkids` (`Idsanphamkid`);

--
-- Constraints for table `kichthuocnam`
--
ALTER TABLE `kichthuocnam`
  ADD CONSTRAINT `kichthuocnam_ibfk_1` FOREIGN KEY (`Idsanphamnam`) REFERENCES `sanphamnam` (`Idsanphamnam`);

--
-- Constraints for table `mausackids`
--
ALTER TABLE `mausackids`
  ADD CONSTRAINT `mausackids_ibfk_1` FOREIGN KEY (`Idsanphamkid`) REFERENCES `sanphamkids` (`Idsanphamkid`);

--
-- Constraints for table `mausacnam`
--
ALTER TABLE `mausacnam`
  ADD CONSTRAINT `mausacnam_ibfk_1` FOREIGN KEY (`Idsanphamnam`) REFERENCES `sanphamnam` (`Idsanphamnam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
