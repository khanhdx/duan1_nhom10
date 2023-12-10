-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2023 at 03:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan_nhom10`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'iphone'),
(2, 'oppo'),
(3, 'vivo');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int NOT NULL,
  `id_hd` int NOT NULL,
  `id_sp` int NOT NULL,
  `soluongmua` int NOT NULL,
  `tonggia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hd`, `id_sp`, `soluongmua`, `tonggia`) VALUES
(3, 7, 3, 2, 2222),
(4, 8, 2, 3, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` int NOT NULL,
  `id_pro` int NOT NULL,
  `datecomment` date NOT NULL,
  `rely_to_comment_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int NOT NULL,
  `id_kh` int NOT NULL,
  `id_sp` int NOT NULL,
  `tinhtrang` int NOT NULL,
  `ngay_lap` date NOT NULL,
  `tonggia` int NOT NULL,
  `noinhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nvgh` int NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `id_kh`, `id_sp`, `tinhtrang`, `ngay_lap`, `tonggia`, `noinhan`, `nvgh`, `ghichu`, `name`) VALUES
(7, 3, 3, 3, '2023-12-01', 1111, 'thanhoai123', 3, 'qqqq', 'wwww'),
(8, 2, 2, 3, '2023-12-03', 4000, 'ddd', 1, 'áasasasasasaaas', 'hoadon99');

-- --------------------------------------------------------

--
-- Table structure for table `nvgh`
--

CREATE TABLE `nvgh` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_1` int NOT NULL,
  `sdt_2` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nvgh`
--

INSERT INTO `nvgh` (`id`, `name`, `sdt_1`, `sdt_2`) VALUES
(1, 'khanhdx', 123456789, 12345678),
(2, 'vinhng', 123456, 98765432),
(3, 'minhquan', 345678, 54326789),
(5, 'huyn', 123456789, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `tonggia` int DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `tonggia`, `img`, `description`, `is_active`) VALUES
(1, 1, 'iphone 14 promax ', 2300, 1900, '/uploads/ip 14 promax vang.jpg', 'Màn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display\r\nCấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic\r\nLàm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động\r\nPin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến\r\niPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6GB đa nhiệm vượt trội. Cùng phân tích chi tiết thông số siêu phẩm này ngay sau đây.', 1),
(2, 1, 'iPhone 13 128GB | Chính hãng VN/A', 2000, 1900, '/uploads/ip13.jpg', 'Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao\r\nKhông gian hiển thị sống động - Màn hình 6.1\" Super Retina XDR độ sáng cao, sắc nét\r\nTrải nghiệm điện ảnh đỉnh cao - Camera kép 12MP, hỗ trợ ổn định hình ảnh quang học\r\nTối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút', 1),
(3, 1, 'iPhone XS Max 64GB', 2000, 1700, '/uploads/ip x vang.jpg', 'meoemo', 1),
(4, 3, 'vivo V29E 8GB 256GB', 1200, 900, '/uploads/vivo-v29e_3__1_2.webp', 'Thông tin sản phẩm\r\n\r\nMới, đầy đủ phụ kiện từ nhà sản xuất\r\nVivo V29E\r\nSách hướng dẫn\r\nDây USB\r\nCủ sạc\r\nQue lấy SIM\r\nỐp lưng\r\nMiếng dán màn hình\r\nThẻ bảo hành\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id` int NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`id`, `tinhtrang`) VALUES
(1, 'đang chờ vận chuyển'),
(2, 'đang vận chuyển'),
(3, 'đã giao hàng thành công');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`) VALUES
(1, 'khanh', 'khanh@gmail.com', '123456', 'hanoi'),
(2, 'vinh', 'vinh@gmail.com', '123456', 'hanoi'),
(3, 'quan', 'quan@gmailcom', '123456', 'hanoi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoaodon` (`id_hd`),
  ADD KEY `sanpham` (`id_sp`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_users`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tinhtrang_1` (`tinhtrang`),
  ADD KEY `nvgh_1` (`nvgh`),
  ADD KEY `user_1` (`id_kh`),
  ADD KEY `products_1` (`id_sp`);

--
-- Indexes for table `nvgh`
--
ALTER TABLE `nvgh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`category_id`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nvgh`
--
ALTER TABLE `nvgh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `hoaodon` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `sanpham` FOREIGN KEY (`id_sp`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `nvgh_1` FOREIGN KEY (`nvgh`) REFERENCES `nvgh` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_1` FOREIGN KEY (`id_sp`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `tinhtrang_1` FOREIGN KEY (`tinhtrang`) REFERENCES `tinhtrang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_1` FOREIGN KEY (`id_kh`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
