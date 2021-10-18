-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2021 lúc 03:16 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `avnfansub`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vncaption` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `encaption` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cncaption` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vncontent` text COLLATE utf8_unicode_ci NOT NULL,
  `encontent` text COLLATE utf8_unicode_ci NOT NULL,
  `cncontent` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`id`, `vncaption`, `encaption`, `cncaption`, `vncontent`, `encontent`, `cncontent`) VALUES
('contentthongbao', '', '', '', 'Chào mọi người. Chắc một số người cũng đã biết, Fanpage của A4VF cách đây hơn nửa tháng bị dính một đợt report dẫn đến page bị hủy đăng. Đến ngày hôm nay thì page đã bị xóa luôn chứ không còn là hủy đăng nữa.\r\n\r\n', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
