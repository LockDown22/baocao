-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2022 lúc 04:50 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sanpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsp`
--

CREATE TABLE `thongtinsp` (
  `MaSP` varchar(5) NOT NULL,
  `TenSP` varchar(200) NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `ThongtinSP` varchar(1000) NOT NULL,
  `NgayXuat` date NOT NULL,
  `AnhSP` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtinsp`
--

INSERT INTO `thongtinsp` (`MaSP`, `TenSP`, `GiaSP`, `ThongtinSP`, `NgayXuat`, `AnhSP`) VALUES
('SSF3', 'Galaxy Z fold 3', 27000000, 'bla bla lablabalablaa', '2022-07-18', 'samsung-galaxy-z-flip-3-violet-1-600x600.jpg'),
('Ip11M', 'Iphone 11 ProMax', 23000000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu', '2022-07-18', 'iphone-11-pro-max-green-600x600.jpg'),
('Ip11M', 'Iphone 11 ProMax', 23000000, 'Lorem Ipsum is simply dummy text of the printingtype specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in tof Letrasere recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu', '2022-07-18', 'iphone-11-pro-max-green-600x600.jpg'),
('SN1M3', 'Acer Nito %', 22000000, 'AcerNitro 5', '2022-04-14', '29976_laptop_acer_nitro_5_an515_54_51x1_nh_q5asv_011.jpg'),
('AN515', 'Asus ROG STRIX G513', 0, 'hahahaahahaha', '2022-05-17', '9f17a5f54550401ac3062ea572e4d83b.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
