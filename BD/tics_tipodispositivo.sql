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
-- Table structure for table `tipodispositivo`
--

DROP TABLE IF EXISTS `tipodispositivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipodispositivo` (
  `idTipoDispositivo` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idTipoDispositivo`),
  UNIQUE KEY `Nombre_UNIQUE` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodispositivo`
--

LOCK TABLES `tipodispositivo` WRITE;
/*!40000 ALTER TABLE `tipodispositivo` DISABLE KEYS */;
INSERT INTO `tipodispositivo` VALUES (1,'D2','Equipo de Escritorio Ligero'),(2,'D3','Equipo de Escritorio Intermedio'),(3,'D4','Equipo de Escritorio Especializado/Tipo Servidor de Desarrollo'),(4,'E6','Servidor Departamental'),(5,'L2','Equipo Portátil (Laptop Intermedia)'),(6,'L3','Equipo Portátil Especializado (Laptop WorkStation)'),(7,'P09','Video Proyector'),(8,'E8','Escáner Departamental de 20 ppm'),(9,'E10','Escáner de Cama Plana'),(10,'E2','Microcomputadora Geográfica'),(11,'E3','Microcomputadora Geomática'),(12,'E4','Microcomputadora Hidrológica'),(13,'E1','Graficador'),(14,'M2','Equipo Apple de Escritorio'),(16,'Multifuncional BN','Blanco y Negro'),(17,'Impresora BN','Blanco y Negro'),(18,'Multifuncional','Color'),(19,'Impresora ','Color'),(20,'Teléfono',NULL);
/*!40000 ALTER TABLE `tipodispositivo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-24 13:48:34
