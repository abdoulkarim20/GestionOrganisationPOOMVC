-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: POO_MVC_PHP
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `communes`
--

DROP TABLE IF EXISTS `communes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `communes` (
  `idCommune` int NOT NULL AUTO_INCREMENT,
  `nomCommune` varchar(100) NOT NULL,
  `fk_idDepartement` int NOT NULL,
  PRIMARY KEY (`idCommune`),
  UNIQUE KEY `nomCommune` (`nomCommune`),
  KEY `fk_idDepartement` (`fk_idDepartement`),
  CONSTRAINT `communes_ibfk_1` FOREIGN KEY (`fk_idDepartement`) REFERENCES `departements` (`idDepartement`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `communes`
--

LOCK TABLES `communes` WRITE;
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
INSERT INTO `communes` VALUES (1,'Medina',1),(2,'Mermoze',1),(3,'commune touba',3);
/*!40000 ALTER TABLE `communes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departements`
--

DROP TABLE IF EXISTS `departements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departements` (
  `idDepartement` int NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(150) NOT NULL,
  `fk_regionId` int NOT NULL,
  PRIMARY KEY (`idDepartement`),
  UNIQUE KEY `nomDepartement` (`nomDepartement`),
  KEY `fk_regionId` (`fk_regionId`),
  CONSTRAINT `departements_ibfk_1` FOREIGN KEY (`fk_regionId`) REFERENCES `regions` (`idRegion`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departements`
--

