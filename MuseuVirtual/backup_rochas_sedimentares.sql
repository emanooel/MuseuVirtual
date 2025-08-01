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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rochas`
--

LOCK TABLES `rochas` WRITE;
/*!40000 ALTER TABLE `rochas` DISABLE KEYS */;
INSERT INTO `rochas` VALUES (13,'2025-08-01 12:14:04','2025-08-01 12:14:04','Arenito com Magnetita','<p data-start=\"97\" data-end=\"551\">O arenito com magnetita &eacute; uma rocha formada por gr&atilde;os de areia (principalmente quartzo) compactados e cimentados ao longo do tempo. A presen&ccedil;a de magnetita, um mineral preto e magn&eacute;tico, d&aacute; &agrave; rocha uma apar&ecirc;ncia com pontos escuros e pode torn&aacute;-la levemente atra&iacute;da por &iacute;m&atilde;s. Essa combina&ccedil;&atilde;o &eacute; comum em ambientes onde h&aacute; ac&uacute;mulo de sedimentos com ferro, como rios e desertos. A magnetita pode deixar o arenito mais pesado e escuro do que o normal.</p>','Magnetita','3'),(14,'2025-08-01 12:20:45','2025-08-01 12:20:45','Arenito com Hematita','<p data-start=\"104\" data-end=\"566\">O arenito com hematita &eacute; uma rocha sedimentar formada principalmente por gr&atilde;os de areia compactados e cimentados, onde a hematita atua como o cimento ou est&aacute; presente como mineral de ferro em sua composi&ccedil;&atilde;o. A hematita confere &agrave; rocha uma colora&ccedil;&atilde;o avermelhada ou ferruginosa, caracter&iacute;stica marcante desse tipo de arenito. Essa rocha pode apresentar boa resist&ecirc;ncia e &eacute; comum em ambientes onde houve oxida&ccedil;&atilde;o do ferro, como em &aacute;reas de clima &aacute;rido ou semi&aacute;rido.</p>','Hematita','3'),(15,'2025-08-01 12:46:49','2025-08-01 12:46:49','Argilito','<p data-start=\"87\" data-end=\"520\">O argilito &eacute; uma rocha sedimentar fina, composta principalmente por part&iacute;culas muito pequenas de argila que foram compactadas e endurecidas ao longo do tempo. Apresenta uma textura lisa e pode ter cores variadas, como cinza, marrom ou avermelhada, dependendo dos minerais presentes. &Eacute; menos resistente que as rochas arenosas, mas pode ser um bom indicador de ambientes antigos com baixa energia, como lagos ou fundos de mares calmos.</p>','Minerais argilosos (caulinita, illita, montmorilonita)','3'),(16,'2025-08-01 12:51:15','2025-08-01 12:51:15','Calcário Magnesiano','<p>O calc&aacute;rio magnesiano &eacute; uma rocha sedimentar composta principalmente por carbonato de c&aacute;lcio (CaCO₃) e carbonato de magn&eacute;sio (MgCO₃). A presen&ccedil;a significativa do magn&eacute;sio o diferencia do calc&aacute;rio comum, conferindo caracter&iacute;sticas f&iacute;sicas e qu&iacute;micas pr&oacute;prias. Essa rocha pode apresentar colora&ccedil;&atilde;o que varia do branco ao cinza e &eacute; frequentemente usada na constru&ccedil;&atilde;o civil e na ind&uacute;stria qu&iacute;mica.</p>','Carbonato de magnésio (MgCO₃) e Carbonato de cálcio (CaCO₃)','3'),(17,'2025-08-01 12:58:13','2025-08-01 12:58:13','Caulinita','<p data-start=\"71\" data-end=\"463\">A caulinita &eacute; um mineral do grupo das argilas, composto principalmente por silicato de alum&iacute;nio hidratado (f&oacute;rmula qu&iacute;mica: Al₂Si₂O₅(OH)₄). &Eacute; um mineral de gr&atilde;o muito fino, macio e branco, que forma a base de muitos solos argilosos e rochas sedimentares como o argilito. A caulinita &eacute; amplamente usada na fabrica&ccedil;&atilde;o de porcelana, papel, tintas e cosm&eacute;ticos devido &agrave; sua pureza e plasticidade.</p>','(Al₂Si₂O₅(OH)₄ / Alumínio (Al)  Silício (Si)  Oxigênio (O)  Hidroxila (OH)','3'),(18,'2025-08-01 13:01:46','2025-08-01 13:01:46','Carvão Mineral','<p data-start=\"105\" data-end=\"393\">O carv&atilde;o mineral &eacute; uma rocha sedimentar f&oacute;ssil formada pela acumula&ccedil;&atilde;o e transforma&ccedil;&atilde;o de mat&eacute;ria org&acirc;nica vegetal enterrada ao longo de milh&otilde;es de anos sob alta press&atilde;o e temperatura. &Eacute; uma importante fonte de energia f&oacute;ssil usada para gera&ccedil;&atilde;o de eletricidade e na ind&uacute;stria sider&uacute;rgica.</p>','(CxHyOzNwSv) / (C = carbono, H = hidrogênio, O = oxigênio, N = nitrogênio e S = enxofre)','3'),(19,'2025-08-01 13:06:00','2025-08-01 13:06:00','Crocidolita Silicificada','<p>A crocidolita &eacute; um tipo de amianto (fibra mineral) pertencente ao grupo dos anfib&oacute;lios, caracterizada pela presen&ccedil;a de ferro em dois estados de oxida&ccedil;&atilde;o (ferroso e f&eacute;rrico) e s&oacute;dio. Quando ocorre a silicifica&ccedil;&atilde;o, a crocidolita tem seu tecido original substitu&iacute;do ou preenchido por s&iacute;lica (SiO₂), o que pode alterar sua apar&ecirc;ncia e propriedades f&iacute;sicas. A crocidolita silicificada pode apresentar maior resist&ecirc;ncia qu&iacute;mica e estrutural devido &agrave; presen&ccedil;a da s&iacute;lica.</p>','NaFe²⁺₃Fe³⁺₂(Si₈O₂₂)(OH)₂ + SiO₂ / (Na = sódio, Fe²⁺ = ferro ferroso, Fe³⁺ = ferro férrico, Si = silício, O = oxigênio, H = hidrogênio)','3'),(20,'2025-08-01 13:08:02','2025-08-01 13:08:02','Crocidolita em Conglomerado','<p data-start=\"322\" data-end=\"779\">A crocidolita &eacute; um mineral fibroso do grupo dos anfib&oacute;lios, contendo ferro em diferentes estados de oxida&ccedil;&atilde;o e s&oacute;dio. Quando presente em um conglomerado, ela aparece como fragmentos ou fibras incorporadas numa matriz formada por peda&ccedil;os arredondados de outras rochas cimentadas. O conglomerado &eacute; uma rocha sedimentar composta por clastos grossos unidos por um cimento natural, podendo conter crocidolita como mineral acess&oacute;rio ou dominante.</p>','(NaFe²⁺₃Fe³⁺₂(Si₈O₂₂)(OH)₂) + fragmentos de rochas variadas / (Na = sódio, Fe²⁺ = ferro ferroso, Fe³⁺ = ferro férrico, Si = silício, O = oxigênio, H = hidrogênio)','3'),(21,'2025-08-01 13:13:22','2025-08-01 13:13:22','Coral Calcário','<p>O coral calc&aacute;rio &eacute; uma rocha sedimentar formada principalmente pelo carbonato de c&aacute;lcio, que &eacute; o principal componente do esqueleto dos corais marinhos. Esses esqueletos se acumulam e compactam ao longo do tempo, formando dep&oacute;sitos de calc&aacute;rio fossil&iacute;fero. O coral calc&aacute;rio &eacute; geralmente branco ou bege e tem grande import&acirc;ncia para a forma&ccedil;&atilde;o de recifes e habitats marinhos.</p>','CaCO₃ / (Ca = cálcio, C = carbono, O = oxigênio)','3'),(22,'2025-08-01 13:15:28','2025-08-01 13:15:28','Filito','<p data-start=\"212\" data-end=\"637\">O filito &eacute; uma rocha metam&oacute;rfica de grau baixo a m&eacute;dio, formada principalmente por minerais do grupo das micas, como a sericita, com textura foliada e brilho sedoso. &Eacute; intermedi&aacute;rio entre o ard&oacute;sia e o xisto, apresentando folia&ccedil;&atilde;o bem definida e superf&iacute;cie lisa. Sua composi&ccedil;&atilde;o mineral&oacute;gica e textura indicam que passou por metamorfismo de baixa intensidade, sendo comum em regi&otilde;es de dobramentos geol&oacute;gicos.</p>','KAl₂(AlSi₃O₁₀)(OH)₂ / (K = potássio, Al = alumínio, Si = silício, O = oxigênio, H = hidrogênio)','3'),(23,'2025-08-01 13:17:32','2025-08-01 13:17:32','Sílex','<p data-start=\"150\" data-end=\"581\">O s&iacute;lex &eacute; uma rocha sedimentar criptocristalina composta principalmente por di&oacute;xido de sil&iacute;cio (quartzo). Apresenta textura fina e dura, frequentemente encontrada em forma&ccedil;&otilde;es nodulares ou camadas dentro de calc&aacute;rios. &Eacute; conhecido por sua cor que varia do cinza ao preto, e por sua capacidade de produzir fa&iacute;scas ao ser friccionado, motivo pelo qual foi usado historicamente para fazer ferramentas e armas de corte.</p>','SiO₂ / (Si = silício, O = oxigênio)','3'),(24,'2025-08-01 13:19:41','2025-08-01 13:19:41','Siltito','<p data-start=\"229\" data-end=\"634\">O siltito &eacute; uma rocha sedimentar cl&aacute;stica formada principalmente por part&iacute;culas de silte, que s&atilde;o menores que os gr&atilde;os de areia, mas maiores que as part&iacute;culas de argila. &Eacute; composto basicamente por minerais de quartzo (SiO₂) e minerais argilosos em menor propor&ccedil;&atilde;o. Apresenta textura fina e pode ser encontrado em ambientes de baixa energia, como plan&iacute;cies de inunda&ccedil;&atilde;o e margens de lagos.</p>','SiO₂ + minerais argilosos / (Si = silício, O = oxigênio, além de alumínio e hidrogênio nos minerais argilosos)','3');
/*!40000 ALTER TABLE `rochas` ENABLE KEYS */;
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
  `caminho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anotacao` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fotos_idrocha_foreign` (`idRocha`),
  KEY `fotos_idmineral_foreign` (`idMineral`),
  KEY `fotos_idjazida_foreign` (`idJazida`),
  CONSTRAINT `fotos_idjazida_foreign` FOREIGN KEY (`idJazida`) REFERENCES `jazidas` (`id`),
  CONSTRAINT `fotos_idmineral_foreign` FOREIGN KEY (`idMineral`) REFERENCES `minerals` (`id`),
  CONSTRAINT `fotos_idrocha_foreign` FOREIGN KEY (`idRocha`) REFERENCES `rochas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos`
