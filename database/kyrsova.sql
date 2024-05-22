-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2024 at 09:17 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyrsova`
--

-- --------------------------------------------------------

--
-- Table structure for table `likar`
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
  `Fri5` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likar`
--

INSERT INTO `likar` (`id`, `specialty`, `name`, `Mon1`, `Mon2`, `Mon3`, `Mon4`, `Mon5`, `Tue1`, `Tue2`, `Tue3`, `Tue4`, `Tue5`, `Wed1`, `Wed2`, `Wed3`, `Wed4`, `Wed5`, `Thu1`, `Thu2`, `Thu3`, `Thu4`, `Thu5`, `Fri1`, `Fri2`, `Fri3`, `Fri4`, `Fri5`) VALUES
(1, 'Терапевт', 'Іванов Олександр Сергійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Педіатр', 'Петров Андрій Миколайович\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Хірург', 'Сидоров Дмитро Олегович\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Кардіолог', 'Ковальчук Михайло Іванович\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Невролог', 'Литвиненко Павло Андрійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Гастроентеролог', 'Кравець Юрій Володимирович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Ендокринолог', 'Шевченко Віктор Петрович\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Дерматолог', 'Олійник Олена Миколаївна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Офтальмолог', 'Морозов Олексій Сергійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Оториноларинголог', 'Савченко Анна Вікторівна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Пульмонолог', 'Гончаренко Іван Вікторович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Ревматолог', 'Ткаченко Сергій Михайлович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Нефролог', 'Бойко Василь Дмитрович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Уролог', 'Карпенко Наталія Сергіївна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Гінеколог', 'Лисенко Ігор Юрійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Психіатр', 'Мельник Євген Петрович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Онколог', 'Дорошенко Артем Петрович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Інфекціоніст', 'Козлов Олег Васильович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Травматолог', 'Грищук Олександр Андрійович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Алерголог', 'Чорна Марія Олександрівна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Іван', 'diorg99@gmail.com', '$2y$10$QTtQRKb/iCWRuig/Ao73aODQwcwGcC1F1lXQKz3650T11yWaoio9W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likar`
--
ALTER TABLE `likar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likar`
--
ALTER TABLE `likar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
