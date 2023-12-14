-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2023 às 18:10
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `idade`, `cpf`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `estado`) VALUES
(1, 'Paulo', 23, '12341242', '19220000', '', 0, '', 'Narandiba', 'SP'),
(2, 'Gustavo', 90, '5323432', '19220000', '', 0, '', 'Narandiba', 'SP'),
(3, 'Bruna', 27, '112324323', '19575000', '', 3, 'Espigão', 'Regente Feijó', 'SP'),
(4, 'Marcos', 78, '144353232', '19575000', '', 84, 'Espigão', 'Regente Feijó', 'SP'),
(5, 'Juliano', 19, '245432342', '19220000', '', 4, '', 'Narandiba', 'SP'),
(6, 'Flavio', 40, '124354353', '19085330', 'Rua Lair Ramos da Motta', 100, 'Jardim Ouro Verde', 'Presidente Prudente', 'SP');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
