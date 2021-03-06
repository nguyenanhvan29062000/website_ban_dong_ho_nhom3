-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 07, 2021 lúc 12:30 AM
-- Phiên bản máy phục vụ: 8.0.23-0ubuntu0.20.04.1
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_23_101331_banhang', 1),
(5, '2021_03_04_222741_homepage', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbaiviet`
--

CREATE TABLE `tbaiviet` (
  `id_bv` bigint UNSIGNED NOT NULL,
  `id_sp` bigint NOT NULL,
  `icon_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de_bv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_dung_bv` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tdamua`
--

CREATE TABLE `tdamua` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint NOT NULL,
  `id_sp` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tgiamgia`
--

CREATE TABLE `tgiamgia` (
  `id` bigint UNSIGNED NOT NULL,
  `id_sp` bigint NOT NULL,
  `gia_sau_sale` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tgiohang`
--

CREATE TABLE `tgiohang` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sp` bigint NOT NULL,
  `so_luong` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tgiohang`
--

INSERT INTO `tgiohang` (`id`, `name`, `id_sp`, `so_luong`, `created_at`, `updated_at`) VALUES
(450, 'NguyenVan', 6, 13, NULL, NULL),
(459, 'NguyenVan', 4, 2, NULL, NULL),
(460, 'NguyenVan', 5, 1, NULL, NULL),
(461, 'NguyenVan', 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thomebaiviet`
--

CREATE TABLE `thomebaiviet` (
  `id` int NOT NULL,
  `tieude` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh_demo` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh_khac` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` longtext COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thomebaiviet`
--

INSERT INTO `thomebaiviet` (`id`, `tieude`, `hinhanh_demo`, `hinhanh_khac`, `noidung`) VALUES
(1, 'Tại sao nên dùng đồng hồ casio? Đây có phải sự lựa chọn hoàn hảo?', 'vang01.jpg', '', 'Không có nội dung'),
(2, 'Phong cách đeo đồng hồ loại nào phù hợp với bạn?', 'hongphan.jpg', '', ''),
(3, 'Kỹ thuật phát triển đồng hồ đã mạnh đến đáng sợ ntn?', 'thongminh.jpg', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thomehot`
--

CREATE TABLE `thomehot` (
  `id` int UNSIGNED NOT NULL,
  `id_sp` bigint NOT NULL,
  `ten_sp` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` int NOT NULL,
  `gia_sau_sale` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thomehot`
--

INSERT INTO `thomehot` (`id`, `id_sp`, `ten_sp`, `gia_sp`, `gia_sau_sale`, `image`, `created_at`, `updated_at`) VALUES
(2, 3, 'Hồng Phấn', 1300000, 1200000, 'hongphan.jpg', NULL, NULL),
(3, 4, 'Casio N one', 200000, NULL, 'blogs1.png', NULL, NULL),
(4, 5, 'Casio N Remake', 499000, 450000, 'casion2.png', NULL, NULL),
(5, 6, 'Smartio2 Watch', 6200000, 6100000, 'thongminh.jpg', NULL, NULL),
(6, 7, 'Star Model1', 540000, NULL, 'vanden.jpg', NULL, NULL),
(7, 8, 'Star Model2', 460000, NULL, 'vang01.jpg', NULL, NULL),
(8, 9, 'Kowath Light', 75000, 50000, 'vangtrang.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thomenew`
--

CREATE TABLE `thomenew` (
  `id` int UNSIGNED NOT NULL,
  `id_sp` bigint NOT NULL,
  `ten_sp` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` int NOT NULL,
  `gia_sau_sale` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thomenew`
--

INSERT INTO `thomenew` (`id`, `id_sp`, `ten_sp`, `gia_sp`, `gia_sau_sale`, `image`, `created_at`, `updated_at`) VALUES
(3, 4, 'Casio N one', 200000, NULL, 'blogs1.png', NULL, NULL),
(4, 5, 'Casio N Remake', 499000, 450000, 'casion2.png', NULL, NULL),
(5, 6, 'Smartio2 Watch', 6200000, 6100000, 'thongminh.jpg', NULL, NULL),
(7, 8, 'Star Model2', 460000, NULL, 'vang01.jpg', NULL, NULL),
(8, 9, 'Kowath Light', 75000, 50000, 'vangtrang.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thomesale`
--

CREATE TABLE `thomesale` (
  `id` int UNSIGNED NOT NULL,
  `id_sp` bigint NOT NULL,
  `ten_sp` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` int NOT NULL,
  `gia_sau_sale` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thomesale`
--

INSERT INTO `thomesale` (`id`, `id_sp`, `ten_sp`, `gia_sp`, `gia_sau_sale`, `image`, `created_at`, `updated_at`) VALUES
(2, 3, 'Hồng Phấn', 1300000, 1200000, 'hongphan.jpg', NULL, NULL),
(4, 5, 'Casio N Remake', 499000, 450000, 'casion2.png', NULL, NULL),
(5, 6, 'Smartio2 Watch', 6200000, 6100000, 'thongminh.jpg', NULL, NULL),
(8, 9, 'Kowath Light', 75000, 50000, 'vangtrang.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tloaisp`
--

CREATE TABLE `tloaisp` (
  `id` bigint UNSIGNED NOT NULL,
  `id_sp` bigint NOT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hang_sx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quoc_gia_sx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsanpham`
--

CREATE TABLE `tsanpham` (
  `id_sp` bigint UNSIGNED NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kho_hang` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsanpham`
--

INSERT INTO `tsanpham` (`id_sp`, `ten_sp`, `gia_sp`, `image`, `kho_hang`, `created_at`, `updated_at`) VALUES
(3, 'Hồng Phấn', 1300000, 'hongphan.jpg', 10, NULL, NULL),
(4, 'Casio N one', 200000, 'blogs1.png', 10, NULL, NULL),
(5, 'Casio N Remake', 499000, 'casion2.png', 10, NULL, NULL),
(6, 'Smartio2 Watch', 6200000, 'thongminh.jpg', 10, NULL, NULL),
(7, 'Star Model1', 540000, 'vanden.jpg', 10, NULL, NULL),
(8, 'Star Model2', 460000, 'vang01.jpg', 10, NULL, NULL),
(9, 'Kowath Light', 75000, 'vangtrang.jpg', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_tk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `loai_tk`, `created_at`, `updated_at`) VALUES
(4, 'NguyenVan', 'quyenvanboqmak@gmail.com', '$2y$10$Ig9/tzxALReSsQWUhUiVcu3oohCTBnOfFtdeKMRA4LMYtpnXX7qO2', 'user', '2021-03-05 03:49:49', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tbaiviet`
--
ALTER TABLE `tbaiviet`
  ADD PRIMARY KEY (`id_bv`),
  ADD UNIQUE KEY `tbaiviet_id_sp_unique` (`id_sp`);

--
-- Chỉ mục cho bảng `tdamua`
--
ALTER TABLE `tdamua`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tgiamgia`
--
ALTER TABLE `tgiamgia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tgiamgia_id_sp_unique` (`id_sp`);

--
-- Chỉ mục cho bảng `tgiohang`
--
ALTER TABLE `tgiohang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tgiohang_id_sp_unique` (`id_sp`);

--
-- Chỉ mục cho bảng `thomebaiviet`
--
ALTER TABLE `thomebaiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thomehot`
--
ALTER TABLE `thomehot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thomenew`
--
ALTER TABLE `thomenew`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thomesale`
--
ALTER TABLE `thomesale`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tloaisp`
--
ALTER TABLE `tloaisp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tloaisp_id_sp_unique` (`id_sp`);

--
-- Chỉ mục cho bảng `tsanpham`
--
ALTER TABLE `tsanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbaiviet`
--
ALTER TABLE `tbaiviet`
  MODIFY `id_bv` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tdamua`
--
ALTER TABLE `tdamua`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tgiamgia`
--
ALTER TABLE `tgiamgia`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tgiohang`
--
ALTER TABLE `tgiohang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;

--
-- AUTO_INCREMENT cho bảng `thomebaiviet`
--
ALTER TABLE `thomebaiviet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thomehot`
--
ALTER TABLE `thomehot`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thomenew`
--
ALTER TABLE `thomenew`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thomesale`
--
ALTER TABLE `thomesale`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tloaisp`
--
ALTER TABLE `tloaisp`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tsanpham`
--
ALTER TABLE `tsanpham`
  MODIFY `id_sp` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
