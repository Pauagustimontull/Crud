-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2022 a las 15:38:49
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19751186_localhost`
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
  `ID_Prod` int(11) NOT NULL,
  `Cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo_carrito`
--

INSERT INTO `articulo_carrito` (`ID_Carrito`, `ID_Prod`, `Cant`) VALUES
(6, 1, 1),
(6, 2, 1),
(6, 27, 1),
(6, 9, 1),
(6, 26, 1),
(6, 28, 1),
(6, 13, 1),
(6, 11, 1);

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
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7);

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
(1, 'Tablet', 6, 600, 'IPad'),
(2, 'Tablet', 16, 400, 'Samsung'),
(3, 'Cascos', 4, 100, 'Sony'),
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
(14, 'TV', 9, 2500, 'Sony'),
(15, 'Movil', 12, 1400, 'Iphone'),
(16, 'TV', 7, 1200, 'Samsung'),
(17, 'PC', 4, 2300, 'Rtx 4090, i9'),
(18, 'Movil', 12, 400, 'Xiaiomi'),
(19, 'Coche', 12, 12000, 'Opel corsa'),
(20, 'Movil', 12, 120, 'IPhone'),
(26, 'PC', 12, 1299, 'MacBook'),
(27, 'Movil', 2, 1000, 'Samsung'),
(28, 'TV', 2, 5000, 'Plasma'),
(34, 'Cartera', 12, 600, 'Gucci'),
(36, 'Bolso', 5, 3600, 'Prada'),
(37, 'Reloj', 12, 350, 'Tag Heuer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(35) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Cont` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Cont`, `correo`, `admin`) VALUES
(1, 'sadasd', '70e0707c10f8f5cf09a9ca5f472c088171081bb1', 'asd@ajd.asd', 0),
(2, 'jaja', 'cc61a0f386a2877e3e27587fa086d2945b97c811', 'jaja@haha', 0),
(3, 'Leo', 'cfaf50ac3721461bd3a2d27ef5f35e144901fbb6', 'leo@adjs', 0),
(4, 'LEo', '1f0a51c36efaa0f44e4899c26d2028681997c8ea', 'ls@asd', 0),
(5, 'asdasd', '4b2b79b6f371ca18f1216461cffeaddf6848a50e', 'asdkjas@kadjg', 0),
(6, 'pau', '1ba47064494cc437b385dec68747a9487cbcfecd', 'pau@pau.com', 1),
(7, 'Admin', '4e7afebcfbae000b22c7c85e5560f89a2a0280b4', 'Admin@Admin', 1),
(8, 'Usuario1', '083b24b3afbe71edb70a4f8ad8968cce74e4e92b', 'ho@ajdh', 0),
(13, 'hola', '0e2148707bc8f98cf79c0f887380a4f1c228038c', 'a@a', 0),
(14, 'klk', '0ddbec4b5c187190eb270b45cab9a5c5e5367b49', 'k@k.k', 0),
(15, 'jj', '7323a5431d1c31072983a6a5bf23745b655ddf59', 'jj@l', 0),
(16, 'kk', '2ed45186c72f9319dc64338cdf16ab76b44cf3d1', 'k@k', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
