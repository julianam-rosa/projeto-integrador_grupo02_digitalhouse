CREATE SCHEMA `veduta` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `veduta`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `sex` VARCHAR(45) NOT NULL,
  `birthdate` DATE NOT NULL,
  `cpf` INT(11) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `newsletter` BOOLEAN NOT NULL,
  PRIMARY KEY (`id`));
  
  /* Pesquisar como armazenar fotos dos produtos, perguntas e respostas de cada produto, avaliação do produto */
  
CREATE TABLE `veduta`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idusers` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `price` FLOAT NOT NULL,
  `rating` FLOAT NOT NULL,
  `availability` BOOLEAN NOT NULL,
  `description` VARCHAR (1000),
  PRIMARY KEY (`id`),
  CONSTRAINT `users_id_FK` FOREIGN KEY (idusers) REFERENCES users (id)
  );
  
CREATE TABLE `veduta`.`adresses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idusers` INT NOT NULL,
  `state` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `neighborhood` VARCHAR(45) NOT NULL,
  `street` VARCHAR(45) NOT NULL,
  `complement` VARCHAR(45) NOT NULL,
  `cep` INT(8) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `users_id_FK2` FOREIGN KEY (idusers) REFERENCES users (id)
  );
  
CREATE TABLE `veduta`.`telephones` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idusers` INT NOT NULL,
  `tel1` INT(11) NOT NULL,
  `tel2` INT(11),
  PRIMARY KEY (`id`),
  CONSTRAINT `users_id_FK3` FOREIGN KEY (idusers) REFERENCES users (id)
  );