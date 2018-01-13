-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 17, 2015 at 11:10 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ted`
--

-- --------------------------------------------------------

--
-- Table structure for table `entidade`
--

CREATE TABLE `entidade` (
  `id` int(5) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entidade`
--

INSERT INTO `entidade` (`id`, `nome`, `tipo`, `estado`) VALUES
(6, 'Tremedal', 'Prefeitura', 'BAHIA'),
(7, 'Condeuba', 'Câmara', 'BAHIA'),
(8, 'Caatiba', 'Câmara', 'BAHIA');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id` int(5) NOT NULL,
  `data` date NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `local` varchar(200) NOT NULL,
  `objeto` longtext NOT NULL,
  `keyarquivo` varchar(200) NOT NULL,
  `entidade` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `data`, `titulo`, `tipo`, `local`, `objeto`, `keyarquivo`, `entidade`, `status`) VALUES
(45, '2015-08-19', 'dsd', 'Contrato', '3', 'dsdsdsds', 'Prefeitura de Tremedal71708151652', 'Prefeitura de Tremedal', 0),
(46, '2015-08-12', 'Km contabilidade Publica', 'Contrato', '5', 'ljl', 'Câmara de Condeuba31708151705', 'Câmara de Condeuba', 0),
(47, '2015-08-20', 'TESTE DE PREGAO', 'Dispensa', '3', 'dsdsdsdss', 'Câmara de Caatiba161708151724', 'Câmara de Caatiba', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usrs`
--

CREATE TABLE `tbl_usrs` (
  `id` int(8) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `status` varchar(8) NOT NULL,
  `permissao` varchar(50) NOT NULL,
  `entidade` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usrs`
--

INSERT INTO `tbl_usrs` (`id`, `nome`, `username`, `password`, `email`, `status`, `permissao`, `entidade`, `tipo`) VALUES
(1, 'Thiago Machado Lopes', 'admin', 'admin', 'admin@admin.com', 'active', 'administrador', 'condeuba', '');

-- --------------------------------------------------------

--
-- Table structure for table `tp_publi`
--

CREATE TABLE `tp_publi` (
  `id` int(5) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tp_publi`
--

INSERT INTO `tp_publi` (`id`, `nome`) VALUES
(1, 'Leis'),
(2, 'Contrato'),
(3, 'Dispensa'),
(4, 'Licitação'),
(5, 'Pregão');

-- --------------------------------------------------------

--
-- Table structure for table `upload_arquivo`
--

CREATE TABLE `upload_arquivo` (
  `id` int(5) NOT NULL,
  `arquivo` varchar(300) NOT NULL,
  `key` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_arquivo`
--

INSERT INTO `upload_arquivo` (`id`, `arquivo`, `key`) VALUES
(75, 'Cópia 3 de GRAFICALOG - Convite de Casamento.pdf', 'Prefeitura de Tremedal71708151652'),
(76, 'Cópia 4 de GRAFICALOG - Convite de Casamento.pdf', 'Prefeitura de Tremedal71708151652'),
(77, 'Cópia de GRAFICALOG - Convite de Casamento.pdf', 'Prefeitura de Tremedal71708151652'),
(78, 'TESTE 03.pdf', 'Câmara de Condeuba31708151705'),
(79, 'TESTE 03.pdf', 'Câmara de Caatiba161708151724');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `entidade` varchar(200) NOT NULL,
  `permissao` varchar(200) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `login`, `senha`, `email`, `endereco`, `cidade`, `estado`, `entidade`, `permissao`, `tipo`) VALUES
(13, 'Thiago', 'Machado Lopes', 'admin', 'admin', 'thiago.89@icloud.com', 'rua oscar silva', 'Vitoria da conquista ', 'Bahia', 'Prefeitura de Tremedal', 'administrador', 'camara'),
(17, 'Thiago', 'Machado Lopes', 'admin2', 'admin', 'thiago@dluzpublicidade.com.br', 'rua centro', 'vitoria da conquista', 'bahia', 'Câmara de Condeuba', '', ''),
(18, 'caatiba', 'sobre nome catiba', 'caatiba', 'admin', 'thiago.89@icloud.com', 'admin', 'admin', 'admin', 'Câmara de Caatiba', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entidade`
--
ALTER TABLE `entidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usrs`
--
ALTER TABLE `tbl_usrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_publi`
--
ALTER TABLE `tp_publi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_arquivo`
--
ALTER TABLE `upload_arquivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entidade`
--
ALTER TABLE `entidade`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_usrs`
--
ALTER TABLE `tbl_usrs`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_publi`
--
ALTER TABLE `tp_publi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `upload_arquivo`
--
ALTER TABLE `upload_arquivo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;