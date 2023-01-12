-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 1 月 12 日 23:32
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `school`
--

CREATE TABLE `school` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `e_school` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `j_school` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `h_school` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `school`
--

INSERT INTO `school` (`id`, `name`, `e_school`, `j_school`, `h_school`, `date`) VALUES
(1, '堀　斗真', '奥沢小学校', '向陽中学校', '桜陽高校', '2023-01-09 23:49:31'),
(2, '小樽太郎', '花園小学校', '菁園中学校', '桜陽高校', '2023-01-13 04:24:02'),
(3, 'ジーズ太郎', 'ジーズ小学校', 'ジーズ中学校', 'ジーズ高校', '2023-01-13 04:24:52'),
(4, 'ジーズ花子', 'ジーズ小学校', 'ジーズ中学校', '私立ジーズ女学院', '2023-01-13 04:25:25');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `school`
--
ALTER TABLE `school`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
