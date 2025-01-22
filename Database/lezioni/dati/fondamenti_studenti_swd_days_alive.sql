-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: fondamenti
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `studenti_swd_days_alive`
--

DROP TABLE IF EXISTS `studenti_swd_days_alive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studenti_swd_days_alive` (
  `id` int NOT NULL DEFAULT '0',
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(40) DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `giorni` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studenti_swd_days_alive`
--

LOCK TABLES `studenti_swd_days_alive` WRITE;
/*!40000 ALTER TABLE `studenti_swd_days_alive` DISABLE KEYS */;
INSERT INTO `studenti_swd_days_alive` VALUES (1,'nesma','abd el aziz','2000-08-14',8926),(2,'Andrea','Alume','2004-05-11',7560),(3,'Andrea','Bellissimo','2005-11-05',7017),(4,'Nicolas','Bellotti','1996-02-13',10570),(5,'Omar','Benagoub','2005-07-01',7144),(6,'Maria','Cernat','1995-08-31',10736),(7,'Xiaolong','Chen','2004-08-08',7471),(8,'Simone','Chimirri','2004-02-01',7660),(9,'Simone','Crivello','1996-07-19',10413),(10,'Alessandro','De Filippis','2002-06-04',8267),(11,'Luca','Di Pasquale','2004-05-13',7558),(12,'Marco','Dima','2002-05-15',8287),(13,'Alessio','Divizia','2002-06-10',8261),(14,'Tommaso','Ferrero','2003-07-06',7870),(15,'Alessandro','Formicola','2004-08-16',7463),(16,'Alessandro','Grotta','2004-05-08',7563),(17,'Jiacheng','Hu','1999-05-17',9381),(18,'Dario','Ilescu','2005-08-15',7099),(19,'Angelo','Jimenez Moscoso','1996-01-22',10592),(20,'Emanuele','Macis','2002-07-06',8235),(21,'Lorenzo','Maero','2004-08-05',7474),(22,'Yaroslav','Nechainikov','2005-03-11',7256),(23,'denis angelo','oniga','2004-10-05',7413),(24,'Jacopo','Parlacino','2005-06-08',7167),(25,'Simone','Pizzorno','2005-08-09',7105),(26,'Daniela','Punzi','2005-03-15',7252),(27,'Andrea','Sabini','1999-02-28',9459),(28,'marco','spedaliere','2005-07-24',7121),(29,'Ulrich','Tchiengoua ','1997-06-21',10076),(30,'domenico','vardè','2004-06-21',7519);
/*!40000 ALTER TABLE `studenti_swd_days_alive` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-22 16:10:06
