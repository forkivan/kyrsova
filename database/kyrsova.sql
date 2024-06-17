-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 17 2024 г., 21:09
-- Версия сервера: 5.7.24
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kyrsova`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `likar_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `day_of_week` varchar(10) NOT NULL,
  `posluga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `likar_id`, `appointment_date`, `appointment_time`, `day_of_week`, `posluga`) VALUES
(3, 1, 1, '2024-05-29', '12:00:00', 'Tue', 'Консультація терапевта'),
(4, 1, 1, '2024-05-29', '13:00:00', 'Tue', 'Діагностика здоров\'я'),
(5, 1, 15, '2024-05-31', '12:00:00', 'Mon', 'УЗД малого тазу'),
(6, 1, 2, '2024-05-31', '12:00:00', 'Mon', 'Консультація педіатра'),
(7, 1, 7, '2024-05-31', '12:00:00', 'Mon', 'Тест на глюкозу'),
(8, 1, 3, '2024-06-17', '12:00:00', 'Tue', 'Консультація хірурга'),
(9, 1, 3, '2024-06-17', '12:00:00', 'Wed', 'Консультація хірурга'),
(10, 1, 1, '2024-06-17', '12:00:00', 'Wed', 'Консультація терапевта');

-- --------------------------------------------------------

--
-- Структура таблицы `likar`
--

CREATE TABLE `likar` (
  `id` int(11) NOT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Mon1` int(5) DEFAULT NULL,
  `Mon2` int(5) DEFAULT NULL,
  `Mon3` int(5) DEFAULT NULL,
  `Mon4` int(5) DEFAULT NULL,
  `Mon5` int(5) DEFAULT NULL,
  `Tue1` int(5) DEFAULT NULL,
  `Tue2` int(5) DEFAULT NULL,
  `Tue3` int(5) DEFAULT NULL,
  `Tue4` int(5) DEFAULT NULL,
  `Tue5` int(5) DEFAULT NULL,
  `Wed1` int(5) DEFAULT NULL,
  `Wed2` int(5) DEFAULT NULL,
  `Wed3` int(5) DEFAULT NULL,
  `Wed4` int(5) DEFAULT NULL,
  `Wed5` int(5) DEFAULT NULL,
  `Thu1` int(5) DEFAULT NULL,
  `Thu2` int(5) DEFAULT NULL,
  `Thu3` int(5) DEFAULT NULL,
  `Thu4` int(5) DEFAULT NULL,
  `Thu5` int(5) DEFAULT NULL,
  `Fri1` int(5) DEFAULT NULL,
  `Fri2` int(5) DEFAULT NULL,
  `Fri3` int(5) DEFAULT NULL,
  `Fri4` int(5) DEFAULT NULL,
  `Fri5` int(5) DEFAULT NULL,
  `posluga1` varchar(255) DEFAULT NULL,
  `posluga2` varchar(255) DEFAULT NULL,
  `posluga3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likar`
--

INSERT INTO `likar` (`id`, `specialty`, `name`, `Mon1`, `Mon2`, `Mon3`, `Mon4`, `Mon5`, `Tue1`, `Tue2`, `Tue3`, `Tue4`, `Tue5`, `Wed1`, `Wed2`, `Wed3`, `Wed4`, `Wed5`, `Thu1`, `Thu2`, `Thu3`, `Thu4`, `Thu5`, `Fri1`, `Fri2`, `Fri3`, `Fri4`, `Fri5`, `posluga1`, `posluga2`, `posluga3`) VALUES
(1, 'Терапевт', 'Іванов Олександр Сергійович', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація терапевта', 'Діагностика здоров\'я', 'Лікування хвороб'),
(2, 'Педіатр', 'Петров Андрій Вадимович\n', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація педіатра', 'Плановий огляд', 'Вакцинація дітей'),
(3, 'Хірург', 'Сидоров Дмитро Олегович\n', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація хірурга', 'Операційне втручання', 'Післяопераційний догляд'),
(4, 'Кардіолог', 'Ковальчук Михайло Іванович\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація кардіолога', 'Електрокардіограма', 'Лікування аритмії'),
(5, 'Невролог', 'Литвиненко Павло Андрійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація невролога', 'Електроенцефалографія', 'Лікування мігрені'),
(6, 'Гастроентеролог', 'Кравець Юрій Іванович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація гастроентеролога', 'Ендоскопія', 'Лікування гастриту'),
(7, 'Ендокринолог', 'Шевченко Віктор Петрович\n', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація ендокринолога', 'Тест на глюкозу', 'Лікування діабету'),
(8, 'Дерматолог', 'Олійник Олена Миколаївна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація дерматолога', 'Дерматоскопія', 'Лікування акне'),
(9, 'Офтальмолог', 'Морозов Олексій Сергійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація офтальмолога', 'Перевірка зору', 'Лікування катаракти'),
(10, 'Оториноларинголог', 'Савченко Анна Вікторівна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація отоларинголога', 'Аудіометрія', 'Лікування синуситу'),
(11, 'Пульмонолог', 'Гончаренко Іван Вікторович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація пульмонолога', 'Спірометрія', 'Лікування астми'),
(12, 'Ревматолог', 'Ткаченко Сергій Вадимович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація ревматолога', 'Аналіз крові', 'Лікування артриту'),
(13, 'Нефролог', 'Бойко Василь Дмитрович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація нефролога', 'Аналіз сечі', 'Лікування ниркових хвороб'),
(14, 'Уролог', 'Карпенко Наталія Сергіївна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація уролога', 'УЗД сечового міхура', 'Лікування простатиту'),
(15, 'Гінеколог', 'Лисенко Ігор Юрійович', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація гінеколога', 'УЗД малого тазу', 'Лікування ендометріозу'),
(16, 'Психіатр', 'Мельник Євген Петрович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація психіатра', 'Психіатрична оцінка', 'Лікування депресії'),
(17, 'Онколог', 'Дорошенко Артем Петрович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація онколога', 'Біопсія', 'Лікування раку'),
(18, 'Інфекціоніст', 'Козлов Олег Васильович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація інфекціоніста', 'ПЛР-тестування', 'Лікування вірусних інфекцій'),
(19, 'Травматолог', 'Грищук Олександр Андрійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація травматолога', 'Рентген', 'Лікування переломів'),
(20, 'Алерголог', 'Чорна Марія Яківна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Консультація алерголога', 'Алерготести', 'Лікування алергії');

-- --------------------------------------------------------

--
-- Структура таблицы `locks`
--

CREATE TABLE `locks` (
  `name` varchar(255) NOT NULL,
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `locked_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `locks`
--

INSERT INTO `locks` (`name`, `is_locked`, `locked_at`) VALUES
('likar_1_Wed_1', 0, '2024-06-17 21:08:45');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Іван', 'diorg99@gmail.com', '$2y$10$QTtQRKb/iCWRuig/Ao73aODQwcwGcC1F1lXQKz3650T11yWaoio9W');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_likar_id` (`likar_id`);

--
-- Индексы таблицы `likar`
--
ALTER TABLE `likar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `locks`
--
ALTER TABLE `locks`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `likar`
--
ALTER TABLE `likar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_likar_id` FOREIGN KEY (`likar_id`) REFERENCES `likar` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
