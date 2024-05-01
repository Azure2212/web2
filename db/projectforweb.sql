-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 01, 2024 at 10:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectforweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `soluong` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `lastDateUpdated` date DEFAULT NULL,
  `userId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `date`, `soluong`, `name`, `phone`, `address`, `status`, `lastDateUpdated`, `userId`) VALUES
('1167780154905029678108610361292', '2024-05-01', 1000000, 'thong', '123', '123', 0, '2024-04-25', '2412'),
('3516929492526851925168559980636', '2024-05-01', 245000, 'thong', '123', '123', 0, '2024-05-01', '2412'),
('4128393241270184357146066114154', '2024-05-01', 70, 'tuandeptrai', '123213', 'asdasd', 0, '2024-05-01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `chitietbill`
--

CREATE TABLE `chitietbill` (
  `id` varchar(255) NOT NULL,
  `mabill` varchar(255) NOT NULL,
  `MASP` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietbill`
--

INSERT INTO `chitietbill` (`id`, `mabill`, `MASP`, `soluong`) VALUES
('1741900173696967093153602996989', '4128393241270184357146066114154', '00003', 1),
('2504796341536673576955540729574', '4128393241270184357146066114154', '00002', 1),
('2629010988553857593730596435373', '3516929492526851925168559980636', '000026', 1),
('3487463060325534138592296149816', '4128393241270184357146066114154', '000026', 1),
('5800337942179331671578445053688', '1167780154905029678108610361292', '00002', 2),
('8469199931154430222912896060614', '3516929492526851925168559980636', '000451', 1),
('9335713739836896648020968232049', '1167780154905029678108610361292', '000w26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `MALSP` varchar(255) NOT NULL,
  `tenloaisp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`MALSP`, `tenloaisp`) VALUES
('00001', 'Phone'),
('00002', 'Latop'),
('00003', 'Watch'),
('00004', 'Headphone');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL,
  `ngaysx` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `MALSP` varchar(255) NOT NULL,
  `giavon` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `bonhotrong` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `uudai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `giamgia`, `ngaysx`, `image`, `MALSP`, `giavon`, `trangthai`, `mota`, `bonhotrong`, `pin`, `uudai`) VALUES
