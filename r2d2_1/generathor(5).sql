-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-01-2014 a las 22:36:19
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
(8, 84, '2014-01-05 06:58:33', ''),
(9, 150, '2014-01-22 20:20:50', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `finanzas_gastos`
--

INSERT INTO `finanzas_gastos` (`id`, `saldo`, `fecha`, `descripcion`) VALUES
(3, 6, '2014-01-06 06:33:00', 'cigarrillos philips 10.'),
(6, 6, '2014-01-07 18:54:57', 'cigarrillos philip 10'),
(7, 6, '2014-01-09 14:46:50', 'cigarros'),
(8, 50, '2014-01-14 13:42:06', 'comida jony.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `finanzas_ingresos`
--

INSERT INTO `finanzas_ingresos` (`id`, `saldo`, `fecha`, `descripcion`) VALUES
(1, 0, '2014-01-01 06:11:26', ''),
(2, 300, '2014-01-13 13:41:08', 'pago alejandra de cartulina.'),
(3, 150, '2014-01-28 14:24:45', 'gabriel');

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
  `posicion` decimal(10,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Volcado de datos para la tabla `mis_tareas`
--

INSERT INTO `mis_tareas` (`id`, `tarea`, `fecha`, `finalizado`, `fecha_fin`, `archivado`, `categoria`, `subcategoria`, `posicion`) VALUES
(5, 'Cortar el pelo. porque ya lo tengo largo che... emprolijar y eso.', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '37.0'),
(6, 'llamar guillermito', '0000-00-00 00:00:00', 1, '2014-01-08 16:13:31', 0, 1, 0, '19.0'),
(7, 'dientes', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 4, 0, '34.0'),
(9, 'llamar jony', '0000-00-00 00:00:00', 1, '2014-01-25 15:35:37', 0, 1, 0, '20.0'),
(11, 'diluir el shampoo\r\n', '0000-00-00 00:00:00', 1, '2014-01-25 15:36:04', 0, 1, 0, '4.0'),
(12, 'cambiar contraseñas', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '27.0'),
(18, 'Ir a pasear a lanus', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '33.0'),
(21, 'voy a la igglesia hoy?', '0000-00-00 00:00:00', 1, '2014-01-22 23:36:48', 0, 1, 0, '1.0'),
(22, 'lavar ropa', '0000-00-00 00:00:00', 1, '2014-01-22 23:36:52', 0, 1, 0, '3.0'),
(23, 'antivirus maquina', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '24.0'),
(25, 'agregar modificar', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0, 0, '25.0'),
(28, 'visitar abuelos', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '18.0'),
(29, 'poner fecha a comprar zapatillas', '0000-00-00 00:00:00', 1, '2014-01-25 15:36:22', 0, 2, 0, '2.0'),
(30, 'tener mi propia toalla', '0000-00-00 00:00:00', 1, '2014-01-22 23:36:29', 0, 1, 0, '15.0'),
(31, 'Carta a miguel para hacer preguntas al momento de estar con el.', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '28.0'),
(32, 'zurcir medias', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '6.0'),
(34, 'tracker, al marcar, PRENDER NOMBRE TAREA Y NOMBRE PROYECTO.', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(35, 'juntar mis palos', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '14.0'),
(36, 'juntar herramientas. palita para hacer asaddo y herramientas abuelo.', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '13.0'),
(37, 'NUEVO TRABAJO', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '32.0'),
(38, 'pedir estabilizador jony', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '5.0'),
(40, 'asdasd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(41, 'fsdfsdf', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(42, 'sadasd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(43, '4545\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(44, '435345', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(45, 'sdf', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(46, '333\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(47, '3232\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(48, 'aqui', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(49, 'aaa', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(50, '999\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(55, 'hola\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 15, '0.0'),
(57, 'poner el resto de las bases de datos en mysql por error de wamp de hoy martes ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '36.0'),
(63, 'aqui', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(64, 'asdsad', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(65, '333\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(66, '33\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(67, '111', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(68, '3333', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(69, '111\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(73, 'jij\r\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(74, 's', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(75, 's', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(76, 'dd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(77, 'd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(78, 'd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(79, 'g', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(80, 'g', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(94, 'mosquitero', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 0, '12.0'),
(100, 'asdasdasd', '2014-01-08 05:57:47', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(101, 'asdasdasd', '2014-01-08 05:57:52', 0, '0000-00-00 00:00:00', 0, 3, 0, '0.0'),
(117, 'comprar auriculares', '2014-01-08 16:11:37', 0, '0000-00-00 00:00:00', 0, 2, 0, '11.0'),
(118, 'aprender a combarit contra perros.', '2014-01-08 21:10:09', 0, '0000-00-00 00:00:00', 0, 1, 0, '21.0'),
(119, 'hacer deporte', '2014-01-08 21:10:13', 0, '0000-00-00 00:00:00', 0, 1, 0, '23.0'),
(120, 'trakiar tiempo cuando salgo a caminar y eso.', '2014-01-08 21:11:14', 0, '0000-00-00 00:00:00', 0, 3, 17, '0.0'),
(121, 'fecha inicio fecha fin corregir en donde falte', '2014-01-08 21:20:55', 0, '0000-00-00 00:00:00', 0, 3, 18, '0.0'),
(122, 'defensa personal', '2014-01-08 21:21:17', 0, '0000-00-00 00:00:00', 0, 1, 0, '22.0'),
(123, 'apagar wifi, aparato timer, cable red.', '2014-01-09 20:05:05', 0, '0000-00-00 00:00:00', 0, 1, 0, '10.0'),
(124, 'marcar tiempo de laburo. dia lunes tal trabajo, jueves tal trabajo', '2014-01-09 20:06:29', 0, '0000-00-00 00:00:00', 0, 1, 0, '26.0'),
(125, 'arreglar patita TV', '2014-01-09 21:02:20', 0, '0000-00-00 00:00:00', 0, 1, 0, '17.0'),
(126, 'miguel: Resulta curioso el hecho de que el nieto de Yiye es predicador pero no es nada fogoso como su abuelo. ¿ Lo conocen ? Se llama Miguel Sánchez Avila, y habla normalmente, sin griterías, ni "lenguas". ¿ Por qué será ? ', '2014-01-09 21:43:04', 0, '0000-00-00 00:00:00', 0, 1, 0, '30.0'),
(127, 'controlar consumo m y ciharrillos', '2014-01-09 22:12:13', 0, '0000-00-00 00:00:00', 0, 1, 0, '9.0'),
(128, 'pasar bloc notas aqui', '2014-01-09 22:13:59', 0, '0000-00-00 00:00:00', 0, 1, 0, '8.0'),
(129, 'hacer un sitio  web con tarjetas. elecktrobit vena de sitios folletos....', '2014-01-10 15:15:49', 0, '0000-00-00 00:00:00', 0, 1, 0, '7.0'),
(130, 'dar orden de prioridades', '2014-01-13 13:40:16', 1, '2014-01-25 15:36:49', 0, 1, 0, '35.0'),
(131, 'comprar calzoncillos', '2014-01-13 16:44:39', 0, '0000-00-00 00:00:00', 0, 2, 0, '16.0'),
(132, 'sdfsdf', '2014-01-22 20:54:26', 1, '2014-01-22 21:07:35', 0, 3, 17, '0.0'),
(133, 'trackear y hacer..', '2014-01-22 21:31:14', 0, '0000-00-00 00:00:00', 0, 3, 11, '0.0'),
(135, 'hacer back up y bases de datos.', '2014-01-22 21:40:40', 0, '0000-00-00 00:00:00', 0, 3, 16, '0.0'),
(136, 'carta a orlando brandoni: Preguntas\r\n1) lalala\r\n2) alalal\r\n3) sdasdsa\r\n4) fsfsdfds', '2014-01-25 13:29:02', 0, '0000-00-00 00:00:00', 0, 1, 0, '31.0'),
(137, 'comprar tachito basura para el cuarto.\r\n', '2014-01-25 14:07:04', 0, '0000-00-00 00:00:00', 0, 1, 0, '29.0'),
(138, 'arreglar paraguas', '2014-01-28 08:40:51', 0, '0000-00-00 00:00:00', 0, 1, 0, '38.0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

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
(24, '2014-01-06 04:29:30', 0, 16),
(25, '2014-01-22 07:41:45', 1, 17),
(26, '2014-01-22 08:53:02', 0, 17),
(27, '2014-01-22 05:56:59', 1, 17),
(28, '2014-01-22 05:57:05', 0, 17),
(29, '2014-01-22 17:59:47', 1, 17),
(30, '2014-01-22 18:00:34', 0, 17),
(31, '2014-01-22 18:28:44', 1, 3),
(32, '2014-01-22 18:29:08', 0, 3),
(33, '2014-01-22 18:29:21', 1, 3),
(34, '2014-01-22 18:30:00', 1, 11),
(35, '2014-01-22 18:30:03', 0, 11),
(36, '2014-01-22 18:30:05', 1, 11),
(37, '2014-01-22 18:30:06', 0, 11),
(38, '2014-01-22 18:30:07', 1, 11),
(39, '2014-01-22 18:30:08', 0, 11),
(40, '2014-01-22 18:32:40', 1, 11),
(41, '2014-01-22 19:50:18', 0, 11),
(42, '2014-01-23 14:55:52', 1, 11),
(43, '2014-01-23 16:40:07', 0, 11),
(44, '2014-01-28 16:18:47', 1, 11),
(45, '2014-01-28 17:10:11', 0, 11),
(46, '2014-01-28 17:10:17', 1, 11),
(47, '2014-01-28 18:38:18', 0, 11),
(48, '2014-01-28 18:38:31', 1, 11),
(49, '2014-01-28 19:32:46', 0, 11);

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
