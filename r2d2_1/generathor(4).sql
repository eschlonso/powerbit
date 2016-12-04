-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2014 a las 23:41:06
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
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `finanzas_ajustecaja`
--

INSERT INTO `finanzas_ajustecaja` (`id`, `saldo`, `fecha`, `descripcion`) VALUES
(1, 100, '2014-01-01 06:10:59', ''),
(2, 10, '2014-01-05 06:12:07', ''),
(3, 300, '2013-12-05 06:14:07', ''),
(4, 7, '2014-01-05 06:18:15', ''),
(5, 50, '2014-01-05 06:37:59', ''),
(6, 88, '2014-01-05 06:39:41', ''),
(7, 80, '2014-01-05 06:57:15', ''),
(8, 84, '2014-01-05 06:58:33', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas_gastos`
--

CREATE TABLE IF NOT EXISTS `finanzas_gastos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `finanzas_gastos`
--

INSERT INTO `finanzas_gastos` (`id`, `saldo`, `fecha`, `descripcion`) VALUES
(3, 6, '2014-01-06 06:33:00', 'cigarrillos philips 10.'),
(6, 6, '2014-01-07 18:54:57', 'cigarrillos philip 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas_ingresos`
--

CREATE TABLE IF NOT EXISTS `finanzas_ingresos` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `saldo` int(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `finanzas_ingresos`
--

INSERT INTO `finanzas_ingresos` (`id`, `saldo`, `fecha`, `descripcion`) VALUES
(1, 0, '2014-01-01 06:11:26', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_tareas`
--

CREATE TABLE IF NOT EXISTS `mis_tareas` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tarea` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `finalizado` tinyint(1) NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `archivado` tinyint(1) NOT NULL,
  `categoria` int(255) NOT NULL,
  `subcategoria` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Volcado de datos para la tabla `mis_tareas`
--

INSERT INTO `mis_tareas` (`id`, `tarea`, `fecha`, `finalizado`, `fecha_fin`, `archivado`, `categoria`, `subcategoria`) VALUES
(5, 'Cortar el pelo', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(6, 'llamar guillermito', '0000-00-00 00:00:00', 1, '2014-01-08 16:13:31', 0, 1, 0),
(7, 'dientes', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 4, 0),
(9, 'llamar jony', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(11, 'diluir el shampoo\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(12, 'cambiar contraseñas', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(18, 'Ir a pasear a lanus', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(21, 'voy a la igglesia hoy?', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(22, 'lavar ropa', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(23, 'antivirus maquina', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(25, 'agregar modificar', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0, 0),
(28, 'visitar abuelos', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(29, 'poner fecha a comprar zapatillas', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 2, 0),
(30, 'tener mi propia toalla', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(31, 'Carta a miguel para hacer preguntas al momento de estar con el.', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(32, 'zurcir medias', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(34, 'tracker, al marcar, PRENDER NOMBRE TAREA Y NOMBRE PROYECTO.', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(35, 'juntar mis palos', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(36, 'juntar herramientas. palita para hacer asaddo y herramientas abuelo.', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(37, 'NUEVO TRABAJO', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(38, 'pedir estabilizador jony', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(40, 'asdasd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(41, 'fsdfsdf', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(42, 'sadasd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(43, '4545\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(44, '435345', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(45, 'sdf', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(46, '333\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(47, '3232\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(48, 'aqui', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(49, 'aaa', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(50, '999\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(55, 'hola\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 15),
(57, 'poner el resto de las bases de datos en mysql por error de wamp de hoy martes ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(63, 'aqui', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(64, 'asdsad', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(65, '333\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(66, '33\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(67, '111', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(68, '3333', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(69, '111\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(73, 'jij\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(74, 's', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(75, 's', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(76, 'dd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(77, 'd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(78, 'd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(79, 'g', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(80, 'g', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0),
(94, 'mosquitero', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0),
(100, 'asdasdasd', '2014-01-08 05:57:47', 0, '0000-00-00 00:00:00', 0, 3, 0),
(101, 'asdasdasd', '2014-01-08 05:57:52', 0, '0000-00-00 00:00:00', 0, 3, 0),
(117, 'comprar auriculares', '2014-01-08 16:11:37', 0, '0000-00-00 00:00:00', 0, 2, 0),
(118, 'aprender a combarit contra perros.', '2014-01-08 21:10:09', 0, '0000-00-00 00:00:00', 0, 1, 0),
(119, 'hacer deporte', '2014-01-08 21:10:13', 0, '0000-00-00 00:00:00', 0, 1, 0),
(120, 'trakiar tiempo cuando salgo a caminar y eso.', '2014-01-08 21:11:14', 0, '0000-00-00 00:00:00', 0, 3, 17),
(121, 'fecha inicio fecha fin corregir en donde falte', '2014-01-08 21:20:55', 0, '0000-00-00 00:00:00', 0, 3, 18),
(122, 'defensa personal', '2014-01-08 21:21:17', 0, '0000-00-00 00:00:00', 0, 1, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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
(16, '2014-01-05 06:42:32', 0, 14),
(17, '2014-01-06 08:29:35', 1, 10),
(18, '2014-01-06 11:00:04', 0, 10),
(21, '2014-01-06 11:10:07', 1, 10),
(22, '2014-01-06 11:10:26', 0, 10),
(23, '2014-01-06 04:27:06', 1, 16),
(24, '2014-01-06 04:29:30', 0, 16);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(16, 'R2D2', '50', '', 2, 0),
(17, 'recreo', '', '', 1, 0),
(18, 'ADMIN COLEGIO', '', '', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
