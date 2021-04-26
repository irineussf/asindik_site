-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 50.62.209.5:3306
-- Tempo de geração: 30-Ago-2020 às 13:47
-- Versão do servidor: 5.5.51-38.1-log
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_asindik`
--
-- --------------------------------------------------------
--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `num_cli` int(11) NOT NULL,
  `url_img` text NOT NULL,
  `tipo` text NOT NULL,
  `categoria` text NOT NULL,
  `nome` text NOT NULL,
  `cidade` text NOT NULL,
  `estado` text NOT NULL,
  `t_conjunto` text,
  `n_conjunto` int(11) DEFAULT NULL,
  `t_unidades` text,
  `n_unidades` int(11) DEFAULT NULL,
  `p_adm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`num_cli`, `url_img`, `tipo`, `categoria`, `nome`, `cidade`, `estado`, `t_conjunto`, `n_conjunto`, `t_unidades`, `n_unidades`, `p_adm`) VALUES
(1, '001_prime_acqua.png', 'Condomínio', 'Vertical', 'Condomínio Primeacqua', 'Campinas', 'SP', 'Torres', 12, 'Apartamentos', 440, '2010 - 2012 / 2016'),
(3, '002_torres_do_bonfim.svg', 'Condomínio', 'Vertical', 'Residencial Torres do Bonfim', 'Campinas', 'SP', 'Torres', 4, 'Apartamentos', 399, '2013 - Atual - Quarto mandato'),
(4, '003_central_view.svg', 'Condomínio', 'Vertical', 'Central View Residence', 'Campinas', 'SP', 'Torres', 4, 'Apartamentos', 400, '2014 - 2018 - Dois Mandatos'),
(5, '004_caxambu.svg', 'Loteamento', 'Horizontal', 'Terra Caxambú', 'Jundiaí', 'SP', '', 0, 'Lotes', 143, '2016 - 2017'),
(6, '005_premiere.svg', 'Condomínio', 'Vertical', 'Premiere Morumbi Condomínio Clube', 'Paulínia', 'SP', 'Torres', 8, 'Apartamentos', 337, '2017 - 2019'),
(7, '006_recanto.svg', 'Condomínio', 'Vertical', 'Residencial Recanto da Fortuna', 'Campinas', 'SP', 'Torres', 12, 'Apartamentos', 239, '2017 - Atual - Terceiro mandato'),
(8, '008_talipo.svg', 'Condomínio', 'Vertical', 'Talipô Exclusive Club', 'Campinas', 'SP', 'Torres', 4, 'Apartamentos', 384, '2017 - 2019'),
(9, '007_iluminare.svg', 'Condomínio', 'Horizontal', 'Residencial Iluminare', 'Campinas', 'SP', 'Casas', 10, '', 0, '2018 - 2020');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`num_cli`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `num_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
