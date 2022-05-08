-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2022 a las 19:38:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esi-nft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercado`
--

CREATE TABLE `mercado` (
  `id` int(11) NOT NULL,
  `id_nft` int(11) NOT NULL,
  `valor` float NOT NULL,
  `fecha_public` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mercado`
--

INSERT INTO `mercado` (`id`, `id_nft`, `valor`, `fecha_public`) VALUES
(3, 13, 50, '2022-05-06'),
(4, 12, 40, '2022-05-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_03_111745_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nfts`
--

CREATE TABLE `nfts` (
  `id` int(11) NOT NULL,
  `idMeta` varchar(500) NOT NULL,
  `nombreNFT` varchar(200) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nfts`
--

INSERT INTO `nfts` (`id`, `idMeta`, `nombreNFT`, `imagen`) VALUES
(2, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 'Gatito feliz', 'gatito-feliz.gif'),
(3, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 'Ponme un 10', 'ponme-un-10.gif'),
(4, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 'Que me han robao', 'que-me-han-robao.gif'),
(5, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 'Ah shit here we go again', 'ah-shit-here-we-go-again.gif'),
(6, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 'Buuum', 'buuum.gif'),
(7, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 'Messirve', 'messirve.gif'),
(9, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 'a', 'a.gif'),
(11, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 'Buen Meme', 'buen-meme.gif'),
(12, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 'Listo', 'listo.jpg'),
(13, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 'Risitas', 'risitas.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8TJXJ5VPuVZiL6UMMElZ7TRFdONx19AOJHusziIZ', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSlpKcVBlUW42S2tzOWZoOE9PWnRqQTFLQ0tGczhXWGdwTmtMR3RQeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1651577020),
('B7hJFLxI8sz9X918ir34snJveuUvKuKacAoMJkmC', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUW1HQ0FreU9td2pldzE0MW9aVU03MjJoaXNOM0FTTXpuUW5oZTFMOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1651579689);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE `transacciones` (
  `id` int(11) NOT NULL,
  `id_vendedor` varchar(500) NOT NULL,
  `id_comprador` varchar(500) NOT NULL,
  `id_nft` int(11) NOT NULL,
  `precio` float NOT NULL,
  `fecha_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id`, `id_vendedor`, `id_comprador`, `id_nft`, `precio`, `fecha_compra`) VALUES
(1, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 3, 50, '2022-05-08'),
(2, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 6, 1.57, '2022-05-08'),
(3, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 3, 50, '2022-05-08'),
(4, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 3, 50, '2022-05-08'),
(5, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 7, 1.57, '2022-05-08'),
(6, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 7, 1.57, '2022-05-08'),
(7, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 7, 1.57, '2022-05-08'),
(8, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 7, 1.57, '2022-05-08'),
(9, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 7, 1.57, '2022-05-08'),
(10, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 7, 1.57, '2022-05-08'),
(11, '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 7, 1.57, '2022-05-08'),
(12, '0xb1ba90a4e0defde993777b5677d56237aca3a2b0', '0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 6, 1.57, '2022-05-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(500) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `saldo` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `saldo`) VALUES
('0x48eec58bfec6c48f9ad2a64632521eea89f18911', NULL, NULL, 0),
('0x688d131415b4e21af84e4e506c8ca66f2d665149', 'Pedro Jose', NULL, 0),
('0xb1ba90a4e0defde993777b5677d56237aca3a2b0', 'Argudo', NULL, 53.57),
('0xb8b572e5c7f7df8fe083d8644908e174fc113d77', NULL, NULL, 0),
('0xe43da87c862aa8d89998bb349f83d2fe47612e0c', 'Pedro', NULL, 108.43),
('0xed58b209d51dda057bcddaf12dedd379cdd52395', 'Pedro', NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `mercado`
--
ALTER TABLE `mercado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nft` (`id_nft`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nfts`
--
ALTER TABLE `nfts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMeta` (`idMeta`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vendedor` (`id_vendedor`),
  ADD KEY `id_comprador` (`id_comprador`),
  ADD KEY `id_nft` (`id_nft`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mercado`
--
ALTER TABLE `mercado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `nfts`
--
ALTER TABLE `nfts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nfts`
--
ALTER TABLE `nfts`
  ADD CONSTRAINT `nfts_ibfk_1` FOREIGN KEY (`idMeta`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD CONSTRAINT `transacciones_ibfk_1` FOREIGN KEY (`id_vendedor`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `transacciones_ibfk_2` FOREIGN KEY (`id_comprador`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `transacciones_ibfk_3` FOREIGN KEY (`id_nft`) REFERENCES `nfts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
