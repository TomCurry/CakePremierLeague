# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.22)
# Database: premierleague
# Generation Time: 2015-02-13 12:02:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clubs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clubs`;

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `abbreviation` varchar(50) NOT NULL,
  `founded` int(4) NOT NULL,
  `crest_image` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `stadium_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `manager_id_idx` (`manager_id`),
  KEY `stadium_id_idx` (`stadium_id`),
  CONSTRAINT `manager_id` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `stadium_id_1` FOREIGN KEY (`stadium_id`) REFERENCES `stadia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;

INSERT INTO `clubs` (`id`, `full_name`, `nickname`, `abbreviation`, `founded`, `crest_image`, `site`, `manager_id`, `stadium_id`, `created`, `updated`)
VALUES
	(3,'Arsenal Football Club','The Gunners','AFC',1886,'http://upload.wikimedia.org/wikipedia/en/thumb/5/53/Arsenal_FC.svg/323px-Arsenal_FC.svg.png','http://www.arsenal.com/',1,1,'2015-02-09 11:10:14',NULL),
	(4,'Sunderland Association Football Club','The Black Cats','SAFC',1879,'safc.png','http://www.safc.com/',2,2,'2015-02-09 15:29:53',NULL),
	(5,'Chelsea Football Club','The Blues','CFC',1905,'chelsea.png','http://www.chelseafc.com/',9,10,'2015-02-13 10:55:55',NULL),
	(6,'Manchester City Football Club','City','MCFC',1894,'mancity.png','http://www.mcfc.co.uk/',11,7,'2015-02-13 10:57:13',NULL),
	(7,'Manchester United Football Club','The Red Devils','MUFC',1902,'manunited.png','http://www.manutd.com/',13,4,'2015-02-13 10:59:15',NULL),
	(8,'Southampton Football Club','The Saints','SaintsFC',1885,'saints.png','http://www.saintsfc.co.uk/page/Home/',15,14,'2015-02-13 11:03:21',NULL),
	(9,'Tottenham Hotspur Football Club','Spurs','THFC',1882,'spurs.png','http://www.tottenhamhotspur.com/',14,12,'2015-02-13 11:07:10',NULL),
	(10,'Liverpool Football Club','The Reds','LFC',1892,'liverpool.png','http://www.liverpoolfc.com/',5,8,'2015-02-13 11:25:44',NULL),
	(11,'West Ham United Football Club','The Hammers','WHU',1895,'westham.png','http://www.whufc.com/',3,13,'2015-02-13 11:36:33',NULL),
	(12,'Swansea City Association Football Club','The Swans','Swan',1912,'swansea.png','http://www.swanseacity.net/',12,21,'2015-02-13 11:38:07',NULL),
	(13,'Stoke City Football Club','The Potters','SCFC',1863,'stoke.png','http://www.stokecityfc.com/',8,16,'2015-02-13 11:39:38',NULL),
	(14,'Newcastle United Football Club','The Mags','NUFC',1892,'nufc.png','http://www.nufc.co.uk/',18,5,'2015-02-13 11:41:00',NULL),
	(15,'Everton Football Club','The Toffees','EFC',1878,'everton.png','http://www.evertonfc.com/',10,11,'2015-02-13 11:45:47',NULL),
	(16,'Crystal Palace Football Club','Eagles','CPFC',1905,'crystalpalace.png','http://www.cpfc.co.uk/',17,18,'2015-02-13 11:48:26',NULL),
	(17,'West Bromwich Albion Football Club','The Baggies','WBA',1878,'westbrom.png','http://www.wba.co.uk/',16,17,'2015-02-13 11:50:07',NULL),
	(18,'Hull City Association Football Club','The Tigers','Hull',1904,'hull.png','http://www.hullcitytigers.com/',6,19,'2015-02-13 11:54:28',NULL),
	(19,'Queens Park Rangers Football Club','The Hoops','QPR',1882,'qpr.png','http://www.qpr.co.uk/',19,22,'2015-02-13 11:57:55',NULL),
	(20,'Aston Villa Football Club','The Villa','AVFC',1874,'villa.png','http://www.avfc.co.uk/',19,9,'2015-02-13 11:59:12',NULL),
	(21,'Burnley Football Club','The Clarets','BFC',1882,'burnley.png','http://www.burnleyfootballclub.com/',7,20,'2015-02-13 12:01:05',NULL),
	(22,'Leicester City Football Club','The Foxes','LCFC',1884,'leicester.png','http://www.lcfc.com/',4,15,'2015-02-13 12:02:12',NULL);

