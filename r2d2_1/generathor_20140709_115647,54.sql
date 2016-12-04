-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: generathor
-- ------------------------------------------------------
-- Server version	5.5.20-log

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Alejandra'),(2,'R2D2'),(3,'Isaias'),(4,'Patricia'),(5,'Jesus'),(6,'Rodrigo'),(7,'Valeria'),(8,'Jony'),(9,'oton'),(10,'baldosones');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_ingresos`
--

DROP TABLE IF EXISTS `f_ingresos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `f_ingresos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `saldo` int(10) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_ingresos`
--

LOCK TABLES `f_ingresos` WRITE;
/*!40000 ALTER TABLE `f_ingresos` DISABLE KEYS */;
INSERT INTO `f_ingresos` VALUES (1,'Benjamin Button',18,'2011-12-27 00:00:00'),(2,'Douglas Adams',43,'2011-12-26 00:00:00'),(3,'Isaac Asimov',26,'2011-12-28 00:00:00'),(5,'Ihsan Oktay Anar',44,'2012-01-03 20:55:02'),(6,'dgdfgds',324,'2014-03-31 19:00:06'),(7,'sdfsdf',345,'2014-03-31 19:00:14'),(8,'colegio.1) pago cartulina 4. 300.2)pago 2 dia',1175,'2014-03-31 19:15:37'),(9,'SADS',3244,'2014-03-31 19:15:42'),(10,'SADASD',324234,'2014-03-31 19:15:47'),(11,'SDFSDFD',345345,'2014-03-31 19:15:51'),(12,'fdsf',1212,'2014-05-24 19:35:05'),(13,'marcos ',500,'0000-00-00 00:00:00'),(14,'werwer',343,'2014-05-24 20:56:49'),(15,'aqui isaias',43,'2014-05-24 20:57:23'),(18,'new record2',212,'2014-05-24 21:00:52'),(19,'new record ahora',30,'2014-05-24 21:05:03');
/*!40000 ALTER TABLE `f_ingresos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finanzas_ajustecaja`
--

DROP TABLE IF EXISTS `finanzas_ajustecaja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finanzas_ajustecaja` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `op` int(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_ajustecaja`
--

