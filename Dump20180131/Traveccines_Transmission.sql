-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: Traveccines
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `Transmission`
--

DROP TABLE IF EXISTS `Transmission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Transmission` (
  `idTransmition` int(11) NOT NULL,
  `trans_name` varchar(150) DEFAULT NULL,
  `trans_img` longblob,
  PRIMARY KEY (`idTransmition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Transmission`
--

LOCK TABLES `Transmission` WRITE;
/*!40000 ALTER TABLE `Transmission` DISABLE KEYS */;
INSERT INTO `Transmission` VALUES (0,'varied ',NULL),(1,'Fecal-oral route (contaminated food and water) ',NULL),(2,'Person-to-person contact ',NULL),(3,'Contact with blood and other body fluids: ',NULL),(4,'Unprotected sex ',NULL),(5,'Injection drug use ',NULL),(6,'Contaminated transfusions ',NULL),(7,'Exposure to human blood ',NULL),(8,'Contaminated tattoo and piercing equipment ',NULL),(9,'Bite of infected mosquito (female Anopheles) ',NULL),(10,'Oral transmission ',NULL),(11,'Fecal-oral route (person-to-person and contaminated food and water) ',NULL),(12,'Mammal bites (including dogs, bats, other carnivores) ',NULL),(13,'Bite of infected mosquitoes ',NULL),(14,'Mammal bites (bats and other carnivores). Canine rabies is not present. ',NULL),(15,'Bites from bats (rabies is not present in canines or other mammals) ',NULL),(16,'Mammal bites (including dogs, bats, other carnivores). Canine rabies is present but not a significant concern to travelers. ',NULL),(17,'Bite of infected mosquitoes (primarily Culex) ',NULL),(18,'Fecal-oral route (person-to-person contaminated food and water) ',NULL),(19,'Bite of infected mosquito (femaleAnopheles) ',NULL),(20,'Contaminated water',NULL);
/*!40000 ALTER TABLE `Transmission` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-31 13:32:25
