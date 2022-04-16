-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 16 2022 г., 22:29
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myweb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `date`
--

CREATE TABLE `date` (
  `id` int(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `street` varchar(30) NOT NULL,
  `house` varchar(5) NOT NULL,
  `coord` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `date`
--

INSERT INTO `date` (`id`, `city`, `street`, `house`, `coord`, `text`) VALUES
(82, 'Nur-sultan', 'кабанбай батыра ', '60а/6', '51.091937,71.405312', ''),
(83, 'Nur-sultan', 'кабанбай батыра ', '60а/1', '51.092519,71.40498', '');

-- --------------------------------------------------------

--
-- Структура таблицы `upload`
--

CREATE TABLE `upload` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `upload`
--

INSERT INTO `upload` (`id`, `name`) VALUES
(26, 'ps_act_550846.pdf'),
(28, 'j.ijpe.2014.09.005.pdf'),
(29, 'j.ijpe.2014.09.005.pdf'),
(30, 's0263-2373(00)00029-3.pdf'),
(31, 'j.procs.2017.05.379.pdf'),
(32, 'j.ijpe.2014.09.005.pdf'),
(33, '??_???????_???? (1).docx');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `date`
--
ALTER TABLE `date`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
