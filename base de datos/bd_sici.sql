-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2022 a las 01:14:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sici`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(10) NOT NULL,
  `alumno_dni` int(9) NOT NULL,
  `alumno_nombre` varchar(50) NOT NULL,
  `alumno_apellido` varchar(50) NOT NULL,
  `rela_año_cursado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `alumno_dni`, `alumno_nombre`, `alumno_apellido`, `rela_año_cursado`) VALUES
(1, 40123456, 'Pablo', 'Lezcano', 4),
(2, 39123456, 'Sofía', 'Gomez', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_padres`
--

CREATE TABLE `alumnos_padres` (
  `id_alumnos_padres` int(10) NOT NULL,
  `rela_alumnos` int(10) NOT NULL,
  `rela_usuarios` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos_padres`
--

INSERT INTO `alumnos_padres` (`id_alumnos_padres`, `rela_alumnos`, `rela_usuarios`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id_asistencias` int(2) NOT NULL,
  `asistencias_fechas` date NOT NULL,
  `rela_asistencias` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `año_cursada`
--

CREATE TABLE `año_cursada` (
  `id_año_cursada` int(1) NOT NULL,
  `año_cursada_descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `año_cursada`
--

INSERT INTO `año_cursada` (`id_año_cursada`, `año_cursada_descripcion`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto'),
(6, 'Sexto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_calificaciones` int(10) NOT NULL,
  `calificaciones_nota` varchar(2) NOT NULL,
  `rela_materias` int(10) NOT NULL,
  `rela_periodos` int(10) NOT NULL,
  `rela_alumnos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_calificaciones`, `calificaciones_nota`, `rela_materias`, `rela_periodos`, `rela_alumnos`) VALUES
(1, '9', 2, 1, 1),
(3, '6', 2, 2, 1),
(5, '7', 9, 1, 1),
(7, '8', 9, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_asistencias`
--

CREATE TABLE `condicion_asistencias` (
  `id_condicion_asistencias` int(1) NOT NULL,
  `condicion_asistencias_descrip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_docentes`
--

CREATE TABLE `contacto_docentes` (
  `id_contacto_docentes` int(2) NOT NULL,
  `rela_alumnos` int(10) NOT NULL,
  `contacto_docentes_asunto` varchar(20) NOT NULL,
  `contacto_docentes_mensaje` varchar(200) NOT NULL,
  `rela_docentes` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_institucion`
--

CREATE TABLE `contacto_institucion` (
  `id_contacto_institucion` int(2) NOT NULL,
  `contacto_institucion_asunto` varchar(100) NOT NULL,
  `contacto_institucion_mensaje` varchar(200) NOT NULL,
  `rela_alumnos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(2) NOT NULL,
  `rela_materias` int(10) NOT NULL,
  `rela_año_cursada` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id_informes` int(2) NOT NULL,
  `rela_alumnos` int(10) NOT NULL,
  `informes_descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materias` int(10) NOT NULL,
  `materias_descri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materias`, `materias_descri`) VALUES
(1, 'Ingles'),
(2, 'Matemáticas'),
(3, 'Lengua'),
(4, 'Informática'),
(5, 'Biología'),
(6, 'Geografía'),
(7, 'Historia'),
(8, 'Educación Física'),
(9, 'Artística'),
(10, 'Física Química'),
(11, 'Ética y Cuidadanía'),
(12, 'Tecnología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id_periodos` int(10) NOT NULL,
  `periodos_descri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id_periodos`, `periodos_descri`) VALUES
(1, 'Primer Cuatrimestre'),
(2, 'Segundo Cuatrimestre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `persona_nombre` varchar(30) NOT NULL,
  `persona_apellido` varchar(30) NOT NULL,
  `persona_correo` varchar(30) NOT NULL,
  `persona_celular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `persona_nombre`, `persona_apellido`, `persona_correo`, `persona_celular`) VALUES
(1, 'Juana', 'Díaz', 'juanitax@gmail.com', '39050506'),
(2, 'Roberto', 'Caceres', 'roberto@gmail.com', '1341431231');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id_tramite` int(2) NOT NULL,
  `tramite_descripcion` varchar(30) NOT NULL,
  `rela_alumnos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `usuario_nombre` varchar(30) NOT NULL,
  `usuario_password` varchar(20) NOT NULL,
  `rela_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario_nombre`, `usuario_password`, `rela_persona`) VALUES
(1, 'Juana123', '1234', 1),
(2, 'Roberto234', '1234', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `rela_año_cursado` (`rela_año_cursado`);

--
-- Indices de la tabla `alumnos_padres`
--
ALTER TABLE `alumnos_padres`
  ADD PRIMARY KEY (`id_alumnos_padres`),
  ADD KEY `fk_padres_alumnos` (`rela_usuarios`),
  ADD KEY `fk_alumnos_padres` (`rela_alumnos`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id_asistencias`),
  ADD KEY `fk_asistencias_condicion_asistencias` (`rela_asistencias`);

--
-- Indices de la tabla `año_cursada`
--
ALTER TABLE `año_cursada`
  ADD PRIMARY KEY (`id_año_cursada`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_calificaciones`),
  ADD KEY `fk_rela_materias_calificaciones` (`rela_materias`),
  ADD KEY `fk_rela_periodos_calificaciones` (`rela_periodos`),
  ADD KEY `fk_rela_alumnos_calificaciones` (`rela_alumnos`);

--
-- Indices de la tabla `condicion_asistencias`
--
ALTER TABLE `condicion_asistencias`
  ADD PRIMARY KEY (`id_condicion_asistencias`);

--
-- Indices de la tabla `contacto_docentes`
--
ALTER TABLE `contacto_docentes`
  ADD PRIMARY KEY (`id_contacto_docentes`),
  ADD KEY `fk_contacto_institucion_alumnos` (`rela_alumnos`),
  ADD KEY `fk_contacto_institucion_docente` (`rela_docentes`);

--
-- Indices de la tabla `contacto_institucion`
--
ALTER TABLE `contacto_institucion`
  ADD PRIMARY KEY (`id_contacto_institucion`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`),
  ADD KEY `fk_docentes_año_cursada` (`rela_año_cursada`),
  ADD KEY `fk_docentes_materias` (`rela_materias`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id_informes`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materias`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id_periodos`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id_tramite`),
  ADD KEY `fk_tramites_alumnos` (`rela_alumnos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_persona` (`rela_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alumnos_padres`
--
ALTER TABLE `alumnos_padres`
  MODIFY `id_alumnos_padres` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id_asistencias` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `año_cursada`
--
ALTER TABLE `año_cursada`
  MODIFY `id_año_cursada` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_calificaciones` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `condicion_asistencias`
--
ALTER TABLE `condicion_asistencias`
  MODIFY `id_condicion_asistencias` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto_docentes`
--
ALTER TABLE `contacto_docentes`
  MODIFY `id_contacto_docentes` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto_institucion`
--
ALTER TABLE `contacto_institucion`
  MODIFY `id_contacto_institucion` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id_informes` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materias` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id_periodos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `id_tramite` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_alumnos_año_cursada` FOREIGN KEY (`rela_año_cursado`) REFERENCES `año_cursada` (`id_año_cursada`);

--
-- Filtros para la tabla `alumnos_padres`
--
ALTER TABLE `alumnos_padres`
  ADD CONSTRAINT `fk_alumnos_padres` FOREIGN KEY (`rela_alumnos`) REFERENCES `alumnos` (`id_alumno`),
  ADD CONSTRAINT `fk_padres_alumnos` FOREIGN KEY (`rela_usuarios`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `fk_asistencias_condicion_asistencias` FOREIGN KEY (`rela_asistencias`) REFERENCES `condicion_asistencias` (`id_condicion_asistencias`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_rela_alumnos_calificaciones` FOREIGN KEY (`rela_alumnos`) REFERENCES `alumnos` (`id_alumno`),
  ADD CONSTRAINT `fk_rela_materias_calificaciones` FOREIGN KEY (`rela_materias`) REFERENCES `materias` (`id_materias`),
  ADD CONSTRAINT `fk_rela_periodos_calificaciones` FOREIGN KEY (`rela_periodos`) REFERENCES `periodos` (`id_periodos`);

--
-- Filtros para la tabla `contacto_docentes`
--
ALTER TABLE `contacto_docentes`
  ADD CONSTRAINT `fk_contacto_institucion_alumnos` FOREIGN KEY (`rela_alumnos`) REFERENCES `alumnos` (`id_alumno`),
  ADD CONSTRAINT `fk_contacto_institucion_docente` FOREIGN KEY (`rela_docentes`) REFERENCES `docentes` (`id_docente`);

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `fk_docentes_año_cursada` FOREIGN KEY (`rela_año_cursada`) REFERENCES `año_cursada` (`id_año_cursada`),
  ADD CONSTRAINT `fk_docentes_materias` FOREIGN KEY (`rela_materias`) REFERENCES `materias` (`id_materias`);

--
-- Filtros para la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD CONSTRAINT `fk_tramites_alumnos` FOREIGN KEY (`rela_alumnos`) REFERENCES `alumnos` (`id_alumno`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona` FOREIGN KEY (`rela_persona`) REFERENCES `persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