/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table leagues
# ------------------------------------------------------------

DROP TABLE IF EXISTS `leagues`;

CREATE TABLE `leagues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `leagues` WRITE;
/*!40000 ALTER TABLE `leagues` DISABLE KEYS */;

INSERT INTO `leagues` (`id`, `name`, `created`, `updated`)
VALUES
	(1,'Premier League','2015-02-09 11:40:54',NULL);

/*!40000 ALTER TABLE `leagues` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table managers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `managers`;

CREATE TABLE `managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `appointed` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `managers` WRITE;
/*!40000 ALTER TABLE `managers` DISABLE KEYS */;

INSERT INTO `managers` (`id`, `first_name`, `last_name`, `appointed`, `created`, `updated`)
VALUES
	(1,'Arsène','Wenger','1996-10-01','2015-02-09 11:06:56',NULL),
	(2,'Gus','Poyet','2013-10-08','2015-02-09 15:29:11',NULL),
	(3,'Sam','Allardyce','2011-06-01','2015-02-13 10:34:26',NULL),
	(4,'Nigel','Pearson','2011-11-15','2015-02-13 10:34:26',NULL),
	(5,'Brendan','Rodgers','2012-06-01','2015-02-13 10:34:26',NULL),
	(6,'Steve','Bruce','2012-06-08','2015-02-13 10:34:26',NULL),
	(7,'Sean','Dyche','2012-10-30','2015-02-13 10:34:26',NULL),
	(8,'Mark','Hughes','2013-05-30','2015-02-13 10:34:26',NULL),
	(9,'José','Mourinho','2013-06-03','2015-02-13 10:34:26',NULL),
	(10,'Roberto','Martinez','2013-06-05','2015-02-13 10:34:26',NULL),
	(11,'Manuel','Pellegrini','2013-06-14','2015-02-13 10:34:26',NULL),
	(12,'Garry','Monk','2014-02-04','2015-02-13 10:34:26',NULL),
	(13,'Louis','Van Gaal','2014-05-19','2015-02-13 10:34:26',NULL),
	(14,'Mauricio','Pochettino','2014-05-27','2015-02-13 10:34:26',NULL),
	(15,'Ronald','Koeman','2014-06-16','2015-02-13 10:34:26',NULL),
	(16,'Tony','Pulis','2015-01-01','2015-02-13 10:34:26',NULL),
	(17,'Alan','Pardew','2015-01-02','2015-02-13 10:34:26',NULL),
	(18,'John','Carver','2015-01-02','2015-02-13 10:34:26',NULL),
	(19,'TBA','TBA','2015-02-13','2015-02-13 11:57:36',NULL);

