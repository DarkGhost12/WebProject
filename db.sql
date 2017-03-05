-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: bioshare
-- ------------------------------------------------------
-- Server version	5.5.46-0+deb8u1

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
-- Table structure for table `Productors`
--

DROP TABLE IF EXISTS `Productors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Productors` (
  `ProductorID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductorUserID` int(11) DEFAULT NULL,
  `ProductorComment` text,
  `ProductorEnabled` tinyint(4) DEFAULT '1',
  `ProductorRating` float DEFAULT NULL,
  PRIMARY KEY (`ProductorID`),
  KEY `Second` (`ProductorUserID`),
  KEY `FK1` (`ProductorUserID`),
  CONSTRAINT `FK1` FOREIGN KEY (`ProductorUserID`) REFERENCES `Users` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Productors`
--

LOCK TABLES `Productors` WRITE;
/*!40000 ALTER TABLE `Productors` DISABLE KEYS */;
INSERT INTO `Productors` VALUES (1,1,NULL,1,0);
/*!40000 ALTER TABLE `Productors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Productors_Products`
--

DROP TABLE IF EXISTS `Productors_Products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Productors_Products` (
  `PPID` int(11) NOT NULL AUTO_INCREMENT,
  `PPProductorID` int(11) DEFAULT NULL,
  `PPProductID` int(11) DEFAULT NULL,
  `PPDeliverArea` text,
  `PPEnabled` int(1) DEFAULT '1',
  PRIMARY KEY (`PPID`),
  KEY `Second` (`PPProductorID`),
  KEY `Third` (`PPProductID`),
  KEY `FK` (`PPProductorID`),
  KEY `FK2` (`PPProductID`),
  CONSTRAINT `FK` FOREIGN KEY (`PPProductorID`) REFERENCES `Productors` (`ProductorID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK2` FOREIGN KEY (`PPProductID`) REFERENCES `Products` (`ProductID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Productors_Products`
--

LOCK TABLES `Productors_Products` WRITE;
/*!40000 ALTER TABLE `Productors_Products` DISABLE KEYS */;
INSERT INTO `Productors_Products` VALUES (1,1,1,NULL,NULL);
/*!40000 ALTER TABLE `Productors_Products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Products`
--

DROP TABLE IF EXISTS `Products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Products` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductDenom` varchar(45) DEFAULT NULL,
  `ProductDescription` text,
  `ProductComment` text,
  `ProductEnabled` tinyint(4) DEFAULT '1',
  `ProductQuantity` int(11) DEFAULT NULL,
  `ProductQuality` text,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Products`
--

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;
INSERT INTO `Products` VALUES (1,'Apples','Testing',NULL,1,10,'test');
/*!40000 ALTER TABLE `Products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Products_List`
--

DROP TABLE IF EXISTS `Products_List`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Products_List` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `ProductName` text,
  `ProductImageName` text,
  `ProductCounter` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Products_List`
--

LOCK TABLES `Products_List` WRITE;
/*!40000 ALTER TABLE `Products_List` DISABLE KEYS */;
INSERT INTO `Products_List` VALUES (1,'Apples',NULL,'Kilos'),(2,'Oranges',NULL,'Kilos'),(3,'Banana',NULL,'Units');
/*!40000 ALTER TABLE `Products_List` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservations`
--

DROP TABLE IF EXISTS `Reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservations` (
  `ReservationID` int(11) NOT NULL AUTO_INCREMENT,
  `RPPID` int(11) DEFAULT NULL,
  `RUserID` int(11) DEFAULT NULL,
  `ReservationQuantity` double DEFAULT NULL,
  `RDelivery` bit(1) DEFAULT NULL,
  `RPickup` bit(1) DEFAULT b'1',
  `RPUDelDTG` datetime DEFAULT NULL,
  `RFinished` tinyint(4) DEFAULT '0',
  `RComment` text,
  `REnabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`ReservationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservations`
--

LOCK TABLES `Reservations` WRITE;
/*!40000 ALTER TABLE `Reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `Reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservations_Notations`
--

DROP TABLE IF EXISTS `Reservations_Notations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservations_Notations` (
  `RNID` int(11) NOT NULL AUTO_INCREMENT,
  `RNReservationID` int(11) DEFAULT NULL,
  `RNPPPoints` int(11) DEFAULT NULL,
  `RNProductorPoints` int(11) DEFAULT NULL,
  `RNUserPoints` int(11) DEFAULT NULL,
  `RNProductPoints` int(11) DEFAULT NULL,
  `RNComment` text,
  `RNEnabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`RNID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservations_Notations`
--

LOCK TABLES `Reservations_Notations` WRITE;
/*!40000 ALTER TABLE `Reservations_Notations` DISABLE KEYS */;
/*!40000 ALTER TABLE `Reservations_Notations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(150) DEFAULT NULL,
  `UserLastname` varchar(45) DEFAULT NULL,
  `UserFirstname` varchar(45) DEFAULT NULL,
  `UserNickname` varchar(45) DEFAULT NULL,
  `UserAddress` varchar(100) DEFAULT NULL,
  `UserZip` varchar(10) DEFAULT NULL,
  `UserCity` varchar(45) DEFAULT NULL,
  `UserPhone` varchar(45) DEFAULT NULL,
  `UserPhone2` varchar(45) DEFAULT NULL,
  `UserComment` text,
  `UserEnabled` tinyint(4) DEFAULT '1',
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'test@test.com','test','test','test','test','12345','testcity','02222222222','','',1,'test');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-05 12:38:51
