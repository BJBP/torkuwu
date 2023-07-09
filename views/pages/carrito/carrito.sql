-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2023 a las 00:08:58
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
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Mujeres', 'Ropar para dama', 'women.jpg'),
(2, 'Hombres', 'Ropa para hombre', 'men.jpg'),
(3, 'Niños', 'Ropa para niños', 'children.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colore`
--

CREATE TABLE `colore` (
  `id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colore`
--

INSERT INTO `colore` (`id`, `color`, `codigo`) VALUES
(1, 'red', '#f00'),
(2, 'blue', '#00F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id_envio`, `pais`, `company`, `direccion`, `estado`, `cp`, `id_venta`) VALUES
(1, '2', '1', '1', '1', '', 14),
(2, '2', '1', '1', '1', '1', 18),
(3, '2', '1', '1', '1', '1', 19),
(4, '2', '1', '1', '1', '1', 20),
(5, '2', '1', '1', '1', '1', 21),
(6, '2', '1', '1', '1', '1', 22),
(7, '', '', '', '', '', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`, `id_categoria`, `talla`, `color`) VALUES
(1, 'Tank Top', 'Finding perfect t-shirt', 60, 'cloth_1.jpg', 30, 3, 'XL', 'white'),
(2, 'Corater', 'Finding perfect products', 20, 'shoe_1.jpg', 3, 2, '25.5', 'blue'),
(3, 'Corater', 'Finding perfect products', 20, 'shoe_1.jpg', 3, 2, '25.5', 'blue'),
(4, 'Producto 0', 'Esta es la descripcion', 443, 'cloth_1.jpg', 70, 1, 'XL', 'Blue'),
(5, 'Producto 1', 'Esta es la descripcion', 877, 'cloth_1.jpg', 63, 1, 'XL', 'Blue'),
(6, 'Producto 2', 'Esta es la descripcion', 121, 'cloth_1.jpg', 74, 1, 'XL', 'Blue'),
(7, 'Producto 3', 'Esta es la descripcion', 324, 'cloth_1.jpg', 68, 1, 'XL', 'Blue'),
(8, 'Producto 4', 'Esta es la descripcion', 462, 'cloth_1.jpg', 5, 1, 'XL', 'Blue'),
(9, 'Producto 5', 'Esta es la descripcion', 56, 'cloth_1.jpg', 68, 1, 'XL', 'Blue'),
(10, 'Producto 6', 'Esta es la descripcion', 174, 'cloth_1.jpg', 24, 1, 'XL', 'Blue'),
(11, 'Producto 7', 'Esta es la descripcion', 541, 'cloth_1.jpg', 77, 1, 'XL', 'Blue'),
(12, 'Producto 8', 'Esta es la descripcion', 427, 'cloth_1.jpg', 19, 1, 'XL', 'Blue'),
(13, 'Producto 9', 'Esta es la descripcion', 847, 'cloth_1.jpg', 98, 1, 'XL', 'Blue'),
(14, 'Producto 10', 'Esta es la descripcion', 814, 'cloth_1.jpg', 36, 1, 'XL', 'Blue'),
(15, 'Producto 11', 'Esta es la descripcion', 405, 'cloth_1.jpg', 72, 1, 'XL', 'Blue'),
(16, 'Producto 12', 'Esta es la descripcion', 751, 'cloth_1.jpg', 84, 1, 'XL', 'Blue'),
(17, 'Producto 13', 'Esta es la descripcion', 838, 'cloth_1.jpg', 11, 1, 'XL', 'Blue'),
(18, 'Producto 14', 'Esta es la descripcion', 549, 'cloth_1.jpg', 96, 1, 'XL', 'Blue'),
(19, 'Producto 15', 'Esta es la descripcion', 166, 'cloth_1.jpg', 21, 1, 'XL', 'Blue'),
(20, 'Producto 16', 'Esta es la descripcion', 63, 'cloth_1.jpg', 83, 1, 'XL', 'Blue'),
(21, 'Producto 17', 'Esta es la descripcion', 411, 'cloth_1.jpg', 28, 1, 'XL', 'Blue'),
(22, 'Producto 18', 'Esta es la descripcion', 543, 'cloth_1.jpg', 59, 1, 'XL', 'Blue'),
(23, 'Producto 19', 'Esta es la descripcion', 467, 'cloth_1.jpg', 62, 1, 'XL', 'Blue'),
(24, 'Producto 20', 'Esta es la descripcion', 823, 'cloth_1.jpg', 33, 1, 'XL', 'Blue'),
(25, 'Producto 21', 'Esta es la descripcion', 470, 'cloth_1.jpg', 67, 1, 'XL', 'Blue'),
(26, 'Producto 22', 'Esta es la descripcion', 908, 'cloth_1.jpg', 76, 1, 'XL', 'Blue'),
(27, 'Producto 23', 'Esta es la descripcion', 261, 'cloth_1.jpg', 67, 1, 'XL', 'Blue'),
(28, 'Producto 24', 'Esta es la descripcion', 297, 'cloth_1.jpg', 23, 1, 'XL', 'Blue'),
(29, 'Producto 25', 'Esta es la descripcion', 976, 'cloth_1.jpg', 23, 1, 'XL', 'Blue'),
(30, 'Producto 26', 'Esta es la descripcion', 704, 'cloth_1.jpg', 36, 1, 'XL', 'Blue'),
(31, 'Producto 27', 'Esta es la descripcion', 837, 'cloth_1.jpg', 61, 1, 'XL', 'Blue'),
(32, 'Producto 28', 'Esta es la descripcion', 969, 'cloth_1.jpg', 81, 1, 'XL', 'Blue'),
(33, 'Producto 29', 'Esta es la descripcion', 243, 'cloth_1.jpg', 84, 1, 'XL', 'Blue'),
(34, 'Producto 30', 'Esta es la descripcion', 182, 'cloth_1.jpg', 33, 1, 'XL', 'Blue'),
(35, 'Producto 31', 'Esta es la descripcion', 543, 'cloth_1.jpg', 64, 1, 'XL', 'Blue'),
(36, 'Producto 32', 'Esta es la descripcion', 657, 'cloth_1.jpg', 98, 1, 'XL', 'Blue'),
(37, 'Producto 33', 'Esta es la descripcion', 685, 'cloth_1.jpg', 58, 1, 'XL', 'Blue'),
(38, 'Producto 34', 'Esta es la descripcion', 263, 'cloth_1.jpg', 74, 1, 'XL', 'Blue'),
(39, 'Producto 35', 'Esta es la descripcion', 995, 'cloth_1.jpg', 39, 1, 'XL', 'Blue'),
(40, 'Producto 36', 'Esta es la descripcion', 310, 'cloth_1.jpg', 73, 1, 'XL', 'Blue'),
(41, 'Producto 37', 'Esta es la descripcion', 575, 'cloth_1.jpg', 69, 1, 'XL', 'Blue'),
(42, 'Producto 38', 'Esta es la descripcion', 619, 'cloth_1.jpg', 33, 1, 'XL', 'Blue'),
(43, 'Producto 39', 'Esta es la descripcion', 780, 'cloth_1.jpg', 41, 1, 'XL', 'Blue'),
(44, 'Producto 40', 'Esta es la descripcion', 953, 'cloth_1.jpg', 97, 1, 'XL', 'Blue'),
(45, 'Producto 41', 'Esta es la descripcion', 666, 'cloth_1.jpg', 8, 1, 'XL', 'Blue'),
(46, 'Producto 42', 'Esta es la descripcion', 807, 'cloth_1.jpg', 96, 1, 'XL', 'Blue'),
(47, 'Producto 43', 'Esta es la descripcion', 843, 'cloth_1.jpg', 91, 1, 'XL', 'Blue'),
(48, 'Producto 44', 'Esta es la descripcion', 394, 'cloth_1.jpg', 40, 1, 'XL', 'Blue'),
(49, 'Producto 45', 'Esta es la descripcion', 93, 'cloth_1.jpg', 43, 1, 'XL', 'Blue'),
(50, 'Producto 46', 'Esta es la descripcion', 435, 'cloth_1.jpg', 86, 1, 'XL', 'Blue'),
(51, 'Producto 47', 'Esta es la descripcion', 241, 'cloth_1.jpg', 27, 1, 'XL', 'Blue'),
(52, 'Producto 48', 'Esta es la descripcion', 241, 'cloth_1.jpg', 74, 1, 'XL', 'Blue'),
(53, 'Producto 49', 'Esta es la descripcion', 798, 'cloth_1.jpg', 41, 1, 'XL', 'Blue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 3, 3, 20, 60),
(2, 1, 1, 3, 60, 180),
(3, 2, 3, 1, 20, 20),
(4, 3, 3, 1, 20, 20),
(5, 4, 3, 1, 20, 20),
(6, 5, 3, 1, 20, 20),
(7, 6, 3, 1, 20, 20),
(8, 7, 3, 1, 20, 20),
(9, 8, 3, 1, 20, 20),
(10, 9, 3, 1, 20, 20),
(11, 10, 3, 1, 20, 20),
(12, 11, 3, 1, 20, 20),
(13, 12, 3, 1, 20, 20),
(14, 13, 3, 1, 20, 20),
(15, 14, 3, 1, 20, 20),
(16, 15, 53, 1, 798, 798),
(17, 16, 53, 1, 798, 798),
(18, 17, 53, 1, 798, 798),
(19, 18, 53, 1, 798, 798),
(20, 19, 53, 1, 798, 798),
(21, 20, 53, 1, 798, 798),
(22, 21, 53, 1, 798, 798),
(23, 22, 53, 2, 798, 1596),
(24, 23, 13, 1, 847, 847),
(25, 23, 53, 1, 798, 798);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_perfil` varchar(300) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `telefono`, `email`, `password`, `img_perfil`, `nivel`) VALUES
(1, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(2, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(3, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(4, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(5, '1 1', '1', '1', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', ''),
(6, '1 1', '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(7, '1 1', '1', '1', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(8, '1 1', '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(9, '1 1', '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(10, '1 1', '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(11, '1 1', '1', '1', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', ''),
(12, '1 1', '1', '1', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', ''),
(13, '1 1', '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(14, '1 1', '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(15, '1 1', '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(16, '1 1', '1', 'jaison.03042000@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(17, '1 1', '1', 'jaison.03042000@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(18, '1 1', '1', 'jaison.03042000@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '', ''),
(19, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`) VALUES
(1, 1, 240, '2023-07-08 12:07:30'),
(2, 1, 20, '2023-07-08 12:07:41'),
(3, 1, 20, '2023-07-08 12:07:16'),
(4, 1, 20, '2023-07-08 12:07:53'),
(5, 1, 20, '2023-07-09 08:07:02'),
(6, 1, 20, '2023-07-09 08:07:55'),
(7, 1, 20, '2023-07-09 08:07:56'),
(8, 1, 20, '2023-07-09 08:07:57'),
(9, 1, 20, '2023-07-09 08:07:07'),
(10, 1, 20, '2023-07-09 08:07:16'),
(11, 1, 20, '2023-07-09 08:07:36'),
(12, 8, 20, '2023-07-09 08:07:14'),
(13, 9, 20, '2023-07-09 08:07:37'),
(14, 10, 20, '2023-07-09 08:07:28'),
(15, 11, 798, '2023-07-09 10:07:36'),
(16, 12, 798, '2023-07-09 10:07:15'),
(17, 13, 798, '2023-07-09 10:07:20'),
(18, 14, 798, '2023-07-09 10:07:16'),
(19, 15, 798, '2023-07-09 10:07:03'),
(20, 16, 798, '2023-07-09 10:07:29'),
(21, 17, 798, '2023-07-09 11:07:38'),
(22, 18, 1596, '2023-07-09 11:07:04'),
(23, 19, 1645, '2023-07-09 11:07:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colore`
--
ALTER TABLE `colore`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colore`
--
ALTER TABLE `colore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
