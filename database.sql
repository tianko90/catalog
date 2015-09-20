-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Време на генериране: 20 септ 2015 в 20:12
-- Версия на сървъра: 5.5.44-0ubuntu0.14.04.1
-- Версия на PHP: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `catalog`
--

-- --------------------------------------------------------

--
-- Структура на таблица `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `genre` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Структура на таблица `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `restrictions` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `poster` (`poster`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Структура на таблица `movies_genres`
--

CREATE TABLE IF NOT EXISTS `movies_genres` (
  `movie_id` int(10) unsigned NOT NULL,
  `genre_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`movie_id`,`genre_id`),
  UNIQUE KEY `movie_id` (`movie_id`,`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(56) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(56) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
