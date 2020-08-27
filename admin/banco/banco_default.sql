--
-- Database: `base_de_dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `audit`
--

DROP TABLE IF EXISTS `audit`;
CREATE TABLE IF NOT EXISTS `audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createdAt` datetime DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `query` text,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(45) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` varchar(120) NOT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `razao_social` varchar(250) NOT NULL,
  `cpf_cnpj` varchar(250) NOT NULL,
  `forma_pagamento` varchar(250) NOT NULL,
  `banco` varchar(250) NOT NULL,
  `agencia` varchar(250) NOT NULL,
  `conta` varchar(250) NOT NULL,
  `codigo_operacao` varchar(250) NOT NULL,
  `nome_titular` varchar(250) NOT NULL,
  `cpf_titular` varchar(250) NOT NULL,
  `rg` varchar(250) NOT NULL,
  `orgao_expedidor` varchar(250) NOT NULL,
  `data_expedicao` date NOT NULL,
  `celular` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `nascimento` date NOT NULL,
  `estado_civil` varchar(250) NOT NULL,
  `nacionalidade` varchar(250) NOT NULL,
  `cep` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numero` varchar(250) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `profissao` varchar(250) NOT NULL,
  `ramo_atividade` varchar(250) NOT NULL,
  `renda_mensal` decimal(15,2) NOT NULL,
  `nome_conjuge` varchar(250) NOT NULL,
  `cpf_conjuge` varchar(250) NOT NULL,
  `rg_conjuge` varchar(250) NOT NULL,
  `orgao_expedidor_conjuge` varchar(250) NOT NULL,
  `nacionalidade_conjuge` varchar(250) NOT NULL,
  `sexo_conjuge` varchar(1) NOT NULL,
  `profissao_conjuge` varchar(250) NOT NULL,
  `celular_conjuge` varchar(250) NOT NULL,
  `telefone_conjuge` varchar(250) NOT NULL,
  `email_conjuge` varchar(250) NOT NULL,
  `observacao` varchar(250),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `clientes`(`nome`, `razao_social`, `cpf_cnpj`, `forma_pagamento`, `banco`, `agencia`, `conta`, `codigo_operacao`, `nome_titular`, `cpf_titular`, `rg`, `orgao_expedidor`, `data_expedicao`, `celular`, `telefone`, `email`, `sexo`, `nascimento`, `estado_civil`, `nacionalidade`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `profissao`, `ramo_atividade`, `renda_mensal`, `nome_conjuge`, `cpf_conjuge`, `rg_conjuge`, `orgao_expedidor_conjuge`, `nacionalidade_conjuge`, `sexo_conjuge`, `profissao_conjuge`, `celular_conjuge`, `telefone_conjuge`, `email_conjuge`, `observacao`) VALUES ('Lucca Oliveira','Ma LTDA','50.332.894/0001-95','cartão','BB','3293','228604-1','013','Lucca Oliveira','402.056.530-90','48.004.522-7','SSP','2000-05-14','(86)9 9800-2176','(86)3234-9710','lucca@gmail.com','M','1970-01-31','Casado','Brasileiro','64000-000','R.Dr. Area Leão','28','Norte','Centro','Teresina','PI','Gerente','Varejo',10000,'Maria Teresa oliveira','635.182.390-07','17.957.691-4','SSP','Brasileira','F','Professora','(86)9 8893-0102','(86)3234-9710','maria.t@gmail.com','');



-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menus_id` int(11) DEFAULT NULL,
  `descricao` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `icone` varchar(45) NOT NULL,
  `createdAt` varchar(45) NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_menus_menus1_idx` (`menus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`id`, `menus_id`, `descricao`, `url`, `icone`, `createdAt`, `updatedAt`) VALUES
