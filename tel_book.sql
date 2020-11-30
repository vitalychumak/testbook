
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tel_book`
--
CREATE DATABASE IF NOT EXISTS `tel_book` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tel_book`;

-- --------------------------------------------------------

--
-- Структура таблицы `kontakt`
--

DROP TABLE IF EXISTS `kontakt`;
CREATE TABLE `kontakt` (
  `id_kontakt` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `telefon`
--

DROP TABLE IF EXISTS `telefon`;
CREATE TABLE `telefon` (
  `id_telefon` int(11) NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number1` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number2` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number3` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number4` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number5` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number6` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number7` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number8` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number9` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number10` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number13` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number14` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number15` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number16` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number17` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number18` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number19` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id_kontakt`);

--
-- Индексы таблицы `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`id_telefon`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id_kontakt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `telefon`
--
ALTER TABLE `telefon`
  MODIFY `id_telefon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
