-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 13 2023 г., 12:52
-- Версия сервера: 5.5.50-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `simada`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `date`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '15.02.2023 10:02', 'asasdasd', '21312312312313', 'asd@asd.com', NULL, NULL),
(2, '15.02.2023 12:02', 'test', '7162387126386', 'asd@asd.com', NULL, NULL),
(3, '15.02.2023 14:02', 'test', '71263812368', 'asd@asd.com', NULL, NULL),
(4, '15.02.2023 15:02', 'asdasd', '123123123123', 'asdasd@asd.com', NULL, NULL),
(5, '15.02.2023 17:02', 'asd', '123123123123', 'asd@asd.com', NULL, NULL),
(6, '15.02.2023 16:02', 'asdasdad', '123123123123', 'asd@asd.com', NULL, NULL),
(7, '17.02.2023 09:02', 'asdasdasd', '123123123123', 'asd@asd.com', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
