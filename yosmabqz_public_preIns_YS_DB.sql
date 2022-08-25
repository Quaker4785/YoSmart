-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-08-2022 a las 23:20:29
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yosmabqz_public_preIns_YS_DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `CARNET` bigint(20) NOT NULL,
  `NOMBRE1` varchar(100) NOT NULL,
  `NOMBRE2` varchar(100) DEFAULT NULL,
  `NOMBRE3` varchar(200) DEFAULT NULL,
  `APELLIDO1` varchar(100) NOT NULL,
  `APELLIDO2` varchar(100) DEFAULT NULL,
  `APELLIDO3` varchar(200) DEFAULT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `TELEFONO` varchar(500) DEFAULT NULL,
  `EMAIL` varchar(500) DEFAULT NULL,
  `LUGAR_DE_ORIGEN` varchar(500) NOT NULL,
  `DIA_LIMITE_DE_PAGO` int(11) DEFAULT NULL,
  `TOTAL_A_PAGAR_MENSUAL` decimal(10,0) DEFAULT NULL,
  `TOTAL_A_PAGAR_HORA` decimal(10,0) DEFAULT NULL,
  `ULTIMO_MES_PAGADO` int(11) DEFAULT NULL,
  `SOLVENTE` tinyint(1) NOT NULL DEFAULT '0',
  `ESTADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_preinscrito`
--

CREATE TABLE `alumno_preinscrito` (
  `ID` varchar(200) NOT NULL,
  `NOMBRE1` varchar(100) NOT NULL,
  `NOMBRE2` varchar(100) DEFAULT NULL,
  `NOMBRE3` varchar(200) DEFAULT NULL,
  `APELLIDO1` varchar(100) NOT NULL,
  `APELLIDO2` varchar(100) DEFAULT NULL,
  `APELLIDO3` varchar(200) DEFAULT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `TELEFONO` varchar(500) DEFAULT NULL,
  `EMAIL` varchar(500) DEFAULT NULL,
  `LUGAR_DE_ORIGEN` varchar(500) NOT NULL,
  `Modalidad` bigint(20) NOT NULL,
  `Plan` bigint(20) NOT NULL,
  `Curso` bigint(20) DEFAULT NULL,
  `Curso_Específico` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `ID` bigint(20) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`ID`, `Nombre`, `Estado`) VALUES
