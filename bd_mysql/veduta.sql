CREATE SCHEMA `veduta` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `veduta`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `sexo` VARCHAR(45) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `cpf` INT(11) NOT NULL,
  `tel1` INT(11) NOT NULL,
  `tel2` INT(11),
  `estado` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `rua` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NOT NULL,
  `cep` INT(8) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `newsletter` BOOLEAN NOT NULL,
  PRIMARY KEY (`idusuarios`));
  
  /* Pesquisar como armazenar fotos dos produtos, perguntas e respostas de cada produto, avaliação do produto */
  
  CREATE TABLE `veduta`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `id` INT NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `preco` FLOAT NOT NULL,
  `avaliacao` FLOAT NOT NULL,
  `disponibilidade` BOOLEAN NOT NULL,
  `descricao` VARCHAR (1000),
  PRIMARY KEY (`idprodutos`),
  CONSTRAINT `usuario` FOREIGN KEY (id) REFERENCES usuarios (idusuarios)
  );