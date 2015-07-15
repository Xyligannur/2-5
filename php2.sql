-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 09 2015 г., 01:32
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lesson2`
--

CREATE TABLE IF NOT EXISTS `lesson2` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `short` text NOT NULL,
  `content` longtext NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lesson2`
--

INSERT INTO `lesson2` (`id`, `title`, `short`, `content`, `time`) VALUES
(42, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.\r\n\r\nNulla vitae hendrerit nunc. Maecenas id laoreet ligula. Ut feugiat nibh ut nisi elementum mattis non aliquam justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel velit hendrerit, consectetur urna ultrices, ultrices metus. Suspendisse venenatis viverra posuere. Praesent sodales eleifend sem, eget iaculis lectus consectetur et. Duis eget turpis ut ligula dictum blandit et nec purus. Nunc ante arcu, interdum vel auctor ac, mollis et lectus. Nam sagittis neque ullamcorper sodales elementum. Nunc euismod at nisi ac pellentesque. Ut venenatis justo quis diam porta, a tincidunt enim convallis. Aenean faucibus in arcu id aliquam. Phasellus in ligula bibendum, porta ante in, maximus eros.\r\n\r\nSed venenatis lobortis orci. Sed non massa id massa ullamcorper semper. Mauris euismod tempor leo at dictum. Quisque faucibus diam sed libero finibus mollis. Nulla hendrerit justo eu orci molestie pretium. Nunc non est aliquam, lobortis sapien eget, condimentum ex. Nullam id ultricies diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. In facilisis tempor elit eu tempor. Etiam vel ante mi. Fusce id vulputate dui.\r\n\r\nQuisque luctus ligula ipsum, auctor tincidunt nibh pretium vel. Maecenas suscipit dictum velit, nec luctus ante ullamcorper quis. Sed blandit porttitor ex a suscipit. Donec rutrum ante vitae justo tempus, at condimentum urna gravida. Duis quis pulvinar turpis, ac luctus sapien. Curabitur lobortis sem diam. Praesent nec ante id urna eleifend viverra. Quisque porta nisi in nisl egestas, nec aliquam libero vulputate. Etiam in arcu finibus diam consequat rhoncus. Cras facilisis, eros eget ullamcorper ullamcorper, odio urna maximus elit, id molestie tortor ante nec augue.\r\n\r\nDuis efficitur, risus ac dictum commodo, nunc eros mollis enim, convallis hendrerit nulla libero ut felis. Nam scelerisque, tellus et faucibus mollis, odio lacus fringilla massa, at volutpat felis erat vitae enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum mollis volutpat lacus, at fermentum turpis porttitor vel. Donec gravida id risus vitae consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas cursus nunc et pellentesque egestas. Cras congue lacus eu elit cursus, ultrices pulvinar arcu semper. Nullam urna augue, gravida sit amet lorem ut, pharetra tristique nisl. Phasellus sodales ullamcorper ipsum, et finibus justo mattis sed. Vestibulum varius, nulla id feugiat tristique, dui diam tempus metus, ac dapibus ligula lectus vel dui. Donec id finibus nisl. Duis pretium magna lacus, eget malesuada sem rhoncus quis. Mauris et mi justo. Maecenas viverra eget est vel porttitor.', '2015-07-08 23:22:26'),
(43, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus mi sit amet orci finibus, sed cursus dui faucibus. Pellentesque sed efficitur odio, vitae molestie eros. Morbi non libero consectetur, blandit ligula vitae, dignissim diam. Aenean sed dui cursus, mattis dui ut, pretium nibh. Nullam suscipit et erat sed mollis. Sed sit amet dui in massa finibus pharetra pharetra ut magna. Pellentesque efficitur elit nec velit convallis sagittis. Nam luctus metus nec rhoncus venenatis.', '2015-07-08 23:22:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lesson2`
--
ALTER TABLE `lesson2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lesson2`
--
ALTER TABLE `lesson2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
