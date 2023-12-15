-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema u117281852_rp02
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema u117281852_rp02
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `u117281852_rp02` DEFAULT CHARACTER SET utf8 ;
USE `u117281852_rp02` ;

-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Roles` (
  `IdRol` INT NOT NULL AUTO_INCREMENT,
  `Rol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdRol`));


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Usuarios` (
  `IdUsuario` INT NOT NULL AUTO_INCREMENT,
  `IdRol` INT NOT NULL,
  `Correo` VARCHAR(100) NOT NULL,
  `Contrasena` VARCHAR(32) NOT NULL,
  `Confirmado` TINYINT NULL,
  `DatosLlenos` TINYINT NULL,
  `FechaCreacion` TIMESTAMP NULL DEFAULT now(),
  PRIMARY KEY (`IdUsuario`),
  UNIQUE INDEX `email_UNIQUE` (`Correo` ASC) VISIBLE,
  INDEX `fk_usuarios_roles1_idx` (`IdRol` ASC) VISIBLE,
  CONSTRAINT `fk_usuarios_roles1`
    FOREIGN KEY (`IdRol`)
    REFERENCES `u117281852_rp02`.`Roles` (`IdRol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Alumnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Alumnos` (
  `IdAlumno` INT NOT NULL AUTO_INCREMENT,
  `IdUsuario` INT NOT NULL,
  `NoControl` VARCHAR(10) NOT NULL,
  `Nombre` VARCHAR(60) NOT NULL,
  `PrimerApellido` VARCHAR(40) NULL DEFAULT CURRENT_TIMESTAMP,
  `SegundoApellido` VARCHAR(40) NULL,
  `Telefono` VARCHAR(10) NULL,
  `Conocimiento` TEXT NULL,
  `Promedio` INT NULL,
  INDEX `fk_Alumnos_usuarios1_idx` (`IdUsuario` ASC) VISIBLE,
  PRIMARY KEY (`IdAlumno`),
  UNIQUE INDEX `NoControl_UNIQUE` (`NoControl` ASC) VISIBLE,
  CONSTRAINT `fk_Alumnos_usuarios1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `u117281852_rp02`.`Usuarios` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Asesores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Asesores` (
  `IdAsesor` INT NOT NULL AUTO_INCREMENT,
  `IdUsuario` INT NOT NULL,
  `Nombre` VARCHAR(60) NOT NULL,
  `PrimerApellido` VARCHAR(40) NOT NULL,
  `SegundoApellido` VARCHAR(40) NULL,
  `Telefono` VARCHAR(10) NULL,
  PRIMARY KEY (`IdAsesor`),
  INDEX `fk_Asesores_usuarios1_idx` (`IdUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_Asesores_usuarios1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `u117281852_rp02`.`Usuarios` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Administradores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Administradores` (
  `IdAdministrador` INT NOT NULL AUTO_INCREMENT,
  `IdUsuario` INT NOT NULL,
  `Nombre` VARCHAR(60) NOT NULL,
  `PrimerApellido` VARCHAR(40) NULL,
  `SegundoApellido` VARCHAR(40) NULL,
  `Telefono` VARCHAR(10) NULL,
  PRIMARY KEY (`IdAdministrador`),
  INDEX `fk_Administradoress_usuarios1_idx` (`IdUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_Administradoress_usuarios1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `u117281852_rp02`.`Usuarios` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Empresas` (
  `IdEmpresa` INT NOT NULL AUTO_INCREMENT,
  `IdUsuario` INT NOT NULL,
  `RazonSocial` VARCHAR(200) NOT NULL,
  `GiroEmpresa` TEXT NULL,
  `Direccion` TEXT NULL,
  `Telefono` VARCHAR(10) NULL,
  `NombreCompletoAsesor` VARCHAR(150) NULL,
  `CorreoAsesor` VARCHAR(100) NULL,
  `TelefonoAsesor` VARCHAR(10) NULL,
  PRIMARY KEY (`IdEmpresa`),
  INDEX `fk_Empresas_usuarios1_idx` (`IdUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_Empresas_usuarios1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `u117281852_rp02`.`Usuarios` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Semestres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Semestres` (
  `IdSemestre` INT NOT NULL AUTO_INCREMENT,
  `Semestre` VARCHAR(50) NOT NULL,
  `Estado` TINYINT NOT NULL,
  PRIMARY KEY (`IdSemestre`));


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`Proyectos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`Proyectos` (
  `IdProyecto` INT NOT NULL AUTO_INCREMENT,
  `IdEmpresa` INT NOT NULL,
  `IdSemestre` INT NOT NULL,
  `IdAsesor` INT NULL,
  `Nombre` VARCHAR(255) NOT NULL,
  `PerfilRequerido` TEXT NULL,
  `TipoProyecto` VARCHAR(70) NULL,
  `Descripcion` TEXT NULL,
  `Inicio` DATE NULL,
  `Termina` DATE NULL,
  `Horas` INT NULL,
  `CantidadResidentes` INT NULL,
  `FechaCreacion` DATETIME NULL,
  PRIMARY KEY (`IdProyecto`),
  INDEX `fk_Proyectos_Empresas1_idx` (`IdEmpresa` ASC) VISIBLE,
  INDEX `fk_Proyectos_Semestres1_idx` (`IdSemestre` ASC) VISIBLE,
  INDEX `fk_Proyectos_Asesores1_idx` (`IdAsesor` ASC) VISIBLE,
  CONSTRAINT `fk_Proyectos_Empresas1`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `u117281852_rp02`.`Empresas` (`IdEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Proyectos_Semestres1`
    FOREIGN KEY (`IdSemestre`)
    REFERENCES `u117281852_rp02`.`Semestres` (`IdSemestre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Proyectos_Asesores1`
    FOREIGN KEY (`IdAsesor`)
    REFERENCES `u117281852_rp02`.`Asesores` (`IdAsesor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`ProyectosAsignados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`ProyectosAsignados` (
  `IdProyectoAsignado` INT NOT NULL AUTO_INCREMENT,
  `IdProyecto` INT NOT NULL,
  `IdAlumno` INT NOT NULL,
  `ComentarioDelAlumno` TEXT NULL,
  `CalificacionDelAlumno` INT NULL,
  `ComentarioDeLaEmpresa` TEXT NULL,
  `CalificacionDeLaEmpresa` INT NULL,
  PRIMARY KEY (`IdProyectoAsignado`),
  INDEX `fk_ProyectosAsignados_Alumnos1_idx` (`IdAlumno` ASC) VISIBLE,
  INDEX `fk_ProyectosAsignados_Proyectos1_idx` (`IdProyecto` ASC) VISIBLE,
  CONSTRAINT `fk_ProyectosAsignados_Alumnos1`
    FOREIGN KEY (`IdAlumno`)
    REFERENCES `u117281852_rp02`.`Alumnos` (`IdAlumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ProyectosAsignados_Proyectos1`
    FOREIGN KEY (`IdProyecto`)
    REFERENCES `u117281852_rp02`.`Proyectos` (`IdProyecto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `u117281852_rp02`.`SolicitudProyecto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u117281852_rp02`.`SolicitudProyecto` (
  `IdProyectoAsignado` INT NOT NULL AUTO_INCREMENT,
  `IdProyecto` INT NOT NULL,
  `IdAlumno` INT NOT NULL,
  `Estado` VARCHAR(20) NULL,
  PRIMARY KEY (`IdProyectoAsignado`),
  INDEX `fk_SolicitudProyecto_Proyectos1_idx` (`IdProyecto` ASC) VISIBLE,
  INDEX `fk_SolicitudProyecto_Alumnos1_idx` (`IdAlumno` ASC) VISIBLE,
  CONSTRAINT `fk_SolicitudProyecto_Proyectos1`
    FOREIGN KEY (`IdProyecto`)
    REFERENCES `u117281852_rp02`.`Proyectos` (`IdProyecto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudProyecto_Alumnos1`
    FOREIGN KEY (`IdAlumno`)
    REFERENCES `u117281852_rp02`.`Alumnos` (`IdAlumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
