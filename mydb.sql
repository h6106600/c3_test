-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'hIqTi', 'k6FDLIhzgTiVWJcyGqnHrwlp4', '2020-02-05 17:28:31'),
(2, 'aYdcW', 'hZcLoK9aeM32plRUEPxFHqS1k', '2020-02-05 17:28:31'),
(3, 'coBGf', 'OyExjZBdQtAhvaHVLTqMJpCb5', '2020-02-05 17:28:31'),
(4, 'DauQ7', 'XwrY9JA18fM0mnl5bvEOshNFx', '2020-02-05 17:28:31'),
(5, '3p4wH', 'SeYFPXJmhoNI0BD5O49CixdrKjcvRkwQp3GM', '2020-02-05 17:33:51'),
(6, 'Jq7iZ', 'eGmtqSnAKH2I19dioR7a4xfLXVh3PjNQJbkY', '2020-02-05 17:33:51'),
(7, 'W8zLa', 'iGMx1zASmOdg3F5YqXR4Kktjuy67nUeNwI2B', '2020-02-05 17:33:51'),
(8, 'CwEYk', 'mWIKhA9ZJ5FXB6GfTrSjUediOL1ln2cutNCQ', '2020-02-05 17:33:51'),
(9, 'omBvw', '8B7hQ9ZbLcgFtiWVpu3451NUjEzXRHKOYMyS', '2020-02-05 17:35:04'),
(10, 'aifSG', 'cMhgbr1BvtN2nGquZL4HOj9JVFCKz8U3pDSy', '2020-02-05 17:35:04'),
(11, 'PIsJ3', 'cq40n7Ey3Ds62HXSimbuMoYRA9TFNvI5QWKP', '2020-02-05 17:35:04'),
(12, 'sD8rp', '7tnHjyu0rE2kXoMR5V1P43aWxvNeO6YpqCgl', '2020-02-05 17:35:04'),
(13, 'Bmgv9', 'a1gR3YPGmSkAiCDr9I7J4VLOlejWpwuZ6yqb', '2020-02-05 18:11:03'),
(14, 'xOVbf', 'xMndwEl8iDW1RYZATCI5LbkJKcGs9mV3vgfP', '2020-02-05 18:11:03'),
(15, 'LZomh', 'gwXmQzayR6PJ5H1s4iKEZfD8nrbvLI7u3xGS', '2020-02-05 18:11:03'),
(16, 'geAKG', 'nDsTBX3k8xLbKMGgPhF7OIm4oJaY91Vz5Ul6', '2020-02-05 18:11:03'),
(17, 'NZzX6', 'VBHt3rJmWed1SO46Xx5pQuGzoanhPwClfvT9', '2020-02-05 18:22:21'),
(18, 'C0B5o', 'kgvo0ij3HATxCIZVnr2QDN46JSY5RGqsezXK', '2020-02-05 18:22:21'),
(19, 'xICh0', '5Ogn9YiExrRLJzCQwcTt7GDKXqvPS2lUdIy1', '2020-02-05 18:22:21'),
(20, 'bSuAR', 'GjrQRbyEDSJKPTuXWpt6Bg85Nvoelhm0FCAs', '2020-02-05 18:22:21');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
