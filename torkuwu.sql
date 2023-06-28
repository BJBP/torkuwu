-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2023 a las 21:40:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `torkuwu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_recuperacion`
--

CREATE TABLE `codigo_recuperacion` (
  `id_codigo_recuperacion` int(11) NOT NULL,
  `cadena_codigo` varchar(8) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codigo_recuperacion`
--

INSERT INTO `codigo_recuperacion` (`id_codigo_recuperacion`, `cadena_codigo`, `idUsuario`) VALUES
(3, 'byYH139X', 5),
(15, '7J5ZlOFK', 7),
(23, 'HbeocQ8s', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `Tusuid` int(11) NOT NULL,
  `TusuNombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Tusuid`, `TusuNombre`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Usuid` int(11) NOT NULL,
  `UsuNombre` varchar(50) NOT NULL,
  `UsuApellido` varchar(50) NOT NULL,
  `UsuTelefono` varchar(12) NOT NULL,
  `UsuDireccion` varchar(100) NOT NULL,
  `UsuCorreo` varchar(50) NOT NULL,
  `UsuContrasenia` varchar(12) NOT NULL,
  `idTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Usuid`, `UsuNombre`, `UsuApellido`, `UsuTelefono`, `UsuDireccion`, `UsuCorreo`, `UsuContrasenia`, `idTipo`) VALUES
(1, 'Torka', 'Rosas', '922468844', 'DPTO.501 URB. VISTA HERMOSA MZ.C LT.05', 'trosas@unitru.edu.pe', 'Tadmin?123', 1),
(2, 'Asto', 'Isabel', '987654321', 'Dpto 3 Av Los Incas', 'thephantomkiller1059@gmail.com', 'A', 2),
(3, 'Asto', 'Isabel', '987654321', 'Dpto 3 Av Los Incas', 'thephantomkiller105@gmail.com', '345', 2),
(4, 'Asto', 'Isabel', '987654321', 'Dpto 3 Av Los Incas', 'thephantomkiller10@gmail.com', '3445', 2),
(5, 'Asto', 'Isabel', '987654321', 'Dpto 3 Av Los Incas', 'thephantomkiller1967@gmail.com', 'Hello23', 2),
(7, 'Mariana', 'Risco', '987654321', 'Su casa', 'mrisco@unitru.edu.pe', '23456', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `codigo_recuperacion`
--
ALTER TABLE `codigo_recuperacion`
  ADD PRIMARY KEY (`id_codigo_recuperacion`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`Tusuid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usuid`),
  ADD KEY `idTipo` (`idTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `codigo_recuperacion`
--
ALTER TABLE `codigo_recuperacion`
  MODIFY `id_codigo_recuperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `Tusuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Usuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
