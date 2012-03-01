-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-03-2012 a las 14:25:51
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.3-1ubuntu9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Symfony1`
--
CREATE DATABASE `Symfony1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Symfony1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecurso` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcar la base de datos para la tabla `Curso`
--

INSERT INTO `Curso` (`id`, `nombrecurso`, `descripcion`) VALUES
(18, 'curso2', 'Curso Musica'),
(19, 'curso3', 'Curso Diseño'),
(20, 'curso4', 'Curso Java'),
(21, 'curso5', 'Curso PHP'),
(22, 'curso6', 'Curso Mecánica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entrada`
--

CREATE TABLE IF NOT EXISTS `Entrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `creado` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `Entrada`
--

INSERT INTO `Entrada` (`id`, `titulo`, `contenido`, `creado`) VALUES
(1, 'Primera entrada', 'safasfsafasfsag', '2012-03-01 13:49:03'),
(2, '2 entrada', 'segunda\r\ndas\r\nsaf\r\nsa\r\nf\r\nas\r\nf\r\nasf\r\nas\r\nf\r\nas\r\nfsa', '2012-03-01 14:22:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mensaje`
--

CREATE TABLE IF NOT EXISTS `Mensaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `Mensaje`
--

INSERT INTO `Mensaje` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`) VALUES
(1, 'Cristian', 'coal182@gmail.com', '951991261', 'Pruebando Synfony', 'weheeeeee'),
(2, 'Cristian', 'coal182@gmail.com', '951991261', 'Pruebando Synfony', 'weheeeeee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EDD889C187CB4A1F` (`curso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcar la base de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `nombre`, `apellidos`, `telefono`, `curso_id`, `direccion`) VALUES
(35, 'Cristian', 'Martín', '677122878', 18, 'Avda. Jane Bowles 36'),
(36, 'pepe', 'gomez', '952684898', 18, ''),
(37, 'Laura', 'Díaz', '677122878', 19, ''),
(38, 'Vincent', 'Law', '677122878', 20, ''),
(39, 'Pino', 'autoreiv', '677122878', 21, ''),
(40, 'Efraín', 'Benítez', '952685698', 22, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `direccion`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `FK_EDD889C187CB4A1F` FOREIGN KEY (`curso_id`) REFERENCES `Curso` (`id`);
