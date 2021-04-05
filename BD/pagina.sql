-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pagina
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `logros`
--

DROP TABLE IF EXISTS `logros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `programa_id` int DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(50) DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `programa_logro_idx` (`programa_id`),
  CONSTRAINT `programa_logro` FOREIGN KEY (`programa_id`) REFERENCES `programa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logros`
--

LOCK TABLES `logros` WRITE;
/*!40000 ALTER TABLE `logros` DISABLE KEYS */;
INSERT INTO `logros` VALUES (1,1,'Competición de programación','Durante el ciclo de competencias regionales del Gran Premio México de la Región México de la Competición Internacional Universitaria ACM de Programación (ICPC-ACM) en 2017, un equipo conformado por alumnos de ingeniería en sistemas computacionales logró posicionarse en tercer lugar a nivel sede estatal durante las dos fechas del ciclo anual. El equipo estuvo conformado por: Luis Iván Flores Vázquez, Julio César Santibáñez Valles y Noé Zapata Martínez, donde el docente Héctor Alejandro Acuña Cid fue coach del equipo.','img/sistemas/Logros/Reconocimiento 2017.jpg',0,0),(2,1,'','','img/sistemas/Logros/Certificación ISO.jpeg',0,0),(3,1,'Eliminatoria','En el año 2015 equipos de la UPIIZ de ingeniería mecatrónica e ingeniería en sistemas computacionales clasificaron a la eliminatoria regional de México y Centroamérica, celebrada en el campus de la ITESO en Guadalajara, Jalisco. Lograron obtener cupo gracias a los puntos acumulados donde representaron al estado de Zacatecas a nivel Centroamérica.','img/sistemas/Logros/Equipo.jpg',0,0),(4,1,'','','img/sistemas/Logros/Equipo2.jpg',0,0),(5,1,'Entrenamiento para Programación Competitiva','En enero del año 2020, estudiantes de ing. en sistemas como miembros del club de Algoritmia de la UPIIZ participaron en el Invierno de Entrenamiento para Programación Competitiva en la Escuela Superior de Cómputo del IPN en la Ciudad de México, donde durante 5 días se celebraron sesiones de tópicos avanzados para resolución de problemas además de concursos diarios como práctica.','img/sistemas/Logros/Equipo3.jpg',0,0),(6,3,'Premio Estatal de la Juventud 2015. Primer Lugar en Categoría Mérito Campesino','Caracterización del biodiesel obtenido a partir de aceite de Higuerilla (Ricinus communis L.) en Tlaltenango, Zac.','img/ambiental/Logros/logro1.jpg',0,0),(7,3,'Primer lugar en 4to Encuentro de Jóvenes Investigadores en el Estado de Zacatecas 2016','Pretratamiento físico y fisicoquímico de la paja de frijol para la producción de biogás.','img/ambiental/Logros/logro2.jpg',0,0),(8,3,'Primer lugar en tesis de licenciatura en la edición XXVI de los Certámenes Nacionales de Tesis 2015-2017 en la categoría energías limpias.','Producción de biogás a partir de paja de frijol sometida a diferentes pretratamientos.','img/ambiental/Logros/logro3.jpg',0,0),(9,3,'Segundo lugar en el 3er. Encuentro de Jóvenes Investigadores en la Región 2015','Caracterización del biodiesel obtenido a partir de aceite de Higuerilla (Ricinus communis L.) en Tlaltenango, Zac.','',0,0),(10,3,'Primer lugar en el 3er. Encuentro de Jóvenes Investigadores en el Estado de Zacatecas 2015.','Caracterización del biodiesel obtenido a partir de aceite de Higuerilla (Ricinus communis L.) en Tlaltenango, Zac.','',0,0),(11,3,'Tercer lugar en el concurso de Tesis Nivel Licenciatura del Grupo de Investigación en Electroquímica 2018.','Determinación de plomo en suelo y Brickellia veronicifolia por Voltamperometría de Redisolución Anódica.','img/ambiental/Logros/logro6.jpg',0,0),(12,3,'Premio a la Mejor Tesis de Ingeniería Ambiental 2018 por el Colegio de Ingenieros Ambientales 2018.','Factibilidad del Reciclaje de Residuos de Aceite Vegetal para la Producción de Biodiésel.','img/ambiental/Logros/logro7.jpg',0,0),(13,3,'Primer lugar en el concurso de cartel por The Mexican Hydrogen Society 2020','Ganadora del primer lugar en el concurso de cartel realizado por The Mexican Hydrogen Society con su investigación del empleo de celdas de combustible microbianas para generar energía y limpiar el agua contaminada con hidrocarburos (residuos de los aceites lubricantes usados).','img/ambiental/Logros/logro8.jpg',0,0),(14,3,'Publicación en la Gaceta IPN 2020 sobre el proyecto de uso de celdas microbianas de barro para limpieza de agua y producción de energía.','Investigación basada en el empleo de celdas de combustible microbianas para generar energía y limpiar el agua contaminada con hidrocarburos (residuos de los aceites lubricantes usados).','img/ambiental/Logros/logro9.jpg',0,0),(15,3,'Primer lugar en el concurso de carteles de investigación. 8vo Congreso Nacional de Ciencias Químico-Biológicas','Remoción de Elementos Altamente Tóxicos en Medios Acuosos mediante el MOF-5.','img/ambiental/Logros/logro10.jpg',0,0),(16,3,'Premio Estatal de la Juventud 2017, categoría Mérito Campesino.','Reconocimiento “Premio Estatal de la Juventud 2017, categoría mérito Campesino” por un biofertilizante que desarrolló como trabajo final al concluir su bachillerato, mismo que cursó por medio de estancia en el Centro de Investigación y de Estudios Avanzados (Cinvestav), y que respondía al problema de uso de químicos de alto impacto ambiental.','img/ambiental/Logros/logro11.jpg',0,0),(17,3,'Premio Estatal de la Juventud 2020, categoría Medio Ambiente','\"Árboles por Alimento\" es el programa que Jaime Vladimir implementó hace siete meses después de que iniciara el confinamiento, el cual le ha permitido apoyar a más de 500 familias vulnerables, no sólo con despensas sino también con ropa y cobijas, en varios municipios de la entidad. Por esta labor social que el alumno de la carrera de Ingeniería Ambiental emprendió, el Gobierno de Zacatecas lo reconoció con el Premio Estatal de la Juventud 2020.','img/ambiental/Logros/logro12.jpg',0,0),(18,3,'Premio Juvenil Hagamos Historia 2020, categoría Desarrollo Rural en el Municipio de Guadalupe.','Diego Zúñiga es el coordinador del proyecto “Árboles por Alimento” en el municipio de Guadalupe, donde más de 150 familias en varios municipios de Zacatecas se han beneficiado. Este proyecto cumple dos propósitos, el primero cubrir la parte ambiental sembrando los árboles donados y el segundo es ayudar a personas que verdaderamente lo necesitan.','img/ambiental/Logros/logro13.jpg',0,0),(19,1,'Test','Prueba de ingresar datos a la BD sin imagen',NULL,NULL,NULL),(20,4,'Test 2','Prueba de ingresar datos a la BD con imagen','img/metalurgica/Logros/LOGO.png',NULL,NULL),(21,5,'Test3','Prueba 3 sin imagen',NULL,NULL,NULL),(22,2,'test 4','prueba 4 no imagen',NULL,NULL,NULL),(23,2,'test 4','prueba 4 no imagen',NULL,NULL,NULL),(24,2,'test 5','prueba 5 no imagen',NULL,NULL,NULL),(25,2,'test 6','prueba 6 no imagen',NULL,NULL,NULL),(26,4,'test 7','Prueba 7 no imagen',NULL,NULL,NULL);
/*!40000 ALTER TABLE `logros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (1,'Sistemas Computacionales'),(2,'Alimentos'),(3,'Ambiental'),(4,'Metalurgica'),(5,'Mecatronica');
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-05 13:56:53
