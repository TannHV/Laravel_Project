-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2023 lúc 05:37 AM
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
-- Cơ sở dữ liệu: `shoplaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stt` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `show_hide` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `stt`, `parent_id`, `name`, `description`, `slug`, `show_hide`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'HOME', 'hien home', 'home', 1, '2023-02-21 08:34:32', '2023-02-21 08:34:32'),
(2, 2, 2, 'ABOUT', 'trang gioi thieu', 'about', 1, '2023-02-21 08:34:59', '2023-02-21 08:34:59'),
(3, 3, 3, 'SHOP', 'trang san pham', 'shop', 1, '2023-02-21 08:35:32', '2023-02-21 08:35:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_20_151827_products', 2),
(6, '2023_02_20_152418_menus', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `Categories` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `color` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `show_hide` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `no`, `name`, `slug`, `Categories`, `image`, `price`, `size`, `color`, `description`, `status`, `show_hide`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laptop ASUS Vivobook X515EA-BQ3015W', 'laptop-asus-vivobook-x515ea-bq3015w', 'Asus', 'https://lh3.googleusercontent.com/DQiuYS7rg-1tkxetV8ufIXEpgBUXC22YduYn0ayJH3th0R0GG7keBymNaYz-dgksdgy_XsEMDAo0N6XUSdj5ZQeg67Zcgjf0GQ=w1000-rw', '16990000', '15.6 inch', 'White', '- CPU: Intel Core i7-1165G7\r\n- Màn hình: 15.6\" IPS (1920 x 1080)\r\n- RAM: 8GB Onboard DDR4\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 2 cell 37 Wh Pin liền\r\n- Khối lượng: 1.8kg', 'available', 1, '2023-02-22 21:18:00', '2023-02-23 18:56:27'),
(2, 2, 'Laptop ACER Aspire 5 A514-54-5127', 'laptop-acer-aspire-5-a514-54-5127', 'Acer', 'https://lh3.googleusercontent.com/02orwFyiy7RcM8bLGmm8on1vJJU0nk3TXaTmLe8PS1tJce4wG6l7q3VrI48EDAfpzcLiL4EuGc3KseXLaFEX9fhK2WcpITaA=w1000-rw', '15590000', '14 inch', 'silver', '- CPU: Intel Core i5-1135G7\r\n- Màn hình: 14\" IPS (1920 x 1080)\r\n- RAM: 1 x 4GB, 1 x 4GB Onboard DDR4 2666MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home SL\r\n- 48 Wh\r\n- Khối lượng: 1.5kg', 'available', 1, '2023-02-23 04:34:06', '2023-02-23 04:34:06'),
(3, 3, 'Laptop Asus Vivobook 15X OLED A1503ZA-L1422W', 'laptop-asus-vivobook-15x-oled-a1503za-l1422w', 'Asus', 'https://lh3.googleusercontent.com/ZPh7gfPRD6UrLh5zr6k4Zmk5NYoYC0AD_1p8gGexbKQT8W3SR1H2cCGlOTq5SVXxF28EDcIUBF9ntAB3K3XIl84RR0AeOtmy=w1000-rw', '18990000', '15.6 inch', 'Blue silver', '- CPU: Intel Core i5-12500H\r\n- Màn hình: 15.6\" OLED (1920 x 1080)\r\n- RAM: 8GB Onboard DDR4\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 3 cell 70 Wh\r\n- Khối lượng: 1.7kg', 'available', 1, '2023-02-23 04:35:35', '2023-02-23 04:45:53'),
(4, 4, 'Laptop HP Pavilion 14-dv2033TU', 'laptop-hp-pavilion-14-dv2033tu', 'HP', 'https://lh3.googleusercontent.com/pe2t-YZ0nXHNmo0PNjEiGMcnY7IBL7zpkXY-_1gEHA1MukUI3a31KM6kWQW4otyLnhdTZ1DL7NsdNHvt58naTMOLNxdVjIOq=w1000-rw', '17590000', '14 inch', 'bronze', '- CPU: Intel Core i5-1235U\r\n- Màn hình: 14\" IPS (1920 x 1080)\r\n- RAM: 2 x 4GB DDR4 3200MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 3 cell 43 Wh Pin liền\r\n- Khối lượng: 1.4kg', 'available', 1, '2023-02-23 04:38:46', '2023-02-23 04:38:46'),
(5, 5, 'MacBook Air 2020 13.3 inch MGN63SA/A', 'macbook-air-2020-133-inch-mgn63saa', 'Apple', 'https://lh3.googleusercontent.com/Ezh1zisXToaMPP30pXE50dnotXpEyxnGsYpbd6uZc6jEWRWhMrMY2EDuXNcWPhw4nfcwwC-mGGVEkkRtRSJE0P3hRPuvCjw=w1000-rw', '19900000', '14 inch', 'silver', '- CPU: Apple M1\r\n- Màn hình: 13.3\" IPS (2560 x 1600)\r\n- RAM: 8GB Onboard LPDDR4 3733MHz\r\n- Đồ họa: Onboard\r\n- Lưu trữ: 256GB SSD /\r\n- Hệ điều hành: macOS\r\n- Pin liền\r\n- Khối lượng: 1.3kg', 'available', 1, '2023-02-23 04:40:20', '2023-02-23 04:40:20'),
(6, 6, 'Laptop ACER Aspire 7 A715-43G-R8GA', 'laptop-acer-aspire-7-a715-43g-r8ga', 'Acer', 'https://lh3.googleusercontent.com/A6seUrkZalGV5cYTciGmbR8hNJSfeJM8wjsTT6pkvy4mtDOvfzzx_NZb8EQzyVKfHYsCDUveUu-BLoMZK3y17mO5p9lg6fbD=w1000-rw', '20990000', '15.6 inch', 'Black', '- CPU: AMD Ryzen 5 5625U\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / AMD Radeon Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 3 cell 50 Wh Pin liền\r\n- Khối lượng: 2.1kg', 'available', 1, '2023-02-23 04:42:10', '2023-02-23 04:42:10'),
(7, 7, 'Laptop HP ProBook 440 G9', 'laptop-hp-probook-440-g9', 'HP', 'https://lh3.googleusercontent.com/QT2QTju0ig0ZprlHHYBLEJzlbYWoJaGIHPcBqy8_ep8D_9-yYJAAsztz75MEMTrjGlJHTgYQaen90TYbIuuRROhAL17f4M3e=w1000-rw', '21990000', '14 inch', 'silver', '- CPU: Intel Core i5-1235U\r\n- Màn hình: 14\" IPS (1920 x 1080)\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 3 cell 51 Wh Pin liền\r\n- Khối lượng: 1.4kg', 'available', 1, '2023-02-23 04:43:40', '2023-02-23 04:43:40'),
(8, 8, 'MacBook Pro 2020 13.3 inch MYDA2SA/A', 'macbook-pro-2020-133-inch-myda2saa', 'Apple', 'https://lh3.googleusercontent.com/TpaYuw4yUvUwc5Pgc7rUdPYkoJMcFnI-7uRLTlGaRWU8Ereqi42--p2U-Ufjs5cjFcOa_FBNq2aG7W0VZlvljREsXYUuapMN=w1000-rw', '27990000', '13.3 inch', 'White', '- CPU: Apple M1\r\n- Màn hình: 13.3\" IPS (2560 x 1600)\r\n- RAM: 8GB Onboard LPDDR4 3733MHz\r\n- Đồ họa: Onboard\r\n- Lưu trữ: 256GB SSD /\r\n- Hệ điều hành: macOS\r\n- Pin liền\r\n- Khối lượng: 1.4kg', 'available', 1, '2023-02-23 04:44:46', '2023-02-23 04:44:46'),
(9, 9, 'Laptop Dell Vostro 3510', 'laptop-dell-vostro-3510', 'Dell', 'https://lh3.googleusercontent.com/0bOv9u3l2lXqlCMrgb1JCPgyT2Ajq6MBu1EX3-7oYS7YSB0S3N2pERFtqddBYrMZp2eL0POtfVB7naIlm1-W5N5GTUvXbmcw=w1000-rw', '17980000', '15.6 inch', 'Black', '- CPU: Intel Core i5-1135G7\r\n- Màn hình: 15.6\" WVA (1920 x 1080)\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: GeForce MX350 2GB GDDR5 / Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home SL + Office Home & Student 2021\r\n- Pin: 3 cell 42 Wh Pin liền\r\n- Khối lượng: 1.7kg', 'available', 1, '2023-02-23 05:36:42', '2023-02-23 05:36:42'),
(10, 10, 'Laptop Dell Vostro 5620', 'laptop-dell-vostro-5620', 'Dell', 'https://lh3.googleusercontent.com/bfMEAqLupCvcpKtMN39DDpJwAQxHTBmIq6Mh0zvT6x973O-4lBWC4B2BG7L4X-CvB4MB9qspgCRzSGrrtTI01jhuFXT1JppDkA=w1000-rw', '22890000', '16 inch', 'gray', '- CPU: Intel Core i5-1240P\r\n- Màn hình: 16\" WVA (1920 x 1200)\r\n- RAM: 2 x 8GB DDR4 3200MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 4 cell Pin liền\r\n- Khối lượng: 1.9kg', 'available', 1, '2023-02-23 05:39:22', '2023-02-23 05:39:22'),
(12, 11, 'Laptop ASUS Gaming ROG Strix G513IE-HN246W', 'laptop-asus-gaming-rog-strix-g513ie-hn246w', 'Asus', 'https://lh3.googleusercontent.com/WpbKGo25JZWO01w-EdBMXhtcohARdt5KLBoNjMRwbFhRvL-2vkTRtNcVB_22xzdn30XKmDtTYnR1zbnFYMGA-dcQpPpxUWHZ=w1000-rw', '22990000', '15.6 inch', 'gray', '- CPU: AMD Ryzen 7 4800H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050Ti 4GB GDDR6 / AMD Radeon Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 4 cell 56 Wh Pin liền\r\n- Khối lượng: 2.1kg', 'available', 1, '2023-02-23 17:27:44', '2023-02-23 17:27:44'),
(13, 12, 'Laptop ACER Nitro AN515-58-773Y', 'laptop-acer-nitro-an515-58-773y', 'Acer', 'https://lh3.googleusercontent.com/OyIhGGxumpQIsk8jL9Zv4vHiy0q-igYnY_OGg41VPOnkVgFXvOn0kfY1_C9Tzwb4bjEdFLi-WexmvOHIzTP9e6o1PPF3UqTa=w1000-rw', '27980000', '15.6 inch', 'Black', '- CPU: Intel Core i7-12700H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050Ti 4GB GDDR6 / Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 4 cell 57 Wh\r\n- Khối lượng: 2.5kg', 'available', 1, '2023-02-23 17:28:51', '2023-02-23 17:28:51'),
(14, 13, 'Laptop Dell Inspiron 16 5620', 'laptop-dell-inspiron-16-5620', 'Dell', 'https://lh3.googleusercontent.com/TNVRiUKOVRjgzTyGbfor7EbNkxJvTWFSNTyMRzaWK-FuD5shh2EW5uo5J0BYwBc7y7PBNZTb4ifWG29QH0ihKqxYRHa8lzUC=w1000-rw', '23590000', '16 inch', 'silver', '- CPU: Intel Core i7-1255U\r\n- Màn hình: 16\" WVA (1920 x 1200)\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home SL + Office Home & Student 2021\r\n- Pin: 4 cell 54 Wh Pin liền\r\n- Khối lượng: 1.9kg', 'available', 1, '2023-02-23 17:30:12', '2023-02-23 17:30:12'),
(15, 14, 'MacBook Pro 2020 13.3 inch MYD92SA/A', 'macbook-pro-2020-133-inch-myd92saa', 'Apple', 'https://lh3.googleusercontent.com/KzyvhxCUWwj_M3ChaRlDe6wJ-eS9IyVdcLBK7t0V7Z4ZXzR-jnZ6NuCrn8dNDEbkHXPBKRyzNeigaL0u8zKMd_w3cCm13kzuTg=w1000-rw', '31990000', '13.3 inch', 'silver', '- CPU: Apple M1\r\n- Màn hình: 13.3\" IPS (2560 x 1600)\r\n- RAM: 8GB Onboard LPDDR4 3733MHz\r\n- Đồ họa: Onboard\r\n- Lưu trữ: 512GB SSD /\r\n- Hệ điều hành: macOS\r\n- Pin liền\r\n- Khối lượng: 1.4kg', 'available', 1, '2023-02-23 17:31:36', '2023-02-23 17:31:36'),
(16, 15, 'Laptop HP Victus 15-fa0115TX', 'laptop-hp-victus-15-fa0115tx', 'HP', 'https://lh3.googleusercontent.com/HFt0xwUBOfQUytnxl-4eZebvAje29jIwQtW7UQC_FLw3LsEcVlYBZ4OrFtYNdCYkdK3iAS-QRXQQ1FBuYH4sgDqGWeu7HTj7=w1000-rw', '22790000', '15.6 inch', 'Black', '- CPU: Intel Core i5-12500H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB GDDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home SL\r\n- Pin: 4 cell 70 Wh Pin liền\r\n- Khối lượng: 2.4kg', 'available', 1, '2023-02-23 17:33:55', '2023-02-23 17:33:55'),
(17, 15, 'Laptop MSI GF63 Thin 11UC', 'laptop-msi-gf63-thin-11uc', 'MSI', 'https://lh3.googleusercontent.com/uT6TQtXUhjrUx0zsDhb836NTYPwxyyDxXzxKY0qM-McJOzPvmmb_-d6UL2ZsC3EUtgOyfGeGbhFRUf_wF7CX851C_yuM6f_U=w1000-rw', '20990000', '15.6 inch', 'Black', '- CPU: Intel Core i7-11800H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 3 cell 51 Wh Pin liền\r\n- Khối lượng: 1.8kg', 'available', 1, '2023-02-23 17:35:39', '2023-02-23 17:35:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tam', 'dtam3002@gmail.com', NULL, '$2y$10$IweHTDO.p892xxeJ9WLa.eUyYxwzwhsynTubywy0QOOI95Ji.kXb2', NULL, '2023-02-22 03:02:42', '2023-02-22 03:02:42'),
(2, 'TannDuc', 'dtam271@gmail.com', NULL, '$2y$10$qnI39bZqIfxUUj9vFe/12uPecWQoFh/XfC0LsPkcAyQpueP4ihy96', NULL, '2023-02-22 03:10:29', '2023-02-22 03:10:29'),
(3, 'Tam', '12213@gmail.vn', NULL, '$2y$10$B1Smbn0yd/fukZsjJaDitOpZbkfreJeuHVlfGf0Jgqx50Wd6h8x6i', NULL, '2023-02-22 09:06:06', '2023-02-22 09:06:06'),
(4, 'Tam', '3313@fadf', NULL, '$2y$10$YXJdHzXNKGG7Q.JAxLx2yOUeg58M0zFBGV2eZSTesHF/.h.UGWyoS', NULL, '2023-02-22 09:07:56', '2023-02-22 09:07:56'),
(5, 'tannha', '123@gmail.com', NULL, '$2y$10$HNhDqgR173PLf92qi2JF0Op0COkWXEq96jMYfymg/2sQUHyWEs652', NULL, '2023-02-23 04:04:40', '2023-02-23 04:04:40'),
(6, 'Tam', 'haductam@gmail.com', NULL, '$2y$10$NBtK8rs70Iase01nvRtIlu90wtjtK.Cs4yNnIQc7hR0kdi/a2iX/C', NULL, '2023-02-23 18:50:58', '2023-02-23 18:50:58');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
