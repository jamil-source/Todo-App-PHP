-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `task` varchar(255) NOT NULL,
  `importance` int(1) NOT NULL,
  `start` enum('Mon','Tue','Wed','Thu','Fri','Sat','Sun') NOT NULL,
  `deadline` enum('Mon','Tue','Wed','Thu','Fri','Sat','Sun') NOT NULL,
  `status` enum('Done','Not Done') NOT NULL DEFAULT 'Not Done',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `todos` (`id`, `task`, `importance`, `start`, `deadline`, `status`) VALUES
(13,	'KÃ¶pa mat',	4,	'Wed',	'Sun',	'Not Done');

-- 2021-01-05 12:04:09
