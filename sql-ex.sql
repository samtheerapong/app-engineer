-- MySQL Workbench Synchronization
-- Generated: 2023-05-23 10:28
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: theerapong

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE TABLE IF NOT EXISTS `app-engineer`.`machine` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `machine_name` VARCHAR(200) NULL DEFAULT NULL,
  `machine_type` INT(11) NULL DEFAULT NULL,
  `repair_id` INT(11) NULL DEFAULT NULL,
  `bom_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_machine_bom1_idx` (`bom_id` ASC),
  INDEX `fk_machine_repair1_idx` (`repair_id` ASC),
  CONSTRAINT `fk_machine_bom1`
    FOREIGN KEY (`bom_id`)
    REFERENCES `app-engineer`.`bom` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_machine_repair1`
    FOREIGN KEY (`repair_id`)
    REFERENCES `app-engineer`.`repair` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`maintenance` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `machine_id` INT(11) NULL DEFAULT NULL,
  `rank` INT(11) NULL DEFAULT NULL,
  `frequency_id` INT(11) NULL DEFAULT NULL,
  `week_id` INT(11) NULL DEFAULT NULL,
  `month_id` INT(11) NULL DEFAULT NULL,
  `year_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_maintenance_machine_idx` (`machine_id` ASC),
  INDEX `fk_maintenance_frequency1_idx` (`frequency_id` ASC),
  INDEX `fk_maintenance_week1_idx` (`week_id` ASC),
  INDEX `fk_maintenance_month1_idx` (`month_id` ASC),
  INDEX `fk_maintenance_year1_idx` (`year_id` ASC),
  CONSTRAINT `fk_maintenance_machine`
    FOREIGN KEY (`machine_id`)
    REFERENCES `app-engineer`.`machine` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_maintenance_frequency1`
    FOREIGN KEY (`frequency_id`)
    REFERENCES `app-engineer`.`frequency` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_maintenance_week1`
    FOREIGN KEY (`week_id`)
    REFERENCES `app-engineer`.`week` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_maintenance_month1`
    FOREIGN KEY (`month_id`)
    REFERENCES `app-engineer`.`month` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_maintenance_year1`
    FOREIGN KEY (`year_id`)
    REFERENCES `app-engineer`.`year` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`frequency` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `frequency_code` VARCHAR(45) NULL DEFAULT NULL,
  `frequency_name` VARCHAR(100) NULL DEFAULT NULL,
  `frequency_details` TEXT NULL DEFAULT NULL,
  `frequency_color` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`week` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `week_code` VARCHAR(45) NULL DEFAULT NULL,
  `week_name` VARCHAR(45) NULL DEFAULT NULL,
  `week_details` TEXT NULL DEFAULT NULL,
  `week_color` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`repair` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `repair_number` VARCHAR(45) NULL DEFAULT NULL,
  `requester_by` INT(11) NULL DEFAULT NULL,
  `requester_at` VARCHAR(45) NULL DEFAULT NULL,
  `machine_id` INT(11) NULL DEFAULT NULL,
  `title` VARCHAR(100) NULL DEFAULT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `department_id` INT(11) NULL DEFAULT NULL,
  `photos` TEXT NULL DEFAULT NULL,
  `status_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_repair_department1_idx` (`department_id` ASC),
  INDEX `fk_repair_machine1_idx` (`machine_id` ASC),
  INDEX `fk_repair_status1_idx` (`status_id` ASC),
  CONSTRAINT `fk_repair_department1`
    FOREIGN KEY (`department_id`)
    REFERENCES `app-engineer`.`department` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_repair_machine1`
    FOREIGN KEY (`machine_id`)
    REFERENCES `app-engineer`.`machine` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_repair_status1`
    FOREIGN KEY (`status_id`)
    REFERENCES `app-engineer`.`status` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`bom` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `machine_id` INT(11) NULL DEFAULT NULL,
  `bom_name` VARCHAR(100) NULL DEFAULT NULL,
  `qty` FLOAT(11) NULL DEFAULT NULL,
  `price` FLOAT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_bom_machine1_idx` (`machine_id` ASC),
  CONSTRAINT `fk_bom_machine1`
    FOREIGN KEY (`machine_id`)
    REFERENCES `app-engineer`.`machine` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`status` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `status_code` VARCHAR(45) NULL DEFAULT NULL,
  `status_name` VARCHAR(100) NULL DEFAULT NULL,
  `status_details` TEXT NULL DEFAULT NULL,
  `status_color` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`manager_approve` (
  `id` INT(11) NOT NULL,
  `repair_id` INT(11) NOT NULL,
  `manager_by` INT(11) NULL DEFAULT NULL,
  `approve_at` VARCHAR(45) NULL DEFAULT NULL,
  `repair_machine_repair_id` INT(11) NULL DEFAULT NULL,
  `repair_machine_machine_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_manager_approve_repair1_idx` (`repair_id` ASC),
  CONSTRAINT `fk_manager_approve_repair1`
    FOREIGN KEY (`repair_id`)
    REFERENCES `app-engineer`.`repair` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`department` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `department_code` VARCHAR(45) NULL DEFAULT NULL,
  `department_name` VARCHAR(100) NULL DEFAULT NULL,
  `department_details` TEXT NULL DEFAULT NULL,
  `department_color` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`month` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `month_code` VARCHAR(45) NULL DEFAULT NULL,
  `month_name` VARCHAR(45) NULL DEFAULT NULL,
  `month_details` TEXT NULL DEFAULT NULL,
  `month_color` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE TABLE IF NOT EXISTS `app-engineer`.`year` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `year_code` VARCHAR(45) NULL DEFAULT NULL,
  `year_name` VARCHAR(45) NULL DEFAULT NULL,
  `year_details` TEXT NULL DEFAULT NULL,
  `year_color` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
