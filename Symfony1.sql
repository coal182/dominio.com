-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-02-2012 a las 14:14:57
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `Curso`
--

INSERT INTO `Curso` (`id`, `nombrecurso`, `descripcion`) VALUES
(7, 'curso1', 'Curso Telematica'),
(8, 'curso2', 'Curso Musica'),
(9, 'curso3', 'Curso Diseño'),
(10, 'curso4', 'Curso Java'),
(11, 'curso5', 'Curso PHP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `curso` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcar la base de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `nombre`, `apellidos`, `telefono`, `curso`) VALUES
(25, 'Cristian', 'Martín', '677122878', 1),
(26, 'pepe', 'gomez', '952684898', 2),
(27, 'Laura', 'Díaz', '677122878', 3),
(28, 'Vincent', 'Law', '677122878', 4),
(29, 'Pino', 'autoreiv', '677122878', 5);
