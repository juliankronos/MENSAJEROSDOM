-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: domina
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asignacions`
--

DROP TABLE IF EXISTS `asignacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignacions` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `SEDE` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `CIUDAD` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `MENSAJERO` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `VEHICULO` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `PLACA` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `CLIENTE` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `GUIA` int DEFAULT NULL,
  `FECHA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  UNIQUE KEY `GUIA` (`GUIA`),
  KEY `asignacion_FK` (`USUARIO`),
  KEY `asignacion_FK_1` (`SEDE`),
  KEY `asignacion_FK_3` (`MENSAJERO`),
  KEY `asignacion_FK_4` (`VEHICULO`),
  KEY `asignacion_FK_2` (`CIUDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignacions`
--

LOCK TABLES `asignacions` WRITE;
/*!40000 ALTER TABLE `asignacions` DISABLE KEYS */;
INSERT INTO `asignacions` VALUES (1,'Nydia   Salamanca Moreno ','Tunja','Duitama','Juan Camilo Morales','Bicicleta','asad23','Alfa   Alfa ',1,'2023-04-07 05:06:10'),(2,'Nydia   Salamanca Moreno ','Tunja','Duitama','Juan Camilo Morales','Bicicleta','asad23','Alfa   Alfa ',2,'2023-04-07 05:06:15'),(3,'Nydia   Salamanca Moreno ','Tunja','Duitama','Juan Camilo Morales','Bicicleta','asad23','Alfa   Alfa ',3,'2023-04-07 05:06:21'),(4,'Nydia   Salamanca','Tunja','Tunja','Juan Camilo Morales','Carro','avn123','Alfa   Alfa',4,'2023-04-14 03:36:25'),(5,'Nydia   Salamanca','Tunja','Tunja','Juan Camilo Morales','Moto','asd123q','Alfa   Alfa',5,'2023-04-14 03:39:43'),(6,'Nydia   Salamanca','Tunja','Tunja','Juan Camilo Morales','Moto','asd123q','Alfa   Alfa',6,'2023-04-14 03:42:04'),(7,'Nydia   Salamanca','Tunja','Tunja','Juan Camilo Morales','Moto','asd123q','Alfa   Alfa',7,'2023-04-14 03:39:43'),(8,'Nydia   Salamanca','Tunja','Tunja','Juan Camilo Morales','Moto','asd123q','Alfa   Alfa',8,'2023-04-14 03:39:43'),(9,'Nydia   Salamanca','Tunja','Tunja','Juan Camilo Morales','Moto','asd123q','Alfa   Alfa',9,'2023-04-14 03:39:43'),(10,'Nydia   Salamanca','Tunja','Tunja','Juan Camilo Morales','Moto','asd123q','Alfa   Alfa',10,'2023-04-14 03:39:43'),(11,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',11,'2023-04-14 03:43:44'),(12,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',12,'2023-04-14 03:43:44'),(13,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',13,'2023-04-14 03:43:44'),(14,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',14,'2023-04-14 03:43:44'),(15,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',15,'2023-04-14 03:43:44'),(16,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',16,'2023-04-14 03:43:44'),(17,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',17,'2023-04-14 03:43:44'),(18,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',18,'2023-04-14 03:43:44'),(19,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',19,'2023-04-14 03:43:44'),(20,'Julian   Mahecha','Duitama','Villa De Leyva','Benjamin Perdomo','A Pie','n/a','Beta   Beta',20,'2023-04-14 03:43:44'),(21,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',21,'2023-04-14 03:45:25'),(22,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',22,'2023-04-14 03:45:25'),(23,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',23,'2023-04-14 03:45:25'),(24,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',24,'2023-04-14 03:45:25'),(25,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',25,'2023-04-14 03:45:25'),(26,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',26,'2023-04-14 03:45:25'),(27,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',27,'2023-04-14 03:45:25'),(28,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',28,'2023-04-14 03:45:25'),(29,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',29,'2023-04-14 03:45:25'),(30,'Sandra   Rodriguez','Tunja','Sogamoso','Wilson Pinzon','Van','asd123q','Alfa   Alfa',30,'2023-04-14 03:45:25');
/*!40000 ALTER TABLE `asignacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ciudades` (
  `codigo` int NOT NULL,
  `CIciudad` varchar(150) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudades`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` VALUES (201,'Tunja'),(202,'Paipa'),(203,'Duitama'),(204,'Sogamoso'),(205,'Villa De Leyva'),(206,'Chiquinquira');
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `Ced` int DEFAULT NULL,
  `Clinombres` varchar(45) DEFAULT NULL,
  `Cliapellidos` varchar(45) DEFAULT NULL,
  `Clitelefono` varchar(45) DEFAULT NULL,
  `Cliedad` varchar(45) DEFAULT NULL,
  UNIQUE KEY `Ced_UNIQUE` (`Ced`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Alfa','Alfa','12','50'),(2,'Beta','Beta','13','32'),(NULL,NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajeros`
--

DROP TABLE IF EXISTS `mensajeros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mensajeros` (
  `MENced` int DEFAULT NULL,
  `MENnombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `ced_UNIQUE` (`MENced`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajeros`
--

LOCK TABLES `mensajeros` WRITE;
/*!40000 ALTER TABLE `mensajeros` DISABLE KEYS */;
INSERT INTO `mensajeros` VALUES (101,'Benjamin Perdomo'),(102,'Carlos Molina'),(103,'Juan Camilo Morales'),(104,'Oscar Gonzalez'),(105,'Wilson Pinzon'),(106,'David Rodriguez'),(NULL,NULL),(NULL,NULL),(NULL,NULL);
/*!40000 ALTER TABLE `mensajeros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sedes`
--

DROP TABLE IF EXISTS `sedes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sedes` (
  `SEid` int NOT NULL,
  `sede` varchar(60) NOT NULL,
  PRIMARY KEY (`SEid`),
  UNIQUE KEY `id_UNIQUE` (`SEid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sedes`
--

LOCK TABLES `sedes` WRITE;
/*!40000 ALTER TABLE `sedes` DISABLE KEYS */;
INSERT INTO `sedes` VALUES (2001,'Tunja'),(2002,'Duitama');
/*!40000 ALTER TABLE `sedes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `USid` int DEFAULT NULL,
  `USnombres` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `USapellidos` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `UScargo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `USid_UNIQUE` (`USid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (12345,'Nydia','Salamanca','prueba'),(46680156,'Sandra','Rodriguez','AUXILIAR'),(79220098,'Julian','Mahecha','COORDINADOR');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehiculos` (
  `Vid` int NOT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`Vid`),
  UNIQUE KEY `id_UNIQUE` (`Vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (1,'A Pie'),(2,'Bicicleta'),(3,'Moto'),(4,'Carro'),(5,'Van'),(6,'Furgon');
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'domina'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-29  0:47:47
