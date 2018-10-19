-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2016 a las 01:51:41
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemalaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE IF NOT EXISTS `educacion` (
  `id` int(10) unsigned NOT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `idTipoeducacion` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `institucion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `anio` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_25_000000_update_users_table', 2),
('2016_03_13_151018_crear_tabla_educacion', 3),
('2016_03_13_153835_crear_tabla_tiposEducacion', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposeducacion`
--

CREATE TABLE IF NOT EXISTS `tiposeducacion` (
  `id` int(10) unsigned NOT NULL,
  `titulo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tiposeducacion`
--

INSERT INTO `tiposeducacion` (`id`, `titulo`, `created_at`, `updated_at`) VALUES
(1, 'ESTUDIANTE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'PREGRADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ESPECIALIZACION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'MAESTRIA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'DOCTORADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'POSTDOCTORADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'OTROS', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `nombres` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pais` int(11) NOT NULL,
  `ciudad` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `institucion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `imagenurl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `pais`, `ciudad`, `email`, `telefono`, `institucion`, `ocupacion`, `password`, `imagenurl`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nilton', 'hoyos', 1, '', 'plusis@gmail.com', '', '', '', '$2y$10$rd5xaITM0qhpqd2kHes3e.gWhsTwqRbTcNeuq3.UDhKBnAC51BK2i', '../storage/fotografias/userimagen-1.jpg', '9OEGuL8JbBERCQxgeByVZLWdWobu7uoZbbEl800zpeFxU8QMP7SvseTps7I6', '2015-10-05 05:39:17', '2016-02-29 05:21:18'),
(7, 'plusis', 'web', 9, 'buenos aires', 'plusis123@gmail.com', '', 'universidad', 'docente', '$2y$10$c5K2TUeEEJjNikJKcSeeyu8XU1S/Ad0il0PY9s6vmSmgZqWULYKxK', '../storage/fotografias/userimagen-7.png', NULL, '2015-10-25 23:25:51', '2016-02-29 05:26:21'),
(8, 'nilton1', 'hoyos1', 1, 'Mexico', 'nilton1hoyos1@gmail.com', '315324589', 'universidad1', 'Estudiante1', '$2y$10$Rma8t7pUm2bhtGa99yxikuV1RaDCWWFD.6FbwkU8QYu17FgpTB8US', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(9, 'nilton2', 'hoyos2', 1, 'Bogota', 'nilton2hoyos2@gmail.com', '315324589', 'universidad2', 'Docente1', '$2y$10$xy4Z/PXz82h0AdSnwykD0O3LUqcDVzMpnZflMDyCRqNfvyj9VC/bG', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(10, 'nilton3', 'hoyos3', 1, 'Mexico', 'nilton3hoyos3@gmail.com', '315324589', 'universidad3', 'Estudiante2', '$2y$10$1ICb.m703A2ATc.eYJZEPOvENdaDc7WgbIrirA6q9cGJXG3jSpM62', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(11, 'nilton4', 'hoyos4', 1, 'Bogota', 'nilton4hoyos4@gmail.com', '315324589', 'universidad4', 'Docente2', '$2y$10$4gzT0bXu0H4VF8n1VfBsNu1pl4f6wpkU5CmezGmHVRyY4b.vx8xh2', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(12, 'nilton5', 'hoyos5', 1, 'Mexico', 'nilton5hoyos5@gmail.com', '315324589', 'universidad5', 'Estudiante2', '$2y$10$Y0r291TySm0SAZWhppy7IeDKlb3ZnUUGLUAs4vks.QeqIons7V1He', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(13, 'nilton6', 'hoyos6', 1, 'Bogota', 'nilton6hoyos6@gmail.com', '315324589', 'universidad6', 'Docente2', '$2y$10$IEiP2egwPJyuJtrxg73AL.bY48elYQS3qY2miKA/qw2DOXJZHVJC2', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(14, 'nilton7', 'hoyos7', 1, 'Mexico', 'nilton7hoyos7@gmail.com', '315324589', 'universidad7', 'Estudiante3', '$2y$10$jIl/fZeVo5rzQ7gBrHyuZ..YI2EG30V02.TJCaXkwOSN0EZqVLh6K', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(15, 'nilton8', 'hoyos8', 1, 'Bogota', 'nilton8hoyos8@gmail.com', '315324589', 'universidad8', 'Docente3', '$2y$10$0HnhfihqZi4pXrspS.i7lOCCR0IIEzZBBimTRaj7/ZaLKLkcmxJDm', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(16, 'nilton9', 'hoyos9', 1, 'Mexico', 'nilton9hoyos9@gmail.com', '315324589', 'universidad9', 'Estudiante3', '$2y$10$2/kBJXigcqG4PrHAwDIdo.BSvufPpREQKNEap9uBzzm0WyEecwEvS', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15'),
(17, 'nilton10', 'hoyos10', 1, 'Bogota', 'nilton10hoyos10@gmail.com', '315324589', 'universidad10', 'Docente3', '$2y$10$z.T5pukE76g.9h/V2idz2ulg8XOR3NGoi6.BMapn7liRLj0R1z9zO', '', NULL, '2016-03-06 07:08:16', '2016-03-06 07:08:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educacion_idusuario_index` (`idUsuario`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `tiposeducacion`
--
ALTER TABLE `tiposeducacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiposeducacion`
--
ALTER TABLE `tiposeducacion`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD CONSTRAINT `educacion_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
