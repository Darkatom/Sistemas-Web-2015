
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2015 a las 18:15:13
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u837753965_quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE IF NOT EXISTS `acciones` (
  `id_accion` int(255) NOT NULL AUTO_INCREMENT,
  `id_conexion` int(255) DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_accion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=91 ;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`id_accion`, `id_conexion`, `email`, `tipo`, `hora`, `ip`) VALUES
(29, NULL, '', 2, '2015-10-30 14:28:39', '2.139.107.100'),
(28, NULL, '', 2, '2015-10-30 14:28:03', '2.139.107.100'),
(27, NULL, '', 2, '2015-10-30 14:26:04', '2.139.107.100'),
(26, NULL, '', 2, '2015-10-30 12:21:09', '158.227.140.214'),
(25, NULL, '', 2, '2015-10-29 23:06:11', '2.139.107.100'),
(24, NULL, '', 2, '2015-10-29 23:03:10', '2.139.107.100'),
(23, NULL, '', 2, '2015-10-29 22:52:05', '2.139.107.100'),
(22, NULL, '', 2, '2015-10-29 22:40:05', '2.139.107.100'),
(21, NULL, '', 2, '2015-10-29 22:38:37', '2.139.107.100'),
(20, NULL, 'jagumiel001@ikasle.ehu.es', 1, '2015-10-29 21:48:55', '2.139.107.100'),
(19, NULL, '', 2, '2015-10-29 21:48:27', '2.139.107.100'),
(18, NULL, '', 2, '2015-10-29 17:11:57', '62.99.101.85'),
(17, NULL, 'jagumiel001@ikasle.ehu.es', 1, '2015-10-29 17:11:50', '62.99.101.85'),
(30, NULL, '', 2, '2015-11-02 08:57:41', '158.227.112.231'),
(31, NULL, 'aaa001@ikasle.ehu.es', 1, '2015-11-02 08:58:47', '158.227.112.231'),
(32, NULL, '', 2, '2015-11-02 08:58:51', '158.227.112.231'),
(33, NULL, '', 2, '2015-11-02 08:59:11', '158.227.112.231'),
(34, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:28:10', '2.139.107.100'),
(35, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:29:53', '2.139.107.100'),
(36, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:31:09', '2.139.107.100'),
(37, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:31:12', '2.139.107.100'),
(38, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:32:31', '2.139.107.100'),
(39, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:33:28', '2.139.107.100'),
(40, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:33:59', '2.139.107.100'),
(41, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:35:40', '2.139.107.100'),
(42, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:36:55', '2.139.107.100'),
(43, NULL, '', 3, '2015-11-05 19:37:02', '2.139.107.100'),
(44, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:38:21', '2.139.107.100'),
(45, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:39:07', '2.139.107.100'),
(46, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:41:01', '2.139.107.100'),
(47, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:41:31', '2.139.107.100'),
(48, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:44:57', '2.139.107.100'),
(49, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:45:25', '2.139.107.100'),
(50, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:47:49', '2.139.107.100'),
(51, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 19:47:49', '2.139.107.100'),
(52, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:48:23', '2.139.107.100'),
(53, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:49:20', '2.139.107.100'),
(54, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:51:23', '2.139.107.100'),
(55, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:51:35', '2.139.107.100'),
(56, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:53:24', '2.139.107.100'),
(57, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:55:15', '2.139.107.100'),
(58, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:55:20', '2.139.107.100'),
(59, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 21:57:03', '2.139.107.100'),
(60, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:14:37', '2.139.107.100'),
(61, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:15:12', '2.139.107.100'),
(62, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:16:27', '2.139.107.100'),
(63, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:22:00', '2.139.107.100'),
(64, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:23:00', '2.139.107.100'),
(65, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:23:08', '2.139.107.100'),
(66, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:23:41', '2.139.107.100'),
(67, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:24:59', '2.139.107.100'),
(68, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:26:47', '2.139.107.100'),
(69, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:28:43', '2.139.107.100'),
(70, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:32:10', '2.139.107.100'),
(71, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:32:19', '2.139.107.100'),
(72, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:33:13', '2.139.107.100'),
(73, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:49:56', '2.139.107.100'),
(74, NULL, '', 3, '2015-11-05 22:50:09', '2.139.107.100'),
(75, NULL, '', 3, '2015-11-05 22:54:02', '2.139.107.100'),
(76, NULL, '', 3, '2015-11-05 22:54:20', '2.139.107.100'),
(77, NULL, '', 3, '2015-11-05 22:54:29', '2.139.107.100'),
(78, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 22:54:41', '2.139.107.100'),
(79, NULL, '', 3, '2015-11-05 22:56:22', '2.139.107.100'),
(80, NULL, '', 3, '2015-11-05 22:58:54', '2.139.107.100'),
(81, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 23:19:33', '2.139.107.100'),
(82, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 23:26:06', '2.139.107.100'),
(83, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 23:35:36', '2.139.107.100'),
(84, NULL, 'jagumiel001@ikasle.ehu.es', 3, '2015-11-05 23:35:40', '2.139.107.100'),
(85, NULL, '', 2, '2015-11-08 19:12:35', '62.99.101.253'),
(86, NULL, '', 2, '2015-11-08 19:13:55', '62.99.101.253'),
(87, NULL, '', 2, '2015-11-08 19:18:13', '62.99.101.253'),
(88, NULL, '', 2, '2015-11-08 22:22:19', '176.86.92.39'),
(89, NULL, '', 2, '2015-11-08 22:24:39', '176.86.92.39'),
(90, NULL, '', 2, '2015-11-10 18:52:23', '82.130.189.139');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiones`
--

CREATE TABLE IF NOT EXISTS `conexiones` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `respuesta` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `Tema` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `complejidad` int(11) NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pregunta` (`pregunta`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `pregunta`, `respuesta`, `Tema`, `complejidad`, `email`) VALUES
(1, '¿Qué pregunta es esta?', 'Pregunta 1', '', 1, ''),
(8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bvcvcvc', '', 4, 'aaa001@ikasle.ehu.es'),
(3, 'Es una pregunta de prueba?', 'Sí', '', 1, ''),
(7, '¿Esto es una prueba?', 'Sí', '', 1, 'jagumiel001@ikasle.ehu.es'),
(6, 'asdfghjklñqwertyuiop', 'asdfg', '', 3, 'jagumiel001@ikasle.ehu.es'),
(9, 'whateverqwertyuiopmnbv', 'funciona', 'betas', 5, 'jagumiel001@ikasle.ehu.es'),
(10, 'asdasdasdasd asd asdas', 'asdasdasd', 'asdasd', 4, 'jagumiel001@ikasle.ehu.es'),
(11, '', '', '', 0, ''),
(12, 'Estoy en demo.html y voy a usar AJAX', 'Sí', 'Testeo', 3, 'jagumiel001@ikasle.ehu.es'),
(13, 'he cambiado la demo.html. Sigue funcionando?', 'No lo se', 'Testeo', 2, 'jagumiel001@ikasle.ehu.es'),
(14, 'Estoy en gestion?', 'Si, lo estas', 'Testeo', 5, 'jagumiel001@ikasle.ehu.es'),
(15, 'Es martes hoy?', 'Sí', 'Dia', 3, 'jagumiel001@ikasle.ehu.es'),
(16, 'Â¿Esto es una prueba?', 'SÃ­', '', 1, 'jagumiel001@ikasle.ehu.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Email` varchar(256) COLLATE latin1_spanish_ci NOT NULL,
  `Nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Apellido1` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Apellido2` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Teléfono` int(9) NOT NULL,
  `Especialidad` varchar(140) COLLATE latin1_spanish_ci NOT NULL,
  `Intereses` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Foto` blob,
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Email`, `Nombre`, `Apellido1`, `Apellido2`, `Password`, `Teléfono`, `Especialidad`, `Intereses`, `Foto`) VALUES
('master123@ikasle.ehu.es', 'Betamaster', 'Alfa', 'Lambda', '1234567890', 123456789, 'Software', '', 0x75706c6f6164732f757365722e706e67),
('jvadillo001@ikasle.ehu.es', 'Jose', 'Vadillo', 'Zorita', 'zaqwsx', 999999999, 'Software', '', 0x75706c6f6164732f48796472616e676561732e6a7067),
('rrodriguez042@ikasle.ehu.eus', 'Rico', 'Rodriguez', 'El Pruebas', '1234567', 123456789, 'Hardware', '', 0x75706c6f6164732f757365722e706e67),
('test001@ikasle.ehu.es', 'Test', 'Tist', 'Tast', '12345678', 123456789, 'Computacion', '', 0x75706c6f6164732f757365722e706e67),
('test002@ikasle.ehu.es', 'Anon', 'Chan', 'Tester', '123456', 123456789, 'Computacion', '', 0x75706c6f6164732f7465737430303240696b61736c652e6568752e6573616e6369656e742d616c69656e732d6775792e6a7067),
('test003@ikasle.ehu.eus', 'Vacio', 'Vacio', 'Test', '123456', 123456789, 'Computacion', '', 0x75706c6f6164732f757365722e706e67),
('prodriguez001@ikasle.ehu.eus', 'Pepe', 'Rodriguez', 'sdadsad', '123456', 123456789, 'Computacion', '', 0x75706c6f6164732f70726f6472696775657a30303140696b61736c652e6568752e6575735a4d313231302d6f7065726174696e675f65646974322e6a7067),
('deloranus001@ikasle.ehu.es', 'Deepin', 'Love', 'Withuranus', '123456', 123456789, 'Computacion', '', 0x75706c6f6164732f757365722e706e67),
('mvestrada001@ikasle.ehu.eus', 'Maria', 'Vaca', 'Estrada', '1123456789', 123456789, 'Computacion', '', 0x75706c6f6164732f757365722e706e67),
('jagumiel001@ikasle.ehu.eus', 'Prueba', 'Multiple', 'Select', '1234567', 123456789, 'Software', '', 0x75706c6f6164732f757365722e706e67),
('dlwithuranus001@ikasle.ehu.es', 'Deepin', 'Love', 'Withuranus', '123456', 123456789, 'Computacion', '', 0x75706c6f6164732f646c776974687572616e757330303140696b61736c652e6568752e65736e646963652e6a7067),
('jagumiel001@ikasle.ehu.es', 'Jose Angel', 'Gumiel', 'Quintana', '123456', 123456789, 'Computacion', '', 0x696d67735f7765622f757365722e706e67),
('aaa001@ikasle.ehu.es', 'aaa', 'aaa', 'aaa', 'zaqwsx', 999999999, 'Computacion', '', 0x696d67735f7765622f757365722e706e67);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
