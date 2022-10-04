-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.9.2-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para escuela_futbol_club
CREATE DATABASE IF NOT EXISTS `escuela_futbol_club` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `escuela_futbol_club`;

-- Volcando estructura para tabla escuela_futbol_club.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_administrador` int(15) NOT NULL,
  `id_cargo` int(15) NOT NULL,
  `id_mensualidad` int(15) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `fechaNacimiento` datetime DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `ciudad` varchar(15) DEFAULT NULL,
  `departamento` varchar(15) DEFAULT NULL,
  `numero` varchar(50) DEFAULT '',
  `edad` int(2) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_administrador`,`id_cargo`,`id_mensualidad`) USING BTREE,
  KEY `FK_cargo` (`id_cargo`),
  KEY `FK_mensualidad` (`id_mensualidad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla escuela_futbol_club.administrador: 1 rows
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` (`id_administrador`, `id_cargo`, `id_mensualidad`, `nombre`, `apellido`, `fechaNacimiento`, `direccion`, `ciudad`, `departamento`, `numero`, `edad`, `pass`) VALUES
	(1005405303, 1, 1005405303, 'Daniel Andres', 'Patiño Rincon', '2022-09-01 14:18:46', 'Ave.31#60-35', 'Bello', 'Antioquia', '3135976568', 21, 'admin');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Volcando estructura para tabla escuela_futbol_club.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(15) NOT NULL,
  `nombreCargo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla escuela_futbol_club.cargo: 3 rows
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` (`id_cargo`, `nombreCargo`, `descripcion`) VALUES
	(1, 'Administrador', 'Manejo total de la plataforma'),
	(2, 'Entrenador', 'Manejo modera'),
	(3, 'Jugador', 'Visualizar');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;

-- Volcando estructura para tabla escuela_futbol_club.entrenador
CREATE TABLE IF NOT EXISTS `entrenador` (
  `id_entrenador` int(15) NOT NULL,
  `id_administrador` int(15) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `fechaNacimiento` datetime DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `ciudad` varchar(15) DEFAULT NULL,
  `departamento` varchar(15) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `estudiosRealizados` varchar(10) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_administrador`,`id_entrenador`) USING BTREE,
  KEY `FK_administrador` (`id_administrador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla escuela_futbol_club.entrenador: 2 rows
/*!40000 ALTER TABLE `entrenador` DISABLE KEYS */;
INSERT INTO `entrenador` (`id_entrenador`, `id_administrador`, `nombre`, `apellido`, `fechaNacimiento`, `direccion`, `ciudad`, `departamento`, `numero`, `edad`, `estudiosRealizados`, `pass`) VALUES
	(1024355154, 1005405303, 'Ferney', 'Castro', '1970-07-23 14:47:21', 'Cr.45#35-10', 'Medellin', 'Antioquia', '3156548595', 50, 'Deportes', '1024355154'),
	(725948574, 1005405303, 'Juan Sebastian', 'Rodriguez', '2000-02-14 14:50:18', 'Av.35#15-10', 'Bello', 'Antioquia', '3145692515', 22, 'Deportes', '725948574');
/*!40000 ALTER TABLE `entrenador` ENABLE KEYS */;

-- Volcando estructura para tabla escuela_futbol_club.jugador
CREATE TABLE IF NOT EXISTS `jugador` (
  `id_jugador` int(15) NOT NULL,
  `id_entrenador` int(15) NOT NULL,
  `id_nivel_jugador` int(15) NOT NULL,
  `id_mensualidad` int(15) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `fechaNacimiento` datetime DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `ciudad` varchar(15) DEFAULT NULL,
  `departamento` varchar(15) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_jugador`,`id_nivel_jugador`,`id_entrenador`,`id_mensualidad`) USING BTREE,
  KEY `FK_entrenador` (`id_entrenador`),
  KEY `FK_nivel_jugador` (`id_nivel_jugador`),
  KEY `id_mensualidad` (`id_mensualidad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla escuela_futbol_club.jugador: 2 rows
/*!40000 ALTER TABLE `jugador` DISABLE KEYS */;
INSERT INTO `jugador` (`id_jugador`, `id_entrenador`, `id_nivel_jugador`, `id_mensualidad`, `nombre`, `apellido`, `fechaNacimiento`, `direccion`, `ciudad`, `departamento`, `numero`, `edad`, `tipo`, `pass`) VALUES
	(1043961301, 1024355154, 1043961301, 1043961301, 'Manuela', 'Rincon', '2004-07-07 14:53:09', 'CL.100#35-10', 'Medellin', 'Antioquia', '3105496510', 18, 'VOL', '1043961301'),
	(1017223958, 1024355154, 1017223958, 1017223958, 'Eduardo', 'Restrepo', '2003-08-15 14:53:09', 'CL.45#24-35', 'Medellin', 'Antioquia', '3105496510', 18, 'VOL', '1043961301');
/*!40000 ALTER TABLE `jugador` ENABLE KEYS */;

-- Volcando estructura para tabla escuela_futbol_club.mensualidad
CREATE TABLE IF NOT EXISTS `mensualidad` (
  `id_mensualidad` int(15) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `monto` float DEFAULT NULL,
  PRIMARY KEY (`id_mensualidad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla escuela_futbol_club.mensualidad: 2 rows
/*!40000 ALTER TABLE `mensualidad` DISABLE KEYS */;
INSERT INTO `mensualidad` (`id_mensualidad`, `estado`, `fecha`, `monto`) VALUES
	(1043961301, 1, '2022-08-01 14:57:01', 50000),
	(1017223958, 0, '2022-08-01 14:57:01', 0);
/*!40000 ALTER TABLE `mensualidad` ENABLE KEYS */;

-- Volcando estructura para tabla escuela_futbol_club.nivel_jugador
CREATE TABLE IF NOT EXISTS `nivel_jugador` (
  `id_nivel_jugador` int(15) NOT NULL,
  `rendimientoFisico` varchar(20) DEFAULT NULL,
  `actitudes` varchar(500) DEFAULT NULL,
  `desempeño` varchar(20) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_nivel_jugador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla escuela_futbol_club.nivel_jugador: 2 rows
/*!40000 ALTER TABLE `nivel_jugador` DISABLE KEYS */;
INSERT INTO `nivel_jugador` (`id_nivel_jugador`, `rendimientoFisico`, `actitudes`, `desempeño`, `observaciones`) VALUES
	(1043961301, '5.0', 'Volante', '77%', 'ninguna'),
	(1017223958, '3.0', 'Volante', '50%', 'ninguna');
/*!40000 ALTER TABLE `nivel_jugador` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
