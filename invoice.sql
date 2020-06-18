-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award_number`
--

CREATE TABLE `award_number` (
  `id` int(10) UNSIGNED NOT NULL,
  `period` int(3) NOT NULL COMMENT '期數',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '獎項',
  `year` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票年份',
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票號碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_number`
--

INSERT INTO `award_number` (`id`, `period`, `type`, `year`, `number`) VALUES
(1, 1, '1', '109', '12620024'),
(2, 1, '2', '109', '39793895'),
(3, 1, '3', '109', '67913945'),
(4, 1, '3', '109', '09954061'),
(5, 1, '3', '109', '54574947'),
(6, 1, '4', '109', '007'),
(7, 1, '4', '109', ''),
(8, 1, '4', '109', ''),
(9, 2, '1', '109', '91911374'),
(10, 2, '2', '109', '08501338'),
(11, 2, '3', '109', '57161318'),
(12, 2, '3', '109', '23570653'),
(13, 2, '3', '109', '47332279'),
(14, 2, '4', '109', '519'),
(15, 2, '4', '109', ''),
(16, 2, '4', '109', '');

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `period` tinyint(3) UNSIGNED NOT NULL COMMENT '期數',
  `year` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票年份',
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文流水號',
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票號碼',
  `expend` int(6) UNSIGNED NOT NULL COMMENT '消費金額'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoice`
--

INSERT INTO `invoice` (`id`, `period`, `year`, `code`, `number`, `expend`) VALUES
(1, 3, '109', 'YH', '55457841', 23),
(2, 2, '109', 'JL', '54684388', 55),
(3, 1, '109', 'HI', '88852522', 5),
(4, 4, '109', 'YH', '48458456', 55),
(5, 5, '109', 'JL', '55457840', 5),
(6, 6, '109', 'YH', '55457845', 5),
(11, 5, '109', 'TT', '55457849', 9),
(13, 1, '109', 'OO', '56482848', 5),
(14, 3, '109', 'YH', '55457840', 5),
(15, 3, '109', 'TY', '93339845', 12),
(16, 3, '109', 'DD', '83390355', 0),
(17, 3, '109', 'OO', '83390355', 4),
(18, 2, '109', 'OO', '13131313', 55),
(19, 2, '109', 'YH', '55457841', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `reward_record`
--

CREATE TABLE `reward_record` (
  `id` int(10) UNSIGNED NOT NULL,
  `period` tinyint(3) UNSIGNED NOT NULL COMMENT '期數',
  `year` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票年份',
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文流水號',
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票號碼',
  `expend` int(6) UNSIGNED NOT NULL COMMENT '消費金額'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_number`
--
ALTER TABLE `award_number`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `reward_record`
--
ALTER TABLE `reward_record`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_number`
--
ALTER TABLE `award_number`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reward_record`
--
ALTER TABLE `reward_record`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
