-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-02-2012 a las 14:26:20
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcar la base de datos para la tabla `Curso`
--

INSERT INTO `Curso` (`id`, `nombrecurso`, `descripcion`) VALUES
(18, 'curso2', 'Curso Musica'),
(19, 'curso3', 'Curso Diseño'),
(20, 'curso4', 'Curso Java'),
(21, 'curso5', 'Curso PHP');

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
  PRIMARY KEY (`id`),
  KEY `IDX_EDD889C187CB4A1F` (`curso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcar la base de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `nombre`, `apellidos`, `telefono`, `curso_id`) VALUES
(35, 'Cristian', 'Martín', '677122878', 18),
(36, 'pepe', 'gomez', '952684898', 18),
(37, 'Laura', 'Díaz', '677122878', 19),
(38, 'Vincent', 'Law', '677122878', 20),
(39, 'Pino', 'autoreiv', '677122878', 21);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `FK_EDD889C187CB4A1F` FOREIGN KEY (`curso_id`) REFERENCES `Curso` (`id`);
