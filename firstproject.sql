-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 07:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp\r\n2.Chuyển khoản\r\n3. Thanh toán online',
  `ngaydathang` varchar(255) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Đang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  `receive_name` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_tel` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `id_user`) VALUES
(1, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '07:52:10pm 04/06/2022', 0, 0, '', '', '', 0),
(2, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '07:52:22pm 04/06/2022', 0, 0, '', '', '', 0),
(3, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '07:53:32pm 04/06/2022', 0, 0, '', '', '', 0),
(4, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '07:55:08pm 04/06/2022', 0, 0, '', '', '', 0),
(5, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '07:55:41pm 04/06/2022', 0, 0, '', '', '', 0),
(6, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '08:01:15pm 04/06/2022', 0, 0, '', '', '', 0),
(7, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '08:01:55pm 04/06/2022', 0, 0, '', '', '', 0),
(8, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '08:05:57pm 04/06/2022', 0, 0, '', '', '', 0),
(9, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '08:07:13pm 04/06/2022', 0, 0, '', '', '', 0),
(10, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '08:36:26pm 04/06/2022', 1200, 0, '', '', '', 1),
(11, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '08:38:53pm 04/06/2022', 1200, 0, '', '', '', 1),
(12, 'sontuduc', '156 tam trinh', '092123123', 'sontdph18594@fpt.edu.vn', 0, '08:43:53pm 04/06/2022', 1200, 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(2, '123', 1, 13, '07:37:58pm 31/05/2022'),
(3, '22233', 1, 13, '07:47:34pm 31/05/2022'),
(4, '22222', 1, 13, '07:48:43pm 31/05/2022'),
(5, '21312313', 1, 13, '07:49:47pm 31/05/2022'),
(6, '123132', 1, 13, '07:51:47pm 31/05/2022'),
(7, 'son', 1, 13, '08:05:25pm 31/05/2022');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT 0,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_pro`, `name`, `img`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 4),
(2, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 4),
(3, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 4),
(4, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 5),
(5, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 5),
(6, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 5),
(7, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 6),
(8, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 6),
(9, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 6),
(10, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 7),
(11, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 7),
(12, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 7),
(13, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 8),
(14, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 8),
(15, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 8),
(16, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 9),
(17, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 9),
(18, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 9),
(19, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 10),
(20, 1, 13, 's', 'Screenshot 2022-05-18 122552.png', 1200, 1, 1200, 10),
(21, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 11),
(22, 1, 13, 's', 'Screenshot 2022-05-18 122552.png', 1200, 1, 1200, 11),
(23, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 11),
(24, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 12),
(25, 1, 13, 's', 'Screenshot 2022-05-18 122552.png', 1200, 1, 1200, 12),
(26, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 12),
(27, 1, 14, 'a', 'Screenshot 2022-05-20 132526.png', 0, 1, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(9, '123123'),
(10, '1232222'),
(13, '321'),
(14, 'st'),
(15, '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(5, 'a', 1200, 'Screenshot 2022-05-18 122552.png', '22222', 10, 14),
(9, '$tensp', 0, 'Screenshot 2022-05-20 132526.png', '$mota', 0, 13),
(10, 's', 1200, 'Screenshot 2022-05-18 122552.png', '22222', 0, 13),
(11, '$tensp', 0, 'Screenshot 2022-05-20 132526.png', '$mota', 0, 13),
(12, '$tensp', 0, 'Screenshot 2022-05-20 132526.png', '$mota', 0, 13),
(13, 's', 1200, 'Screenshot 2022-05-18 122552.png', '22222', 0, 13),
(14, 'a', 0, 'Screenshot 2022-05-20 132526.png', '$mota', 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'sontuduc', '123', 'sontdph18594@fpt.edu.vn', '156 tam trinh', '092123123', 1),
(2, 'sontuduc', '123', '', '', '', 0),
(3, 'sontuduc', '123', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
