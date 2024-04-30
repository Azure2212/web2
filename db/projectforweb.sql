-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3309
-- Thời gian đã tạo: Th4 30, 2024 lúc 08:45 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectforweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `soluong` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `date`, `soluong`, `name`, `phone`, `address`, `status`) VALUES
('4128393241270184357146066114154', '2024-04-28', 70, 'tuandeptrai', '123213', 'asdasd', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbill`
--

CREATE TABLE `chitietbill` (
  `id` varchar(255) NOT NULL,
  `mabill` varchar(255) NOT NULL,
  `MASP` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietbill`
--

INSERT INTO `chitietbill` (`id`, `mabill`, `MASP`, `soluong`) VALUES
('1741900173696967093153602996989', '4128393241270184357146066114154', '00003', 1),
('2504796341536673576955540729574', '4128393241270184357146066114154', '00002', 1),
('3487463060325534138592296149816', '4128393241270184357146066114154', '000026', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MALSP` varchar(255) NOT NULL,
  `tenloaisp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MALSP`, `tenloaisp`) VALUES
('00001', 'Phone'),
('00002', 'Latop'),
('00003', 'Watch'),
('00004', 'Headphone');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL,
  `ngaysx` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `MALSP` varchar(255) NOT NULL,
  `giavon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `giamgia`, `ngaysx`, `image`, `MALSP`, `giavon`) VALUES
('00001', 'phone1', 1, 1, '2024-04-03', 'images/spiphone1.jpg', '00001', 0),
('000021', 'Product 1', 100, 10, '2023-12-15', 'images/spiphone1.jpg', '00001', 0),
('00002', 'Product 2', 150, 15, '2023-11-20', 'images/spiphone2.jpg', '00001', 0),
('00003', 'Product 3', 200, 20, '2023-10-25', 'images/spiphone3.jpg', '00001', 0),
('00004', 'Product 4', 250, 25, '2023-09-30', 'images/spiphone4.jpg', '00001', 0),
('00005', 'Product 5', 300, 30, '2023-08-05', 'images/spiphone5.jpg', '00001', 0),
('00006', 'Product 6', 350, 35, '2023-07-10', 'images/spiphone6.jpg', '00001', 0),
('00007', 'Product 7', 400, 40, '2023-06-15', 'images/sphp1.jpg', '00004', 0),
('00008', 'Product 8', 450, 45, '2023-05-20', 'images/sphp2.jpg', '00004', 0),
('00009', 'Product 9', 500, 50, '2023-04-25', 'images/sphp3.jpg', '00004', 0),
('00010', 'Product 10', 550, 55, '2023-03-30', 'images/sphp4.jpg', '00004', 0),
('00011', 'Product 11', 600, 60, '2023-02-05', 'images/sphp5.jpg', '00004', 0),
('00012', 'Product 12', 650, 65, '2023-01-10', 'images/sphp6.jpg', '00004', 0),
('00013', 'Product 13', 700, 70, '2022-12-15', 'images/laptop1.jpg', '00002', 0),
('00014', 'Product 14', 750, 75, '2022-11-20', 'images/laptop2.jpg', '00002', 0),
('00015', 'Product 15', 800, 80, '2022-10-25', 'images/laptop3.jpg', '00002', 0),
('00016', 'Product 16', 850, 85, '2022-09-30', 'images/laptop4.jpg', '00002', 0),
('00017', 'Product 17', 900, 90, '2022-08-05', 'images/laptop5.jpg', '00002', 0),
('00018', 'Product 18', 950, 95, '2022-07-10', 'images/laptop6.jpg', '00002', 0),
('000031', 'Product 1', 100, 10, '2023-12-15', 'images/spiphone1.jpg', '00001', 0),
('000032', 'Product 6', 350, 35, '2023-07-10', 'images/spiphone2.jpg', '00001', 0),
('000034', 'Product 11', 600, 60, '2023-02-05', 'images/spiphone2.jpg', '00001', 0),
('000161', 'Product 16', 850, 85, '2022-09-30', 'images/spiphone3.jpg', '00001', 0),
('0002125', 'Product 21', 1100, 110, '2022-05-20', 'images/spiphone4.jpg', '00001', 0),
('000261', 'Product 26', 1350, 135, '2022-04-25', 'images/spiphone5.jpg', '00001', 0),
('0003126', 'Product 31', 1600, 160, '2022-03-30', 'images/spiphone6.jpg', '00001', 0),
('0003685', 'Product 36', 1850, 185, '2022-02-05', 'images/spiphone1.jpg', '00001', 0),
('0004112', 'Product 41', 2100, 210, '2021-12-10', 'images/spiphone2.jpg', '00001', 0),
('100462', 'Product 46', 2350, 235, '2021-11-15', 'images/spiphone3.jpg', '00001', 0),
('10001', 'Product 1', 100, 10, '2023-12-15', 'images/spiphone1.jpg', '00001', 0),
('20006', 'Product 6', 350, 35, '2023-07-10', 'images/spiphone5.jpg', '00001', 0),
('30011', 'Product 11', 600, 60, '2023-02-05', 'images/spiphone6.jpg', '00001', 0),
('40016', 'Product 16', 850, 85, '2022-09-30', 'images/spiphone1.jpg', '00001', 0),
('50021', 'Product 21', 1100, 110, '2022-05-20', 'images/spiphone2.jpg', '00001', 0),
('60026', 'Product 26', 1350, 135, '2022-04-25', 'images/spiphone3.jpg', '00001', 0),
('70031', 'Product 31', 1600, 160, '2022-03-30', 'images/spiphone4.jpg', '00001', 0),
('80036', 'Product 36', 1850, 185, '2022-02-05', 'images/spiphone5.jpg', '00001', 0),
('10041', 'Product 41', 2100, 210, '2021-12-10', 'images/spiphone6.jpg', '00001', 0),
('20046', 'Product 46', 2350, 235, '2021-11-15', 'images/spiphone1.jpg', '00001', 0),
('010001', 'Product 1', 100, 10, '2023-12-15', 'images/spiphone1.jpg', '00001', 0),
('000306', 'Product 6', 350, 35, '2023-07-10', 'images/spiphone3.jpg', '00001', 0),
('000211', 'Product 11', 600, 60, '2023-02-05', 'images/spiphone4.jpg', '00001', 0),
('000s16', 'Product 16', 850, 85, '2022-09-30', 'images/spiphone5.jpg', '00001', 0),
('0002s1', 'Product 21', 1100, 110, '2022-05-20', 'images/spiphone6.jpg', '00001', 0),
('000w26', 'Product 26', 1350, 135, '2022-04-25', 'images/spiphone1.jpg', '00001', 0),
('000321', 'Product 31', 1600, 160, '2022-03-30', 'images/spiphone2.jpg', '00001', 0),
('000326', 'Product 36', 1850, 185, '2022-02-05', 'images/spiphone3.jpg', '00001', 0),
('000451', 'Product 41', 2100, 210, '2021-12-10', 'images/spiphone4.jpg', '00001', 0),
('000426', 'Product 46', 2350, 235, '2021-11-15', 'images/spiphone5.jpg', '00001', 0),
('000021', 'Product 1', 100, 10, '2023-12-15', 'images/spiphone1.jpg', '00001', 0),
('000026', 'Product 6', 350, 35, '2023-07-10', 'images/spiphone1.jpg', '00001', 0),
('000111', 'Product 11', 600, 60, '2023-02-05', 'images/spiphone2.jpg', '00001', 0),
('0001xs6', 'Product 16', 850, 85, '2022-09-30', 'images/spiphone3.jpg', '00001', 0),
('00021yh', 'Product 21', 1100, 110, '2022-05-20', 'images/spiphone4.jpg', '00001', 0),
('00026s', 'Product 26', 1350, 135, '2022-04-25', 'images/spiphone5.jpg', '00001', 0),
('00031s', 'Product 31', 1600, 160, '2022-03-30', 'images/spiphone6.jpg', '00001', 0),
('00036s', 'Product 36', 1850, 185, '2022-02-05', 'images/spiphone1.jpg', '00001', 0),
('00041s', 'Product 41', 2100, 210, '2021-12-10', 'images/spiphone2.jpg', '00001', 0),
('00046q', 'Product 46', 2350, 235, '2021-11-15', 'images/spiphone3.jpg', '00001', 0),
('1', '1', 1, 1, '2024-04-03', 'asdas', '00001', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MALSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
