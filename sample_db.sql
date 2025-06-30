-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2025 年 6 月 30 日 06:30
-- サーバのバージョン： 8.0.35
-- PHP のバージョン: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sample_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `isbn` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `publish` date NOT NULL,
  `author` varchar(80) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `price`, `publish`, `author`) VALUES
(1, 'PHPの本', '9994295001249', 980, '2024-09-01', '佐藤'),
(2, 'XAMPPの本', '9994295001250', 1980, '2024-05-29', '鈴木'),
(3, 'MdNの本', '9994295001251', 580, '2024-04-30', '高橋'),
(4, '2024年の本', '9994295001251', 1300, '2024-01-01', '田中'),
(5, 'データベースの本', '1234567890123', 2200, '2025-06-02', '田中'),
(8, 'テスト書籍名', '0123456789012', 2600, '2024-02-28', '柏岡'),
(10, 'ボボボーボ・ボーボボ', '9684088731384', 408, '2001-07-01', '澤井 啓夫'),
(15, 'ダンダダン', '9784088825991', 528, '2021-08-04', '龍 幸伸'),
(16, 'OMORI', '9784065377826', 836, '2024-11-21', '此糸 縫'),
(17, '約束のネバーランド', '9784088808727', 484, '2016-12-02', '白井 カイウ');

-- --------------------------------------------------------

--
-- テーブルの構造 `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `affiliation` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `members`
--

INSERT INTO `members` (`id`, `affiliation`, `name`, `age`) VALUES
(1, '嵐', '相葉 雅紀', 42),
(2, '嵐', '松本 潤', 41),
(3, 'BTS', 'ジン', 32),
(4, 'BTS', 'ジョングク', 27),
(5, 'TWICE', 'ナヨン', 29);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'mdnuser', '$2y$10$kL5c8KhlSQV.2UVvszE9eePJTQmaDvFlb/X3SsCrkSiaumfPyE8ju');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- テーブルの AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
