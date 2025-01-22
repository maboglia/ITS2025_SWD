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
-- Table structure for table `studenti_swd_min22`
--

DROP TABLE IF EXISTS `studenti_swd_min22`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studenti_swd_min22` (
  `id` int NOT NULL DEFAULT '0',
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(40) DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `age` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studenti_swd_min22`
--

LOCK TABLES `studenti_swd_min22` WRITE;
/*!40000 ALTER TABLE `studenti_swd_min22` DISABLE KEYS */;
INSERT INTO `studenti_swd_min22` VALUES (2,'Andrea','Alume','2004-05-11',20),(3,'Andrea','Bellissimo','2005-11-05',19),(5,'Omar','Benagoub','2005-07-01',19),(7,'Xiaolong','Chen','2004-08-08',20),(8,'Simone','Chimirri','2004-02-01',20),(11,'Luca','Di Pasquale','2004-05-13',20),(14,'Tommaso','Ferrero','2003-07-06',21),(15,'Alessandro','Formicola','2004-08-16',20),(16,'Alessandro','Grotta','2004-05-08',20),(18,'Dario','Ilescu','2005-08-15',19),(21,'Lorenzo','Maero','2004-08-05',20),(22,'Yaroslav','Nechainikov','2005-03-11',19),(23,'denis angelo','oniga','2004-10-05',20),(24,'Jacopo','Parlacino','2005-06-08',19),(25,'Simone','Pizzorno','2005-08-09',19),(26,'Daniela','Punzi','2005-03-15',19),(28,'marco','spedaliere','2005-07-24',19),(30,'domenico','vardè','2004-06-21',20);
/*!40000 ALTER TABLE `studenti_swd_min22` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-22 16:10:05
