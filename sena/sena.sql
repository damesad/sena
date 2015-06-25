-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2015 a las 21:45:46
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `serial_equ` varchar(130) NOT NULL,
  `marca_equ` varchar(130) NOT NULL,
  `tipo_equ` varchar(130) NOT NULL,
  `imagen_equ` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`serial_equ`, `marca_equ`, `tipo_equ`, `imagen_equ`) VALUES
('012', 'lenovi', 'portatik', 'as'),
('012245', 'hp', 'tyu', 'e5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `cod_reg` int(11) NOT NULL,
  `documento_usu` varchar(110) NOT NULL,
  `serial_equ` varchar(130) NOT NULL,
  `fecha_entrada` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`cod_reg`, `documento_usu`, `serial_equ`, `fecha_entrada`) VALUES
(1, '01245', '012', '2015-06-15 05:21:00'),
(2, '12456', '012', '2015-06-06 06:00:00'),
(3, '12456', '012', '2015-06-16 00:00:00'),
(4, '01245', '012', '2015-06-30 00:00:00'),
(5, '12456', '012245', '2015-06-15 00:00:00'),
(6, '01245', '012245', '2015-06-30 00:00:00'),
(7, '5555', '012245', '2015-06-15 00:00:00'),
(29, '01245', '012', '2015-06-19 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `documento_usu` varchar(110) NOT NULL,
  `nombres_usu` varchar(130) NOT NULL,
  `apellidos_usu` varchar(130) NOT NULL,
  `tipo_usu` varchar(130) NOT NULL,
  `imagen_usu` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento_usu`, `nombres_usu`, `apellidos_usu`, `tipo_usu`, `imagen_usu`) VALUES
('01245', 'james', 'garcia', 'sena', 'as'),
('12456', 'dannny', 'rojas', 'visitante', '454'),
('5555', 'juan', 'ramos', 'gay', 'pol');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`serial_equ`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`cod_reg`), ADD KEY `cod_usu` (`documento_usu`), ADD KEY `cod_equ` (`serial_equ`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `cod_reg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`documento_usu`) REFERENCES `usuario` (`documento_usu`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`serial_equ`) REFERENCES `equipo` (`serial_equ`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
