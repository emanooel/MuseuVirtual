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
-- Table structure for table `anotacoes_foto`
--

DROP TABLE IF EXISTS `anotacoes_foto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anotacoes_foto` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `foto_id` bigint unsigned NOT NULL,
  `x` decimal(8,2) NOT NULL,
  `y` decimal(8,2) NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anotacoes_foto_foto_id_foreign` (`foto_id`),
  CONSTRAINT `anotacoes_foto_foto_id_foreign` FOREIGN KEY (`foto_id`) REFERENCES `fotos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anotacoes_foto`
--

LOCK TABLES `anotacoes_foto` WRITE;
/*!40000 ALTER TABLE `anotacoes_foto` DISABLE KEYS */;
INSERT INTO `anotacoes_foto` VALUES (1,17,973.80,404.77,'corresponde provavelmente a sílex (chert) ou obsidiana, materiais silicosos de origem vulcânica ou sedimentar, que apresentam fratura conchoidal.','2025-09-22 14:12:54','2025-09-22 14:12:54'),(2,17,973.80,404.77,'corresponde provavelmente a sílex (chert) ou obsidiana, materiais silicosos de origem vulcânica ou sedimentar, que apresentam fratura conchoidal.','2025-09-22 14:13:27','2025-09-22 14:13:27'),(3,17,456.02,640.01,'podem ser fenocristais (quartzo/feldspato) presos no vidro vulcânico ou mineralizações secundárias (calcita, argilas, carbonatos) preenchendo microfraturas.','2025-09-22 14:13:27','2025-09-22 14:13:27'),(4,17,973.80,404.77,'corresponde provavelmente a sílex (chert) ou obsidiana, materiais silicosos de origem vulcânica ou sedimentar, que apresentam fratura conchoidal.','2025-09-22 14:15:15','2025-09-22 14:15:15'),(5,17,456.02,640.01,'podem ser fenocristais (quartzo/feldspato) presos no vidro vulcânico ou mineralizações secundárias (calcita, argilas, carbonatos) preenchendo microfraturas.','2025-09-22 14:15:15','2025-09-22 14:15:15'),(6,17,248.38,398.20,'indica matriz rochosa alterada, que pode ser sedimentar (caso do sílex embutido em calcário/marga) ou alteração superficial por intemperismo.','2025-09-22 14:15:15','2025-09-22 14:15:15');
/*!40000 ALTER TABLE `anotacoes_foto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aquisicoes`
--

DROP TABLE IF EXISTS `aquisicoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aquisicoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `era_id` bigint unsigned DEFAULT NULL,
  `periodo_id` bigint unsigned DEFAULT NULL,
  `rocha_id` bigint unsigned DEFAULT NULL,
  `mineral_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aquisicoes_era_id_foreign` (`era_id`),
  KEY `aquisicoes_periodo_id_foreign` (`periodo_id`),
  KEY `aquisicoes_rocha_id_foreign` (`rocha_id`),
  KEY `aquisicoes_mineral_id_foreign` (`mineral_id`),
  CONSTRAINT `aquisicoes_era_id_foreign` FOREIGN KEY (`era_id`) REFERENCES `eras` (`id`) ON DELETE CASCADE,
  CONSTRAINT `aquisicoes_mineral_id_foreign` FOREIGN KEY (`mineral_id`) REFERENCES `minerals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `aquisicoes_periodo_id_foreign` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `aquisicoes_rocha_id_foreign` FOREIGN KEY (`rocha_id`) REFERENCES `rochas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aquisicoes`
--

LOCK TABLES `aquisicoes` WRITE;
/*!40000 ALTER TABLE `aquisicoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `aquisicoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bibliotecas`
--

