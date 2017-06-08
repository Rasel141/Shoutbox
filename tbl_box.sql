-- Adminer 4.3.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tbl_box`;
CREATE TABLE `tbl_box` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_box` (`id`, `name`, `body`, `time`) VALUES
(1,	'Rasel',	'I am Rasel.',	'02:30:00'),
(2,	'Mohib',	'I am Mohib',	'00:00:12'),
(3,	'Maruf',	'I am Maruf',	'03:40:00'),
(4,	'Ratul',	'I am Ratul.',	'00:00:04'),
(7,	'Shova',	'I am Shova',	'02:28:13'),
(8,	'Mamun',	'I am Mamun',	'02:29:12'),
(9,	'Amit',	'I am Amit',	'02:29:22'),
(10,	'Sumi',	'I am Sumi',	'02:34:57');

-- 2017-06-08 20:41:19