LOCK TABLES `departements` WRITE;
/*!40000 ALTER TABLE `departements` DISABLE KEYS */;
INSERT INTO `departements` VALUES (1,'Dep_Dakar',1),(2,'Dakar Departement',1),(3,'departement-Touba',18);
/*!40000 ALTER TABLE `departements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `domaines` (
  `idDomaine` int NOT NULL AUTO_INCREMENT,
  `nomDomaine` varchar(100) NOT NULL,
  PRIMARY KEY (`idDomaine`),
  UNIQUE KEY `nomDomaine` (`nomDomaine`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaines`
--

LOCK TABLES `domaines` WRITE;
/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
INSERT INTO `domaines` VALUES (2,'couture'),(1,'Informatique');
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entreprises` (
  `idEntreprise` int NOT NULL AUTO_INCREMENT,
  `nomEntreprise` varchar(100) NOT NULL,
  `conrdonneeGPS` varchar(200) NOT NULL,
  `siegeSociale` varchar(150) NOT NULL,
  `dateCreation` date DEFAULT NULL,
  `registreCommerce` varchar(100) NOT NULL,
  `NINEA` varchar(100) NOT NULL,
  `pageWeb` varchar(200) DEFAULT NULL,
  `nombreEmployer` varchar(20) DEFAULT NULL,
  `contratFormel` varchar(20) DEFAULT NULL,
  `organigrammeRespecter` varchar(20) DEFAULT NULL,
  `dispositifFormation` varchar(20) DEFAULT NULL,
  `questionSociale` varchar(20) DEFAULT NULL,
  `fk_idQuartier` int NOT NULL,
  `fk_idRepondant` int NOT NULL,
  `fk_idDomaine` int NOT NULL,
  `fk_idRegimeJuridique` int NOT NULL,
  PRIMARY KEY (`idEntreprise`),
  UNIQUE KEY `nomEntreprise` (`nomEntreprise`),
  KEY `fk_idQuartier` (`fk_idQuartier`),
  KEY `fk_idRepondant` (`fk_idRepondant`),
  KEY `fk_idDomaine` (`fk_idDomaine`),
  KEY `fk_idRegimeJuridique` (`fk_idRegimeJuridique`),
  CONSTRAINT `entreprises_ibfk_1` FOREIGN KEY (`fk_idQuartier`) REFERENCES `quartiers` (`idQuartier`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `entreprises_ibfk_2` FOREIGN KEY (`fk_idRepondant`) REFERENCES `repondants` (`idRepondant`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `entreprises_ibfk_3` FOREIGN KEY (`fk_idDomaine`) REFERENCES `domaines` (`idDomaine`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `entreprises_ibfk_4` FOREIGN KEY (`fk_idRegimeJuridique`) REFERENCES `regimeJuridiques` (`idRegime`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entreprises`
--

LOCK TABLES `entreprises` WRITE;
/*!40000 ALTER TABLE `entreprises` DISABLE KEYS */;
INSERT INTO `entreprises` VALUES (9,'Simplon Senegal','Dakar Cite keur Gorgui','Mormoz','2022-03-18','Prive-Ecole-Numerique','00-AABY','simplon.sn','1 a 5','Oui','Oui','Oui','Oui',3,1,1,1),(22,'Abdoul karim DIALLOjjdj','fjfj','g','2022-03-19','g','g','h','1 a 5','Oui','Oui','Oui','Oui',4,1,1,1),(23,'fkfkfkfk','fkkfkfk','ffjjfjfj','2022-03-26','vn','gj','ggy','plus','Oui','Oui','Oui','Non',1,1,1,1),(24,'kaolkdk','fh','fh','2022-03-12','fu','gk','vn','plus','Non','Non','Non','Non',5,2,1,1),(25,'hb','nb','m','2022-03-19','mk','hy','ll','1 a 5','Oui','Oui','Oui','Oui',5,2,1,1),(26,'v','b','b','2022-03-12','h','ggg','t','plus','Non','Non','Non','Non',3,2,1,1),(27,'Touba Couture','limaaye cite Touba@','Touba-Touba cisee','2022-03-12','TT-R%','nean','oktes.touba','5 a 15','Non','Non','Oui','Oui',7,2,1,1),(28,'Touba 3','coordonnees touba ','siege de touba','2022-03-19','comerciale','ok nines','touba ','1 a 5','Oui','Oui','Oui','Oui',7,2,2,2);
/*!40000 ALTER TABLE `entreprises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quartiers`
--

DROP TABLE IF EXISTS `quartiers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quartiers` (
  `idQuartier` int NOT NULL AUTO_INCREMENT,
  `nomQuartier` varchar(200) NOT NULL,
  `fk_idCommune` int NOT NULL,
  PRIMARY KEY (`idQuartier`),
  UNIQUE KEY `nomQuartier` (`nomQuartier`),
  KEY `fk_idCommune` (`fk_idCommune`),
  CONSTRAINT `quartiers_ibfk_1` FOREIGN KEY (`fk_idCommune`) REFERENCES `communes` (`idCommune`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quartiers`
--

LOCK TABLES `quartiers` WRITE;
/*!40000 ALTER TABLE `quartiers` DISABLE KEYS */;
INSERT INTO `quartiers` VALUES (1,'Grand Dakar',1),(2,'Colobane',1),(3,'HLM',1),(4,'Mermoze',1),(5,'Khar yallah',1),(6,'Sacree Coeur',2),(7,'Quartier touba',3);
/*!40000 ALTER TABLE `quartiers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regimeJuridiques`
--

DROP TABLE IF EXISTS `regimeJuridiques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regimeJuridiques` (
  `idRegime` int NOT NULL AUTO_INCREMENT,
  `libelleRegime` varchar(100) NOT NULL,
  PRIMARY KEY (`idRegime`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regimeJuridiques`
--

LOCK TABLES `regimeJuridiques` WRITE;
/*!40000 ALTER TABLE `regimeJuridiques` DISABLE KEYS */;
INSERT INTO `regimeJuridiques` VALUES (1,'SARL'),(2,'regime 2');
/*!40000 ALTER TABLE `regimeJuridiques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regions` (
  `idRegion` int NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(200) NOT NULL,
  PRIMARY KEY (`idRegion`),
  UNIQUE KEY `nomRegion` (`nomRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Dakar'),(18,'Touba ');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repondants`
--

DROP TABLE IF EXISTS `repondants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `repondants` (
  `idRepondant` int NOT NULL AUTO_INCREMENT,
  `nomCompletRepondant` varchar(255) NOT NULL,
  `fonctionRepondant` varchar(100) NOT NULL,
  `telephoneRepondant` varchar(15) NOT NULL,
  `emailRepondant` varchar(200) NOT NULL,
  PRIMARY KEY (`idRepondant`),
  UNIQUE KEY `telephoneRepondant` (`telephoneRepondant`),
  UNIQUE KEY `emailRepondant` (`emailRepondant`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repondants`
--

LOCK TABLES `repondants` WRITE;
/*!40000 ALTER TABLE `repondants` DISABLE KEYS */;
INSERT INTO `repondants` VALUES (1,'Abdoul Karim DIALLO','DSI SotelGUI','781659948','jabbar@email.com'),(2,'Fatou','OULARE','664346363','oulare@gmail.com');
/*!40000 ALTER TABLE `repondants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenoms` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `motPass` varchar(100) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'doumbouya','Mariame Lamarana','abdoulkarimfoly1996@gmail.com','djdjd'),(7,'DIA','Mariame Lamarana','admin@gmail.com','23'),(8,'DIOUF ','Thierno Oumar','oumar@gmail.com','123'),(9,'DIALLO','Abdoul Karim','jabbar@gmail.com','passer');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-12 20:24:06
