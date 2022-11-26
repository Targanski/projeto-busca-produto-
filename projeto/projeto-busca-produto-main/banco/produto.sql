-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2022 às 17:28
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `nome_produto` varchar(255) NOT NULL DEFAULT '0',
  `descricao` varchar(255) NOT NULL DEFAULT '0',
  `foto` varchar(255) NOT NULL DEFAULT '0',
  `fk_sessao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `marca`, `nome_produto`, `descricao`, `foto`, `fk_sessao`) VALUES
(1, 'Assolan', 'sabão em pó assim', 'lava roupas inteligente triplação', 'images\\sabao_assim.png', 1),
(3, 'Unilever', 'sabão em pó brilhante', 'Brancura impecável sem estragar tecidos e cores', 'images\\sabao_brilhante.png', 1),
(4, '‎Unilever', 'sabão em pó comfort', 'Maciez é Comfort', 'images\\sabao_comfort.png', 1),
(5, 'Unilever', 'sabão em pó omo', 'Onde Omo cai a sujeira sai', 'images\\sabao_omo.png', 1),
(6, 'Química Amparo Ltda', 'sabão em pó tixan', 'enzimas ativas, limpa as sujeiras mais dificeis', 'images\\sabao_tixan.png', 1),
(7, 'Gtex Brasil', 'sabão em pó urca', 'Urca tem alto poder de limpeza e cuidado com os tecidos mais delicados, lavando sem danificar as fibras de peças íntimas, roupas de bebê e seda.', 'images\\sabao_urca.png', 1),
(8, 'Unilever', 'Desodorante Antitranspirante Aerosol Masculino Rexona', 'Sua fórmula sem perfume, 0% álcool e hipoalergênica garante a eficácia de Rexona por 48 horas sem agredir a pele e sem competir com seu perfume.', 'images\\desodorante_rexona_masculino.png', 2),
(9, 'Unilever', 'Desodorante Antitranspirante Aerossol Original Dove', 'O Desodorante Antitranspirante Aerosol Dove Original protege por até 48 horas contra o suor e mau odor', 'images\\desodorante_dove.png', 2),
(10, 'Monange', 'Desodorante Monange Aerosol', 'Siga seu coração', 'images\\desodorante_monange.png', 2),
(11, 'Coty Brasil', 'Desodorante Em Spray Original Avanço', 'Este é o tempo de Avanço!', 'images\\desodorante_avanco.png', 2),
(12, 'Nivea', 'Desodorante Antitranspirante Aerossol Nivea', 'Desodorante Nivea Men Original Protect protege por 48h e ainda ajuda a previnir irritação na pele. O cuidado de NIVEA especial para você. Aproveite! Sua fórmula especialmente desenvolvida para a pele dos homens, protege do suor e dos maus odores.', 'images\\desodorante_nivea.png', 2),
(13, 'Natura', 'Desodorante Corporal Natura Homem', ' O Desodorante Corporal Natura Homem foi desenvolvido para manter você protegido e perfumado ao longo do dia, com fragrância inspirada em um dos maiores sucessos da perfumaria Natura. ', 'images\\desodorante_natura_homem.png', 2),
(14, 'Almond Breeze', 'Bebida Vegetal de Amêndoas Almond Breeze', 'Bebida Vegetal de Amêndoas Almond Breeze', 'images\\Almond.png', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `id` int(11) NOT NULL,
  `nome_sessao` varchar(255) NOT NULL DEFAULT '0',
  `mapa_sessao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sessao`
--

INSERT INTO `sessao` (`id`, `nome_sessao`, `mapa_sessao`) VALUES
(1, 'Material de limpeza', 'map\\S1.png'),
(2, 'Higiene pessoal', 'map\\S2.png'),
(3, 'Cereais e farináceos', 'map\\S3.png'),
(4, 'Bebidas', 'map\\S4.png'),
(5, 'Produtos pet', 'map\\S5.png'),
(6, 'Utensílios para cozinha', 'map\\S6.png'),
(7, 'Laticínios', 'map\\S7.png'),
(8, 'Congelados', 'map\\S8.png'),
(9, 'Enlatados', 'map\\S9.png'),
(10, 'Frios', 'map\\FRIOS.png'),
(11, 'Açougue', 'map\\ACOUGUE.png'),
(12, 'Peixaria', 'map\\PEIXARIA.png'),
(13, 'Hortifrúti', 'map\\HORTIFRUTI.png'),
(14, 'Padaria', 'map\\PADARIA.png'),
(15, 'Rotisseria', 'map\\ROTISSERIA.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sessao` (`fk_sessao`);

--
-- Índices para tabela `sessao`
--
ALTER TABLE `sessao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `sessao`
--
ALTER TABLE `sessao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_sessao` FOREIGN KEY (`fk_sessao`) REFERENCES `sessao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