(1, 'Biología', 1),
(2, 'Química', 1),
(3, 'Contabilidad', 1),
(4, 'Estadísitica', 1),
(5, 'Matemática Financiera', 1),
(6, 'Matemática', 1),
(7, 'Cálculo', 1),
(8, 'Física Fundamental', 1),
(9, 'Computación', 1),
(10, 'Programación', 1),
(11, 'Inglés', 1),
(12, 'Inglés pre-escolar', 1),
(13, 'Lecto-Escritura', 1),
(14, 'Lengua de Señas', 1),
(15, 'Metodos de Investigación', 1),
(16, 'Pedagogía', 1),
(17, 'Derecho', 1),
(18, 'Pre-Universitario', 1),
(19, 'Salud', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `CODIGO` bigint(20) NOT NULL,
  `CARNET_HIJO` bigint(20) NOT NULL,
  `NOMBRE` varchar(500) NOT NULL,
  `APELLIDO` varchar(500) NOT NULL,
  `TELEFONO` varchar(500) NOT NULL,
  `EMAIL` varchar(500) NOT NULL,
  `OBSERVACIONES` text,
  `PAGA` tinyint(1) NOT NULL,
  `ESTADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado_preinscrito`
--

CREATE TABLE `encargado_preinscrito` (
  `CODIGO` bigint(20) NOT NULL,
  `ID_HIJO` varchar(200) DEFAULT NULL,
  `NOMBRE` varchar(500) NOT NULL,
  `APELLIDO` varchar(500) NOT NULL,
  `TELEFONO` varchar(500) NOT NULL,
  `EMAIL` varchar(500) NOT NULL,
  `OBSERVACIONES` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `idpersonal` varchar(25) DEFAULT NULL,
  `carne` bigint(20) NOT NULL,
  `nombre1` varchar(100) NOT NULL,
  `nombre2` varchar(100) DEFAULT NULL,
  `nombreadi` varchar(100) DEFAULT NULL,
  `apellido1` varchar(100) NOT NULL,
  `apellido2` varchar(100) DEFAULT NULL,
  `apellidoadi` varchar(150) DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  `dirección` varchar(500) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `titulo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `ID` bigint(20) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`ID`, `Nombre`, `Estado`) VALUES
(1, 'Online Personalizado', 1),
(2, 'Online Grupal', 1),
(3, 'Presencial Personalizado', 1),
(4, 'Presencial Grupal', 1),
(5, 'Hibrido Personalizado', 1),
(6, 'Hibrido Grupal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `ID` bigint(11) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`ID`, `Nombre`, `Estado`) VALUES
(1, 'Anual', 1),
(2, 'Semestral', 1),
(3, 'Trimestral', 1),
(4, 'Bimestral', 1),
(5, 'Mensual', 1),
(6, 'Semanal', 1),
(7, 'Por Día', 1),
(8, 'Por Hora', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminosycondiciones`
--

CREATE TABLE `terminosycondiciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `contenido` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `terminosycondiciones`
--

INSERT INTO `terminosycondiciones` (`id`, `titulo`, `contenido`, `estado`, `tipo`) VALUES
(1, 'Términos y Condiciones de YO.SMART ACADEMY', 'En el presente contrato de terminos y condiciones, se detallan varios puntos a cerca del funcionamiento de la academia, los normativos y las condiciones de uso. Para poder formar parte de Yo.Smart Academy deberá estar de acuerdo y aceptar el cumplimiento de todos nuestros términos y condiciones.\r\n1) Punto numero 1:\r\n	dsjfdsjfsdjfdsjñfjlsdfñdsfdslkjfdslkjflñsddsfjldsfjñafs.\r\n1) Punto numero 2:\r\n	dsjfdsjfsdjfdsjñfjlsdfñdsfdslkjfdslkjflñsddsfjldsfjñafs.\r\n1) Punto numero 3:\r\n	dsjfdsjfsdjfdsjñfjlsdfñdsfdslkjfdslkjflñsddsfjldsfjñafs.\r\n1) Punto numero 4:\r\n	dsjfdsjfsdjfdsjñfjlsdfñdsfdslkjfdslkjflñsddsfjldsfjñafs.\r\n1) Punto numero 5:\r\n	dsjfdsjfsdjfdsjñfjlsdfñdsfdslkjfdslkjflñsddsfjldsfjñafs.', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`CARNET`);

--
-- Indices de la tabla `alumno_preinscrito`
--
ALTER TABLE `alumno_preinscrito`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`CODIGO`),
  ADD KEY `CARNET_HIJO` (`CARNET_HIJO`);

--
-- Indices de la tabla `encargado_preinscrito`
--
ALTER TABLE `encargado_preinscrito`
  ADD PRIMARY KEY (`CODIGO`),
  ADD KEY `ID_HIJO` (`ID_HIJO`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`carne`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `terminosycondiciones`
--
ALTER TABLE `terminosycondiciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
  MODIFY `CODIGO` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encargado_preinscrito`
--
ALTER TABLE `encargado_preinscrito`
  MODIFY `CODIGO` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `terminosycondiciones`
--
ALTER TABLE `terminosycondiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD CONSTRAINT `encargado_ibfk_1` FOREIGN KEY (`CARNET_HIJO`) REFERENCES `alumno` (`CARNET`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `encargado_preinscrito`
--
ALTER TABLE `encargado_preinscrito`
  ADD CONSTRAINT `encargado_preinscrito_ibfk_1` FOREIGN KEY (`ID_HIJO`) REFERENCES `alumno_preinscrito` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
