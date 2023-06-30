-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2022 lúc 01:21 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_11_07_212951_create_tbl_admin_table', 1),
(4, '2021_11_13_235504_create_categories_table', 1),
(5, '2021_11_13_235536_create_products_table', 1),
(6, '2021_11_18_220758_create_tbl_category_product', 2),
(7, '2021_11_19_175843_create_tbl_brand_product', 3),
(8, '2021_11_19_193841_create_tbl_product', 4),
(9, '2021_11_28_231535_tbl_customer', 5),
(10, '2021_11_28_235855_tbl_shipping', 6),
(11, '2021_12_01_063851_tbl_payment', 7),
(12, '2021_12_01_063951_tbl_order', 7),
(13, '2021_12_01_064220_tbl_order_details', 7);

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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` bigint(20) UNSIGNED NOT NULL,
  `categoryID` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listPrice` decimal(8,2) NOT NULL,
  `discountPercent` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(3, 'admin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Davil', '0905899053', '2021-11-15 23:02:15', NULL),
(4, 'admin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Davil', '0905899053', '2021-11-15 23:02:15', NULL),
(5, 'vanquy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Văn Qúy', '0905899053', '2021-11-19 00:06:10', NULL),
(6, 'vanquy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Văn Qúy', '0905899053', '2021-11-19 00:06:10', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(18, 'APPLE', '<p>APPLE</p>', 0, NULL, NULL),
(19, 'SAMSUNG', '<p>SAMSUNG</p>', 0, NULL, NULL),
(20, 'NOKIA', '<p>NOKIA</p>', 0, NULL, NULL),
(21, 'NIKE', '<p>NIKE</p>', 0, NULL, NULL),
(22, 'Channel', '<p>Channel</p>', 0, NULL, NULL),
(23, 'Panasonic', '<p>Panasonic</p>', 0, NULL, NULL),
(24, 'Vinfast', '<p>Vinfast</p>', 0, NULL, NULL),
(25, 'Alibaba', '<p>Alibaba</p>', 0, NULL, NULL),
(26, 'Kawasaki', '<p>Kawasaki</p>', 0, NULL, NULL),
(27, 'Nike', '<p>Nike</p>', 0, NULL, NULL),
(28, 'Sunhouse', '<p>Sunhouse</p>', 0, NULL, NULL),
(29, 'CAMBA', '<p>CAMBA</p>', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(30, 'Đồ điện tử', '<p>Điện thoại</p>\r\n\r\n<p>M&aacute;y t&iacute;nh bảng</p>\r\n\r\n<p>M&aacute;y đọc s&aacute;ch</p>\r\n\r\n<p>Laptop, Macbook</p>', 0, NULL, NULL),
(31, 'Thiết bị nghe, nhìn', '<p>TV</p>\r\n\r\n<p>M&aacute;y chiếu</p>\r\n\r\n<p>Tai nghe</p>\r\n\r\n<p>M&aacute;y nghe nhạc</p>\r\n\r\n<p>Đầu đĩa</p>', 0, NULL, NULL),
(32, 'Đồ gia dụng', '<p>Tủ lạnh</p>\r\n\r\n<p>M&aacute;y giặt</p>\r\n\r\n<p>M&aacute;y h&uacute;t bụi</p>\r\n\r\n<p>L&ograve; vi s&oacute;ng</p>\r\n\r\n<p>Quạt</p>', 0, NULL, NULL),
(33, 'Xe cộ', '<p>&Ocirc; t&ocirc;</p>\r\n\r\n<p>Xe m&aacute;y</p>\r\n\r\n<p>Xe đạp</p>\r\n\r\n<p>Phụ t&ugrave;ng xe</p>\r\n\r\n<p>Xe chuy&ecirc;n dụng</p>', 0, NULL, NULL),
(34, 'Sách báo, nghệ thuật', '<p>S&aacute;ch, truyện chữ</p>\r\n\r\n<p>Tạp ch&iacute;</p>\r\n\r\n<p>Truyện tranh</p>\r\n\r\n<p>Văn ph&ograve;ng phẩm</p>\r\n\r\n<p>Nhạc cụ</p>', 0, NULL, NULL),
(35, 'Thời trang, phụ kiện', '<p>Thời trang nam</p>\r\n\r\n<p>Thời trang nữ</p>\r\n\r\n<p>Phụ kiện&nbsp;</p>\r\n\r\n<p>Gi&agrave;y d&eacute;p</p>\r\n\r\n<p>&nbsp;</p>', 0, NULL, NULL),
(36, 'Thể thao', '<p>M&aacute;y tập thể thao</p>\r\n\r\n<p>Dụng cụ thể thao</p>', 0, NULL, NULL),
(37, 'Nội ngoại thất', '<p>Ngoại thất s&acirc;n vườn</p>\r\n\r\n<p>Nội thất ph&ograve;ng kh&aacute;ch</p>\r\n\r\n<p>Nội thất ph&ograve;ng ngủ</p>\r\n\r\n<p>Nội thất bếp</p>', 0, NULL, NULL),
(38, 'Máy móc chuyên dụng', '<p>M&aacute;y ph&aacute;t điện</p>\r\n\r\n<p>M&aacute;y bơm nước</p>\r\n\r\n<p>Dụng cụ sữa chữa</p>\r\n\r\n<p>Thiết bị an ninh</p>', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lý', NULL, NULL),
(2, '2', 'Đang chờ xử lý', NULL, NULL),
(3, '2', 'Đang chờ xử lý', NULL, NULL),
(4, '3', 'Đang chờ xử lý', NULL, NULL),
(5, 'Thanh toán thẻ ATM', 'Đang chờ xử lý', NULL, NULL),
(6, 'Thanh toán thẻ ghi nợ', 'Đang chờ xử lý', NULL, NULL),
(7, 'Thanh toán thẻ ghi nợ', 'Đang chờ xử lý', NULL, NULL),
(8, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(9, 'Thanh toán thẻ ghi nợ', 'Đang chờ xử lý', NULL, NULL),
(10, 'Thanh toán thẻ ATM', 'Đang chờ xử lý', NULL, NULL),
(11, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(12, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(13, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(14, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(15, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(16, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(17, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(18, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(19, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(20, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(21, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(22, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(23, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(24, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(25, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(26, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(27, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(28, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(29, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(30, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(31, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(32, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(33, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(34, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(35, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(36, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(37, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(38, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(39, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(40, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(41, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(42, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(43, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(44, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(45, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(46, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(47, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(48, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(49, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(50, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(51, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(52, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(53, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(54, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(55, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(56, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(57, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(58, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(59, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(60, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(61, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(62, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(63, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(64, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(65, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(66, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(67, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(68, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(69, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(70, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(71, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(72, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(73, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(74, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(75, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(76, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(77, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(78, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(79, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(80, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(81, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(82, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(83, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(84, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(85, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(86, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(87, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(88, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(89, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(90, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(91, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(92, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(93, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(94, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(95, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(96, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(97, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(98, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(99, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(100, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(101, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(102, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(103, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(104, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(105, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(106, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(107, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(108, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(109, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(110, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(111, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(112, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(113, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(114, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(115, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(116, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(117, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(118, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(119, 'Thanh toán thẻ ATM', 'Đang chờ xử lý', NULL, NULL),
(120, 'Thanh toán thẻ ghi nợ', 'Đang chờ xử lý', NULL, NULL),
(121, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(122, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(123, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL),
(124, 'Nhận tiền mặt', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(52, 30, 'Nokia 8800 black gold', 20, '<h1>Nokia 8800 black gold n&acirc;u main C mới gi&aacute; rẻ</h1>', 'Sự huyền bí, vẻ điềm tĩnh, chín chắn.\r\nMàu vàng hồng là màu sắc “chưa” và “không” bao giờ lỗi mốt cho dù thế giới đang chạy theo công nghệ smart phone thì Nokia 8800 vàng hồng luôn giữ vững được đỉnh cao của mình.\r\nMặt kính được làm bằng chất liệu sapphire, vừa bảo vệ tốt cho máy vừa tạo được độ láng mượt tự nhiên.\r\nPhụ kiện theo máy bao gồm: Sạc, bao da,\r\nBảo hành: 12 tháng.\r\nGía: 3.500.000 vnđ.\r\nĐổi mới trong 7 ngày đầu sử dụng.\r\nPhụ kiện đi kèm: 1 Pin, 1 sạc, bao da.\r\nGiao hàng trên toàn quốc.', '6500', '136.jpg', 0, NULL, NULL),
(53, 33, 'Xe tải Dongben', 26, '<h1>Xe tải Dongben 1t2 mẫu mới</h1>', 'Bán xe tải Dongben 1t2 mẫu mới. Đại lý bán xe tải DongBen 1T2, 1tan2, 1200kg giao ngay. Xe Tải Dongben 1T2 - T30 - Thùng 2m9.\r\nThông số kỹ thuật xe tải Dongben 1T2 – 1.2 tấn – T30.\r\nXe mới 100% lắp ráp tại Việt Nam.\r\nCabin Model 2017 công nghệ GM.\r\nĐộng cơ: DLCG14, Hộp số: 5 số tới 1 số lùi.\r\n4 kỳ, 4 xi-lanh thẳng hàng, tăng áp Turbo tăng áp.\r\nDung tích xi-lanh: 1.499 Cm3.\r\nCông suất cực đại: 80/ 5.200 (kw/Vòng/Phút).\r\nHệ thống phanh: Tang trống/ thủy lực trợ lực chân không.\r\nKích thước lọt lòng: 2.900 x 1.650 x 350 mm (Thùng lửng).\r\nKích thước tổng thể: 4.980 x 1.980 x 1.980 mm. (Thùng lửng).\r\nChiều dài cơ sở/ khoảng cách trục: 3.050 mm.\r\nTrọng lượng bản thân: 1.170 kg (Thùng lửng).\r\nTrọng lượng toàn bộ chở cho phép lưu hành: 2.420 kg.\r\nTrọng tải cho phép lưu hành không cần xin phép: 1.120 kg.\r\nCỡ lốp xe: Trước/ Sau: 175R14/ 175R14.\r\nHệ thống lái: Thanh răng, bánh răng có hỗ trợ tay lái trợ lực.\r\nBảo hành: 02 năm/ 30.000 km.\r\nCabin mới nhất; Máy lạnh cabin, Radio, FM, USB.\r\nDịch vụ hỗ trợ khách hàng khi mua xe.\r\nThủ tục vay vốn nhanh gọn, lãi suất thấp, thủ tục đơn giản, vay thời gian dài.\r\nXe tải DongBen 1t2 có các loại thùng: Thùng lửng, thùng kín, mui bạt.\r\nDịch vụ đăng ký, đăng kiểm trọn gói từ A đến Z.\r\nCung cấp phụ tùng chính hãng, bảo hành chu đáo, chất lượng.\r\nNgoài ra, Chúng tôi còn cung cấp các dòng xe tải khác nhau.\r\nVui lòng liên hệ để có giá tốt nhất.\r\nCông Ty Bán Xe Tải Giá Tốt Nhất Khu Vực Miền Nam.\r\nĐC: 10/9 QL13, P. Vĩnh Phú, TX. Thuận An, T. Bình Dương.', '12000000', '918.jpg', 0, NULL, NULL),
(54, 37, 'Bàn MFC màu vàng 120cm', 28, '<h1>B&agrave;n MFC m&agrave;u v&agrave;ng 120cm phủ melamine chống trầy, chống ẩm&nbsp;</h1>', 'Bàn làm việc MFC chống trầy, chống ẩm - 120cm màu vàng.\r\nBàn làm việc MFC đã qua xử lý chống mối mọt, cong vênh, chống ẩm.\r\nMFC phủ melamine chống trầy xước.\r\nBàn làm việc văn phòng giá rẻ với thiết kế 4 ngăn kéo có khóa thuận tiện trong việc đựng tài liệu, hồ sơ hay đồ dùng cá nhân.\r\nBàn MFC 100cm: 850.000.\r\nBàn MFC 120cm: 950.000.', '75000', '774.jpg', 0, NULL, NULL),
(55, 32, 'BẾP Từ Hitachi HT-K6K', 28, '<h1>BẾP Từ Hitachi HT-K6K New 100% Date 2020</h1>', 'BẾP Từ Hitachi HT-K6K Gồm 2 Bếp từ + 1 Hồng ngoại + 1 Lò nướng, hàng FULL BOX, New 100% Date 2020\r\n👉👉Thiết kế gồm: 2 Bếp từ, 1 hồng ngoại và 1 lò nướng. Lò Nướng tháo ra sẽ như hình nhé mọi người\r\nMột số ưu điểm khi dùng bếp từ: Thiết kế hiện đại, bắt mắt, công suất nấu nướng cao, Tiết kiệm thời gian nấu nướng, không sinh khói hoặc khí CO, CO2 nên đảm bảo môi trường xung quanh luôn trong lành, không gây ra tình trạng cháy nổ hay hỏa hoạn, không gây giật điện,... Đặc biệt có chức năng \" KHÓA TRẺ EM\"\r\nĐiểm nổi bật:\r\n---- Thiết kế đen nguyên khối toàn bộ bếp\r\n---- Các cảm biến chống quá nhiệt, chống cháy\r\n---- Công suất 2 bếp từ là 3kW/bếp (cho thời gian đun nấu nhanh tức thì)\r\n---- Mặt đen làm bằng Caremic chịu lực, chịu nhiệt, chống trầy xước\r\n---- Không tỏa nhiệt ra môi trường xung quanh, không nấu khi không có nồi trên bếp\r\n---- Công nghệ cảm biến SenSor: cảm biến đáy nồi\r\n---- Hiển thị bằng đèn LED và phím bấm điện tử\r\n---- Hẹn giờ, thiết lập chế độ nấu, ...\r\nThông số từ nhà sản xuất\r\n---- Nguồn điện 200V\r\n---- Công suất tối đa 5,8kW\r\n---- Kích thước: 599 × 516 × 236 (Kích thước lỗ đặt bếp 46*56cm)', '8000000', '834.jpg', 0, NULL, NULL),
(56, 30, 'Iphone 31', 18, '<p>Iphone</p>', 'Nokia Việt Nam.\r\nNokia E71 và Nokia E72 nguyên zin.\r\nCam kết máy main zin, màn zin, vỏ zin.\r\nMáy chính hãng Nokia.\r\nBảo hành 12 tháng cho máy.\r\nGiá Nokia E71: 1.400.000 vnđ.\r\nNokia E72: 2.000.000 vnđ.\r\nLiên hệ: 0973677707 hoặc 0984055575.\r\nSố 8 ngõ 124 Nguyễn Xiển-Hạ Đình-Thanh Xuân-Hà Nội.', '80020000', '373.jpg', 0, NULL, NULL),
(57, 30, 'Ốp lưng, dán cường lực Xiaomi Redmi 3s', 19, '<h1>Ốp lưng, d&aacute;n cường lực Xiaomi Redmi 3s</h1>', 'Ốp lưng, dán cường lực Xiaomi Redmi 3s ở Hà Nội. Khuyến mại bút cảm ứng, giá đỡ điện thoại hình con lợn, nút chắn bụi (cắm vào lỗ cắm tai nghe) khi mua ốp lưng xiaomi redmi 3s, cường lực redmi 3s tại cửa hàng Dungpv. Ốp lưng Xiaomi Redmi 3s là loại ốp silicon mềm dẻo nên có độ đàn hồi, độ mềm dẻo rất tốt, không lo bị cong méo khi có lực tác động từ bên ngoài như bóp, bẻ, uốn. Còn miếng dán cường lực xiaomi redmi 3s với độ cứng 9h, độ dày 0.3mm vát đều các góc cạnh đảm bảo dán ăn khít vào màn hình không lo bị bong tróc. Dán cường lực Redmi 3s không sợ bị ảnh hưởng đến cảm ứng, không bị cấn tay khi dùng máy. Chúng tôi còn nhận thay mặt kính cảm ứng redmi 3s bảo hành 3 tháng.\r\nThay mặt kính Xiaomi Redmi 3s, Xiaomi Redmi 3 Pro.\r\nỐp lưng điện thoại Xiaomi Redmi 3s, Xiaomi Redmi 3x silicon.\r\nDán cường lực Xiaomi Redmi 3s, Xiaomi Redmi 3 pro.', '12000', '538.jpg', 0, NULL, NULL),
(58, 30, 'Miếng dán cường lực Xiaomi Mi 5s full màn hình', 18, '<h1>Miếng d&aacute;n cường lực Xiaomi Mi 5s full m&agrave;n h&igrave;nh</h1>', 'Miếng dán cường lực Xiaomi Mi 5s full màn hình.\r\nDán cường lực Xiaomi Mi 5s thiết kế dành riêng cho điện thoại màn hình cong, phủ kín toàn màn hình kể cả phần màn hình cong của máy.\r\nKính cường lực Xiaomi Mi 5s được thiết kế với độ cứng 9h, dàu 0.3 mm được cấu tạo từ 6 lớp khác nhau, giúp bảo vệ điện thoại tốt hơn, giao hàng trên toàn quốc.\r\nVới kinh nghiệm hơn 5 năm kinh doanh phụ kiện: Bao da Xiaomi Mi 5s, ốp lưng Xiaomi Mi 5s, dán cường lực Xiaomi Mi 5s,... Điện thoại, máy tính bảng. Công ty, nhập hàng sản xuất không qua trung gian, mang đến cho khách hàng các sản phẩm chất lượng cao, giá rẻ nhất trên thị trường.\r\nTHông tin liên hệ:\r\nHotline: 0988 990 604 - 0901 771 008.', '7500000', '482.jpg', 0, NULL, NULL),
(59, 35, 'Áo Phao Nữ Siêu Nhẹ Có Mũ Siêu Ấm', 29, '<p>&Aacute;o Phao Nữ Si&ecirc;u Nhẹ C&oacute; Mũ Si&ecirc;u Ấm</p>', 'Áo có cấu trúc 3 lớp chắc chắn: Lớp ngoài và lớp lót được làm từ 100% Nylon, Lớp giữa bông nhẹ 100% polyester\r\n\r\nKhả năng giữ ấm tốt, cản gió hiệu quả, chống thấm nước vào bên trong\r\n\r\nMàu sắc trang nhã, trẻ trung, phù hợp với nhiều tone da chị em\r\n\r\nForm dáng dễ mặc, tối giản nhưng không đơn điệu\r\n\r\nThiết kế túi đựng nhỏ gọn, dễ dàng đựng các vật dụng nhỏ khác\r\n\r\nÁo phao siêu nhẹ, chống tĩnh điện tốt', '3000000', '1042.jpg', 0, NULL, NULL),
(60, 35, 'Áo Polo Nam Cafe Phối Màu', 29, '<h1>&Aacute;o Polo Nam Cafe Phối M&agrave;u</h1>', 'Chất liệu: Sợi Café với thành phần 50% sợi cafe và 50% sợi PET\r\n\r\nChất liệu vải độc quyền đầu tiên của YODY tại Việt Nam\r\n\r\nVải cafe thấm hút mồ hôi, kiểm soát khử mùi cơ thể tốt\r\n\r\nCó khả năng kháng khuẩn\r\n\r\nChống tia UV tự nhiên\r\n\r\nThiết kế dáng suông, đơn giản, dễ mặc, dễ phối đồ', '7500000', '1160.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Thanh Nhật', '123 Ngô Quyền', '0946172819', 'nhat@gmail.com', 'Gửi nhanh', NULL, NULL),
(2, 'Tran Van Quy', '143 Ngo Quyen', '0905899054', 'tvquy.20it12@vku.udn.vn', 'Gui nhanh giup minh', NULL, NULL),
(3, 'Nguyen The Manh', '120 Ho Chi Minh', '0932617281', 'themanh@gmail.com', 'cam on rat nhieu', NULL, NULL),
(4, 'Tran Van Quy', 'Ngo Quyen', '0905899053', 'tvquy2@gmail.com', 'Tốt', NULL, NULL),
(5, 'Trần Văn Qúy', '1 Ho Chi Minh', '09047812381', 'tvquy2k2@gmail.com', 'xin cam on', NULL, NULL),
(6, 'Phan Manh Quan', '93 Tran Phu', '09047128131', 'manhquan@gmail.com', 'Giao nhanh', NULL, NULL),
(7, 'Tran Van Qi', 'Ngo Quyen', '09047128131', 'tvquy.20it12@gmail.com', 'Gửi nhanh', NULL, NULL),
(8, 'Phan Manh Quan', '93 Tran Phu', '09047128131', 'manhquan@gmail.com', 'Tốt', NULL, NULL),
(9, 'Phan Manh Quan', 'Ngo Quyen', '09047128131', 'manhquan@gmail.com', 'nhanh', NULL, NULL),
(10, 'nhat', '93 Tran Phu', '0123912931', 'nhat@gmail.com', 'Giao nhanh', NULL, NULL),
(11, 'Huỳnh Quang Huy', 'Ngô Quyền', '09047128131', 'huy@gmail.com', 'Ship nhanh', NULL, NULL),
(12, 'Tran Van Qi', '93 Tran Phu', '09047128131', 'tvquy@gmail.com', 'Ah', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Le Van A', 'a@gmail.com', NULL, '25f9e794323b453885f5181f1b624d0b', '091273182371', NULL, NULL, NULL),
(4, 'Le Van B', 'b@gmail.com', NULL, '25f9e794323b453885f5181f1b624d0b', '09123618172', NULL, NULL, NULL),
(5, 'Tran Van Quy', 'tvquy.20it12@vku.udn.vn', NULL, 'b0baee9d279d34fa1dfd71aadb908c3f', '098182381283', NULL, NULL, NULL),
(6, 'Trần Ngọc Trúc Linh', 'linh@gmail.com', NULL, 'b0baee9d279d34fa1dfd71aadb908c3f', '09123618172', NULL, NULL, NULL),
(10, 'Nghĩa Anh', 'anh@gmail.com', NULL, 'b0baee9d279d34fa1dfd71aadb908c3f', '09123718231', NULL, NULL, NULL),
(11, 'nhat', 'nhat@gmail.com', NULL, 'b0baee9d279d34fa1dfd71aadb908c3f', '02849284922', NULL, NULL, NULL),
(12, 'Huỳnh Quang Huy', 'huy@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '090471238123', NULL, NULL, NULL),
(13, 'Trần Van Qúy', 'tvquy@gmail.com', NULL, 'b0baee9d279d34fa1dfd71aadb908c3f', '091273182371', NULL, NULL, NULL),
(14, 'Nguyễn Xuân Bảo Toàn', 'admin@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '0836679345', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `products_categoryid_foreign` (`categoryID`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `category_id_2` (`category_id`,`brand_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categoryid_foreign` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category_product` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