(1, NULL, ' Dashboard', '/dashboard', 'fa fa-book', '2017-04-19 21:09:19', '2017-07-06 21:38:52'),
(2, NULL, 'Configurações', '#', 'fa fa-cogs', '2016-07-14 12:19:59', '2017-01-09 17:41:39'),
(3, 2, 'Menus', '/menus', 'fa fa-list', '2016-07-14 12:20:21', NULL),
(4, 2, 'Usuarios', '/usuarios', 'fa fa-user', '2016-07-14 12:20:42', NULL),
(5, 2, 'Perfis de Acesso', '/perfis', 'fa fa-group', '2016-07-14 12:21:01', '2016-07-14 12:21:47'),
(6, NULL, 'Proprietários', '#', 'fa fa-user', '2020-05-21 20:18:44', NULL),
(7, 6, 'Listar Proprietários', '/proprietarios', '', '2020-05-21 20:18:44', NULL),
(8, 6, 'Adicionar Proprietário', '/proprietarios/criar', '', '2020-05-21 20:18:44', NULL),
(9, NULL, 'Imóveis', '#', 'fa fa-home', '2020-05-21 20:18:44', NULL),
(10, 9, 'Listar Imóveis', '/imoveis', '', '2020-05-21 20:18:44', NULL),
(11, 9, 'Adicionar Imóveis', '/imoveis/criar', '', '2020-05-21 20:18:44', NULL),
(12, NULL, 'Parceiros', '#', 'fa fa-user', '2020-05-21 20:18:44', NULL),
(13, 12, 'Listar Parceiros', '/parceiros', '', '2020-05-21 20:18:44', NULL),
(14, 12, 'Adicionar Parceiro', '/parceiros/criar', '', '2020-05-21 20:18:44', NULL),
(15, NULL, 'Corretores', '#', 'fa fa-user', '2020-05-21 20:18:44', NULL),
(16, 15, 'Listar Corretores', '/corretores', '', '2020-05-21 20:18:44', NULL),
(17, 15, 'Adicionar Corretor', '/corretores/criar', '', '2020-05-21 20:18:44', NULL),
(18, NULL, 'Clientes', '#', 'fa fa-user', '2020-05-21 20:18:44', NULL),
(19, 18, 'Listar Clientes', '/clientes', '', '2020-05-21 20:18:44', NULL),
(20, 18, 'Adicionar Cliente', '/clientes/criar', '', '2020-05-21 20:18:44', NULL),
(21, NULL, 'Contratos', '#', 'fa fa-list', '2020-05-21 20:18:44', NULL),
(22, 21, 'Listar Contratos', '/contratos', '', '2020-05-21 20:18:44', NULL),
(23, 21, 'Adicionar Contrato', '/contratos/criar', '', '2020-05-21 20:18:44', NULL),
(24, NULL, 'Ordem de Serviços', '#', 'fa fa-list', '2020-05-21 20:18:44', NULL),
(25, 24, 'Listar Ordens de Serviços', '/ordemservicos', '', '2020-05-21 20:18:44', NULL),
(26, 24, 'Adicionar Ordem de Serviço', '/ordemservicos/criar', '', '2020-05-21 20:18:44', NULL),
(27, NULL, 'Indicações', '#', 'fa fa-list', '2020-05-21 20:18:44', NULL),
(28, 27, 'Listar Indicações', '/indicacoes', '', '2020-05-21 20:18:44', NULL),
(29, 27, 'Adicionar Indicação', '/indicacoes/criar', '', '2020-05-21 20:18:44', NULL),
(30, NULL, 'Chat', '/chat/index', 'fa fa-list', '2020-05-21 20:18:44', NULL);
-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

DROP TABLE IF EXISTS `perfis`;
CREATE TABLE IF NOT EXISTS `perfis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfis`
--

