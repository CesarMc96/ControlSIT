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
-- Table structure for table `concentrado_historico`
--

DROP TABLE IF EXISTS `concentrado_historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `concentrado_historico` (
  `idConcentrado` int NOT NULL AUTO_INCREMENT,
  `IP` varchar(45) NOT NULL,
  `Nodo_red` varchar(45) NOT NULL,
  `equipoExt` int DEFAULT NULL,
  `idUsuario` int DEFAULT NULL,
  `idResguardante` int DEFAULT NULL,
  `VLAN` varchar(45) NOT NULL,
  `Puerto_Switch` varchar(45) NOT NULL,
  `Switch` varchar(45) DEFAULT NULL,
  `Rack` varchar(45) NOT NULL,
  `Comentario` varchar(450) DEFAULT NULL,
  `idbitacora` int DEFAULT NULL,
  PRIMARY KEY (`idConcentrado`),
  KEY `fk_Concentrado_Empleado11_idx` (`idUsuario`) /*!80000 INVISIBLE */,
  KEY `fk_Concentrado_Empleado22_idx` (`idResguardante`),
  KEY `equipoExt_idx` (`equipoExt`),
  KEY `fk_Concentrado_Bitacora_idx` (`idbitacora`),
  CONSTRAINT `fk_Concentrado_Bitacora` FOREIGN KEY (`idbitacora`) REFERENCES `bitacora` (`idbitacora`),
  CONSTRAINT `fk_Concentrado_Empleado11` FOREIGN KEY (`idUsuario`) REFERENCES `empleado` (`idEmpleado`),
  CONSTRAINT `fk_Concentrado_Empleado22` FOREIGN KEY (`idResguardante`) REFERENCES `empleado` (`idEmpleado`),
  CONSTRAINT `fk_Concentrado_Equipo11` FOREIGN KEY (`equipoExt`) REFERENCES `equipo` (`idEquipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concentrado_historico`
--

LOCK TABLES `concentrado_historico` WRITE;
/*!40000 ALTER TABLE `concentrado_historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `concentrado_historico` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-24 13:48:35