/*!40000 ALTER TABLE `managers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table matchdays
# ------------------------------------------------------------

DROP TABLE IF EXISTS `matchdays`;

CREATE TABLE `matchdays` (
  `id` int(11) NOT NULL,
  `match_week` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table matches
# ------------------------------------------------------------

DROP TABLE IF EXISTS `matches`;

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `home_team` int(11) NOT NULL,
  `away_team` int(11) NOT NULL,
  `stadium_id` int(11) NOT NULL,
  `matchday_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stadium_id_index` (`stadium_id`),
  KEY `matchday_id_idx` (`matchday_id`),
  CONSTRAINT `matchday_id` FOREIGN KEY (`matchday_id`) REFERENCES `matchdays` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `stadium_id_2` FOREIGN KEY (`stadium_id`) REFERENCES `stadia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table matches_teams
# ------------------------------------------------------------

DROP TABLE IF EXISTS `matches_teams`;

CREATE TABLE `matches_teams` (
  `team_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  KEY `team_id_idx_2` (`team_id`),
  KEY `match_id_idx_2` (`match_id`),
  CONSTRAINT `match_id_2` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `team_id_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table players
# ------------------------------------------------------------

DROP TABLE IF EXISTS `players`;

CREATE TABLE `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `squad_number` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `club_id_index_1` (`club_id`),
  CONSTRAINT `club_id_2` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;

INSERT INTO `players` (`id`, `first_name`, `last_name`, `birth`, `country`, `position`, `squad_number`, `club_id`, `created`, `updated`)
VALUES
	(1,'Costel','Pantilimon','1987-02-03','Romania','GK',1,4,'2015-02-10 10:20:49',NULL),
	(2,'Jordan','Pickford','1994-03-07','England','GK',13,4,'2015-02-10 10:26:35',NULL),
	(3,'Vito','Mannone','1988-03-02','Italy','GK',25,4,'2015-02-10 10:28:47',NULL),
	(4,'Billy','Jones','1987-03-24','England','DF',2,4,'2015-02-10 10:30:09',NULL),
	(5,'Patrick','Van Aanholt','1990-08-29','Netherlands','DF',3,4,'2015-02-10 10:33:53',NULL),
	(6,'Wes','Brown','1979-10-13','England','DF',5,4,'2015-02-10 10:34:36',NULL),
	(7,'Jack','Rodwell','1991-03-11','England','MF',8,4,'2015-02-10 10:39:14',NULL),
	(8,'Jordi','Gomez','1985-05-24','Spain','MF',14,4,'2015-02-10 10:40:00',NULL),
	(9,'Anthony','Réveillère','1979-11-10','France','DF',15,4,'2015-02-10 10:41:24',NULL),
	(10,'Will','Buckley','1989-11-21','England','MF',30,4,'2015-02-10 10:43:40',NULL),
	(11,'John','OShea','1981-04-30','Republic of Ireland','DF',16,4,'2015-02-10 10:45:20',NULL),
	(12,'Santiago','Vergini','1988-08-03','Argentina','DF',27,4,'2015-02-10 10:46:04',NULL),
	(13,'Sebastian','Larsson','1985-06-06','Sweden','MF',7,4,'2015-02-10 10:47:00',NULL),
	(14,'Adam','Johnson','1987-07-14','England','MF',11,4,'2015-02-10 10:48:42',NULL),
	(15,'Emanuele','Giaccherini','1985-05-05','Italy','MF',23,4,'2015-02-10 10:49:29',NULL),
	(16,'Liam','Bridcutt','1989-05-08','Scotland','MF',4,4,'2015-02-10 10:50:08',NULL),
	(17,'Lee','Cattermole','1988-03-21','England','MF',6,4,'2015-02-10 10:50:48',NULL),
	(18,'Charis','Mavrias','1994-02-21','England','MF',18,4,'2015-02-10 10:51:26',NULL),
	(19,'Steven','Fletcher','1987-03-26','Scotland','FW',9,4,'2015-02-10 10:52:17',NULL),
	(20,'Connor','Wickham','1993-03-31','England','FW',10,4,'2015-02-10 10:54:27',NULL),
	(21,'Danny','Graham','1985-08-12','England','FW',19,4,'2015-02-10 10:55:12',NULL),
	(22,'Sebastian','Coates','1990-10-07','Uruguay','DF',22,4,'2015-02-10 10:56:06',NULL),
	(23,'Valentin','Roberge','1987-06-09','France','DF',29,4,'2015-02-10 10:57:38',NULL),
	(24,'Ricardo','Alvarez','1988-04-12','Argentina','MF',20,4,'2015-02-10 10:58:29',NULL),
	(25,'El Hadji','Ba','1993-03-05','France','MF',0,4,'2015-02-10 10:59:19',NULL),
	(26,'Jermain','Defoe','1982-10-07','England','FW',28,4,'2015-02-10 11:00:20',NULL);

/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rankings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rankings`;

CREATE TABLE `rankings` (
  `id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `played` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `loss` int(11) NOT NULL,
  `goals_for` int(11) NOT NULL,
  `goals_against` int(11) NOT NULL,
  `goals_difference` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `league_id_idx` (`league_id`),
  KEY `club_id_index_2` (`club_id`),
  CONSTRAINT `club_id_1` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `league_id` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table results
# ------------------------------------------------------------

DROP TABLE IF EXISTS `results`;

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `home_score` int(11) NOT NULL,
  `away_score` int(11) NOT NULL,
  `score` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `match_id_idx_1` (`match_id`),
  CONSTRAINT `match_id_1` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table stadia
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stadia`;

CREATE TABLE `stadia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL COMMENT '	',
  `opened` int(4) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `stadia` WRITE;
/*!40000 ALTER TABLE `stadia` DISABLE KEYS */;