INSERT INTO `perfis` (`id`, `descricao`, `createdAt`, `updatedAt`) VALUES
(2, 'Administrador', '2016-07-14 12:21:26', '2018-08-14 14:33:50'),
(3, 'Colaborador', '2017-03-07 11:46:59', '2017-08-04 16:23:34'),
(4, 'Desenvolvedor', '2017-03-14 23:41:06', '2017-10-26 15:39:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis_menus`
--

DROP TABLE IF EXISTS `perfis_menus`;
CREATE TABLE IF NOT EXISTS `perfis_menus` (
  `perfis_id` int(11) NOT NULL,
  `menus_id` int(11) NOT NULL,
  PRIMARY KEY (`perfis_id`,`menus_id`),
  KEY `fk_perfis_has_menus_menus1_idx` (`menus_id`),
  KEY `fk_perfis_has_menus_perfis1_idx` (`perfis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfis_menus`
--

INSERT INTO `perfis_menus` (`perfis_id`, `menus_id`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(4, 28),
(4, 29),
(4, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `senha` varchar(250) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `principal` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_clientes1_idx` (`clientes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nome`, `email`, `telefone`, `senha`, `createdAt`, `updatedAt`, `clientes_id`, `principal`) VALUES
(2, 'brunoscv', 'Bruno Carvalho', 'bruno@academiahoradorecreio.com.br', NULL, 'CdFnneH/zlky3z/8e44F+Akb6YgcgLqIz5QxoiUfnlTdu2q5lVU9bipM9+vsCFy39k+whgZ02dGeFi6EgpIv+Q==', '2017-01-09 18:29:54', '2017-05-23 05:28:49', NULL, 0);

-- --------------------------------------------------------


--
-- Estrutura da tabela `usuarios_perfis`
--

DROP TABLE IF EXISTS `usuarios_perfis`;
CREATE TABLE IF NOT EXISTS `usuarios_perfis` (
  `usuarios_id` int(11) NOT NULL,
  `perfis_id` int(11) NOT NULL,
  PRIMARY KEY (`usuarios_id`,`perfis_id`),
  KEY `fk_usuarios_has_perfis_perfis1_idx` (`perfis_id`),
  KEY `fk_usuarios_has_perfis_usuarios1_idx` (`usuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_perfis`
--

INSERT INTO `usuarios_perfis` (`usuarios_id`, `perfis_id`) VALUES (2, 4);

DROP TABLE IF EXISTS `proprietarios`;
CREATE TABLE IF NOT EXISTS `proprietarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `razao_social` varchar(250) NOT NULL,
  `cpf_cnpj` varchar(250) NOT NULL,
  `forma_pagamento` varchar(250) NOT NULL,
  `banco` varchar(250) NOT NULL,
  `agencia` varchar(250) NOT NULL,
  `conta` varchar(250) NOT NULL,
  `codigo_operacao` varchar(250) NOT NULL,
  `nome_titular` varchar(250) NOT NULL,
  `cpf_titular` varchar(250) NOT NULL,
  `rg` varchar(250) NOT NULL,
  `orgao_expedidor` varchar(250) NOT NULL,
  `data_expedicao` date NOT NULL,
  `celular` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `nascimento` date NOT NULL,
  `estado_civil` varchar(250) NOT NULL,
  `nacionalidade` varchar(250) NOT NULL,
  `cep` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numero` varchar(250) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `profissao` varchar(250) NOT NULL,
  `ramo_atividade` varchar(250) NOT NULL,
  `renda_mensal` decimal(15,2) NOT NULL,
  `nome_conjuge` varchar(250) NOT NULL,
  `cpf_conjuge` varchar(250) NOT NULL,
  `rg_conjuge` varchar(250) NOT NULL,
  `orgao_expedidor_conjuge` varchar(250) NOT NULL,
  `nacionalidade_conjuge` varchar(250) NOT NULL,
  `sexo_conjuge` varchar(1) NOT NULL,
  `profissao_conjuge` varchar(250) NOT NULL,
  `celular_conjuge` varchar(250) NOT NULL,
  `telefone_conjuge` varchar(250) NOT NULL,
  `email_conjuge` varchar(250) NOT NULL,
  `observacao` varchar(250),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `proprietarios`(`nome`, `razao_social`, `cpf_cnpj`, `forma_pagamento`, `banco`, `agencia`, `conta`, `codigo_operacao`, `nome_titular`, `cpf_titular`, `rg`, `orgao_expedidor`, `data_expedicao`, `celular`, `telefone`, `email`, `sexo`, `nascimento`, `estado_civil`, `nacionalidade`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `profissao`, `ramo_atividade`, `renda_mensal`, `nome_conjuge`, `cpf_conjuge`, `rg_conjuge`, `orgao_expedidor_conjuge`, `nacionalidade_conjuge`, `sexo_conjuge`, `profissao_conjuge`, `celular_conjuge`, `telefone_conjuge`, `email_conjuge`, `observacao`) VALUES ('Lucca Oliveira','Ma LTDA','50.332.894/0001-95','cartão','BB','3293','228604-1','013','Lucca Oliveira','402.056.530-90','48.004.522-7','SSP','2000-05-14','(86)9 9800-2176','(86)3234-9710','lucca@gmail.com','M','1970-01-31','Casado','Brasileiro','64000-000','R.Dr. Area Leão','28','Norte','Centro','Teresina','PI','Gerente','Varejo',10000,'Maria Teresa oliveira','635.182.390-07','17.957.691-4','SSP','Brasileira','F','Professora','(86)9 8893-0102','(86)3234-9710','maria.t@gmail.com','');

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proprietario_id` int(11) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `valor` decimal(15,2) NOT NULL,
  `cep` int(11) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numeroEndereco` varchar(250) NOT NULL,
  `complemento` varchar(250),
  `bairro` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `valorCondominio` decimal(15,2) NOT NULL,
  `valorIPTU` decimal(15,2) NOT NULL,
  `matriculaIPTU` int(11),
  `matriculaAgua` int(11),
  `matriculaLuz` int(11),
  `matriculaGas` int(11),
  `dimensoesDoTerreno` varchar(250),
  `vagasGaragem` int(11) NOT NULL,
  `segunda` varchar(250),
  `terca` varchar(250),
  `quarta` varchar(250),
  `quinta` varchar(250),
  `sexta` varchar(250),
  `sabado` varchar(250),
  `domingo` varchar(250),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `imoveis`(`proprietario_id`, `tipo`, `valor`, `cep`, `endereco`, `numeroEndereco`, `complemento`, `bairro`, `cidade`, `estado`, `valorCondominio`, `valorIPTU`, `matriculaIPTU`, `matriculaAgua`, `matriculaLuz`, `matriculaGas`, `dimensoesDoTerreno`, `vagasGaragem`) VALUES (11,'Apartamento',1100,64000000,'R. HONORIO PARENTE',1950,'GOLDEN PLACE, APT 104','Horto Florestal','Teresina','Piauí',0,0,null,27056775,13414569,null,null,1);

DROP TABLE IF EXISTS `corretores`;
CREATE TABLE IF NOT EXISTS `corretores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `razao_social` varchar(250) NOT NULL,
  `cpf_cnpj` varchar(250) NOT NULL,
  `forma_pagamento` varchar(250) NOT NULL,
  `banco` varchar(250) NOT NULL,
  `agencia` varchar(250) NOT NULL,
  `conta` varchar(250) NOT NULL,
  `codigo_operacao` varchar(250) NOT NULL,
  `nome_titular` varchar(250) NOT NULL,
  `cpf_titular` varchar(250) NOT NULL,
  `rg` varchar(250) NOT NULL,
  `orgao_expedidor` varchar(250) NOT NULL,
  `data_expedicao` date NOT NULL,
  `celular` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `nascimento` date NOT NULL,
  `estado_civil` varchar(250) NOT NULL,
  `nacionalidade` varchar(250) NOT NULL,
  `cep` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numero` varchar(250) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `profissao` varchar(250) NOT NULL,
  `ramo_atividade` varchar(250) NOT NULL,
  `renda_mensal` decimal(15,2) NOT NULL,
  `nome_conjuge` varchar(250) NOT NULL,
  `cpf_conjuge` varchar(250) NOT NULL,
  `rg_conjuge` varchar(250) NOT NULL,
  `orgao_expedidor_conjuge` varchar(250) NOT NULL,
  `nacionalidade_conjuge` varchar(250) NOT NULL,
  `sexo_conjuge` varchar(1) NOT NULL,
  `profissao_conjuge` varchar(250) NOT NULL,
  `celular_conjuge` varchar(250) NOT NULL,
  `telefone_conjuge` varchar(250) NOT NULL,
  `email_conjuge` varchar(250) NOT NULL,
  `observacao` varchar(250),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `corretores`(`nome`, `razao_social`, `cpf_cnpj`, `forma_pagamento`, `banco`, `agencia`, `conta`, `codigo_operacao`, `nome_titular`, `cpf_titular`, `rg`, `orgao_expedidor`, `data_expedicao`, `celular`, `telefone`, `email`, `sexo`, `nascimento`, `estado_civil`, `nacionalidade`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `profissao`, `ramo_atividade`, `renda_mensal`, `nome_conjuge`, `cpf_conjuge`, `rg_conjuge`, `orgao_expedidor_conjuge`, `nacionalidade_conjuge`, `sexo_conjuge`, `profissao_conjuge`, `celular_conjuge`, `telefone_conjuge`, `email_conjuge`, `observacao`) VALUES ('Lucca Oliveira','Ma LTDA','50.332.894/0001-95','cartão','BB','3293','228604-1','013','Lucca Oliveira','402.056.530-90','48.004.522-7','SSP','2000-05-14','(86)9 9800-2176','(86)3234-9710','lucca@gmail.com','M','1970-01-31','Casado','Brasileiro','64000-000','R.Dr. Area Leão','28','Norte','Centro','Teresina','PI','Gerente','Varejo',10000,'Maria Teresa oliveira','635.182.390-07','17.957.691-4','SSP','Brasileira','F','Professora','(86)9 8893-0102','(86)3234-9710','maria.t@gmail.com','');


DROP TABLE IF EXISTS `parceiros`;
CREATE TABLE IF NOT EXISTS `parceiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `razao_social` varchar(250) NOT NULL,
  `cpf_cnpj` varchar(250) NOT NULL,
  `forma_pagamento` varchar(250) NOT NULL,
  `banco` varchar(250) NOT NULL,
  `agencia` varchar(250) NOT NULL,
  `conta` varchar(250) NOT NULL,
  `codigo_operacao` varchar(250) NOT NULL,
  `nome_titular` varchar(250) NOT NULL,
  `cpf_titular` varchar(250) NOT NULL,
  `rg` varchar(250) NOT NULL,
  `orgao_expedidor` varchar(250) NOT NULL,
  `data_expedicao` date NOT NULL,
  `celular` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `nascimento` date NOT NULL,
  `estado_civil` varchar(250) NOT NULL,
  `nacionalidade` varchar(250) NOT NULL,
  `cep` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numero` varchar(250) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `profissao` varchar(250) NOT NULL,
  `ramo_atividade` varchar(250) NOT NULL,
  `renda_mensal` decimal(15,2) NOT NULL,
  `nome_conjuge` varchar(250) NOT NULL,
  `cpf_conjuge` varchar(250) NOT NULL,
  `rg_conjuge` varchar(250) NOT NULL,
  `orgao_expedidor_conjuge` varchar(250) NOT NULL,
  `nacionalidade_conjuge` varchar(250) NOT NULL,
  `sexo_conjuge` varchar(1) NOT NULL,
  `profissao_conjuge` varchar(250) NOT NULL,
  `celular_conjuge` varchar(250) NOT NULL,
  `telefone_conjuge` varchar(250) NOT NULL,
  `email_conjuge` varchar(250) NOT NULL,
  `observacao` varchar(250),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `parceiros`(`nome`, `razao_social`, `cpf_cnpj`, `forma_pagamento`, `banco`, `agencia`, `conta`, `codigo_operacao`, `nome_titular`, `cpf_titular`, `rg`, `orgao_expedidor`, `data_expedicao`, `celular`, `telefone`, `email`, `sexo`, `nascimento`, `estado_civil`, `nacionalidade`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `profissao`, `ramo_atividade`, `renda_mensal`, `nome_conjuge`, `cpf_conjuge`, `rg_conjuge`, `orgao_expedidor_conjuge`, `nacionalidade_conjuge`, `sexo_conjuge`, `profissao_conjuge`, `celular_conjuge`, `telefone_conjuge`, `email_conjuge`, `observacao`) VALUES ('Lucca Oliveira','Ma LTDA','50.332.894/0001-95','cartão','BB','3293','228604-1','013','Lucca Oliveira','402.056.530-90','48.004.522-7','SSP','2000-05-14','(86)9 9800-2176','(86)3234-9710','lucca@gmail.com','M','1970-01-31','Casado','Brasileiro','64000-000','R.Dr. Area Leão','28','Norte','Centro','Teresina','PI','Gerente','Varejo',10000,'Maria Teresa oliveira','635.182.390-07','17.957.691-4','SSP','Brasileira','F','Professora','(86)9 8893-0102','(86)3234-9710','maria.t@gmail.com','');

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel_id` int(11) NOT NULL,
  `corretor_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `data_inicio_contrato` date NOT NULL,
  `data_fim_contrato` date NOT NULL,
  `valor_aluguel` decimal(15,2) NOT NULL,
  `data_vencimento` date NOT NULL,
  `juros` decimal(15,2) NOT NULL,
  `multa` decimal(15,2) NOT NULL,
  `desconto_pontualidade` decimal(15,2) NOT NULL,
  `clausulas_adicionais` varchar(250) NOT NULL,
  `taxa_adm` decimal(15,2) NOT NULL,
  `tem_repasse_garantido` boolean NOT NULL,
  `qtd_meses_rep_garantido` int(11) NOT NULL,
  `data_repasse` date NOT NULL,
  `dias_tipo` varchar(45) NOT NULL,
  `cobra_tarifa` boolean NOT NULL,
  `finalidade_contrato` varchar(45) NOT NULL,
  `emite_nf` boolean NOT NULL,
  `retem_imposto` boolean NOT NULL,
  `quem_retera` varchar(45) NOT NULL,
  `fiador_id` int(11) NOT NULL,
  `garantia_tipo` varchar(45) NOT NULL,
  `data_inicio_garantia` date NOT NULL,
  `data_fim_garantia` date NOT NULL,
  `valor_garantia` decimal(15,2) NOT NULL,
  `obs_garantia` varchar(250) NOT NULL,
  `tem_seguro_incendio` boolean NOT NULL,
  `data_inicio_seguro` date NOT NULL,
  `data_fim_seguro` date NOT NULL,
  `valor_seguro` decimal(15,2) NOT NULL,
  `nome_seguradora` varchar(45) NOT NULL,
  `apolice` varchar(45) NOT NULL,
  `obs_seguro` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `contratos`(`imovel_id`, `corretor_id`, `cliente_id`, `data_inicio_contrato`, `data_fim_contrato`, `valor_aluguel`, `data_vencimento`, `juros`, `multa`, `desconto_pontualidade`, `clausulas_adicionais`, `taxa_adm`, `tem_repasse_garantido`, `qtd_meses_rep_garantido`, `data_repasse`, `dias_tipo`, `cobra_tarifa`, `finalidade_contrato`, `emite_nf`, `retem_imposto`, `quem_retera`, `fiador_id`, `garantia_tipo`, `data_inicio_garantia`, `data_fim_garantia`, `valor_garantia`, `obs_garantia`, `tem_seguro_incendio`, `data_inicio_seguro`, `data_fim_seguro`, `valor_seguro`, `nome_seguradora`, `apolice`, `obs_seguro`) VALUES (12, 11, 11, '2020-03-15','2022-04-25',780,'2020-03-15',10,4,7,'Sem alterações',5,True,6,'2020-03-17','Corridos',True,'Residencial',True,True,'Empresa MA',11,'Caução','2020-03-17','2020-09-17',6000,'',True,'2020-03-15','2020-03-15',15000,'Seg log',09132,'');

DROP TABLE IF EXISTS `ordem_servico`;
CREATE TABLE IF NOT EXISTS `ordem_servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parceiro_id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL,
  `valor` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ordem_servico`(`parceiro_id`, `descricao`, `status`, `valor`) VALUES (12,'Tirar 15 fotos','Andamento',500);

DROP TABLE IF EXISTS `indicacoes`;
CREATE TABLE IF NOT EXISTS `indicacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parceiro_id` int(11) NOT NULL,
  `imovel_id` int(11) NOT NULL,
  `percentual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `indicacoes`(`parceiro_id`, `imovel_id`, `percentual`) VALUES (12,12,5);
