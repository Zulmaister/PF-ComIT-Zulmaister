-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2018 a las 23:45:38
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `red`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_por_publicaciones`
--

CREATE TABLE `comentarios_por_publicaciones` (
  `id_comentario` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `publicacion_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `follows`
--

CREATE TABLE `follows` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `emisor_id` int(11) NOT NULL,
  `receptor_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacionesxusuario`
--

CREATE TABLE `publicacionesxusuario` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `file` int(11) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `fecha_registro`, `activo`) VALUES
(1, 'Diego', 'zulmaister@gmail.com', '1234', '2018-07-07 17:00:00', 1),
(2, 'Amazarac', 'amazarac88@gmail.com', '12345678', '2018-07-13 21:49:19', 0),
(3, 'Nuvar', 'nu@gmail.com', '$2y$10$OLJo8gY10n5vltShjAL4Qu3ENR18GkLDco4sSZ.92DQI6K.So0YTW', '2018-07-14 00:03:20', 0),
(4, 'Nor08', 'nor@gmail.com', '$2y$10$JSY.7jiHNF4IPiizSaMAseTrXl4lG/YFwULwHqPhGRYzn5n3dLCwq', '2018-07-14 01:05:52', 0),
(5, '123456', '123@gmail.com', '$2y$10$8tSocTE4PC21XgkMRaaVPOaj/ZOic2cmstPoWjuhnLlub3b5LgrmO', '2018-07-14 01:17:24', 0),
(6, 'siras', 'sir@gmail.com', '$2y$10$hVmE5ZnthY5v9lpgJqPIGeEDr58s53B/Y.iRZlraprJO/JbwkgS7u', '2018-07-14 01:28:25', 0),
(7, 'nokiak', 'no@gmail.com', '$2y$10$8gPJ0x/nyuW.E.ZMfkt/CuqLxrx4mUBLXQPZz2nCp3vnWdeuRD7/6', '2018-07-14 01:36:58', 0),
(8, '123wdefea', '12@gmail.com', '$2y$10$OzrUZmDNSKAuthiZKcYEZ.satocFJAFMDxfWK580uX0H4qpL7PMrG', '2018-07-14 01:44:22', 0),
(9, 'miradas', 'mira@gmail.com', '$2y$10$8JcOCQGjgs1w8VvATWi77eqnGHMeYaVWyLlJ7dlmTFlSeUBNl403.', '2018-07-14 01:47:09', 0),
(10, 'Milagro', 'mi@gmail.com', '$2y$10$frHjYTfYXd1oGkDY1VCqKeRjpxvCdlK8WiQiTTSdwdIXjU6ald0/y', '2018-07-14 01:55:36', 0),
(11, 'sdadefe', 'da@gmail.com', '$2y$10$5d5s/TxgkRRd5QDcpNArc.gDMlXTXiyMPJ4xt/0S7lx.auAChU8yC', '2018-07-14 15:02:26', 0),
(12, 'alejandro', 'ale@yahoo.com.ar', '$2y$10$xMSe7U92zOipCXMmOpddvuprSNPy3uxeA19imwsCgm5ZYamzz8Uwa', '2018-07-14 15:15:02', 0),
(14, 'Zulmas', 'mas@gmail.com', '$2y$10$3nNOTHsAVZY1bi30wj/JOuQKsrFq29Fdhf204Tv0ElDQ4VHkBpGmO', '2018-07-14 21:10:29', 0),
(15, 'Catalina', 'catalina@gmail.com', '$2y$10$8OnDputcNS2Y29kRLfc3/uF5Bjw5r1lGuSgYgnt2W/81sIvO16MhS', '2018-07-14 21:26:15', 0),
(16, '1234567', '1234567@gmail.com', '$2y$10$48nJ0P3QbCCIWf2Vyg7.Du3VPwuvs79XLgaHt.ioh7x2a7rwFXSF.', '2018-07-14 22:15:22', 0),
(17, 'Jesus', 'Jesus@gmail.com', '$2y$10$xuO1ZuCilg6eKMz5ScspTO2mwWQQdgDytNfAlBtQF5/OIzhbdxH.K', '2018-07-14 23:19:11', 0),
(18, 'mansilla', 'man@gmail.com', '$2y$10$SK48wClggx0SbM3XFJwaDeGUhNTfcoO3Xr1qd2onjEoVjkBFVG3D.', '2018-07-14 23:20:19', 0),
(19, 'Pamela', 'pame@gmail.com', '$2y$10$Tl8eFO9egPJDQLpbkxqld.FGZMAaJi7tsH8JJj0fU5k4gm2u5MupW', '2018-07-14 23:21:02', 0),
(20, 'Laura', 'laura@gmail.com', '$2y$10$bULtxJ35hGf6wXumHMUAj.SqAx4D7L3.45Rbd4EoWMLtsshgU6r4S', '2018-07-14 23:27:42', 0),
(21, 'miranda', 'miranda@gmail.com', '$2y$10$xmBlKnu6dPF6BPtH9O26UuuzJ5MNemh/F92pf5mmGtyJ1NMx.Kdo6', '2018-07-14 23:30:02', 0),
(22, 'comando', 'comando@gmail.com', '$2y$10$k8DyqxserkJ5upAsKpGFIuN3pR3IVl/ZCHLtygi5y6VLi1xDmFmV2', '2018-07-14 23:35:29', 0),
(23, 'cameron', 'cameron@gmail.com', '$2y$10$JGGlInyqEUu4nHgmL8ElpuiOoYvkdKNMSOqlFfiPdNUvYvyzyfjcW', '2018-07-15 00:06:07', 0),
(24, 'Mariano', 'mariano@gmail.com', '$2y$10$jiY8W4xA9y9vbQWGpI4WTeCePMjOoXbnmuz9BLm2qxSRo4IPOHPnG', '2018-07-16 16:17:42', 0),
(25, 'gimena', 'gimena@gmail.com', '$2y$10$mA5Rht./NRKLVW6nMg7tvOMDNmPmx75ABBlvIeAOlW.wxHWUTyqlC', '2018-07-16 21:05:06', 0),
(26, 'Miriam', 'miriam@gmail.com', '$2y$10$84DbXVpG49gIxAQOffmXguabqMju0gyJd88IvS3MzxUG8gy/gax2.', '2018-07-17 18:23:13', 0),
(27, 'Ale258', 'Ale258@gmail.com', '$2y$10$2XvjCezXRZaclHY1HhhkYOIHWHvs.0iW17n4SGn/WKHbqkAcS..0W', '2018-07-17 18:30:56', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
