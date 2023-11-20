-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 03:27 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `manga`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass_word` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `pass_word`) VALUES
(1, 'anhlv27', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ngay` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_chuong` int(11) DEFAULT NULL,
  `id_truyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong_truyen`
--

CREATE TABLE `chuong_truyen` (
  `id` int(11) NOT NULL,
  `chuong_so` varchar(11) NOT NULL,
  `id_truyen` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chuong_truyen`
--

INSERT INTO `chuong_truyen` (`id`, `chuong_so`, `id_truyen`, `ngay`, `luot_xem`) VALUES
(1, '1', 1, '2023-11-13', 0),
(2, '2', 1, '2023-11-15', 0),
(3, '1', 2, '2023-11-15', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_truyen`
--

CREATE TABLE `image_truyen` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_chuong` int(11) NOT NULL,
  `img_so` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `image_truyen`
--

INSERT INTO `image_truyen` (`id`, `image`, `id_chuong`, `img_so`) VALUES
(1, 'one_piece_chap1_1.jpg', 1, 1),
(2, 'one_piece_chap1_2.jpg', 1, 2),
(3, 'one_piece_chap1_3.jpg', 1, 3),
(4, 'one_piece_chap1_4.jpg', 1, 4),
(5, 'one_piece_chap1_5.jpg', 1, 5),
(6, 'one_piece_chap1_6.jpg', 1, 6),
(7, 'one_piece_chap1_7.jpg', 1, 7),
(8, 'one_piece_chap1_8.jpg', 1, 8),
(9, 'one_piece_chap1_9.jpg', 1, 9),
(10, 'one_piece_chap1_10.jpg', 1, 10),
(11, 'one_piece_chap1_11.jpg', 1, 11),
(12, 'one_piece_chap1_12.jpg', 1, 12),
(13, 'one_piece_chap1_13.jpg', 1, 13),
(14, 'one_piece_chap1_14.jpg', 1, 14),
(15, 'one_piece_chap1_15.jpg', 1, 15),
(16, 'one_piece_chap1_16.jpg', 1, 16),
(17, 'one_piece_chap1_17.jpg', 1, 17),
(18, 'one_piece_chap1_18.jpg', 1, 18),
(19, 'one_piece_chap1_19.jpg', 1, 19),
(20, 'one_piece_chap1_20.jpg', 1, 20),
(21, 'one_piece_chap1_21.jpg', 1, 21),
(23, 'one_piece_chap2_1.jpg', 2, 1),
(24, 'one_piece_chap2_2.jpg', 2, 2),
(25, 'one_piece_chap2_3.jpg', 2, 3),
(27, 'dragon_ball_chap1_1.jpg', 3, 1),
(28, 'dragon_ball_chap1_2.jpg', 3, 2),
(29, 'dragon_ball_chap1_3.jpg', 3, 3),
(30, 'dragon_ball_chap1_4.jpg', 3, 4),
(31, 'dragon_ball_chap1_5.jpg', 3, 5),
(32, 'dragon_ball_chap1_6.jpg', 3, 6),
(33, 'dragon_ball_chap1_7.jpg', 3, 7),
(34, 'dragon_ball_chap1_8.jpg', 3, 8),
(35, 'dragon_ball_chap1_9.jpg', 3, 9),
(36, 'dragon_ball_chap1_10.jpg', 3, 10),
(37, 'dragon_ball_chap1_11.jpg', 3, 11),
(38, 'dragon_ball_chap1_12.jpg', 3, 12),
(39, 'dragon_ball_chap1_13.jpg', 3, 13),
(40, 'dragon_ball_chap1_14.jpg', 3, 14),
(55, 'dragon_ball_chap1_14.jpg', 3, 14),
(56, 'dragon_ball_chap1_15.jpg', 3, 15),
(57, 'dragon_ball_chap1_16.jpg', 3, 16),
(58, 'dragon_ball_chap1_17.jpg', 3, 17),
(59, 'dragon_ball_chap1_18.jpg', 3, 18),
(60, 'dragon_ball_chap1_19.jpg', 3, 19),
(61, 'dragon_ball_chap1_20.jpg', 3, 20),
(62, 'dragon_ball_chap1_21.jpg', 3, 21),
(63, 'dragon_ball_chap1_22.jpg', 3, 22),
(64, 'dragon_ball_chap1_23.jpg', 3, 23),
(65, 'dragon_ball_chap1_24.jpg', 3, 24),
(68, 'câu hỏi lý thuyết marketing.jpg', 3, 4),
(69, 'eren.jpg', 3, 4),
(71, 'one_piece_chap2_4.jpg', 2, 4),
(73, '', 22, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `hoten` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sdt` int(15) DEFAULT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user_name`, `pass_word`, `hoten`, `email`, `sdt`, `role`) VALUES
(1, 'anhlv', '123', NULL, 'vietanh2712003@gmail.com', NULL, 0),
(3, 'anhlv1', '123', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `ten_tl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `ten_tl`) VALUES
(1, 'Action'),
(2, 'Fantasy'),
(3, 'Harem'),
(4, 'Shounen'),
(5, 'Drama'),
(6, 'Adventure'),
(7, 'Comedy'),
(8, 'Manga'),
(9, 'test'),
(10, 'rrr');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(11) NOT NULL,
  `trangthai` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `trangthai`) VALUES
(1, 'Đang cập nhật'),
(2, 'Đã hoàn thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` int(11) NOT NULL,
  `ten_truyen` varchar(100) NOT NULL,
  `ten_khac` varchar(100) DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `mota` varchar(555) NOT NULL,
  `tacgia` varchar(100) NOT NULL,
  `ngay` date NOT NULL,
  `ma_tl` int(11) NOT NULL,
  `id_trang_thai` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `ten_truyen`, `ten_khac`, `img`, `mota`, `tacgia`, `ngay`, `ma_tl`, `id_trang_thai`, `luot_xem`) VALUES
(1, 'One piece', 'Vua hải tặc', 'one_piece-trend.jpg', 'One Piece là câu truyện kể về Luffy và các thuyền viên của mình. Khi còn nhỏ, Luffy ước mơ trở thành Vua Hải Tặc. Cuộc sống của cậu bé thay đổi khi cậu vô tình có được sức mạnh có thể co dãn như cao su, nhưng đổi lại, cậu không bao giờ có thể bơi được nữa', 'Eiichiro Oda', '1997-07-22', 3, 1, 0),
(2, 'Dragon ball', '7 viên ngọc rồng', 'dragon_ball-trend.jpg', 'Một cậu bé có đuôi khỉ tên là Goku được tìm thấy bởi một ông lão sống một mình trong rừng, ông lão xem đứa bé như là cháu của mình. Một ngày nọ Goku tình cờ gặp một cô gái tên là Bulma trên đường đi bắt cá về, Goku và Bulma đã cùng nhau truy tìm bảy viên ', 'Akira Toriyama', '1997-07-22', 1, 2, 0),
(3, 'Naruto', 'Naruto Shippuden', 'naruto-trend.jpg', 'Naruto là một cậu bé có mơ ước trở thành hokage của làng Konoha,được Hokage phong ấn trong người một trong 9 quái vật của thể giới : Cửu vĩ Hồ ly.Vì cho cậu là một con quái vật, ko ai dám chơi với cậu!& Vì muốn được thừa nhận nên rất phá phách.Khi tốt nghiệp trướng ninja, lần đầu tiên cậu đã được thừa nhận và có một người bạn thân là Sasuke', 'Kishimoto Masashi', '1999-09-21', 1, 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_truyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`id`, `id_user`, `id_truyen`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 3, 3),
(7, 1, 3),
(9, 1, 2),
(10, 3, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_binhluan_user` (`id_user`),
  ADD KEY `lk_binhluan_truyen` (`id_truyen`),
  ADD KEY `lk_binhluan_chuong` (`id_chuong`);

--
-- Chỉ mục cho bảng `chuong_truyen`
--
ALTER TABLE `chuong_truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_chuong_truyen` (`id_truyen`);

--
-- Chỉ mục cho bảng `image_truyen`
--
ALTER TABLE `image_truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_image_chuong` (`id_chuong`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_truyen_tl` (`ma_tl`),
  ADD KEY `lk_truyen_trangthai` (`id_trang_thai`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuong_truyen`
--
ALTER TABLE `chuong_truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `image_truyen`
--
ALTER TABLE `image_truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
