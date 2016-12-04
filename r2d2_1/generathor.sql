-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-01-2014 a las 18:43:53
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `generathor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas_ajustecaja`
--

CREATE TABLE IF NOT EXISTS `finanzas_ajustecaja` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `finanzas_ajustecaja`
--

INSERT INTO `finanzas_ajustecaja` (`id`, `saldo`, `fecha`) VALUES
(1, 100, '2014-01-01 06:10:59'),
(2, 10, '2014-01-05 06:12:07'),
(3, 300, '2013-12-05 06:14:07'),
(4, 7, '2014-01-05 06:18:15'),
(5, 50, '2014-01-05 06:37:59'),
(6, 88, '2014-01-05 06:39:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas_gastos`
--

CREATE TABLE IF NOT EXISTS `finanzas_gastos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `finanzas_gastos`
--

INSERT INTO `finanzas_gastos` (`id`, `saldo`, `fecha`) VALUES
(1, 0, '2014-01-01 06:11:41'),
(2, 10, '2014-01-05 06:39:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas_ingresos`
--

CREATE TABLE IF NOT EXISTS `finanzas_ingresos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `finanzas_ingresos`
--

INSERT INTO `finanzas_ingresos` (`id`, `saldo`, `fecha`) VALUES
(1, 0, '2014-01-01 06:11:26'),
(2, 100, '2014-01-05 05:32:06'),
(3, 100, '2014-01-05 06:32:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_tareas`
--

CREATE TABLE IF NOT EXISTS `mis_tareas` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tarea` varchar(255) NOT NULL,
  `finalizado` tinyint(1) NOT NULL,
  `archivado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `mis_tareas`
--

INSERT INTO `mis_tareas` (`id`, `tarea`, `finalizado`, `archivado`) VALUES
(5, 'Cortar el pelo', 0, 0),
(6, 'llamar guillermito', 0, 0),
(7, 'dientes', 0, 0),
(9, 'llamar jony', 0, 0),
(11, 'diluir el shampoo\r\n', 0, 0),
(12, 'cambiar contraseñas', 0, 0),
(18, 'Ir a pasear a lanus', 0, 0),
(21, 'voy a la igglesia hoy?', 0, 0),
(22, 'lavar ropa', 0, 0),
(23, 'antivirus maquina', 0, 0),
(25, 'agregar modificar', 0, 0),
(26, 'poner ENETER Y GUARDA', 0, 0),
(27, 'COLORES DISTINTIVOS FONDOS A MIS TAREAS', 0, 0),
(28, 'visitar abuelos', 0, 0),
(29, 'poner fecha a comprar zapatillas', 0, 0),
(30, 'tener mi propia toalla', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`) VALUES
(1, 'Peoyecto 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relojes`
--

CREATE TABLE IF NOT EXISTS `relojes` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` varchar(255) NOT NULL,
  `op` int(255) NOT NULL,
  `idproyecto` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `relojes`
--

INSERT INTO `relojes` (`id`, `fecha`, `op`, `idproyecto`) VALUES
(1, '2014-01-04 09:28:32', 1, 11),
(2, '2014-01-04 09:28:35', 0, 11),
(3, '2014-01-04 09:28:50', 1, 10),
(4, '2014-01-04 09:28:54', 0, 10),
(5, '2014-01-04 10:11:38', 1, 15),
(6, '2014-01-04 10:11:40', 0, 15),
(7, '2014-01-04 10:15:04', 1, 14),
(8, '2014-01-04 10:15:07', 0, 14),
(9, '2014-01-04 10:15:21', 1, 16),
(10, '2014-01-04 10:15:25', 0, 16),
(11, '2014-01-05 02:08:03', 1, 14),
(12, '2014-01-05 02:16:28', 0, 14),
(13, '2014-01-05 04:39:02', 1, 14),
(14, '2014-01-05 05:04:37', 0, 14),
(15, '2014-01-05 06:08:49', 1, 14),
(16, '2014-01-05 06:42:32', 0, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `tiempo_estimado` varchar(255) NOT NULL,
  `fecha_entrega` varchar(255) NOT NULL,
  `idproyecto` int(255) NOT NULL,
  `idreloj` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `nombre`, `tiempo_estimado`, `fecha_entrega`, `idproyecto`, `idreloj`) VALUES
(10, 'Cartulina 1 lengua y literatura', '10', '', 1, 0),
(11, 'Cartulina 2', '20', '', 1, 0),
(12, 'CARTULINA 3', '10', '', 1, 0),
(13, 'Tracker', '50', '', 2, 0),
(14, 'Finanzas', '50', '', 2, 0),
(15, 'Mis tareas', '50', '', 2, 0),
(16, 'R2D2', '50', '', 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
