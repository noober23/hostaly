-- MySQL Script generated by MySQL Workbench
-- Thu Oct 14 20:34:01 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema hostal
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hostal
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hostal` DEFAULT CHARACTER SET utf8 ;
USE `hostal` ;

-- -----------------------------------------------------
-- Table `hostal`.`reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`reserva` (
  `idreserva` INT NOT NULL,
  `fecha_ingreso` DATE NULL,
  `fecha_fin` DATE NULL,
  `fecha_reserva` DATE NULL,
  PRIMARY KEY (`idreserva`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`user` (
  `iduser` INT NOT NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `avatar` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `nombre` VARCHAR(250) NULL,
  `direccion` VARCHAR(250) NULL,
  `enabled` VARCHAR(45) NULL,
  `account_block` VARCHAR(45) NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`tipo_habitacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`tipo_habitacion` (
  `idtipo_habitacion` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `categoria` VARCHAR(45) NULL,
  `precio` DOUBLE NULL,
  PRIMARY KEY (`idtipo_habitacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`periodo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`periodo` (
  `idperiodo` INT NOT NULL,
  PRIMARY KEY (`idperiodo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`hotel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`hotel` (
  `idhotel` INT NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `estrellas` INT NULL,
  `direccion` VARCHAR(100) NULL,
  `ciudad` VARCHAR(100) NULL,
  `telefono` VARCHAR(50) NULL,
  `tiempo_reserva` INT NULL,
  PRIMARY KEY (`idhotel`),
  INDEX `fk_hotel_periodo1_idx` (`tiempo_reserva` ASC) VISIBLE,
  CONSTRAINT `fk_hotel_periodo1`
    FOREIGN KEY (`tiempo_reserva`)
    REFERENCES `hostal`.`periodo` (`idperiodo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`habitacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`habitacion` (
  `idhabitacion` INT NOT NULL,
  `ubicacion` VARCHAR(45) NULL,
  `tipo_habitacion_id` INT NOT NULL,
  `hotel_id` INT NOT NULL,
  `tipo_habitacion` VARCHAR(45) NULL,
  `ocupada` VARCHAR(5) NULL,
  PRIMARY KEY (`idhabitacion`),
  INDEX `fk_habitacion_tipo_habitacion1_idx` (`tipo_habitacion_id` ASC) VISIBLE,
  INDEX `fk_habitacion_hotel1_idx` (`hotel_id` ASC) VISIBLE,
  CONSTRAINT `fk_habitacion_tipo_habitacion1`
    FOREIGN KEY (`tipo_habitacion_id`)
    REFERENCES `hostal`.`tipo_habitacion` (`idtipo_habitacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_habitacion_hotel1`
    FOREIGN KEY (`hotel_id`)
    REFERENCES `hostal`.`hotel` (`idhotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`cliente` (
  `idcliente` INT NOT NULL,
  `tipo_documento` VARCHAR(45) NULL,
  `nombre` VARCHAR(100) NULL,
  `apellidos` VARCHAR(100) NULL,
  `edad` INT(3) NULL,
  `estado_civil` VARCHAR(45) NULL,
  `nacionalidad` VARCHAR(100) NULL,
  `direccion` VARCHAR(150) NULL,
  `user_iduser` INT NOT NULL,
  PRIMARY KEY (`idcliente`),
  INDEX `fk_cliente_user1_idx` (`user_iduser` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `hostal`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`factura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`factura` (
  `idfactura` INT NOT NULL,
  `costoTotal` DOUBLE NULL,
  `costoHabitacion` DOUBLE NULL,
  `costoMinibar` DOUBLE NULL,
  `cliente_idcliente` INT NOT NULL,
  PRIMARY KEY (`idfactura`),
  INDEX `fk_factura_cliente1_idx` (`cliente_idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_factura_cliente1`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `hostal`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`bebida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`bebida` (
  `idbebida` INT NOT NULL AUTO_INCREMENT,
  `precio` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idbebida`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`role` (
  `idrole` INT NOT NULL,
  `role` VARCHAR(45) NULL,
  `autorizacion` VARCHAR(45) NULL,
  `user_id` INT NULL,
  PRIMARY KEY (`idrole`),
  INDEX `fk_role_user1_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_role_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `hostal`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`penalizacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`penalizacion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pocentaje` DOUBLE NULL,
  `version` BIGINT(20) NULL,
  `periodo_idperiodo` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_penalizacion_periodo1_idx` (`periodo_idperiodo` ASC) VISIBLE,
  CONSTRAINT `fk_penalizacion_periodo1`
    FOREIGN KEY (`periodo_idperiodo`)
    REFERENCES `hostal`.`periodo` (`idperiodo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`estancia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`estancia` (
  `reserva_id` INT NOT NULL,
  `estancia_id` INT NOT NULL,
  `cliente_idcliente` INT NOT NULL,
  INDEX `fk_user_has_reserva_reserva1_idx` (`reserva_id` ASC) VISIBLE,
  PRIMARY KEY (`estancia_id`),
  INDEX `fk_estancia_cliente1_idx` (`cliente_idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_user_has_reserva_reserva1`
    FOREIGN KEY (`reserva_id`)
    REFERENCES `hostal`.`reserva` (`idreserva`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estancia_cliente1`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `hostal`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`habitacion_has_reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`habitacion_has_reserva` (
  `habitacion_id` INT NOT NULL,
  `habitacion_tipo_habitacion_id` INT NULL,
  `reserva_id` INT NOT NULL,
  PRIMARY KEY (`habitacion_id`, `reserva_id`),
  INDEX `fk_habitacion_has_reserva_reserva1_idx` (`reserva_id` ASC) VISIBLE,
  INDEX `fk_habitacion_has_reserva_habitacion1_idx` (`habitacion_id` ASC, `habitacion_tipo_habitacion_id` ASC) VISIBLE,
  CONSTRAINT `fk_habitacion_has_reserva_habitacion1`
    FOREIGN KEY (`habitacion_id` , `habitacion_tipo_habitacion_id`)
    REFERENCES `hostal`.`habitacion` (`idhabitacion` , `tipo_habitacion_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_habitacion_has_reserva_reserva1`
    FOREIGN KEY (`reserva_id`)
    REFERENCES `hostal`.`reserva` (`idreserva`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hostal`.`minibar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hostal`.`minibar` (
  `bebida_idbebida` INT NOT NULL,
  `habitacion_idhabitacion` INT NOT NULL,
  `cantidad_inicial` VARCHAR(45) NULL,
  `cantidad_consumo` VARCHAR(45) NULL,
  PRIMARY KEY (`bebida_idbebida`, `habitacion_idhabitacion`),
  INDEX `fk_bebida_has_habitacion_habitacion1_idx` (`habitacion_idhabitacion` ASC) VISIBLE,
  INDEX `fk_bebida_has_habitacion_bebida1_idx` (`bebida_idbebida` ASC) VISIBLE,
  CONSTRAINT `fk_bebida_has_habitacion_bebida1`
    FOREIGN KEY (`bebida_idbebida`)
    REFERENCES `hostal`.`bebida` (`idbebida`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bebida_has_habitacion_habitacion1`
    FOREIGN KEY (`habitacion_idhabitacion`)
    REFERENCES `hostal`.`habitacion` (`idhabitacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
