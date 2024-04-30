-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 30, 2024 at 11:44 PM
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
  `lastDateUpdated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `date`, `soluong`, `name`, `phone`, `address`, `status`, `lastDateUpdated`) VALUES
('4128393241270184357146066114154', '2024-04-28', 70, 'tuandeptrai', '123213', 'asdasd', 1, '2024-04-30');

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
('3487463060325534138592296149816', '4128393241270184357146066114154', '000026', 1);

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
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `giamgia`, `ngaysx`, `image`, `MALSP`, `giavon`, `trangthai`) VALUES
('00002', 'Product 2', 0, 15000, '2023-11-20', '../images/spiphone2.jpg', '00001', 0, 1),
('00003', 'Product 3', 30000, 20000, '2023-10-25', '../images/zzzz.jpg', '00002', 10000, 1),
('00004', 'Product 4', 0, 25000, '2023-09-30', '../images/spiphone4.jpg', '00001', 0, 1),
('00005', 'Product 5', 0, 30000, '2023-08-05', '../images/spiphone5.jpg', '00001', 0, 1),
('00006', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone6.jpg', '00001', 0, 1),
('00007', 'Product 7', 0, 40000, '2023-06-15', '../images/sphp1.jpg', '00004', 0, 1),
('00008', 'Product 8', 0, 45000, '2023-05-20', '../images/sphp2.jpg', '00004', 0, 1),
('00009', 'Product 9', 0, 50000, '2023-04-25', '../images/sphp3.jpg', '00004', 0, 1),
('00010', 'Product 10', 0, 55000, '2023-03-30', '../images/sphp4.jpg', '00004', 0, 1),
('00011', 'Product 11', 0, 60000, '2023-02-05', '../images/sphp5.jpg', '00004', 0, 1),
('00012', 'Product 12', 0, 65000, '2023-01-10', '../images/sphp6.jpg', '00004', 0, 1),
('00013', 'Product 13', 0, 70000, '2022-12-15', '../images/laptop1.jpg', '00002', 0, 1),
('00014', 'Product 14', 0, 75000, '2022-11-20', '../images/laptop2.jpg', '00002', 0, 1),
('00015', 'Product 15', 0, 80000, '2022-10-25', '../images/laptop3.jpg', '00002', 0, 1),
('00016', 'Product 16', 0, 85000, '2022-09-30', '../images/laptop4.jpg', '00002', 0, 1),
('00017', 'Product 17', 0, 90000, '2022-08-05', '../images/laptop5.jpg', '00002', 0, 1),
('00018', 'Product 18', 0, 95000, '2022-07-10', '../images/laptop6.jpg', '00002', 0, 1),
('000031', 'Product 1', 0, 10000, '2023-12-15', '../images/spiphone1.jpg', '00001', 0, 1),
('000032', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone2.jpg', '00001', 0, 1),
('000034', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone2.jpg', '00001', 0, 1),
('000161', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone3.jpg', '00001', 0, 1),
('0002125', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone4.jpg', '00001', 0, 1),
('000261', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone5.jpg', '00001', 0, 1),
('0003126', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone6.jpg', '00001', 0, 1),
('0003685', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone1.jpg', '00001', 0, 1),
('0004112', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone2.jpg', '00001', 0, 1),
('100462', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone3.jpg', '00001', 0, 1),
('10001', 'Product 1', 0, 10000, '2023-12-15', '../images/spiphone1.jpg', '00001', 0, 1),
('20006', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone5.jpg', '00001', 0, 1),
('30011', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone6.jpg', '00001', 0, 1),
('40016', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone1.jpg', '00001', 0, 1),
('50021', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone2.jpg', '00001', 0, 1),
('60026', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone3.jpg', '00001', 0, 1),
('70031', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone4.jpg', '00001', 0, 1),
('80036', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone5.jpg', '00001', 0, 1),
('10041', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone6.jpg', '00001', 0, 1),
('20046', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone1.jpg', '00001', 0, 1),
('010001', 'Product 1', 0, 10000, '2023-12-15', '../images/spiphone1.jpg', '00001', 0, 1),
('000306', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone3.jpg', '00001', 0, 1),
('000211', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone4.jpg', '00001', 0, 1),
('000s16', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone5.jpg', '00001', 0, 1),
('0002s1', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone6.jpg', '00001', 0, 1),
('000w26', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone1.jpg', '00001', 0, 1),
('000321', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone2.jpg', '00001', 0, 1),
('000326', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone3.jpg', '00001', 0, 1),
('000451', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone4.jpg', '00001', 0, 1),
('000426', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone5.jpg', '00001', 0, 1),
('000026', 'Product 6', 0, 35000, '2023-07-10', '../images/spiphone1.jpg', '00001', 0, 1),
('000111', 'Product 11', 0, 60000, '2023-02-05', '../images/spiphone2.jpg', '00001', 0, 1),
('0001xs6', 'Product 16', 0, 85000, '2022-09-30', '../images/spiphone3.jpg', '00001', 0, 1),
('00021yh', 'Product 21', 0, 110000, '2022-05-20', '../images/spiphone4.jpg', '00001', 0, 1),
('00026s', 'Product 26', 0, 135000, '2022-04-25', '../images/spiphone5.jpg', '00001', 0, 1),
('00031s', 'Product 31', 0, 160000, '2022-03-30', '../images/spiphone6.jpg', '00001', 0, 1),
('00036s', 'Product 36', 0, 185000, '2022-02-05', '../images/spiphone1.jpg', '00001', 0, 1),
('00041s', 'Product 41', 0, 210000, '2021-12-10', '../images/spiphone2.jpg', '00001', 0, 1),
('00046q', 'Product 46', 0, 235000, '2021-11-15', '../images/spiphone3.jpg', '00001', 0, 1),
('1', '1', 0, 1000, '2024-04-03', '../asdas', '00001', 0, 1);

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
('1', 'azure', '123', 'tuan', '123', '123', 1, '2024-05-31', '../images/10_NMT.jpg'),
('2412', 'dasanbob', '123', 'thong', '123', '123', 0, '2024-05-02', '../images/10_NMT.jpg');

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
