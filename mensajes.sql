-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql305.infinityfree.com
-- Tiempo de generación: 23-11-2025 a las 16:17:56
-- Versión del servidor: 11.4.7-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_40492108_contacto_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `correo`, `mensaje`, `fecha_envio`) VALUES
(1, 'Sofia', 'sofia.23@utpl.edu.ec', 'E+Fohdo+eK74qB6jAHloE01kV1gyYUJsYmJJTXdKMTk4Um80NlpFQjFTVFRudEU3MTMwWjE2MjJ2S0syYzMrRnhhTzZwNkdtSjBHdUJIWnR2TlVBcFNmMDNIY2ZNaGJvTUNCenRRPT0=', '2025-11-23 20:35:26'),
(2, 'Carlos', 'carlos.12@utpl.edu.ec', 'd/bSVrTo/P/ItxNtAgDEuERqNk5Mek5WdGp6K25lWVhhY3RwR294YXhrZlRndmNDN3d6cGFzYXkwVVhveE0yRSs3WFU5MFl3eUNUK3l5QzdTYXV6SjBrTHNyK1g2RkYrR0RvMEVnPT0=', '2025-11-23 20:38:09'),
(3, 'Juan', 'juan_25@utpl.edu.ec', 'wl6gWiu7x7Iy1LrGzh1XmlBTUnAxalVtY2lxanJJRW5GeGhwOVd0Zm9VVWRwVGswcEU2N091cytaSWc9', '2025-11-23 20:45:59'),
(4, 'Sofia', 'sofia.23@utpl.edu.ec', 'A4KshljLQZRQI1DNReX9LUs4THgwWUZ2bm93SXRvM0NPRGpURk5yODh4cEcwU0RjWHdLV3JLZFdHeVRNU3NIOUF1WEYxRjZrYW1kQzRxZGc=', '2025-11-23 20:46:53'),
(5, 'Tatiana Jaramillo', 'tcjaramillo2@utpl.edu.ec', 'CLsOjY0pegtP10afwJIODDhsempPRnp3eVV6USs3SDVXMWpWTWl0ZGw1OTNPcUljT2FFMFRWYnpFd0U9', '2025-11-23 20:49:46'),
(6, 'Juana', 'juana123@utpl.edu.ec', '1T8SZpQtjxuGeeq85lhfUTdIZW5kMTV2UU5LajUwUEZTN3Zia1FoNUovSmR2Z3VNZUZtUDN1TklDaXJMNjdZeGl5ZmNzdW5ESHVVNk9pc2M=', '2025-11-23 20:50:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
