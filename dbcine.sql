-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-11-2021 a las 00:30:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbcine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dulceria`
--

CREATE TABLE `dulceria` (
  `num_tar` varchar(13) NOT NULL,
  `golosina` varchar(50) NOT NULL,
  `bebida` varchar(50) NOT NULL,
  `comida` varchar(50) NOT NULL,
  `cine` varchar(50) NOT NULL,
  `horario` time NOT NULL,
  `cvc` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dulceria`
--

INSERT INTO `dulceria` (`num_tar`, `golosina`, `bebida`, `comida`, `cine`, `horario`, `cvc`) VALUES
('123456789123', 'Snickers', 'Coca-Cola', 'Hot dog', 'Las Misiones', '13:00:00', '236'),
('123956789567', 'Cheetos', 'Pepsi', 'Nachos', 'Las Misiones', '13:21:00', '825');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `rfc` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `horario` time NOT NULL,
  `cine` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`rfc`, `nombre`, `apellidos`, `fecha_nac`, `sexo`, `horario`, `cine`) VALUES
('MOHF8310238RS', 'Fabiola', 'Morales', '1982-08-23', 'Femenino', '13:00:00', 'Las Misiones'),
('MOHF8310238RS', 'Fabiola', 'Morales', '1982-08-23', 'Femenino', '13:00:00', 'Las Misiones'),
('JUOM9312031RA', 'María', 'Juárez', '1982-08-25', 'Femenino', '13:00:00', 'Las Torres'),
('LOMV8705252RC', 'Víctor', 'Lizarraga', '1996-09-12', 'Masculino', '16:50:00', 'Las Torres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `num_tar` varchar(13) NOT NULL,
  `peli` varchar(50) NOT NULL,
  `cine` varchar(50) NOT NULL,
  `horario` time NOT NULL,
  `boletos` varchar(10) NOT NULL,
  `cvc` varchar(5) NOT NULL,
  `fecha_exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`num_tar`, `peli`, `cine`, `horario`, `boletos`, `cvc`, `fecha_exp`) VALUES
('123956789567', 'Eternals', 'Las Misiones', '13:00:00', '5', '542', '2023-12-03'),
('938678361274', 'Eternals', 'Las Torres', '13:21:00', '2', '743', '2023-10-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `nombre`, `apellidos`, `sexo`, `fecha_nac`, `email`, `contra`) VALUES
('fanny6', 'Fany', 'Juarez', 'Femenino', '1998-09-12', 'fanny1209@gmail.com', '$2y$10$1rH8QktRuJFPL9L965930Orx2K97ssHUJUWRU1rd7tihQCxvbBOj.'),
('andreap3', 'Andrea', 'Pérez', 'Femenino', '1996-09-12', 'andreaperez@gmail.com', '$2y$10$Ocpu0tBAOD4upJRc58LmvOUrWwRSh6nvRkXSReVGTE2OfyZLAfQP.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
