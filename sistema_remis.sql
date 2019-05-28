-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2019 a las 14:37:18
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_remis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id_auto` int(11) NOT NULL,
  `marca_auto` varchar(35) NOT NULL,
  `modelo_auto` varchar(35) NOT NULL,
  `patente_auto` varchar(7) NOT NULL,
  `año_auto` int(11) NOT NULL,
  `visibilidad_auto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choferes`
--

CREATE TABLE `choferes` (
  `id_chofer` int(11) NOT NULL,
  `nombre_chofer` varchar(35) NOT NULL,
  `apellido_chofer` varchar(35) NOT NULL,
  `dni_chofer` int(11) NOT NULL,
  `direccion_chofer` varchar(100) NOT NULL,
  `telefono_chofer` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_ingreso_chofer` date NOT NULL,
  `visibilidad_chofer` tinyint(1) NOT NULL,
  `id_auto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadores`
--

CREATE TABLE `operadores` (
  `id_operador` int(11) NOT NULL,
  `nombre_operador` varchar(35) NOT NULL,
  `apellido_operador` varchar(35) NOT NULL,
  `email_operador` varchar(75) NOT NULL,
  `dni_operador` int(11) NOT NULL,
  `pass_operador` varchar(60) NOT NULL,
  `telefono_operador` int(11) NOT NULL,
  `fecha_ingreso_operador` date NOT NULL,
  `visibilidad_operador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operadores`
--

INSERT INTO `operadores` (`id_operador`, `nombre_operador`, `apellido_operador`, `email_operador`, `dni_operador`, `pass_operador`, `telefono_operador`, `fecha_ingreso_operador`, `visibilidad_operador`) VALUES
(1, 'tiago', 'cori', 'tiagoriver33@gmail.com', 38397923, '$2y$10$kypq/UDvIElaWEbcrD3YyezCbhH.MWhjpKUM6lpYq0WAKcfEc4Nl.', 5425002, '0000-00-00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indices de la tabla `choferes`
--
ALTER TABLE `choferes`
  ADD PRIMARY KEY (`id_chofer`);

--
-- Indices de la tabla `operadores`
--
ALTER TABLE `operadores`
  ADD PRIMARY KEY (`id_operador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `choferes`
--
ALTER TABLE `choferes`
  MODIFY `id_chofer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operadores`
--
ALTER TABLE `operadores`
  MODIFY `id_operador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
