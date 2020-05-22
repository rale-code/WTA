-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: firstdatabase
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(30) NOT NULL,
  `country_image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'Serbia','https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/945px-Flag_of_Serbia.svg.png'),(2,'Spain','https://upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png'),(3,'Switzerland','https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Switzerland.svg'),(4,'Austria','https://lh3.googleusercontent.com/proxy/EA74QAMnUkSchXHpYiE4WsGcEWBVSTizY202pgDOyA0DWFA10Yvy0lPJTQjT4yGqj9ya6wfs3W8twk-SERgeljlK0GCxkh9diSzp'),(5,'Russia','https://upload.wikimedia.org/wikipedia/en/f/f3/Flag_of_Russia.svg'),(6,'Germany','https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png'),(7,'Japan','https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1200px-Flag_of_Japan.svg.png'),(8,'Greece','https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/2000px-Flag_of_Greece.svg.png'),(9,'Italy','https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/1200px-Flag_of_Italy.svg.png'),(10,'Croatia','https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/1280px-Flag_of_Croatia.svg.png');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `points` int(11) NOT NULL,
  `player_image` varchar(200) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`player_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `player_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES (1,1,'Novak Djokovic',11685,'https://www.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTcxOTQ1NzUxNzg4NjYwNjE4/novak-djokovic-letter-atp-relief-fund.jpg',1),(2,2,'Rafael Nadal',7945,'https://s3.amazonaws.com/charitycdn/cache/resizedcrop-be3a69fa00fc95c9733a1e912b06f7b9-800x800.jpg',2),(3,3,'Roger Federer',6950,'https://www.telegraph.co.uk/content/dam/tennis/2019/06/06/TELEMMGLPICT000199777978_trans%2B%2B8Asj1eHb3tSpQqwok7bWeyrPcr6V3Pz2zNkmv8Ty4kI.jpeg',3),(4,4,'Dominic Thiem',4925,'https://tennishead.net/wp-content/uploads/2020/02/Dominic-Thiem-wants-Novak-Djokovic-revenge.jpg',4),(5,5,'Daniil Medvedev',4195,'https://www.tennisnet.com/fileadmin/user_upload/artikel/2019/10/shanghai-medvedev-fognini.jpg',5),(6,6,'Alexander Zverev',4005,'https://www.tennisnet.com/fileadmin/_processed_/4/5/csm_zverev-pocher_884c4bac76.jpg',6),(7,7,'Kei Nishikori',4005,'https://d2me2qg8dfiw8u.cloudfront.net/content/uploads/2020/03/06113535/Kei-Nishikori-in-action-from-PA.jpg',7),(8,8,'Stefanos Tsitsipas',3455,'https://www.tennisworldusa.org/imgb/80431/stefanos-tsitsipas-the-last-six-months-of-truth-start-in-worst-way.jpg',8),(9,9,'Karen Khachanov',2890,'https://thetennistime.com/wp-content/uploads/2019/02/karen-khachanov-withdrew-from-the-tournament-in-marseilles_5c66cf4aebe5b.jpeg',5),(10,10,'Roberto Bautista Agut',2575,'https://www.essentiallysports.com/wp-content/uploads/images-79-12.jpeg',2),(11,11,'Fabio Fognini',2510,'https://www.tennisworldusa.org/imgb/87039/fabio-fognini-reveals-his-main-goal-for-2020.jpg',9),(12,12,'Borna Coric',2160,'https://www.atptourist.com/wp-content/uploads/2018/11/coric-paris-r2-30102018-26.jpg',10);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tournaments`
--

DROP TABLE IF EXISTS `tournaments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tournaments` (
  `tournament_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_name` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `Surface` varchar(10) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tournament_id`),
  KEY `player_id` (`player_id`),
  CONSTRAINT `tournaments_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tournaments`
--

LOCK TABLES `tournaments` WRITE;
/*!40000 ALTER TABLE `tournaments` DISABLE KEYS */;
INSERT INTO `tournaments` VALUES (1,'Rolan Garos','May',2,'Clay','https://c.stocksy.com/a/mRW400/z9/1078042.jpg'),(2,'French Open','May',8,'Clay','https://c.stocksy.com/a/mRW400/z9/1078042.jpg'),(3,'Rio Open','May',5,'Clay','https://c.stocksy.com/a/mRW400/z9/1078042.jpg'),(4,'Wimbledon','June',1,'Grass','https://previews.123rf.com/images/kireewongfoto/kireewongfoto1507/kireewongfoto150700022/43327718-tennis-ball-on-tennis-grass-court.jpg'),(5,'Libema Open','June',12,'Grass','https://previews.123rf.com/images/kireewongfoto/kireewongfoto1507/kireewongfoto150700022/43327718-tennis-ball-on-tennis-grass-court.jpg'),(6,'U.S. Open','June',3,'Grass','https://previews.123rf.com/images/kireewongfoto/kireewongfoto1507/kireewongfoto150700022/43327718-tennis-ball-on-tennis-grass-court.jpg');
/*!40000 ALTER TABLE `tournaments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-18 10:59:29
