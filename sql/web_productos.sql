CREATE DATABASE  IF NOT EXISTS `web` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `web`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: web
-- ------------------------------------------------------
-- Server version	8.1.0

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
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `codigo_productos` int NOT NULL AUTO_INCREMENT,
  `juego` varchar(45) NOT NULL,
  `caracteristicas` text,
  `año_lanzamiento` int DEFAULT NULL,
  `precio` int DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`codigo_productos`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Skull and bones','juego de piratas ambientado en un mundo piratil donde tu controlas tu propio barco, seras capaz de aventurarte en estas aguas',2024,60,'https://i.pinimg.com/564x/bc/71/16/bc71167839a98c6280d8d9f99ecb953c.jpg'),(2,'wolfenstein','juego de disparos frenetico ambientado en un mundo donde los nazis ganan la guerra. Unete a  Blazkowicz y revienta a esos fascistas de la esvastica',2009,10,'https://i.pinimg.com/564x/bc/71/16/bc71167839a98c6280d8d9f99ecb953c.jpg'),(3,'Wolfeinstein: the new order','Wolfenstein: The New Order para Xbox 360 es el retorno de la saga de id Software, de la mano de Bethesda y desarrollado por Machine Games. Este Wolfenstein a medio camino entre dos generaciones nos sitúa en un mundo alternativo en el que los nazis han ganado la Segunda Guerra Mundial. Nos encontramos ahora en el año 1960, el mundo está dominado por el Tercer Reich, y B.J. Blazkowicz, 20 años después, tendrá que intentar acabar con el dominio de la esvástica.',2014,10,'https://i.pinimg.com/564x/03/60/8a/03608a6eb4f93b84e006b201c3b9bee7.jpg'),(4,'wolfeinstein: the old blood','Wolfenstein: The Old Blood para Xbox One, una expansión independiente de Wolfenstein: The New Order que servirá como precuela de este, por lo que se situará antes de los hechos ocurridos en el juego principal. Su historia nos llevará al año 1946, cuando los nazis están a punto de ganar la Segunda Guerra Mundial. En un intento por cambiar las tornas a favor de los aliados, B.J. Blazkowicz se embarcará en una misión de dos partes en lo más profundo de Baviera.',2015,10,'https://i.pinimg.com/564x/e9/13/c5/e913c529b314047082d83a1f86c48495.jpg'),(5,'Wolfenstein II: The New Colossus','Wolfestein 2: The New Colossus es un videojuego de disparos en primera persona o “shooter” desarrollado por el estudio machine games y distribuido por bethesda para las plataformas de PS4, PC y Xbox One.',2017,10,'https://i.pinimg.com/564x/ea/ce/a2/eacea21b3b0d2cceeddf4f7a47ea1a86.jpg'),(6,'wolfeintein:youngblood','Wolfenstein: Youngblood es un nuevo videojuego de acción en primera persona de la veterana saga Wolfenstein. Situado 19 años después de la revolución norteamericana contra las fuerzas nazis vista en The New Colossus, Youngblood seguirá la historia de Jess y Soph, las hijas gemelas de B. J. Blazkowicz, que deberán buscar a su padre entre uno de los bastiones de los nazis. Nos invita a sobrevivir en la década de los ochenta en este mundo ficticio, concretamente en París, centrándose en convertirse en una experiencia cooperativa más desenfadada que nunca en PC, PS4, Xbox One y Switch.',2019,30,'https://i.pinimg.com/564x/f1/e4/91/f1e4911af3912ea9ae319698b574f9ea.jpg'),(7,'Final Fantasy VII','Uno de los juegos de rol más popular de su tiempo, que dio a conocer el género a muchos usuarios europeos, llega ahora a ordenador con algunas mejoras y novedades. Una aventura épica de Cloud, Barrett, Tifa, Aeris y compañía contra Shinra y Sephiroth. Combates por turnos, fantasía, un mundo lleno de secretos y secuencias cinemáticas que marcaron época en uno de los juegos más queridos de todos los tiempos.',1997,7,'https://i.pinimg.com/564x/d4/59/db/d459db092ee4353a2320d1e41f39b66c.jpg'),(8,'Final Fantasy VIII','Final Fantasy VIII es una adaptación a PC del mismo título de PlayStation de 1999, que nos vuelve a contar la historia de Squall Leonheart y su grupo de mercenario SeeD para evitar que Ultimecia comprima el tiempo. Esta versión para PC no es la misma que la del año 2000, sino que cuenta con algunas mejoras gráficas respecto al original, aunque no puede considerarse una',1999,9,'https://i.pinimg.com/564x/48/5f/44/485f449aa0fcb839f3a1a5958531559c.jpg'),(9,'Final Fantasy IX','Adaptación del noveno capítulo de la saga de rol Final Fantasy para teléfonos móviles y tablets. Manteniendo la historia de Yitán y sus compañeros de aventuras, y contando con traducción al castellano, la versión para iPhone y Android, incluye un nuevo control táctil, así como una remasterización de sus gráficos y modelados de personajes. Además, la app cuenta con una serie de recursos opcionales en forma de ayudas y modificaciones de partida.',2001,14,'https://i.pinimg.com/564x/17/96/bb/1796bbd9c958e707e58a2e30e1df0907.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-20 13:57:54