INSERT INTO `stadia` (`id`, `name`, `capacity`, `opened`, `location`, `created`, `updated`)
VALUES
	(1,'Emirates Stadium',60272,2006,'London','2015-02-09 11:10:05',NULL),
	(2,'Stadium of Light',48707,1997,'Sunderland','2015-02-09 15:27:47',NULL),
	(4,'Old Trafford',75635,1910,'Manchester','2015-02-12 15:35:50',NULL),
	(5,'St. James\' Park',52405,1880,'Newcastle','2015-02-12 15:37:08',NULL),
	(7,'Etihad Stadium',46708,2003,'Manchester','2015-02-12 15:38:45',NULL),
	(8,'Anfield',45276,1884,'Liverpool','2015-02-12 15:40:06',NULL),
	(9,'Villa Park',42682,1897,'Birmingham','2015-02-12 15:40:46',NULL),
	(10,'Stamford Bridge',41798,1877,'London','2015-02-12 15:41:25',NULL),
	(11,'Goodison Park',39571,1892,'Liverpool','2015-02-12 15:42:13',NULL),
	(12,'White Hart Lane',36284,1899,'London','2015-02-12 15:42:59',NULL),
	(13,'Upton Park',35345,1904,'London','2015-02-12 15:43:25',NULL),
	(14,'St Marys Stadium',32689,2001,'Southampton','2015-02-12 15:44:33',NULL),
	(15,'King Power Stadium',32500,2002,'Leicester','2015-02-12 15:45:12',NULL),
	(16,'Britannia Stadium',27740,1997,'Stoke-on-Trent','2015-02-12 15:46:03',NULL),
	(17,'The Hawthorns',26445,1900,'West Bromwich','2015-02-12 15:46:45',NULL),
	(18,'Selhurst Park',26309,1924,'London','2015-02-12 15:50:52',NULL),
	(19,'KC Stadium',25400,2002,'Kingston upon Hull','2015-02-12 15:55:56',NULL),
	(20,'Turf Moor',22546,1883,'Burnley','2015-02-12 15:57:12',NULL),
	(21,'Liberty Stadium',20827,2005,'Swansea','2015-02-12 15:57:48',NULL),
	(22,'Loftus Road',18439,1904,'London','2015-02-13 08:54:55',NULL);

/*!40000 ALTER TABLE `stadia` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table teams
# ------------------------------------------------------------

DROP TABLE IF EXISTS `teams`;

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `club_id_index_3` (`club_id`),
  CONSTRAINT `club_id_3` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table teams_players
# ------------------------------------------------------------

DROP TABLE IF EXISTS `teams_players`;

CREATE TABLE `teams_players` (
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  KEY `team_id_idx_1` (`team_id`),
  KEY `player_id_idx` (`player_id`),
  CONSTRAINT `player_id_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `team_id_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`)
VALUES
	(1,'Tom','$2y$10$yax9KBS0AuNw0PqMqsJKHuAnFnfm104LdOei..Vuaxp/eBmwrH3p.','admin','2015-02-09 12:19:55','2015-02-09 12:19:55');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
