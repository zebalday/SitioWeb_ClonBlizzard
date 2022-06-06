-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-06-2022 a las 22:56:00
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bleezzard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id_pas` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pas` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_pas`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pas`, `nom_pas`) VALUES
(1, 'Chile'),
(2, 'Argentina'),
(3, 'Brasil'),
(4, 'Paraguay'),
(5, 'Uruguay'),
(6, 'Ecuador'),
(7, 'Colombia'),
(8, 'México'),
(9, 'El Salvador'),
(10, 'Panamá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
CREATE TABLE IF NOT EXISTS `pregunta` (
  `id_pre` int(11) NOT NULL AUTO_INCREMENT,
  `val_pre` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_pre`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pre`, `val_pre`) VALUES
(1, '¿Cuál es tu color favorito?'),
(2, '¿Cuál es el auto de tus sueños?'),
(3, '¿Cuál fue el nombre de tu primera mascota?'),
(4, '¿Qué querías ser de pequeño?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_usu` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `apl_usu` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `dia_usu` int(11) NOT NULL,
  `mes_usu` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `aio_usu` int(11) NOT NULL,
  `cor_usu` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `con_usu` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `pas_usu` int(11) NOT NULL,
  `pre_usu` int(11) NOT NULL,
  `res_usu` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_usu`),
  UNIQUE KEY `cor_usu` (`cor_usu`),
  KEY `pas_usu` (`pas_usu`),
  KEY `pre_usu` (`pre_usu`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nom_usu`, `apl_usu`, `dia_usu`, `mes_usu`, `aio_usu`, `cor_usu`, `con_usu`, `pas_usu`, `pre_usu`, `res_usu`) VALUES
(19, 'Danielillo', 'Vespacillo', 9, 'Febrero', 2001, 'DanielaVespa@gmail.com', 'asdasd', 1, 1, 'ELROSADE'),
(16, 'Rodrigo ', 'Olivares', 9, 'Enero', 1995, 'chutite@gmail.com', 'asdasd', 3, 1, 'ELROSADO'),
(18, 'Jan', 'Lazo', 19, 'Junio', 2000, 'janlazo@gmail.com', 'asdasd', 1, 1, 'ELROJO'),
(14, 'Sebastian', 'Alday', 31, 'Mayo', 1999, 'sebaalday28@gmail.com', 'asdasd', 1, 1, 'ELROJO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
