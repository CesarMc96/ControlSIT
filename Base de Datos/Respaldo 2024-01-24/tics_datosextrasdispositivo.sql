CREATE DATABASE  IF NOT EXISTS `tics` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tics`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: tics
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `datosextrasdispositivo`
--

DROP TABLE IF EXISTS `datosextrasdispositivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datosextrasdispositivo` (
  `idDatosDispositivo` int NOT NULL AUTO_INCREMENT,
  `Marca` varchar(45) NOT NULL,
  `Modelo` varchar(45) NOT NULL,
  PRIMARY KEY (`idDatosDispositivo`),
  UNIQUE KEY `Modelo_UNIQUE` (`Modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosextrasdispositivo`
--

LOCK TABLES `datosextrasdispositivo` WRITE;
/*!40000 ALTER TABLE `datosextrasdispositivo` DISABLE KEYS */;
INSERT INTO `datosextrasdispositivo` VALUES (1,'LENOVO','V530s'),(2,'LENOVO','ThinkStation P330 Tower Gen 2'),(3,'LENOVO','ThinkSystem ST550'),(4,'LENOVO','ThinPad L490'),(5,'EPSON','PowerLite W05+'),(6,'HP','ScanJet Pro2000 s2'),(7,'HP','ScanJet Pro4500 fn1'),(8,'HP','Z6 G4'),(10,'HP','Z2 G4'),(11,'EPSON','SureColor T5470'),(12,'APPLE','IMAC 21.5'),(13,'HP','LaserJet MFP E72535'),(14,'HP','408dn'),(15,'HP','MFP E57540'),(16,'HP','Pro M454dw'),(17,'HP','MFP M430'),(18,'HP','MFP E77822'),(19,'HUAWEI','eSpace 7910'),(20,'HUAWEI','eSpace 7950'),(21,'HUAWEI','eSpace 8950');
/*!40000 ALTER TABLE `datosextrasdispositivo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-30 14:13:47
