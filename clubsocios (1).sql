-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2025 a las 17:35:01
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
-- Base de datos: `clubsocios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `estado` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `contrasena`, `estado`) VALUES
(1, 'admin', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos_de_pago`
--

CREATE TABLE `metodos_de_pago` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `metodos_de_pago`
--

INSERT INTO `metodos_de_pago` (`id`, `admin_id`, `nombre`) VALUES
(1, 1, 'Efectivo'),
(2, 1, 'Tarjeta de crédito'),
(3, 1, 'Tarjeta de débito'),
(4, 1, 'Transferencia bancaria'),
(5, 1, 'Mercado Pago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `sexo` enum('Masculino','Femenino') DEFAULT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `metodo_de_pagos_id` int(11) DEFAULT NULL,
  `fecha_de_vencimiento` date DEFAULT NULL,
  `situacion_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `admin_id`, `nombre`, `apellido`, `sexo`, `dni`, `codigo`, `fecha_registro`, `metodo_de_pagos_id`, `fecha_de_vencimiento`, `situacion_id`, `plan_id`) VALUES
(21, 1, 'Juan', 'Pérez', 'Masculino', '12345678', 'COD001', '2025-10-02 20:37:48', 1, '2025-11-01', 1, 1),
(22, 1, 'María', 'Gómez', NULL, '87654321', 'COD002', '2025-10-02 20:37:48', 2, '2025-12-15', 1, 2),
(23, 1, 'Carlos', 'Rodríguez', NULL, '11223344', 'COD003', '2025-10-02 20:37:48', 3, '2026-01-10', 2, 3),
(24, 1, 'Lucía', 'Fernández', NULL, '44332211', 'COD004', '2025-10-02 20:37:48', 5, '2025-11-20', 1, 1),
(27, 1, 'preuba', 'preuba', NULL, '2313123', '', '2025-10-30 16:23:56', 1, '1223-03-12', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `admin_id`, `nombre`, `precio`) VALUES
(1, 1, 'Plan Mensual', 20000),
(2, 1, 'Plan Trimestral', 50000),
(3, 1, 'Plan Anual', 180000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion`
--

CREATE TABLE `situacion` (
  `id` int(11) NOT NULL,
  `nombre_situacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `situacion`
--

INSERT INTO `situacion` (`id`, `nombre_situacion`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `metodos_de_pago`
--
ALTER TABLE `metodos_de_pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `situacion_id` (`situacion_id`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indices de la tabla `situacion`
--
ALTER TABLE `situacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metodos_de_pago`
--
ALTER TABLE `metodos_de_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `situacion`
--
ALTER TABLE `situacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `metodos_de_pago`
--
ALTER TABLE `metodos_de_pago`
  ADD CONSTRAINT `metodos_pago_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Filtros para la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD CONSTRAINT `miembros_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `miembros_ibfk_2` FOREIGN KEY (`situacion_id`) REFERENCES `situacion` (`id`),
  ADD CONSTRAINT `miembros_ibfk_3` FOREIGN KEY (`plan_id`) REFERENCES `planes` (`id`);

--
-- Filtros para la tabla `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `planes_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
