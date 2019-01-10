-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-01-2019 a las 07:51:22
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.2.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `samplemovie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_08_031712_create_movies_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reparto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calificacion` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `titulo`, `director`, `reparto`, `plan`, `calificacion`, `created_at`, `updated_at`) VALUES
(1, 'El padrino', 'Francis Ford Coppola', 'M. Brando, Al Pacino', 'premium', 5, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(2, 'Cadena Perpetua', 'F. Darabont', 'T. Robbins, M. Freeman', 'basico', 5, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(3, 'La lista de Schindler', 'S. Spielberg', 'L. Neeson, R. Fiennes', 'premium', 5, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(4, 'Toro Salvaje', 'M. Scorsese', 'R. De Niro, C. Moriarty', 'estandar', 4, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(5, 'Casablanca', 'M. Curtiz', 'H. Bogart, I. Bergman', 'basico', 4, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(6, 'Ciudadano Kane', 'O. Welles', 'O. Welles, J. Cotten', 'estandar', 4, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(7, 'Lo que el viento se llevo', 'Victor Fleming, George Cukor, Sam Wood ', 'Clark Gable, Vivien Leigh, Thomas Mitchell, Barbara O\'Neil', 'basico', 4, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(8, ' El mago de Oz ', ' Victor Fleming, George Cukor, Mervyn LeRoy, Norman Taurog, King Vidor', 'Judy Garland, Frank Morgan, Ray Bolger, Bert Lahr', 'estandar', 4, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(9, 'Alguien voló sobre el nido del cuco ', ' Milos Forman ', 'Jack Nicholson, Louise Fletcher, Will Sampson, Michael Berryman', 'premium', 4, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(10, ' Lawrence de Arabia ', 'David Lean', 'Peter O\'Toole, Alec Guinness, Anthony Quinn, Jack Hawkins', 'basico', 4, '2019-01-09 05:00:00', '2019-01-09 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fnacimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `fnacimiento`, `plan`, `ciudad`, `pais`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User1', '200-100-11', 'basico', 'cuidad1', 'pais1', 'email1', '2019-01-09 05:00:00', '123', NULL, '2019-01-09 05:00:00', '2019-01-09 05:00:00'),
(2, ' Senaida Burell ', '1986-06-12', 'basico', 'Tulsa ', 'USA', 'isaacson@comcast.net', '2019-01-08 05:00:00', '12345', 'candidate', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(3, ' Taneka Lindenberg ', '1989-02-21', 'premium', 'Jacksonville ', 'USA', 'leslie@aol.com', '2019-01-08 05:00:00', '12345', 'technology', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(4, ' Zonia Pugh ', '\r\n1992-06-08', 'estandar', 'Jacksonville ', 'USA', 'aukjan@live.com', '2019-01-08 05:00:00', '12345', 'tea', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(5, ' Tiffaney Swank ', '1997-05-24', 'basico', 'Oklahoma City ', 'USA', 'tmccarth@optonline.net', '2019-01-08 05:00:00', '12345', 'weakness', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(6, ' Paul Weisel ', '1998-12-27', 'estandar', 'Denver ', 'USA', 'willg@mac.com', '2019-01-08 05:00:00', '12345', 'month', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(7, 'Beverlee Fryman ', '1982-10-02', 'estandar', 'Arlington ', 'USA', 'kourai@yahoo.com', '2019-01-08 05:00:00', '12345', 'grocery', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(8, 'Toney Kimbro ', ' 1983-11-08', 'basico', 'San Antonio ', 'USA', 'doche@sbcglobal.net', '2019-01-08 05:00:00', '12345', 'system', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(9, ' Ivy Heiss ', ' 1995-09-27', 'premium', 'Chesapeake ', 'USA', 'maradine@icloud.com', '2019-01-08 05:00:00', '12345', 'tension', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(10, ' Frances Dunneback ', ' 1996-11-09', 'basico', 'Scottsdale ', 'USA', 'rkobes@sbcglobal.net', '2019-01-08 05:00:00', '12345', 'power', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(11, ' Joetta Nevels ', ' 1996-12-29', 'premium', 'Buffalo ', 'USA', 'glenz@optonline.net', NULL, '12345', 'indication', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(12, ' Dwayne Amos ', '1984-02-20', 'premium', 'Huntington ', 'USA', 'mxiao@me.com', '2019-01-08 05:00:00', '12345', 'winner', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(13, ' Colton Blatter ', ' 1985-02-09', 'estandar', 'Virginia Beach ', 'USA', 'jginspace@msn.com', '2019-01-08 05:00:00', '12345', 'requirement', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(14, ' Dee Galvin ', ' 1985-02-28', 'estandar', 'Charlotte ', 'USA', 'parkes@optonline.net', '2019-01-08 05:00:00', '12345', 'effort', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(15, ' Modesto Casares ', ' 1990-09-05', 'premium', 'Las Vegas ', 'USA', 'pavel@mac.com', '2019-01-08 05:00:00', '12345', 'politics', '2019-01-08 05:00:00', '2019-01-08 05:00:00'),
(16, ' Darwin Colpitts ', ' 1998-08-04', 'basico', 'Washington ', 'USA', 'hoyer@live.com', '2019-01-08 05:00:00', '12345', 'dealer', '2019-01-08 05:00:00', '2019-01-08 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `movie_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `user_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(2, 2, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(3, 3, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(4, 4, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(5, 5, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(6, 6, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(7, 7, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(8, 8, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(9, 9, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(10, 10, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(11, 11, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(12, 12, 1, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(13, 1, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(14, 2, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(15, 3, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(16, 4, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(17, 5, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(18, 6, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(19, 7, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(20, 12, 2, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(21, 1, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(22, 2, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(23, 3, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(24, 4, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(25, 5, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(26, 6, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(27, 16, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(28, 15, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(29, 14, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(30, 13, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(31, 11, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(32, 12, 3, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(33, 1, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(34, 2, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(35, 3, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(36, 4, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(37, 5, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(38, 6, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(39, 7, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(40, 8, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(41, 9, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(42, 10, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(43, 11, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(44, 12, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(45, 13, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(46, 14, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(47, 15, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(48, 16, 4, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(49, 6, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(50, 7, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(51, 8, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(52, 9, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(53, 10, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(54, 11, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(55, 12, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(56, 13, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(57, 14, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(58, 15, 5, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(59, 11, 6, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(60, 12, 6, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(61, 13, 6, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(62, 14, 6, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(63, 15, 6, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(64, 16, 6, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(65, 4, 7, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(66, 5, 7, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(67, 6, 7, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(68, 7, 7, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(69, 11, 8, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(70, 12, 8, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(71, 13, 8, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(72, 14, 8, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(73, 15, 8, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(74, 5, 9, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(75, 6, 9, '2019-01-10 05:00:00', '2019-01-10 05:00:00'),
(76, 9, 10, '2019-01-10 05:00:00', '2019-01-10 05:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_id` (`movie_id`),
  ADD KEY `users_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `movies_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
