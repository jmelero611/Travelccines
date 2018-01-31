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
-- Table structure for table `Diseases`
--

DROP TABLE IF EXISTS `Diseases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Diseases` (
  `disease_name` varchar(45) NOT NULL,
  `patogen` varchar(45) DEFAULT NULL,
  `vaccine` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`disease_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Diseases`
--

LOCK TABLES `Diseases` WRITE;
/*!40000 ALTER TABLE `Diseases` DISABLE KEYS */;
INSERT INTO `Diseases` VALUES ('African Sleeping Sickness (African Trypanosom','Trypanosoma brucei','no'),('African Tick-Bite Fever','Rickettsia africae','no'),('Chagas disease (American Trypanosomiasis)','Trypanosoma cruzi','no'),('Chikungunya','Chikungunya virus','no'),('Cholera','Vibrio cholerae','yes'),('Dengue','Flavivirus spp.','no'),('Ebola','Ebolavirus','no'),('H5N1 Avian Influenza','H5N1 Influenza Virus','no'),('Hand, Foot, Mouth Disease','Coxsackievirus','no'),('Hepatitis A','Hepatitis A virus (HAV)','yes'),('Hepatitis B','Hepatitis B virus (HBV)','yes'),('HIV Infection','Human Immunodeficence Virus (HIV)','no'),('Japanese Encephalitis','Flavivirus spp.','yes'),('Malaria','Plasmodium spp.','yes'),('Meningitis (Meningococcal disease)','Neisseria meningitidis','yes'),('Polio','Poliovirus','yes'),('Rabies','Lyssavirus spp.','yes'),('Tickborne Encephalitis','Flavivirus spp.','no'),('Tuberculosis (TB)','Micobacterium tuberculosis','no'),('Typhoid','Salmonella enterica, serotypes Typhi','yes'),('Yellow Fever','Yellow fever virus (YFV)','yes');
/*!40000 ALTER TABLE `Diseases` ENABLE KEYS */;
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
