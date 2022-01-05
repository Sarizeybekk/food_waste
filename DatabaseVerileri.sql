-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: deneme
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `ilan`
--

DROP TABLE IF EXISTS `ilan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ilan` (
  `id` int NOT NULL,
  `ilan_baslik` varchar(45) DEFAULT NULL,
  `ilan_aciklama` varchar(500) DEFAULT NULL,
  `yayinda` tinyint DEFAULT '0',
  `ilan_yayin_tarihi` date DEFAULT NULL,
  `yayinlayan_userFK` int DEFAULT NULL,
  `ilan_type` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ilan`
--

LOCK TABLES `ilan` WRITE;
/*!40000 ALTER TABLE `ilan` DISABLE KEYS */;
INSERT INTO `ilan` VALUES (0,'restaurant1','Artan sıcak çorbamızı sizlerle paylaşmak isteriz',0,'2020-02-02',0,1),(1,'restaurant2','Açık büfede kalan ürünleri sizlerle paylaşmak isteriz',0,'2020-02-02',0,1),(2,'A marketi','Rengi degişmekte olan meyve ve sebzeleri sizlere ulaştırmak isteriz',0,'2020-02-02',0,2),(3,'B marketi','Son kullanma tarihi yakın olan sütleri ihtiyaç sahiplerine ulaştırmak isteriz.',0,'2020-02-02',0,2),(4,'A fırını','Dünden kalan bayat ekmekleri degerlendirmek ister misiniz ?',0,'2020-02-02',0,3),(5,'B fırını','Günlük artan ekmekleri ihtiyaç sahiplerine ulaştımrk isteriz',0,'2020-02-02',0,3);
/*!40000 ALTER TABLE `ilan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(100) DEFAULT NULL,
  `soyad` varchar(100) DEFAULT NULL,
  `cinsiyet` varchar(100) DEFAULT NULL,
  `dogum_tarihi` varchar(100) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `telefon_numarasi` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `kullanici_adi` varchar(100) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,'$asdsad','asds','$add'),(2,NULL,NULL,NULL,NULL,NULL,NULL,'sdfdsasd@gmail.com','deneme123','202cb962ac59075b964b07152d234b70'),(3,NULL,NULL,NULL,NULL,NULL,NULL,'sultansrzybk@gmail.com','deneme12','81dc9bdb52d04dc20036dbd8313ed055'),(4,NULL,NULL,NULL,NULL,NULL,NULL,'asjda@gmail.com','a','0cc175b9c0f1b6a831c399e269772661'),(5,NULL,NULL,NULL,NULL,NULL,NULL,'sultansrzybk@gmail.com','Sultan123','81dc9bdb52d04dc20036dbd8313ed055'),(6,NULL,NULL,NULL,NULL,NULL,NULL,'deneme1@gmail.com.tr','a','0cc175b9c0f1b6a831c399e269772661'),(7,NULL,NULL,NULL,NULL,NULL,NULL,'','Sultan35','12345');
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

-- Dump completed on 2021-06-14 23:31:07
