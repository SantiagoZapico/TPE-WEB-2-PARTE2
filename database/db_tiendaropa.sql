-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 04:39:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tiendaropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesprenda`
--

CREATE TABLE `detallesprenda` (
  `id_tipoPrenda` int(11) NOT NULL,
  `talle` varchar(5) NOT NULL,
  `stock` int(5) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `id_prenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detallesprenda`
--

INSERT INTO `detallesprenda` (`id_tipoPrenda`, `talle`, `stock`, `categoria`, `id_prenda`) VALUES
(41, 'M', 23, 'remera', 54),
(42, 'S', 54, 'remera', 54),
(43, 'XL', 65, 'pantalon', 55),
(44, 'L', 43, 'pantalon', 55),
(45, 'XS', 23, 'remera', 56),
(46, 'M', 3, 'remera', 56),
(47, 'L', 89, 'pantalon', 58),
(48, 'M', 52, 'pantalon', 58),
(49, 'M', 158, 'buzo', 59),
(51, 'L', 12, 'buzo', 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaprendas`
--

CREATE TABLE `tablaprendas` (
  `id_prenda` int(11) NOT NULL,
  `prenda` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `costo` int(6) NOT NULL,
  `rebaja` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tablaprendas`
--

INSERT INTO `tablaprendas` (`id_prenda`, `prenda`, `tipo`, `costo`, `rebaja`) VALUES
(54, 'Camiseta KOI', 'Remera', 8500, 10),
(55, 'Pantalon Gabardina ', 'Pantalon', 16700, 5),
(56, 'Camiseta Inter Miami', 'Remera', 21000, 5),
(58, 'Pantalon Chino Navi', 'Pantalon', 12000, 0),
(59, 'Buzo Adidas ', 'Buzo', 5400, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'webadmin@demo.com', '$2y$10$Kj3pasuXzAvpf665rqVM5u9LbOBBQoi1aVPxraFj73/p8pIsQG9iG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallesprenda`
--
ALTER TABLE `detallesprenda`
  ADD PRIMARY KEY (`id_tipoPrenda`),
  ADD KEY `id_prenda` (`id_prenda`);

--
-- Indices de la tabla `tablaprendas`
--
ALTER TABLE `tablaprendas`
  ADD PRIMARY KEY (`id_prenda`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallesprenda`
--
ALTER TABLE `detallesprenda`
  MODIFY `id_tipoPrenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `tablaprendas`
--
ALTER TABLE `tablaprendas`
  MODIFY `id_prenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesprenda`
--
ALTER TABLE `detallesprenda`
  ADD CONSTRAINT `id_prenda` FOREIGN KEY (`id_prenda`) REFERENCES `tablaprendas` (`id_prenda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
