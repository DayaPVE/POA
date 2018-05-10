-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 16:52:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `poa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosest`
--

CREATE TABLE `proyectosest` (
  `idproyectoest` int(20) NOT NULL,
  `proyectoest` varchar(500) NOT NULL,
  `descripcionest` varchar(500) NOT NULL,
  `viabilidadest` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosest`
--

INSERT INTO `proyectosest` (`idproyectoest`, `proyectoest`, `descripcionest`, `viabilidadest`) VALUES
(3, 'tttttttt', 'WEFWE', 'hola');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectosest`
--
ALTER TABLE `proyectosest`
  ADD PRIMARY KEY (`idproyectoest`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectosest`
--
ALTER TABLE `proyectosest`
  MODIFY `idproyectoest` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
