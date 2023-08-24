-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: leavemanagementdb
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `leaveledger`
--

DROP TABLE IF EXISTS `leaveledger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leaveledger` (
  `SlNo` int NOT NULL AUTO_INCREMENT,
  `empId` int NOT NULL,
  `leaveCode` varchar(45) NOT NULL,
  `openingBalance` int DEFAULT NULL,
  `leaveCredit` int DEFAULT NULL,
  `leaveUsed` int DEFAULT NULL,
  `closingBalance` int DEFAULT NULL,
  PRIMARY KEY (`SlNo`),
  KEY `empIdFK2_idx` (`empId`),
  KEY `leaveCodeFK2_idx` (`leaveCode`),
  CONSTRAINT `empIdFK2` FOREIGN KEY (`empId`) REFERENCES `employee` (`empId`),
  CONSTRAINT `leaveCodeFK2` FOREIGN KEY (`leaveCode`) REFERENCES `leavemaster` (`leaveCode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaveledger`
--

LOCK TABLES `leaveledger` WRITE;
/*!40000 ALTER TABLE `leaveledger` DISABLE KEYS */;
INSERT INTO `leaveledger` VALUES (1,202301,'EL',250,30,5,275);
/*!40000 ALTER TABLE `leaveledger` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-03  1:31:54
