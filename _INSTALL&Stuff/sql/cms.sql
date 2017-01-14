-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van cms wordt geschreven
CREATE DATABASE IF NOT EXISTS `cms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cms`;

-- Structuur van  tabel cms.howtoconnect wordt geschreven
CREATE TABLE IF NOT EXISTS `howtoconnect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT 'Title',
  `text` longtext NOT NULL COMMENT 'How to connect',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel cms.howtoconnect: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `howtoconnect` DISABLE KEYS */;
INSERT INTO `howtoconnect` (`id`, `title`, `text`) VALUES
	(1, 'Cataclysm Connection', '<br>Step 1: If you don\'t have an account, Make an account <a href="http://yoursite.com/register">here</a>. </br>\r\n\r\n<br>Step 2: Go to WoW Folder,data\\EnUS/EnGB\\, find realmlist.wtf, and open it with notepad, then remove all writing inside and write this: </br>\r\n\r\n\r\n<br><b>SET REALMLIST LOGON.MYSERVER.COM >  U CAN CHANGE THIS IN THE CMS DB < </b></br>\r\n\r\n\r\n<br>Step 3: Start WoW.exe and log in with your account name.</br>');
/*!40000 ALTER TABLE `howtoconnect` ENABLE KEYS */;

-- Structuur van  tabel cms.news wordt geschreven
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Not more then 3 supported!',
  `title` text NOT NULL COMMENT 'Title',
  `text` varchar(200) NOT NULL COMMENT 'News text',
  `postedby` varchar(200) NOT NULL COMMENT 'Username who commited post',
  `date` int(11) NOT NULL COMMENT 'Date posted (UNIX timestamp)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel cms.news: ~3 rows (ongeveer)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `text`, `postedby`, `date`) VALUES
	(1, 'Title 1', 'This is news 1', 'brian8544', 1484249566),
	(2, 'Title 2', 'This is news 2', 'brian8544', 1884249577),
	(3, 'Title 3', 'This is news 3', 'brian8544', 2147483647);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Structuur van  tabel cms.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel cms.users: ~1 rows (ongeveer)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
	(1, 'Administrator', 'admin@admin.com', '5e3d4aff3b986d4e8ef54c5a2418b2c2785c4b05ea9dc8e9c39c2c4acabac953');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Structuur van  tabel cms.version wordt geschreven
CREATE TABLE IF NOT EXISTS `version` (
  `DB_version` char(50) DEFAULT NULL COMMENT 'DB Version Used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel cms.version: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `version` DISABLE KEYS */;
INSERT INTO `version` (`DB_version`) VALUES
	('0.1.3');
/*!40000 ALTER TABLE `version` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
