-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `eons`
--

DROP TABLE IF EXISTS `eons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eons` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eons`
--

LOCK TABLES `eons` WRITE;
/*!40000 ALTER TABLE `eons` DISABLE KEYS */;
INSERT INTO `eons` VALUES (1,'Hadeano','2025-08-18 17:34:30','2025-08-18 17:34:30'),(2,'Arqueano','2025-08-18 17:34:30','2025-08-18 17:34:30'),(3,'Proterozoico','2025-08-18 17:34:30','2025-08-18 17:34:30'),(4,'Fanerozoico','2025-08-18 17:34:30','2025-08-18 17:34:30');
/*!40000 ALTER TABLE `eons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eras`
--

DROP TABLE IF EXISTS `eras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imagem` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `eon_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eras_eon_id_foreign` (`eon_id`),
  CONSTRAINT `eras_eon_id_foreign` FOREIGN KEY (`eon_id`) REFERENCES `eons` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eras`
--

LOCK TABLES `eras` WRITE;
/*!40000 ALTER TABLE `eras` DISABLE KEYS */;
INSERT INTO `eras` VALUES (1,'Eoarqueano',NULL,NULL,2,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(2,'Paleoarqueano',NULL,NULL,2,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(3,'Mesoarqueano',NULL,NULL,2,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(4,'Neoarqueano',NULL,NULL,2,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(5,'Paleoproterozoico',NULL,NULL,3,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(6,'Mesoproterozoico',NULL,NULL,3,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(7,'Neoproterozoico',NULL,NULL,3,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(8,'Paleozoico',NULL,NULL,4,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(9,'Mesozoico',NULL,NULL,4,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(10,'Cenozoico',NULL,NULL,4,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(11,'Pre-Arquenano',NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `eras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `periodos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `era_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `periodos_era_id_foreign` (`era_id`),
  CONSTRAINT `periodos_era_id_foreign` FOREIGN KEY (`era_id`) REFERENCES `eras` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
INSERT INTO `periodos` VALUES (1,'Cambriano',NULL,8,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(2,'Ordoviciano',NULL,8,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(3,'Siluriano',NULL,8,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(4,'Devoniano',NULL,8,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(5,'Carbonifero',NULL,8,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(6,'Permiano',NULL,8,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(7,'Triassico',NULL,9,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(8,'Jurassico',NULL,9,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(9,'Cretaceo',NULL,9,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(10,'Paleogeno',NULL,10,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(11,'Neogeno',NULL,10,'2025-08-18 17:34:30','2025-08-18 17:34:30'),(12,'Quartenario',NULL,10,'2025-08-18 17:34:30','2025-08-18 17:34:30');
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-29 20:04:43