DROP TABLE IF EXISTS `bibliotecas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bibliotecas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuarioId` bigint unsigned NOT NULL,
  `jazidasSalvas` json DEFAULT NULL,
  `rochasSalvas` json DEFAULT NULL,
  `mineraisSalvos` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bibliotecas_usuarioid_foreign` (`usuarioId`),
  CONSTRAINT `bibliotecas_usuarioid_foreign` FOREIGN KEY (`usuarioId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bibliotecas`
--

LOCK TABLES `bibliotecas` WRITE;
/*!40000 ALTER TABLE `bibliotecas` DISABLE KEYS */;
/*!40000 ALTER TABLE `bibliotecas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('museu_virtual_mineral_es_cache_emanoelmartinsv@gmail.com|10.20.240.30','i:3;',1757954960),('museu_virtual_mineral_es_cache_emanoelmartinsv@gmail.com|10.20.240.30:timer','i:1757954960;',1757954960),('museu_virtual_mineral_es_cache_gabrag0987a@gmail.com|10.20.240.30','i:1;',1758045308),('museu_virtual_mineral_es_cache_gabrag0987a@gmail.com|10.20.240.30:timer','i:1758045308;',1758045308);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fotos`
--

DROP TABLE IF EXISTS `fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fotos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idRocha` bigint unsigned DEFAULT NULL,
  `idMineral` bigint unsigned DEFAULT NULL,
  `idJazida` bigint unsigned DEFAULT NULL,
  `capa` tinyint(1) NOT NULL,
  `caminho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fotos_idrocha_foreign` (`idRocha`),
  KEY `fotos_idmineral_foreign` (`idMineral`),
  KEY `fotos_idjazida_foreign` (`idJazida`),
  CONSTRAINT `fotos_idjazida_foreign` FOREIGN KEY (`idJazida`) REFERENCES `jazidas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fotos_idmineral_foreign` FOREIGN KEY (`idMineral`) REFERENCES `minerals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fotos_idrocha_foreign` FOREIGN KEY (`idRocha`) REFERENCES `rochas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos`
--

LOCK TABLES `fotos` WRITE;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` VALUES (1,'2025-09-12 17:55:27','2025-09-12 17:55:27',1,NULL,NULL,1,'fotos/rochas/1757699727_1747919128_Gabro4.jpg'),(2,'2025-09-12 17:55:27','2025-09-12 17:55:27',1,NULL,NULL,0,'fotos/rochas/1757699727_1747919269_Gabro1.jpg'),(3,'2025-09-12 17:55:27','2025-09-12 17:55:27',1,NULL,NULL,0,'fotos/rochas/1757699727_1747919269_Gabro2.jpg'),(4,'2025-09-12 18:37:06','2025-09-12 18:37:06',2,NULL,NULL,0,'fotos/rochas/1757702226_1748264683_EmbeddedImage (1).jpg'),(5,'2025-09-12 18:37:06','2025-09-12 18:37:06',2,NULL,NULL,0,'fotos/rochas/1757702226_1748264683_EmbeddedImage (2).jpg'),(6,'2025-09-12 18:37:06','2025-09-12 18:37:06',2,NULL,NULL,0,'fotos/rochas/1757702226_1748264683_EmbeddedImage (5).jpg'),(7,'2025-09-15 17:21:09','2025-09-15 17:21:09',NULL,1,NULL,1,'fotos/minerais/1757956869_Mica-in-rock-from-alstead.jpg'),(8,'2025-09-22 12:42:06','2025-09-22 12:42:06',3,NULL,NULL,0,'fotos/rochas/1758544926_unnamed (2).jpg'),(9,'2025-09-22 12:42:06','2025-09-22 12:42:06',3,NULL,NULL,0,'fotos/rochas/1758544926_unnamed (1).jpg'),(10,'2025-09-22 12:42:06','2025-09-22 12:42:06',3,NULL,NULL,1,'fotos/rochas/1758544926_unnamed.jpg'),(11,'2025-09-22 12:43:47','2025-09-22 12:43:47',4,NULL,NULL,1,'fotos/rochas/1758545027_unnamed (2).jpg'),(12,'2025-09-22 12:43:47','2025-09-22 12:43:47',4,NULL,NULL,0,'fotos/rochas/1758545027_unnamed (1).jpg'),(13,'2025-09-22 12:43:47','2025-09-22 12:43:47',4,NULL,NULL,0,'fotos/rochas/1758545027_unnamed.jpg'),(14,'2025-09-22 12:45:06','2025-09-22 12:45:06',5,NULL,NULL,0,'fotos/rochas/1758545106_unnamed (2).jpg'),(15,'2025-09-22 12:45:06','2025-09-22 12:45:06',5,NULL,NULL,1,'fotos/rochas/1758545106_unnamed (1).jpg'),(16,'2025-09-22 12:46:28','2025-09-22 12:46:28',6,NULL,NULL,0,'fotos/rochas/1758545188_unnamed (2).jpg'),(17,'2025-09-22 12:46:28','2025-09-22 12:46:28',6,NULL,NULL,0,'fotos/rochas/1758545188_unnamed (1).jpg'),(18,'2025-09-22 12:46:28','2025-09-22 12:46:28',6,NULL,NULL,1,'fotos/rochas/1758545188_unnamed.jpg'),(19,'2025-09-22 12:48:00','2025-09-22 12:48:00',7,NULL,NULL,0,'fotos/rochas/1758545280_unnamed (3).jpg'),(20,'2025-09-22 12:48:00','2025-09-22 12:48:00',7,NULL,NULL,0,'fotos/rochas/1758545280_unnamed (2).jpg'),(21,'2025-09-22 12:48:00','2025-09-22 12:48:00',7,NULL,NULL,0,'fotos/rochas/1758545280_unnamed (1).jpg'),(22,'2025-09-22 12:48:00','2025-09-22 12:48:00',7,NULL,NULL,1,'fotos/rochas/1758545280_unnamed.jpg'),(23,'2025-09-22 12:52:01','2025-09-22 12:52:01',8,NULL,NULL,0,'fotos/rochas/1758545521_unnamed (2).jpg'),(24,'2025-09-22 12:52:01','2025-09-22 12:52:01',8,NULL,NULL,0,'fotos/rochas/1758545521_unnamed (1).jpg'),(25,'2025-09-22 12:52:01','2025-09-22 12:52:01',8,NULL,NULL,1,'fotos/rochas/1758545521_unnamed.jpg'),(26,'2025-09-22 12:53:29','2025-09-22 12:53:29',9,NULL,NULL,1,'fotos/rochas/1758545609_unnamed (2).jpg'),(27,'2025-09-22 12:53:29','2025-09-22 12:53:29',9,NULL,NULL,0,'fotos/rochas/1758545609_unnamed (1).jpg'),(28,'2025-09-22 12:53:29','2025-09-22 12:53:29',9,NULL,NULL,0,'fotos/rochas/1758545609_unnamed.jpg'),(29,'2025-09-22 12:54:55','2025-09-22 12:54:55',10,NULL,NULL,0,'fotos/rochas/1758545695_unnamed (3).jpg'),(30,'2025-09-22 12:54:55','2025-09-22 12:54:55',10,NULL,NULL,0,'fotos/rochas/1758545695_unnamed (2).jpg'),(31,'2025-09-22 12:54:55','2025-09-22 12:54:55',10,NULL,NULL,1,'fotos/rochas/1758545695_unnamed (1).jpg'),(32,'2025-09-22 12:54:55','2025-09-22 12:54:55',10,NULL,NULL,0,'fotos/rochas/1758545695_unnamed.jpg'),(33,'2025-09-22 12:56:10','2025-09-22 12:56:10',11,NULL,NULL,0,'fotos/rochas/1758545770_unnamed (2).jpg'),(34,'2025-09-22 12:56:10','2025-09-22 12:56:10',11,NULL,NULL,0,'fotos/rochas/1758545770_unnamed (1).jpg'),(35,'2025-09-22 12:56:10','2025-09-22 12:56:10',11,NULL,NULL,1,'fotos/rochas/1758545770_unnamed.jpg'),(36,'2025-09-22 12:58:27','2025-09-22 12:58:27',12,NULL,NULL,0,'fotos/rochas/1758545907_unnamed (1).jpg'),(37,'2025-09-22 12:58:27','2025-09-22 12:58:27',12,NULL,NULL,1,'fotos/rochas/1758545907_unnamed.jpg'),(38,'2025-09-22 13:00:32','2025-09-22 13:00:32',13,NULL,NULL,1,'fotos/rochas/1758546032_unnamed (1).jpg'),(39,'2025-09-22 13:00:32','2025-09-22 13:00:32',13,NULL,NULL,0,'fotos/rochas/1758546032_unnamed.jpg'),(40,'2025-09-22 13:01:50','2025-09-22 13:01:50',14,NULL,NULL,0,'fotos/rochas/1758546110_unnamed (2).jpg'),(41,'2025-09-22 13:01:50','2025-09-22 13:01:50',14,NULL,NULL,1,'fotos/rochas/1758546110_unnamed (1).jpg'),(42,'2025-09-22 13:01:50','2025-09-22 13:01:50',14,NULL,NULL,0,'fotos/rochas/1758546110_unnamed.jpg'),(43,'2025-09-22 13:03:21','2025-09-22 13:03:21',14,NULL,NULL,0,'fotos/rochas/1758546201_unnamed (4).jpg'),(44,'2025-09-22 13:03:21','2025-09-22 13:03:21',14,NULL,NULL,0,'fotos/rochas/1758546201_unnamed (3).jpg'),(47,'2025-09-22 13:09:40','2025-09-22 13:09:40',15,NULL,NULL,1,'fotos/rochas/1758546580_unnamed (2).jpg'),(48,'2025-09-22 13:09:40','2025-09-22 13:09:40',15,NULL,NULL,0,'fotos/rochas/1758546580_unnamed (1).jpg'),(49,'2025-09-22 13:09:40','2025-09-22 13:09:40',15,NULL,NULL,0,'fotos/rochas/1758546580_unnamed.jpg'),(50,'2025-09-22 13:15:29','2025-09-22 13:15:29',16,NULL,NULL,1,'fotos/rochas/1758546929_unnamed (1).jpg'),(51,'2025-09-22 13:15:29','2025-09-22 13:15:29',16,NULL,NULL,0,'fotos/rochas/1758546929_unnamed.jpg'),(52,'2025-09-22 13:17:26','2025-09-22 13:17:26',17,NULL,NULL,0,'fotos/rochas/1758547046_unnamed (2).jpg'),(53,'2025-09-22 13:17:26','2025-09-22 13:17:26',17,NULL,NULL,0,'fotos/rochas/1758547046_unnamed (1).jpg'),(54,'2025-09-22 13:17:26','2025-09-22 13:17:26',17,NULL,NULL,1,'fotos/rochas/1758547046_unnamed.jpg'),(55,'2025-09-22 13:19:51','2025-09-22 13:19:51',18,NULL,NULL,1,'fotos/rochas/1758547191_unnamed (3).jpg'),(56,'2025-09-22 13:19:51','2025-09-22 13:19:51',18,NULL,NULL,0,'fotos/rochas/1758547191_unnamed (2).jpg'),(57,'2025-09-22 13:19:51','2025-09-22 13:19:51',18,NULL,NULL,0,'fotos/rochas/1758547191_unnamed (1).jpg'),(58,'2025-09-22 13:21:43','2025-09-22 13:21:43',19,NULL,NULL,0,'fotos/rochas/1758547303_unnamed (2).jpg'),(59,'2025-09-22 13:21:43','2025-09-22 13:21:43',19,NULL,NULL,1,'fotos/rochas/1758547303_unnamed (1).jpg'),(60,'2025-09-22 13:21:43','2025-09-22 13:21:43',19,NULL,NULL,0,'fotos/rochas/1758547303_unnamed.jpg'),(61,'2025-09-22 13:23:03','2025-09-22 13:23:03',20,NULL,NULL,1,'fotos/rochas/1758547383_unnamed (2).jpg'),(62,'2025-09-22 13:23:03','2025-09-22 13:23:03',20,NULL,NULL,0,'fotos/rochas/1758547383_unnamed (1).jpg'),(63,'2025-09-22 13:23:03','2025-09-22 13:23:03',20,NULL,NULL,0,'fotos/rochas/1758547383_unnamed.jpg'),(64,'2025-09-22 13:24:30','2025-09-22 13:24:30',21,NULL,NULL,0,'fotos/rochas/1758547470_unnamed (3).jpg'),(65,'2025-09-22 13:24:30','2025-09-22 13:24:30',21,NULL,NULL,1,'fotos/rochas/1758547470_unnamed (2).jpg'),(66,'2025-09-22 13:24:30','2025-09-22 13:24:30',21,NULL,NULL,0,'fotos/rochas/1758547470_unnamed (1).jpg'),(67,'2025-09-22 13:24:30','2025-09-22 13:24:30',21,NULL,NULL,0,'fotos/rochas/1758547470_unnamed.jpg'),(68,'2025-09-22 13:25:39','2025-09-22 13:25:39',22,NULL,NULL,1,'fotos/rochas/1758547539_unnamed (2).jpg'),(69,'2025-09-22 13:25:39','2025-09-22 13:25:39',22,NULL,NULL,0,'fotos/rochas/1758547539_unnamed (1).jpg'),(70,'2025-09-22 13:25:39','2025-09-22 13:25:39',22,NULL,NULL,0,'fotos/rochas/1758547539_unnamed.jpg'),(71,'2025-09-22 13:26:54','2025-09-22 13:26:54',23,NULL,NULL,1,'fotos/rochas/1758547614_unnamed (3).jpg'),(72,'2025-09-22 13:26:54','2025-09-22 13:26:54',23,NULL,NULL,0,'fotos/rochas/1758547614_unnamed (2).jpg'),(73,'2025-09-22 13:26:54','2025-09-22 13:26:54',23,NULL,NULL,0,'fotos/rochas/1758547614_unnamed (1).jpg'),(74,'2025-09-22 13:26:54','2025-09-22 13:26:54',23,NULL,NULL,0,'fotos/rochas/1758547614_unnamed.jpg'),(75,'2025-09-22 13:28:29','2025-09-22 13:28:29',24,NULL,NULL,1,'fotos/rochas/1758547709_unnamed (4).jpg'),(76,'2025-09-22 13:28:29','2025-09-22 13:28:29',24,NULL,NULL,0,'fotos/rochas/1758547709_unnamed (3).jpg'),(77,'2025-09-22 13:28:29','2025-09-22 13:28:29',24,NULL,NULL,0,'fotos/rochas/1758547709_unnamed (2).jpg'),(78,'2025-09-22 14:01:30','2025-09-22 14:01:30',NULL,2,NULL,1,'fotos/minerais/1758549690_unnamed (3).jpg'),(79,'2025-09-22 14:01:30','2025-09-22 14:01:30',NULL,2,NULL,0,'fotos/minerais/1758549690_unnamed (2).jpg'),(80,'2025-09-22 14:01:30','2025-09-22 14:01:30',NULL,2,NULL,0,'fotos/minerais/1758549690_unnamed (1).jpg'),(81,'2025-09-22 14:01:30','2025-09-22 14:01:30',NULL,2,NULL,0,'fotos/minerais/1758549690_unnamed.jpg'),(82,'2025-09-22 14:02:19','2025-09-22 14:02:19',NULL,3,NULL,1,'fotos/minerais/1758549739_unnamed (3).jpg'),(83,'2025-09-22 14:02:19','2025-09-22 14:02:19',NULL,3,NULL,0,'fotos/minerais/1758549739_unnamed (2).jpg'),(84,'2025-09-22 14:02:19','2025-09-22 14:02:19',NULL,3,NULL,0,'fotos/minerais/1758549739_unnamed (1).jpg'),(85,'2025-09-22 14:02:19','2025-09-22 14:02:19',NULL,3,NULL,0,'fotos/minerais/1758549739_unnamed.jpg'),(86,'2025-09-22 14:03:13','2025-09-22 14:03:13',NULL,4,NULL,0,'fotos/minerais/1758549793_unnamed (1).jpg'),(87,'2025-09-22 14:03:13','2025-09-22 14:03:13',NULL,4,NULL,1,'fotos/minerais/1758549793_unnamed.jpg'),(88,'2025-09-22 14:03:52','2025-09-22 14:03:52',NULL,5,NULL,1,'fotos/minerais/1758549832_unnamed (3).jpg'),(89,'2025-09-22 14:03:52','2025-09-22 14:03:52',NULL,5,NULL,0,'fotos/minerais/1758549832_unnamed (2).jpg'),(90,'2025-09-22 14:03:52','2025-09-22 14:03:52',NULL,5,NULL,0,'fotos/minerais/1758549832_unnamed (1).jpg'),(91,'2025-09-22 14:03:52','2025-09-22 14:03:52',NULL,5,NULL,0,'fotos/minerais/1758549832_unnamed.jpg'),(92,'2025-09-22 14:04:33','2025-09-22 14:04:33',NULL,6,NULL,1,'fotos/minerais/1758549873_unnamed (2).jpg'),(93,'2025-09-22 14:04:33','2025-09-22 14:04:33',NULL,6,NULL,0,'fotos/minerais/1758549873_unnamed (1).jpg'),(94,'2025-09-22 14:04:33','2025-09-22 14:04:33',NULL,6,NULL,0,'fotos/minerais/1758549873_unnamed.jpg'),(95,'2025-09-22 14:05:19','2025-09-22 14:05:19',NULL,7,NULL,0,'fotos/minerais/1758549919_unnamed (3).jpg'),(96,'2025-09-22 14:05:19','2025-09-22 14:05:19',NULL,7,NULL,1,'fotos/minerais/1758549919_unnamed (2).jpg'),(97,'2025-09-22 14:05:19','2025-09-22 14:05:19',NULL,7,NULL,0,'fotos/minerais/1758549919_unnamed (1).jpg'),(98,'2025-09-22 14:05:19','2025-09-22 14:05:19',NULL,7,NULL,0,'fotos/minerais/1758549919_unnamed.jpg'),(99,'2025-09-22 14:06:12','2025-09-22 14:06:12',NULL,8,NULL,0,'fotos/minerais/1758549972_unnamed (3).jpg'),(100,'2025-09-22 14:06:12','2025-09-22 14:06:12',NULL,8,NULL,0,'fotos/minerais/1758549972_unnamed (2).jpg'),(101,'2025-09-22 14:06:12','2025-09-22 14:06:12',NULL,8,NULL,1,'fotos/minerais/1758549972_unnamed (1).jpg'),(102,'2025-09-22 14:06:12','2025-09-22 14:06:12',NULL,8,NULL,0,'fotos/minerais/1758549972_unnamed.jpg'),(103,'2025-09-22 14:07:12','2025-09-22 14:07:12',NULL,11,NULL,0,'fotos/minerais/1758550032_unnamed (3).jpg'),(104,'2025-09-22 14:07:12','2025-09-22 14:07:12',NULL,11,NULL,1,'fotos/minerais/1758550032_unnamed (2).jpg'),(105,'2025-09-22 14:07:12','2025-09-22 14:07:12',NULL,11,NULL,0,'fotos/minerais/1758550032_unnamed (1).jpg'),(106,'2025-09-22 14:07:12','2025-09-22 14:07:12',NULL,11,NULL,0,'fotos/minerais/1758550032_unnamed.jpg'),(107,'2025-09-22 14:08:14','2025-09-22 14:08:14',NULL,15,NULL,0,'fotos/minerais/1758550094_unnamed (2).jpg'),(108,'2025-09-22 14:08:14','2025-09-22 14:08:14',NULL,15,NULL,1,'fotos/minerais/1758550094_unnamed (1).jpg'),(109,'2025-09-22 14:08:14','2025-09-22 14:08:14',NULL,15,NULL,0,'fotos/minerais/1758550094_unnamed.jpg'),(110,'2025-09-22 14:09:00','2025-09-22 14:09:00',NULL,17,NULL,1,'fotos/minerais/1758550140_unnamed (2).jpg'),(111,'2025-09-22 14:09:00','2025-09-22 14:09:00',NULL,17,NULL,0,'fotos/minerais/1758550140_unnamed (1).jpg'),(112,'2025-09-22 14:09:00','2025-09-22 14:09:00',NULL,17,NULL,0,'fotos/minerais/1758550140_unnamed.jpg'),(113,'2025-09-22 14:09:30','2025-09-22 14:09:30',NULL,9,NULL,0,'fotos/minerais/1758550170_unnamed (5).jpg'),(114,'2025-09-22 14:09:30','2025-09-22 14:09:30',NULL,9,NULL,0,'fotos/minerais/1758550170_unnamed (4).jpg'),(115,'2025-09-22 14:09:30','2025-09-22 14:09:30',NULL,9,NULL,0,'fotos/minerais/1758550170_unnamed (3).jpg'),(116,'2025-09-22 14:09:30','2025-09-22 14:09:30',NULL,9,NULL,0,'fotos/minerais/1758550170_unnamed (2).jpg'),(117,'2025-09-22 14:09:30','2025-09-22 14:09:30',NULL,9,NULL,0,'fotos/minerais/1758550170_unnamed (1).jpg'),(118,'2025-09-22 14:09:30','2025-09-22 14:09:30',NULL,9,NULL,0,'fotos/minerais/1758550170_unnamed.jpg'),(119,'2025-09-22 14:09:42','2025-09-22 14:09:42',NULL,18,NULL,0,'fotos/minerais/1758550182_unnamed (3).jpg'),(120,'2025-09-22 14:09:42','2025-09-22 14:09:42',NULL,18,NULL,0,'fotos/minerais/1758550182_unnamed (2).jpg'),(121,'2025-09-22 14:09:42','2025-09-22 14:09:42',NULL,18,NULL,1,'fotos/minerais/1758550182_unnamed (1).jpg'),(122,'2025-09-22 14:09:42','2025-09-22 14:09:42',NULL,18,NULL,0,'fotos/minerais/1758550182_unnamed.jpg'),(123,'2025-09-22 14:10:22','2025-09-22 14:10:22',NULL,19,NULL,0,'fotos/minerais/1758550222_unnamed (2).jpg'),(124,'2025-09-22 14:10:22','2025-09-22 14:10:22',NULL,19,NULL,1,'fotos/minerais/1758550222_unnamed (1).jpg'),(125,'2025-09-22 14:10:22','2025-09-22 14:10:22',NULL,19,NULL,0,'fotos/minerais/1758550222_unnamed.jpg'),(126,'2025-09-22 14:10:31','2025-09-22 14:10:31',NULL,10,NULL,0,'fotos/minerais/1758550231_unnamed (11).jpg'),(127,'2025-09-22 14:10:31','2025-09-22 14:10:31',NULL,10,NULL,0,'fotos/minerais/1758550231_unnamed (10).jpg'),(128,'2025-09-22 14:10:31','2025-09-22 14:10:31',NULL,10,NULL,0,'fotos/minerais/1758550231_unnamed (9).jpg'),(129,'2025-09-22 14:10:31','2025-09-22 14:10:31',NULL,10,NULL,0,'fotos/minerais/1758550231_unnamed (8).jpg'),(130,'2025-09-22 14:10:31','2025-09-22 14:10:31',NULL,10,NULL,0,'fotos/minerais/1758550231_unnamed (7).jpg'),(131,'2025-09-22 14:10:31','2025-09-22 14:10:31',NULL,10,NULL,0,'fotos/minerais/1758550231_unnamed (6).jpg'),(132,'2025-09-22 14:11:04','2025-09-22 14:11:04',NULL,20,NULL,0,'fotos/minerais/1758550264_unnamed (3).jpg'),(133,'2025-09-22 14:11:04','2025-09-22 14:11:04',NULL,20,NULL,1,'fotos/minerais/1758550264_unnamed (2).jpg'),(134,'2025-09-22 14:11:04','2025-09-22 14:11:04',NULL,20,NULL,0,'fotos/minerais/1758550264_unnamed (1).jpg'),(135,'2025-09-22 14:11:04','2025-09-22 14:11:04',NULL,20,NULL,0,'fotos/minerais/1758550264_unnamed.jpg'),(136,'2025-09-22 14:11:52','2025-09-22 14:11:52',NULL,12,NULL,0,'fotos/minerais/1758550312_unnamed (18).jpg'),(137,'2025-09-22 14:11:52','2025-09-22 14:11:52',NULL,12,NULL,0,'fotos/minerais/1758550312_unnamed (17).jpg'),(138,'2025-09-22 14:11:52','2025-09-22 14:11:52',NULL,12,NULL,0,'fotos/minerais/1758550312_unnamed (14).jpg'),(139,'2025-09-22 14:11:52','2025-09-22 14:11:52',NULL,12,NULL,0,'fotos/minerais/1758550312_unnamed (13).jpg'),(140,'2025-09-22 14:11:52','2025-09-22 14:11:52',NULL,12,NULL,0,'fotos/minerais/1758550312_unnamed (12).jpg'),(141,'2025-09-22 14:11:54','2025-09-22 14:11:54',NULL,21,NULL,0,'fotos/minerais/1758550314_unnamed (3).jpg'),(142,'2025-09-22 14:11:54','2025-09-22 14:11:54',NULL,21,NULL,0,'fotos/minerais/1758550314_unnamed (2).jpg'),(143,'2025-09-22 14:11:54','2025-09-22 14:11:54',NULL,21,NULL,0,'fotos/minerais/1758550314_unnamed (1).jpg'),(144,'2025-09-22 14:11:54','2025-09-22 14:11:54',NULL,21,NULL,1,'fotos/minerais/1758550314_unnamed.jpg'),(145,'2025-09-22 14:12:30','2025-09-22 14:12:30',NULL,13,NULL,0,'fotos/minerais/1758550350_unnamed (23).jpg'),(146,'2025-09-22 14:12:30','2025-09-22 14:12:30',NULL,13,NULL,0,'fotos/minerais/1758550350_unnamed (22).jpg'),(147,'2025-09-22 14:12:30','2025-09-22 14:12:30',NULL,13,NULL,0,'fotos/minerais/1758550350_unnamed (21).jpg'),(148,'2025-09-22 14:12:30','2025-09-22 14:12:30',NULL,13,NULL,0,'fotos/minerais/1758550350_unnamed (20).jpg'),(149,'2025-09-22 14:12:50','2025-09-22 14:12:50',NULL,22,NULL,0,'fotos/minerais/1758550370_unnamed (3).jpg'),(150,'2025-09-22 14:12:50','2025-09-22 14:12:50',NULL,22,NULL,0,'fotos/minerais/1758550370_unnamed (2).jpg'),(151,'2025-09-22 14:12:50','2025-09-22 14:12:50',NULL,22,NULL,1,'fotos/minerais/1758550370_unnamed (1).jpg'),(152,'2025-09-22 14:12:50','2025-09-22 14:12:50',NULL,22,NULL,0,'fotos/minerais/1758550370_unnamed.jpg'),(153,'2025-09-22 14:13:23','2025-09-22 14:13:23',NULL,14,NULL,0,'fotos/minerais/1758550403_unnamed (30).jpg'),(154,'2025-09-22 14:13:23','2025-09-22 14:13:23',NULL,14,NULL,0,'fotos/minerais/1758550403_unnamed (29).jpg'),(155,'2025-09-22 14:13:23','2025-09-22 14:13:23',NULL,14,NULL,0,'fotos/minerais/1758550403_unnamed (28).jpg'),(156,'2025-09-22 14:13:23','2025-09-22 14:13:23',NULL,14,NULL,0,'fotos/minerais/1758550403_unnamed (27).jpg'),(157,'2025-09-22 14:13:23','2025-09-22 14:13:23',NULL,14,NULL,0,'fotos/minerais/1758550403_unnamed (26).jpg'),(158,'2025-09-22 14:13:23','2025-09-22 14:13:23',NULL,14,NULL,0,'fotos/minerais/1758550403_unnamed (25).jpg'),(159,'2025-09-22 14:13:23','2025-09-22 14:13:23',NULL,14,NULL,0,'fotos/minerais/1758550403_unnamed (24).jpg'),(160,'2025-09-22 14:13:53','2025-09-22 14:13:53',NULL,23,NULL,0,'fotos/minerais/1758550433_unnamed (3).jpg'),(161,'2025-09-22 14:13:53','2025-09-22 14:13:53',NULL,23,NULL,0,'fotos/minerais/1758550433_unnamed (2).jpg'),(162,'2025-09-22 14:13:53','2025-09-22 14:13:53',NULL,23,NULL,1,'fotos/minerais/1758550433_unnamed (1).jpg'),(163,'2025-09-22 14:13:53','2025-09-22 14:13:53',NULL,23,NULL,0,'fotos/minerais/1758550433_unnamed.jpg'),(164,'2025-09-22 14:14:06','2025-09-22 14:14:06',NULL,14,NULL,0,'fotos/minerais/1758550446_unnamed (34).jpg'),(165,'2025-09-22 14:14:06','2025-09-22 14:14:06',NULL,14,NULL,0,'fotos/minerais/1758550446_unnamed (33).jpg'),(166,'2025-09-22 14:14:06','2025-09-22 14:14:06',NULL,14,NULL,0,'fotos/minerais/1758550446_unnamed (32).jpg'),(167,'2025-09-22 14:15:01','2025-09-22 14:15:01',NULL,25,NULL,1,'fotos/minerais/1758550501_unnamed (4).jpg'),(168,'2025-09-22 14:15:01','2025-09-22 14:15:01',NULL,25,NULL,0,'fotos/minerais/1758550501_unnamed (3).jpg'),(169,'2025-09-22 14:15:01','2025-09-22 14:15:01',NULL,25,NULL,0,'fotos/minerais/1758550501_unnamed (2).jpg'),(170,'2025-09-22 14:15:01','2025-09-22 14:15:01',NULL,25,NULL,0,'fotos/minerais/1758550501_unnamed (1).jpg'),(171,'2025-09-22 14:15:01','2025-09-22 14:15:01',NULL,25,NULL,0,'fotos/minerais/1758550501_unnamed.jpg'),(172,'2025-09-22 14:17:03','2025-09-22 14:17:03',NULL,32,NULL,1,'fotos/minerais/1758550623_unnamed (2).jpg'),(173,'2025-09-22 14:17:03','2025-09-22 14:17:03',NULL,32,NULL,0,'fotos/minerais/1758550623_unnamed (1).jpg'),(174,'2025-09-22 14:17:03','2025-09-22 14:17:03',NULL,32,NULL,0,'fotos/minerais/1758550623_unnamed.jpg'),(175,'2025-09-22 14:18:00','2025-09-22 14:18:00',NULL,34,NULL,0,'fotos/minerais/1758550680_unnamed (2).jpg'),(176,'2025-09-22 14:18:00','2025-09-22 14:18:00',NULL,34,NULL,0,'fotos/minerais/1758550680_unnamed (1).jpg'),(177,'2025-09-22 14:18:00','2025-09-22 14:18:00',NULL,34,NULL,1,'fotos/minerais/1758550680_unnamed.jpg'),(178,'2025-09-22 14:18:22','2025-09-22 14:18:22',NULL,24,NULL,0,'fotos/minerais/1758550702_unnamed (41).jpg'),(179,'2025-09-22 14:18:22','2025-09-22 14:18:22',NULL,24,NULL,0,'fotos/minerais/1758550702_unnamed (40).jpg'),(180,'2025-09-22 14:18:22','2025-09-22 14:18:22',NULL,24,NULL,0,'fotos/minerais/1758550702_unnamed (39).jpg'),(181,'2025-09-22 14:18:22','2025-09-22 14:18:22',NULL,24,NULL,0,'fotos/minerais/1758550702_unnamed (38).jpg'),(182,'2025-09-22 14:19:01','2025-09-22 14:19:01',NULL,35,NULL,0,'fotos/minerais/1758550741_unnamed (3).jpg'),(183,'2025-09-22 14:19:01','2025-09-22 14:19:01',NULL,35,NULL,0,'fotos/minerais/1758550741_unnamed (2).jpg'),(184,'2025-09-22 14:19:01','2025-09-22 14:19:01',NULL,35,NULL,1,'fotos/minerais/1758550741_unnamed (1).jpg'),(185,'2025-09-22 14:19:01','2025-09-22 14:19:01',NULL,35,NULL,0,'fotos/minerais/1758550741_unnamed.jpg'),(186,'2025-09-22 14:19:30','2025-09-22 14:19:30',NULL,28,NULL,0,'fotos/minerais/1758550770_unnamed (48).jpg'),(187,'2025-09-22 14:19:30','2025-09-22 14:19:30',NULL,28,NULL,0,'fotos/minerais/1758550770_unnamed (47).jpg'),(188,'2025-09-22 14:19:30','2025-09-22 14:19:30',NULL,28,NULL,0,'fotos/minerais/1758550770_unnamed (45).jpg'),(189,'2025-09-22 14:19:30','2025-09-22 14:19:30',NULL,28,NULL,0,'fotos/minerais/1758550770_unnamed (44).jpg'),(190,'2025-09-22 14:19:56','2025-09-22 14:19:56',NULL,36,NULL,0,'fotos/minerais/1758550796_unnamed (2).jpg'),(191,'2025-09-22 14:19:56','2025-09-22 14:19:56',NULL,36,NULL,0,'fotos/minerais/1758550796_unnamed (1).jpg'),(192,'2025-09-22 14:19:56','2025-09-22 14:19:56',NULL,36,NULL,1,'fotos/minerais/1758550796_unnamed.jpg'),(193,'2025-09-22 14:20:34','2025-09-22 14:20:34',NULL,29,NULL,0,'fotos/minerais/1758550834_unnamed (53).jpg'),(194,'2025-09-22 14:20:34','2025-09-22 14:20:34',NULL,29,NULL,0,'fotos/minerais/1758550834_unnamed (52).jpg'),(195,'2025-09-22 14:20:34','2025-09-22 14:20:34',NULL,29,NULL,0,'fotos/minerais/1758550834_unnamed (51).jpg'),(196,'2025-09-22 14:20:34','2025-09-22 14:20:34',NULL,29,NULL,0,'fotos/minerais/1758550834_unnamed (50).jpg'),(197,'2025-09-22 14:20:40','2025-09-22 14:20:40',NULL,37,NULL,0,'fotos/minerais/1758550840_unnamed (3).jpg'),(198,'2025-09-22 14:20:40','2025-09-22 14:20:40',NULL,37,NULL,1,'fotos/minerais/1758550840_unnamed (2).jpg'),(199,'2025-09-22 14:20:40','2025-09-22 14:20:40',NULL,37,NULL,0,'fotos/minerais/1758550840_unnamed (1).jpg'),(200,'2025-09-22 14:20:40','2025-09-22 14:20:40',NULL,37,NULL,0,'fotos/minerais/1758550840_unnamed.jpg'),(201,'2025-09-22 14:21:23','2025-09-22 14:21:23',NULL,38,NULL,1,'fotos/minerais/1758550883_unnamed (3).jpg'),(202,'2025-09-22 14:21:23','2025-09-22 14:21:23',NULL,38,NULL,0,'fotos/minerais/1758550883_unnamed (2).jpg'),(203,'2025-09-22 14:21:23','2025-09-22 14:21:23',NULL,38,NULL,0,'fotos/minerais/1758550883_unnamed (1).jpg'),(204,'2025-09-22 14:21:23','2025-09-22 14:21:23',NULL,38,NULL,0,'fotos/minerais/1758550883_unnamed.jpg'),(205,'2025-09-22 14:22:09','2025-09-22 14:22:09',NULL,39,NULL,0,'fotos/minerais/1758550929_unnamed (2).jpg'),(206,'2025-09-22 14:22:09','2025-09-22 14:22:09',NULL,39,NULL,0,'fotos/minerais/1758550929_unnamed (1).jpg'),(207,'2025-09-22 14:22:09','2025-09-22 14:22:09',NULL,39,NULL,1,'fotos/minerais/1758550929_unnamed.jpg'),(208,'2025-09-22 14:22:11','2025-09-22 14:22:11',NULL,30,NULL,0,'fotos/minerais/1758550930_unnamed (64).jpg'),(209,'2025-09-22 14:22:11','2025-09-22 14:22:11',NULL,30,NULL,0,'fotos/minerais/1758550931_unnamed (63).jpg'),(210,'2025-09-22 14:22:11','2025-09-22 14:22:11',NULL,30,NULL,0,'fotos/minerais/1758550931_unnamed (59).jpg'),(211,'2025-09-22 14:22:11','2025-09-22 14:22:11',NULL,30,NULL,0,'fotos/minerais/1758550931_unnamed (58).jpg'),(212,'2025-09-22 14:22:11','2025-09-22 14:22:11',NULL,30,NULL,0,'fotos/minerais/1758550931_unnamed (57).jpg'),(213,'2025-09-22 14:22:11','2025-09-22 14:22:11',NULL,30,NULL,0,'fotos/minerais/1758550931_unnamed (56).jpg'),(214,'2025-09-22 14:22:56','2025-09-22 14:22:56',NULL,40,NULL,0,'fotos/minerais/1758550976_unnamed (3).jpg'),(215,'2025-09-22 14:22:56','2025-09-22 14:22:56',NULL,40,NULL,0,'fotos/minerais/1758550976_unnamed (2).jpg'),(216,'2025-09-22 14:22:56','2025-09-22 14:22:56',NULL,40,NULL,0,'fotos/minerais/1758550976_unnamed (1).jpg'),(217,'2025-09-22 14:22:56','2025-09-22 14:22:56',NULL,40,NULL,1,'fotos/minerais/1758550976_unnamed.jpg'),(218,'2025-09-22 14:23:25','2025-09-22 14:23:25',NULL,31,NULL,0,'fotos/minerais/1758551005_unnamed (70).jpg'),(219,'2025-09-22 14:23:25','2025-09-22 14:23:25',NULL,31,NULL,0,'fotos/minerais/1758551005_unnamed (69).jpg'),(220,'2025-09-22 14:23:39','2025-09-22 14:23:39',NULL,41,NULL,0,'fotos/minerais/1758551019_unnamed (2).jpg'),(221,'2025-09-22 14:23:39','2025-09-22 14:23:39',NULL,41,NULL,1,'fotos/minerais/1758551019_unnamed (1).jpg'),(222,'2025-09-22 14:23:39','2025-09-22 14:23:39',NULL,41,NULL,0,'fotos/minerais/1758551019_unnamed.jpg'),(223,'2025-09-22 14:24:10','2025-09-22 14:24:10',NULL,33,NULL,0,'fotos/minerais/1758551050_unnamed (75).jpg'),(224,'2025-09-22 14:24:10','2025-09-22 14:24:10',NULL,33,NULL,0,'fotos/minerais/1758551050_unnamed (73).jpg'),(225,'2025-09-22 14:24:10','2025-09-22 14:24:10',NULL,33,NULL,0,'fotos/minerais/1758551050_unnamed (72).jpg'),(226,'2025-09-22 14:24:10','2025-09-22 14:24:10',NULL,33,NULL,0,'fotos/minerais/1758551050_unnamed (71).jpg'),(227,'2025-09-22 14:24:22','2025-09-22 14:24:22',NULL,42,NULL,1,'fotos/minerais/1758551062_unnamed (2).jpg'),(228,'2025-09-22 14:24:22','2025-09-22 14:24:22',NULL,42,NULL,0,'fotos/minerais/1758551062_unnamed (1).jpg'),(229,'2025-09-22 14:24:22','2025-09-22 14:24:22',NULL,42,NULL,0,'fotos/minerais/1758551062_unnamed.jpg'),(230,'2025-09-22 14:25:08','2025-09-22 14:25:08',NULL,45,NULL,0,'fotos/minerais/1758551108_unnamed (2).jpg'),(231,'2025-09-22 14:25:08','2025-09-22 14:25:08',NULL,45,NULL,1,'fotos/minerais/1758551108_unnamed (1).jpg'),(232,'2025-09-22 14:25:08','2025-09-22 14:25:08',NULL,45,NULL,0,'fotos/minerais/1758551108_unnamed.jpg'),(233,'2025-09-22 14:25:59','2025-09-22 14:25:59',NULL,48,NULL,1,'fotos/minerais/1758551159_unnamed (4).jpg'),(234,'2025-09-22 14:25:59','2025-09-22 14:25:59',NULL,48,NULL,0,'fotos/minerais/1758551159_unnamed (3).jpg'),(235,'2025-09-22 14:25:59','2025-09-22 14:25:59',NULL,48,NULL,0,'fotos/minerais/1758551159_unnamed (2).jpg'),(236,'2025-09-22 14:26:31','2025-09-22 14:26:31',NULL,47,NULL,0,'fotos/minerais/1758551191_unnamed (80).jpg'),(237,'2025-09-22 14:26:31','2025-09-22 14:26:31',NULL,47,NULL,0,'fotos/minerais/1758551191_unnamed (79).jpg'),(238,'2025-09-22 14:26:32','2025-09-22 14:26:32',NULL,47,NULL,0,'fotos/minerais/1758551192_unnamed (78).jpg'),(239,'2025-09-22 14:26:32','2025-09-22 14:26:32',NULL,47,NULL,0,'fotos/minerais/1758551192_unnamed (77).jpg'),(240,'2025-09-22 14:26:32','2025-09-22 14:26:32',NULL,47,NULL,0,'fotos/minerais/1758551192_unnamed (76).jpg'),(241,'2025-09-22 14:27:20','2025-09-22 14:27:20',NULL,46,NULL,0,'fotos/minerais/1758551240_unnamed (86).jpg'),(242,'2025-09-22 14:27:20','2025-09-22 14:27:20',NULL,46,NULL,0,'fotos/minerais/1758551240_unnamed (85).jpg'),(243,'2025-09-22 14:27:20','2025-09-22 14:27:20',NULL,46,NULL,0,'fotos/minerais/1758551240_unnamed (84).jpg'),(244,'2025-09-22 14:27:20','2025-09-22 14:27:20',NULL,46,NULL,0,'fotos/minerais/1758551240_unnamed (83).jpg'),(245,'2025-09-22 14:27:20','2025-09-22 14:27:20',NULL,46,NULL,0,'fotos/minerais/1758551240_unnamed (82).jpg'),(246,'2025-09-22 14:27:20','2025-09-22 14:27:20',NULL,46,NULL,0,'fotos/minerais/1758551240_unnamed (81).jpg'),(247,'2025-09-22 14:27:40','2025-09-22 14:27:40',NULL,50,NULL,1,'fotos/minerais/1758551260_unnamed (2).jpg'),(248,'2025-09-22 14:27:40','2025-09-22 14:27:40',NULL,50,NULL,0,'fotos/minerais/1758551260_unnamed (1).jpg'),(249,'2025-09-22 14:27:41','2025-09-22 14:27:41',NULL,50,NULL,0,'fotos/minerais/1758551261_unnamed.jpg'),(250,'2025-09-22 14:27:54','2025-09-22 14:27:54',NULL,44,NULL,0,'fotos/minerais/1758551274_unnamed (91).jpg'),(251,'2025-09-22 14:27:54','2025-09-22 14:27:54',NULL,44,NULL,0,'fotos/minerais/1758551274_unnamed (90).jpg'),(252,'2025-09-22 14:27:54','2025-09-22 14:27:54',NULL,44,NULL,0,'fotos/minerais/1758551274_unnamed (89).jpg'),(253,'2025-09-22 14:27:54','2025-09-22 14:27:54',NULL,44,NULL,0,'fotos/minerais/1758551274_unnamed (88).jpg'),(254,'2025-09-22 14:27:54','2025-09-22 14:27:54',NULL,44,NULL,0,'fotos/minerais/1758551274_unnamed (87).jpg'),(255,'2025-09-22 14:28:22','2025-09-22 14:28:22',NULL,51,NULL,0,'fotos/minerais/1758551302_unnamed (2).jpg'),(256,'2025-09-22 14:28:22','2025-09-22 14:28:22',NULL,51,NULL,0,'fotos/minerais/1758551302_unnamed (1).jpg'),(257,'2025-09-22 14:28:22','2025-09-22 14:28:22',NULL,51,NULL,1,'fotos/minerais/1758551302_unnamed.jpg'),(258,'2025-09-22 14:31:47','2025-09-22 14:31:47',NULL,55,NULL,0,'fotos/minerais/1758551507_unnamed - 2025-09-22T113042.566.jpg'),(259,'2025-09-22 14:31:47','2025-09-22 14:31:47',NULL,55,NULL,0,'fotos/minerais/1758551507_unnamed - 2025-09-22T113033.090.jpg'),(260,'2025-09-22 14:31:47','2025-09-22 14:31:47',NULL,55,NULL,0,'fotos/minerais/1758551507_unnamed - 2025-09-22T113027.101.jpg'),(261,'2025-09-22 14:31:47','2025-09-22 14:31:47',NULL,55,NULL,0,'fotos/minerais/1758551507_unnamed - 2025-09-22T113023.689.jpg'),(262,'2025-09-22 14:31:47','2025-09-22 14:31:47',NULL,55,NULL,0,'fotos/minerais/1758551507_unnamed (100).jpg'),(263,'2025-09-22 14:31:47','2025-09-22 14:31:47',NULL,55,NULL,0,'fotos/minerais/1758551507_unnamed (93).jpg'),(264,'2025-09-22 14:32:32','2025-09-22 14:32:32',NULL,54,NULL,0,'fotos/minerais/1758551552_unnamed - 2025-09-22T113215.211.jpg'),(265,'2025-09-22 14:32:32','2025-09-22 14:32:32',NULL,54,NULL,0,'fotos/minerais/1758551552_unnamed - 2025-09-22T113213.484.jpg'),(266,'2025-09-22 14:32:32','2025-09-22 14:32:32',NULL,54,NULL,0,'fotos/minerais/1758551552_unnamed - 2025-09-22T113210.017.jpg'),(267,'2025-09-22 14:32:32','2025-09-22 14:32:32',NULL,54,NULL,0,'fotos/minerais/1758551552_unnamed - 2025-09-22T113208.392.jpg'),(268,'2025-09-22 14:32:32','2025-09-22 14:32:32',NULL,54,NULL,0,'fotos/minerais/1758551552_unnamed - 2025-09-22T113206.219.jpg'),(269,'2025-09-22 14:32:32','2025-09-22 14:32:32',NULL,54,NULL,0,'fotos/minerais/1758551552_unnamed - 2025-09-22T113204.445.jpg'),(270,'2025-09-22 14:33:33','2025-09-22 14:33:33',NULL,53,NULL,0,'fotos/minerais/1758551613_unnamed - 2025-09-22T113302.515.jpg'),(271,'2025-09-22 14:33:33','2025-09-22 14:33:33',NULL,53,NULL,0,'fotos/minerais/1758551613_unnamed - 2025-09-22T113300.631.jpg'),(272,'2025-09-22 14:33:33','2025-09-22 14:33:33',NULL,53,NULL,0,'fotos/minerais/1758551613_unnamed - 2025-09-22T113256.276.jpg'),(273,'2025-09-22 14:33:33','2025-09-22 14:33:33',NULL,53,NULL,0,'fotos/minerais/1758551613_unnamed - 2025-09-22T113254.054.jpg'),(274,'2025-09-22 14:34:26','2025-09-22 14:34:26',NULL,52,NULL,0,'fotos/minerais/1758551666_unnamed - 2025-09-22T113402.321.jpg'),(275,'2025-09-22 14:34:26','2025-09-22 14:34:26',NULL,52,NULL,0,'fotos/minerais/1758551666_unnamed - 2025-09-22T113400.484.jpg'),(276,'2025-09-22 14:34:26','2025-09-22 14:34:26',NULL,52,NULL,0,'fotos/minerais/1758551666_unnamed - 2025-09-22T113352.899.jpg'),(277,'2025-09-22 14:34:26','2025-09-22 14:34:26',NULL,52,NULL,0,'fotos/minerais/1758551666_unnamed - 2025-09-22T113350.671.jpg'),(278,'2025-09-22 14:34:27','2025-09-22 14:34:27',NULL,52,NULL,0,'fotos/minerais/1758551667_unnamed - 2025-09-22T113348.731.jpg');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagem_banners`
--

DROP TABLE IF EXISTS `imagem_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagem_banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idBanner` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `imagem_banners_idbanner_foreign` (`idBanner`),
  CONSTRAINT `imagem_banners_idbanner_foreign` FOREIGN KEY (`idBanner`) REFERENCES `banners` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagem_banners`
