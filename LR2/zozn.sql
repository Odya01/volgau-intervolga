-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2023 г., 00:21
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zozn`
--

-- --------------------------------------------------------

--
-- Структура таблицы `BRANDS`
--

CREATE TABLE `BRANDS` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `BRANDS`
--

INSERT INTO `BRANDS` (`id`, `name`) VALUES
(1, 'Shell'),
(2, 'Ford'),
(3, 'Gazpromneft');

-- --------------------------------------------------------

--
-- Структура таблицы `TOVARY`
--

CREATE TABLE `TOVARY` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `name` varchar(60) NOT NULL,
  `id_brand` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `TOVARY`
--

INSERT INTO `TOVARY` (`id`, `img`, `name`, `id_brand`, `description`, `cost`) VALUES
(1, '6595130670.png', 'Моторное масло Shell Helix HX8 Synthetic 5W-40 (4л)', 1, 'Моторное масло Shell Helix очень распространено среди автомобилистов по всему миру. Его отличает высокое качество и долговечность использования.', 4990),
(2, '1021371722.jpg', 'Моторное масло Ford Europe FORMULA F 5W-30 Синтетическое 5 л', 2, 'Синтетическое современное, малозольное легкотекучее моторное масло высшего класса для всесезонного применения в бензиновых и дизельных двигателях произодства концерна FORD.', 3106),
(3, '6175887426.png', 'Моторное масло Gazpromneft МОТО 4Т 20W-50 Минеральное 4 л', 3, 'Gazpromneft Moto 4T 20W-50 – всесезонное моторное масло, предназначенное для использования в четырехтактных бензиновых двигателях мотоциклов, мотороллеров, мопедов и садовой техники (газонокосилок, культиваторов, генераторов, мотопомп).', 2224),
(4, '6232038355.png', ' Смазка Gazpromneft Grease L EP 2 400g, фасовка:400 гр', 3, 'Применяется в качестве универсальной смазки', 451),
(5, '6401751242.png', 'Самокат Трюковой Shell FERRARI FXA 12', 1, 'Корпус самоката выполнен из высококачественной стали и обеспечивает максимальный вес нагрузки до 100 кг.', 6303),
(6, '6493121967.png', 'Масляный фильтр для дизельных Focus Mondeo Transit Kuga ', 2, 'Оригинальный масляный фильтр Форд 1717510 для дизельных автомобилей Ford с двигателями TDCi объемом 2.0л., 2.2л., 2.4л.', 600);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `BRANDS`
--
ALTER TABLE `BRANDS`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `TOVARY`
--
ALTER TABLE `TOVARY`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_brand`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `BRANDS`
--
ALTER TABLE `BRANDS`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `TOVARY`
--
ALTER TABLE `TOVARY`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
