-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2020 г., 13:21
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sitetest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appraisals`
--

CREATE TABLE `appraisals` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(10) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `course` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `course`, `teacher_id`) VALUES
(1, 'К417ПИ', 4, 1),
(2, 'К318ПИ', 3, 3),
(3, 'К219ПИ', 2, 4),
(4, 'К120ПИ', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `regusers`
--

CREATE TABLE `regusers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `regusers`
--

INSERT INTO `regusers` (`id`, `name`, `pass`, `role`) VALUES
(1, 'admin', '12345', 1),
(2, 'user', '12345', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `full_name`) VALUES
(4, 'Математика', 'Губин'),
(5, 'Русский язык', 'Бабин'),
(6, 'География', 'Рукин');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `full_name`) VALUES
(1, 'Даниелян С.С.'),
(2, 'Черникова Е.Н.'),
(3, 'Даниелян Д.Г.'),
(4, 'Лысенко И.М.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `group_id`, `name`, `surname`, `age`) VALUES
(1, 4, 'Роман', 'Поздняков', 90),
(2, 2, 'Роман', 'Поздняков', 98),
(3, 1, 'Данил', 'Шаларь', 14),
(4, 4, 'Дмитрий', 'Богатырев', 13),
(5, 3, 'Саркис', 'Даниелян', 100),
(6, 3, 'Александр', 'Катунин', 99),
(7, 1, 'Александр', 'Буханцов', 24),
(9, 3, 'Александр', 'Катунин', 235),
(10, 2, 'Александр', 'Катунин', 235),
(11, 1, 'Александр', 'Катунин', 235),
(12, 4, 'Александр', 'Катунин', 235),
(16, 1, 'Александр', 'Буханцов', 124),
(18, 4, 'Максим', 'Купин', 300),
(19, 2, 'Александр', 'Буханцов', 34),
(20, 2, 'Максим', 'Катунин', 45);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appraisals`
--
ALTER TABLE `appraisals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `regusers`
--
ALTER TABLE `regusers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appraisals`
--
ALTER TABLE `appraisals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `regusers`
--
ALTER TABLE `regusers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
