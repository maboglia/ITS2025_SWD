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
-- Table structure for table `corsi_swd`
--

DROP TABLE IF EXISTS `corsi_swd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `corsi_swd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `ore` int DEFAULT NULL,
  `docente` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corsi_swd`
--

LOCK TABLES `corsi_swd` WRITE;
/*!40000 ALTER TABLE `corsi_swd` DISABLE KEYS */;
INSERT INTO `corsi_swd` VALUES (1,'Approfondimenti didattici e Orientamento',NULL,NULL),(2,'Architetture e infrastrutture Software',NULL,NULL),(3,'Base di dati - NoSQL',NULL,NULL),(4,'Base di dati - SQL',NULL,NULL),(5,'Cloud services',NULL,NULL),(6,'Containers - Docker',NULL,NULL),(7,'Copyright e norme giuridiche del mondo digitale',NULL,NULL),(8,'Fondamenti di basi di dati',NULL,NULL),(9,'Fondamenti di programmazione',NULL,NULL),(10,'Fondamenti di reti di calcolatori',NULL,NULL),(11,'Fondamenti di UX/UI e HTML/CSS',NULL,NULL),(12,'Fondamenti di Version Control',NULL,NULL),(13,'Inglese',NULL,NULL),(14,'Laboratorio di preparazione project work',NULL,NULL),(15,'Learning by Project - Soft Skill',NULL,NULL),(16,'Learning by Project - Tech',NULL,NULL),(17,'Linux Server',NULL,NULL),(18,'Orientamento al lavoro',NULL,NULL),(19,'Parità fra uomini e donne e non discriminazione',NULL,NULL),(20,'Percorso di sviluppo soft skills',NULL,NULL),(21,'Programmazione - .NET Framework / C#',NULL,NULL),(22,'Programmazione - Java',NULL,NULL),(23,'Programmazione - PHP',NULL,NULL),(24,'Programmazione WEB - Javascript',NULL,NULL),(25,'Sicurezza informatica',NULL,NULL),(26,'Sicurezza sul lavoro',NULL,NULL),(27,'Strumenti AI e Prompt Engineering',NULL,NULL);
/*!40000 ALTER TABLE `corsi_swd` ENABLE KEYS */;
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
