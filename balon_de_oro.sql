-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2025 a las 06:30:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `balon de oro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `liga` varchar(100) NOT NULL,
  `fundación` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre`, `liga`, `fundación`) VALUES
(1, 'Real Madrid', 'Española', '1902-03-06'),
(2, 'Manchester city', 'Inglesa', '1880-11-23'),
(3, 'Paris Saint-Germain', 'Francesa', '1970-08-12'),
(4, 'Inter De Milán', 'Italiana', '1908-03-09'),
(5, 'FC Barcelona', 'Española', '1899-11-29'),
(6, 'Bayern Múnich', 'Alemana', '1900-02-27'),
(7, 'Arsenal', 'Inglesa', '1886-12-11'),
(8, 'Liverpool', 'Inglesa', '1892-06-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id_jugador` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nacimiento` date NOT NULL,
  `posicion` varchar(20) NOT NULL,
  `id_equipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id_jugador`, `nombre`, `nacimiento`, `posicion`, `id_equipo`) VALUES
(1, 'Vinicius Junior', '2000-07-12', 'Delantero', 1),
(2, 'Jude Bellingham', '2003-06-29', 'Mediocampista', 1),
(3, 'Erling Haaland', '2000-07-21', 'Delantero', 2),
(4, 'Kevin De Bruyne', '1991-06-28', 'Mediocampista', 2),
(5, 'Kylian Mbappe', '1998-12-20', 'Delantero', 1),
(6, 'Lautaro Martínez', '1997-08-22', 'Delantero', 4),
(7, 'Robert Lewandowski', '1988-08-21', 'Delantero', 5),
(8, 'Harry Kane', '1993-07-28', 'Delantero', 6),
(9, 'Mohamed Salah', '1992-06-15', 'Delantero', 8),
(10, 'Bukayo Saka', '2001-09-05', 'Mediocampista', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `fk_jugadores_equipos` (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id_jugador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `fk_jugadores_equipos` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
