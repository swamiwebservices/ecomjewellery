-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 05:05 AM
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
  `pro_id` int(11) DEFAULT NULL,
  `cart_qty` int(11) DEFAULT 1,
  `date_added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cart_master`
--

TRUNCATE TABLE `cart_master`;
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
(1, 'ecome.in'),
(2, 'ecome.com'),
(3, 'ecome.ae');

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
(1, 1, '2ee14882-6e0b-4cc0-be4c-b011b9f23873', 'S', 'admin@gmail.com', 'admin', 'admin', 'admin', 'Active', 0, 'yMAe3', 1665829103, '127.0.0.1', '2022-10-15 17:18:23', NULL),
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
-- Table structure for table `order_history`
--

DROP TABLE IF EXISTS `order_history`;
CREATE TABLE `order_history` (
  `order_history_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_status_id` int(5) DEFAULT NULL,
  `notify` tinyint(1) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `date_added` datetime DEFAULT '0000-00-00 00:00:00',
  `driver_id` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `order_history`
--

TRUNCATE TABLE `order_history`;
-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

DROP TABLE IF EXISTS `order_master`;
CREATE TABLE `order_master` (
  `order_id` int(11) NOT NULL,
  `oorder_uid` varchar(150) DEFAULT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `uuid` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'this is take bcz to recird order place by which device',
  `email` varchar(96) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_firstname` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_lastname` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_company` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_address_1` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_state_name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_postcode` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_state_id` int(11) DEFAULT 0,
  `payment_district_id` int(11) DEFAULT 0,
  `payment_district_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_firstname` varchar(200) DEFAULT NULL,
  `shipping_lastname` varchar(200) DEFAULT NULL,
  `shipping_company` varchar(200) DEFAULT NULL,
  `shipping_address_1` varchar(500) DEFAULT NULL,
  `shipping_postcode` varchar(10) DEFAULT NULL,
  `shipping_state_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_state_id` int(11) DEFAULT 0,
  `shipping_district_id` int(11) DEFAULT 0,
  `shipping_district_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_longitude` varchar(15) DEFAULT NULL,
  `shipping_latitude` varchar(15) DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `order_status_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `return_payment_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'common column for all payment getway',
  `return_payment_txn_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'common column for all payment getway',
  `return_payment_data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'common column for all payment getway',
  `cancel_order_req` tinyint(3) NOT NULL DEFAULT 0,
  `cancel_order_req_date` date NOT NULL,
  `total_tax` int(11) NOT NULL DEFAULT 0,
  `tax_percentage` int(11) NOT NULL DEFAULT 0,
  `all_done` int(11) DEFAULT 0,
  `coupon_code` varchar(10) DEFAULT NULL,
  `coupon_type` varchar(2) DEFAULT NULL,
  `coupon_discount` decimal(10,2) DEFAULT NULL,
  `credit_pay_date` date DEFAULT NULL,
  `coupon_discount_amt` decimal(10,4) NOT NULL DEFAULT 0.0000,
  `driver_id` int(11) DEFAULT 0,
  `delivery_time` varchar(30) DEFAULT NULL,
  `order_delivery_date_expected` datetime DEFAULT NULL COMMENT 'will be used for expected and real deliver date time',
  `parent_id` int(11) DEFAULT 0,
  `complete_date` datetime DEFAULT NULL,
  `credit_pay_status` varchar(10) DEFAULT NULL COMMENT 'Paid,UnPaid',
  `credit_paid_date` date DEFAULT NULL,
  `accepted_by_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `accepted_by_mobile` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `order_master`
--

TRUNCATE TABLE `order_master`;
-- --------------------------------------------------------

--
-- Table structure for table `order_master_temp`
--

DROP TABLE IF EXISTS `order_master_temp`;
CREATE TABLE `order_master_temp` (
  `order_id` int(11) NOT NULL,
  `oorder_uid` varchar(200) DEFAULT NULL,
  `transaction_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `uuid` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(96) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_firstname` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_lastname` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_company` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_address_1` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_address_2` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_city` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_postcode` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_country` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_country_id` int(11) DEFAULT 93,
  `payment_state` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_state_id` int(11) NOT NULL,
  `payment_method` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_firstname` varchar(200) DEFAULT NULL,
  `shipping_lastname` varchar(200) DEFAULT NULL,
  `shipping_company` varchar(200) DEFAULT NULL,
  `shipping_address_1` varchar(500) DEFAULT NULL,
  `shipping_address_2` varchar(500) DEFAULT NULL,
  `shipping_postcode` varchar(10) DEFAULT NULL,
  `shipping_city` varchar(150) DEFAULT NULL,
  `shipping_state_id` int(11) DEFAULT NULL,
  `shipping_state` varchar(50) DEFAULT NULL,
  `shipping_country_id` int(11) DEFAULT NULL,
  `shipping_country` varchar(50) DEFAULT NULL,
  `mobile_other` varchar(15) DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_total` decimal(10,4) DEFAULT NULL,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `order_status_id` int(11) NOT NULL,
  `ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `return_payment_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Failed' COMMENT 'common column for all payment getway',
  `return_payment_txn_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'common column for all payment getway',
  `return_payment_data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'common column for all payment getway',
  `cancel_order_req` tinyint(3) NOT NULL DEFAULT 0,
  `cancel_order_req_date` date NOT NULL,
  `row_data` text DEFAULT NULL,
  `total_tax` decimal(15,4) DEFAULT 0.0000,
  `gst_percentage` decimal(15,4) DEFAULT 0.0000,
  `gst_amount` decimal(15,4) DEFAULT 0.0000,
  `bank_trans_per` decimal(10,2) DEFAULT NULL,
  `bank_trans_amt` decimal(10,4) DEFAULT NULL,
  `all_done` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `order_master_temp`
--

TRUNCATE TABLE `order_master_temp`;
-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product` (
  `order_product_id` int(11) NOT NULL,
  `op_uuid` varchar(150) DEFAULT NULL,
  `shiment_track_id` varchar(150) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `price` decimal(15,4) DEFAULT 0.0000,
  `total` decimal(15,4) DEFAULT 0.0000,
  `delivery_order_status` int(11) DEFAULT 0,
  `deliver_date` datetime DEFAULT NULL,
  `return_payment_status` varchar(50) DEFAULT NULL,
  `return_payment_txn_id` varchar(50) DEFAULT NULL,
  `return_payment_data` text DEFAULT NULL,
  `cancel_order_req` tinyint(3) DEFAULT NULL,
  `cancel_order_req_date` date DEFAULT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `order_product`
--

TRUNCATE TABLE `order_product`;
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
  `code` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `value` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `order_total`
--

TRUNCATE TABLE `order_total`;
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
  `specification` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `product_master`
--

TRUNCATE TABLE `product_master`;
--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `uuid`, `name`, `item_code`, `description`, `main_image`, `mrp`, `sellprice`, `status_flag`, `category_ids`, `category_id`, `sub_category_id`, `featured`, `tags`, `created_at`, `updated_at`, `slug_name`, `logs`, `meta_json`, `price_json`, `quantity`, `views_count`, `sort_order`, `domain2_mrp`, `domain2_sellprice`, `domain3_mrp`, `domain3_sellprice`, `domain2_qty`, `domain3_qty`, `specification`) VALUES
(2, 'd691e867-b913-4043-a0d1-208bc8a2b3ff', '22kt Gold Coin - 8 grams', 'GC008', 'My Motifs presents to you the accurate way to calculate the purity of gold by our newest Victorian gold coins thus making our gold as pure as we say it. This gold coin represents a Victorian motif and weighs 8 grams. The front of the coin shows the portrait while the side has beautifully embellished rims. The high polished finish adds a lustrous appeal to the coin.', 'prod-gc008--front-500x500jpg.jpg', '100.00', '100.00', 'Active', '2,3', 2, 3, 1, NULL, '2022-09-22 00:00:00', '2022-10-08 17:59:32', '22kt-gold-coin--8-grams-1', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"},\"sellprice\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"}}', 1, NULL, '1.00', '130.00', '130.00', '150.00', '150.00', 1, 1, '{\"title\":{\"1\":\"11\",\"2\":\"22\",\"3\":\"33\",\"4\":\"44\",\"5\":\"55\",\"6\":\"66\",\"7\":\"77\"},\"value\":{\"1\":\"11\",\"2\":\"22\",\"3\":\"33\",\"4\":\"44\",\"5\":\"55\",\"6\":\"66\",\"7\":\"77\"}}'),
(3, '22aa6693-599c-4f73-b2d7-f94e3ccd5287', '22KT 25gm', '2225102', 'Description:Silver pooja boxes which are intricately carved are perfect for a heavenly aesthetic.This pooja box can be used for multi purposes like for storing pooja ka prasad or even for tikkas. We love the silver finish which looks extremely beautiful in an oval shape and a blue stone. This is also a beautiful article for gifting and it is the perfect decor piece, a gift for the loved ones, a warm feel !', 'prod-s15343078-1-500x500jpg.jpg', '1000.00', '1000.00', 'Active', '2,3', 2, 3, 1, NULL, '2022-09-22 00:00:00', '2022-10-02 21:50:46', '22kt-25gm-1', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"1000\",\"2\":\"1300\",\"3\":\"1500\"},\"sellprice\":{\"1\":\"1000\",\"2\":\"1300\",\"3\":\"1500\"}}', 1, NULL, '2.00', '1300.00', '1300.00', '1500.00', '1500.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"10gm\",\"2\":\"10cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(4, '5cb349e8-4473-445d-b83d-22d2bb59e136', 'Tassel Inspired Keychain', 'S12317051', 'Description:The perfect types of ornaments and jewels to pair with your bags. They have the power to glam up any bag instantly from our collection. Royal and traditional elements in modern interpretations for your classic soul. This keychain features multiple charms in a variety of colours and different motifs with tassels as an inspiration.', 'prod-s10961499-1-500x500.jpg', '200.00', '200.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-09-23 00:00:00', '2022-10-15 17:18:56', 'tassel-inspired-keychain-3', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"200\",\"2\":\"260\",\"3\":\"300\"},\"sellprice\":{\"1\":\"200\",\"2\":\"260\",\"3\":\"300\"}}', 1, NULL, '1.00', '260.00', '260.00', '300.00', '300.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(5, '239cae1b-2796-4cde-8f9f-2efe0ad7f09b', 'Silver Weave Clutch With Contrasting Colour Stones', 'S10904672', 'Description: A classic pick. Our silver weave clutch with colourful contrasting charms. Featured here is a silver clutch with kundans, turquoise stones, corals and emeralds. It is the perfect Lajaavab creation as it is unique and one of a kind and features contrasting elements and beautiful woven work. A perfect traditional night  deserves a perfect bag. This bag is perfect for all kinds of traditional functions and it can instantly amp up your outfit. This bag is the epitome of multiuse featuring a pretty bag as well as convenience. Slay the night with this pretty masterpiece.', 'prod-s10904672-1-500x500.jpg', '300.00', '300.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-09-23 00:00:00', '2022-10-15 17:20:34', 'silver-weave-clutch-with-contrasting-colour-stones-2', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"300\",\"2\":\"390\",\"3\":\"450\"},\"sellprice\":{\"1\":\"300\",\"2\":\"390\",\"3\":\"450\"}}', 1, NULL, '1.00', '390.00', '390.00', '450.00', '450.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"10gm\",\"2\":\"10cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(6, 'dd0e8cd9-6994-48b1-bd49-40b807a4ba4c', 'Cup', 'c101', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'prod-simage3.jpg', '500.00', '500.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-10-06 00:00:00', '2022-10-15 17:23:11', 'cup-2', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"500\",\"2\":\"650\",\"3\":\"750\"},\"sellprice\":{\"1\":\"500\",\"2\":\"650\",\"3\":\"750\"}}', 1, NULL, '1.00', '650.00', '650.00', '750.00', '750.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"10gm\",\"2\":\"10cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(7, '9bf8fe0e-596c-411d-a927-adf03af6b5c9', 'Cup Silver', 'C102', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'prod-simage4.jpg', '100.00', '100.00', 'Active', '6,11', 6, 11, 1, NULL, '2022-10-06 00:00:00', NULL, 'cup-silver', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"},\"sellprice\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"}}', 1, NULL, '1.00', '130.00', '130.00', '150.00', '150.00', 1, 1, '{\"title\":{\"1\":\"Weight\",\"2\":\"width\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"25gm\",\"2\":\"15cm\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(8, 'ed39b3c9-06e5-4fcc-a12b-933c0a8f89c1', 'Tassel Inspired Keychain1', '91025', 'Description:The perfect types of ornaments and jewels to pair with your bags. They have the power to glam up any bag instantly from our collection. Royal and traditional elements in modern interpretations for your classic soul. This keychain features multiple charms in a variety of colours and different motifs with tassels as an inspiration.', 'prod-simage6.jpg', '100.00', '100.00', 'Active', '6,7', 6, 7, 1, NULL, '2022-10-09 00:00:00', '2022-10-15 17:19:41', 'tassel-inspired-keychain1-1', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"},\"sellprice\":{\"1\":\"100\",\"2\":\"130\",\"3\":\"150\"}}', 1, NULL, '1.00', '130.00', '130.00', '150.00', '150.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(9, '62eee9bb-08cb-4f8c-b511-19f46352737d', 'Tassel Inspired Keychain3', '45621', 'Description:The perfect types of ornaments and jewels to pair with your bags. They have the power to glam up any bag instantly from our collection. Royal and traditional elements in modern interpretations for your classic soul. This keychain features multiple charms in a variety of colours and different motifs with tassels as an inspiration.', 'prod-s10961499-1-500x500.jpg', '250.00', '250.00', 'Active', '6,10', 6, 10, 1, NULL, '2022-10-09 00:00:00', NULL, 'tassel-inspired-keychain3', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"250\",\"2\":\"325\",\"3\":\"375\"},\"sellprice\":{\"1\":\"250\",\"2\":\"325\",\"3\":\"375\"}}', 1, NULL, '1.00', '325.00', '325.00', '375.00', '375.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(10, '964bf422-cb5e-43b2-9e95-d8f6c621e849', 'Silver Weave Clutch With Contrasting Colour Stones', '12346', 'Description: A classic pick. Our silver weave clutch with colourful contrasting charms. Featured here is a silver clutch with kundans, turquoise stones, corals and emeralds. It is the perfect Lajaavab creation as it is unique and one of a kind and features contrasting elements and beautiful woven work. A perfect traditional night  deserves a perfect bag. This bag is perfect for all kinds of traditional functions and it can instantly amp up your outfit. This bag is the epitome of multiuse featuring a pretty bag as well as convenience. Slay the night with this pretty masterpiece.', 'prod-s10904672-1-500x500.jpg', '450.00', '450.00', 'Active', '5,9', 5, 9, 1, NULL, '2022-10-09 00:00:00', '2022-10-15 17:20:02', 'silver-weave-clutch-with-contrasting-colour-stones-2', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"450\",\"2\":\"585\",\"3\":\"675\"},\"sellprice\":{\"1\":\"450\",\"2\":\"585\",\"3\":\"675\"}}', 1, NULL, '1.00', '585.00', '585.00', '675.00', '675.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}'),
(11, 'd497e0e0-80c9-4d3e-94d9-e0bc217f67e5', '22kt Gold Coin - 8 gram', '133', 'My  to you the accurate way to calculate the purity of gold by our newest Victorian gold coins thus making our gold as pure as we say it. This gold coin represents a Victorian motif and weighs 8 grams. The front of the coin shows the portrait while the side has beautifully embellished rims. The high polished finish adds a lustrous appeal to the coin.', 'prod-gc008--front-500x500.jpg', '451.00', '451.00', 'Active', '5,9', 5, 9, 1, NULL, '2022-10-09 00:00:00', '2022-10-15 17:20:21', '22kt-gold-coin--8-gram-2', NULL, NULL, '{\"quantity\":{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\"},\"mrp\":{\"1\":\"451\",\"2\":\"586\",\"3\":\"676\"},\"sellprice\":{\"1\":\"451\",\"2\":\"586\",\"3\":\"676\"}}', 1, NULL, '1.00', '586.00', '586.00', '676.00', '676.00', 1, 1, '{\"title\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"},\"value\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\"}}');

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
(7, 4, 1, '200.00', '200.00', 1, NULL, NULL, NULL),
(8, 4, 2, '260.00', '260.00', 1, NULL, NULL, NULL),
(9, 4, 3, '300.00', '300.00', 1, NULL, NULL, NULL),
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
-- Table structure for table `user_master_front`
--

DROP TABLE IF EXISTS `user_master_front`;
CREATE TABLE `user_master_front` (
  `user_id` bigint(20) NOT NULL,
  `uuid` varchar(524) DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `enterprise_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bo_ice_id` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT 'Male',
  `profile_pic` varchar(50) DEFAULT NULL,
  `address_1` text DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `postcode` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `business_type` enum('General','Enterprise','Branch') DEFAULT 'General',
  `qr_code` varchar(250) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `edit_date` datetime DEFAULT NULL,
  `status` enum('Active','Inactive','Delete') DEFAULT 'Inactive',
  `user_type` enum('CUST','DRI','SEC','CMAN') DEFAULT NULL,
  `passphrase` varchar(20) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `is_login` tinyint(4) DEFAULT 0,
  `shop_logos` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_language` char(2) DEFAULT NULL,
  `push_notification` int(11) NOT NULL DEFAULT 1,
  `credit_limit` int(11) DEFAULT 100000,
  `credit_limit_status` enum('Active','Inactive') DEFAULT 'Active',
  `dri_identy_card` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dri_bank_account` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `age` int(11) DEFAULT 0,
  `access_token` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `user_master_front`
--

TRUNCATE TABLE `user_master_front`;
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
-- Indexes for table `m_language`
--
ALTER TABLE `m_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_history_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_master_temp`
--
ALTER TABLE `order_master_temp`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_product_id`);

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
-- Indexes for table `user_master_front`
--
ALTER TABLE `user_master_front`
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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `m_language`
--
ALTER TABLE `m_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `order_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_master_temp`
--
ALTER TABLE `order_master_temp`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_total`
--
ALTER TABLE `order_total`
  MODIFY `order_total_id` int(10) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `user_master_front`
--
ALTER TABLE `user_master_front`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT;

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
