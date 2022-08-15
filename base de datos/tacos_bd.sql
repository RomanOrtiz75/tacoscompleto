

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
-- Schema tacos_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tacos_db` DEFAULT CHARACTER SET utf8 ;
USE `tacos_db` ;

-- -----------------------------------------------------
-- Table `tacos_db`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tacos_db`.`usuarios` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido_p` VARCHAR(45) NOT NULL,
  `apellido_m` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `tacos_db`.`guisados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tacos_db`.`guisados` (
  `id_guisado` INT NOT NULL AUTO_INCREMENT,
  `nombre_guisado` VARCHAR(45) NULL,
  `precio_oferta` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  PRIMARY KEY (`id_guisado`))
ENGINE = InnoDB;

SELECT nombre_guisado,precio_oferta,cantidad
	FROM guisados
    INNER JOIN compra
		ON id_guisado=id_guiso
	INNER JOIN usuarios
		ON id_user=id_cliente
	WHERE id_user=4;
    
SELECT nombre_guisado,precio_oferta,cantidad
	FROM guisados
    INNER JOIN compra
		ON id_guisado=id_guiso
	INNER JOIN usuarios
		ON id_user=id_cliente
	WHERE id_user=4;
-- -----------------------------------------------------
-- Table `tacos_db`.`compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tacos_db`.`compra` (
  `id_guiso` INT,
  `id_cliente` INT,
  `cantidad` INT,
  PRIMARY KEY (`id_cliente`,`id_guiso`),
    CONSTRAINT fk_guisos_compra
        FOREIGN KEY (`id_guiso`) 
        REFERENCES guisados (`id_guisado`)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_usuarios_compra
        FOREIGN KEY (`id_cliente`)
        REFERENCES usuarios (`id_user`)
          ON DELETE CASCADE  
          ON UPDATE CASCADE
  )
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `tacos_db`.`domicilio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tacos_db`.`domicilio` (
  `id_domicilio` INT NOT NULL AUTO_INCREMENT,
  `colonia` VARCHAR(45) NULL,
  `calle` VARCHAR(45) NULL,
  `cp` VARCHAR(45) NULL,
  `ciudad` VARCHAR(45) NULL,
  `id_usuarios_fk` INT NULL,
  PRIMARY KEY (`id_domicilio`),
  INDEX `id_usuarios_fk_idx` (`id_usuarios_fk` ASC) VISIBLE,
  CONSTRAINT `id_usuarios_fk`
    FOREIGN KEY (`id_usuarios_fk`)
    REFERENCES `tacos_db`.`usuarios` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Incersion Values --
-- -----------------------------------------------------

  INSERT INTO guisados(nombre_guisado,precio_oferta,precio)
  VALUES('Papa','12','9'),
        ('Desebrada','12','9'),
        ('Frijol','12','9'),
        ('Chicharron','12','9'),
        ('Chorizo con queso','12','9'),
        ('Mole','12','9'),
        ('Pollo','12','9'),
        ('Rajas de queso','12','9'),
        ('Picadillo','12','9');
  
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
