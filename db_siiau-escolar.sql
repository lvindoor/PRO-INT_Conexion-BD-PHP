-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para db_siiau-escolar
CREATE DATABASE IF NOT EXISTS `db_siiau-escolar` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_siiau-escolar`;

-- Volcando estructura para tabla db_siiau-escolar.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` int(10) unsigned NOT NULL DEFAULT '0',
  `nombre` text NOT NULL,
  `correo_electronico` text,
  `contraseña` text NOT NULL,
  `genero` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_siiau-escolar.registros: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` (`id`, `codigo`, `nombre`, `correo_electronico`, `contraseña`, `genero`) VALUES
	(1, 1234567890, 'Karime Daniela Pato Juarez', 'pato.cosmico@gmail.com', 'patitofeo', 'mujer'),
	(2, 987654321, 'Miguel Alejandro Perez Sombrero', 'mapita.narco@gmail.com', '123abc', 'hombre');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