('00002', 'Product 2', 0, 15000, '2023-11-20', '../images/spiphone2.jpg', '00001', 0, 1, 'mota00002', 'bonhotrong00002', 'pin00002', 'uudai00002'),
('00003', 'Product 3', 30000, 20000, '2023-10-25', '../images/zzzz.jpg', '00002', 10000, 1, 'mota00003', 'bonhotrong00003', 'pin00003', 'uudai00003'),
('00004', 'Product 4', 0, 25000, '2023-09-30', '../images/spiphone4.jpg', '00001', 0, 1, 'mota00004', 'bonhotrong00004', 'pin00004', 'uudai00004'),
('00005', 'Product 5', 0, 30000, '2023-08-05', '../images/spiphone5.jpg', '00001', 0, 1, 'mota00005', 'bonhotrong00005', 'pin00005', 'uudai00005'),
('00006', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone6.jpg', '00001', 0, 1, 'mota00006', 'bonhotrong00006', 'pin00006', 'uudai00006'),
('00007', 'Product 7', 0, 40000, '2023-06-15', '../images/sphp1.jpg', '00004', 0, 1, 'mota00007', 'bonhotrong00007', 'pin00007', 'uudai00007'),
('00008', 'Product 8', 0, 45000, '2023-05-20', '../images/sphp2.jpg', '00004', 0, 1, 'mota00008', 'bonhotrong00008', 'pin00008', 'uudai00008'),
('00009', 'Product 9', 0, 50000, '2023-04-25', '../images/sphp3.jpg', '00004', 0, 1, 'mota00009', 'bonhotrong00009', 'pin00009', 'uudai00009'),
('00010', 'Product 10', 0, 55000, '2023-03-30', '../images/sphp4.jpg', '00004', 0, 1, 'mota00010', 'bonhotrong00010', 'pin00010', 'uudai00010'),
('00011', 'Product 11', 0, 60000, '2023-02-05', '../images/sphp5.jpg', '00004', 0, 1, 'mota00011', 'bonhotrong00011', 'pin00011', 'uudai00011'),
('00012', 'Product 12', 0, 65000, '2023-01-10', '../images/sphp6.jpg', '00004', 0, 1, 'mota00012', 'bonhotrong00012', 'pin00012', 'uudai00012'),
('00013', 'Product 13', 0, 70000, '2022-12-15', '../images/laptop1.jpg', '00002', 0, 1, 'mota00013', 'bonhotrong00013', 'pin00013', 'uudai00013'),
('00014', 'Product 14', 0, 75000, '2022-11-20', '../images/laptop2.jpg', '00002', 0, 1, 'mota00014', 'bonhotrong00014', 'pin00014', 'uudai00014'),
('00015', 'Product 15', 0, 80000, '2022-10-25', '../images/laptop3.jpg', '00002', 0, 1, 'mota00015', 'bonhotrong00015', 'pin00015', 'uudai00015'),
('00016', 'Product 16', 0, 85000, '2022-09-30', '../images/laptop4.jpg', '00002', 0, 1, 'mota00016', 'bonhotrong00016', 'pin00016', 'uudai00016'),
('00017', 'Product 17', 0, 90000, '2022-08-05', '../images/laptop5.jpg', '00002', 0, 1, 'mota00017', 'bonhotrong00017', 'pin00017', 'uudai00017'),
('00018', 'Product 18', 0, 95000, '2022-07-10', '../images/laptop6.jpg', '00002', 0, 1, 'mota00018', 'bonhotrong00018', 'pin00018', 'uudai00018'),
('000031', 'Product 1', 0, 10000, '2023-12-15', '../images/spiphone1.jpg', '00001', 0, 1, 'mota000031', 'bonhotrong000031', 'pin000031', 'uudai000031'),
('000032', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone2.jpg', '00001', 0, 1, 'mota000032', 'bonhotrong000032', 'pin000032', 'uudai000032'),
('000034', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone2.jpg', '00001', 0, 1, 'mota000034', 'bonhotrong000034', 'pin000034', 'uudai000034'),
('000161', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone3.jpg', '00001', 0, 1, 'mota000161', 'bonhotrong000161', 'pin000161', 'uudai000161'),
('0002125', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone4.jpg', '00001', 0, 1, 'mota0002125', 'bonhotrong0002125', 'pin0002125', 'uudai0002125'),
('000261', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone5.jpg', '00001', 0, 1, 'mota000261', 'bonhotrong000261', 'pin000261', 'uudai000261'),
('0003126', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone6.jpg', '00001', 0, 1, 'mota0003126', 'bonhotrong0003126', 'pin0003126', 'uudai0003126'),
('0003685', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone1.jpg', '00001', 0, 1, 'mota0003685', 'bonhotrong0003685', 'pin0003685', 'uudai0003685'),
('0004112', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone2.jpg', '00001', 0, 1, 'mota0004112', 'bonhotrong0004112', 'pin0004112', 'uudai0004112'),
('100462', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone3.jpg', '00001', 0, 1, 'mota100462', 'bonhotrong100462', 'pin100462', 'uudai100462'),
('10001', 'Product 1', 0, 10000, '2023-12-15', '../images/spiphone1.jpg', '00001', 0, 1, 'mota10001', 'bonhotrong10001', 'pin10001', 'uudai10001'),
('20006', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone5.jpg', '00001', 0, 1, 'mota20006', 'bonhotrong20006', 'pin20006', 'uudai20006'),
('30011', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone6.jpg', '00001', 0, 1, 'mota30011', 'bonhotrong30011', 'pin30011', 'uudai30011'),
('40016', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone1.jpg', '00001', 0, 1, 'mota40016', 'bonhotrong40016', 'pin40016', 'uudai40016'),
('50021', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone2.jpg', '00001', 0, 1, 'mota50021', 'bonhotrong50021', 'pin50021', 'uudai50021'),
('60026', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone3.jpg', '00001', 0, 1, 'mota60026', 'bonhotrong60026', 'pin60026', 'uudai60026'),
('70031', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone4.jpg', '00001', 0, 1, 'mota70031', 'bonhotrong70031', 'pin70031', 'uudai70031'),
('80036', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone5.jpg', '00001', 0, 1, 'mota80036', 'bonhotrong80036', 'pin80036', 'uudai80036'),
('10041', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone6.jpg', '00001', 0, 1, 'mota10041', 'bonhotrong10041', 'pin10041', 'uudai10041'),
('20046', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone1.jpg', '00001', 0, 1, 'mota20046', 'bonhotrong20046', 'pin20046', 'uudai20046'),
('010001', 'Product 1', 0, 10000, '2023-12-15', '../images/spiphone1.jpg', '00001', 0, 1, 'mota010001', 'bonhotrong010001', 'pin010001', 'uudai010001'),
('000306', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone3.jpg', '00001', 0, 1, 'mota000306', 'bonhotrong000306', 'pin000306', 'uudai000306'),
('000211', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone4.jpg', '00001', 0, 1, 'mota000211', 'bonhotrong000211', 'pin000211', 'uudai000211'),
('000s16', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone5.jpg', '00001', 0, 1, 'mota000s16', 'bonhotrong000s16', 'pin000s16', 'uudai000s16'),
('0002s1', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone6.jpg', '00001', 0, 1, 'mota0002s1', 'bonhotrong0002s1', 'pin0002s1', 'uudai0002s1'),
('000w26', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone1.jpg', '00001', 0, 1, 'mota000w26', 'bonhotrong000w26', 'pin000w26', 'uudai000w26'),
('000321', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone2.jpg', '00001', 0, 1, 'mota000321', 'bonhotrong000321', 'pin000321', 'uudai000321'),
('000326', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone3.jpg', '00001', 0, 1, 'mota000326', 'bonhotrong000326', 'pin000326', 'uudai000326'),
('000451', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone4.jpg', '00001', 0, 1, 'mota000451', 'bonhotrong000451', 'pin000451', 'uudai000451'),
('000426', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone5.jpg', '00001', 0, 1, 'mota000426', 'bonhotrong000426', 'pin000426', 'uudai000426'),
('000026', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone1.jpg', '00001', 0, 1, 'mota000026', 'bonhotrong000026', 'pin000026', 'uudai000026'),
('000111', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone2.jpg', '00001', 0, 1, 'mota000111', 'bonhotrong000111', 'pin000111', 'uudai000111'),
('0001xs6', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone3.jpg', '00001', 0, 1, 'mota0001xs6', 'bonhotrong0001xs6', 'pin0001xs6', 'uudai0001xs6'),
('00021yh', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone4.jpg', '00001', 0, 1, 'mota00021yh', 'bonhotrong00021yh', 'pin00021yh', 'uudai00021yh'),
('00026s', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone5.jpg', '00001', 0, 1, 'mota00026s', 'bonhotrong00026s', 'pin00026s', 'uudai00026s'),
('00031s', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone6.jpg', '00001', 0, 1, 'mota00031s', 'bonhotrong00031s', 'pin00031s', 'uudai00031s'),
('00036s', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone1.jpg', '00001', 0, 1, 'mota00036s', 'bonhotrong00036s', 'pin00036s', 'uudai00036s'),
('00041s', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone2.jpg', '00001', 0, 1, 'mota00041s', 'bonhotrong00041s', 'pin00041s', 'uudai00041s'),
('00046q', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone3.jpg', '00001', 0, 1, 'mota00046q', 'bonhotrong00046q', 'pin00046q', 'uudai00046q'),
('1', '1', 0, 1000, '2024-04-03', '../images/spiphone1.jpg', '00001', 0, 1, 'mota1', 'bonhotrong1', 'pin1', 'uudai1'),
('3729487552221033908511393238115', 'sanphamThong', 70000, 50000, '2024-03-14', '../images/dog.2001.jpg', '00002', 100000, 0, 'mota', 'bonhotrong', '123', 'ko');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `dateCreated` date NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `phone`, `address`, `role`, `dateCreated`, `avatar`) VALUES
('1', 'azure', '123', 'tuan', '123', '123', 1, '2024-05-31', '../images/zzzz.jpg'),
('2412', 'dasanbob', '123', 'thong', '123', '123', 0, '2024-05-02', '../images/10_NMT.jpg'),
('9776165120445343165379973402609', 'azurebob', '123', '123', '123', '123', 0, '2024-05-01', '../images/dog.2001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MALSP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
