-- MySQL Script generated by MySQL Workbench
-- Sun Jun 30 12:27:33 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema estoque
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema estoque
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `estoque` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `estoque` ;

-- -----------------------------------------------------
-- Table `estoque`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estoque`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `stt` VARCHAR(45) NOT NULL,
  `codBarras` INT NULL,
  `qtd` INT NOT NULL,
  `preco` FLOAT NULL,
  `hora` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idprodutos_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estoque`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estoque`.`pedido` (
  `idpedido` INT NOT NULL AUTO_INCREMENT,
  `filial` VARCHAR(45) NOT NULL,
  `nomeUsuario` VARCHAR(45) NOT NULL,
  `nomeCliente` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idpedido`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
