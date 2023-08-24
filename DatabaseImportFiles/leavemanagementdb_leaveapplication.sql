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
-- Table structure for table `leaveapplication`
--

DROP TABLE IF EXISTS `leaveapplication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leaveapplication` (
  `ApplicationId` int NOT NULL AUTO_INCREMENT,
  `empId` int NOT NULL,
  `leaveCode` varchar(45) NOT NULL,
  `applDate` date NOT NULL,
  `leaveFrom` date NOT NULL,
  `leaveTo` date NOT NULL,
  `leaveReason` varchar(100) NOT NULL,
  `leaveApproved` varchar(50) NOT NULL,
  `leaveApprovedOn` date NOT NULL,
  PRIMARY KEY (`ApplicationId`),
  KEY `empId_idx` (`empId`),
  KEY `leaveCodeFK_idx` (`leaveCode`),
  CONSTRAINT `empIdFK1` FOREIGN KEY (`empId`) REFERENCES `employee` (`empId`),
  CONSTRAINT `leaveCodeFK` FOREIGN KEY (`leaveCode`) REFERENCES `leavemaster` (`leaveCode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaveapplication`
--

LOCK TABLES `leaveapplication` WRITE;
/*!40000 ALTER TABLE `leaveapplication` DISABLE KEYS */;
INSERT INTO `leaveapplication` VALUES (1,202301,'EL','2023-07-20','2023-07-22','2023-07-29','Medical ','YES','2023-07-21'),(2,202304,'CL','2023-07-21','2010-08-02','2023-08-10','LTC','YES','2023-07-23');
/*!40000 ALTER TABLE `leaveapplication` ENABLE KEYS */;
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
