-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 11 2020 г., 17:17
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `surf`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `idadmins` int(11) NOT NULL,
  `username` varchar(122) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`idadmins`, `username`, `password`) VALUES
(7, 'roman', '$2y$10$q/SMBWxTZwZFaMRCf5gd4edMn71L7C50sfclbBPFv7um3dg3g9slS');

-- --------------------------------------------------------

--
-- Структура таблицы `kitesurfing`
--

CREATE TABLE `kitesurfing` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `head2` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `kitesurfing`
--

INSERT INTO `kitesurfing` (`id`, `headline`, `head2`, `description`) VALUES
(1, '13', '13', '31dasd');

-- --------------------------------------------------------

--
-- Структура таблицы `sapsurfing`
--

CREATE TABLE `sapsurfing` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `head2` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sapsurfing`
--

INSERT INTO `sapsurfing` (`id`, `headline`, `head2`, `description`) VALUES
(1, '312asdasdasd', '312', '123asdas');

-- --------------------------------------------------------

--
-- Структура таблицы `surfing`
--

CREATE TABLE `surfing` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `head2` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `surfing`
--

INSERT INTO `surfing` (`id`, `headline`, `head2`, `description`) VALUES
(1, '312asdasd', '312', '123'),
(2, 'афыафы', 'афафы', 'афафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафыафафы');

-- --------------------------------------------------------

--
-- Структура таблицы `wakeboarding`
--

CREATE TABLE `wakeboarding` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `head2` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idadmins`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Индексы таблицы `kitesurfing`
--
ALTER TABLE `kitesurfing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sapsurfing`
--
ALTER TABLE `sapsurfing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `surfing`
--
ALTER TABLE `surfing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wakeboarding`
--
ALTER TABLE `wakeboarding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `idadmins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `kitesurfing`
--
ALTER TABLE `kitesurfing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sapsurfing`
--
ALTER TABLE `sapsurfing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `surfing`
--
ALTER TABLE `surfing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `wakeboarding`
--
ALTER TABLE `wakeboarding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
