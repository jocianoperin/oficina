-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2018 às 14:29
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `codigo` int(10) unsigned NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preco` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `liberado` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcontatos`
--

CREATE TABLE IF NOT EXISTS `tcontatos` (
  `ConCodigo` int(10) unsigned NOT NULL,
  `ConNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ConEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ConAssunto` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ConMensagem` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tcontatos`
--

INSERT INTO `tcontatos` (`ConCodigo`, `ConNome`, `ConEmail`, `ConAssunto`, `ConMensagem`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(29, 'Yuri Reis Correa', 'yurireisc@gmail.com', 'Contato Sobre Algo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat ornare imperdiet. Vivamus id nibh ac lorem interdum commodo. Vivamus vel dolor in arcu commodo posuere. Integer accumsan quam ac ligula tincidunt pretium. Maecenas scelerisque risus in eleifend scelerisque. Pellentesque vitae risus lectus. Fusce venenatis semper enim a aliquet. Phasellus sit amet purus quam. Nam id cursus felis. Curabitur lorem magna, varius in elit vitae, consectetur ultricies orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu elit a metus ultrices sodales. Donec vel arcu quis felis interdum molestie non at elit. Sed hendrerit semper egestas. Sed pretium nulla dui, ac congue leo aliquet ac.\r\n\r\nCras rhoncus ultrices tempus. Aliquam gravida lobortis diam eget vehicula. Duis imperdiet, nunc vitae elementum cursus, nunc massa sodales lectus, non lobortis justo mi vitae mi. Pellentesque quis dapibus mi. Praesent purus turpis, ultrices eu finibus vitae,', NULL, '2018-10-31 01:49:33', '2018-10-31 01:49:33', NULL),
(30, 'Andrei Corezolla', 'andrei@hotmail.com.br', 'Outro Contato', 'Um teste', NULL, '2018-10-31 01:50:26', '2018-10-31 01:57:05', '2018-10-31 01:57:05'),
(31, 'André Ortoncelli', 'andre@andre.com', 'Teste 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat ornare imperdiet. Vivamus id nibh ac lorem interdum commodo. Vivamus vel dolor in arcu commodo posuere. Integer accumsan quam ac ligula tincidunt pretium. Maecenas scelerisque risus in eleifend scelerisque. Pellentesque vitae risus lectus. Fusce venenatis semper enim a aliquet. Phasellus sit amet purus quam. Nam id cursus felis. Curabitur lorem magna, varius in elit vitae, consectetur ultricies orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu elit a metus ultrices sodales. Donec vel arcu quis felis interdum molestie non at elit. Sed hendrerit semper egestas. Sed pretium nulla dui, ac congue leo aliquet ac.</p>\r\n\r\n<p>Cras rhoncus ultrices tempus. Aliquam gravida lobortis diam eget vehicula. Duis imperdiet, nunc vitae elementum cursus, nunc massa sodales lectus, non lobortis justo mi vitae mi. Pellentesque quis dapibus mi. Praesent purus turpis, ultrices eu fini', NULL, '2018-10-31 01:56:39', '2018-10-31 01:56:39', NULL),
(32, 'Yuri', 'yuri.rcorrea97@gmail.com', 'Lalala', 'wsinaidfiodjknsf', NULL, '2018-11-19 09:20:18', '2018-11-19 09:51:20', '2018-11-19 09:51:20'),
(33, 'Yuri', 'yuri.rcorrea97@gmail.com', 'Lalala', 'wsinaidfiodjknsf', NULL, '2018-11-19 09:20:43', '2018-11-19 09:49:58', '2018-11-19 09:49:58'),
(34, 'Yuri', 'yuri.rcorrea97@gmail.com', 'Lalala', 'wsinaidfiodjknsf', NULL, '2018-11-19 09:22:20', '2018-11-19 09:22:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teventos`
--

CREATE TABLE IF NOT EXISTS `teventos` (
  `EveCodigo` int(11) NOT NULL,
  `EveTitulo` varchar(200) NOT NULL,
  `EveDescricao` varchar(9999) NOT NULL,
  `EveInicio` date NOT NULL,
  `EveFim` date NOT NULL,
  `EveLiberado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `teventos`
--

INSERT INTO `teventos` (`EveCodigo`, `EveTitulo`, `EveDescricao`, `EveInicio`, `EveFim`, `EveLiberado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Festival da Canção', 'Festival que as pessoas cantam', '2018-11-19', '2018-11-21', 1, '2018-11-19 10:24:34', '2018-11-19 10:24:34', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tmembros`
--

CREATE TABLE IF NOT EXISTS `tmembros` (
  `MemCodigo` int(11) NOT NULL,
  `MemNome` varchar(200) NOT NULL,
  `MemRepresentanteDiscente` int(11) NOT NULL DEFAULT '0',
  `MemLiberado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tnoticias`
--

CREATE TABLE IF NOT EXISTS `tnoticias` (
  `NotCodigo` int(11) NOT NULL,
  `NotTitulo` varchar(500) NOT NULL,
  `NotTexto` varchar(9999) NOT NULL,
  `NotLiberado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tnoticias`
--

INSERT INTO `tnoticias` (`NotCodigo`, `NotTitulo`, `NotTexto`, `NotLiberado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Notícia Bombástica', '<p>aaaaaaaa</p>\r\n', 1, '2018-11-19 07:02:32', '2018-11-19 07:11:54', NULL),
(4, 'Outra Notícia', '<p>dfdgfhgj</p>\r\n', 1, '2018-11-19 07:13:11', '2018-11-19 07:13:16', '2018-11-19 07:13:16'),
(5, 'Outra Notícia', '<p>dfdgfhgj</p>\r\n', 1, '2018-11-19 07:14:16', '2018-11-19 07:14:21', '2018-11-19 07:14:21'),
(6, 'Outra Notícia', '<p>asdsadasdasdasdcxvcxv</p>\r\n', 1, '2018-11-19 07:47:13', '2018-11-19 08:11:52', NULL),
(7, 'Noticia 3', '<p>aodfnsljnfdlnf</p>\r\n', 1, '2018-11-19 08:14:49', '2018-11-19 08:14:49', NULL),
(8, 'Noticia 4', '<p>dbvfnmndsfgfhmgj</p>\r\n', 1, '2018-11-19 08:36:59', '2018-11-19 08:36:59', NULL),
(9, 'Noticia 5', '<p>kjdsnfksljnfkldsjnfkljsdnf</p>\r\n', 1, '2018-11-19 08:38:57', '2018-11-19 08:38:57', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tsobre`
--

CREATE TABLE IF NOT EXISTS `tsobre` (
  `SobCodigo` int(11) NOT NULL,
  `SobPresidente` varchar(100) NOT NULL,
  `SobTexto` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tsobre`
--

INSERT INTO `tsobre` (`SobCodigo`, `SobPresidente`, `SobTexto`, `created_at`, `updated_at`) VALUES
(1, 'Yuri Reis', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis arcu cursus lectus tristique volutpat. Aenean ut sollicitudin lectus, eget lacinia nibh. Aliquam nec magna at libero eleifend aliquet. Aliquam at urna blandit, vulputate orci placerat, auctor lacus. Fusce porttitor vel ipsum in porta. Sed lacus risus, dictum at odio faucibus, sodales pulvinar massa. Nam mauris orci, maximus at quam porta, placerat feugiat nunc.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis arcu cursus lectus tristique volutpat. Aenean ut sollicitudin lectus, eget lacinia nibh. Aliquam nec magna at libero eleifend aliquet. Aliquam at urna blandit, vulputate orci placerat, auctor lacus. Fusce porttitor vel ipsum in porta. Sed lacus risus, dictum at odio faucibus, sodales pulvinar massa. Nam mauris orci, maximus at quam porta, placerat feugiat nunc.</p>\r\n', '2018-10-07 00:07:19', '2018-10-07 03:07:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tusers`
--

CREATE TABLE IF NOT EXISTS `tusers` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tusers`
--

INSERT INTO `tusers` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'ANDREI COREZOLLA', 'andrei@hotmail.com.br', '$2y$10$xYB8iozvPjmcjsdRFNc0POESBoKFwjxjdz7L4dQAaRNspx1fHwHmW', 'HPh0bCpTR9CLkpHQOd2ISTJMELs89zQRTJHIJYKq8k5BlaOC88FTT4EKFziN', '2018-10-17 03:24:11', '2018-11-13 06:21:11', NULL),
(3, 'YURI REIS', 'yuri@reis.com', '$2y$10$IRgnHc169jfZwnwL03jt6uP3vSFNkVRjbSEPmbCoMDF9uziN6XeEO', NULL, '2018-11-13 06:21:05', '2018-11-13 06:21:05', NULL),
(4, 'Yuri Reis', 'yuri.rcorrea97@gmail.com', '$2y$10$9MVpwcfjAbKrtgAqz.KzF.W1Y3Fe.exq5VFy5AYY4JEr21R3tqhbS', NULL, '2018-11-19 06:53:37', '2018-11-19 06:53:37', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ANDREI COREZOLLA', 'andrei@hotmail.com', '$2y$10$/rpfi1Eb9Isv/.68tOJGf.K6qCTM.MS7eJvoLO.dmjA0yXpIoMhjK', 'Z3KT2h2li6iqe9E1oIY3FDMQ71Th9sLryPeFh6HcZzK7dlinm4U9BFANUEnd', '2018-09-26 01:59:49', '2018-10-03 01:58:20', NULL),
(3, 'teste', 'andrei@gmail.com', '$2y$10$ajbuaNsSgbYx/IchK5HWxuAwfjqcrb.AbioPTVu/AEIPVKzI4gpum', NULL, '2018-09-27 02:38:50', '2018-09-27 02:38:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `tcontatos`
--
ALTER TABLE `tcontatos`
  ADD PRIMARY KEY (`ConCodigo`);

--
-- Indexes for table `teventos`
--
ALTER TABLE `teventos`
  ADD PRIMARY KEY (`EveCodigo`);

--
-- Indexes for table `tmembros`
--
ALTER TABLE `tmembros`
  ADD PRIMARY KEY (`MemCodigo`);

--
-- Indexes for table `tnoticias`
--
ALTER TABLE `tnoticias`
  ADD PRIMARY KEY (`NotCodigo`);

--
-- Indexes for table `tsobre`
--
ALTER TABLE `tsobre`
  ADD PRIMARY KEY (`SobCodigo`);

--
-- Indexes for table `tusers`
--
ALTER TABLE `tusers`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tcontatos`
--
ALTER TABLE `tcontatos`
  MODIFY `ConCodigo` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `teventos`
--
ALTER TABLE `teventos`
  MODIFY `EveCodigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tnoticias`
--
ALTER TABLE `tnoticias`
  MODIFY `NotCodigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tusers`
--
ALTER TABLE `tusers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
