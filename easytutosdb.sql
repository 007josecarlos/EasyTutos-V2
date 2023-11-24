-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 05:01:18
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
-- Base de datos: `easytutosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `idEstudiante` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listamateriasestudiantes`
--

CREATE TABLE `listamateriasestudiantes` (
  `idEstudiante` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listamateriasmonitor`
--

CREATE TABLE `listamateriasmonitor` (
  `idMonitor` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listamateriasmonitor`
--

INSERT INTO `listamateriasmonitor` (`idMonitor`, `idMateria`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `idMateria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `creditos` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `monitores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMateria`, `nombre`, `creditos`, `semestre`, `monitores`) VALUES
(1, 'Calculo Diferencial', 4, 1, 2),
(4, 'Programacion Web', 4, 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitores`
--

CREATE TABLE `monitores` (
  `idMonitor` int(11) NOT NULL,
  `calificacion` double DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `monitores`
--

INSERT INTO `monitores` (`idMonitor`, `calificacion`, `idUsuario`) VALUES
(1, NULL, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitorias`
--

CREATE TABLE `monitorias` (
  `idMonitoria` int(11) NOT NULL,
  `idMonitor` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `idTema` int(11) NOT NULL,
  `horaDia` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idUbicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `idTema` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contenidos` varchar(50) DEFAULT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeuser`
--

CREATE TABLE `typeuser` (
  `idTypeUser` tinyint(4) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `typeuser`
--

INSERT INTO `typeuser` (`idTypeUser`, `nombre`) VALUES
(0, 'estudiante'),
(1, 'monitor'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `idUbicacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`idUbicacion`, `nombre`) VALUES
(0, 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenia` varchar(260) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `tipo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `username`, `contrasenia`, `nombre`, `apellido`, `telefono`, `tipo`) VALUES
(7, 'ojpadillac@gmail.com', '$2y$10$NLxHOM.0U/F2m3PA.tPhheB.piqLnCHPiPxdpcWJ6efyjRZFxRkMW', 'orlando', 'padilla', 1234567890, 1),
(24, 'orlandoescarraga@hotmail.com', '$2y$10$QKyI0.mpm9x3.8kdFIfYSeDPfM2UYy0M58l/TLGBKRvooueat8Xqa', 'juan', 'ortega', 1234567890, 1),
(25, 'josecacer12@hotmail.com', '$2y$10$w499f/.K9P9J7qzA9HN43.Wz.k/Ox.h9b5J8HwfvmkI.NwuoUtaAm', 'jose', 'caceres', 1234567890, 0),
(26, 'admin@gmail.com', '$2y$10$f6y5N9Vyj00/RLJMIM7Fxu9hYJpGsIK0NJ/LD1TCM7qN3D.ubsQJ2', 'juan', 'quintero', 1234567890, 2),
(34, 'lacasonacienaga@gmail.com', '$2y$10$yuPaOlQtGQFv7DYkT6QNw.xO9yzRYx6bzVvNiwBYhnHxCFByeS1D.', 'orlando', 'padilla', 3003251020, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`idEstudiante`),
  ADD KEY `FK_2` (`idUsuario`);

--
-- Indices de la tabla `listamateriasestudiantes`
--
ALTER TABLE `listamateriasestudiantes`
  ADD KEY `FK_3` (`idMateria`),
  ADD KEY `FK_4` (`idEstudiante`);

--
-- Indices de la tabla `listamateriasmonitor`
--
ALTER TABLE `listamateriasmonitor`
  ADD KEY `FK_5` (`idMateria`),
  ADD KEY `FK_6` (`idMonitor`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indices de la tabla `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`idMonitor`),
  ADD KEY `FK_7` (`idUsuario`);

--
-- Indices de la tabla `monitorias`
--
ALTER TABLE `monitorias`
  ADD PRIMARY KEY (`idMonitoria`),
  ADD KEY `FK_13` (`idMonitor`),
  ADD KEY `FK_14` (`idMateria`),
  ADD KEY `FK_15` (`idTema`),
  ADD KEY `FK_17` (`idUbicacion`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`idTema`),
  ADD KEY `FK_16` (`idMateria`);

--
-- Indices de la tabla `typeuser`
--
ALTER TABLE `typeuser`
  ADD PRIMARY KEY (`idTypeUser`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`idUbicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `monitorias`
--
ALTER TABLE `monitorias`
  MODIFY `idMonitoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `FK_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `listamateriasestudiantes`
--
ALTER TABLE `listamateriasestudiantes`
  ADD CONSTRAINT `FK_3` FOREIGN KEY (`idMateria`) REFERENCES `materias` (`idMateria`),
  ADD CONSTRAINT `FK_4` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiantes` (`idEstudiante`);

--
-- Filtros para la tabla `listamateriasmonitor`
--
ALTER TABLE `listamateriasmonitor`
  ADD CONSTRAINT `FK_5` FOREIGN KEY (`idMateria`) REFERENCES `materias` (`idMateria`),
  ADD CONSTRAINT `FK_6` FOREIGN KEY (`idMonitor`) REFERENCES `monitores` (`idMonitor`);

--
-- Filtros para la tabla `monitores`
--
ALTER TABLE `monitores`
  ADD CONSTRAINT `FK_7` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `monitorias`
--
ALTER TABLE `monitorias`
  ADD CONSTRAINT `FK_13` FOREIGN KEY (`idMonitor`) REFERENCES `monitores` (`idMonitor`),
  ADD CONSTRAINT `FK_14` FOREIGN KEY (`idMateria`) REFERENCES `materias` (`idMateria`),
  ADD CONSTRAINT `FK_15` FOREIGN KEY (`idTema`) REFERENCES `temas` (`idTema`),
  ADD CONSTRAINT `FK_17` FOREIGN KEY (`idUbicacion`) REFERENCES `ubicaciones` (`idUbicacion`);

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `FK_16` FOREIGN KEY (`idMateria`) REFERENCES `materias` (`idMateria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `typeuser` (`idTypeUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
