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
-- Table structure for table `Vaccines_has_S_effect`
--

DROP TABLE IF EXISTS `Vaccines_has_S_effect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Vaccines_has_S_effect` (
  `vaccine_name` varchar(30) NOT NULL,
  `disease_name` varchar(45) NOT NULL,
  `idEffect` int(11) NOT NULL,
  PRIMARY KEY (`vaccine_name`,`disease_name`,`idEffect`),
  KEY `fk_Vaccines_has_S_effect_S_effect1_idx` (`idEffect`),
  KEY `fk_Vaccines_has_S_effect_Vaccines1_idx` (`vaccine_name`,`disease_name`),
  CONSTRAINT `fk_Vaccines_has_S_effect_S_effect1` FOREIGN KEY (`idEffect`) REFERENCES `S_effect` (`idEffect`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vaccines_has_S_effect_Vaccines1` FOREIGN KEY (`vaccine_name`) REFERENCES `Vaccines` (`vaccine_name`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vaccines_has_S_effect`
--

LOCK TABLES `Vaccines_has_S_effect` WRITE;
/*!40000 ALTER TABLE `Vaccines_has_S_effect` DISABLE KEYS */;
/*!40000 ALTER TABLE `Vaccines_has_S_effect` ENABLE KEYS */;
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
