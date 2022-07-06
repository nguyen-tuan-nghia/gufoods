-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2022 lúc 04:04 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gufoods`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin@gmail.com', '96e79218965eb72c92a549dd5a330112', NULL, NULL),
(6, 'danh ha', 'ha2@gmail.com', '96e79218965eb72c92a549dd5a330112', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_role`
--

CREATE TABLE `admin_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_role`
--

INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(173, 5, 1, NULL, NULL),
(174, 5, 2, NULL, NULL),
(175, 5, 3, NULL, NULL),
(176, 5, 4, NULL, NULL),
(177, 5, 5, NULL, NULL),
(178, 5, 6, NULL, NULL),
(179, 5, 7, NULL, NULL),
(180, 5, 8, NULL, NULL),
(181, 5, 9, NULL, NULL),
(182, 5, 10, NULL, NULL),
(183, 5, 11, NULL, NULL),
(184, 5, 12, NULL, NULL),
(185, 5, 13, NULL, NULL),
(186, 5, 14, NULL, NULL),
(187, 5, 15, NULL, NULL),
(188, 5, 16, NULL, NULL),
(189, 5, 17, NULL, NULL),
(190, 5, 18, NULL, NULL),
(191, 5, 19, NULL, NULL),
(192, 5, 20, NULL, NULL),
(193, 5, 21, NULL, NULL),
(194, 5, 22, NULL, NULL),
(195, 5, 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `category_parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `keywords`, `level`, `status`, `category_parent`, `created_at`, `updated_at`) VALUES
(4, 'Sản phẩm chuẩn GU', 'san-pham-chuan-gu', 'Sản phẩm chuẩn GU', NULL, 1, 0, NULL, NULL),
(5, 'thức ăn, dinh dưỡng', 'thức ăn, dinh dưỡng', 'thức ăn, dinh dưỡng', NULL, 1, 4, NULL, NULL),
(8, 'Bánh gạo lứt', 'banh-gao-lut', 'Bánh gạo lứt', NULL, 1, 5, NULL, NULL),
(11, 'Thức ăn hạt khô', 'thuc-an-hat-kho', 'Thức ăn hạt khô', NULL, 1, 0, NULL, NULL),
(12, 'Eat clean chuẩn GU', 'eat-clean-chuan-gu', 'Eat clean chuẩn GU', NULL, 1, 5, NULL, NULL),
(13, 'Thực dưỡng chuẩn GU', 'thuc-duong-chuan-gu', 'Thực dưỡng chuẩn GU', NULL, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_post`
--

CREATE TABLE `category_post` (
  `id` int(11) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category_post`
--

INSERT INTO `category_post` (`id`, `slug`, `keywords`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Cùng GU ăn kiêng', 'Cùng GU ăn kiêng', 'Cùng GU ăn kiêng', 1, '2022-05-11 14:16:17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delivery`
--

CREATE TABLE `delivery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `delivery`
--

INSERT INTO `delivery` (`id`, `city`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Thành phố Hà Nội', 40000, NULL, NULL),
(2, 'Thành phố Hồ Chí Minh', 60000, NULL, NULL),
(4, 'Tỉnh Bắc Kạn', 40000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(66, 'download1652835156.webp', 19, NULL, NULL),
(72, 'download1652835294.webp', 18, NULL, NULL),
(73, 'download1652835295.webp', 18, NULL, NULL),
(86, 'download1652835630.webp', 17, NULL, NULL),
(87, 'download1652835650.webp', 17, NULL, NULL),
(88, 'download1652835651.webp', 17, NULL, NULL),
(91, 'hinh-anh-bo-hat-hanh-nhan-gufoods-150g-21652835884.webp', 19, NULL, NULL),
(92, 'download1652835912.webp', 19, NULL, NULL);

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_03_24_062701_create_table_social', 1),
(4, '2022_03_27_035738_create_table_product', 1),
(5, '2022_03_30_081219_create_table_star_rating', 1),
(6, '2022_03_30_083240_create_table_gallery', 1),
(7, '2022_04_05_064944_create_table_admin', 1),
(8, '2022_04_05_065249_create_table_role', 1),
(9, '2022_04_05_065447_create_table_admin_role', 1),
(10, '2022_04_05_065754_create_table_order', 1),
(11, '2022_04_05_070131_create_table_order_detail', 1),
(12, '2022_04_05_071222_create_table_delivery', 1),
(13, '2022_04_05_073140_create_table_category', 1),
(14, '2022_04_05_073751_category_product', 1),
(15, '2022_04_05_080842_create_table_web_detail', 1),
(16, '2022_04_09_151908_create_table_ship', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `payment_type`, `created_at`, `updated_at`) VALUES
(22, 7, 2, 'Trả tiền mặt', '2022-05-10', '2022-05-10'),
(23, 7, 0, 'Trả tiền mặt', '2022-05-17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(23, 22, 19, 1, 55000, '2022-05-10', '2022-05-10'),
(24, 23, 19, 3, 55000, '2022-05-17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_post_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `auth_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `category_post_id`, `name`, `image`, `slug`, `keywords`, `content`, `status`, `created_at`, `updated_at`, `auth_name`) VALUES
(2, 2, 'Nhà GU có tất cả các loại đường ăn kiêng', '2-8c95376b-4c8f-46b7-870c-607279c42d511652836390.webp', 'nha-gu-co-tat-ca-cac-loai-duong-an-kieng', 'Nhà GU có tất cả các loại đường ăn kiêng', '<p>Bạn thương đ&atilde; biết đến những loại đường n&agrave;y của nha GU chưa?</p>\r\n\r\n<p><img alt=\"💁‍♀️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb3/1/16/1f481_200d_2640.png\" style=\"height:16px; width:16px\" />Trong những năm gần đ&acirc;y, mọi người c&oacute; xu hướng thay thế&nbsp;<strong>đường b&igrave;nh thường</strong>&nbsp;bằng c&aacute;c<strong>&nbsp;chất tạo ngọt</strong>&nbsp;c&oacute;&nbsp;<strong>nguồn gốc tự nhi&ecirc;n&nbsp;</strong>kh&aacute;c, trong đ&oacute;&nbsp;<strong>đường dừa nước</strong>&nbsp;v&agrave;&nbsp;<strong>đường isomalt</strong>&nbsp;dần trở n&ecirc;n phổ biến kh&ocirc;ng chỉ trong cộng đồng<strong>&nbsp;ăn ki&ecirc;ng</strong>&nbsp;m&agrave; ngay cả những người<strong>&nbsp;kh&ocirc;ng ăn ki&ecirc;ng</strong>&nbsp;cũng lựa chọn ch&uacute;ng l&agrave;m gia vị thay thế.</p>\r\n\r\n<p><img alt=\"👉\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" style=\"height:16px; width:16px\" />Bạn thương c&ugrave;ng GU t&igrave;m hiểu xem sự &ldquo;lợi hại&rdquo; của ch&uacute;ng nh&eacute;!<img alt=\"👈\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/td0/1/16/1f448.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-05-18 01:13:10', NULL, 'nghia'),
(4, 2, 'Cực phẩm healthy kiểu Ý', '000-1-3164fc4a-daf2-40a3-8358-997e98e58e443b7d1652836593.png', 'cuc-pham-healthy-kieu-y', 'Cực phẩm healthy kiểu Ý', '<p><strong>B&aacute;nh quy biscotti</strong>&nbsp;từ l&acirc;u đ&atilde; nức tiếng trong giới s&agrave;nh ăn về độ&nbsp;<strong>thơm ngon</strong>&nbsp;m&agrave; vẫn healthy của b&eacute; n&oacute;. Tuy nhi&ecirc;n, nếu bạn chỉ mới&nbsp;<strong>bắt đầu ăn ki&ecirc;ng, ăn healthy</strong>&nbsp;hoặc nghe danh b&eacute; đ&atilde; l&acirc;u nhưng vẫn c&ograve;n chưa hiểu r&otilde; v&igrave; sao&nbsp;<strong>biscotti</strong>&nbsp;lại xuất sắc như vậy.<br />\r\n<br />\r\n🎁🎁🎁 Đặc biệt,&nbsp;<strong>b&eacute; b&aacute;nh&nbsp;<a href=\"https://www.gufoods.com/biscotti-nguyen-cam\">Biscotti nh&agrave; GU</a></strong>&nbsp;lu&ocirc;n l&agrave; m&oacute;n&nbsp;<strong>best-seller&nbsp;</strong>v&agrave; thuộc h&agrave;ng&nbsp;<strong>Must Try</strong>&nbsp;trong menu nh&agrave; GU đ&oacute; nha bạn thương. C&ugrave;ng GU kh&aacute;m ph&aacute; nha ^^</p>\r\n\r\n<p><strong><a href=\"https://www.gufoods.com/biscotti-nguyen-cam\"><img alt=\"\" src=\"/petmark/public/update/images/images/000-1-553b9e88-2c98-487a-a140-757934796b02e7d1.png\" style=\"height:240px; width:240px\" /><img alt=\"\" src=\"/petmark/public/update/images/images/001-15aff.png\" style=\"height:240px; width:240px\" /></a></strong></p>', 1, '2022-05-18 01:16:33', NULL, 'nghia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_price` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `sell` int(11) NOT NULL DEFAULT 0,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `keywords`, `cost_price`, `price`, `quantity`, `sale`, `sell`, `content`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(17, 'Bánh gạo lứt ăn kiêng GUfoods 510g mix 3 vị ( yến mạch + huyết rồng + tím than)- Tập gym, giảm cân, thực dưỡng, eat clean', 'banh-gao-lut-an-kieng-gufoods-510g-mix-3-vi-yen-mach-huyet-rong-tim-than-tap-gym-giam-can-thuc-duong-eat-clean252316', 'Bánh gạo lứt ăn kiêng GUfoods 510g mix 3 vị ( yến mạch + huyết rồng + tím than)- Tập gym, giảm cân, thực dưỡng, eat clean', 40000, 55000, 100, NULL, 0, 'THÀNH PHẦN\r\nGạo lứt huyết rồng, gạo tấm. Tùy hương vị mà có thêm các thành phần như: yến mạch / gạo lứt tím than / hạt chia / hạt quinoa / đường ăn kiêng & muối hồng Himalaya / …\r\n\r\nGỢI Ý SỬ DỤNG\r\nDùng trực tiếp hoặc ăn kèm với các món tùy thích như bơ đậu phộng, sữa chua, smoothie... Bánh gạo lứt cũng có thể nấu thành cháo, làm bỏng ăn vặt và còn nhiều món ngon khác như:', 1, '2022-05-18 01:00:50', NULL, '4, 5, 8'),
(18, 'Bánh gạo lứt kẹp thơm GUfoods - Ăn kiêng, Ăn vặt healthy, Thơm ngon, Lành mạnh', 'banh-gao-lut-kep-thom-gufoods-an-kieng-an-vat-healthy-thom-ngon-lanh-manh', 'Bánh gạo lứt kẹp thơm GUfoods - Ăn kiêng, Ăn vặt healthy, Thơm ngon, Lành mạnh', 20000, 35000, 100, NULL, 2, 'GIỚI THIỆU\r\n\r\nVừa lạ vừa quen, vị chua chua ngọt ngọt cùng với vị giòn xốp độc đáo chính là sự kết hợp giữa bánh gạo lứt quen thuộc nhà GU và mứt thơm tự nhiên. Bánh gạo lứt kẹp thơm không chỉ cung cấp lượng vitamin C và chất xơ dồi dào cho cơ thể  mà hương vị cũng rất gây nghiện đấy. Bạn thương có thể dùng nhâm nhi ăn vặt mà không sợ tăng cân nhé!\r\n\r\nĐẶC ĐIỂM NỔI BẬT\r\n\r\n✓ Giàu chất xơ và vitamin tự nhiên\r\n\r\n✓ Không phụ gia, không chất bảo quản, an toàn cho sức khỏe\r\n\r\n✓ Món ăn vặt healthy, hỗ trợ ăn kiêng và giảm cân\r\n\r\n✓ Hương vị độc đáo, dễ ăn, không ngán\r\n\r\n✓ Sản phẩm dễ bị vỡ khi vận chuyển xa bằng các kênh vận chuyển thông thường, bạn cân nhắc trước khi đặt nhé\r\n\r\nHƯƠNG VỊ\r\n\r\nVỏ bánh ngoài giòn xốp, bùi thơm mùi gạo lứt, kết hợp với vị chua thanh, ngọt dịu của nhân mứt thơm tạo nên hương vị hoà quyện, dễ ăn, không ngán.\r\n\r\nTHÀNH PHẦN\r\n\r\nBánh gạo lứt, mứt thơm.\r\n\r\nGIÁ TRỊ DINH DƯỠNG\r\n\r\n- Trong 100g bánh gạo lứt có chứa:\r\n\r\n+ Năng lượng: 378 kcal\r\n\r\n+ Carbohydrate: 78.3g\r\n\r\n+ Chất đạm: 8.81g\r\n\r\n+ Chất béo: 3.3g\r\n\r\n+ Các vi chất dinh dưỡng: Vitamin B6, sắt, canxi, ma-giê, kali, natri,...\r\n\r\n- Thơm rất giàu chất xơ, vitamin C và là nguồn cung cấp dồi dào vitamin B1 và các khoáng chất sắt, canxi, photpho, mangan.\r\n\r\nLỢI ÍCH SỨC KHỎE\r\n\r\n1/ Phù hợp cho người ăn kiêng\r\n\r\nGạo lứt chứa nhiều chất xơ, giúp cơ thể tiêu hóa tốt hơn,no lâu hơn và hấp thụ ít calo (năng lượng) vào cơ thể.\r\n\r\n2/ Cung cấp nguồn vitamin C dồi dào\r\n\r\nTrong quả thơm chứa hàm lượng vitamin C cao - là chất chống oxy hóa mạnh mẽ, giúp loại bỏ các gốc tự do, qua đó làm chậm quá trình lão hoá và tăng sức đề kháng cho cơ thể.\r\n\r\nHƯỚNG DẪN SỬ DỤNG\r\n\r\nSản phẩm dùng ăn liền.\r\n\r\nHƯỚNG DẪN BẢO QUẢN\r\n\r\nĐậy kín nắp ngay sau khi sử dụng. Bảo quản nơi khô ráo thoáng mát, tránh ánh nắng trực tiếp\r\n\r\nKHỐI LƯỢNG TỊNH\r\n\r\n- Hũ 80g\r\n\r\n- Hũ 150g\r\n\r\nHẠN SỬ DỤNG\r\n\r\n12 tháng kể từ ngày sản xuất\r\n\r\nNgày sản xuất: xem trên bao bì sản phẩm\r\n\r\nXUẤT XỨ\r\n\r\nViệt Nam\r\n\r\n*Lưu ý:\r\n\r\n- Bao bì sản phẩm có thể thay đổi theo từng đợt nhập hàng.\r\n\r\n- Sản phẩm dễ bị vỡ khi vận chuyển xa bằng các kênh vận chuyển thông thường, bạn cân nhắc trước khi đặt nhé', 1, '2022-05-18 00:54:54', NULL, '4, 5, 8'),
(19, 'Bơ Hạnh nhân ăn kiêng GUfoods - Tự nhiên, lành mạnh', 'bo-hanh-nhan-an-kieng-gufoods-tu-nhien-lanh-manh1417272972', 'Bơ Hạnh nhân ăn kiêng GUfoods - Tự nhiên, lành mạnh', 40000, 55000, 1, NULL, 1, 'THÀNH PHẦN\r\n- Bơ hạt hạnh nhân: 100% hạnh nhân\r\n\r\nHƯỚNG DẪN SỬ DỤNG\r\nDùng trực tiếp sau khi mở hũ.\r\nThường được dùng kèm bánh gạo lứt, bánh mì, làm sốt chấm,...', 1, '2022-05-18 01:05:42', NULL, '4, 5, 8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'thêm phí vận chuyển', NULL, NULL),
(2, 'sửa phí vận chuyển', NULL, NULL),
(3, 'xóa phí vận chuyển', NULL, NULL),
(4, 'xem phí vận chuyển', NULL, NULL),
(5, 'thêm sản phẩm', NULL, NULL),
(6, 'sửa sản phẩm', NULL, NULL),
(7, 'xóa sản phẩm', NULL, NULL),
(8, 'xem sản phẩm', NULL, NULL),
(9, 'thêm danh mục', NULL, NULL),
(10, 'sửa danh mục', NULL, NULL),
(11, 'xóa danh mục', NULL, NULL),
(12, 'xem danh mục', NULL, NULL),
(13, 'xem đơn hàng', NULL, NULL),
(14, 'sửa đơn hàng', NULL, NULL),
(15, 'xóa đơn hàng', NULL, NULL),
(16, 'xem chi tiết đơn hàng', NULL, NULL),
(17, 'xem thông tin khách hàng', NULL, NULL),
(18, 'xem báo cáo thống kê', NULL, NULL),
(19, 'quản lý thông tin website', NULL, NULL),
(20, 'xem nhân viên', NULL, NULL),
(21, 'xóa nhân viên', NULL, NULL),
(22, 'sửa nhân viên', NULL, NULL),
(23, 'phân quyền', NULL, NULL),
(24, 'thêm nhân viên', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ship`
--

CREATE TABLE `ship` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ship`
--

INSERT INTO `ship` (`id`, `order_id`, `name`, `phone`, `note`, `city`, `price`, `address`, `created_at`, `updated_at`) VALUES
(14, 22, 'danh ha', '322342444', NULL, 'Thành phố Hà Nội', 40000, 'a10', NULL, NULL),
(15, 23, 'danh ha', '322342444', NULL, 'Thành phố Hà Nội', 40000, 'a10', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tinhthanhpho`
--

CREATE TABLE `tbl_tinhthanhpho` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tbl_tinhthanhpho`
--

INSERT INTO `tbl_tinhthanhpho` (`id`, `name`, `type`) VALUES
(1, 'Thành phố Hà Nội', 'Thành phố Trung ương'),
(2, 'Tỉnh Hà Giang', 'Tỉnh'),
(4, 'Tỉnh Cao Bằng', 'Tỉnh'),
(6, 'Tỉnh Bắc Kạn', 'Tỉnh'),
(8, 'Tỉnh Tuyên Quang', 'Tỉnh'),
(10, 'Tỉnh Lào Cai', 'Tỉnh'),
(11, 'Tỉnh Điện Biên', 'Tỉnh'),
(12, 'Tỉnh Lai Châu', 'Tỉnh'),
(14, 'Tỉnh Sơn La', 'Tỉnh'),
(15, 'Tỉnh Yên Bái', 'Tỉnh'),
(17, 'Tỉnh Hoà Bình', 'Tỉnh'),
(19, 'Tỉnh Thái Nguyên', 'Tỉnh'),
(20, 'Tỉnh Lạng Sơn', 'Tỉnh'),
(22, 'Tỉnh Quảng Ninh', 'Tỉnh'),
(24, 'Tỉnh Bắc Giang', 'Tỉnh'),
(25, 'Tỉnh Phú Thọ', 'Tỉnh'),
(26, 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
(27, 'Tỉnh Bắc Ninh', 'Tỉnh'),
(30, 'Tỉnh Hải Dương', 'Tỉnh'),
(31, 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
(33, 'Tỉnh Hưng Yên', 'Tỉnh'),
(34, 'Tỉnh Thái Bình', 'Tỉnh'),
(35, 'Tỉnh Hà Nam', 'Tỉnh'),
(36, 'Tỉnh Nam Định', 'Tỉnh'),
(37, 'Tỉnh Ninh Bình', 'Tỉnh'),
(38, 'Tỉnh Thanh Hóa', 'Tỉnh'),
(40, 'Tỉnh Nghệ An', 'Tỉnh'),
(42, 'Tỉnh Hà Tĩnh', 'Tỉnh'),
(44, 'Tỉnh Quảng Bình', 'Tỉnh'),
(45, 'Tỉnh Quảng Trị', 'Tỉnh'),
(46, 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
(48, 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
(49, 'Tỉnh Quảng Nam', 'Tỉnh'),
(51, 'Tỉnh Quảng Ngãi', 'Tỉnh'),
(52, 'Tỉnh Bình Định', 'Tỉnh'),
(54, 'Tỉnh Phú Yên', 'Tỉnh'),
(56, 'Tỉnh Khánh Hòa', 'Tỉnh'),
(58, 'Tỉnh Ninh Thuận', 'Tỉnh'),
(60, 'Tỉnh Bình Thuận', 'Tỉnh'),
(62, 'Tỉnh Kon Tum', 'Tỉnh'),
(64, 'Tỉnh Gia Lai', 'Tỉnh'),
(66, 'Tỉnh Đắk Lắk', 'Tỉnh'),
(67, 'Tỉnh Đắk Nông', 'Tỉnh'),
(68, 'Tỉnh Lâm Đồng', 'Tỉnh'),
(70, 'Tỉnh Bình Phước', 'Tỉnh'),
(72, 'Tỉnh Tây Ninh', 'Tỉnh'),
(74, 'Tỉnh Bình Dương', 'Tỉnh'),
(75, 'Tỉnh Đồng Nai', 'Tỉnh'),
(77, 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
(79, 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
(80, 'Tỉnh Long An', 'Tỉnh'),
(82, 'Tỉnh Tiền Giang', 'Tỉnh'),
(83, 'Tỉnh Bến Tre', 'Tỉnh'),
(84, 'Tỉnh Trà Vinh', 'Tỉnh'),
(86, 'Tỉnh Vĩnh Long', 'Tỉnh'),
(87, 'Tỉnh Đồng Tháp', 'Tỉnh'),
(89, 'Tỉnh An Giang', 'Tỉnh'),
(91, 'Tỉnh Kiên Giang', 'Tỉnh'),
(92, 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
(93, 'Tỉnh Hậu Giang', 'Tỉnh'),
(94, 'Tỉnh Sóc Trăng', 'Tỉnh'),
(95, 'Tỉnh Bạc Liêu', 'Tỉnh'),
(96, 'Tỉnh Cà Mau', 'Tỉnh');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `money_spent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `order`, `money_spent`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Tuấn Nghĩa', 'tuannghia1406@gmail.com', NULL, '96e79218965eb72c92a549dd5a330112', NULL, 4, 34849995, '2022-04-10 21:13:46', '2022-05-06 19:03:10'),
(7, 'ha', 'ha@gmail.com', NULL, '96e79218965eb72c92a549dd5a330112', NULL, 1, 55000, '2022-05-10 01:07:33', '2022-05-10 01:44:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `web_detail`
--

CREATE TABLE `web_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fan_page` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `web_detail`
--

INSERT INTO `web_detail` (`id`, `name`, `logo`, `keywords`, `address`, `email`, `phone`, `fan_page`, `created_at`, `updated_at`) VALUES
(1, 'Shoppy', 'hinh-nen-vit-avatar-anh-vit-cute-ngoc-nghech-11650106332.jpg', NULL, 'Nam Định', 'admin@gmail.com', '097-893-1719', NULL, NULL, '2022-04-17 03:27:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`),
  ADD KEY `admin_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_order_id_foreign` (`order_id`),
  ADD KEY `order_detail_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_post_id` (`category_post_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ship_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `tbl_tinhthanhpho`
--
ALTER TABLE `tbl_tinhthanhpho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `web_detail`
--
ALTER TABLE `web_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `ship`
--
ALTER TABLE `ship`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `web_detail`
--
ALTER TABLE `web_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_post_id`) REFERENCES `category_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ship`
--
ALTER TABLE `ship`
  ADD CONSTRAINT `ship_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
