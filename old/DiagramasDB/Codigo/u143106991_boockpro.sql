
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2012 at 10:31 AM
-- Server version: 5.1.58
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u143106991_boockpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alumno`
--

CREATE TABLE IF NOT EXISTS `Alumno` (
  `AlumnoId` int(11) NOT NULL AUTO_INCREMENT,
  `AlumnoCodigo` int(11) NOT NULL,
  `AlumnoNombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `AlumnoApellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `AlumnoCorreo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `AlumnoContrasena` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `CiudadId` int(11) DEFAULT NULL,
  `TipoCuentaId` int(11) DEFAULT NULL,
  PRIMARY KEY (`AlumnoId`),
  UNIQUE KEY `AlumnoCodigo` (`AlumnoCodigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Ciudad`
--

CREATE TABLE IF NOT EXISTS `Ciudad` (
  `CiudadId` int(11) NOT NULL AUTO_INCREMENT,
  `CiudadIndicativo` int(11) NOT NULL,
  `CiudadNombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PaisId` int(11) NOT NULL,
  PRIMARY KEY (`CiudadId`),
  UNIQUE KEY `CiudadIndicativo` (`CiudadIndicativo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Pais`
--

CREATE TABLE IF NOT EXISTS `Pais` (
  `PaisId` int(11) NOT NULL AUTO_INCREMENT,
  `PaisIndicativo` int(11) NOT NULL,
  `PaisNombre` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`PaisId`),
  UNIQUE KEY `PaisIndicativo` (`PaisIndicativo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `TipoCuenta`
--

CREATE TABLE IF NOT EXISTS `TipoCuenta` (
  `TipoCuentaId` int(11) NOT NULL AUTO_INCREMENT,
  `TipoCuentaTiempo` time NOT NULL,
  `TipoCuentaNombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`TipoCuentaId`),
  UNIQUE KEY `TipoCuentaTiempo` (`TipoCuentaTiempo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
