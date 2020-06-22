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
  
CREATE TABLE `veduta`.`products_images` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idproducts` INT NOT NULL,
  `url_1` VARCHAR(200) NOT NULL,
  `url_2` VARCHAR(200),
  `url_3` VARCHAR(200),
  `url_4` VARCHAR(200),
  `url_5` VARCHAR(200),
  PRIMARY KEY (`id`),
  CONSTRAINT `products_id_FK` FOREIGN KEY (idproducts) REFERENCES products (id)
  );
  
CREATE TABLE `veduta`.`users_images` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idusers` INT NOT NULL,
  `url_profile_photo` VARCHAR(200),
  `url_cover_photo` VARCHAR(200),
  PRIMARY KEY (`id`),
  CONSTRAINT `users_id_FK4` FOREIGN KEY (idusers) REFERENCES users (id)
  );
  
CREATE TABLE `veduta`.`products_reviews` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idproducts` INT NOT NULL,
  `idusers` INT NOT NULL,
  `user_rating` FLOAT NOT NULL,
  `user_review` VARCHAR (1000),
  PRIMARY KEY (`id`),
  CONSTRAINT `products_id_FK2` FOREIGN KEY (idproducts) REFERENCES products (id),
  CONSTRAINT `users_id_FK5` FOREIGN KEY (idusers) REFERENCES users (id)
  );
  
CREATE TABLE `veduta`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idproducts` INT NOT NULL,
  `idusers` INT NOT NULL,
  `date` DATE NOT NULL,
  `coupon` VARCHAR(15) NOT NULL,
  `sale` BOOLEAN NOT NULL,
  `total` FLOAT NOT NULL,
  `discount` FLOAT NOT NULL,
  `order_fare` FLOAT NOT NULL,
  `shipping_company` VARCHAR(45) NOT NULL,
  `bar_code` INT NOT NULL,
  `tracking_code` VARCHAR(45) NOT NULL,
  `payment_method` VARCHAR(45) NOT NULL,
  `order_status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `products_id_FK3` FOREIGN KEY (idproducts) REFERENCES products (id),
  CONSTRAINT `users_id_FK6` FOREIGN KEY (idusers) REFERENCES users (id)
  );