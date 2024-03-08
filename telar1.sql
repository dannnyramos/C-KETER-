-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2024 a las 16:10:50
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `telar1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(3) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `ap_paterno` varchar(15) DEFAULT NULL,
  `ap_materno` varchar(15) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `carrera` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `Foto`, `nombre`, `ap_paterno`, `ap_materno`, `id_grupo`, `carrera`) VALUES
(1, NULL, 'Nohelia', 'Lopez', 'Santos', 2, 'IINF'),
(3, 'FOTO.jpg', 'DANIELA', 'Lopez', 'Santos', 2, 'IINF'),
(4, 'descarga.jpg', 'SARAHI', 'LUZ', 'MENDEZ', 3, 'IINF'),
(5, 'descarga-0f32c.jpg', 'LUZ', 'SAYAGO', 'LUNA', 1, 'IINF'),
(6, NULL, 'RAFAEL', 'LOPEZ', 'SANTOOS', 2, 'INF'),
(8, NULL, 'nm,.-', NULL, NULL, NULL, NULL),
(9, NULL, 'nm,.wer432w', NULL, NULL, NULL, NULL),
(10, NULL, 'sdfghnjmm', NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'jeessica', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `codigoa` int(10) NOT NULL,
  `fechaasignacion` date NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `composicionsolicitada` varchar(50) NOT NULL,
  `pesosolicitado` decimal(5,0) NOT NULL,
  `diametro` int(10) NOT NULL,
  `lm` int(10) NOT NULL,
  `totalKGS` decimal(15,0) NOT NULL,
  `totalrollos` int(5) NOT NULL,
  `lote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigoc` int(5) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `nombre` char(30) NOT NULL,
  `rfc` char(13) NOT NULL,
  `domicilio` char(20) NOT NULL,
  `noExterior` int(5) NOT NULL,
  `noInterior` int(5) NOT NULL,
  `colonia` char(30) NOT NULL,
  `localidad` char(30) NOT NULL,
  `cp` int(5) NOT NULL,
  `ciudad` char(30) NOT NULL,
  `estado` char(15) NOT NULL,
  `pais` char(10) NOT NULL,
  `telefono1` int(12) NOT NULL,
  `telefono2` int(12) NOT NULL,
  `correo` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id_tono` int(5) NOT NULL,
  `color` char(30) NOT NULL,
  `codigo` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id_tono`, `color`, `codigo`) VALUES
(1, 'petal pink', '13456789-6789'),
(2, 'petal pink', '13456789-6789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `carrera` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `carrera`) VALUES
(1, 'Computo en la nube'),
(2, 'ARFI'),
(3, 'Auditoría ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hilo`
--

CREATE TABLE `hilo` (
  `codigo_h` int(5) NOT NULL,
  `medida` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `codigol` int(10) NOT NULL,
  `nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `codigom` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materias` int(3) NOT NULL,
  `nombre_materia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materias`, `nombre_materia`) VALUES
(1, 'arfi'),
(2, 'poo'),
(3, 'auditoria'),
(4, 'Sistemas'),
(5, 'matematica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `codigopa` int(5) NOT NULL,
  `kgs` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codigo_p` int(5) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `estatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(5) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `nombre` char(30) NOT NULL,
  `rfc` char(13) NOT NULL,
  `domicilio` char(20) NOT NULL,
  `noExterior` int(5) NOT NULL,
  `noInterior` int(5) NOT NULL,
  `colonia` char(30) NOT NULL,
  `localidad` char(30) NOT NULL,
  `cp` int(5) NOT NULL,
  `ciudad` char(30) NOT NULL,
  `estado` char(15) NOT NULL,
  `pais` char(10) NOT NULL,
  `telefono1` int(12) NOT NULL,
  `telefono2` int(12) NOT NULL,
  `correo` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedorexterno`
--

CREATE TABLE `proveedorexterno` (
  `codigope` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `rfc` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedorinterno`
--

CREATE TABLE `proveedorinterno` (
  `codigopi` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `rfc` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rollo`
--

CREATE TABLE `rollo` (
  `codigor` int(10) NOT NULL,
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tela`
--

CREATE TABLE `tela` (
  `id_tela` int(5) NOT NULL,
  `tipo` char(25) NOT NULL,
  `composicion` varchar(50) NOT NULL,
  `peso` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tonos`
--

CREATE TABLE `tonos` (
  `id_tono` int(5) NOT NULL,
  `tonalidad` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'daniela', '2345'),
(2, 'dany', '2345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`codigoa`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigoc`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_tono`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `hilo`
--
ALTER TABLE `hilo`
  ADD PRIMARY KEY (`codigo_h`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`codigol`);

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`codigom`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materias`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`codigopa`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codigo_p`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `proveedorexterno`
--
ALTER TABLE `proveedorexterno`
  ADD PRIMARY KEY (`codigope`);

--
-- Indices de la tabla `proveedorinterno`
--
ALTER TABLE `proveedorinterno`
  ADD PRIMARY KEY (`codigopi`);

--
-- Indices de la tabla `rollo`
--
ALTER TABLE `rollo`
  ADD PRIMARY KEY (`codigor`);

--
-- Indices de la tabla `tela`
--
ALTER TABLE `tela`
  ADD PRIMARY KEY (`id_tela`);

--
-- Indices de la tabla `tonos`
--
ALTER TABLE `tonos`
  ADD PRIMARY KEY (`id_tono`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `codigoa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigoc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id_tono` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `hilo`
--
ALTER TABLE `hilo`
  MODIFY `codigo_h` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `codigol` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `codigom` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materias` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `partida`
--
ALTER TABLE `partida`
  MODIFY `codigopa` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codigo_p` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedorexterno`
--
ALTER TABLE `proveedorexterno`
  MODIFY `codigope` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedorinterno`
--
ALTER TABLE `proveedorinterno`
  MODIFY `codigopi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rollo`
--
ALTER TABLE `rollo`
  MODIFY `codigor` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tela`
--
ALTER TABLE `tela`
  MODIFY `id_tela` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tonos`
--
ALTER TABLE `tonos`
  MODIFY `id_tono` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
