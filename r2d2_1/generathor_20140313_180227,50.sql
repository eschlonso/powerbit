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
-- Table structure for table `finanzas_ajustecaja`
--

DROP TABLE IF EXISTS `finanzas_ajustecaja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finanzas_ajustecaja` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_ajustecaja`
--

LOCK TABLES `finanzas_ajustecaja` WRITE;
/*!40000 ALTER TABLE `finanzas_ajustecaja` DISABLE KEYS */;
INSERT INTO `finanzas_ajustecaja` VALUES (1,100,'2014-01-01 06:10:59',''),(2,10,'2014-01-05 06:12:07',''),(3,300,'2013-12-05 06:14:07',''),(4,7,'2014-01-05 06:18:15',''),(5,50,'2014-01-05 06:37:59',''),(6,88,'2014-01-05 06:39:41',''),(7,80,'2014-01-05 06:57:15',''),(8,84,'2014-01-05 06:58:33',''),(9,150,'2014-01-22 20:20:50',''),(10,250,'2014-01-28 20:02:43',''),(11,700,'2014-02-28 15:32:47',''),(12,600,'2014-02-28 19:27:20',''),(13,0,'2014-03-04 21:47:41',''),(14,0,'2014-03-10 13:20:27',''),(15,50,'2014-03-10 13:30:07','');
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
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_gastos`
--

LOCK TABLES `finanzas_gastos` WRITE;
/*!40000 ALTER TABLE `finanzas_gastos` DISABLE KEYS */;
INSERT INTO `finanzas_gastos` VALUES (3,6,'2014-01-06 06:33:00','cigarrillos philips 10.'),(6,6,'2014-01-07 18:54:57','cigarrillos philip 10'),(7,6,'2014-01-09 14:46:50','cigarros'),(8,50,'2014-01-14 13:42:06','comida jony.'),(9,170,'2014-02-03 23:31:31','m'),(10,0,'2014-02-04 01:32:31','me metieron en calabozo'),(11,170,'2014-02-28 10:35:09','mari'),(12,70,'2014-03-05 17:41:55','corte pelo');
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
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_ingresos`
--

LOCK TABLES `finanzas_ingresos` WRITE;
/*!40000 ALTER TABLE `finanzas_ingresos` DISABLE KEYS */;
INSERT INTO `finanzas_ingresos` VALUES (1,0,'2014-01-01 06:11:26',''),(2,300,'2014-01-13 13:41:08','pago alejandra de cartulina.'),(3,150,'2014-01-28 14:24:45','gabriel'),(4,300,'2014-02-06 17:49:40','dia sist. coleg\r\n'),(5,125,'2014-02-07 20:06:14','pago colegio mañana'),(6,600,'2014-02-10 17:06:23','2 cartulinas de $300'),(7,175,'2014-03-07 18:52:25','virus en makinas colegio ale');
/*!40000 ALTER TABLE `finanzas_ingresos` ENABLE KEYS */;
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
  `posicion` decimal(10,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mis_tareas`
--

