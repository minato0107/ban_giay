-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 25, 2021 lúc 07:12 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Le Viet Phu', 'levietphu171993@gmail.com', '$2y$10$1uW.ia3dr.0EzMloTa8LRe/jwPEAVyDog3lqu/SRL/TpFM3MDDOu6', '2020-12-24 00:51:44', '2020-12-24 00:51:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'color và size',
  `value` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'color', '#000000', '2020-12-24 00:58:56', '2020-12-24 00:58:56'),
(2, 'color', '#763737', '2020-12-24 00:59:07', '2020-12-24 00:59:07'),
(3, 'size', '36', '2020-12-24 00:59:13', '2020-12-24 00:59:13'),
(4, 'size', '37', '2020-12-24 00:59:17', '2020-12-24 00:59:17'),
(5, 'size', '38', '2020-12-24 00:59:20', '2020-12-24 00:59:20'),
(6, 'size', '39', '2020-12-24 00:59:24', '2020-12-24 00:59:24'),
(7, 'size', '40', '2020-12-24 00:59:31', '2020-12-24 00:59:31'),
(8, 'size', '41', '2020-12-24 00:59:35', '2020-12-24 00:59:35'),
(9, 'color', '#fbbcbc', '2020-12-24 01:03:45', '2020-12-24 01:03:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là hiện, 0 là ẩn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `slug`, `title`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Banner1', 'banner1', 'Bộ sưu tập giày', NULL, 'Banner/home-1-01.jpg', 1, '2020-12-25 02:18:24', '2021-01-08 21:53:01'),
(3, 'Banner 2', 'banner-2', '“𝑮𝒊𝒂̀𝒚 𝒙𝒊̣𝒏” đ𝒂𝒏𝒈 đ𝒐̛̣𝒊 𝒏𝒂̀𝒏𝒈 𝒓𝒊𝒏𝒉 𝒗𝒆̂̀ 𝒅𝒊𝒏𝒉.', NULL, 'Banner/home-1-02.jpg', 1, '2020-12-25 03:06:42', '2021-01-08 21:52:53'),
(5, 'Banner3', 'banner3', 'chúng tôi săn lùng bộ sưu tập giày tốt nhất cho người yêu giày', NULL, 'Banner/home-1-03.jpg', 1, '2021-01-03 07:25:57', '2021-01-08 21:52:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cate` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là hiện, 0 là ẩn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `id_cate`, `image`, `content`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Giày Converse 1970s – Top 6 phối màu bán chạy nhất', 'giay-converse-1970s-–-top-6-phoi-mau-ban-chay-nhat', 4, 'Blog/giay-converse-1970s.png ', '<h1>&nbsp;</h1>\r\n\r\n<p>Trải qua bao h&agrave;ng chục thập kỷ, Converse sneaker vẫn l&agrave; c&aacute;i t&ecirc;n trường tồn với thời gian, kh&ocirc;ng bao giờ bị l&atilde;ng qu&ecirc;n. Cho d&ugrave; h&agrave;ng ng&agrave;n mẫu gi&agrave;y mới, n&acirc;ng cấp được ra đời, thế nhưng những mẫu gi&agrave;y Converse vẫn c&oacute; một vị tr&iacute; cố định trong l&ograve;ng c&aacute;c t&iacute;n đồ sneaker. Thậm ch&iacute;, mỗi khi tung ra d&ograve;ng sản phẩm mới th&igrave; y như rằng mẫu gi&agrave;y đ&oacute; sẽ &ldquo;l&agrave;m mưa l&agrave;m gi&oacute;&rdquo; trong một thời gian d&agrave;i.</p>\r\n\r\n<p>Nhắc đến Converse, người ta sẽ nhớ ngay đến ngay 2 d&ograve;ng gi&agrave;y huyền thoại: Converse Classic v&agrave;&nbsp;<strong><a href=\"https://shopgiayreplica.com/converse-1970s/\">Converse Chuck 1970s</a></strong>. Nếu n&oacute;i rằng, Converse Classic l&agrave; khởi đầu th&agrave;nh c&ocirc;ng th&igrave; Converse 1970s đ&atilde; mang lại thời kỳ ho&agrave;ng kim cho h&atilde;ng, l&agrave; một trong những huyền thoại bất tử trong l&agrave;ng gi&agrave;y sneaker. Bao năm qua, đến nay đ&atilde; tr&ograve;n 50 tuổi nhưng sức h&uacute;t th&igrave; vẫn c&ograve;n qu&aacute; khủng khiếp!</p>\r\n\r\n<blockquote>\r\n<p>Vậy bạn c&oacute; biết&nbsp;<a href=\"https://shopgiayreplica.com/bat-mi-5-diem-khac-biet-giua-giay-converse-1970s-va-converse-classic/\"><strong>điểm kh&aacute;c biệt giữa gi&agrave;y Converse 1970s v&agrave; Classic!</strong></a></p>\r\n</blockquote>\r\n\r\n<p>Những đ&ocirc;i Converse 1970s l&agrave; sản phẩm được ưa chuộng nhất bởi những bản phối m&agrave;u v&ocirc; c&ugrave;ng độc đ&aacute;o, tinh tế. Để hiểu s&acirc;u hơn th&igrave; trong b&agrave;i viết n&agrave;y, Shopgiayreplica.com sẽ điểm danh&nbsp;<strong>Top 6 m&agrave;u gi&agrave;y Converse Chuck 1970s b&aacute;n chạy nhất</strong>&nbsp;mọi thời đại.</p>\r\n\r\n<p>Mục lục</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://shopgiayreplica.com/top-6-mau-giay-converse-1970s-ban-chay-nhat/#Giay_Converse_Chuck_1970s_x_Fear_Of_God_Essentials\" title=\"Giày Converse Chuck 1970s x Fear Of God Essentials\">Gi&agrave;y Converse Chuck 1970s x Fear Of God Essentials</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/top-6-mau-giay-converse-1970s-ban-chay-nhat/#Giay_Converse_Chuck_1970s_x_Off_White\" title=\"Giày Converse Chuck 1970s x Off White\">Gi&agrave;y Converse Chuck 1970s x Off White</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/top-6-mau-giay-converse-1970s-ban-chay-nhat/#Giay_Converse_Chuck_1970s_Black\" title=\"Giày Converse Chuck 1970s Black\">Gi&agrave;y Converse Chuck 1970s Black</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/top-6-mau-giay-converse-1970s-ban-chay-nhat/#Giay_Converse_Chuck_1970s_True_Navy\" title=\"Giày Converse Chuck 1970s True Navy\">Gi&agrave;y Converse Chuck 1970s True Navy</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/top-6-mau-giay-converse-1970s-ban-chay-nhat/#Giay_Converse_Chuck_1970s_Sunflower\" title=\"Giày Converse Chuck 1970s Sunflower\">Gi&agrave;y Converse Chuck 1970s Sunflower</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/top-6-mau-giay-converse-1970s-ban-chay-nhat/#Giay_Converse_Chuck_1970s_White\" title=\"Giày Converse Chuck 1970s White\">Gi&agrave;y Converse Chuck 1970s White</a></li>\r\n</ul>\r\n\r\n<h2>Gi&agrave;y Converse Chuck 1970s x Fear Of God Essentials</h2>\r\n\r\n<p>Gi&agrave;y Converse Chuck Taylor 1970s High Fear Of God được dự đo&aacute;n l&agrave; sẽ b&ugrave;ng nổ trong thời gian tới khi n&oacute; mang tới thiết kế ho&agrave;n to&agrave;n mới lạ v&agrave; n&acirc;ng cấp so với những d&ograve;ng gi&agrave;y trước đ&oacute;. Hay cụ thể l&agrave; mẫu gi&agrave;y sở hữu chất liệu, c&ocirc;ng nghệ sản xuất phần upper, insole, outsole v&agrave; cả d&acirc;y gi&agrave;y cao cấp hơn, &ecirc;m hơn, n&eacute;t hơn.</p>\r\n\r\n<p>Trước hết, tone m&agrave;u trắng ng&agrave; v&agrave; đen huyền thoại được chọn để phối hợp tr&ecirc;n phần upper v&agrave; lưỡi g&agrave;. Hai m&agrave;u tương phản đặt cạnh nhau tạo ra n&eacute;t ph&aacute; c&aacute;ch, sang chảnh nhưng vẫn đơn giản, tinh tế.</p>\r\n\r\n<p><a href=\"https://shopgiayreplica.com/giay-converse-chuck-taylor-1970s-high-fear-of-god-den/\" rel=\"noreferrer noopener\" target=\"_blank\"><img alt=\"\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/giay-converse-1970s.png\" style=\"height:495px; width:660px\" /></a></p>\r\n\r\n<p>Ngo&agrave;i những chức năng vượt trội của d&ograve;ng gi&agrave;y Converse 1970s như bộ đế cao su được phủ lớp b&oacute;ng m&agrave;u ng&agrave;, chất liệu&nbsp;<strong>vải Canvas</strong>&nbsp;d&agrave;y hơn,&hellip; th&igrave; ở mẫu gi&agrave;y n&agrave;y, phần d&acirc;y gi&agrave;y c&ograve;n d&agrave;i hơn nhằm hỗ trợ combo tips thắt d&acirc;y cho những đ&ocirc;i gi&agrave;y cổ cao. Phần tem ph&iacute;a sau g&oacute;t gi&agrave;y cũng l&agrave; minh chứng cho sự kết hợp ho&agrave;n hảo giữa hai thương hiệu.</p>\r\n\r\n<h2>Gi&agrave;y Converse Chuck 1970s x Off White</h2>\r\n\r\n<p>Hơi thở của thời đại v&agrave; kinh điển của cả hai nh&agrave; đều được mang trở lại trong bản phối&nbsp;<strong><a href=\"https://shopgiayreplica.com/giay-converse-1970s-high-x-off-white/\">Converse 1970s x Off White</a></strong>.</p>\r\n\r\n<p>Những bản collab từ trước đến giờ lu&ocirc;n c&oacute; gi&aacute; đắt hơn những bản Chuck th&ocirc;ng thường, bởi n&oacute; l&agrave; bản cải tiến hơn, ch&uacute;ng mang lại sự thoải m&aacute;i v&agrave; c&oacute; độ bền tốt hơn. Phần đế gi&agrave;y hầu hết được mọi người đ&aacute;nh gi&aacute; l&agrave; cứng c&aacute;p hơn nhằm hỗ trợ n&acirc;ng đỡ đ&ocirc;i ch&acirc;n cho người d&ugrave;ng. Chất liệu tr&ecirc;n upper d&agrave;y dặn nhưng mềm mại, lu&ocirc;n c&oacute; độ tho&aacute;ng kh&iacute; tốt nhất.</p>\r\n\r\n<blockquote>\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/\"><strong>8 c&aacute;ch phối đồ với gi&agrave;y Converse cho nam nữ chất, trẻ, ngầu!</strong></a></p>\r\n</blockquote>\r\n\r\n<p>Về phần thiết kế, khi nhắc đến CV Off White, sự ch&uacute; t&acirc;m v&agrave;o hypebeast v&agrave; sneakerhead th&igrave; kh&ocirc;ng phải b&agrave;n v&agrave; bản collab lần n&agrave;y cũng kh&ocirc;ng phải ngoại lệ. Gi&agrave;y sẽ được kết hợp giữa m&agrave;u đen v&agrave; trắng, nổi bật với d&ograve;ng chữ v&agrave; logo của Off White. Hơn thế nữa, ở phần g&oacute;t gi&agrave;y, logo của Converse sẽ bị in ngược lại mang lại sự độc đ&aacute;o, mới lạ chưa từng c&oacute;.</p>\r\n\r\n<p><img alt=\"giày converse off white\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/giay-converse-chuck-1970s-4.jpg\" style=\"height:495px; width:660px\" /></p>\r\n\r\n<h2>Gi&agrave;y Converse Chuck 1970s Black</h2>\r\n\r\n<p>Kh&ocirc;ng chỉ ở Converse 1970s m&agrave; ở d&ograve;ng gi&agrave;y n&agrave;o cũng vậy, m&agrave;u đen (Black) lu&ocirc;n l&agrave; sản phẩm b&aacute;n chạy nhất. Với thiết kế cổ cao cổ điển nhưng kh&ocirc;ng k&eacute;m phần trẻ trung với tone đen,&nbsp;<strong><a href=\"https://shopgiayreplica.com/giay-converse-chuck-taylor-1970s-black-high/\">gi&agrave;y Converse 1970s đen</a></strong>&nbsp;ch&iacute;nh l&agrave; items dễ đi, dễ phối, bất chấp mọi set đồ.</p>\r\n\r\n<p>Đề tr&ocirc;ng bụi bặm hơn với thiết kế unisex n&agrave;y, hay chọn cho m&igrave;nh một đ&ocirc;i vớ cao c&ugrave;ng tone m&agrave;u để thể hiện c&aacute; t&iacute;nh nh&eacute;.</p>\r\n\r\n<p><img alt=\"giày converse 1970s đen cao cổ\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/giay-converse-chuck-1970s-5.jpg\" style=\"height:495px; width:660px\" /></p>\r\n\r\n<h2>Gi&agrave;y Converse Chuck 1970s True Navy</h2>\r\n\r\n<p>Kho&aacute;c tr&ecirc;n m&igrave;nh gam m&agrave;u trung t&iacute;nh cho những ai y&ecirc;u th&iacute;ch sự nhẹ nh&agrave;ng, tinh tế, Converse 1970s True Navy hiện đang l&agrave; bản phối m&agrave;u hot nhất hiện nay. Hiếm hoi h&atilde;ng gi&agrave;y n&agrave;o lại c&oacute; một gam m&agrave;u hiện đại nhưng vẫn giữ được trọn vẹn những n&eacute;t cổ điển đặc trưng của h&atilde;ng.</p>\r\n\r\n<p>Sở hữu một đ&ocirc;i Converse 1970s Navy, bạn c&oacute; thể phối với quần jeans để th&ecirc;m phần trẻ trung, năng động.</p>\r\n\r\n<p><img alt=\"Converse xanh dương\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/giay-converse-chuck-1970s-1.jpg\" style=\"height:495px; width:660px\" /></p>\r\n\r\n<h2>Gi&agrave;y Converse Chuck 1970s Sunflower</h2>\r\n\r\n<p>Tưởng chừng như tone m&agrave;u v&agrave;ng qu&aacute; cho&eacute; n&agrave;y sẽ rất kh&oacute; được l&ograve;ng giới sneaker, nhưng khi on feet, Converse Chuck 1970s Sunflower kh&ocirc;ng những kh&ocirc;ng hề k&eacute;n chọn người đi, m&agrave; c&ograve;n to&aacute;t l&ecirc;n sự tươi tắn, ph&ugrave; hợp với c&aacute;c bạn trẻ c&aacute; t&iacute;nh. Kết hợp th&ecirc;m với những đặc điểm kh&ocirc;ng lẫn v&agrave;o đ&acirc;u được của gi&agrave;y Converse th&igrave; bản phối n&agrave;y ch&iacute;nh l&agrave; điểm nhấn cho to&agrave;n bộ phong c&aacute;ch của bạn.</p>\r\n\r\n<p><img alt=\"Converse sneaker vàng\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/giay-converse-chuck-1970s-2.jpg\" style=\"height:495px; width:660px\" /></p>\r\n\r\n<h2>Gi&agrave;y Converse Chuck 1970s White</h2>\r\n\r\n<p>B&ecirc;n cạnh tone đen th&igrave; bản phối Converse 1970s White (Trắng) cũng l&agrave; items lu&ocirc;n trong t&igrave;nh trạng sold out v&agrave; mỗi lần restock lại khiến những Converse lover săn đ&oacute;n nhiệt t&igrave;nh.</p>\r\n\r\n<p>Nổi bật tr&ecirc;n nền trắng l&agrave; những lỗ xỏ d&acirc;y gi&agrave;y được l&agrave;m từ kim loại s&aacute;ng b&oacute;ng, gi&uacute;p giảm thiểu bong tr&oacute;c khi bạn sử dụng. Phần đế gi&agrave;y của d&ograve;ng Chuck 1970s th&igrave; lu&ocirc;n được phủ th&ecirc;m một lớp cao su n&ecirc;n c&aacute;c bạn ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m khi hoạt động m&agrave; kh&ocirc;ng sợ trơn trượt.</p>\r\n\r\n<p>Khi diện mẫu gi&agrave;y n&agrave;y sẽ mang lại sự nhẹ nh&agrave;ng, tinh tế, dễ d&agrave;ng mix&amp;match với mọi outfit.</p>\r\n\r\n<p><a href=\"https://shopgiayreplica.com/giay-converse-chuck-taylor-1970s-white-high/\"><img alt=\"giày converse trắng cao cổ\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/giay-converse-chuck-1970s-3.jpg\" style=\"height:495px; width:660px\" /></a></p>\r\n\r\n<p>Những đ&ocirc;i Converse trắng sẽ kh&aacute; dễ bẩn tuy nhi&ecirc;n th&igrave; bạn c&oacute; thể y&ecirc;n t&acirc;m, h&atilde;y đọc ngay b&agrave;i viết sau:</p>\r\n\r\n<blockquote>\r\n<p><a href=\"https://shopgiayreplica.com/bo-tui-8-cach-giat-giay-converse-don-gian-ma-hieu-qua-vo-cung/\"><strong>&ldquo;Bỏ t&uacute;i&rdquo; 8 c&aacute;ch giặt gi&agrave;y Converse đơn giản ngay tại nh&agrave;!</strong></a></p>\r\n</blockquote>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 6 bản phối m&agrave;u của Converse 1970s b&aacute;n chạy nhất tr&ecirc;n thị trường hiện nay. Hy vọng b&agrave;i viết đ&atilde; gi&uacute;p &iacute;ch cho bạn trong việc lựa chọn những m&agrave;u ph&ugrave; hợp với bản th&acirc;n.</p>\r\n\r\n<p>Tất cả những bản phối m&agrave;u của Converse Chuck 1970s lu&ocirc;n c&oacute; mặt tại Shopgiayreplica.com với cam kết chất lượng chuẩn replica 1:1 v&agrave; mức gi&aacute; cực tốt. C&oacute; thể đặt gi&agrave;y converse online tại đ&acirc;y:&nbsp;<a href=\"http://localhost/shop_ban_giay/shop\">Shop</a></p>\r\n\r\n<p>Chuy&ecirc;n mục :&nbsp;<a href=\"http://localhost/shop_ban_giay/blog\">Tin tức</a></p>', 'Trải qua bao hàng chục thập kỷ, Converse sneaker vẫn là cái tên trường tồn với thời gian, không bao giờ bị lãng quên. Cho dù hàng ngàn mẫu giày mới, nâng cấp được ra đời, thế nhưng những mẫu giày Converse vẫn có một vị trí cố định trong lòng các tín đồ sneaker. Thậm chí, mỗi khi tung ra dòng sản phẩm mới thì y như rằng mẫu giày đó sẽ “làm mưa làm gió” trong một thời gian dài...........', 1, '2020-12-24 01:13:18', '2020-12-24 02:24:07'),
(3, 'Tổng hợp những cách phối đồ với giày Converse cho nam nữ', 'tong-hop-nhung-cach-phoi-do-voi-giay-converse-cho-nam-nu', 4, 'Blog/phoi-do-giay-converse-nam.png ', '<p><strong>Phối đồ với gi&agrave;y Converse</strong>&nbsp;l&agrave; một trong những c&acirc;u hỏi chung của rất nhiều bạn trẻ hiện nay. Bởi lẽ, ai cũng sở hữu một em Converse đ&aacute;ng y&ecirc;u trong tủ gi&agrave;y nhưng lại băn khoăn kh&ocirc;ng biết sẽ phối hợp em &yacute; với quần &aacute;o như thế n&agrave;o. Qua b&agrave;i viết n&agrave;y, bạn sẽ c&oacute; c&acirc;u trả lời của ri&ecirc;ng m&igrave;nh!</p>\r\n\r\n<p>C&ograve;n b&acirc;y giờ, h&atilde;y lướt nhanh về một số th&ocirc;ng tin của&nbsp;<strong>h&atilde;ng gi&agrave;y Converse</strong>&nbsp;nh&eacute;!</p>\r\n\r\n<p>D&ugrave; đ&atilde; tr&igrave;nh l&agrave;ng từ những năm 1915, nhưng đến nay, Converse vẫn lu&ocirc;n l&agrave; thương hiệu gi&agrave;y được ưa chuộng bậc nhất thế giới. Trải qua bao thăng trầm, những đ&ocirc;i gi&agrave;y Converse vẫn lu&ocirc;n ghi dấu trong l&ograve;ng giới mộ điệu với thiết kế đơn giản, tinh tế v&agrave; kh&ocirc;ng bao giờ lỗi mốt.</p>\r\n\r\n<p>Một mẫu gi&agrave;y ph&ugrave; hợp với mọi đối tượng, mọi tầng lớp, v&agrave; c&oacute; đến hơn 60% người d&acirc;n Mỹ sở hữu một đ&ocirc;i Converse; th&igrave; thật sự kh&ocirc;ng qu&aacute; khi coi gi&agrave;y Converse như một biểu tượng văn ho&aacute; tinh thần Mỹ, đứng ngang h&agrave;ng với những thương hiệu đồ ăn nhanh như McDonald&rsquo;s hay Coca-Cola.</p>\r\n\r\n<p>Trong đ&oacute;, những c&aacute;ch phối đồ với gi&agrave;y Converse cũng lu&ocirc;n được c&aacute;c t&iacute;n đồ thời trang quan t&acirc;m. Bởi c&aacute;ch mix những bộ đồ basic th&igrave; c&oacute; lẽ ai cũng biết, nhưng l&agrave;m thế n&agrave;o để mix đồ ph&ugrave; hợp với gi&agrave;y Converse sao cho nổi bật th&igrave; kh&ocirc;ng phải ai cũng r&otilde;.</p>\r\n\r\n<p>V&igrave; vậy, h&atilde;y c&ugrave;ng&nbsp;<a href=\"https://shopgiayreplica.com/\"><strong>Shopgiayreplica.com</strong></a>&nbsp;đọc hết b&agrave;i viết n&agrave;y t&igrave;m ra được những&nbsp;<strong>outfit kết hợp với gi&agrave;y Converse</strong>&nbsp;cực s&agrave;nh điệu v&agrave; thời trang nh&eacute;!</p>\r\n\r\n<p>Mục lục</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Phoi_do_voi_giay_Converse_nam\" title=\"Phối đồ với giày Converse nam\">Phối đồ với gi&agrave;y Converse nam</a>\r\n\r\n	<ul>\r\n		<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Giay_Converse_voi_combo_phoi_do_huyen_thoai_Ao_phong_+_quan_Jeans\" title=\"Giày Converse với combo phối đồ huyền thoại Áo phông + quần Jeans\">Gi&agrave;y Converse với combo phối đồ huyền thoại &Aacute;o ph&ocirc;ng + quần Jeans</a></li>\r\n		<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Outfit_Converse_nam_cung_quan_short_+_ao_thun_dai_tay\" title=\"Outfit Converse nam cùng quần short + áo thun dài tay\">Outfit Converse nam c&ugrave;ng quần short + &aacute;o thun d&agrave;i tay</a></li>\r\n		<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Dung_quen_Converse_con_co_the_ket_hop_voi_bo_Suit_lich_lam_nhe\" title=\"Đừng quên Converse còn có thể kết hợp với bộ Suit lịch lãm nhé\">Đừng qu&ecirc;n Converse c&ograve;n c&oacute; thể kết hợp với bộ Suit lịch l&atilde;m nh&eacute;</a></li>\r\n		<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Hoac_la_phoi_do_Converse_Ton_sur_Ton_tu_dau_den_chan_thi_sao_nhi\" title=\"Hoặc là phối đồ Converse Ton sur Ton từ đầu đến chân thì sao nhỉ?\">Hoặc l&agrave; phối đồ Converse Ton sur Ton từ đầu đến ch&acirc;n th&igrave; sao nhỉ?</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Phoi_do_voi_giay_Converse_nu\" title=\"Phối đồ với giày Converse nữ\">Phối đồ với gi&agrave;y Converse nữ</a>\r\n	<ul>\r\n		<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Lam_moi_ban_than_voi_kieu_mix_do_theo_cong_thuc_Blazer_+_quan_ong_rong_+_Converse_den_co_cao\" title=\"Làm mới bản thân với kiểu mix đồ theo công thức: Blazer + quần ống rộng + Converse đen cổ cao\">L&agrave;m mới bản th&acirc;n với kiểu mix đồ theo c&ocirc;ng thức: Blazer + quần ống rộng + Converse đen cổ cao</a></li>\r\n		<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Phoi_do_tre_trung_vay_ngan_+_Ao_Croptop_+_giay_Converse_trang\" title=\"Phối đồ trẻ trung váy ngắn + Áo Croptop + giày Converse trắng\">Phối đồ trẻ trung v&aacute;y ngắn + &Aacute;o Croptop + gi&agrave;y Converse trắng</a></li>\r\n		<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-converse/#Phoi_do_voi_giay_Converse_cho_cac_ban_nu_hien_dai_Jeans_cap_cao_+_ao_thun_bo_sat\" title=\"Phối đồ với giày Converse cho các bạn nữ hiện đại: Jeans cạp cao + áo thun bó sát\">Phối đồ với gi&agrave;y Converse cho c&aacute;c bạn nữ hiện đại: Jeans cạp cao + &aacute;o thun b&oacute; s&aacute;t</a></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>Phối đồ với gi&agrave;y Converse nam</strong></h2>\r\n\r\n<h3>Gi&agrave;y Converse với combo phối đồ huyền thoại &Aacute;o ph&ocirc;ng + quần Jeans</h3>\r\n\r\n<p>C&aacute;ch phối đồ đầu ti&ecirc;n m&agrave; ch&uacute;ng m&igrave;nh muốn đề xuất cho ph&aacute;i nam khi phối với&nbsp;<a href=\"https://shopgiayreplica.com/giay-converse/\"><strong>gi&agrave;y Converse</strong></a>&nbsp;ch&iacute;nh l&agrave; &ldquo;set đồ thần th&aacute;nh&rdquo; &aacute;o ph&ocirc;ng &ndash; quần jeans. H&atilde;y biến tấu những c&aacute;ch phối m&agrave;u với những items &ldquo;must have&rdquo; n&agrave;y khiến bạn trở n&ecirc;n cool ngầu v&agrave; trẻ trung hơn.</p>\r\n\r\n<p>V&iacute; dụ như: &aacute;o ph&ocirc;ng trắng + quần jeans xanh +&nbsp;<a href=\"https://shopgiayreplica.com/?s=converse+%C4%91en&amp;post_type=product\">Converse đen</a>, &aacute;o ph&ocirc;ng đen + jeans đen r&aacute;ch gối + Converse trắng,&hellip; V&agrave; d&ugrave; l&agrave; converse cao cổ hay thấp cổ th&igrave; đều ph&ugrave; hợp với chiếc quần jeans trong việc t&ocirc;n d&aacute;ng cho c&aacute;c ch&agrave;ng đ&oacute;.</p>\r\n\r\n<p><img alt=\"phối đồ với giày Converse nam\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/phoi-do-giay-converse-nam.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Outfit Converse nam c&ugrave;ng quần short + &aacute;o thun d&agrave;i tay</h3>\r\n\r\n<p><strong>Phối đồ với gi&agrave;y Converse nam</strong>&nbsp;sao cho năng động chắc hẳn kh&ocirc;ng thể thiếu chiếc quần short. Việc kết hợp một chiếc &aacute;o basic c&ugrave;ng quần short v&agrave; đ&ocirc;i sneaker tối giản l&agrave; &ldquo;vũ kh&iacute;&rdquo; l&agrave;m nổi bật sự khỏe khoắn v&agrave; nam t&iacute;nh cho ph&aacute;i mạnh cho những ng&agrave;y h&egrave; hoặc m&ocirc;i trường luyện tập thể thao.</p>\r\n\r\n<p><img alt=\"phối đồ converse nam quần short\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/phoi-do-converse-nam-quan-short.png\" /></p>\r\n\r\n<h3>Đừng qu&ecirc;n Converse c&ograve;n c&oacute; thể kết hợp với bộ Suit lịch l&atilde;m nh&eacute;</h3>\r\n\r\n<p>Nếu bạn cần một set đồ lịch sự để tham gia những sự kiện sang trọng, nhưng vẫn muốn tạo sự ph&aacute; c&aacute;ch v&agrave; trẻ trung th&igrave; đừng ngại&nbsp;<em>phối gi&agrave;y Converse với một bộ suit lịch l&atilde;m</em>. Thậm ch&iacute;, nếu bạn kh&ocirc;ng th&iacute;ch một bộ vest qu&aacute; đứng đắn, bạn c&oacute; thể&nbsp;<em>kết hợp Converse với quần t&acirc;y v&agrave; chiếc &aacute;o sơ mi</em>&nbsp;đơn giản.</p>\r\n\r\n<blockquote>\r\n<p>Bạn c&oacute; thể sẽ cần biết:&nbsp;<a href=\"https://shopgiayreplica.com/bo-tui-8-cach-giat-giay-converse-don-gian-ma-hieu-qua-vo-cung/\"><strong>8 c&aacute;ch giặt gi&agrave;y Converse đơn giản tại nh&agrave;</strong></a>!</p>\r\n</blockquote>\r\n\r\n<p>Đừng lo lắng rằng c&aacute;ch phối n&agrave;y sẽ kh&ocirc;ng khớp nhau, bởi ch&iacute;nh thiết kế của Converse cũng đ&atilde; mang lại sự thanh lịch v&agrave; tinh tế rồi. C&ograve;n nếu kh&ocirc;ng muốn qu&aacute; nổi bật, bạn c&oacute; thể chọn đ&ocirc;i gi&agrave;y Converse tone m&agrave;u trầm như đen hoặc x&aacute;m.</p>\r\n\r\n<p><img alt=\"outfit với giày Converse nam\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/outfit-converse-suit-nam.png\" /></p>\r\n\r\n<h3>Hoặc l&agrave; phối đồ Converse Ton sur Ton từ đầu đến ch&acirc;n th&igrave; sao nhỉ?</h3>\r\n\r\n<p>C&aacute;c ch&agrave;ng trai hiện nay cực kỳ y&ecirc;u th&iacute;ch phong c&aacute;ch ton sur ton (c&ugrave;ng một tone m&agrave;u, chất liệu), vậy n&ecirc;n h&atilde;y kết hợp một đ&ocirc;i gi&agrave;y Converse cao cổ với set đồ n&agrave;y để kh&ocirc;ng bị lỗi mốt nh&eacute;.</p>\r\n\r\n<p>C&aacute;ch phối đồ n&agrave;y sẽ tạo n&ecirc;n cho bạn một h&igrave;nh tượng &ldquo;lạnh l&ugrave;ng boy&rdquo;, ph&oacute;ng kho&aacute;ng hơn, nam t&iacute;nh hơn. Bạn c&oacute; thể kết hợp th&ecirc;m c&ugrave;ng phụ kiện như mũ hoặc đồng hồ để th&ecirc;m phần s&agrave;nh điệu nh&eacute;.</p>\r\n\r\n<p><img alt=\"mix đồ converse nam\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/phoi-do-coverse-tu-dau-den-chan.png\" /></p>\r\n\r\n<p>C&aacute;c ch&agrave;ng trai cũng đừng bỏ qua việc&nbsp;<strong>phối gi&agrave;y Converse với &aacute;o hoodie</strong>&nbsp;v&agrave;o m&ugrave;a đ&ocirc;ng nh&eacute;. Chiếc &aacute;o hoodie c&ugrave;ng quần jeans hoặc quần jogger sẽ c&agrave;ng tăng l&ecirc;n t&iacute;nh chất của đ&ocirc;i Converse, đ&oacute; l&agrave; t&iacute;nh thể thao v&agrave; năng động.</p>\r\n\r\n<p>Bạn c&oacute; thể kết hợp th&ecirc;m c&ugrave;ng đ&ocirc;i tất cổ cao để tạo điểm nhấn cho set đồ, nhưng lưu &yacute; chọn những đ&ocirc;i tất trơn v&agrave; m&agrave;u sắc nhẹ nh&agrave;ng để tạo sự h&agrave;i ho&agrave; nh&eacute;.</p>\r\n\r\n<p><img alt=\"outfit nam với giày converse\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/mix-do-converse-voi-hoddie.png\" /></p>\r\n\r\n<h2><strong>Phối đồ với gi&agrave;y Converse nữ</strong></h2>\r\n\r\n<h3>L&agrave;m mới bản th&acirc;n với kiểu mix đồ theo c&ocirc;ng thức: Blazer + quần ống rộng + Converse đen cổ cao</h3>\r\n\r\n<p>Trong tiết trời thu m&aacute;t mẻ hay trong mọi sự kiện quan trọng, bộ đồ blazer thanh lịch kết hợp c&ugrave;ng đ&ocirc;i gi&agrave;y Converse đen sẽ l&agrave; &ldquo;combo thần th&aacute;nh&rdquo;, tạo n&ecirc;n vẻ trẻ trung v&agrave; hiện đại cho ph&aacute;i nữ. Ưu điểm lớn nhất ở đ&acirc;y ch&iacute;nh l&agrave; blazer c&oacute; thiết kế thoải m&aacute;i v&agrave; che được khuyết điểm cực tốt n&ecirc;n c&aacute;c n&agrave;ng cứ v&ocirc; tư v&agrave; tự tin để diện c&ugrave;ng đ&ocirc;i Converse huyền thoại nh&eacute;.</p>\r\n\r\n<p><img alt=\"phối đồ với giày Converse nữ\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/giay-converse-nu-ket-hop-quan-den.png\" /></p>\r\n\r\n<h3>Phối đồ trẻ trung v&aacute;y ngắn + &Aacute;o Croptop + gi&agrave;y Converse trắng</h3>\r\n\r\n<p>Một c&aacute;ch phối đồ kh&aacute;c với gi&agrave;y Converse nữ được ưa chuộng đ&oacute; l&agrave; kết hợp c&ugrave;ng ch&acirc;n v&aacute;y. Ch&acirc;n v&aacute;y chữ A c&ugrave;ng đ&ocirc;i Converse thanh tho&aacute;t ch&iacute;nh l&agrave; &ldquo;vị cứu tinh&rdquo; gi&uacute;p đ&ocirc;i ch&acirc;n của n&agrave;ng thon gọn hơn, d&agrave;i hơn đ&oacute;. Nếu bạn l&agrave; c&ocirc; g&aacute;i hiện đại v&agrave; tự tin khoe d&aacute;ng th&igrave; c&oacute; thể mix c&ugrave;ng chiếc &aacute;o croptop để th&ecirc;m phần điệu đ&agrave;, phong c&aacute;ch.</p>\r\n\r\n<p><img alt=\"mix đồ nữ trẻ trung với giày converse\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/mix-converse-nu-voi-vay-ngan-2.png\" /></p>\r\n\r\n<p>Combo gi&agrave;y Converse cổ cao + quần short chắc hẳn lu&ocirc;n l&agrave; sự lựa chọn tối ưu cho những những buổi đi chơi c&ugrave;ng bạn b&egrave; hay đi dạo phố v&agrave;o cuối tuần. Set đồ n&agrave;y bạn c&oacute; thể mix c&ugrave;ng &aacute;o ph&ocirc;ng để tạo sự trẻ trung, hoặc một chiếc croptop kiểu c&aacute;ch để khoe được v&ograve;ng eo &ldquo;con kiến&rdquo;.</p>\r\n\r\n<p>Hơn nữa, đ&acirc;y l&agrave; c&aacute;ch phối đồ với gi&agrave;y Converse nữ được c&aacute;c sao H&agrave;n v&ocirc; c&ugrave;ng ưa chuộng trong những năm gần đ&acirc;y đ&oacute;.</p>\r\n\r\n<p><img alt=\"converse nữ outfit\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/phoi-do-coverse-voi-quan-ngan-va-tui.png\" /></p>\r\n\r\n<h3>Phối đồ với gi&agrave;y Converse cho c&aacute;c bạn nữ hiện đại: Jeans cạp cao + &aacute;o thun b&oacute; s&aacute;t</h3>\r\n\r\n<p>Những c&ocirc; n&agrave;ng hiện đại ng&agrave;y nay th&igrave; lại c&agrave;ng kh&ocirc;ng ngại theo phong c&aacute;ch đường phố, bụi bặm để khẳng định gu thời trang của bản th&acirc;n. V&igrave; vậy, việc kết hợp một chiếc &aacute;o b&oacute; c&ugrave;ng chiếc quần jeans su&ocirc;ng cạp cao, phối th&ecirc;m đ&ocirc;i Converse cổ cao sẽ thể hiện được trọn vẹn xu hướng n&agrave;y.</p>\r\n\r\n<blockquote>\r\n<p>Bạn c&oacute; biết:&nbsp;<a href=\"https://shopgiayreplica.com/bat-mi-5-diem-khac-biet-giua-giay-converse-1970s-va-converse-classic/\"><strong>5 điểm kh&aacute;c biệt giữa gi&agrave;y Converse 1970s v&agrave; Converse Classic</strong></a>!</p>\r\n</blockquote>\r\n\r\n<p>Ch&uacute;ng m&igrave;nh khuy&ecirc;n bạn h&atilde;y mix c&ugrave;ng những phụ kiện unisex như d&acirc;y chuyền, đồng hồ v&agrave; nhẫn để th&ecirc;m t&iacute;nh cool ngầu cho set đồ nh&eacute;.</p>\r\n\r\n<p><img alt=\"mix đồ nữ converse\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/mix-jean-cap-cao-voi-ao-thun-bo-sat.png\" /></p>\r\n\r\n<p>Bộ đồ ho&agrave;n hảo cho c&aacute;c c&ocirc; n&agrave;ng cho c&aacute;c buổi hẹn h&ograve; để vừa thể hiện sự nữ t&iacute;nh, vừa t&ocirc;n l&ecirc;n vẻ trẻ trung của m&igrave;nh ch&iacute;nh l&agrave; việc kết hợp đ&ocirc;i Converse cổ cao với một chiếc v&aacute;y liền.</p>\r\n\r\n<p><a href=\"https://shopgiayreplica.com/tu-khoa/giay-converse-cao-co/\"><strong>Gi&agrave;y Converse cao cổ</strong></a>&nbsp;&ocirc;m s&aacute;t cổ ch&acirc;n sẽ tạo hiệu ứng đ&ocirc;i ch&acirc;n thon d&agrave;i hơn. Đồng thời, bạn c&oacute; thể mix th&ecirc;m &aacute;o kho&aacute;c jeans ngắn c&ugrave;ng chiếc v&aacute;y để che được khuyết điểm v&agrave; gi&uacute;p bạn tr&ocirc;ng mảnh mai hơn, thời trang hơn.</p>\r\n\r\n<p><img alt=\"mix đồ nữ converse\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/11/converse-cao-co-mix-ao-jean-vay-ngan.png\" /></p>\r\n\r\n<p>Hy vọng những gợi &yacute; về c&aacute;ch phối đồ với gi&agrave;y Converse mới nhất 2020 đ&atilde; gi&uacute;p bạn định h&igrave;nh được phong c&aacute;ch thời trang ph&ugrave; hợp nhất cho bản th&acirc;n. H&atilde;y thử v&agrave; chia sẻ th&ecirc;m những tips phối đồ hay ho cho ch&uacute;ng m&igrave;nh nữa nh&eacute;!</p>\r\n\r\n<p>Đừng bỏ lỡ những mẫu gi&agrave;y Converse với đủ size, đủ m&agrave;u đang c&oacute; mặt tại&nbsp;<strong>Shop</strong>, đặc biệt l&agrave; c&aacute;c d&ograve;ng gi&agrave;y &ldquo;hot trend&rdquo; như Converse Chuck 1970s v&agrave; Converse CDG. Cửa h&agrave;ng cam kết cung cấp cung cấp những mẫu gi&agrave;y Converse chuẩn Replica 1:1, đầy đủ phụ kiện v&agrave; đi k&egrave;m l&agrave; mức gi&aacute; v&ocirc; c&ugrave;ng hợp l&yacute;.</p>\r\n\r\n<p>Nhận ngay tư vấn bằng c&aacute;ch truy cập website.</p>\r\n\r\n<p>Chuy&ecirc;n mục :&nbsp;<a href=\"http://localhost/shop_ban_giay/blog\">Tin tức</a></p>', 'Phối đồ với giày Converse là một trong những câu hỏi chung của rất nhiều bạn trẻ hiện nay. Bởi lẽ, ai cũng sở hữu một em Converse đáng yêu trong tủ giày nhưng lại băn khoăn không biết sẽ phối hợp em ý với quần áo như thế nào. Qua bài viết này, bạn sẽ có câu trả lời của riêng mình!...', 1, '2020-12-24 02:23:50', '2020-12-24 02:23:50'),
(5, 'Phối đồ với giày Balenciaga Triple S – 4 outfit chất lừ cho nam', 'phoi-do-voi-giay-balenciaga-triple-s-–-4-outfit-chat-lu-cho-nam', 4, 'Blog/phoi-do-voi-giay-balenciaga-nam-2.jpg ', '<h1>Phối đồ với gi&agrave;y Balenciaga Triple S &ndash; 4 outfit chất lừ cho nam</h1>\r\n\r\n<p>13/10/2020&nbsp;1679 lượt xem&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/tin-tuc/\" title=\"Tin tức\">Tin tức</a></p>\r\n\r\n<p><strong>Phối đồ với gi&agrave;y Balenciaga Triple S</strong>&nbsp;l&agrave; một vấn đề đang được c&aacute;c bạn trẻ quan t&acirc;m rất nhiều. Bởi với phong c&aacute;ch hầm hố đặc trưng, kh&ocirc;ng dễ để chọn ra một set đồ ph&ugrave; hợp với đ&ocirc;i gi&agrave;y n&agrave;y.</p>\r\n\r\n<p>Mục lục</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://shopgiayreplica.com/4-cach-phoi-do-voi-giay-balenciaga-triple-s/#Thuong_hieu_Balenciaga\" title=\"Thương hiệu Balenciaga\">Thương hiệu Balenciaga</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/4-cach-phoi-do-voi-giay-balenciaga-triple-s/#Phoi_giay_Balenciaga_triple_S_voi_quan_jeans\" title=\"Phối giày Balenciaga triple S với quần jeans\">Phối gi&agrave;y Balenciaga triple S với quần jeans</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/4-cach-phoi-do-voi-giay-balenciaga-triple-s/#Phoi_do_voi_giay_Balenciaga_3S_theo_phong_cach_Normcore\" title=\"Phối đồ với giày Balenciaga 3S theo phong cách Normcore\">Phối đồ với gi&agrave;y Balenciaga 3S theo phong c&aacute;ch Normcore</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/4-cach-phoi-do-voi-giay-balenciaga-triple-s/#Phoi_giay_Balen_3S_theo_%E2%80%9Cphong_cach_thoi_trang_cua_bo%E2%80%9D\" title=\"Phối giày Balen 3S theo “phong cách thời trang của bố” \">Phối gi&agrave;y Balen 3S theo &ldquo;phong c&aacute;ch thời trang của bố&rdquo;</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/4-cach-phoi-do-voi-giay-balenciaga-triple-s/#Outfit_Balenciaga_kieu_%E2%80%9Cton_sur_ton%E2%80%9D\" title=\"Outfit Balenciaga kiểu “ton sur ton”\">Outfit Balenciaga kiểu &ldquo;ton sur ton&rdquo;</a></li>\r\n</ul>\r\n\r\n<h2>Thương hiệu Balenciaga</h2>\r\n\r\n<p><a href=\"https://www.balenciaga.com/vn\" rel=\"nofollow noopener noreferrer\" target=\"_blank\"><strong>Balenciaga</strong></a>&nbsp;l&agrave; một trong những thương hiệu đ&igrave;nh đ&aacute;m sở hữu những mẫu&nbsp;<strong>chunky sneaker</strong>&nbsp;c&oacute; sức cuốn h&uacute;t giới trẻ mạnh mẽ nhất hiện nay. Ngay từ khi tr&igrave;nh l&agrave;ng v&agrave;o năm 2017, thiết kế hầm hố, độc lạ đ&atilde; khiến c&aacute;c t&iacute;n đồ sneaker kh&ocirc;ng thể kh&ocirc;ng ch&uacute; &yacute;, n&oacute; nhanh ch&oacute;ng lan tỏa tr&ecirc;n mọi mặt trận truyền th&ocirc;ng, thậm ch&iacute; ch&aacute;y h&agrave;ng chỉ trong nh&aacute;y mắt.</p>\r\n\r\n<p>Sức h&uacute;t của&nbsp;<strong>Balenciaga sneaker</strong>&nbsp;qu&aacute; lớn đến nỗi c&aacute;c fashionista c&ograve;n gọi những mẫu gi&agrave;y n&agrave;y l&agrave; &ldquo;Ugly but pretty&rdquo;. Nhưng cũng ch&iacute;nh bởi thiết kế c&oacute; phần th&ocirc; kệch, t&aacute;o bạo m&agrave; rất &iacute;t người biết phối đồ với gi&agrave;y Balenciaga l&agrave;m sao cho chất v&agrave; khẳng định được gout thẩm mỹ của bản th&acirc;n.</p>\r\n\r\n<p>V&igrave; vậy,&nbsp;<strong><a href=\"http://shopgiayreplica.com/\">Shopgiayreplica.com</a></strong>&nbsp;trong b&agrave;i viết n&agrave;y sẽ gợi &yacute; những&nbsp;<strong>outfit phối đồ cực ấn tượng với gi&agrave;y Balenciaga triple S d&agrave;nh cho nam</strong>.</p>\r\n\r\n<h2><strong>Phối gi&agrave;y Balenciaga triple S với quần jeans</strong></h2>\r\n\r\n<p>Chắc hẳn c&aacute;c ch&agrave;ng trai lu&ocirc;n lu&ocirc;n c&oacute; v&agrave;i chiếc quần jeans, từ basic cho đến r&aacute;ch gối trong tủ đồ của m&igrave;nh bởi t&iacute;nh ứng dụng của trang phục n&agrave;y cực cao. V&agrave;&nbsp;<a href=\"https://shopgiayreplica.com/giay-balenciaga/\">gi&agrave;y Balenciaga</a>&nbsp;cũng kh&ocirc;ng phải ngoại lệ khi phối c&ugrave;ng chất liệu jeans. Sự kết hợp n&agrave;y kh&ocirc;ng chỉ đơn giản m&agrave; n&oacute; c&ograve;n t&ocirc; điểm th&ecirc;m sự bụi bặm, nam t&iacute;nh cho ph&aacute;i mạnh.</p>\r\n\r\n<p><img alt=\"phối đồ với giày Balenciaga triple S\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-balenciaga-nam-2.jpg\" style=\"height:662px; width:660px\" /></p>\r\n\r\n<p>V&agrave;o m&ugrave;a h&egrave;, c&aacute;c ch&agrave;ng c&oacute; thể&nbsp;<strong>phối &aacute;o ph&ocirc;ng với quần jeans v&agrave; một đ&ocirc;i Balenciaga Triple S</strong>&nbsp;&ndash; một set đồ vừa ngầu, vừa dễ mặc trong mọi ho&agrave;n cảnh. M&ugrave;a đ&ocirc;ng th&igrave; h&atilde;y phối c&ugrave;ng một chiếc &aacute;o kho&aacute;c bomber basic. Bởi bản chất của gi&agrave;y đ&atilde; độc đ&aacute;o, mạnh bạo n&ecirc;n những chi tiết kh&aacute;c chỉ cần tối giản l&agrave; đ&atilde; đủ để thể hiện c&aacute; t&iacute;nh rồi.</p>\r\n\r\n<p>Những bạn nam n&agrave;o th&iacute;ch sự nổi loạn, c&oacute; thể phối c&ugrave;ng chiếc vớ cao cổ hoặc mũ nồi c&oacute; c&ugrave;ng tone m&agrave;u với gi&agrave;y, vừa đảm bảo sự h&agrave;i ho&agrave; m&agrave; vẫn v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<h2><strong>Phối đồ với gi&agrave;y Balenciaga 3S theo phong c&aacute;ch Normcore</strong></h2>\r\n\r\n<p>Normcore &ndash; được gh&eacute;p bởi 2 từ &ldquo;Normal&rdquo; v&agrave; &ldquo;Hardcore&rdquo;, l&agrave; một trong những thời trang điển h&igrave;nh của phong c&aacute;ch Unisex, đặc trưng của sự khi&ecirc;m tốn v&agrave; giản đơn bởi những trang phục th&ocirc;ng dụng.</p>\r\n\r\n<p><strong>C&aacute;ch phối đồ với gi&agrave;y Balenciaga theo hướng Normcore</strong>&nbsp;kh&ocirc;ng phải l&agrave; mới lạ nhưng chưa bao giờ hết hot v&agrave; tạo n&ecirc;n những hơi thở mới cho xu hướng thời trang tr&ecirc;n thế giới.</p>\r\n\r\n<p><img alt=\"outfit balenciaga 3s\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-balenciaga-nam-6.jpg\" style=\"height:613px; width:660px\" /></p>\r\n\r\n<p>Như đ&uacute;ng bản chất của phong c&aacute;ch n&agrave;y, bạn h&atilde;y tận dụng hết những trang phục casual để&nbsp;<strong>mix&amp;match</strong>&nbsp;một c&aacute;ch đa dạng như: quần jogger thể thao + &aacute;o kho&aacute;c jeans, quần baggy vải, &aacute;o hoodie,quần short + &aacute;o thun cho ng&agrave;y h&egrave; năng động,&hellip;&nbsp;<strong>kết hợp với gi&agrave;y Balenciaga</strong>&nbsp;để tạo n&ecirc;n những outfit si&ecirc;u ngầu, si&ecirc;u c&aacute; t&iacute;nh, nhưng vẫn giữ được sự nhẹ nh&agrave;ng.</p>\r\n\r\n<p>Kh&ocirc;ng qu&aacute; cầu kỳ. Với những set đồ n&agrave;y, bạn c&oacute; thể phối th&ecirc;m những phụ kiện như t&uacute;i đeo ch&eacute;o, mắt k&iacute;nh, &aacute;o kho&aacute;c, n&oacute;n hoặc thắt lưng để thể hiện gout thẩm mỹ của bản th&acirc;n.</p>\r\n\r\n<p><img alt=\"phối đồ giày balenciaga triple s\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-balenciaga-nam-3-1.jpg\" style=\"height:781px; width:660px\" /></p>\r\n\r\n<h2><strong>Phối gi&agrave;y Balen 3S theo &ldquo;phong c&aacute;ch thời trang của bố&rdquo;</strong></h2>\r\n\r\n<p>G&acirc;y b&atilde;o đặc biệt từ năm 2018, gi&agrave;y Balenciaga 3S c&ograve;n được gọi l&agrave; &ldquo;dad sneakers&rdquo; (gi&agrave;y của bố) bởi ngoại h&igrave;nh qu&aacute; mức c&aacute; t&iacute;nh, hầm hố. V&igrave; thế phối đồ theo phong c&aacute;ch retro của những thập ni&ecirc;n 80, 90 ho&agrave;n to&agrave;n ph&ugrave; hợp với mẫu gi&agrave;y n&agrave;y.</p>\r\n\r\n<p><img alt=\"kết hợp quần áo với giày balenciaga triple s\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-balenciaga-nam-4.jpg\" style=\"height:660px; width:660px\" /></p>\r\n\r\n<p>Bạn c&oacute; thể chọn những chiếc &aacute;o oversize hoặc d&aacute;ng &aacute;o theo hướng vintage để phối c&ugrave;ng những chiếc quần ống rộng, đặc biệt l&agrave; những kiểu quần c&oacute; t&uacute;i hộp như những năm của bố để&nbsp;<strong>phối c&ugrave;ng gi&agrave;y Balenciaga</strong>.</p>\r\n\r\n<p>Outfit n&agrave;y sẽ kh&ocirc;ng l&agrave;m bạn gi&agrave; đi đ&acirc;u m&agrave; c&ograve;n tạo hiệu ứng thời trang v&ocirc; c&ugrave;ng mạnh mẽ, tạo sự s&agrave;nh điệu v&agrave; ph&aacute; c&aacute;ch. Bạn c&oacute; thể phối th&ecirc;m một chiếc &aacute;o vest của bố để tạo sự nh&atilde; nhặn, ph&ugrave; hợp cho m&ocirc;i trường c&ocirc;ng sở.</p>\r\n\r\n<p><img alt=\"outfit balen 3s\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-balenciaga-nam-5-1.jpg\" style=\"height:647px; width:660px\" /></p>\r\n\r\n<h2><strong>Outfit Balenciaga kiểu &ldquo;ton sur ton&rdquo;</strong></h2>\r\n\r\n<p>Sự s&aacute;ng tạo, c&aacute; t&iacute;nh đều được thể hiện khi bạn phối gi&agrave;y Balenciaga theo phong c&aacute;ch &ldquo;ton sur ton&rdquo;. Cụ thể l&agrave; bạn c&oacute; thể diện những bộ outfit c&ugrave;ng một tone m&agrave;u từ tr&ecirc;n xuống dưới. Tuy nhi&ecirc;n bạn cũng c&oacute; thể ph&aacute; c&aacute;ch khi phối một set đồ trắng phối c&ugrave;ng đ&ocirc;i Balenciaga Triple S Black, hay ngược lại &ndash; một set đồ đen phối c&ugrave;ng đ&ocirc;i White để tạo điểm nhấn bắt mắt hơn.</p>\r\n\r\n<p>Với kiểu phối đồ n&agrave;y bạn n&ecirc;n chọn những t&ocirc;ng m&agrave;u lạnh như trắng, đen, n&acirc;u, x&aacute;m để tạo sự dễ chịu v&agrave; cuốn h&uacute;t người nh&igrave;n.</p>\r\n\r\n<p><img alt=\"balenciaga triple s ton sur ton\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-balenciaga-nam-1-2.jpg\" style=\"height:677px; width:660px\" /></p>\r\n\r\n<p>Hy vọng với những chia sẻ tr&ecirc;n đ&acirc;y th&igrave; bạn đ&atilde; c&oacute; thể &aacute;p dụng hiệu khi phối c&ugrave;ng gi&agrave;y Balenciaga để tạo n&ecirc;n những outfit đẳng cấp. H&atilde;y thử v&agrave; chia sẻ ngay với Shopgiayreplica.com nh&eacute;!</p>\r\n\r\n<p>Tại&nbsp;<a href=\"https://shopgiayreplica.com/\"><strong>Shopgiayreplica.com</strong></a>, 3 phi&ecirc;n bản hot nhất đ&oacute; l&agrave;&nbsp;<a href=\"https://shopgiayreplica.com/giay-balenciaga-speed-trainer/\">Balenciaga Speed Trainer</a>,&nbsp;<a href=\"https://shopgiayreplica.com/giay-balenciaga-triple-s/\">Triple S</a>&nbsp;v&agrave;&nbsp;<a href=\"https://shopgiayreplica.com/giay-balenciaga-track-3-0/\">Track 3.0</a>&nbsp;đ&atilde; l&ecirc;n kệ với đủ size, đủ m&agrave;u cho c&aacute;c bạn lựa chọn. Shop cam kết chất lượng chuẩn Replica 1:1, bảo h&agrave;nh đầy đủ m&agrave; mức gi&aacute; v&ocirc; c&ugrave;ng hợp l&yacute;.</p>\r\n\r\n<p>Truy cập ngay website để nhận được tư vấn v&agrave; những ưu đ&atilde;i hấp dẫn nhất nh&eacute;!</p>\r\n\r\n<p>Chuy&ecirc;n mục :&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/tin-tuc/\" title=\"Tin tức\">Tin tức</a></p>', 'Phối đồ với giày Balenciaga Triple S là một vấn đề đang được các bạn trẻ quan tâm rất nhiều. Bởi với phong cách hầm hố đặc trưng, không dễ để chọn ra một set đồ phù hợp với đôi giày này.', 1, '2020-12-26 01:10:18', '2020-12-26 01:10:18');
INSERT INTO `blogs` (`id`, `name`, `slug`, `id_cate`, `image`, `content`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, '5 cách phối đồ với giày Alexander Mcqueen nữ', '5-cach-phoi-do-voi-giay-alexander-mcqueen-nu', 4, 'Blog/phoi-do-voi-giay-mcqueen-nu-4.jpg ', '<h1>5 c&aacute;ch phối đồ với gi&agrave;y Alexander Mcqueen nữ đẳng cấp v&agrave; s&agrave;nh điệu</h1>\r\n\r\n<p>11/10/2020&nbsp;650 lượt xem&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/tin-tuc/\" title=\"Tin tức\">Tin tức</a></p>\r\n\r\n<p>L&agrave; một trong những mẫu gi&agrave;y quen thuộc với giới trẻ Việt Nam,&nbsp;<strong>gi&agrave;y Alexander Mcqueen</strong>&nbsp;mang đến phong c&aacute;ch thời trang thu h&uacute;t c&ugrave;ng khả năng kết hợp trang phục đa dạng trong nhiều hoạt động. Vậy c&aacute;c bạn nữ đ&atilde; biết c&aacute;ch phối đồ với gi&agrave;y Mcqueen chưa?</p>\r\n\r\n<p>Mục lục</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://shopgiayreplica.com/5-cach-phoi-do-voi-giay-alexander-mcqueen-nu/#Thuong_hieu_Alexander_Mcqueen\" title=\"Thương hiệu Alexander Mcqueen\">Thương hiệu Alexander Mcqueen</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/5-cach-phoi-do-voi-giay-alexander-mcqueen-nu/#Suit_phoi_cung_giay_Alexander_Mcqueen_trang_nu\" title=\"Suit phối cùng giày Alexander Mcqueen trắng nữ\">Suit phối c&ugrave;ng gi&agrave;y Alexander Mcqueen trắng nữ</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/5-cach-phoi-do-voi-giay-alexander-mcqueen-nu/#Phoi_do_Mcqueen_nu_cung_phong_cach_do_truyen_thong\" title=\"Phối đồ Mcqueen nữ cùng phong cách đồ truyền thống\">Phối đồ Mcqueen nữ c&ugrave;ng phong c&aacute;ch đồ truyền thống</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/5-cach-phoi-do-voi-giay-alexander-mcqueen-nu/#Mix_Chan_vay_+_ao_so_mi/hoodie_va_Mcqueen\" title=\"Mix Chân váy + áo sơ mi/hoodie và Mcqueen\">Mix Ch&acirc;n v&aacute;y + &aacute;o sơ mi/hoodie v&agrave; Mcqueen</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/5-cach-phoi-do-voi-giay-alexander-mcqueen-nu/#Giay_Alexander_Mcqueen_outfit_cung_ao_khoac,_ao_len_cac_loai\" title=\"Giày Alexander Mcqueen outfit cùng áo khoác, áo len các loại\">Gi&agrave;y Alexander Mcqueen outfit c&ugrave;ng &aacute;o kho&aacute;c, &aacute;o len c&aacute;c loại</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/5-cach-phoi-do-voi-giay-alexander-mcqueen-nu/#Ao_giau_quan,_vay_lien,_chan_vay_dai_cung_Mcqueen\" title=\"Áo giấu quần, váy liền, chân váy dài cùng Mcqueen\">&Aacute;o giấu quần, v&aacute;y liền, ch&acirc;n v&aacute;y d&agrave;i c&ugrave;ng Mcqueen</a></li>\r\n</ul>\r\n\r\n<h2><strong>Thương hiệu Alexander Mcqueen</strong></h2>\r\n\r\n<p>Được đặt theo t&ecirc;n nh&agrave; thiết kế Lee Alexander Mcqueen, gi&agrave;y Alexander Mcqueen xuất hiện đầu ti&ecirc;n tr&ecirc;n thị trường v&agrave;o năm 1992, ở London (Anh), mang phong c&aacute;ch đặc biệt v&agrave; được Ho&agrave;ng gia Anh ưa d&ugrave;ng.</p>\r\n\r\n<p>Tại Việt Nam,&nbsp;<strong>Alexander Mcqueen Sneaker trắng</strong>&nbsp;l&agrave; một trong những phụ kiện được giới trẻ y&ecirc;u th&iacute;ch v&agrave; sử dụng phổ biến.&nbsp;<strong>Gi&aacute; ch&iacute;nh h&atilde;ng v&agrave;o khoảng từ 300 USD đến 725 USD</strong>.</p>\r\n\r\n<p>D&ograve;ng sneaker trắng n&agrave;y tương đối dễ phối đồ cho d&ugrave; l&agrave; nam hay nữ, sự kiện trong nh&agrave; hay ngo&agrave;i trời, trang trọng hay thoải m&aacute;i&hellip; V&agrave; dưới đ&acirc;y l&agrave;&nbsp;<strong>5 c&aacute;ch phối đồ với gi&agrave;y Alexander Mcqueen nữ cực cuốn h&uacute;t. C&ugrave;ng xem ngay v&agrave; lu&ocirc;n n&agrave;o!</strong></p>\r\n\r\n<h2><strong>Suit phối c&ugrave;ng gi&agrave;y Alexander Mcqueen trắng</strong>&nbsp;nữ</h2>\r\n\r\n<p><img alt=\"phối đồ với giày mcqueen\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-mcqueen-nu-4.jpg\" style=\"height:768px; width:512px\" /></p>\r\n\r\n<p>Thay v&igrave; kết hợp những bộ vest sang trọng với cao g&oacute;t th&igrave; gi&agrave;y&nbsp;<a href=\"https://shopgiayreplica.com/giay-alexander-mcqueen-got-den-sieu-cap/\"><strong>sneaker Mcqueen trắng</strong></a>&nbsp;sẽ gi&uacute;p bạn tạo ra phong c&aacute;ch v&ocirc; c&ugrave;ng trẻ trung, năng động. Bạn c&oacute; thể dễ d&agrave;ng mix ch&uacute;ng để thoải m&aacute;i trong c&aacute;c hoạt động ngo&agrave;i trời hoặc khi cần đi lại li&ecirc;n tục.</p>\r\n\r\n<p>C&aacute;ch kết hợp n&agrave;y đ&atilde; trở th&agrave;nh xu hướng l&ecirc;n đồ của giới trẻ. Đơn giản với một đ&ocirc;i Mcqueen trắng, bạn c&oacute; thể diện suit ngắn hoặc d&agrave;i đều được.</p>\r\n\r\n<p><img alt=\"outfit với sneaker mcqueen nữ\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-mcqueen-nu-5.jpg\" style=\"height:768px; width:512px\" /></p>\r\n\r\n<p><em>Kết hợp Mcqueen c&ugrave;ng &aacute;o vest tạo n&ecirc;n sự năng động, ph&oacute;ng kho&aacute;ng</em></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, thay thế những chiếc quần &acirc;u th&igrave; bạn c&oacute; thể sử dụng quần jean, vừa c&oacute; sự lịch l&atilde;m m&agrave; kh&ocirc;ng hề bị đ&aacute;nh gi&aacute; l&agrave; cứng nhắc, đứng tuổi khi ra đường.</p>\r\n\r\n<h2><strong>Phối đồ Mcqueen nữ c&ugrave;ng phong c&aacute;ch đồ truyền thống</strong></h2>\r\n\r\n<p><img alt=\"mix đồ mcqueen nữ truyền thống\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-mcqueen-nu-6.jpg\" style=\"height:512px; width:512px\" /></p>\r\n\r\n<p>D&ugrave; l&agrave; phong c&aacute;ch truyền thống nhưng lối mix đồ n&agrave;y sẽ kh&ocirc;ng bao giờ lỗi thời. Thời tiết m&ugrave;a h&egrave; nắng n&oacute;ng hay m&ugrave;a thu m&aacute;t mẻ, combo quần short jean/ quần jean r&aacute;ch + &aacute;o ph&ocirc;ng c&ugrave;ng đ&ocirc;i gi&agrave;y sneaker Mcqueen trắng l&agrave; lựa chọn ho&agrave;n hảo.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-short-jeans-mcqueen-sneaker-1.jpg\" style=\"height:643px; width:515px\" /></p>\r\n\r\n<p>Bạn c&oacute; thể ho&agrave;n to&agrave;n thoải m&aacute;i khi diện ch&uacute;ng m&agrave; kh&ocirc;ng k&eacute;m phần năng động, trẻ trung. B&ecirc;n cạnh đ&oacute;, bạn c&oacute; thể thay thế &aacute;o ph&ocirc;ng bằng chiếc &aacute;o kẻ caro đầy c&aacute; t&iacute;nh hay &aacute;o kho&aacute;c để kết hợp trang phục.</p>\r\n\r\n<h2><strong>Mix Ch&acirc;n v&aacute;y + &aacute;o sơ mi/hoodie v&agrave; Mcqueen</strong></h2>\r\n\r\n<p>Nhiều bạn nữ thường hay chọn cho m&igrave;nh những đ&ocirc;i gi&agrave;y với g&oacute;t cao kết hợp c&ugrave;ng ch&acirc;n v&aacute;y để &ldquo;ăn gian&rdquo; chiều cao của m&igrave;nh cũng như th&ecirc;m phần nữ t&iacute;nh. Tuy nhi&ecirc;n, đối với c&aacute;c c&ocirc; n&agrave;ng c&oacute; c&aacute; t&iacute;nh, kh&ocirc;ng th&iacute;ch đứng tr&ecirc;n những đ&ocirc;i gi&agrave;y cao th&igrave; c&oacute; thể thay thế bằng một đ&ocirc;i gi&agrave;y Alexander Mcqueen.</p>\r\n\r\n<p>Bạn c&oacute; biết:&nbsp;<a href=\"https://shopgiayreplica.com/gia-giay-mcqueen-chinh-hang/\"><strong>gi&agrave;y Mcqueen auth c&oacute; gi&aacute; bao nhi&ecirc;u tiền</strong></a>? Chi tiết!</p>\r\n\r\n<p><img alt=\"phối đồ nữ hiện đại alexander mcqueen\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-mcqueen-nu-7.jpg\" style=\"height:639px; width:512px\" /></p>\r\n\r\n<p><em>Set đồ n&agrave;y cũng gi&uacute;p bạn &ldquo;ăn gian&rdquo; chiều cao khoảng 3-4cm</em></p>\r\n\r\n<p>Với đặc điểm l&agrave; đế b&aacute;nh m&igrave;, đ&ocirc;i sneaker n&agrave;y cũng kh&ocirc;ng khiến bạn thất vọng khi c&oacute; chiều cao khi&ecirc;m tốn m&agrave; diện ch&uacute;ng. Set đồ được kết hợp n&agrave;y vẫn tạo n&ecirc;n tổng thể h&agrave;i h&ograve;a v&agrave; thu h&uacute;t. Nếu l&agrave; một c&ocirc; n&agrave;ng ch&acirc;n ngắn, đừng qu&ecirc;n sở hữu item n&agrave;y để k&eacute;o d&agrave;i ch&acirc;n thon.</p>\r\n\r\n<h2><strong>Gi&agrave;y Alexander Mcqueen outfit c&ugrave;ng &aacute;o kho&aacute;c, &aacute;o len c&aacute;c loại</strong></h2>\r\n\r\n<p>Đ&acirc;y l&agrave; gợi &yacute; c&aacute;ch l&ecirc;n đồ cho những ng&agrave;y đ&ocirc;ng gi&aacute; lạnh, bạn c&oacute; thể sử dụng một chiếc &aacute;o len cao cổ c&ugrave;ng &aacute;o kho&aacute;c m&agrave;u mận, &aacute;o dạ d&agrave;i hoặc &aacute;o kho&aacute;c bomber m&agrave;u xanh qu&acirc;n đội. Phần th&acirc;n dưới kết hợp c&ugrave;ng quần jean v&agrave; gi&agrave;y Alexander Mcqueen trắng l&agrave; một trong những sự lựa chọn kh&ocirc;ng tồi.</p>\r\n\r\n<p><img alt=\"mix đồ với giày mcqueen\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-mcqueen-nu-1.jpg\" style=\"height:598px; width:512px\" /></p>\r\n\r\n<p><em>Set đồ ph&ugrave; hợp với những kh&ocirc;ng gian hoạt động kh&aacute;c nhau, từ dạo phố hay du lịch</em></p>\r\n\r\n<p>T&ugrave;y v&agrave;o mỗi kiểu &aacute;o kh&aacute;c nhau m&agrave; bạn sẽ ph&ugrave; hợp với những kh&ocirc;ng gian hoạt động kh&aacute;c nhau, từ dạo phố, đi thảm đỏ hay du lịch&hellip;.&nbsp; B&ecirc;n cạnh đ&oacute;, bạn c&oacute; thể biến tấu những set đồ n&agrave;y bằng c&aacute;ch thay những chiếc &aacute;o kho&aacute;c kh&aacute;c nhau v&agrave; tạo n&ecirc;n một bộ đồ mới toanh.</p>\r\n\r\n<h2><strong>&Aacute;o giấu quần, v&aacute;y liền, ch&acirc;n v&aacute;y d&agrave;i c&ugrave;ng Mcqueen</strong></h2>\r\n\r\n<p><img alt=\"mcqueen nữ outfit\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-mcqueen-nu-2.jpg\" style=\"height:861px; width:512px\" /></p>\r\n\r\n<p>Bạn sẽ trở n&ecirc;n cực kỳ cool ngầu khi diện một chiếc &aacute;o d&aacute;ng d&agrave;i kết hợp c&ugrave;ng chiếc quần ngắn. Tuy nhi&ecirc;n, phong c&aacute;ch n&agrave;y đối với nữ cần kết hợp một số phụ kiện như khuy&ecirc;n tai, v&ograve;ng cổ để tạo độ duy&ecirc;n d&aacute;ng v&agrave; giảm bớt sự mạnh mẽ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/outfit-giay-mcqueen-nu.jpg\" style=\"height:602px; width:515px\" /></p>\r\n\r\n<p><em>V&aacute;y liền c&ugrave;ng sneaker Mcqueen l&agrave; sự lựa chọn cho những c&ocirc; n&agrave;ng c&aacute; t&iacute;nh</em></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể&nbsp;<strong>phối đồ với gi&agrave;y Alexander Mcqueen nữ</strong>&nbsp;c&ugrave;ng chiếc v&aacute;y điệu đ&agrave; với c&aacute;c loại chất liệu, đơn sắc hay hoa văn&hellip; gi&uacute;p bạn trẻ trung, thu h&uacute;t mọi &aacute;nh nh&igrave;n.</p>\r\n\r\n<p>Nh&igrave;n chung Mcqueen l&agrave; một đ&ocirc;i gi&agrave;y kh&aacute; dễ, đ&uacute;ng với đặc t&iacute;nh đơn giản. Ch&uacute;ng h&agrave;i h&ograve;a từ đường n&eacute;t cho đến m&agrave;u sắc, v&igrave; vậy về cơ bản bạn c&oacute; thể t&ugrave;y &yacute; mix match. Tuy nhi&ecirc;n h&atilde;y lưu &yacute; yếu tố đơn sắc, đừng sử dụng những tone m&agrave;u qu&aacute; nổi bật hay những phụ kiện rườm r&agrave; bởi ch&uacute;ng sẽ bị phản t&aacute;c dụng.</p>\r\n\r\n<p>Với gi&aacute; th&agrave;nh kh&ocirc;ng dưới 10.000.000 đồng, việc sở hữu một đ&ocirc;i Alexander Mcqueen cũng trở n&ecirc;n kh&oacute; khăn đối với nhiều người. Vậy n&ecirc;n, bạn c&oacute; thể chọn lựa những đ&ocirc;i gi&agrave;y Rep 1:1 hoặc bản si&ecirc;u cấp với chất lượng đảm bảo m&agrave; gi&aacute; th&agrave;nh lại ph&ugrave; hợp với nhiều t&uacute;i tiền.</p>\r\n\r\n<blockquote>\r\n<p>Bạn c&oacute; muốn biết:&nbsp;<strong><a href=\"https://shopgiayreplica.com/cach-de-phan-biet-mcqueen-rep-11-va-sieu-cap/\">C&aacute;ch ph&acirc;n biệt gi&agrave;y Mcqueen si&ecirc;u cấp v&agrave; rep 1 1</a></strong>?</p>\r\n</blockquote>\r\n\r\n<p>V&agrave; bạn c&oacute; thể gh&eacute; qua&nbsp;<a href=\"https://shopgiayreplica.com/\"><strong>Shopgiayreplica.com&trade;</strong></a>&nbsp;l&agrave; địa chỉ chuy&ecirc;n b&aacute;n gi&agrave;y Alexander Mcqueen replica v&agrave; si&ecirc;u cấp với gi&aacute; tốt nhất v&agrave; uy t&iacute;n nhất ngay h&ocirc;m nay.</p>\r\n\r\n<p>Chuy&ecirc;n mục :&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/tin-tuc/\" title=\"Tin tức\">Tin tức</a></p>', 'Là một trong những mẫu giày quen thuộc với giới trẻ Việt Nam, giày Alexander Mcqueen mang đến phong cách thời trang thu hút cùng khả năng kết hợp trang phục đa dạng trong nhiều hoạt động. Vậy các bạn nữ đã biết cách phối đồ với giày Mcqueen chưa?', 1, '2020-12-27 01:37:53', '2020-12-27 01:37:53'),
(7, 'Cách thắt dây giày Nike Air Force 1 cực đẹp', 'cach-that-day-giay-nike-air-force-1-cuc-dep', 3, 'Blog/cach-buoc-day-giay-nike-air-force-1-1.png ', '<h1>C&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 cực đẹp m&agrave; bạn tự l&agrave;m được</h1>\r\n\r\n<p>C&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 cũng giống như những d&ograve;ng gi&agrave;y kh&aacute;c, kh&ocirc;ng kh&oacute; nhưng lại thể hiện gu thời trang của mỗi người.</p>\r\n\r\n<p>Nếu l&agrave; một t&iacute;n đồ ch&acirc;n ch&iacute;nh của sneaker, chắc hẳn bạn phải sở hữu cho m&igrave;nh một đ&ocirc;i gi&agrave;y huyền thoại&nbsp;<strong><a href=\"https://shopgiayreplica.com/giay-nike-air-force/\">Nike Air Force 1</a></strong>&nbsp;của nh&agrave;&nbsp;<strong>Nike</strong>. Thế nhưng liệu bạn đ&atilde; quan t&acirc;m v&agrave;&nbsp;<strong>buộc d&acirc;y gi&agrave;y</strong>&nbsp;đ&uacute;ng c&aacute;ch v&agrave; đẹp hay chưa? Thực tế, rất nhiều người sau khi sắm đ&ocirc;i AF1 lại băn khoăn&nbsp;<strong>kh&ocirc;ng biết buộc d&acirc;y gi&agrave;y như thế n&agrave;o</strong>&nbsp;cho hợp mốt bởi đ&acirc;y l&agrave; phần nằm ngay vị tr&iacute; &ldquo;mặt tiền trung t&acirc;m&rdquo; của đ&ocirc;i gi&agrave;y v&agrave; sẽ khẳng định phong c&aacute;ch của bạn.</p>\r\n\r\n<p>C&ugrave;ng&nbsp;<a href=\"https://shopgiayreplica.com/\"><strong>shopgiayreplica.com</strong></a>&nbsp;điểm qua những c&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 đẹp nhất năm 2020 hứa hẹn sẽ l&agrave;m thay đổi diện mạo cho đ&ocirc;i gi&agrave;y của bạn ngay sau đ&acirc;y nh&eacute;!</p>\r\n\r\n<p>Mục lục</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://shopgiayreplica.com/cach-that-day-giay-nike-air-force-1/#Cach_that_day_giay_Nike_Air_Force_1_kieu_vat_cheo_tren_%E2%80%93_duoi\" title=\"Cách thắt dây giày Nike Air Force 1 kiểu vắt chéo trên – dưới \">C&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 kiểu vắt ch&eacute;o tr&ecirc;n &ndash; dưới</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/cach-that-day-giay-nike-air-force-1/#Xo_day_giay_Nike_Air_Force_1_kieu_mot_day\" title=\"Xỏ dây giày Nike Air Force 1 kiểu một dây\">Xỏ d&acirc;y gi&agrave;y Nike Air Force 1 kiểu một d&acirc;y</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/cach-that-day-giay-nike-air-force-1/#Cach_that_day_giay_Nike_AF1_o_phia_mui_giay\" title=\"Cách thắt dây giày Nike AF1 ở phía mũi giày\">C&aacute;ch thắt d&acirc;y gi&agrave;y Nike AF1 ở ph&iacute;a mũi gi&agrave;y</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/cach-that-day-giay-nike-air-force-1/#Cach_that_day_giay_Nike_Air_Force_1_cao_co\" title=\"Cách thắt dây giày Nike Air Force 1 cao cổ\">C&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 cao cổ</a></li>\r\n</ul>\r\n\r\n<h2><strong>C&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 kiểu vắt ch&eacute;o tr&ecirc;n &ndash; dưới</strong></h2>\r\n\r\n<p>Khi c&aacute;ch buộc đan xen Criss &ndash; Cross truyền th&ocirc;ng v&agrave; c&oacute; thể &aacute;p dụng bất cứ tr&ecirc;n loại gi&agrave;y n&agrave;o, th&igrave; bạn c&oacute; thể biến tấu đ&ocirc;i Nike AF1 mới lạ hơn bằng c&aacute;ch buộc vắt ch&eacute;o tr&ecirc;n &ndash; dưới.&nbsp;<strong>C&aacute;ch xỏ d&acirc;y gi&agrave;y AF1 n&agrave;y cũng rất đơn giản</strong>&nbsp;nhưng tạo n&ecirc;n hiệu ứng thị gi&aacute;c mạnh mẽ hơn, độc đ&aacute;o hơn.</p>\r\n\r\n<ul>\r\n	<li><strong>Bước 1:</strong>&nbsp;Xỏ d&acirc;y gi&agrave;y v&agrave;o h&agrave;ng lỗ xỏ đầu ti&ecirc;n t&iacute;nh từ mũi gi&agrave;y theo chiều từ dưới l&ecirc;n sao cho hai phần d&acirc;y gi&agrave;y bằng nhau v&agrave; kh&ocirc;ng bị xoắn.</li>\r\n	<li><strong>Bước 2:</strong>&nbsp;Vắt ch&eacute;o hai phần d&acirc;y gi&agrave;y v&agrave; xỏ v&agrave;o lỗ xỏ đối diện liền kề theo chiều từ ngo&agrave;i v&agrave;o trong để tạo n&uacute;t vắt ch&eacute;o tr&ecirc;n.</li>\r\n	<li><strong>Bước 3:</strong>&nbsp;Tiếp tục vắt ch&eacute;o hai phần d&acirc;y, xỏ v&agrave;o lỗ xỏ đối diện liền kề, nhưng theo chiều từ trong ra ngo&agrave;i để tạo n&uacute;t vắt ch&eacute;o ở dưới.</li>\r\n	<li><strong>Bước 4:</strong>&nbsp;Tiếp tục thực hiện thao t&aacute;c vắt ch&eacute;o tr&ecirc;n dưới cho đến lỗ xỏ cuối c&ugrave;ng rồi thắt n&uacute;t cố định.</li>\r\n</ul>\r\n\r\n<p><img alt=\"thắt dây giày nike air force 1\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/cach-buoc-day-giay-nike-air-force-1-1.png\" style=\"height:389px; width:660px\" /></p>\r\n\r\n<p><em>Th&agrave;nh quả sau khi xỏ d&acirc;y gi&agrave;y Nike AF1 kiểu vắt ch&eacute;o tr&ecirc;n &ndash; dưới.</em></p>\r\n\r\n<h2><strong>Xỏ d&acirc;y gi&agrave;y Nike Air Force 1 kiểu một d&acirc;y</strong></h2>\r\n\r\n<p>Kiểu sử dụng duy nhất 1 d&acirc;y khi buộc d&acirc;y gi&agrave;y c&oacute; lẽ c&ograve;n chưa được &aacute;p dụng nhiều hiện nay bởi mọi người sẽ sợ khi d&ugrave;ng 1 d&acirc;y th&igrave; sẽ kh&ocirc;ng được chắc chắn. Tuy nhi&ecirc;n h&atilde;y &aacute;p dụng những bước sau đ&acirc;y th&igrave; bạn sẽ thấy kiểu buộc n&agrave;y đẹp, chắc v&agrave; ph&ugrave; hợp với Nike AF1 đến mức n&agrave;o.</p>\r\n\r\n<ul>\r\n	<li><strong>Bước 1:</strong>&nbsp;Lấy một đầu d&acirc;y, xỏ v&agrave;o lỗ xỏ đầu ti&ecirc;n b&ecirc;n phải t&iacute;nh từ mũi gi&agrave;y theo chiều từ ngo&agrave;i v&agrave;o trong. Bạn chỉ cần xỏ v&agrave;o 01 lỗ xỏ b&ecirc;n phải v&agrave; để k&eacute;o d&agrave;i ra một đoạn khoảng 3-5 cm rồi nh&eacute;t v&agrave;o trong gi&agrave;y.</li>\r\n	<li><strong>Bước 2:</strong>&nbsp;Lấy đầu d&acirc;y c&ograve;n lại, xỏ v&agrave;o lỗ xỏ đầu ti&ecirc;n b&ecirc;n tr&aacute;i theo chiều từ trong ra ngo&agrave;i. Bạn y&ecirc;n t&acirc;m rằng phần d&acirc;y sẽ kh&ocirc;ng bị lỏng lẻo đ&acirc;u v&igrave; đ&atilde; c&oacute; phần nh&eacute;t d&acirc;y ở bước 1 rồi.</li>\r\n	<li><strong>Bước 3:</strong>&nbsp;Sử dụng phần d&acirc;y d&agrave;i b&ecirc;n tr&aacute;i, xỏ l&ecirc;n tr&ecirc;n lỗ xỏ liền kề b&ecirc;n phải theo chiều từ ngo&agrave;i v&agrave;o trong, sau đ&oacute; luồn sang b&ecirc;n lỗ xỏ c&ugrave;ng h&agrave;ng b&ecirc;n tr&aacute;i theo chiều từ dưới l&ecirc;n tr&ecirc;n.</li>\r\n	<li><strong>Bước 4:</strong>&nbsp;Thực hiện thao t&aacute;c như bước 3 cho đến lỗ xỏ cuối c&ugrave;ng rồi nh&eacute;t phần d&acirc;y c&ograve;n thừa v&agrave;o gi&agrave;y l&agrave; ho&agrave;n th&agrave;nh.</li>\r\n</ul>\r\n\r\n<p><img alt=\"buộc dây giày nike af1\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/cach-buoc-day-giay-nike-air-force-1-2.png\" style=\"height:417px; width:660px\" /></p>\r\n\r\n<blockquote>\r\n<p>Xem th&ecirc;m:&nbsp;<strong><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-nike-air-force-1/\">C&aacute;ch phối đồ với gi&agrave;y Nike air force 1 s&agrave;nh điệu nhất 2020</a></strong>!</p>\r\n</blockquote>\r\n\r\n<h2><strong>C&aacute;ch thắt d&acirc;y gi&agrave;y Nike AF1 ở ph&iacute;a mũi gi&agrave;y</strong></h2>\r\n\r\n<p><strong>Kiểu thắt n&uacute;t d&acirc;y ph&iacute;a mũi gi&agrave;y</strong>&nbsp;l&agrave; c&aacute;ch buộc cực kỳ đặc biệt, đến nỗi dường như n&oacute; được sinh ra để d&agrave;nh cho đ&ocirc;i gi&agrave;y&nbsp;<a href=\"https://shopgiayreplica.com/giay-nike-air-force-1-g-dragon/\">Nike Air Force 1 G-Dragon Korea Exclusive</a>&nbsp;hay c&ograve;n gọi l&agrave; gi&agrave;y hoa c&uacute;c đang nổi đ&igrave;nh đ&aacute;m hiện nay.</p>\r\n\r\n<p>Mục đ&iacute;ch của c&aacute;ch thắt d&acirc;y n&agrave;y l&agrave; để lộ biểu tượng hoa c&uacute;c ở ph&iacute;a tr&ecirc;n c&ugrave;ng của phần lưỡi g&agrave;, mang lại diện mạo v&ocirc; c&ugrave;ng độc đ&aacute;o v&agrave; s&agrave;nh điệu cho đ&ocirc;i AF1 n&agrave;y.&nbsp;<strong>C&aacute;ch xỏ n&agrave;y sẽ ngược ho&agrave;n to&agrave;n so với kiểu truyền thống</strong>:</p>\r\n\r\n<ul>\r\n	<li><strong>Bước 1:</strong>&nbsp;Xỏ d&acirc;y v&agrave;o h&agrave;ng lỗ thứ 3 t&iacute;nh từ ph&iacute;a cổ gi&agrave;y theo chiều từ ngo&agrave;i v&agrave;o trong. Ta để trống hai h&agrave;ng lỗ xỏ đầu ti&ecirc;n để lộ h&igrave;nh hoa c&uacute;c, cũng để dễ d&agrave;ng hơn khi mang v&agrave; th&aacute;o gi&agrave;y.</li>\r\n	<li><strong>Bước 2:</strong>&nbsp;Thực hiện kiểu xỏ d&acirc;y truyền thống criss-cross, vắt ch&eacute;o hai phần d&acirc;y l&ecirc;n nhau theo thứ tự nhất định, luồn v&agrave;o lỗ xỏ đối diện theo chiều từ ngo&agrave;i v&agrave;o trong.</li>\r\n	<li><strong>Bước 3:</strong>&nbsp;Tiếp tục đến lỗ xỏ cuối c&ugrave;ng ph&iacute;a mũi gi&agrave;y, bạn chỉ cần thắt nơ lại sao cho xinh v&agrave; chắc l&agrave; xong.</li>\r\n</ul>\r\n\r\n<p><img alt=\"dây giày nike air force 1\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/cach-buoc-day-giay-nike-air-force-1-3-1.png\" style=\"height:495px; width:660px\" /></p>\r\n\r\n<h2><strong>C&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 cao cổ</strong></h2>\r\n\r\n<p><strong><a href=\"https://shopgiayreplica.com/giay-nike-air-force-1-07-cao-co-mau-trang/\">Gi&agrave;y Nike Air Force 1 cao cổ</a></strong>&nbsp;c&oacute; một điểm nhấn đặc biệt đ&oacute; l&agrave; phần miếng d&aacute;n ở cổ gi&agrave;y. Điều n&agrave;y tạo cho phần cổ gi&agrave;y một h&igrave;nh d&aacute;ng kh&aacute; to, hầm hố; v&igrave; vậy, để c&acirc;n bằng lại tổng thể, một kiểu buộc d&acirc;y truyền thống l&agrave; sự lựa chọn tốt nhất, hay n&oacute;i c&aacute;ch kh&aacute;c<strong>.</strong></p>\r\n\r\n<p>Bạn c&oacute; muốn biết&nbsp;<strong><a href=\"https://shopgiayreplica.com/cac-phoi-mau-cua-giay-nike-air-force-1/\">tất cả c&aacute;c phối m&agrave;u đẹp nhất của Nike air force 1</a></strong>?</p>\r\n\r\n<p>C&aacute;ch thắt d&acirc;y gi&agrave;y Nike Air Force 1 cổ cao ch&iacute;nh l&agrave; kiểu criss-cross. Từ đ&oacute;, đ&ocirc;i gi&agrave;y của bạn sẽ kh&ocirc;ng bị rối mắt m&agrave; tinh tế v&agrave; hợp mốt hơn rất nhiều.</p>\r\n\r\n<p><img alt=\"buộc dây giày af1\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/cach-buoc-day-giay-nike-air-force-1-4.png\" style=\"height:495px; width:660px\" /></p>\r\n\r\n<p>Hi vọng với những c&aacute;ch buộc d&acirc;y gi&agrave;y Nike Air Force 1 đơn giản m&agrave; cực đẹp tr&ecirc;n đ&acirc;y sẽ gi&uacute;p bạn c&oacute; được một diện mạo mới mẻ v&agrave; thời trang cho đ&ocirc;i gi&agrave;y của m&igrave;nh. Nếu bạn thấy b&agrave;i viết hữu &iacute;ch đừng qu&ecirc;n để lại b&igrave;nh luận ph&iacute;a dưới v&agrave; chia sẻ cho mọi người c&ugrave;ng biết nh&eacute;!</p>\r\n\r\n<p>Chuy&ecirc;n mục :&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/meo-vat/\" title=\"Mẹo vặt\">Mẹo vặt</a></p>', 'Cách thắt dây giày Nike Air Force 1 cũng giống như những dòng giày khác, không khó nhưng lại thể hiện gu thời trang của mỗi người....', 1, '2021-01-03 06:57:01', '2021-01-03 06:57:01'),
(8, 'Phối đồ với giày Vans – Chọn tất vớ đi cùng giày Vans', 'phoi-do-voi-giay-vans-–-chon-tat-vo-di-cung-giay-vans', 3, 'Blog/phoi-do-voi-giay-vans-9-1.jpg ', '<h1>Phối đồ với gi&agrave;y Vans &ndash; Chọn tất vớ đi c&ugrave;ng gi&agrave;y Vans</h1>\r\n\r\n<p>12/10/2020&nbsp;1016 lượt xem&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/meo-vat/\" title=\"Mẹo vặt\">Mẹo vặt</a></p>\r\n\r\n<p>Bạn c&oacute; một đ&ocirc;i gi&agrave;y Vans n&agrave;o trong tủ gi&agrave;y kh&ocirc;ng? Vậy th&igrave; bạn cần biết c&aacute;ch phối đồ với gi&agrave;y Vans chưa? Bạn thường chọn tất g&igrave; khi kết hợp với gi&agrave;y Vans. Trước khi đi v&agrave;o vấn đề h&atilde;y d&agrave;nh ra 1 ph&uacute;t ngắn t&igrave;m hiểu qua gi&agrave;y Vans đ&atilde; nh&eacute;!</p>\r\n\r\n<p>Mục lục</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-vans-cuc-chat/#Thuong_hieu_giay_Vans\" title=\"Thương hiệu giày Vans\">Thương hiệu gi&agrave;y Vans</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-vans-cuc-chat/#Cach_phoi_do_voi_giay_Vans_cho_nam\" title=\"Cách phối đồ với giày Vans cho nam\">C&aacute;ch phối đồ với gi&agrave;y Vans cho nam</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-vans-cuc-chat/#Phoi_do_voi_giay_Vans_nu\" title=\"Phối đồ với giày Vans nữ\">Phối đồ với gi&agrave;y Vans nữ</a></li>\r\n</ul>\r\n\r\n<h2>Thương hiệu gi&agrave;y Vans</h2>\r\n\r\n<p><a href=\"https://www.vans.com/\" rel=\"nofollow noopener noreferrer\" target=\"_blank\"><strong>Vans</strong></a>&nbsp;c&oacute; thể được coi thương hiệu &ldquo;gi&agrave;y học sinh&rdquo; được ưa chuộng nhất hiện nay, b&ecirc;n cạnh gi&agrave;y Converse. Đến tận năm 2011, Vans mới c&oacute; mặt Việt Nam, thế nhưng ấn tượng m&agrave; Vans tạo ra lại đối lập ho&agrave;n to&agrave;n so với những d&ograve;ng gi&agrave;y kh&aacute;c.&nbsp;<strong><a href=\"https://shopgiayreplica.com/giay-vans/\">Gi&agrave;y Vans</a></strong>&nbsp;đem lại sự giản đơn, chỉn chu, với thiết kế nh&atilde; nhặn, ph&ugrave; hợp trong mọi ho&agrave;n cảnh.</p>\r\n\r\n<p>Biểu tượng của Vans đ&atilde; một thời thống trị thời trang đường phố đ&oacute; l&agrave; b&agrave;n cờ với họa tiết kẻ &ocirc; đen trắng. Tại Việt Nam, những đ&ocirc;i gi&agrave;y Vans thời kỳ đ&oacute; lu&ocirc;n gắn liền với skateboarding v&agrave; nhạc hiphop. Cho đến tận b&acirc;y giờ, gi&agrave;y Vans vẫn lu&ocirc;n được giới trẻ lựa chọn v&agrave; biến ho&aacute; ra v&ocirc; v&agrave;n những phong c&aacute;ch độc đ&aacute;o, cuốn h&uacute;t kh&aacute;c nhau.</p>\r\n\r\n<p>Với mức độ &ldquo;nhẵn mặt&rdquo; của gi&agrave;y Vans, l&agrave;m sao để phối th&agrave;nh một bộ đồ tr&ocirc;ng thật kh&iacute; chất? H&atilde;y c&ugrave;ng Shopgiayreplica.com t&igrave;m ra c&acirc;u trả lời trong b&agrave;i viết dưới đ&acirc;y nh&eacute;.</p>\r\n\r\n<h2>C&aacute;ch&nbsp;<strong>phối đồ với gi&agrave;y Vans cho nam</strong></h2>\r\n\r\n<p><strong>C&aacute;ch phối đồ với gi&agrave;y Vans</strong>&nbsp;ph&ugrave; hợp nhất c&oacute; lẽ phải nhắc đến phong c&aacute;ch retro. Đặc biệt hơn, c&aacute;c bạn nam mặc đồ retro lại cực cuốn h&uacute;t với n&eacute;t phong trần. Chỉ cần một chiếc quần kaki m&agrave;u be, kết hợp c&ugrave;ng &aacute;o ph&ocirc;ng rộng c&oacute; thể c&ugrave;ng hoắc kh&aacute;c t&ocirc;ng m&agrave;u cho với quần, đi&nbsp;<strong>đ&ocirc;i Vans Old Skool</strong>&nbsp;l&agrave; bạn đ&atilde; c&oacute; một set đồ ấn tượng rồi.</p>\r\n\r\n<p>Lưu &yacute; rằng, chiếc quần kaki c&oacute; thể linh hoạt thay bằng quần jeans d&aacute;ng su&ocirc;ng nh&eacute;. Bạn c&oacute; thể phối th&ecirc;m một số phụ kiện như mũ nồi, d&acirc;y chuyền, t&uacute;i x&aacute;ch,&nbsp;<strong>tất cao cổ</strong>&hellip; để c&oacute; th&ecirc;m điểm nhấn khi đi dạo phố, đi chơi.</p>\r\n\r\n<p><img alt=\"phối đồ với giày vans nam\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-vans-9-1.jpg\" style=\"height:813px; width:660px\" /></p>\r\n\r\n<p><em>Phối Vans c&ugrave;ng quần kaki mang lại &acirc;m hưởng retro, phong trần cực kỳ.</em></p>\r\n\r\n<p><img alt=\"mix đồ với giày vans nam\" src=\"https://lh3.googleusercontent.com/MnE0TnQlWTba_rFhjb5VZbwDURM99VAEadB6ct5XTDKdD5AjB8dDeTU5UzkTLPQpM5GS9nAbNmyMFTbST-jDVm6Kf-OMsm-fC4fUNo3J0afpk3d7B45fjf8QKPSV339VmbN6yKo\" /></p>\r\n\r\n<p><em>Chiếc quần kaki được thay bởi quần jeans d&aacute;ng su&ocirc;ng đem lại sự trẻ trung, phong c&aacute;ch.</em></p>\r\n\r\n<p><strong>C&aacute;ch phối đồ cực thời thượng với gi&agrave;y Vans</strong>&nbsp;tiếp theo đ&oacute; ch&iacute;nh l&agrave; chiếc quần ống rộng. Năm nay v&agrave; cả thời gian tới, chiếc quần ống rộng ch&iacute;nh l&agrave; trend; v&igrave; vậy thật thiết s&oacute;t nếu c&aacute;c ch&agrave;ng kh&ocirc;ng&nbsp;<strong>phối gi&agrave;y Vans với quần ống rộng</strong>, kết hợp c&ugrave;ng chiếc &aacute;o ph&ocirc;ng sơ vin ngay ngắn.</p>\r\n\r\n<blockquote>\r\n<p>Bạn c&oacute; muốn biết th&ecirc;m:&nbsp;<strong><a href=\"https://shopgiayreplica.com/phoi-do-voi-giay-nike-air-force-1/\">C&aacute;ch phối đồ với gi&agrave;y Nike air force 1</a></strong>&nbsp;kh&ocirc;ng?</p>\r\n</blockquote>\r\n\r\n<p>Bộ&nbsp;<strong>outfit</strong>&nbsp;n&agrave;y kh&ocirc;ng chỉ gi&uacute;p t&ocirc;n d&aacute;ng cho bạn, m&agrave; c&ograve;n v&ocirc; c&ugrave;ng s&agrave;nh điệu nhưng kh&ocirc;ng k&eacute;m phần thanh lịch. Nếu th&iacute;ch sự trẻ trung, bạn c&oacute; thể xắn ống quần l&ecirc;n để tr&ocirc;ng kh&ocirc;ng qu&aacute; đứng tuổi. Tuy nhi&ecirc;n, h&atilde;y lưu &yacute;, set đồ n&agrave;y sẽ kh&ocirc;ng qu&aacute; ph&ugrave; hợp với những bạn nam c&oacute; phần h&ocirc;ng qu&aacute; to.</p>\r\n\r\n<p><img alt=\"tất đi giày vans\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-vans-1-1.jpg\" style=\"height:842px; width:660px\" /></p>\r\n\r\n<p>C&aacute;ch hữu hiệu nhất để thể hiện sự nam t&iacute;nh đ&oacute; l&agrave; h&atilde;y mặc thật đơn giản nhưng gọn g&agrave;ng v&agrave; tinh tế. C&aacute;c ch&agrave;ng h&atilde;y&nbsp;<strong>mix</strong>&nbsp;một chiếc quần jeans hoặc kaki đen trơn với chiếc &aacute;o b&ecirc;n trong sơ vin v&agrave; &aacute;o kho&aacute;c b&ecirc;n ngo&agrave;i d&aacute;ng ngắn. Với tổng thể như vậy th&igrave; một đ&ocirc;i Vans classic ch&iacute;nh l&agrave; sự lựa chọn ho&agrave;n hảo. Set đồ n&agrave;y chắc chắn sẽ đổ gục mọi &aacute;nh nh&igrave;n từ ph&aacute;i nữ đ&oacute;.</p>\r\n\r\n<p>Một items kh&ocirc;ng thể thiếu của ph&aacute;i nam ch&iacute;nh l&agrave; chiếc quần short. H&atilde;y&nbsp;<em>phối gi&agrave;y Vans với quần short</em>&nbsp;để tạo sự năng động v&agrave; kh&ocirc;ng g&acirc;y nh&agrave;m ch&aacute;n. Bạn h&atilde;y đi một đ&ocirc;i&nbsp;<em>tất cổ cao</em>&nbsp;để th&ecirc;m phần s&agrave;nh điệu nh&eacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Phối đồ với gi&agrave;y Vans nữ</strong></h2>\r\n\r\n<p>C&oacute; lẽ bộ đ&ocirc;i quần jeans + &aacute;o ph&ocirc;ng đ&atilde; l&agrave; combo thần th&aacute;nh để c&acirc;n mọi phong c&aacute;ch rồi. Trong đ&oacute;,&nbsp;<strong>quần short jeans ch&iacute;nh l&agrave; items ho&agrave;n hảo để kết hợp với gi&agrave;y Vans</strong>&nbsp;để mang đến sự trẻ trung, c&aacute; t&iacute;nh m&agrave; lại t&ocirc;n d&aacute;ng cho c&aacute;c bạn nữ.</p>\r\n\r\n<p><img alt=\"giày vans mặc với quần gì\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-vans-4.jpg\" style=\"height:823px; width:660px\" /></p>\r\n\r\n<p>Mốt giấu quần c&ugrave;ng gi&agrave;y Vans cũng kh&ocirc;ng nằm ngo&agrave;i sự lựa chọn cho ph&aacute;i nữ. Đ&ocirc;i gi&agrave;y Vans nhẹ nh&agrave;ng, nhỏ xinh sẽ c&acirc;n bằng lại t&iacute;nh thời trang cho cả set đồ n&agrave;y đ&oacute;.</p>\r\n\r\n<p><img alt=\"vans outfit girl\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-vans-5.jpg\" style=\"height:1007px; width:660px\" /></p>\r\n\r\n<p>Nếu th&iacute;ch sự nữ t&iacute;nh hơn, bạn c&oacute; thể phối gi&agrave;y Vans với v&aacute;y liền cho những buổi dạo phố, hoặc mix th&ecirc;m &aacute;o kho&aacute;c để tr&ocirc;ng nh&atilde; nhặn hơn trong những sự kiện quan trọng. Tương tự, chiếc v&aacute;y liền c&oacute; thể linh hoạt thay bởi chiếc ch&acirc;n v&aacute;y chữ A trẻ trung.</p>\r\n\r\n<p><img alt=\"phối đồ vans nữ\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-vans-6.jpg\" style=\"height:816px; width:660px\" /></p>\r\n\r\n<p><img alt=\"set đồ phối với vans\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-vans-7.jpg\" style=\"height:661px; width:660px\" /></p>\r\n\r\n<p>Th&ocirc;ng thường,&nbsp;<strong>khi phối đồ với gi&agrave;y Vans, người ta sẽ l&agrave;m lộ tất (vớ) để tạo sự c&aacute; t&iacute;nh v&agrave; chất hơn</strong>. V&igrave; vậy, việc chọn tất khi đi gi&agrave;y cũng v&ocirc; c&ugrave;ng quan trọng. Bạn n&ecirc;n&nbsp;<strong>phối gi&agrave;y Vans với tất cao cổ m&agrave;u trắng</strong>&nbsp;hoặc với ch&iacute;nh những đ&ocirc;i tất đặc trưng của h&atilde;ng. Kiểu mix n&agrave;y sẽ h&agrave;i ho&agrave; v&agrave; đẹp hơn việc bạn phối với những đ&ocirc;i tất kh&aacute;c m&agrave;u. Điểm n&agrave;y th&igrave; cả c&aacute;c bạn nam v&agrave; c&aacute;c bạn nữ đều phải nhớ nh&eacute;.</p>\r\n\r\n<p><img alt=\"trẻ trung với vans và tất cao cổ\" src=\"https://shopgiayreplica.com/wp-content/uploads/2020/10/phoi-do-voi-giay-vans-8.jpg\" style=\"height:824px; width:660px\" /></p>\r\n\r\n<p>Hy vọng những kiểu phối đồ với gi&agrave;y Vans tr&ecirc;n đ&acirc;y đ&atilde; gi&uacute;p bạn cải thiện phong c&aacute;ch thời trang của m&igrave;nh. Chỉ cần &aacute;p dụng đ&uacute;ng những quy tắc trong việc chọn trang phục, th&igrave; bạn đ&atilde; c&oacute; thể diện c&ugrave;ng với gi&agrave;y Vans một c&aacute;ch ngầu thật ngầu rồi!</p>\r\n\r\n<p>Đừng bỏ lỡ những sản phẩm gi&agrave;y Vans si&ecirc;u hot tại&nbsp;<a href=\"https://shopgiayreplica.com/\"><strong>Shopgiayreplica.com</strong>.</a>&nbsp;Cửa h&agrave;ng cung&nbsp; cấp&nbsp;<strong>gi&agrave;y Vans chuẩn Replica 1:1 chất lượng nhất</strong>, được cập nhật li&ecirc;n tục với đầy đủ size v&agrave; mẫu m&atilde; cho bạn lựa chọn. C&ograve;n chờ g&igrave; m&agrave; kh&ocirc;ng li&ecirc;n hệ ngay với cửa h&agrave;ng để nhận được những si&ecirc;u khuyến m&atilde;i hấp dẫn nhất!</p>\r\n\r\n<p>Chuy&ecirc;n mục :&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/meo-vat/\" title=\"Mẹo vặt\">Mẹo vặt</a></p>', 'Bạn có một đôi giày Vans nào trong tủ giày không? Vậy thì bạn cần biết cách phối đồ với giày Vans chưa? Bạn thường chọn tất gì khi kết hợp với giày Vans.', 1, '2021-01-03 06:59:43', '2021-01-14 02:43:02'),
(9, 'Cách vệ sinh giày Adidas', 'cach-ve-sinh-giay-adidas', 3, 'Blog/5-jpg-1-700x450.jpg ', '<h1>C&aacute;ch vệ sinh gi&agrave;y Adidas cho đ&ocirc;i gi&agrave;y lu&ocirc;n như mới</h1>\r\n\r\n<p>01/08/2018&nbsp;5113 lượt xem&nbsp;<a href=\"https://shopgiayreplica.com/kien-thuc-ve-giay/meo-vat/\" title=\"Mẹo vặt\">Mẹo vặt</a></p>\r\n\r\n<blockquote>\r\n<p>Nhắc đến gi&agrave;y thể thao kh&ocirc;ng thể kh&ocirc;ng nhắc đến thương hiệu Adidas. Với thiết kế đa dạng, gam m&agrave;u tươi trẻ, độ bền cao, &nbsp;Adidas đ&atilde; chiếm trọn tr&aacute;i tim của bao nhi&ecirc;u người y&ecirc;u gi&agrave;y, v&agrave; dần trở th&agrave;nh phụ kiện kh&ocirc;ng thể thiếu. B&ecirc;n cạnh việc giữ g&igrave;n v&agrave; bảo quản ra sao để ch&uacute;ng lu&ocirc;n bền đẹp như mới, &nbsp;th&igrave;&nbsp;<a href=\"https://shopgiayreplica.com/cach-giat-giay-a%E2%80%A6dep-khong-ti-vet/\">c&aacute;ch vệ sinh gi&agrave;y Adidas</a>&nbsp;tại nh&agrave; như thế n&agrave;o để lu&ocirc;n giữ được font d&aacute;ng tr&aacute;nh t&igrave;nh trạng bị ngả hoặc ố m&agrave;u cũng được rất nhiều t&iacute;n đồ&nbsp;<a href=\"https://shopgiayreplica.com/\">gi&agrave;y thể thao</a>&nbsp;quan t&acirc;m.</p>\r\n</blockquote>\r\n\r\n<p>Mục lục</p>\r\n\r\n<ul>\r\n	<li>\r\n	<ul>\r\n		<li><a href=\"https://shopgiayreplica.com/cach-ve-sinh-giay-adidas-cho-doi-giay-luon-nhu-moi-va-dep-khong-ti-vet/#Cach_ve_sinh_giay_adidas_bang_hon_hop_backing_soda_va_giam\" title=\"Cách vệ sinh giày adidas bằng hỗn hợp backing soda và giấm\">C&aacute;ch vệ sinh gi&agrave;y adidas bằng hỗn hợp backing soda v&agrave; giấm</a></li>\r\n		<li><a href=\"https://shopgiayreplica.com/cach-ve-sinh-giay-adidas-cho-doi-giay-luon-nhu-moi-va-dep-khong-ti-vet/#Cach_lam_sach_giay_Adidas_bang_kem_danh_rang_va_ban_chai_danh_rang_cu\" title=\"Cách làm sạch giày Adidas bằng kem đánh răng và bàn chải đánh răng cũ\">C&aacute;ch l&agrave;m sạch gi&agrave;y Adidas bằng kem đ&aacute;nh răng v&agrave; b&agrave;n chải đ&aacute;nh răng cũ</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"https://shopgiayreplica.com/cach-ve-sinh-giay-adidas-cho-doi-giay-luon-nhu-moi-va-dep-khong-ti-vet/#Cach_ve_sinh_giay_Adidas_bang_nuoc_tay_trang_pha_loang\" title=\"Cách vệ sinh giày Adidas bằng nước tẩy trắng pha loãng\">C&aacute;ch vệ sinh gi&agrave;y Adidas bằng nước tẩy trắng pha lo&atilde;ng</a></li>\r\n	<li><a href=\"https://shopgiayreplica.com/cach-ve-sinh-giay-adidas-cho-doi-giay-luon-nhu-moi-va-dep-khong-ti-vet/#Cach_lam_sach_giay_Adidas_trang_bang_khan_am_mem\" title=\"Cách làm sạch giày Adidas trắng bằng khăn ẩm mềm\">C&aacute;ch l&agrave;m sạch gi&agrave;y Adidas trắng bằng khăn ẩm mềm</a>\r\n	<ul>\r\n		<li><a href=\"https://shopgiayreplica.com/cach-ve-sinh-giay-adidas-cho-doi-giay-luon-nhu-moi-va-dep-khong-ti-vet/#Huong_dan_bao_quan_giay_Adidas_dung_cach\" title=\"Hướng dẫn bảo quản giày Adidas đúng cách\">Hướng dẫn bảo quản gi&agrave;y Adidas đ&uacute;ng c&aacute;ch</a></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h3>C&aacute;ch vệ sinh gi&agrave;y adidas bằng hỗn hợp backing soda v&agrave; giấm</h3>\r\n\r\n<p><img alt=\"cách vệ sinh giày adidas\" src=\"https://shopgiayreplica.com/wp-content/uploads/2018/08/5-jpg-1-700x450.jpeg\" style=\"height:450px; width:700px\" /></p>\r\n\r\n<p>Với những đ&ocirc;i gi&agrave;y Adidas c&oacute; gam m&agrave;u s&aacute;ng nhất l&agrave; m&agrave;u trắng rất dễ b&aacute;m bui bẩn. Nếu đ&ocirc;i gi&agrave;y của bạn bị b&aacute;m bẩn bởi những vết bẩn nhỏ, v&agrave; bạn kh&ocirc;ng muốn mất qu&aacute; nhiều thời gian để tẩy rửa cả đ&ocirc;i gi&agrave;y, h&atilde;y &aacute;p dụng ngay c&aacute;ch pha hỗn hợp Soda c&ugrave;ng giấm theo tỉ lệ 2 Soda : 1 giấm h&ograve;a lẫn với nhau sau đ&oacute; nhẹ nh&agrave;ng d&ugrave;ng khăn ch&ugrave;i đi những vết bẩn, đ&ocirc;i gi&agrave;y của bạn sẽ trắng sạch trong chốc l&aacute;t.</p>\r\n\r\n<h3>C&aacute;ch l&agrave;m sạch gi&agrave;y Adidas bằng kem đ&aacute;nh răng v&agrave; b&agrave;n chải đ&aacute;nh răng cũ</h3>\r\n\r\n<p><img alt=\"cách làm sạch adidas\" src=\"https://shopgiayreplica.com/wp-content/uploads/2018/08/cachvesinhgiaythethao2.jpg\" style=\"height:457px; width:685px\" /></p>\r\n\r\n<p>Bạn n&ecirc;n sử dụng b&agrave;n chải đ&aacute;nh răng đ&atilde; qua sử dụng để l&agrave;m sạch vết bẩn của gi&agrave;y. L&ocirc;ng b&agrave;n chải mềm sẽ kh&ocirc;ng l&agrave;m trầy xước chất liệu gi&agrave;y của bạn, nhất l&agrave; những đ&ocirc;i l&agrave;m từ da, hoặc phối lưới. H&atilde;y kết hợp với kem đ&aacute;nh răng trong trường hợp gi&agrave;y bạn c&oacute; vết ố v&agrave;ng. Sau đ&oacute; lấy khăn lau sạch bọt v&agrave; phơi gi&agrave;y ở nơi nắng dịu.</p>\r\n\r\n<h2><strong>C&aacute;ch vệ sinh gi&agrave;y Adidas bằng nước tẩy trắng pha lo&atilde;ng</strong></h2>\r\n\r\n<p><img alt=\"cách vệ sinh giày adidas\" src=\"https://shopgiayreplica.com/wp-content/uploads/2018/08/2-600x335.jpg\" style=\"height:335px; width:600px\" /></p>\r\n\r\n<p>Phương ph&aacute;p n&agrave;y rất c&oacute; t&aacute;c dụng trong việc đ&aacute;nh bay những vết bẩn cũng như vết ố cứng đầu. Tuy nhi&ecirc;n bạn phải đặc biệt lưu &yacute; tỉ lệ l&agrave; 1 nước tẩy : 5 nước để đảm bảo an to&agrave;n cho gi&agrave;y. Nếu nước tẩy qu&aacute; đặc hoặc nhiều qu&aacute; tỉ lệ sẽ phản t&aacute;c dụng, khiến gi&agrave;y v&agrave;ng đi, v&agrave; ảnh hưởng xấu tới chất liệu vải g&acirc;y mất hiệu quả ho&agrave;n to&agrave;n.</p>\r\n\r\n<h2><strong>C&aacute;ch l&agrave;m sạch gi&agrave;y Adidas trắng bằng khăn ẩm mềm</strong></h2>\r\n\r\n<p><img alt=\"cách làm sạch giày adidas trắng\" src=\"https://shopgiayreplica.com/wp-content/uploads/2018/08/how-to-clean-sneakers-00.jpg\" style=\"height:378px; width:630px\" /></p>\r\n\r\n<p>Với những đ&ocirc;i&nbsp;<a href=\"https://shopgiayreplica.com/giay-adidas/\">gi&agrave;y adidas</a>&nbsp;l&agrave;m từ chất liệu da như<a href=\"https://shopgiayreplica.com/giay-adidas-stan-smith/\">&nbsp;Adidas Stan Smith</a>, tuyệt đối bạn tuyệt đối kh&ocirc;ng thể nh&uacute;ng gi&agrave;y v&agrave;o nước như những chất liệu kh&aacute;c. Phương ph&aacute;p tốt nhất để l&agrave;m sạch ch&uacute;ng đ&oacute; l&agrave; d&ugrave;ng khăn mềm, hơi ẩm lau những vết bẩn b&aacute;m tr&ecirc;n gi&agrave;y. Ngo&agrave;i ra, kh&ocirc;ng phơi gi&agrave;y trực tiếp dưới &aacute;nh nắng Mặt Trời v&igrave; sẽ l&agrave;m gi&ograve;n da, g&acirc;y nứt nẻ.</p>\r\n\r\n<h3>Hướng dẫn bảo quản gi&agrave;y Adidas đ&uacute;ng c&aacute;ch</h3>\r\n\r\n<ul>\r\n	<li>B&ecirc;n cạnh việc vệ sinh gi&agrave;y bạn cần biết c&aacute;ch<strong>&nbsp;</strong>sử dụng v&agrave; bảo quản ch&uacute;ng để c&oacute; thể sử dụng được l&acirc;u hơn.</li>\r\n	<li>Khi đi gi&agrave;y cần chỉnh d&acirc;y cho đ&uacute;ng nếu kh&ocirc;ng sẽ bị biến dạng.<strong>&nbsp;</strong>Thao t&aacute;c<strong>&nbsp;</strong>xỏ v&agrave; th&aacute;o gi&agrave;y cần hết sức<strong>&nbsp;</strong>nhẹ nh&agrave;ng nếu kh&ocirc;ng muốn ch&uacute;ng nhanh hỏng.</li>\r\n	<li>Kh&ocirc;ng n&ecirc;n<strong>&nbsp;</strong>ng&acirc;m gi&agrave;y trong nước qu&aacute; l&acirc;u v&igrave; nước sẽ l&agrave;m<strong>&nbsp;</strong>bong lớp keo gi&agrave;y. Bạn c&oacute; thể d&ugrave;ng v&ograve;i nước để xịt bụi bẩn cho nhanh.</li>\r\n	<li>Kh&ocirc;ng để gi&agrave;y tiếp x&uacute;c với nhiệt độ qu&aacute; n&oacute;ng hoặc qu&aacute; lạnh.Việc sử dụng m&aacute;y sấy sẽ l&agrave;m gi&agrave;y bị mất form, l&agrave;m hỏng gi&agrave;y.</li>\r\n	<li>Kh&ocirc;ng để gi&agrave;y ở<strong>&nbsp;</strong>nơi ẩm ướt<strong>,&nbsp;</strong>gi&agrave;y l&acirc;u kh&ocirc; sẽ g&acirc;y ố v&agrave;ng v&agrave; c&oacute; m&ugrave;i h&ocirc;i.<strong>&nbsp;</strong>Chưa kể c&aacute;c chất liệu gi&agrave;y sẽ nhanh ch&oacute;ng bị mục ra. Bạn c&oacute; thể sử dụng giấy b&aacute;o hoặc g&oacute;i h&uacute;t ẩm trong một số hộp b&aacute;nh để h&uacute;t ẩm b&ecirc;n trong gi&agrave;y.</li>\r\n	<li>Kh&ocirc;ng n&ecirc;n giặt gi&agrave;y bằng m&aacute;y giặt, việc n&agrave;y chỉ<strong>&nbsp;</strong>ph&aacute; hủy chiếc gi&agrave;y của bạn m&agrave; th&ocirc;i</li>\r\n</ul>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; những c&aacute;ch l&agrave;m sạch gi&agrave;y Adidas để ch&uacute;ng lu&ocirc;n bền đẹp như mới! Hy vọng qua b&agrave;i viết của ch&uacute;ng t&ocirc;i<strong>&nbsp;</strong>đ&atilde; c&oacute; những b&iacute; quyết ri&ecirc;ng để vệ sinh cũng như bảo quản đ&ocirc;i gi&agrave;y của m&igrave;nh được tốt hơn. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</p>\r\n\r\n<p>&Agrave;, nhớ chia sẻ cho bạn b&egrave; nếu bạn cảm thấy bổ &iacute;ch nh&eacute; ^^</p>\r\n\r\n<p>&nbsp;</p>', 'Nhắc đến giày thể thao không thể không nhắc đến thương hiệu Adidas. Với thiết kế đa dạng, gam màu tươi trẻ, độ bền cao,  Adidas đã chiếm trọn trái tim của bao nhiêu người yêu giày, và dần trở thành phụ kiện không thể thiếu.', 1, '2021-01-11 07:17:55', '2021-01-14 02:42:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là danh mục sản phẩm, 0 là danh mục tin tức',
  `parent_id` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là hiện, 0 là ẩn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `type`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Giày Nữ', 'giay-nu', 1, 0, 1, '2020-12-24 00:53:14', '2020-12-24 00:53:14'),
(2, 'Giày Nam', 'giay-nam', 1, 0, 1, '2020-12-24 00:53:26', '2020-12-24 00:53:26'),
(3, 'Mẹo Vặt', 'meo-vat', 0, 0, 1, '2020-12-24 00:53:37', '2020-12-24 00:53:37'),
(4, 'Kiến Thức Về Giày', 'kien-thuc-ve-giay', 0, 0, 1, '2020-12-24 00:53:44', '2020-12-24 00:53:44'),
(5, 'Giày thể thao nam', 'giay-the-thao-nam', 1, 2, 1, '2020-12-24 00:53:58', '2020-12-24 00:53:58'),
(6, 'Giày cao gót', 'giay-cao-got', 1, 1, 1, '2020-12-24 00:54:08', '2020-12-24 00:54:08'),
(7, 'Giày lười nam', 'giay-luoi-nam', 1, 2, 1, '2020-12-24 00:54:41', '2020-12-24 00:54:41'),
(8, 'Giày búp bê và mọi', 'giay-bup-be-va-moi', 1, 1, 1, '2020-12-24 00:55:02', '2020-12-24 00:55:02'),
(9, 'Giày boot nữ', 'giay-boot-nu', 1, 1, 1, '2021-01-03 05:47:04', '2021-01-03 05:47:04'),
(10, 'Giày da nam', 'giay-da-nam', 1, 2, 1, '2021-01-11 07:09:44', '2021-01-11 07:09:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_blogs`
--

CREATE TABLE `comment_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_blog` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment_blogs`
--

INSERT INTO `comment_blogs` (`id`, `id_user`, `id_blog`, `content`, `created_at`, `updated_at`) VALUES
(2, 7, 9, 'bài viết có ích quá', '2021-01-23 05:50:45', '2021-01-23 05:50:45'),
(3, 6, 9, 'Bài viết như loz', '2021-01-23 05:54:53', '2021-01-23 05:54:53'),
(4, 7, 9, 'Bài viết ý nghĩa', '2021-01-23 05:59:02', '2021-01-23 05:59:02'),
(13, 6, 9, 'Tin tức xuất sắc', '2021-01-23 07:07:06', '2021-01-23 07:07:06'),
(14, 6, 9, 'clear', '2021-01-23 07:07:16', '2021-01-23 07:07:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là logo, 2 là contact',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là hiện, 0 là ẩn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `configs`
--

INSERT INTO `configs` (`id`, `name`, `slug`, `value`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Logo header', 'logo-header', 'Config/logo.png ', 1, 1, '2020-12-25 20:03:08', '2021-01-08 22:06:14'),
(2, 'Logo title', 'logo-title', 'Config/favicon-32x32.png ', 1, 1, '2020-12-25 20:03:19', '2021-01-09 09:35:28'),
(3, 'Address', 'address', '238, Hoàng Quốc Việt', 2, 1, '2020-12-25 20:19:19', '2021-01-11 00:25:47'),
(4, 'phone', 'phone', '035.4687.795', 2, 1, '2020-12-25 20:21:34', '2021-01-08 07:03:29'),
(5, 'Email', 'email', 'ShopJuta@gmail.com', 2, 1, '2020-12-25 20:22:30', '2021-01-08 07:07:21'),
(6, 'work-time', 'work-time', 'Monday – Saturday: 08 AM – 21 PM', 2, 1, '2020-12-25 20:23:49', '2020-12-26 02:47:39'),
(7, 'logo footer', 'logo-footer', 'Config/logo_footer.png ', 1, 1, '2020-12-26 22:02:45', '2021-01-08 22:05:39'),
(8, 'Ads1', 'ads1', 'Config/1.jpg ', 3, 1, '2021-01-08 22:38:12', '2021-01-08 22:38:12'),
(9, 'Ads2', 'ads2', 'Config/2.jpg ', 3, 1, '2021-01-08 22:39:58', '2021-01-08 22:39:58'),
(10, 'Ads3', 'ads3', 'Config/3.jpg ', 3, 1, '2021-01-08 22:40:06', '2021-01-08 22:40:06'),
(11, 'Ads4', 'ads4', 'Config/4.jpg ', 3, 1, '2021-01-08 22:40:11', '2021-01-08 22:43:37'),
(12, 'Ads5', 'ads5', 'Config/5.jpg ', 3, 1, '2021-01-08 22:40:15', '2021-01-08 22:44:49'),
(13, 'Ads6', 'ads6', 'Config/6.jpg ', 3, 1, '2021-01-08 22:55:33', '2021-01-08 22:59:35'),
(14, 'Ads7', 'ads7', 'Config/shop-banner.jpg ', 3, 1, '2021-01-09 01:06:51', '2021-01-09 01:06:51'),
(15, 'map', 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.666033194252!2d105.79108181445491!3d21.04604479256499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3073615aff%3A0x5f7d5efd40024836!2zSG_DoG5nIFF14buRYyBWaeG7h3QsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610349528052!5m2!1svi!2s\" width=\"960\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 1, '2021-01-10 03:05:22', '2021-01-11 00:20:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_pros`
--

CREATE TABLE `image_pros` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_pros`
--

INSERT INTO `image_pros` (`id`, `id_product`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Products/Gi%C3%A0y-l%C6%B0%E1%BB%9Di-da-b%C3%B2-3.jpg ', '2020-12-24 00:58:45', '2020-12-24 00:58:45'),
(2, 1, 'Products/Gi%C3%A0y-l%C6%B0%E1%BB%9Di-da-b%C3%B2-2.jpg ', '2020-12-24 00:58:45', '2020-12-24 00:58:45'),
(3, 1, 'Products/Gi%C3%A0y-l%C6%B0%E1%BB%9Di-da-b%C3%B2-1.jpg ', '2020-12-24 00:58:45', '2020-12-24 00:58:45'),
(4, 2, 'Products/Gia%CC%80y%20cao%20go%CC%81t%20m%C5%A9i%20nh%E1%BB%8Dn%20g%C3%B3t%20xi%20kim%20lo%E1%BA%A1i-3.jpg ', '2020-12-24 01:01:31', '2020-12-24 01:01:31'),
(5, 2, 'Products/Gia%CC%80y%20cao%20go%CC%81t%20m%C5%A9i%20nh%E1%BB%8Dn%20g%C3%B3t%20xi%20kim%20lo%E1%BA%A1i-2.jpg ', '2020-12-24 01:01:31', '2020-12-24 01:01:31'),
(6, 2, 'Products/Gia%CC%80y%20cao%20go%CC%81t%20m%C5%A9i%20nh%E1%BB%8Dn%20g%C3%B3t%20xi%20kim%20lo%E1%BA%A1i-1.jpg ', '2020-12-24 01:01:31', '2020-12-24 01:01:31'),
(7, 3, 'Products/Gi%C3%A0y-b%C3%BAp-b%C3%AA-3.jpg ', '2020-12-24 01:03:30', '2020-12-24 01:03:30'),
(8, 3, 'Products/Gi%C3%A0y-b%C3%BAp-b%C3%AA-2.jpg ', '2020-12-24 01:03:30', '2020-12-24 01:03:30'),
(9, 3, 'Products/Gi%C3%A0y-b%C3%BAp-b%C3%AA-1.jpg ', '2020-12-24 01:03:30', '2020-12-24 01:03:30'),
(10, 4, 'Products/Gi%C3%A0y-th%E1%BB%83-thao-nam-3.jpg ', '2020-12-24 01:07:41', '2020-12-24 01:07:41'),
(11, 4, 'Products/Gi%C3%A0y-th%E1%BB%83-thao-nam-2.jpg ', '2020-12-24 01:07:41', '2020-12-24 01:07:41'),
(12, 4, 'Products/Gi%C3%A0y-th%E1%BB%83-thao-nam-1.jpg ', '2020-12-24 01:07:42', '2020-12-24 01:07:42'),
(13, 5, 'Products/Giaycaogotpump1.jpg ', '2020-12-27 06:14:32', '2020-12-27 06:14:32'),
(14, 5, 'Products/Giaycaogotpump-3.jpg ', '2020-12-27 06:14:32', '2020-12-27 06:14:32'),
(15, 5, 'Products/Giaycaogotpump-2.jpg ', '2020-12-27 06:14:32', '2020-12-27 06:14:32'),
(16, 6, 'Products/Gi%C3%A0y%20b%E1%BB%91t%20n%E1%BB%AF%20c%E1%BB%95%20ng%E1%BA%AFn%204%20BOOT182.gif ', '2021-01-03 05:49:22', '2021-01-03 05:49:22'),
(17, 6, 'Products/Gi%C3%A0y%20b%E1%BB%91t%20n%E1%BB%AF%20c%E1%BB%95%20ng%E1%BA%AFn%203BOOT182.gif ', '2021-01-03 05:49:22', '2021-01-03 05:49:22'),
(18, 6, 'Products/Gi%C3%A0y%20b%E1%BB%91t%20n%E1%BB%AF%20c%E1%BB%95%20ng%E1%BA%AFn%202%20BOOT182.gif ', '2021-01-03 05:49:22', '2021-01-03 05:49:22'),
(19, 7, 'Products/Boot%20c%C3%B4ng%20s%E1%BB%9F%20%C3%AAm%20ch%C3%A2n%204%20B00T104.jpg ', '2021-01-03 05:55:15', '2021-01-03 05:55:15'),
(20, 7, 'Products/Boot%20c%C3%B4ng%20s%E1%BB%9F%20%C3%AAm%20ch%C3%A2n%203%20B00T104.jpg ', '2021-01-03 05:55:15', '2021-01-03 05:55:15'),
(21, 7, 'Products/Boot%20c%C3%B4ng%20s%E1%BB%9F%20%C3%AAm%20ch%C3%A2n%202%20B00T104.jpg ', '2021-01-03 05:55:15', '2021-01-03 05:55:15'),
(22, 8, 'Products/giay-nam-cao-cap-da-that-EGTM19-22-510x510-2%20(1).jpg ', '2021-01-11 06:59:32', '2021-01-11 06:59:32'),
(23, 8, 'Products/giay-nam-cao-cap-da-that-EGTM19-13-510x485-4%20(1).jpg ', '2021-01-11 06:59:32', '2021-01-11 06:59:32'),
(24, 8, 'Products/giay-nam-cao-cap-da-that-EGTM19-12-510x510-3%20(1).jpg ', '2021-01-11 06:59:32', '2021-01-11 06:59:32'),
(25, 9, 'Products/EVA0051-4.jpg ', '2021-01-11 07:04:37', '2021-01-11 07:04:37'),
(26, 9, 'Products/EVA0051-3.jpg ', '2021-01-11 07:04:37', '2021-01-11 07:04:37'),
(27, 9, 'Products/EVA0051-2.jpg ', '2021-01-11 07:04:37', '2021-01-11 07:04:37'),
(28, 10, 'Products/Gi%C3%A0y%20nam%20da%20th%E1%BA%ADt%20ELLY%20HOMME%20%E2%80%93%20EGTM6-4.jpg ', '2021-01-11 07:12:05', '2021-01-11 07:12:05'),
(29, 10, 'Products/Gi%C3%A0y%20nam%20da%20th%E1%BA%ADt%20ELLY%20HOMME%20%E2%80%93%20EGTM6-3.jpg ', '2021-01-11 07:12:05', '2021-01-11 07:12:05'),
(30, 10, 'Products/Gi%C3%A0y%20nam%20da%20th%E1%BA%ADt%20ELLY%20HOMME%20%E2%80%93%20EGTM6-2.jpg ', '2021-01-11 07:12:05', '2021-01-11 07:12:05');

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
(164, '2014_10_12_000000_create_users_table', 1),
(166, '2019_08_19_000000_create_failed_jobs_table', 1),
(167, '2020_12_05_130835_create_categories_table', 1),
(168, '2020_12_06_080002_create_attributes_table', 1),
(169, '2020_12_08_124935_create_products_table', 1),
(170, '2020_12_08_125219_create_image_pros_table', 1),
(171, '2020_12_08_125406_create_product_details_table', 1),
(172, '2020_12_08_125739_create_reviews_table', 1),
(173, '2020_12_08_125749_create_blogs_table', 1),
(174, '2020_12_08_125801_create_banners_table', 1),
(179, '2020_12_22_143834_create_admins_table', 1),
(180, '2020_12_08_125811_create_configs_table', 2),
(182, '2020_12_18_095832_create_wishlists_table', 4),
(183, '2020_12_18_095808_create_orders_table', 5),
(186, '2020_12_18_095815_create_order_details_table', 6),
(187, '2014_10_12_100000_create_password_resets_table', 7),
(188, '2021_01_21_074450_create_roles_table', 8),
(189, '2021_01_21_074521_create_permissions_table', 8),
(190, '2021_01_21_075902_create_user_role', 8),
(191, '2021_01_21_075926_create_role_permission', 8),
(192, '2021_01_21_075936_create_user_permission', 8),
(193, '2021_01_23_084919_create_comment_blogs_table', 9),
(194, '2021_01_23_085705_create_permission_comment_blogs_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `total_price` double(16,2) NOT NULL,
  `address_ship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `total_price`, `address_ship`, `status`, `created_at`, `updated_at`) VALUES
(7, 6, 855000.00, 'Trâu quỳ, Gia lâm', 4, '2021-01-03 01:57:49', '2021-01-05 02:35:20'),
(8, 6, 1280000.00, 'Trâu quỳ, Gia lâm', 3, '2021-01-05 02:23:42', '2021-01-11 00:03:43'),
(9, 6, 1280000.00, 'Trâu quỳ, Gia lâm', 4, '2021-01-05 02:51:34', '2021-01-05 03:26:21'),
(10, 6, 1270000.00, 'Trâu quỳ, Gia lâm', 3, '2021-01-05 03:57:31', '2021-01-11 00:03:49'),
(11, 6, 1280000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-10 02:37:58', '2021-01-10 02:37:58'),
(13, 6, 39600000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-13 06:18:35', '2021-01-13 06:18:35'),
(14, 6, 2000000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-13 09:34:41', '2021-01-13 09:34:41'),
(15, 7, 3000000.00, 'Hà nội', 1, '2021-01-14 07:27:25', '2021-01-14 21:23:50'),
(16, 7, 750000.00, 'Hà nội', 1, '2021-01-14 21:26:39', '2021-01-14 21:27:33'),
(17, 6, 1000000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-15 03:23:13', '2021-01-15 03:23:13'),
(18, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-15 03:31:57', '2021-01-15 03:31:57'),
(19, 6, 2250000.00, 'Trâu quỳ, Gia lâm', 3, '2021-01-15 20:07:07', '2021-01-17 23:40:40'),
(20, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:39:34', '2021-01-19 01:39:34'),
(21, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:40:11', '2021-01-19 01:40:11'),
(22, 6, 1000000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:41:21', '2021-01-19 01:41:21'),
(23, 6, 250000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:44:38', '2021-01-19 01:44:38'),
(24, 6, 250000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:44:56', '2021-01-19 01:44:56'),
(25, 6, 1000000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:45:37', '2021-01-19 01:45:37'),
(26, 6, 1240000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:48:30', '2021-01-19 01:48:30'),
(27, 6, 1240000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:49:41', '2021-01-19 01:49:41'),
(28, 6, 1240000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:51:17', '2021-01-19 01:51:17'),
(29, 6, 1540000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:54:35', '2021-01-19 01:54:35'),
(30, 6, 1540000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:54:55', '2021-01-19 01:54:55'),
(31, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:56:58', '2021-01-19 01:56:58'),
(32, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:57:10', '2021-01-19 01:57:10'),
(33, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 01:59:05', '2021-01-19 01:59:05'),
(34, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 02:01:55', '2021-01-19 02:01:55'),
(35, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 02:02:15', '2021-01-19 02:02:15'),
(36, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 02:02:33', '2021-01-19 02:02:33'),
(37, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 02:02:57', '2021-01-19 02:02:57'),
(38, 6, 910000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 02:05:20', '2021-01-19 02:05:20'),
(39, 6, 910000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 02:05:41', '2021-01-19 02:05:41'),
(40, 6, 910000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-19 02:05:49', '2021-01-19 02:05:49'),
(41, 6, 455000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-20 07:07:10', '2021-01-20 07:07:10'),
(42, 6, 910000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:51:47', '2021-01-21 03:51:47'),
(43, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:54:35', '2021-01-21 03:54:35'),
(44, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:56:50', '2021-01-21 03:56:50'),
(45, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:58:02', '2021-01-21 03:58:02'),
(46, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:58:23', '2021-01-21 03:58:23'),
(47, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:58:41', '2021-01-21 03:58:41'),
(48, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:59:46', '2021-01-21 03:59:46'),
(49, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 03:59:56', '2021-01-21 03:59:56'),
(50, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:00:30', '2021-01-21 04:00:30'),
(51, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:00:56', '2021-01-21 04:00:56'),
(52, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:01:24', '2021-01-21 04:01:24'),
(53, 6, 500000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:02:53', '2021-01-21 04:02:53'),
(54, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:03:32', '2021-01-21 04:03:32'),
(55, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:04:26', '2021-01-21 04:04:26'),
(56, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:05:54', '2021-01-21 04:05:54'),
(57, 6, 1700000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:14:18', '2021-01-21 04:14:18'),
(58, 6, 1860000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:17:33', '2021-01-21 04:17:33'),
(59, 6, 1550000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:22:12', '2021-01-21 04:22:12'),
(60, 6, 1860000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:26:25', '2021-01-21 04:26:25'),
(61, 6, 800000.00, 'Trâu quỳ, Gia lâm', 0, '2021-01-21 04:28:00', '2021-01-21 04:28:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_pro_detail` int(10) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL,
  `color` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_pro_detail`, `size`, `color`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(6, 7, 12, 36, '#fbbcbc', 455000.00, 1, '2021-01-03 01:57:49', '2021-01-03 01:57:49'),
(7, 7, 4, 36, '#000000', 400000.00, 1, '2021-01-03 01:57:50', '2021-01-03 01:57:50'),
(8, 8, 17, 36, '#000000', 620000.00, 1, '2021-01-05 02:23:42', '2021-01-05 02:23:42'),
(9, 8, 15, 36, '#000000', 660000.00, 1, '2021-01-05 02:23:42', '2021-01-05 02:23:42'),
(10, 9, 17, 36, '#000000', 620000.00, 1, '2021-01-05 02:51:34', '2021-01-05 02:51:34'),
(11, 9, 15, 36, '#000000', 660000.00, 1, '2021-01-05 02:51:34', '2021-01-05 02:51:34'),
(12, 10, 11, 39, '#000000', 770000.00, 1, '2021-01-05 03:57:31', '2021-01-05 03:57:31'),
(13, 10, 1, 39, '#000000', 500000.00, 1, '2021-01-05 03:57:31', '2021-01-05 03:57:31'),
(14, 11, 17, 36, '#000000', 620000.00, 1, '2021-01-10 02:37:58', '2021-01-10 02:37:58'),
(15, 11, 15, 36, '#000000', 660000.00, 1, '2021-01-10 02:37:58', '2021-01-10 02:37:58'),
(17, 13, 22, 41, '#763737', 600000.00, 66, '2021-01-13 06:18:35', '2021-01-13 06:18:35'),
(18, 14, 1, 39, '#763737', 500000.00, 2, '2021-01-13 09:34:41', '2021-01-13 09:34:41'),
(19, 14, 1, 39, '#000000', 500000.00, 2, '2021-01-13 09:34:41', '2021-01-13 09:34:41'),
(20, 15, 20, 39, '#000000', 600000.00, 5, '2021-01-14 07:27:26', '2021-01-14 07:27:26'),
(32, 25, 1, 39, '#000000', 500000.00, 1, '2021-01-19 01:45:37', '2021-01-19 01:45:37'),
(33, 26, 17, 36, '#763737', 620000.00, 1, '2021-01-19 01:48:30', '2021-01-19 01:48:30'),
(34, 26, 17, 36, '#000000', 620000.00, 1, '2021-01-19 01:48:30', '2021-01-19 01:48:30'),
(35, 27, 17, 36, '#763737', 620000.00, 1, '2021-01-19 01:49:41', '2021-01-19 01:49:41'),
(36, 28, 17, 36, '#763737', 620000.00, 1, '2021-01-19 01:51:17', '2021-01-19 01:51:17'),
(37, 28, 17, 36, '#000000', 620000.00, 1, '2021-01-19 01:51:17', '2021-01-19 01:51:17'),
(38, 29, 11, 39, '#fbbcbc', 770000.00, 1, '2021-01-19 01:54:35', '2021-01-19 01:54:35'),
(39, 29, 11, 39, '#000000', 770000.00, 1, '2021-01-19 01:54:35', '2021-01-19 01:54:35'),
(40, 31, 4, 36, '#000000', 400000.00, 1, '2021-01-19 01:56:58', '2021-01-19 01:56:58'),
(41, 32, 4, 36, '#000000', 400000.00, 1, '2021-01-19 01:57:10', '2021-01-19 01:57:10'),
(42, 33, 4, 36, '#000000', 400000.00, 1, '2021-01-19 01:59:05', '2021-01-19 01:59:05'),
(43, 34, 4, 36, '#000000', 400000.00, 1, '2021-01-19 02:01:55', '2021-01-19 02:01:55'),
(44, 34, 6, 38, '#000000', 400000.00, 1, '2021-01-19 02:01:55', '2021-01-19 02:01:55'),
(45, 36, 1, 39, '#763737', 500000.00, 1, '2021-01-19 02:02:33', '2021-01-19 02:02:33'),
(46, 37, 1, 39, '#763737', 500000.00, 1, '2021-01-19 02:02:57', '2021-01-19 02:02:57'),
(47, 38, 12, 36, '#fbbcbc', 455000.00, 1, '2021-01-19 02:05:20', '2021-01-19 02:05:20'),
(48, 39, 12, 36, '#fbbcbc', 455000.00, 1, '2021-01-19 02:05:41', '2021-01-19 02:05:41'),
(49, 40, 12, 36, '#fbbcbc', 455000.00, 1, '2021-01-19 02:05:49', '2021-01-19 02:05:49'),
(50, 40, 13, 37, '#763737', 455000.00, 1, '2021-01-19 02:05:52', '2021-01-19 02:05:52'),
(51, 41, 12, 36, '#fbbcbc', 455000.00, 1, '2021-01-20 07:07:10', '2021-01-20 07:07:10'),
(52, 42, 12, 36, '#fbbcbc', 455000.00, 1, '2021-01-21 03:51:47', '2021-01-21 03:51:47'),
(53, 42, 13, 37, '#fbbcbc', 455000.00, 1, '2021-01-21 03:51:54', '2021-01-21 03:51:54'),
(54, 43, 7, 36, '#fbbcbc', 250000.00, 1, '2021-01-21 03:54:35', '2021-01-21 03:54:35'),
(55, 43, 7, 36, '#000000', 250000.00, 1, '2021-01-21 03:54:35', '2021-01-21 03:54:35'),
(56, 44, 7, 36, '#fbbcbc', 250000.00, 1, '2021-01-21 03:56:50', '2021-01-21 03:56:50'),
(57, 44, 7, 36, '#000000', 250000.00, 1, '2021-01-21 03:56:51', '2021-01-21 03:56:51'),
(58, 45, 7, 36, '#fbbcbc', 250000.00, 1, '2021-01-21 03:58:03', '2021-01-21 03:58:03'),
(59, 45, 7, 36, '#000000', 250000.00, 1, '2021-01-21 03:58:03', '2021-01-21 03:58:03'),
(60, 54, 4, 36, '#000000', 400000.00, 1, '2021-01-21 04:03:32', '2021-01-21 04:03:32'),
(61, 54, 5, 37, '#000000', 400000.00, 1, '2021-01-21 04:03:32', '2021-01-21 04:03:32'),
(62, 55, 4, 36, '#000000', 400000.00, 1, '2021-01-21 04:04:27', '2021-01-21 04:04:27'),
(63, 55, 5, 37, '#000000', 400000.00, 1, '2021-01-21 04:04:27', '2021-01-21 04:04:27'),
(64, 56, 4, 36, '#000000', 400000.00, 1, '2021-01-21 04:05:54', '2021-01-21 04:05:54'),
(65, 56, 6, 38, '#000000', 400000.00, 1, '2021-01-21 04:05:55', '2021-01-21 04:05:55'),
(66, 57, 7, 36, '#fbbcbc', 250000.00, 1, '2021-01-21 04:14:19', '2021-01-21 04:14:19'),
(67, 57, 9, 38, '#000000', 250000.00, 1, '2021-01-21 04:14:19', '2021-01-21 04:14:19'),
(68, 57, 20, 39, '#000000', 600000.00, 1, '2021-01-21 04:14:19', '2021-01-21 04:14:19'),
(69, 57, 21, 40, '#000000', 600000.00, 1, '2021-01-21 04:14:19', '2021-01-21 04:14:19'),
(70, 58, 17, 36, '#763737', 620000.00, 2, '2021-01-21 04:17:33', '2021-01-21 04:17:33'),
(71, 58, 18, 37, '#763737', 620000.00, 1, '2021-01-21 04:17:33', '2021-01-21 04:17:33'),
(72, 59, 4, 36, '#000000', 400000.00, 1, '2021-01-21 04:22:12', '2021-01-21 04:22:12'),
(73, 59, 6, 38, '#000000', 400000.00, 1, '2021-01-21 04:22:12', '2021-01-21 04:22:12'),
(74, 59, 29, 39, '#763737', 750000.00, 1, '2021-01-21 04:22:12', '2021-01-21 04:22:12'),
(75, 60, 17, 36, '#763737', 620000.00, 1, '2021-01-21 04:26:25', '2021-01-21 04:26:25'),
(76, 60, 18, 37, '#763737', 620000.00, 1, '2021-01-21 04:26:25', '2021-01-21 04:26:25'),
(77, 60, 19, 38, '#763737', 620000.00, 1, '2021-01-21 04:26:25', '2021-01-21 04:26:25'),
(78, 61, 4, 36, '#000000', 400000.00, 1, '2021-01-21 04:28:00', '2021-01-21 04:28:00'),
(79, 61, 5, 37, '#000000', 400000.00, 1, '2021-01-21 04:28:00', '2021-01-21 04:28:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(10, 'satthan0107@gmail.com', 'mum1SEZ2szfRSCINcxkUjJflm9v54njJqMW2N8nntqPGWhNrvU', '2021-01-13 10:18:34', '2021-01-13 10:18:34'),
(11, 'phuvietle0107@gmail.com', 'HEZ0zJhcwX4dHN6sQmP6s2YBE5CSE9XYkb6elSziZ6cjCXZUxz', '2021-01-13 10:19:59', '2021-01-13 10:19:59'),
(12, 'satthan0107@gmail.com', 'AMfUoLJSyRCIiTFYThPHJQduHF2ByZJk0giMbyj2i95mViGHhg', '2021-01-13 10:21:30', '2021-01-13 10:21:30'),
(13, 'satthan0107@gmail.com', 'kB1SE48nu3scxHn5YD4x8NQ1bP91Vi4KuJn1dYBjGoHGc9JrO4', '2021-01-13 10:25:40', '2021-01-13 10:25:40'),
(14, 'satthan0107@gmail.com', 'r9F705wi8Ray9HbZao3ZLsEafUTkVKcR79p33KkIGsJgEJv5wF', '2021-01-13 10:26:20', '2021-01-13 10:26:20'),
(15, 'satthan0107@gmail.com', 'JFC6X507aMG0I7Li4EMdMm9yFmZyqx5yJHhm3RMZg3bGqchI3I', '2021-01-13 10:46:49', '2021-01-13 10:46:49'),
(16, 'satthan0107@gmail.com', 'LnMTsFRWQkIHHKfDo2cnu6uA3skGuRPxo6yQhsaFJNIeoSm4G9', '2021-01-13 10:52:43', '2021-01-13 10:52:43'),
(17, 'satthan0107@gmail.com', 'KIKoJMLtnsPwNOxM7WhniOWvwIqhETkpDIY60NtAcbvjJZ5mbl', '2021-01-13 23:17:54', '2021-01-13 23:17:54'),
(18, 'satthan0107@gmail.com', 'pjk0l2InAedncOY3oKUa0y89zKemwl4T6irnVexZzd96IWJ2c2', '2021-01-15 19:55:52', '2021-01-15 19:55:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_comment_blogs`
--

CREATE TABLE `permission_comment_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_comment_blog` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_comment_blogs`
--

INSERT INTO `permission_comment_blogs` (`id`, `id_comment_blog`, `id_user`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 'Lại ảo rồi', NULL, NULL),
(2, 2, 6, 'Được bạn ơi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cate` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `sale_price` double(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là ẩn, 0 là hiện',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là ẩn, 0 là hiện',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `sku`, `id_cate`, `image`, `price`, `sale_price`, `description`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Giày lười da bò', 'giay-luoi-da-bo', 'GLDB', 7, 'Products/Gi%C3%A0y-l%C6%B0%E1%BB%9Di-da-b%C3%B2.jpg ', 500000.00, 0.00, '<p>Gi&agrave;y lười nam da b&ograve; đế cao su si&ecirc;u bền Rozalo R6792</p>\r\n\r\n<p>1. Giới thiệu sản phẩm</p>\r\n\r\n<p>-&nbsp;Gi&agrave;y lười nam&nbsp;l&agrave; một kiểu gi&agrave;y c&aacute; t&iacute;nh nhất trong thế giới gi&agrave;y nam. Với thiết kế c&oacute; phần đơn giản mang lại vẻ đẹp tao nh&atilde;, tự do ph&oacute;ng kho&aacute;ng nhưng đầy cuốn h&uacute;t.</p>\r\n\r\n<p>-Gi&agrave;y lười nam da b&ograve; v&acirc;n c&aacute; sấu Rozalo R6716&nbsp;c&oacute; thiết kế ho&agrave;n hảo dễ d&agrave;ng phối hợp c&ugrave;ng quần Jean , quần khaki, quần shoots, hay quần t&acirc;y.</p>\r\n\r\n<p>. Cấu tạo, kiểu d&aacute;ng:</p>\r\n\r\n<p>Xuất xứ: Việt Nam</p>\r\n\r\n<p>Kiểu d&aacute;ng: Gi&agrave;y lười</p>\r\n\r\n<p>Chất liệu: Da b&ograve; Đế cao su si&ecirc;u &ecirc;m Miếng l&oacute;t 3D Air</p>\r\n\r\n<p>M&agrave;u sắc : Đen, n&acirc;u</p>\r\n\r\n<p>Bảo h&agrave;nh 1 th&aacute;ng</p>\r\n\r\n<p>3. Chất liệu đế v&agrave; lớp l&oacute;t</p>\r\n\r\n<p>Gi&agrave;y được l&agrave;m từ da b&ograve; đảm bảo sự bền bỉ cũng như độ b&oacute;ng lu&ocirc;n mang đến cho bạn một phong th&aacute;i tự tin</p>\r\n\r\n<p>Phần đế l&agrave;m bằng cao su tổng hợp với phần r&atilde;nh chống trơn trượt, đảm bảo sự an to&agrave;n cho người mang. Lớp l&oacute;t được sử dụng c&ocirc;ng nghệ 3D Air gi&uacute;p n&acirc;ng đỡ g&oacute;t ch&acirc;n, c&aacute;c hạt massage gi&uacute;p ch&acirc;n tr&aacute;nh bị t&ecirc; v&agrave; đau nhức khi di chuyển l&acirc;u.</p>\r\n\r\n<p>4. Kiểu d&aacute;ng tinh tế, hợp xu hướng</p>\r\n\r\n<p>5. Sự kết hợp ho&agrave;n hảo với những bộ trang phục đủ mọi phong c&aacute;ch.</p>\r\n\r\n<p>Gi&agrave;y lười nam da b&ograve; Rozalo&nbsp; l&agrave; một &ldquo;item&rdquo; đa năng khi c&oacute; thể dễ d&agrave;ng phối với bất k&igrave; trang phục n&agrave;o. Chỉ cần một ch&uacute;t nhấn nh&aacute; với c&aacute;c phụ kiện, bạn đ&atilde; c&oacute; ngay một set đồ ho&agrave;n hảo để tự tin đến nơi c&ocirc;ng sở hoặc dạo phố.</p>\r\n\r\n<p>Th&ocirc;ng tin thương hiệu: HELENDO lu&ocirc;n mang đến cho kh&aacute;ch h&agrave;ng sự tự tin, tỏa s&aacute;ng để th&agrave;nh c&ocirc;ng trong c&ocirc;ng việc, cuộc sống với phong c&aacute;ch thời trang ri&ecirc;ng biệt,ấn tượng. B&ecirc;n cạnh ch&uacute; trọng sự &ecirc;m &aacute;i, gi&aacute; cả phải chăng, sản phẩm HELENDO lu&ocirc;n được chỉnh chu từng chi tiết, mẫu m&atilde; đa dạng, ph&ugrave; hợp với mọi ho&agrave;n cảnh v&agrave; mang hơi thở thời trang trong nước, thế giới&hellip;</p>', 1, 1, '2020-12-24 00:58:45', '2020-12-24 00:58:45'),
(2, 'Giày cao gót mũi nhọn gót xi kim loại', 'giày-cao-gót-mui-nhon-got-xi-kim-loai', 'GCGMNGXKL', 6, 'Products/Gia%CC%80y%20cao%20go%CC%81t%20m%C5%A9i%20nh%E1%BB%8Dn%20g%C3%B3t%20xi%20kim%20lo%E1%BA%A1i.jpg ', 450000.00, 400000.00, '<p>Gi&agrave;y pump g&oacute;t kim loại sang trọng, thanh lịch</p>\r\n\r\n<p>Thiết kế tối giản dễ ứng dụng. G&oacute;t kim loại cao 9cm, đế k&egrave;m r&atilde;nh chống trượt</p>\r\n\r\n<p>Chất liệu da tổng hợp cao cấp, sử dụng nhiều dịp: đi l&agrave;m, dạo phố hoặc dự tiệc</p>', 1, 1, '2020-12-24 01:01:31', '2020-12-24 01:01:31'),
(3, 'Giày búp bê MWC NUBB- 2222', 'giay-bup-be-mwc-nubb-2222', 'GBBMN2', 8, 'Products/Gi%C3%A0y-b%C3%BAp-b%C3%AA.jpg ', 250000.00, 0.00, '<p>Gi&agrave;y b&uacute;p b&ecirc; MWC NUBB- 2222&nbsp;với thiết kế đ&iacute;nh kh&oacute;a sang trọng gi&uacute;p bạn dễ d&agrave;ng phối hợp với nhiều trang phục để c&oacute; một phong c&aacute;ch thời trang thật s&agrave;nh điệu v&agrave; nữ t&iacute;nh. Gi&agrave;y được l&agrave;m từ chất liệu da tổng hợp, đường chỉ may chắc chắn gi&uacute;p sản phẩm c&oacute; độ bền tối ưu v&agrave; n&acirc;ng niu từng bước ch&acirc;n của bạn.<br />\r\n<br />\r\nĐặc điểm sản phẩm:<br />\r\n- Chất liệu da cao cấp<br />\r\n- Mặt l&oacute;t in t&ecirc;n thương hiệu.<br />\r\n- Form gi&agrave;y may đ&uacute;ng ti&ecirc;u chuẩn đem lại sự thoải m&aacute;i khi mang.<br />\r\n- Đường may tỉ mỉ v&agrave; tinh xảo gi&uacute;p sản phẩm lu&ocirc;n bền đẹp theo thời gian.<br />\r\n- M&agrave;u sắc trang nh&atilde;, dễ phối c&ugrave;ng nhiều kiểu trang phục kh&aacute;c nhau.</p>', 1, 1, '2020-12-24 01:03:30', '2020-12-24 01:03:30'),
(4, 'Giày Thể Thao SP54', 'giay-the-thao-sp54', 'GTTS', 5, 'Products/Gi%C3%A0y-th%E1%BB%83-thao-nam.jpg ', 770000.00, 0.00, '<p>Shop xin kính chào qu&yacute; kh&aacute;ch!</p>\r\n\r\n<p>1./ Th&ocirc;ng tin sản phẩm: GI&Agrave;Y DA NAM, GI&Agrave;Y DA NAM C&Ocirc;NG SỞ, Gi&agrave;y lười nam gi&agrave;y lười da b&ograve; cao cấp, sang trọng đế si&ecirc;u &ecirc;m.</p>\r\n\r\n<p>&bull; Gi&agrave;y_t&acirc;y: Th&iacute;ch hợp với c&aacute;c qúy &ocirc;ng đi làm văn phòng, c&ocirc;ng sở.</p>\r\n\r\n<p>&bull; Gi&agrave;y_c&ocirc;ng_sở , thiết kế sắc sảo từng chi tiết, với kiểu d&aacute;ng c&aacute; t&iacute;nh, đường may</p>\r\n\r\n<p>&bull; tinh tế sắc sảo bao gi&agrave;y_đẹp.</p>\r\n\r\n<p>&bull; Chất liệu: da simili cao cấp, bền đẹp, chắc chắn &ecirc;m ch&acirc;n lu&ocirc;n được kh&aacute;ch h&agrave;ng</p>\r\n\r\n<p>&bull; đ&aacute;nh giá cao.</p>\r\n\r\n<p>&bull; Th&acirc;n gi&agrave;y tho&aacute;ng, giữ gi&agrave;y tr&aacute;nh bị ẩm v&agrave; h&ocirc;i, đi rất tho&aacute;ng ch&acirc;n.</p>\r\n\r\n<p>&bull; Giày đế bằng cao su, c&aacute;c đường r&atilde;nh ma s&aacute;t được xẻ v&agrave; bố tr&iacute; dưới mặt đế một</p>\r\n\r\n<p>&bull; c&aacute;ch khoa học tạo cảm gi&aacute;c &ecirc;m &aacute;i, thoải m&aacute;i khi vận động, c&oacute; thể uốn cong m&agrave;</p>\r\n\r\n<p>&bull; kh&ocirc;ng bị g&atilde;y m&eacute;p.</p>\r\n\r\n<p>&bull; Màu sắc: n&acirc;u, đen.</p>\r\n\r\n<p>&bull; Size: 38, 39,40,41,42,43.44.</p>\r\n\r\n<p>+ H&agrave;ng c&oacute; sẵn c&aacute;c bạn nh&eacute;. Tất cả ảnh v&agrave; video do shop trực tiếp chụp v&agrave; quay</p>\r\n\r\n<p>2./ Shop xin cam kết: GI&Agrave;Y DA NAM, GI&Agrave;Y DA NAM C&Ocirc;NG SỞ, Gi&agrave;y lười nam gi&agrave;y lười da b&ograve; cao cấp, sang trọng đế si&ecirc;u &ecirc;m.</p>\r\n\r\n<p>&bull; Giao h&agrave;ng đ&uacute;ng h&igrave;nh ảnh, video m&agrave; shop đăng.</p>\r\n\r\n<p>&bull; #Gi&agrave;y chất lượng đảm bảo, giống h&igrave;nh 100%.</p>\r\n\r\n<p>&bull; Ship COD tận nh&agrave; kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>&bull; Nhận h&agrave;ng thanh to&aacute;n tiền.</p>\r\n\r\n<p>&bull; Đổi mới hoặc ho&agrave;n trả hàng trong vòng 7 ngày n&ecirc;́u kh&aacute;ch h&agrave;ng kh&ocirc;ng ưng ý sản &nbsp;ph&acirc;̉m.</p>\r\n\r\n<p>+ C&Aacute;C MẶT H&Agrave;NG BỊ LỖI HAY KH&Ocirc;NG ƯNG &Yacute;, KH&Aacute;CH VUI L&Ograve;NG LI&Ecirc;N HỆ VỚI SHOP TRƯỚC KHI Đ&Aacute;NH GI&Aacute; SHOP NH&Eacute;. SHOP SẼ HỖ TRỢ ĐỔI HOẶC TRẢ H&Agrave;NG CHO KH&Aacute;CH Ạ!</p>\r\n\r\n<p>Cảm ơn qu&yacute; kh&aacute;ch đ&atilde; ủng hộ sản phẩm shop!</p>', 1, 1, '2020-12-24 01:07:41', '2020-12-24 01:07:41'),
(5, 'Giày Cao Gót Pump Khóa Trang Trí', 'giày-cao-gót-pump-khoa-trang-tri', 'GCGPKTT', 6, 'Products/Giaycaogotpump.jpg ', 455000.00, 0.00, '<p>Gi&agrave;y mũi b&iacute;t cao g&oacute;t thanh lịch</p>\r\n\r\n<p>Mũi nhọn đ&iacute;nh kh&oacute;a trang tr&iacute; kim loại sang trọng. Gi&agrave;y cao 9cm, c&oacute; r&atilde;nh chống trượt</p>\r\n\r\n<p>Chất liệu da tổng hợp cao cấp, ph&ugrave; hợp trong mọi dịp: dạo phố, đi tiệc, sự kiện</p>', 1, 1, '2020-12-27 06:14:32', '2020-12-27 06:14:32'),
(6, 'Giày bốt nữ cổ ngắn BOOT182', 'giay-bot-nu-co-ngan-boot182', 'GBNCNB', 9, 'Products/Gi%C3%A0y%20b%E1%BB%91t%20n%E1%BB%AF%20c%E1%BB%95%20ng%E1%BA%AFn%20BOOT182.gif ', 660000.00, 0.00, '<p style=\"text-align:start\"><span style=\"font-size:16px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\">Gi&agrave;y bốt nữ cổ ngắn BOOT182&nbsp;<span style=\"font-size:15px\"><span style=\"font-family:Helvetica,Arial,sans-serif\">với chất liệu da tổng hợp&nbsp;cao cấp&nbsp;sang trọng tinh tế, mềm mại&nbsp; tạo sự thoải m&aacute;i, chắc chắn tr&ecirc;n mỗi bước di chuyển l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c n&agrave;ng c&ocirc;ng sở.</span></span></span></span></span></span></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" style=\"background-color:#ffffff; border-collapse:collapse; border-spacing:0px; border:1px solid #eeeeee; box-sizing:border-box; color:#444444; font-family:Helvetica,Arial,sans-serif; font-size:16px; font-style:normal; font-variant-ligatures:normal; font-weight:400; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; vertical-align:baseline; white-space:normal\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Sản phẩm:&nbsp;</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">&nbsp;</span></span><span style=\"font-size:16px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\">Gi&agrave;y bốt nữ cổ ngắn Evashoes&nbsp;</span></span></span>BOOT182</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Chất liệu:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Da tổng hợp cao cấp</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Độ cao:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">3 cm</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">M&agrave;u sắc:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\">\r\n			<p><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">Đen, N&acirc;u</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">K&iacute;ch cỡ:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">Từ 35 - 39</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Phối đồ: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Đầm, v&aacute;y ngắn, quần kaki, trang phục c&ocirc;ng ở .v.v.</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 1, '2021-01-03 05:49:21', '2021-01-03 05:49:21'),
(7, 'Boot công sở êm chân BOOT104', 'boot-cong-so-em-chan-boot104', 'BCSECB', 9, 'Products/Boot%20c%C3%B4ng%20s%E1%BB%9F%20%C3%AAm%20ch%C3%A2n%20B00T104.jpg ', 620000.00, 0.00, '<p style=\"text-align:start\"><span style=\"font-size:16px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\">BOOT104&nbsp;<span style=\"font-size:15px\"><span style=\"font-family:Helvetica,Arial,sans-serif\">với chất liệu da tổng hợp&nbsp;cao cấp&nbsp;sang trọng tinh tế, mềm mại&nbsp; tạo sự thoải m&aacute;i, chắc chắn tr&ecirc;n mỗi bước di chuyển l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c n&agrave;ng c&ocirc;ng sở.</span></span></span></span></span></span></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" style=\"background-color:#ffffff; border-collapse:collapse; border-spacing:0px; border:1px solid #eeeeee; box-sizing:border-box; color:#444444; font-family:Helvetica,Arial,sans-serif; font-size:16px; font-style:normal; font-variant-ligatures:normal; font-weight:400; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; vertical-align:baseline; white-space:normal\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Sản phẩm:&nbsp;</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">&nbsp;</span></span>BOOT104</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Chất liệu:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Da tổng hợp cao cấp</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Độ cao:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">4 cm</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">M&agrave;u sắc:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\">\r\n			<p><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">Đen, N&acirc;u</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">K&iacute;ch cỡ:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">Từ 35 - 38</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Phối đồ: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid #eeeeee; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee; border-top:1px solid #eeeeee; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Đầm, v&aacute;y ngắn, quần kaki, trang phục c&ocirc;ng ở .v.v.</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 1, '2021-01-03 05:55:15', '2021-01-03 05:55:15'),
(8, 'Giày nam sneaker da thật', 'giay-nam-sneaker-da-that', 'GNSDT', 5, 'Products/giay-nam-cao-cap-da-that-EGTM19-1-510x371.jpg ', 700000.00, 600000.00, '<p><strong>&ndash; Thương hiệu:&nbsp;</strong>ELLY HOMME.<br />\r\n<strong>&ndash; Sản xuất:</strong>&nbsp;Việt Nam.<br />\r\n<strong>&ndash; Kiểu d&aacute;ng:</strong>&nbsp;Gi&agrave;y sneaker<br />\r\n<strong>&ndash; Độ cao g&oacute;t:</strong>&nbsp;3 cm.<br />\r\n<strong>&ndash; M&agrave;u sắc:</strong>&nbsp;đen, trắng.<br />\r\n<strong>&ndash; Size:</strong>&nbsp;39-40-41-42-43.<br />\r\n<strong>&ndash; Chất liệu:</strong>&nbsp;Da b&ograve; cao cấp nhập khẩu.<br />\r\n<strong>&ndash; Trọn bộ sản phẩm gồm:</strong>&nbsp;Gi&agrave;y nam da thật ELLY HOMME &ndash; EGTM19 + Hộp + T&uacute;i vải + Đ&oacute;t gi&agrave;y sang trọng.<br />\r\n<strong>&ndash; Bảo h&agrave;nh:&nbsp;</strong>06 th&aacute;ng (với lỗi do sản xuất).</p>', 1, 1, '2021-01-11 06:59:31', '2021-01-11 07:00:26'),
(9, 'EVA0051', 'eva0051', 'E', 6, 'Products/EVA0051.jpg ', 415000.00, 0.00, '<p style=\"text-align:start\"><span style=\"font-size:16px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><span style=\"font-size:15px\"><strong>Gi&agrave;y cao g&oacute;t nữ &ecirc;m ch&acirc;n&nbsp;</strong></span>EVA0051&nbsp;với chất liệu da tổng hợp cao cấp , phối m&agrave;u sắc sang trọng tinh tế, mềm mại&nbsp; tạo sự thoải m&aacute;i, chắc chắn tr&ecirc;n mỗi bước di chuyển l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c n&agrave;ng c&ocirc;ng sở.</span></span></span></span></p>\r\n\r\n<table cellspacing=\"0\" style=\"background-color:#ffffff; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:#444444; font-family:Roboto-Regular; font-size:16px; font-style:normal; font-variant-ligatures:normal; font-weight:400; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; vertical-align:baseline; white-space:normal\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Sản phẩm:&nbsp;</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Gi&agrave;y cao g&oacute;t nữ &ecirc;m ch&acirc;n&nbsp;</span></span></span>EVA0051</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Chất liệu:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Da tổng hợp cao cấp</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Độ cao:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;8 cm</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">M&agrave;u sắc:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">Đen, Kem, Xanh</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">K&iacute;ch cỡ:</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Từ 35 - 39</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\">Phối đồ: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span></td>\r\n			<td style=\"background-color:#ffffff; border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; vertical-align:baseline\"><span style=\"color:#333333\"><span style=\"font-family:sans-serif,Arial,Verdana,Trebuchet MS\"><span style=\"font-size:13px\">&nbsp;Đầm, v&aacute;y ngắn, quần kaki, trang phục c&ocirc;ng ở .v.v.</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/4.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/9.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/10.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/6.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/11.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/3.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"font-family:Roboto-Regular\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/5.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /><img alt=\"\" src=\"https://bucket.nhanh.vn/store1/31348/psCT/20201016/25677789/7.jpg\" style=\"border:0px; box-sizing:border-box; height:800px; max-width:100%; padding:0px; vertical-align:middle; width:800px\" /></span></span></span></span></p>', 1, 1, '2021-01-11 07:04:36', '2021-01-11 07:04:36'),
(10, 'Giày nam da thật', 'giay-nam-da-that', 'GNDT', 10, 'Products/Gi%C3%A0y%20nam%20da%20th%E1%BA%ADt%20ELLY%20HOMME%20%E2%80%93%20EGTM6-1.jpg ', 800000.00, 750000.00, '<p><strong>ới ph&aacute;i mạnh, một đ&ocirc;i gi&agrave;y quan trọng kh&ocirc;ng k&eacute;m g&igrave; một bộ suit hay chiếc đồng hồ sang trọng. Một đ&ocirc;i gi&agrave;y th&iacute;ch hợp sẽ tạo l&ecirc;n một đẳng cấp ho&agrave;n to&agrave;n kh&aacute;c cho bộ trang phục gi&uacute;p ch&agrave;ng tự tin từ nơi c&ocirc;ng sở đến những sự kiện quan trọng. Gi&agrave;y nam da thật ELLY HOMME &ndash; EGTM6 với vẻ đẹp lịch l&atilde;m v&agrave; thời thượng, tạo l&ecirc;n đẳng cấp cho c&aacute;c qu&yacute; &ocirc;ng!</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110250/giay-nam-cao-cap-da-that-ELLY-EGTM6-8.jpg\" style=\"height:555px; width:700px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110241/giay-nam-cao-cap-da-that-ELLY-EGTM6-10.jpg\" style=\"height:572px; width:700px\" /></p>\r\n\r\n<p>Gi&agrave;y nam da thật ELLY HOMME &ndash; EGTM6 + Hộp + T&uacute;i vải + Đ&oacute;t gi&agrave;y sang trọng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110255/giay-nam-cao-cap-da-that-ELLY-EGTM6-7.jpg\" style=\"height:700px; width:700px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110304/giay-nam-cao-cap-da-that-ELLY-EGTM6-5.jpg\" style=\"height:700px; width:700px\" /></p>\r\n\r\n<p>Chất liệu da thật cao cấp nhập khẩu mềm mại mang đến cho bạn cảm gi&aacute;c thoải m&aacute;i khi di chuyển. Chất da mượt, d&agrave;y dặn, dẻo dai v&agrave; bền bỉ với thời gian của ELLY HOMME &ndash; EGTM6</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110300/giay-nam-cao-cap-da-that-ELLY-EGTM6-6.jpg\" style=\"height:700px; width:700px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110245/giay-nam-cao-cap-da-that-ELLY-EGTM6-9.jpg\" style=\"height:700px; width:700px\" /></p>\r\n\r\n<p>Kiểu gi&agrave;y Derby c&oacute; phần xỏ d&acirc;y mở, linh hoạt, tạo sự thoải m&aacute;i cho người đi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110313/giay-nam-cao-cap-da-that-ELLY-EGTM6-3.jpg\" style=\"height:580px; width:700px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110322/giay-nam-cao-cap-da-that-ELLY-EGTM6-2.jpg\" style=\"height:500px; width:700px\" /></p>\r\n\r\n<p>ELLY HOMME &ndash; EGTM6 c&oacute; mũi gi&agrave;y tr&ograve;n tạo cảm gi&aacute;c thoải m&aacute;i cho người d&ugrave;ng đồng thời l&agrave;m nổi bật th&ecirc;m phong c&aacute;ch sang trọng, lịch l&atilde;m</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110326/giay-nam-cao-cap-da-that-ELLY-EGTM6-1.jpg\" style=\"height:472px; width:700px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.elly.vn/uploads/2019/10/28110308/giay-nam-cao-cap-da-that-ELLY-EGTM6-4.jpg\" style=\"height:599px; width:700px\" /></p>\r\n\r\n<p>Đế gi&agrave;y bằng cao su cao cấp c&oacute; độ b&aacute;m d&iacute;nh tốt, chống m&agrave;i m&ograve;n cao, độ đ&agrave;n hồi tốt, thiết kế chống trơn trượt th&ocirc;ng minh</p>', 1, 1, '2021-01-11 07:12:05', '2021-01-13 04:30:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_details`
--

CREATE TABLE `product_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_attr` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`id_attr`)),
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là Hiện, 0 là Ẩn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_details`
--

INSERT INTO `product_details` (`id`, `id_product`, `id_attr`, `sku`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"size\":\"6\",\"color\":[\"1\",\"2\"]}', 'GLDB39', 34, 1, '2020-12-24 00:59:58', '2021-01-19 02:02:57'),
(2, 1, '{\"size\":\"7\",\"color\":[\"1\",\"2\"]}', 'GLDB40', 50, 1, '2020-12-24 01:00:10', '2020-12-24 01:00:10'),
(3, 1, '{\"size\":\"8\",\"color\":[\"1\"]}', 'GLDB41', 45, 1, '2020-12-24 01:00:16', '2020-12-24 01:00:16'),
(4, 2, '{\"size\":\"3\",\"color\":[\"1\"]}', 'GCGMNGXKL36', 33, 1, '2020-12-24 01:01:40', '2021-01-21 04:28:00'),
(5, 2, '{\"size\":\"4\",\"color\":[\"1\"]}', 'GCGMNGXKL37', 42, 1, '2020-12-24 01:01:46', '2021-01-21 04:28:00'),
(6, 2, '{\"size\":\"5\",\"color\":[\"1\"]}', 'GCGMNGXKL38', 42, 1, '2020-12-24 01:01:53', '2021-01-21 04:22:12'),
(7, 3, '{\"size\":\"3\",\"color\":[\"1\",\"9\"]}', 'GBBMN236', 26, 1, '2020-12-24 01:04:02', '2021-01-21 04:14:19'),
(8, 3, '{\"size\":\"4\",\"color\":[\"9\"]}', 'GBBMN237', 30, 1, '2020-12-24 01:04:10', '2020-12-24 01:04:10'),
(9, 3, '{\"size\":\"5\",\"color\":[\"1\",\"9\"]}', 'GBBMN238', 59, 1, '2020-12-24 01:04:17', '2021-01-21 04:14:19'),
(11, 4, '{\"size\":\"6\",\"color\":[\"1\",\"2\",\"9\"]}', 'GTTS39', 42, 1, '2020-12-24 01:07:59', '2021-01-19 01:54:35'),
(12, 5, '{\"size\":\"3\",\"color\":[\"9\"]}', 'GCGPKTT36', 55, 1, '2020-12-27 06:14:44', '2021-01-21 03:51:54'),
(13, 5, '{\"size\":\"4\",\"color\":[\"2\",\"9\"]}', 'GCGPKTT37', 28, 1, '2020-12-27 06:14:53', '2021-01-21 03:51:58'),
(14, 5, '{\"size\":\"5\",\"color\":[\"9\"]}', 'GCGPKTT38', 10, 1, '2020-12-27 06:15:00', '2020-12-27 06:15:00'),
(15, 6, '{\"size\":\"3\",\"color\":[\"1\"]}', 'GBNCNB36', 67, 1, '2021-01-03 05:49:34', '2021-01-10 02:37:59'),
(16, 6, '{\"size\":\"4\",\"color\":[\"1\",\"2\"]}', 'GBNCNB37', 35, 1, '2021-01-03 05:49:45', '2021-01-03 05:49:45'),
(17, 7, '{\"size\":\"3\",\"color\":[\"1\",\"2\"]}', 'BCSECB36', 35, 1, '2021-01-03 05:55:23', '2021-01-21 04:26:25'),
(18, 7, '{\"size\":\"4\",\"color\":[\"1\",\"2\"]}', 'BCSECB37', 53, 1, '2021-01-03 05:55:32', '2021-01-21 04:26:25'),
(19, 7, '{\"size\":\"5\",\"color\":[\"2\"]}', 'BCSECB38', 74, 1, '2021-01-03 05:55:41', '2021-01-21 04:26:25'),
(20, 8, '{\"size\":\"6\",\"color\":[\"1\"]}', 'GNSDTEH–E39', 49, 1, '2021-01-11 06:59:52', '2021-01-21 04:14:19'),
(21, 8, '{\"size\":\"7\",\"color\":[\"1\"]}', 'GNSDTEH–E40', 54, 1, '2021-01-11 06:59:58', '2021-01-21 04:14:19'),
(22, 8, '{\"size\":\"8\",\"color\":[\"1\",\"2\"]}', 'GNSDTEH–E41', 0, 1, '2021-01-11 07:00:05', '2021-01-13 06:18:36'),
(23, 9, '{\"size\":\"3\",\"color\":[\"1\",\"2\",\"9\"]}', 'E36', 45, 1, '2021-01-11 07:04:51', '2021-01-11 07:04:51'),
(24, 9, '{\"size\":\"4\",\"color\":[\"1\",\"2\",\"9\"]}', 'E37', 66, 1, '2021-01-11 07:04:58', '2021-01-11 07:04:58'),
(25, 9, '{\"size\":\"5\",\"color\":[\"1\",\"9\"]}', 'E38', 77, 1, '2021-01-11 07:05:06', '2021-01-11 07:05:06'),
(29, 10, '{\"size\":\"6\",\"color\":[\"1\",\"2\"]}', 'GNDT39', 41, 1, '2021-01-13 10:57:41', '2021-01-21 04:22:12'),
(30, 10, '{\"size\":\"7\",\"color\":[\"1\"]}', 'GNDT40', 54, 1, '2021-01-13 10:57:49', '2021-01-15 20:07:07'),
(31, 10, '{\"size\":\"8\",\"color\":[\"1\"]}', 'GNDT41', 100, 1, '2021-01-13 10:57:54', '2021-01-13 10:57:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `star` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là Hiện, 0 là Ẩn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `id_product`, `id_user`, `star`, `content`, `status`, `created_at`, `updated_at`) VALUES
(6, 7, 6, 5, 'Chất lượng tốt', 1, '2021-01-07 03:05:06', '2021-01-07 03:05:06'),
(8, 7, 6, 5, 'ok', 1, '2021-01-07 06:15:03', '2021-01-07 06:15:03'),
(14, 2, 6, 5, 'Mẫu mã đẹp', 1, '2021-01-10 23:23:09', '2021-01-10 23:23:09'),
(15, 2, 7, 5, 'Kiểu dáng đẹp', 1, '2021-01-12 02:37:11', '2021-01-12 02:37:11'),
(16, 10, 7, 5, 'Đẹp', 1, '2021-01-14 00:47:35', '2021-01-14 00:47:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 là nam, 0 là nữ',
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `gender`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Le Viet Phu', '1610442548girl.jpg', 'satthan0107@gmail.com', NULL, '$2y$10$o777AIHrRQpoC0YAzRqqr.LoC/Fe5wjvgaYrvKdtwMk9Kf6wkrhRS', 1, '0348547762', 'Trâu quỳ, Gia lâm', NULL, '2020-12-24 19:45:35', '2021-01-13 10:48:46'),
(7, 'tiểu nam phong', '', 'phuvietle0107@gmail.com', NULL, '$2y$10$gH29refMNb1rGCf7oombIOdDtu/uXzCgEz05Hd9Wfx/EF/Ze8hYGe', 1, '0856428270', 'Hà nội', NULL, '2021-01-12 02:27:09', '2021-01-12 02:27:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_pro_detail` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlists`
--

INSERT INTO `wishlists` (`id`, `id_user`, `id_pro_detail`, `status`, `created_at`, `updated_at`) VALUES
(7, 6, 11, 1, '2021-01-02 07:28:18', '2021-01-02 07:28:18'),
(8, 6, 12, 1, '2021-01-02 08:30:55', '2021-01-02 08:30:55'),
(10, 6, 17, 1, '2021-01-10 05:42:28', '2021-01-10 05:42:28'),
(11, 6, 5, 1, '2021-01-21 04:27:53', '2021-01-21 04:27:53');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_value_unique` (`value`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_name_unique` (`name`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_id_cate_foreign` (`id_cate`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `comment_blogs`
--
ALTER TABLE `comment_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_blogs_id_user_foreign` (`id_user`),
  ADD KEY `comment_blogs_id_blog_foreign` (`id_blog`);

--
-- Chỉ mục cho bảng `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `configs_name_unique` (`name`),
  ADD UNIQUE KEY `configs_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `image_pros`
--
ALTER TABLE `image_pros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_pros_id_product_foreign` (`id_product`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_id_order_foreign` (`id_order`),
  ADD KEY `order_details_id_pro_detail_foreign` (`id_pro_detail`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permission_comment_blogs`
--
ALTER TABLE `permission_comment_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_comment_blogs_id_user_foreign` (`id_user`),
  ADD KEY `permission_comment_blogs_id_comment_blog_foreign` (`id_comment_blog`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_id_cate_foreign` (`id_cate`);

--
-- Chỉ mục cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_details_sku_unique` (`sku`),
  ADD KEY `product_details_id_product_foreign` (`id_product`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_id_user_foreign` (`id_user`),
  ADD KEY `reviews_id_product_foreign` (`id_product`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_id_user_foreign` (`id_user`),
  ADD KEY `wishlists_id_pro_detail_foreign` (`id_pro_detail`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `comment_blogs`
--
ALTER TABLE `comment_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_pros`
--
ALTER TABLE `image_pros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `permission_comment_blogs`
--
ALTER TABLE `permission_comment_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_id_cate_foreign` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `comment_blogs`
--
ALTER TABLE `comment_blogs`
  ADD CONSTRAINT `comment_blogs_id_blog_foreign` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `comment_blogs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `image_pros`
--
ALTER TABLE `image_pros`
  ADD CONSTRAINT `image_pros_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_id_pro_detail_foreign` FOREIGN KEY (`id_pro_detail`) REFERENCES `product_details` (`id`);

--
-- Các ràng buộc cho bảng `permission_comment_blogs`
--
ALTER TABLE `permission_comment_blogs`
  ADD CONSTRAINT `permission_comment_blogs_id_comment_blog_foreign` FOREIGN KEY (`id_comment_blog`) REFERENCES `comment_blogs` (`id`),
  ADD CONSTRAINT `permission_comment_blogs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_cate_foreign` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_id_pro_detail_foreign` FOREIGN KEY (`id_pro_detail`) REFERENCES `product_details` (`id`),
  ADD CONSTRAINT `wishlists_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
