-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 11:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomjewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_web_tokenid`
--

DROP TABLE IF EXISTS `admin_web_tokenid`;
CREATE TABLE `admin_web_tokenid` (
  `id` int(11) NOT NULL,
  `tokenid` varchar(525) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `admin_web_tokenid`
--

TRUNCATE TABLE `admin_web_tokenid`;
--
-- Dumping data for table `admin_web_tokenid`
--

INSERT INTO `admin_web_tokenid` (`id`, `tokenid`, `date_added`, `status`) VALUES
(18, 'dfxeskkTgUnj5zmEeS3DTQ:APA91bHVN7oGoScmdZPTCaimU2T5u0Bgsjhb9RcCzFFrB_ctpKhM5Q_G6NubNkj2LzX6CNHoN9kkVzPMR3U5PtgXa7g30hIUKc39aM-4775m3N6hYe5G2abNGiwrUtsbLev3Eav2CBw2', '2020-08-01 03:41:07', 1),
(19, 'fmq_a5JaS5SO05h_xLAsxC:APA91bEALQsurJ71RuKzTMcvkQnLiSI2ImyhO2l0AyJmbtjgFWdhbDjIVF9pkv49rSt4MPEaApIq_dP_2jHT0148tSj3LmKixuIbuijJWQKS37FW8pITZNldbRPIY-QUhV0bonQseRwW', '2020-08-01 03:41:19', 1),
(22, 'd4pY696HeR5D_sxaG96_wt:APA91bFaOYM4tFfgcciFI89atviNlmCbncS_vtaJZWnX2Ate-uHkId4N-xSQ6Iwh8fOLi9AMS9m3QYHqNoAAHYZbMln0R5LK24UBEh4puWOwbbaD_NC0axcSQXtqvaFSxejcpoSKQMBC', '2020-08-01 12:21:36', 1),
(26, 'polofM2y7VLtlAHHox-MAK4WgL:APA91bEA_VYAmPXru3p_KFq9mPuxdq_CMHDUGhAXadr5nTPJXIUG3KzXITL-YKU4-Qo6cnVT1x80QXiM8SNozblojLP0RDFYh6ZW48nuz8tpLHZbuc0dzHaU7y8KoiM4azw_A_0UTA2I', '2020-08-04 04:18:18', 1),
(27, 'polodPYzWSRkyGBcXeVGnktfag:APA91bFG6jN-QHLdlJ9PoE5dPy2N145iuC2-5BKgYgOTKfeLpEwE6eCmvjOhxf7wOeieOMzXnS9AjBPR6GYxjZVj8BYCxUfrA9mY3HmBBvTBE0D_iL7Ehr9ChZpNv7UVkrlfps_Rmwav', '2020-08-04 04:18:37', 1),
(29, 'f7kmq7FI3N0_8s4ILEJ_wJ:APA91bHWzt32-HcmvdW8WHvAeaAbcSkpz3OdxcClvfIG23K1eGpiI7eWYsWxyP9UhqChH5UpwCDMv-UlzeNUd5bE1IK2IaGLyHSy2LhCzWCz56LDKMjib-h4ch0sggULLskaxWEzczd-', '2020-08-04 04:45:22', 1),
(30, 'dx-sn9OoeSQOM_b7Z3ccd2:APA91bEeaI1w_NPok8IgYDPrtoCvSYKddaLHy_NEU6jU_126tNpIoavkiEojPV6QrFxqgtHn1fgO0SHfnTGdAL1Yz_07DeDm_yJZBySMvLqyNuZQhMCyyiZijXRJPphxLjkliCYXtjs3', '2020-08-29 01:45:35', 1),
(31, 'fVSwYVtV9I6pZPklCzm12W:APA91bHweNWWbf5oyNk-PFbM7zlvq1njY8y643YO9N0r1Er54fOy0l7OEdGXFPYalbawWehq9INEf7tTd9vsK0WyM0nnB4KOZHFUuyvnRL8Y_ulsZ3MPchHzWhMDjxy0rTSQuY847okF', '2020-09-10 08:11:58', 1),
(32, 'fukd5TqYq2cFU2PBebbYdL:APA91bEEHbHNpT2vNdy20xZMktBzHjmZVybqvo_P1FqevUUBg06sX56foaQHzqdRAh-Ba01qxPJ0GPbpZh1dAZkJ4IFr_xiFq6dmjGcOhGtmq7cpPYvQj6eb7QrrKuMOT2Nxv3adtFik', '2020-10-13 11:09:15', 1),
(33, 'ebnusEKn7jjxFzdzKqDtxL:APA91bG4KrfjttY3QZJtVoVc2i05asJxywNSN1mowDeOGi4_qv_2c_X6DjPd2iiOwkGeZw6zIgiCdD2pAX2N74-E8vclSrF9xT0-0AuCe1hVhDGms397Dj9beoSX0apMDNZ0t071B8pW', '2020-10-17 10:25:23', 1),
(34, 'dYCSJ-HRXgHk74Z_Fu8kT5:APA91bGbCFoLk6Xz4OmFTLRZdHAmAGZ47bgBivLj81PMZdBTUvm6ncThVsiX3qrwoEIc6FHIslS_0sZgvZRYb4kBILnQiGzRKP8r4XGVFEMzQ453oZw3N4g4WJC45w1DFomFQfHhWLwr', '2020-11-03 01:00:05', 1),
(35, 'c2usF4oTk1tI3MLCHDI-Hx:APA91bEc8hBlmjU0N0aCHm9dKm8-rssooyADwuoM_OLRscXuR_qvgoawPkVd_MVI_nI9H88TPhvubV_kgz3iHAGo3ta3KH8CZSeT3ZFwymtR44LLtet-yabOxUey5205b5Cg7-y_N7Kw', '2020-12-07 01:51:25', 1),
(36, 'd556CrgjAjyj-OsLdv5PDX:APA91bHQyE9Xpw0HY9pyxFtZrNVbVVF_Ee_hKZYBuFvTpz7n7iH7cXPzHUtALDgCp-MNi2ZnE42QEFXV_6otcRzdQslKzTRBG7ARd76XbzBTv7HloCCuO9NRNSqF0XKesMzMlUk0DBPp', '2021-01-17 01:14:31', 1),
(37, 'dq-_6-kZ1ZtGpyHIPOD_pS:APA91bHmVA9vyUvNioq8cXbqNoBRpeRtRHBgKsN9SooKmb8PHDVzLvy8XHUiinWBSHSQbc9juvDqTE2JWq0O2Fllo2RDCL96gwf7lh-wpdqo37BLmgAbswqQRjxCoHilBsN0-Kz1XO0a', '2021-01-20 12:35:56', 1),
(38, 'eoy9iyXkhAXnyMmvODLwxb:APA91bEVvhDqmPYhkt6KPDW1-k4qfWqP3iSPSmgG5aShwEK3UE5tJJJ4c_m9xCTkSiaVldlhrSNpVqt7n5dnrK_zBWVCLp0niSjAnmiIa8sVe_u22HN3by0ChKV3dP9XxxxmsIf9S6na', '2021-02-02 05:02:02', 1),
(39, 'eKUQkLYAEatYlr59i2_FN1:APA91bHl78VB8TYLbBhrvP-THL0ndr9YzwJ7XYBWjsLzojn2O05VpU8NcBKgwbZLyQeKT5FlAUMy5_eRExxW1vjyIpqDxwR9_FG0p9kjYwmIc6ih9a6e3DDxiS6KuOCn9ApeqCpx3nNM', '2021-02-03 08:49:43', 1),
(40, 'fT_yCgOjlEczYxT2P0EYOQ:APA91bFN6J4kbnVQq3fK7X3bdBhWPGzFRFsvjc9Kd0Dq3aUsH_7mRZNIttzYZnx6YRghG6s13MBAZ7PAvPtHBZmlVe6iR1GauFYWcW8PLtma22aiLYhY6-fSvxACiPUh2XT5WEqQPn70', '2021-02-10 12:23:45', 1),
(41, 'f83L8ou4Y1uMNS6mGm_tus:APA91bGXfZUkqoYve6zD_ky63f5WrTbDamD2og16NVGPrlu-quTf9ko5kg5k8cwUggCUsADFw2G1HzAqWLwfuNGsqc5DWOwT_2Iu4hbAHuo45ssXuta5Tj3PiBn1jZwuT2vSkyVwuXkp', '2021-03-01 01:29:10', 1),
(42, 'eWXbsnokb0QI3GzIeGBr9b:APA91bEYDGoVCh-9Ule_23BRv5XQFq3bymtS6h2n99bufm0SlVjw7NwrjiLulOgRdrgqVdhLxGI3ogIm_bze3gCnTBblQLicmpYGlATWoIZa60wEvT7BX0IJm0wTjcgP4MnvvyqDz1tF', '2021-03-03 02:57:52', 1),
(43, 'cRdPZodESesn-dAQcRxkYH:APA91bHaZ4fNgI_6IKmmP0TYKX-7NZsFKMLmmOaqIjZh5UNdMJDoHVuXS8gxtWZFnRRss-tbytxpzGrdFi-zxLC2i33l02K9ViEbNF9Usn-lp7ffZiu0Qmmah9MyNRK-Ntx82UrKDjKU', '2021-04-28 04:49:06', 1),
(44, 'czk3T9ln7eAfx9idF0KKhJ:APA91bGtElG5FZJWuEYwCBYRP9z_gdaJB3SB9NLo-GgvOXTx2Ue-acgA7geXP01JOQATV_T0YNFQudSxQD9RT6pogUZerdRyEYXqHiNKb45XGapbBLiJHgEVvYDNo3CNpJMELzfUrfIG', '2021-06-03 07:14:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carryboy_dailylogs`
--

DROP TABLE IF EXISTS `carryboy_dailylogs`;
CREATE TABLE `carryboy_dailylogs` (
  `logs_id` int(11) NOT NULL,
  `daily_date` date DEFAULT NULL,
  `added_date` datetime NOT NULL,
  `driver_id` int(11) NOT NULL DEFAULT 0,
  `carryboy_id` int(11) DEFAULT 0,
  `inv_id` int(11) DEFAULT 0 COMMENT 'just taeken'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `carryboy_dailylogs`
--

TRUNCATE TABLE `carryboy_dailylogs`;
--
-- Dumping data for table `carryboy_dailylogs`
--

INSERT INTO `carryboy_dailylogs` (`logs_id`, `daily_date`, `added_date`, `driver_id`, `carryboy_id`, `inv_id`) VALUES
(1, '2020-08-19', '2020-08-19 03:21:50', 56, 5, 0),
(2, '2020-08-19', '2020-08-19 03:21:53', 56, 6, 0),
(4, '2020-08-19', '2020-08-19 09:03:07', 4, 7, 0),
(13, '2020-08-20', '2020-08-20 02:24:44', 4, 5, 0),
(14, '2020-08-20', '2020-08-20 02:24:48', 4, 19, 0),
(15, '2020-08-20', '2020-08-20 02:25:07', 56, 6, 0),
(16, '2020-08-20', '2020-08-20 02:25:11', 56, 7, 0),
(17, '2020-08-20', '2020-08-20 02:25:15', 56, 23, 0),
(19, '2020-08-21', '2020-08-21 07:12:54', 4, 6, 0),
(20, '2020-08-22', '2020-08-22 12:04:13', 56, 5, 0),
(21, '2020-08-22', '2020-08-22 12:04:17', 56, 19, 0),
(22, '2020-08-22', '2020-08-22 02:16:13', 3, 6, 0),
(23, '2020-08-22', '2020-08-22 02:16:17', 3, 7, 0),
(24, '2020-08-24', '2020-08-24 12:03:46', 4, 5, 0),
(25, '2020-08-24', '2020-08-24 12:03:48', 4, 6, 0),
(26, '2020-08-25', '2020-08-25 01:35:45', 4, 5, 0),
(27, '2020-08-25', '2020-08-25 02:35:33', 3, 19, 0),
(28, '2020-08-25', '2020-08-25 02:35:36', 3, 6, 0),
(31, '2020-08-28', '2020-08-28 06:39:32', 4, 19, 0),
(32, '2020-08-28', '2020-08-28 06:39:35', 4, 6, 0),
(33, '2020-08-28', '2020-08-28 06:59:00', 3, 23, 0),
(34, '2020-08-28', '2020-08-28 06:59:02', 3, 7, 0),
(35, '2020-08-29', '2020-08-29 11:22:56', 4, 5, 0),
(36, '2020-08-29', '2020-08-29 11:23:01', 4, 6, 0),
(37, '2020-08-31', '2020-08-31 01:32:41', 56, 5, 0),
(38, '2020-08-31', '2020-08-31 01:32:44', 56, 7, 0),
(39, '2020-08-31', '2020-08-31 01:40:37', 4, 6, 0),
(40, '2020-08-31', '2020-08-31 01:40:40', 4, 19, 0),
(41, '2020-08-31', '2020-08-31 05:00:28', 3, 23, 0),
(44, '2020-09-01', '2020-09-01 01:51:34', 56, 7, 0),
(46, '2020-09-01', '2020-09-01 01:51:38', 56, 6, 0),
(51, '2020-09-08', '2020-09-08 11:04:02', 56, 5, 0),
(52, '2020-09-10', '2020-09-10 08:01:58', 56, 5, 0),
(53, '2020-09-10', '2020-09-10 08:02:01', 56, 19, 0),
(56, '2020-09-10', '2020-09-10 08:02:10', 56, 23, 0),
(57, '2020-09-10', '2020-09-10 08:38:10', 56, 6, 0),
(58, '2020-09-10', '2020-09-10 08:38:12', 56, 7, 0),
(59, '2020-09-12', '2020-09-12 03:13:04', 4, 5, 0),
(60, '2020-09-12', '2020-09-12 03:13:06', 4, 19, 0),
(61, '2020-09-12', '2020-09-12 03:13:07', 4, 23, 0),
(63, '2020-09-12', '2020-09-12 03:13:16', 4, 7, 0),
(64, '2020-09-22', '2020-09-22 06:23:49', 56, 5, 0),
(65, '2020-09-22', '2020-09-22 06:23:51', 56, 6, 0),
(66, '2020-09-22', '2020-09-22 06:31:12', 56, 23, 0),
(67, '2020-09-29', '2020-09-29 07:07:36', 56, 6, 0),
(68, '2020-09-29', '2020-09-29 07:07:39', 56, 7, 0),
(71, '2020-10-17', '2020-10-17 03:38:51', 4, 6, 0),
(72, '2020-10-17', '2020-10-17 04:16:23', 4, 5, 0),
(73, '2020-10-17', '2020-10-17 10:00:00', 56, 19, 0),
(74, '2020-10-17', '2020-10-17 10:26:14', 56, 23, 0),
(75, '2020-10-22', '2020-10-22 01:00:46', 4, 23, 0),
(76, '2020-10-22', '2020-10-22 01:00:55', 4, 19, 0),
(77, '2020-10-30', '2020-10-30 01:33:47', 56, 23, 0),
(78, '2020-10-30', '2020-10-30 01:33:50', 56, 6, 0),
(79, '2020-11-03', '2020-11-03 04:19:05', 56, 5, 0),
(80, '2020-11-04', '2020-11-04 05:07:33', 56, 5, 0),
(81, '2020-11-17', '2020-11-17 12:26:17', 56, 5, 0),
(82, '2020-11-18', '2020-11-18 01:34:52', 56, 5, 0),
(83, '2020-11-18', '2020-11-18 01:34:54', 56, 23, 0),
(84, '2021-02-10', '2021-02-10 01:02:17', 95, 5, 0),
(85, '2021-06-17', '2021-06-17 11:03:07', 95, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_master`
--

DROP TABLE IF EXISTS `cart_master`;
CREATE TABLE `cart_master` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `shopping_session` varchar(50) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `cart_qty` int(11) DEFAULT 1,
  `price` decimal(10,2) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `domain` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cart_master`
--

TRUNCATE TABLE `cart_master`;
--
-- Dumping data for table `cart_master`
--

INSERT INTO `cart_master` (`cart_id`, `user_id`, `shopping_session`, `product_id`, `cart_qty`, `price`, `date_added`, `domain`) VALUES
(1, 5, '1443480KtvWdZ3Zi', 3, 1, '1000.00', '2022-10-21 00:00:00', 1),
(2, 5, '1443480KtvWdZ3Zi', 11, 1, '451.00', '2022-10-21 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `ci_sessions`
--

TRUNCATE TABLE `ci_sessions`;
-- --------------------------------------------------------

--
-- Table structure for table `cms_faq`
--

DROP TABLE IF EXISTS `cms_faq`;
CREATE TABLE `cms_faq` (
  `id` int(11) NOT NULL,
  `question` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `question_en` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` enum('Active','Inactive','Delete') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Active',
  `sort_no` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cms_faq`
--

TRUNCATE TABLE `cms_faq`;
--
-- Dumping data for table `cms_faq`
--

INSERT INTO `cms_faq` (`id`, `question`, `question_en`, `answer`, `answer_en`, `date_added`, `status`, `sort_no`) VALUES
(1, 'ຂ້ອຍຕ້ອງການຖັງນ້ຳກ້ອນ', 'I want cooler boxes', 'ທ່ານສາມາດຂໍຖັງນ້ຳກ້ອນໄດ້ໂດຍການໂທຫາແອັດມິນທີ່ເບີ +85620 52433666. ທາງແອັດມິນຈະສະໜອງຖັງນ້ຳກ້ອນໃຫ້ທ່ານ.', 'You can ask for cooler boxes from Bo-ice by calling +85620 52433666 .Admin will assign you cooler box accordingly', NULL, 'Active', 0),
(2, 'ສາມາດຊຳລະເງິນຊ່ອງທາງໃດໄດ້ແນ່ ?', 'What methods of payment does Boice accept?', 'ພວກເຮົາຮັບການຊຳລະເງິນ 2 ຮູບແບບຄື: \r\nສຳລັບກຸ່ມລູກຄ້າອົງກອນສາມາດຊຳລະເງິນປາຍທາງ ແລະ ຊຳລະເງິນແບບຂໍເຄຣດິດ. \r\nສຳລັບລູກຄ້າທົ່ວໄປ ແມ່ນສາມາດຊຳລະເງິນປາຍທາງເວລາຮັບສິນຄ້າ ແລະ ຕໍ່ໄປໃນອະນາຄົດເຮົາຈະມີຊ່ອງທາງການຊຳລະເງິນຜ່ານການໂອນອອນລາຍ', 'Boice just accept 2type of payments for enterprise customer , Credit payments and COD payments. For normal customer we have COD as option.\r\nWe will get online transfer amount in future.', NULL, 'Active', 0),
(3, 'ຂ້ອຍສາມາດຍົກເລີກຄຳສັ່ງຊື້ໄດ້ແນວໃດ?', 'How do I place a cancellation request?', 'ເຈົ້າບໍ່ສາມາດຍົກເລີກຄຳສັ່ງຊື້ຜ່ານທາງແອັບໄດ້, ຖ້າເຈົ້າຕ້ອງການຍົກເລີກ ກະລຸນາຕິດຕໍ່ແອັດມິນທີ່ເບີ: +85620 52433666', 'You can not cancel request from app. If you really need to cancel order please call boice at +85620 52433666 .', NULL, 'Active', 0),
(4, 'ຂ້ອຍຕ້ອງການຕິດຕາມຄຳສັ່ງຊື້ຂອງຂ້ອຍ', 'I want to track my order', 'ທ່ານຕ້ອງໄປທີ່ແທັບ \"ຄຳສັ່ງຊື້\" ຫລັງຈາກນັ້ນກົດທີ່ ຕິດຕາມຄຳສັ່ງຊື້, ໃນຫນ້ານີ້ຈະສະແດງລາຍລະອຽດການຈັດສົ່ງອໍເດີ້ຂອງທ່ານ', 'You need to go back and go into \"Order\" tab and click on Tack order , in here you can check the delivery details.', NULL, 'Active', 0),
(5, 'ຂ້ອຍຈະສາມາດແກ້ໄຂໂປຣຟາຍຂ້ອຍໄດ້ແນວໃດ ?', 'How do I change my profile?', 'ທ່ານສາມາດແກ້ໄຂໂປຣຟາຍຂອງທ່ານໄດ້ໂດຍການໄປທີ່ແທັບ \"ບັນຊີ\", ແລ້ວຄຣິກທີ່ \"ແກ້ໄຂໂປຣຟາຍ\" ຫລັງຈາກນັ້ນທ່ານສາມາດແກ້ໄຂ ແລະ ບັນທຶກ.', 'You can change you applications password by just going into \"Account\" tab, Click on \"Edit Profile\". \r\nHere you can make changes and save it.', NULL, 'Active', 0),
(6, 'ຂ້ອຍຕ້ອງການຈັດສົ່ງໄປທີ່ ທີ່ຢູ່ອື່ນ', 'I want to order on different address', 'ທ່ານສາມາດເພີ່ມ ຫລື ແກ້ໄຂທີ່ຢູ່ ໂດຍການໄປທີ່ແທັບ \"ບັນຊີ\" ແລ້ວເລືອກເມນູ \"ທີ່ຢູ່\"', 'You can add address or edit address from \"Account\" tab in that \"Address\" menu.', NULL, 'Active', 0),
(7, 'ຂ້ອຍຈະສາມາດປ່ຽນລະຫັດຜ່ານຂອງຂ້ອຍໄດ້ແນວໃດ ?', 'How can I change my password ?', 'ທ່ານສາມາດແກ້ໄຂໂປຣຟາຍຂອງທ່ານໄດ້ໂດຍການໄປທີ່ແທັບ \"ບັນຊີ\", ແລ້ວຄຣິກທີ່ \"ແກ້ໄຂໂປຣຟາຍ\". ຢູ່ທາງດ້ານລຸ່ມທ່ານຈະເຫັນຂໍ້ມູນລະຫັດຜ່ານ. ປ້ອນລະຫັຜ່ານປະຈຸບັນ ຫລັງຈາກນັ້ນປ້ອນລະຫັດຜ່ານໃຫມ່ທີ່ທ່ານຕ້ອງການປ່ຽນ ແລະ ໃນຊ່ອງຢືນຢັນລະຫັດຜ່ານອກຄັ້ງດ້ວຍ. ຫລັງຈາກນັ້ນກົດບັນທຶກ ລະຫັດຜ່ານທ່ານຈະຖືກປ່ຽນເປັນລະຫັດໃຫມ່.', 'You can change you applications password by just going into \"Account\" tab, Click on \"Edit Profile\". At the end you can see password filed. Enter existing password and then enter new password and in confirm password field too. By clicking on \"Save changes\" your password will be changed to new one.', NULL, 'Active', 2),
(8, 'ຂ້ອຍຕ້ອງການປ່ຽນພາສາ, ສາມາດເຮັດໄດ້ແນວໃດ ?', 'I want to change my language, how can I change it.', 'ໃນແອັບນີ້ພວກເຮົາມີ 2 ພາສາ. ທ່ານສາມາດແກ້ໄຂໂປຣຟາຍຂອງທ່ານໄດ້ໂດຍການໄປທີ່ແທັບ \"ບັນຊີ\", ແລະເລືອກ \"ຕັ້ງຄ່າ\", ໃນບ່ອນນີ້ທ່ານສາມາດສະຫລັບລະຫວ່າງພາສາລາວ ແລະ ພາສາອັງກິດ.', 'This app is in 2 languages. You can change your language by going into \"Account\" tab and just click on \"Settings\", From here you can swtich to \"eng\" or \"lao\" language.', NULL, 'Active', 3),
(9, 'ຂ້ອຍບໍ່ຕ້ອງການຮັບການແຈ້ງເຕືອນຈາກແອັບນີ້', 'I do not want notifications from this app', 'ທ່ານສາມາດປິດການແຈ້ງເຕືອນໄດ້ຈາກເມນູຕັ້ງຄ່າ ໃນແທັບ \"ບັນຊີ\"', 'You can turn off the notification from setting menu in accounts tab.', NULL, 'Active', 3),
(10, 'ຂ້ອຍຕ້ອງການສົ່ງຄືນຖັງນ້ຳກ້ອນ', 'I want to send cooler box again', 'ທ່ານສາມາດຕິດຕໍ່ເພື່ອສົ່ງຄືນຖັງນ້ຳກ້ອນໄດ້ໂດຍການໂທຫາແອັດມິນທີ່ເບີ +85620 52433666. ທາງແອັດມິນຈະແຈ້ງຂັບລົດໄປຮັບເອົາຖັງນ້ຳກ້ອນຈາກທ່ານ.', 'You can ask for return cooler boxes from Bo-ice by calling +85620 52433666 .Admin will assign driver to get cooler box accordingly', NULL, 'Active', 0),
(11, 'ຂ້ອຍສາມາດເອົາລະຫັດສ່ວນຫຼຸດໄດ້ຈາກໃສ', 'Where can i find promo codes', 'ຂ້ອຍສາມາດເອົາລະຫັດສ່ວນຫຼຸດໄດ້ຈາກໃສ', 'Promo codes are given by Bo-ice from promotions banners or from marketing media\'s', NULL, 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

DROP TABLE IF EXISTS `cms_pages`;
CREATE TABLE `cms_pages` (
  `id` int(11) NOT NULL,
  `section` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading_en` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `details_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cms_pages`
--

TRUNCATE TABLE `cms_pages`;
--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `section`, `heading`, `heading_en`, `details`, `details_en`, `date_added`) VALUES
(1, 'aboutus', 'ThaoBo Ice Factories - Main Factory', 'ThaoBo Ice Factories - Main Factory', 'Packaged Ice. Made from purified water (R. O. & U. V. Purification)\r\nນຳ້ກ້ອນ ຖົງ10ກິໂລ ຜະລິດ​ຈາກນຳ້ດື່ມ​ບໍ​ລິ​ສຸດ ​ຜ່​ານ​ລະ​ບົບ RO ແລະ UV ບັນຈຸດ້ວຍເຄື່ອງຈັກ ອັດຕະໂນມັດ ປັດສະຈາກສານປົນເປື້ອນ ກີບ ໂທເບີ​ 021-218888', 'Packaged Ice. Made from purified water (R. O. & U. V. Purification)\r\n10 kg of ice bag made from drink water. RO and UV packed with automatic machine without dirty mix .Call 021-218888 call 021-218888', '2020-06-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `uuid` varchar(50) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `type` enum('F','P') NOT NULL DEFAULT 'P',
  `discount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total` decimal(15,2) NOT NULL DEFAULT 0.00,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `uses_total` int(11) NOT NULL DEFAULT 1,
  `uses_customer` int(11) NOT NULL DEFAULT 1,
  `status` enum('Active','Inactive','Deleted') NOT NULL DEFAULT 'Active',
  `added_date` datetime DEFAULT NULL,
  `edit_date` datetime DEFAULT NULL,
  `added_by_userid` int(11) NOT NULL DEFAULT 0,
  `edit_by_userid` int(11) NOT NULL DEFAULT 0,
  `domains` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `coupon`
--

TRUNCATE TABLE `coupon`;
--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `uuid`, `name`, `code`, `type`, `discount`, `total`, `date_start`, `date_end`, `uses_total`, `uses_customer`, `status`, `added_date`, `edit_date`, `added_by_userid`, `edit_by_userid`, `domains`) VALUES
(1, '47ab1196-e7c8-413d-80c8-b230ddff5d30', 'Diwali Code', 'D101', 'P', '50.00', '0.00', '2022-10-31', '2022-10-31', 1, 0, 'Active', '2022-10-02 00:00:00', '2022-10-02 12:00:29', 1, 1, '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_history`
--

DROP TABLE IF EXISTS `coupon_history`;
CREATE TABLE `coupon_history` (
  `coupon_history_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(15) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `coupon_history`
--

TRUNCATE TABLE `coupon_history`;
--
-- Dumping data for table `coupon_history`
--

INSERT INTO `coupon_history` (`coupon_history_id`, `coupon_id`, `coupon_code`, `order_id`, `customer_id`, `amount`, `date_added`) VALUES
(1, 5, 'Fixed50', 13, 60, '0.0000', '2020-08-22 11:33:00'),
(2, 5, 'Fixed50', 18, 31, '0.0000', '2020-08-22 03:55:51'),
(3, 5, 'Fixed50', 79, 17, '0.0000', '2020-09-23 01:21:11'),
(4, 5, 'Fixed50', 80, 31, '0.0000', '2020-09-24 06:24:33'),
(5, 5, 'Fixed50', 81, 31, '0.0000', '2020-09-30 07:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `title` varchar(32) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `symbol_left` varchar(12) DEFAULT NULL,
  `symbol_right` varchar(12) DEFAULT NULL,
  `decimal_place` char(1) DEFAULT NULL,
  `value` float(15,8) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `default_flag` tinyint(3) NOT NULL DEFAULT 0,
  `country_id` int(11) NOT NULL,
  `domains` tinyint(3) DEFAULT 1,
  `sort_order` tinyint(3) NOT NULL DEFAULT 0,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `currency`
--

TRUNCATE TABLE `currency`;
--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `date_modified`, `default_flag`, `country_id`, `domains`, `sort_order`, `del_status`) VALUES
(1, 'INR', 'INR', ' INR', '', '0', 1.00000000, 1, '2016-08-31 12:53:35', 1, 1, 1, 1, 0),
(5, 'USD', 'USD', ' $', '', '0', 1.00000000, 1, '2016-08-31 12:53:35', 1, 2, 2, 2, 0),
(6, 'AED', 'AED', ' AED', '', '0', 1.00000000, 1, '2016-08-31 12:53:35', 1, 3, 3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

DROP TABLE IF EXISTS `customer_address`;
CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `uuid` varchar(132) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `company` varchar(60) NOT NULL,
  `address_1` varchar(128) NOT NULL,
  `address_2` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 0,
  `zone_id` int(11) NOT NULL DEFAULT 0,
  `custom_field` text NOT NULL,
  `default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `customer_address`
--

TRUNCATE TABLE `customer_address`;
--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`address_id`, `uuid`, `customer_id`, `firstname`, `lastname`, `company`, `address_1`, `address_2`, `city`, `postcode`, `country_id`, `zone_id`, `custom_field`, `default`) VALUES
(1, 'd290e5d7-eacf-4c22-afa2-92686a8045c0', 1, 'kishjore', 'mishra', '', '', '', '', '', 99, 0, '', 0),
(2, 'f0362ab8-ee3f-4a54-aea3-47d5408e6909', 2, 'aa', '33', '', '', '', '', '', 99, 0, '', 0),
(3, '7af02bf1-a8d5-4a25-bbde-6f06c482091d', 3, 'Aa', '33', '', '', '', '', '', 99, 0, '', 0),
(4, 'f62b833e-1c19-423a-af96-edf269d61775', 4, 'Aa', '33', '', '', '', '', '', 99, 0, '', 0),
(5, '62e4c4a2-461f-4a4e-ae54-40d803bcf34a', 5, 'Aa', '33', '', '', '', '', '', 99, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ip`
--

DROP TABLE IF EXISTS `customer_ip`;
CREATE TABLE `customer_ip` (
  `customer_ip_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `country` varchar(2) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `customer_ip`
--

TRUNCATE TABLE `customer_ip`;
--
-- Dumping data for table `customer_ip`
--

INSERT INTO `customer_ip` (`customer_ip_id`, `customer_id`, `store_id`, `ip`, `country`, `date_added`) VALUES
(1, 1, 0, '127.0.0.1', '', '2022-10-19 18:16:13'),
(2, 1, 0, '127.0.0.1', '', '2022-10-19 18:17:27'),
(3, 1, 0, '127.0.0.1', '', '2022-10-19 19:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

DROP TABLE IF EXISTS `customer_login`;
CREATE TABLE `customer_login` (
  `customer_login_id` int(11) NOT NULL,
  `email` varchar(96) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `total` int(4) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `customer_login`
--

TRUNCATE TABLE `customer_login`;
-- --------------------------------------------------------

--
-- Table structure for table `customer_search`
--

DROP TABLE IF EXISTS `customer_search`;
CREATE TABLE `customer_search` (
  `customer_search_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` tinyint(1) NOT NULL,
  `description` tinyint(1) NOT NULL,
  `products` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `customer_search`
--

TRUNCATE TABLE `customer_search`;
-- --------------------------------------------------------

--
-- Table structure for table `customer_shipping_address`
--

DROP TABLE IF EXISTS `customer_shipping_address`;
CREATE TABLE `customer_shipping_address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_name` varchar(100) DEFAULT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `address_1` varchar(128) NOT NULL,
  `state_id` int(11) DEFAULT 0,
  `district_id` int(11) DEFAULT 0,
  `postcode` varchar(50) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `is_default` int(11) DEFAULT 0,
  `longitude` varchar(15) DEFAULT NULL,
  `latitude` varchar(15) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `customer_shipping_address`
--

TRUNCATE TABLE `customer_shipping_address`;
-- --------------------------------------------------------

--
-- Table structure for table `customer_transaction_history`
--

DROP TABLE IF EXISTS `customer_transaction_history`;
CREATE TABLE `customer_transaction_history` (
  `customer_transaction_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL COMMENT 'for membership order, withdraw request, add money etc',
  `description` text NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL,
  `transaction_type` varchar(200) DEFAULT 'CREDIT',
  `payment_method` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `payment_for` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `customer_transaction_history`
--

TRUNCATE TABLE `customer_transaction_history`;
-- --------------------------------------------------------

--
-- Table structure for table `customer_wishlist`
--

DROP TABLE IF EXISTS `customer_wishlist`;
CREATE TABLE `customer_wishlist` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `customer_wishlist`
--

TRUNCATE TABLE `customer_wishlist`;
-- --------------------------------------------------------

--
-- Table structure for table `domianslist`
--

DROP TABLE IF EXISTS `domianslist`;
CREATE TABLE `domianslist` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `domianslist`
--

TRUNCATE TABLE `domianslist`;
--
-- Dumping data for table `domianslist`
--

INSERT INTO `domianslist` (`id`, `name`) VALUES
(1, 'bondbeyond.in'),
(2, 'bondbeyond.com'),
(3, 'bondbeyond.ae');

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

DROP TABLE IF EXISTS `login_credentials`;
CREATE TABLE `login_credentials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'UUID',
  `uuid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` enum('S','A','EMP','DR') COLLATE utf8_unicode_ci DEFAULT 'A' COMMENT 'Type OF users',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passphrase` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_status` enum('Active','Inactive','Deleted') COLLATE utf8_unicode_ci DEFAULT 'Active' COMMENT 'A-Active, I-Inactive',
  `delete_status` int(11) DEFAULT 0,
  `unique_logincode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_sent` int(11) DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `login_code` varchar(222) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `login_credentials`
--

TRUNCATE TABLE `login_credentials`;
--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`id`, `user_id`, `uuid`, `user_type`, `username`, `first_name`, `last_name`, `passphrase`, `user_status`, `delete_status`, `unique_logincode`, `time_sent`, `ip_address`, `login_time`, `login_code`) VALUES
(1, 1, '2ee14882-6e0b-4cc0-be4c-b011b9f23873', 'S', 'admin@gmail.com', 'admin', 'admin', 'admin', 'Active', 0, 'v6.ud', 1665889967, '127.0.0.1', '2022-10-16 10:12:47', NULL),
(6, 17, '0bf84246-e6db-4234-83b4-5467c5e64028', 'EMP', 'test@test.com', 'test', 'test', '123456789', 'Active', 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials_front`
--

DROP TABLE IF EXISTS `login_credentials_front`;
CREATE TABLE `login_credentials_front` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'auto increement id of respected tables',
  `uuid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` enum('CUST','DRI','SEC') COLLATE utf8_unicode_ci DEFAULT 'CUST' COMMENT 'Type OF users, CUST:customer,DRI:Driver,SEC:Security',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `passphrase` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `is_login` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `login_credentials_front`
--

TRUNCATE TABLE `login_credentials_front`;
-- --------------------------------------------------------

--
-- Table structure for table `master_banner`
--

DROP TABLE IF EXISTS `master_banner`;
CREATE TABLE `master_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image_name` varchar(250) NOT NULL,
  `status` enum('Active','Inactive','Delete') DEFAULT 'Active',
  `added_date` datetime DEFAULT NULL,
  `added_by_userid` int(11) DEFAULT 0,
  `edit_date` datetime DEFAULT NULL,
  `edit_by_userid` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `master_banner`
--

TRUNCATE TABLE `master_banner`;
-- --------------------------------------------------------

--
-- Table structure for table `master_city`
--

DROP TABLE IF EXISTS `master_city`;
CREATE TABLE `master_city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` enum('Active','Inactive','Delete') NOT NULL DEFAULT 'Active',
  `added_date` datetime DEFAULT NULL,
  `added_by_userid` int(11) DEFAULT 0,
  `edit_date` datetime DEFAULT NULL,
  `edit_by_userid` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `master_city`
--

TRUNCATE TABLE `master_city`;
--
-- Dumping data for table `master_city`
--

INSERT INTO `master_city` (`id`, `name`, `status`, `added_date`, `added_by_userid`, `edit_date`, `edit_by_userid`) VALUES
(1, 'City1', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(2, 'City2', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_district`
--

DROP TABLE IF EXISTS `master_district`;
CREATE TABLE `master_district` (
  `id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT 0,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `zone_id` int(11) DEFAULT 0,
  `status` enum('Active','Inactive','Delete') NOT NULL DEFAULT 'Active',
  `added_date` datetime DEFAULT NULL,
  `added_by_userid` int(11) DEFAULT 0,
  `edit_date` datetime DEFAULT NULL,
  `edit_by_userid` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `master_district`
--

TRUNCATE TABLE `master_district`;
--
-- Dumping data for table `master_district`
--

INSERT INTO `master_district` (`id`, `state_id`, `name`, `name_en`, `zone_id`, `status`, `added_date`, `added_by_userid`, `edit_date`, `edit_by_userid`) VALUES
(15, 1, 'ເມືອງຈັນທະບູລີ', 'Chanthabuly District (Urban Vientiane)', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(16, 1, 'ເມືອງສີໂຄດຕະບອງ', 'Sikhottabong District (Urban Vientiane)', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(17, 1, 'ເມືອງໄຊເສດຖາ', 'Xaysettha District (Urban Vientiane)', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(18, 1, 'ເມືອງສີສັດຕະນາກ', 'Sisattanak District (Urban Vientiane)', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(19, 1, 'ເມືອງນາຊາຍທອງ', 'Naxaithong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(20, 1, 'ເມືອງໄຊທານີ', 'Xaythany District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(21, 1, 'ເມືອງຫາດຊາຍຟອງ', 'Hadxayfong District (Urban Vientiane)', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(22, 1, 'ເມືອງສັງທອງ', 'Sangthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(23, 1, 'ເມືອງປາກງື່ມ', 'Parkngum District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(24, 2, 'ເມືອງຜົ້ງສາລີ', 'Phongsaly District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(25, 2, 'ເມືອງໃໝ່', 'May District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(26, 2, 'ເມືອງຂວາ', 'Khoua District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(27, 2, 'ເມືອງສຳພັນ', 'Samphanh District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(28, 2, 'ເມືອງບຸນເໜືອ', 'Boun Neua District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(29, 2, 'ເມືອງຍອດອູ', 'Yot Ou District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(30, 2, 'ເມືອງບຸນໃຕ້', 'Boun Tay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(32, 3, 'ເມືອງສີງ', 'Sing District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(33, 3, 'ເມືອງລອງ', 'Long District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(34, 4, 'ເມືອງໄຊ', 'Xay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(35, 4, 'ເມືອງຫຼາ', 'La District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(36, 4, 'ເມືອງນາໝໍ້', 'Namo District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(37, 4, 'ເມືອງງາ', 'Nga District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(38, 4, 'ເມືອງແບ່ງ', 'Beng District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(39, 4, 'ເມືອງຮຸນ', 'Houne District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(40, 4, 'ເມືອງປາກແບ່ງ', 'Pak Beng District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(41, 5, 'ເມືອງຫ້ວຍຊາຍ', 'Houay Xay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(42, 5, 'ເມືອງຕົ້ນເຜິ້ງ', 'Ton Pheung District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(43, 5, 'ເມືອງເມິງ', 'Meung District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(44, 5, 'ເມືອງຜາອຸດົມ', 'Pha Oudom District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(45, 5, 'ເມືອງປາກທາ', 'Pak Tha District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(46, 6, 'ເມືອງຫຼວງພະບາງ', 'Luang Prabang District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(47, 6, 'ເມືອງຊຽງເງິນ', 'Xiengngeun District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(48, 6, 'ເມືອງນານ', 'Nan District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(49, 6, 'ເມືອງປາກອູ', 'Pak Ou District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(50, 6, 'ເມືອງນ້ຳບາກ', 'Nam Bak District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(51, 6, 'ເມືອງງອຍ', 'Ngoy District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(52, 6, 'ເມືອງປາກແຊງ', 'Pak Seng District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(53, 6, 'ເມືອງໂພນໄຊ', 'Phonxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(54, 6, 'ເມືອງຈອມເພັດ', 'Chomphet District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(55, 6, 'ເມືອງວຽງຄຳ', 'Viengkham District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(56, 6, 'ເມືອງພູຄູນ', 'Phoukhoune District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(57, 6, 'ເມືອງໂພນທອງ', 'Phonthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(59, 7, 'ເມືອງຊຽງຄໍ້', 'Xiengkho District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(60, 7, 'ເມືອງຊຳເໜືອ', 'Xam Neua District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(61, 3, 'ເມືອງຫຼວງນໍ້າທາ', 'Namtha District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(62, 3, 'ເມືອງວຽງພູຄາ', 'Viengphoukha District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(63, 3, 'ເມືອງນາແລ', 'Nalae District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(64, 7, 'ເມືອງວຽງທອງ', 'Viengthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(65, 7, 'ເມືອງວຽງໄຊ', 'Viengxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(66, 7, 'ເມືອງຫົວເມືອງ', 'Houameuang District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(67, 7, 'ເມືອງຊຳໃຕ້', 'Samtay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(68, 7, 'ເມືອງສົບເບົາ', 'Sop Bao District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(69, 7, 'ເມືອງແອດ', 'Et District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(70, 7, 'ເມືອງກອັນ', 'Kone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(71, 7, 'ເມືອງຊ່ອນ', 'Xon District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(72, 8, 'ເມືອງໄຊຍະບູລີ', 'Sainyabuli District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(73, 8, 'ເມືອງຄອບ', 'Khop District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(74, 8, 'ເມືອງຫົງສາ', 'Hongsa District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(75, 8, 'ເມືອງເງິນ', 'Ngeun District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(76, 8, 'ເມືອງຊຽງຮ່ອນ', 'Xienghone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(77, 8, 'ເມືອງພຽງ', 'Phiang District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(78, 8, 'ເມືອງປາກລາຍ', 'Parklai District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(79, 8, 'ເມືອງແກ່ນທ້າວ', 'Kenethao District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(80, 8, 'ເມືອງບໍ່ແຕນ', 'Botene District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(81, 8, 'ເມືອງທົ່ງມີໄຊ', 'Thongmyxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(82, 8, 'ເມືອງໄຊສະຖານ', 'Xaisathan District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(83, 9, 'ເມືອງແປກ', 'Pek District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(84, 9, 'ເມືອງຄຳ', 'Kham District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(85, 9, 'ເມືອງໜອງແຮດ', 'Nong Het District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(86, 9, 'ເມືອງຄູນ', 'Khoune District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(87, 9, 'ເມືອງໝອກໃໝ່', 'Mok May District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(88, 9, 'ເມືອງພູກູດ', 'Phou Kout District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(89, 9, 'ເມືອງຜາໄຊ', 'Phaxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(90, 10, 'ເມືອງໂພນໂຮງ', 'Phonhong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(91, 10, 'ເມືອງທຸລະຄົມ', 'Thoulakhom District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(92, 10, 'ເມືອງແກ້ວອຸດົມ', 'Keo Oudom District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(93, 10, 'ເມືອງກາສີ', 'Kasy District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(94, 10, 'ເມືອງວັງວຽງ', 'Vangvieng District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(95, 10, 'ເມືອງເຟືອງ', 'Feuang District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(96, 10, 'ເມືອງຊະນະຄາມ', 'Xanakharm District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(97, 10, 'ເມືອງແມດ', 'Mad District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(98, 10, 'ເມືອງວຽງຄໍາ', 'Viengkham District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(99, 10, 'ເມືອງຫີນເຫີບ', 'Hinhurp District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(100, 10, 'ເມືອງໝື່ນ', 'Meun District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(101, 11, 'ເມືອງປາກຊັນ', 'Paksane District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(102, 11, 'ເມືອງທ່າພະບາດ', 'Thaphabat District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(103, 11, 'ເມືອງປາກກະດິງ', 'Pakkading District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(104, 11, 'ເມືອງບໍລິຄັນ', 'Borikhane District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(105, 11, 'ເມືອງຄຳເກີດ', 'Khamkeut District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(106, 11, 'ເມືອງວຽງທອງ', 'Viengthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(107, 12, 'ເມືອງທ່າແຂກ', 'Thakhek District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(108, 12, 'ເມືອງມະຫາໄຊ', 'Mahaxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(109, 12, 'ເມືອງໜອງບົກ', 'Nong Bok District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(110, 12, 'ເມືອງຫີນບູນ', 'Hineboune District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(111, 12, 'ເມືອງຍົມມະລາດ', 'Yommalath District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(112, 12, 'ເມືອງບົວລະພາ', 'Boualapha District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(113, 12, 'ເມືອງນາກາຍ', 'Nakai District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(114, 12, 'ເມືອງເຊບັ້ງໄຟ', 'Sebangfay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(115, 12, 'ເມືອງໄຊບົວທອງ', 'Saybouathong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(116, 12, 'ເມືອງຄູນຄຳ', 'Kounkham District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(117, 13, 'ເມືອງໄກສອນ ພົມວິຫານ', 'Kaysone Phomvihane District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(118, 13, 'ເມືອງອຸທຸມພອນ', 'Outhoumphone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(119, 13, 'ເມືອງອາດສະພັງທອງ', 'Atsaphangthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(120, 13, 'ເມືອງພີນ', 'Phine District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(121, 13, 'ເມືອງເຊໂປນ', 'Sepon District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(122, 13, 'ເມືອງນອງ', 'Nong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(123, 13, 'ເມືອງທ່າປາງທອງ', 'Thapangthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(124, 13, 'ເມືອງສອງຄອນ', 'Songkhone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(125, 13, 'ເມືອງຈຳພອນ', 'Champhone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(126, 13, 'ເມືອງຊົນນະບູລີ', 'Xonaboury District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(127, 13, 'ເມືອງໄຊບູລີ', 'Xayboury District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(128, 13, 'ເມືອງວີລະບຸລີ', 'Vilaboury District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(129, 13, 'ເມືອງອາດສະພອນ', 'Atsaphone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(130, 13, 'ເມືອງໄຊພູທອງ', 'Xayphouthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(131, 13, 'ເມືອງພະລານໄຊ', 'Phalanxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(132, 14, 'ເມືອງສາລະວັນ', 'Saravane District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(133, 14, 'ເມືອງຕະໂອ້ຍ', 'Ta Oy District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(134, 14, 'ເມືອງຕຸ້ມລານ', 'Toumlane District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(135, 14, 'ເມືອງລະຄອນເພັງ', 'Lakhonepheng District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(136, 14, 'ເມືອງວາປີ', 'Vapy District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(137, 14, 'ເມືອງຄົງເຊໂດນ', 'Khongsedone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(138, 14, 'ເມືອງເລົ່າງາມ', 'Lao Ngam District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(139, 14, 'ເມືອງສະມ້ວຍ', 'Samouay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(140, 18, 'ເມືອງລະມາມ', 'Lamam District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(141, 18, 'ເມືອງກະເລິມ', 'Kaleum District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(142, 18, 'ເມືອງດາກຈຶງ', 'Dak Cheung District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(143, 18, 'ເມືອງທ່າແຕງ', 'Thateng District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(144, 15, 'ເມືອງປາກເຊ', 'Pakse District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(145, 15, 'ເມືອງຊະນະສົມບູນ', 'Sanasomboun District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(146, 15, 'ເມືອງບາຈຽງຈະເລີນສຸກ', 'Bachiengchaleunsouk District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(147, 15, 'ເມືອງປາກຊ່ອງ', 'Paksong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(148, 15, 'ເມືອງປະທຸມພອນ', 'Pathouphone District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(149, 15, 'ເມືອງໂພນທອງ', 'Phonthong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(150, 15, 'ເມືອງຈຳປາສັກ', 'Champasack District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(151, 15, 'ເມືອງສຸຂຸມາ', 'Soukhoumma District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(152, 15, 'ເມືອງມູນລະປະໂມກ', 'Mounlapamok District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(153, 15, 'ເມືອງໂຂງ', 'Khong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(154, 16, 'ເມືອງໄຊເຊດຖາ', 'Saysettha District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(155, 16, 'ເມືອງສາມັກຄີໄຊ', 'Samakkhixay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(156, 16, 'ເມືອງສະໜາມໄຊ', 'Sanamxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(157, 16, 'ເມືອງສານໄຊ', 'Sanxay District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(158, 16, 'ເມືອງພູວົງ', 'Phouvong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(159, 17, 'ເມືອງອະນຸວົງ', 'Anouvong District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(160, 17, 'ເມືອງລ້ອງແຈ້ງ', 'Longchaeng District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(161, 17, 'ເມືອງລ້ອງຊານ', 'Longxan District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(162, 17, 'ເມືອງເມືອງໝື່ນ', 'Mueang Muen District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1),
(163, 17, 'ເມືອງທ່າໂທມ', 'Thathom District', 0, 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_order_status`
--

DROP TABLE IF EXISTS `master_order_status`;
CREATE TABLE `master_order_status` (
  `order_status_id` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `master_order_status`
--

TRUNCATE TABLE `master_order_status`;
--
-- Dumping data for table `master_order_status`
--

INSERT INTO `master_order_status` (`order_status_id`, `name`, `status`, `sort_order`) VALUES
(3, 'Product shipped', 'Active', 3),
(4, 'Order Complete', 'Active', 4),
(1, 'New Order', 'Active', 1),
(5, 'Order Cancelled', 'Active', 5),
(99, 'Order Delete', 'Active', 6),
(2, 'Confirmed Orders', 'Active', 2);

-- --------------------------------------------------------

--
-- Table structure for table `master_province`
--

DROP TABLE IF EXISTS `master_province`;
CREATE TABLE `master_province` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `name_en` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive','Delete') NOT NULL DEFAULT 'Active',
  `added_date` datetime DEFAULT NULL,
  `added_by_userid` int(11) DEFAULT 0,
  `edit_date` datetime DEFAULT NULL,
  `edit_by_userid` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `master_province`
--

TRUNCATE TABLE `master_province`;
--
-- Dumping data for table `master_province`
--

INSERT INTO `master_province` (`id`, `name`, `name_en`, `status`, `added_date`, `added_by_userid`, `edit_date`, `edit_by_userid`) VALUES
(1, 'ນະຄອນຫລວງວຽງຈັນ', 'Vientiane Prefecture', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(2, 'ຜົ້ງສາລີ', 'Phongsaly Province', 'Inactive', '2020-04-22 00:00:00', 1, '2021-02-15 00:00:00', 1),
(3, 'ຫລວງນ້ຳທາ', 'Luang Namtha Province', 'Inactive', '2020-04-22 00:00:00', 1, '2021-06-17 00:00:00', 1),
(4, 'ອຸດົມໂຊ', 'Oudomxay Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-06-17 00:00:00', 1),
(5, 'ບໍ່ແກ້ວ', 'Bokeo Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-06-17 00:00:00', 1),
(6, 'ຫລວງພະບາງ', 'Luang Prabang Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-06-17 00:00:00', 1),
(7, 'ຫົວພັນ', 'Houaphanh Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-06-17 00:00:00', 1),
(8, 'ໄຊຍະບູລີ', 'Sainyabuli Province', 'Active', '2020-05-28 00:00:00', 1, '2020-05-28 00:00:00', 1),
(9, 'ຊຽງຂວາງ', 'Xiangkhouang Province', 'Active', '2020-05-28 00:00:00', 1, '2020-05-28 00:00:00', 1),
(10, 'ວຽງຈັນ', 'Vientiane Province', 'Active', '2020-05-28 00:00:00', 1, '2020-05-28 00:00:00', 1),
(11, 'ບໍລິຄຳໄຊ', 'Bolikhamsai Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-06-17 00:00:00', 1),
(12, 'ຄຳມ່ວນ', 'Khammouane Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-06-17 00:00:00', 1),
(13, 'ສະຫວັນນະເຂດ', 'Savannakhet Province', 'Active', '2020-05-28 00:00:00', 1, '2020-05-28 00:00:00', 1),
(14, 'ສາລະວັນ', 'Salavan Province', 'Active', '2020-05-28 00:00:00', 1, '2020-05-28 00:00:00', 1),
(15, 'ຈຳປາສັກ', 'Champasak Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-06-17 00:00:00', 1),
(16, 'ອັດຕະປື', 'Attapeu Province', 'Inactive', '2020-05-28 00:00:00', 1, '2021-03-16 00:00:00', 1),
(17, 'ໄຊສົມບູນ', 'Xaisomboun Province', 'Active', '2020-05-28 00:00:00', 1, '2020-05-28 00:00:00', 1),
(18, 'ເຊກອງ', 'Sekong Province', 'Active', '2020-06-05 00:00:00', 1, '2020-06-05 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_zone`
--

DROP TABLE IF EXISTS `master_zone`;
CREATE TABLE `master_zone` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT 0,
  `name` varchar(100) NOT NULL,
  `status` enum('Active','Inactive','Delete') NOT NULL DEFAULT 'Active',
  `added_date` datetime DEFAULT NULL,
  `added_by_userid` int(11) DEFAULT 0,
  `edit_date` datetime DEFAULT NULL,
  `edit_by_userid` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `master_zone`
--

TRUNCATE TABLE `master_zone`;
--
-- Dumping data for table `master_zone`
--

INSERT INTO `master_zone` (`id`, `city_id`, `name`, `status`, `added_date`, `added_by_userid`, `edit_date`, `edit_by_userid`) VALUES
(1, 1, 'C1_zone2', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(2, 1, 'C1_zone3', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(3, 1, 'C1_zone4', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(4, 1, 'C1_zone5', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(5, 1, 'C1_zone6', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(6, 1, 'C1_zone7', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(7, 1, 'C1_zone8', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(8, 1, 'C1_zone9', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(9, 1, 'C1_zone10', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(10, 1, 'city10', 'Delete', '2020-04-22 00:00:00', 1, '2020-04-30 10:48:05', 1),
(11, 1, 'C1_zone1', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(12, 2, 'C2_zone1', 'Active', '2020-04-22 00:00:00', 1, '2020-05-12 00:00:00', 1),
(13, 2, 'C2_zone2', 'Active', '2020-05-12 00:00:00', 1, '2020-05-12 00:00:00', 1),
(14, 2, 'C2_zone3', 'Active', '2020-05-12 00:00:00', 1, '2020-05-12 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_master`
--

DROP TABLE IF EXISTS `media_master`;
CREATE TABLE `media_master` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive','Delete') DEFAULT 'Active',
  `date_added` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `media_master`
--

TRUNCATE TABLE `media_master`;
--
-- Dumping data for table `media_master`
--

INSERT INTO `media_master` (`id`, `title`, `description`, `banner_image`, `status`, `date_added`) VALUES
(5, 'Banner 12', 'this is banner description', '0IFLoO1gES', 'Active', '2020-06-05 00:00:00'),
(6, 'Banner 2', 'this is banner description', '05ogVIKY6S', 'Active', '2020-06-05 00:00:00'),
(7, 'this is test banner', 'this is description', NULL, 'Delete', '2020-06-05 00:00:00'),
(8, 'this is test banner', 'this is desc', NULL, 'Delete', '2020-04-23 00:00:00'),
(9, 'Banner 2', 'desc 123', '0exbHAPIjg', 'Active', '2020-04-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `m_address`
--

DROP TABLE IF EXISTS `m_address`;
CREATE TABLE `m_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `company` varchar(60) NOT NULL,
  `address_1` varchar(128) NOT NULL,
  `address_2` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 0,
  `zone_id` int(11) NOT NULL DEFAULT 0,
  `custom_field` text NOT NULL,
  `default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_address`
--

TRUNCATE TABLE `m_address`;
--
-- Dumping data for table `m_address`
--

INSERT INTO `m_address` (`address_id`, `customer_id`, `firstname`, `lastname`, `company`, `address_1`, `address_2`, `city`, `postcode`, `country_id`, `zone_id`, `custom_field`, `default`) VALUES
(1, 1, 'kishore', 'mishra', '', 'Nashik nashk', '', 'nashik', '422009', 222, 3513, '\"\"', 1),
(2, 1, 'vinod', 'mishra', '', 'pune', '', 'pune', '422008', 99, 1493, '\"\"', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_country`
--

DROP TABLE IF EXISTS `m_country`;
CREATE TABLE `m_country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  `address_format_id` int(11) NOT NULL,
  `postcode_required` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_country`
--

TRUNCATE TABLE `m_country`;
--
-- Dumping data for table `m_country`
--

INSERT INTO `m_country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format_id`, `postcode_required`, `status`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 1, 0, 1),
(2, 'Albania', 'AL', 'ALB', 1, 0, 1),
(3, 'Algeria', 'DZ', 'DZA', 1, 0, 1),
(4, 'American Samoa', 'AS', 'ASM', 1, 0, 1),
(5, 'Andorra', 'AD', 'AND', 1, 0, 1),
(6, 'Angola', 'AO', 'AGO', 1, 0, 1),
(7, 'Anguilla', 'AI', 'AIA', 1, 0, 1),
(8, 'Antarctica', 'AQ', 'ATA', 1, 0, 1),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 1, 0, 1),
(10, 'Argentina', 'AR', 'ARG', 1, 0, 1),
(11, 'Armenia', 'AM', 'ARM', 1, 0, 1),
(12, 'Aruba', 'AW', 'ABW', 1, 0, 1),
(13, 'Australia', 'AU', 'AUS', 1, 0, 1),
(14, 'Austria', 'AT', 'AUT', 1, 0, 1),
(15, 'Azerbaijan', 'AZ', 'AZE', 1, 0, 1),
(16, 'Bahamas', 'BS', 'BHS', 1, 0, 1),
(17, 'Bahrain', 'BH', 'BHR', 1, 0, 1),
(18, 'Bangladesh', 'BD', 'BGD', 1, 0, 1),
(19, 'Barbados', 'BB', 'BRB', 1, 0, 1),
(20, 'Belarus', 'BY', 'BLR', 1, 0, 1),
(21, 'Belgium', 'BE', 'BEL', 1, 0, 1),
(22, 'Belize', 'BZ', 'BLZ', 1, 0, 1),
(23, 'Benin', 'BJ', 'BEN', 1, 0, 1),
(24, 'Bermuda', 'BM', 'BMU', 1, 0, 1),
(25, 'Bhutan', 'BT', 'BTN', 1, 0, 1),
(26, 'Bolivia', 'BO', 'BOL', 1, 0, 1),
(27, 'Bosnia and Herzegovina', 'BA', 'BIH', 1, 0, 1),
(28, 'Botswana', 'BW', 'BWA', 1, 0, 1),
(29, 'Bouvet Island', 'BV', 'BVT', 1, 0, 1),
(30, 'Brazil', 'BR', 'BRA', 1, 0, 1),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 1, 0, 1),
(32, 'Brunei Darussalam', 'BN', 'BRN', 1, 0, 1),
(33, 'Bulgaria', 'BG', 'BGR', 1, 0, 1),
(34, 'Burkina Faso', 'BF', 'BFA', 1, 0, 1),
(35, 'Burundi', 'BI', 'BDI', 1, 0, 1),
(36, 'Cambodia', 'KH', 'KHM', 1, 0, 1),
(37, 'Cameroon', 'CM', 'CMR', 1, 0, 1),
(38, 'Canada', 'CA', 'CAN', 1, 0, 1),
(39, 'Cape Verde', 'CV', 'CPV', 1, 0, 1),
(40, 'Cayman Islands', 'KY', 'CYM', 1, 0, 1),
(41, 'Central African Republic', 'CF', 'CAF', 1, 0, 1),
(42, 'Chad', 'TD', 'TCD', 1, 0, 1),
(43, 'Chile', 'CL', 'CHL', 1, 0, 1),
(44, 'China', 'CN', 'CHN', 1, 0, 1),
(45, 'Christmas Island', 'CX', 'CXR', 1, 0, 1),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 1, 0, 1),
(47, 'Colombia', 'CO', 'COL', 1, 0, 1),
(48, 'Comoros', 'KM', 'COM', 1, 0, 1),
(49, 'Congo', 'CG', 'COG', 1, 0, 1),
(50, 'Cook Islands', 'CK', 'COK', 1, 0, 1),
(51, 'Costa Rica', 'CR', 'CRI', 1, 0, 1),
(52, 'Cote D\'Ivoire', 'CI', 'CIV', 1, 0, 1),
(53, 'Croatia', 'HR', 'HRV', 1, 0, 1),
(54, 'Cuba', 'CU', 'CUB', 1, 0, 1),
(55, 'Cyprus', 'CY', 'CYP', 1, 0, 1),
(56, 'Czech Republic', 'CZ', 'CZE', 1, 0, 1),
(57, 'Denmark', 'DK', 'DNK', 1, 0, 1),
(58, 'Djibouti', 'DJ', 'DJI', 1, 0, 1),
(59, 'Dominica', 'DM', 'DMA', 1, 0, 1),
(60, 'Dominican Republic', 'DO', 'DOM', 1, 0, 1),
(61, 'East Timor', 'TL', 'TLS', 1, 0, 1),
(62, 'Ecuador', 'EC', 'ECU', 1, 0, 1),
(63, 'Egypt', 'EG', 'EGY', 1, 0, 1),
(64, 'El Salvador', 'SV', 'SLV', 1, 0, 1),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 1, 0, 1),
(66, 'Eritrea', 'ER', 'ERI', 1, 0, 1),
(67, 'Estonia', 'EE', 'EST', 1, 0, 1),
(68, 'Ethiopia', 'ET', 'ETH', 1, 0, 1),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 1, 0, 1),
(70, 'Faroe Islands', 'FO', 'FRO', 1, 0, 1),
(71, 'Fiji', 'FJ', 'FJI', 1, 0, 1),
(72, 'Finland', 'FI', 'FIN', 1, 0, 1),
(74, 'France, Metropolitan', 'FR', 'FRA', 1, 1, 1),
(75, 'French Guiana', 'GF', 'GUF', 1, 0, 1),
(76, 'French Polynesia', 'PF', 'PYF', 1, 0, 1),
(77, 'French Southern Territories', 'TF', 'ATF', 1, 0, 1),
(78, 'Gabon', 'GA', 'GAB', 1, 0, 1),
(79, 'Gambia', 'GM', 'GMB', 1, 0, 1),
(80, 'Georgia', 'GE', 'GEO', 1, 0, 1),
(81, 'Germany', 'DE', 'DEU', 1, 1, 1),
(82, 'Ghana', 'GH', 'GHA', 1, 0, 1),
(83, 'Gibraltar', 'GI', 'GIB', 1, 0, 1),
(84, 'Greece', 'GR', 'GRC', 1, 0, 1),
(85, 'Greenland', 'GL', 'GRL', 1, 0, 1),
(86, 'Grenada', 'GD', 'GRD', 1, 0, 1),
(87, 'Guadeloupe', 'GP', 'GLP', 1, 0, 1),
(88, 'Guam', 'GU', 'GUM', 1, 0, 1),
(89, 'Guatemala', 'GT', 'GTM', 1, 0, 1),
(90, 'Guinea', 'GN', 'GIN', 1, 0, 1),
(91, 'Guinea-Bissau', 'GW', 'GNB', 1, 0, 1),
(92, 'Guyana', 'GY', 'GUY', 1, 0, 1),
(93, 'Haiti', 'HT', 'HTI', 1, 0, 1),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', 1, 0, 1),
(95, 'Honduras', 'HN', 'HND', 1, 0, 1),
(96, 'Hong Kong', 'HK', 'HKG', 1, 0, 1),
(97, 'Hungary', 'HU', 'HUN', 1, 0, 1),
(98, 'Iceland', 'IS', 'ISL', 1, 0, 1),
(99, 'India', 'IN', 'IND', 1, 0, 1),
(100, 'Indonesia', 'ID', 'IDN', 1, 0, 1),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 1, 0, 1),
(102, 'Iraq', 'IQ', 'IRQ', 1, 0, 1),
(103, 'Ireland', 'IE', 'IRL', 1, 0, 1),
(104, 'Israel', 'IL', 'ISR', 1, 0, 1),
(105, 'Italy', 'IT', 'ITA', 1, 0, 1),
(106, 'Jamaica', 'JM', 'JAM', 1, 0, 1),
(107, 'Japan', 'JP', 'JPN', 1, 0, 1),
(108, 'Jordan', 'JO', 'JOR', 1, 0, 1),
(109, 'Kazakhstan', 'KZ', 'KAZ', 1, 0, 1),
(110, 'Kenya', 'KE', 'KEN', 1, 0, 1),
(111, 'Kiribati', 'KI', 'KIR', 1, 0, 1),
(112, 'North Korea', 'KP', 'PRK', 1, 0, 1),
(113, 'South Korea', 'KR', 'KOR', 1, 0, 1),
(114, 'Kuwait', 'KW', 'KWT', 1, 0, 1),
(115, 'Kyrgyzstan', 'KG', 'KGZ', 1, 0, 1),
(116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', 1, 0, 1),
(117, 'Latvia', 'LV', 'LVA', 1, 0, 1),
(118, 'Lebanon', 'LB', 'LBN', 1, 0, 1),
(119, 'Lesotho', 'LS', 'LSO', 1, 0, 1),
(120, 'Liberia', 'LR', 'LBR', 1, 0, 1),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 1, 0, 1),
(122, 'Liechtenstein', 'LI', 'LIE', 1, 0, 1),
(123, 'Lithuania', 'LT', 'LTU', 1, 0, 1),
(124, 'Luxembourg', 'LU', 'LUX', 1, 0, 1),
(125, 'Macau', 'MO', 'MAC', 1, 0, 1),
(126, 'FYROM', 'MK', 'MKD', 1, 0, 1),
(127, 'Madagascar', 'MG', 'MDG', 1, 0, 1),
(128, 'Malawi', 'MW', 'MWI', 1, 0, 1),
(129, 'Malaysia', 'MY', 'MYS', 1, 0, 1),
(130, 'Maldives', 'MV', 'MDV', 1, 0, 1),
(131, 'Mali', 'ML', 'MLI', 1, 0, 1),
(132, 'Malta', 'MT', 'MLT', 1, 0, 1),
(133, 'Marshall Islands', 'MH', 'MHL', 1, 0, 1),
(134, 'Martinique', 'MQ', 'MTQ', 1, 0, 1),
(135, 'Mauritania', 'MR', 'MRT', 1, 0, 1),
(136, 'Mauritius', 'MU', 'MUS', 1, 0, 1),
(137, 'Mayotte', 'YT', 'MYT', 1, 0, 1),
(138, 'Mexico', 'MX', 'MEX', 1, 0, 1),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', 1, 0, 1),
(140, 'Moldova, Republic of', 'MD', 'MDA', 1, 0, 1),
(141, 'Monaco', 'MC', 'MCO', 1, 0, 1),
(142, 'Mongolia', 'MN', 'MNG', 1, 0, 1),
(143, 'Montserrat', 'MS', 'MSR', 1, 0, 1),
(144, 'Morocco', 'MA', 'MAR', 1, 0, 1),
(145, 'Mozambique', 'MZ', 'MOZ', 1, 0, 1),
(146, 'Myanmar', 'MM', 'MMR', 1, 0, 1),
(147, 'Namibia', 'NA', 'NAM', 1, 0, 1),
(148, 'Nauru', 'NR', 'NRU', 1, 0, 1),
(149, 'Nepal', 'NP', 'NPL', 1, 0, 1),
(150, 'Netherlands', 'NL', 'NLD', 1, 0, 1),
(151, 'Netherlands Antilles', 'AN', 'ANT', 1, 0, 1),
(152, 'New Caledonia', 'NC', 'NCL', 1, 0, 1),
(153, 'New Zealand', 'NZ', 'NZL', 1, 0, 1),
(154, 'Nicaragua', 'NI', 'NIC', 1, 0, 1),
(155, 'Niger', 'NE', 'NER', 1, 0, 1),
(156, 'Nigeria', 'NG', 'NGA', 1, 0, 1),
(157, 'Niue', 'NU', 'NIU', 1, 0, 1),
(158, 'Norfolk Island', 'NF', 'NFK', 1, 0, 1),
(159, 'Northern Mariana Islands', 'MP', 'MNP', 1, 0, 1),
(160, 'Norway', 'NO', 'NOR', 1, 0, 1),
(161, 'Oman', 'OM', 'OMN', 1, 0, 1),
(162, 'Pakistan', 'PK', 'PAK', 1, 0, 1),
(163, 'Palau', 'PW', 'PLW', 1, 0, 1),
(164, 'Panama', 'PA', 'PAN', 1, 0, 1),
(165, 'Papua New Guinea', 'PG', 'PNG', 1, 0, 1),
(166, 'Paraguay', 'PY', 'PRY', 1, 0, 1),
(167, 'Peru', 'PE', 'PER', 1, 0, 1),
(168, 'Philippines', 'PH', 'PHL', 1, 0, 1),
(169, 'Pitcairn', 'PN', 'PCN', 1, 0, 1),
(170, 'Poland', 'PL', 'POL', 1, 0, 1),
(171, 'Portugal', 'PT', 'PRT', 1, 0, 1),
(172, 'Puerto Rico', 'PR', 'PRI', 1, 0, 1),
(173, 'Qatar', 'QA', 'QAT', 1, 0, 1),
(174, 'Reunion', 'RE', 'REU', 1, 0, 1),
(175, 'România', 'RO', 'ROM', 1, 0, 1),
(176, 'Russian Federation', 'RU', 'RUS', 1, 0, 1),
(177, 'Rwanda', 'RW', 'RWA', 1, 0, 1),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', 1, 0, 1),
(179, 'Saint Lucia', 'LC', 'LCA', 1, 0, 1),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1, 0, 1),
(181, 'Samoa', 'WS', 'WSM', 1, 0, 1),
(182, 'San Marino', 'SM', 'SMR', 1, 0, 1),
(183, 'Sao Tome and Principe', 'ST', 'STP', 1, 0, 1),
(184, 'Saudi Arabia', 'SA', 'SAU', 1, 0, 1),
(185, 'Senegal', 'SN', 'SEN', 1, 0, 1),
(186, 'Seychelles', 'SC', 'SYC', 1, 0, 1),
(187, 'Sierra Leone', 'SL', 'SLE', 1, 0, 1),
(188, 'Singapore', 'SG', 'SGP', 1, 0, 1),
(189, 'Slovak Republic', 'SK', 'SVK', 1, 0, 1),
(190, 'Slovenia', 'SI', 'SVN', 1, 0, 1),
(191, 'Solomon Islands', 'SB', 'SLB', 1, 0, 1),
(192, 'Somalia', 'SO', 'SOM', 1, 0, 1),
(193, 'South Africa', 'ZA', 'ZAF', 1, 0, 1),
(194, 'South Georgia &amp; South Sandwich Islands', 'GS', 'SGS', 1, 0, 1),
(195, 'Spain', 'ES', 'ESP', 1, 0, 1),
(196, 'Sri Lanka', 'LK', 'LKA', 1, 0, 1),
(197, 'St. Helena', 'SH', 'SHN', 1, 0, 1),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', 1, 0, 1),
(199, 'Sudan', 'SD', 'SDN', 1, 0, 1),
(200, 'Suriname', 'SR', 'SUR', 1, 0, 1),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 1, 0, 1),
(202, 'Swaziland', 'SZ', 'SWZ', 1, 0, 1),
(203, 'Sweden', 'SE', 'SWE', 1, 1, 1),
(204, 'Switzerland', 'CH', 'CHE', 1, 0, 1),
(205, 'Syrian Arab Republic', 'SY', 'SYR', 1, 0, 1),
(206, 'Taiwan', 'TW', 'TWN', 1, 0, 1),
(207, 'Tajikistan', 'TJ', 'TJK', 1, 0, 1),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', 1, 0, 1),
(209, 'Thailand', 'TH', 'THA', 1, 0, 1),
(210, 'Togo', 'TG', 'TGO', 1, 0, 1),
(211, 'Tokelau', 'TK', 'TKL', 1, 0, 1),
(212, 'Tonga', 'TO', 'TON', 1, 0, 1),
(213, 'Trinidad and Tobago', 'TT', 'TTO', 1, 0, 1),
(214, 'Tunisia', 'TN', 'TUN', 1, 0, 1),
(215, 'Turkey', 'TR', 'TUR', 1, 0, 1),
(216, 'Turkmenistan', 'TM', 'TKM', 1, 0, 1),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', 1, 0, 1),
(218, 'Tuvalu', 'TV', 'TUV', 1, 0, 1),
(219, 'Uganda', 'UG', 'UGA', 1, 0, 1),
(220, 'Ukraine', 'UA', 'UKR', 1, 0, 1),
(221, 'United Arab Emirates', 'AE', 'ARE', 1, 0, 1),
(222, 'United Kingdom', 'GB', 'GBR', 1, 1, 1),
(223, 'United States', 'US', 'USA', 1, 0, 1),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', 1, 0, 1),
(225, 'Uruguay', 'UY', 'URY', 1, 0, 1),
(226, 'Uzbekistan', 'UZ', 'UZB', 1, 0, 1),
(227, 'Vanuatu', 'VU', 'VUT', 1, 0, 1),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', 1, 0, 1),
(229, 'Venezuela', 'VE', 'VEN', 1, 0, 1),
(230, 'Viet Nam', 'VN', 'VNM', 1, 0, 1),
(231, 'Virgin Islands (British)', 'VG', 'VGB', 1, 0, 1),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1, 0, 1),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', 1, 0, 1),
(234, 'Western Sahara', 'EH', 'ESH', 1, 0, 1),
(235, 'Yemen', 'YE', 'YEM', 1, 0, 1),
(237, 'Democratic Republic of Congo', 'CD', 'COD', 1, 0, 1),
(238, 'Zambia', 'ZM', 'ZMB', 1, 0, 1),
(239, 'Zimbabwe', 'ZW', 'ZWE', 1, 0, 1),
(242, 'Montenegro', 'ME', 'MNE', 1, 0, 1),
(243, 'Serbia', 'RS', 'SRB', 1, 0, 1),
(244, 'Aaland Islands', 'AX', 'ALA', 1, 0, 1),
(245, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', 1, 0, 1),
(246, 'Curacao', 'CW', 'CUW', 1, 0, 1),
(247, 'Palestinian Territory, Occupied', 'PS', 'PSE', 1, 0, 1),
(248, 'South Sudan', 'SS', 'SSD', 1, 0, 1),
(249, 'St. Barthelemy', 'BL', 'BLM', 1, 0, 1),
(250, 'St. Martin (French part)', 'MF', 'MAF', 1, 0, 1),
(251, 'Canary Islands', 'IC', 'ICA', 1, 0, 1),
(252, 'Ascension Island (British)', 'AC', 'ASC', 1, 0, 1),
(253, 'Kosovo, Republic of', 'XK', 'UNK', 1, 0, 1),
(254, 'Isle of Man', 'IM', 'IMN', 1, 0, 1),
(255, 'Tristan da Cunha', 'TA', 'SHN', 1, 0, 1),
(256, 'Guernsey', 'GG', 'GGY', 1, 0, 1),
(257, 'Jersey', 'JE', 'JEY', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

DROP TABLE IF EXISTS `m_customer`;
CREATE TABLE `m_customer` (
  `customer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(40) NOT NULL,
  `status_flag` enum('Active','Inactive','Deleted') NOT NULL,
  `date_added` datetime NOT NULL,
  `uuid` varchar(128) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `profile_pic` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_customer`
--

TRUNCATE TABLE `m_customer`;
--
-- Dumping data for table `m_customer`
--

INSERT INTO `m_customer` (`customer_id`, `store_id`, `firstname`, `lastname`, `email`, `telephone`, `password`, `newsletter`, `ip`, `status_flag`, `date_added`, `uuid`, `gender`, `profile_pic`) VALUES
(1, 1, 'kishjore', 'mishra', 'ara@gmil.com', '123456789', '11', 0, '', 'Active', '2022-10-21 02:43:02', 'fe1658b5-d26e-4d8a-8476-eb0d408f5035', NULL, NULL),
(2, 1, 'aa', '33', 'aqa@aa.com', '2234', '11', 0, '', 'Active', '2022-10-21 02:44:19', '8df889b5-319e-42a3-b1e5-a127391ada03', NULL, NULL),
(3, 1, 'Aa', '33', 'aqa1@aa.com', '22341', '1', 0, '', 'Active', '2022-10-21 02:45:48', '81c597bd-5921-4fe1-ab74-2e0c96daf951', NULL, NULL),
(4, 1, 'Aa', '33', 'aqa2@aa.com', '223411', '1', 0, '', 'Active', '2022-10-21 02:46:35', 'ff72fa15-3e6b-4d80-8f1e-402cafd06b31', NULL, NULL),
(5, 1, 'Aa', '33', 'aqa3@aa.com', '223412', '11', 0, '', 'Active', '2022-10-21 02:47:01', 'e77c3bef-fe68-4859-b2ba-adc9909ae0ce', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_language`
--

DROP TABLE IF EXISTS `m_language`;
CREATE TABLE `m_language` (
  `id` int(11) NOT NULL,
  `languagename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `m_language`
--

TRUNCATE TABLE `m_language`;
--
-- Dumping data for table `m_language`
--

INSERT INTO `m_language` (`id`, `languagename`) VALUES
(1, 'English'),
(2, 'Other ');

-- --------------------------------------------------------

--
-- Table structure for table `m_order`
--

DROP TABLE IF EXISTS `m_order`;
CREATE TABLE `m_order` (
  `order_id` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `invoice_no` int(11) NOT NULL DEFAULT 0,
  `invoice_prefix` varchar(26) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `store_name` varchar(64) NOT NULL,
  `store_url` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `customer_group_id` int(11) NOT NULL DEFAULT 0,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `custom_field` text NOT NULL,
  `payment_firstname` varchar(32) NOT NULL,
  `payment_lastname` varchar(32) NOT NULL,
  `payment_company` varchar(60) NOT NULL,
  `payment_address_1` varchar(128) NOT NULL,
  `payment_address_2` varchar(128) NOT NULL,
  `payment_city` varchar(128) NOT NULL,
  `payment_postcode` varchar(10) NOT NULL,
  `payment_country` varchar(128) NOT NULL,
  `payment_country_id` int(11) NOT NULL,
  `payment_zone` varchar(128) NOT NULL,
  `payment_zone_id` int(11) NOT NULL,
  `payment_address_format` text NOT NULL,
  `payment_custom_field` text NOT NULL,
  `payment_method` varchar(128) NOT NULL,
  `payment_code` varchar(128) NOT NULL,
  `shipping_firstname` varchar(32) NOT NULL,
  `shipping_lastname` varchar(32) NOT NULL,
  `shipping_company` varchar(60) NOT NULL,
  `shipping_address_1` varchar(128) NOT NULL,
  `shipping_address_2` varchar(128) NOT NULL,
  `shipping_city` varchar(128) NOT NULL,
  `shipping_postcode` varchar(10) NOT NULL,
  `shipping_country` varchar(128) NOT NULL,
  `shipping_country_id` int(11) NOT NULL,
  `shipping_zone` varchar(128) NOT NULL,
  `shipping_zone_id` int(11) NOT NULL,
  `shipping_address_format` text NOT NULL,
  `shipping_custom_field` text NOT NULL,
  `shipping_method` varchar(128) NOT NULL,
  `shipping_code` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `order_status_id` int(11) NOT NULL DEFAULT 0,
  `affiliate_id` int(11) NOT NULL,
  `commission` decimal(15,4) NOT NULL,
  `marketing_id` int(11) NOT NULL,
  `tracking` varchar(64) NOT NULL,
  `language_id` int(11) NOT NULL,
  `language_code` varchar(5) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `currency_value` decimal(15,8) NOT NULL DEFAULT 1.00000000,
  `ip` varchar(40) NOT NULL,
  `forwarded_ip` varchar(40) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `accept_language` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_order`
--

TRUNCATE TABLE `m_order`;
--
-- Dumping data for table `m_order`
--

INSERT INTO `m_order` (`order_id`, `transaction_id`, `invoice_no`, `invoice_prefix`, `store_id`, `store_name`, `store_url`, `customer_id`, `customer_group_id`, `firstname`, `lastname`, `email`, `telephone`, `custom_field`, `payment_firstname`, `payment_lastname`, `payment_company`, `payment_address_1`, `payment_address_2`, `payment_city`, `payment_postcode`, `payment_country`, `payment_country_id`, `payment_zone`, `payment_zone_id`, `payment_address_format`, `payment_custom_field`, `payment_method`, `payment_code`, `shipping_firstname`, `shipping_lastname`, `shipping_company`, `shipping_address_1`, `shipping_address_2`, `shipping_city`, `shipping_postcode`, `shipping_country`, `shipping_country_id`, `shipping_zone`, `shipping_zone_id`, `shipping_address_format`, `shipping_custom_field`, `shipping_method`, `shipping_code`, `comment`, `total`, `order_status_id`, `affiliate_id`, `commission`, `marketing_id`, `tracking`, `language_id`, `language_code`, `currency_id`, `currency_code`, `currency_value`, `ip`, `forwarded_ip`, `user_agent`, `accept_language`, `date_added`, `date_modified`) VALUES
(1, '', 0, 'INV-2022-00', 0, 'Your Store', 'http://127.0.0.1/opencart4/', 1, 1, 'kishore', 'mishra', 'arakishore@gmail.com', '', '[]', '', '', '', '', '', '', '', '', 0, '', 0, '', '[]', 'Cash On Delivery', 'cod', 'kishore', 'mishra', '', 'Nashik nashk', '', 'nashik', '422009', 'United Kingdom', 222, 'Aberdeen', 3513, '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city}, {zone} {postcode}\r\n{country}', '\"\"', 'Free Shipping', 'free.free', '', '123.2000', 0, 0, '0.0000', 0, '', 1, '', 2, 'USD', '1.00000000', '127.0.0.1', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'en-US,en;q=0.9,hi;q=0.8,mr;q=0.7,nl;q=0.6', '2022-10-19 18:04:18', '2022-10-19 18:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `m_order_status`
--

DROP TABLE IF EXISTS `m_order_status`;
CREATE TABLE `m_order_status` (
  `order_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_order_status`
--

TRUNCATE TABLE `m_order_status`;
--
-- Dumping data for table `m_order_status`
--

INSERT INTO `m_order_status` (`order_status_id`, `language_id`, `name`) VALUES
(1, 1, 'Pending'),
(2, 1, 'Processing'),
(3, 1, 'Shipped'),
(5, 1, 'Complete'),
(7, 1, 'Canceled'),
(8, 1, 'Denied'),
(9, 1, 'Canceled Reversal'),
(10, 1, 'Failed'),
(11, 1, 'Refunded'),
(12, 1, 'Reversed'),
(13, 1, 'Chargeback'),
(14, 1, 'Expired'),
(15, 1, 'Processed'),
(16, 1, 'Voided');

-- --------------------------------------------------------

--
-- Table structure for table `m_tax_class`
--

DROP TABLE IF EXISTS `m_tax_class`;
CREATE TABLE `m_tax_class` (
  `tax_class_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_tax_class`
--

TRUNCATE TABLE `m_tax_class`;
--
-- Dumping data for table `m_tax_class`
--

INSERT INTO `m_tax_class` (`tax_class_id`, `title`, `description`, `date_added`, `date_modified`) VALUES
(9, 'Taxable Goods', 'Taxed goods', '2009-01-06 23:21:53', '2011-09-23 14:07:50'),
(10, 'Downloadable Products', 'Downloadable', '2011-09-21 22:19:39', '2011-09-22 10:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `m_tax_rate`
--

DROP TABLE IF EXISTS `m_tax_rate`;
CREATE TABLE `m_tax_rate` (
  `tax_rate_id` int(11) NOT NULL,
  `geo_zone_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(32) NOT NULL,
  `rate` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `type` char(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_tax_rate`
--

TRUNCATE TABLE `m_tax_rate`;
--
-- Dumping data for table `m_tax_rate`
--

INSERT INTO `m_tax_rate` (`tax_rate_id`, `geo_zone_id`, `name`, `rate`, `type`, `date_added`, `date_modified`) VALUES
(86, 3, 'VAT (20%)', '20.0000', 'P', '2011-03-09 21:17:10', '2011-09-22 22:24:29'),
(87, 3, 'Eco Tax (-2.00)', '2.0000', 'F', '2011-09-21 21:49:23', '2011-09-23 00:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `m_tax_rule`
--

DROP TABLE IF EXISTS `m_tax_rule`;
CREATE TABLE `m_tax_rule` (
  `tax_rule_id` int(11) NOT NULL,
  `tax_class_id` int(11) NOT NULL,
  `tax_rate_id` int(11) NOT NULL,
  `based` varchar(10) NOT NULL,
  `priority` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_tax_rule`
--

TRUNCATE TABLE `m_tax_rule`;
--
-- Dumping data for table `m_tax_rule`
--

INSERT INTO `m_tax_rule` (`tax_rule_id`, `tax_class_id`, `tax_rate_id`, `based`, `priority`) VALUES
(120, 10, 87, 'store', 0),
(121, 10, 86, 'payment', 1),
(127, 9, 87, 'shipping', 2),
(128, 9, 86, 'shipping', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_weight_class`
--

DROP TABLE IF EXISTS `m_weight_class`;
CREATE TABLE `m_weight_class` (
  `weight_class_id` int(11) NOT NULL,
  `value` decimal(15,8) NOT NULL DEFAULT 0.00000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_weight_class`
--

TRUNCATE TABLE `m_weight_class`;
--
-- Dumping data for table `m_weight_class`
--

INSERT INTO `m_weight_class` (`weight_class_id`, `value`) VALUES
(1, '1.00000000'),
(2, '1000.00000000'),
(5, '2.20460000'),
(6, '35.27400000');

-- --------------------------------------------------------

--
-- Table structure for table `m_zone`
--

DROP TABLE IF EXISTS `m_zone`;
CREATE TABLE `m_zone` (
  `zone_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `code` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_zone`
--

TRUNCATE TABLE `m_zone`;
--
-- Dumping data for table `m_zone`
--

INSERT INTO `m_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(1, 1, 'Badakhshan', 'BDS', 1),
(2, 1, 'Badghis', 'BDG', 1),
(3, 1, 'Baghlan', 'BGL', 1),
(4, 1, 'Balkh', 'BAL', 1),
(5, 1, 'Bamian', 'BAM', 1),
(6, 1, 'Farah', 'FRA', 1),
(7, 1, 'Faryab', 'FYB', 1),
(8, 1, 'Ghazni', 'GHA', 1),
(9, 1, 'Ghowr', 'GHO', 1),
(10, 1, 'Helmand', 'HEL', 1),
(11, 1, 'Herat', 'HER', 1),
(12, 1, 'Jowzjan', 'JOW', 1),
(13, 1, 'Kabul', 'KAB', 1),
(14, 1, 'Kandahar', 'KAN', 1),
(15, 1, 'Kapisa', 'KAP', 1),
(16, 1, 'Khost', 'KHO', 1),
(17, 1, 'Konar', 'KNR', 1),
(18, 1, 'Kondoz', 'KDZ', 1),
(19, 1, 'Laghman', 'LAG', 1),
(20, 1, 'Lowgar', 'LOW', 1),
(21, 1, 'Nangrahar', 'NAN', 1),
(22, 1, 'Nimruz', 'NIM', 1),
(23, 1, 'Nurestan', 'NUR', 1),
(24, 1, 'Oruzgan', 'ORU', 1),
(25, 1, 'Paktia', 'PIA', 1),
(26, 1, 'Paktika', 'PKA', 1),
(27, 1, 'Parwan', 'PAR', 1),
(28, 1, 'Samangan', 'SAM', 1),
(29, 1, 'Sar-e Pol', 'SAR', 1),
(30, 1, 'Takhar', 'TAK', 1),
(31, 1, 'Wardak', 'WAR', 1),
(32, 1, 'Zabol', 'ZAB', 1),
(33, 2, 'Berat', 'BR', 1),
(34, 2, 'Bulqize', 'BU', 1),
(35, 2, 'Delvine', 'DL', 1),
(36, 2, 'Devoll', 'DV', 1),
(37, 2, 'Diber', 'DI', 1),
(38, 2, 'Durres', 'DR', 1),
(39, 2, 'Elbasan', 'EL', 1),
(40, 2, 'Kolonje', 'ER', 1),
(41, 2, 'Fier', 'FR', 1),
(42, 2, 'Gjirokaster', 'GJ', 1),
(43, 2, 'Gramsh', 'GR', 1),
(44, 2, 'Has', 'HA', 1),
(45, 2, 'Kavaje', 'KA', 1),
(46, 2, 'Kurbin', 'KB', 1),
(47, 2, 'Kucove', 'KC', 1),
(48, 2, 'Korce', 'KO', 1),
(49, 2, 'Kruje', 'KR', 1),
(50, 2, 'Kukes', 'KU', 1),
(51, 2, 'Librazhd', 'LB', 1),
(52, 2, 'Lezhe', 'LE', 1),
(53, 2, 'Lushnje', 'LU', 1),
(54, 2, 'Malesi e Madhe', 'MM', 1),
(55, 2, 'Mallakaster', 'MK', 1),
(56, 2, 'Mat', 'MT', 1),
(57, 2, 'Mirdite', 'MR', 1),
(58, 2, 'Peqin', 'PQ', 1),
(59, 2, 'Permet', 'PR', 1),
(60, 2, 'Pogradec', 'PG', 1),
(61, 2, 'Puke', 'PU', 1),
(62, 2, 'Shkoder', 'SH', 1),
(63, 2, 'Skrapar', 'SK', 1),
(64, 2, 'Sarande', 'SR', 1),
(65, 2, 'Tepelene', 'TE', 1),
(66, 2, 'Tropoje', 'TP', 1),
(67, 2, 'Tirane', 'TR', 1),
(68, 2, 'Vlore', 'VL', 1),
(69, 3, 'Adrar', '01', 1),
(70, 3, 'Ain Defla', '44', 1),
(71, 3, 'Ain Temouchent', '46', 1),
(72, 3, 'Alger', '16', 1),
(73, 3, 'Annaba', '23', 1),
(74, 3, 'Batna', '05', 1),
(75, 3, 'Bechar', '08', 1),
(76, 3, 'Bejaia', '06', 1),
(77, 3, 'Biskra', '07', 1),
(78, 3, 'Blida', '09', 1),
(79, 3, 'Bordj Bou Arreridj', '34', 1),
(80, 3, 'Bouira', '10', 1),
(81, 3, 'Boumerdes', '35', 1),
(82, 3, 'Chlef', '02', 1),
(83, 3, 'Constantine', '26', 1),
(84, 3, 'Djelfa', '17', 1),
(85, 3, 'El Bayadh', '32', 1),
(86, 3, 'El Oued', '39', 1),
(87, 3, 'El Tarf', '36', 1),
(88, 3, 'Ghardaia', '47', 1),
(89, 3, 'Guelma', '24', 1),
(90, 3, 'Illizi', '33', 1),
(91, 3, 'Jijel', '18', 1),
(92, 3, 'Khenchela', '40', 1),
(93, 3, 'Laghouat', '03', 1),
(94, 3, 'Mascara', '29', 1),
(95, 3, 'Medea', '26', 1),
(96, 3, 'Mila', '43', 1),
(97, 3, 'Mostaganem', '27', 1),
(98, 3, 'M\'Sila', '28', 1),
(99, 3, 'Naama', '45', 1),
(100, 3, 'Oran', '31', 1),
(101, 3, 'Ouargla', '30', 1),
(102, 3, 'Oum el-Bouaghi', '04', 1),
(103, 3, 'Relizane', '48', 1),
(104, 3, 'Saida', '20', 1),
(105, 3, 'Setif', '19', 1),
(106, 3, 'Sidi Bel Abbes', '22', 1),
(107, 3, 'Skikda', '21', 1),
(108, 3, 'Souk Ahras', '41', 1),
(109, 3, 'Tamanrasset', '11', 1),
(110, 3, 'Tebessa', '12', 1),
(111, 3, 'Tiaret', '14', 1),
(112, 3, 'Tindouf', '37', 1),
(113, 3, 'Tipaza', '42', 1),
(114, 3, 'Tissemsilt', '38', 1),
(115, 3, 'Tizi Ouzou', '15', 1),
(116, 3, 'Tlemcen', '13', 1),
(117, 4, 'Eastern', 'E', 1),
(118, 4, 'Manu\'a', 'M', 1),
(119, 4, 'Rose Island', 'R', 1),
(120, 4, 'Swains Island', 'S', 1),
(121, 4, 'Western', 'W', 1),
(122, 5, 'Andorra la Vella', 'ALV', 1),
(123, 5, 'Canillo', 'CAN', 1),
(124, 5, 'Encamp', 'ENC', 1),
(125, 5, 'Escaldes-Engordany', 'ESE', 1),
(126, 5, 'La Massana', 'LMA', 1),
(127, 5, 'Ordino', 'ORD', 1),
(128, 5, 'Sant Julia de Loria', 'SJL', 1),
(129, 6, 'Bengo', 'BGO', 1),
(130, 6, 'Benguela', 'BGU', 1),
(131, 6, 'Bie', 'BIE', 1),
(132, 6, 'Cabinda', 'CAB', 1),
(133, 6, 'Cuando-Cubango', 'CCU', 1),
(134, 6, 'Cuanza Norte', 'CNO', 1),
(135, 6, 'Cuanza Sul', 'CUS', 1),
(136, 6, 'Cunene', 'CNN', 1),
(137, 6, 'Huambo', 'HUA', 1),
(138, 6, 'Huila', 'HUI', 1),
(139, 6, 'Luanda', 'LUA', 1),
(140, 6, 'Lunda Norte', 'LNO', 1),
(141, 6, 'Lunda Sul', 'LSU', 1),
(142, 6, 'Malange', 'MAL', 1),
(143, 6, 'Moxico', 'MOX', 1),
(144, 6, 'Namibe', 'NAM', 1),
(145, 6, 'Uige', 'UIG', 1),
(146, 6, 'Zaire', 'ZAI', 1),
(147, 9, 'Saint George', 'ASG', 1),
(148, 9, 'Saint John', 'ASJ', 1),
(149, 9, 'Saint Mary', 'ASM', 1),
(150, 9, 'Saint Paul', 'ASL', 1),
(151, 9, 'Saint Peter', 'ASR', 1),
(152, 9, 'Saint Philip', 'ASH', 1),
(153, 9, 'Barbuda', 'BAR', 1),
(154, 9, 'Redonda', 'RED', 1),
(155, 10, 'Antartida e Islas del Atlantico', 'AN', 1),
(156, 10, 'Buenos Aires', 'B', 1),
(157, 10, 'Catamarca', 'K', 1),
(158, 10, 'Chaco', 'H', 1),
(159, 10, 'Chubut', 'U', 1),
(160, 10, 'Cordoba', 'X', 1),
(161, 10, 'Corrientes', 'W', 1),
(162, 10, 'Ciudad Autónoma de Buenos Aires', 'C', 1),
(163, 10, 'Entre Rios', 'E', 1),
(164, 10, 'Formosa', 'P', 1),
(165, 10, 'Jujuy', 'Y', 1),
(166, 10, 'La Pampa', 'L', 1),
(167, 10, 'La Rioja', 'F', 1),
(168, 10, 'Mendoza', 'M', 1),
(169, 10, 'Misiones', 'N', 1),
(170, 10, 'Neuquen', 'Q', 1),
(171, 10, 'Rio Negro', 'R', 1),
(172, 10, 'Salta', 'A', 1),
(173, 10, 'San Juan', 'J', 1),
(174, 10, 'San Luis', 'D', 1),
(175, 10, 'Santa Cruz', 'Z', 1),
(176, 10, 'Santa Fe', 'S', 1),
(177, 10, 'Santiago del Estero', 'G', 1),
(178, 10, 'Tierra del Fuego', 'V', 1),
(179, 10, 'Tucuman', 'T', 1),
(180, 11, 'Aragatsotn', 'AGT', 1),
(181, 11, 'Ararat', 'ARR', 1),
(182, 11, 'Armavir', 'ARM', 1),
(183, 11, 'Geghark\'unik\'', 'GEG', 1),
(184, 11, 'Kotayk\'', 'KOT', 1),
(185, 11, 'Lorri', 'LOR', 1),
(186, 11, 'Shirak', 'SHI', 1),
(187, 11, 'Syunik\'', 'SYU', 1),
(188, 11, 'Tavush', 'TAV', 1),
(189, 11, 'Vayots\' Dzor', 'VAY', 1),
(190, 11, 'Yerevan', 'YER', 1),
(191, 13, 'Australian Capital Territory', 'ACT', 1),
(192, 13, 'New South Wales', 'NSW', 1),
(193, 13, 'Northern Territory', 'NT', 1),
(194, 13, 'Queensland', 'QLD', 1),
(195, 13, 'South Australia', 'SA', 1),
(196, 13, 'Tasmania', 'TAS', 1),
(197, 13, 'Victoria', 'VIC', 1),
(198, 13, 'Western Australia', 'WA', 1),
(199, 14, 'Burgenland', '1', 1),
(200, 14, 'Kärnten', '2', 1),
(201, 14, 'Niederösterreich', '3', 1),
(202, 14, 'Oberösterreich', '4', 1),
(203, 14, 'Salzburg', '5', 1),
(204, 14, 'Steiermark', '6', 1),
(205, 14, 'Tirol', '7', 1),
(206, 14, 'Vorarlberg', '8', 1),
(207, 14, 'Wien', '9', 1),
(208, 15, 'Ali Bayramli', 'AB', 1),
(209, 15, 'Abseron', 'ABS', 1),
(210, 15, 'AgcabAdi', 'AGC', 1),
(211, 15, 'Agdam', 'AGM', 1),
(212, 15, 'Agdas', 'AGS', 1),
(213, 15, 'Agstafa', 'AGA', 1),
(214, 15, 'Agsu', 'AGU', 1),
(215, 15, 'Astara', 'AST', 1),
(216, 15, 'Baki', 'BA', 1),
(217, 15, 'BabAk', 'BAB', 1),
(218, 15, 'BalakAn', 'BAL', 1),
(219, 15, 'BArdA', 'BAR', 1),
(220, 15, 'Beylaqan', 'BEY', 1),
(221, 15, 'Bilasuvar', 'BIL', 1),
(222, 15, 'Cabrayil', 'CAB', 1),
(223, 15, 'Calilabab', 'CAL', 1),
(224, 15, 'Culfa', 'CUL', 1),
(225, 15, 'Daskasan', 'DAS', 1),
(226, 15, 'Davaci', 'DAV', 1),
(227, 15, 'Fuzuli', 'FUZ', 1),
(228, 15, 'Ganca', 'GA', 1),
(229, 15, 'Gadabay', 'GAD', 1),
(230, 15, 'Goranboy', 'GOR', 1),
(231, 15, 'Goycay', 'GOY', 1),
(232, 15, 'Haciqabul', 'HAC', 1),
(233, 15, 'Imisli', 'IMI', 1),
(234, 15, 'Ismayilli', 'ISM', 1),
(235, 15, 'Kalbacar', 'KAL', 1),
(236, 15, 'Kurdamir', 'KUR', 1),
(237, 15, 'Lankaran', 'LA', 1),
(238, 15, 'Lacin', 'LAC', 1),
(239, 15, 'Lankaran', 'LAN', 1),
(240, 15, 'Lerik', 'LER', 1),
(241, 15, 'Masalli', 'MAS', 1),
(242, 15, 'Mingacevir', 'MI', 1),
(243, 15, 'Naftalan', 'NA', 1),
(244, 15, 'Neftcala', 'NEF', 1),
(245, 15, 'Oguz', 'OGU', 1),
(246, 15, 'Ordubad', 'ORD', 1),
(247, 15, 'Qabala', 'QAB', 1),
(248, 15, 'Qax', 'QAX', 1),
(249, 15, 'Qazax', 'QAZ', 1),
(250, 15, 'Qobustan', 'QOB', 1),
(251, 15, 'Quba', 'QBA', 1),
(252, 15, 'Qubadli', 'QBI', 1),
(253, 15, 'Qusar', 'QUS', 1),
(254, 15, 'Saki', 'SA', 1),
(255, 15, 'Saatli', 'SAT', 1),
(256, 15, 'Sabirabad', 'SAB', 1),
(257, 15, 'Sadarak', 'SAD', 1),
(258, 15, 'Sahbuz', 'SAH', 1),
(259, 15, 'Saki', 'SAK', 1),
(260, 15, 'Salyan', 'SAL', 1),
(261, 15, 'Sumqayit', 'SM', 1),
(262, 15, 'Samaxi', 'SMI', 1),
(263, 15, 'Samkir', 'SKR', 1),
(264, 15, 'Samux', 'SMX', 1),
(265, 15, 'Sarur', 'SAR', 1),
(266, 15, 'Siyazan', 'SIY', 1),
(267, 15, 'Susa', 'SS', 1),
(268, 15, 'Susa', 'SUS', 1),
(269, 15, 'Tartar', 'TAR', 1),
(270, 15, 'Tovuz', 'TOV', 1),
(271, 15, 'Ucar', 'UCA', 1),
(272, 15, 'Xankandi', 'XA', 1),
(273, 15, 'Xacmaz', 'XAC', 1),
(274, 15, 'Xanlar', 'XAN', 1),
(275, 15, 'Xizi', 'XIZ', 1),
(276, 15, 'Xocali', 'XCI', 1),
(277, 15, 'Xocavand', 'XVD', 1),
(278, 15, 'Yardimli', 'YAR', 1),
(279, 15, 'Yevlax', 'YEV', 1),
(280, 15, 'Zangilan', 'ZAN', 1),
(281, 15, 'Zaqatala', 'ZAQ', 1),
(282, 15, 'Zardab', 'ZAR', 1),
(283, 15, 'Naxcivan', 'NX', 1),
(284, 16, 'Acklins', 'ACK', 1),
(285, 16, 'Berry Islands', 'BER', 1),
(286, 16, 'Bimini', 'BIM', 1),
(287, 16, 'Black Point', 'BLK', 1),
(288, 16, 'Cat Island', 'CAT', 1),
(289, 16, 'Central Abaco', 'CAB', 1),
(290, 16, 'Central Andros', 'CAN', 1),
(291, 16, 'Central Eleuthera', 'CEL', 1),
(292, 16, 'City of Freeport', 'FRE', 1),
(293, 16, 'Crooked Island', 'CRO', 1),
(294, 16, 'East Grand Bahama', 'EGB', 1),
(295, 16, 'Exuma', 'EXU', 1),
(296, 16, 'Grand Cay', 'GRD', 1),
(297, 16, 'Harbour Island', 'HAR', 1),
(298, 16, 'Hope Town', 'HOP', 1),
(299, 16, 'Inagua', 'INA', 1),
(300, 16, 'Long Island', 'LNG', 1),
(301, 16, 'Mangrove Cay', 'MAN', 1),
(302, 16, 'Mayaguana', 'MAY', 1),
(303, 16, 'Moore\'s Island', 'MOO', 1),
(304, 16, 'North Abaco', 'NAB', 1),
(305, 16, 'North Andros', 'NAN', 1),
(306, 16, 'North Eleuthera', 'NEL', 1),
(307, 16, 'Ragged Island', 'RAG', 1),
(308, 16, 'Rum Cay', 'RUM', 1),
(309, 16, 'San Salvador', 'SAL', 1),
(310, 16, 'South Abaco', 'SAB', 1),
(311, 16, 'South Andros', 'SAN', 1),
(312, 16, 'South Eleuthera', 'SEL', 1),
(313, 16, 'Spanish Wells', 'SWE', 1),
(314, 16, 'West Grand Bahama', 'WGB', 1),
(315, 17, 'Capital', 'CAP', 1),
(316, 17, 'Central', 'CEN', 1),
(317, 17, 'Muharraq', 'MUH', 1),
(318, 17, 'Northern', 'NOR', 1),
(319, 17, 'Southern', 'SOU', 1),
(320, 18, 'Barisal', 'BAR', 1),
(321, 18, 'Chittagong', 'CHI', 1),
(322, 18, 'Dhaka', 'DHA', 1),
(323, 18, 'Khulna', 'KHU', 1),
(324, 18, 'Rajshahi', 'RAJ', 1),
(325, 18, 'Sylhet', 'SYL', 1),
(326, 19, 'Christ Church', 'CC', 1),
(327, 19, 'Saint Andrew', 'AND', 1),
(328, 19, 'Saint George', 'GEO', 1),
(329, 19, 'Saint James', 'JAM', 1),
(330, 19, 'Saint John', 'JOH', 1),
(331, 19, 'Saint Joseph', 'JOS', 1),
(332, 19, 'Saint Lucy', 'LUC', 1),
(333, 19, 'Saint Michael', 'MIC', 1),
(334, 19, 'Saint Peter', 'PET', 1),
(335, 19, 'Saint Philip', 'PHI', 1),
(336, 19, 'Saint Thomas', 'THO', 1),
(337, 20, 'Brestskaya (Brest)', 'BR', 1),
(338, 20, 'Homyel\'skaya (Homyel\')', 'HO', 1),
(339, 20, 'Horad Minsk', 'HM', 1),
(340, 20, 'Hrodzyenskaya (Hrodna)', 'HR', 1),
(341, 20, 'Mahilyowskaya (Mahilyow)', 'MA', 1),
(342, 20, 'Minskaya', 'MI', 1),
(343, 20, 'Vitsyebskaya (Vitsyebsk)', 'VI', 1),
(344, 21, 'Antwerpen', 'VAN', 1),
(345, 21, 'Brabant Wallon', 'WBR', 1),
(346, 21, 'Hainaut', 'WHT', 1),
(347, 21, 'Liège', 'WLG', 1),
(348, 21, 'Limburg', 'VLI', 1),
(349, 21, 'Luxembourg', 'WLX', 1),
(350, 21, 'Namur', 'WNA', 1),
(351, 21, 'Oost-Vlaanderen', 'VOV', 1),
(352, 21, 'Vlaams Brabant', 'VBR', 1),
(353, 21, 'West-Vlaanderen', 'VWV', 1),
(354, 22, 'Belize', 'BZ', 1),
(355, 22, 'Cayo', 'CY', 1),
(356, 22, 'Corozal', 'CR', 1),
(357, 22, 'Orange Walk', 'OW', 1),
(358, 22, 'Stann Creek', 'SC', 1),
(359, 22, 'Toledo', 'TO', 1),
(360, 23, 'Alibori', 'AL', 1),
(361, 23, 'Atakora', 'AK', 1),
(362, 23, 'Atlantique', 'AQ', 1),
(363, 23, 'Borgou', 'BO', 1),
(364, 23, 'Collines', 'CO', 1),
(365, 23, 'Donga', 'DO', 1),
(366, 23, 'Kouffo', 'KO', 1),
(367, 23, 'Littoral', 'LI', 1),
(368, 23, 'Mono', 'MO', 1),
(369, 23, 'Oueme', 'OU', 1),
(370, 23, 'Plateau', 'PL', 1),
(371, 23, 'Zou', 'ZO', 1),
(372, 24, 'Devonshire', 'DS', 1),
(373, 24, 'Hamilton City', 'HC', 1),
(374, 24, 'Hamilton', 'HA', 1),
(375, 24, 'Paget', 'PG', 1),
(376, 24, 'Pembroke', 'PB', 1),
(377, 24, 'Saint George City', 'GC', 1),
(378, 24, 'Saint George\'s', 'SG', 1),
(379, 24, 'Sandys', 'SA', 1),
(380, 24, 'Smith\'s', 'SM', 1),
(381, 24, 'Southampton', 'SH', 1),
(382, 24, 'Warwick', 'WA', 1),
(383, 25, 'Bumthang', 'BUM', 1),
(384, 25, 'Chukha', 'CHU', 1),
(385, 25, 'Dagana', 'DAG', 1),
(386, 25, 'Gasa', 'GAS', 1),
(387, 25, 'Haa', 'HAA', 1),
(388, 25, 'Lhuntse', 'LHU', 1),
(389, 25, 'Mongar', 'MON', 1),
(390, 25, 'Paro', 'PAR', 1),
(391, 25, 'Pemagatshel', 'PEM', 1),
(392, 25, 'Punakha', 'PUN', 1),
(393, 25, 'Samdrup Jongkhar', 'SJO', 1),
(394, 25, 'Samtse', 'SAT', 1),
(395, 25, 'Sarpang', 'SAR', 1),
(396, 25, 'Thimphu', 'THI', 1),
(397, 25, 'Trashigang', 'TRG', 1),
(398, 25, 'Trashiyangste', 'TRY', 1),
(399, 25, 'Trongsa', 'TRO', 1),
(400, 25, 'Tsirang', 'TSI', 1),
(401, 25, 'Wangdue Phodrang', 'WPH', 1),
(402, 25, 'Zhemgang', 'ZHE', 1),
(403, 26, 'Beni', 'BEN', 1),
(404, 26, 'Chuquisaca', 'CHU', 1),
(405, 26, 'Cochabamba', 'COC', 1),
(406, 26, 'La Paz', 'LPZ', 1),
(407, 26, 'Oruro', 'ORU', 1),
(408, 26, 'Pando', 'PAN', 1),
(409, 26, 'Potosi', 'POT', 1),
(410, 26, 'Santa Cruz', 'SCZ', 1),
(411, 26, 'Tarija', 'TAR', 1),
(412, 27, 'Brcko district', 'BRO', 1),
(413, 27, 'Unsko-Sanski Kanton', 'FUS', 1),
(414, 27, 'Posavski Kanton', 'FPO', 1),
(415, 27, 'Tuzlanski Kanton', 'FTU', 1),
(416, 27, 'Zenicko-Dobojski Kanton', 'FZE', 1),
(417, 27, 'Bosanskopodrinjski Kanton', 'FBP', 1),
(418, 27, 'Srednjebosanski Kanton', 'FSB', 1),
(419, 27, 'Hercegovacko-neretvanski Kanton', 'FHN', 1),
(420, 27, 'Zapadnohercegovacka Zupanija', 'FZH', 1),
(421, 27, 'Kanton Sarajevo', 'FSA', 1),
(422, 27, 'Zapadnobosanska', 'FZA', 1),
(423, 27, 'Banja Luka', 'SBL', 1),
(424, 27, 'Doboj', 'SDO', 1),
(425, 27, 'Bijeljina', 'SBI', 1),
(426, 27, 'Vlasenica', 'SVL', 1),
(427, 27, 'Sarajevo-Romanija or Sokolac', 'SSR', 1),
(428, 27, 'Foca', 'SFO', 1),
(429, 27, 'Trebinje', 'STR', 1),
(430, 28, 'Central', 'CE', 1),
(431, 28, 'Ghanzi', 'GH', 1),
(432, 28, 'Kgalagadi', 'KD', 1),
(433, 28, 'Kgatleng', 'KT', 1),
(434, 28, 'Kweneng', 'KW', 1),
(435, 28, 'Ngamiland', 'NG', 1),
(436, 28, 'North East', 'NE', 1),
(437, 28, 'North West', 'NW', 1),
(438, 28, 'South East', 'SE', 1),
(439, 28, 'Southern', 'SO', 1),
(440, 30, 'Acre', 'AC', 1),
(441, 30, 'Alagoas', 'AL', 1),
(442, 30, 'Amapá', 'AP', 1),
(443, 30, 'Amazonas', 'AM', 1),
(444, 30, 'Bahia', 'BA', 1),
(445, 30, 'Ceará', 'CE', 1),
(446, 30, 'Distrito Federal', 'DF', 1),
(447, 30, 'Espírito Santo', 'ES', 1),
(448, 30, 'Goiás', 'GO', 1),
(449, 30, 'Maranhão', 'MA', 1),
(450, 30, 'Mato Grosso', 'MT', 1),
(451, 30, 'Mato Grosso do Sul', 'MS', 1),
(452, 30, 'Minas Gerais', 'MG', 1),
(453, 30, 'Pará', 'PA', 1),
(454, 30, 'Paraíba', 'PB', 1),
(455, 30, 'Paraná', 'PR', 1),
(456, 30, 'Pernambuco', 'PE', 1),
(457, 30, 'Piauí', 'PI', 1),
(458, 30, 'Rio de Janeiro', 'RJ', 1),
(459, 30, 'Rio Grande do Norte', 'RN', 1),
(460, 30, 'Rio Grande do Sul', 'RS', 1),
(461, 30, 'Rondônia', 'RO', 1),
(462, 30, 'Roraima', 'RR', 1),
(463, 30, 'Santa Catarina', 'SC', 1),
(464, 30, 'São Paulo', 'SP', 1),
(465, 30, 'Sergipe', 'SE', 1),
(466, 30, 'Tocantins', 'TO', 1),
(467, 31, 'Peros Banhos', 'PB', 1),
(468, 31, 'Salomon Islands', 'SI', 1),
(469, 31, 'Nelsons Island', 'NI', 1),
(470, 31, 'Three Brothers', 'TB', 1),
(471, 31, 'Eagle Islands', 'EA', 1),
(472, 31, 'Danger Island', 'DI', 1),
(473, 31, 'Egmont Islands', 'EG', 1),
(474, 31, 'Diego Garcia', 'DG', 1),
(475, 32, 'Belait', 'BEL', 1),
(476, 32, 'Brunei and Muara', 'BRM', 1),
(477, 32, 'Temburong', 'TEM', 1),
(478, 32, 'Tutong', 'TUT', 1),
(479, 33, 'Blagoevgrad', '', 1),
(480, 33, 'Burgas', '', 1),
(481, 33, 'Dobrich', '', 1),
(482, 33, 'Gabrovo', '', 1),
(483, 33, 'Haskovo', '', 1),
(484, 33, 'Kardjali', '', 1),
(485, 33, 'Kyustendil', '', 1),
(486, 33, 'Lovech', '', 1),
(487, 33, 'Montana', '', 1),
(488, 33, 'Pazardjik', '', 1),
(489, 33, 'Pernik', '', 1),
(490, 33, 'Pleven', '', 1),
(491, 33, 'Plovdiv', '', 1),
(492, 33, 'Razgrad', '', 1),
(493, 33, 'Shumen', '', 1),
(494, 33, 'Silistra', '', 1),
(495, 33, 'Sliven', '', 1),
(496, 33, 'Smolyan', '', 1),
(497, 33, 'Sofia', '', 1),
(498, 33, 'Sofia - town', '', 1),
(499, 33, 'Stara Zagora', '', 1),
(500, 33, 'Targovishte', '', 1),
(501, 33, 'Varna', '', 1),
(502, 33, 'Veliko Tarnovo', '', 1),
(503, 33, 'Vidin', '', 1),
(504, 33, 'Vratza', '', 1),
(505, 33, 'Yambol', '', 1),
(506, 34, 'Bale', 'BAL', 1),
(507, 34, 'Bam', 'BAM', 1),
(508, 34, 'Banwa', 'BAN', 1),
(509, 34, 'Bazega', 'BAZ', 1),
(510, 34, 'Bougouriba', 'BOR', 1),
(511, 34, 'Boulgou', 'BLG', 1),
(512, 34, 'Boulkiemde', 'BOK', 1),
(513, 34, 'Comoe', 'COM', 1),
(514, 34, 'Ganzourgou', 'GAN', 1),
(515, 34, 'Gnagna', 'GNA', 1),
(516, 34, 'Gourma', 'GOU', 1),
(517, 34, 'Houet', 'HOU', 1),
(518, 34, 'Ioba', 'IOA', 1),
(519, 34, 'Kadiogo', 'KAD', 1),
(520, 34, 'Kenedougou', 'KEN', 1),
(521, 34, 'Komondjari', 'KOD', 1),
(522, 34, 'Kompienga', 'KOP', 1),
(523, 34, 'Kossi', 'KOS', 1),
(524, 34, 'Koulpelogo', 'KOL', 1),
(525, 34, 'Kouritenga', 'KOT', 1),
(526, 34, 'Kourweogo', 'KOW', 1),
(527, 34, 'Leraba', 'LER', 1),
(528, 34, 'Loroum', 'LOR', 1),
(529, 34, 'Mouhoun', 'MOU', 1),
(530, 34, 'Nahouri', 'NAH', 1),
(531, 34, 'Namentenga', 'NAM', 1),
(532, 34, 'Nayala', 'NAY', 1),
(533, 34, 'Noumbiel', 'NOU', 1),
(534, 34, 'Oubritenga', 'OUB', 1),
(535, 34, 'Oudalan', 'OUD', 1),
(536, 34, 'Passore', 'PAS', 1),
(537, 34, 'Poni', 'PON', 1),
(538, 34, 'Sanguie', 'SAG', 1),
(539, 34, 'Sanmatenga', 'SAM', 1),
(540, 34, 'Seno', 'SEN', 1),
(541, 34, 'Sissili', 'SIS', 1),
(542, 34, 'Soum', 'SOM', 1),
(543, 34, 'Sourou', 'SOR', 1),
(544, 34, 'Tapoa', 'TAP', 1),
(545, 34, 'Tuy', 'TUY', 1),
(546, 34, 'Yagha', 'YAG', 1),
(547, 34, 'Yatenga', 'YAT', 1),
(548, 34, 'Ziro', 'ZIR', 1),
(549, 34, 'Zondoma', 'ZOD', 1),
(550, 34, 'Zoundweogo', 'ZOW', 1),
(551, 35, 'Bubanza', 'BB', 1),
(552, 35, 'Bujumbura', 'BJ', 1),
(553, 35, 'Bururi', 'BR', 1),
(554, 35, 'Cankuzo', 'CA', 1),
(555, 35, 'Cibitoke', 'CI', 1),
(556, 35, 'Gitega', 'GI', 1),
(557, 35, 'Karuzi', 'KR', 1),
(558, 35, 'Kayanza', 'KY', 1),
(559, 35, 'Kirundo', 'KI', 1),
(560, 35, 'Makamba', 'MA', 1),
(561, 35, 'Muramvya', 'MU', 1),
(562, 35, 'Muyinga', 'MY', 1),
(563, 35, 'Mwaro', 'MW', 1),
(564, 35, 'Ngozi', 'NG', 1),
(565, 35, 'Rutana', 'RT', 1),
(566, 35, 'Ruyigi', 'RY', 1),
(567, 36, 'Phnom Penh', 'PP', 1),
(568, 36, 'Preah Seihanu (Kompong Som or Sihanoukville)', 'PS', 1),
(569, 36, 'Pailin', 'PA', 1),
(570, 36, 'Keb', 'KB', 1),
(571, 36, 'Banteay Meanchey', 'BM', 1),
(572, 36, 'Battambang', 'BA', 1),
(573, 36, 'Kampong Cham', 'KM', 1),
(574, 36, 'Kampong Chhnang', 'KN', 1),
(575, 36, 'Kampong Speu', 'KU', 1),
(576, 36, 'Kampong Som', 'KO', 1),
(577, 36, 'Kampong Thom', 'KT', 1),
(578, 36, 'Kampot', 'KP', 1),
(579, 36, 'Kandal', 'KL', 1),
(580, 36, 'Kaoh Kong', 'KK', 1),
(581, 36, 'Kratie', 'KR', 1),
(582, 36, 'Mondul Kiri', 'MK', 1),
(583, 36, 'Oddar Meancheay', 'OM', 1),
(584, 36, 'Pursat', 'PU', 1),
(585, 36, 'Preah Vihear', 'PR', 1),
(586, 36, 'Prey Veng', 'PG', 1),
(587, 36, 'Ratanak Kiri', 'RK', 1),
(588, 36, 'Siemreap', 'SI', 1),
(589, 36, 'Stung Treng', 'ST', 1),
(590, 36, 'Svay Rieng', 'SR', 1),
(591, 36, 'Takeo', 'TK', 1),
(592, 37, 'Adamawa (Adamaoua)', 'ADA', 1),
(593, 37, 'Centre', 'CEN', 1),
(594, 37, 'East (Est)', 'EST', 1),
(595, 37, 'Extreme North (Extreme-Nord)', 'EXN', 1),
(596, 37, 'Littoral', 'LIT', 1),
(597, 37, 'North (Nord)', 'NOR', 1),
(598, 37, 'Northwest (Nord-Ouest)', 'NOT', 1),
(599, 37, 'West (Ouest)', 'OUE', 1),
(600, 37, 'South (Sud)', 'SUD', 1),
(601, 37, 'Southwest (Sud-Ouest).', 'SOU', 1),
(602, 38, 'Alberta', 'AB', 1),
(603, 38, 'British Columbia', 'BC', 1),
(604, 38, 'Manitoba', 'MB', 1),
(605, 38, 'New Brunswick', 'NB', 1),
(606, 38, 'Newfoundland and Labrador', 'NL', 1),
(607, 38, 'Northwest Territories', 'NT', 1),
(608, 38, 'Nova Scotia', 'NS', 1),
(609, 38, 'Nunavut', 'NU', 1),
(610, 38, 'Ontario', 'ON', 1),
(611, 38, 'Prince Edward Island', 'PE', 1),
(612, 38, 'Qu&eacute;bec', 'QC', 1),
(613, 38, 'Saskatchewan', 'SK', 1),
(614, 38, 'Yukon Territory', 'YT', 1),
(615, 39, 'Boa Vista', 'BV', 1),
(616, 39, 'Brava', 'BR', 1),
(617, 39, 'Calheta de Sao Miguel', 'CS', 1),
(618, 39, 'Maio', 'MA', 1),
(619, 39, 'Mosteiros', 'MO', 1),
(620, 39, 'Paul', 'PA', 1),
(621, 39, 'Porto Novo', 'PN', 1),
(622, 39, 'Praia', 'PR', 1),
(623, 39, 'Ribeira Grande', 'RG', 1),
(624, 39, 'Sal', 'SL', 1),
(625, 39, 'Santa Catarina', 'CA', 1),
(626, 39, 'Santa Cruz', 'CR', 1),
(627, 39, 'Sao Domingos', 'SD', 1),
(628, 39, 'Sao Filipe', 'SF', 1),
(629, 39, 'Sao Nicolau', 'SN', 1),
(630, 39, 'Sao Vicente', 'SV', 1),
(631, 39, 'Tarrafal', 'TA', 1),
(632, 40, 'Creek', 'CR', 1),
(633, 40, 'Eastern', 'EA', 1),
(634, 40, 'Midland', 'ML', 1),
(635, 40, 'South Town', 'ST', 1),
(636, 40, 'Spot Bay', 'SP', 1),
(637, 40, 'Stake Bay', 'SK', 1),
(638, 40, 'West End', 'WD', 1),
(639, 40, 'Western', 'WN', 1),
(640, 41, 'Bamingui-Bangoran', 'BBA', 1),
(641, 41, 'Basse-Kotto', 'BKO', 1),
(642, 41, 'Haute-Kotto', 'HKO', 1),
(643, 41, 'Haut-Mbomou', 'HMB', 1),
(644, 41, 'Kemo', 'KEM', 1),
(645, 41, 'Lobaye', 'LOB', 1),
(646, 41, 'Mambere-KadeÔ', 'MKD', 1),
(647, 41, 'Mbomou', 'MBO', 1),
(648, 41, 'Nana-Mambere', 'NMM', 1),
(649, 41, 'Ombella-M\'Poko', 'OMP', 1),
(650, 41, 'Ouaka', 'OUK', 1),
(651, 41, 'Ouham', 'OUH', 1),
(652, 41, 'Ouham-Pende', 'OPE', 1),
(653, 41, 'Vakaga', 'VAK', 1),
(654, 41, 'Nana-Grebizi', 'NGR', 1),
(655, 41, 'Sangha-Mbaere', 'SMB', 1),
(656, 41, 'Bangui', 'BAN', 1),
(657, 42, 'Batha', 'BA', 1),
(658, 42, 'Biltine', 'BI', 1),
(659, 42, 'Borkou-Ennedi-Tibesti', 'BE', 1),
(660, 42, 'Chari-Baguirmi', 'CB', 1),
(661, 42, 'Guera', 'GU', 1),
(662, 42, 'Kanem', 'KA', 1),
(663, 42, 'Lac', 'LA', 1),
(664, 42, 'Logone Occidental', 'LC', 1),
(665, 42, 'Logone Oriental', 'LR', 1),
(666, 42, 'Mayo-Kebbi', 'MK', 1),
(667, 42, 'Moyen-Chari', 'MC', 1),
(668, 42, 'Ouaddai', 'OU', 1),
(669, 42, 'Salamat', 'SA', 1),
(670, 42, 'Tandjile', 'TA', 1),
(671, 43, 'Aisen del General Carlos Ibanez', 'AI', 1),
(672, 43, 'Antofagasta', 'AN', 1),
(673, 43, 'Araucania', 'AR', 1),
(674, 43, 'Atacama', 'AT', 1),
(675, 43, 'Bio-Bio', 'BI', 1),
(676, 43, 'Coquimbo', 'CO', 1),
(677, 43, 'Libertador General Bernardo O\'Higgins', 'LI', 1),
(678, 43, 'Los Lagos', 'LL', 1),
(679, 43, 'Magallanes y de la Antartica Chilena', 'MA', 1),
(680, 43, 'Maule', 'ML', 1),
(681, 43, 'Region Metropolitana', 'RM', 1),
(682, 43, 'Tarapaca', 'TA', 1),
(683, 43, 'Valparaiso', 'VS', 1),
(684, 44, 'Anhui', 'AN', 1),
(685, 44, 'Beijing', 'BE', 1),
(686, 44, 'Chongqing', 'CH', 1),
(687, 44, 'Fujian', 'FU', 1),
(688, 44, 'Gansu', 'GA', 1),
(689, 44, 'Guangdong', 'GU', 1),
(690, 44, 'Guangxi', 'GX', 1),
(691, 44, 'Guizhou', 'GZ', 1),
(692, 44, 'Hainan', 'HA', 1),
(693, 44, 'Hebei', 'HB', 1),
(694, 44, 'Heilongjiang', 'HL', 1),
(695, 44, 'Henan', 'HE', 1),
(696, 44, 'Hong Kong', 'HK', 1),
(697, 44, 'Hubei', 'HU', 1),
(698, 44, 'Hunan', 'HN', 1),
(699, 44, 'Inner Mongolia', 'IM', 1),
(700, 44, 'Jiangsu', 'JI', 1),
(701, 44, 'Jiangxi', 'JX', 1),
(702, 44, 'Jilin', 'JL', 1),
(703, 44, 'Liaoning', 'LI', 1),
(704, 44, 'Macau', 'MA', 1),
(705, 44, 'Ningxia', 'NI', 1),
(706, 44, 'Shaanxi', 'SH', 1),
(707, 44, 'Shandong', 'SA', 1),
(708, 44, 'Shanghai', 'SG', 1),
(709, 44, 'Shanxi', 'SX', 1),
(710, 44, 'Sichuan', 'SI', 1),
(711, 44, 'Tianjin', 'TI', 1),
(712, 44, 'Xinjiang', 'XI', 1),
(713, 44, 'Yunnan', 'YU', 1),
(714, 44, 'Zhejiang', 'ZH', 1),
(715, 46, 'Direction Island', 'D', 1),
(716, 46, 'Home Island', 'H', 1),
(717, 46, 'Horsburgh Island', 'O', 1),
(718, 46, 'South Island', 'S', 1),
(719, 46, 'West Island', 'W', 1),
(720, 47, 'Amazonas', 'AMA', 1),
(721, 47, 'Antioquia', 'ANT', 1),
(722, 47, 'Arauca', 'ARA', 1),
(723, 47, 'Atlantico', 'ATL', 1),
(724, 47, 'Bogota D.C.', 'DC', 1),
(725, 47, 'Bolivar', 'BOL', 1),
(726, 47, 'Boyaca', 'BOY', 1),
(727, 47, 'Caldas', 'CAL', 1),
(728, 47, 'Caqueta', 'CAQ', 1),
(729, 47, 'Casanare', 'CAS', 1),
(730, 47, 'Cauca', 'CAU', 1),
(731, 47, 'Cesar', 'CES', 1),
(732, 47, 'Choco', 'CHO', 1),
(733, 47, 'Cordoba', 'COR', 1),
(734, 47, 'Cundinamarca', 'CUN', 1),
(735, 47, 'Guainia', 'GNA', 1),
(736, 47, 'Guajira', 'GJR', 1),
(737, 47, 'Guaviare', 'GUV', 1),
(738, 47, 'Huila', 'HUI', 1),
(739, 47, 'Magdalena', 'MAG', 1),
(740, 47, 'Meta', 'MET', 1),
(741, 47, 'Narino', 'NAR', 1),
(742, 47, 'Norte de Santander', 'NSA', 1),
(743, 47, 'Putumayo', 'PUT', 1),
(744, 47, 'Quindio', 'QUI', 1),
(745, 47, 'Risaralda', 'RIS', 1),
(746, 47, 'San Andres y Providencia', 'SAP', 1),
(747, 47, 'Santander', 'SAN', 1),
(748, 47, 'Sucre', 'SUC', 1),
(749, 47, 'Tolima', 'TOL', 1),
(750, 47, 'Valle del Cauca', 'VAC', 1),
(751, 47, 'Vaupes', 'VAU', 1),
(752, 47, 'Vichada', 'VID', 1),
(753, 48, 'Grande Comore', 'G', 1),
(754, 48, 'Anjouan', 'A', 1),
(755, 48, 'Moheli', 'M', 1),
(756, 49, 'Bouenza', 'BO', 1),
(757, 49, 'Brazzaville', 'BR', 1),
(758, 49, 'Cuvette', 'CU', 1),
(759, 49, 'Cuvette-Ouest', 'CO', 1),
(760, 49, 'Kouilou', 'KO', 1),
(761, 49, 'Lekoumou', 'LE', 1),
(762, 49, 'Likouala', 'LI', 1),
(763, 49, 'Niari', 'NI', 1),
(764, 49, 'Plateaux', 'PL', 1),
(765, 49, 'Pool', 'PO', 1),
(766, 49, 'Sangha', 'SA', 1),
(767, 50, 'Pukapuka', 'PU', 1),
(768, 50, 'Rakahanga', 'RK', 1),
(769, 50, 'Manihiki', 'MK', 1),
(770, 50, 'Penrhyn', 'PE', 1),
(771, 50, 'Nassau Island', 'NI', 1),
(772, 50, 'Surwarrow', 'SU', 1),
(773, 50, 'Palmerston', 'PA', 1),
(774, 50, 'Aitutaki', 'AI', 1),
(775, 50, 'Manuae', 'MA', 1),
(776, 50, 'Takutea', 'TA', 1),
(777, 50, 'Mitiaro', 'MT', 1),
(778, 50, 'Atiu', 'AT', 1),
(779, 50, 'Mauke', 'MU', 1),
(780, 50, 'Rarotonga', 'RR', 1),
(781, 50, 'Mangaia', 'MG', 1),
(782, 51, 'Alajuela', 'AL', 1),
(783, 51, 'Cartago', 'CA', 1),
(784, 51, 'Guanacaste', 'GU', 1),
(785, 51, 'Heredia', 'HE', 1),
(786, 51, 'Limon', 'LI', 1),
(787, 51, 'Puntarenas', 'PU', 1),
(788, 51, 'San Jose', 'SJ', 1),
(789, 52, 'Abengourou', 'ABE', 1),
(790, 52, 'Abidjan', 'ABI', 1),
(791, 52, 'Aboisso', 'ABO', 1),
(792, 52, 'Adiake', 'ADI', 1),
(793, 52, 'Adzope', 'ADZ', 1),
(794, 52, 'Agboville', 'AGB', 1),
(795, 52, 'Agnibilekrou', 'AGN', 1),
(796, 52, 'Alepe', 'ALE', 1),
(797, 52, 'Bocanda', 'BOC', 1),
(798, 52, 'Bangolo', 'BAN', 1),
(799, 52, 'Beoumi', 'BEO', 1),
(800, 52, 'Biankouma', 'BIA', 1),
(801, 52, 'Bondoukou', 'BDK', 1),
(802, 52, 'Bongouanou', 'BGN', 1),
(803, 52, 'Bouafle', 'BFL', 1),
(804, 52, 'Bouake', 'BKE', 1),
(805, 52, 'Bouna', 'BNA', 1),
(806, 52, 'Boundiali', 'BDL', 1),
(807, 52, 'Dabakala', 'DKL', 1),
(808, 52, 'Dabou', 'DBU', 1),
(809, 52, 'Daloa', 'DAL', 1),
(810, 52, 'Danane', 'DAN', 1),
(811, 52, 'Daoukro', 'DAO', 1),
(812, 52, 'Dimbokro', 'DIM', 1),
(813, 52, 'Divo', 'DIV', 1),
(814, 52, 'Duekoue', 'DUE', 1),
(815, 52, 'Ferkessedougou', 'FER', 1),
(816, 52, 'Gagnoa', 'GAG', 1),
(817, 52, 'Grand-Bassam', 'GBA', 1),
(818, 52, 'Grand-Lahou', 'GLA', 1),
(819, 52, 'Guiglo', 'GUI', 1),
(820, 52, 'Issia', 'ISS', 1),
(821, 52, 'Jacqueville', 'JAC', 1),
(822, 52, 'Katiola', 'KAT', 1),
(823, 52, 'Korhogo', 'KOR', 1),
(824, 52, 'Lakota', 'LAK', 1),
(825, 52, 'Man', 'MAN', 1),
(826, 52, 'Mankono', 'MKN', 1),
(827, 52, 'Mbahiakro', 'MBA', 1),
(828, 52, 'Odienne', 'ODI', 1),
(829, 52, 'Oume', 'OUM', 1),
(830, 52, 'Sakassou', 'SAK', 1),
(831, 52, 'San-Pedro', 'SPE', 1),
(832, 52, 'Sassandra', 'SAS', 1),
(833, 52, 'Seguela', 'SEG', 1),
(834, 52, 'Sinfra', 'SIN', 1),
(835, 52, 'Soubre', 'SOU', 1),
(836, 52, 'Tabou', 'TAB', 1),
(837, 52, 'Tanda', 'TAN', 1),
(838, 52, 'Tiebissou', 'TIE', 1),
(839, 52, 'Tingrela', 'TIN', 1),
(840, 52, 'Tiassale', 'TIA', 1),
(841, 52, 'Touba', 'TBA', 1),
(842, 52, 'Toulepleu', 'TLP', 1),
(843, 52, 'Toumodi', 'TMD', 1),
(844, 52, 'Vavoua', 'VAV', 1),
(845, 52, 'Yamoussoukro', 'YAM', 1),
(846, 52, 'Zuenoula', 'ZUE', 1),
(847, 53, 'Bjelovarsko-bilogorska', 'BB', 1),
(848, 53, 'Grad Zagreb', 'GZ', 1),
(849, 53, 'Dubrovačko-neretvanska', 'DN', 1),
(850, 53, 'Istarska', 'IS', 1),
(851, 53, 'Karlovačka', 'KA', 1),
(852, 53, 'Koprivničko-križevačka', 'KK', 1),
(853, 53, 'Krapinsko-zagorska', 'KZ', 1),
(854, 53, 'Ličko-senjska', 'LS', 1),
(855, 53, 'Međimurska', 'ME', 1),
(856, 53, 'Osječko-baranjska', 'OB', 1),
(857, 53, 'Požeško-slavonska', 'PS', 1),
(858, 53, 'Primorsko-goranska', 'PG', 1),
(859, 53, 'Šibensko-kninska', 'SK', 1),
(860, 53, 'Sisačko-moslavačka', 'SM', 1),
(861, 53, 'Brodsko-posavska', 'BP', 1),
(862, 53, 'Splitsko-dalmatinska', 'SD', 1),
(863, 53, 'Varaždinska', 'VA', 1),
(864, 53, 'Virovitičko-podravska', 'VP', 1),
(865, 53, 'Vukovarsko-srijemska', 'VS', 1),
(866, 53, 'Zadarska', 'ZA', 1),
(867, 53, 'Zagrebačka', 'ZG', 1),
(868, 54, 'Camaguey', 'CA', 1),
(869, 54, 'Ciego de Avila', 'CD', 1),
(870, 54, 'Cienfuegos', 'CI', 1),
(871, 54, 'Ciudad de La Habana', 'CH', 1),
(872, 54, 'Granma', 'GR', 1),
(873, 54, 'Guantanamo', 'GU', 1),
(874, 54, 'Holguin', 'HO', 1),
(875, 54, 'Isla de la Juventud', 'IJ', 1),
(876, 54, 'La Habana', 'LH', 1),
(877, 54, 'Las Tunas', 'LT', 1),
(878, 54, 'Matanzas', 'MA', 1),
(879, 54, 'Pinar del Rio', 'PR', 1),
(880, 54, 'Sancti Spiritus', 'SS', 1),
(881, 54, 'Santiago de Cuba', 'SC', 1),
(882, 54, 'Villa Clara', 'VC', 1),
(883, 55, 'Famagusta', 'F', 1),
(884, 55, 'Kyrenia', 'K', 1),
(885, 55, 'Larnaca', 'A', 1),
(886, 55, 'Limassol', 'I', 1),
(887, 55, 'Nicosia', 'N', 1),
(888, 55, 'Paphos', 'P', 1),
(889, 56, 'Ústecký', 'U', 1),
(890, 56, 'Jihočeský', 'C', 1),
(891, 56, 'Jihomoravský', 'B', 1),
(892, 56, 'Karlovarský', 'K', 1),
(893, 56, 'Královehradecký', 'H', 1),
(894, 56, 'Liberecký', 'L', 1),
(895, 56, 'Moravskoslezský', 'T', 1),
(896, 56, 'Olomoucký', 'M', 1),
(897, 56, 'Pardubický', 'E', 1),
(898, 56, 'Plzeňský', 'P', 1),
(899, 56, 'Praha', 'A', 1),
(900, 56, 'Středočeský', 'S', 1),
(901, 56, 'Vysočina', 'J', 1),
(902, 56, 'Zlínský', 'Z', 1),
(903, 57, 'Nordjyland', '81', 1),
(904, 57, 'Midtjylland', '82', 1),
(905, 57, 'Syddanmark', '83', 1),
(906, 57, 'Faroe Islands', 'FO', 1),
(907, 57, 'Hovedstaden', '84', 1),
(908, 57, 'Sjælland', '85', 1),
(919, 58, '\'Ali Sabih', 'S', 1),
(920, 58, 'Dikhil', 'K', 1),
(921, 58, 'Djibouti', 'J', 1),
(922, 58, 'Obock', 'O', 1),
(923, 58, 'Tadjoura', 'T', 1),
(924, 59, 'Saint Andrew Parish', 'AND', 1),
(925, 59, 'Saint David Parish', 'DAV', 1),
(926, 59, 'Saint George Parish', 'GEO', 1),
(927, 59, 'Saint John Parish', 'JOH', 1),
(928, 59, 'Saint Joseph Parish', 'JOS', 1),
(929, 59, 'Saint Luke Parish', 'LUK', 1),
(930, 59, 'Saint Mark Parish', 'MAR', 1),
(931, 59, 'Saint Patrick Parish', 'PAT', 1),
(932, 59, 'Saint Paul Parish', 'PAU', 1),
(933, 59, 'Saint Peter Parish', 'PET', 1),
(934, 60, 'Distrito Nacional', 'DN', 1),
(935, 60, 'Azua', 'AZ', 1),
(936, 60, 'Baoruco', 'BC', 1),
(937, 60, 'Barahona', 'BH', 1),
(938, 60, 'Dajabon', 'DJ', 1),
(939, 60, 'Duarte', 'DU', 1),
(940, 60, 'Elias Pina', 'EL', 1),
(941, 60, 'El Seybo', 'SY', 1),
(942, 60, 'Espaillat', 'ET', 1),
(943, 60, 'Hato Mayor', 'HM', 1),
(944, 60, 'Independencia', 'IN', 1),
(945, 60, 'La Altagracia', 'AL', 1),
(946, 60, 'La Romana', 'RO', 1),
(947, 60, 'La Vega', 'VE', 1),
(948, 60, 'Maria Trinidad Sanchez', 'MT', 1),
(949, 60, 'Monsenor Nouel', 'MN', 1),
(950, 60, 'Monte Cristi', 'MC', 1),
(951, 60, 'Monte Plata', 'MP', 1),
(952, 60, 'Pedernales', 'PD', 1),
(953, 60, 'Peravia (Bani)', 'PR', 1),
(954, 60, 'Puerto Plata', 'PP', 1),
(955, 60, 'Salcedo', 'SL', 1),
(956, 60, 'Samana', 'SM', 1),
(957, 60, 'Sanchez Ramirez', 'SH', 1),
(958, 60, 'San Cristobal', 'SC', 1),
(959, 60, 'San Jose de Ocoa', 'JO', 1),
(960, 60, 'San Juan', 'SJ', 1),
(961, 60, 'San Pedro de Macoris', 'PM', 1),
(962, 60, 'Santiago', 'SA', 1),
(963, 60, 'Santiago Rodriguez', 'ST', 1),
(964, 60, 'Santo Domingo', 'SD', 1),
(965, 60, 'Valverde', 'VA', 1),
(966, 61, 'Aileu', 'AL', 1),
(967, 61, 'Ainaro', 'AN', 1),
(968, 61, 'Baucau', 'BA', 1),
(969, 61, 'Bobonaro', 'BO', 1),
(970, 61, 'Cova Lima', 'CO', 1),
(971, 61, 'Dili', 'DI', 1),
(972, 61, 'Ermera', 'ER', 1),
(973, 61, 'Lautem', 'LA', 1),
(974, 61, 'Liquica', 'LI', 1),
(975, 61, 'Manatuto', 'MT', 1),
(976, 61, 'Manufahi', 'MF', 1),
(977, 61, 'Oecussi', 'OE', 1),
(978, 61, 'Viqueque', 'VI', 1),
(979, 62, 'Azuay', 'AZU', 1),
(980, 62, 'Bolivar', 'BOL', 1),
(981, 62, 'Ca&ntilde;ar', 'CAN', 1),
(982, 62, 'Carchi', 'CAR', 1),
(983, 62, 'Chimborazo', 'CHI', 1),
(984, 62, 'Cotopaxi', 'COT', 1),
(985, 62, 'El Oro', 'EOR', 1),
(986, 62, 'Esmeraldas', 'ESM', 1),
(987, 62, 'Gal&aacute;pagos', 'GPS', 1),
(988, 62, 'Guayas', 'GUA', 1),
(989, 62, 'Imbabura', 'IMB', 1),
(990, 62, 'Loja', 'LOJ', 1),
(991, 62, 'Los Rios', 'LRO', 1),
(992, 62, 'Manab&iacute;', 'MAN', 1),
(993, 62, 'Morona Santiago', 'MSA', 1),
(994, 62, 'Napo', 'NAP', 1),
(995, 62, 'Orellana', 'ORE', 1),
(996, 62, 'Pastaza', 'PAS', 1),
(997, 62, 'Pichincha', 'PIC', 1),
(998, 62, 'Sucumb&iacute;os', 'SUC', 1),
(999, 62, 'Tungurahua', 'TUN', 1),
(1000, 62, 'Zamora Chinchipe', 'ZCH', 1),
(1001, 63, 'Ad Daqahliyah', 'DHY', 1),
(1002, 63, 'Al Bahr al Ahmar', 'BAM', 1),
(1003, 63, 'Al Buhayrah', 'BHY', 1),
(1004, 63, 'Al Fayyum', 'FYM', 1),
(1005, 63, 'Al Gharbiyah', 'GBY', 1),
(1006, 63, 'Al Iskandariyah', 'IDR', 1),
(1007, 63, 'Al Isma\'iliyah', 'IML', 1),
(1008, 63, 'Al Jizah', 'JZH', 1),
(1009, 63, 'Al Minufiyah', 'MFY', 1),
(1010, 63, 'Al Minya', 'MNY', 1),
(1011, 63, 'Al Qahirah', 'QHR', 1),
(1012, 63, 'Al Qalyubiyah', 'QLY', 1),
(1013, 63, 'Al Wadi al Jadid', 'WJD', 1),
(1014, 63, 'Ash Sharqiyah', 'SHQ', 1),
(1015, 63, 'As Suways', 'SWY', 1),
(1016, 63, 'Aswan', 'ASW', 1),
(1017, 63, 'Asyut', 'ASY', 1),
(1018, 63, 'Bani Suwayf', 'BSW', 1),
(1019, 63, 'Bur Sa\'id', 'BSD', 1),
(1020, 63, 'Dumyat', 'DMY', 1),
(1021, 63, 'Janub Sina\'', 'JNS', 1),
(1022, 63, 'Kafr ash Shaykh', 'KSH', 1),
(1023, 63, 'Matruh', 'MAT', 1),
(1024, 63, 'Qina', 'QIN', 1),
(1025, 63, 'Shamal Sina\'', 'SHS', 1),
(1026, 63, 'Suhaj', 'SUH', 1),
(1027, 64, 'Ahuachapan', 'AH', 1),
(1028, 64, 'Cabanas', 'CA', 1),
(1029, 64, 'Chalatenango', 'CH', 1),
(1030, 64, 'Cuscatlan', 'CU', 1),
(1031, 64, 'La Libertad', 'LB', 1),
(1032, 64, 'La Paz', 'PZ', 1),
(1033, 64, 'La Union', 'UN', 1),
(1034, 64, 'Morazan', 'MO', 1),
(1035, 64, 'San Miguel', 'SM', 1),
(1036, 64, 'San Salvador', 'SS', 1),
(1037, 64, 'San Vicente', 'SV', 1),
(1038, 64, 'Santa Ana', 'SA', 1),
(1039, 64, 'Sonsonate', 'SO', 1),
(1040, 64, 'Usulutan', 'US', 1),
(1041, 65, 'Provincia Annobon', 'AN', 1),
(1042, 65, 'Provincia Bioko Norte', 'BN', 1),
(1043, 65, 'Provincia Bioko Sur', 'BS', 1),
(1044, 65, 'Provincia Centro Sur', 'CS', 1),
(1045, 65, 'Provincia Kie-Ntem', 'KN', 1),
(1046, 65, 'Provincia Litoral', 'LI', 1),
(1047, 65, 'Provincia Wele-Nzas', 'WN', 1),
(1048, 66, 'Central (Maekel)', 'MA', 1),
(1049, 66, 'Anseba (Keren)', 'KE', 1),
(1050, 66, 'Southern Red Sea (Debub-Keih-Bahri)', 'DK', 1),
(1051, 66, 'Northern Red Sea (Semien-Keih-Bahri)', 'SK', 1),
(1052, 66, 'Southern (Debub)', 'DE', 1),
(1053, 66, 'Gash-Barka (Barentu)', 'BR', 1),
(1054, 67, 'Harjumaa (Tallinn)', 'HA', 1),
(1055, 67, 'Hiiumaa (Kardla)', 'HI', 1),
(1056, 67, 'Ida-Virumaa (Johvi)', 'IV', 1),
(1057, 67, 'Jarvamaa (Paide)', 'JA', 1),
(1058, 67, 'Jogevamaa (Jogeva)', 'JO', 1),
(1059, 67, 'Laane-Virumaa (Rakvere)', 'LV', 1),
(1060, 67, 'Laanemaa (Haapsalu)', 'LA', 1),
(1061, 67, 'Parnumaa (Parnu)', 'PA', 1),
(1062, 67, 'Polvamaa (Polva)', 'PO', 1),
(1063, 67, 'Raplamaa (Rapla)', 'RA', 1),
(1064, 67, 'Saaremaa (Kuessaare)', 'SA', 1),
(1065, 67, 'Tartumaa (Tartu)', 'TA', 1),
(1066, 67, 'Valgamaa (Valga)', 'VA', 1),
(1067, 67, 'Viljandimaa (Viljandi)', 'VI', 1),
(1068, 67, 'Vorumaa (Voru)', 'VO', 1),
(1069, 68, 'Afar', 'AF', 1),
(1070, 68, 'Amhara', 'AH', 1),
(1071, 68, 'Benishangul-Gumaz', 'BG', 1),
(1072, 68, 'Gambela', 'GB', 1),
(1073, 68, 'Hariai', 'HR', 1),
(1074, 68, 'Oromia', 'OR', 1),
(1075, 68, 'Somali', 'SM', 1),
(1076, 68, 'Southern Nations - Nationalities and Peoples Region', 'SN', 1),
(1077, 68, 'Tigray', 'TG', 1),
(1078, 68, 'Addis Ababa', 'AA', 1),
(1079, 68, 'Dire Dawa', 'DD', 1),
(1080, 71, 'Central Division', 'C', 1),
(1081, 71, 'Northern Division', 'N', 1),
(1082, 71, 'Eastern Division', 'E', 1),
(1083, 71, 'Western Division', 'W', 1),
(1084, 71, 'Rotuma', 'R', 1),
(1085, 72, 'Ahvenanmaan lääni', 'AL', 1),
(1086, 72, 'Etelä-Suomen lääni', 'ES', 1),
(1087, 72, 'Itä-Suomen lääni', 'IS', 1),
(1088, 72, 'Länsi-Suomen lääni', 'LS', 1),
(1089, 72, 'Lapin lääni', 'LA', 1),
(1090, 72, 'Oulun lääni', 'OU', 1),
(1114, 74, 'Ain', '01', 1),
(1115, 74, 'Aisne', '02', 1),
(1116, 74, 'Allier', '03', 1),
(1117, 74, 'Alpes de Haute Provence', '04', 1),
(1118, 74, 'Hautes-Alpes', '05', 1),
(1119, 74, 'Alpes Maritimes', '06', 1),
(1120, 74, 'Ard&egrave;che', '07', 1),
(1121, 74, 'Ardennes', '08', 1),
(1122, 74, 'Ari&egrave;ge', '09', 1),
(1123, 74, 'Aube', '10', 1),
(1124, 74, 'Aude', '11', 1),
(1125, 74, 'Aveyron', '12', 1),
(1126, 74, 'Bouches du Rh&ocirc;ne', '13', 1),
(1127, 74, 'Calvados', '14', 1),
(1128, 74, 'Cantal', '15', 1),
(1129, 74, 'Charente', '16', 1),
(1130, 74, 'Charente Maritime', '17', 1),
(1131, 74, 'Cher', '18', 1),
(1132, 74, 'Corr&egrave;ze', '19', 1),
(1133, 74, 'Corse du Sud', '2A', 1),
(1134, 74, 'Haute Corse', '2B', 1),
(1135, 74, 'C&ocirc;te d&#039;or', '21', 1),
(1136, 74, 'C&ocirc;tes d&#039;Armor', '22', 1),
(1137, 74, 'Creuse', '23', 1),
(1138, 74, 'Dordogne', '24', 1),
(1139, 74, 'Doubs', '25', 1),
(1140, 74, 'Dr&ocirc;me', '26', 1),
(1141, 74, 'Eure', '27', 1),
(1142, 74, 'Eure et Loir', '28', 1),
(1143, 74, 'Finist&egrave;re', '29', 1),
(1144, 74, 'Gard', '30', 1),
(1145, 74, 'Haute Garonne', '31', 1),
(1146, 74, 'Gers', '32', 1),
(1147, 74, 'Gironde', '33', 1),
(1148, 74, 'H&eacute;rault', '34', 1),
(1149, 74, 'Ille et Vilaine', '35', 1),
(1150, 74, 'Indre', '36', 1),
(1151, 74, 'Indre et Loire', '37', 1),
(1152, 74, 'Is&eacute;re', '38', 1),
(1153, 74, 'Jura', '39', 1),
(1154, 74, 'Landes', '40', 1),
(1155, 74, 'Loir et Cher', '41', 1),
(1156, 74, 'Loire', '42', 1),
(1157, 74, 'Haute Loire', '43', 1),
(1158, 74, 'Loire Atlantique', '44', 1),
(1159, 74, 'Loiret', '45', 1),
(1160, 74, 'Lot', '46', 1),
(1161, 74, 'Lot et Garonne', '47', 1),
(1162, 74, 'Loz&egrave;re', '48', 1),
(1163, 74, 'Maine et Loire', '49', 1),
(1164, 74, 'Manche', '50', 1),
(1165, 74, 'Marne', '51', 1),
(1166, 74, 'Haute Marne', '52', 1),
(1167, 74, 'Mayenne', '53', 1),
(1168, 74, 'Meurthe et Moselle', '54', 1),
(1169, 74, 'Meuse', '55', 1),
(1170, 74, 'Morbihan', '56', 1),
(1171, 74, 'Moselle', '57', 1),
(1172, 74, 'Ni&egrave;vre', '58', 1),
(1173, 74, 'Nord', '59', 1),
(1174, 74, 'Oise', '60', 1),
(1175, 74, 'Orne', '61', 1),
(1176, 74, 'Pas de Calais', '62', 1),
(1177, 74, 'Puy de D&ocirc;me', '63', 1),
(1178, 74, 'Pyr&eacute;n&eacute;es Atlantiques', '64', 1),
(1179, 74, 'Hautes Pyr&eacute;n&eacute;es', '65', 1),
(1180, 74, 'Pyr&eacute;n&eacute;es Orientales', '66', 1),
(1181, 74, 'Bas Rhin', '67', 1),
(1182, 74, 'Haut Rhin', '68', 1),
(1183, 74, 'Rh&ocirc;ne', '69', 1),
(1184, 74, 'Haute Sa&ocirc;ne', '70', 1),
(1185, 74, 'Sa&ocirc;ne et Loire', '71', 1),
(1186, 74, 'Sarthe', '72', 1),
(1187, 74, 'Savoie', '73', 1),
(1188, 74, 'Haute Savoie', '74', 1),
(1189, 74, 'Paris', '75', 1),
(1190, 74, 'Seine Maritime', '76', 1),
(1191, 74, 'Seine et Marne', '77', 1),
(1192, 74, 'Yvelines', '78', 1),
(1193, 74, 'Deux S&egrave;vres', '79', 1),
(1194, 74, 'Somme', '80', 1),
(1195, 74, 'Tarn', '81', 1),
(1196, 74, 'Tarn et Garonne', '82', 1),
(1197, 74, 'Var', '83', 1),
(1198, 74, 'Vaucluse', '84', 1),
(1199, 74, 'Vend&eacute;e', '85', 1),
(1200, 74, 'Vienne', '86', 1),
(1201, 74, 'Haute Vienne', '87', 1),
(1202, 74, 'Vosges', '88', 1),
(1203, 74, 'Yonne', '89', 1),
(1204, 74, 'Territoire de Belfort', '90', 1),
(1205, 74, 'Essonne', '91', 1),
(1206, 74, 'Hauts de Seine', '92', 1),
(1207, 74, 'Seine St-Denis', '93', 1),
(1208, 74, 'Val de Marne', '94', 1),
(1209, 74, 'Val d\'Oise', '95', 1),
(1210, 76, 'Archipel des Marquises', 'M', 1),
(1211, 76, 'Archipel des Tuamotu', 'T', 1),
(1212, 76, 'Archipel des Tubuai', 'I', 1),
(1213, 76, 'Iles du Vent', 'V', 1),
(1214, 76, 'Iles Sous-le-Vent', 'S', 1),
(1215, 77, 'Iles Crozet', 'C', 1),
(1216, 77, 'Iles Kerguelen', 'K', 1),
(1217, 77, 'Ile Amsterdam', 'A', 1),
(1218, 77, 'Ile Saint-Paul', 'P', 1),
(1219, 77, 'Adelie Land', 'D', 1),
(1220, 78, 'Estuaire', 'ES', 1),
(1221, 78, 'Haut-Ogooue', 'HO', 1),
(1222, 78, 'Moyen-Ogooue', 'MO', 1),
(1223, 78, 'Ngounie', 'NG', 1),
(1224, 78, 'Nyanga', 'NY', 1),
(1225, 78, 'Ogooue-Ivindo', 'OI', 1),
(1226, 78, 'Ogooue-Lolo', 'OL', 1),
(1227, 78, 'Ogooue-Maritime', 'OM', 1),
(1228, 78, 'Woleu-Ntem', 'WN', 1),
(1229, 79, 'Banjul', 'BJ', 1),
(1230, 79, 'Basse', 'BS', 1),
(1231, 79, 'Brikama', 'BR', 1),
(1232, 79, 'Janjangbure', 'JA', 1),
(1233, 79, 'Kanifeng', 'KA', 1),
(1234, 79, 'Kerewan', 'KE', 1),
(1235, 79, 'Kuntaur', 'KU', 1),
(1236, 79, 'Mansakonko', 'MA', 1),
(1237, 79, 'Lower River', 'LR', 1),
(1238, 79, 'Central River', 'CR', 1),
(1239, 79, 'North Bank', 'NB', 1),
(1240, 79, 'Upper River', 'UR', 1),
(1241, 79, 'Western', 'WE', 1),
(1242, 80, 'Abkhazia', 'AB', 1),
(1243, 80, 'Ajaria', 'AJ', 1),
(1244, 80, 'Tbilisi', 'TB', 1),
(1245, 80, 'Guria', 'GU', 1),
(1246, 80, 'Imereti', 'IM', 1),
(1247, 80, 'Kakheti', 'KA', 1),
(1248, 80, 'Kvemo Kartli', 'KK', 1),
(1249, 80, 'Mtskheta-Mtianeti', 'MM', 1),
(1250, 80, 'Racha Lechkhumi and Kvemo Svanet', 'RL', 1),
(1251, 80, 'Samegrelo-Zemo Svaneti', 'SZ', 1),
(1252, 80, 'Samtskhe-Javakheti', 'SJ', 1),
(1253, 80, 'Shida Kartli', 'SK', 1),
(1254, 81, 'Baden-Württemberg', 'BW', 1),
(1255, 81, 'Bayern', 'BY', 1),
(1256, 81, 'Berlin', 'BE', 1),
(1257, 81, 'Brandenburg', 'BB', 1),
(1258, 81, 'Bremen', 'HB', 1),
(1259, 81, 'Hamburg', 'HH', 1),
(1260, 81, 'Hessen', 'HE', 1),
(1261, 81, 'Mecklenburg-Vorpommern', 'MV', 1),
(1262, 81, 'Niedersachsen', 'NI', 1),
(1263, 81, 'Nordrhein-Westfalen', 'NW', 1),
(1264, 81, 'Rheinland-Pfalz', 'RP', 1),
(1265, 81, 'Saarland', 'SL', 1),
(1266, 81, 'Sachsen', 'SN', 1),
(1267, 81, 'Sachsen-Anhalt', 'ST', 1),
(1268, 81, 'Schleswig-Holstein', 'SH', 1),
(1269, 81, 'Thüringen', 'TH', 1),
(1270, 82, 'Ashanti Region', 'AS', 1),
(1271, 82, 'Brong-Ahafo Region', 'BA', 1),
(1272, 82, 'Central Region', 'CE', 1),
(1273, 82, 'Eastern Region', 'EA', 1),
(1274, 82, 'Greater Accra Region', 'GA', 1),
(1275, 82, 'Northern Region', 'NO', 1),
(1276, 82, 'Upper East Region', 'UE', 1),
(1277, 82, 'Upper West Region', 'UW', 1),
(1278, 82, 'Volta Region', 'VO', 1),
(1279, 82, 'Western Region', 'WE', 1),
(1280, 84, 'Attica', 'AT', 1),
(1281, 84, 'Central Greece', 'CN', 1),
(1282, 84, 'Central Macedonia', 'CM', 1),
(1283, 84, 'Crete', 'CR', 1),
(1284, 84, 'East Macedonia and Thrace', 'EM', 1),
(1285, 84, 'Epirus', 'EP', 1),
(1286, 84, 'Ionian Islands', 'II', 1),
(1287, 84, 'North Aegean', 'NA', 1),
(1288, 84, 'Peloponnesos', 'PP', 1),
(1289, 84, 'South Aegean', 'SA', 1),
(1290, 84, 'Thessaly', 'TH', 1),
(1291, 84, 'West Greece', 'WG', 1),
(1292, 84, 'West Macedonia', 'WM', 1),
(1293, 85, 'Avannaa', 'A', 1),
(1294, 85, 'Tunu', 'T', 1),
(1295, 85, 'Kitaa', 'K', 1),
(1296, 86, 'Saint Andrew', 'A', 1),
(1297, 86, 'Saint David', 'D', 1),
(1298, 86, 'Saint George', 'G', 1),
(1299, 86, 'Saint John', 'J', 1),
(1300, 86, 'Saint Mark', 'M', 1),
(1301, 86, 'Saint Patrick', 'P', 1),
(1302, 86, 'Carriacou', 'C', 1),
(1303, 86, 'Petit Martinique', 'Q', 1),
(1304, 89, 'Alta Verapaz', 'AV', 1),
(1305, 89, 'Baja Verapaz', 'BV', 1),
(1306, 89, 'Chimaltenango', 'CM', 1),
(1307, 89, 'Chiquimula', 'CQ', 1),
(1308, 89, 'El Peten', 'PE', 1),
(1309, 89, 'El Progreso', 'PR', 1),
(1310, 89, 'El Quiche', 'QC', 1),
(1311, 89, 'Escuintla', 'ES', 1),
(1312, 89, 'Guatemala', 'GU', 1),
(1313, 89, 'Huehuetenango', 'HU', 1),
(1314, 89, 'Izabal', 'IZ', 1),
(1315, 89, 'Jalapa', 'JA', 1),
(1316, 89, 'Jutiapa', 'JU', 1),
(1317, 89, 'Quetzaltenango', 'QZ', 1),
(1318, 89, 'Retalhuleu', 'RE', 1),
(1319, 89, 'Sacatepequez', 'ST', 1),
(1320, 89, 'San Marcos', 'SM', 1),
(1321, 89, 'Santa Rosa', 'SR', 1),
(1322, 89, 'Solola', 'SO', 1),
(1323, 89, 'Suchitepequez', 'SU', 1),
(1324, 89, 'Totonicapan', 'TO', 1),
(1325, 89, 'Zacapa', 'ZA', 1),
(1326, 90, 'Conakry', 'CNK', 1),
(1327, 90, 'Beyla', 'BYL', 1),
(1328, 90, 'Boffa', 'BFA', 1),
(1329, 90, 'Boke', 'BOK', 1),
(1330, 90, 'Coyah', 'COY', 1),
(1331, 90, 'Dabola', 'DBL', 1),
(1332, 90, 'Dalaba', 'DLB', 1),
(1333, 90, 'Dinguiraye', 'DGR', 1),
(1334, 90, 'Dubreka', 'DBR', 1),
(1335, 90, 'Faranah', 'FRN', 1),
(1336, 90, 'Forecariah', 'FRC', 1),
(1337, 90, 'Fria', 'FRI', 1),
(1338, 90, 'Gaoual', 'GAO', 1),
(1339, 90, 'Gueckedou', 'GCD', 1),
(1340, 90, 'Kankan', 'KNK', 1),
(1341, 90, 'Kerouane', 'KRN', 1),
(1342, 90, 'Kindia', 'KND', 1),
(1343, 90, 'Kissidougou', 'KSD', 1),
(1344, 90, 'Koubia', 'KBA', 1),
(1345, 90, 'Koundara', 'KDA', 1),
(1346, 90, 'Kouroussa', 'KRA', 1),
(1347, 90, 'Labe', 'LAB', 1),
(1348, 90, 'Lelouma', 'LLM', 1),
(1349, 90, 'Lola', 'LOL', 1),
(1350, 90, 'Macenta', 'MCT', 1),
(1351, 90, 'Mali', 'MAL', 1),
(1352, 90, 'Mamou', 'MAM', 1),
(1353, 90, 'Mandiana', 'MAN', 1),
(1354, 90, 'Nzerekore', 'NZR', 1),
(1355, 90, 'Pita', 'PIT', 1),
(1356, 90, 'Siguiri', 'SIG', 1),
(1357, 90, 'Telimele', 'TLM', 1),
(1358, 90, 'Tougue', 'TOG', 1),
(1359, 90, 'Yomou', 'YOM', 1),
(1360, 91, 'Bafata Region', 'BF', 1),
(1361, 91, 'Biombo Region', 'BB', 1),
(1362, 91, 'Bissau Region', 'BS', 1),
(1363, 91, 'Bolama Region', 'BL', 1),
(1364, 91, 'Cacheu Region', 'CA', 1),
(1365, 91, 'Gabu Region', 'GA', 1),
(1366, 91, 'Oio Region', 'OI', 1),
(1367, 91, 'Quinara Region', 'QU', 1),
(1368, 91, 'Tombali Region', 'TO', 1),
(1369, 92, 'Barima-Waini', 'BW', 1),
(1370, 92, 'Cuyuni-Mazaruni', 'CM', 1),
(1371, 92, 'Demerara-Mahaica', 'DM', 1),
(1372, 92, 'East Berbice-Corentyne', 'EC', 1),
(1373, 92, 'Essequibo Islands-West Demerara', 'EW', 1),
(1374, 92, 'Mahaica-Berbice', 'MB', 1),
(1375, 92, 'Pomeroon-Supenaam', 'PM', 1),
(1376, 92, 'Potaro-Siparuni', 'PI', 1),
(1377, 92, 'Upper Demerara-Berbice', 'UD', 1),
(1378, 92, 'Upper Takutu-Upper Essequibo', 'UT', 1),
(1379, 93, 'Artibonite', 'AR', 1),
(1380, 93, 'Centre', 'CE', 1),
(1381, 93, 'Grand\'Anse', 'GA', 1),
(1382, 93, 'Nord', 'ND', 1),
(1383, 93, 'Nord-Est', 'NE', 1),
(1384, 93, 'Nord-Ouest', 'NO', 1),
(1385, 93, 'Ouest', 'OU', 1),
(1386, 93, 'Sud', 'SD', 1),
(1387, 93, 'Sud-Est', 'SE', 1),
(1388, 94, 'Flat Island', 'F', 1),
(1389, 94, 'McDonald Island', 'M', 1),
(1390, 94, 'Shag Island', 'S', 1),
(1391, 94, 'Heard Island', 'H', 1),
(1392, 95, 'Atlantida', 'AT', 1),
(1393, 95, 'Choluteca', 'CH', 1),
(1394, 95, 'Colon', 'CL', 1),
(1395, 95, 'Comayagua', 'CM', 1),
(1396, 95, 'Copan', 'CP', 1),
(1397, 95, 'Cortes', 'CR', 1),
(1398, 95, 'El Paraiso', 'PA', 1),
(1399, 95, 'Francisco Morazan', 'FM', 1),
(1400, 95, 'Gracias a Dios', 'GD', 1),
(1401, 95, 'Intibuca', 'IN', 1),
(1402, 95, 'Islas de la Bahia (Bay Islands)', 'IB', 1),
(1403, 95, 'La Paz', 'PZ', 1),
(1404, 95, 'Lempira', 'LE', 1),
(1405, 95, 'Ocotepeque', 'OC', 1),
(1406, 95, 'Olancho', 'OL', 1),
(1407, 95, 'Santa Barbara', 'SB', 1),
(1408, 95, 'Valle', 'VA', 1),
(1409, 95, 'Yoro', 'YO', 1),
(1410, 96, 'Central and Western Hong Kong Island', 'HCW', 1),
(1411, 96, 'Eastern Hong Kong Island', 'HEA', 1),
(1412, 96, 'Southern Hong Kong Island', 'HSO', 1),
(1413, 96, 'Wan Chai Hong Kong Island', 'HWC', 1),
(1414, 96, 'Kowloon City Kowloon', 'KKC', 1),
(1415, 96, 'Kwun Tong Kowloon', 'KKT', 1),
(1416, 96, 'Sham Shui Po Kowloon', 'KSS', 1),
(1417, 96, 'Wong Tai Sin Kowloon', 'KWT', 1),
(1418, 96, 'Yau Tsim Mong Kowloon', 'KYT', 1),
(1419, 96, 'Islands New Territories', 'NIS', 1),
(1420, 96, 'Kwai Tsing New Territories', 'NKT', 1),
(1421, 96, 'North New Territories', 'NNO', 1),
(1422, 96, 'Sai Kung New Territories', 'NSK', 1),
(1423, 96, 'Sha Tin New Territories', 'NST', 1),
(1424, 96, 'Tai Po New Territories', 'NTP', 1),
(1425, 96, 'Tsuen Wan New Territories', 'NTW', 1),
(1426, 96, 'Tuen Mun New Territories', 'NTM', 1),
(1427, 96, 'Yuen Long New Territories', 'NYL', 1),
(1467, 98, 'Austurland', 'AL', 1),
(1468, 98, 'Hofuoborgarsvaeoi', 'HF', 1),
(1469, 98, 'Norourland eystra', 'NE', 1),
(1470, 98, 'Norourland vestra', 'NV', 1),
(1471, 98, 'Suourland', 'SL', 1),
(1472, 98, 'Suournes', 'SN', 1),
(1473, 98, 'Vestfiroir', 'VF', 1),
(1474, 98, 'Vesturland', 'VL', 1),
(1475, 99, 'Andaman and Nicobar Islands', 'AN', 1),
(1476, 99, 'Andhra Pradesh', 'AP', 1),
(1477, 99, 'Arunachal Pradesh', 'AR', 1),
(1478, 99, 'Assam', 'AS', 1),
(1479, 99, 'Bihar', 'BR', 1),
(1480, 99, 'Chandigarh', 'CH', 1),
(1481, 99, 'Dadra and Nagar Haveli and Davan and Diu', 'DH', 1),
(1483, 99, 'Delhi', 'DL', 1),
(1484, 99, 'Goa', 'GA', 1),
(1485, 99, 'Gujarat', 'GJ', 1),
(1486, 99, 'Haryana', 'HR', 1),
(1487, 99, 'Himachal Pradesh', 'HP', 1),
(1488, 99, 'Jammu and Kashmir', 'JK', 1),
(1489, 99, 'Karnataka', 'KA', 1),
(1490, 99, 'Kerala', 'KL', 1),
(1491, 99, 'Lakshadweep', 'LD', 1),
(1492, 99, 'Madhya Pradesh', 'MP', 1),
(1493, 99, 'Maharashtra', 'MH', 1),
(1494, 99, 'Manipur', 'MN', 1),
(1495, 99, 'Meghalaya', 'ML', 1),
(1496, 99, 'Mizoram', 'MZ', 1),
(1497, 99, 'Nagaland', 'NL', 1),
(1498, 99, 'Odisha', 'OR', 1),
(1499, 99, 'Puducherry', 'PY', 1),
(1500, 99, 'Punjab', 'PB', 1),
(1501, 99, 'Rajasthan', 'RJ', 1),
(1502, 99, 'Sikkim', 'SK', 1),
(1503, 99, 'Tamil Nadu', 'TN', 1),
(1504, 99, 'Tripura', 'TR', 1),
(1505, 99, 'Uttar Pradesh', 'UP', 1),
(1506, 99, 'West Bengal', 'WB', 1),
(1507, 100, 'Aceh', 'AC', 1),
(1508, 100, 'Bali', 'BA', 1),
(1509, 100, 'Banten', 'BT', 1),
(1510, 100, 'Bengkulu', 'BE', 1),
(1511, 100, 'Kalimantan Utara', 'BD', 1),
(1512, 100, 'Gorontalo', 'GO', 1),
(1513, 100, 'Jakarta', 'JK', 1),
(1514, 100, 'Jambi', 'JA', 1),
(1515, 100, 'Jawa Barat', 'JB', 1),
(1516, 100, 'Jawa Tengah', 'JT', 1),
(1517, 100, 'Jawa Timur', 'JI', 1),
(1518, 100, 'Kalimantan Barat', 'KB', 1),
(1519, 100, 'Kalimantan Selatan', 'KS', 1),
(1520, 100, 'Kalimantan Tengah', 'KT', 1),
(1521, 100, 'Kalimantan Timur', 'KI', 1),
(1522, 100, 'Kepulauan Bangka Belitung', 'BB', 1),
(1523, 100, 'Lampung', 'LA', 1),
(1524, 100, 'Maluku', 'MA', 1),
(1525, 100, 'Maluku Utara', 'MU', 1),
(1526, 100, 'Nusa Tenggara Barat', 'NB', 1),
(1527, 100, 'Nusa Tenggara Timur', 'NT', 1),
(1528, 100, 'Papua', 'PA', 1),
(1529, 100, 'Riau', 'RI', 1),
(1530, 100, 'Sulawesi Selatan', 'SN', 1),
(1531, 100, 'Sulawesi Tengah', 'ST', 1),
(1532, 100, 'Sulawesi Tenggara', 'SG', 1),
(1533, 100, 'Sulawesi Utara', 'SA', 1),
(1534, 100, 'Sumatera Barat', 'SB', 1),
(1535, 100, 'Sumatera Selatan', 'SS', 1),
(1536, 100, 'Sumatera Utara', 'SU', 1),
(1537, 100, 'Yogyakarta', 'YO', 1),
(1538, 101, 'Tehran', 'TEH', 1),
(1539, 101, 'Qom', 'QOM', 1),
(1540, 101, 'Markazi', 'MKZ', 1),
(1541, 101, 'Qazvin', 'QAZ', 1),
(1542, 101, 'Gilan', 'GIL', 1),
(1543, 101, 'Ardabil', 'ARD', 1),
(1544, 101, 'Zanjan', 'ZAN', 1),
(1545, 101, 'East Azarbaijan', 'EAZ', 1),
(1546, 101, 'West Azarbaijan', 'WEZ', 1),
(1547, 101, 'Kurdistan', 'KRD', 1),
(1548, 101, 'Hamadan', 'HMD', 1),
(1549, 101, 'Kermanshah', 'KRM', 1),
(1550, 101, 'Ilam', 'ILM', 1),
(1551, 101, 'Lorestan', 'LRS', 1),
(1552, 101, 'Khuzestan', 'KZT', 1),
(1553, 101, 'Chahar Mahaal and Bakhtiari', 'CMB', 1),
(1554, 101, 'Kohkiluyeh and Buyer Ahmad', 'KBA', 1),
(1555, 101, 'Bushehr', 'BSH', 1),
(1556, 101, 'Fars', 'FAR', 1),
(1557, 101, 'Hormozgan', 'HRM', 1),
(1558, 101, 'Sistan and Baluchistan', 'SBL', 1),
(1559, 101, 'Kerman', 'KRB', 1),
(1560, 101, 'Yazd', 'YZD', 1),
(1561, 101, 'Esfahan', 'EFH', 1),
(1562, 101, 'Semnan', 'SMN', 1),
(1563, 101, 'Mazandaran', 'MZD', 1),
(1564, 101, 'Golestan', 'GLS', 1),
(1565, 101, 'North Khorasan', 'NKH', 1),
(1566, 101, 'Razavi Khorasan', 'RKH', 1),
(1567, 101, 'South Khorasan', 'SKH', 1),
(1568, 102, 'Baghdad', 'BD', 1),
(1569, 102, 'Salah ad Din', 'SD', 1),
(1570, 102, 'Diyala', 'DY', 1),
(1571, 102, 'Wasit', 'WS', 1),
(1572, 102, 'Maysan', 'MY', 1),
(1573, 102, 'Al Basrah', 'BA', 1),
(1574, 102, 'Dhi Qar', 'DQ', 1),
(1575, 102, 'Al Muthanna', 'MU', 1),
(1576, 102, 'Al Qadisyah', 'QA', 1),
(1577, 102, 'Babil', 'BB', 1),
(1578, 102, 'Al Karbala', 'KB', 1),
(1579, 102, 'An Najaf', 'NJ', 1),
(1580, 102, 'Al Anbar', 'AB', 1),
(1581, 102, 'Ninawa', 'NN', 1),
(1582, 102, 'Dahuk', 'DH', 1),
(1583, 102, 'Arbil', 'AL', 1),
(1584, 102, 'Kirkuk', 'KI', 1),
(1585, 102, 'As Sulaymaniyah', 'SL', 1),
(1586, 103, 'Carlow', 'CA', 1),
(1587, 103, 'Cavan', 'CV', 1),
(1588, 103, 'Clare', 'CL', 1),
(1589, 103, 'Cork', 'CO', 1),
(1590, 103, 'Donegal', 'DO', 1),
(1591, 103, 'Dublin', 'DU', 1),
(1592, 103, 'Galway', 'GA', 1),
(1593, 103, 'Kerry', 'KE', 1),
(1594, 103, 'Kildare', 'KI', 1),
(1595, 103, 'Kilkenny', 'KL', 1),
(1596, 103, 'Laois', 'LA', 1),
(1597, 103, 'Leitrim', 'LE', 1),
(1598, 103, 'Limerick', 'LI', 1),
(1599, 103, 'Longford', 'LO', 1),
(1600, 103, 'Louth', 'LU', 1),
(1601, 103, 'Mayo', 'MA', 1),
(1602, 103, 'Meath', 'ME', 1),
(1603, 103, 'Monaghan', 'MO', 1),
(1604, 103, 'Offaly', 'OF', 1),
(1605, 103, 'Roscommon', 'RO', 1),
(1606, 103, 'Sligo', 'SL', 1),
(1607, 103, 'Tipperary', 'TI', 1),
(1608, 103, 'Waterford', 'WA', 1),
(1609, 103, 'Westmeath', 'WE', 1),
(1610, 103, 'Wexford', 'WX', 1),
(1611, 103, 'Wicklow', 'WI', 1);
INSERT INTO `m_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(1612, 104, 'Be\'er Sheva', 'BS', 1),
(1613, 104, 'Bika\'at Hayarden', 'BH', 1),
(1614, 104, 'Eilat and Arava', 'EA', 1),
(1615, 104, 'Galil', 'GA', 1),
(1616, 104, 'Haifa', 'HA', 1),
(1617, 104, 'Jehuda Mountains', 'JM', 1),
(1618, 104, 'Jerusalem', 'JE', 1),
(1619, 104, 'Negev', 'NE', 1),
(1620, 104, 'Semaria', 'SE', 1),
(1621, 104, 'Sharon', 'SH', 1),
(1622, 104, 'Tel Aviv (Gosh Dan)', 'TA', 1),
(1643, 106, 'Clarendon Parish', 'CLA', 1),
(1644, 106, 'Hanover Parish', 'HAN', 1),
(1645, 106, 'Kingston Parish', 'KIN', 1),
(1646, 106, 'Manchester Parish', 'MAN', 1),
(1647, 106, 'Portland Parish', 'POR', 1),
(1648, 106, 'Saint Andrew Parish', 'AND', 1),
(1649, 106, 'Saint Ann Parish', 'ANN', 1),
(1650, 106, 'Saint Catherine Parish', 'CAT', 1),
(1651, 106, 'Saint Elizabeth Parish', 'ELI', 1),
(1652, 106, 'Saint James Parish', 'JAM', 1),
(1653, 106, 'Saint Mary Parish', 'MAR', 1),
(1654, 106, 'Saint Thomas Parish', 'THO', 1),
(1655, 106, 'Trelawny Parish', 'TRL', 1),
(1656, 106, 'Westmoreland Parish', 'WML', 1),
(1657, 107, 'Aichi', 'AI', 1),
(1658, 107, 'Akita', 'AK', 1),
(1659, 107, 'Aomori', 'AO', 1),
(1660, 107, 'Chiba', 'CH', 1),
(1661, 107, 'Ehime', 'EH', 1),
(1662, 107, 'Fukui', 'FK', 1),
(1663, 107, 'Fukuoka', 'FU', 1),
(1664, 107, 'Fukushima', 'FS', 1),
(1665, 107, 'Gifu', 'GI', 1),
(1666, 107, 'Gumma', 'GU', 1),
(1667, 107, 'Hiroshima', 'HI', 1),
(1668, 107, 'Hokkaido', 'HO', 1),
(1669, 107, 'Hyogo', 'HY', 1),
(1670, 107, 'Ibaraki', 'IB', 1),
(1671, 107, 'Ishikawa', 'IS', 1),
(1672, 107, 'Iwate', 'IW', 1),
(1673, 107, 'Kagawa', 'KA', 1),
(1674, 107, 'Kagoshima', 'KG', 1),
(1675, 107, 'Kanagawa', 'KN', 1),
(1676, 107, 'Kochi', 'KO', 1),
(1677, 107, 'Kumamoto', 'KU', 1),
(1678, 107, 'Kyoto', 'KY', 1),
(1679, 107, 'Mie', 'MI', 1),
(1680, 107, 'Miyagi', 'MY', 1),
(1681, 107, 'Miyazaki', 'MZ', 1),
(1682, 107, 'Nagano', 'NA', 1),
(1683, 107, 'Nagasaki', 'NG', 1),
(1684, 107, 'Nara', 'NR', 1),
(1685, 107, 'Niigata', 'NI', 1),
(1686, 107, 'Oita', 'OI', 1),
(1687, 107, 'Okayama', 'OK', 1),
(1688, 107, 'Okinawa', 'ON', 1),
(1689, 107, 'Osaka', 'OS', 1),
(1690, 107, 'Saga', 'SA', 1),
(1691, 107, 'Saitama', 'SI', 1),
(1692, 107, 'Shiga', 'SH', 1),
(1693, 107, 'Shimane', 'SM', 1),
(1694, 107, 'Shizuoka', 'SZ', 1),
(1695, 107, 'Tochigi', 'TO', 1),
(1696, 107, 'Tokushima', 'TS', 1),
(1697, 107, 'Tokyo', 'TK', 1),
(1698, 107, 'Tottori', 'TT', 1),
(1699, 107, 'Toyama', 'TY', 1),
(1700, 107, 'Wakayama', 'WA', 1),
(1701, 107, 'Yamagata', 'YA', 1),
(1702, 107, 'Yamaguchi', 'YM', 1),
(1703, 107, 'Yamanashi', 'YN', 1),
(1704, 108, '\'Amman', 'AM', 1),
(1705, 108, 'Ajlun', 'AJ', 1),
(1706, 108, 'Al \'Aqabah', 'AA', 1),
(1707, 108, 'Al Balqa\'', 'AB', 1),
(1708, 108, 'Al Karak', 'AK', 1),
(1709, 108, 'Al Mafraq', 'AL', 1),
(1710, 108, 'At Tafilah', 'AT', 1),
(1711, 108, 'Az Zarqa\'', 'AZ', 1),
(1712, 108, 'Irbid', 'IR', 1),
(1713, 108, 'Jarash', 'JA', 1),
(1714, 108, 'Ma\'an', 'MA', 1),
(1715, 108, 'Madaba', 'MD', 1),
(1716, 109, 'Almaty', 'AL', 1),
(1717, 109, 'Almaty City', 'AC', 1),
(1718, 109, 'Aqmola', 'AM', 1),
(1719, 109, 'Aqtobe', 'AQ', 1),
(1720, 109, 'Astana City', 'AS', 1),
(1721, 109, 'Atyrau', 'AT', 1),
(1722, 109, 'Batys Qazaqstan', 'BA', 1),
(1723, 109, 'Bayqongyr City', 'BY', 1),
(1724, 109, 'Mangghystau', 'MA', 1),
(1725, 109, 'Ongtustik Qazaqstan', 'ON', 1),
(1726, 109, 'Pavlodar', 'PA', 1),
(1727, 109, 'Qaraghandy', 'QA', 1),
(1728, 109, 'Qostanay', 'QO', 1),
(1729, 109, 'Qyzylorda', 'QY', 1),
(1730, 109, 'Shyghys Qazaqstan', 'SH', 1),
(1731, 109, 'Soltustik Qazaqstan', 'SO', 1),
(1732, 109, 'Zhambyl', 'ZH', 1),
(1733, 110, 'Central', 'CE', 1),
(1734, 110, 'Coast', 'CO', 1),
(1735, 110, 'Eastern', 'EA', 1),
(1736, 110, 'Nairobi Area', 'NA', 1),
(1737, 110, 'North Eastern', 'NE', 1),
(1738, 110, 'Nyanza', 'NY', 1),
(1739, 110, 'Rift Valley', 'RV', 1),
(1740, 110, 'Western', 'WE', 1),
(1741, 111, 'Abaiang', 'AG', 1),
(1742, 111, 'Abemama', 'AM', 1),
(1743, 111, 'Aranuka', 'AK', 1),
(1744, 111, 'Arorae', 'AO', 1),
(1745, 111, 'Banaba', 'BA', 1),
(1746, 111, 'Beru', 'BE', 1),
(1747, 111, 'Butaritari', 'bT', 1),
(1748, 111, 'Kanton', 'KA', 1),
(1749, 111, 'Kiritimati', 'KR', 1),
(1750, 111, 'Kuria', 'KU', 1),
(1751, 111, 'Maiana', 'MI', 1),
(1752, 111, 'Makin', 'MN', 1),
(1753, 111, 'Marakei', 'ME', 1),
(1754, 111, 'Nikunau', 'NI', 1),
(1755, 111, 'Nonouti', 'NO', 1),
(1756, 111, 'Onotoa', 'ON', 1),
(1757, 111, 'Tabiteuea', 'TT', 1),
(1758, 111, 'Tabuaeran', 'TR', 1),
(1759, 111, 'Tamana', 'TM', 1),
(1760, 111, 'Tarawa', 'TW', 1),
(1761, 111, 'Teraina', 'TE', 1),
(1762, 112, 'Chagang-do', 'CHA', 1),
(1763, 112, 'Hamgyong-bukto', 'HAB', 1),
(1764, 112, 'Hamgyong-namdo', 'HAN', 1),
(1765, 112, 'Hwanghae-bukto', 'HWB', 1),
(1766, 112, 'Hwanghae-namdo', 'HWN', 1),
(1767, 112, 'Kangwon-do', 'KAN', 1),
(1768, 112, 'P\'yongan-bukto', 'PYB', 1),
(1769, 112, 'P\'yongan-namdo', 'PYN', 1),
(1770, 112, 'Ryanggang-do (Yanggang-do)', 'YAN', 1),
(1771, 112, 'Rason Directly Governed City', 'NAJ', 1),
(1772, 112, 'P\'yongyang Special City', 'PYO', 1),
(1788, 114, 'Al \'Asimah', 'AL', 1),
(1789, 114, 'Al Ahmadi', 'AA', 1),
(1790, 114, 'Al Farwaniyah', 'AF', 1),
(1791, 114, 'Al Jahra\'', 'AJ', 1),
(1792, 114, 'Hawalli', 'HA', 1),
(1793, 115, 'Bishkek', 'GB', 1),
(1794, 115, 'Batken', 'B', 1),
(1795, 115, 'Chu', 'C', 1),
(1796, 115, 'Jalal-Abad', 'J', 1),
(1797, 115, 'Naryn', 'N', 1),
(1798, 115, 'Osh', 'O', 1),
(1799, 115, 'Talas', 'T', 1),
(1800, 115, 'Ysyk-Kol', 'Y', 1),
(1801, 116, 'Vientiane', 'VT', 1),
(1802, 116, 'Attapu', 'AT', 1),
(1803, 116, 'Bokeo', 'BK', 1),
(1804, 116, 'Bolikhamxai', 'BL', 1),
(1805, 116, 'Champasak', 'CH', 1),
(1806, 116, 'Houaphan', 'HO', 1),
(1807, 116, 'Khammouan', 'KH', 1),
(1808, 116, 'Louang Namtha', 'LM', 1),
(1809, 116, 'Louangphabang', 'LP', 1),
(1810, 116, 'Oudomxai', 'OU', 1),
(1811, 116, 'Phongsali', 'PH', 1),
(1812, 116, 'Salavan', 'SL', 1),
(1813, 116, 'Savannakhet', 'SV', 1),
(1814, 116, 'Vientiane', 'VI', 1),
(1815, 116, 'Xaignabouli', 'XA', 1),
(1816, 116, 'Xekong', 'XE', 1),
(1817, 116, 'Xiangkhoang', 'XI', 1),
(1818, 116, 'Xaisomboun', 'XN', 1),
(1852, 119, 'Berea', 'BE', 1),
(1853, 119, 'Butha-Buthe', 'BB', 1),
(1854, 119, 'Leribe', 'LE', 1),
(1855, 119, 'Mafeteng', 'MF', 1),
(1856, 119, 'Maseru', 'MS', 1),
(1857, 119, 'Mohale\'s Hoek', 'MH', 1),
(1858, 119, 'Mokhotlong', 'MK', 1),
(1859, 119, 'Qacha\'s Nek', 'QN', 1),
(1860, 119, 'Quthing', 'QT', 1),
(1861, 119, 'Thaba-Tseka', 'TT', 1),
(1862, 120, 'Bomi', 'BI', 1),
(1863, 120, 'Bong', 'BG', 1),
(1864, 120, 'Grand Bassa', 'GB', 1),
(1865, 120, 'Grand Cape Mount', 'CM', 1),
(1866, 120, 'Grand Gedeh', 'GG', 1),
(1867, 120, 'Grand Kru', 'GK', 1),
(1868, 120, 'Lofa', 'LO', 1),
(1869, 120, 'Margibi', 'MG', 1),
(1870, 120, 'Maryland', 'ML', 1),
(1871, 120, 'Montserrado', 'MS', 1),
(1872, 120, 'Nimba', 'NB', 1),
(1873, 120, 'River Cess', 'RC', 1),
(1874, 120, 'Sinoe', 'SN', 1),
(1875, 121, 'Ajdabiya', 'AJ', 1),
(1876, 121, 'Al \'Aziziyah', 'AZ', 1),
(1877, 121, 'Al Fatih', 'FA', 1),
(1878, 121, 'Al Jabal al Akhdar', 'JA', 1),
(1879, 121, 'Al Jufrah', 'JU', 1),
(1880, 121, 'Al Khums', 'KH', 1),
(1881, 121, 'Al Kufrah', 'KU', 1),
(1882, 121, 'An Nuqat al Khams', 'NK', 1),
(1883, 121, 'Ash Shati\'', 'AS', 1),
(1884, 121, 'Awbari', 'AW', 1),
(1885, 121, 'Az Zawiyah', 'ZA', 1),
(1886, 121, 'Banghazi', 'BA', 1),
(1887, 121, 'Darnah', 'DA', 1),
(1888, 121, 'Ghadamis', 'GD', 1),
(1889, 121, 'Gharyan', 'GY', 1),
(1890, 121, 'Misratah', 'MI', 1),
(1891, 121, 'Murzuq', 'MZ', 1),
(1892, 121, 'Sabha', 'SB', 1),
(1893, 121, 'Sawfajjin', 'SW', 1),
(1894, 121, 'Surt', 'SU', 1),
(1895, 121, 'Tarabulus (Tripoli)', 'TL', 1),
(1896, 121, 'Tarhunah', 'TH', 1),
(1897, 121, 'Tubruq', 'TU', 1),
(1898, 121, 'Yafran', 'YA', 1),
(1899, 121, 'Zlitan', 'ZL', 1),
(1900, 122, 'Vaduz', 'V', 1),
(1901, 122, 'Schaan', 'A', 1),
(1902, 122, 'Balzers', 'B', 1),
(1903, 122, 'Triesen', 'N', 1),
(1904, 122, 'Eschen', 'E', 1),
(1905, 122, 'Mauren', 'M', 1),
(1906, 122, 'Triesenberg', 'T', 1),
(1907, 122, 'Ruggell', 'R', 1),
(1908, 122, 'Gamprin', 'G', 1),
(1909, 122, 'Schellenberg', 'L', 1),
(1910, 122, 'Planken', 'P', 1),
(1911, 123, 'Alytus', 'AL', 1),
(1912, 123, 'Kaunas', 'KA', 1),
(1913, 123, 'Klaipeda', 'KL', 1),
(1914, 123, 'Marijampole', 'MA', 1),
(1915, 123, 'Panevezys', 'PA', 1),
(1916, 123, 'Siauliai', 'SI', 1),
(1917, 123, 'Taurage', 'TA', 1),
(1918, 123, 'Telsiai', 'TE', 1),
(1919, 123, 'Utena', 'UT', 1),
(1920, 123, 'Vilnius', 'VI', 1),
(1921, 124, 'Diekirch', 'DD', 1),
(1922, 124, 'Clervaux', 'DC', 1),
(1923, 124, 'Redange', 'DR', 1),
(1924, 124, 'Vianden', 'DV', 1),
(1925, 124, 'Wiltz', 'DW', 1),
(1926, 124, 'Grevenmacher', 'GG', 1),
(1927, 124, 'Echternach', 'GE', 1),
(1928, 124, 'Remich', 'GR', 1),
(1929, 124, 'Luxembourg', 'LL', 1),
(1930, 124, 'Capellen', 'LC', 1),
(1931, 124, 'Esch-sur-Alzette', 'LE', 1),
(1932, 124, 'Mersch', 'LM', 1),
(1933, 125, 'Our Lady Fatima Parish', 'OLF', 1),
(1934, 125, 'St. Anthony Parish', 'ANT', 1),
(1935, 125, 'St. Lazarus Parish', 'LAZ', 1),
(1936, 125, 'Cathedral Parish', 'CAT', 1),
(1937, 125, 'St. Lawrence Parish', 'LAW', 1),
(1938, 127, 'Antananarivo', 'AN', 1),
(1939, 127, 'Antsiranana', 'AS', 1),
(1940, 127, 'Fianarantsoa', 'FN', 1),
(1941, 127, 'Mahajanga', 'MJ', 1),
(1942, 127, 'Toamasina', 'TM', 1),
(1943, 127, 'Toliara', 'TL', 1),
(1944, 128, 'Balaka', 'BLK', 1),
(1945, 128, 'Blantyre', 'BLT', 1),
(1946, 128, 'Chikwawa', 'CKW', 1),
(1947, 128, 'Chiradzulu', 'CRD', 1),
(1948, 128, 'Chitipa', 'CTP', 1),
(1949, 128, 'Dedza', 'DDZ', 1),
(1950, 128, 'Dowa', 'DWA', 1),
(1951, 128, 'Karonga', 'KRG', 1),
(1952, 128, 'Kasungu', 'KSG', 1),
(1953, 128, 'Likoma', 'LKM', 1),
(1954, 128, 'Lilongwe', 'LLG', 1),
(1955, 128, 'Machinga', 'MCG', 1),
(1956, 128, 'Mangochi', 'MGC', 1),
(1957, 128, 'Mchinji', 'MCH', 1),
(1958, 128, 'Mulanje', 'MLJ', 1),
(1959, 128, 'Mwanza', 'MWZ', 1),
(1960, 128, 'Mzimba', 'MZM', 1),
(1961, 128, 'Ntcheu', 'NTU', 1),
(1962, 128, 'Nkhata Bay', 'NKB', 1),
(1963, 128, 'Nkhotakota', 'NKH', 1),
(1964, 128, 'Nsanje', 'NSJ', 1),
(1965, 128, 'Ntchisi', 'NTI', 1),
(1966, 128, 'Phalombe', 'PHL', 1),
(1967, 128, 'Rumphi', 'RMP', 1),
(1968, 128, 'Salima', 'SLM', 1),
(1969, 128, 'Thyolo', 'THY', 1),
(1970, 128, 'Zomba', 'ZBA', 1),
(1971, 129, 'Johor', 'MY-01', 1),
(1972, 129, 'Kedah', 'MY-02', 1),
(1973, 129, 'Kelantan', 'MY-03', 1),
(1974, 129, 'Labuan', 'MY-15', 1),
(1975, 129, 'Melaka', 'MY-04', 1),
(1976, 129, 'Negeri Sembilan', 'MY-05', 1),
(1977, 129, 'Pahang', 'MY-06', 1),
(1978, 129, 'Perak', 'MY-08', 1),
(1979, 129, 'Perlis', 'MY-09', 1),
(1980, 129, 'Pulau Pinang', 'MY-07', 1),
(1981, 129, 'Sabah', 'MY-12', 1),
(1982, 129, 'Sarawak', 'MY-13', 1),
(1983, 129, 'Selangor', 'MY-10', 1),
(1984, 129, 'Terengganu', 'MY-11', 1),
(1985, 129, 'Kuala Lumpur', 'MY-14', 1),
(1986, 130, 'Thiladhunmathi Uthuru', 'THU', 1),
(1987, 130, 'Thiladhunmathi Dhekunu', 'THD', 1),
(1988, 130, 'Miladhunmadulu Uthuru', 'MLU', 1),
(1989, 130, 'Miladhunmadulu Dhekunu', 'MLD', 1),
(1990, 130, 'Maalhosmadulu Uthuru', 'MAU', 1),
(1991, 130, 'Maalhosmadulu Dhekunu', 'MAD', 1),
(1992, 130, 'Faadhippolhu', 'FAA', 1),
(1993, 130, 'Male Atoll', 'MAA', 1),
(1994, 130, 'Ari Atoll Uthuru', 'AAU', 1),
(1995, 130, 'Ari Atoll Dheknu', 'AAD', 1),
(1996, 130, 'Felidhe Atoll', 'FEA', 1),
(1997, 130, 'Mulaku Atoll', 'MUA', 1),
(1998, 130, 'Nilandhe Atoll Uthuru', 'NAU', 1),
(1999, 130, 'Nilandhe Atoll Dhekunu', 'NAD', 1),
(2000, 130, 'Kolhumadulu', 'KLH', 1),
(2001, 130, 'Hadhdhunmathi', 'HDH', 1),
(2002, 130, 'Huvadhu Atoll Uthuru', 'HAU', 1),
(2003, 130, 'Huvadhu Atoll Dhekunu', 'HAD', 1),
(2004, 130, 'Fua Mulaku', 'FMU', 1),
(2005, 130, 'Addu', 'ADD', 1),
(2006, 131, 'Gao', 'GA', 1),
(2007, 131, 'Kayes', 'KY', 1),
(2008, 131, 'Kidal', 'KD', 1),
(2009, 131, 'Koulikoro', 'KL', 1),
(2010, 131, 'Mopti', 'MP', 1),
(2011, 131, 'Segou', 'SG', 1),
(2012, 131, 'Sikasso', 'SK', 1),
(2013, 131, 'Tombouctou', 'TB', 1),
(2014, 131, 'Bamako Capital District', 'CD', 1),
(2015, 132, 'Attard', 'ATT', 1),
(2016, 132, 'Balzan', 'BAL', 1),
(2017, 132, 'Birgu', 'BGU', 1),
(2018, 132, 'Birkirkara', 'BKK', 1),
(2019, 132, 'Birzebbuga', 'BRZ', 1),
(2020, 132, 'Bormla', 'BOR', 1),
(2021, 132, 'Dingli', 'DIN', 1),
(2022, 132, 'Fgura', 'FGU', 1),
(2023, 132, 'Floriana', 'FLO', 1),
(2024, 132, 'Gudja', 'GDJ', 1),
(2025, 132, 'Gzira', 'GZR', 1),
(2026, 132, 'Gargur', 'GRG', 1),
(2027, 132, 'Gaxaq', 'GXQ', 1),
(2028, 132, 'Hamrun', 'HMR', 1),
(2029, 132, 'Iklin', 'IKL', 1),
(2030, 132, 'Isla', 'ISL', 1),
(2031, 132, 'Kalkara', 'KLK', 1),
(2032, 132, 'Kirkop', 'KRK', 1),
(2033, 132, 'Lija', 'LIJ', 1),
(2034, 132, 'Luqa', 'LUQ', 1),
(2035, 132, 'Marsa', 'MRS', 1),
(2036, 132, 'Marsaskala', 'MKL', 1),
(2037, 132, 'Marsaxlokk', 'MXL', 1),
(2038, 132, 'Mdina', 'MDN', 1),
(2039, 132, 'Melliea', 'MEL', 1),
(2040, 132, 'Mgarr', 'MGR', 1),
(2041, 132, 'Mosta', 'MST', 1),
(2042, 132, 'Mqabba', 'MQA', 1),
(2043, 132, 'Msida', 'MSI', 1),
(2044, 132, 'Mtarfa', 'MTF', 1),
(2045, 132, 'Naxxar', 'NAX', 1),
(2046, 132, 'Paola', 'PAO', 1),
(2047, 132, 'Pembroke', 'PEM', 1),
(2048, 132, 'Pieta', 'PIE', 1),
(2049, 132, 'Qormi', 'QOR', 1),
(2050, 132, 'Qrendi', 'QRE', 1),
(2051, 132, 'Rabat', 'RAB', 1),
(2052, 132, 'Safi', 'SAF', 1),
(2053, 132, 'San Giljan', 'SGI', 1),
(2054, 132, 'Santa Lucija', 'SLU', 1),
(2055, 132, 'San Pawl il-Bahar', 'SPB', 1),
(2056, 132, 'San Gwann', 'SGW', 1),
(2057, 132, 'Santa Venera', 'SVE', 1),
(2058, 132, 'Siggiewi', 'SIG', 1),
(2059, 132, 'Sliema', 'SLM', 1),
(2060, 132, 'Swieqi', 'SWQ', 1),
(2061, 132, 'Ta Xbiex', 'TXB', 1),
(2062, 132, 'Tarxien', 'TRX', 1),
(2063, 132, 'Valletta', 'VLT', 1),
(2064, 132, 'Xgajra', 'XGJ', 1),
(2065, 132, 'Zabbar', 'ZBR', 1),
(2066, 132, 'Zebbug', 'ZBG', 1),
(2067, 132, 'Zejtun', 'ZJT', 1),
(2068, 132, 'Zurrieq', 'ZRQ', 1),
(2069, 132, 'Fontana', 'FNT', 1),
(2070, 132, 'Ghajnsielem', 'GHJ', 1),
(2071, 132, 'Gharb', 'GHR', 1),
(2072, 132, 'Ghasri', 'GHS', 1),
(2073, 132, 'Kercem', 'KRC', 1),
(2074, 132, 'Munxar', 'MUN', 1),
(2075, 132, 'Nadur', 'NAD', 1),
(2076, 132, 'Qala', 'QAL', 1),
(2077, 132, 'Victoria', 'VIC', 1),
(2078, 132, 'San Lawrenz', 'SLA', 1),
(2079, 132, 'Sannat', 'SNT', 1),
(2080, 132, 'Xagra', 'ZAG', 1),
(2081, 132, 'Xewkija', 'XEW', 1),
(2082, 132, 'Zebbug', 'ZEB', 1),
(2083, 133, 'Ailinginae', 'ALG', 1),
(2084, 133, 'Ailinglaplap', 'ALL', 1),
(2085, 133, 'Ailuk', 'ALK', 1),
(2086, 133, 'Arno', 'ARN', 1),
(2087, 133, 'Aur', 'AUR', 1),
(2088, 133, 'Bikar', 'BKR', 1),
(2089, 133, 'Bikini', 'BKN', 1),
(2090, 133, 'Bokak', 'BKK', 1),
(2091, 133, 'Ebon', 'EBN', 1),
(2092, 133, 'Enewetak', 'ENT', 1),
(2093, 133, 'Erikub', 'EKB', 1),
(2094, 133, 'Jabat', 'JBT', 1),
(2095, 133, 'Jaluit', 'JLT', 1),
(2096, 133, 'Jemo', 'JEM', 1),
(2097, 133, 'Kili', 'KIL', 1),
(2098, 133, 'Kwajalein', 'KWJ', 1),
(2099, 133, 'Lae', 'LAE', 1),
(2100, 133, 'Lib', 'LIB', 1),
(2101, 133, 'Likiep', 'LKP', 1),
(2102, 133, 'Majuro', 'MJR', 1),
(2103, 133, 'Maloelap', 'MLP', 1),
(2104, 133, 'Mejit', 'MJT', 1),
(2105, 133, 'Mili', 'MIL', 1),
(2106, 133, 'Namorik', 'NMK', 1),
(2107, 133, 'Namu', 'NAM', 1),
(2108, 133, 'Rongelap', 'RGL', 1),
(2109, 133, 'Rongrik', 'RGK', 1),
(2110, 133, 'Toke', 'TOK', 1),
(2111, 133, 'Ujae', 'UJA', 1),
(2112, 133, 'Ujelang', 'UJL', 1),
(2113, 133, 'Utirik', 'UTK', 1),
(2114, 133, 'Wotho', 'WTH', 1),
(2115, 133, 'Wotje', 'WTJ', 1),
(2116, 135, 'Adrar', 'AD', 1),
(2117, 135, 'Assaba', 'AS', 1),
(2118, 135, 'Brakna', 'BR', 1),
(2119, 135, 'Dakhlet Nouadhibou', 'DN', 1),
(2120, 135, 'Gorgol', 'GO', 1),
(2121, 135, 'Guidimaka', 'GM', 1),
(2122, 135, 'Hodh Ech Chargui', 'HC', 1),
(2123, 135, 'Hodh El Gharbi', 'HG', 1),
(2124, 135, 'Inchiri', 'IN', 1),
(2125, 135, 'Tagant', 'TA', 1),
(2126, 135, 'Tiris Zemmour', 'TZ', 1),
(2127, 135, 'Trarza', 'TR', 1),
(2128, 135, 'Nouakchott', 'NO', 1),
(2129, 136, 'Beau Bassin-Rose Hill', 'BR', 1),
(2130, 136, 'Curepipe', 'CU', 1),
(2131, 136, 'Port Louis', 'PU', 1),
(2132, 136, 'Quatre Bornes', 'QB', 1),
(2133, 136, 'Vacoas-Phoenix', 'VP', 1),
(2134, 136, 'Agalega Islands', 'AG', 1),
(2135, 136, 'Cargados Carajos Shoals (Saint Brandon Islands)', 'CC', 1),
(2136, 136, 'Rodrigues', 'RO', 1),
(2137, 136, 'Black River', 'BL', 1),
(2138, 136, 'Flacq', 'FL', 1),
(2139, 136, 'Grand Port', 'GP', 1),
(2140, 136, 'Moka', 'MO', 1),
(2141, 136, 'Pamplemousses', 'PA', 1),
(2142, 136, 'Plaines Wilhems', 'PW', 1),
(2143, 136, 'Port Louis', 'PL', 1),
(2144, 136, 'Riviere du Rempart', 'RR', 1),
(2145, 136, 'Savanne', 'SA', 1),
(2146, 138, 'Baja California', 'BCN', 1),
(2147, 138, 'Baja California Sur', 'BCS', 1),
(2148, 138, 'Campeche', 'CAM', 1),
(2149, 138, 'Chiapas', 'CHP', 1),
(2150, 138, 'Chihuahua', 'CHH', 1),
(2151, 138, 'Coahuila de Zaragoza', 'COA', 1),
(2152, 138, 'Colima', 'COL', 1),
(2153, 138, 'Cuidad de Mexico', 'CMX', 1),
(2154, 138, 'Durango', 'DUR', 1),
(2155, 138, 'Guanajuato', 'GUA', 1),
(2156, 138, 'Guerrero', 'GRO', 1),
(2157, 138, 'Hidalgo', 'HID', 1),
(2158, 138, 'Jalisco', 'JAL', 1),
(2159, 138, 'Mexico', 'MEX', 1),
(2160, 138, 'Michoacan de Ocampo', 'MIC', 1),
(2161, 138, 'Morelos', 'MOR', 1),
(2162, 138, 'Nayarit', 'NAY', 1),
(2163, 138, 'Nuevo Leon', 'NLE', 1),
(2164, 138, 'Oaxaca', 'OAX', 1),
(2165, 138, 'Puebla', 'PUE', 1),
(2166, 138, 'Queretaro', 'QUE', 1),
(2167, 138, 'Quintana Roo', 'ROO', 1),
(2168, 138, 'San Luis Potosi', 'SLP', 1),
(2169, 138, 'Sinaloa', 'SIN', 1),
(2170, 138, 'Sonora', 'SON', 1),
(2171, 138, 'Tabasco', 'TAB', 1),
(2172, 138, 'Tamaulipas', 'TAM', 1),
(2173, 138, 'Tlaxcala', 'TLA', 1),
(2174, 138, 'Veracruz de Ignacio de la Llave', 'VER', 1),
(2175, 138, 'Yucatan', 'YUC', 1),
(2176, 138, 'Zacatecas', 'ZAC', 1),
(2177, 139, 'Chuuk', 'C', 1),
(2178, 139, 'Kosrae', 'K', 1),
(2179, 139, 'Pohnpei', 'P', 1),
(2180, 139, 'Yap', 'Y', 1),
(2181, 140, 'Gagauzia', 'GA', 1),
(2182, 140, 'Chisinau', 'CU', 1),
(2183, 140, 'Balti', 'BA', 1),
(2184, 140, 'Cahul', 'CA', 1),
(2185, 140, 'Edinet', 'ED', 1),
(2186, 140, 'Lapusna', 'LA', 1),
(2187, 140, 'Orhei', 'OR', 1),
(2188, 140, 'Soroca', 'SO', 1),
(2189, 140, 'Tighina', 'TI', 1),
(2190, 140, 'Ungheni', 'UN', 1),
(2191, 140, 'St‚nga Nistrului', 'SN', 1),
(2192, 141, 'Fontvieille', 'FV', 1),
(2193, 141, 'La Condamine', 'LC', 1),
(2194, 141, 'Monaco-Ville', 'MV', 1),
(2195, 141, 'Monte-Carlo', 'MC', 1),
(2196, 142, 'Ulanbaatar', '1', 1),
(2197, 142, 'Orhon', '035', 1),
(2198, 142, 'Darhan uul', '037', 1),
(2199, 142, 'Hentiy', '039', 1),
(2200, 142, 'Hovsgol', '041', 1),
(2201, 142, 'Hovd', '043', 1),
(2202, 142, 'Uvs', '046', 1),
(2203, 142, 'Tov', '047', 1),
(2204, 142, 'Selenge', '049', 1),
(2205, 142, 'Suhbaatar', '051', 1),
(2206, 142, 'Omnogovi', '053', 1),
(2207, 142, 'Ovorhangay', '055', 1),
(2208, 142, 'Dzavhan', '057', 1),
(2209, 142, 'DundgovL', '059', 1),
(2210, 142, 'Dornod', '061', 1),
(2211, 142, 'Dornogov', '063', 1),
(2212, 142, 'Govi-Sumber', '064', 1),
(2213, 142, 'Govi-Altay', '065', 1),
(2214, 142, 'Bulgan', '067', 1),
(2215, 142, 'Bayanhongor', '069', 1),
(2216, 142, 'Bayan-Olgiy', '071', 1),
(2217, 142, 'Arhangay', '073', 1),
(2218, 143, 'Saint Anthony', 'A', 1),
(2219, 143, 'Saint Georges', 'G', 1),
(2220, 143, 'Saint Peter', 'P', 1),
(2221, 144, 'Agadir', 'AGD', 1),
(2222, 144, 'Al Hoceima', 'HOC', 1),
(2223, 144, 'Azilal', 'AZI', 1),
(2224, 144, 'Beni Mellal', 'BME', 1),
(2225, 144, 'Ben Slimane', 'BSL', 1),
(2226, 144, 'Boulemane', 'BLM', 1),
(2227, 144, 'Casablanca', 'CBL', 1),
(2228, 144, 'Chaouen', 'CHA', 1),
(2229, 144, 'El Jadida', 'EJA', 1),
(2230, 144, 'El Kelaa des Sraghna', 'EKS', 1),
(2231, 144, 'Er Rachidia', 'ERA', 1),
(2232, 144, 'Essaouira', 'ESS', 1),
(2233, 144, 'Fes', 'FES', 1),
(2234, 144, 'Figuig', 'FIG', 1),
(2235, 144, 'Guelmim', 'GLM', 1),
(2236, 144, 'Ifrane', 'IFR', 1),
(2237, 144, 'Kenitra', 'KEN', 1),
(2238, 144, 'Khemisset', 'KHM', 1),
(2239, 144, 'Khenifra', 'KHN', 1),
(2240, 144, 'Khouribga', 'KHO', 1),
(2241, 144, 'Laayoune', 'LYN', 1),
(2242, 144, 'Larache', 'LAR', 1),
(2243, 144, 'Marrakech', 'MRK', 1),
(2244, 144, 'Meknes', 'MKN', 1),
(2245, 144, 'Nador', 'NAD', 1),
(2246, 144, 'Ouarzazate', 'ORZ', 1),
(2247, 144, 'Oujda', 'OUJ', 1),
(2248, 144, 'Rabat-Sale', 'RSA', 1),
(2249, 144, 'Safi', 'SAF', 1),
(2250, 144, 'Settat', 'SET', 1),
(2251, 144, 'Sidi Kacem', 'SKA', 1),
(2252, 144, 'Tangier', 'TGR', 1),
(2253, 144, 'Tan-Tan', 'TAN', 1),
(2254, 144, 'Taounate', 'TAO', 1),
(2255, 144, 'Taroudannt', 'TRD', 1),
(2256, 144, 'Tata', 'TAT', 1),
(2257, 144, 'Taza', 'TAZ', 1),
(2258, 144, 'Tetouan', 'TET', 1),
(2259, 144, 'Tiznit', 'TIZ', 1),
(2260, 144, 'Ad Dakhla', 'ADK', 1),
(2261, 144, 'Boujdour', 'BJD', 1),
(2262, 144, 'Es Smara', 'ESM', 1),
(2263, 145, 'Cabo Delgado', 'CD', 1),
(2264, 145, 'Gaza', 'GZ', 1),
(2265, 145, 'Inhambane', 'IN', 1),
(2266, 145, 'Manica', 'MN', 1),
(2267, 145, 'Maputo (city)', 'MC', 1),
(2268, 145, 'Maputo', 'MP', 1),
(2269, 145, 'Nampula', 'NA', 1),
(2270, 145, 'Niassa', 'NI', 1),
(2271, 145, 'Sofala', 'SO', 1),
(2272, 145, 'Tete', 'TE', 1),
(2273, 145, 'Zambezia', 'ZA', 1),
(2274, 146, 'Ayeyarwady', 'AY', 1),
(2275, 146, 'Bago', 'BG', 1),
(2276, 146, 'Magway', 'MG', 1),
(2277, 146, 'Mandalay', 'MD', 1),
(2278, 146, 'Sagaing', 'SG', 1),
(2279, 146, 'Tanintharyi', 'TN', 1),
(2280, 146, 'Yangon', 'YG', 1),
(2281, 146, 'Chin State', 'CH', 1),
(2282, 146, 'Kachin State', 'KC', 1),
(2283, 146, 'Kayah State', 'KH', 1),
(2284, 146, 'Kayin State', 'KN', 1),
(2285, 146, 'Mon State', 'MN', 1),
(2286, 146, 'Rakhine State', 'RK', 1),
(2287, 146, 'Shan State', 'SH', 1),
(2288, 147, 'Caprivi', 'CA', 1),
(2289, 147, 'Erongo', 'ER', 1),
(2290, 147, 'Hardap', 'HA', 1),
(2291, 147, 'Karas', 'KR', 1),
(2292, 147, 'Kavango', 'KV', 1),
(2293, 147, 'Khomas', 'KH', 1),
(2294, 147, 'Kunene', 'KU', 1),
(2295, 147, 'Ohangwena', 'OW', 1),
(2296, 147, 'Omaheke', 'OK', 1),
(2297, 147, 'Omusati', 'OT', 1),
(2298, 147, 'Oshana', 'ON', 1),
(2299, 147, 'Oshikoto', 'OO', 1),
(2300, 147, 'Otjozondjupa', 'OJ', 1),
(2301, 148, 'Aiwo', 'AO', 1),
(2302, 148, 'Anabar', 'AA', 1),
(2303, 148, 'Anetan', 'AT', 1),
(2304, 148, 'Anibare', 'AI', 1),
(2305, 148, 'Baiti', 'BA', 1),
(2306, 148, 'Boe', 'BO', 1),
(2307, 148, 'Buada', 'BU', 1),
(2308, 148, 'Denigomodu', 'DE', 1),
(2309, 148, 'Ewa', 'EW', 1),
(2310, 148, 'Ijuw', 'IJ', 1),
(2311, 148, 'Meneng', 'ME', 1),
(2312, 148, 'Nibok', 'NI', 1),
(2313, 148, 'Uaboe', 'UA', 1),
(2314, 148, 'Yaren', 'YA', 1),
(2315, 149, 'Bagmati', 'BA', 1),
(2316, 149, 'Bheri', 'BH', 1),
(2317, 149, 'Dhawalagiri', 'DH', 1),
(2318, 149, 'Gandaki', 'GA', 1),
(2319, 149, 'Janakpur', 'JA', 1),
(2320, 149, 'Karnali', 'KA', 1),
(2321, 149, 'Kosi', 'KO', 1),
(2322, 149, 'Lumbini', 'LU', 1),
(2323, 149, 'Mahakali', 'MA', 1),
(2324, 149, 'Mechi', 'ME', 1),
(2325, 149, 'Narayani', 'NA', 1),
(2326, 149, 'Rapti', 'RA', 1),
(2327, 149, 'Sagarmatha', 'SA', 1),
(2328, 149, 'Seti', 'SE', 1),
(2329, 150, 'Drenthe', 'DR', 1),
(2330, 150, 'Flevoland', 'FL', 1),
(2331, 150, 'Friesland', 'FR', 1),
(2332, 150, 'Gelderland', 'GE', 1),
(2333, 150, 'Groningen', 'GR', 1),
(2334, 150, 'Limburg', 'LI', 1),
(2335, 150, 'Noord-Brabant', 'NB', 1),
(2336, 150, 'Noord-Holland', 'NH', 1),
(2337, 150, 'Overijssel', 'OV', 1),
(2338, 150, 'Utrecht', 'UT', 1),
(2339, 150, 'Zeeland', 'ZE', 1),
(2340, 150, 'Zuid-Holland', 'ZH', 1),
(2341, 152, 'Iles Loyaute', 'L', 1),
(2342, 152, 'Nord', 'N', 1),
(2343, 152, 'Sud', 'S', 1),
(2344, 153, 'Auckland', 'AUK', 1),
(2345, 153, 'Bay of Plenty', 'BOP', 1),
(2346, 153, 'Canterbury', 'CAN', 1),
(2347, 153, 'Coromandel', 'COR', 1),
(2348, 153, 'Gisborne', 'GIS', 1),
(2349, 153, 'Fiordland', 'FIO', 1),
(2350, 153, 'Hawke\'s Bay', 'HKB', 1),
(2351, 153, 'Marlborough', 'MBH', 1),
(2352, 153, 'Manawatu-Wanganui', 'MWT', 1),
(2353, 153, 'Mt Cook-Mackenzie', 'MCM', 1),
(2354, 153, 'Nelson', 'NSN', 1),
(2355, 153, 'Northland', 'NTL', 1),
(2356, 153, 'Otago', 'OTA', 1),
(2357, 153, 'Southland', 'STL', 1),
(2358, 153, 'Taranaki', 'TKI', 1),
(2359, 153, 'Wellington', 'WGN', 1),
(2360, 153, 'Waikato', 'WKO', 1),
(2361, 153, 'Wairarapa', 'WAI', 1),
(2362, 153, 'West Coast', 'WTC', 1),
(2363, 154, 'Atlantico Norte', 'AN', 1),
(2364, 154, 'Atlantico Sur', 'AS', 1),
(2365, 154, 'Boaco', 'BO', 1),
(2366, 154, 'Carazo', 'CA', 1),
(2367, 154, 'Chinandega', 'CI', 1),
(2368, 154, 'Chontales', 'CO', 1),
(2369, 154, 'Esteli', 'ES', 1),
(2370, 154, 'Granada', 'GR', 1),
(2371, 154, 'Jinotega', 'JI', 1),
(2372, 154, 'Leon', 'LE', 1),
(2373, 154, 'Madriz', 'MD', 1),
(2374, 154, 'Managua', 'MN', 1),
(2375, 154, 'Masaya', 'MS', 1),
(2376, 154, 'Matagalpa', 'MT', 1),
(2377, 154, 'Nuevo Segovia', 'NS', 1),
(2378, 154, 'Rio San Juan', 'RS', 1),
(2379, 154, 'Rivas', 'RI', 1),
(2380, 155, 'Agadez', 'AG', 1),
(2381, 155, 'Diffa', 'DF', 1),
(2382, 155, 'Dosso', 'DS', 1),
(2383, 155, 'Maradi', 'MA', 1),
(2384, 155, 'Niamey', 'NM', 1),
(2385, 155, 'Tahoua', 'TH', 1),
(2386, 155, 'Tillaberi', 'TL', 1),
(2387, 155, 'Zinder', 'ZD', 1),
(2388, 156, 'Abia', 'AB', 1),
(2389, 156, 'Abuja Federal Capital Territory', 'CT', 1),
(2390, 156, 'Adamawa', 'AD', 1),
(2391, 156, 'Akwa Ibom', 'AK', 1),
(2392, 156, 'Anambra', 'AN', 1),
(2393, 156, 'Bauchi', 'BC', 1),
(2394, 156, 'Bayelsa', 'BY', 1),
(2395, 156, 'Benue', 'BN', 1),
(2396, 156, 'Borno', 'BO', 1),
(2397, 156, 'Cross River', 'CR', 1),
(2398, 156, 'Delta', 'DE', 1),
(2399, 156, 'Ebonyi', 'EB', 1),
(2400, 156, 'Edo', 'ED', 1),
(2401, 156, 'Ekiti', 'EK', 1),
(2402, 156, 'Enugu', 'EN', 1),
(2403, 156, 'Gombe', 'GO', 1),
(2404, 156, 'Imo', 'IM', 1),
(2405, 156, 'Jigawa', 'JI', 1),
(2406, 156, 'Kaduna', 'KD', 1),
(2407, 156, 'Kano', 'KN', 1),
(2408, 156, 'Katsina', 'KT', 1),
(2409, 156, 'Kebbi', 'KE', 1),
(2410, 156, 'Kogi', 'KO', 1),
(2411, 156, 'Kwara', 'KW', 1),
(2412, 156, 'Lagos', 'LA', 1),
(2413, 156, 'Nassarawa', 'NA', 1),
(2414, 156, 'Niger', 'NI', 1),
(2415, 156, 'Ogun', 'OG', 1),
(2416, 156, 'Ondo', 'ONG', 1),
(2417, 156, 'Osun', 'OS', 1),
(2418, 156, 'Oyo', 'OY', 1),
(2419, 156, 'Plateau', 'PL', 1),
(2420, 156, 'Rivers', 'RI', 1),
(2421, 156, 'Sokoto', 'SO', 1),
(2422, 156, 'Taraba', 'TA', 1),
(2423, 156, 'Yobe', 'YO', 1),
(2424, 156, 'Zamfara', 'ZA', 1),
(2425, 159, 'Northern Islands', 'N', 1),
(2426, 159, 'Rota', 'R', 1),
(2427, 159, 'Saipan', 'S', 1),
(2428, 159, 'Tinian', 'T', 1),
(2429, 160, 'Akershus', 'AK', 1),
(2430, 160, 'Aust-Agder', 'AA', 1),
(2431, 160, 'Buskerud', 'BU', 1),
(2432, 160, 'Finnmark', 'FM', 1),
(2433, 160, 'Hedmark', 'HM', 1),
(2434, 160, 'Hordaland', 'HL', 1),
(2435, 160, 'More og Romdal', 'MR', 1),
(2436, 160, 'Nord-Trondelag', 'NT', 1),
(2437, 160, 'Nordland', 'NL', 1),
(2438, 160, 'Ostfold', 'OF', 1),
(2439, 160, 'Oppland', 'OP', 1),
(2440, 160, 'Oslo', 'OL', 1),
(2441, 160, 'Rogaland', 'RL', 1),
(2442, 160, 'Sor-Trondelag', 'ST', 1),
(2443, 160, 'Sogn og Fjordane', 'SJ', 1),
(2444, 160, 'Svalbard', 'SV', 1),
(2445, 160, 'Telemark', 'TM', 1),
(2446, 160, 'Troms', 'TR', 1),
(2447, 160, 'Vest-Agder', 'VA', 1),
(2448, 160, 'Vestfold', 'VF', 1),
(2449, 161, 'Ad Dakhiliyah', 'DA', 1),
(2450, 161, 'Al Batinah', 'BA', 1),
(2451, 161, 'Al Wusta', 'WU', 1),
(2452, 161, 'Ash Sharqiyah', 'SH', 1),
(2453, 161, 'Az Zahirah', 'ZA', 1),
(2454, 161, 'Masqat', 'MA', 1),
(2455, 161, 'Musandam', 'MU', 1),
(2456, 161, 'Zufar', 'ZU', 1),
(2457, 162, 'Balochistan', 'B', 1),
(2458, 162, 'Federally Administered Tribal Areas', 'T', 1),
(2459, 162, 'Islamabad Capital Territory', 'I', 1),
(2460, 162, 'North-West Frontier', 'N', 1),
(2461, 162, 'Punjab', 'P', 1),
(2462, 162, 'Sindh', 'S', 1),
(2463, 163, 'Aimeliik', 'AM', 1),
(2464, 163, 'Airai', 'AR', 1),
(2465, 163, 'Angaur', 'AN', 1),
(2466, 163, 'Hatohobei', 'HA', 1),
(2467, 163, 'Kayangel', 'KA', 1),
(2468, 163, 'Koror', 'KO', 1),
(2469, 163, 'Melekeok', 'ME', 1),
(2470, 163, 'Ngaraard', 'NA', 1),
(2471, 163, 'Ngarchelong', 'NG', 1),
(2472, 163, 'Ngardmau', 'ND', 1),
(2473, 163, 'Ngatpang', 'NT', 1),
(2474, 163, 'Ngchesar', 'NC', 1),
(2475, 163, 'Ngeremlengui', 'NR', 1),
(2476, 163, 'Ngiwal', 'NW', 1),
(2477, 163, 'Peleliu', 'PE', 1),
(2478, 163, 'Sonsorol', 'SO', 1),
(2479, 164, 'Bocas del Toro', 'BT', 1),
(2480, 164, 'Chiriqui', 'CH', 1),
(2481, 164, 'Cocle', 'CC', 1),
(2482, 164, 'Colon', 'CL', 1),
(2483, 164, 'Darien', 'DA', 1),
(2484, 164, 'Herrera', 'HE', 1),
(2485, 164, 'Los Santos', 'LS', 1),
(2486, 164, 'Panama', 'PA', 1),
(2487, 164, 'San Blas', 'SB', 1),
(2488, 164, 'Veraguas', 'VG', 1),
(2489, 165, 'Bougainville', 'BV', 1),
(2490, 165, 'Central', 'CE', 1),
(2491, 165, 'Chimbu', 'CH', 1),
(2492, 165, 'Eastern Highlands', 'EH', 1),
(2493, 165, 'East New Britain', 'EB', 1),
(2494, 165, 'East Sepik', 'ES', 1),
(2495, 165, 'Enga', 'EN', 1),
(2496, 165, 'Gulf', 'GU', 1),
(2497, 165, 'Madang', 'MD', 1),
(2498, 165, 'Manus', 'MN', 1),
(2499, 165, 'Milne Bay', 'MB', 1),
(2500, 165, 'Morobe', 'MR', 1),
(2501, 165, 'National Capital', 'NC', 1),
(2502, 165, 'New Ireland', 'NI', 1),
(2503, 165, 'Northern', 'NO', 1),
(2504, 165, 'Sandaun', 'SA', 1),
(2505, 165, 'Southern Highlands', 'SH', 1),
(2506, 165, 'Western', 'WE', 1),
(2507, 165, 'Western Highlands', 'WH', 1),
(2508, 165, 'West New Britain', 'WB', 1),
(2509, 166, 'Alto Paraguay', 'AG', 1),
(2510, 166, 'Alto Parana', 'AN', 1),
(2511, 166, 'Amambay', 'AM', 1),
(2512, 166, 'Asuncion', 'AS', 1),
(2513, 166, 'Boqueron', 'BO', 1),
(2514, 166, 'Caaguazu', 'CG', 1),
(2515, 166, 'Caazapa', 'CZ', 1),
(2516, 166, 'Canindeyu', 'CN', 1),
(2517, 166, 'Central', 'CE', 1),
(2518, 166, 'Concepcion', 'CC', 1),
(2519, 166, 'Cordillera', 'CD', 1),
(2520, 166, 'Guaira', 'GU', 1),
(2521, 166, 'Itapua', 'IT', 1),
(2522, 166, 'Misiones', 'MI', 1),
(2523, 166, 'Neembucu', 'NE', 1),
(2524, 166, 'Paraguari', 'PA', 1),
(2525, 166, 'Presidente Hayes', 'PH', 1),
(2526, 166, 'San Pedro', 'SP', 1),
(2527, 167, 'Amazonas', 'AM', 1),
(2528, 167, 'Ancash', 'AN', 1),
(2529, 167, 'Apurimac', 'AP', 1),
(2530, 167, 'Arequipa', 'AR', 1),
(2531, 167, 'Ayacucho', 'AY', 1),
(2532, 167, 'Cajamarca', 'CJ', 1),
(2533, 167, 'Callao', 'CL', 1),
(2534, 167, 'Cusco', 'CU', 1),
(2535, 167, 'Huancavelica', 'HV', 1),
(2536, 167, 'Huanuco', 'HO', 1),
(2537, 167, 'Ica', 'IC', 1),
(2538, 167, 'Junin', 'JU', 1),
(2539, 167, 'La Libertad', 'LD', 1),
(2540, 167, 'Lambayeque', 'LY', 1),
(2541, 167, 'Lima', 'LI', 1),
(2542, 167, 'Loreto', 'LO', 1),
(2543, 167, 'Madre de Dios', 'MD', 1),
(2544, 167, 'Moquegua', 'MO', 1),
(2545, 167, 'Pasco', 'PA', 1),
(2546, 167, 'Piura', 'PI', 1),
(2547, 167, 'Puno', 'PU', 1),
(2548, 167, 'San Martin', 'SM', 1),
(2549, 167, 'Tacna', 'TA', 1),
(2550, 167, 'Tumbes', 'TU', 1),
(2551, 167, 'Ucayali', 'UC', 1),
(2552, 168, 'Abra', 'ABR', 1),
(2553, 168, 'Agusan del Norte', 'ANO', 1),
(2554, 168, 'Agusan del Sur', 'ASU', 1),
(2555, 168, 'Aklan', 'AKL', 1),
(2556, 168, 'Albay', 'ALB', 1),
(2557, 168, 'Antique', 'ANT', 1),
(2558, 168, 'Apayao', 'APY', 1),
(2559, 168, 'Aurora', 'AUR', 1),
(2560, 168, 'Basilan', 'BAS', 1),
(2561, 168, 'Bataan', 'BTA', 1),
(2562, 168, 'Batanes', 'BTE', 1),
(2563, 168, 'Batangas', 'BTG', 1),
(2564, 168, 'Biliran', 'BLR', 1),
(2565, 168, 'Benguet', 'BEN', 1),
(2566, 168, 'Bohol', 'BOL', 1),
(2567, 168, 'Bukidnon', 'BUK', 1),
(2568, 168, 'Bulacan', 'BUL', 1),
(2569, 168, 'Cagayan', 'CAG', 1),
(2570, 168, 'Camarines Norte', 'CNO', 1),
(2571, 168, 'Camarines Sur', 'CSU', 1),
(2572, 168, 'Camiguin', 'CAM', 1),
(2573, 168, 'Capiz', 'CAP', 1),
(2574, 168, 'Catanduanes', 'CAT', 1),
(2575, 168, 'Cavite', 'CAV', 1),
(2576, 168, 'Cebu', 'CEB', 1),
(2577, 168, 'Compostela', 'CMP', 1),
(2578, 168, 'Davao del Norte', 'DNO', 1),
(2579, 168, 'Davao del Sur', 'DSU', 1),
(2580, 168, 'Davao Oriental', 'DOR', 1),
(2581, 168, 'Eastern Samar', 'ESA', 1),
(2582, 168, 'Guimaras', 'GUI', 1),
(2583, 168, 'Ifugao', 'IFU', 1),
(2584, 168, 'Ilocos Norte', 'INO', 1),
(2585, 168, 'Ilocos Sur', 'ISU', 1),
(2586, 168, 'Iloilo', 'ILO', 1),
(2587, 168, 'Isabela', 'ISA', 1),
(2588, 168, 'Kalinga', 'KAL', 1),
(2589, 168, 'Laguna', 'LAG', 1),
(2590, 168, 'Lanao del Norte', 'LNO', 1),
(2591, 168, 'Lanao del Sur', 'LSU', 1),
(2592, 168, 'La Union', 'UNI', 1),
(2593, 168, 'Leyte', 'LEY', 1),
(2594, 168, 'Maguindanao', 'MAG', 1),
(2595, 168, 'Marinduque', 'MRN', 1),
(2596, 168, 'Masbate', 'MSB', 1),
(2597, 168, 'Mindoro Occidental', 'MIC', 1),
(2598, 168, 'Mindoro Oriental', 'MIR', 1),
(2599, 168, 'Misamis Occidental', 'MSC', 1),
(2600, 168, 'Misamis Oriental', 'MOR', 1),
(2601, 168, 'Mountain', 'MOP', 1),
(2602, 168, 'Negros Occidental', 'NOC', 1),
(2603, 168, 'Negros Oriental', 'NOR', 1),
(2604, 168, 'North Cotabato', 'NCT', 1),
(2605, 168, 'Northern Samar', 'NSM', 1),
(2606, 168, 'Nueva Ecija', 'NEC', 1),
(2607, 168, 'Nueva Vizcaya', 'NVZ', 1),
(2608, 168, 'Palawan', 'PLW', 1),
(2609, 168, 'Pampanga', 'PMP', 1),
(2610, 168, 'Pangasinan', 'PNG', 1),
(2611, 168, 'Quezon', 'QZN', 1),
(2612, 168, 'Quirino', 'QRN', 1),
(2613, 168, 'Rizal', 'RIZ', 1),
(2614, 168, 'Romblon', 'ROM', 1),
(2615, 168, 'Samar', 'SMR', 1),
(2616, 168, 'Sarangani', 'SRG', 1),
(2617, 168, 'Siquijor', 'SQJ', 1),
(2618, 168, 'Sorsogon', 'SRS', 1),
(2619, 168, 'South Cotabato', 'SCO', 1),
(2620, 168, 'Southern Leyte', 'SLE', 1),
(2621, 168, 'Sultan Kudarat', 'SKU', 1),
(2622, 168, 'Sulu', 'SLU', 1),
(2623, 168, 'Surigao del Norte', 'SNO', 1),
(2624, 168, 'Surigao del Sur', 'SSU', 1),
(2625, 168, 'Tarlac', 'TAR', 1),
(2626, 168, 'Tawi-Tawi', 'TAW', 1),
(2627, 168, 'Zambales', 'ZBL', 1),
(2628, 168, 'Zamboanga del Norte', 'ZNO', 1),
(2629, 168, 'Zamboanga del Sur', 'ZSU', 1),
(2630, 168, 'Zamboanga Sibugay', 'ZSI', 1),
(2631, 170, 'Dolnoslaskie', '02', 1),
(2632, 170, 'Kujawsko-Pomorskie', '94', 1),
(2633, 170, 'Lodzkie', '10', 1),
(2634, 170, 'Lubelskie', '06', 1),
(2635, 170, 'Lubuskie', '08', 1),
(2636, 170, 'Malopolskie', '12', 1),
(2637, 170, 'Mazowieckie', '14', 1),
(2638, 170, 'Opolskie', '16', 1),
(2639, 170, 'Podkarpackie', '18', 1),
(2640, 170, 'Podlaskie', '20', 1),
(2641, 170, 'Pomorskie', '22', 1),
(2642, 170, 'Slaskie', '24', 1),
(2643, 170, 'Swietokrzyskie', '26', 1),
(2644, 170, 'Warminsko-Mazurskie', '28', 1),
(2645, 170, 'Wielkopolskie', '30', 1),
(2646, 170, 'Zachodniopomorskie', '32', 1),
(2647, 198, 'Saint Pierre', 'P', 1),
(2648, 198, 'Miquelon', 'M', 1),
(2649, 171, 'A&ccedil;ores', '20', 1),
(2650, 171, 'Aveiro', '01', 1),
(2651, 171, 'Beja', '02', 1),
(2652, 171, 'Braga', '03', 1),
(2653, 171, 'Bragan&ccedil;a', '04', 1),
(2654, 171, 'Castelo Branco', '05', 1),
(2655, 171, 'Coimbra', '06', 1),
(2656, 171, '&Eacute;vora', '07', 1),
(2657, 171, 'Faro', '08', 1),
(2658, 171, 'Guarda', '09', 1),
(2659, 171, 'Leiria', '10', 1),
(2660, 171, 'Lisboa', '11', 1),
(2661, 171, 'Madeira', '30', 1),
(2662, 171, 'Portalegre', '12', 1),
(2663, 171, 'Porto', '13', 1),
(2664, 171, 'Santar&eacute;m', '14', 1),
(2665, 171, 'Set&uacute;bal', '15', 1),
(2666, 171, 'Viana do Castelo', '16', 1),
(2667, 171, 'Vila Real', '17', 1),
(2668, 171, 'Viseu', 'VI', 1),
(2669, 173, 'Ad Dawhah', 'DW', 1),
(2670, 173, 'Al Ghuwayriyah', 'GW', 1),
(2671, 173, 'Al Jumayliyah', 'JM', 1),
(2672, 173, 'Al Khawr', 'KR', 1),
(2673, 173, 'Al Wakrah', 'WK', 1),
(2674, 173, 'Ar Rayyan', 'RN', 1),
(2675, 173, 'Jarayan al Batinah', 'JB', 1),
(2676, 173, 'Madinat ash Shamal', 'MS', 1),
(2677, 173, 'Umm Sa\'id', 'UD', 1),
(2678, 173, 'Umm Salal', 'UL', 1),
(2679, 175, 'Alba', 'AB', 1),
(2680, 175, 'Arad', 'AR', 1),
(2681, 175, 'Argeș', 'AG', 1),
(2682, 175, 'Bacău', 'BC', 1),
(2683, 175, 'Bihor', 'BH', 1),
(2684, 175, 'Bistrița-Năsăud', 'BN', 1),
(2685, 175, 'Botoșani', 'BT', 1),
(2686, 175, 'Brașov', 'BV', 1),
(2687, 175, 'Brăila', 'BR', 1),
(2688, 175, 'București', 'B', 1),
(2689, 175, 'Buzău', 'BZ', 1),
(2690, 175, 'Caraș-Severin', 'CS', 1),
(2691, 175, 'Călărași', 'CL', 1),
(2692, 175, 'Cluj', 'CJ', 1),
(2693, 175, 'Constanța', 'CT', 1),
(2694, 175, 'Covasna', 'CV', 1),
(2695, 175, 'Dâmbovița', 'DB', 1),
(2696, 175, 'Dolj', 'DJ', 1),
(2697, 175, 'Galați', 'GL', 1),
(2698, 175, 'Giurgiu', 'GR', 1),
(2699, 175, 'Gorj', 'GJ', 1),
(2700, 175, 'Harghita', 'HR', 1),
(2701, 175, 'Hunedoara', 'HD', 1),
(2702, 175, 'Ialomița', 'IL', 1),
(2703, 175, 'Iași', 'IS', 1),
(2704, 175, 'Ilfov', 'IF', 1),
(2705, 175, 'Maramureș', 'MM', 1),
(2706, 175, 'Mehedinți', 'MH', 1),
(2707, 175, 'Mureș', 'MS', 1),
(2708, 175, 'Neamț', 'NT', 1),
(2709, 175, 'Olt', 'OT', 1),
(2710, 175, 'Prahova', 'PH', 1),
(2711, 175, 'Satu-Mare', 'SM', 1),
(2712, 175, 'Sălaj', 'SJ', 1),
(2713, 175, 'Sibiu', 'SB', 1),
(2714, 175, 'Suceava', 'SV', 1),
(2715, 175, 'Teleorman', 'TR', 1),
(2716, 175, 'Timiș', 'TM', 1),
(2717, 175, 'Tulcea', 'TL', 1),
(2718, 175, 'Vaslui', 'VS', 1),
(2719, 175, 'Vâlcea', 'VL', 1),
(2720, 175, 'Vrancea', 'VN', 1),
(2809, 177, 'Butare', 'BU', 1),
(2810, 177, 'Byumba', 'BY', 1),
(2811, 177, 'Cyangugu', 'CY', 1),
(2812, 177, 'Gikongoro', 'GK', 1),
(2813, 177, 'Gisenyi', 'GS', 1),
(2814, 177, 'Gitarama', 'GT', 1),
(2815, 177, 'Kibungo', 'KG', 1),
(2816, 177, 'Kibuye', 'KY', 1),
(2817, 177, 'Kigali Rurale', 'KR', 1),
(2818, 177, 'Kigali-ville', 'KV', 1),
(2819, 177, 'Ruhengeri', 'RU', 1),
(2820, 177, 'Umutara', 'UM', 1),
(2821, 178, 'Christ Church Nichola Town', 'CCN', 1),
(2822, 178, 'Saint Anne Sandy Point', 'SAS', 1),
(2823, 178, 'Saint George Basseterre', 'SGB', 1),
(2824, 178, 'Saint George Gingerland', 'SGG', 1),
(2825, 178, 'Saint James Windward', 'SJW', 1),
(2826, 178, 'Saint John Capesterre', 'SJC', 1),
(2827, 178, 'Saint John Figtree', 'SJF', 1),
(2828, 178, 'Saint Mary Cayon', 'SMC', 1),
(2829, 178, 'Saint Paul Capesterre', 'CAP', 1),
(2830, 178, 'Saint Paul Charlestown', 'CHA', 1),
(2831, 178, 'Saint Peter Basseterre', 'SPB', 1),
(2832, 178, 'Saint Thomas Lowland', 'STL', 1),
(2833, 178, 'Saint Thomas Middle Island', 'STM', 1),
(2834, 178, 'Trinity Palmetto Point', 'TPP', 1),
(2835, 179, 'Anse-la-Raye', 'AR', 1),
(2836, 179, 'Castries', 'CA', 1),
(2837, 179, 'Choiseul', 'CH', 1),
(2838, 179, 'Dauphin', 'DA', 1),
(2839, 179, 'Dennery', 'DE', 1),
(2840, 179, 'Gros-Islet', 'GI', 1),
(2841, 179, 'Laborie', 'LA', 1),
(2842, 179, 'Micoud', 'MI', 1),
(2843, 179, 'Praslin', 'PR', 1),
(2844, 179, 'Soufriere', 'SO', 1),
(2845, 179, 'Vieux-Fort', 'VF', 1),
(2846, 180, 'Charlotte', 'C', 1),
(2847, 180, 'Grenadines', 'R', 1),
(2848, 180, 'Saint Andrew', 'A', 1),
(2849, 180, 'Saint David', 'D', 1),
(2850, 180, 'Saint George', 'G', 1),
(2851, 180, 'Saint Patrick', 'P', 1),
(2852, 181, 'A\'ana', 'AN', 1),
(2853, 181, 'Aiga-i-le-Tai', 'AI', 1),
(2854, 181, 'Atua', 'AT', 1),
(2855, 181, 'Fa\'asaleleaga', 'FA', 1),
(2856, 181, 'Gaga\'emauga', 'GE', 1),
(2857, 181, 'Gagaifomauga', 'GF', 1),
(2858, 181, 'Palauli', 'PA', 1),
(2859, 181, 'Satupa\'itea', 'SA', 1),
(2860, 181, 'Tuamasaga', 'TU', 1),
(2861, 181, 'Va\'a-o-Fonoti', 'VF', 1),
(2862, 181, 'Vaisigano', 'VS', 1),
(2863, 182, 'Acquaviva', 'AC', 1),
(2864, 182, 'Borgo Maggiore', 'BM', 1),
(2865, 182, 'Chiesanuova', 'CH', 1),
(2866, 182, 'Domagnano', 'DO', 1),
(2867, 182, 'Faetano', 'FA', 1),
(2868, 182, 'Fiorentino', 'FI', 1),
(2869, 182, 'Montegiardino', 'MO', 1),
(2870, 182, 'Citta di San Marino', 'SM', 1),
(2871, 182, 'Serravalle', 'SE', 1),
(2872, 183, 'Sao Tome', 'S', 1),
(2873, 183, 'Principe', 'P', 1),
(2874, 184, 'Al Bahah', 'BH', 1),
(2875, 184, 'Al Hudud ash Shamaliyah', 'HS', 1),
(2876, 184, 'Al Jawf', 'JF', 1),
(2877, 184, 'Al Madinah', 'MD', 1),
(2878, 184, 'Al Qasim', 'QS', 1),
(2879, 184, 'Ar Riyad', 'RD', 1),
(2880, 184, 'Ash Sharqiyah (Eastern)', 'AQ', 1),
(2881, 184, '\'Asir', 'AS', 1),
(2882, 184, 'Ha\'il', 'HL', 1),
(2883, 184, 'Jizan', 'JZ', 1),
(2884, 184, 'Makkah', 'ML', 1),
(2885, 184, 'Najran', 'NR', 1),
(2886, 184, 'Tabuk', 'TB', 1),
(2887, 185, 'Dakar', 'DA', 1),
(2888, 185, 'Diourbel', 'DI', 1),
(2889, 185, 'Fatick', 'FA', 1),
(2890, 185, 'Kaolack', 'KA', 1),
(2891, 185, 'Kolda', 'KO', 1),
(2892, 185, 'Louga', 'LO', 1),
(2893, 185, 'Matam', 'MA', 1),
(2894, 185, 'Saint-Louis', 'SL', 1),
(2895, 185, 'Tambacounda', 'TA', 1),
(2896, 185, 'Thies', 'TH', 1),
(2897, 185, 'Ziguinchor', 'ZI', 1),
(2898, 186, 'Anse aux Pins', 'AP', 1),
(2899, 186, 'Anse Boileau', 'AB', 1),
(2900, 186, 'Anse Etoile', 'AE', 1),
(2901, 186, 'Anse Louis', 'AL', 1),
(2902, 186, 'Anse Royale', 'AR', 1),
(2903, 186, 'Baie Lazare', 'BL', 1),
(2904, 186, 'Baie Sainte Anne', 'BS', 1),
(2905, 186, 'Beau Vallon', 'BV', 1),
(2906, 186, 'Bel Air', 'BA', 1),
(2907, 186, 'Bel Ombre', 'BO', 1),
(2908, 186, 'Cascade', 'CA', 1),
(2909, 186, 'Glacis', 'GL', 1),
(2910, 186, 'Grand\' Anse (on Mahe)', 'GM', 1),
(2911, 186, 'Grand\' Anse (on Praslin)', 'GP', 1),
(2912, 186, 'La Digue', 'DG', 1),
(2913, 186, 'La Riviere Anglaise', 'RA', 1),
(2914, 186, 'Mont Buxton', 'MB', 1),
(2915, 186, 'Mont Fleuri', 'MF', 1),
(2916, 186, 'Plaisance', 'PL', 1),
(2917, 186, 'Pointe La Rue', 'PR', 1),
(2918, 186, 'Port Glaud', 'PG', 1),
(2919, 186, 'Saint Louis', 'SL', 1),
(2920, 186, 'Takamaka', 'TA', 1),
(2921, 187, 'Eastern', 'E', 1),
(2922, 187, 'Northern', 'N', 1),
(2923, 187, 'Southern', 'S', 1),
(2924, 187, 'Western', 'W', 1),
(2925, 189, 'Banskobystrický', 'BC', 1),
(2926, 189, 'Bratislavský', 'BL', 1),
(2927, 189, 'Košický', 'KI', 1),
(2928, 189, 'Nitriansky', 'NI', 1),
(2929, 189, 'Prešovský', 'PV', 1),
(2930, 189, 'Trenčiansky', 'TC', 1),
(2931, 189, 'Trnavský', 'TA', 1),
(2932, 189, 'Žilinský', 'ZI', 1),
(2933, 191, 'Central', 'CE', 1),
(2934, 191, 'Choiseul', 'CH', 1),
(2935, 191, 'Guadalcanal', 'GC', 1),
(2936, 191, 'Honiara', 'HO', 1),
(2937, 191, 'Isabel', 'IS', 1),
(2938, 191, 'Makira', 'MK', 1),
(2939, 191, 'Malaita', 'ML', 1),
(2940, 191, 'Rennell and Bellona', 'RB', 1),
(2941, 191, 'Temotu', 'TM', 1),
(2942, 191, 'Western', 'WE', 1),
(2943, 192, 'Awdal', 'AW', 1),
(2944, 192, 'Bakool', 'BK', 1),
(2945, 192, 'Banaadir', 'BN', 1),
(2946, 192, 'Bari', 'BR', 1),
(2947, 192, 'Bay', 'BY', 1),
(2948, 192, 'Galguduud', 'GA', 1),
(2949, 192, 'Gedo', 'GE', 1),
(2950, 192, 'Hiiraan', 'HI', 1),
(2951, 192, 'Jubbada Dhexe', 'JD', 1),
(2952, 192, 'Jubbada Hoose', 'JH', 1),
(2953, 192, 'Mudug', 'MU', 1),
(2954, 192, 'Nugaal', 'NU', 1),
(2955, 192, 'Sanaag', 'SA', 1),
(2956, 192, 'Shabeellaha Dhexe', 'SD', 1),
(2957, 192, 'Shabeellaha Hoose', 'SH', 1),
(2958, 192, 'Sool', 'SL', 1),
(2959, 192, 'Togdheer', 'TO', 1),
(2960, 192, 'Woqooyi Galbeed', 'WG', 1),
(2961, 193, 'Eastern Cape', 'EC', 1),
(2962, 193, 'Free State', 'FS', 1),
(2963, 193, 'Gauteng', 'GP', 1),
(2964, 193, 'KwaZulu-Natal', 'KZN', 1),
(2965, 193, 'Limpopo', 'LP', 1),
(2966, 193, 'Mpumalanga', 'MP', 1),
(2967, 193, 'North West', 'NW', 1),
(2968, 193, 'Northern Cape', 'NC', 1),
(2969, 193, 'Western Cape', 'WC', 1),
(2970, 195, 'La Coru&ntilde;a', 'C', 1),
(2971, 195, '&Aacute;lava', 'VI', 1),
(2972, 195, 'Albacete', 'AB', 1),
(2973, 195, 'Alicante', 'A', 1),
(2974, 195, 'Almeria', 'AL', 1),
(2975, 195, 'Asturias', 'O', 1),
(2976, 195, '&Aacute;vila', 'AV', 1),
(2977, 195, 'Badajoz', 'BA', 1),
(2978, 195, 'Baleares', 'IB', 1),
(2979, 195, 'Barcelona', 'B', 1),
(2980, 195, 'Burgos', 'BU', 1),
(2981, 195, 'C&aacute;ceres', 'CC', 1),
(2982, 195, 'C&aacute;diz', 'CA', 1),
(2983, 195, 'Cantabria', 'S', 1),
(2984, 195, 'Castell&oacute;n', 'CS', 1),
(2985, 195, 'Ceuta', 'CE', 1),
(2986, 195, 'Ciudad Real', 'CR', 1),
(2987, 195, 'C&oacute;rdoba', 'CO', 1),
(2988, 195, 'Cuenca', 'CU', 1),
(2989, 195, 'Girona', 'GI', 1),
(2990, 195, 'Granada', 'GR', 1),
(2991, 195, 'Guadalajara', 'GU', 1),
(2992, 195, 'Guip&uacute;zcoa', 'SS', 1),
(2993, 195, 'Huelva', 'H', 1),
(2994, 195, 'Huesca', 'HU', 1),
(2995, 195, 'Ja&eacute;n', 'J', 1),
(2996, 195, 'La Rioja', 'LO', 1),
(2997, 195, 'Las Palmas', 'GC', 1),
(2998, 195, 'Leon', 'CL', 1),
(2999, 195, 'Lleida', 'L', 1),
(3000, 195, 'Lugo', 'LU', 1),
(3001, 195, 'Madrid', 'M', 1),
(3002, 195, 'Malaga', 'MA', 1),
(3003, 195, 'Melilla', 'ML', 1),
(3004, 195, 'Murcia', 'MU', 1),
(3005, 195, 'Navarra', 'NA', 1),
(3006, 195, 'Ourense', 'OR', 1),
(3007, 195, 'Palencia', 'P', 1),
(3008, 195, 'Pontevedra', 'PO', 1),
(3009, 195, 'Salamanca', 'SA', 1),
(3010, 195, 'Santa Cruz de Tenerife', 'TF', 1),
(3011, 195, 'Segovia', 'SG', 1),
(3012, 195, 'Sevilla', 'SE', 1),
(3013, 195, 'Soria', 'SO', 1),
(3014, 195, 'Tarragona', 'T', 1),
(3015, 195, 'Teruel', 'TE', 1),
(3016, 195, 'Toledo', 'TO', 1),
(3017, 195, 'Valencia', 'V', 1),
(3018, 195, 'Valladolid', 'VA', 1),
(3019, 195, 'Bizkaia', 'BI', 1),
(3020, 195, 'Zamora', 'ZA', 1),
(3021, 195, 'Zaragoza', 'Z', 1),
(3022, 196, 'Central', 'CE', 1),
(3023, 196, 'Eastern', 'EA', 1),
(3024, 196, 'North Central', 'NC', 1),
(3025, 196, 'Northern', 'NO', 1),
(3026, 196, 'North Western', 'NW', 1),
(3027, 196, 'Sabaragamuwa', 'SA', 1),
(3028, 196, 'Southern', 'SO', 1),
(3029, 196, 'Uva', 'UV', 1),
(3030, 196, 'Western', 'WE', 1),
(3032, 197, 'Saint Helena', 'S', 1),
(3034, 199, 'A\'ali an Nil', 'ANL', 1),
(3035, 199, 'Al Bahr al Ahmar', 'BAM', 1),
(3036, 199, 'Al Buhayrat', 'BRT', 1),
(3037, 199, 'Al Jazirah', 'JZR', 1),
(3038, 199, 'Al Khartum', 'KRT', 1),
(3039, 199, 'Al Qadarif', 'QDR', 1),
(3040, 199, 'Al Wahdah', 'WDH', 1),
(3041, 199, 'An Nil al Abyad', 'ANB', 1),
(3042, 199, 'An Nil al Azraq', 'ANZ', 1),
(3043, 199, 'Ash Shamaliyah', 'ASH', 1),
(3044, 199, 'Bahr al Jabal', 'BJA', 1),
(3045, 199, 'Gharb al Istiwa\'iyah', 'GIS', 1),
(3046, 199, 'Gharb Bahr al Ghazal', 'GBG', 1),
(3047, 199, 'Gharb Darfur', 'GDA', 1),
(3048, 199, 'Gharb Kurdufan', 'GKU', 1),
(3049, 199, 'Janub Darfur', 'JDA', 1),
(3050, 199, 'Janub Kurdufan', 'JKU', 1),
(3051, 199, 'Junqali', 'JQL', 1),
(3052, 199, 'Kassala', 'KSL', 1),
(3053, 199, 'Nahr an Nil', 'NNL', 1),
(3054, 199, 'Shamal Bahr al Ghazal', 'SBG', 1),
(3055, 199, 'Shamal Darfur', 'SDA', 1),
(3056, 199, 'Shamal Kurdufan', 'SKU', 1),
(3057, 199, 'Sharq al Istiwa\'iyah', 'SIS', 1),
(3058, 199, 'Sinnar', 'SNR', 1),
(3059, 199, 'Warab', 'WRB', 1),
(3060, 200, 'Brokopondo', 'BR', 1),
(3061, 200, 'Commewijne', 'CM', 1),
(3062, 200, 'Coronie', 'CR', 1),
(3063, 200, 'Marowijne', 'MA', 1),
(3064, 200, 'Nickerie', 'NI', 1),
(3065, 200, 'Para', 'PA', 1),
(3066, 200, 'Paramaribo', 'PM', 1),
(3067, 200, 'Saramacca', 'SA', 1),
(3068, 200, 'Sipaliwini', 'SI', 1),
(3069, 200, 'Wanica', 'WA', 1),
(3070, 202, 'Hhohho', 'H', 1),
(3071, 202, 'Lubombo', 'L', 1),
(3072, 202, 'Manzini', 'M', 1),
(3073, 202, 'Shishelweni', 'S', 1),
(3074, 203, 'Blekinge', 'K', 1),
(3075, 203, 'Dalarna', 'W', 1),
(3076, 203, 'Gävleborg', 'X', 1),
(3077, 203, 'Gotland', 'I', 1),
(3078, 203, 'Halland', 'N', 1),
(3079, 203, 'Jämtland', 'Z', 1),
(3080, 203, 'Jönköping', 'F', 1),
(3081, 203, 'Kalmar', 'H', 1),
(3082, 203, 'Kronoberg', 'G', 1),
(3083, 203, 'Norrbotten', 'BD', 1),
(3084, 203, 'Örebro', 'T', 1),
(3085, 203, 'Östergötland', 'E', 1),
(3086, 203, 'Sk&aring;ne', 'M', 1),
(3087, 203, 'Södermanland', 'D', 1),
(3088, 203, 'Stockholm', 'AB', 1),
(3089, 203, 'Uppsala', 'C', 1),
(3090, 203, 'Värmland', 'S', 1),
(3091, 203, 'Västerbotten', 'AC', 1),
(3092, 203, 'Västernorrland', 'Y', 1),
(3093, 203, 'Västmanland', 'U', 1),
(3094, 203, 'Västra Götaland', 'O', 1),
(3095, 204, 'Aargau', 'AG', 1),
(3096, 204, 'Appenzell Ausserrhoden', 'AR', 1),
(3097, 204, 'Appenzell Innerrhoden', 'AI', 1),
(3098, 204, 'Basel-Stadt', 'BS', 1),
(3099, 204, 'Basel-Landschaft', 'BL', 1),
(3100, 204, 'Bern', 'BE', 1),
(3101, 204, 'Fribourg', 'FR', 1),
(3102, 204, 'Gen&egrave;ve', 'GE', 1),
(3103, 204, 'Glarus', 'GL', 1),
(3104, 204, 'Graubünden', 'GR', 1),
(3105, 204, 'Jura', 'JU', 1),
(3106, 204, 'Luzern', 'LU', 1),
(3107, 204, 'Neuch&acirc;tel', 'NE', 1),
(3108, 204, 'Nidwald', 'NW', 1),
(3109, 204, 'Obwald', 'OW', 1),
(3110, 204, 'St. Gallen', 'SG', 1),
(3111, 204, 'Schaffhausen', 'SH', 1),
(3112, 204, 'Schwyz', 'SZ', 1),
(3113, 204, 'Solothurn', 'SO', 1),
(3114, 204, 'Thurgau', 'TG', 1),
(3115, 204, 'Ticino', 'TI', 1),
(3116, 204, 'Uri', 'UR', 1),
(3117, 204, 'Valais', 'VS', 1),
(3118, 204, 'Vaud', 'VD', 1),
(3119, 204, 'Zug', 'ZG', 1),
(3120, 204, 'Zürich', 'ZH', 1),
(3121, 205, 'Al Hasakah', 'HA', 1),
(3122, 205, 'Al Ladhiqiyah', 'LA', 1),
(3123, 205, 'Al Qunaytirah', 'QU', 1),
(3124, 205, 'Ar Raqqah', 'RQ', 1),
(3125, 205, 'As Suwayda', 'SU', 1),
(3126, 205, 'Dara', 'DA', 1),
(3127, 205, 'Dayr az Zawr', 'DZ', 1),
(3128, 205, 'Dimashq', 'DI', 1),
(3129, 205, 'Halab', 'HL', 1),
(3130, 205, 'Hamah', 'HM', 1),
(3131, 205, 'Hims', 'HI', 1),
(3132, 205, 'Idlib', 'ID', 1),
(3133, 205, 'Rif Dimashq', 'RD', 1),
(3134, 205, 'Tartus', 'TA', 1),
(3135, 206, 'Chang-hua', 'CH', 1),
(3136, 206, 'Chia-i', 'CI', 1),
(3137, 206, 'Hsin-chu', 'HS', 1),
(3138, 206, 'Hua-lien', 'HL', 1),
(3139, 206, 'I-lan', 'IL', 1),
(3140, 206, 'Kao-hsiung county', 'KH', 1),
(3141, 206, 'Kin-men', 'KM', 1),
(3142, 206, 'Lien-chiang', 'LC', 1),
(3143, 206, 'Miao-li', 'ML', 1),
(3144, 206, 'Nan-t\'ou', 'NT', 1),
(3145, 206, 'P\'eng-hu', 'PH', 1),
(3146, 206, 'P\'ing-tung', 'PT', 1),
(3147, 206, 'T\'ai-chung', 'TG', 1),
(3148, 206, 'T\'ai-nan', 'TA', 1),
(3149, 206, 'T\'ai-pei county', 'TP', 1),
(3150, 206, 'T\'ai-tung', 'TT', 1),
(3151, 206, 'T\'ao-yuan', 'TY', 1),
(3152, 206, 'Yun-lin', 'YL', 1),
(3153, 206, 'Chia-i city', 'CC', 1),
(3154, 206, 'Chi-lung', 'CL', 1),
(3155, 206, 'Hsin-chu', 'HC', 1),
(3156, 206, 'T\'ai-chung', 'TH', 1),
(3157, 206, 'T\'ai-nan', 'TN', 1),
(3158, 206, 'Kao-hsiung city', 'KC', 1),
(3159, 206, 'T\'ai-pei city', 'TC', 1),
(3160, 207, 'Gorno-Badakhstan', 'GB', 1),
(3161, 207, 'Khatlon', 'KT', 1),
(3162, 207, 'Sughd', 'SU', 1),
(3163, 208, 'Arusha', 'AR', 1),
(3164, 208, 'Dar es Salaam', 'DS', 1),
(3165, 208, 'Dodoma', 'DO', 1),
(3166, 208, 'Iringa', 'IR', 1),
(3167, 208, 'Kagera', 'KA', 1),
(3168, 208, 'Kigoma', 'KI', 1),
(3169, 208, 'Kilimanjaro', 'KJ', 1),
(3170, 208, 'Lindi', 'LN', 1),
(3171, 208, 'Manyara', 'MY', 1),
(3172, 208, 'Mara', 'MR', 1),
(3173, 208, 'Mbeya', 'MB', 1),
(3174, 208, 'Morogoro', 'MO', 1),
(3175, 208, 'Mtwara', 'MT', 1),
(3176, 208, 'Mwanza', 'MW', 1),
(3177, 208, 'Pemba North', 'PN', 1),
(3178, 208, 'Pemba South', 'PS', 1),
(3179, 208, 'Pwani', 'PW', 1),
(3180, 208, 'Rukwa', 'RK', 1),
(3181, 208, 'Ruvuma', 'RV', 1),
(3182, 208, 'Shinyanga', 'SH', 1),
(3183, 208, 'Singida', 'SI', 1),
(3184, 208, 'Tabora', 'TB', 1),
(3185, 208, 'Tanga', 'TN', 1),
(3186, 208, 'Zanzibar Central/South', 'ZC', 1),
(3187, 208, 'Zanzibar North', 'ZN', 1),
(3188, 208, 'Zanzibar Urban/West', 'ZU', 1),
(3189, 209, 'Amnat Charoen', '37', 1),
(3190, 209, 'Ang Thong', '15', 1),
(3192, 209, 'Bangkok', '10', 1),
(3193, 209, 'Buri Ram', '31', 1),
(3194, 209, 'Chachoengsao', '24', 1),
(3195, 209, 'Chai Nat', '18', 1),
(3196, 209, 'Chaiyaphum', '36', 1),
(3197, 209, 'Chanthaburi', '22', 1),
(3198, 209, 'Chiang Mai', '50', 1),
(3199, 209, 'Chiang Rai', '57', 1),
(3200, 209, 'Chon Buri', '20', 1),
(3201, 209, 'Chumphon', '86', 1),
(3202, 209, 'Kalasin', '46', 1),
(3203, 209, 'Kamphaeng Phet', '62', 1),
(3204, 209, 'Kanchanaburi', '71', 1),
(3205, 209, 'Khon Kaen', '40', 1),
(3206, 209, 'Krabi', '81', 1),
(3207, 209, 'Lampang', '52', 1),
(3208, 209, 'Lamphun', '51', 1),
(3209, 209, 'Loei', '42', 1),
(3210, 209, 'Lop Buri', '1', 1),
(3211, 209, 'Mae Hong Son', '55', 1),
(3212, 209, 'Maha Sarakham', '44', 1),
(3213, 209, 'Mukdahan', '49', 1),
(3214, 209, 'Nakhon Nayok', '26', 1),
(3215, 209, 'Nakhon Pathom', '73', 1),
(3216, 209, 'Nakhon Phanom', '48', 1),
(3217, 209, 'Nakhon Ratchasima', '30', 1),
(3218, 209, 'Nakhon Sawan', '60', 1),
(3219, 209, 'Nakhon Si Thammarat', '80', 1),
(3220, 209, 'Nan', '55', 1),
(3221, 209, 'Narathiwat', '96', 1),
(3222, 209, 'Nong Bua Lamphu', '39', 1),
(3223, 209, 'Nong Khai', '43', 1),
(3224, 209, 'Nonthaburi', '12', 1),
(3225, 209, 'Pathum Thani', '13', 1),
(3226, 209, 'Pattani', '94', 1),
(3227, 209, 'Phangnga', '82', 1),
(3228, 209, 'Phatthalung', '93', 1),
(3229, 209, 'Phayao', 'Phayao', 1),
(3230, 209, 'Phetchabun', '67', 1),
(3231, 209, 'Phetchaburi', '76', 1),
(3232, 209, 'Phichit', '66', 1),
(3233, 209, 'Phitsanulok', '65', 1),
(3234, 209, 'Phrae', '54', 1),
(3235, 209, 'Phuket', '83', 1),
(3236, 209, 'Prachin Buri', '25', 1),
(3237, 209, 'Prachuap Khiri Khan', '77', 1),
(3238, 209, 'Ranong', '21', 1),
(3239, 209, 'Ratchaburi', '70', 1),
(3240, 209, 'Rayong', '21', 1),
(3241, 209, 'Roi Et', '45', 1),
(3242, 209, 'Sa Kaeo', '27', 1),
(3243, 209, 'Sakon Nakhon', '47', 1),
(3244, 209, 'Samut Prakan', '11', 1),
(3245, 209, 'Samut Sakhon', '74', 1),
(3246, 209, 'Samut Songkhram', '75', 1),
(3247, 209, 'Saraburi', '19', 1),
(3248, 209, 'Satun', '91', 1),
(3249, 209, 'Sing Buri', '17', 1),
(3250, 209, 'Si Sa Ket', '33', 1),
(3251, 209, 'Songkhla', '90', 1),
(3252, 209, 'Sukhothai', '64', 1),
(3253, 209, 'Suphan Buri', '72', 1),
(3254, 209, 'Surat Thani', '84', 1),
(3255, 209, 'Surin', '32', 1),
(3256, 209, 'Tak', '63', 1),
(3257, 209, 'Trang', '92', 1),
(3258, 209, 'Trat', '23', 1),
(3259, 209, 'Ubon Ratchathani', '34', 1),
(3260, 209, 'Udon Thani', '41', 1),
(3261, 209, 'Uthai Thani', '61', 1),
(3262, 209, 'Uttaradit', '53', 1),
(3263, 209, 'Yala', '95', 1),
(3264, 209, 'Yasothon', '35', 1),
(3265, 210, 'Kara', 'K', 1),
(3266, 210, 'Plateaux', 'P', 1),
(3267, 210, 'Savanes', 'S', 1),
(3268, 210, 'Centrale', 'C', 1),
(3269, 210, 'Maritime', 'M', 1),
(3270, 211, 'Atafu', 'A', 1),
(3271, 211, 'Fakaofo', 'F', 1);
INSERT INTO `m_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(3272, 211, 'Nukunonu', 'N', 1),
(3273, 212, 'Ha\'apai', 'H', 1),
(3274, 212, 'Tongatapu', 'T', 1),
(3275, 212, 'Vava\'u', 'V', 1),
(3276, 213, 'Couva/Tabaquite/Talparo', 'CT', 1),
(3277, 213, 'Diego Martin', 'DM', 1),
(3278, 213, 'Mayaro/Rio Claro', 'MR', 1),
(3279, 213, 'Penal/Debe', 'PD', 1),
(3280, 213, 'Princes Town', 'PT', 1),
(3281, 213, 'Sangre Grande', 'SG', 1),
(3282, 213, 'San Juan/Laventille', 'SL', 1),
(3283, 213, 'Siparia', 'SI', 1),
(3284, 213, 'Tunapuna/Piarco', 'TP', 1),
(3285, 213, 'Port of Spain', 'PS', 1),
(3286, 213, 'San Fernando', 'SF', 1),
(3287, 213, 'Arima', 'AR', 1),
(3288, 213, 'Point Fortin', 'PF', 1),
(3289, 213, 'Chaguanas', 'CH', 1),
(3290, 213, 'Tobago', 'TO', 1),
(3291, 214, 'Ariana', 'AR', 1),
(3292, 214, 'Beja', 'BJ', 1),
(3293, 214, 'Ben Arous', 'BA', 1),
(3294, 214, 'Bizerte', 'BI', 1),
(3295, 214, 'Gabes', 'GB', 1),
(3296, 214, 'Gafsa', 'GF', 1),
(3297, 214, 'Jendouba', 'JE', 1),
(3298, 214, 'Kairouan', 'KR', 1),
(3299, 214, 'Kasserine', 'KS', 1),
(3300, 214, 'Kebili', 'KB', 1),
(3301, 214, 'Kef', 'KF', 1),
(3302, 214, 'Mahdia', 'MH', 1),
(3303, 214, 'Manouba', 'MN', 1),
(3304, 214, 'Medenine', 'ME', 1),
(3305, 214, 'Monastir', 'MO', 1),
(3306, 214, 'Nabeul', 'NA', 1),
(3307, 214, 'Sfax', 'SF', 1),
(3308, 214, 'Sidi', 'SD', 1),
(3309, 214, 'Siliana', 'SL', 1),
(3310, 214, 'Sousse', 'SO', 1),
(3311, 214, 'Tataouine', 'TA', 1),
(3312, 214, 'Tozeur', 'TO', 1),
(3313, 214, 'Tunis', 'TU', 1),
(3314, 214, 'Zaghouan', 'ZA', 1),
(3315, 215, 'Adana', 'TR-01', 1),
(3316, 215, 'Adıyaman', 'TR-02', 1),
(3317, 215, 'Afyonkarahisar', 'TR-03', 1),
(3318, 215, 'Ağrı', 'TR-04', 1),
(3319, 215, 'Aksaray', 'TR-68', 1),
(3320, 215, 'Amasya', 'TR-05', 1),
(3321, 215, 'Ankara', 'TR-06', 1),
(3322, 215, 'Antalya', 'TR-07', 1),
(3323, 215, 'Ardahan', 'TR-75', 1),
(3324, 215, 'Artvin', 'TR-08', 1),
(3325, 215, 'Aydın', 'TR-09', 1),
(3326, 215, 'Balıkesir', 'TR-10', 1),
(3327, 215, 'Bartın', 'TR-74', 1),
(3328, 215, 'Batman', 'TR-72', 1),
(3329, 215, 'Bayburt', 'TR-69', 1),
(3330, 215, 'Bilecik', 'TR-11', 1),
(3331, 215, 'Bingöl', 'TR-12', 1),
(3332, 215, 'Bitlis', 'TR-13', 1),
(3333, 215, 'Bolu', 'TR-14', 1),
(3334, 215, 'Burdur', 'TR-15', 1),
(3335, 215, 'Bursa', 'TR-16', 1),
(3336, 215, 'Çanakkale', 'TR-17', 1),
(3337, 215, 'Çankırı', 'TR-18', 1),
(3338, 215, 'Çorum', 'TR-19', 1),
(3339, 215, 'Denizli', 'TR-20', 1),
(3340, 215, 'Diyarbakır', 'TR-21', 1),
(3341, 215, 'Düzce', 'TR-81', 1),
(3342, 215, 'Edirne', 'TR-22', 1),
(3343, 215, 'Elazığ', 'TR-23', 1),
(3344, 215, 'Erzincan', 'TR-24', 1),
(3345, 215, 'Erzurum', 'TR-25', 1),
(3346, 215, 'Eskişehir', 'TR-26', 1),
(3347, 215, 'Gaziantep', 'TR-27', 1),
(3348, 215, 'Giresun', 'TR-28', 1),
(3349, 215, 'Gümüşhane', 'TR-29', 1),
(3350, 215, 'Hakkari', 'TR-30', 1),
(3351, 215, 'Hatay', 'TR-31', 1),
(3352, 215, 'Iğdır', 'TR-76', 1),
(3353, 215, 'Isparta', 'TR-32', 1),
(3354, 215, 'İstanbul', 'TR-34', 1),
(3355, 215, 'İzmir', 'TR-35', 1),
(3356, 215, 'Kahramanmaraş', 'TR-46', 1),
(3357, 215, 'Karabük', 'TR-78', 1),
(3358, 215, 'Karaman', 'TR-70', 1),
(3359, 215, 'Kars', 'TR-36', 1),
(3360, 215, 'Kastamonu', 'TR-37', 1),
(3361, 215, 'Kayseri', 'TR-38', 1),
(3362, 215, 'Kilis', 'TR-79', 1),
(3363, 215, 'Kırıkkale', 'TR-71', 1),
(3364, 215, 'Kırklareli', 'TR-39', 1),
(3365, 215, 'Kırşehir', 'TR-40', 1),
(3366, 215, 'Kocaeli', 'TR-41', 1),
(3367, 215, 'Konya', 'TR-42', 1),
(3368, 215, 'Kütahya', 'TR-43', 1),
(3369, 215, 'Malatya', 'TR-44', 1),
(3370, 215, 'Manisa', 'TR-45', 1),
(3371, 215, 'Mardin', 'TR-47', 1),
(3372, 215, 'Mersin', 'TR-33', 1),
(3373, 215, 'Muğla', 'TR-48', 1),
(3374, 215, 'Muş', 'TR-49', 1),
(3375, 215, 'Nevşehir', 'TR-50', 1),
(3376, 215, 'Niğde', 'TR-51', 1),
(3377, 215, 'Ordu', 'TR-52', 1),
(3378, 215, 'Osmaniye', 'TR-80', 1),
(3379, 215, 'Rize', 'TR-53', 1),
(3380, 215, 'Sakarya', 'TR-54', 1),
(3381, 215, 'Samsun', 'TR-55', 1),
(3382, 215, 'Şanlıurfa', 'TR-63', 1),
(3383, 215, 'Siirt', 'TR-56', 1),
(3384, 215, 'Sinop', 'TR-57', 1),
(3385, 215, 'Şırnak', 'TR-73', 1),
(3386, 215, 'Sivas', 'TR-58', 1),
(3387, 215, 'Tekirdağ', 'TR-59', 1),
(3388, 215, 'Tokat', 'TR-60', 1),
(3389, 215, 'Trabzon', 'TR-61', 1),
(3390, 215, 'Tunceli', 'TR-62', 1),
(3391, 215, 'Uşak', 'TR-64', 1),
(3392, 215, 'Van', 'TR-65', 1),
(3393, 215, 'Yalova', 'TR-77', 1),
(3394, 215, 'Yozgat', 'TR-66', 1),
(3395, 215, 'Zonguldak', 'TR-67', 1),
(3396, 216, 'Ahal Welayaty', 'A', 1),
(3397, 216, 'Balkan Welayaty', 'B', 1),
(3398, 216, 'Dashhowuz Welayaty', 'D', 1),
(3399, 216, 'Lebap Welayaty', 'L', 1),
(3400, 216, 'Mary Welayaty', 'M', 1),
(3401, 217, 'Ambergris Cays', 'AC', 1),
(3402, 217, 'Dellis Cay', 'DC', 1),
(3403, 217, 'French Cay', 'FC', 1),
(3404, 217, 'Little Water Cay', 'LW', 1),
(3405, 217, 'Parrot Cay', 'RC', 1),
(3406, 217, 'Pine Cay', 'PN', 1),
(3407, 217, 'Salt Cay', 'SL', 1),
(3408, 217, 'Grand Turk', 'GT', 1),
(3409, 217, 'South Caicos', 'SC', 1),
(3410, 217, 'East Caicos', 'EC', 1),
(3411, 217, 'Middle Caicos', 'MC', 1),
(3412, 217, 'North Caicos', 'NC', 1),
(3413, 217, 'Providenciales', 'PR', 1),
(3414, 217, 'West Caicos', 'WC', 1),
(3415, 218, 'Nanumanga', 'NMG', 1),
(3416, 218, 'Niulakita', 'NLK', 1),
(3417, 218, 'Niutao', 'NTO', 1),
(3418, 218, 'Funafuti', 'FUN', 1),
(3419, 218, 'Nanumea', 'NME', 1),
(3420, 218, 'Nui', 'NUI', 1),
(3421, 218, 'Nukufetau', 'NFT', 1),
(3422, 218, 'Nukulaelae', 'NLL', 1),
(3423, 218, 'Vaitupu', 'VAI', 1),
(3424, 219, 'Kalangala', 'KAL', 1),
(3425, 219, 'Kampala', 'KMP', 1),
(3426, 219, 'Kayunga', 'KAY', 1),
(3427, 219, 'Kiboga', 'KIB', 1),
(3428, 219, 'Luwero', 'LUW', 1),
(3429, 219, 'Masaka', 'MAS', 1),
(3430, 219, 'Mpigi', 'MPI', 1),
(3431, 219, 'Mubende', 'MUB', 1),
(3432, 219, 'Mukono', 'MUK', 1),
(3433, 219, 'Nakasongola', 'NKS', 1),
(3434, 219, 'Rakai', 'RAK', 1),
(3435, 219, 'Sembabule', 'SEM', 1),
(3436, 219, 'Wakiso', 'WAK', 1),
(3437, 219, 'Bugiri', 'BUG', 1),
(3438, 219, 'Busia', 'BUS', 1),
(3439, 219, 'Iganga', 'IGA', 1),
(3440, 219, 'Jinja', 'JIN', 1),
(3441, 219, 'Kaberamaido', 'KAB', 1),
(3442, 219, 'Kamuli', 'KML', 1),
(3443, 219, 'Kapchorwa', 'KPC', 1),
(3444, 219, 'Katakwi', 'KTK', 1),
(3445, 219, 'Kumi', 'KUM', 1),
(3446, 219, 'Mayuge', 'MAY', 1),
(3447, 219, 'Mbale', 'MBA', 1),
(3448, 219, 'Pallisa', 'PAL', 1),
(3449, 219, 'Sironko', 'SIR', 1),
(3450, 219, 'Soroti', 'SOR', 1),
(3451, 219, 'Tororo', 'TOR', 1),
(3452, 219, 'Adjumani', 'ADJ', 1),
(3453, 219, 'Apac', 'APC', 1),
(3454, 219, 'Arua', 'ARU', 1),
(3455, 219, 'Gulu', 'GUL', 1),
(3456, 219, 'Kitgum', 'KIT', 1),
(3457, 219, 'Kotido', 'KOT', 1),
(3458, 219, 'Lira', 'LIR', 1),
(3459, 219, 'Moroto', 'MRT', 1),
(3460, 219, 'Moyo', 'MOY', 1),
(3461, 219, 'Nakapiripirit', 'NAK', 1),
(3462, 219, 'Nebbi', 'NEB', 1),
(3463, 219, 'Pader', 'PAD', 1),
(3464, 219, 'Yumbe', 'YUM', 1),
(3465, 219, 'Bundibugyo', 'BUN', 1),
(3466, 219, 'Bushenyi', 'BSH', 1),
(3467, 219, 'Hoima', 'HOI', 1),
(3468, 219, 'Kabale', 'KBL', 1),
(3469, 219, 'Kabarole', 'KAR', 1),
(3470, 219, 'Kamwenge', 'KAM', 1),
(3471, 219, 'Kanungu', 'KAN', 1),
(3472, 219, 'Kasese', 'KAS', 1),
(3473, 219, 'Kibaale', 'KBA', 1),
(3474, 219, 'Kisoro', 'KIS', 1),
(3475, 219, 'Kyenjojo', 'KYE', 1),
(3476, 219, 'Masindi', 'MSN', 1),
(3477, 219, 'Mbarara', 'MBR', 1),
(3478, 219, 'Ntungamo', 'NTU', 1),
(3479, 219, 'Rukungiri', 'RUK', 1),
(3480, 220, 'Cherkaska', '23', 1),
(3481, 220, 'Chernihivska', '25', 1),
(3482, 220, 'Chernivetska', '24', 1),
(3483, 220, 'Avtonomna Respublika Krym', '27', 1),
(3484, 220, 'Dnipropetrovska', '04', 1),
(3485, 220, 'Donetska', '05', 1),
(3486, 220, 'Ivano-Frankivska', '09', 1),
(3487, 220, 'Khersonska', '21', 1),
(3488, 220, 'Khmelnytska', '22', 1),
(3489, 220, 'Kirovohradska', '35', 1),
(3490, 220, 'Kyiv', '26', 1),
(3491, 220, 'Kyivska', '10', 1),
(3492, 220, 'Luhanska', '12', 1),
(3493, 220, 'Lvivska', '13', 1),
(3494, 220, 'Mykolaivska', '14', 1),
(3495, 220, 'Odeska', '15', 1),
(3496, 220, 'Poltavska', '16', 1),
(3497, 220, 'Rivnenska', '17', 1),
(3498, 220, 'Sevastopol', '28', 1),
(3499, 220, 'Sumska', '18', 1),
(3500, 220, 'Ternopilska', '19', 1),
(3501, 220, 'Vinnytska', '02', 1),
(3502, 220, 'Volynska', '03', 1),
(3503, 220, 'Zakarpatska', '07', 1),
(3504, 220, 'Zaporizka', '08', 1),
(3505, 220, 'Zhytomyrskа', '06', 1),
(3506, 221, 'Abu Dhabi', 'ADH', 1),
(3507, 221, '\'Ajman', 'AJ', 1),
(3508, 221, 'Al Fujayrah', 'FU', 1),
(3509, 221, 'Ash Shāriqah', 'SH', 1),
(3510, 221, 'Dubai', 'DU', 1),
(3511, 221, 'Ra’s al Khaymah', 'RK', 1),
(3512, 221, 'Umm al Qaywayn', 'UQ', 1),
(3513, 222, 'Aberdeen', 'ABN', 1),
(3514, 222, 'Aberdeenshire', 'ABNS', 1),
(3515, 222, 'Anglesey', 'ANG', 1),
(3516, 222, 'Angus', 'AGS', 1),
(3517, 222, 'Argyll and Bute', 'ARY', 1),
(3518, 222, 'Bedfordshire', 'BEDS', 1),
(3519, 222, 'Berkshire', 'BERKS', 1),
(3520, 222, 'Blaenau Gwent', 'BLA', 1),
(3521, 222, 'Bridgend', 'BRI', 1),
(3522, 222, 'Bristol', 'BSTL', 1),
(3523, 222, 'Buckinghamshire', 'BUCKS', 1),
(3524, 222, 'Caerphilly', 'CAE', 1),
(3525, 222, 'Cambridgeshire', 'CAMBS', 1),
(3526, 222, 'Cardiff', 'CDF', 1),
(3527, 222, 'Carmarthenshire', 'CARM', 1),
(3528, 222, 'Ceredigion', 'CDGN', 1),
(3529, 222, 'Cheshire', 'CHES', 1),
(3530, 222, 'Clackmannanshire', 'CLACK', 1),
(3531, 222, 'Conwy', 'CON', 1),
(3532, 222, 'Cornwall', 'CORN', 1),
(3533, 222, 'Denbighshire', 'DNBG', 1),
(3534, 222, 'Derbyshire', 'DERBY', 1),
(3535, 222, 'Devon', 'DVN', 1),
(3536, 222, 'Dorset', 'DOR', 1),
(3537, 222, 'Dumfries and Galloway', 'DGL', 1),
(3538, 222, 'Dundee', 'DUND', 1),
(3539, 222, 'Durham', 'DHM', 1),
(3540, 222, 'East Ayrshire', 'ARYE', 1),
(3541, 222, 'East Dunbartonshire', 'DUNBE', 1),
(3542, 222, 'East Lothian', 'LOTE', 1),
(3543, 222, 'East Renfrewshire', 'RENE', 1),
(3544, 222, 'East Riding of Yorkshire', 'ERYS', 1),
(3545, 222, 'East Sussex', 'SXE', 1),
(3546, 222, 'Edinburgh', 'EDIN', 1),
(3547, 222, 'Essex', 'ESX', 1),
(3548, 222, 'Falkirk', 'FALK', 1),
(3549, 222, 'Fife', 'FFE', 1),
(3550, 222, 'Flintshire', 'FLINT', 1),
(3551, 222, 'Glasgow', 'GLAS', 1),
(3552, 222, 'Gloucestershire', 'GLOS', 1),
(3553, 222, 'Greater London', 'LDN', 1),
(3554, 222, 'Greater Manchester', 'MCH', 1),
(3555, 222, 'Gwynedd', 'GDD', 1),
(3556, 222, 'Hampshire', 'HANTS', 1),
(3557, 222, 'Herefordshire', 'HWR', 1),
(3558, 222, 'Hertfordshire', 'HERTS', 1),
(3559, 222, 'Highlands', 'HLD', 1),
(3560, 222, 'Inverclyde', 'IVER', 1),
(3561, 222, 'Isle of Wight', 'IOW', 1),
(3562, 222, 'Kent', 'KNT', 1),
(3563, 222, 'Lancashire', 'LANCS', 1),
(3564, 222, 'Leicestershire', 'LEICS', 1),
(3565, 222, 'Lincolnshire', 'LINCS', 1),
(3566, 222, 'Merseyside', 'MSY', 1),
(3567, 222, 'Merthyr Tydfil', 'MERT', 1),
(3568, 222, 'Midlothian', 'MLOT', 1),
(3569, 222, 'Monmouthshire', 'MMOUTH', 1),
(3570, 222, 'Moray', 'MORAY', 1),
(3571, 222, 'Neath Port Talbot', 'NPRTAL', 1),
(3572, 222, 'Newport', 'NEWPT', 1),
(3573, 222, 'Norfolk', 'NOR', 1),
(3574, 222, 'North Ayrshire', 'ARYN', 1),
(3575, 222, 'North Lanarkshire', 'LANN', 1),
(3576, 222, 'North Yorkshire', 'YSN', 1),
(3577, 222, 'Northamptonshire', 'NHM', 1),
(3578, 222, 'Northumberland', 'NLD', 1),
(3579, 222, 'Nottinghamshire', 'NOT', 1),
(3580, 222, 'Orkney Islands', 'ORK', 1),
(3581, 222, 'Oxfordshire', 'OFE', 1),
(3582, 222, 'Pembrokeshire', 'PEM', 1),
(3583, 222, 'Perth and Kinross', 'PERTH', 1),
(3584, 222, 'Powys', 'PWS', 1),
(3585, 222, 'Renfrewshire', 'REN', 1),
(3586, 222, 'Rhondda Cynon Taff', 'RHON', 1),
(3587, 222, 'Rutland', 'RUT', 1),
(3588, 222, 'Scottish Borders', 'BOR', 1),
(3589, 222, 'Shetland Islands', 'SHET', 1),
(3590, 222, 'Shropshire', 'SPE', 1),
(3591, 222, 'Somerset', 'SOM', 1),
(3592, 222, 'South Ayrshire', 'ARYS', 1),
(3593, 222, 'South Lanarkshire', 'LANS', 1),
(3594, 222, 'South Yorkshire', 'YSS', 1),
(3595, 222, 'Staffordshire', 'SFD', 1),
(3596, 222, 'Stirling', 'STIR', 1),
(3597, 222, 'Suffolk', 'SFK', 1),
(3598, 222, 'Surrey', 'SRY', 1),
(3599, 222, 'Swansea', 'SWAN', 1),
(3600, 222, 'Torfaen', 'TORF', 1),
(3601, 222, 'Tyne and Wear', 'TWR', 1),
(3602, 222, 'Vale of Glamorgan', 'VGLAM', 1),
(3603, 222, 'Warwickshire', 'WARKS', 1),
(3604, 222, 'West Dunbartonshire', 'WDUN', 1),
(3605, 222, 'West Lothian', 'WLOT', 1),
(3606, 222, 'West Midlands', 'WMD', 1),
(3607, 222, 'West Sussex', 'SXW', 1),
(3608, 222, 'West Yorkshire', 'YSW', 1),
(3609, 222, 'Western Isles', 'WIL', 1),
(3610, 222, 'Wiltshire', 'WLT', 1),
(3611, 222, 'Worcestershire', 'WORCS', 1),
(3612, 222, 'Wrexham', 'WRX', 1),
(3613, 223, 'Alabama', 'AL', 1),
(3614, 223, 'Alaska', 'AK', 1),
(3615, 223, 'American Samoa', 'AS', 1),
(3616, 223, 'Arizona', 'AZ', 1),
(3617, 223, 'Arkansas', 'AR', 1),
(3618, 223, 'Armed Forces Africa', 'AF', 1),
(3619, 223, 'Armed Forces Americas', 'AA', 1),
(3620, 223, 'Armed Forces Canada', 'AC', 1),
(3621, 223, 'Armed Forces Europe', 'AE', 1),
(3622, 223, 'Armed Forces Middle East', 'AM', 1),
(3623, 223, 'Armed Forces Pacific', 'AP', 1),
(3624, 223, 'California', 'CA', 1),
(3625, 223, 'Colorado', 'CO', 1),
(3626, 223, 'Connecticut', 'CT', 1),
(3627, 223, 'Delaware', 'DE', 1),
(3628, 223, 'District of Columbia', 'DC', 1),
(3629, 223, 'Federated States Of Micronesia', 'FM', 1),
(3630, 223, 'Florida', 'FL', 1),
(3631, 223, 'Georgia', 'GA', 1),
(3632, 223, 'Guam', 'GU', 1),
(3633, 223, 'Hawaii', 'HI', 1),
(3634, 223, 'Idaho', 'ID', 1),
(3635, 223, 'Illinois', 'IL', 1),
(3636, 223, 'Indiana', 'IN', 1),
(3637, 223, 'Iowa', 'IA', 1),
(3638, 223, 'Kansas', 'KS', 1),
(3639, 223, 'Kentucky', 'KY', 1),
(3640, 223, 'Louisiana', 'LA', 1),
(3641, 223, 'Maine', 'ME', 1),
(3642, 223, 'Marshall Islands', 'MH', 1),
(3643, 223, 'Maryland', 'MD', 1),
(3644, 223, 'Massachusetts', 'MA', 1),
(3645, 223, 'Michigan', 'MI', 1),
(3646, 223, 'Minnesota', 'MN', 1),
(3647, 223, 'Mississippi', 'MS', 1),
(3648, 223, 'Missouri', 'MO', 1),
(3649, 223, 'Montana', 'MT', 1),
(3650, 223, 'Nebraska', 'NE', 1),
(3651, 223, 'Nevada', 'NV', 1),
(3652, 223, 'New Hampshire', 'NH', 1),
(3653, 223, 'New Jersey', 'NJ', 1),
(3654, 223, 'New Mexico', 'NM', 1),
(3655, 223, 'New York', 'NY', 1),
(3656, 223, 'North Carolina', 'NC', 1),
(3657, 223, 'North Dakota', 'ND', 1),
(3658, 223, 'Northern Mariana Islands', 'MP', 1),
(3659, 223, 'Ohio', 'OH', 1),
(3660, 223, 'Oklahoma', 'OK', 1),
(3661, 223, 'Oregon', 'OR', 1),
(3662, 223, 'Palau', 'PW', 1),
(3663, 223, 'Pennsylvania', 'PA', 1),
(3664, 223, 'Puerto Rico', 'PR', 1),
(3665, 223, 'Rhode Island', 'RI', 1),
(3666, 223, 'South Carolina', 'SC', 1),
(3667, 223, 'South Dakota', 'SD', 1),
(3668, 223, 'Tennessee', 'TN', 1),
(3669, 223, 'Texas', 'TX', 1),
(3670, 223, 'Utah', 'UT', 1),
(3671, 223, 'Vermont', 'VT', 1),
(3672, 223, 'Virgin Islands', 'VI', 1),
(3673, 223, 'Virginia', 'VA', 1),
(3674, 223, 'Washington', 'WA', 1),
(3675, 223, 'West Virginia', 'WV', 1),
(3676, 223, 'Wisconsin', 'WI', 1),
(3677, 223, 'Wyoming', 'WY', 1),
(3678, 224, 'Baker Island', 'BI', 1),
(3679, 224, 'Howland Island', 'HI', 1),
(3680, 224, 'Jarvis Island', 'JI', 1),
(3681, 224, 'Johnston Atoll', 'JA', 1),
(3682, 224, 'Kingman Reef', 'KR', 1),
(3683, 224, 'Midway Atoll', 'MA', 1),
(3684, 224, 'Navassa Island', 'NI', 1),
(3685, 224, 'Palmyra Atoll', 'PA', 1),
(3686, 224, 'Wake Island', 'WI', 1),
(3687, 225, 'Artigas', 'AR', 1),
(3688, 225, 'Canelones', 'CA', 1),
(3689, 225, 'Cerro Largo', 'CL', 1),
(3690, 225, 'Colonia', 'CO', 1),
(3691, 225, 'Durazno', 'DU', 1),
(3692, 225, 'Flores', 'FS', 1),
(3693, 225, 'Florida', 'FA', 1),
(3694, 225, 'Lavalleja', 'LA', 1),
(3695, 225, 'Maldonado', 'MA', 1),
(3696, 225, 'Montevideo', 'MO', 1),
(3697, 225, 'Paysandu', 'PA', 1),
(3698, 225, 'Rio Negro', 'RN', 1),
(3699, 225, 'Rivera', 'RV', 1),
(3700, 225, 'Rocha', 'RO', 1),
(3701, 225, 'Salto', 'SL', 1),
(3702, 225, 'San Jose', 'SJ', 1),
(3703, 225, 'Soriano', 'SO', 1),
(3704, 225, 'Tacuarembo', 'TA', 1),
(3705, 225, 'Treinta y Tres', 'TT', 1),
(3706, 226, 'Andijon', 'AN', 1),
(3707, 226, 'Buxoro', 'BU', 1),
(3708, 226, 'Farg\'ona', 'FA', 1),
(3709, 226, 'Jizzax', 'JI', 1),
(3710, 226, 'Namangan', 'NG', 1),
(3711, 226, 'Navoiy', 'NW', 1),
(3712, 226, 'Qashqadaryo', 'QA', 1),
(3713, 226, 'Qoraqalpog\'iston Republikasi', 'QR', 1),
(3714, 226, 'Samarqand', 'SA', 1),
(3715, 226, 'Sirdaryo', 'SI', 1),
(3716, 226, 'Surxondaryo', 'SU', 1),
(3717, 226, 'Toshkent City', 'TK', 1),
(3718, 226, 'Toshkent Region', 'TO', 1),
(3719, 226, 'Xorazm', 'XO', 1),
(3720, 227, 'Malampa', 'MA', 1),
(3721, 227, 'Penama', 'PE', 1),
(3722, 227, 'Sanma', 'SA', 1),
(3723, 227, 'Shefa', 'SH', 1),
(3724, 227, 'Tafea', 'TA', 1),
(3725, 227, 'Torba', 'TO', 1),
(3726, 229, 'Amazonas', 'Z', 1),
(3727, 229, 'Anzoategui', 'B', 1),
(3728, 229, 'Apure', 'C', 1),
(3729, 229, 'Aragua', 'D', 1),
(3730, 229, 'Barinas', 'E', 1),
(3731, 229, 'Bolivar', 'F', 1),
(3732, 229, 'Carabobo', 'G', 1),
(3733, 229, 'Cojedes', 'H', 1),
(3734, 229, 'Delta Amacuro', 'Y', 1),
(3735, 229, 'Dependencias Federales', 'W', 1),
(3736, 229, 'Distrito Capital', 'A', 1),
(3737, 229, 'Falcon', 'I', 1),
(3738, 229, 'Guarico', 'J', 1),
(3739, 229, 'Lara', 'K', 1),
(3740, 229, 'Merida', 'L', 1),
(3741, 229, 'Miranda', 'M', 1),
(3742, 229, 'Monagas', 'N', 1),
(3743, 229, 'Nueva Esparta', 'O', 1),
(3744, 229, 'Portuguesa', 'P', 1),
(3745, 229, 'Sucre', 'R', 1),
(3746, 229, 'Tachira', 'S', 1),
(3747, 229, 'Trujillo', 'T', 1),
(3748, 229, 'Vargas', 'X', 1),
(3749, 229, 'Yaracuy', 'U', 1),
(3750, 229, 'Zulia', 'V', 1),
(3751, 230, 'An Giang', 'AG', 1),
(3752, 230, 'Bac Giang', 'BG', 1),
(3753, 230, 'Bac Kan', 'BK', 1),
(3754, 230, 'Bac Lieu', 'BL', 1),
(3755, 230, 'Bac Ninh', 'BC', 1),
(3756, 230, 'Ba Ria-Vung Tau', 'BR', 1),
(3757, 230, 'Ben Tre', 'BN', 1),
(3758, 230, 'Binh Dinh', 'BH', 1),
(3759, 230, 'Binh Duong', 'BU', 1),
(3760, 230, 'Binh Phuoc', 'BP', 1),
(3761, 230, 'Binh Thuan', 'BT', 1),
(3762, 230, 'Ca Mau', 'CM', 1),
(3763, 230, 'Can Tho', 'CT', 1),
(3764, 230, 'Cao Bang', 'CB', 1),
(3765, 230, 'Dak Lak', 'DL', 1),
(3766, 230, 'Dak Nong', 'DG', 1),
(3767, 230, 'Da Nang', 'DN', 1),
(3768, 230, 'Dien Bien', 'DB', 1),
(3769, 230, 'Dong Nai', 'DI', 1),
(3770, 230, 'Dong Thap', 'DT', 1),
(3771, 230, 'Gia Lai', 'GL', 1),
(3772, 230, 'Ha Giang', 'HG', 1),
(3773, 230, 'Hai Duong', 'HD', 1),
(3774, 230, 'Hai Phong', 'HP', 1),
(3775, 230, 'Ha Nam', 'HM', 1),
(3776, 230, 'Ha Noi', 'HI', 1),
(3777, 230, 'Ha Tay', 'HT', 1),
(3778, 230, 'Ha Tinh', 'HH', 1),
(3779, 230, 'Hoa Binh', 'HB', 1),
(3780, 230, 'Ho Chi Minh City', 'HC', 1),
(3781, 230, 'Hau Giang', 'HU', 1),
(3782, 230, 'Hung Yen', 'HY', 1),
(3783, 232, 'Saint Croix', 'C', 1),
(3784, 232, 'Saint John', 'J', 1),
(3785, 232, 'Saint Thomas', 'T', 1),
(3786, 233, 'Alo', 'A', 1),
(3787, 233, 'Sigave', 'S', 1),
(3788, 233, 'Wallis', 'W', 1),
(3789, 235, 'Abyan', 'AB', 1),
(3790, 235, 'Adan', 'AD', 1),
(3791, 235, 'Amran', 'AM', 1),
(3792, 235, 'Al Bayda', 'BA', 1),
(3793, 235, 'Ad Dali', 'DA', 1),
(3794, 235, 'Dhamar', 'DH', 1),
(3795, 235, 'Hadramawt', 'HD', 1),
(3796, 235, 'Hajjah', 'HJ', 1),
(3797, 235, 'Al Hudaydah', 'HU', 1),
(3798, 235, 'Ibb', 'IB', 1),
(3799, 235, 'Al Jawf', 'JA', 1),
(3800, 235, 'Lahij', 'LA', 1),
(3801, 235, 'Ma\'rib', 'MA', 1),
(3802, 235, 'Al Mahrah', 'MR', 1),
(3803, 235, 'Al Mahwit', 'MW', 1),
(3804, 235, 'Sa\'dah', 'SD', 1),
(3805, 235, 'San\'a', 'SN', 1),
(3806, 235, 'Shabwah', 'SH', 1),
(3807, 235, 'Ta\'izz', 'TA', 1),
(3812, 237, 'Bas-Congo', 'BC', 1),
(3813, 237, 'Bandundu', 'BN', 1),
(3814, 237, 'Equateur', 'EQ', 1),
(3815, 237, 'Katanga', 'KA', 1),
(3816, 237, 'Kasai-Oriental', 'KE', 1),
(3817, 237, 'Kinshasa', 'KN', 1),
(3818, 237, 'Kasai-Occidental', 'KW', 1),
(3819, 237, 'Maniema', 'MA', 1),
(3820, 237, 'Nord-Kivu', 'NK', 1),
(3821, 237, 'Orientale', 'OR', 1),
(3822, 237, 'Sud-Kivu', 'SK', 1),
(3823, 238, 'Central', 'CE', 1),
(3824, 238, 'Copperbelt', 'CB', 1),
(3825, 238, 'Eastern', 'EA', 1),
(3826, 238, 'Luapula', 'LP', 1),
(3827, 238, 'Lusaka', 'LK', 1),
(3828, 238, 'Northern', 'NO', 1),
(3829, 238, 'North-Western', 'NW', 1),
(3830, 238, 'Southern', 'SO', 1),
(3831, 238, 'Western', 'WE', 1),
(3832, 239, 'Bulawayo', 'BU', 1),
(3833, 239, 'Harare', 'HA', 1),
(3834, 239, 'Manicaland', 'ML', 1),
(3835, 239, 'Mashonaland Central', 'MC', 1),
(3836, 239, 'Mashonaland East', 'ME', 1),
(3837, 239, 'Mashonaland West', 'MW', 1),
(3838, 239, 'Masvingo', 'MV', 1),
(3839, 239, 'Matabeleland North', 'MN', 1),
(3840, 239, 'Matabeleland South', 'MS', 1),
(3841, 239, 'Midlands', 'MD', 1),
(3842, 105, 'Agrigento', 'AG', 1),
(3843, 105, 'Alessandria', 'AL', 1),
(3844, 105, 'Ancona', 'AN', 1),
(3845, 105, 'Aosta', 'AO', 1),
(3846, 105, 'Arezzo', 'AR', 1),
(3847, 105, 'Ascoli Piceno', 'AP', 1),
(3848, 105, 'Asti', 'AT', 1),
(3849, 105, 'Avellino', 'AV', 1),
(3850, 105, 'Bari', 'BA', 1),
(3851, 105, 'Belluno', 'BL', 1),
(3852, 105, 'Benevento', 'BN', 1),
(3853, 105, 'Bergamo', 'BG', 1),
(3854, 105, 'Biella', 'BI', 1),
(3855, 105, 'Bologna', 'BO', 1),
(3856, 105, 'Bolzano', 'BZ', 1),
(3857, 105, 'Brescia', 'BS', 1),
(3858, 105, 'Brindisi', 'BR', 1),
(3859, 105, 'Cagliari', 'CA', 1),
(3860, 105, 'Caltanissetta', 'CL', 1),
(3861, 105, 'Campobasso', 'CB', 1),
(3863, 105, 'Caserta', 'CE', 1),
(3864, 105, 'Catania', 'CT', 1),
(3865, 105, 'Catanzaro', 'CZ', 1),
(3866, 105, 'Chieti', 'CH', 1),
(3867, 105, 'Como', 'CO', 1),
(3868, 105, 'Cosenza', 'CS', 1),
(3869, 105, 'Cremona', 'CR', 1),
(3870, 105, 'Crotone', 'KR', 1),
(3871, 105, 'Cuneo', 'CN', 1),
(3872, 105, 'Enna', 'EN', 1),
(3873, 105, 'Ferrara', 'FE', 1),
(3874, 105, 'Firenze', 'FI', 1),
(3875, 105, 'Foggia', 'FG', 1),
(3876, 105, 'Forli-Cesena', 'FC', 1),
(3877, 105, 'Frosinone', 'FR', 1),
(3878, 105, 'Genova', 'GE', 1),
(3879, 105, 'Gorizia', 'GO', 1),
(3880, 105, 'Grosseto', 'GR', 1),
(3881, 105, 'Imperia', 'IM', 1),
(3882, 105, 'Isernia', 'IS', 1),
(3883, 105, 'L&#39;Aquila', 'AQ', 1),
(3884, 105, 'La Spezia', 'SP', 1),
(3885, 105, 'Latina', 'LT', 1),
(3886, 105, 'Lecce', 'LE', 1),
(3887, 105, 'Lecco', 'LC', 1),
(3888, 105, 'Livorno', 'LI', 1),
(3889, 105, 'Lodi', 'LO', 1),
(3890, 105, 'Lucca', 'LU', 1),
(3891, 105, 'Macerata', 'MC', 1),
(3892, 105, 'Mantova', 'MN', 1),
(3893, 105, 'Massa-Carrara', 'MS', 1),
(3894, 105, 'Matera', 'MT', 1),
(3896, 105, 'Messina', 'ME', 1),
(3897, 105, 'Milano', 'MI', 1),
(3898, 105, 'Modena', 'MO', 1),
(3899, 105, 'Napoli', 'NA', 1),
(3900, 105, 'Novara', 'NO', 1),
(3901, 105, 'Nuoro', 'NU', 1),
(3904, 105, 'Oristano', 'OR', 1),
(3905, 105, 'Padova', 'PD', 1),
(3906, 105, 'Palermo', 'PA', 1),
(3907, 105, 'Parma', 'PR', 1),
(3908, 105, 'Pavia', 'PV', 1),
(3909, 105, 'Perugia', 'PG', 1),
(3910, 105, 'Pesaro e Urbino', 'PU', 1),
(3911, 105, 'Pescara', 'PE', 1),
(3912, 105, 'Piacenza', 'PC', 1),
(3913, 105, 'Pisa', 'PI', 1),
(3914, 105, 'Pistoia', 'PT', 1),
(3915, 105, 'Pordenone', 'PN', 1),
(3916, 105, 'Potenza', 'PZ', 1),
(3917, 105, 'Prato', 'PO', 1),
(3918, 105, 'Ragusa', 'RG', 1),
(3919, 105, 'Ravenna', 'RA', 1),
(3920, 105, 'Reggio Calabria', 'RC', 1),
(3921, 105, 'Reggio Emilia', 'RE', 1),
(3922, 105, 'Rieti', 'RI', 1),
(3923, 105, 'Rimini', 'RN', 1),
(3924, 105, 'Roma', 'RM', 1),
(3925, 105, 'Rovigo', 'RO', 1),
(3926, 105, 'Salerno', 'SA', 1),
(3927, 105, 'Sassari', 'SS', 1),
(3928, 105, 'Savona', 'SV', 1),
(3929, 105, 'Siena', 'SI', 1),
(3930, 105, 'Siracusa', 'SR', 1),
(3931, 105, 'Sondrio', 'SO', 1),
(3932, 105, 'Taranto', 'TA', 1),
(3933, 105, 'Teramo', 'TE', 1),
(3934, 105, 'Terni', 'TR', 1),
(3935, 105, 'Torino', 'TO', 1),
(3936, 105, 'Trapani', 'TP', 1),
(3937, 105, 'Trento', 'TN', 1),
(3938, 105, 'Treviso', 'TV', 1),
(3939, 105, 'Trieste', 'TS', 1),
(3940, 105, 'Udine', 'UD', 1),
(3941, 105, 'Varese', 'VA', 1),
(3942, 105, 'Venezia', 'VE', 1),
(3943, 105, 'Verbano-Cusio-Ossola', 'VB', 1),
(3944, 105, 'Vercelli', 'VC', 1),
(3945, 105, 'Verona', 'VR', 1),
(3946, 105, 'Vibo Valentia', 'VV', 1),
(3947, 105, 'Vicenza', 'VI', 1),
(3948, 105, 'Viterbo', 'VT', 1),
(3949, 222, 'County Antrim', 'ANT', 1),
(3950, 222, 'County Armagh', 'ARM', 1),
(3951, 222, 'County Down', 'DOW', 1),
(3952, 222, 'County Fermanagh', 'FER', 1),
(3953, 222, 'County Londonderry', 'LDY', 1),
(3954, 222, 'County Tyrone', 'TYR', 1),
(3955, 222, 'Cumbria', 'CMA', 1),
(3956, 190, 'Pomurska', '1', 1),
(3957, 190, 'Podravska', '2', 1),
(3958, 190, 'Koroška', '3', 1),
(3959, 190, 'Savinjska', '4', 1),
(3960, 190, 'Zasavska', '5', 1),
(3961, 190, 'Spodnjeposavska', '6', 1),
(3962, 190, 'Jugovzhodna Slovenija', '7', 1),
(3963, 190, 'Osrednjeslovenska', '8', 1),
(3964, 190, 'Gorenjska', '9', 1),
(3965, 190, 'Notranjsko-kraška', '10', 1),
(3966, 190, 'Goriška', '11', 1),
(3967, 190, 'Obalno-kraška', '12', 1),
(3968, 33, 'Ruse', '', 1),
(3969, 101, 'Alborz', 'ALB', 1),
(3970, 21, 'Brussels-Capital Region', 'BRU', 1),
(3971, 138, 'Aguascalientes', 'AG', 1),
(3973, 242, 'Andrijevica', '01', 1),
(3974, 242, 'Bar', '02', 1),
(3975, 242, 'Berane', '03', 1),
(3976, 242, 'Bijelo Polje', '04', 1),
(3977, 242, 'Budva', '05', 1),
(3978, 242, 'Cetinje', '06', 1),
(3979, 242, 'Danilovgrad', '07', 1),
(3980, 242, 'Herceg-Novi', '08', 1),
(3981, 242, 'Kolašin', '09', 1),
(3982, 242, 'Kotor', '10', 1),
(3983, 242, 'Mojkovac', '11', 1),
(3984, 242, 'Nikšić', '12', 1),
(3985, 242, 'Plav', '13', 1),
(3986, 242, 'Pljevlja', '14', 1),
(3987, 242, 'Plužine', '15', 1),
(3988, 242, 'Podgorica', '16', 1),
(3989, 242, 'Rožaje', '17', 1),
(3990, 242, 'Šavnik', '18', 1),
(3991, 242, 'Tivat', '19', 1),
(3992, 242, 'Ulcinj', '20', 1),
(3993, 242, 'Žabljak', '21', 1),
(3994, 243, 'Belgrade', '00', 1),
(3995, 243, 'North Bačka', '01', 1),
(3996, 243, 'Central Banat', '02', 1),
(3997, 243, 'North Banat', '03', 1),
(3998, 243, 'South Banat', '04', 1),
(3999, 243, 'West Bačka', '05', 1),
(4000, 243, 'South Bačka', '06', 1),
(4001, 243, 'Srem', '07', 1),
(4002, 243, 'Mačva', '08', 1),
(4003, 243, 'Kolubara', '09', 1),
(4004, 243, 'Podunavlje', '10', 1),
(4005, 243, 'Braničevo', '11', 1),
(4006, 243, 'Šumadija', '12', 1),
(4007, 243, 'Pomoravlje', '13', 1),
(4008, 243, 'Bor', '14', 1),
(4009, 243, 'Zaječar', '15', 1),
(4010, 243, 'Zlatibor', '16', 1),
(4011, 243, 'Moravica', '17', 1),
(4012, 243, 'Raška', '18', 1),
(4013, 243, 'Rasina', '19', 1),
(4014, 243, 'Nišava', '20', 1),
(4015, 243, 'Toplica', '21', 1),
(4016, 243, 'Pirot', '22', 1),
(4017, 243, 'Jablanica', '23', 1),
(4018, 243, 'Pčinja', '24', 1),
(4020, 245, 'Bonaire', 'BO', 1),
(4021, 245, 'Saba', 'SA', 1),
(4022, 245, 'Sint Eustatius', 'SE', 1),
(4023, 248, 'Central Equatoria', 'EC', 1),
(4024, 248, 'Eastern Equatoria', 'EE', 1),
(4025, 248, 'Jonglei', 'JG', 1),
(4026, 248, 'Lakes', 'LK', 1),
(4027, 248, 'Northern Bahr el-Ghazal', 'BN', 1),
(4028, 248, 'Unity', 'UY', 1),
(4029, 248, 'Upper Nile', 'NU', 1),
(4030, 248, 'Warrap', 'WR', 1),
(4031, 248, 'Western Bahr el-Ghazal', 'BW', 1),
(4032, 248, 'Western Equatoria', 'EW', 1),
(4035, 129, 'Putrajaya', 'MY-16', 1),
(4038, 117, 'Aizkraukles novads', '002', 1),
(4040, 117, 'Aizputes novads', '003', 1),
(4042, 117, 'Aknīstes novads', '004', 1),
(4044, 117, 'Alojas novads', '005', 1),
(4045, 117, 'Alsungas novads', '006', 1),
(4047, 117, 'Alūksnes novads', '007', 1),
(4048, 117, 'Amatas novads', '008', 1),
(4050, 117, 'Apes novads', '008', 1),
(4052, 117, 'Auces novads', '010', 1),
(4053, 117, 'Ādažu novads', '011', 1),
(4054, 117, 'Babītes novads', '012', 1),
(4056, 117, 'Baldones novads', '013', 1),
(4058, 117, 'Baltinavas novads', '014', 1),
(4060, 117, 'Balvu novads', '015', 1),
(4062, 117, 'Bauskas novads', '016', 1),
(4063, 117, 'Beverīnas novads', '017', 1),
(4065, 117, 'Brocēnu novads', '018', 1),
(4066, 117, 'Burtnieku novads', '019', 1),
(4067, 117, 'Carnikavas novads', '020', 1),
(4069, 117, 'Cesvaines novads', '021', 1),
(4071, 117, 'Cēsu novads', '022', 1),
(4072, 117, 'Ciblas novads', '023', 1),
(4074, 117, 'Dagdas novads', '024', 1),
(4075, 117, 'Daugavpils', 'DGV', 1),
(4076, 117, 'Daugavpils novads', '025', 1),
(4078, 117, 'Dobeles novads', '026', 1),
(4079, 117, 'Dundagas novads', '027', 1),
(4081, 117, 'Durbes novads', '028', 1),
(4082, 117, 'Engures novads', '029', 1),
(4083, 117, 'Ērgļu novads', '030', 1),
(4084, 117, 'Garkalnes novads', '031', 1),
(4086, 117, 'Grobiņas novads', '032', 1),
(4088, 117, 'Gulbenes novads', '033', 1),
(4089, 117, 'Iecavas novads', '034', 1),
(4091, 117, 'Ikšķiles novads', '035', 1),
(4093, 117, 'Ilūkstes novads', '036', 1),
(4094, 117, 'Inčukalna novads', '037', 1),
(4096, 117, 'Jaunjelgavas novads', '038', 1),
(4097, 117, 'Jaunpiebalgas novads', '039', 1),
(4098, 117, 'Jaunpils novads', '040', 1),
(4099, 117, 'Jelgava', 'JEL', 1),
(4100, 117, 'Jelgavas novads', '041', 1),
(4101, 117, 'Jēkabpils', 'JKB', 1),
(4102, 117, 'Jēkabpils novads', '042', 1),
(4103, 117, 'Jūrmala', 'JUR', 1),
(4106, 117, 'Kandavas novads', '043', 1),
(4108, 117, 'Kārsavas novads', '044', 1),
(4110, 117, 'Kokneses novads', '046', 1),
(4112, 117, 'Krāslavas novads', '047', 1),
(4113, 117, 'Krimuldas novads', '048', 1),
(4114, 117, 'Krustpils novads', '049', 1),
(4116, 117, 'Kuldīgas novads', '050', 1),
(4117, 117, 'Ķeguma novads', '051', 1),
(4119, 117, 'Ķekavas novads', '052', 1),
(4121, 117, 'Lielvārdes novads', '053', 1),
(4122, 117, 'Liepāja', 'LPX', 1),
(4124, 117, 'Limbažu novads', '054', 1),
(4126, 117, 'Līgatnes novads', '055', 1),
(4128, 117, 'Līvānu novads', '056', 1),
(4130, 117, 'Lubānas novads', '057', 1),
(4132, 117, 'Ludzas novads', '058', 1),
(4134, 117, 'Madonas novads', '059', 1),
(4136, 117, 'Mazsalacas novads', '060', 1),
(4137, 117, 'Mālpils novads', '061', 1),
(4138, 117, 'Mārupes novads', '062', 1),
(4139, 117, 'Mērsraga novads', '063', 1),
(4140, 117, 'Naukšēnu novads', '064', 1),
(4141, 117, 'Neretas novads', '065', 1),
(4142, 117, 'Nīcas novads', '066', 1),
(4144, 117, 'Ogres novads', '067', 1),
(4146, 117, 'Olaines novads', '068', 1),
(4147, 117, 'Ozolnieku novads', '069', 1),
(4148, 117, 'Pārgaujas novads', '070', 1),
(4150, 117, 'Pāvilostas novads', '071', 1),
(4153, 117, 'Pļaviņu novads', '072', 1),
(4155, 117, 'Preiļu novads', '073', 1),
(4157, 117, 'Priekules novads', '074', 1),
(4158, 117, 'Priekuļu novads', '075', 1),
(4159, 117, 'Raunas novads', '076', 1),
(4160, 117, 'Rēzekne', 'REZ', 1),
(4161, 117, 'Rēzeknes novads', '077', 1),
(4162, 117, 'Riebiņu novads', '078', 1),
(4163, 117, 'Rīga', 'RIX', 1),
(4164, 117, 'Rojas novads', '079', 1),
(4165, 117, 'Ropažu novads', '080', 1),
(4166, 117, 'Rucavas novads', '081', 1),
(4167, 117, 'Rugāju novads', '082', 1),
(4168, 117, 'Rundāles novads', '083', 1),
(4170, 117, 'Rūjienas novads', '084', 1),
(4173, 117, 'Salacgrīvas novads', '086', 1),
(4174, 117, 'Salas novads', '085', 1),
(4175, 117, 'Salaspils novads', '087', 1),
(4177, 117, 'Saldus novads', '088', 1),
(4178, 117, 'Saldus, Saldus novads', '0840201', 1),
(4180, 117, 'Saulkrastu novads', '089', 1),
(4182, 117, 'Sējas novads', '090', 1),
(4184, 117, 'Siguldas novads', '091', 1),
(4185, 117, 'Skrīveru novads', '092', 1),
(4187, 117, 'Skrundas novads', '093', 1),
(4189, 117, 'Smiltenes novads', '094', 1),
(4192, 117, 'Stopiņu novads', '095', 1),
(4194, 117, 'Strenču novads', '096', 1),
(4197, 117, 'Talsu novads', '097', 1),
(4198, 117, 'Tērvetes novads', '098', 1),
(4199, 117, 'Tukuma novads', '099', 1),
(4201, 117, 'Vaiņodes novads', '100', 1),
(4204, 117, 'Valkas novads', '101', 1),
(4205, 117, 'Valmiera', 'VMR', 1),
(4208, 117, 'Varakļānu novads', '102', 1),
(4209, 117, 'Vārkavas novads', '103', 1),
(4210, 117, 'Vecpiebalgas novads', '104', 1),
(4211, 117, 'Vecumnieku novads', '105', 1),
(4212, 117, 'Ventspils', 'VEN', 1),
(4213, 117, 'Ventspils novads', '106', 1),
(4215, 117, 'Viesītes novads', '107', 1),
(4217, 117, 'Viļakas novads', '108', 1),
(4219, 117, 'Viļānu novads', '109', 1),
(4221, 117, 'Zilupes novads', '110', 1),
(4222, 43, 'Arica y Parinacota', 'AP', 1),
(4223, 43, 'Los Rios', 'LR', 1),
(4224, 220, 'Kharkivs\'ka Oblast\'', '63', 1),
(4225, 118, 'Beirut', 'LB-BR', 1),
(4226, 118, 'Bekaa', 'LB-BE', 1),
(4227, 118, 'Mount Lebanon', 'LB-ML', 1),
(4228, 118, 'Nabatieh', 'LB-NB', 1),
(4229, 118, 'North', 'LB-NR', 1),
(4230, 118, 'South', 'LB-ST', 1),
(4231, 99, 'Telangana', 'TS', 1),
(4232, 44, 'Qinghai', 'QH', 1),
(4233, 100, 'Papua Barat', 'PB', 1),
(4234, 100, 'Sulawesi Barat', 'SR', 1),
(4235, 100, 'Kepulauan Riau', 'KR', 1),
(4236, 105, 'Barletta-Andria-Trani', 'BT', 1),
(4237, 105, 'Fermo', 'FM', 1),
(4238, 105, 'Monza Brianza', 'MB', 1),
(4239, 113, 'Seoul-teukbyeolsi', '11', 1),
(4240, 113, 'Busan-gwangyeoksi', '26', 1),
(4241, 113, 'Daegu-gwangyeoksi', '27', 1),
(4242, 113, 'Daejeon-gwangyeoksi', '30', 1),
(4243, 113, 'Gwangju-gwangyeoksi', '29', 1),
(4244, 113, 'Incheon-gwangyeoksi', '28', 1),
(4245, 113, 'Ulsan-gwangyeoksi', '31', 1),
(4246, 113, 'Chungcheongbuk-do', '43', 1),
(4247, 113, 'Chungcheongnam-do', '44', 1),
(4248, 113, 'Gangwon-do', '42', 1),
(4249, 113, 'Gyeonggi-do', '41', 1),
(4250, 113, 'Gyeongsangbuk-do', '47', 1),
(4251, 113, 'Gyeongsangnam-do', '48', 1),
(4252, 113, 'Jeollabuk-do', '45', 1),
(4253, 113, 'Jeollanam-do', '46', 1),
(4254, 113, 'Jeju-teukbyeoljachido', '49', 1),
(4255, 113, 'Sejong-teukbyeoljachisi', '50', 1),
(4256, 209, 'Phra Nakhon Si Ayutthaya', '14', 1),
(4257, 176, 'Adygea, Republic of', 'RU-AD', 1),
(4258, 176, 'Bashkortostan, Republic of', 'RU-BA', 1),
(4259, 176, 'Buryatia, Republic of', 'RU-BU', 1),
(4260, 176, 'Altai Republic', 'RU-AL', 1),
(4261, 176, 'Dagestan, Republic of', 'RU-DA', 1),
(4262, 176, 'Ingushetia, Republic of', 'RU-IN', 1),
(4263, 176, 'Kabardino-Balkar Republic', 'RU-KB', 1),
(4264, 176, 'Kalmykia, Republic of', 'RU-KL', 1),
(4265, 176, 'Karachay-Cherkess Republic', 'RU-KC', 1),
(4266, 176, 'Karelia, Republic of', 'RU-KR', 1),
(4267, 176, 'Komi Republic', 'RU-KO', 1),
(4268, 176, 'Mari El Republic', 'RU-ME', 1),
(4269, 176, 'Mordovia, Republic of', 'RU-MO', 1),
(4270, 176, 'Sakha (Yakutia) Republic', 'RU-SA', 1),
(4271, 176, 'North Ossetia-Alania, Republic of', 'RU-SE', 1),
(4272, 176, 'Tatarstan, Republic of', 'RU-TA', 1),
(4273, 176, 'Tuva Republic', 'RU-TY', 1),
(4274, 176, 'Udmurt Republic', 'RU-UD', 1),
(4275, 176, 'Khakassia, Republic of', 'RU-KK', 1),
(4276, 176, 'Chechen Republic', 'RU-CE', 1),
(4277, 176, 'Chuvash Republic', 'RU-CU', 1),
(4278, 176, 'Altai Krai', 'RU-ALT', 1),
(4279, 176, 'Krasnodar Krai', 'RU-KDA', 1),
(4280, 176, 'Krasnoyarsk Krai', 'RU-KYA', 1),
(4281, 176, 'Primorsky Krai', 'RU-PRI', 1),
(4282, 176, 'Stavropol Krai', 'RU-STA', 1),
(4283, 176, 'Khabarovsk Krai', 'RU-KHA', 1),
(4284, 176, 'Amur Oblast', 'RU-AMU', 1),
(4285, 176, 'Arkhangelsk Oblast', 'RU-ARK', 1),
(4286, 176, 'Astrakhan Oblast', 'RU-AST', 1),
(4287, 176, 'Belgorod Oblast', 'RU-BEL', 1),
(4288, 176, 'Bryansk Oblast', 'RU-BRY', 1),
(4289, 176, 'Vladimir Oblast', 'RU-VLA', 1),
(4290, 176, 'Volgograd Oblast', 'RU-VGG', 1),
(4291, 176, 'Vologda Oblast', 'RU-VLG', 1),
(4292, 176, 'Voronezh Oblast', 'RU-VOR', 1),
(4293, 176, 'Ivanovo Oblast', 'RU-IVA', 1),
(4294, 176, 'Irkutsk Oblast', 'RU-IRK', 1),
(4295, 176, 'Kaliningrad Oblast', 'RU-KGD', 1),
(4296, 176, 'Kaluga Oblast', 'RU-KLU', 1),
(4297, 176, 'Kamchatka Krai', 'RU-KAM', 1),
(4298, 176, 'Kemerovo Oblast', 'RU-KEM', 1),
(4299, 176, 'Kirov Oblast', 'RU-KIR', 1),
(4300, 176, 'Kostroma Oblast', 'RU-KOS', 1),
(4301, 176, 'Kurgan Oblast', 'RU-KGN', 1),
(4302, 176, 'Kursk Oblast', 'RU-KRS', 1),
(4303, 176, 'Leningrad Oblast', 'RU-LEN', 1),
(4304, 176, 'Lipetsk Oblast', 'RU-LIP', 1),
(4305, 176, 'Magadan Oblast', 'RU-MAG', 1),
(4306, 176, 'Moscow Oblast', 'RU-MOS', 1),
(4307, 176, 'Murmansk Oblast', 'RU-MUR', 1),
(4308, 176, 'Nizhny Novgorod Oblast', 'RU-NIZ', 1),
(4309, 176, 'Novgorod Oblast', 'RU-NGR', 1),
(4310, 176, 'Novosibirsk Oblast', 'RU-NVS', 1),
(4311, 176, 'Omsk Oblast', 'RU-OMS', 1),
(4312, 176, 'Orenburg Oblast', 'RU-ORE', 1),
(4313, 176, 'Oryol Oblast', 'RU-ORL', 1),
(4314, 176, 'Penza Oblast', 'RU-PNZ', 1),
(4315, 176, 'Perm Krai', 'RU-PER', 1),
(4316, 176, 'Pskov Oblast', 'RU-PSK', 1),
(4317, 176, 'Rostov Oblast', 'RU-ROS', 1),
(4318, 176, 'Ryazan Oblast', 'RU-RYA', 1),
(4319, 176, 'Samara Oblast', 'RU-SAM', 1),
(4320, 176, 'Saratov Oblast', 'RU-SAR', 1),
(4321, 176, 'Sakhalin Oblast', 'RU-SAK', 1),
(4322, 176, 'Sverdlovsk Oblast', 'RU-SVE', 1),
(4323, 176, 'Smolensk Oblast', 'RU-SMO', 1),
(4324, 176, 'Tambov Oblast', 'RU-TAM', 1),
(4325, 176, 'Tver Oblast', 'RU-TVE', 1),
(4326, 176, 'Tomsk Oblast', 'RU-TOM', 1),
(4327, 176, 'Tula Oblast', 'RU-TUL', 1),
(4328, 176, 'Tyumen Oblast', 'RU-TYU', 1),
(4329, 176, 'Ulyanovsk Oblast', 'RU-ULY', 1),
(4330, 176, 'Chelyabinsk Oblast', 'RU-CHE', 1),
(4331, 176, 'Zabaykalsky Krai', 'RU-ZAB', 1),
(4332, 176, 'Yaroslavl Oblast', 'RU-YAR', 1),
(4333, 176, 'Moscow', 'RU-MOW', 1),
(4334, 176, 'Saint Petersburg', 'RU-SPE', 1),
(4335, 176, 'Jewish Autonomous Oblast', 'RU-YEV', 1),
(4336, 176, 'Nenets Autonomous Okrug', 'RU-NEN', 1),
(4337, 176, 'Khanty–Mansi Autonomous Okrug – Yugra', 'RU-KHM', 1),
(4338, 176, 'Chukotka Autonomous Okrug', 'RU-CHU', 1),
(4339, 176, 'Yamalo-Nenets Autonomous Okrug', 'RU-YAN', 1),
(4340, 117, 'Aglonas novads', '001', 1),
(4341, 99, 'Chhattisgarh', 'CT', 1),
(4342, 99, 'Ladakh', 'LA', 1),
(4343, 99, 'Uttarakhand', 'UT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_zone_to_geo_zone`
--

DROP TABLE IF EXISTS `m_zone_to_geo_zone`;
CREATE TABLE `m_zone_to_geo_zone` (
  `zone_to_geo_zone_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL DEFAULT 0,
  `geo_zone_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `m_zone_to_geo_zone`
--

TRUNCATE TABLE `m_zone_to_geo_zone`;
--
-- Dumping data for table `m_zone_to_geo_zone`
--

INSERT INTO `m_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES
(1, 222, 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 222, 3513, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 222, 3514, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 222, 3515, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 222, 3516, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 222, 3517, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 222, 3518, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 222, 3519, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 222, 3520, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 222, 3521, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 222, 3522, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 222, 3523, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 222, 3524, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 222, 3525, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 222, 3526, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 222, 3527, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 222, 3528, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 222, 3529, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 222, 3530, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 222, 3531, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 222, 3532, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 222, 3533, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 222, 3534, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 222, 3535, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 222, 3536, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 222, 3537, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 222, 3538, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 222, 3539, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 222, 3540, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 222, 3541, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 222, 3542, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 222, 3543, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 222, 3544, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 222, 3545, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 222, 3546, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 222, 3547, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 222, 3548, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 222, 3549, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 222, 3550, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 222, 3551, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 222, 3552, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 222, 3553, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 222, 3554, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 222, 3555, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 222, 3556, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 222, 3557, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 222, 3558, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 222, 3559, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 222, 3560, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 222, 3561, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 222, 3562, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 222, 3563, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 222, 3564, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 222, 3565, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 222, 3566, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 222, 3567, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 222, 3568, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 222, 3569, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 222, 3570, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 222, 3571, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 222, 3572, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 222, 3573, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 222, 3574, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 222, 3575, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 222, 3576, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 222, 3577, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 222, 3578, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 222, 3579, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 222, 3580, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 222, 3581, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 222, 3582, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 222, 3583, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 222, 3584, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 222, 3585, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 222, 3586, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 222, 3587, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 222, 3588, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 222, 3589, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 222, 3590, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 222, 3591, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 222, 3592, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 222, 3593, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 222, 3594, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 222, 3595, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 222, 3596, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 222, 3597, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 222, 3598, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 222, 3599, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 222, 3600, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 222, 3601, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 222, 3602, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 222, 3603, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 222, 3604, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 222, 3605, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 222, 3606, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 222, 3607, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 222, 3608, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 222, 3609, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 222, 3610, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 222, 3611, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 222, 3612, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 222, 3949, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 222, 3950, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 222, 3951, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 222, 3952, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 222, 3953, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 222, 3954, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 222, 3955, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

DROP TABLE IF EXISTS `order_history`;
CREATE TABLE `order_history` (
  `order_history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT 0,
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `order_history`
--

TRUNCATE TABLE `order_history`;
--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`order_history_id`, `order_id`, `order_status_id`, `notify`, `comment`, `date_added`) VALUES
(1, 1, 0, 0, '', '2022-10-19 18:09:53'),
(2, 1, 0, 0, '', '2022-10-19 18:10:35'),
(3, 1, 0, 0, '', '2022-10-19 18:10:44'),
(4, 1, 0, 0, '', '2022-10-19 18:11:13'),
(5, 1, 0, 0, '', '2022-10-19 18:11:55'),
(6, 1, 0, 0, '', '2022-10-19 18:12:50'),
(7, 1, 0, 0, '', '2022-10-19 18:13:17'),
(8, 2, 0, 0, '', '2022-10-19 18:17:08'),
(9, 3, 0, 0, '', '2022-10-19 18:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product` (
  `order_product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(64) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `tax` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `reward` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `order_product`
--

TRUNCATE TABLE `order_product`;
--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_product_id`, `order_id`, `product_id`, `master_id`, `name`, `model`, `quantity`, `price`, `total`, `tax`, `reward`) VALUES
(1, 1, 40, 0, 'iPhone', 'product 11', 1, '101.0000', '101.0000', '22.2000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_return_product_photo`
--

DROP TABLE IF EXISTS `order_return_product_photo`;
CREATE TABLE `order_return_product_photo` (
  `order_return_product_photo_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `order_product_id` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `order_return_product_photo`
--

TRUNCATE TABLE `order_return_product_photo`;
-- --------------------------------------------------------

--
-- Table structure for table `order_total`
--

DROP TABLE IF EXISTS `order_total`;
CREATE TABLE `order_total` (
  `order_total_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `code` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `sort_order` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `order_total`
--

TRUNCATE TABLE `order_total`;
--
-- Dumping data for table `order_total`
--

INSERT INTO `order_total` (`order_total_id`, `order_id`, `extension`, `code`, `title`, `value`, `sort_order`) VALUES
(1, 1, 'opencart', 'sub_total', 'Sub-Total', '101.0000', 1),
(2, 1, 'opencart', 'shipping', 'Free Shipping', '0.0000', 3),
(3, 1, 'opencart', 'tax', 'Eco Tax (-2.00)', '2.0000', 5),
(4, 1, 'opencart', 'tax', 'VAT (20%)', '20.2000', 5),
(5, 1, 'opencart', 'total', 'Total', '123.2000', 9);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `uuid` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `slug_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL,
  `status_flag` enum('Active','Inactive','Deleted') COLLATE utf8_unicode_ci DEFAULT 'Active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `icon_image` varchar(56) COLLATE utf8_unicode_ci DEFAULT NULL,
  `breadcum_image` varchar(56) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdf_file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by_user_id` int(11) DEFAULT NULL,
  `edit_by_user_id` int(11) DEFAULT NULL,
  `domains` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `product_category`
--

TRUNCATE TABLE `product_category`;
--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `uuid`, `name`, `slug_name`, `description`, `main_image`, `sort_order`, `status_flag`, `created_at`, `updated_at`, `parent_id`, `icon_image`, `breadcum_image`, `meta_keywords`, `meta_description`, `meta_title`, `extra_image`, `pdf_file`, `added_by_user_id`, `edit_by_user_id`, `domains`) VALUES
(3, 'e50439d2-a533-41d0-8239-b3dbc1833462', 'Gold', 'gold', '', 'cat-gc008--front-500x500.jpg', 1, 'Active', '2022-09-19 00:00:00', '2022-10-11 12:59:09', 8, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3'),
(5, 'b3714e17-fcdc-4188-a89a-45cc9a6cfe75', 'MEN&#39;S', 'men-s-1', 'MEN\'S SILVER JEWELLERY', 'cat-350x350.png', 1, 'Active', '2022-09-23 00:00:00', '2022-10-13 10:30:45', 0, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3'),
(6, 'fa8022ce-c22c-40fc-bf80-4dd4d7add78d', 'SILVER', 'silver-2', 'SILVER ACCESSORIES\r\n', NULL, 2, 'Active', '2022-09-23 00:00:00', '2022-10-11 12:58:49', 0, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3'),
(7, '2f5e1470-cfae-4dc3-8259-795434dfe569', 'SILVER HOME DÉCOR', 'silver-home-dcor', 'SILVER HOME DÉCOR', NULL, 3, 'Active', '2022-09-23 00:00:00', '2022-10-11 12:58:26', 6, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3'),
(8, 'f4c8bee4-f652-4341-8158-f7297cede3c1', 'SPECIAL COLLECTION', 'special-collection', 'SPECIAL COLLECTION', NULL, 5, 'Active', '2022-09-23 00:00:00', NULL, 0, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3'),
(9, 'a5b4ba6f-8644-407c-8b77-018df8bcb0e0', 'Pure Silver Brooch', 'pure-silver-brooch', 'Pure Silver Brooch', 'cat-s12889038-1000x1250w.jpg', 1, 'Active', '2022-09-23 00:00:00', '2022-10-13 10:46:13', 5, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3'),
(10, '24e99ed0-6d9c-4220-85a7-816ff1f6a365', 'Pure Silver Key Chain', 'pure-silver-key-chain', 'Pure Silver Key Chain', 'cat-s10961499-1-500x500.jpg', 8, 'Active', '2022-09-23 00:00:00', NULL, 6, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3'),
(11, '43f7ace1-d071-411c-a9f6-4c374b813194', 'Pure Silver Purse', 'pure-silver-purse', 'Pure Silver Purse', 'cat-s10904672-1-500x500.jpg', 9, 'Active', '2022-09-23 00:00:00', NULL, 6, NULL, NULL, '', '', '', NULL, NULL, 1, NULL, '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `image_name` varchar(150) DEFAULT NULL,
  `img_id` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `product_images`
--

TRUNCATE TABLE `product_images`;
--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `date_added`, `image_name`, `img_id`) VALUES
(4, 2, '2022-10-12 16:51:08', '1-2psxm6b9.jpg', '2psxm6b9'),
(5, 2, '2022-10-12 16:51:08', '1-okfkgfyq.jpg', 'okfkgfyq'),
(6, 2, '2022-10-12 16:51:08', '1-hnzrst2t.jpg', 'hnzrst2t'),
(7, 4, '2022-10-15 17:18:53', '1-3qleydsd.jpg', '3qleydsd'),
(8, 4, '2022-10-15 17:18:53', '1-cfgtuxro.jpg', 'cfgtuxro'),
(9, 6, '2022-10-15 17:19:03', '1-0pfmvilf.jpg', '0pfmvilf'),
(10, 6, '2022-10-15 17:19:03', '1-xhtnuoda.jpg', 'xhtnuoda'),
(11, 8, '2022-10-15 17:19:39', '1-jdesg2u2.jpg', 'jdesg2u2'),
(12, 8, '2022-10-15 17:19:39', '1-i3w3o6yw.jpg', 'i3w3o6yw'),
(13, 8, '2022-10-15 17:19:39', '1-vd7y6j0x.jpg', 'vd7y6j0x'),
(14, 10, '2022-10-15 17:20:01', '1-sh8imrf8.jpg', 'sh8imrf8'),
(15, 10, '2022-10-15 17:20:01', '1-8xjeqfiu.jpg', '8xjeqfiu'),
(16, 11, '2022-10-15 17:20:13', '1-xv9xc3bx.jpg', 'xv9xc3bx'),
(17, 11, '2022-10-15 17:20:13', '1-ezj6lvvn.jpg', 'ezj6lvvn'),
(18, 11, '2022-10-15 17:20:13', '1-4uk1p5f8.jpg', '4uk1p5f8'),
(19, 5, '2022-10-15 17:20:32', '1-0qyyz2ce.jpg', '0qyyz2ce');

-- --------------------------------------------------------

--
-- Table structure for table `product_images_temp`
--

DROP TABLE IF EXISTS `product_images_temp`;
CREATE TABLE `product_images_temp` (
  `id` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `image_name` varchar(150) DEFAULT NULL,
  `session_id` varchar(150) DEFAULT NULL,
  `img_id` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `product_images_temp`
--

TRUNCATE TABLE `product_images_temp`;
--
-- Dumping data for table `product_images_temp`
--

INSERT INTO `product_images_temp` (`id`, `date_added`, `image_name`, `session_id`, `img_id`) VALUES
(7, '2022-10-12 17:04:56', '1-gt217tl5.jpg', 'm9uh7e8jj7npdapadtn3k62dvepkv8va', 'gt217tl5'),
(8, '2022-10-12 17:04:56', '1-qsfjizwj.jpg', 'm9uh7e8jj7npdapadtn3k62dvepkv8va', 'qsfjizwj'),
(9, '2022-10-12 17:04:56', '1-p5jfjsr4.jpg', 'm9uh7e8jj7npdapadtn3k62dvepkv8va', 'p5jfjsr4');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

DROP TABLE IF EXISTS `product_master`;
CREATE TABLE `product_master` (
  `product_id` int(11) NOT NULL,
  `uuid` varchar(128) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_code` varchar(150) DEFAULT NULL COMMENT 'model-no',
  `description` text DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `mrp` decimal(15,2) DEFAULT 0.00,
  `sellprice` decimal(15,2) NOT NULL DEFAULT 0.00,
  `status_flag` enum('Active','Inactive','Deleted') DEFAULT 'Active',
  `category_ids` varchar(128) DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `sub_category_id` int(11) NOT NULL DEFAULT 0,
  `featured` tinyint(3) DEFAULT 0,
  `tags` varchar(256) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `slug_name` varchar(256) DEFAULT NULL,
  `minimum` int(11) DEFAULT 1,
  `logs` text DEFAULT NULL,
  `meta_json` text DEFAULT NULL,
  `price_json` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `views_count` int(11) DEFAULT NULL,
  `sort_order` decimal(10,2) DEFAULT 1.00,
  `domain2_mrp` decimal(10,2) DEFAULT NULL,
  `domain2_sellprice` decimal(10,2) DEFAULT NULL,
  `domain3_mrp` decimal(10,2) DEFAULT NULL,
  `domain3_sellprice` decimal(10,2) DEFAULT NULL,
  `domain2_qty` int(11) DEFAULT 0,
  `domain3_qty` int(11) DEFAULT 0,
  `specification` text DEFAULT NULL,
  `tax_class_id` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `product_master`
--

TRUNCATE TABLE `product_master`;
--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `uuid`, `name`, `item_code`, `description`, `main_image`, `mrp`, `sellprice`, `status_flag`, `category_ids`, `category_id`, `sub_category_id`, `featured`, `tags`, `created_at`, `updated_at`, `slug_name`, `minimum`, `logs`, `meta_json`, `price_json`, `quantity`, `views_count`, `sort_order`, `domain2_mrp`, `domain2_sellprice`, `domain3_mrp`, `domain3_sellprice`, `domain2_qty`, `domain3_qty`, `specification`, `tax_class_id`) VALUES
(2, 'd691e867-b913-4043-a0d1-208bc8a2b3ff', '22kt Gold Coin - 8 grams', 'GC008', 'My Motifs presents to you the accurate way to calculate the purity of gold by our newest Victorian gold coins thus making our gold as pure as we say it. This gold coin represents a Victorian motif and weighs 8 grams. The front of the coin shows the portrait while the side has beautifully embellished rims. The high polished finish adds a lustrous appeal to the coin.', 'prod-gc008--front-500x500jpg.jpg', '100.00', '100.00', 'Active', '2,3', 2, 3, 1, NULL, '2022-09-22 00:00:00', '2022-10-08 17:59:32', '22kt-gold-coin--8-grams-1', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"},\"sellprice\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"}}', 1, NULL, '1.00', '130.00', '130.00', '150.00', '150.00', 1, 1, '{\"title\":{\"1\":\"11\",\"2\":\"22\",\"3\":\"33\",\"4\":\"44\",\"5\":\"55\",\"6\":\"66\",\"7\":\"77\"},\"value\":{\"1\":\"11\",\"2\":\"22\",\"3\":\"33\",\"4\":\"44\",\"5\":\"55\",\"6\":\"66\",\"7\":\"77\"}}', 0),
(3, '22aa6693-599c-4f73-b2d7-f94e3ccd5287', '22KT 25gm', '2225102', 'Description:Silver pooja boxes which are intricately carved are perfect for a heavenly aesthetic.This pooja box can be used for multi purposes like for storing pooja ka prasad or even for tikkas. We love the silver finish which looks extremely beautiful in an oval shape and a blue stone. This is also a beautiful article for gifting and it is the perfect decor piece, a gift for the loved ones, a warm feel !', 'prod-s15343078-1-500x500jpg.jpg', '1000.00', '1000.00', 'Active', '2,3', 2, 3, 1, NULL, '2022-09-22 00:00:00', '2022-10-02 21:50:46', '22kt-25gm-1', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"1000\",\"2\":\"1300\",\"3\":\"1500\"},\"sellprice\":{\"1\":\"1000\",\"2\":\"1300\",\"3\":\"1500\"}}', 1, NULL, '2.00', '1300.00', '1300.00', '1500.00', '1500.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"10gm\",\"2\":\"10cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(4, '5cb349e8-4473-445d-b83d-22d2bb59e136', 'Tassel Inspired Keychain', 'S12317051', 'Description:The perfect types of ornaments and jewels to pair with your bags. They have the power to glam up any bag instantly from our collection. Royal and traditional elements in modern interpretations for your classic soul. This keychain features multiple charms in a variety of colours and different motifs with tassels as an inspiration.', 'prod-s10961499-1-500x500.jpg', '150.00', '150.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-09-23 00:00:00', '2022-10-16 10:13:01', 'tassel-inspired-keychain-3', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"150\",\"2\":\"195\",\"3\":\"225\"},\"sellprice\":{\"1\":\"150\",\"2\":\"195\",\"3\":\"225\"}}', 1, NULL, '1.00', '195.00', '195.00', '225.00', '225.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(5, '239cae1b-2796-4cde-8f9f-2efe0ad7f09b', 'Silver Weave Clutch With Contrasting Colour Stones', 'S10904672', 'Description: A classic pick. Our silver weave clutch with colourful contrasting charms. Featured here is a silver clutch with kundans, turquoise stones, corals and emeralds. It is the perfect Lajaavab creation as it is unique and one of a kind and features contrasting elements and beautiful woven work. A perfect traditional night  deserves a perfect bag. This bag is perfect for all kinds of traditional functions and it can instantly amp up your outfit. This bag is the epitome of multiuse featuring a pretty bag as well as convenience. Slay the night with this pretty masterpiece.', 'prod-s10904672-1-500x500.jpg', '300.00', '300.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-09-23 00:00:00', '2022-10-15 17:20:34', 'silver-weave-clutch-with-contrasting-colour-stones-2', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"300\",\"2\":\"390\",\"3\":\"450\"},\"sellprice\":{\"1\":\"300\",\"2\":\"390\",\"3\":\"450\"}}', 1, NULL, '1.00', '390.00', '390.00', '450.00', '450.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"10gm\",\"2\":\"10cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(6, 'dd0e8cd9-6994-48b1-bd49-40b807a4ba4c', 'Cup', 'c101', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'prod-simage3.jpg', '500.00', '500.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-10-06 00:00:00', '2022-10-15 17:23:11', 'cup-2', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"500\",\"2\":\"650\",\"3\":\"750\"},\"sellprice\":{\"1\":\"500\",\"2\":\"650\",\"3\":\"750\"}}', 1, NULL, '1.00', '650.00', '650.00', '750.00', '750.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"10gm\",\"2\":\"10cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(7, '9bf8fe0e-596c-411d-a927-adf03af6b5c9', 'Cup Silver', 'C102', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'prod-simage4.jpg', '100.00', '100.00', 'Active', '6,11', 6, 11, 1, NULL, '2022-10-06 00:00:00', NULL, 'cup-silver', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"},\"sellprice\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"}}', 1, NULL, '1.00', '130.00', '130.00', '150.00', '150.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"25gm\",\"2\":\"15cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(8, 'ed39b3c9-06e5-4fcc-a12b-933c0a8f89c1', 'Tassel Inspired Keychain1', '91025', 'Description:The perfect types of ornaments and jewels to pair with your bags. They have the power to glam up any bag instantly from our collection. Royal and traditional elements in modern interpretations for your classic soul. This keychain features multiple charms in a variety of colours and different motifs with tassels as an inspiration.', 'prod-simage6.jpg', '100.00', '100.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-10-09 00:00:00', '2022-10-15 17:19:41', 'tassel-inspired-keychain1-1', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"},\"sellprice\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"}}', 1, NULL, '1.00', '130.00', '130.00', '150.00', '150.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(9, '62eee9bb-08cb-4f8c-b511-19f46352737d', 'Tassel Inspired Keychain3', '45621', 'Description:The perfect types of ornaments and jewels to pair with your bags. They have the power to glam up any bag instantly from our collection. Royal and traditional elements in modern interpretations for your classic soul. This keychain features multiple charms in a variety of colours and different motifs with tassels as an inspiration.', 'prod-s10961499-1-500x500.jpg', '250.00', '250.00', 'Active', '6,10', 6, 10, 1, NULL, '2022-10-09 00:00:00', NULL, 'tassel-inspired-keychain3', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"250\",\"2\":\"325\",\"3\":\"375\"},\"sellprice\":{\"1\":\"250\",\"2\":\"325\",\"3\":\"375\"}}', 1, NULL, '1.00', '325.00', '325.00', '375.00', '375.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(10, '964bf422-cb5e-43b2-9e95-d8f6c621e849', 'Silver Weave Clutch With Contrasting Colour Stones', '12346', 'Description: A classic pick. Our silver weave clutch with colourful contrasting charms. Featured here is a silver clutch with kundans, turquoise stones, corals and emeralds. It is the perfect Lajaavab creation as it is unique and one of a kind and features contrasting elements and beautiful woven work. A perfect traditional night  deserves a perfect bag. This bag is perfect for all kinds of traditional functions and it can instantly amp up your outfit. This bag is the epitome of multiuse featuring a pretty bag as well as convenience. Slay the night with this pretty masterpiece.', 'prod-s10904672-1-500x500.jpg', '450.00', '450.00', 'Active', '5,9', 5, 9, 1, NULL, '2022-10-09 00:00:00', '2022-10-15 17:20:02', 'silver-weave-clutch-with-contrasting-colour-stones-2', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"450\",\"2\":\"585\",\"3\":\"675\"},\"sellprice\":{\"1\":\"450\",\"2\":\"585\",\"3\":\"675\"}}', 1, NULL, '1.00', '585.00', '585.00', '675.00', '675.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0),
(11, 'd497e0e0-80c9-4d3e-94d9-e0bc217f67e5', '22kt Gold Coin - 8 gram', '133', 'My  to you the accurate way to calculate the purity of gold by our newest Victorian gold coins thus making our gold as pure as we say it. This gold coin represents a Victorian motif and weighs 8 grams. The front of the coin shows the portrait while the side has beautifully embellished rims. The high polished finish adds a lustrous appeal to the coin.', 'prod-gc008--front-500x500.jpg', '451.00', '451.00', 'Active', '5,9', 5, 9, 1, NULL, '2022-10-09 00:00:00', '2022-10-15 17:20:21', '22kt-gold-coin--8-gram-2', 1, NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"451\",\"2\":\"586\",\"3\":\"676\"},\"sellprice\":{\"1\":\"451\",\"2\":\"586\",\"3\":\"676\"}}', 1, NULL, '1.00', '586.00', '586.00', '676.00', '676.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_master_price`
--

DROP TABLE IF EXISTS `product_master_price`;
CREATE TABLE `product_master_price` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `domain_id` int(11) DEFAULT NULL,
  `mrp` decimal(10,2) DEFAULT NULL,
  `sellprice` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `featured_flag` int(11) DEFAULT NULL,
  `home_flag` int(11) DEFAULT NULL,
  `views_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `product_master_price`
--

TRUNCATE TABLE `product_master_price`;
--
-- Dumping data for table `product_master_price`
--

INSERT INTO `product_master_price` (`id`, `product_id`, `domain_id`, `mrp`, `sellprice`, `quantity`, `featured_flag`, `home_flag`, `views_count`) VALUES
(1, 2, 1, '100.00', '100.00', 1, NULL, NULL, NULL),
(2, 2, 2, '130.00', '130.00', 1, NULL, NULL, NULL),
(3, 2, 3, '150.00', '150.00', 1, NULL, NULL, NULL),
(4, 3, 1, '1000.00', '1000.00', 1, NULL, NULL, NULL),
(5, 3, 2, '1300.00', '1300.00', 1, NULL, NULL, NULL),
(6, 3, 3, '1500.00', '1500.00', 1, NULL, NULL, NULL),
(7, 4, 1, '150.00', '150.00', 1, NULL, NULL, NULL),
(8, 4, 2, '195.00', '195.00', 1, NULL, NULL, NULL),
(9, 4, 3, '225.00', '225.00', 1, NULL, NULL, NULL),
(10, 5, 1, '300.00', '300.00', 1, NULL, NULL, NULL),
(11, 5, 2, '390.00', '390.00', 1, NULL, NULL, NULL),
(12, 5, 3, '450.00', '450.00', 1, NULL, NULL, NULL),
(13, 6, 1, '500.00', '500.00', 1, NULL, NULL, NULL),
(14, 6, 2, '650.00', '650.00', 1, NULL, NULL, NULL),
(15, 6, 3, '750.00', '750.00', 1, NULL, NULL, NULL),
(16, 7, 1, '100.00', '100.00', 1, NULL, NULL, NULL),
(17, 7, 2, '130.00', '130.00', 1, NULL, NULL, NULL),
(18, 7, 3, '150.00', '150.00', 1, NULL, NULL, NULL),
(19, 8, 1, '100.00', '100.00', 1, NULL, NULL, NULL),
(20, 8, 2, '130.00', '130.00', 1, NULL, NULL, NULL),
(21, 8, 3, '150.00', '150.00', 1, NULL, NULL, NULL),
(22, 9, 1, '250.00', '250.00', 1, NULL, NULL, NULL),
(23, 9, 2, '325.00', '325.00', 1, NULL, NULL, NULL),
(24, 9, 3, '375.00', '375.00', 1, NULL, NULL, NULL),
(25, 10, 1, '450.00', '450.00', 1, NULL, NULL, NULL),
(26, 10, 2, '585.00', '585.00', 1, NULL, NULL, NULL),
(27, 10, 3, '675.00', '675.00', 1, NULL, NULL, NULL),
(28, 11, 1, '451.00', '451.00', 1, NULL, NULL, NULL),
(29, 11, 2, '586.00', '586.00', 1, NULL, NULL, NULL),
(30, 11, 3, '676.00', '676.00', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review_order`
--

DROP TABLE IF EXISTS `review_order`;
CREATE TABLE `review_order` (
  `review_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT 0,
  `customer_id` int(11) DEFAULT 0,
  `author` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `review_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `date_added` datetime DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `review_order`
--

TRUNCATE TABLE `review_order`;
--
-- Dumping data for table `review_order`
--

INSERT INTO `review_order` (`review_id`, `order_id`, `customer_id`, `author`, `review_text`, `rating`, `status`, `date_added`, `date_modified`) VALUES
(1, 8, 57, '', 'Review test', 5, 1, '2020-08-22 11:31:07', '0000-00-00 00:00:00'),
(2, 20, 31, '', 'Test', 2, 1, '2020-08-25 03:12:35', '0000-00-00 00:00:00'),
(3, 29, 17, '', 'Good', 4, 1, '2020-09-01 12:00:10', '0000-00-00 00:00:00'),
(4, 31, 50, '', 'Test', 4, 1, '2020-09-12 02:54:23', '0000-00-00 00:00:00'),
(5, 6, 50, '', 'Test1', 5, 1, '2020-09-12 02:54:36', '0000-00-00 00:00:00'),
(6, 58, 31, '', 'Test', 4, 1, '2020-09-22 06:43:53', '0000-00-00 00:00:00'),
(7, 82, 31, '', 'Test', 4, 1, '2020-11-03 12:06:50', '0000-00-00 00:00:00'),
(8, 50, 17, '', 'Great response try it once', 5, 1, '2020-11-17 06:49:04', '0000-00-00 00:00:00'),
(9, 268, 98, '', 'Test test', 5, 1, '2021-02-05 02:18:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `review_product`
--

DROP TABLE IF EXISTS `review_product`;
CREATE TABLE `review_product` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `author` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `review_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `date_added` datetime DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `review_product`
--

TRUNCATE TABLE `review_product`;
-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `store_id` int(11) DEFAULT 0,
  `group` varchar(32) DEFAULT NULL,
  `key` varchar(64) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `serialized` tinyint(1) DEFAULT NULL,
  `is_editable` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `setting`
--

TRUNCATE TABLE `setting`;
--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `store_id`, `group`, `key`, `value`, `serialized`, `is_editable`) VALUES
(17232, 0, 'config_site_mail', 'config_smtp_password', 'India@1947.com', NULL, 1),
(17231, 0, 'config_site_mail', 'config_smtp_username', 'noreply@ice.shreewebs.com', NULL, 1),
(17230, 0, 'config_site_mail', 'config_smtp_host', 'mail.ice.shreewebs.com', NULL, 1),
(17228, 0, 'config_site_mail', 'config_site_mail', 'noreply@ice.shreewebs.com', NULL, 1),
(17227, 0, 'config_site_mail', 'config_mail_protocol', 'smtp', NULL, 1),
(17267, 0, 'config_site_mail', 'config_site_from_name', 'bo-ice', NULL, 1),
(17233, 0, 'config_site_mail', 'config_smtp_port', '26', NULL, 1),
(17226, 0, 'config_site_mail', 'config_mail_parameter', '', NULL, 1),
(17225, 0, 'config_site_mail', 'mode', 'edit_content_sitemail', NULL, 1),
(17234, 0, 'config_site_mail', 'config_smtp_timeout', '5', NULL, 0),
(17235, 0, 'config_site_mail', 'config_alert_mail', '1', NULL, 1),
(17236, 0, 'config_site_mail', 'config_alert_emails', 'swamiwebservices@gmail.com', NULL, 1),
(17266, 0, 'config_site_credit_limit', 'config_site_credit_limit', '10000000', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_acc_right_master`
--

DROP TABLE IF EXISTS `site_acc_right_master`;
CREATE TABLE `site_acc_right_master` (
  `acc_id` int(11) NOT NULL,
  `acc_module_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` tinyint(3) NOT NULL DEFAULT 0,
  `status` tinyint(3) DEFAULT 0,
  `sort_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `site_acc_right_master`
--

TRUNCATE TABLE `site_acc_right_master`;
--
-- Dumping data for table `site_acc_right_master`
--

INSERT INTO `site_acc_right_master` (`acc_id`, `acc_module_name`, `parent_id`, `status`, `sort_order`) VALUES
(1, 'Dashboard', 0, 0, 1),
(5, 'Administration', 0, 0, 5),
(6, 'Reports', 0, 0, 6),
(7, 'Customers', 0, 0, 7),
(8, 'Products', 0, 0, 8),
(10, 'Media', 0, 0, 10),
(11, 'CMS', 0, 0, 11),
(19, 'New Orders', 4, 0, 19),
(20, 'Confirmed Orders', 4, 0, 20),
(21, 'Delivered', 4, 0, 21),
(22, 'Review Pending', 4, 0, 22),
(23, 'Review List', 4, 0, 23),
(24, 'All Order', 4, 0, 24),
(25, 'Staff List', 5, 0, 25),
(26, 'Order', 6, 0, 26),
(27, 'Customers', 6, 0, 27),
(28, 'Products', 6, 0, 28),
(33, 'Customers List', 7, 0, 33),
(34, 'Category', 8, 0, 34),
(35, 'Products', 8, 0, 35),
(36, 'Coupon', 8, 0, 36),
(39, 'Media List', 10, 0, 39),
(40, 'FAQ', 11, 0, 40),
(41, 'About US', 11, 0, 41),
(122, 'Dashboard', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_email_template_master`
--

DROP TABLE IF EXISTS `site_email_template_master`;
CREATE TABLE `site_email_template_master` (
  `email_id` int(11) NOT NULL,
  `email_title` varchar(200) NOT NULL DEFAULT '',
  `email_subject` varchar(255) DEFAULT NULL,
  `email_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `site_email_template_master`
--

TRUNCATE TABLE `site_email_template_master`;
--
-- Dumping data for table `site_email_template_master`
--

INSERT INTO `site_email_template_master` (`email_id`, `email_title`, `email_subject`, `email_description`, `email_date`) VALUES
(1, 'Registration confirmation', 'Welcome1', 'Hi #custname,\r\n\r\nWelcome and thank you for registering at Luxurion World-Traditional, Handcrafted, Curated!\r\nYour account has now been created and you can log in by using your email address and password by visiting our website or at the following\r\n\r\nURL\r\nhttp://www.luxurionworld.com/login\r\nEmail : #email\r\nPassword : #password\r\n\r\nUpon logging in, you will be able to access other services including reviewing past orders, printing invoices and editing your account information.', NULL),
(2, 'Email verification', 'Een collega heeft zich gemeld!', 'Hello {FULLNAME}!\r\nWelcome to {SITENAME}!\r\nTo complete your registration please verify your address by clicking here\r\nPS:If clicking the link above does not work, copy and paste the following URL in a new browser window instead.\r\n{HTTP_SERVER}/users/emailverify?code={ACTIVATIONCODE}&email={EMAIL}\r\nActivation Code: {ACTIVATIONCODE}\r\nUser Name: {USERNAME}\r\nPassword: {PASSWORD}1', NULL),
(34, 'Forgot password', 'Forgot password', 'Hello {FULLNAME}!\r\nWelcome to {SITENAME}!\r\nTo complete your registration please verify  ', NULL),
(35, 'Order Shiped', 'Order Shiped', 'Order Shiped', NULL),
(36, 'Order in process', 'Order in process', 'Order in process', NULL),
(37, 'Order Deliver', 'Order Deliver', 'Order Deliver', NULL),
(38, 'Order Cancel', 'Order Cancel', 'Order Cancel', NULL),
(39, 'Order return', 'Order return', 'Order return', NULL),
(40, 'Order Assigned to Driver By admin', 'New Order is waiting to accept', 'Order Assigned to Driver By admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_notifications`
--

DROP TABLE IF EXISTS `site_notifications`;
CREATE TABLE `site_notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `site_notifications`
--

TRUNCATE TABLE `site_notifications`;
--
-- Dumping data for table `site_notifications`
--

INSERT INTO `site_notifications` (`id`, `title`, `description`) VALUES
(1, 'Registration confirmation', 'Hi #custname,\n\nWelcome and thank you for registering at Luxurion World-Traditional, Handcrafted, Curated!\nYour account has now been created and you can log in by using your email address and password by visiting our website or at the following\n\nURL\nhttp://www.luxurionworld.com/login\nEmail : #email\nPassword : #password\n\nUpon logging in, you will be able to access other services including reviewing past orders, printing invoices and editing your account information.\n'),
(2, 'Email verification', 'Hello {FULLNAME}!1\r\nWelcome to {SITENAME}!\r\nTo complete your registration please verify your address by clicking here\r\nPS:If clicking the link above does not work, copy and paste the following URL in a new browser window instead.\r\n{HTTP_SERVER}/users/emailverify?code={ACTIVATIONCODE}&email={EMAIL}\r\nActivation Code: {ACTIVATIONCODE}\r\nUser Name: {USERNAME}\r\nPassword: {PASSWORD}'),
(34, 'Forgot password', 'Hello {FULLNAME}!\r\nWelcome to {SITENAME}!\r\nTo complete your registration please verify  '),
(35, 'Order Shiped', 'Order Shiped'),
(36, 'Order in process', 'Order in process'),
(37, 'Order Deliver', 'Order Deliver'),
(38, 'Order Cancel', 'Order Cancel'),
(39, 'Order Assigned to Driver By admin', 'Order Assigned to Driver By admin\r\n#order_id');

-- --------------------------------------------------------

--
-- Table structure for table `t_login_logs`
--

DROP TABLE IF EXISTS `t_login_logs`;
CREATE TABLE `t_login_logs` (
  `id` bigint(20) NOT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `t_login_logs`
--

TRUNCATE TABLE `t_login_logs`;
-- --------------------------------------------------------

--
-- Table structure for table `t_notification_admin`
--

DROP TABLE IF EXISTS `t_notification_admin`;
CREATE TABLE `t_notification_admin` (
  `id` int(11) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `admin_id` int(11) DEFAULT 1,
  `reffernce_table` varchar(100) DEFAULT NULL,
  `reffernce_id` int(11) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `t_notification_admin`
--

TRUNCATE TABLE `t_notification_admin`;
-- --------------------------------------------------------

--
-- Table structure for table `t_notification_send`
--

DROP TABLE IF EXISTS `t_notification_send`;
CREATE TABLE `t_notification_send` (
  `id` int(11) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `added_by_userid` int(11) DEFAULT NULL,
  `send_to` varchar(50) DEFAULT NULL COMMENT 'user-general,user-enterprise,driver,security',
  `title` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `notification_type` int(11) NOT NULL DEFAULT 1 COMMENT '1:Firebase  Notification, 2: database-store'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `t_notification_send`
--

TRUNCATE TABLE `t_notification_send`;
-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL,
  `uuid` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` enum('S','A','EMP') COLLATE utf8_unicode_ci DEFAULT 'A' COMMENT 'Type OF users',
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio_info` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT 'Active' COMMENT 'Active,Inactive',
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delete_status` int(11) DEFAULT 0,
  `access_ids` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `user_master`
--

TRUNCATE TABLE `user_master`;
--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `uuid`, `user_type`, `first_name`, `middle_name`, `last_name`, `address1`, `email`, `mobile`, `bio_info`, `date_added`, `modified`, `user_status`, `profile_pic`, `delete_status`, `access_ids`) VALUES
(1, '2ee14882-6e0b-4cc0-be4c-b011b9f23873', 'S', 'Admin', NULL, 'admin', NULL, 'admin@gmail.com', '9422945125', NULL, '2019-08-20 00:00:00', '2020-11-19 00:00:00', 'Active', NULL, 0, '122,25,26,27,28,33,34,35,36,39,40,41'),
(17, '0bf84246-e6db-4234-83b4-5467c5e64028', 'EMP', 'test', NULL, 'test', NULL, 'test@test.com', '1234567891', NULL, '2022-09-13 00:00:00', '2022-09-14 00:00:00', 'Active', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_tokenid`
--

DROP TABLE IF EXISTS `user_tokenid`;
CREATE TABLE `user_tokenid` (
  `id` int(11) NOT NULL,
  `tokenid` varchar(525) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `user_tokenid`
--

TRUNCATE TABLE `user_tokenid`;
-- --------------------------------------------------------

--
-- Table structure for table `wti_banners`
--

DROP TABLE IF EXISTS `wti_banners`;
CREATE TABLE `wti_banners` (
  `banner_id` int(11) NOT NULL,
  `banner_url` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_text2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_text3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_image` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_no` int(11) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `status_flag` tinyint(1) DEFAULT NULL,
  `delete_status` int(11) DEFAULT 0,
  `category_banner` varchar(25) DEFAULT 'home',
  `domains` varchar(15) DEFAULT NULL COMMENT 'comma seperated'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `wti_banners`
--

TRUNCATE TABLE `wti_banners`;
--
-- Dumping data for table `wti_banners`
--

INSERT INTO `wti_banners` (`banner_id`, `banner_url`, `banner_name`, `banner_text`, `banner_text2`, `banner_text3`, `main_image`, `sort_no`, `add_date`, `modified_date`, `status_flag`, `delete_status`, `category_banner`, `domains`) VALUES
(3, '', 'slider1', '', '', NULL, 'banner-slider1-0UOB.png', 2, '2022-10-05 03:03:28', NULL, 1, 0, 'home', '1'),
(5, '', 'slider2', '', '', NULL, 'banner-slider2-0hjU.jpg', 2, '2022-10-05 03:03:44', NULL, 1, 0, 'home', '1,2'),
(8, '', 'aa', '', '', NULL, 'banner-aa-0Bh3.jpg', 3, '2022-10-05 01:29:00', NULL, 1, 0, 'home', '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `wti_cms_pages`
--

DROP TABLE IF EXISTS `wti_cms_pages`;
CREATE TABLE `wti_cms_pages` (
  `id` int(11) NOT NULL,
  `section` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail_mini` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `main_image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `box1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `box2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `box3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `domains` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `wti_cms_pages`
--

TRUNCATE TABLE `wti_cms_pages`;
--
-- Dumping data for table `wti_cms_pages`
--

INSERT INTO `wti_cms_pages` (`id`, `section`, `heading`, `detail_mini`, `details`, `date_added`, `main_image`, `slug_name`, `box1`, `box2`, `box3`, `domains`) VALUES
(1, 'aboutus', 'About Us', 'About Us', 'Passion for jewelry and admiration for chunky elements is what brought our founder Mrs. Surabhi Didwania to launch My ppppppppin 2013. Guided by a Traditional yet Dramatic receptivity, Her love for jewellery can be traced back to her childhood, growing up in the sleepy yet beautiful hills of Kurseong, near Darjeeling. Cascading waterfalls, lush green valleys, chirping birds and exotic flowers made up her daily vistas the memory of which she taps into with her creations that are a generous nod towards nature-inspired My Motifs. We combine these elements with the essence of glorious Indian heritage, reinterpreting traditional Indian jewelry with her signature aesthetic to appeal to the modern-day admirers.\r\n\r\n', '2020-06-15 00:00:00', NULL, NULL, '', '', '', 1),
(3, 'privacy', 'privacy1', '', '<p>•<span style=\"white-space:pre\">	</span>We value the trust you place in mypppppppppppp.com (“Website”) and insist upon the highest standards for secure transactions and customer information privacy. We recognise the importance of privacy of our users and also of maintaining confidentiality of information provided by our users. Please read the following statement (“Privacy Policy”) carefully to learn about our information gathering and dissemination practices.</p><p>•<span style=\"white-space:pre\">	</span>This policy covers the processing, storage and access to Information as required under lawful and/or contractual activities with pppppppppppp, a Partnership Firm having its principal place of business at 702, Unique Tower, Gaiwadi Industrial Estate, Near Patel Petrol Pump, Off. S.V.Road, Goregaon – (West), Mumbai – 400 062  (hereinafter referred to as \"pppppppppppp\") or otherwise required in the normal course of business. It describes Motif’s policies and procedures on the collection, usage and disclosure of Information provided/received by natural persons and meets the requirements established under:</p><p>-<span style=\"white-space:pre\">	</span>The Information Technology Act, 2000 – Section 43A;</p><p>-<span style=\"white-space:pre\">	</span>The Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Information) Rules, 2011.</p><p>•<span style=\"white-space:pre\">	</span>This Privacy Policy is an electronic record in the form of an electronic contract formed under the Information Technology Act, 2000 and the rules made thereunder and the amended provisions pertaining to electronic documents / records in various statutes as amended by the Information Technology Act, 2000. This Privacy Policy does not require any physical, electronic or digital signature.</p><p>•<span style=\"white-space:pre\">	</span>For the purpose of this Privacy Policy, wherever the context so requires \"you\" or \"your\" shall mean User and the term \"we\", \"us\", \"our\" shall mean pppppppppppp.</p><p>•<span style=\"white-space:pre\">	</span>By using the Website, you agree, acknowledge and confirm and shall be deemed to have agreed, acknowledged and confirmed that you understand, agree and consent to this Privacy Policy. If you do not agree with the terms of this privacy policy, please do not use this website.</p><p>•<span style=\"white-space:pre\">	</span>When you use our Website, we collect and store your personal information which is provided by you from time to time in order to be able to provide you a safe and customized experience. In general, however, you are free to browse the Website without providing any personal information about yourself. </p><p>•<span style=\"white-space:pre\">	</span>The personal information which we may collect from you may include, without limitation, information about your personal identity such as name, gender, marital status, religion, age, photograph, etc., your contact details such as your email address, postal addresses, frequent flyer number, telephone (mobile or otherwise) and fax numbers. The information may also include any other personal or other information including those relating to your income and/or lifestyle, billing information, payment history etc. (as shared by you). If you choose to buy any products and/ or services on the Website, we will collect information about your buying behaviour. If you transact with us on the Website, we will collect some additional information, such as a billing address, credit / debit card number, credit / debit card expiration date and/ or other payment instrument details and tracking information from cheques or money orders.</p><p>•<span style=\"white-space:pre\">	</span>If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law. If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect and retain such information.</p><p>•<span style=\"white-space:pre\">	</span>We may also collect information other than personal information from you through the Website when you visit and / or use the Website. Such information may be stored in server logs. This non-personal information may include your geographic location, details of your telecom service provider or internet service provider, the type of browser (Internet Explorer, Firefox, Opera, Google Chrome etc.), the operating system of your system, device and the Website you last visited before visiting the Website etc. The duration of your stay on the Website is also stored in the session along with the date and time of your access. </p><p>•<span style=\"white-space:pre\">	</span>Non-personal information is collected through various ways such through the use of cookies. Cookies are small pieces of information that are stored by your browser on your device\'s hard drive. We may store temporary or permanent ‘cookies\' on your computer. You can erase or choose to block these cookies from your computer. You can configure your computer\'s browser to alert you when we attempt to send you a cookie with an option to accept or refuse the cookie. If you have turned cookies off, you may be prevented from using certain features of the Website.</p><p>•<span style=\"white-space:pre\">	</span>In addition, we may automatically track certain information about you based upon your behaviour on our Website. This information may include the URL that you came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address. </p><p>•<span style=\"white-space:pre\">	</span>We do use your contact information to send you offers based on your previous orders and your interests. We may also publish your picture on our Website for advertisement purposes and you hereby unconditionally consent to such usage. We may share personal information with our other corporate entities and affiliates. These entities and affiliates may market to you as a result of such sharing unless you explicitly opt-out. </p><p>•<span style=\"white-space:pre\">	</span>We reserve the right to disclose your Personal Information to third parties at our sole and absolute discretion. This disclosure may be required for us to provide you access to our services, to comply with our legal obligations, to enforce our agreement against you, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our services. We do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.</p><p>•<span style=\"white-space:pre\">	</span>We may disclose your Personal Information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to (a) enforce our Terms or Privacy Policy; (b) respond to claims that an advertisement, posting or other content violates the rights of a third party; or (c) protect the rights, property or personal safety of our users or the general public.</p><p>•<span style=\"white-space:pre\">	</span>We and our affiliates may share / sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.</p><p>•<span style=\"white-space:pre\">	</span>Our Website may link to other websites that may collect personally identifiable information about you. Mypppppppppppp.com is not responsible for the privacy practices or the content of those linked websites.</p><p>•<span style=\"white-space:pre\">	</span>We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account.</p><p>•<span style=\"white-space:pre\">	</span>We may use third-party service providers to serve ads on our behalf across the internet and sometimes on the Website. They may collect non-personal information about your visits to the Website, and your interaction with our products and services on the Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you. Mypppppppppppp.com is not responsible for the privacy policies and/ or practices of such companies.</p><p>•<span style=\"white-space:pre\">	</span>All payments on the Website are secured. This means all Personal Information you provide is transmitted using SSL (Secure Socket Layer) encryption. SSL is a proven coding system that lets your browser automatically encrypt, or scramble, data before you send it to us.</p><p>•<span style=\"white-space:pre\">	</span>You may withdraw your consent to submit any or all Personal Information or decline to provide any permissions on your mobile/tablet as covered above. In case, you choose to do so then your access to the Website may be limited and/or we might not be able to provide any or all the services to you.</p><p>•<span style=\"white-space:pre\">	</span>You will occasionally receive e-mail updates from us about sales, special offers, new services, and other noteworthy items. We hope you will find these updates interesting and informative. If you wish not to receive them, please click on the \"unsubscribe\" link or follow the instructions in each e - mail message or send us an email at  info@mypppppppppppp.com </p><p>•<span style=\"white-space:pre\">	</span>By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to your consent for sharing your information as per this privacy policy.</p><p>•<span style=\"white-space:pre\">	</span>Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically. If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.</p>\r\n', '2022-10-02 13:07:05', '', NULL, NULL, NULL, NULL, 1),
(15, 'privacy', 'privacy2', '', '<p>•<span style=\"white-space:pre\">	</span>We value the trust you place in mypppppppppppp.com (“Website”) and insist upon the highest standards for secure transactions and customer information privacy. We recognise the importance of privacy of our users and also of maintaining confidentiality of information provided by our users. Please read the following statement (“Privacy Policy”) carefully to learn about our information gathering and dissemination practices.</p><p>•<span style=\"white-space:pre\">	</span>This policy covers the processing, storage and access to Information as required under lawful and/or contractual activities with pppppppppppp, a Partnership Firm having its principal place of business at 702, Unique Tower, Gaiwadi Industrial Estate, Near Patel Petrol Pump, Off. S.V.Road, Goregaon – (West), Mumbai – 400 062  (hereinafter referred to as \"pppppppppppp\") or otherwise required in the normal course of business. It describes Motif’s policies and procedures on the collection, usage and disclosure of Information provided/received by natural persons and meets the requirements established under:</p><p>-<span style=\"white-space:pre\">	</span>The Information Technology Act, 2000 – Section 43A;</p><p>-<span style=\"white-space:pre\">	</span>The Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Information) Rules, 2011.</p><p>•<span style=\"white-space:pre\">	</span>This Privacy Policy is an electronic record in the form of an electronic contract formed under the Information Technology Act, 2000 and the rules made thereunder and the amended provisions pertaining to electronic documents / records in various statutes as amended by the Information Technology Act, 2000. This Privacy Policy does not require any physical, electronic or digital signature.</p><p>•<span style=\"white-space:pre\">	</span>For the purpose of this Privacy Policy, wherever the context so requires \"you\" or \"your\" shall mean User and the term \"we\", \"us\", \"our\" shall mean pppppppppppp.</p><p>•<span style=\"white-space:pre\">	</span>By using the Website, you agree, acknowledge and confirm and shall be deemed to have agreed, acknowledged and confirmed that you understand, agree and consent to this Privacy Policy. If you do not agree with the terms of this privacy policy, please do not use this website.</p><p>•<span style=\"white-space:pre\">	</span>When you use our Website, we collect and store your personal information which is provided by you from time to time in order to be able to provide you a safe and customized experience. In general, however, you are free to browse the Website without providing any personal information about yourself. </p><p>•<span style=\"white-space:pre\">	</span>The personal information which we may collect from you may include, without limitation, information about your personal identity such as name, gender, marital status, religion, age, photograph, etc., your contact details such as your email address, postal addresses, frequent flyer number, telephone (mobile or otherwise) and fax numbers. The information may also include any other personal or other information including those relating to your income and/or lifestyle, billing information, payment history etc. (as shared by you). If you choose to buy any products and/ or services on the Website, we will collect information about your buying behaviour. If you transact with us on the Website, we will collect some additional information, such as a billing address, credit / debit card number, credit / debit card expiration date and/ or other payment instrument details and tracking information from cheques or money orders.</p><p>•<span style=\"white-space:pre\">	</span>If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law. If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect and retain such information.</p><p>•<span style=\"white-space:pre\">	</span>We may also collect information other than personal information from you through the Website when you visit and / or use the Website. Such information may be stored in server logs. This non-personal information may include your geographic location, details of your telecom service provider or internet service provider, the type of browser (Internet Explorer, Firefox, Opera, Google Chrome etc.), the operating system of your system, device and the Website you last visited before visiting the Website etc. The duration of your stay on the Website is also stored in the session along with the date and time of your access. </p><p>•<span style=\"white-space:pre\">	</span>Non-personal information is collected through various ways such through the use of cookies. Cookies are small pieces of information that are stored by your browser on your device\'s hard drive. We may store temporary or permanent ‘cookies\' on your computer. You can erase or choose to block these cookies from your computer. You can configure your computer\'s browser to alert you when we attempt to send you a cookie with an option to accept or refuse the cookie. If you have turned cookies off, you may be prevented from using certain features of the Website.</p><p>•<span style=\"white-space:pre\">	</span>In addition, we may automatically track certain information about you based upon your behaviour on our Website. This information may include the URL that you came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address. </p><p>•<span style=\"white-space:pre\">	</span>We do use your contact information to send you offers based on your previous orders and your interests. We may also publish your picture on our Website for advertisement purposes and you hereby unconditionally consent to such usage. We may share personal information with our other corporate entities and affiliates. These entities and affiliates may market to you as a result of such sharing unless you explicitly opt-out. </p><p>•<span style=\"white-space:pre\">	</span>We reserve the right to disclose your Personal Information to third parties at our sole and absolute discretion. This disclosure may be required for us to provide you access to our services, to comply with our legal obligations, to enforce our agreement against you, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our services. We do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.</p><p>•<span style=\"white-space:pre\">	</span>We may disclose your Personal Information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to (a) enforce our Terms or Privacy Policy; (b) respond to claims that an advertisement, posting or other content violates the rights of a third party; or (c) protect the rights, property or personal safety of our users or the general public.</p><p>•<span style=\"white-space:pre\">	</span>We and our affiliates may share / sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.</p><p>•<span style=\"white-space:pre\">	</span>Our Website may link to other websites that may collect personally identifiable information about you. Mypppppppppppp.com is not responsible for the privacy practices or the content of those linked websites.</p><p>•<span style=\"white-space:pre\">	</span>We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account.</p><p>•<span style=\"white-space:pre\">	</span>We may use third-party service providers to serve ads on our behalf across the internet and sometimes on the Website. They may collect non-personal information about your visits to the Website, and your interaction with our products and services on the Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you. Mypppppppppppp.com is not responsible for the privacy policies and/ or practices of such companies.</p><p>•<span style=\"white-space:pre\">	</span>All payments on the Website are secured. This means all Personal Information you provide is transmitted using SSL (Secure Socket Layer) encryption. SSL is a proven coding system that lets your browser automatically encrypt, or scramble, data before you send it to us.</p><p>•<span style=\"white-space:pre\">	</span>You may withdraw your consent to submit any or all Personal Information or decline to provide any permissions on your mobile/tablet as covered above. In case, you choose to do so then your access to the Website may be limited and/or we might not be able to provide any or all the services to you.</p><p>•<span style=\"white-space:pre\">	</span>You will occasionally receive e-mail updates from us about sales, special offers, new services, and other noteworthy items. We hope you will find these updates interesting and informative. If you wish not to receive them, please click on the \"unsubscribe\" link or follow the instructions in each e - mail message or send us an email at  info@mypppppppppppp.com </p><p>•<span style=\"white-space:pre\">	</span>By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to your consent for sharing your information as per this privacy policy.</p><p>•<span style=\"white-space:pre\">	</span>Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically. If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.</p>\r\n', '2022-10-02 13:07:08', NULL, NULL, NULL, NULL, NULL, 2),
(16, 'privacy', 'privacy3', '', '<p>•<span style=\"white-space:pre\">	</span>We value the trust you place in mypppppppppppp.com (“Website”) and insist upon the highest standards for secure transactions and customer information privacy. We recognise the importance of privacy of our users and also of maintaining confidentiality of information provided by our users. Please read the following statement (“Privacy Policy”) carefully to learn about our information gathering and dissemination practices.</p><p>•<span style=\"white-space:pre\">	</span>This policy covers the processing, storage and access to Information as required under lawful and/or contractual activities with pppppppppppp, a Partnership Firm having its principal place of business at 702, Unique Tower, Gaiwadi Industrial Estate, Near Patel Petrol Pump, Off. S.V.Road, Goregaon – (West), Mumbai – 400 062  (hereinafter referred to as \"pppppppppppp\") or otherwise required in the normal course of business. It describes Motif’s policies and procedures on the collection, usage and disclosure of Information provided/received by natural persons and meets the requirements established under:</p><p>-<span style=\"white-space:pre\">	</span>The Information Technology Act, 2000 – Section 43A;</p><p>-<span style=\"white-space:pre\">	</span>The Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Information) Rules, 2011.</p><p>•<span style=\"white-space:pre\">	</span>This Privacy Policy is an electronic record in the form of an electronic contract formed under the Information Technology Act, 2000 and the rules made thereunder and the amended provisions pertaining to electronic documents / records in various statutes as amended by the Information Technology Act, 2000. This Privacy Policy does not require any physical, electronic or digital signature.</p><p>•<span style=\"white-space:pre\">	</span>For the purpose of this Privacy Policy, wherever the context so requires \"you\" or \"your\" shall mean User and the term \"we\", \"us\", \"our\" shall mean pppppppppppp.</p><p>•<span style=\"white-space:pre\">	</span>By using the Website, you agree, acknowledge and confirm and shall be deemed to have agreed, acknowledged and confirmed that you understand, agree and consent to this Privacy Policy. If you do not agree with the terms of this privacy policy, please do not use this website.</p><p>•<span style=\"white-space:pre\">	</span>When you use our Website, we collect and store your personal information which is provided by you from time to time in order to be able to provide you a safe and customized experience. In general, however, you are free to browse the Website without providing any personal information about yourself. </p><p>•<span style=\"white-space:pre\">	</span>The personal information which we may collect from you may include, without limitation, information about your personal identity such as name, gender, marital status, religion, age, photograph, etc., your contact details such as your email address, postal addresses, frequent flyer number, telephone (mobile or otherwise) and fax numbers. The information may also include any other personal or other information including those relating to your income and/or lifestyle, billing information, payment history etc. (as shared by you). If you choose to buy any products and/ or services on the Website, we will collect information about your buying behaviour. If you transact with us on the Website, we will collect some additional information, such as a billing address, credit / debit card number, credit / debit card expiration date and/ or other payment instrument details and tracking information from cheques or money orders.</p><p>•<span style=\"white-space:pre\">	</span>If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law. If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect and retain such information.</p><p>•<span style=\"white-space:pre\">	</span>We may also collect information other than personal information from you through the Website when you visit and / or use the Website. Such information may be stored in server logs. This non-personal information may include your geographic location, details of your telecom service provider or internet service provider, the type of browser (Internet Explorer, Firefox, Opera, Google Chrome etc.), the operating system of your system, device and the Website you last visited before visiting the Website etc. The duration of your stay on the Website is also stored in the session along with the date and time of your access. </p><p>•<span style=\"white-space:pre\">	</span>Non-personal information is collected through various ways such through the use of cookies. Cookies are small pieces of information that are stored by your browser on your device\'s hard drive. We may store temporary or permanent ‘cookies\' on your computer. You can erase or choose to block these cookies from your computer. You can configure your computer\'s browser to alert you when we attempt to send you a cookie with an option to accept or refuse the cookie. If you have turned cookies off, you may be prevented from using certain features of the Website.</p><p>•<span style=\"white-space:pre\">	</span>In addition, we may automatically track certain information about you based upon your behaviour on our Website. This information may include the URL that you came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address. </p><p>•<span style=\"white-space:pre\">	</span>We do use your contact information to send you offers based on your previous orders and your interests. We may also publish your picture on our Website for advertisement purposes and you hereby unconditionally consent to such usage. We may share personal information with our other corporate entities and affiliates. These entities and affiliates may market to you as a result of such sharing unless you explicitly opt-out. </p><p>•<span style=\"white-space:pre\">	</span>We reserve the right to disclose your Personal Information to third parties at our sole and absolute discretion. This disclosure may be required for us to provide you access to our services, to comply with our legal obligations, to enforce our agreement against you, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our services. We do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.</p><p>•<span style=\"white-space:pre\">	</span>We may disclose your Personal Information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to (a) enforce our Terms or Privacy Policy; (b) respond to claims that an advertisement, posting or other content violates the rights of a third party; or (c) protect the rights, property or personal safety of our users or the general public.</p><p>•<span style=\"white-space:pre\">	</span>We and our affiliates may share / sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.</p><p>•<span style=\"white-space:pre\">	</span>Our Website may link to other websites that may collect personally identifiable information about you. Mypppppppppppp.com is not responsible for the privacy practices or the content of those linked websites.</p><p>•<span style=\"white-space:pre\">	</span>We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account.</p><p>•<span style=\"white-space:pre\">	</span>We may use third-party service providers to serve ads on our behalf across the internet and sometimes on the Website. They may collect non-personal information about your visits to the Website, and your interaction with our products and services on the Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you. Mypppppppppppp.com is not responsible for the privacy policies and/ or practices of such companies.</p><p>•<span style=\"white-space:pre\">	</span>All payments on the Website are secured. This means all Personal Information you provide is transmitted using SSL (Secure Socket Layer) encryption. SSL is a proven coding system that lets your browser automatically encrypt, or scramble, data before you send it to us.</p><p>•<span style=\"white-space:pre\">	</span>You may withdraw your consent to submit any or all Personal Information or decline to provide any permissions on your mobile/tablet as covered above. In case, you choose to do so then your access to the Website may be limited and/or we might not be able to provide any or all the services to you.</p><p>•<span style=\"white-space:pre\">	</span>You will occasionally receive e-mail updates from us about sales, special offers, new services, and other noteworthy items. We hope you will find these updates interesting and informative. If you wish not to receive them, please click on the \"unsubscribe\" link or follow the instructions in each e - mail message or send us an email at  info@mypppppppppppp.com </p><p>•<span style=\"white-space:pre\">	</span>By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to your consent for sharing your information as per this privacy policy.</p><p>•<span style=\"white-space:pre\">	</span>Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically. If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.</p>\r\n', '2022-10-02 13:07:12', NULL, NULL, NULL, NULL, NULL, 3),
(18, 'termscondtion', 'Terms & condtion1', '', 'Terms & condtion edit', '2022-10-02 13:16:47', NULL, NULL, NULL, NULL, NULL, 1),
(19, 'termscondtion', 'Terms & condtion2', '', 'Terms & condtion edit', '2022-10-02 13:16:50', NULL, NULL, NULL, NULL, NULL, 2),
(20, 'termscondtion', 'Terms & condtion3', '', 'Terms & condtion edit', '2022-10-02 13:16:54', NULL, NULL, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `wti_meta_tags`
--

DROP TABLE IF EXISTS `wti_meta_tags`;
CREATE TABLE `wti_meta_tags` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_descriptions` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `wti_meta_tags`
--

TRUNCATE TABLE `wti_meta_tags`;
--
-- Dumping data for table `wti_meta_tags`
--

INSERT INTO `wti_meta_tags` (`id`, `meta_title`, `meta_keywords`, `meta_descriptions`, `name`) VALUES
(1, 'aa', 'aa', 'aa', 'home'),
(2, 'aa', 'aa', 'aa', 'about-us'),
(4, 'aa', 'aa', 'aa', 'privacy'),
(5, 'aa', 'aa', 'aa', 'terms-and-conditions'),
(10, 'aa', 'aa', 'aa', 'contactus');

-- --------------------------------------------------------

--
-- Table structure for table `wti_m_address`
--

DROP TABLE IF EXISTS `wti_m_address`;
CREATE TABLE `wti_m_address` (
  `id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_flag` int(11) DEFAULT NULL,
  `delete_status` int(11) DEFAULT 0,
  `add_date` datetime DEFAULT NULL,
  `data_for` enum('ADDRESS','PHONE','EMAIL') COLLATE utf8_unicode_ci DEFAULT 'ADDRESS',
  `google_map` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_long` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_lat` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `domains` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `wti_m_address`
--

TRUNCATE TABLE `wti_m_address`;
--
-- Dumping data for table `wti_m_address`
--

INSERT INTO `wti_m_address` (`id`, `address`, `address2`, `email1`, `email2`, `phone1`, `phone2`, `status_flag`, `delete_status`, `add_date`, `data_for`, `google_map`, `map_long`, `map_lat`, `domains`) VALUES
(1, 'nashik', 'nashik', 'info@domain1.com', '', '+11010101101', '', 0, 0, NULL, 'ADDRESS', '', '', '', 1),
(2, 'nashik', 'nashik', 'info@domain2.com', '', '+11010101101', '', 0, 0, NULL, 'ADDRESS', '', '', '', 2),
(3, 'nashik', 'nashik', 'info@domain3.com', '', '+11010101101', '', 0, 0, NULL, 'ADDRESS', '', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wti_m_setting`
--

DROP TABLE IF EXISTS `wti_m_setting`;
CREATE TABLE `wti_m_setting` (
  `setting_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `group_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `key_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `serialized` tinyint(1) NOT NULL,
  `editable` int(11) NOT NULL DEFAULT 1,
  `sort_no` decimal(10,2) DEFAULT 1.00,
  `label` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_info` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_hidden` tinyint(3) DEFAULT 0,
  `delete_status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `wti_m_setting`
--

TRUNCATE TABLE `wti_m_setting`;
--
-- Dumping data for table `wti_m_setting`
--

INSERT INTO `wti_m_setting` (`setting_id`, `store_id`, `group_name`, `key_name`, `value`, `serialized`, `editable`, `sort_no`, `label`, `extra_info`, `is_hidden`, `delete_status`) VALUES
(17891, 1, 'config_site_mail', 'config_site_mail', 'info@aaaaa.com', 0, 1, '6.00', 'Recieve mail', NULL, 0, 0),
(17890, 1, 'config_site_mail', 'config_site_from_name', 'aaaaa', 0, 1, '5.00', 'From name', NULL, 0, 0),
(17889, 1, 'config_site_mail', 'config_smtp_port', '587', 0, 1, '4.00', 'SMTP Port', NULL, 0, 0),
(17888, 1, 'config_site_mail', 'config_smtp_password', 'India1@1947.com', 0, 1, '3.00', 'SMTP Password', NULL, 0, 0),
(17953, 1, 'config_site_maintenance', 'mode', 'maintenancemode', 0, 1, '1.00', NULL, NULL, 0, 0),
(17954, 1, 'config_site_maintenance', 'config_maintenance', '0', 0, 1, '1.00', NULL, NULL, 0, 0),
(17955, 1, 'config_site_maintenance', 'config_site_maintenance_message', '\"We are sorry for any inconvenience. www.ecomjewellery.com is under maintenance mode.\"', 0, 1, '1.00', NULL, NULL, 0, 0),
(17887, 1, 'config_site_mail', 'config_smtp_username', 'mailsendteam0071@gmail.com', 0, 1, '2.00', 'SMTP Username ', NULL, 0, 0),
(17886, 1, 'config_site_mail', 'config_smtp_host', 'smtp.gmail.com', 0, 1, '1.00', 'SMTP Hostname', NULL, 0, 0),
(17885, 1, 'config_site_mail', 'mode', 'edit_content_sitemail', 0, 1, '1.00', NULL, NULL, 1, 0),
(17914, 0, 'config_video', 'config_video1', 'https://www.youtube.com/embed/S_0q75eD8Yc', 0, 2, '1.00', NULL, NULL, 0, 0),
(17915, 0, 'config_video', 'config_video2', 'https://www.youtube.com/embed/S_0q75eD8Yc', 0, 2, '1.00', NULL, NULL, 0, 0),
(17916, 0, 'marquee_home_text', 'marquee_home_text', '!!! DevOps new batch starting from July 17th 2022 !!!  *** Demo scheduled on July 16th 2022 ***', 0, 2, '1.00', NULL, NULL, 0, 0),
(17973, 1, 'config_site_mail', 'config_alert_emails', '', 0, 1, '7.00', 'Alert emails', 'Comma sperated', 0, 0),
(17956, 2, 'config_site_mail', 'config_alert_emails', '', 0, 1, '7.00', 'Alert emails', 'Comma sperated', 0, 0),
(17957, 2, 'config_site_mail', 'config_site_mail', 'info@aaaaa.com', 0, 1, '6.00', 'Recieve mail', NULL, 0, 0),
(17958, 2, 'config_site_mail', 'config_site_from_name', 'aaaaa', 0, 1, '5.00', 'From name', NULL, 0, 0),
(17959, 2, 'config_site_mail', 'config_smtp_port', '587', 0, 1, '4.00', 'SMTP Port', NULL, 0, 0),
(17960, 2, 'config_site_mail', 'config_smtp_password', 'India2@1947.com', 0, 1, '3.00', 'SMTP Password', NULL, 0, 0),
(17961, 2, 'config_site_mail', 'config_smtp_username', 'mailsendteam0072@gmail.com', 0, 1, '2.00', 'SMTP Username ', NULL, 0, 0),
(17962, 2, 'config_site_mail', 'config_smtp_host', 'smtp.gmail.com', 0, 1, '1.00', 'SMTP Hostname', NULL, 0, 0),
(17963, 2, 'config_site_mail', 'mode', 'edit_content_sitemail', 0, 1, '1.00', NULL, NULL, 1, 0),
(17964, 3, 'config_site_mail', 'config_alert_emails', '', 0, 1, '7.00', 'Alert emails', 'Comma sperated', 0, 0),
(17965, 3, 'config_site_mail', 'config_site_mail', 'info@aaaaa.com', 0, 1, '6.00', 'Recieve mail', NULL, 0, 0),
(17966, 3, 'config_site_mail', 'config_site_from_name', 'aaaaa', 0, 1, '5.00', 'From name', NULL, 0, 0),
(17967, 3, 'config_site_mail', 'config_smtp_port', '587', 0, 1, '4.00', 'SMTP Port', NULL, 0, 0),
(17968, 3, 'config_site_mail', 'config_smtp_password', 'India3@1947.com', 0, 1, '3.00', 'SMTP Password', NULL, 0, 0),
(17969, 3, 'config_site_mail', 'config_smtp_username', 'mailsendteam0073@gmail.com', 0, 1, '2.00', 'SMTP Username ', NULL, 0, 0),
(17970, 3, 'config_site_mail', 'config_smtp_host', 'smtp.gmail.com', 0, 1, '1.00', 'SMTP Hostname', NULL, 0, 0),
(17971, 3, 'config_site_mail', 'mode', 'edit_content_sitemail', 0, 1, '1.00', NULL, NULL, 1, 0),
(17974, 2, 'config_site_maintenance', 'mode', 'maintenancemode', 0, 1, '1.00', NULL, NULL, 0, 0),
(17975, 2, 'config_site_maintenance', 'config_maintenance', '0', 0, 1, '1.00', NULL, NULL, 0, 0),
(17976, 2, 'config_site_maintenance', 'config_site_maintenance_message', '\"We are sorry for any inconvenience. www.ecomjewellery.com is under maintenance mode.\"', 0, 1, '1.00', NULL, NULL, 0, 0),
(17977, 3, 'config_site_maintenance', 'mode', 'maintenancemode', 0, 1, '1.00', NULL, NULL, 0, 0),
(17978, 3, 'config_site_maintenance', 'config_maintenance', '0', 0, 1, '1.00', NULL, NULL, 0, 0),
(17979, 3, 'config_site_maintenance', 'config_site_maintenance_message', '\"We are sorry for any inconvenience. www.ecomjewellery.com is under maintenance mode.\"', 0, 1, '1.00', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wti_process_cost`
--

DROP TABLE IF EXISTS `wti_process_cost`;
CREATE TABLE `wti_process_cost` (
  `id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL DEFAULT 0,
  `domain` int(11) NOT NULL DEFAULT 1,
  `default_flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `wti_process_cost`
--

TRUNCATE TABLE `wti_process_cost`;
--
-- Dumping data for table `wti_process_cost`
--

INSERT INTO `wti_process_cost` (`id`, `percentage`, `domain`, `default_flag`) VALUES
(1, 0, 1, 1),
(2, 30, 2, 0),
(3, 50, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_web_tokenid`
--
ALTER TABLE `admin_web_tokenid`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tokenid` (`tokenid`);

--
-- Indexes for table `carryboy_dailylogs`
--
ALTER TABLE `carryboy_dailylogs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `cart_master`
--
ALTER TABLE `cart_master`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `cms_faq`
--
ALTER TABLE `cms_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `coupon_history`
--
ALTER TABLE `coupon_history`
  ADD PRIMARY KEY (`coupon_history_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `uuid` (`uuid`);

--
-- Indexes for table `customer_ip`
--
ALTER TABLE `customer_ip`
  ADD PRIMARY KEY (`customer_ip_id`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`customer_login_id`),
  ADD KEY `email` (`email`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `customer_search`
--
ALTER TABLE `customer_search`
  ADD PRIMARY KEY (`customer_search_id`);

--
-- Indexes for table `customer_shipping_address`
--
ALTER TABLE `customer_shipping_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`user_id`);

--
-- Indexes for table `customer_transaction_history`
--
ALTER TABLE `customer_transaction_history`
  ADD PRIMARY KEY (`customer_transaction_id`);

--
-- Indexes for table `customer_wishlist`
--
ALTER TABLE `customer_wishlist`
  ADD PRIMARY KEY (`customer_id`,`product_id`);

--
-- Indexes for table `domianslist`
--
ALTER TABLE `domianslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_credentials_front`
--
ALTER TABLE `login_credentials_front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_banner`
--
ALTER TABLE `master_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_city`
--
ALTER TABLE `master_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_district`
--
ALTER TABLE `master_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_order_status`
--
ALTER TABLE `master_order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indexes for table `master_province`
--
ALTER TABLE `master_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_zone`
--
ALTER TABLE `master_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_master`
--
ALTER TABLE `media_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`id`),
  ADD KEY `product_id_2` (`id`);

--
-- Indexes for table `m_address`
--
ALTER TABLE `m_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `m_country`
--
ALTER TABLE `m_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `m_language`
--
ALTER TABLE `m_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_order`
--
ALTER TABLE `m_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `m_order_status`
--
ALTER TABLE `m_order_status`
  ADD PRIMARY KEY (`order_status_id`,`language_id`);

--
-- Indexes for table `m_tax_class`
--
ALTER TABLE `m_tax_class`
  ADD PRIMARY KEY (`tax_class_id`);

--
-- Indexes for table `m_tax_rate`
--
ALTER TABLE `m_tax_rate`
  ADD PRIMARY KEY (`tax_rate_id`);

--
-- Indexes for table `m_tax_rule`
--
ALTER TABLE `m_tax_rule`
  ADD PRIMARY KEY (`tax_rule_id`);

--
-- Indexes for table `m_weight_class`
--
ALTER TABLE `m_weight_class`
  ADD PRIMARY KEY (`weight_class_id`);

--
-- Indexes for table `m_zone`
--
ALTER TABLE `m_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `m_zone_to_geo_zone`
--
ALTER TABLE `m_zone_to_geo_zone`
  ADD PRIMARY KEY (`zone_to_geo_zone_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_history_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_total`
--
ALTER TABLE `order_total`
  ADD PRIMARY KEY (`order_total_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `name` (`name`),
  ADD KEY `slug_name` (`slug_name`),
  ADD KEY `sort_order` (`sort_order`),
  ADD KEY `status` (`status_flag`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images_temp`
--
ALTER TABLE `product_images_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Indexes for table `product_master_price`
--
ALTER TABLE `product_master_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_order`
--
ALTER TABLE `review_order`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_product`
--
ALTER TABLE `review_product`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `site_acc_right_master`
--
ALTER TABLE `site_acc_right_master`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `site_email_template_master`
--
ALTER TABLE `site_email_template_master`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `email_id` (`email_id`);

--
-- Indexes for table `site_notifications`
--
ALTER TABLE `site_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_id` (`id`);

--
-- Indexes for table `t_login_logs`
--
ALTER TABLE `t_login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_notification_admin`
--
ALTER TABLE `t_notification_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_notification_send`
--
ALTER TABLE `t_notification_send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_tokenid`
--
ALTER TABLE `user_tokenid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wti_banners`
--
ALTER TABLE `wti_banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `wti_cms_pages`
--
ALTER TABLE `wti_cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wti_meta_tags`
--
ALTER TABLE `wti_meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wti_m_address`
--
ALTER TABLE `wti_m_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wti_m_setting`
--
ALTER TABLE `wti_m_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `wti_process_cost`
--
ALTER TABLE `wti_process_cost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_web_tokenid`
--
ALTER TABLE `admin_web_tokenid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `carryboy_dailylogs`
--
ALTER TABLE `carryboy_dailylogs`
  MODIFY `logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `cart_master`
--
ALTER TABLE `cart_master`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_faq`
--
ALTER TABLE `cms_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon_history`
--
ALTER TABLE `coupon_history`
  MODIFY `coupon_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_ip`
--
ALTER TABLE `customer_ip`
  MODIFY `customer_ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `customer_login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_search`
--
ALTER TABLE `customer_search`
  MODIFY `customer_search_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_shipping_address`
--
ALTER TABLE `customer_shipping_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_transaction_history`
--
ALTER TABLE `customer_transaction_history`
  MODIFY `customer_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domianslist`
--
ALTER TABLE `domianslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_credentials`
--
ALTER TABLE `login_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_credentials_front`
--
ALTER TABLE `login_credentials_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_banner`
--
ALTER TABLE `master_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_city`
--
ALTER TABLE `master_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_district`
--
ALTER TABLE `master_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `master_order_status`
--
ALTER TABLE `master_order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `master_province`
--
ALTER TABLE `master_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `master_zone`
--
ALTER TABLE `master_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `media_master`
--
ALTER TABLE `media_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_address`
--
ALTER TABLE `m_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_country`
--
ALTER TABLE `m_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_language`
--
ALTER TABLE `m_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_order`
--
ALTER TABLE `m_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_order_status`
--
ALTER TABLE `m_order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `m_tax_class`
--
ALTER TABLE `m_tax_class`
  MODIFY `tax_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `m_tax_rate`
--
ALTER TABLE `m_tax_rate`
  MODIFY `tax_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `m_tax_rule`
--
ALTER TABLE `m_tax_rule`
  MODIFY `tax_rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `m_weight_class`
--
ALTER TABLE `m_weight_class`
  MODIFY `weight_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_zone`
--
ALTER TABLE `m_zone`
  MODIFY `zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4344;

--
-- AUTO_INCREMENT for table `m_zone_to_geo_zone`
--
ALTER TABLE `m_zone_to_geo_zone`
  MODIFY `zone_to_geo_zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `order_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_total`
--
ALTER TABLE `order_total`
  MODIFY `order_total_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_images_temp`
--
ALTER TABLE `product_images_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_master_price`
--
ALTER TABLE `product_master_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `review_order`
--
ALTER TABLE `review_order`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_product`
--
ALTER TABLE `review_product`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17268;

--
-- AUTO_INCREMENT for table `site_acc_right_master`
--
ALTER TABLE `site_acc_right_master`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `site_email_template_master`
--
ALTER TABLE `site_email_template_master`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `site_notifications`
--
ALTER TABLE `site_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `t_login_logs`
--
ALTER TABLE `t_login_logs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_notification_admin`
--
ALTER TABLE `t_notification_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_notification_send`
--
ALTER TABLE `t_notification_send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_tokenid`
--
ALTER TABLE `user_tokenid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wti_banners`
--
ALTER TABLE `wti_banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wti_cms_pages`
--
ALTER TABLE `wti_cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wti_meta_tags`
--
ALTER TABLE `wti_meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wti_m_address`
--
ALTER TABLE `wti_m_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wti_m_setting`
--
ALTER TABLE `wti_m_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17980;

--
-- AUTO_INCREMENT for table `wti_process_cost`
--
ALTER TABLE `wti_process_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