--

LOCK TABLES `fotos` WRITE;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` VALUES (65,'2025-08-01 12:14:04','2025-08-01 12:19:15',13,NULL,NULL,1,'fotos/rochas/1754050444_Arenito com mag.jpg',NULL),(66,'2025-08-01 12:19:11','2025-08-01 12:19:11',13,NULL,NULL,0,'fotos/rochas/1754050751_Arenito com mag2.jpg',NULL),(67,'2025-08-01 12:19:46','2025-08-01 12:19:46',13,NULL,NULL,0,'fotos/rochas/1754050786_Arenito com mag3.jpg',NULL),(68,'2025-08-01 12:36:56','2025-08-01 12:36:56',14,NULL,NULL,1,'fotos/rochas/1754051816_hematita1.jpg',NULL),(69,'2025-08-01 12:36:56','2025-08-01 12:36:56',14,NULL,NULL,0,'fotos/rochas/1754051816_hematita2.jpg',NULL),(70,'2025-08-01 12:36:56','2025-08-01 12:36:56',14,NULL,NULL,0,'fotos/rochas/1754051816_hematita3.jpg',NULL),(71,'2025-08-01 12:49:06','2025-08-01 12:49:06',15,NULL,NULL,1,'fotos/rochas/1754052546_1.jpg',NULL),(72,'2025-08-01 12:49:06','2025-08-01 12:49:06',15,NULL,NULL,0,'fotos/rochas/1754052546_2.jpg',NULL),(73,'2025-08-01 12:49:06','2025-08-01 12:49:06',15,NULL,NULL,0,'fotos/rochas/1754052546_3.jpg',NULL),(74,'2025-08-01 12:55:14','2025-08-01 12:55:14',16,NULL,NULL,0,'fotos/rochas/1754052914_1.jpg',NULL),(75,'2025-08-01 12:55:14','2025-08-01 12:55:14',16,NULL,NULL,0,'fotos/rochas/1754052914_2.jpg',NULL),(76,'2025-08-01 12:55:14','2025-08-01 12:55:14',16,NULL,NULL,1,'fotos/rochas/1754052914_3.jpg',NULL),(77,'2025-08-01 12:58:32','2025-08-01 12:58:32',17,NULL,NULL,1,'fotos/rochas/1754053112_1.jpg',NULL),(78,'2025-08-01 12:58:32','2025-08-01 12:58:32',17,NULL,NULL,0,'fotos/rochas/1754053112_2.jpg',NULL),(79,'2025-08-01 12:58:32','2025-08-01 12:58:32',17,NULL,NULL,0,'fotos/rochas/1754053112_3.jpg',NULL),(80,'2025-08-01 13:03:01','2025-08-01 13:03:01',18,NULL,NULL,1,'fotos/rochas/1754053381_1.jpg',NULL),(81,'2025-08-01 13:03:01','2025-08-01 13:03:01',18,NULL,NULL,0,'fotos/rochas/1754053381_2.jpg',NULL),(82,'2025-08-01 13:03:01','2025-08-01 13:03:01',18,NULL,NULL,0,'fotos/rochas/1754053381_3.jpg',NULL),(83,'2025-08-01 13:06:55','2025-08-01 13:06:55',19,NULL,NULL,1,'fotos/rochas/1754053615_1.jpg',NULL),(84,'2025-08-01 13:06:55','2025-08-01 13:06:55',19,NULL,NULL,0,'fotos/rochas/1754053615_2.jpg',NULL),(85,'2025-08-01 13:06:55','2025-08-01 13:06:55',19,NULL,NULL,0,'fotos/rochas/1754053615_3.jpg',NULL),(86,'2025-08-01 13:10:04','2025-08-01 13:10:04',20,NULL,NULL,1,'fotos/rochas/1754053804_1.jpg',NULL),(87,'2025-08-01 13:10:04','2025-08-01 13:10:04',20,NULL,NULL,0,'fotos/rochas/1754053804_2.jpg',NULL),(88,'2025-08-01 13:10:04','2025-08-01 13:10:04',20,NULL,NULL,0,'fotos/rochas/1754053804_3.jpg',NULL),(89,'2025-08-01 13:14:39','2025-08-01 13:14:39',21,NULL,NULL,0,'fotos/rochas/1754054079_1.jpg',NULL),(90,'2025-08-01 13:14:39','2025-08-01 13:14:39',21,NULL,NULL,1,'fotos/rochas/1754054079_2.jpg',NULL),(91,'2025-08-01 13:16:47','2025-08-01 13:16:47',22,NULL,NULL,1,'fotos/rochas/1754054207_1.jpg',NULL),(92,'2025-08-01 13:16:47','2025-08-01 13:16:47',22,NULL,NULL,0,'fotos/rochas/1754054207_2.jpg',NULL),(93,'2025-08-01 13:16:47','2025-08-01 13:16:47',22,NULL,NULL,0,'fotos/rochas/1754054207_3.jpg',NULL),(94,'2025-08-01 13:18:51','2025-08-01 13:18:51',23,NULL,NULL,0,'fotos/rochas/1754054331_3.jpg',NULL),(95,'2025-08-01 13:18:51','2025-08-01 13:18:51',23,NULL,NULL,1,'fotos/rochas/1754054331_EmbeddedImage (1).jpg',NULL),(96,'2025-08-01 13:18:51','2025-08-01 13:18:51',23,NULL,NULL,0,'fotos/rochas/1754054331_EmbeddedImage.jpg',NULL),(97,'2025-08-01 13:20:45','2025-08-01 13:20:45',24,NULL,NULL,1,'fotos/rochas/1754054445_1.jpg',NULL),(98,'2025-08-01 13:20:45','2025-08-01 13:20:45',24,NULL,NULL,0,'fotos/rochas/1754054445_2.jpg',NULL),(99,'2025-08-01 13:20:45','2025-08-01 13:20:45',24,NULL,NULL,0,'fotos/rochas/1754054445_3.jpg',NULL);
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-01 13:34:41
