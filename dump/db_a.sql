-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 28 2023 г., 11:27
-- Версия сервера: 8.0.28-0ubuntu0.20.04.3
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_ad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `заказчики`
--

CREATE TABLE `заказчики` (
  `Номер_заказчика` int NOT NULL,
  `Название_компании` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ФИО_контактного_лица` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Номер_телефона` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Должность_контактного_лица` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Номер_заказа` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `заказчики`
--

INSERT INTO `заказчики` (`Номер_заказчика`, `Название_компании`, `ФИО_контактного_лица`, `Номер_телефона`, `Должность_контактного_лица`, `Номер_заказа`) VALUES
(1, 'СмокингЭксперт', 'Кузнецова Алёна Матвеевна', '89567892345', 'Специалист по маркетингу', 1),
(2, 'КонтактОгород', 'Смирнова Анна Арсентьевна', '89547896567', 'Специалист по маркетингу', 2),
(3, 'ЮнитСтрой', 'Николаев Даниил Иванович', '89673456818', 'Руководитель отдела маркетинга', 6),
(4, 'СтройЛайт', 'Волкова Василиса Станиславовна', '89547564656', 'Руководитель компании', 5),
(5, 'ДомГарант', 'Кузнецов Даниил Иванович', '89677934536', 'Руководительотдела маркетинга', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `заказы`
--

CREATE TABLE `заказы` (
  `Номер_заказа` int NOT NULL,
  `Номер_услуги` int NOT NULL,
  `Номер_в_табеле` int NOT NULL,
  `Номер_заказчика` int NOT NULL,
  `Дата_создания` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `заказы`
--

INSERT INTO `заказы` (`Номер_заказа`, `Номер_услуги`, `Номер_в_табеле`, `Номер_заказчика`, `Дата_создания`) VALUES
(1, 8, 9, 1, '2022-06-15'),
(2, 13, 3, 2, '2022-06-07'),
(3, 12, 7, 5, '2022-06-06'),
(5, 4, 4, 4, '2022-05-31'),
(6, 4, 5, 3, '2022-06-01');

-- --------------------------------------------------------

--
-- Структура таблицы `работники`
--

CREATE TABLE `работники` (
  `Номер_в_табеле` int NOT NULL,
  `ФИО` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Должность` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ИНН` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Паспорт` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Статус` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `работники`
--

INSERT INTO `работники` (`Номер_в_табеле`, `ФИО`, `Должность`, `ИНН`, `Паспорт`, `Статус`) VALUES
(1, 'Титов Евгений Евгеньевич', 'Бухгалтер', '357927837572', '2549762964', 'Работает'),
(2, 'Титов Анатолий Петрович', 'Специалист по рекламе', '359562952968', '2549684106', 'Работает'),
(3, 'Емельянова Алевтина Анатольевна', 'Специалист по рекламе', '538629630726', '3729022436', 'Работает'),
(4, 'Рогова Влада Дмитрьевна', 'Специалист по рекламе', '538639489502', '3729357803', 'Работает'),
(5, 'Максимов Борис Станиславович', 'Управляющий рекламного отдела ', '263582539258', '3727382036', 'Работает'),
(6, 'Белова Юлиана Наумовна', 'Технический специалист', '263558469329', '3307246742', 'В отпуске'),
(7, 'Андреева Альвина Анатольевна', 'Копирайтер', '142635789245', '3629629618', 'Работает'),
(8, 'Веселов Роман Давидович', 'Копирайтер', '368258358638', '3629479276', 'В отпуске'),
(9, 'Вишнякова Мария Васильевна', 'Дизайнер', '346892568743', '2486427437', 'Работает'),
(10, 'Щербакова Инга Вячеславовна', 'Маркетолог', '368624617890', '2426785014', 'Работает'),
(11, 'Вишнякова Анастасия Васильевна', 'Аналитик', '373596206106', '2486692457', 'Работает'),
(12, 'Мелихова Алиса Станиславовна', 'Директор', '368780872689', '7509261589', 'Работает');

-- --------------------------------------------------------

--
-- Структура таблицы `услуги`
--

CREATE TABLE `услуги` (
  `Номер_услуги` int NOT NULL,
  `Название` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Время_исполнения` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Цена` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `услуги`
--

INSERT INTO `услуги` (`Номер_услуги`, `Название`, `Время_исполнения`, `Цена`) VALUES
(1, 'Размещение внутри транспорта', '8', '10000'),
(2, 'Реклама в лифтах и подъездах', '7', 'от 10000'),
(3, 'Изготовление наружной рекламы', 'от 10 дней', 'от 30000'),
(4, 'Коммерческое предложение по всем видам рекламы', 'от 30 дней', 'от 120000'),
(5, 'Размещение на щитах для агентств', 'от 10 дней', 'от 30000'),
(6, 'Широкоформатная печать', 'от 2 дней', 'от 400 руб/кв.м'),
(7, 'Реклама на видеоэкранах', 'от 30 дней', 'от 100000'),
(8, 'Распространение печатной продукции', '2 ', '1 руб/шт'),
(9, 'Услуги дизайнера', 'От 10 дней', 'Договорная'),
(10, 'Промо-акция', 'от 30 дней', 'от 5000 '),
(11, 'Печать на футболках, толстовках', '7', '500 руб/шт'),
(12, 'Печать на кружках', '7 ', '300 руб/шт'),
(13, 'Печать на пакетах', '7', 'от 30 руб/шт'),
(14, 'Печать на кепках', '7 ', '300 руб/шт'),
(16, 'Печать стикеров', '2 дня', '10руб/шт');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `заказчики`
--
ALTER TABLE `заказчики`
  ADD PRIMARY KEY (`Номер_заказчика`),
  ADD KEY `Номер заказа` (`Номер_заказа`);

--
-- Индексы таблицы `заказы`
--
ALTER TABLE `заказы`
  ADD PRIMARY KEY (`Номер_заказа`),
  ADD KEY `Номер услуги или комплекса услуг` (`Номер_услуги`,`Номер_в_табеле`,`Номер_заказчика`),
  ADD KEY `Ответственный работник` (`Номер_в_табеле`),
  ADD KEY `Заказчик` (`Номер_заказчика`);

--
-- Индексы таблицы `работники`
--
ALTER TABLE `работники`
  ADD PRIMARY KEY (`Номер_в_табеле`);

--
-- Индексы таблицы `услуги`
--
ALTER TABLE `услуги`
  ADD PRIMARY KEY (`Номер_услуги`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `заказчики`
--
ALTER TABLE `заказчики`
  MODIFY `Номер_заказчика` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `заказы`
--
ALTER TABLE `заказы`
  MODIFY `Номер_заказа` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `работники`
--
ALTER TABLE `работники`
  MODIFY `Номер_в_табеле` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `услуги`
--
ALTER TABLE `услуги`
  MODIFY `Номер_услуги` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `заказчики`
--
ALTER TABLE `заказчики`
  ADD CONSTRAINT `заказчики_ibfk_1` FOREIGN KEY (`Номер_заказа`) REFERENCES `заказы` (`Номер_заказа`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `заказы`
--
ALTER TABLE `заказы`
  ADD CONSTRAINT `заказы_ibfk_1` FOREIGN KEY (`Номер_в_табеле`) REFERENCES `работники` (`Номер_в_табеле`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `заказы_ibfk_2` FOREIGN KEY (`Номер_заказчика`) REFERENCES `заказчики` (`Номер_заказчика`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `заказы_ibfk_3` FOREIGN KEY (`Номер_услуги`) REFERENCES `услуги` (`Номер_услуги`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
