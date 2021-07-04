-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.215:3306
-- Время создания: Июл 02 2021 г., 18:54
-- Версия сервера: 10.3.27-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shalser82_shestakov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `author`) VALUES
(1, 'Максим Дорофеев'),
(2, 'Александр Макаров'),
(3, 'noname'),
(4, 'фывп');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(25, 'car'),
(26, 'moto'),
(27, 'dog'),
(28, 'cat');

-- --------------------------------------------------------

--
-- Структура таблицы `compliance_table_material_type`
--

CREATE TABLE `compliance_table_material_type` (
  `id` int(11) NOT NULL,
  `id_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `compliance_table_material_type`
--

INSERT INTO `compliance_table_material_type` (`id`, `id_type`, `type`) VALUES
(1, '16', 'Книги'),
(2, '19', 'Статья'),
(3, '17', 'Сайт/Блог');

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `link`) VALUES
(1, 'Электронная версия на litres');

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authors` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `type`, `category`, `title`, `authors`, `description`) VALUES
(16, 'Книги', 'Саморазвитие / Личная эффективность', 'Путь джедая', 'Максим Дорофеев', '1'),
(17, 'Сайт/Блог', 'Разработка / PHP', 'Полное руководство по Yii 2.0', 'Александр Макаров', 'пхп'),
(19, 'Статья', 'Дизайн/Общее', 'Design', 'noname', 'About design');

-- --------------------------------------------------------

--
-- Структура таблицы `material_category`
--

CREATE TABLE `material_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `material_category`
--

INSERT INTO `material_category` (`id`, `category`) VALUES
(1, 'Деловые/Бизнес-процессы'),
(2, 'Деловые/Найм'),
(3, 'Деловые/Реклама'),
(4, 'Деловые/Управление бизнесом'),
(5, 'Деловые/Управление людьми'),
(6, 'Деловые/Управление проектами'),
(7, 'Детские/Воспитание'),
(8, 'Дизайн/Общее'),
(9, 'Дизайн/Logo'),
(10, 'Дизайн/Web дизайн'),
(11, 'Разработка/PHP'),
(12, 'Разработка/HTML и CSS'),
(13, 'Разработка/Проектирование'),
(14, 'Саморазвитие / Личная эффективность'),
(15, 'Разработка / PHP');

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`) VALUES
(1, 'Продуктивность'),
(13, 'intresting'),
(14, 'health');

-- --------------------------------------------------------

--
-- Структура таблицы `type_materials`
--

CREATE TABLE `type_materials` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_materials`
--

INSERT INTO `type_materials` (`id`, `type`) VALUES
(1, 'Книги'),
(2, 'Статья'),
(3, 'Видео'),
(4, 'Сайт/Блог'),
(5, 'Подборка'),
(6, 'Ключевые идеи книги');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `compliance_table_material_type`
--
ALTER TABLE `compliance_table_material_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `material_category`
--
ALTER TABLE `material_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_materials`
--
ALTER TABLE `type_materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `compliance_table_material_type`
--
ALTER TABLE `compliance_table_material_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `material_category`
--
ALTER TABLE `material_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `type_materials`
--
ALTER TABLE `type_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
