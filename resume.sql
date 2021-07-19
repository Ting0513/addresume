CREATE DATABASE  IF NOT EXISTS `addresume` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `addresume`;
-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: addresume
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `resumeinfo`
--

DROP TABLE IF EXISTS `resumeinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `resumeinfo` (
  `resume_name` varchar(50) NOT NULL COMMENT '履歷名稱',
  `username` varchar(50) NOT NULL COMMENT '姓名',
  `id` varchar(10) NOT NULL COMMENT '身分證字號',
  `telephone` varchar(10) NOT NULL COMMENT '連絡電話',
  `sex` varchar(50) NOT NULL COMMENT '性別',
  `date` date NOT NULL COMMENT '生日',
  `education` varchar(50) NOT NULL COMMENT '教育程度',
  `exp` varchar(100) NOT NULL COMMENT '工作經歷',
  `mail` varchar(100) NOT NULL COMMENT 'email',
  `myinfo` varchar(500) NOT NULL COMMENT '自傳簡介',
  `img` longblob NOT NULL COMMENT '頭貼',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='履歷資訊';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resumeinfo`
--

LOCK TABLES `resumeinfo` WRITE;
/*!40000 ALTER TABLE `resumeinfo` DISABLE KEYS */;
INSERT INTO `resumeinfo` VALUES ('第一份履歷','圓堂守','B146587421','0954128452','boy','1995-02-09','雷門國中','守門員','f4555@gmail.com','我是圓堂守<br/>\r\n我愛守門',_binary 'town.jpg'),('第二份履歷','多拉A夢','A154879988','0945175455','boy','1969-12-01','22世紀學校','大雄助理','adream@gmail.com','Hi,我是哆啦A夢\r<br />\n我是一隻機器貓\r<br />\n我來自22世紀',_binary '3.png'),('第三份履歷','豪炎寺','A123456789','0912345678','boy','1999-06-24','雷門國中','守門員','saddas@yahoo.com.tw','哈囉，我是豪炎寺\r<br />\n絕招是烈焰龍捲風',_binary 'images.jpg'),('第四份履歷','琦玉','O155263018','0985464525','boy','1995-09-18','英雄大學','英雄','onepunch@yahoo.com.tw','hi,我是琦玉aka一拳超人\r<br />\nONE PUNCH!!!',_binary '4.jpg');
/*!40000 ALTER TABLE `resumeinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-05 21:25:57
