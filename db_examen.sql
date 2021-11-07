-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2021 a las 04:56:01
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `colegiado` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `nacimiento` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `especialidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`colegiado`, `nombres`, `direccion`, `nacimiento`, `email`, `especialidad`) VALUES
('112315651', 'Abner Francisco', 'Guatemala', '12/5/90', 'krollynk@gmail.com', 'medico general'),
('155213', 'Juanito', 'Guatemala', '10/12/98', 'juanito@gmail.com', 'pediatra'),
('1156543621', 'Pedro', 'Guatemala', '1/1/95', 'pedro@gmail.com', 'traumatologo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `CUI` int(11) NOT NULL,
  `nombres` varchar(35) NOT NULL,
  `apellidos` varchar(35) NOT NULL,
  `nacimiento` varchar(25) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `padre` varchar(50) NOT NULL,
  `madre` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`CUI`, `nombres`, `apellidos`, `nacimiento`, `direccion`, `padre`, `madre`, `email`) VALUES
(2147483647, 'Abner Francisco', 'Ralak Ortega', '17/01/98', 'San Antonio', 'Francisco', 'Rosa Ralak', 'aralako@miumg.edu.gt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tpuser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `pass`, `nombre`, `correo`, `tpuser`) VALUES
('juanito', 'juan123', 'Juan', 'juans@gmail.com', 'usuario'),
('fernando', 'fer111', 'Fernando', 'fercho@gmail.com', 'enfermero'),
('maria', 'maria123', 'Maria', 'maria@gmail.com', 'secretaria'),
('mario888', 'marito123', 'Mario', 'mario@gmail.com', 'administrador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
