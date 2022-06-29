-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 مايو 2022 الساعة 11:32
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqsa`
--

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `Comment_id` int(11) NOT NULL,
  `text_comment` varchar(255) NOT NULL,
  `Created_at_comment` varchar(255) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`Comment_id`, `text_comment`, `Created_at_comment`, `User_id`, `Post_id`) VALUES
(1, 'jjjj', '2022-05-16 05:58:58pm', 2, 42),
(2, 'kjlkjnkljnlkn', '13/5/2022', 2, 40),
(3, ' 1234 ', ' 2022-05-19 10:15:09am ', 2, 40),
(4, ' 1234 ', ' 2022-05-19 10:15:10am ', 2, 42),
(5, ' jjkkjkjnkj ', ' 2022-05-19 01:16:24pm ', 2, 32),
(6, ' jjkkjkjnkj ', ' 2022-05-19 01:16:24pm ', 2, 33),
(7, ' jjkkjkjnkj ', ' 2022-05-19 01:16:25pm ', 2, 37),
(8, ' jjkkjkjnkj ', ' 2022-05-19 01:16:25pm ', 2, 39),
(9, ' jjkkjkjnkj ', ' 2022-05-19 01:16:26pm ', 2, 40),
(10, ' jjkkjkjnkj ', ' 2022-05-19 01:16:26pm ', 2, 41),
(11, ' jjkkjkjnkj ', ' 2022-05-19 01:16:26pm ', 2, 42),
(12, ' link ', ' 2022-05-20 02:11:44pm ', 2, 40),
(13, ' kh ', ' 2022-05-20 02:52:38pm ', 2, 32),
(14, ' lll ', ' 2022-05-20 02:54:43pm ', 2, 32),
(15, ' pop ', ' 2022-05-22 09:58:58pm ', 2, 32),
(16, ' pip ', ' 2022-05-22 10:12:32pm ', 3, 43),
(18, ' uu ', ' 2022-05-22 10:47:01pm ', 3, 39),
(19, ' pyp ', ' 2022-05-22 10:54:23pm ', 2, 43),
(20, '  ', ' 2022-05-23 09:37:01am ', 2, 43),
(21, ' hhhhh ', ' 2022-05-26 09:25:19pm ', 3, 44),
(22, ' pppppp ', ' 2022-05-27 11:12:59am ', 2, 32);

-- --------------------------------------------------------

--
-- بنية الجدول `posts`
--

CREATE TABLE `posts` (
  `Post_Id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `picturePost` varchar(255) NOT NULL,
  `Create_at` varchar(255) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `posts`
--

INSERT INTO `posts` (`Post_Id`, `text`, `picturePost`, `Create_at`, `User_id`) VALUES
(32, '                         Type your post here...\r\n                     ', ' img/qw.png ', ' 2022-05-16 05:58:58pm ', 2),
(33, '                         Type your post here...\r\n                     ', ' img/qw.png ', ' 2022-05-16 05:59:21pm ', 2),
(37, '                         Type your post here...\r\n                     ', ' img/qwe.png ', ' 2022-05-16 07:07:27pm ', 2),
(39, '                         Type your post here...\r\n                     ', ' img/qw.png ', ' 2022-05-16 07:08:27pm ', 2),
(40, '                     \r\n                    llklklkl ', ' img/qw.png ', ' 2022-05-17 10:26:00pm ', 2),
(41, '                     \r\n                    llklklkl ', ' img/qw.png ', ' 2022-05-17 10:26:49pm ', 2),
(42, '                     \r\n                    kkkki ', ' img/ ', ' 2022-05-17 10:30:45pm ', 2),
(43, '                     \r\n                     ', ' img/tyu.png ', ' 2022-05-22 10:10:05pm ', 3),
(44, '                     \r\n                     ', ' img/qwe.png ', ' 2022-05-26 09:23:05pm ', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `Id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`Id`, `name`, `email`, `pass`, `mobile`, `picture`) VALUES
(2, '124', 'hhhh@77', '111111', '09876543', 'img/man.jpg '),
(3, '1234', '1234@456', '1234567', '12345', 'img/kali.png'),
(51, ' iiii ', ' hhhh@7p ', ' 1234567 ', ' 06789543 ', ' img/qw.png '),
(53, ' 123456 ', ' hhhh@7o ', ' 111111 ', ' 4567890 ', ' img/kali.png '),
(55, ' 123456 ', ' hhhh@7u ', ' 123456 ', ' 4567890 ', ' img/qwe.png '),
(57, ' khg ', ' 12345@6 ', ' 1234567 ', ' 123456 ', ' img/password.jpg '),
(72, ' kkk ', ' hhhh@99 ', ' 111111 ', ' 069987898', ' img/w.png '),
(73, ' 1234567 ', ' kh@123.com ', ' 090909 ', ' 1234567 ', ' img/qwert.png '),
(74, ' 1234567 ', ' kh@123 ', ' 090909 ', ' 123456 ', ' img/qw.png '),
(75, ' 1234 ', ' hhhh@74 ', ' 12345678 ', ' 123456 ', ' img/qwe.png ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Post_id` (`Post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_Id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`Post_id`) REFERENCES `posts` (`Post_Id`);

--
-- القيود للجدول `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
