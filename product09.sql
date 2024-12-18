-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2024 lúc 08:32 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `product09`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `created_at`) VALUES
(1, 'khánhh', 'khatranpy@gmail.com', 'khahaha', '2024-01-15 15:25:20'),
(3, 'kiệt', 'khkhk@gmail.com', 'khó quáaaa', '2024-01-17 06:53:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(1, 6, 'kiet', '0354521842', 'kiet@gmail.com', '\r\nWarning:  Undefined variable $method in D:\\xampp', 'flat no. 8697576, ho, ỵhgfv, fd, # - 7777', 'Giày chạy bộ Chitu 6 Pro nam ARMT013-6 (20 x 1) - ', 20, '2024-03-06', 'pending');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` int(11) NOT NULL,
  `image_03` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `genner` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`, `category`, `genner`) VALUES
(6, 'Giày chạy bộ Zocker ZCB Ultra Light Moon/Black', ' ', 20, 'giay-chay-bo-zocker-ultra-light-xanh-den_2880_HasThumb.webp', 0, 0, 'sport', 'MEN'),
(7, 'Giày chạy bộ Zocker Ultra Light Xám', ' đẹp sang trọng năng động', 20, 'z4934390146620_1c8c2100f74f8617d943912ecb4bd7ce_8e0f91c961964323a4c60c2cf2d6b0c6_large.webp', 0, 0, 'sport', 'MEN'),
(8, 'Giày chạy bộ Zocker Ultra Light Đen', ' ', 20, 'z4934390341020_c8817cfbf15313a306610f320c0c9a36_2bdecee2beb54a0285a699fec11984e0_large.webp', 0, 0, 'sport', 'MEN'),
(9, 'Giày chạy bộ Zocker Ultra Light Vàng Cam', ' ', 20, 'z4204314965010_3df099002e8301f563a52e3ccdbf2858_855039d96eb14dc3a5e8605ae0aef9c0.webp', 0, 0, 'sport', 'MEN'),
(10, 'Giày chạy bộ Chitu 6 Pro nam ARMT013-6', ' ', 20, 'armt013-69-1_6827b2fe673b4949bafc2249ad789ed4.webp', 0, 0, 'sport', 'MEN'),
(11, 'Giày thể thao nam - Li-Ning Sport Vietnam', ' ', 20, 'armt013-59-2_eb9aeaa597ae43c1998ebdd44a9996ed_master.webp', 0, 0, 'sport', 'MEN'),
(12, 'Giày thể thao nam - Li-Ning Sport', ' ', 20, 'armt013-29-3_6eac8d2680d64fd6812e3ccf465eeb89.webp', 0, 0, 'sport', 'MEN'),
(13, 'Giày chạy bộ Li-Ning Boom Infinity 2 nữ ARVS016-3', ' ', 29, 'arhs016342bfeb6f142b842269ae54.webp', 0, 0, 'sport', 'WOMEN'),
(14, 'Giày chạy bộ Li-Ning Yue Ying 2 nam ARHT001-5', ' ', 25, 'arht0015938526dfef1d4849b8aa3d.webp', 0, 0, 'casual', 'MEN'),
(15, 'Giày Búp Bê Bệt Da Bò Thật Siêu Êm Gắn Nơ Nhỏ', 'sang trọng quý phái xinh đẹp', 29, '20201015_KxRH7ExY38daWYsFUyx7iVt6.jpg', 20201015, 20201015, 'casual', 'WOMEN'),
(16, 'Giày Búp Bê Bệt Da Bò Thật Siêu Êm Gắn Nơ - Đen', ' xinh đẹp quý phái tự tin', 29, '20200420_sOp3DVItk0V4jiykWUjj2hqa.jpeg', 20200420, 20200420, 'sport', 'WOMEN'),
(17, 'DongHai Giày Búp Bê Gót Vuông', 'xinh đẹp quý phái', 29, 'giay-bup-be-nu-dong-hai-wgu96b5h_8.webp', 0, 0, 'sport', 'WOMEN'),
(18, 'Giày thể thao nữ độn đế kim tuyến ', 'năng động tự tin', 35, '96a4b89417a43ffccbbb558acd38e4b2.jpg', 96, 96, 'sport', 'WOMEN'),
(19, 'GIầy thể thao nữ gót mầu', 'năng động ', 35, '77effd12fe9094829174f3ca32dc9ae9.jpg', 77, 77, 'sport', 'WOMEN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`) VALUES
(4, 'khanh', 'khatranpy@gmail.com', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'letuankiet@gmail.com', 'letuankiet@gmail.com', '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_products` (`user_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_users` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_products` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
