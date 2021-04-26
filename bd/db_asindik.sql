-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2020 às 21:57
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

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
  `t_conjunto` text DEFAULT NULL,
  `n_conjunto` int(11) DEFAULT NULL,
  `t_unidades` text DEFAULT NULL,
  `n_unidades` int(11) DEFAULT NULL,
  `p_adm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`num_cli`, `url_img`, `tipo`, `categoria`, `nome`, `cidade`, `estado`, `t_conjunto`, `n_conjunto`, `t_unidades`, `n_unidades`, `p_adm`) VALUES
(1, '001_prime_acqua.png', 'Condomínio', 'Vertical', 'Condomínio PrimeacquaXXX', 'Campinas', 'SP', 'Torres', 12, 'Apartamentos', 440, '2010 - 2012 / 2016'),
(3, '002_torres_do_bonfim.svg', 'Condomínio', 'Vertical', 'Residencial Torres do Bonfim', 'Campinas', 'SP', 'Torres', 4, 'Apartamentos', 399, '2013 - Atual - Quarto mandato'),
(4, '003_central_view.svg', 'Condomínio', 'Vertical', 'Central View Residence', 'Campinas', 'SP', 'Torres', 4, 'Apartamentos', 400, '2014 - 2018 - Dois Mandatos'),
(5, '004_caxambu.svg', 'Loteamento', 'Horizontal', 'Terra Caxambú', 'Jundiaí', 'SP', '', 0, 'Lotes', 143, '2016 - 2017'),
(6, '005_premiere.svg', 'Condomínio', 'Vertical', 'Premiere Morumbi Condomínio Clube', 'Paulínia', 'SP', 'Torres', 8, 'Apartamentos', 337, '2017 - 2019'),
(7, '006_recanto.svg', 'Condomínio', 'Vertical', 'Residencial Recanto da Fortuna', 'Campinas', 'SP', 'Torres', 12, 'Apartamentos', 239, '2017 - Atual - Terceiro mandato'),
(8, '008_talipo.svg', 'Condomínio', 'Vertical', 'Talipô Exclusive Club', 'Campinas', 'SP', 'Torres', 4, 'Apartamentos', 384, '2017 - 2019'),
(9, '007_iluminare.svg', 'Condomínio', 'Horizontal', 'Residencial Iluminare', 'Campinas', 'SP', 'Casas', 10, 'Apartamentos', 399, '2018 - 2020'),
(10, '009_dalias.svg', 'Condomínio', 'Vertical', 'Portal Dálias do Campo', 'Sumaré', 'SP', 'Torres', 7, 'Apartamentos', 352, '2020 - Atual'),
(11, '010_ecovila.svg', 'Condomínio', 'Vertical', 'Ecovila Tipuana', 'Campinas', 'SP', 'Torres', 12, 'Apartamentos', 384, '2020 - Atual'),
(12, '011_parquedasflores.jpg', 'Condomínio', 'Vertical', 'Parque das Flores', 'Sumaré', 'SP', 'Blocos', 28, 'Apartamentos', 445, '2020 - Atual');

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
  MODIFY `num_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
