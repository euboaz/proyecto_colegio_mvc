-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2024 a las 07:12:31
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
-- Base de datos: `proyecto_colegio_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int(11) NOT NULL,
  `nombre_asignatura` varchar(20) NOT NULL,
  `horario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `nombre_asignatura`, `horario`) VALUES
(1, 'Programacion II', 'Martes'),
(2, 'Ingles I', 'Martes'),
(3, 'Bases de Datos I', 'Miercoles'),
(4, 'Sistemas Operativos', 'Jueves'),
(7, 'Bases de Datos II', 'Viernes'),
(9, 'Arquitectura III', 'Viernes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_reg_asistencia_asignatura` int(11) NOT NULL,
  `nickname_usuario` varchar(15) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `registro_asistencia` varchar(15) NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_reg_asistencia_asignatura`, `nickname_usuario`, `id_asignatura`, `id_profesor`, `registro_asistencia`, `fecha_registro`) VALUES
(1, 'ebogantes', 1, 33, 'Presente', '2024-04-14'),
(2, 'ebogantes', 2, 32, 'Ausente', '2024-04-14'),
(3, 'ebogantes', 3, 34, 'Presente', '2024-04-14'),
(4, 'ebogantes', 4, 3, 'Presente', '2024-04-14'),
(13, 'ebogantes', 4, 3, 'Ausente', '2024-04-14'),
(14, 'jgonzalez', 4, 3, 'Presente', '2024-04-14'),
(15, 'ebogantes', 4, 3, 'Presente', '2024-04-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_reg_calificaciones_asignatura` int(11) NOT NULL,
  `nickname_usuario` varchar(15) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_reg_calificaciones_asignatura`, `nickname_usuario`, `id_profesor`, `id_asignatura`, `calificacion`) VALUES
(1, 'ebogantes', 3, 4, 90),
(2, 'ebogantes', 33, 1, 90),
(3, 'ebogantes', 32, 2, 90),
(4, 'ebogantes', 34, 3, 90),
(7, 'jgonzalez', 3, 4, 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `tipo`) VALUES
(1, 'Alumno'),
(2, 'Profesor'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nickname_usuario` varchar(15) NOT NULL,
  `pass_usuario` varchar(10) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `apellidos_usuario` varchar(50) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nickname_usuario`, `pass_usuario`, `nombre_usuario`, `apellidos_usuario`, `tipo_usuario`) VALUES
(1, 'admin', 'admin', 'Administrador', 'Sistema', 3),
(2, 'ebogantes', '123456', 'Eusebio', 'Bogantes Azofeifa', 1),
(3, 'vsalas', '123456', 'Valeria', 'Salas Guzman', 2),
(4, 'jgonzalez', '123456', 'Juan', 'Gonzalez Fernandez', 2),
(30, 'fvargas', '123456', 'Francisco', 'Vargas Diaz', 1),
(32, 'jperez', '123456', 'Jorge', 'Gonzalez Fernandez', 2),
(33, 'dbrenes', '123456', 'Diego', 'Brenes Hernandez', 2),
(34, 'cramirez', '123456', 'Carlos', 'Ramirez Castillo', 2),
(36, 'sguzman', '123456', 'Susana', 'Guzman Rojas', 2),
(37, 'lalfaro', '123456', 'Lucia', 'Alfaro Montero', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_asignatura`
--

CREATE TABLE `usuario_asignatura` (
  `id_reg_usuario_asignatura` int(11) NOT NULL,
  `nickname_usuario` varchar(15) NOT NULL,
  `id_asignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_asignatura`
--

INSERT INTO `usuario_asignatura` (`id_reg_usuario_asignatura`, `nickname_usuario`, `id_asignatura`) VALUES
(1, 'ebogantes', 1),
(2, 'ebogantes', 3),
(3, 'vsalas', 4),
(6, 'ebogantes', 4),
(7, 'ebogantes', 2),
(8, 'jgonzalez', 9),
(9, 'jgonzalez', 7),
(10, 'jperez', 2),
(11, 'dbrenes', 1),
(14, 'cramirez', 3),
(15, 'sguzman', 7),
(16, 'lalfaro', 9),
(17, 'jgonzalez', 4),
(20, 'jgonzalez', 9),
(26, 'jgonzalez', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD UNIQUE KEY `nombre_asignatura` (`nombre_asignatura`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_reg_asistencia_asignatura`),
  ADD KEY `nickname_usuario_asistencia` (`nickname_usuario`),
  ADD KEY `id_asignatura_asistencia` (`id_asignatura`),
  ADD KEY `id_profesor_usuario` (`id_profesor`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_reg_calificaciones_asignatura`),
  ADD KEY `nickname_usuario_calificaiones` (`nickname_usuario`),
  ADD KEY `id_profesor_calificaicones` (`id_profesor`),
  ADD KEY `id_asignatura_calificaciones` (`id_asignatura`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nickname_usuario` (`nickname_usuario`),
  ADD KEY `id_tipo_usuario` (`tipo_usuario`);

--
-- Indices de la tabla `usuario_asignatura`
--
ALTER TABLE `usuario_asignatura`
  ADD PRIMARY KEY (`id_reg_usuario_asignatura`),
  ADD KEY `id_usuario_asignatura` (`nickname_usuario`),
  ADD KEY `id_asignatura_asignatura` (`id_asignatura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_reg_asistencia_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_reg_calificaciones_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuario_asignatura`
--
ALTER TABLE `usuario_asignatura`
  MODIFY `id_reg_usuario_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `id_asignatura_asistencia` FOREIGN KEY (`id_asignatura`) REFERENCES `asignaturas` (`id_asignatura`),
  ADD CONSTRAINT `id_profesor_usuario` FOREIGN KEY (`id_profesor`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `nickname_usuario_asistencia` FOREIGN KEY (`nickname_usuario`) REFERENCES `usuarios` (`nickname_usuario`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `id_asignatura_calificaciones` FOREIGN KEY (`id_asignatura`) REFERENCES `asignaturas` (`id_asignatura`),
  ADD CONSTRAINT `id_profesor_calificaicones` FOREIGN KEY (`id_profesor`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `nickname_usuario_calificaiones` FOREIGN KEY (`nickname_usuario`) REFERENCES `usuarios` (`nickname_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_tipo_usuario` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipos` (`id_tipo`);

--
-- Filtros para la tabla `usuario_asignatura`
--
ALTER TABLE `usuario_asignatura`
  ADD CONSTRAINT `id_asignatura_asignatura` FOREIGN KEY (`id_asignatura`) REFERENCES `asignaturas` (`id_asignatura`),
  ADD CONSTRAINT `id_usuario_asignatura` FOREIGN KEY (`nickname_usuario`) REFERENCES `usuarios` (`nickname_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
