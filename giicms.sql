-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 05:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giicms`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) CHARACTER SET latin1 DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('adminstrator', 1, 'Quan tri website', NULL, NULL, 1460444743, 1460444743),
('member', 2, NULL, NULL, NULL, 1460444832, 1460444832),
('user', 1, 'Thành Viên', NULL, NULL, 1461207181, 1461207181);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giicms_categories`
--

CREATE TABLE `giicms_categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text,
  `type` varchar(50) DEFAULT NULL,
  `publish` smallint(1) DEFAULT NULL,
  `indent` int(11) DEFAULT NULL,
  `lang` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_categories`
--

INSERT INTO `giicms_categories` (`id`, `parent_id`, `title`, `slug`, `description`, `type`, `publish`, `indent`, `lang`) VALUES
(1, NULL, 'Games', 'games', 'Games', 'post', 1, 0, NULL),
(2, NULL, 'Personal', 'personal', '', 'post', 1, 0, NULL),
(3, NULL, 'Dmca Requests', 'dmca-requests', '', 'post', 1, 0, NULL),
(4, NULL, 'Apps', 'apps', '', 'post', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giicms_category_post`
--

CREATE TABLE `giicms_category_post` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_category_post`
--

INSERT INTO `giicms_category_post` (`id`, `category_id`, `post_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giicms_language`
--

CREATE TABLE `giicms_language` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `publish` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_language`
--

INSERT INTO `giicms_language` (`id`, `name`, `description`, `publish`) VALUES
(1, 'vi', 'Tieng Viet', 1),
(2, 'en', 'Tieng Anh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `giicms_media`
--

CREATE TABLE `giicms_media` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` char(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `giicms_menu`
--

CREATE TABLE `giicms_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_menu`
--

INSERT INTO `giicms_menu` (`id`, `name`) VALUES
(1, 'Menu 1'),
(2, 'test'),
(3, 'ádasdád'),
(4, 'Menu test'),
(5, 'dfsdfsd'),
(6, 'Menu mới'),
(7, '111'),
(8, 'menu2');

-- --------------------------------------------------------

--
-- Table structure for table `giicms_menu_item`
--

CREATE TABLE `giicms_menu_item` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `type_name` varchar(100) DEFAULT NULL,
  `type_slug` varchar(100) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_menu_item`
--

INSERT INTO `giicms_menu_item` (`id`, `parent_id`, `menu_id`, `type_id`, `type`, `type_name`, `type_slug`, `order`) VALUES
(9, 0, 1, 4, 'category', 'Laptop', 'laptop', 14),
(16, 0, 1, 7, 'category', 'Thoi trang nam', 'thoi-trang-nam', 13),
(17, 0, 1, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 12),
(18, 0, 2, 1, 'category', 'Danh muc', 'danh-muc', 1),
(19, 0, 2, 2, 'category', 'Dien thoai', 'dien-thoai', 4),
(20, 0, 2, 3, 'category', 'Nokia', 'nokia', 2),
(21, 0, 2, 5, 'category', 'Iphone', 'iphone', 3),
(22, 0, 1, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 11),
(23, 25, 1, 1, 'category', 'Danh muc', 'danh-muc', 9),
(24, 0, 1, 2, 'category', 'Dien thoai', 'dien-thoai', 10),
(25, 26, 1, 3, 'category', 'Nokia', 'nokia', 8),
(26, 27, 1, 5, 'category', 'Iphone', 'iphone', 7),
(27, 28, 1, 4, 'category', 'Laptop', 'laptop', 6),
(28, 34, 1, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 5),
(30, 32, 1, 4, 'category', 'Laptop', 'laptop', 3),
(32, 56, 1, 6, 'category', 'Thoi trang', 'thoi-trang', 2),
(34, 30, 1, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 4),
(35, 0, 3, 6, 'category', 'Thoi trang', 'thoi-trang', 1),
(36, 0, 3, 7, 'category', 'Thoi trang nam', 'thoi-trang-nam', 2),
(37, 0, 3, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 3),
(38, 0, 4, 6, 'category', 'Thoi trang', 'thoi-trang', 0),
(39, 0, 4, 7, 'category', 'Thoi trang nam', 'thoi-trang-nam', 0),
(40, 0, 4, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 0),
(41, 0, 2, 6, 'category', 'Thoi trang', 'thoi-trang', 0),
(42, 0, 2, 7, 'category', 'Thoi trang nam', 'thoi-trang-nam', 0),
(43, 0, 2, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 0),
(44, 0, 2, 9, 'category', 'Tablet', 'tablet', 0),
(45, 0, 2, 6, 'category', 'Thoi trang', 'thoi-trang', 0),
(47, 0, 5, 7, 'category', 'Thoi trang nam', 'thoi-trang-nam', 0),
(48, 0, 5, 8, 'category', 'Thoi trang nu', 'thoi-trang-nu', 0),
(52, 0, 6, 21, 'category', 'Cat 1', 'cat-1', 0),
(53, 0, 6, 6, 'page', 'Giới Thiệu', 'gioi-thieu', 0),
(54, 0, 7, 6, 'page', 'Giới Thiệu', 'gioi-thieu', 1),
(55, 0, 7, 19, 'category', 'demo2', 'demo2', 0),
(56, 0, 1, 6, 'page', 'Giới Thiệu', 'gioi-thieu', 1),
(57, 0, 8, 44, 'category', 'cong nghe', 'cong-nghe', 2),
(58, 0, 8, 7, 'category', 'Thoi trang nam', 'thoi-trang-nam', 3),
(59, 0, 8, 6, 'page', 'Giới Thiệu', 'gioi-thieu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `giicms_orders`
--

CREATE TABLE `giicms_orders` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_orders`
--

INSERT INTO `giicms_orders` (`id`, `post_id`, `user_id`, `code`, `number`, `created_at`, `updated_at`) VALUES
(5, 2, 3, NULL, 2, 1458295082, 1458295082);

-- --------------------------------------------------------

--
-- Table structure for table `giicms_posts`
--

CREATE TABLE `giicms_posts` (
  `id` int(11) NOT NULL,
  `category_id` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text,
  `meta_title` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `featured` smallint(6) DEFAULT NULL,
  `main_image` varchar(255) NOT NULL,
  `thumb_image` varchar(255) NOT NULL,
  `url_download` varchar(255) NOT NULL,
  `googleplay_url` varchar(255) NOT NULL,
  `slide_img` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `cats` varchar(255) NOT NULL,
  `slide` smallint(6) DEFAULT NULL,
  `type` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_posts`
--

INSERT INTO `giicms_posts` (`id`, `category_id`, `title`, `slug`, `description`, `meta_title`, `meta_keywords`, `meta_description`, `content`, `image`, `price`, `featured`, `main_image`, `thumb_image`, `url_download`, `googleplay_url`, `slide_img`, `size`, `cats`, `slide`, `type`, `created_at`, `updated_at`, `status`, `user_id`) VALUES
(1, '11,22', 'Marvel: Avengers Alliance 2 v1.0.3 [Mod] APK', 'led-blinker-notifications-pro-v695-apk', 'href="https://play.google.com/store/apps/details?id=com.marvel.avengersalliance2_goo">com.marvel.avengersalliance2_goo</a></span></span> Marvel: Avengers Alliance 2 is the massive sequel to the smash hit Marvel: Avengers Alliance, with a robust mobile gaming experience, greater customization, and amazing high quality visuals.<br />Assemble a team with the Avengers, Daredevil, Guardians of the Galaxy, Spider-Man, and other Super Heroes to battle Ultron, Baron Strucker, and more epic Super Villains! A mysterious series of galactic collisions, known as Incursions, threaten the fate of Earth. You must use the powerful energy of Iso-8 to stop the destruction of every universe. Team up with friends and other players from around the globe to face deadly foes and prevail.<br /> <ul class="text-left"> <li>Assemble the ultimate team to defeat notorious Super Villains</li> <li>Strategize and defeat evil forces in epic 3-on-3 combat</li> <li>Level-up and customize Super Heroes</li> <li>Collect and equip unique abilities for each Super Hero</li> <li>Take on dozens of replayable missions</li> <li>Win bonus rewards for completing Daily Operations</li> <li>Get powerful rewards in PVP tournaments</li> <li>Team up with friends&#8217; Super Heroes to conquer missions</li> </ul> Before you download this experience, please consider that this app contains:<br /> <ul class="text-left"> <li>Social media links to connect with others</li> <li>In-app purchases that cost real money</li> <li>The option to accept push notifications to let you know when we have exciting updates like new content</li> <li>Advertising for some third parties, including the option to watch ads for rewards</li> <li>Advertising for The Walt Disney Family of Companies</li> </ul> <b><span class="yellow">What''s in this version :</span><span class="white"> </span></b>(Updated : Feb 29, 2016)<br /> <ul class="text-left"> <li>Spec Ops</li> <ul> <li>Made preparations for Spec Ops 01</li> </ul> <li>New Heroes</li> <ul> <li>Several new heroes have been added to the store</li> </ul> <li>TECHNICAL:</li> <ul> <li>Improved overall stability of the game</li> <li>Fixed many tasks and trials that were not properly tracking</li> </ul> </ul> <div> <span class="ilk-span" style="font-family: &quot;verdana&quot; , sans-serif;"><b><span class="yellow">Required Android O/S :</span><span style="color: #0b5394;"> </span></b></span><span class="ilk-span" style="color: white; font-family: &quot;verdana&quot; , sans-serif;"><b>4.2+</b></span></div> </div>', 'title', 'key', 'description', 'href="https://play.google.com/store/apps/details?id=com.marvel.avengersalliance2_goo">com.marvel.avengersalliance2_goo</a></span></span> Marvel: Avengers Alliance 2 is the massive sequel to the smash hit Marvel: Avengers Alliance, with a robust mobile gaming experience, greater customization, and amazing high quality visuals.<br />Assemble a team with the Avengers, Daredevil, Guardians of the Galaxy, Spider-Man, and other Super Heroes to battle Ultron, Baron Strucker, and more epic Super Villains! A mysterious series of galactic collisions, known as Incursions, threaten the fate of Earth. You must use the powerful energy of Iso-8 to stop the destruction of every universe. Team up with friends and other players from around the globe to face deadly foes and prevail.<br /> <ul class="text-left"> <li>Assemble the ultimate team to defeat notorious Super Villains</li> <li>Strategize and defeat evil forces in epic 3-on-3 combat</li> <li>Level-up and customize Super Heroes</li> <li>Collect and equip unique abilities for each Super Hero</li> <li>Take on dozens of replayable missions</li> <li>Win bonus rewards for completing Daily Operations</li> <li>Get powerful rewards in PVP tournaments</li> <li>Team up with friends&#8217; Super Heroes to conquer missions</li> </ul> Before you download this experience, please consider that this app contains:<br /> <ul class="text-left"> <li>Social media links to connect with others</li> <li>In-app purchases that cost real money</li> <li>The option to accept push notifications to let you know when we have exciting updates like new content</li> <li>Advertising for some third parties, including the option to watch ads for rewards</li> <li>Advertising for The Walt Disney Family of Companies</li> </ul> <b><span class="yellow">What''s in this version :</span><span class="white"> </span></b>(Updated : Feb 29, 2016)<br /> <ul class="text-left"> <li>Spec Ops</li> <ul> <li>Made preparations for Spec Ops 01</li> </ul> <li>New Heroes</li> <ul> <li>Several new heroes have been added to the store</li> </ul> <li>TECHNICAL:</li> <ul> <li>Improved overall stability of the game</li> <li>Fixed many tasks and trials that were not properly tracking</li> </ul> </ul> <div> <span class="ilk-span" style="font-family: &quot;verdana&quot; , sans-serif;"><b><span class="yellow">Required Android O/S :</span><span style="color: #0b5394;"> </span></b></span><span class="ilk-span" style="color: white; font-family: &quot;verdana&quot; , sans-serif;"><b>4.2+</b></span></div> </div>', NULL, NULL, NULL, 'http://i.imgur.com/Lv0Q5AW.jpg', 'https://lh3.googleusercontent.com/5F8COObLfbL8HlxUbc4UFbEnFoXFpXSaA6kLf0oLBSio9B1tDETmf3MISOtCsOBI_Zy8=w300', 'http://www101.zippyshare.com/v/LkVKOem3/file.html', 'https://play.google.com/store/apps/details?id=com.marvel.avengersalliance2_goo', 'https://lh3.googleusercontent.com/jHnr2ygH8a9GidopwiB12JlLONiK2FIeTiYzhR1vEcFXDEnB7-yQLW0XmLLvSIwYp9Vf=w700\r\nhttps://lh3.googleusercontent.com/NbOn0mUuqQGjacBcyTx0UGY4ZJG9cuEqfpY2Rpqn_NGjTWXwma4Nb4cKFob2gsP-kQQ=w700\r\nhttps://lh3.googleusercontent.com/iS5eGyZNiEYpxpknqXTY2GXbZU7jaKqXj4sVV7ARY9AoEMd6ydtnTaccDpz8gWYYLDY=w700\r\nhttps://lh3.googleusercontent.com/A7pOKAz_dJzPfQfBr8oCvgfUMDNB3dGAu04RFhqD7gD3Hwh33--dGi-Tx4es76p9VONk=w700', '30M', 'Appa | Games', NULL, NULL, NULL, NULL, 'publish', 0);

-- --------------------------------------------------------

--
-- Table structure for table `giicms_settings`
--

CREATE TABLE `giicms_settings` (
  `id` int(11) NOT NULL,
  `key` char(50) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giicms_settings`
--

INSERT INTO `giicms_settings` (`id`, `key`, `value`, `description`) VALUES
(1, 'Viet', 'Nhanh', 'BAC');

-- --------------------------------------------------------

--
-- Table structure for table `giicms_user`
--

CREATE TABLE `giicms_user` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giicms_user`
--

INSERT INTO `giicms_user` (`id`, `parent_id`, `username`, `firstname`, `lastname`, `avatar`, `city`, `address`, `phone`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(3, 0, 'admin', 'Vinh', 'Huynh', '', '', '', 0, 'r54Ak8FWbFdaYtjBB-4J0Y1qsV2eD46j', '$2y$13$pfnJ4aKXQ.RPC0usLQ3uuO4ypQ3rsnSiKalBD8aRV4Ky7zxFR5toS', NULL, 'admin@gmail.com', 'admin', 10, 1458285317, 1458361681),
(6, 0, 'demo', 'Vinh', 'Huynh', '', '', '', 0, 'Lc78ksoGaZ9YDEL6nBcKLYD_u-QzPKsC', '$2y$13$2kL.9Oh/6uBauogq76xr0eexpgL7kNF1KiO19/8PdekyB8S8VOiU6', NULL, 'demo@giicms.com', 'admin', 10, 1458359413, 1458359413),
(7, 0, 'vungpham', 'Phạm', 'Vững', '', '', '', 0, 'DUzqOKnSmdVD1E9jou7NDvrZqLF4GNpI', '$2y$13$8uAizpUHT6hJTbs9QRO/FO/gZgMyg7gdRHoDezA07dh8kIqnYuxOy', NULL, 'phamvanvung1993@gmail.com', 'admin', 10, 1458363819, 1458363819),
(10, 0, 'Shamit', 'test', 'test', '', '', '', 0, '1IDBdgU5SI3u__LVfAgoHc4okZuEUV88', '$2y$13$0Hj5PS63tisXAN5aha3jnuPLzcSi0wKZ7RGH9hx72palHGlU8G2su', NULL, 'shamitshrestha@hotmail.com', 'admin', 10, 1458388909, 1458388909),
(11, 0, 'nhokboy99', 'Nguyễn Hữu', 'Trọng', '', '', '', 0, '0Nn_PYzut_lUMvKRQEyMZK7aDGGrWSdb', '$2y$13$CPh4hp/uxwJFufgOTSeyjOvv2zXB2lEGYJKoWxikK7M8xbMtugYBK', NULL, 'nhokboy99@gmail.com', 'admin', 10, 1458393764, 1458393764),
(12, 0, 'admincp', 'huynh', 'gia', '', '', '', 0, 'tyMByO-QSby1W6avR_dMnhPs6G5GZn_G', '$2y$13$x191ySNDCaa8byCiVA5TIeH9tkQg5GVah9cIhxAHyR7NQ5qnUgY/C', NULL, 'giaphu086@gmail.com', 'admin', 10, 1458397012, 1458397012),
(14, 0, 'hileo90', 'Huy Nguyen', 'Anh', '', '', '', 0, 'w7OYFk_0J0vjOY0G0GnXESutrAtNlHd4', '$2y$13$Hxu6XPohvWtAbSlUiByOBukNw7B3RWFp9bN4dXQ8MjLhyNJewgeGm', NULL, 'huy.nguyenanh90@gmail.com', 'admin', 10, 1458408953, 1458408953),
(15, 0, 'dinhchuong7913', 'Jack', 'Tran', '', '', '', 0, '3HBfCczWSoet1USXHqY57ETxptfAux0g', '$2y$13$uwmgeETp4g52pqCies3ZW.mISQp9Wr/GiKf6DMrPHtZZkSxCd627.', NULL, 'dinhchuong7913@gmail.com', 'admin', 10, 1458410457, 1458410457),
(19, 0, 'socconghau', 'Sóc', 'Hậu', '', '', '', 0, 'xp8LABmSZObcblIUlrCuMV4Sv_MRLyzU', '$2y$13$1AizZjPnzoG7PXieTsgW6egDpAMAKe4QO5rE3Zzt0dM3qYEh.KU/.', NULL, 'socconghau@gmail.com', 'admin', 10, 1458445363, 1458445363),
(21, 0, 'hungtuan.php', 'hùng', 'tuấn', '', '', '', 0, 'WjxRNMsqFJUovp2A2B7sSFsVC_u8eOg2', '$2y$13$fCDZoj7W/RPbOcQ7zGkrweOULB7R/TZG9QUPqH1eSNZzxXwltcMZi', NULL, 'hungtuan.php@gmail.com', 'admin', 10, 1458517720, 1458517720),
(22, 0, 'luongcuong', 'luong', 'cuong', '', '', '', 0, 'zbuevYcwhxLQ5ptJDvoV_VSstyChZaJA', '$2y$13$fX1ish5hflbtIzXN1.OphupAKdslI2qiTUiXUMv8F3tugGdWgRoj.', NULL, 'luongkiencuong22@gmail.com', 'admin', 10, 1458524627, 1458524627),
(23, 0, 'mrtrinhvn', 'TIEN TAO', 'TRINH', '', '', '', 0, 'yyAhAI9dLW2T6fKDUadrEmW0UrdZFMIx', '$2y$13$0ZkrkfXOsRQFxG/V5m6Fd.VhU7nkIy.d4go8OvBgvjIKE7GO.Opre', NULL, 'mrtrinhvn@yahoo.com', 'admin', 10, 1458611350, 1458611350),
(24, 0, 'shin_conan', 'Hoàng Xuân', 'Hiếu', '', '', '', 0, 'GlU-cIlZV44aL7c2qtQUspa6yv5vDuVv', '$2y$13$8cR6xknPe4xrq.LyFNL3Uej.0fji9vxmCyUukIa969ixahSOeO8fK', NULL, 'xuanhieu.pd@gmail.com', 'admin', 10, 1458717701, 1458717701),
(25, 0, 'xuanbich', 'Bui', 'Bich', '', '', '', 0, '79FVM8EW8bBFdciusRjWQk-PZsfyB6e7', '$2y$13$9mEvEyy9YgHbCYccmgpiPOM0TNrBCOZGUjlvrasuDzCBb9Cs7GHJy', NULL, 'sk3er.0110@gmail.com', 'admin', 10, 1458829387, 1458829387),
(30, 0, 'tuanld', 'Tuan', 'Luong', '', '', '', 0, 'ZmDRb2NeyCk6yX4C0EurHqgdvyLIy2Am', '$2y$13$3VpS87N.5bQz.LKZHI4E4ONHaHtc24WP4hMWr1ksFxEBZiDUcdY.y', NULL, 'luongtuan47@gmail.com', 'admin', 10, 1459501139, 1459501139),
(31, 0, 'giangnt257', 'Trường', 'Giang', '', '', '', 0, 'JpHUn_HbQ-EpasLfzbSVj9NVogVAxIU0', '$2y$13$.b.AChUwzKhP1b97izg9J.UYcGJE3BoJCcBQLoivcNYPdxQMn71xC', NULL, 'truonggianggx@gmail.com', 'admin', 10, 1459509042, 1459509042),
(33, 0, 'xeradi', 'xuan', 'nam', '', '', '', 0, 'DALeu6uJr-DqSXFddPMfyBF6bWUNjrz8', '$2y$13$EzXA3bCjZhDDyjFACS4I6udO4M2tSRN2KGUsPvIOYuhgb4aHrs892', NULL, 'vuacauca654@gmail.com', 'admin', 10, 1460167740, 1460167740),
(34, 0, '111111', 'V', 'B', '', '', '', 0, 'HI7uMg3KzdrCevnmnmSBTee321nBQplr', '$2y$13$fYTGRY.eSllk5hH9elAKoON0Mt.ldy5eh4gUrPbdZGNtLWrrTPCfS', NULL, 'gfg@gd.com', 'admin', 10, 1460171016, 1460171016),
(35, 0, 'admin1234', 'a', 'v', '', '', '', 0, 'dlSDLa9dYMkwVmKJG9eUsrX-tqVmMFDW', '$2y$13$nMqeGGqaydWd3p6brburuO00Jt3TvxQJ9qe8HsekntXDFiwmwzlga', NULL, 'a@gmail.com', 'admin', 10, 1460172963, 1460172963),
(36, 0, 'admin111', 'dsdasd', 'đâsd', '', '', '', 0, 'VYBNDzpF28SNWbUys1UN6kvfk0GhOgae', '$2y$13$gtyZczFXdIVucoo0935fluqtaIKSBV3kEepkwf0fqKUfNdBJQMGzC', NULL, 'yevn.net@gmail.com', 'admin', 10, 1460175706, 1460175706),
(37, 0, 'ANhDung', 'Anh', 'Dung', '', '', '', 0, 'nq7kpPxc2_yykntOI3PrGiaqlxbHejT5', '$2y$13$d2a5vmthie2jxr3RLpcgIuizm7sHFpT9.pAUm7OM/zevJcN3FX64e', NULL, 'anhdung17041986@gmail.com', 'admin', 10, 1460177117, 1460177117),
(38, 0, 'tranbinhcse', 'Trần', 'Binh', '', '', '', 0, 'BKxKIUBE-yu6vPdThPjdLufzzFBPzUL-', '$2y$13$p/NyVmn5unhVIlV.CizpnOtJonCP9AQufEJbAFkgVtScwN2T6Umw.', NULL, 'tranbinhcse@yahoo.com', 'admin', 10, 1460191690, 1460191690),
(39, 0, '123456', '1', '1', '', '', '', 0, '_CCVS-o0cOXu97ub0nQpMuRYd3MooMgb', '$2y$13$dgo0wexjq8Tz7ckXFYcIIeWtvppZ4g4xqY4iiSY5JeyCeGdG04HWi', NULL, 'c2@gmail.com', 'admin', 10, 1460344906, 1460344906),
(40, 0, 'admin1', 'ad', 'min', '', '', '', 0, 'R_DSjAMBMQBpHpWwxmPrcTvnQiZXdMPo', '$2y$13$W42RMwFxCE8JQKIWWVkm5eKFNFGSt./.UT0NvKr0DxK/9i1bcm.Ea', NULL, 'admin@admin.com', 'admin', 10, 1460360450, 1460360796),
(41, 0, 'thientuan79', 'Huỳnh', 'Tuấn', '', '', '', 0, 'm3knTxMbEF-c2iI5BAtrIuEDZXlmgsY_', '$2y$13$eoD.1jwjrOPZ2EDKScFYseR5eQgf4MWsG0w9BDIiQa/BOPGdhpNti', NULL, 'tantay.nina@gmail.com', 'admin', 10, 1460630102, 1460630102),
(42, 0, 'thanhlx', 'thanh', 'le', '', '', '', 0, 'yrubTotPvr4oht1iaA3fNM2tqaEocfMY', '$2y$13$ZNYe3VOcEQWiJ10RsgevLOS65UEcv/yGCsw5yOxvLqqtTkiX1VXSa', NULL, 'thanhlx@yahoo.com', 'admin', 10, 1460830219, 1460830219),
(43, 0, 'admins', '123', '456', '', '', '', 0, 'oUy3OF572oZmm6AO_n1PMx6vF0nTSMSC', '$2y$13$oTe2qChF9TljDPVW8OG.T.q7F2hb.u3fdLzlPohoky3dRpbIGkD52', NULL, '12345@yahoo.com', 'admin', 10, 1461120797, 1461120797),
(44, 0, 'thanhjqk', 'Đỗ', 'Thanh', '', '', '', 0, 'CTat1MC-Pwch6G8AcxozeKSEa-wftVqK', '$2y$13$YoogYxlpn7k5/X.6tWj7k.2BMrz6jlHgXT.5manYabNYnLhLKYPU.', NULL, 'thanhdv193@gamil.com', 'admin', 10, 1461502912, 1461502912);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `giicms_categories`
--
ALTER TABLE `giicms_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_category_post`
--
ALTER TABLE `giicms_category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_media`
--
ALTER TABLE `giicms_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_menu`
--
ALTER TABLE `giicms_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_menu_item`
--
ALTER TABLE `giicms_menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_orders`
--
ALTER TABLE `giicms_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_posts`
--
ALTER TABLE `giicms_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_settings`
--
ALTER TABLE `giicms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giicms_user`
--
ALTER TABLE `giicms_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giicms_categories`
--
ALTER TABLE `giicms_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `giicms_category_post`
--
ALTER TABLE `giicms_category_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `giicms_media`
--
ALTER TABLE `giicms_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `giicms_menu`
--
ALTER TABLE `giicms_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `giicms_menu_item`
--
ALTER TABLE `giicms_menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `giicms_orders`
--
ALTER TABLE `giicms_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `giicms_posts`
--
ALTER TABLE `giicms_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `giicms_settings`
--
ALTER TABLE `giicms_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `giicms_user`
--
ALTER TABLE `giicms_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
