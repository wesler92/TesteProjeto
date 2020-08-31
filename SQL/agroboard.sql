-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2020 às 18:08
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agroboard`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapá'),
(4, 'Bahia'),
(5, 'Ceará'),
(6, 'Espírito Santo'),
(7, 'Goiás'),
(8, 'Maranhão'),
(9, 'Mato Grosso'),
(10, 'Mato Grosso do Sul'),
(11, 'Minas Gerais'),
(12, 'Pará'),
(13, 'Paraíba'),
(14, 'Pernambuco'),
(15, 'Piauí'),
(16, 'Rio de Janeiro'),
(17, 'Rio Grande do Norte'),
(18, 'Rio Grande do Sul'),
(19, 'Rondônia'),
(20, 'Roraima'),
(21, 'Santa Catarina'),
(22, 'São Paulo'),
(23, 'Sergipe'),
(24, 'Tocantins'),
(25, 'Distrito Federal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(8, 'admin', '202cb962ac59075b964b07152d234b70'),
(9, 'admin2', '202cb962ac59075b964b07152d234b70'),
(10, 'admin3', '202cb962ac59075b964b07152d234b70'),
(11, 'admin4', '202cb962ac59075b964b07152d234b70'),
(12, 'admin5', '202cb962ac59075b964b07152d234b70'),
(13, 'admin10', 'e6a0d43e6b902af6c0cb3e32de8ed69b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
