-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2022 a las 20:18:56
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daw2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`, `edad`) VALUES
(1, 'a', 'd', 12),
(2, 'e', 'er', 12),
(3, 'Pau', 'Agusti', 18),
(4, 'UN', 'ds', 23),
(5, 'asd', 'wewe', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_carrito`
--

CREATE TABLE `articulo_carrito` (
  `ID_Carrito` int(11) NOT NULL,
  `ID_Prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID` int(11) NOT NULL,
  `ID_Usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`ID`, `ID_Usu`) VALUES
(1, 6),
(2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `Contraseña` text COLLATE utf8_spanish2_ci NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Nombre`, `Contraseña`, `ID`) VALUES
('Admin', 'Admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Cantidad`, `Precio`, `Descripcion`) VALUES
(1, 'fg', 1, 12, 'jg'),
(2, 's', 3, 2, 'r'),
(3, 'g', 4, 4, 'g'),
(4, 'adsda', 23, 3, 'asdads'),
(5, 'x', 3, 3, 'dsd'),
(6, 's', 3, 3, 'rt'),
(7, 'hola', 23, 32, 's'),
(8, 'd', 3, 3, 'g'),
(9, 's', 34, 43, 's'),
(10, 's', 34, 43, 's'),
(11, 's', 3, 3, 'd'),
(12, 'g', 4, 3, 'ff'),
(13, 'g', 3, 2, 'gh'),
(14, 'd', 45, 43, 's'),
(15, 'iphone', 12, 5, 'fololololo'),
(16, 'a', 12, 56, 'sdsdsdsd'),
(17, 'adadda', 12, 23, 'dfgdgf'),
(18, 'dfg', 1, 2, 'd'),
(19, 'Coche', 12, 12000, 'Opel corsa'),
(20, 'Movil', 12, 120, 'IPhone'),
(26, 'PC', 12, 1299, 'MacBook'),
(27, 'Movil', 2, 1000, 'Samsung');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(35) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Cont` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Cont`, `correo`) VALUES
(1, 'sadasd', '70e0707c10f8f5cf09a9ca5f472c088171081bb1', 'asd@ajd.asd'),
(2, 'jaja', 'cc61a0f386a2877e3e27587fa086d2945b97c811', 'jaja@haha'),
(3, 'Leo', 'cfaf50ac3721461bd3a2d27ef5f35e144901fbb6', 'leo@adjs'),
(4, 'LEo', '1f0a51c36efaa0f44e4899c26d2028681997c8ea', 'ls@asd'),
(5, 'asdasd', '4b2b79b6f371ca18f1216461cffeaddf6848a50e', 'asdkjas@kadjg'),
(6, 'pau', '1ba47064494cc437b385dec68747a9487cbcfecd', 'pau@pau.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulo_carrito`
--
ALTER TABLE `articulo_carrito`
  ADD PRIMARY KEY (`ID_Carrito`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `articulo_carrito`
--
ALTER TABLE `articulo_carrito`
  MODIFY `ID_Carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