LOCK TABLES `finanzas_ajustecaja` WRITE;
/*!40000 ALTER TABLE `finanzas_ajustecaja` DISABLE KEYS */;
INSERT INTO `finanzas_ajustecaja` VALUES (1,100,'2014-01-01 06:10:59',0,''),(2,10,'2014-01-05 06:12:07',0,''),(3,300,'2013-12-05 06:14:07',0,''),(4,7,'2014-01-05 06:18:15',0,''),(5,50,'2014-01-05 06:37:59',0,''),(6,88,'2014-01-05 06:39:41',0,''),(7,80,'2014-01-05 06:57:15',0,''),(8,84,'2014-01-05 06:58:33',0,''),(9,150,'2014-01-22 20:20:50',0,''),(10,250,'2014-01-28 20:02:43',0,''),(11,700,'2014-02-28 15:32:47',0,''),(12,600,'2014-02-28 19:27:20',0,''),(13,0,'2014-03-04 21:47:41',0,''),(14,0,'2014-03-10 13:20:27',0,''),(15,50,'2014-03-10 13:30:07',0,''),(16,0,'2014-03-22 12:17:21',1,''),(17,500,'2014-03-25 21:13:04',0,''),(18,700,'2014-03-25 21:13:14',1,''),(19,550,'2014-03-25 21:16:44',0,''),(20,650,'2014-03-25 21:16:54',1,''),(22,0,'2014-05-19 20:04:52',1,''),(23,0,'2014-05-06 20:05:33',0,''),(24,0,'2014-05-06 20:06:39',1,''),(25,0,'2014-04-17 20:13:56',1,''),(26,0,'2014-04-17 20:17:14',0,''),(27,200,'2014-05-19 20:21:33',0,''),(28,500,'2014-05-17 20:23:24',0,''),(29,600,'2014-05-24 13:30:50',0,''),(30,600,'2014-05-31 19:45:21',0,'al dia hoy'),(31,600,'2014-06-11 12:43:44',0,''),(32,1030,'2014-06-13 19:22:45',0,''),(33,800,'2014-06-20 14:48:07',0,''),(34,1100,'2014-06-23 21:01:18',0,''),(35,2000,'2014-07-04 18:29:35',0,'');
/*!40000 ALTER TABLE `finanzas_ajustecaja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finanzas_gastos`
--

DROP TABLE IF EXISTS `finanzas_gastos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finanzas_gastos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `op` int(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_gastos`
--

LOCK TABLES `finanzas_gastos` WRITE;
/*!40000 ALTER TABLE `finanzas_gastos` DISABLE KEYS */;
INSERT INTO `finanzas_gastos` VALUES (3,6,'2014-01-06 06:33:00',0,'cigarrillos philips 10.'),(6,6,'2014-01-07 18:54:57',0,'cigarrillos philip 10'),(7,6,'2014-01-09 14:46:50',0,'cigarros'),(8,50,'2014-01-14 13:42:06',0,'comida jony.'),(9,170,'2014-02-03 23:31:31',0,'m'),(10,0,'2014-02-04 01:32:31',0,'me metieron en calabozo'),(11,170,'2014-02-28 10:35:09',0,'mari'),(12,70,'2014-03-05 17:41:55',0,'corte pelo'),(13,170,'2014-03-16 22:27:32',0,'m'),(14,0,'2014-03-22 12:17:04',1,''),(15,170,'2014-05-18 20:20:59',0,'m'),(16,180,'2014-06-09 20:59:06',0,'m'),(17,27,'2014-06-18 18:41:58',0,'playadito'),(18,50,'2014-06-18 18:42:05',0,'sube'),(19,170,'2014-06-23 20:53:54',0,'mochilas arreglo 2'),(20,50,'2014-06-25 20:11:25',0,'sube'),(21,8,'2014-06-30 20:20:24',0,'cigarr'),(22,50,'2014-07-02 19:05:58',0,'sube'),(23,9,'2014-07-02 19:06:14',0,'cigar'),(24,120,'2014-07-04 08:30:18',0,'biblia para todos'),(25,20,'2014-07-04 08:30:30',0,'biblia para fachu'),(26,100,'2014-07-07 22:17:16',0,'sube'),(27,9,'2014-07-07 22:17:33',0,'cigarro'),(28,25,'2014-07-08 18:53:02',0,'playadita'),(29,30,'2014-07-08 18:53:09',0,'axe'),(30,9,'2014-07-08 18:53:26',0,'cigarr');
/*!40000 ALTER TABLE `finanzas_gastos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finanzas_ingresos`
--

DROP TABLE IF EXISTS `finanzas_ingresos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finanzas_ingresos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `op` int(255) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_ingresos`
--

LOCK TABLES `finanzas_ingresos` WRITE;
/*!40000 ALTER TABLE `finanzas_ingresos` DISABLE KEYS */;
INSERT INTO `finanzas_ingresos` VALUES (1,0,'2014-01-01 06:11:26',0,''),(2,300,'2014-01-13 13:41:08',0,'pago alejandra de cartulina.'),(3,150,'2014-01-28 14:24:45',0,'gabriel'),(4,300,'2014-02-06 17:49:40',0,'dia sist. coleg\r\n'),(5,125,'2014-02-07 20:06:14',0,'pago colegio mañana'),(6,600,'2014-02-10 17:06:23',0,'2 cartulinas de $300'),(7,175,'2014-03-07 18:52:25',0,'virus en makinas colegio ale'),(8,1175,'2014-03-21 15:47:40',0,'colegio.\r\n1) pago cartulina 4. 300.\r\n2)pago 2 dias marzo. \r\n3)pago 500 recargos2.'),(11,0,'2014-03-22 12:16:19',1,''),(12,0,'2014-03-22 12:18:25',1,''),(13,500,'2014-05-24 13:29:33',0,'pago marcos '),(14,400,'2014-05-31 11:26:14',0,'pago jorge'),(15,350,'2014-06-07 11:10:34',0,'pago jorge'),(16,400,'2014-06-13 19:09:30',0,'pago marcos'),(17,600,'2014-06-20 20:12:58',0,'jorje, pelea me saco 1000 pesos todos los meses.'),(18,200,'2014-06-27 08:33:11',0,'jorg'),(19,600,'2014-06-27 15:55:10',0,'jorge, lala'),(20,50,'2014-06-29 20:34:45',0,'lo encontre tirado en la calle'),(21,600,'2014-07-04 18:25:13',0,'jor');
/*!40000 ALTER TABLE `finanzas_ingresos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mis_relojes`
--

DROP TABLE IF EXISTS `mis_relojes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mis_relojes` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `estado` int(255) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mis_relojes`
--

LOCK TABLES `mis_relojes` WRITE;
/*!40000 ALTER TABLE `mis_relojes` DISABLE KEYS */;
INSERT INTO `mis_relojes` VALUES (35,'2014-06-01',0,''),(36,'2014-06-02',2,''),(37,'2014-06-03',1,''),(38,'2014-06-04',1,''),(39,'2014-06-05',1,''),(40,'2014-06-06',2,''),(41,'2014-06-07',0,''),(42,'2014-06-08',0,''),(43,'2014-06-09',1,''),(44,'2014-06-10',2,''),(45,'2014-06-11',1,''),(46,'2014-06-12',1,''),(47,'2014-06-13',1,''),(48,'2014-06-14',0,''),(49,'2014-06-15',0,''),(50,'2014-06-22',0,''),(51,'2014-06-21',0,''),(52,'2014-06-20',2,''),(53,'2014-06-20',2,''),(54,'2014-06-19',1,''),(55,'2014-06-18',1,''),(56,'2014-06-17',1,''),(57,'2014-06-16',2,''),(58,'2014-06-23',1,''),(59,'2014-06-24',1,''),(60,'2014-06-25',1,''),(61,'2014-06-26',1,''),(62,'2014-06-27',2,''),(63,'2014-06-28',0,''),(64,'2014-06-29',0,''),(65,'2014-06-30',1,''),(66,'2014-07-01',1,''),(67,'2014-07-02',1,''),(68,'2014-07-03',2,''),(69,'2014-07-04',1,''),(70,'2014-07-05',0,''),(71,'2014-07-06',0,''),(77,'2014-01-01',1,''),(78,'2014-01-02',1,'nota1'),(79,'2014-01-03',0,''),(80,'2014-01-04',0,''),(81,'2014-01-05',0,''),(82,'2014-01-10',0,''),(83,'2014-01-08',0,''),(84,'2014-07-07',1,''),(85,'2014-07-08',1,'creo que tengo este programa casi listo. hoy se peliaron las locas en la esquina.'),(86,'2014-02-01',1,'lala dsad sad asd asd asd asd ad'),(87,'2014-02-02',1,'listo che'),(88,'2014-07-09',2,''),(89,'2014-02-03',1,'enrique'),(90,'2014-02-05',1,'sarasa'),(91,'2014-05-14',1,''),(92,'2014-05-15',1,''),(93,'2014-05-16',1,''),(94,'2014-05-17',1,''),(95,'2014-05-19',1,''),(96,'2014-05-20',1,''),(97,'2014-05-21',1,''),(98,'2014-05-22',1,''),(99,'2014-05-23',1,''),(100,'2014-05-26',1,''),(101,'2014-05-27',1,''),(102,'2014-05-28',1,''),(103,'2014-05-30',2,''),(104,'2014-05-29',1,'');
/*!40000 ALTER TABLE `mis_relojes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mis_relojes2`
--

DROP TABLE IF EXISTS `mis_relojes2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mis_relojes2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `d` time NOT NULL,
  `a` time NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mis_relojes2`
--

LOCK TABLES `mis_relojes2` WRITE;
/*!40000 ALTER TABLE `mis_relojes2` DISABLE KEYS */;
INSERT INTO `mis_relojes2` VALUES (15,'10:00:00','16:00:00','2014-06-17',''),(16,'10:00:00','16:30:00','2014-06-18',''),(17,'10:30:00','17:30:00','2014-06-19',''),(18,'11:00:00','16:00:00','2014-06-23',''),(19,'11:00:00','16:00:00','2014-06-24',''),(20,'10:30:00','16:30:00','2014-06-25',''),(21,'10:00:00','16:00:00','2014-06-26',''),(22,'09:00:00','16:00:00','2014-06-11',''),(30,'10:30:00','16:30:00','2014-06-30',''),(35,'09:30:00','16:30:00','2014-07-02',''),(36,'10:30:00','16:00:00','2014-07-01',''),(39,'10:30:00','16:00:00','2014-07-04',''),(40,'10:30:00','17:00:00','2014-07-07',''),(41,'10:30:00','16:00:00','2014-07-08',''),(42,'07:00:00','05:40:00','2014-01-02',''),(43,'07:00:00','13:40:00','2014-01-02','');
/*!40000 ALTER TABLE `mis_relojes2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mis_tareas`
--

DROP TABLE IF EXISTS `mis_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mis_tareas` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tarea` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `finalizado` tinyint(1) NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `archivado` tinyint(1) NOT NULL,
  `categoria` int(255) NOT NULL,
  `subcategoria` int(255) NOT NULL,
  `posicion` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=328 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mis_tareas`
--

LOCK TABLES `mis_tareas` WRITE;
/*!40000 ALTER TABLE `mis_tareas` DISABLE KEYS */;
INSERT INTO `mis_tareas` VALUES (6,'llamar guillermito','0000-00-00 00:00:00',1,'2014-01-08 16:13:31',1,1,0,72),(7,'dientes','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,4,0,7),(11,'diluir el shampoo\r\n','0000-00-00 00:00:00',1,'2014-01-25 15:36:04',1,1,0,73),(12,'cambiar contraseÃ±as','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,28),(18,'Ir a pasear a lanus','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,40),(21,'voy a la igglesia hoy?','0000-00-00 00:00:00',1,'2014-01-22 23:36:48',1,1,0,46),(22,'lavar ropa','0000-00-00 00:00:00',1,'2014-01-22 23:36:52',1,1,0,61),(23,'antivirus maquina','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,29),(25,'agregar modificar...','0000-00-00 00:00:00',1,'2014-01-28 19:44:20',1,0,0,23),(28,'visitar abuelos','0000-00-00 00:00:00',1,'2014-02-17 16:39:31',1,1,0,65),(29,'poner fecha a comprar zapatillas','0000-00-00 00:00:00',1,'2014-01-25 15:36:22',1,2,0,52),(30,'tener mi propia toalla','0000-00-00 00:00:00',1,'2014-01-22 23:36:29',1,1,0,58),(31,'Carta a miguel para hacer preguntas al momento de estar con el.','0000-00-00 00:00:00',1,'2014-01-28 19:43:50',1,1,0,56),(32,'zurcirrrrr medias y pantalon','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,48),(34,'tracker, al marcar, PRENDER NOMBRE TAREA Y NOMBRE PROYECTO.','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,80),(35,'juntar mis palos','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,17),(36,'juntar herramientas. palita para hacer asaddo y herramientas abuelo.','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,41),(37,'NUEVO TRABAJO','0000-00-00 00:00:00',1,'0000-00-00 00:00:00',1,1,0,9),(38,'pedir estabilizador jony','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,27),(40,'asdasd','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,85),(41,'fsdfsdf','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,132),(42,'sadasd','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,134),(43,'4545\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,159),(44,'435345','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,162),(45,'sdf','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,164),(46,'333\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,166),(47,'3232\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,168),(48,'aqui','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,169),(49,'aaa','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,94),(50,'999\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,172),(55,'hola\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,15,177),(57,'poner el resto de las bases de datos en mysql por error de wamp de hoy martes ','0000-00-00 00:00:00',1,'2014-01-28 19:43:21',1,1,0,34),(63,'aqui','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,157),(64,'asdsad','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,155),(65,'333\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,153),(66,'33\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,135),(67,'111','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,137),(68,'3333','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,139),(69,'111\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,141),(73,'jij\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,144),(74,'s','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,146),(75,'s','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,147),(76,'dd','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,81),(77,'d','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,152),(78,'d','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,176),(79,'g','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,150),(80,'g','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,173),(94,'mosquitero','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,21),(100,'asdasdasd','2014-01-08 05:57:47',0,'0000-00-00 00:00:00',0,3,0,84),(101,'asdasdasd','2014-01-08 05:57:52',0,'0000-00-00 00:00:00',0,3,0,83),(117,'comprar auriculares','2014-01-08 16:11:37',0,'0000-00-00 00:00:00',0,2,0,5),(119,'hacer deporte','2014-01-08 21:10:13',0,'0000-00-00 00:00:00',0,1,0,14),(120,'trakiar tiempo cuando salgo a caminar y eso.','2014-01-08 21:11:14',0,'0000-00-00 00:00:00',0,3,17,78),(121,'fecha inicio fecha fin corregir en donde falte','2014-01-08 21:20:55',0,'0000-00-00 00:00:00',0,3,18,86),(122,'defensa personal','2014-01-08 21:21:17',0,'0000-00-00 00:00:00',0,1,0,15),(123,'apagar wifi, aparato timer, cable red.','2014-01-09 20:05:05',0,'0000-00-00 00:00:00',0,1,0,25),(124,'marcar tiempo de laburo. dia lunes tal trabajo, jueves tal trabajo','2014-01-09 20:06:29',1,'0000-00-00 00:00:00',1,1,0,13),(125,'arreglar patita TV','2014-01-09 21:02:20',0,'0000-00-00 00:00:00',0,1,0,24),(126,'miguel: Resulta curioso el hecho de que el nieto de Yiye es predicador pero no es nada fogoso como su abuelo. ¿ Lo conocen ? Se llama Miguel Sánchez Avila, y habla normalmente, sin griterías, ni \"lenguas\". ¿ Por qué será ? ','2014-01-09 21:43:04',1,'2014-01-28 19:43:38',1,1,0,50),(127,'controlar consumo m y ciharrillos','2014-01-09 22:12:13',0,'0000-00-00 00:00:00',0,1,0,10),(128,'pasar bloc notas aqui','2014-01-09 22:13:59',0,'0000-00-00 00:00:00',0,1,0,11),(129,'hacer un sitio  web con tarjetas. elecktrobit vena de sitios folletos....','2014-01-10 15:15:49',0,'0000-00-00 00:00:00',0,1,0,12),(130,'dar orden de prioridades','2014-01-13 13:40:16',1,'2014-01-25 15:36:49',1,1,0,37),(131,'comprar calzoncillos','2014-01-13 16:44:39',0,'0000-00-00 00:00:00',0,2,0,50),(132,'sdfsdf','2014-01-22 20:54:26',1,'2014-01-22 21:07:35',0,3,17,88),(133,'trackear y hacer..','2014-01-22 21:31:14',0,'0000-00-00 00:00:00',0,3,11,102),(135,'hacer back up y bases de datos.','2014-01-22 21:40:40',0,'0000-00-00 00:00:00',0,3,16,87),(136,'carta a orlando brandoni: Preguntas\r\n1) lalala\r\n2) alalal\r\n3) sdasdsa\r\n4) fsfsdfds','2014-01-25 13:29:02',1,'2014-01-28 19:43:42',1,1,0,45),(137,'comprar tachito basura para el cuarto. o improvisar con un tacho normal. $65 tachito trucho.\n','2014-01-25 14:07:04',0,'0000-00-00 00:00:00',0,1,0,43),(138,'arreglar paraguass','2014-01-28 08:40:51',0,'0000-00-00 00:00:00',0,1,0,46),(139,'poner fecha al momento de terminar la tarea.','2014-01-28 19:47:26',0,'0000-00-00 00:00:00',0,1,0,36),(140,'comprar mar','2014-01-28 19:51:49',1,'2014-02-08 14:01:59',1,1,0,32),(141,'poner el loading redondo.','2014-01-29 10:40:02',1,'2014-02-24 18:21:47',0,3,13,47),(142,'buscar cosas de hackeo:\r\n\r\nobjetivos:\r\n1. hackear un facebook. \r\n2. hackear pagina web (metodo inyeccion sql) herramienta sqlmap.\r\n3. hack redes wifi.\r\n4. hack celular.\r\n5. meterme en su pc.\r\n6. webcam hacking.','2014-01-29 10:45:39',0,'0000-00-00 00:00:00',0,1,0,4),(143,'presupuestar el arreglo de la notebbok de alejandra.','2014-01-29 11:13:55',0,'0000-00-00 00:00:00',0,3,11,75),(144,'cobrar 50 pesos alejandra','2014-01-29 11:35:34',0,'0000-00-00 00:00:00',0,3,11,54),(145,'agregar total horas trabajadas hoy.','2014-01-29 12:36:14',1,'2014-02-24 15:50:56',0,3,13,65),(146,'resumen total guardado. \"no se encontraron datos.\"','2014-01-29 12:37:17',0,'0000-00-00 00:00:00',0,3,13,40),(147,'aqui vamos a hacer los formularios en ajax. como modificar sobre ahi mismo sin necesidad de pasar por otra pagina. estas implementaciones las podemos usar para R2D2 en tareas y tracker y para ir aprendiendo.','2014-01-29 12:41:11',1,'2014-03-31 19:23:15',0,3,20,82),(148,'al guardar hay ERROR. fijarce. creo q es cuando no hay registros. modificar no va a su pagina cuando estoy en tracker.','2014-01-29 12:42:00',0,'0000-00-00 00:00:00',0,3,15,76),(149,'al guadar el primero tira error.','2014-01-29 12:44:20',0,'0000-00-00 00:00:00',0,3,13,32),(150,'al guardar hay ERROR. fijarce. creo q es cuando no hay registros.\r\nmodificar no va a su pagina cuando estoy en tracker.','2014-01-29 12:45:21',0,'0000-00-00 00:00:00',0,3,13,28),(151,'agregar tareas pendientes en el index y fecha de entrega. \r\n\r\n-------------------\r\n14 dias restantes\r\n-------------------\r\n28hs / 30hs\r\n-------------------\r\n3 de 4 subtareas\r\n-------------------\r\n','2014-01-29 12:47:01',1,'2014-02-24 15:50:24',0,3,13,69),(152,'entrar antiguo tracker  http://localhost/generathor/?n=1&o=1 ','2014-01-29 12:52:46',1,'2014-02-24 15:50:34',0,3,13,63),(153,'agregar total trabajado hoy en este proyecto y en tootal con todos los de hoy.','2014-01-29 13:07:00',1,'2014-02-24 16:23:57',0,3,13,51),(154,' http://localhost/generathor/?n=1&o=1  NO FUNCIONA. Hacer correr. o copiar carcaza.','2014-01-29 13:07:53',1,'2014-02-24 15:49:57',0,3,13,62),(155,'resumen: poner colores a la tabla... todo en una sola linea?resumen\r\ntotal guardado:\r\n00:00:00','2014-01-29 13:09:08',0,'0000-00-00 00:00:00',0,3,13,8),(156,'subir a servidor. para no perder datos y ser movil.','2014-01-29 13:10:05',0,'0000-00-00 00:00:00',0,3,16,72),(157,'terminar essto urgente.','2014-01-29 13:11:14',0,'0000-00-00 00:00:00',0,3,18,71),(158,'incorporar MODIFICAR Y ELIMINAR','2014-01-29 13:13:25',0,'0000-00-00 00:00:00',0,3,14,15),(159,'la consigna es que primero funcione como sea. y luego ir mejorando con ajax y demas cositas.','2014-01-29 13:15:18',0,'0000-00-00 00:00:00',0,3,16,61),(160,'marcador: agregar nombre tarea al titulo de la ventana explorador.','2014-01-29 13:16:53',1,'2014-02-24 15:49:41',0,3,13,66),(161,'navegar y anotar los errores y cosas q falntan aqui. usar la new list by isa.','2014-01-29 13:22:48',0,'0000-00-00 00:00:00',0,3,18,59),(162,'pedir libro regiones de cautividad.','2014-01-29 13:24:49',0,'0000-00-00 00:00:00',0,1,0,2),(163,'buscar trabajo supermercados, estacion de servicio, plan trabajar. plan de prestamos. haciendo baldosonses empresas grosas. trabajar con quien me llevo bien.','2014-01-29 13:27:20',0,'0000-00-00 00:00:00',0,3,21,79),(164,'admin local','2014-01-29 13:42:57',0,'0000-00-00 00:00:00',0,3,18,42),(165,'50 pesos pago facil.','2014-01-29 13:43:30',1,'2014-02-17 16:36:32',0,3,18,35),(166,'pasar servidor a ellos','2014-01-29 13:43:37',0,'0000-00-00 00:00:00',0,3,18,26),(167,'boton 6 propongo notas q estes en internet. excel o word. nose ','2014-01-29 13:45:01',0,'0000-00-00 00:00:00',0,3,16,39),(168,'este es lengua y literatura 3','2014-01-29 16:08:11',0,'0000-00-00 00:00:00',0,3,11,46),(169,'presupuestar sitio web. side cliente.','2014-01-29 16:40:46',0,'0000-00-00 00:00:00',0,3,18,19),(170,'mi sueÃ±o es tener plata para irme una semana al tigre con una mina.','2014-01-29 18:00:02',0,'0000-00-00 00:00:00',0,1,0,8),(171,'mirar facebook emilia lorecchio','2014-01-29 19:36:05',0,'0000-00-00 00:00:00',0,1,0,6),(172,'las cartulinas la tengo que tener antes del 10 de febrero. faltan 3 mas.','2014-01-30 10:55:53',0,'0000-00-00 00:00:00',0,3,11,31),(173,'listar de excel con posibles clientes.','2014-01-30 11:01:46',1,'0000-00-00 00:00:00',1,1,0,3),(174,'lista cliente y tareas clientes pendientes p que van a pedir en fururo posibles. excel','2014-01-30 11:28:28',1,'0000-00-00 00:00:00',1,1,0,5),(175,'el q esta prendido tiene otro color. verde. en tracker index lista.','2014-01-30 11:29:49',0,'0000-00-00 00:00:00',0,3,13,4),(176,'creo q habia quedado a 50 pesos la hora.','2014-01-30 11:52:50',0,'0000-00-00 00:00:00',0,3,11,25),(177,'meter lista de objetivos alzcanzar excel.','2014-01-30 14:30:07',1,'0000-00-00 00:00:00',1,1,0,7),(178,'lista de proyectos y tareas x proyecto.','2014-01-30 16:50:37',1,'2014-02-24 15:49:30',0,3,13,67),(179,'tomar un poco de sol.\r\n','2014-01-30 18:21:06',0,'0000-00-00 00:00:00',0,1,0,42),(180,'que el resumen se pueda editar la fecha.','2014-01-31 18:44:37',1,'2014-03-28 12:30:28',0,3,13,43),(181,'poner una madera o plancha de plastico para tapar la entrada de la puerta de la cocina.','2014-02-01 12:50:12',0,'0000-00-00 00:00:00',0,1,0,23),(182,'hacer una nueva cuenta del tracker. estado dig.','2014-02-01 12:52:57',0,'0000-00-00 00:00:00',0,3,13,55),(183,'tracker -> links not _blank. atras adelante.','2014-02-01 15:55:39',1,'2014-02-24 18:34:12',0,3,13,48),(184,'otro punto  a mi cinturon','2014-02-01 16:27:06',1,'2014-02-08 13:58:52',1,1,0,49),(185,'aparentemente tengo que bajar el sitio desde http://www.todohogarservicios.com.ar/ con su base db y bajarlo a localhost.','2014-02-01 18:55:16',0,'0000-00-00 00:00:00',0,3,25,77),(186,'pagofacil elecktrobit.','2014-02-03 14:12:40',0,'0000-00-00 00:00:00',0,3,25,70),(187,'BANCO CARTA AAAAAA AAAAAAAA AAAAAAAAAA AAAAA AAAAAA AAAAAAAAAAAA','2014-02-08 20:48:20',0,'0000-00-00 00:00:00',0,1,0,45),(188,'ver como limpiar el baño para hacer 2.','2014-02-09 18:53:32',1,'2014-02-28 22:01:33',1,1,0,54),(189,'nico: pasar recargos','2014-07-11 16:25:08',0,'0000-00-00 00:00:00',0,3,18,16),(190,'200 pesos falta cobrar','2014-07-11 16:27:45',0,'0000-00-00 00:00:00',0,3,18,13),(191,'reporte 2. restringir a solo numero. que se pueda ingresar solo numeros. no texto.','2014-07-11 22:12:52',0,'0000-00-00 00:00:00',0,3,18,11),(192,'white-space: nowrap; en los resultados de busqueda.','2014-02-12 09:25:15',0,'0000-00-00 00:00:00',0,3,18,9),(193,'http://localhost/colegiomg/admin/admin/1.php?op=0','2014-02-14 16:08:44',0,'0000-00-00 00:00:00',0,3,18,6),(194,'agregar al tracker de tareas cantidad de tareas sin resolver.','2014-02-15 19:07:54',1,'2014-02-24 15:49:09',0,3,13,68),(195,'cuando pongo mi fecha local en 2015 febrero, aparece: deuda años anteriores\r\n$40.00\r\nTOTAL general	  	  	  	\r\n$40.00','2015-07-15 20:22:16',0,'0000-00-00 00:00:00',0,3,18,3),(196,'pedir mi pedal bateria\r\n','2014-02-17 16:40:03',0,'0000-00-00 00:00:00',0,1,0,18),(198,'a mis tareas: boton mostrar textbox. por defecto aparece oculto para dar prioridad a leer la lista de tareas.','2014-02-17 21:57:34',1,'2014-02-24 15:49:00',0,3,13,64),(199,'http://localhost/elecktrobit/','2014-02-19 19:42:16',0,'0000-00-00 00:00:00',0,3,25,56),(200,'HACER un CD con todo lo ultimo .','2014-02-19 19:47:15',0,'0000-00-00 00:00:00',0,3,18,2),(201,'tracker de finanzas mostrar graficos en resultados de textos (cuando cae internet)','2014-02-19 20:33:49',0,'0000-00-00 00:00:00',0,3,14,73),(202,'hacer backup','2014-02-25 00:31:04',0,'0000-00-00 00:00:00',0,3,29,98),(203,'pasar presupuesto','2014-02-28 15:15:42',0,'0000-00-00 00:00:00',0,3,30,93),(204,'agregar categoria caja y ahorro','2014-02-28 20:05:40',1,'2014-03-22 16:46:52',0,3,14,58),(205,'comprar celular a cuotas con tarjeta patricia,','2014-02-28 21:59:59',0,'0000-00-00 00:00:00',0,1,0,20),(206,'poner cable tv en mi pieza y pagar trimestralmente\r\n','2014-02-28 22:01:08',0,'0000-00-00 00:00:00',0,1,0,19),(207,'comprar bloc notas','2014-02-28 22:03:04',1,'2014-05-20 20:37:20',1,1,0,78),(208,'backapear todo y subir a internet\r\n','2014-03-01 10:23:06',0,'0000-00-00 00:00:00',0,1,0,30),(209,'cobrar segun tiempo. ','2014-03-04 17:50:32',0,'0000-00-00 00:00:00',0,3,26,92),(210,'\r\n\r\n    Usuario de conectividad : 42982845@speedy\r\n    Contraseña : 18370127\r\n\r\n','2014-03-07 00:22:12',1,'2014-05-20 20:37:16',1,1,0,70),(211,'no permite ingresar numero negativos. -200.','2014-03-07 01:00:01',0,'0000-00-00 00:00:00',0,3,14,17),(212,'LOS GRAFICOS: MUESTRAN DE LA FECHA AL MOMENTO, PARA ATRAS EN LA HISTORIA. en graficos mensuales y anuales.','2014-03-10 12:58:28',1,'2014-03-22 16:46:44',0,3,14,37),(213,'PRIMERO LOS GRAFICOS Y DESPUES LAS TABLAS DE INGRESOS/GASTOS/AJUSTESCAJA.','2014-03-10 12:59:30',1,'2014-03-22 16:46:39',0,3,14,24),(214,'TABLAS\r\norden id-precio-descripcion-fecha. colores azul. y, uno gris, uno blanco.','2014-03-10 13:01:12',1,'2014-03-22 16:46:33',0,3,14,21),(215,'reporte n1: trae todo con \"no tiene deuda\"','2014-03-11 19:47:19',0,'0000-00-00 00:00:00',0,3,18,1),(216,'recargos x alumno. no por familia.\r\n','2014-03-11 19:49:29',0,'0000-00-00 00:00:00',0,3,18,57),(217,'recargo se suma $20 cada mes vencido. \r\n\r\nrecargo mes vencido + 20. 2 meses vencido, +20. 3 meses + 20.','2014-03-11 19:50:23',0,'0000-00-00 00:00:00',0,3,18,53),(218,'no aplicar recargo opcion no hacer recargo. ','2014-03-11 19:51:11',0,'0000-00-00 00:00:00',0,3,18,49),(219,'descuentos. hacer.','2014-03-11 19:51:22',0,'0000-00-00 00:00:00',0,3,18,45),(220,'backup sistema huella dactilar.','2014-03-11 19:52:43',0,'0000-00-00 00:00:00',0,3,38,129),(221,'Factura/recibo: desglose, que figure la suma del recargo.','2014-03-11 19:56:49',0,'0000-00-00 00:00:00',0,3,18,41),(222,'casos de error:\r\ngomez matias \r\ngomez micaela 271\r\n--\r\n508 idrecibo\r\nLopez matias\r\nlopez ezequiel\r\n10-2-2014\r\n\r\n\r\nlopez matias\r\ngomez micaela','2014-03-11 19:59:49',0,'0000-00-00 00:00:00',0,3,18,36),(223,'arranca lento la makina.','2014-03-11 20:09:29',0,'0000-00-00 00:00:00',0,3,39,91),(224,'Buscar por:\r\nMaria Agustina,\r\n  Acevedo\r\n.  DNI: 48.233.850 IDFamilia: 2 \r\nfalta curso','2014-03-11 20:14:13',0,'0000-00-00 00:00:00',0,3,18,33),(225,'que ezequiel pueda imprimir desde su movil.','2014-03-11 21:02:22',0,'0000-00-00 00:00:00',0,3,18,30),(226,'pagos: al buscar , esta mal la paginacion. ','2014-03-12 12:10:31',0,'0000-00-00 00:00:00',0,3,18,29),(227,'no funciona los recargos de deuda de años anteriores.','2014-03-12 15:29:32',0,'0000-00-00 00:00:00',0,3,18,27),(228,'no funciona deuda años anteriores en reportes y en recibos.','2014-03-12 16:08:43',0,'0000-00-00 00:00:00',0,3,18,22),(229,'revisar mi bolsas con ropa. bolsillos y eso.','2014-03-13 23:54:43',1,'0000-00-00 00:00:00',0,1,0,16),(230,'Buscar por: \r\nagregar curso\r\nboton editar.\r\nlink: ver familiares','2014-03-14 13:27:59',0,'0000-00-00 00:00:00',0,3,18,20),(231,'mostrar x 2014 alineados izquierda.\r\nmes/deuda','2014-03-14 13:29:06',0,'0000-00-00 00:00:00',0,3,18,18),(232,'hacer algo para que no se pueda hacer un recibo mandar a hacer 2 veces por error o tocar boton atras. se me ocurre un generador de numero y letras .','2014-03-14 13:32:19',0,'0000-00-00 00:00:00',0,3,18,14),(233,'un cartel al tocar PRENDER q pregunte \"¿que estas haciendo?\". esto generaria una tabla de lo que voy haciendo en el dia. este cartel podria prendece al tocar un boton que estoy haciendo. tipo icono microfono.','2014-03-17 23:18:49',0,'0000-00-00 00:00:00',0,3,13,38),(234,'Ingrese búsqueda:\r\nfiltrar x IDF. 5 .trae 55 551 5555','2014-07-08 12:45:24',0,'0000-00-00 00:00:00',0,3,18,12),(235,'buscar informacion cormos.','2014-03-19 20:09:39',1,'2014-05-20 20:37:03',1,1,0,63),(236,'google analitics PONER!','2014-03-19 22:48:51',0,'0000-00-00 00:00:00',0,3,18,10),(237,'http://localhost/elecktrobit2/','2014-03-21 17:11:00',0,'0000-00-00 00:00:00',0,3,25,44),(238,'hacer tajetas personales','2014-03-21 21:43:19',0,'0000-00-00 00:00:00',0,3,25,34),(239,'denunciar robo mac. tratar de recuperarla.','2014-03-30 22:31:01',0,'0000-00-00 00:00:00',0,3,45,90),(240,'averiguar el club de ramiro.','2014-03-30 22:33:02',0,'0000-00-00 00:00:00',0,3,46,89),(241,'tabla JQUERY AJAX PHP, ALTA BAJA MODIFICACION.','2014-03-31 19:23:43',0,'0000-00-00 00:00:00',0,3,20,74),(242,'formulario contacto','2014-03-31 19:23:50',0,'0000-00-00 00:00:00',0,3,20,60),(281,'hola soy isaias usando la version 2.0 de mis tareas.','2014-06-10 23:31:41',1,'0000-00-00 00:00:00',1,1,0,92),(286,'listo. funcionando mis tareas v2.0','2014-06-11 15:01:49',1,'0000-00-00 00:00:00',1,1,0,93),(290,'CAMA','2014-06-11 19:12:56',0,'0000-00-00 00:00:00',0,1,0,22),(291,'COMPRAR AURICULARES PC','2014-06-11 19:14:37',0,'0000-00-00 00:00:00',0,1,0,60),(292,'COMPRAR o encontrar AURICULARES CELU','2014-06-11 19:15:02',0,'0000-00-00 00:00:00',0,1,0,39),(293,'placa video pc','2014-06-11 19:37:42',0,'0000-00-00 00:00:00',0,1,0,26),(294,'poner puerta','2014-06-11 20:16:20',0,'0000-00-00 00:00:00',0,1,0,44),(295,'perchero','2014-06-11 20:16:29',0,'0000-00-00 00:00:00',0,1,0,37),(296,'tapar ventanas','2014-06-11 21:30:54',0,'0000-00-00 00:00:00',0,1,0,35),(297,'arreglar mochilas','2014-06-11 21:37:07',1,'2014-06-23 20:53:06',1,1,0,55),(298,'tramitar dni','2014-06-11 23:04:28',0,'0000-00-00 00:00:00',0,1,0,32),(299,'tramitar registro','2014-06-11 23:04:35',0,'0000-00-00 00:00:00',0,1,0,31),(300,'cama: poner funda de plastico.','2014-06-13 22:02:51',0,'0000-00-00 00:00:00',0,1,0,38),(301,'simkin labio izq.','2014-06-14 15:51:29',0,'0000-00-00 00:00:00',0,1,0,33),(303,'archivar y eliminar llevan mensaje de confirmacion.','2014-06-15 16:33:59',1,'2014-06-18 20:36:23',1,1,0,47),(304,'nuevo mensaje para hacer pruebas...','2014-06-15 17:04:05',1,'2014-06-23 20:09:03',1,1,0,48),(306,'estas seguro? al tildar.','2014-06-17 22:40:06',1,'0000-00-00 00:00:00',1,1,0,49),(307,'logo carpetita al boton archivar.','2014-06-17 22:40:22',1,'0000-00-00 00:00:00',1,1,0,51),(308,'llevar medias','2014-06-17 20:54:14',0,'0000-00-00 00:00:00',0,3,49,0),(309,'construir estanteria','2014-06-18 01:09:20',0,'0000-00-00 00:00:00',0,1,0,49),(310,'cortar pelo','2014-06-18 11:14:37',1,'2014-06-30 21:44:21',1,1,0,50),(311,'funda para la cama.','2014-06-18 22:57:54',0,'0000-00-00 00:00:00',0,1,0,51),(312,'hacer pagina para marcar con un datepicker','2014-06-18 23:39:09',0,'0000-00-00 00:00:00',0,1,0,52),(313,'orden , finanzas, tracker, mis tareas, calendario,notas, generador.','2014-06-18 23:40:22',0,'0000-00-00 00:00:00',0,1,0,53),(314,'buscar radios copadas. tipo lalo mir.','2014-06-19 00:48:18',0,'0000-00-00 00:00:00',0,1,0,54),(315,'comprar calzoncillos','2014-06-20 16:42:14',0,'0000-00-00 00:00:00',0,1,0,47),(316,'cable del cargador camara digital fotos movee','2014-06-20 23:18:08',0,'0000-00-00 00:00:00',0,1,0,56),(317,'granito cara','2014-06-23 23:10:55',0,'0000-00-00 00:00:00',0,1,0,34),(318,'alarge auriculares','2014-06-24 00:03:03',0,'0000-00-00 00:00:00',0,1,0,57),(319,'pendriver con musica','2014-06-25 00:11:21',0,'0000-00-00 00:00:00',0,1,0,58),(320,'zapatillas trabajo','2014-06-25 23:10:48',0,'0000-00-00 00:00:00',0,1,0,59),(321,'baldosones mercadolibre','2014-06-25 23:41:29',1,'2014-07-07 22:31:34',1,1,0,61),(322,'r2d2 link mercadolibre','2014-06-25 23:41:40',1,'2014-06-30 21:42:45',1,1,0,62),(323,'2014-06-25','2014-06-26 01:21:18',0,'0000-00-00 00:00:00',0,1,0,1),(324,'2014-06-25','2014-06-26 01:22:30',0,'0000-00-00 00:00:00',0,1,0,0),(325,'espejito','2014-06-27 16:07:07',0,'0000-00-00 00:00:00',0,1,0,62),(326,'hacer pagina en mercadolibre.','2014-06-30 21:16:49',0,'0000-00-00 00:00:00',0,3,49,1),(327,'cinturon de trabajo','2014-07-08 01:31:17',0,'0000-00-00 00:00:00',0,1,0,94);
/*!40000 ALTER TABLE `mis_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `people` (
  `PersonId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Age` int(10) unsigned NOT NULL,
  `RecordDate` datetime NOT NULL,
  PRIMARY KEY (`PersonId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `people`
--

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` VALUES (1,'Benjamin Button',19,'2011-12-27 00:00:00'),(2,'Douglas Adams',43,'2011-12-26 00:00:00'),(3,'Isaac Asimov',26,'2011-12-28 00:00:00'),(5,'Ihsan Oktay Anar',44,'2012-01-03 20:55:02'),(6,'dgdfgds',324,'2014-03-31 19:00:06'),(7,'sdfsdf',345,'2014-03-31 19:00:14'),(8,'FDSFDS',4234,'2014-03-31 19:15:37'),(9,'SADS',3244,'2014-03-31 19:15:42'),(10,'SADASD',324234,'2014-03-31 19:15:47'),(11,'SDFSDFD',345345,'2014-03-31 19:15:51'),(12,'fdsf',1212,'2014-05-24 19:35:05'),(13,'fgh',456,'2014-05-24 19:44:00');
/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES (1,'Peoyecto 1');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relojes`
--

DROP TABLE IF EXISTS `relojes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relojes` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` varchar(255) NOT NULL,
  `op` int(255) NOT NULL,
  `idproyecto` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=413 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relojes`
--

LOCK TABLES `relojes` WRITE;
/*!40000 ALTER TABLE `relojes` DISABLE KEYS */;
INSERT INTO `relojes` VALUES (1,'2014-01-04 09:28:32',1,11),(2,'2014-01-04 09:28:35',0,11),(3,'2014-01-04 09:28:50',1,10),(4,'2014-01-04 09:28:54',0,10),(5,'2014-01-04 10:11:38',1,15),(6,'2014-01-04 10:11:40',0,15),(7,'2014-01-04 10:15:04',1,14),(8,'2014-01-04 10:15:07',0,14),(9,'2014-01-04 10:15:21',1,16),(10,'2014-01-04 10:15:25',0,16),(11,'2014-01-05 02:08:03',1,14),(12,'2014-01-05 02:16:28',0,14),(13,'2014-01-05 04:39:02',1,14),(14,'2014-01-05 05:04:37',0,14),(15,'2014-01-05 06:08:49',1,14),(16,'2014-01-05 06:42:32',0,14),(17,'2014-01-06 08:29:35',1,10),(18,'2014-01-06 11:00:04',0,10),(21,'2014-01-06 11:10:07',1,10),(22,'2014-01-06 11:10:26',0,10),(23,'2014-01-06 04:27:06',1,16),(24,'2014-01-06 04:29:30',0,16),(25,'2014-01-22 07:41:45',1,17),(26,'2014-01-22 08:53:02',0,17),(27,'2014-01-22 05:56:59',1,17),(28,'2014-01-22 05:57:05',0,17),(29,'2014-01-22 17:59:47',1,17),(30,'2014-01-22 18:00:34',0,17),(31,'2014-01-22 18:28:44',1,3),(32,'2014-01-22 18:29:08',0,3),(33,'2014-01-22 18:29:21',1,3),(34,'2014-01-22 18:30:00',1,11),(35,'2014-01-22 18:30:03',0,11),(36,'2014-01-22 18:30:05',1,11),(37,'2014-01-22 18:30:06',0,11),(38,'2014-01-22 18:30:07',1,11),(39,'2014-01-22 18:30:08',0,11),(40,'2014-01-22 18:32:40',1,11),(41,'2014-01-22 19:50:18',0,11),(42,'2014-01-23 14:55:52',1,11),(43,'2014-01-23 16:40:07',0,11),(44,'2014-01-28 16:18:47',1,11),(45,'2014-01-28 17:10:11',0,11),(46,'2014-01-28 17:10:17',1,11),(47,'2014-01-28 18:38:18',0,11),(48,'2014-01-28 18:38:31',1,11),(49,'2014-01-28 19:32:46',0,11),(50,'2014-01-29 10:41:51',1,11),(51,'2014-01-29 11:53:16',0,11),(52,'2014-01-29 11:53:23',1,11),(53,'2014-01-29 12:35:03',0,11),(54,'2014-01-29 12:41:29',1,11),(55,'2014-01-29 13:05:39',0,11),(56,'2014-01-29 13:19:20',1,17),(57,'2014-01-29 16:00:45',0,17),(58,'2014-01-29 16:08:14',1,11),(59,'2014-01-29 16:13:52',0,11),(60,'2014-01-29 16:15:18',1,11),(61,'2014-01-29 17:30:45',0,11),(62,'2014-01-29 19:39:22',1,13),(89,'2014-01-29 20:03:54',1,13),(113,'2014-01-29 20:22:25',0,13),(120,'2014-01-29 10:30:23',1,22),(121,'2014-01-29 20:30:38',0,22),(122,'2014-01-29 20:31:06',1,22),(123,'2014-01-29 20:31:12',0,22),(124,'2014-01-29 20:31:42',1,22),(129,'2014-01-29 20:58:51',0,22),(130,'2014-01-30 10:41:52',1,12),(131,'2014-01-30 13:24:12',0,12),(132,'2014-01-30 16:14:37',1,12),(133,'2014-01-30 16:14:44',0,12),(134,'2014-01-30 16:14:48',1,12),(135,'2014-01-30 17:15:30',0,12),(136,'2014-01-30 17:36:48',1,12),(137,'2014-01-30 18:04:57',0,12),(138,'2014-01-31 11:47:23',1,12),(139,'2014-01-31 14:15:52',0,12),(140,'2014-01-31 18:10:22',1,12),(141,'2014-01-31 19:00:32',0,12),(142,'2014-01-31 19:15:49',1,12),(143,'2014-01-31 20:09:56',0,12),(144,'2014-01-31 20:12:19',1,12),(145,'2014-01-31 20:15:37',0,12),(146,'2014-02-01 15:41:57',1,16),(147,'2014-02-01 18:11:33',1,25),(148,'2014-02-01 18:11:38',0,25),(149,'2014-02-01 18:12:36',1,25),(150,'2014-02-01 19:21:02',0,25),(151,'2014-02-03 11:49:33',1,12),(152,'2014-02-03 11:50:37',0,12),(153,'2014-02-03 13:57:59',1,25),(154,'2014-02-03 14:11:38',0,25),(155,'2014-02-03 17:16:57',1,25),(156,'2014-02-03 18:17:19',0,25),(157,'2014-02-01 18:50:49',0,16),(158,'2014-02-04 14:51:10',1,16),(159,'2014-02-04 16:08:21',0,16),(160,'2014-02-04 16:12:36',1,12),(161,'2014-02-04 17:58:55',0,12),(162,'2014-02-05 13:31:07',1,12),(163,'2014-02-05 15:17:18',0,12),(164,'2014-02-08 19:02:51',1,12),(165,'2014-02-08 19:32:35',0,12),(166,'2014-02-08 19:32:41',1,12),(167,'2014-02-08 19:42:32',0,12),(168,'2014-02-08 19:43:29',1,11),(169,'2014-02-08 20:16:55',0,11),(170,'2014-02-09 19:00:26',1,12),(171,'2014-02-09 19:52:30',0,12),(172,'2014-02-09 19:52:36',1,12),(173,'2014-02-09 19:54:18',0,12),(174,'2014-02-10 16:41:10',1,18),(175,'2014-02-10 16:44:28',0,18),(176,'2014-02-10 16:44:34',1,18),(177,'2014-02-10 17:41:39',0,18),(178,'2014-02-10 18:57:50',1,18),(179,'2014-02-10 20:47:55',0,18),(180,'2014-02-11 11:03:33',1,18),(181,'2014-02-11 11:50:52',0,18),(182,'2014-02-11 15:59:59',1,18),(183,'2014-02-11 16:33:46',0,18),(184,'2014-02-11 20:29:50',1,18),(185,'2014-02-11 22:45:52',0,18),(186,'2014-02-12 00:24:56',1,18),(187,'2014-02-12 01:07:20',0,18),(188,'2014-02-12 09:18:52',1,18),(189,'2014-02-12 10:02:52',0,18),(190,'2014-02-12 18:11:15',1,18),(191,'2014-02-12 19:59:24',0,18),(192,'2014-02-13 17:13:09',1,18),(193,'2014-02-13 17:38:36',0,18),(194,'2014-02-14 13:21:04',1,18),(195,'2014-02-14 14:09:03',0,18),(196,'2014-02-14 16:08:26',1,18),(197,'2014-02-14 18:21:48',0,18),(198,'2014-02-14 19:20:39',1,18),(199,'2014-02-14 20:21:49',0,18),(200,'2014-02-15 17:20:14',1,18),(201,'2014-02-15 17:30:56',0,18),(202,'2014-02-15 17:31:03',1,13),(203,'2014-02-15 17:43:23',0,13),(204,'2014-02-15 17:43:34',1,13),(205,'2014-02-15 17:44:42',0,13),(206,'2014-02-15 17:44:45',1,13),(207,'2014-02-15 18:24:20',0,13),(208,'2014-02-15 18:36:06',1,13),(209,'2014-02-15 18:39:04',0,13),(210,'2014-02-15 18:39:29',1,13),(211,'2014-02-15 18:39:36',0,13),(212,'2014-02-15 18:44:04',1,13),(213,'2014-02-15 18:44:09',0,13),(214,'2014-02-15 18:44:17',1,13),(215,'2014-02-15 18:44:19',0,13),(216,'2014-02-15 18:44:21',1,13),(217,'2014-02-15 18:44:26',0,13),(218,'2014-02-15 18:44:29',1,13),(219,'2014-02-15 18:44:34',0,13),(220,'2014-02-15 18:56:51',1,18),(221,'2014-02-15 19:06:51',1,13),(222,'2014-02-15 19:17:27',0,18),(223,'2014-02-15 19:26:34',1,11),(224,'2014-02-15 19:26:39',0,11),(225,'2014-02-15 19:26:40',1,11),(226,'2014-02-15 19:26:45',0,11),(227,'2014-02-15 19:27:16',1,11),(228,'2014-02-15 19:31:11',0,13),(229,'2014-02-15 19:31:14',1,13),(230,'2014-02-15 19:31:19',0,13),(231,'2014-02-15 19:31:26',1,13),(232,'2014-02-15 19:33:18',0,13),(233,'2014-02-15 19:33:46',1,13),(234,'2014-02-15 19:33:48',0,13),(235,'2014-02-15 19:34:11',0,11),(236,'2014-02-15 19:35:42',1,13),(237,'2014-02-15 19:42:00',0,13),(238,'2014-02-15 19:49:57',1,13),(239,'2014-02-15 20:05:51',0,13),(240,'2014-02-16 21:00:24',1,13),(241,'2014-02-16 21:00:54',0,13),(242,'2014-02-16 21:01:06',1,13),(244,'2014-02-16 21:01:24',0,13),(246,'2014-02-16 21:07:10',1,17),(247,'2014-02-16 21:07:23',0,17),(248,'2014-02-16 21:09:13',1,13),(249,'2014-02-16 21:38:57',1,17),(250,'2014-02-16 21:39:07',0,17),(251,'2014-02-16 21:39:11',1,17),(252,'2014-02-16 21:39:29',0,17),(253,'2014-02-16 21:45:44',0,13),(254,'2014-02-17 19:07:20',1,13),(255,'2014-02-17 19:59:22',0,13),(256,'2014-02-17 19:59:24',1,13),(257,'2014-02-17 21:13:03',0,13),(258,'2014-02-17 21:13:06',1,13),(259,'2014-02-17 21:20:13',0,13),(260,'2014-02-18 16:09:21',1,13),(261,'2014-02-18 16:35:53',0,13),(262,'2014-02-19 16:21:45',1,13),(263,'2014-02-19 16:43:16',0,13),(264,'2014-02-19 18:38:43',1,13),(265,'2014-02-19 19:04:26',0,13),(266,'2014-02-19 19:21:37',1,13),(267,'2014-02-19 19:25:19',0,13),(268,'2014-02-21 15:54:46',1,13),(269,'2014-02-21 16:23:39',0,13),(270,'2014-02-24 12:06:04',1,13),(271,'2014-02-24 12:14:28',0,13),(272,'2014-02-24 15:52:20',1,13),(282,'2014-02-24 18:29:15',0,13),(283,'2014-02-24 20:31:47',1,11),(284,'2014-02-24 20:31:49',0,11),(285,'2014-02-24 20:37:06',1,13),(286,'2014-02-24 21:28:25',0,13),(287,'2014-02-24 21:36:48',1,29),(288,'2014-02-24 22:26:38',0,29),(289,'2014-02-24 23:56:03',1,16),(290,'2014-02-25 00:09:03',0,16),(291,'2014-02-25 00:10:39',1,29),(292,'2014-02-25 00:10:46',0,29),(293,'2014-02-25 00:10:50',1,29),(294,'2014-02-25 01:00:56',0,29),(295,'2014-02-25 11:06:35',1,13),(296,'2014-02-25 13:12:08',0,13),(297,'2014-02-25 14:49:38',1,13),(298,'2014-02-25 14:50:51',0,13),(299,'2014-02-25 14:54:53',1,13),(300,'2014-02-25 15:10:25',0,13),(301,'2014-02-25 15:14:17',1,13),(302,'2014-02-25 15:15:38',0,13),(303,'2014-02-25 15:15:45',1,13),(304,'2014-02-25 15:17:10',0,13),(305,'2014-02-25 15:17:13',1,13),(306,'2014-02-25 15:24:28',0,13),(307,'2014-02-25 15:25:21',1,35),(308,'2014-02-25 15:25:25',0,35),(309,'2014-02-25 15:26:04',1,35),(310,'2014-02-25 15:29:36',0,35),(311,'2014-02-28 15:16:18',1,30),(312,'2014-02-28 15:16:29',0,30),(313,'2014-02-28 15:22:57',1,30),(314,'2014-02-28 15:33:08',0,30),(315,'2014-02-28 15:35:41',1,26),(316,'2014-02-28 15:39:56',0,26),(317,'2014-03-04 15:44:23',1,26),(318,'2014-03-04 15:45:56',0,26),(319,'2014-03-04 17:36:50',1,26),(320,'2014-03-04 18:02:30',0,26),(321,'2014-03-05 18:06:51',1,26),(322,'2014-03-05 18:54:01',0,26),(323,'2014-03-06 10:26:49',1,26),(324,'2014-03-06 10:34:05',0,26),(325,'2014-03-06 10:34:11',1,26),(326,'2014-03-06 11:47:37',0,26),(327,'2014-03-06 11:48:02',1,26),(328,'2014-03-06 12:11:20',0,26),(329,'2014-03-06 12:25:59',1,26),(330,'2014-03-06 13:15:38',0,26),(331,'2014-03-06 17:15:28',1,26),(332,'2014-03-06 18:11:07',0,26),(333,'2014-03-10 20:07:39',1,26),(334,'2014-03-10 20:31:31',0,26),(335,'2014-03-10 20:35:04',1,26),(336,'2014-03-10 21:08:14',0,26),(337,'2014-03-11 18:48:07',1,26),(338,'2014-03-11 19:32:23',0,26),(339,'2014-03-11 19:45:06',1,18),(340,'2014-03-11 20:55:40',0,18),(341,'2014-03-12 10:44:30',1,18),(342,'2014-03-12 13:14:57',0,18),(343,'2014-03-12 15:30:40',1,18),(344,'2014-03-12 16:40:42',0,18),(345,'2014-03-12 16:53:36',1,26),(346,'2014-03-12 17:17:25',0,26),(347,'2014-03-12 19:15:41',1,26),(348,'2014-03-12 20:35:49',0,26),(349,'2014-03-13 10:57:27',1,26),(350,'2014-03-13 11:45:30',0,26),(351,'2014-03-13 12:14:07',1,26),(352,'2014-03-13 13:20:02',0,26),(353,'2014-03-13 16:55:24',1,18),(354,'2014-03-13 18:50:34',0,18),(355,'2014-03-17 13:25:24',1,44),(356,'2014-03-17 13:41:27',0,44),(357,'2014-03-17 13:41:33',1,44),(358,'2014-03-17 15:01:01',0,44),(363,'2014-03-17 19:21:02',1,44),(364,'2014-03-17 20:30:03',0,44),(365,'2014-03-17 23:03:40',1,13),(366,'2014-03-17 23:24:28',0,13),(367,'2014-03-17 23:26:43',1,13),(368,'2014-03-17 23:59:27',0,13),(369,'2014-03-18 11:20:03',1,44),(370,'2014-03-18 12:08:49',0,44),(371,'2014-03-18 12:56:38',1,18),(372,'2014-03-18 12:56:51',0,18),(373,'2014-03-18 12:57:02',1,44),(374,'2014-03-18 13:29:32',0,44),(375,'2014-03-18 16:26:29',1,18),(376,'2014-03-18 16:44:38',0,18),(381,'2014-03-18 20:52:40',1,44),(382,'2014-03-18 21:21:00',0,44),(383,'2014-03-21 17:33:21',1,25),(384,'2014-03-21 19:10:01',0,25),(385,'2014-03-21 19:39:27',1,20),(386,'2014-03-21 19:40:00',0,20),(387,'2014-03-21 19:02:20',1,20),(388,'2014-03-21 19:40:30',0,20),(389,'2014-03-21 21:44:37',1,25),(390,'2014-03-21 22:07:07',0,25),(391,'2014-03-22 11:38:18',1,14),(392,'2014-03-22 13:19:21',0,14),(393,'2014-03-22 13:20:31',1,14),(394,'2014-03-22 14:46:25',0,14),(395,'2014-03-25 23:21:56',1,25),(396,'2014-03-26 00:31:28',0,25),(397,'2014-03-28 12:28:42',1,13),(398,'2014-03-28 12:29:17',0,13),(399,'2014-03-28 12:31:36',1,18),(400,'2014-03-30 21:06:21',1,13),(401,'2014-03-30 22:24:06',0,13),(402,'2014-03-28 14:21:36',0,18),(403,'2014-06-11 16:00:50',1,49),(404,'2014-06-11 09:00:24',0,49),(405,'2014-06-17 10:00:00',1,49),(406,'2014-06-17 16:00:00',0,49),(407,'2014-06-18 10:00:00',1,49),(408,'2014-06-18 16:30:00',0,49),(409,'2014-06-19 10:30:00',1,49),(410,'2014-06-19 17:30:00',0,49),(411,'2014-06-23 11:00:00',1,49),(412,'2014-06-23 16:00:00',0,49);
/*!40000 ALTER TABLE `relojes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas`
--

DROP TABLE IF EXISTS `tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `tiempo_estimado` varchar(255) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `precioxhora` int(255) NOT NULL,
  `idproyecto` int(255) NOT NULL,
  `idreloj` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` VALUES (10,'Cartulina 1 lengua y literatura','10','2014-02-04',50,1,0),(11,'Cartulina 2','20','2014-02-10',50,1,0),(12,'CARTULINA 3','10','2014-02-10',50,1,0),(13,'Tracker','20','2014-03-01',50,2,0),(14,'Finanzas','50','0000-00-00',50,2,0),(15,'Mis tareas','50','0000-00-00',50,2,0),(16,'R2D2','50','0000-00-00',50,2,0),(17,'recreo','10:00:00','2014-03-01',50,0,0),(18,'ADMIN COLEGIO sistema','','2014-03-01',50,1,0),(19,'Reparacion notebook alejandra','','2014-03-31',50,1,0),(20,'Labs: formularios AJAX','','0000-00-00',50,3,0),(21,'Buscar trabajo','','0000-00-00',50,3,0),(22,'pruebas tracker old','','0000-00-00',50,2,0),(23,'cliente jesus','','0000-00-00',0,5,0),(24,'reparacion notebook patricia','','2014-03-15',50,4,0),(25,'ElecktroBit','','2014-04-01',50,3,0),(26,'cartulina 4','6','2014-02-21',50,1,0),(27,'sitio web colegio','50','2014-05-01',50,1,0),(28,'reportes admin ezequiel','','2014-04-01',50,1,0),(29,'generador sitios web','10','2014-02-28',0,2,0),(30,'candelabro oro','','0000-00-00',0,6,0),(35,'trackersito','1','0000-00-00',0,2,0),(36,'antivirus','','0000-00-00',0,3,0),(37,'the matrix','','0000-00-00',0,2,0),(38,'huella dactilar','','0000-00-00',0,1,0),(39,'makina ezequiel','','0000-00-00',0,1,0),(40,'makina Nico','','0000-00-00',0,1,0),(41,'ADMIN - reporte 1 ','','0000-00-00',0,1,0),(42,'valeria  - facebook','','0000-00-00',0,7,0),(43,'Pagina presupuestos','','0000-00-00',0,2,0),(44,'recargos 2','10','0000-00-00',50,1,0),(45,'mac','','0000-00-00',0,8,0),(46,'cormons','','0000-00-00',0,9,0),(47,'cv','','0000-00-00',0,3,0),(48,'Aprender backbone.js, node.js, express.js.','','0000-00-00',0,3,0),(49,'baldosones','','0000-00-00',0,10,0),(50,'servidor local','','0000-00-00',0,1,0),(51,'materiales x mantenimiento','','0000-00-00',0,1,0);
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-09 11:56:49
