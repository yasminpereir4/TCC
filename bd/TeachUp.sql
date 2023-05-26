-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Maio-2023 às 04:39
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtcc`
--
CREATE DATABASE IF NOT EXISTS `bdtcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdtcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

DROP TABLE IF EXISTS `amigos`;
CREATE TABLE IF NOT EXISTS `amigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_de` varchar(200) NOT NULL,
  `id_para` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`id`, `id_de`, `id_para`, `status`) VALUES
(124, '46', 'Kaykera', 0),
(125, '47', 'nishiz', 0),
(127, '31', 'Kaykera', 0),
(128, '47', 'martinsanaju', 0),
(129, '45', 'nishiz', 0),
(130, '@martinsanaju', '@yasmin', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

DROP TABLE IF EXISTS `curtidas`;
CREATE TABLE IF NOT EXISTS `curtidas` (
  `id_curtida` int(11) NOT NULL AUTO_INCREMENT,
  `id_publi` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_curtida`),
  KEY `id_publi` (`id_publi`),
  KEY `codigo_usuario` (`codigo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=381 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curtidas`
--

INSERT INTO `curtidas` (`id_curtida`, `id_publi`, `codigo_usuario`) VALUES
(2, 73, 45),
(4, 73, 45),
(5, 73, 45),
(6, 73, 45),
(7, 73, 45),
(10, 0, 0),
(11, 0, 0),
(12, 0, 0),
(13, 0, 0),
(14, 0, 0),
(15, 0, 0),
(16, 0, 0),
(17, 0, 0),
(18, 0, 0),
(19, 0, 0),
(20, 0, 0),
(21, 0, 0),
(22, 0, 0),
(23, 0, 0),
(24, 0, 0),
(25, 0, 0),
(26, 0, 0),
(27, 0, 0),
(28, 0, 0),
(29, 0, 0),
(30, 0, 0),
(31, 0, 0),
(32, 0, 0),
(33, 0, 0),
(34, 0, 0),
(35, 0, 0),
(36, 0, 0),
(37, 0, 0),
(38, 0, 0),
(39, 0, 0),
(40, 0, 0),
(41, 0, 0),
(42, 0, 0),
(43, 0, 0),
(44, 0, 0),
(45, 0, 0),
(46, 0, 0),
(47, 0, 0),
(48, 0, 0),
(49, 0, 0),
(50, 0, 0),
(51, 0, 0),
(52, 0, 0),
(53, 0, 0),
(54, 0, 0),
(55, 0, 0),
(56, 0, 0),
(57, 0, 0),
(58, 0, 0),
(59, 0, 0),
(60, 0, 0),
(61, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(65, 0, 0),
(66, 0, 0),
(67, 0, 0),
(68, 0, 0),
(69, 0, 0),
(70, 0, 0),
(71, 0, 0),
(72, 0, 0),
(73, 0, 0),
(74, 0, 0),
(75, 0, 0),
(76, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0),
(80, 0, 0),
(81, 0, 0),
(82, 0, 0),
(83, 0, 0),
(84, 0, 0),
(85, 0, 0),
(86, 0, 0),
(87, 0, 0),
(88, 0, 0),
(89, 0, 0),
(90, 0, 0),
(91, 0, 0),
(92, 0, 0),
(93, 0, 0),
(94, 0, 0),
(95, 0, 0),
(96, 0, 0),
(97, 0, 0),
(98, 0, 0),
(99, 0, 0),
(100, 0, 0),
(101, 0, 0),
(102, 0, 0),
(103, 0, 0),
(104, 0, 0),
(105, 0, 0),
(106, 0, 0),
(107, 0, 0),
(108, 0, 0),
(109, 0, 0),
(110, 0, 0),
(111, 0, 0),
(112, 0, 0),
(113, 0, 0),
(114, 0, 0),
(115, 0, 0),
(116, 0, 0),
(117, 0, 0),
(118, 0, 0),
(119, 0, 0),
(120, 0, 0),
(121, 0, 0),
(122, 0, 0),
(123, 0, 0),
(124, 0, 0),
(125, 0, 0),
(126, 0, 0),
(127, 0, 0),
(128, 0, 0),
(129, 0, 0),
(130, 0, 0),
(131, 0, 0),
(132, 0, 0),
(133, 0, 0),
(134, 0, 0),
(135, 0, 0),
(136, 0, 0),
(137, 0, 0),
(138, 0, 0),
(139, 0, 0),
(140, 0, 0),
(141, 0, 0),
(142, 0, 0),
(143, 0, 0),
(144, 0, 0),
(145, 0, 0),
(146, 0, 0),
(147, 0, 0),
(148, 0, 0),
(149, 0, 0),
(150, 0, 0),
(151, 0, 0),
(152, 0, 0),
(153, 0, 0),
(154, 0, 0),
(155, 0, 0),
(156, 0, 0),
(157, 0, 0),
(158, 0, 0),
(159, 0, 0),
(160, 0, 0),
(161, 0, 0),
(162, 0, 0),
(163, 0, 0),
(164, 0, 0),
(165, 0, 0),
(166, 0, 0),
(167, 0, 0),
(168, 0, 0),
(287, 78, 40),
(318, 78, 47),
(334, 85, 29),
(337, 79, 45),
(338, 94, 45),
(340, 96, 45),
(341, 98, 45),
(348, 103, 1),
(355, 1, 2),
(356, 2, 2),
(357, 1, 1),
(358, 1, 3),
(359, 2, 3),
(360, 3, 3),
(365, 4, 4),
(366, 4, 1),
(371, 4, 5),
(372, 2, 5),
(373, 1, 5),
(375, 5, 3),
(377, 2, 1),
(379, 1, 4),
(380, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forgot_password`
--

DROP TABLE IF EXISTS `forgot_password`;
CREATE TABLE IF NOT EXISTS `forgot_password` (
  `email` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forgot_password`
--

INSERT INTO `forgot_password` (`email`, `token`) VALUES
('$email', '$token');

-- --------------------------------------------------------

--
-- Estrutura da tabela `interesses`
--

DROP TABLE IF EXISTS `interesses`;
CREATE TABLE IF NOT EXISTS `interesses` (
  `id_interesse` int(11) NOT NULL AUTO_INCREMENT,
  `nome_interesse` varchar(100) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_interesse`),
  KEY `codigo_usuario` (`codigo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `interesses`
--

INSERT INTO `interesses` (`id_interesse`, `nome_interesse`, `codigo_usuario`) VALUES
(19, 'tecnologia;arte;moda', 1),
(20, 'tecnologia;arte;moda', 2),
(21, 'tecnologia;arte;moda;culinaria', 3),
(22, 'esporte;tecnologia;arte;moda;culinaria', 4),
(23, 'tecnologia;arte;moda', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes_salvas`
--

DROP TABLE IF EXISTS `publicacoes_salvas`;
CREATE TABLE IF NOT EXISTS `publicacoes_salvas` (
  `id_salvo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL,
  PRIMARY KEY (`id_salvo`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publicacoes_salvas`
--

INSERT INTO `publicacoes_salvas` (`id_salvo`, `codigo_usuario`, `id_publi`) VALUES
(12, 4, 2),
(13, 4, 1),
(15, 5, 2),
(16, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabcoment`
--

DROP TABLE IF EXISTS `tabcoment`;
CREATE TABLE IF NOT EXISTS `tabcoment` (
  `codcoment` int(11) NOT NULL AUTO_INCREMENT,
  `codpost` int(11) NOT NULL,
  `codusuario` int(11) NOT NULL,
  `comentario` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codcoment`),
  KEY `codigo` (`codpost`),
  KEY `coduser` (`codusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabcoment`
--

INSERT INTO `tabcoment` (`codcoment`, `codpost`, `codusuario`, `comentario`) VALUES
(1, 1, 1, 'Eu adorei! Continua com os seus conteudos!'),
(3, 2, 2, 'Já salvei!'),
(4, 1, 3, 'Sempre tive dificuldade com essa parte, voce explicando pareceu fácil!'),
(5, 3, 3, 'Comenta ai se deu certoo!\r\n'),
(6, 2, 4, 'Isso explicaram na minha faculdade, estava procurando outra plataforma que explicasse tão bem. '),
(7, 4, 1, 'ESTAVA DOIDA PROCURANDO ISSO!'),
(8, 5, 4, 'Muito útil!'),
(9, 3, 4, 'Deu muito certo!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_cadastro`
--

DROP TABLE IF EXISTS `tabela_cadastro`;
CREATE TABLE IF NOT EXISTS `tabela_cadastro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datanasc` date NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_cadastro`
--

INSERT INTO `tabela_cadastro` (`codigo`, `nome`, `username`, `datanasc`, `sexo`, `telefone`, `email`, `senha`, `foto`, `bio`) VALUES
(1, 'Ana Julia', 'martinssanaju', '2005-04-29', 'feminino', '(11) 97012-0422', 'martinsana0903@gmail.com', '202cb962ac59075b964b07152d234b70', 'imgUsuario/df4f76bc44a9596a7a0303a72e40d2e9.jpg', '18y || SP'),
(2, 'Luisa Nogueira', 'LuNogueira', '2005-05-20', 'feminino', '(11) 97012-0422', 'luisa@gmail.com', '202cb962ac59075b964b07152d234b70', 'imgUsuario/cec04ae9a1a0f55d928638c6abeecad5.jpg', ' Luisa || 17y'),
(3, 'Ester', 'EsterOli', '2005-04-04', 'feminino', '(11) 20239-9230', 'ester@gmail.com', '202cb962ac59075b964b07152d234b70', 'imgUsuario/78374e8eaf0035092361ae5d8702e6ef.jpg', 'Ester || SP || Receitas sempre aqui!'),
(4, 'Miqueias', 'MiqMiq', '2005-09-28', 'masculino', '(29) 23993-9322', 'miq@gmail.com', '202cb962ac59075b964b07152d234b70', 'imgUsuario/8624080825a0a3011eab2e7ac84ef20e.jpg', 'Miq || 17y '),
(5, 'Yasmin', 'yasmines', '2004-11-03', 'feminino', '(11) 97012-0422', 'yas@gmail.com', '202cb962ac59075b964b07152d234b70', 'imgUsuario/77351b65f2316525d47e951e026fb1f1.jpg', ' Yas || 18y || Trabalho como Front-End');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabpubli`
--

DROP TABLE IF EXISTS `tabpubli`;
CREATE TABLE IF NOT EXISTS `tabpubli` (
  `id_publi` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fotopubli` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `curtidas` int(11) NOT NULL,
  PRIMARY KEY (`id_publi`),
  KEY `codigo_usuario` (`codigo_usuario`),
  KEY `categoria` (`categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabpubli`
--

INSERT INTO `tabpubli` (`id_publi`, `descricao`, `fotopubli`, `codigo_usuario`, `categoria`, `curtidas`) VALUES
(1, 'APRENDENDO COM OS DESENHOS!!!   Como a cabeça é a parte mais expressiva do corpo humano, começaremos nosso curso por ela. O desenho de qualquer cabeça tem como base os mesmos princípios básicos. A cabeça é formada como uma bexiga cheia que possui dois olhos e duas orelhas, um nariz e uma boca. Pense na cabeça do personagem como um balão, pois desta forma será mais fácil de lembrar que ela possui altura, largura e profundidade.', 'imgPublicacoes/95aa7d0f6e1f3e77a844e68c5dcb58cc.jpg', 2, 'Arte', 5),
(2, 'O QUE É JAVASCRIPT?JavaScript é uma linguagem de programação que permite implementar funcionalidades mais complexas em páginas web. Sempre que uma página web faz mais do que apenas mostrar informações estáticas para você - ela mostra em tempo real conteúdos atualizados, mapas interativos, animações gráficas em 2D/3D, vídeos, etc. - você pode apostar que o Javascript provavelmente está envolvido.', 'imgPublicacoes/dd9ace0ff50f125e11c5ca235de036b9.jpg', 1, 'Tecnologia', 4),
(3, 'BOLO DE CHOCOLATE!Massa:ovo4 ovoschocolate em pó4 colheres (sopa) de chocolate em pómanteiga2 colheres (sopa) de manteigafarinha de trigo3 xícaras (chá) de farinha de trigoaçúcar2 xícaras (chá) de açúcarfermento em pó2 colheres (sopa) de fermentoleite1 xícara (chá) de leiteEm um liquidificador adicione os ovos, o chocolate em pó, a manteiga, a farinha de trigo, o açúcar e o leite, depois bata por 5 minutos.', 'imgPublicacoes/ca441ba96a7ac973efb1f21350342327.jpg', 3, 'Culinaria', 1),
(4, 'O WampServer é um pacotão completo, nele obtemos: Apache 2.2.22, MySQL 5.5.24, PHP 5.3.13 e o PHPMyAdmin 3.4.10.1. Vamos iniciar, entrando no site oficial do WampServer: http://www.wampserver.com/.', 'imgPublicacoes/9bc8035655ddf3bf79ca8645bfbb8756.jpg', 4, 'Tecnologia', 3),
(5, 'Cores para usar no Inverno/Outono!', 'imgPublicacoes/3e3db06afba2741cdc9262a13396c531.jpg', 5, 'Moda', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
