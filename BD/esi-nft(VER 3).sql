-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2022 a las 12:54:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esi-nft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nfts`
--

CREATE TABLE `nfts` (
  `id_nft` int(11) NOT NULL,
  `idMeta` varchar(500) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nfts`
--

INSERT INTO `nfts` (`id_nft`, `idMeta`, `nombre`, `imagen`) VALUES
(1, '0xb8b572e5c7f7df8fe083d8644908e174fc113d77', 'Prueba', 'prueba.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nfts`
--
ALTER TABLE `nfts`
  ADD PRIMARY KEY (`id_nft`),
  ADD KEY `idMeta` (`idMeta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nfts`
--
ALTER TABLE `nfts`
  MODIFY `id_nft` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nfts`
--
ALTER TABLE `nfts`
  ADD CONSTRAINT `nfts_ibfk_1` FOREIGN KEY (`idMeta`) REFERENCES `usuarios` (`idMeta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
