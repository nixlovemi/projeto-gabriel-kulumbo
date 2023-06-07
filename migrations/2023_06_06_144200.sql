CREATE TABLE `tb_curriculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `sobrenome` varchar(80) NOT NULL,
  `email` varchar(150) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `curriculo` text NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_tb_curriculos_email` (`email`)
);