-- MySQL Script generated by MySQL Workbench
-- 02/14/17 16:12:08
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `petshop` DEFAULT CHARACTER SET utf8 ;
USE `petshop` ;

-- -----------------------------------------------------
-- Table `petshop`.`produtos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`produtos` ;

CREATE TABLE IF NOT EXISTS `petshop`.`produtos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `imagem` VARCHAR(60) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`users` ;

CREATE TABLE IF NOT EXISTS `petshop`.`users` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(191) NOT NULL,
  `email` VARCHAR(191) NOT NULL,
  `password` VARCHAR(191) NOT NULL,
  `type` SMALLINT(6) NOT NULL,
  `remember_token` VARCHAR(100) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`compras`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`compras` ;

CREATE TABLE IF NOT EXISTS `petshop`.`compras` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `user_id` INT(10) NOT NULL,
  `produto_id` INT(10) NOT NULL,
  `quantidade` SMALLINT(6) NOT NULL,
  `data` DATETIME NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_compras_produtos_idx` (`produto_id` ASC),
  INDEX `fk_compras_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_compras_produtos`
    FOREIGN KEY (`produto_id`)
    REFERENCES `petshop`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `petshop`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE = '';
GRANT USAGE ON *.* TO sispetshop;
 DROP USER sispetshop;
SET SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
CREATE USER 'sispetshop' IDENTIFIED BY '123456';

GRANT ALL ON `petshop`.* TO 'sispetshop';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;