LOCK TABLES `mis_tareas` WRITE;
/*!40000 ALTER TABLE `mis_tareas` DISABLE KEYS */;
INSERT INTO `mis_tareas` VALUES (5,'Cortar el pelo. porque ya lo tengo largo che... emprolijar y eso.','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,37.0),(6,'llamar guillermito','0000-00-00 00:00:00',1,'2014-01-08 16:13:31',1,1,0,19.0),(7,'dientes','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,4,0,34.0),(9,'llamar jony','0000-00-00 00:00:00',1,'2014-01-25 15:35:37',1,1,0,20.0),(11,'diluir el shampoo\r\n','0000-00-00 00:00:00',1,'2014-01-25 15:36:04',1,1,0,4.0),(12,'cambiar contraseñas','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,27.0),(18,'Ir a pasear a lanus','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,33.0),(21,'voy a la igglesia hoy?','0000-00-00 00:00:00',1,'2014-01-22 23:36:48',1,1,0,1.0),(22,'lavar ropa','0000-00-00 00:00:00',1,'2014-01-22 23:36:52',1,1,0,3.0),(23,'antivirus maquina','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,24.0),(25,'agregar modificar...','0000-00-00 00:00:00',1,'2014-01-28 19:44:20',1,0,0,25.0),(28,'visitar abuelos','0000-00-00 00:00:00',1,'2014-02-17 16:39:31',0,1,0,18.0),(29,'poner fecha a comprar zapatillas','0000-00-00 00:00:00',1,'2014-01-25 15:36:22',0,2,0,2.0),(30,'tener mi propia toalla','0000-00-00 00:00:00',1,'2014-01-22 23:36:29',1,1,0,15.0),(31,'Carta a miguel para hacer preguntas al momento de estar con el.','0000-00-00 00:00:00',1,'2014-01-28 19:43:50',1,1,0,28.0),(32,'zurcir medias','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,6.0),(34,'tracker, al marcar, PRENDER NOMBRE TAREA Y NOMBRE PROYECTO.','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(35,'juntar mis palos','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,14.0),(36,'juntar herramientas. palita para hacer asaddo y herramientas abuelo.','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,13.0),(37,'NUEVO TRABAJO','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,32.0),(38,'pedir estabilizador jony','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,5.0),(40,'asdasd','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(41,'fsdfsdf','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(42,'sadasd','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(43,'4545\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(44,'435345','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(45,'sdf','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(46,'333\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(47,'3232\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(48,'aqui','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(49,'aaa','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(50,'999\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(55,'hola\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,15,0.0),(57,'poner el resto de las bases de datos en mysql por error de wamp de hoy martes ','0000-00-00 00:00:00',1,'2014-01-28 19:43:21',1,1,0,36.0),(63,'aqui','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(64,'asdsad','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(65,'333\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(66,'33\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(67,'111','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(68,'3333','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(69,'111\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(73,'jij\r\n','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(74,'s','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(75,'s','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(76,'dd','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(77,'d','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(78,'d','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(79,'g','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(80,'g','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,3,0,0.0),(94,'mosquitero','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,0,12.0),(100,'asdasdasd','2014-01-08 05:57:47',0,'0000-00-00 00:00:00',0,3,0,0.0),(101,'asdasdasd','2014-01-08 05:57:52',0,'0000-00-00 00:00:00',0,3,0,0.0),(117,'comprar auriculares','2014-01-08 16:11:37',0,'0000-00-00 00:00:00',0,2,0,11.0),(118,'aprender a combarit contra perros.','2014-01-08 21:10:09',0,'0000-00-00 00:00:00',0,1,0,21.0),(119,'hacer deporte','2014-01-08 21:10:13',0,'0000-00-00 00:00:00',0,1,0,23.0),(120,'trakiar tiempo cuando salgo a caminar y eso.','2014-01-08 21:11:14',0,'0000-00-00 00:00:00',0,3,17,0.0),(121,'fecha inicio fecha fin corregir en donde falte','2014-01-08 21:20:55',0,'0000-00-00 00:00:00',0,3,18,0.0),(122,'defensa personal','2014-01-08 21:21:17',0,'0000-00-00 00:00:00',0,1,0,22.0),(123,'apagar wifi, aparato timer, cable red.','2014-01-09 20:05:05',0,'0000-00-00 00:00:00',0,1,0,10.0),(124,'marcar tiempo de laburo. dia lunes tal trabajo, jueves tal trabajo','2014-01-09 20:06:29',0,'0000-00-00 00:00:00',0,1,0,26.0),(125,'arreglar patita TV','2014-01-09 21:02:20',0,'0000-00-00 00:00:00',0,1,0,17.0),(126,'miguel: Resulta curioso el hecho de que el nieto de Yiye es predicador pero no es nada fogoso como su abuelo. ¿ Lo conocen ? Se llama Miguel Sánchez Avila, y habla normalmente, sin griterías, ni \"lenguas\". ¿ Por qué será ? ','2014-01-09 21:43:04',1,'2014-01-28 19:43:38',1,1,0,30.0),(127,'controlar consumo m y ciharrillos','2014-01-09 22:12:13',0,'0000-00-00 00:00:00',0,1,0,9.0),(128,'pasar bloc notas aqui','2014-01-09 22:13:59',0,'0000-00-00 00:00:00',0,1,0,8.0),(129,'hacer un sitio  web con tarjetas. elecktrobit vena de sitios folletos....','2014-01-10 15:15:49',0,'0000-00-00 00:00:00',0,1,0,7.0),(130,'dar orden de prioridades','2014-01-13 13:40:16',1,'2014-01-25 15:36:49',1,1,0,35.0),(131,'comprar calzoncillos','2014-01-13 16:44:39',0,'0000-00-00 00:00:00',0,2,0,16.0),(132,'sdfsdf','2014-01-22 20:54:26',1,'2014-01-22 21:07:35',0,3,17,0.0),(133,'trackear y hacer..','2014-01-22 21:31:14',0,'0000-00-00 00:00:00',0,3,11,0.0),(135,'hacer back up y bases de datos.','2014-01-22 21:40:40',0,'0000-00-00 00:00:00',0,3,16,0.0),(136,'carta a orlando brandoni: Preguntas\r\n1) lalala\r\n2) alalal\r\n3) sdasdsa\r\n4) fsfsdfds','2014-01-25 13:29:02',1,'2014-01-28 19:43:42',1,1,0,31.0),(137,'comprar tachito basura para el cuarto.\r\n','2014-01-25 14:07:04',0,'0000-00-00 00:00:00',0,1,0,29.0),(138,'arreglar paraguas','2014-01-28 08:40:51',0,'0000-00-00 00:00:00',0,1,0,38.0),(139,'poner fecha al momento de terminar la tarea.','2014-01-28 19:47:26',0,'0000-00-00 00:00:00',0,1,0,39.0),(140,'comprar mar','2014-01-28 19:51:49',1,'2014-02-08 14:01:59',0,1,0,40.0),(141,'poner el loading redondo.','2014-01-29 10:40:02',1,'2014-02-24 18:21:47',0,3,13,2.5),(142,'bsucar cosas de hackeo','2014-01-29 10:45:39',0,'0000-00-00 00:00:00',0,1,0,41.0),(143,'presupuestar el arreglo de la notebbok de alejandra.','2014-01-29 11:13:55',0,'0000-00-00 00:00:00',0,3,11,1.0),(144,'cobrar 50 pesos alejandra','2014-01-29 11:35:34',0,'0000-00-00 00:00:00',0,3,11,2.0),(145,'agregar total horas trabajadas hoy.','2014-01-29 12:36:14',1,'2014-02-24 15:50:56',0,3,13,1.5),(146,'resumen total guardado. \"no se encontraron datos.\"','2014-01-29 12:37:17',0,'0000-00-00 00:00:00',0,3,13,3.0),(147,'aqui vamos a hacer los formularios en ajax. como modificar sobre ahi mismo sin necesidad de pasar por otra pagina. estas implementaciones las podemos usar para R2D2 en tareas y tracker y para ir aprendiendo.','2014-01-29 12:41:11',0,'0000-00-00 00:00:00',0,3,20,0.0),(148,'al guardar hay ERROR. fijarce. creo q es cuando no hay registros. modificar no va a su pagina cuando estoy en tracker.','2014-01-29 12:42:00',0,'0000-00-00 00:00:00',0,3,15,1.0),(149,'al guadar el primero tira error.','2014-01-29 12:44:20',0,'0000-00-00 00:00:00',0,3,13,4.0),(150,'al guardar hay ERROR. fijarce. creo q es cuando no hay registros.\r\nmodificar no va a su pagina cuando estoy en tracker.','2014-01-29 12:45:21',0,'0000-00-00 00:00:00',0,3,13,5.0),(151,'agregar tareas pendientes en el index y fecha de entrega. \r\n\r\n-------------------\r\n14 dias restantes\r\n-------------------\r\n28hs / 30hs\r\n-------------------\r\n3 de 4 subtareas\r\n-------------------\r\n','2014-01-29 12:47:01',1,'2014-02-24 15:50:24',0,3,13,1.5),(152,'entrar antiguo tracker  http://localhost/generathor/?n=1&o=1 ','2014-01-29 12:52:46',1,'2014-02-24 15:50:34',0,3,13,1.5),(153,'agregar total trabajado hoy en este proyecto y en tootal con todos los de hoy.','2014-01-29 13:07:00',1,'2014-02-24 16:23:57',0,3,13,2.5),(154,' http://localhost/generathor/?n=1&o=1  NO FUNCIONA. Hacer correr. o copiar carcaza.','2014-01-29 13:07:53',1,'2014-02-24 15:49:57',0,3,13,1.5),(155,'resumen: poner colores a la tabla... todo en una sola linea?resumen\r\ntotal guardado:\r\n00:00:00','2014-01-29 13:09:08',0,'0000-00-00 00:00:00',0,3,13,10.0),(156,'subir a servidor. para no perder datos y ser movil.','2014-01-29 13:10:05',0,'0000-00-00 00:00:00',0,3,16,1.0),(157,'terminar essto urgente.','2014-01-29 13:11:14',0,'0000-00-00 00:00:00',0,3,18,1.0),(158,'incorporar MODIFICAR Y ELIMINAR','2014-01-29 13:13:25',0,'0000-00-00 00:00:00',0,3,14,0.0),(159,'la consigna es que primero funcione como sea. y luego ir mejorando con ajax y demas cositas.','2014-01-29 13:15:18',0,'0000-00-00 00:00:00',0,3,16,2.0),(160,'marcador: agregar nombre tarea al titulo de la ventana explorador.','2014-01-29 13:16:53',1,'2014-02-24 15:49:41',0,3,13,1.5),(161,'navegar y anotar los errores y cosas q falntan aqui. usar la new list by isa.','2014-01-29 13:22:48',0,'0000-00-00 00:00:00',0,3,18,2.0),(162,'pedir libro regiones de cautividad.','2014-01-29 13:24:49',0,'0000-00-00 00:00:00',0,1,0,42.0),(163,'buscar trabajo supermercados, estacion de servicio, plan trabajar. plan de prestamos. haciendo baldosonses empresas grosas. trabajar con quien me llevo bien.','2014-01-29 13:27:20',0,'0000-00-00 00:00:00',0,3,21,0.0),(164,'admin local','2014-01-29 13:42:57',0,'0000-00-00 00:00:00',0,3,18,3.0),(165,'50 pesos pago facil.','2014-01-29 13:43:30',1,'2014-02-17 16:36:32',0,3,18,4.0),(166,'pasar servidor a ellos','2014-01-29 13:43:37',0,'0000-00-00 00:00:00',0,3,18,5.0),(167,'boton 6 propongo notas q estes en internet. excel o word. nose ','2014-01-29 13:45:01',0,'0000-00-00 00:00:00',0,3,16,3.0),(168,'este es lengua y literatura 3','2014-01-29 16:08:11',0,'0000-00-00 00:00:00',0,3,11,3.0),(169,'presupuestar sitio web. side cliente.','2014-01-29 16:40:46',0,'0000-00-00 00:00:00',0,3,18,6.0),(170,'mi sueño es tener plata para irme una semana al tigre con una mina.','2014-01-29 18:00:02',0,'0000-00-00 00:00:00',0,1,0,43.0),(171,'mirar facebook emilia lorecchio','2014-01-29 19:36:05',0,'0000-00-00 00:00:00',0,1,0,44.0),(172,'las cartulinas la tengo que tener antes del 10 de febrero. faltan 3 mas.','2014-01-30 10:55:53',0,'0000-00-00 00:00:00',0,3,11,4.0),(173,'listar de excel con posibles clientes.','2014-01-30 11:01:46',0,'0000-00-00 00:00:00',0,1,0,45.0),(174,'lista cliente y tareas clientes pendientes p que van a pedir en fururo posibles. excel','2014-01-30 11:28:28',0,'0000-00-00 00:00:00',0,1,0,46.0),(175,'el q esta prendido tiene otro color. verde. en tracker index lista.','2014-01-30 11:29:49',0,'0000-00-00 00:00:00',0,3,13,12.0),(176,'creo q habia quedado a 50 pesos la hora.','2014-01-30 11:52:50',0,'0000-00-00 00:00:00',0,3,11,5.0),(177,'meter lista de objetivos alzcanzar excel.','2014-01-30 14:30:07',0,'0000-00-00 00:00:00',0,1,0,47.0),(178,'lista de proyectos y tareas x proyecto.','2014-01-30 16:50:37',1,'2014-02-24 15:49:30',0,3,13,1.5),(179,'tomar un poco de sol.\r\n','2014-01-30 18:21:06',0,'0000-00-00 00:00:00',0,1,0,48.0),(180,'que el resumen se pueda editar la fecha.','2014-01-31 18:44:37',0,'0000-00-00 00:00:00',0,3,13,18.5),(181,'poner una madera o plancha de plastico para tapar la entrada de la puerta de la cocina.','2014-02-01 12:50:12',0,'0000-00-00 00:00:00',0,1,0,49.0),(182,'hacer una nueva cuenta del tracker. estado dig.','2014-02-01 12:52:57',0,'0000-00-00 00:00:00',0,3,13,15.0),(183,'tracker -> links not _blank. atras adelante.','2014-02-01 15:55:39',1,'2014-02-24 18:34:12',0,3,13,2.5),(184,'otro punto  a mi cinturon','2014-02-01 16:27:06',1,'2014-02-08 13:58:52',0,1,0,50.0),(185,'aparentemente tengo que bajar el sitio desde http://www.todohogarservicios.com.ar/ con su base db y bajarlo a localhost.','2014-02-01 18:55:16',0,'0000-00-00 00:00:00',0,3,25,0.0),(186,'pagofacil elecktrobit.','2014-02-03 14:12:40',0,'0000-00-00 00:00:00',0,3,25,1.0),(187,'BANCO CARTA AAAAAA AAAAAAAA AAAAAAAAAA AAAAA AAAAAA AAAAAAAAAAAA','2014-02-08 20:48:20',0,'0000-00-00 00:00:00',0,1,0,51.0),(188,'ver como limpiar el baño para hacer 2.','2014-02-09 18:53:32',1,'2014-02-28 22:01:33',0,1,0,52.0),(189,'nico: pasar recargos','2014-07-11 16:25:08',0,'0000-00-00 00:00:00',0,3,18,7.0),(190,'200 pesos falta cobrar','2014-07-11 16:27:45',0,'0000-00-00 00:00:00',0,3,18,8.0),(191,'reporte 2. restringir a solo numero. que se pueda ingresar solo numeros. no texto.','2014-07-11 22:12:52',0,'0000-00-00 00:00:00',0,3,18,9.0),(192,'white-space: nowrap; en los resultados de busqueda.','2014-02-12 09:25:15',0,'0000-00-00 00:00:00',0,3,18,10.0),(193,'http://localhost/colegiomg/admin/admin/1.php?op=0','2014-02-14 16:08:44',0,'0000-00-00 00:00:00',0,3,18,11.0),(194,'agregar al tracker de tareas cantidad de tareas sin resolver.','2014-02-15 19:07:54',1,'2014-02-24 15:49:09',0,3,13,1.5),(195,'cuando pongo mi fecha local en 2015 febrero, aparece: deuda años anteriores\r\n$40.00\r\nTOTAL general	  	  	  	\r\n$40.00','2015-07-15 20:22:16',0,'0000-00-00 00:00:00',0,3,18,12.0),(196,'pedir mi pedal bateria\r\n','2014-02-17 16:40:03',0,'0000-00-00 00:00:00',0,1,0,53.0),(198,'a mis tareas: boton mostrar textbox. por defecto aparece oculto para dar prioridad a leer la lista de tareas.','2014-02-17 21:57:34',1,'2014-02-24 15:49:00',0,3,13,1.5),(199,'http://localhost/elecktrobit/','2014-02-19 19:42:16',0,'0000-00-00 00:00:00',0,3,25,2.0),(200,'HACER un CD con todo lo ultimo .','2014-02-19 19:47:15',0,'0000-00-00 00:00:00',0,3,18,13.0),(201,'tracker de finanzas mostrar graficos en resultados de textos (cuando cae internet)','2014-02-19 20:33:49',0,'0000-00-00 00:00:00',0,3,14,1.0),(202,'hacer backup','2014-02-25 00:31:04',0,'0000-00-00 00:00:00',0,3,29,0.0),(203,'pasar presupuesto','2014-02-28 15:15:42',0,'0000-00-00 00:00:00',0,3,30,0.0),(204,'agregar categoria caja y ahorro','2014-02-28 20:05:40',0,'0000-00-00 00:00:00',0,3,14,2.0),(205,'comprar celular a cuotas con tarjeta patricia,','2014-02-28 21:59:59',0,'0000-00-00 00:00:00',0,1,0,54.0),(206,'poner cable tv en mi pieza y pagar trimestralmente\r\n','2014-02-28 22:01:08',0,'0000-00-00 00:00:00',0,1,0,55.0),(207,'comprar bloc notas','2014-02-28 22:03:04',0,'0000-00-00 00:00:00',0,1,0,56.0),(208,'backapear todo y subir a internet\r\n','2014-03-01 10:23:06',0,'0000-00-00 00:00:00',0,1,0,57.0),(209,'cobrar segun tiempo. ','2014-03-04 17:50:32',0,'0000-00-00 00:00:00',0,3,26,0.0),(210,'\r\n\r\n    Usuario de conectividad : 42982845@speedy\r\n    Contraseña : 18370127\r\n\r\n','2014-03-07 00:22:12',0,'0000-00-00 00:00:00',0,1,0,58.0),(211,'no permite ingresar numero negativos. -200.','2014-03-07 01:00:01',0,'0000-00-00 00:00:00',0,3,14,3.0),(212,'LOS GRAFICOS: MUESTRAN DE LA FECHA AL MOMENTO, PARA ATRAS EN LA HISTORIA. en graficos mensuales y anuales.','2014-03-10 12:58:28',0,'0000-00-00 00:00:00',0,3,14,4.0),(213,'PRIMERO LOS GRAFICOS Y DESPUES LAS TABLAS DE INGRESOS/GASTOS/AJUSTESCAJA.','2014-03-10 12:59:30',0,'0000-00-00 00:00:00',0,3,14,5.0),(214,'TABLAS\r\norden id-precio-descripcion-fecha. colores azul. y, uno gris, uno blanco.','2014-03-10 13:01:12',0,'0000-00-00 00:00:00',0,3,14,6.0),(215,'reporte n1: trae todo con \"no tiene deuda\"','2014-03-11 19:47:19',0,'0000-00-00 00:00:00',0,3,18,14.0),(216,'recargos x alumno. no por familia.\r\n','2014-03-11 19:49:29',0,'0000-00-00 00:00:00',0,3,18,15.0),(217,'recargo se suma $20 cada mes vencido. \r\n\r\nrecargo mes vencido + 20. 2 meses vencido, +20. 3 meses + 20.','2014-03-11 19:50:23',0,'0000-00-00 00:00:00',0,3,18,16.0),(218,'no aplicar recargo opcion no hacer recargo. ','2014-03-11 19:51:11',0,'0000-00-00 00:00:00',0,3,18,17.0),(219,'descuentos. hacer.','2014-03-11 19:51:22',0,'0000-00-00 00:00:00',0,3,18,18.0),(220,'backup sistema huella dactilar.','2014-03-11 19:52:43',0,'0000-00-00 00:00:00',0,3,38,0.0),(221,'Factura/recibo: desglose, que figure la suma del recargo.','2014-03-11 19:56:49',0,'0000-00-00 00:00:00',0,3,18,19.0),(222,'casos de error:\r\ngomez matias \r\ngomez micaela 271\r\n--\r\n508 idrecibo\r\nLopez matias\r\nlopez ezequiel\r\n10-2-2014\r\n\r\n\r\nlopez matias\r\ngomez micaela','2014-03-11 19:59:49',0,'0000-00-00 00:00:00',0,3,18,20.0),(223,'arranca lento la makina.','2014-03-11 20:09:29',0,'0000-00-00 00:00:00',0,3,39,0.0),(224,'Buscar por:\r\nMaria Agustina,\r\n  Acevedo\r\n.  DNI: 48.233.850 IDFamilia: 2 \r\nfalta curso','2014-03-11 20:14:13',0,'0000-00-00 00:00:00',0,3,18,21.0),(225,'que ezequiel pueda imprimir desde su movil.','2014-03-11 21:02:22',0,'0000-00-00 00:00:00',0,3,18,22.0),(226,'pagos: al buscar , esta mal la paginacion. ','2014-03-12 12:10:31',0,'0000-00-00 00:00:00',0,3,18,23.0),(227,'no funciona los recargos de deuda de años anteriores.','2014-03-12 15:29:32',0,'0000-00-00 00:00:00',0,3,18,24.0),(228,'no funciona deuda años anteriores en reportes y en recibos.','2014-03-12 16:08:43',0,'0000-00-00 00:00:00',0,3,18,25.0);
/*!40000 ALTER TABLE `mis_tareas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=354 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relojes`
--

LOCK TABLES `relojes` WRITE;
/*!40000 ALTER TABLE `relojes` DISABLE KEYS */;
INSERT INTO `relojes` VALUES (1,'2014-01-04 09:28:32',1,11),(2,'2014-01-04 09:28:35',0,11),(3,'2014-01-04 09:28:50',1,10),(4,'2014-01-04 09:28:54',0,10),(5,'2014-01-04 10:11:38',1,15),(6,'2014-01-04 10:11:40',0,15),(7,'2014-01-04 10:15:04',1,14),(8,'2014-01-04 10:15:07',0,14),(9,'2014-01-04 10:15:21',1,16),(10,'2014-01-04 10:15:25',0,16),(11,'2014-01-05 02:08:03',1,14),(12,'2014-01-05 02:16:28',0,14),(13,'2014-01-05 04:39:02',1,14),(14,'2014-01-05 05:04:37',0,14),(15,'2014-01-05 06:08:49',1,14),(16,'2014-01-05 06:42:32',0,14),(17,'2014-01-06 08:29:35',1,10),(18,'2014-01-06 11:00:04',0,10),(21,'2014-01-06 11:10:07',1,10),(22,'2014-01-06 11:10:26',0,10),(23,'2014-01-06 04:27:06',1,16),(24,'2014-01-06 04:29:30',0,16),(25,'2014-01-22 07:41:45',1,17),(26,'2014-01-22 08:53:02',0,17),(27,'2014-01-22 05:56:59',1,17),(28,'2014-01-22 05:57:05',0,17),(29,'2014-01-22 17:59:47',1,17),(30,'2014-01-22 18:00:34',0,17),(31,'2014-01-22 18:28:44',1,3),(32,'2014-01-22 18:29:08',0,3),(33,'2014-01-22 18:29:21',1,3),(34,'2014-01-22 18:30:00',1,11),(35,'2014-01-22 18:30:03',0,11),(36,'2014-01-22 18:30:05',1,11),(37,'2014-01-22 18:30:06',0,11),(38,'2014-01-22 18:30:07',1,11),(39,'2014-01-22 18:30:08',0,11),(40,'2014-01-22 18:32:40',1,11),(41,'2014-01-22 19:50:18',0,11),(42,'2014-01-23 14:55:52',1,11),(43,'2014-01-23 16:40:07',0,11),(44,'2014-01-28 16:18:47',1,11),(45,'2014-01-28 17:10:11',0,11),(46,'2014-01-28 17:10:17',1,11),(47,'2014-01-28 18:38:18',0,11),(48,'2014-01-28 18:38:31',1,11),(49,'2014-01-28 19:32:46',0,11),(50,'2014-01-29 10:41:51',1,11),(51,'2014-01-29 11:53:16',0,11),(52,'2014-01-29 11:53:23',1,11),(53,'2014-01-29 12:35:03',0,11),(54,'2014-01-29 12:41:29',1,11),(55,'2014-01-29 13:05:39',0,11),(56,'2014-01-29 13:19:20',1,17),(57,'2014-01-29 16:00:45',0,17),(58,'2014-01-29 16:08:14',1,11),(59,'2014-01-29 16:13:52',0,11),(60,'2014-01-29 16:15:18',1,11),(61,'2014-01-29 17:30:45',0,11),(62,'2014-01-29 19:39:22',1,13),(89,'2014-01-29 20:03:54',1,13),(113,'2014-01-29 20:22:25',0,13),(120,'2014-01-29 10:30:23',1,22),(121,'2014-01-29 20:30:38',0,22),(122,'2014-01-29 20:31:06',1,22),(123,'2014-01-29 20:31:12',0,22),(124,'2014-01-29 20:31:42',1,22),(129,'2014-01-29 20:58:51',0,22),(130,'2014-01-30 10:41:52',1,12),(131,'2014-01-30 13:24:12',0,12),(132,'2014-01-30 16:14:37',1,12),(133,'2014-01-30 16:14:44',0,12),(134,'2014-01-30 16:14:48',1,12),(135,'2014-01-30 17:15:30',0,12),(136,'2014-01-30 17:36:48',1,12),(137,'2014-01-30 18:04:57',0,12),(138,'2014-01-31 11:47:23',1,12),(139,'2014-01-31 14:15:52',0,12),(140,'2014-01-31 18:10:22',1,12),(141,'2014-01-31 19:00:32',0,12),(142,'2014-01-31 19:15:49',1,12),(143,'2014-01-31 20:09:56',0,12),(144,'2014-01-31 20:12:19',1,12),(145,'2014-01-31 20:15:37',0,12),(146,'2014-02-01 15:41:57',1,16),(147,'2014-02-01 18:11:33',1,25),(148,'2014-02-01 18:11:38',0,25),(149,'2014-02-01 18:12:36',1,25),(150,'2014-02-01 19:21:02',0,25),(151,'2014-02-03 11:49:33',1,12),(152,'2014-02-03 11:50:37',0,12),(153,'2014-02-03 13:57:59',1,25),(154,'2014-02-03 14:11:38',0,25),(155,'2014-02-03 17:16:57',1,25),(156,'2014-02-03 18:17:19',0,25),(157,'2014-02-01 18:50:49',0,16),(158,'2014-02-04 14:51:10',1,16),(159,'2014-02-04 16:08:21',0,16),(160,'2014-02-04 16:12:36',1,12),(161,'2014-02-04 17:58:55',0,12),(162,'2014-02-05 13:31:07',1,12),(163,'2014-02-05 15:17:18',0,12),(164,'2014-02-08 19:02:51',1,12),(165,'2014-02-08 19:32:35',0,12),(166,'2014-02-08 19:32:41',1,12),(167,'2014-02-08 19:42:32',0,12),(168,'2014-02-08 19:43:29',1,11),(169,'2014-02-08 20:16:55',0,11),(170,'2014-02-09 19:00:26',1,12),(171,'2014-02-09 19:52:30',0,12),(172,'2014-02-09 19:52:36',1,12),(173,'2014-02-09 19:54:18',0,12),(174,'2014-02-10 16:41:10',1,18),(175,'2014-02-10 16:44:28',0,18),(176,'2014-02-10 16:44:34',1,18),(177,'2014-02-10 17:41:39',0,18),(178,'2014-02-10 18:57:50',1,18),(179,'2014-02-10 20:47:55',0,18),(180,'2014-02-11 11:03:33',1,18),(181,'2014-02-11 11:50:52',0,18),(182,'2014-02-11 15:59:59',1,18),(183,'2014-02-11 16:33:46',0,18),(184,'2014-02-11 20:29:50',1,18),(185,'2014-02-11 22:45:52',0,18),(186,'2014-02-12 00:24:56',1,18),(187,'2014-02-12 01:07:20',0,18),(188,'2014-02-12 09:18:52',1,18),(189,'2014-02-12 10:02:52',0,18),(190,'2014-02-12 18:11:15',1,18),(191,'2014-02-12 19:59:24',0,18),(192,'2014-02-13 17:13:09',1,18),(193,'2014-02-13 17:38:36',0,18),(194,'2014-02-14 13:21:04',1,18),(195,'2014-02-14 14:09:03',0,18),(196,'2014-02-14 16:08:26',1,18),(197,'2014-02-14 18:21:48',0,18),(198,'2014-02-14 19:20:39',1,18),(199,'2014-02-14 20:21:49',0,18),(200,'2014-02-15 17:20:14',1,18),(201,'2014-02-15 17:30:56',0,18),(202,'2014-02-15 17:31:03',1,13),(203,'2014-02-15 17:43:23',0,13),(204,'2014-02-15 17:43:34',1,13),(205,'2014-02-15 17:44:42',0,13),(206,'2014-02-15 17:44:45',1,13),(207,'2014-02-15 18:24:20',0,13),(208,'2014-02-15 18:36:06',1,13),(209,'2014-02-15 18:39:04',0,13),(210,'2014-02-15 18:39:29',1,13),(211,'2014-02-15 18:39:36',0,13),(212,'2014-02-15 18:44:04',1,13),(213,'2014-02-15 18:44:09',0,13),(214,'2014-02-15 18:44:17',1,13),(215,'2014-02-15 18:44:19',0,13),(216,'2014-02-15 18:44:21',1,13),(217,'2014-02-15 18:44:26',0,13),(218,'2014-02-15 18:44:29',1,13),(219,'2014-02-15 18:44:34',0,13),(220,'2014-02-15 18:56:51',1,18),(221,'2014-02-15 19:06:51',1,13),(222,'2014-02-15 19:17:27',0,18),(223,'2014-02-15 19:26:34',1,11),(224,'2014-02-15 19:26:39',0,11),(225,'2014-02-15 19:26:40',1,11),(226,'2014-02-15 19:26:45',0,11),(227,'2014-02-15 19:27:16',1,11),(228,'2014-02-15 19:31:11',0,13),(229,'2014-02-15 19:31:14',1,13),(230,'2014-02-15 19:31:19',0,13),(231,'2014-02-15 19:31:26',1,13),(232,'2014-02-15 19:33:18',0,13),(233,'2014-02-15 19:33:46',1,13),(234,'2014-02-15 19:33:48',0,13),(235,'2014-02-15 19:34:11',0,11),(236,'2014-02-15 19:35:42',1,13),(237,'2014-02-15 19:42:00',0,13),(238,'2014-02-15 19:49:57',1,13),(239,'2014-02-15 20:05:51',0,13),(240,'2014-02-16 21:00:24',1,13),(241,'2014-02-16 21:00:54',0,13),(242,'2014-02-16 21:01:06',1,13),(244,'2014-02-16 21:01:24',0,13),(246,'2014-02-16 21:07:10',1,17),(247,'2014-02-16 21:07:23',0,17),(248,'2014-02-16 21:09:13',1,13),(249,'2014-02-16 21:38:57',1,17),(250,'2014-02-16 21:39:07',0,17),(251,'2014-02-16 21:39:11',1,17),(252,'2014-02-16 21:39:29',0,17),(253,'2014-02-16 21:45:44',0,13),(254,'2014-02-17 19:07:20',1,13),(255,'2014-02-17 19:59:22',0,13),(256,'2014-02-17 19:59:24',1,13),(257,'2014-02-17 21:13:03',0,13),(258,'2014-02-17 21:13:06',1,13),(259,'2014-02-17 21:20:13',0,13),(260,'2014-02-18 16:09:21',1,13),(261,'2014-02-18 16:35:53',0,13),(262,'2014-02-19 16:21:45',1,13),(263,'2014-02-19 16:43:16',0,13),(264,'2014-02-19 18:38:43',1,13),(265,'2014-02-19 19:04:26',0,13),(266,'2014-02-19 19:21:37',1,13),(267,'2014-02-19 19:25:19',0,13),(268,'2014-02-21 15:54:46',1,13),(269,'2014-02-21 16:23:39',0,13),(270,'2014-02-24 12:06:04',1,13),(271,'2014-02-24 12:14:28',0,13),(272,'2014-02-24 15:52:20',1,13),(282,'2014-02-24 18:29:15',0,13),(283,'2014-02-24 20:31:47',1,11),(284,'2014-02-24 20:31:49',0,11),(285,'2014-02-24 20:37:06',1,13),(286,'2014-02-24 21:28:25',0,13),(287,'2014-02-24 21:36:48',1,29),(288,'2014-02-24 22:26:38',0,29),(289,'2014-02-24 23:56:03',1,16),(290,'2014-02-25 00:09:03',0,16),(291,'2014-02-25 00:10:39',1,29),(292,'2014-02-25 00:10:46',0,29),(293,'2014-02-25 00:10:50',1,29),(294,'2014-02-25 01:00:56',0,29),(295,'2014-02-25 11:06:35',1,13),(296,'2014-02-25 13:12:08',0,13),(297,'2014-02-25 14:49:38',1,13),(298,'2014-02-25 14:50:51',0,13),(299,'2014-02-25 14:54:53',1,13),(300,'2014-02-25 15:10:25',0,13),(301,'2014-02-25 15:14:17',1,13),(302,'2014-02-25 15:15:38',0,13),(303,'2014-02-25 15:15:45',1,13),(304,'2014-02-25 15:17:10',0,13),(305,'2014-02-25 15:17:13',1,13),(306,'2014-02-25 15:24:28',0,13),(307,'2014-02-25 15:25:21',1,35),(308,'2014-02-25 15:25:25',0,35),(309,'2014-02-25 15:26:04',1,35),(310,'2014-02-25 15:29:36',0,35),(311,'2014-02-28 15:16:18',1,30),(312,'2014-02-28 15:16:29',0,30),(313,'2014-02-28 15:22:57',1,30),(314,'2014-02-28 15:33:08',0,30),(315,'2014-02-28 15:35:41',1,26),(316,'2014-02-28 15:39:56',0,26),(317,'2014-03-04 15:44:23',1,26),(318,'2014-03-04 15:45:56',0,26),(319,'2014-03-04 17:36:50',1,26),(320,'2014-03-04 18:02:30',0,26),(321,'2014-03-05 18:06:51',1,26),(322,'2014-03-05 18:54:01',0,26),(323,'2014-03-06 10:26:49',1,26),(324,'2014-03-06 10:34:05',0,26),(325,'2014-03-06 10:34:11',1,26),(326,'2014-03-06 11:47:37',0,26),(327,'2014-03-06 11:48:02',1,26),(328,'2014-03-06 12:11:20',0,26),(329,'2014-03-06 12:25:59',1,26),(330,'2014-03-06 13:15:38',0,26),(331,'2014-03-06 17:15:28',1,26),(332,'2014-03-06 18:11:07',0,26),(333,'2014-03-10 20:07:39',1,26),(334,'2014-03-10 20:31:31',0,26),(335,'2014-03-10 20:35:04',1,26),(336,'2014-03-10 21:08:14',0,26),(337,'2014-03-11 18:48:07',1,26),(338,'2014-03-11 19:32:23',0,26),(339,'2014-03-11 19:45:06',1,18),(340,'2014-03-11 20:55:40',0,18),(341,'2014-03-12 10:44:30',1,18),(342,'2014-03-12 13:14:57',0,18),(343,'2014-03-12 15:30:40',1,18),(344,'2014-03-12 16:40:42',0,18),(345,'2014-03-12 16:53:36',1,26),(346,'2014-03-12 17:17:25',0,26),(347,'2014-03-12 19:15:41',1,26),(348,'2014-03-12 20:35:49',0,26),(349,'2014-03-13 10:57:27',1,26),(350,'2014-03-13 11:45:30',0,26),(351,'2014-03-13 12:14:07',1,26),(352,'2014-03-13 13:20:02',0,26),(353,'2014-03-13 16:55:24',1,18);
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` VALUES (10,'Cartulina 1 lengua y literatura','10','2014-02-04',50,1,0),(11,'Cartulina 2','20','2014-02-10',50,1,0),(12,'CARTULINA 3','10','2014-02-10',50,1,0),(13,'Tracker','20','2014-03-01',50,2,0),(14,'Finanzas','50','0000-00-00',50,2,0),(15,'Mis tareas','50','0000-00-00',50,2,0),(16,'R2D2','50','0000-00-00',50,2,0),(17,'recreo','10:00:00','2014-03-01',50,0,0),(18,'ADMIN COLEGIO','','2014-03-01',50,1,0),(19,'Reparacion notebook alejandra','','2014-03-31',50,1,0),(20,'Labs: formularios AJAX','','0000-00-00',50,2,0),(21,'Buscar trabajo','','0000-00-00',50,3,0),(22,'pruebas tracker old','','0000-00-00',50,2,0),(23,'cliente jesus','','0000-00-00',0,5,0),(24,'reparacion notebook patricia','','2014-03-15',50,4,0),(25,'ElecktroBit','','2014-04-01',50,3,0),(26,'cartulina 4','6','2014-02-21',50,1,0),(27,'sitio web colegio','50','2014-05-01',50,1,0),(28,'reportes admin ezequiel','','2014-04-01',50,1,0),(29,'generador sitios web','10','2014-02-28',0,2,0),(30,'candelabro oro','','0000-00-00',0,6,0),(35,'trackersito','1','0000-00-00',0,2,0),(36,'antivirus','','0000-00-00',0,3,0),(37,'the matrix','','0000-00-00',0,2,0),(38,'huella dactilar','','0000-00-00',0,1,0),(39,'makina ezequiel','','0000-00-00',0,1,0),(40,'makina Nico','','0000-00-00',0,1,0),(41,'reportes mensuales - ADMIN','','0000-00-00',0,1,0),(42,'valeria  - facebook','','0000-00-00',0,6,0);
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

-- Dump completed on 2014-03-13 18:02:29
