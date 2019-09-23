# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: AlexCollection
# Generation Time: 2019-09-23 12:59:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table MTGSets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `MTGSets`;

CREATE TABLE `MTGSets` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `cards` smallint(255) unsigned NOT NULL,
  `released` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `MTGSets` WRITE;
/*!40000 ALTER TABLE `MTGSets` DISABLE KEYS */;

INSERT INTO `MTGSets` (`id`, `name`, `cards`, `released`)
VALUES
	(1,'Throne of Eldraine',300,'2019-10-04'),
	(2,'Khans of Tarkir',269,'2014-09-26'),
	(3,'Amonkhet',287,'2017-04-28'),
	(4,'Theros',249,'2013-09-27'),
	(5,'Guilds of Ravnica',273,'2018-10-05'),
	(6,'Battle for Zendikar',299,'2015-10-02'),
	(7,'Aether Revolt',194,'2017-01-20'),
	(8,'Magic Origins',288,'2015-07-17'),
	(9,'Eldritch Moon',208,'2016-07-22'),
	(10,'New Phyrexia',175,'2011-05-13'),
	(11,'Dominaria',280,'2018-04-27');

/*!40000 ALTER TABLE `MTGSets` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
