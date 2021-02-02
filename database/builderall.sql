-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2021 às 06:06
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `builderall`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Salvador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Id_cities` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `name`, `Id_cities`, `created_at`, `updated_at`, `_token`, `deleted_at`) VALUES
(1, 'Danilo', 1, '2021-02-01 11:26:46', '2021-02-02 04:44:41', NULL, '2021-02-02 04:44:41'),
(2, 'Oliveira', 1, NULL, '2021-02-02 07:26:59', '3PKF3zI8TS4ino2HjfHTer2GmGPadWIGkvaAr15g', '2021-02-02 07:26:59'),
(3, 'MDS', 1, '2021-02-02 01:29:19', '2021-02-02 07:27:01', NULL, '2021-02-02 07:27:01'),
(4, 'Danilo Brito Oliveira', 1, '2021-02-02 01:57:05', '2021-02-02 07:49:53', NULL, NULL),
(5, 'Lucas', 1, '2021-02-02 02:07:36', '2021-02-02 02:07:36', NULL, NULL),
(6, 'Lucas', 1, '2021-02-02 02:08:36', '2021-02-02 02:08:36', NULL, NULL),
(7, 'Lara Brito', 1, '2021-02-02 02:12:10', '2021-02-02 02:12:10', NULL, NULL),
(8, 'Fab', 1, '2021-02-02 02:50:54', '2021-02-02 02:50:54', NULL, NULL),
(9, 'Rick', 1, '2021-02-02 03:38:00', '2021-02-02 07:49:29', NULL, '2021-02-02 07:49:29'),
(10, 'Natali', 1, '2021-02-02 03:38:11', '2021-02-02 03:38:11', NULL, NULL),
(11, 'DaniloOliver', 1, '2021-02-02 03:38:22', '2021-02-02 04:44:35', NULL, NULL),
(12, 'Gabriel', 1, '2021-02-02 07:21:39', '2021-02-02 07:21:39', NULL, NULL),
(13, 'Paulo Brito', 1, '2021-02-02 07:27:27', '2021-02-02 07:27:27', NULL, NULL),
(14, 'Tobias', 1, '2021-02-02 07:48:54', '2021-02-02 07:48:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_rank` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `id_rank`, `foto`, `telefone`, `cpf`, `created_at`, `updated_at`, `deleted_at`, `remember_token`, `email_verified_at`) VALUES
(1, 'Danilo', 'Brito Oliveira', 'danilo.britoxd@hotmail.com', '$2y$10$znTxfWnRsOkSbhT6tRSTHeuiEjJjNI77Pd5bNsyEbJWZbmtYQZbLC', 2, NULL, NULL, NULL, '2021-02-01 12:49:26', '2021-02-01 12:49:26', NULL, NULL, NULL),
(2, 'Lara Brito', 'Oliveira', 'teste@mail.com', '$2y$10$idXvKTsorMNHXpx9IAc5jeRfoIhZW0cRHsumPIdij0WhjO8yfgNbu', 2, NULL, NULL, NULL, '2021-02-02 07:31:22', '2021-02-02 07:31:22', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_fk0` (`Id_cities`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_fk0` FOREIGN KEY (`Id_cities`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