--

LOCK TABLES `imagem_banners` WRITE;
/*!40000 ALTER TABLE `imagem_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagem_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informacaos`
--

DROP TABLE IF EXISTS `informacaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `informacaos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fotoId` bigint unsigned NOT NULL,
  `informacao` int NOT NULL,
  `coordenadaX` double NOT NULL,
  `coordenadaY` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `informacaos_fotoid_foreign` (`fotoId`),
  CONSTRAINT `informacaos_fotoid_foreign` FOREIGN KEY (`fotoId`) REFERENCES `fotos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informacaos`
--

LOCK TABLES `informacaos` WRITE;
/*!40000 ALTER TABLE `informacaos` DISABLE KEYS */;
/*!40000 ALTER TABLE `informacaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jazidas`
--

DROP TABLE IF EXISTS `jazidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jazidas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `localizacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jazidas_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jazidas`
--

LOCK TABLES `jazidas` WRITE;
/*!40000 ALTER TABLE `jazidas` DISABLE KEYS */;
/*!40000 ALTER TABLE `jazidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_04_10_141504_create_rochas_table',1),(5,'2025_04_14_114450_create_minerals_table',1),(6,'2025_04_14_120132_create_jazidas_table',1),(7,'2025_04_14_120916_create_fotos_table',1),(8,'2025_04_14_122040_create_bibliotecas_table',1),(9,'2025_04_14_122444_create_informacaos_table',1),(10,'2025_04_14_122808_create_banners_table',1),(11,'2025_04_14_123039_create_imagem_banners_table',1),(12,'2025_06_23_165614_create_anotacoes_foto_table',1),(13,'2025_06_23_193220_add_jazida_id_to_minerais_table',1),(14,'2025_06_25_185007_create_permission_tables',1),(15,'2025_08_07_162056_create_eons_table',1),(16,'2025_08_08_164458_create_eras_table',1),(17,'2025_08_08_164521_create_periodos_table',1),(18,'2025_08_25_162512_create_aquisicoes_table',1),(19,'2025_09_12_155907_add_slug_to_rochas',1),(20,'2025_09_12_160107_add_slug_to_minerals',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `minerals`
--

DROP TABLE IF EXISTS `minerals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `minerals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jazida_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `propriedades` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `minerals_slug_unique` (`slug`),
  KEY `minerals_jazida_id_foreign` (`jazida_id`),
  CONSTRAINT `minerals_jazida_id_foreign` FOREIGN KEY (`jazida_id`) REFERENCES `jazidas` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `minerals`
--

LOCK TABLES `minerals` WRITE;
/*!40000 ALTER TABLE `minerals` DISABLE KEYS */;
INSERT INTO `minerals` VALUES (1,NULL,'2025-09-15 17:21:09','2025-09-15 17:21:09','Micka','<p>A mica &eacute; um grupo de minerais de silicatos com estrutura em l&acirc;minas que se destacam pelo brilho e pela sua f&aacute;cil separa&ccedil;&atilde;o em finas camadas. Encontrada em diversos tipos de rochas, a mica &eacute; usada em produtos de maquiagem para dar brilho, em tintas, na ind&uacute;stria eletr&oacute;nica como isolante e em materiais de constru&ccedil;&atilde;o, devido &agrave;s suas propriedades isolantes e resist&ecirc;ncia ao calor.&nbsp;</p>\r\n<p>Aplica&ccedil;&otilde;es e usos:&nbsp;<br>&bull; Cosm&eacute;ticos: A mica em p&oacute; proporciona brilho e um aspecto nacarado a maquiagens.&nbsp;<br>&bull; Ind&uacute;stria eletr&oacute;nica: Devido &agrave;s suas excelentes propriedades diel&eacute;tricas (isolamento el&eacute;trico) e resist&ecirc;ncia ao calor, &eacute; usada em equipamentos como secadores de cabelo e motores el&eacute;tricos.&nbsp;<br>&bull; Tintas e pigmentos: Oferece um brilho cintilante a tintas e &eacute; usada em pigmentos.&nbsp;<br>&bull; Outras aplica&ccedil;&otilde;es: Tamb&eacute;m &eacute; empregada na fabrica&ccedil;&atilde;o de isolantes el&eacute;tricos, em cer&acirc;mica e at&eacute; mesmo como componente em alguns tipos de pasta de dente.&nbsp;</p>','KAl₂(AlSi₃O₁₀)(OH)₂','micka'),(2,NULL,'2025-09-22 14:01:30','2025-09-22 14:01:30','Actinolita','<p>A actinolita &eacute; um inosilicato do Supergrupo dos Anfib&oacute;lios. &Eacute; um mineral muito comum, t&iacute;pico de rochas metam&oacute;rficas. Possui aplica&ccedil;&atilde;o restrita &ndash; e cada vez mais reduzida &ndash; quando ocorre fibrosa e &eacute; comercializada como asbesto. A variedade &ldquo;nefrita&rdquo; &eacute; um dos tipos de jade, extremamente cara. A actinolita integra o Grupo da Actinolita, que &eacute; uma s&eacute;rie de solu&ccedil;&atilde;o s&oacute;lida entre a tremolita (sem Fe), a actinolita (com Fe+Mg) e a ferroactinolita (com Fe). Para a classifica&ccedil;&atilde;o detalhada de anfib&oacute;lios, consultar outras fontes. H&aacute; uma variedade de actinolita de cor verde intensa devido a um teor em Cr, denominada de &ldquo;smaragdita&rdquo;, que ocorre em eclogitos com metamorfismo retr&oacute;grado como pseudomorfose sobre omfacita. &ldquo;Nefrita&rdquo; &eacute; uma rocha verde composta basicamente por actinolita fibrosa micro- a criptocristalina, sendo um dos dois minerais (com jadeita) comercializada como jade.&nbsp;</p>','Ca2(Mg Fe+2)5Si8O22(OH)2','actinolita'),(3,NULL,'2025-09-22 14:02:19','2025-09-22 14:02:19','Albita Com Turmalina Preta','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">As albitas s&atilde;o normalmente tricl&iacute;nicas, mas pode haver uma transi&ccedil;&atilde;o destes&nbsp; minerais para simetrias monocl&iacute;nicas por um forte aquecimento. O termo extremo puro em s&oacute;dio &eacute; chamado de albita de baixa temperatura ou albita de alta temperatura. A diferen&ccedil;a principal, na estrutura, ente as albitas de baixa e de alta temperatura, est&aacute; na distribui&ccedil;&atilde;o dos &aacute;tomos de alum&iacute;nio entre as quatro posi&ccedil;&otilde;es tetra&eacute;dricas n&atilde;o equivalentes. A albita de alta temperatura possui distribui&ccedil;&atilde;o de (sil&iacute;cio , alum&iacute;nio)&nbsp; altamente desordenada, enquanto a albita de baixa temperatura possui um grau consider&aacute;vel de ordem.</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Nas imagens podemos perceber em menor propor&ccedil;&atilde;o turmalinas. Os minerais membros da fam&iacute;lia de turmalina possuem a mesma estrutura cristalina b&aacute;sica, mas ocorrem em diversas cores. Os cristais de turmalina s&atilde;o estriados, com uma se&ccedil;&atilde;o tranversal triangular e um contorno arredondado.</span></p>','NaAlSi3O8','albita-com-turmalina-preta'),(4,NULL,'2025-09-22 14:03:13','2025-09-22 14:03:13','Amazonita','<p><span class=\"C9DxTc \">A</span><span class=\"C9DxTc \">mazonita</span><span class=\"C9DxTc \">&nbsp;&Eacute; uma variedade de feldspato pot&aacute;ssico de cor verde a verde-azulada. Na defini&ccedil;&atilde;o o feldspato &eacute; tricl&iacute;nico e, portanto, &eacute; uma variedade de microclina.&nbsp;</span></p>','KAlSi3O8','amazonita'),(5,NULL,'2025-09-22 14:03:52','2025-09-22 14:03:52','Ametista','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">O quartzo &eacute; um mineral da classe dos silicatos, subclasse dos tectossilicatos*. Em sua estrutura cristalina, cada tetraedro 4&minus; SiO compartilha seus v&eacute;rtices, formados por 4 oxig&ecirc;nios, com tetraedros vizinhos. Isso d&aacute; a f&oacute;rmula qu&iacute;mica SiO2 , um sil&iacute;cio para dois &aacute;tomos de oxig&ecirc;nio, resultando numa rede cristalina eletricamente neutra.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A ametista &eacute; uma variedade violeta do quartzo-&alpha;. Essa colora&ccedil;&atilde;o violeta se origina de bandas de absor&ccedil;&atilde;o na regi&atilde;o vis&iacute;vel do espectro eletromagn&eacute;tico induzidas pela radia&ccedil;&atilde;o ionizante e se desenvolve somente em cristais que possuem consider&aacute;vel teor de ferro.&nbsp;</span></p>','SiO2','ametista'),(6,NULL,'2025-09-22 14:04:33','2025-09-22 14:04:33','Andradita','<p>A andradita comumente &eacute; interpretada como associada ao metamorfismo de sedimentos carbon&aacute;ticos impuros, metassomatismo de rochas escarn&iacute;ticas e, menos comumente, a rochas &iacute;gneas alcalinas.&nbsp;</p>','Ca3Fe2Si3O12','andradita'),(7,NULL,'2025-09-22 14:05:19','2025-09-22 14:05:19','Apatita','<p>A apatita ocorre comumente em prismas longos ou prismas curtos, comumente terminados por proeminentes bipir&acirc;mides ou por um pinac&oacute;ide basal. Diversos cristais mostram faces de uma bipir&acirc;mide hexagonal m/6,o que revela a simetria verdadeira. A estrutura da fluorapatita foi detalhada h&aacute; muito tempo, apresenta tetraedros PO4 associados a colunas Ca-O, formando uma estrutura em colm&eacute;ia.&nbsp; Esses minerais s&atilde;o fontes de F&oacute;sforo, tendo grande import&acirc;ncia para a agricultura.</p>','Ca5(PO4)3 (F,OH,Cl)','apatita'),(8,NULL,'2025-09-22 14:06:12','2025-09-22 14:06:12','Aragonita','<p><span class=\"C9DxTc \">A aragonita pertence ao grupo dos carbonatos e &eacute; uma das formas trimorfas do carbonato de c&aacute;lcio, tendo assim a mesma composi&ccedil;&atilde;o qu&iacute;mica&nbsp; CaCO</span><span class=\"C9DxTc \">3 ;&nbsp;</span><span class=\"C9DxTc \">a diferen&ccedil;a est&aacute; em sua estrutura cristalina. No cristal de calcita o grupo CO</span><span class=\"C9DxTc \">3&nbsp;</span><span class=\"C9DxTc \">&nbsp;localiza-se no plano m&eacute;dio, enquanto que na aragonita&nbsp; n&atilde;o se encontra no plano m&eacute;dio e os &aacute;tomos de oxig&ecirc;nio est&atilde;o deslocados 30&deg; para a direita e esquerda. A aragonita &eacute; menos abundante na natureza do que a calcita, e a mesma pode se converter em calcita.</span></p>','CaCO₃','aragonita'),(9,NULL,'2025-09-22 14:06:19','2025-09-22 14:06:19','Vivianita','<p>Vivianita ( Fe2+3(PO4)28H2O ) &eacute; um mineral de fosfato de ferro hidratado encontrado em v&aacute;rios ambientes geol&oacute;gicos. Pequenas quantidades de mangan&ecirc;s Mn 2+ , magn&eacute;sio Mg 2+ e c&aacute;lcio Ca 2+ podem substituir Fe 2+ na estrutura. A vivianita pura &eacute; incolor, mas o mineral oxida muito facilmente, mudando a cor, e geralmente &eacute; encontrada em cristais prism&aacute;ticos a achatados de azul profundo a verde azulado profundo .&nbsp;</p>','Fe3(PO4)2 8H2O','vivianita'),(10,NULL,'2025-09-22 14:06:35','2025-09-22 14:06:35','Vanadinita','<p>A vanadinita &eacute; um mineral pertencente ao grupo das apatitas dos fosfatos, &eacute; um mineral incomum, ocorrendo apenas como resultado de altera&ccedil;&otilde;es qu&iacute;micas em um material pr&eacute;-existente. &Eacute;, portanto, conhecido como um mineral secund&aacute;rio. &Eacute; encontrada em climas &aacute;ridos e se forma por oxida&ccedil;&atilde;o de minerais prim&aacute;rios de chumbo. A vanadinita &eacute; especialmente encontrada em associa&ccedil;&atilde;o com o sulfeto de chumbo, galena . Outros minerais associados incluem wulfenita , limonita e barita.&nbsp;</p>','Pb 5 ( VO 4 ) 3 Cl','vanadinita'),(11,NULL,'2025-09-22 14:07:12','2025-09-22 14:07:12','Azurita','<p>A azurita &eacute; um carbonato de cobre e, como o pr&oacute;prio nome indica, possui uma cor azul profunda que &eacute; inconfund&iacute;vel, extremamente caracter&iacute;stica. Integra min&eacute;rios oxidados de cobre. Al&eacute;m disso, cristais bem formados de azurita alcan&ccedil;am pre&ccedil;os elevad&iacute;ssimos no mercado de minerais de cole&ccedil;&atilde;o. Forma cristais prism&aacute;ticos que s&atilde;o transl&uacute;cidos nas arestas agudas. Os cristais atingem at&eacute; 30 cm de comprimento e mais de 100 formas combinadas foram registradas. Possui duas variedades. A azurita, uma vez exposta &agrave; atmosfera, &eacute; inst&aacute;vel e frequentemente &eacute; substitu&iacute;da pseudomorficamente pela malaquita. Uma fei&ccedil;&atilde;o diagn&oacute;stica importante &eacute; sua efervesc&ecirc;ncia forte em HCl dilu&iacute;do</p>','Cu3(CO3)2(OH)2','azurita'),(12,NULL,'2025-09-22 14:07:14','2025-09-22 14:07:14','Turmalina','<p>Os minerais do grupo da turmalina constituem um dos mais complexos grupos de silicato quanto &agrave; sua composi&ccedil;&atilde;o qu&iacute;mica, sendo todos eles ciclossilicatos. A composi&ccedil;&atilde;o qu&iacute;mica da turmalina Na(Mg,Fe,Li,Mn,Al)3Al6(BO3)3Si6.O18(OH,F)4 .Trata-se de um grupo de silicatos de boro e alum&iacute;nio, cuja composi&ccedil;&atilde;o &eacute; muito vari&aacute;vel devido &agrave;s substitui&ccedil;&otilde;es isom&oacute;rficas(em solu&ccedil;&atilde;o s&oacute;lida) que podem ocorrer na sua estrutura. Os elementos que mais comumente participam nestas substitui&ccedil;&otilde;es s&atilde;o o ferro, o magn&eacute;sio, o s&oacute;dio, o c&aacute;lcio e o l&iacute;tio existindo outros elementos que podem tamb&eacute;m ocorrer. A palavra turmalina &eacute; uma corruptela da palavra turamali do cingal&ecirc;s para pedra que atrai a cinza (uma refer&ecirc;ncia &agrave;s suas propriedades piroel&eacute;ctricas).</p>','(Na,Ca) (Fe+2, Mg, Al, Mn,Li)₃ (Al, Fe+₃)₆  (BO3)₃ (Si6O18)(OH)₃  (OH,F,O)','turmalina'),(13,NULL,'2025-09-22 14:07:35','2025-09-22 14:07:35','Topázio','<p>O top&aacute;zio &eacute; um mineral raro classificado como um nesossilicato com f&oacute;rmula qu&iacute;mica Al₂[(F,OH)₂SiO₄]. Ele &eacute; uma importante pedra preciosa, amplamente valorizada por sua variedade de cores e propriedades f&iacute;sicas. As principais caracter&iacute;sticas incluem:</p>\r\n<p>Sistema Cristalino: Ortorr&ocirc;mbico bipiramidal.</p>\r\n<p>Dureza: 8 na escala de Mohs, tornando-o resistente ao desgaste.</p>\r\n<p>Clivagem: Perfeita em {001}, uma caracter&iacute;stica diagn&oacute;stica importante.</p>\r\n<p>Cores: Pode apresentar-se incolor ou em tons que variam entre amarelo, rosa, azul, laranja, vermelho, marrom, verde, entre outros.</p>\r\n<p>H&aacute;bito: Forma cristais prism&aacute;ticos curtos ou longos, al&eacute;m de configura&ccedil;&otilde;es colunar e maci&ccedil;a.</p>\r\n<p>O top&aacute;zio &eacute; encontrado em ambientes geol&oacute;gicos como veios hidrotermais de alta temperatura associados a granitos e pegmatitos. Ele tamb&eacute;m pode se formar em sedimentos ricos em alum&iacute;nio e quartzo, ou ocorrer como mineral pesado em dep&oacute;sitos aluviais.</p>\r\n<p>Al&eacute;m de suas propriedades &oacute;pticas, que incluem alto relevo e birrefring&ecirc;ncia de primeira ordem, o top&aacute;zio apresenta pleocro&iacute;smo em determinadas orienta&ccedil;&otilde;es. Ele &eacute; amplamente utilizado na joalheria, especialmente em variedades raras como o top&aacute;zio imperial e o killiecrankie diamond, que possuem alto valor est&eacute;tico e econ&ocirc;mico</p>','?','topazio'),(14,NULL,'2025-09-22 14:08:10','2025-09-22 14:08:10','Selenita','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">O mineral talco &eacute; um filossilicato de magn&eacute;sio hidratado, apresentando f&oacute;rmula qu&iacute;mica Mg3 (Si4 O 10) (OH)2 onde seus constituintes ( Mg, Si, O, OH ) assumem um arranjo espacial do tipo \"t-o-t\" .</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">O talco &eacute; um mineral de origem secund&aacute;ria, formado pela altera&ccedil;&atilde;o de silicatos de magn&eacute;sio: olivina [forsterita Mg2(SiO4 ), fayalita Fe2(SiO4 )], pirox&ecirc;nios (s&eacute;ries enstatita, diops&iacute;dio, espodum&ecirc;nio, augita), rodonita, wollastonita, pectolita e anfib&oacute;lios (antofilita, s&eacute;ries tremolita/actinolita, riebeckita/arfvedsonita, hornblenda). Pode ocorrer associado &agrave; clorita, serpentina, calcita, quartzo, tremolita, dolomita, hematita, e magnesita. &Eacute; encontrado tanto em rochas &iacute;gneas como em metam&oacute;rficas&nbsp;</span></p>','Mg3Si4O10(OH)2','selenita'),(15,NULL,'2025-09-22 14:08:14','2025-09-22 14:08:14','Berilo','<p><span class=\"C9DxTc \">O berilo &eacute; um ciclossilicato que ocorre tipicamente em pegmatitos gran&iacute;ticos, constituindo um importante min&eacute;rio de ber&iacute;lio. Macroscopicamente o berilo, quando maci&ccedil;o e de cores claras, pode ser confundido facilmente com v&aacute;rios outros minerais t&iacute;picos de pegmatitos, inclusive com quartzo e feldspatos. Ocorrendo em pegmatitos, berilo pode formar cristais de dimens&otilde;es gigantescas. Possui 16 variedades, sendo as mais importantes a esmeralda (verde), &aacute;gua-marinha (azul-celeste), heliodoro (verdeamarelado),&nbsp;</span><span class=\"C9DxTc \">morganita (rosa), goshenita (incolor), berilo-vermelho e berilo-dourado.</span></p>','Be3 Al2 Si6 O18','berilo'),(16,NULL,'2025-09-22 14:08:30','2025-09-22 14:08:30','Sodalita','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A sodalita &eacute; um feldspat&oacute;ide, um tectosilicato, de ocorr&ecirc;ncia mais restrita, ocorrendo em rochas subsaturadas em s&iacute;lica. Quando azul, constitui rochas de alto valor comercial, como o &ldquo;Granito Azul Bahia&rdquo; (que n&atilde;o &eacute; granito, claro).&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A sodalita ocorre em rochas &iacute;gneas subsaturadas, tanto intrusivas (nefelina-sienitos, monzonitos, monzodioritos, dioritos, gabros, anortositos) como extrusivas (fonolitos, traquitos, p&oacute;rfiros, etc.). Tamb&eacute;m em cavidades de blocos vulc&acirc;nicos ejetados. Em rochas metam&oacute;rficas pode ser encontrada em calc&aacute;rios (m&aacute;rmores) que sofreram metassomatismo.&nbsp;</span></p>','Na8(Al 6Si6O24)Cl2','sodalita'),(17,NULL,'2025-09-22 14:09:00','2025-09-22 14:09:00','Biotita','<p>A biotita &eacute; um filossilicato muito comum, ocorrendo em rochas &iacute;gneas (tanto intrusivas como extrusivas), metam&oacute;rficas e sedimentares. &Eacute; um mineral industrial com v&aacute;rias aplica&ccedil;&otilde;es diferentes. &ldquo;Biotita&rdquo; na realidade n&atilde;o &eacute; um mineral, mas apenas um termo gen&eacute;rico que se aplica aos minerais que comp&otilde;e uma s&eacute;rie ou subgrupo do Grupo das Micas. Essa s&eacute;rie inclui os minerais entre os extremos annita KFe2+3(AlSi3O10)(OH)2 &ndash; flogopita KMg3(AlSi3O10)(OH)2 e aqueles entre siderofilita KFe2+2Al(Al2Si2O10)(OH)2 &ndash; eastonita KMg2Al(Al2Si2O10)(OH)2. Fl&uacute;orflogopita e fluortetraferriflogopita est&atilde;o inclu&iacute;dos. Na pr&aacute;tica, biotita designa qualquer mica escura que n&atilde;o foi analisada detalhadamente. Vermiculita &eacute; um produto de altera&ccedil;&atilde;o de biotita e flogopita.</p>','K2(Mg, Fe2+)6-4(Fe3+,Al, Ti)0-2Si6 -5Al2-3O20(OH,F)4','biotita'),(18,NULL,'2025-09-22 14:09:42','2025-09-22 14:09:42','Bismuto','<p>O bismuto &eacute; um elemento nativo relativamente raro, ocorrendo principalmente na parag&ecirc;nese de minerais de Bi-Co-Ni-Ag-Sn. Os principais min&eacute;rios de Bi s&atilde;o bismuthinita (sulfeto) e bismita (&oacute;xido); o bismuto nativo n&atilde;o &eacute; um min&eacute;rio importante neste contexto. A maior parte do Bi &eacute; obtida como subproduto (&ldquo;byproduct&rdquo;) na obten&ccedil;&atilde;o de Pb, W e Cu. Bismuto est&aacute; atualmente substituindo Pb em muitos usos. Possui um ponto de fus&atilde;o relativamente baixo (271,5&ordm;C), cristaliza rapidamente ap&oacute;s a fus&atilde;o e &eacute; uma das poucas subst&acirc;ncias que, ao cristalizar, expande ao inv&eacute;s de se contrair. Ao contr&aacute;rio de outros elementos nativos, &eacute; inerte, n&atilde;o &eacute; t&oacute;xico e de manipula&ccedil;&atilde;o segura. Quimicamente &eacute; muito puro; pode conter pequenos teores de As, Sb, S e Te. H&aacute; uma variedade rica em Sb. Associa-se a t&iacute;picos minerais de ganga como quartzo, barita e carbonatos (calcita, siderita).&nbsp;</p>','Bi','bismuto'),(19,NULL,'2025-09-22 14:10:22','2025-09-22 14:10:22','Bornita','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A bornita ocorre disseminada em rochas &iacute;gneas intrusivas m&aacute;ficas e pode ocorrer em dep&oacute;sitos do tipo VMS (sulfetos vulcanog&ecirc;nicos maci&ccedil;os). &Eacute; um min&eacute;rio importante em dep&oacute;sitos do tipo cobre p&oacute;rfiro. Tamb&eacute;m &eacute; abundante em veios hidrotermais de min&eacute;rios de cobre, de alta a baixa temperatura, com ou sem quartzo. Ocorr&ecirc;ncias pegmat&iacute;ticas e pneumatol&iacute;ticas s&atilde;o muito frequentes. Tamb&eacute;m ocorre em escarnitos, mas dep&oacute;sitos sedimentares n&atilde;o s&atilde;o frequentes. Raramente ocorre cementativa, formando finos filmes sobre gr&atilde;os de calcopirita. &Eacute; abundante em dep&oacute;sitos sedimentares de folhelhos cupr&iacute;feros (&ldquo;Kupferschiefer&rdquo;). &Eacute; rara em dep&oacute;sitos do tipo &ldquo;red beds&rdquo;. Em alguns casos a bornita ocorre em rochas metam&oacute;rficas, restrita a zonas intensamente solicitadas.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Cristaliza no Sistema C&uacute;bico a temperaturas ~ 200&ordm;C. Com o abaixamento da temperatura, a estrutura recristaliza para ortorr&ocirc;mbica, mas eventuais cristais j&aacute; formados permanecem com as formas c&uacute;bicas originais. Pode conter tra&ccedil;os de Ag, Ge, Bi, In e Pb. &Eacute; magn&eacute;tica ap&oacute;s aquecimento.&nbsp;</span></p>','Cu5FeS4','bornita'),(20,NULL,'2025-09-22 14:11:04','2025-09-22 14:11:04','Calcedônia','<p>A calced&ocirc;nia &eacute; um tectossilicato comum, um termo gen&eacute;rico atribu&iacute;do a todas as variedades de quartzo, conhecidas popularmente como &aacute;gata, jaspe, chert, crisopr&aacute;sio, &ocirc;nix, pietersita e outros. Cientificamente designa agregados de microcristais alinhados de quartzo que formam uma estrutura que lembra fibras. Essas &ldquo;fibras&rdquo; podem ser de tr&ecirc;s tipos, formadas por cristais de quartzo alinhados paralelamente ou perpendicularmente ou obliquamente em rela&ccedil;&atilde;o a seus eixos &ldquo;z&rdquo;. Calced&ocirc;nia ocorre em v&aacute;rios ambientes geol&oacute;gicos diferentes, tem uma s&eacute;rie de usos e possui (como &aacute;gata, jaspe, chert, etc.) import&acirc;ncia econ&ocirc;mica consider&aacute;vel. &Aacute;gata &eacute; um material historicamente de elevado valor comercial. Distingue-se mais de 70 variedades de &aacute;gata, 16 variedades de jaspe e 3 variedades de chert, dependendo das estruturas formadas, das localidades de ocorr&ecirc;ncia e das cores que apresentam.</p>','SiO2','calcedonia'),(21,NULL,'2025-09-22 14:11:54','2025-09-22 14:11:54','Calcita','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Calcita &eacute; o carbonato mais comum, pode ocorrer em praticamente todos os tipos de sedimentos e rochas, nestes &uacute;ltimos ou como mineral prim&aacute;rio ou como secund&aacute;rio. Em calc&aacute;rios, m&aacute;rmores e carbonatitos &eacute; o principal mineral formador de rocha. &Eacute; muito comum como acess&oacute;rio e pode preencher veios que atravessam as rochas. &Eacute; um mineral muito comum como acompanhante de minerais de min&eacute;rio met&aacute;licos. A lista de possibilidades &eacute; muito grande; calcita sempre pode estar presente pela sua facilidade em dissolver e reprecipitar. Basicamente ocorre associada a qualquer outro mineral.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">&Eacute; um min&eacute;rio importante, com centenas de usos na ind&uacute;stria, como na fabrica&ccedil;&atilde;o do cimento, como carga mineral em cosm&eacute;ticos, tintas e borrachas, na siderurgia, na metalurgia, na agricultura e muitas outras. Ao microsc&oacute;pio, calcita em grandes cristais bem formados (esp&aacute;tica) apresenta clivagem e maclas; calcita microcristalina (micrita) n&atilde;o apresenta clivagem nem maclas.</span></p>','CaCO3','calcita'),(22,NULL,'2025-09-22 14:12:50','2025-09-22 14:12:50','Calcopirita','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A calcopirita &eacute; um sulfeto prim&aacute;rio que ocorre em gr&atilde;os an&eacute;dricos pequenos em muitos tipos de rochas &iacute;gneas intrusivas, especialmente nas b&aacute;sicas. Calcopirita &eacute; t&iacute;pica de dep&oacute;sitos de origem hidrotermal como dep&oacute;sitos de sulfetos maci&ccedil;os vulcanog&ecirc;nicos e dep&oacute;sitos sedimentares exhalativos (SEDEX). Tamb&eacute;m &eacute; importante em dep&oacute;sitos de metamorfismo e metasomatismo de contato (escarnitos), dep&oacute;sitos de cobre p&oacute;rfiro, pegmatitos, veios hidrotermais de Sn, veios hidrotermais de alta temperatura de Au, veios hidrotermais do tipo Cu-Pb-Zn-Ag ou Cu-Zn-As, bem como em dep&oacute;sitos de min&eacute;rio de Ni komatiico. Ocorre em camadas de carv&atilde;o associada a n&oacute;dulos de pirita, como dissemina&ccedil;&atilde;o em rochas sedimentares carbon&aacute;ticos, em folhelhos betuminosos (&ldquo;Kupferschiefer&rdquo;) e em muitos outros rochas.</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">&Eacute; o mais comum e abundante min&eacute;rio de Cu, contendo 25% de Cu em peso. Forma uma s&eacute;rie com a eskebornita (CuFeSe2). Nas raras ocasi&otilde;es em que forma cristais idiom&oacute;rficas, mostra estrias paralelamente a (1-10) nas faces {112} dos esfen&oacute;ides, que s&atilde;o as faces grandes e foscas dos cristais. As faces {-112} s&atilde;o pequenas, sem estrias e tem brilho met&aacute;lico. &Eacute; magn&eacute;tica se aquecida. Quanto a variedades: calcopiritas botrioidais s&atilde;o conhecidas como &ldquo;blister copper&rdquo; e calcopiritas emba&ccedil;adas (assim como bornitas emba&ccedil;adas) como &ldquo;peacock ore&rdquo; (= min&eacute;rio pav&atilde;o).&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Sua composi&ccedil;&atilde;o qu&iacute;mica normalmente &eacute; estequiom&eacute;trica se formada a temperaturas inferiores a aproximadamente 250&ordm;C. A temperaturas mais elevadas inclui v&aacute;rias outras subst&acirc;ncias que desmisturam com o abaixamento da temperatura. A calcopirita pode conter impurezas como Co, Ni, Mn, Zn e Sn substituindo o Cu e o Fe. Al&eacute;m disso, Se, Fe e As substituem o S e foram registradas calcopiritas com tra&ccedil;os de Ag, Au, Pt, Te, Pd, Pb, V, Cr, In e Sb. &Eacute; poss&iacute;vel que muitos destes elementos na realidade s&atilde;o provenientes de pequen&iacute;ssimas inclus&otilde;es.&nbsp;</span></p>','CuFeS2','calcopirita'),(23,NULL,'2025-09-22 14:13:53','2025-09-22 14:13:53','Cianita','<p>A cianita (Al[6]Al[6]SiO5) &eacute; um nesossilicato tricl&iacute;nico que integra o grupo mineral&oacute;gico dos aluminossilicatos, de f&oacute;rmula geral Al2SiO5, e que tem andaluzita (Al[6]Al[5]SiO5) e silimanita (Al[6]Al[4]SiO5) como polimorfos (Klein e Hurlbut, 1999). O arranjo cristalino da cianita &eacute; 1:1, em que cadeias de octaedros de Al-O, que se distribuem paralelamente ao longo do eixo cristalino c, s&atilde;o ligadas entre si pelos &iacute;ons Si, Al e O. Os &iacute;ons de Si s&atilde;o coordenados por quatro &iacute;ons de oxig&ecirc;nio e o Al por seis, onde o Si fica entre quatro oxig&ecirc;nios e resulta em um tetraedro SiO4 independente. Os &aacute;tomos de oxig&ecirc;nio t&ecirc;m ordena&ccedil;&atilde;o c&uacute;bica, compacta e ligeiramente distorcida. A cianita &eacute; normalmente azul, mas pode ser verde e cinza, e apresenta como importante propriedade distintiva dureza 5 ao longo do prisma e 7 no sentido transversal. A cianita, tamb&eacute;m denominada de dist&ecirc;nio, ocorre como porfiroblastos ou agregados cristalinos em xistos aluminosos, paragnaisses e quartzitos localizados em terrenos metamorfizados em f&aacute;cies anfibolito a granulito e em zonas de deforma&ccedil;&atilde;o de alta press&atilde;o, como zonas de cisalhamento. Neste contexto, muscovita, granada, silimanita e estaurolita ocorrem comumente associados com a cianita.</p>','Al2SiO5','cianita'),(24,NULL,'2025-09-22 14:14:53','2025-09-22 14:14:53','Sílica','<p>A palavra sil&iacute;cio prov&eacute;m do latim silex, rocha constitu&iacute;da de s&iacute;lica (di&oacute;xido de sil&iacute;cio) amorfa hidratada e s&iacute;lica microcristalina, a qual era utilizada, pela sua dureza, na confec&ccedil;&atilde;o de utens&iacute;lios e armas na Era Pr&eacute;-Met&aacute;lica ou Paleol&iacute;tica. O sil&iacute;cio n&atilde;o &eacute; encontrado na sua forma elementar na natureza, devido &agrave; sua alta afinidade pelo oxig&ecirc;nio. &Eacute; encontrado somente em formas combinadas, como a s&iacute;lica e minerais silicatados, com f&oacute;rmula geral SiaObXc, no qual X representa um ou mais c&aacute;tions, tais como alum&iacute;nio (aluminossilicatos), magn&eacute;sio (talco), c&aacute;lcio (wolastonita), magn&eacute;sio e ferro (olivina) e muitos outros, al&eacute;m da presen&ccedil;a quase constante do hidrog&ecirc;nio. As letras a, b e c ditam a estequiometria e a estrutura do mineral. Silicatos que est&atilde;o no nosso dia a dia, como o vidro e a areia, cont&ecirc;m somente hidrog&ecirc;nio como c&aacute;tion acompanhante, com uma nota&ccedil;&atilde;o geral simplificada de SiO2 (Sripanyakorn et al., 2005).&nbsp;</p>','SiaObXc','silica'),(25,NULL,'2025-09-22 14:15:01','2025-09-22 14:15:01','Citrino','<p>Citrino &eacute; uma variedade de quartzo cuja cor varia do amarelo claro ao marrom devido a uma distribui&ccedil;&atilde;o submicrosc&oacute;pica de impurezas de hidr&oacute;xido f&eacute;rrico coloidal . Os citrinos naturais s&atilde;o raros; a maioria dos citrinos comerciais s&atilde;o ametistas tratadas termicamente ou quartzos esfuma&ccedil;ados. No entanto, uma ametista tratada termicamente ter&aacute; pequenas linhas no cristal, em oposi&ccedil;&atilde;o &agrave; apar&ecirc;ncia turva ou esfuma&ccedil;ada de um citrino natural. &Eacute; quase imposs&iacute;vel diferenciar visualmente o citrino cortado do top&aacute;zio amarelo, mas eles diferem na dureza .&nbsp;</p>','SiO2','citrino'),(28,NULL,'2025-09-22 14:15:33','2025-09-22 14:15:33','Rosa das areias','<p>Uma rosa do deserto &eacute; uma intrincada forma&ccedil;&atilde;o semelhante a uma rosa de aglomerados de cristais de gesso ou barita , que incluem abundantes gr&atilde;os de areia. As \"p&eacute;talas\" s&atilde;o cristais achatados no &nbsp;eixo c , abrindo-se em leques radiantes.</p>\r\n<p>O h&aacute;bito cristalino em roseta tende a ocorrer quando os cristais se formam em condi&ccedil;&otilde;es arenosas &aacute;ridas, como a evapora&ccedil;&atilde;o de uma bacia salina rasa. Os cristais formam uma matriz circular de placas planas, dando &agrave; rocha uma forma semelhante a uma flor de rosa. As rosas de gesso geralmente t&ecirc;m bordas mais definidas e n&iacute;tidas do que as rosas de barita. Celestine e outros minerais evapor&iacute;ticos laminados tamb&eacute;m podem formar aglomerados de rosetas. Elas podem aparecer como uma &uacute;nica flor semelhante a uma rosa ou como grupos de flores, geralmente variando do tamanho de uma ervilha a 10 cent&iacute;metros (4 pol.) de di&acirc;metro.</p>\r\n<p>A areia ambiente que &eacute; incorporada na estrutura do cristal, ou incrusta os cristais, varia de acordo com o ambiente local. Se estiverem presentes &oacute;xidos de ferro , as rosetas assumem um tom enferrujado.</p>\r\n<p>A rosa do deserto tamb&eacute;m pode ser conhecida pelos nomes: rosa da areia, rosa do Saara , rosa da rocha, rosa da selenita , rosa da gipsita e rosa da barita (barita).</p>','CaSO4·2H2O.','rosa-das-areias'),(29,NULL,'2025-09-22 14:16:08','2025-09-22 14:16:08','Rodonita','<p>A rodonita &eacute; um silicato de mangan&ecirc;s com c&aacute;lcio, tricl&iacute;nico, de cor avermelhada ou r&oacute;sea, tra&ccedil;o branco, semitransparente a semitransl&uacute;cida, com brilho v&iacute;treo e duas clivagens perfeitas. Pode ter inclus&otilde;es pretas de &oacute;xido de mangan&ecirc;s na forma de manchas ou veios. E muito semelhante a alguns corais. Dureza 5,5 a 6,0 na escala de Mohs. Densidade 3,40 a 3,70. &Eacute; comumente utilizada como pedra ornamental e na obten&ccedil;&atilde;o de mangan&ecirc;s. Tamb&eacute;m chamada de manganolita. Quando exposta &agrave; luz do Sol, a rodonita adquire tonalidades acastanhadas ou mesmo pretas.&nbsp;</p>','(Mn2+,Fe2+,Mg, Ca)SiO3','rodonita'),(30,NULL,'2025-09-22 14:16:34','2025-09-22 14:16:34','Quartzo','<p>O quartzo &eacute; um tectosilicato muito comum, o segundo mais abundante mineral em rochas terrestres crustais depois dos feldspatos, importante como formador de rochas &iacute;gneas, metam&oacute;rficas e sedimentares. Como &eacute; muito resistente &agrave; altera&ccedil;&atilde;o, &eacute; o principal constituinte de areias. Cristais de quartzo quase sempre s&atilde;o formas combinadas; mais de 500 formas combinadas diferentes foram registradas. Os maiores cristais de quartzo atingiram 6 m e 36 toneladas. &Eacute; piezoel&eacute;trico e piroel&eacute;trico. Pode ser triboluminescente e apresenta parti&ccedil;&atilde;o rombo&eacute;drica. Geralmente cont&ecirc;m Al e Fe substituindo o Si; para o equil&iacute;brio das cargas ocorrem, intersticiais, Fe, Na, Li e K. Extremamente comum em rochas &iacute;gneas, metam&oacute;rficas e sedimentares. Mesmo em rochas b&aacute;sicas ocasionalmente est&aacute; presente. &Eacute; um mineral comum em veios hidrotermais de qualquer temperatura (epitermais a alpinos), caracter&iacute;stico de granitos e pegmatitos gran&iacute;ticos. Formador de rocha em arenitos e quartzitos, menos abundante em outros tipos de rocha. Ocorre tamb&eacute;m em dep&oacute;sitos de metais hidrotermais. &Eacute; comum em rochas carbon&aacute;ticas e &eacute; um constituinte importante em solos e sedimentos como mineral residual. Nos dep&oacute;sitos hidrotermais de todos os tipos o quartzo &eacute; um dos principais minerais da ganga e geralmente &eacute; anterior (mais velho) aos sulfetos. Entretanto, n&atilde;o s&atilde;o raras as situa&ccedil;&otilde;es em que ocorre em v&aacute;rias gera&ccedil;&otilde;es. Quartzo &eacute; comum preenchendo cavidades como ves&iacute;culas em rochas vulc&acirc;nicas.&nbsp;</p>','SiO2','quartzo'),(31,NULL,'2025-09-22 14:17:02','2025-09-22 14:17:02','Purpurita','<p>A Purpurita ou o purpurite &eacute; um mineral da classe de fosfatos, e dentro de que o grupo triphylite minerais. &nbsp;&Eacute; uma forma mineral, principalmente como um resultado da altera&ccedil;&atilde;o da litiofilita em complexos de pegmatite tipo granito.<br>Esp&eacute;cies dos minerais secund&aacute;rios s&oacute;lidos s&eacute;rie solu&ccedil;&atilde;o purpurita-heterosita s&atilde;o formados pela oxida&ccedil;&atilde;o do ferro e/ou mangan&ecirc;s com simult&acirc;nea lixivia&ccedil;&atilde;o de l&iacute;tio. Intermedi&aacute;rios desta altera&ccedil;&atilde;o j&aacute; foi pensado que os minerais eram v&aacute;lidos, mas eles eram apenas parte de um processo cont&iacute;nuo de mudan&ccedil;a: ferrisicklerita e sicklerita .<br>Nas Purpuritas a propor&ccedil;&atilde;o de ferro e de mangan&ecirc;s n&atilde;o parecem variar amplamente entre purpurita secund&aacute;rio e prim&aacute;rio litiofilita.<br>Muitas vezes encontrada associada com outros minerais, tais como: litiofilita, sicklerita e muitos min&eacute;rios de ferro laterais-mangan&ecirc;s.</p>','(Mn,Fe)PO4.H2O','purpurita'),(32,NULL,'2025-09-22 14:17:03','2025-09-22 14:17:03','Cobalto Calcita','<p><span class=\"C9DxTc \">A calcita &eacute; um dos principais minerais formadores de rochas (o principal carbonato) e por muitas vezes o predominante em rochas sedimentares, nos calc&aacute;rios; em rochas metam&oacute;rficas, nos m&aacute;rmores; e nas rochas &iacute;gneas, nos carbonatitos. Tamb&eacute;m est&aacute; presente em veios hidrotermais, pelo fato de muitas vezes CO</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">&nbsp;ser um dos componentes da fase fluida do sistema, e em ambientes c&aacute;rsticos junto ao seu polimorfo: aragonita. Calcita &eacute; identificada pela sua clivagem rombo&eacute;drica, dureza e pela caracter&iacute;stica que a diferencia da dolomita (CaMg(CO</span><span class=\"C9DxTc \">3</span><span class=\"C9DxTc \">)</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">): efervesc&ecirc;ncia no &aacute;cido clor&iacute;drico frio. O cristal transparente e de boa visualiza&ccedil;&atilde;o da intensa dupla refra&ccedil;&atilde;o &eacute; popularmente chamado de espato de Isl&acirc;ndia.</span><span class=\"C9DxTc \">&nbsp;</span><span class=\"C9DxTc \">Um dos principais minerais formadores de rocha. De alta relev&acirc;ncia nas rochas sedimentares, pudendo conformar distintos tipos de rocha a trav&eacute;s de processos tanto inorg&acirc;nicos quanto biog&ecirc;nicos. Mineral predominante de calc&aacute;rios, margas, m&aacute;rmores, carbonatitos e por vezes em veios hidrotermais. Tamb&eacute;m presente em rochas &iacute;gneas carbon&aacute;ticas (carbonatitos) e rochas metam&oacute;rficas.</span></p>','CaCO3','cobalto-calcita'),(33,NULL,'2025-09-22 14:17:23','2025-09-22 14:17:23','Psilomelano','<p>Psilomelano &eacute; um nome de grupo para &oacute;xidos duros de mangan&ecirc;s preto, incluindo hollandita e romanequita . O psilomelano consiste em &oacute;xido de mangan&ecirc;s hidratado com quantidades vari&aacute;veis ​​de b&aacute;rio e pot&aacute;ssio . O psilomelano &eacute; erroneamente, e incomumente, conhecido como hematita negra , apesar de n&atilde;o estar relacionado &agrave; hematita verdadeira , que &eacute; um &oacute;xido de ferro.</p>','(Ba,H2O)2Mn5O10','psilomelano'),(34,NULL,'2025-09-22 14:18:00','2025-09-22 14:18:00','Corindon','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">O cor&iacute;ndon &eacute; um &oacute;xido raro que ocorre em algumas rochas ricas em alum&iacute;nio. &Eacute; importante como gema, como abrasivo e como refrat&aacute;rio. &Eacute; classificado no Grupo da Hematita e pode conter Ti, V, Fe e Cr.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Corindon ocorre em rochas &iacute;gneas alcalinas pobres em s&iacute;lica e ricas em Al como sienitos nefel&iacute;nicos e monzonitos; muito raramente nos pegmatitos sem quartzo associados. Tamb&eacute;m ocorre em rochas metam&oacute;rficas de alto grau, de metamorfismo regional ou de contato, ricas em alum&iacute;nio, como cornubianitos de folhelhos aluminosos e escarnitos magnesianos. Forma-se em dep&oacute;sitos de bauxita metamorfizados (metabauxita &ndash; corundita) e pode ser encontrado em xen&oacute;litos aluminosos em rochas plut&ocirc;nicas e hipabissais de altas temperaturas como kimberlitos, noritos e tholeitos. Ocorre em muitos min&eacute;rios derivados de rochas ultrab&aacute;sicas. Sendo duro e resistente, &eacute; um mineral detrital encontrado em sedimentos e em rochas sedimentares.&nbsp;</span></p>','Al2O3','corindon'),(35,NULL,'2025-09-22 14:19:01','2025-09-22 14:19:01','Crisoprásio','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Crisopr&aacute;sio ou cris&oacute;praso &eacute; a variedade mais valiosa do quartzo cripto/microcristalino (calced&ocirc;nia), quase inteiramente composto quimicamente de di&oacute;xido de sil&iacute;cio (SiO</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">).</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">O Crisopr&aacute;sio &eacute; considerado uma das pedras preciosas mais valiosas, mas hoje, raramente &eacute; encontrado. os antigos gregos honravam essa pedra, cujo valor era considerado equivalente ao do ouro. Os gregos acreditavam que essa pedra protegia contra depress&atilde;o e mau humor. No Egito, o Crisopr&aacute;sio era utilizado como pedra de prote&ccedil;&atilde;o, de cura e contra magia negra. Ela foi descoberta na mesopot&acirc;mia, usada como dinheiro.</span></p>','SiO2','crisoprasio'),(36,NULL,'2025-09-22 14:19:56','2025-09-22 14:19:56','Enxofre','<p>O enxofre &eacute; um mineral da classe dos elementos nativos e corresponde &agrave; principal fonte do elemento enxofre. O enxofre ocorre em bordas de vulc&otilde;es, proveniente da deposi&ccedil;&atilde;o de gases emanados nas fumarolas, em veios associado a sulfetos met&aacute;licos, como produto da oxida&ccedil;&atilde;o dos &uacute;ltimos, e em rochas sedimentares associado a anidrita, gipsita e carbonatos.</p>','(S)','enxofre'),(37,NULL,'2025-09-22 14:20:40','2025-09-22 14:20:40','Epídoto','<p><span class=\"C9DxTc \">Constitui-se no grupo mais importante dos sorossilicatos, composto de v&aacute;rios minerais isoestruturais monocl&iacute;nico (clinozoisita, ep&iacute;doto, allanita) e um que pode ser descrito como polimorfo (a zoisita, de mesma composi&ccedil;&atilde;o que a clinozoisita mas ortorr&ocirc;mbico). Este grupo est&aacute; formado por silicatos complexos de alum&iacute;nio e c&aacute;lcio com f&oacute;rmula geral X</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">Y</span><span class=\"C9DxTc \">3</span><span class=\"C9DxTc \">O(SiO</span><span class=\"C9DxTc \">4</span><span class=\"C9DxTc \">)(Si</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">O</span><span class=\"C9DxTc \">7</span><span class=\"C9DxTc \">)(OH).Os minerais possuem uma estrutura complexa de cadeias de octa&eacute;dros de AlO</span><span class=\"C9DxTc \">6</span><span class=\"C9DxTc \">&nbsp;e AlO</span><span class=\"C9DxTc \">4</span><span class=\"C9DxTc \">(OH)</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">, unidos por grupos de SiO</span><span class=\"C9DxTc \">4</span><span class=\"C9DxTc \">&nbsp;e Si</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">O</span><span class=\"C9DxTc \">7</span><span class=\"C9DxTc \">&nbsp;isolados; e apresenta duas esp&eacute;cies i&ocirc;nicas (X e Y) na rede cristalina.A allanita &eacute; usualmente achada alterada pelo processo de metamictiza&ccedil;&atilde;o gerado por seus pr&oacute;prios constituintes radioativos.</span></p>','Ca2 (Al,Fe)3 (SiO4 ) 3 (OH)','epidoto'),(38,NULL,'2025-09-22 14:21:23','2025-09-22 14:21:23','Esmeralda','<p>A esmeralda &eacute; uma pedra preciosa e uma variedade do mineral berilo de cor verde por vest&iacute;gios de cromo ou &agrave;s vezes de van&aacute;dio. As esmeraldas, como todas as pedras preciosas coloridas, s&atilde;o classificadas usando quatro par&acirc;metros b&aacute;sicos conhecidos como \"os quatro Cs\": cor , clareza, corte e peso (em quilates). Normalmente, na classifica&ccedil;&atilde;o de gemas coloridas, a cor &eacute; de longe o crit&eacute;rio mais importante. No entanto, na classifica&ccedil;&atilde;o das esmeraldas, a clareza &eacute; considerada em segundo lugar. Uma esmeralda fina deve possuir n&atilde;o apenas um tom verde puro e verdejante, mas tamb&eacute;m um alto grau de transpar&ecirc;ncia para ser considerada uma pedra preciosa de primeira linha.&nbsp;</p>','(Be 3 Al 2 (SiO 3 ) 6 )','esmeralda'),(39,NULL,'2025-09-22 14:22:09','2025-09-22 14:22:09','Estibinita','<p>A estibnita (&ldquo;stibnite&rdquo; ou &ldquo;antimonite&rdquo;) &eacute; um sulfeto relativamente raro, mas o mais comum sulfeto de Antim&ocirc;nio (Sb), sendo o principal mineral de min&eacute;rio de Antim&ocirc;nio. Normalmente a estibnita &eacute; muito pura. Os cristais prism&aacute;ticos longos formam agrupamentos radiados ou de disposi&ccedil;&atilde;o aleat&oacute;ria. A estibnita &eacute; dimorfa com a metaestibnita e forma uma s&eacute;rie com a bismuthinita. Frequentemente a estibnita &eacute; substitu&iacute;da pseudomorficamente pela stibioconita (amarela) e por cervantita; &agrave;s vezes a substitui&ccedil;&atilde;o &eacute; apenas parcial. Possui uma variedade onde ocorre substitui&ccedil;&atilde;o de enxofre por sel&ecirc;nio. Fragmentos pequenos fundem &agrave; chama da vela, originando uma cor azul-esverdeada.</p>','Sb2S3','estibinita'),(40,NULL,'2025-09-22 14:22:56','2025-09-22 14:22:56','Feldspato','<p>O grupo dos feldspatos &eacute; constitu&iacute;do de aluminossilicatos de pot&aacute;ssio, s&oacute;dio e c&aacute;lcio, e raramente b&aacute;rio. Os feldspatos t&ecirc;m propriedades f&iacute;sicas muito similares entre si, no entanto, devido &agrave; sua composi&ccedil;&atilde;o qu&iacute;mica, se agrupam em: feldspato de pot&aacute;ssico (ortocl&aacute;sio, microcl&iacute;nio, sanidina, adularia), feldspato de b&aacute;rio (celsiana), e feldspato calco-s&oacute;dico. O s&oacute;dio pode substituir o pot&aacute;ssio e, na variedade sanidina, essa substitui&ccedil;&atilde;o pode chegar at&eacute; 50%. A albita e anortita formam uma s&eacute;rie isom&oacute;rfica cont&iacute;nua de solu&ccedil;&otilde;es s&oacute;lidas em diferentes temperaturas. Esta s&eacute;rie &eacute; denominada de plagiocl&aacute;sio e varia desde a albita pura &agrave; anortita pura.&nbsp;</p>','(K, Na, Ca) (Si, Al)4 O8','feldspato'),(41,NULL,'2025-09-22 14:23:39','2025-09-22 14:23:39','Fluorita','<p>Fluorita (fluoreto de c&aacute;lcio, CaF2) &eacute; um mineral de cor muito vari&aacute;vel, clivagem perfeita, h&aacute;bito predominantemente c&uacute;bico, tra&ccedil;o incolor e brilho v&iacute;treo (Harben, 1995). Teoricamente, a fluorita pura (CaF2) cont&eacute;m 51,1% de c&aacute;lcio e 48,9% de fl&uacute;or. Todavia, h&aacute; sempre altera&ccedil;&otilde;es na sua rede cristalina, na qual o c&aacute;lcio pode ser substitu&iacute;do por outros elementos, com mais freq&uuml;&ecirc;ncia, por c&eacute;rio e &iacute;trio. Tamb&eacute;m podem ocorrer inclus&otilde;es mec&acirc;nicas, fluidas e s&oacute;lidas. V&aacute;rios minerais, tais como calcita, barita, quartzo, celestita, sulfetos e, s&atilde;o impurezas comuns em ocorr&ecirc;ncias de fluorita. A fluorita ocorre, com maior freq&uuml;&ecirc;ncia, em cristais isom&eacute;tricos bem desenvolvidos, formando cubos e octaedros. A forma cristalina do mineral exibe uma varia&ccedil;&atilde;o de cores, tais como: verde, violeta, azul, amarelo, roxo, branco e incolor. Possui uma densidade entre 3,0 a 3,6 e dureza 4 na escala de Mohs. Quando a fluorita ocorre em outras formas, a dureza varia entre 3,01 e 3,6, na mesma escala.</p>','CaF2','fluorita'),(42,NULL,'2025-09-22 14:24:22','2025-09-22 14:24:22','Fosfosiderita','<p>A fosfosiderita &eacute; um mineral raro nomeado por seus principais componentes, fosfato e ferro . A siderita, no final de fosfosiderita, vem da palavra \"sideros\", a palavra grega para ferro. &nbsp;&Eacute; um membro do grupo metavariscito, e provavelmente forma uma s&eacute;rie completa com o metavariscito. &Eacute; o dimorfo da estrengita. &Eacute; totalmente sol&uacute;vel em &aacute;cido clor&iacute;drico e quase insol&uacute;vel em &aacute;cido n&iacute;trico. &nbsp;Geralmente &eacute; cortado em formato de caboch&atilde;o para joias e usado como pedra ornamental. Consiste principalmente em oxig&ecirc;nio (51,38%), ferro (29,89%) e f&oacute;sforo (16,58%), mas tamb&eacute;m cont&eacute;m hidrog&ecirc;nio (2,16%).</p>','FePO 4 •2H 2 O','fosfosiderita'),(43,NULL,'2025-09-22 14:24:43','2025-09-22 14:24:43','Pirolusita','<p>A pirolusita &eacute; um &oacute;xido que constitui um dos mais importantes minerais de min&eacute;rio de Mn. Na minera&ccedil;&atilde;o de mangan&ecirc;s, um termo usado &eacute; &ldquo;wad&rdquo;, atribu&iacute;do a uma mistura de minerais de mangan&ecirc;s formada por gr&atilde;os submicrosc&oacute;picos principalmente de pirolusita e psilomelano. Pirolusita &eacute; classificada no Grupo do Rutilo e &eacute; trimorfa com a akhtenskita e ramsdellita. Pirolusita bem cristalizada ou formando cristais pseudom&oacute;rficos sobre manganita &eacute; chamada de polianita ao ciclo sedimentar, constituindo um produto de intemperismo sobre outros minerais de Mn, frequentemente de manganita, sobre a qual forma pseudomorfoses. Forma-se nas zonas de oxida&ccedil;&atilde;o desenvolvidas sobre rochas e dep&oacute;sitos hidrotermais contendo mangan&ecirc;s. Tamb&eacute;m em dep&oacute;sitos formados pela circula&ccedil;&atilde;o de &aacute;guas mete&oacute;ricas. Processos coloidais e atividade bacteriana s&atilde;o importantes em sua forma&ccedil;&atilde;o. Origina-se principalmente em p&acirc;ntanos e lagos; em condi&ccedil;&otilde;es marinhas rasas (frequentemente com textura ool&iacute;tica).&nbsp;</p>','MnO2','pirolusita'),(44,NULL,'2025-09-22 14:25:00','2025-09-22 14:25:00','Pirita','<p><span class=\"C9DxTc \">Sulfeto mais comum e disseminado, formando-se numa grande faixa de temperaturas. &Eacute; mais dura do que a maioria dos sulfetos, e tem grande import&acirc;ncia industrial no mundo (como fonte de enxofre para &aacute;cido sulf&uacute;rico e outros subprodutos de enxofre).</span><span class=\"C9DxTc \">&nbsp;&nbsp;&nbsp;</span><span class=\"C9DxTc \">Composto por 46,6 % Fe, 53,4 % S, pode conter pequenas quantidades de n&iacute;quel e cobalto.&nbsp; Mais comum como cristais c&uacute;bicos geminados e com as faces estriadas, piritoedro e octaedro. Tamb&eacute;m pode se apresentar maci&ccedil;a, granular, reniforme, globular e estalact&iacute;tica. Associa&ccedil;&atilde;o variada, porem mais frequentemente com a calcopirita, esfalerita e galena. Associada por altera&ccedil;&atilde;o &agrave; limonita Pode ser minerada pelo ouro e o cobre associados. Mas tem variados usos na ind&uacute;stria: para fornecer enxofre para a fabrica&ccedil;&atilde;o de H</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">SO</span><span class=\"C9DxTc \">4</span><span class=\"C9DxTc \">&nbsp;e carraposas. Tamb&eacute;m como fonte de ferro, porem inusual.&nbsp; Ocorre como segrega&ccedil;&otilde;es magm&aacute;ticas, como mineral acess&oacute;rio em rochas &iacute;gneas, em dep&oacute;sitos metam&oacute;rficos de contato e, em fil&otilde;es hidrotermais.</span></p>','FeS2','pirita'),(45,NULL,'2025-09-22 14:25:08','2025-09-22 14:25:08','Fuchsita','<p>Fuchsita , tamb&eacute;m conhecida como mica de cromo , &eacute; uma variedade do mineral muscovita rica em cromo (Cr) , pertencente ao grupo das micas de minerais filossilicatos , com f&oacute;rmula qu&iacute;mica K(Al,Cr) 2 (AlSi 3 O 10 )(OH ) 2 . [2]</p>\r\n<p>O cromo trivalente substitui um dos &aacute;tomos de alum&iacute;nio (Al) na f&oacute;rmula geral da muscovita, produzindo a tonalidade verde ma&ccedil;&atilde; caracter&iacute;stica da fucsita. &Eacute; frequentemente encontrado em min&uacute;sculos agregados mic&aacute;ceos (com placas individuais pouco vis&iacute;veis), como um componente principal de rochas metam&oacute;rficas fil&iacute;ticas ou xistosas ricas em cromo da f&aacute;cies xisto verde .</p>\r\n<p>A fucsita cristaliza no sistema cristalino monocl&iacute;nico . A cor comum do mineral vai do verde claro ao verde esmeralda, dependendo da quantidade de substitui&ccedil;&atilde;o de Cr. Os cristais mic&aacute;ceos s&atilde;o flex&iacute;veis e ligeiramente secteis com dureza de 2 a 2,5 na escala de Mohs . A fuchsita apresenta fluoresc&ecirc;ncia verde lim&atilde;o sob luz UV de onda longa . A radioatividade da Fuchsite devido ao seu conte&uacute;do de pot&aacute;ssio (K) &eacute; quase impercept&iacute;vel.&nbsp;</p>','K(Al,Cr)2SI3AlO10(OH,F)2','fuchsita'),(46,NULL,'2025-09-22 14:25:28','2025-09-22 14:25:28','Opala rosa','<p>A opala &eacute; um componente do grupo da s&iacute;lica, comum em ambientes de baixa temperatura e existe em diferentes estados estruturais que s&atilde;o classificados como opala-AG, opala-CT, opala-C e opala-AN (hialita), que s&atilde;o formas polimorfas da s&iacute;lica, onde A significa amorfa e CT, cristobalita e tridmita (Jones e Segnit, 1971). H&aacute; uma grande discuss&atilde;o em torno dessa designa&ccedil;&atilde;o, j&aacute; que o termo opala &eacute; usado para minerais com estruturas e mineralogias bastante distintas. A opala &eacute; uma s&iacute;lica hidratada (f&oacute;rmula qu&iacute;mica SiO2 . nH2O), podendo ser amorfa ou cristalizada, contendo tipicamente de 3 a 10% de &aacute;gua em sua estrutura, podendo chegar at&eacute; 20%. Em rela&ccedil;&atilde;o &agrave;s propriedades &oacute;ticas, a cor da opala varia bastante, podendo ter quase todas as cores, sendo brancas, verdes, azuis, cinzas, negras, laranjas, amarelas, marrons, vermelhas e rosas. Apresenta-se de transparente a transl&uacute;cida podendo, algumas, serem opacas e seu brilho &eacute; v&iacute;treo a resinoso at&eacute; nacarado e graxo. A cor de seu tra&ccedil;o &eacute; branca. &nbsp;A principal diferen&ccedil;a entre o quartzo &eacute; que possui menor resist&ecirc;ncia, ou seja, dureza.</p>\r\n<p>Na opala rosa h&aacute; &nbsp;fibras de paligorskita ,al&eacute;m de Si, foi detectada a presen&ccedil;a de Mg e Al, confirmando assim a paligorskita .</p>','SiO2nH2O','opala-rosa'),(47,NULL,'2025-09-22 14:25:47','2025-09-22 14:25:47','Olivina','<p>A olivina &eacute; um nesosilicato muito comum, ocorrendo principalmente em rochas &iacute;gneas b&aacute;sicas. &Eacute; um importante mineral industrial com uma s&eacute;rie de usos. &ldquo;Olivina&rdquo; na realidade n&atilde;o &eacute; um mineral, mas apenas um termo gen&eacute;rico usado para nesosilicatos da s&eacute;rie isom&oacute;rfica entre forsterita (Mg2SiO4) e fayalita (Fe2SiO4), uma solu&ccedil;&atilde;o s&oacute;lida completa. A olivina &eacute; t&iacute;pica de rochas &iacute;gneas intrusivas e extrusivas, m&aacute;ficas a ultram&aacute;ficas, bem como de seus equivalentes metam&oacute;rficos. Assim, ocorre em gabros, em sienitos com feldspat&oacute;ides (shonquinitos), em gabros com feldspat&oacute;ides (theralitos) e em peridotitos e piroxenitos (sagvanditos e websteritos). Dunito &eacute; uma rocha formada predominantemente por olivina. Olivina tamb&eacute;m ocorre em traquit&oacute;ides (shoshonitos), basaltos alcalinos e subalcalinos (tholei&iacute;ticos) e foiditos (e.g., sodalititos). Pode ser encontrada em rochas com melilita, como turjaitos e melilititos. Tamb&eacute;m em lamproitos, kimberlitos e em alguns min&eacute;rios de platina. Fayalita pode ocorrer em pegmatitos gran&iacute;ticos, em rochas plut&ocirc;nicas f&eacute;lsicas e em sedimentos ricos em Fe metamorfisados. &nbsp;</p>','(Mg,Fe)2SO4','olivina'),(48,NULL,'2025-09-22 14:25:59','2025-09-22 14:25:59','Galena','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A galena &eacute; um sulfeto bastante comum, o principal min&eacute;rio de Pb e frequentemente um importante min&eacute;rio de Ag. Os min&eacute;rios de Pb-Zn geralmente cont&eacute;m teores econ&ocirc;micos de Cu, Ag, Sb e Bi. Cristais de galena s&atilde;o comuns. Normalmente formam cubos, podem formar octaedros ou formas combinadas complexas. A t&iacute;pica clivagem c&uacute;bica da galena se altera se outros elementos est&atilde;o presentes: com Bi a clivagem &eacute; octa&eacute;drica, com Ag a clivagem torna-se escamosa. Cristais rec&eacute;m-clivados exibem faces com um brilho met&aacute;lico forte, que com o tempo pode emba&ccedil;ar, perdendo o brilho e passando a fosco.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Galena se forma em uma s&eacute;rie de ambientes. Ocorre em veios hidrotermais com sulfetos formados em um amplo intervalo de temperaturas. Ocorre disseminada como gr&atilde;os pequenos e escassos em rochas &iacute;gneas. Em rochas sedimentares pode substituir carbonatos ou ocorre como cimento em rochas cl&aacute;sticas como arenitos. &Eacute; rara em placers (em fun&ccedil;&atilde;o da baixa dureza) e em pegmatitos.&nbsp;</span></p>','PbS','galena'),(49,NULL,'2025-09-22 14:27:01','2025-09-22 14:27:01','Gipsita','<p>A gipsita ou gipso &eacute; um sulfato de c&aacute;lcio hidratado amplamente distribu&iacute;do, gerado a partir da precipita&ccedil;&atilde;o de sais em processos de evapora&ccedil;&atilde;o de massas de &aacute;gua isoladas. Este mineral est&aacute; muito relacionado &agrave; anidrita, o sulfato de c&aacute;lcio anidro, que n&atilde;o &eacute; muito comum e a aus&ecirc;ncia da &aacute;gua na sua estrutura gera propriedades f&iacute;sicas diferentes as da gipsita. Os subprodutos da gipsita s&atilde;o usados em diversas &aacute;reas industriais. Frequentemente interestratificado com calc&aacute;rios e folhelhos, como camada subjacente &agrave; sal-gema. Tamb&eacute;m em corpos lenticulares ou cristais disseminados. Formado pela altera&ccedil;&atilde;o de anidrita. Encontrado tamb&eacute;m em regi&otilde;es vulc&acirc;nicas. Pode recristalizar em veios hidrotermais.</p>','CaSO4.2H2O','gipsita'),(50,NULL,'2025-09-22 14:27:40','2025-09-22 14:27:40','Goethita','<p>A goethita &eacute; um mineral de &oacute;xido de ferro, com f&oacute;rmula qu&iacute;mica FeO(OH) que pode ocorrer em v&aacute;rios tons de marrom, de marrom amarelado at&eacute; marrom escuro, o que faz variar da mesma forma o seu tra&ccedil;o. &Eacute; opaco e tem brilho adamantino. Este mineral aparece sob a forma de um agregado cristalino fibroso. &Eacute; muito dificilmente riscado pelo estilete, o que corresponde a uma dureza entre 5,0 e 5,5. Tem clivagem perfeita e fratura desigual, tem densidade 4,27g/cm3 , &eacute; quebradi&ccedil;o. A goethita tem um aspecto estriado e &aacute;spero, ocorre em ambientes oxidantes, como produto de altera&ccedil;&atilde;o de minerais portadores de ferro. Forma os &ldquo;chap&eacute;us de ferro&rdquo; como produto de altera&ccedil;&atilde;o superficial de veios mineralizados com metais. &Eacute; um constituinte importante das lateritas.</p>','FeO(OH)','goethita'),(51,NULL,'2025-09-22 14:28:22','2025-09-22 14:28:22','Granada','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A granada &eacute; um nesosilicato muito comum, que pode ser encontrado em rochas &iacute;gneas, metam&oacute;rficas e sedimentares. &Eacute; um importante mineral industrial com muitas aplica&ccedil;&otilde;es, principalmente como abrasivo. &ldquo;Granada&rdquo; na realidade n&atilde;o &eacute; um mineral, mas apenas um termo gen&eacute;rico que se refere aos membros do Grupo das Granadas: piropo - Mg3Al2(SiO4)3, almandina - Fe2+3Al2(SiO4)3, espessartina - Mn2+3Al2(SiO4)3, uvarovita - Ca3Cr2(SiO4)3, hidrogrossul&aacute;ria - [Ca3Al2(SiO4)3-x(H4O4)x], grossul&aacute;ria - Ca3Al2(SiO4)3 e andradita - Ca3Fe3+2(SiO4)3. H&aacute; uma s&eacute;rie de solu&ccedil;&atilde;o s&oacute;lida entre grossul&aacute;ria e andradita e, para membros n&atilde;o analisados desta s&eacute;rie &eacute; usado o termo &ldquo;grandita&rdquo;. Granadas podem ser anis&oacute;tropas (&ldquo;Cesare B. et al. 2019, Garnet, the archetypal cubic mineral, grows tetragonal&rdquo;). &Eacute; muito dif&iacute;cil diferenciar os membros do Grupo das Granadas apenas por suas caracter&iacute;sticas &oacute;pticas. Cada uma das granadas possui algumas variedades, normalmente baseadas em teores de outros elementos. Inclus&otilde;es de rutilo, riebeckita e outros minerais podem ocorrer.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Almandina</span><span class=\"C9DxTc \">&nbsp;&eacute; t&iacute;pica, porfirobl&aacute;stica, em xistos, gnaisses, granitos e pegmatitos.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Piropo&nbsp;</span><span class=\"C9DxTc \">ocorre em rochas &iacute;gneas ultram&aacute;ficas (piroxenitos, peridotitos). Tamb&eacute;m em kimberlitos e em rochas metam&oacute;rficas de contato.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Espessartita</span><span class=\"C9DxTc \">&nbsp;&eacute; t&iacute;pica de rochas metam&oacute;rficas como gnaisses, xistos, etc. Tamb&eacute;m em escarnitos.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Andradita&nbsp;</span><span class=\"C9DxTc \">&eacute; rara, de escarnitos, xistos, serpentinitos e rochas &iacute;gneas alcalinas titan&iacute;feras como sienitos e piroxenitos. Uma variedade preta macroscopicamente, titan&iacute;fera (at&eacute; 11,5% Ti), t&iacute;pica de rochas vulc&acirc;nicas alcalinas, &eacute; conhecida como &ldquo;</span><span class=\"C9DxTc \">melanita</span><span class=\"C9DxTc \">&rdquo;.</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Grossul&aacute;ria&nbsp;</span><span class=\"C9DxTc \">&eacute; uma granada caracter&iacute;stica de gnaisses.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Uvarovita&nbsp;</span><span class=\"C9DxTc \">&eacute; a mais rara, encontrada como mineral secund&aacute;rio em zonas de contato metam&oacute;rfico.</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Granadas s&atilde;o muito resistentes, ocorrem em areias e portanto tamb&eacute;m em rochas sedimentares.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Associam-se a um n&uacute;mero muito elevado de outros minerais, cuja listagem jamais contemplar&aacute; todas as situa&ccedil;&otilde;es. Muito comumente est&aacute; associada a quartzo, micas (biotita, muscovita, clorita), estaurolita, turmalina, feldspatos (plagiocl&aacute;sios, microcl&iacute;nio), fl&uacute;or-apatita, berilo e muitos outros.</span></p>','A3B2(SiO4)3','granada'),(52,NULL,'2025-09-22 14:28:59','2025-09-22 14:28:59','Malaquita','<p>A malaquita &eacute; um dos minerais de cobre mais bem distribu&iacute;dos na Terra e possui grande import&acirc;ncia comercial devido a sua beleza (utilizada em ornamenta&ccedil;&otilde;es) e a sua cor (antigamente usado na fabrica&ccedil;&atilde;o de pigmento verde). Formada na altera&ccedil;&atilde;o das jazidas de cobre, ela &eacute; frequentemente associada &agrave; azurita (que possui propriedades f&iacute;sicas similares). Associado a azurita, cuprita, cobre nativo, &oacute;xidos de ferro, e sulfetos do cobre e do ferro.&nbsp;</p>','Cu2CO3(OH)2','malaquita'),(53,NULL,'2025-09-22 14:29:17','2025-09-22 14:29:17','Magnetita','<p>A magnetita &eacute; um mineral magn&eacute;tico formado pelos &oacute;xidos de ferro II e III (FeO. Fe2O3), cuja f&oacute;rmula qu&iacute;mica &eacute; Fe3O4. A magnetita apresenta na sua composi&ccedil;&atilde;o, aproximadamente, 69% de Fe2O3 e 31% de FeO ou 72,40% de ferro e 27,60% de oxig&ecirc;nio. O mineral apresenta forma cristalina isom&eacute;trica, geralmente na forma octa&eacute;drica. &Eacute; um material de dureza 6,0, quebradi&ccedil;o, fortemente magn&eacute;tico, de cor preta, de brilho met&aacute;lico, com peso espec&iacute;fico de 5,18g/cm3 . &Eacute; um mineral que se dissolve lentamente em &aacute;cido clor&iacute;drico (Klein, 2001). A magnetita &eacute; a fonte mais valiosa entre os min&eacute;rios de ferro. &Eacute; encontrada, como pequenos gr&atilde;os, disseminada nas rochas &iacute;gneas (regi&atilde;o de pegmatitos) e metam&oacute;rficas. A magnetita tamb&eacute;m &eacute; encontrada em meteoritos. A magnetita &eacute; um mineral do gupo das espinelas que constituem um grupo de minerais que cristalizam no sistema c&uacute;bico, com h&aacute;bito octa&eacute;drico.&nbsp;</p>','Fe₃O₄','magnetita'),(54,NULL,'2025-09-22 14:29:41','2025-09-22 14:29:41','Lepidolita','<p>A lepidolita &eacute; um filosilicato raro, restrito a pegmatitos gran&iacute;ticos litin&iacute;feros. Pode constituir um min&eacute;rio de Li, Cs e Rb. A cor rosa a p&uacute;rpura t&iacute;pica de lepidolita e muscovita-Li n&atilde;o se deve &agrave; presen&ccedil;a de Li, mas sim a teores de Mn. Trilithionita possui tr&ecirc;s variedades (com Cs, com Rb ou maci&ccedil;a). Polylithionita possui uma variedade com Cs. Pode ocorrer fluoresc&ecirc;ncia regular de branco creme a amarelo p&aacute;lido ou amarelo. Lepidolita &eacute; uma mica bastante rara que geralmente ocorre em aplitos associados a pegmatitos gran&iacute;ticos ricos em Li. Tamb&eacute;m ocorre em greisens. Raramente ocorre em veios hidrotermais e em casos muito isolados em zonas de contato de granitos. Lepidolitas de maneira geral associam-se a quartzo, muscovita, feldspatos (albita, cleavelandita, microcl&iacute;nio), turmalinas (rubellita, elbaita), berilo (morganita), espodum&ecirc;nio, cassiterita, ambligonita e top&aacute;zio.&nbsp;</p>','K(Li, Al)3(Si ,Al)4O10(F, OH)2','lepidolita'),(55,NULL,'2025-09-22 14:29:58','2025-09-22 14:29:58','Hematita','<p>A hematita, &oacute;xido de ferro (Fe2O3), &eacute; o principal mineral-min&eacute;rio de ferro. O nome decorre do fato de que este mineral &eacute; vermelho ocre quando transformado em p&oacute; (cor do tra&ccedil;o). O nome hematita originou-se do grego: hemos= sangue, em refer&ecirc;ncia &agrave; cor vermelha do tra&ccedil;o do mineral. A hematita pode ocorrer sob diferentes formas: hematita compacta, hematita especular, hematita porosa e ainda martita e hematita granobl&aacute;stica (Klein, 2001).&nbsp;</p>','Fe2O3','hematita');
/*!40000 ALTER TABLE `minerals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(1,'App\\Models\\User',2),(1,'App\\Models\\User',3),(1,'App\\Models\\User',4),(1,'App\\Models\\User',5),(1,'App\\Models\\User',6),(1,'App\\Models\\User',7),(1,'App\\Models\\User',8),(1,'App\\Models\\User',9),(1,'App\\Models\\User',10),(1,'App\\Models\\User',11),(1,'App\\Models\\User',12);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rochas`
--

DROP TABLE IF EXISTS `rochas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rochas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `composicao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rochas_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rochas`
--

LOCK TABLES `rochas` WRITE;
/*!40000 ALTER TABLE `rochas` DISABLE KEYS */;
INSERT INTO `rochas` VALUES (1,'2025-09-12 17:55:27','2025-09-12 17:55:27','Gabro','<p>Gabro &eacute; uma rocha plut&oacute;nica intrusiva de cor escura com textura faner&iacute;tica e granula&ccedil;&atilde;o m&eacute;dia a grossa. &Eacute; uma rocha composta essencialmente por plagioclases[1] (labradorite a anortite), piroxenas[1] e titanomagnetite. A olivina magnesiana (forsterite)[1] pode ocorrer como mineral acess&oacute;rio, bem como magnetite, sulfetos, apatite, espinela (verde ou castanha), titanite e rutilo.[1] O gabro &eacute; o equivalente plut&oacute;nico do basalto, formando-se pelo arrefecimento lento de magmas de composi&ccedil;&atilde;o bas&aacute;ltica. Comercialmente os gabros s&atilde;o vendidos como granito negro.</p>','Rocha intrusiva básica maciça, fanerítica, com alto teor de minerais máficos (piroxênio).','1','gabro'),(2,'2025-09-12 18:36:06','2025-09-12 18:36:06','Nefelina sienita com sodalita e olivina','<p><span data-huuid=\"7402725383599097993\">Uma rocha nefelina sienito contendo sodalita e olivina &eacute; um tipo de rocha &iacute;gnea alcalina, caracterizada pela presen&ccedil;a de nefelina (um feldspat&oacute;ide), mas tamb&eacute;m cont&eacute;m outros minerais como o sodalita, anfib&oacute;lio ou pirox&ecirc;nio verde e, neste caso espec&iacute;fico, a olivina.&nbsp;</span><span data-huuid=\"7402725383599099702\">A sodalita pode substituir parte da nefelina ou ocorrer juntamente com ela, e a olivina &eacute; um silicato escuro que pode ser encontrado nestas rochas.<span class=\"UV3uM\">&nbsp;</span></span></p>','nefelina (um feldspatóide)','1','nefelina-sienita-com-sodalita-e-olivina'),(3,'2025-09-22 12:42:06','2025-09-22 12:42:06','Granito','<p><span class=\"C9DxTc \">Rocha intrusiva &aacute;cida, maci&ccedil;a, faner&iacute;tica e equigranular m&eacute;dia.&nbsp;</span><span class=\"C9DxTc \">Sua composi&ccedil;&atilde;o consiste em q</span><span class=\"C9DxTc \">uartzo, feldspatos alcalinos (ortoclase, sanidina e microclina) e minerais ferromagnesianos (biotite e moscovite).&nbsp;</span></p>','composta principalmente pelos minerais quartzo, feldspato alcalino e plagioclásio','1','granito'),(4,'2025-09-22 12:43:47','2025-09-22 12:43:47','Andesito','<p><span class=\"C9DxTc \">Rocha intermedi&aacute;ria, normalmente porfir&iacute;tica, que consiste em plagiocl&aacute;sio&nbsp;</span><span class=\"C9DxTc \">&nbsp;</span><span class=\"C9DxTc \">(frequentemente zonado e variando de labradorita a oligocl&aacute;sio), pirox&ecirc;nio, hornblenda&nbsp;</span><span class=\"C9DxTc \">&nbsp;</span><span class=\"C9DxTc \">e/ou biotita.</span></p>','rica em feldspato plagioclásio e minerais máficos como piroxénio e hornblenda.','1','andesito'),(5,'2025-09-22 12:45:06','2025-09-22 12:45:06','Basalto','<p>Os basaltos s&atilde;o rochas vulc&acirc;nicas abundantes no planeta e formam derrames extensos de lava em muitas regi&otilde;es. Pertencem &agrave; categoria das rochas &iacute;gneas, as quais s&atilde;o formadas pelo resfriamento e conseq&uuml;ente solidifica&ccedil;&atilde;o do magma, o qual &eacute; constitu&iacute;do principalmente por &oacute;xidos de sil&iacute;cio, alum&iacute;nio, ferro, c&aacute;lcio, magn&eacute;sio, s&oacute;dio e pot&aacute;ssio. O basalto &eacute; constitu&iacute;do basicamente por minerais de sil&iacute;cio, alum&iacute;nio e ferro, na forma de pirox&ecirc;nios (augita), plagiocl&aacute;sios (labradorita) e magnetita.</p>','A composição química aproximada do basalto é de 43 a 47% de SiO2, 11 a 13% de Al2O3, 10 a 12% de CaO e 8 a 10% de MgO, além de outros óxidos que estão presentes em percentagens inferiores a 5% .','1','basalto'),(6,'2025-09-22 12:46:28','2025-09-22 12:46:28','Riolito  com Vidro Vulcânico','<p><span class=\"C9DxTc \">&nbsp;A mineralogia acess&oacute;ria consiste de zirc&atilde;o, magnetita, ilmenita e apatita. A textura da rocha &eacute; afan&iacute;tica, ou seja, com cristais n&atilde;o vis&iacute;veis a olho nu. Riolito com frequ&ecirc;ncia cont&eacute;m fenocristais dos minerais essenciais imersos na matriz muito fina ou v&iacute;trea de mesma composi&ccedil;&atilde;o. O magma riol&iacute;tico &eacute; rico em s&iacute;lica, por isso, muito viscoso, menos fluido que o magma bas&aacute;ltico, e assim raramente alcan&ccedil;a a superf&iacute;cie. E quando alcan&ccedil;a, em geral, provoca erup&ccedil;&otilde;es explosivas, gerando fluxo de cinza vulc&acirc;nica. A lava de composi&ccedil;&atilde;o riol&iacute;tica resfria muito rapidamente quando chega at&eacute; a superf&iacute;cie, e por isso pode formar&nbsp;</span><span class=\"C9DxTc \">vidro vulc&acirc;nico</span><span class=\"C9DxTc \">&nbsp;ou vitr&oacute;firo (vidro com fenocristais), denominado de obsidiana.&nbsp;</span></p>','Riolito é uma rocha ígnea vulcânica ou extrusiva, composicionalmente similar ao granito. É uma rocha rica em sílica (SiO2 > 68%), constituída essencialmente por quartzo, plagioclásio e feldspato alcalino, podendo conter pequenas quantidades de piroxênio e biotita, e menos frequente é o anfibólio.','1','riolito-com-vidro-vulcanico'),(7,'2025-09-22 12:48:00','2025-09-22 12:48:00','Obsidiana','<p>Obsidiana &eacute; uma rocha &iacute;gnea extrusiva constitu&iacute;da quase integralmente por um tipo de vidro vulc&acirc;nico com 70% ou mais de s&iacute;lica (SiO2 - di&oacute;xido de sil&iacute;cio) na sua composi&ccedil;&atilde;o qu&iacute;mica. Forma-se quando uma lava de composi&ccedil;&atilde;o f&eacute;lsica e baixo teor em &aacute;gua (menos que 2-3% m&aacute;ssicos) arrefece rapidamente sem permitir a forma&ccedil;&atilde;o de cristais em quantidade substancial. Apesar do r&aacute;pido arrefecimento ser necess&aacute;rio, a vitrifica&ccedil;&atilde;o ocorre essencialmente porque a riqueza em silicato das lavas f&eacute;lsicas induz uma elevada viscosidade e polimeriza&ccedil;&atilde;o que dificultam a cristalog&eacute;nese. A obsidiana &eacute; classificada como um mineraloide.&nbsp;</p>','SiO2','1','obsidiana'),(8,'2025-09-22 12:51:18','2025-09-22 12:51:18','Anfibolito','<p>Anfibolito &eacute; uma rocha metam&oacute;rfica de m&eacute;dio grau metam&oacute;rfico, de colora&ccedil;&atilde;o escura, foliada ou maci&ccedil;a, e constitu&iacute;da predominantemente por anfib&oacute;lio verde escuro (hornblenda) e plagiocl&aacute;sio. Resulta do metamorfismo de rochas &iacute;gneas m&aacute;ficas, como o basalto ou gabro, durante o metamorfismo regional.</p>','A composição química do anfibolito é dominada por silicatos e óxidos, com os minerais essenciais sendo o anfibólio (principalmente hornblenda) e o plagioclásio. Outros minerais acessórios que podem estar presentes incluem epidoto, zoisita, quartzo, granada, magnetita, biotita e titanita.','2','anfibolito'),(9,'2025-09-22 12:53:29','2025-09-22 12:53:29','Ardósia','<p>Ard&oacute;sias s&atilde;o rochas de deriva&ccedil;&atilde;o sedimentar e granula&ccedil;&atilde;o fina, fracamente metamorfizadas, que desenvolvem planos preferenciais de parti&ccedil;&atilde;o (delamina&ccedil;&atilde;o) correspondentes &agrave; denominada &ldquo;clivagem ardosiana&rdquo;. A clivagem ardosiana deriva de uma forte orienta&ccedil;&atilde;o planar preferencial de escamas de mica branca (sericita) e de clorita. Esta orienta&ccedil;&atilde;o preferencial &eacute; criada por press&atilde;o mec&acirc;nica, por recristaliza&ccedil;&atilde;o mineral&oacute;gica ou por rota&ccedil;&atilde;o dos cristais.</p>','A composição química da ardósia é determinada pelos minerais que a formam, principalmente quartzo, micas (como ilita, muscovita e clorita) e óxidos de ferro, como hematita.','2','ardosia'),(10,'2025-09-22 12:54:55','2025-09-22 12:54:55','Esteatito','<p>Rocha metam&oacute;rfica composta por talco, dolomita e anfib&oacute;lios. O esteatito &eacute; classificado geol&oacute;gicamente como sendo uma rocha metaultram&aacute;fica. As rochas metaultram&aacute;ficas caracterizam-se por tipos petrogr&aacute;ficos variados em fun&ccedil;&atilde;o do grau de transforma&ccedil;&atilde;o metam&oacute;rfica. Tipos completamente metamorfizados s&atilde;o carbonato-talco-serpentina, tremolitito, clorita xisto, serpentinito e esteatito.&nbsp;</p>','Mg₃Si₄O₁₀(OH)₂','2','esteatito'),(11,'2025-09-22 12:56:10','2025-09-22 12:56:10','Gnaisse','<p>&nbsp;Rocha metam&oacute;rfica de m&eacute;dio a alto grau, portanto, foi submetida a temperaturas e press&otilde;es elevadas. &Eacute; uma das rochas metam&oacute;rficas mais comum. Pode ser formada pelo metamorfismo do granito, ou de rochas sedimentares quartzo-argilosas.&nbsp;</p>','composta principalmente por quartzo, feldspato e mica','2','gnaisse'),(12,'2025-09-22 12:58:27','2025-09-22 12:58:27','Quartzito','<p>A origem dessa rocha est&aacute; associada a processos metam&oacute;rficos sofridos por rochas de origem sedimentar e que tamb&eacute;m s&atilde;o ricas em quartzo, como os arenitos e cherts. Portanto &eacute; uma rocha metam&oacute;rfica que &eacute; composta quase que totalmente de gr&atilde;os de quartzo.A transforma&ccedil;&atilde;o em quartzito atrav&eacute;s dos arenitos acontece a alta press&atilde;o e temperatura, quando devido a movimentos tect&ocirc;nicos os arenitos s&atilde;o postos em zonas profundas da terra. Os gr&atilde;os de quartzo doarenito recristalizam-se nesse caso e os restos dos sedimentos da rocha original somem, dando origem a rocha metam&oacute;rfica quartzito. &Eacute; muito comum a presen&ccedil;a de mica na constitui&ccedil;&atilde;o dos quartzitos, esse fato revela a exist&ecirc;ncia de uma matriz argilosa nos arenitos.</p>','A composição química principal do quartzito é dióxido de silício (SiO₂), que constitui o mineral quartzo, presente em concentrações que podem chegar a 99%','2','quartzito'),(13,'2025-09-22 13:00:32','2025-09-22 13:00:32','Xisto','<p>Rocha metam&oacute;rfica caracterizada por uma folia&ccedil;&atilde;o marcada pela presen&ccedil;a de minerais plac&oacute;ides, como as micas, vis&iacute;veis a olho nu e orientados em folhas paralelas. A folia&ccedil;&atilde;o t&iacute;pica dos xistos &eacute; denominada de xistosidade, que se forma quando rochas s&atilde;o submetidas a mais altas press&otilde;es e temperaturas, acompanhadas de deforma&ccedil;&atilde;o.</p>','A composição química do xisto varia, mas geralmente contém silício, alumínio, ferro, magnésio, cálcio, sódio, e potássio provenientes de minerais como quartzo, feldspato, e vários tipos de argila (como illita e caulinita) e mica.','2','xisto'),(14,'2025-09-22 13:01:50','2025-09-22 13:01:50','Arenito','<p>O arenito &eacute; uma rocha sedimentar cl&aacute;stica composta principalmente por gr&atilde;os de silicato do tamanho de areia (0,0625 a 2 mm) . Os arenitos compreendem cerca de 20&ndash;25% de todas as rochas sedimentares .&nbsp;</p>\r\n<p>.Assim como a areia n&atilde;o cimentada, o arenito pode ter qualquer cor devido &agrave;s impurezas dos minerais, mas as cores mais comuns s&atilde;o bege, marrom, amarelo, vermelho, cinza, rosa, branco e preto. Uma vez que os leitos de arenito frequentemente formam fal&eacute;sias altamente vis&iacute;veis e outras caracter&iacute;sticas topogr&aacute;ficas , certas cores de arenito foram fortemente identificadas com certas regi&otilde;es.</p>\r\n<p>As forma&ccedil;&otilde;es rochosas compostas principalmente por arenito geralmente permitem a percola&ccedil;&atilde;o de &aacute;gua e outros fluidos e s&atilde;o porosas o suficiente para armazenar grandes quantidades, tornando-as valiosos aqu&iacute;feros e reservat&oacute;rios de petr&oacute;leo .&nbsp;</p>','A maior parte do arenito é composta de quartzo ou feldspato (ambos silicatos ) porque são os minerais mais resistentes aos processos de intemperismo na superfície da Terra','3','arenito'),(15,'2025-09-22 13:09:40','2025-09-22 13:09:40','Argilito','<div class=\"CjVfdc\"><span class=\"C9DxTc \">Rocha sedimentar cl&aacute;stica muito fina, a mais fina entre as rochas cl&aacute;sticas, cujos componentes s&atilde;o menores que 0,062 mm, de tamanhos microsc&oacute;picos. Por serem muito finas e constitu&iacute;das por argilominerais, fra&ccedil;&atilde;o argila, essas rochas apresentam-se de forma pl&aacute;stica, permitindo serem moldadas, por isso &eacute; muito usada para produ&ccedil;&atilde;o de cer&acirc;micas. O equivalente n&atilde;o solidificado dos argilitos &eacute; a argila, ou &ldquo;barro&rdquo; como &eacute; popularmente conhecido.&nbsp;</span></div>\r\n<h2 id=\"h.tnvfejovl7kz_l\" class=\"zfr3Q JYVBee CDt4Ke \" dir=\"ltr\"></h2>','Rocha sedimentar clástica muito fina, a mais fina entre as rochas clásticas, cujos componentes são menores que 0,062 mm, de tamanhos microscópicos. Por serem muito finas e constituídas por argilominerais, fração argila, essas rochas apresentam-se de forma plástica, permitindo serem moldadas, por isso é muito usada para produção de cerâmicas. O equivalente não solidificado dos argilitos é a argila, ou “barro” como é popularmente conhecido.','3','argilito'),(16,'2025-09-22 13:14:56','2025-09-22 13:14:56','Calcário','<p>Podemos &nbsp;chamar de rochas sedimentares carbon&aacute;ticas que englobam calc&aacute;rios calc&iacute;ticos e calc&aacute;rios dolom&iacute;ticos. S&atilde;o rochas sedimentares geralmente formadas em antigos mares, por a&ccedil;&atilde;o de microoganismos, como algas e cianobact&eacute;rias (que n&atilde;o &eacute; nem uma alga e nem uma bact&eacute;ria). Por isso pode-se dizer que os calc&aacute;rios n&atilde;o se depositam e nem se precipitam, mas sim &ldquo;crescem&rdquo;. Por vezes a rela&ccedil;&atilde;o gen&eacute;tica com organismos &eacute; direta, podendo-se observar corais ou ac&uacute;mulo de conchas, mas grande quantidade de calc&aacute;rio &eacute; formada pela deposi&ccedil;&atilde;o de lama calc&aacute;ria (n&atilde;o confundir com lama de argila) produzida pela a&ccedil;&atilde;o de cianobact&eacute;rias, ou seja, sedimentos cl&aacute;sticos.</p>','A composição química do calcário é principalmente carbonato de cálcio (CaCO₃), na forma do mineral calcita, mas também pode conter carbonato de magnésio (MgCO₃), formando a dolomita, e outras impurezas','3','calcario'),(17,'2025-09-22 13:17:26','2025-09-22 13:17:26','Caulinita','<p>A caulinita, cuja estrutura foi proposta por Linus Pauling (1930), &eacute; um argilomineral do tipo 1:1 dioctaedral, abundantemente encontrado nos sedimentos de fundo e solos da Terra. Produto da transforma&ccedil;&atilde;o de minerais prim&aacute;rios e secund&aacute;rios, por exemplo, feldspatos e argilominerais do tipo 2:1.</p>','Al4(Si4O10)(OH)8','3','caulinita'),(18,'2025-09-22 13:19:51','2025-09-22 13:19:51','Carvão Mineral','<p>O carv&atilde;o mineral &eacute; uma rocha sedimentar combust&iacute;vel, de cor preta ou marrom, que ocorre em estratos chamados camadas de carv&atilde;o. As formas mais duras, como o antracito, podem ser consideradas rochas metam&oacute;rficas devido &agrave; posterior exposi&ccedil;&atilde;o &agrave; temperatura e press&atilde;o elevadas. &Eacute; composto basicamente por carbono, enxofre, hidrog&ecirc;nio, oxig&ecirc;nio e nitrog&ecirc;nio, al&eacute;m de elementos vestigiais. Quanto maior o teor de carbono, mais puro se considera. Existem quatro tipos principais de carv&atilde;o mineral: turfa, linhito, hulha e antracito (em ordem crescente do teor de carbono). &Eacute; extra&iacute;do do solo por minera&ccedil;&atilde;o a c&eacute;u aberto ou subterr&acirc;nea.&nbsp;</p>','composto principalmente de carbono (geralmente entre 55% e 95%), com a presença de outros elementos como oxigênio, hidrogênio, nitrogênio e enxofre','3','carvao-mineral'),(19,'2025-09-22 13:21:43','2025-09-22 13:21:43','Crocidolita Silicificada (Olho de Tigre)','<p>Olho de tigre (tamb&eacute;m chamado tiger eye) &eacute; uma gema que exibe acatassolamento apresentando normalmente cor amarela a vermelho-marrom, com um lustre sedoso. Trata-se de crocidolita silicificada, um cl&aacute;ssico exemplo de pseudomorfismo. Uma variedade de n&atilde;o totalmente silicificada &eacute; chamada olho de falc&atilde;o. Um membro do grupo do quartzo, suas propriedades f&iacute;sicas e visuais s&atilde;o id&ecirc;nticas ou muito pr&oacute;ximas &agrave;s propriedades de um cristal simples de quartzo.</p>','é composta principalmente de dióxido de silício (SiO₂), que é quartzo, mas contém inclusões fibrosas do mineral original, a crocidolita (uma variedade azul de riebeckita), juntamente com óxidos de ferro.','3','crocidolita-silicificada-olho-de-tigre'),(20,'2025-09-22 13:23:03','2025-09-22 13:23:03','Conglomerado','<p>Rocha sedimentar cl&aacute;stica, constitu&iacute;da por seixos arredondados (&gt; 2 mm) de outras rochas e minerais. Os seixos ficam imersos e consolidados geralmente numa matriz de areia (gr&atilde;os entre 0,062 e 2,0 mm). Quando ocorre predom&iacute;nio da matriz sobre o clastos, esse &eacute; denominado de paraconglomerado, e quando o predom&iacute;nio &eacute; dos clastos sobre a matriz, esse &eacute; denominado de ortoconglomerado. Os seixos que comp&otilde;em os conglomerados s&atilde;o materiais acumulados encontrados nos leitos e margens de rios; junto a esses materiais tamb&eacute;m pode haver concentra&ccedil;&atilde;o de ouro ou diamante.</p>','A composição química de um conglomerado, que é uma rocha sedimentar, não é fixa, mas varia de acordo com os materiais que o compõem, sendo constituído por clastos (fragmentos de rocha ou minerais como quartzo) arredondados e cimentados por um material de ligação chamado cimento, que pode ser sílica, calcário, óxido de ferro ou argila','3','conglomerado'),(21,'2025-09-22 13:24:30','2025-09-22 13:24:30','Coral Calcário','<p>O calc&aacute;rio coral &eacute; uma rocha calc&aacute;ria sedimentar bioconstruita de origem oce&acirc;nica. Surge das concre&ccedil;&otilde;es acumuladas de corais , esponjas do mar e outros organismos marinhos ao longo das costas e em mares rasos.</p>\r\n<p>Hoje, os leitos de calc&aacute;rio de coral s&atilde;o produzidos principalmente por corais duros . Esses organismos t&ecirc;m a capacidade de secretar calc&aacute;rio em sua base. Ao longo dos mil&ecirc;nios, eles d&atilde;o origem a altos recifes de algumas dezenas a v&aacute;rias centenas de metros. O calc&aacute;rio coral, por a&ccedil;&atilde;o da eros&atilde;o marinha ou terremotos, tamb&eacute;m &eacute; encontrado na forma de seixos (giz): muitas vezes, podemos reconhecer nessas pedras vest&iacute;gios dos corais de onde se originam.</p>','A composição química principal do coral calcário é o carbonato de cálcio (CaCO₃), que forma o esqueleto duro dos corais, derivado de elementos da água do mar.','3','coral-calcario'),(22,'2025-09-22 13:25:39','2025-09-22 13:25:39','Filito','<p>Rocha metassedimentar, formada a partir de uma rocha sedimentar argilosa que sofre metamorfismo de baixo grau. O filito apresenta uma folia&ccedil;&atilde;o muito fina, brilho reluzente, prateado, e &eacute; constitu&iacute;do essencialmente por muscovita, clorita e quartzo.&nbsp;</p>','A composição química do filito é dominada por dióxido de silício (SiO2) e óxido de alumínio (Al2O3),','3','filito'),(23,'2025-09-22 13:26:54','2025-09-22 13:26:54','Sílex','<p>S&iacute;lex &eacute; uma rocha sedimentar silicatada, constitu&iacute;da de quartzo criptocristalino, muito dura e com elevada densidade. Apresenta-se geralmente compacta, de cor cinzenta, negra e outras. Com fratura conchoidal. Ocorre sob a forma de n&oacute;dulos ou massas em forma&ccedil;&otilde;es de giz ou calc&aacute;rio. Pode apresentar v&aacute;rias impurezas como argilas, carbonato, silte, pirita e mat&eacute;ria org&acirc;nica. &nbsp;</p>','A composição química do sílex é o dióxido de silício, com a fórmula química SiO','3','silex'),(24,'2025-09-22 13:28:29','2025-09-22 13:28:29','Siltito','<p><span class=\"C9DxTc \">Rocha sedimentar mais fina, com gr&atilde;os entre O,062 e 0,004 mm, sendo que o que a diferen&ccedil;a dos&nbsp;</span><a class=\"XqQF9c\" href=\"https://didatico.igc.usp.br/rochas/sedimentares/arenito\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">arenitos</span></a><span class=\"C9DxTc \">&nbsp;&eacute; apenas o tamanho dos gr&atilde;os, sendo mais fina. Apesar de muito fina, &eacute; poss&iacute;vel ainda sentir a aspereza da rocha, que permite identificar que &eacute; constitu&iacute;da por gr&atilde;os.&nbsp;</span></p>','predominantemente de silício (Si), potássio (K), magnésio (Mg) e outros elementos.','3','siltito');
/*!40000 ALTER TABLE `rochas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2025-09-12 17:31:27','2025-09-12 17:31:27');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Emanoel','emanoelmartinsv@gmail.com',NULL,'$2y$12$fvSdiTeuJ/mU.ZEXcJ3E9uX94cMUBvR6/I27J0KZM398kn3tx8hpe',NULL,'2025-09-12 17:35:36','2025-09-12 17:35:36'),(2,'Caio','caiomottabarcelos13@gmail.com',NULL,'$2y$12$lG/XGw9XqeuQxBzP1Oa0Ve5H1lPgOKcH9cxVZcGMBtJNG.Ewf5Cay',NULL,'2025-09-12 18:22:20','2025-09-12 18:22:20'),(3,'Juliano','juliano@email.com',NULL,'$2y$12$43HT/3nKkR1duPfoJUL.z.TRrMayCjeClgYbcqEc/EvkqIQMiwR5K',NULL,'2025-09-12 18:38:06','2025-09-12 18:38:06'),(4,'Rafael','rafael@email.com',NULL,'$2y$12$OUjz6izYDf9uBHgnXftLRegFdEXpHkHYCQhYLdrqAFx8ARw3cEa0u',NULL,'2025-09-12 18:39:14','2025-09-12 18:39:14'),(5,'Admin','admin@admin.com',NULL,'$2y$12$yrR7lK1EGNAXQ6sH62skUukQw9tk/crhBCdAgSdS3SQNA2L1KKHq.',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11'),(6,'Lívia Pezzin Scaramussa','pezzinscaramussalivia@gmail.com',NULL,'$2y$12$vsThR.agQ1NQ6ScJSTt9Q.v30fxbyHURCtaHl/B0qUHCUfomFULBm',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11'),(7,'Rafael','rafael@gmail.com',NULL,'$2y$12$BoaHIzqHz/YUYZnRoRkkcuFsmhdWQsHkycT4XQHvaJ6dvDqyox54y',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11'),(8,'Juliano','juliano@gmail.com',NULL,'$2y$12$zk/G/0Kq1amhKzcqjbZDfe0xrjVMx3kdlYqVzKMil51UrRUh4M8Oe',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11'),(9,'Gabriel Melo','gabrag0987a@gmail.com',NULL,'$2y$12$KsN97cvFs/9XREcFxGkdreC5PxWw..cNOirvXJMJmXgjM2jvOKlbW',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11'),(10,'Livia Vieira','liviavieira@gmail.com',NULL,'$2y$12$4Db4ta.CmLW.BYZRjYv1Ye4DXJX5PjDOgpjs1b5EW8zZG1LJW6xUO',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11'),(11,'Wallace','wallace@gmail.com',NULL,'$2y$12$aaphCLnSwqsZY6M1rcoN0Om40F7PvfFveuPA6xmU83tGocQKDVeB6',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11'),(12,'Marlon','marlon@gmail.com',NULL,'$2y$12$N1BhxKuyO3SxAVqXDzYEH.Gl77fgV0WRqfEXQcnx7EM1/e0DUVyxG',NULL,'2025-09-15 16:24:11','2025-09-15 16:24:11');
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

-- Dump completed on 2025-09-22 14:43:05
