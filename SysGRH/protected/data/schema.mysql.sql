-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sysgrh_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sysgrh_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sysgrh_db` DEFAULT CHARACTER SET utf8 ;
USE `sysgrh_db` ;

-- -----------------------------------------------------
-- Table `sysgrh_db`.`dir_tutelle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`dir_tutelle` (
  `iddir_tutelle` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `dir_tutelle` VARCHAR(45) NULL,
  PRIMARY KEY (`iddir_tutelle`),
  UNIQUE INDEX `dir_tutelle_UNIQUE` (`dir_tutelle` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`affectation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`affectation` (
  `idaffectation` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `affectation` VARCHAR(45) NULL,
  `dir_tutelle_iddir_tutelle` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idaffectation`),
  UNIQUE INDEX `affectation_UNIQUE` (`affectation` ASC),
  INDEX `fk_affectation_dir_tutelle_idx` (`dir_tutelle_iddir_tutelle` ASC),
  CONSTRAINT `fk_affectation_dir_tutelle`
    FOREIGN KEY (`dir_tutelle_iddir_tutelle`)
    REFERENCES `sysgrh_db`.`dir_tutelle` (`iddir_tutelle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`grille_salaire_pa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`grille_salaire_pa` (
  `idgrille_salaire_pa` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fonction` VARCHAR(45) NULL,
  `salaire` VARCHAR(45) NULL,
  PRIMARY KEY (`idgrille_salaire_pa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`grille_salaire_pp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`grille_salaire_pp` (
  `idgrille_salaire_pp` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `grade` VARCHAR(45) NULL,
  `salaire` VARCHAR(45) NULL,
  PRIMARY KEY (`idgrille_salaire_pp`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`personnel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`personnel` (
  `idpersonnel` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `date_naissance` DATE NULL,
  `lieu_naissance` DATE NULL,
  `sexe` VARCHAR(45) NULL,
  `etat_civil` VARCHAR(45) NULL,
  `cin` VARCHAR(45) NULL,
  `nif` VARCHAR(45) NULL,
  `num_passeport` VARCHAR(45) NULL,
  `matricule` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `adresse_anterieur` VARCHAR(45) NULL,
  `adresse_ref` VARCHAR(45) NULL,
  `telephone_primaire` INT NULL,
  `telephone_secondaire` INT NULL,
  `email_personnel` VARCHAR(45) NULL,
  `email_professionnel` VARCHAR(45) NULL,
  `autre-email` VARCHAR(45) NULL,
  `origine` VARCHAR(45) NULL,
  `entree_en_fonction` DATE NULL,
  `id_budgetaire` VARCHAR(45) NULL,
  `categorie` VARCHAR(45) NULL,
  `affectation_idaffectation` INT UNSIGNED NOT NULL,
  `grille_salaire_pa_idgrille_salaire_pa` INT UNSIGNED NOT NULL,
  `grille_salaire_pp_idgrille_salaire_pp` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idpersonnel`),
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC),
  UNIQUE INDEX `nif_UNIQUE` (`nif` ASC),
  UNIQUE INDEX `cin_UNIQUE` (`cin` ASC),
  UNIQUE INDEX `matricule_UNIQUE` (`matricule` ASC),
  INDEX `fk_personnel_affectation1_idx` (`affectation_idaffectation` ASC),
  INDEX `fk_personnel_grille_salaire_pa1_idx` (`grille_salaire_pa_idgrille_salaire_pa` ASC),
  INDEX `fk_personnel_grille_salaire_pp1_idx` (`grille_salaire_pp_idgrille_salaire_pp` ASC),
  CONSTRAINT `fk_personnel_affectation1`
    FOREIGN KEY (`affectation_idaffectation`)
    REFERENCES `sysgrh_db`.`affectation` (`idaffectation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_personnel_grille_salaire_pa1`
    FOREIGN KEY (`grille_salaire_pa_idgrille_salaire_pa`)
    REFERENCES `sysgrh_db`.`grille_salaire_pa` (`idgrille_salaire_pa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_personnel_grille_salaire_pp1`
    FOREIGN KEY (`grille_salaire_pp_idgrille_salaire_pp`)
    REFERENCES `sysgrh_db`.`grille_salaire_pp` (`idgrille_salaire_pp`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`arme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`arme` (
  `idarme` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `num_serie` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  `marque` VARCHAR(45) NULL,
  `modele` VARCHAR(45) NULL,
  `personnel_idpersonnel` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idarme`),
  UNIQUE INDEX `num_serie_UNIQUE` (`num_serie` ASC),
  INDEX `fk_arme_personnel1_idx` (`personnel_idpersonnel` ASC),
  CONSTRAINT `fk_arme_personnel1`
    FOREIGN KEY (`personnel_idpersonnel`)
    REFERENCES `sysgrh_db`.`personnel` (`idpersonnel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`bio_data`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`bio_data` (
  `idbio_data` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo_face` BLOB NULL,
  `photo_face_kepi` BLOB NULL,
  `photo_profil_droit` BLOB NULL,
  `photo_profil_gauche` BLOB NULL,
  `index_droit` BLOB NULL,
  `index_gauche` BLOB NULL,
  `taille_cm` DECIMAL(2) NULL,
  `poids_lbs` DECIMAL(2) NULL,
  `groupe_sanguin` VARCHAR(45) NULL,
  `personnel_idpersonnel` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idbio_data`),
  INDEX `fk_bio_data_personnel1_idx` (`personnel_idpersonnel` ASC),
  CONSTRAINT `fk_bio_data_personnel1`
    FOREIGN KEY (`personnel_idpersonnel`)
    REFERENCES `sysgrh_db`.`personnel` (`idpersonnel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`assurance`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`assurance` (
  `idassurance` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `plan` VARCHAR(45) NULL,
  `categorie` VARCHAR(45) NULL,
  `date_souscription` VARCHAR(45) NULL,
  `personnel_idpersonnel` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idassurance`),
  INDEX `fk_assurance_personnel1_idx` (`personnel_idpersonnel` ASC),
  CONSTRAINT `fk_assurance_personnel1`
    FOREIGN KEY (`personnel_idpersonnel`)
    REFERENCES `sysgrh_db`.`personnel` (`idpersonnel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`dependant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`dependant` (
  `iddependant` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `date_naissance` VARCHAR(45) NULL,
  `lien_parente` VARCHAR(45) NULL,
  `cin` VARCHAR(45) NULL,
  `nif` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `memo` VARCHAR(45) NULL,
  `assurance_idassurance` INT UNSIGNED NOT NULL,
  `personnel_idpersonnel` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`iddependant`),
  INDEX `fk_dependant_assurance1_idx` (`assurance_idassurance` ASC),
  INDEX `fk_dependant_personnel1_idx` (`personnel_idpersonnel` ASC),
  CONSTRAINT `fk_dependant_assurance1`
    FOREIGN KEY (`assurance_idassurance`)
    REFERENCES `sysgrh_db`.`assurance` (`idassurance`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dependant_personnel1`
    FOREIGN KEY (`personnel_idpersonnel`)
    REFERENCES `sysgrh_db`.`personnel` (`idpersonnel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`statut`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`statut` (
  `idstatut` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `statut` VARCHAR(45) NULL,
  `memo` VARCHAR(45) NULL,
  PRIMARY KEY (`idstatut`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`sanction`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`sanction` (
  `idsanction` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `sanction` VARCHAR(45) NULL,
  PRIMARY KEY (`idsanction`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`conge`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`conge` (
  `idconge` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_de_conge` VARCHAR(45) NULL,
  PRIMARY KEY (`idconge`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`etudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`etudes` (
  `idetude` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `etudes` VARCHAR(45) NULL,
  PRIMARY KEY (`idetude`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`personnel_etudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`personnel_etudes` (
  `niveau` VARCHAR(45) NULL,
  `niveau_obtenu` VARCHAR(45) NULL,
  `etablissement` VARCHAR(45) NULL,
  `date_debut` DATE NULL,
  `date_fin` DATE NULL,
  `memo` VARCHAR(45) NULL,
  `etudes_idetude` INT UNSIGNED NOT NULL,
  INDEX `fk_personnel_etudes_etudes1_idx` (`etudes_idetude` ASC),
  CONSTRAINT `fk_personnel_etudes_etudes1`
    FOREIGN KEY (`etudes_idetude`)
    REFERENCES `sysgrh_db`.`etudes` (`idetude`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`personnel_arme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`personnel_arme` (
  `date_assign` DATE NULL,
  `date_deassign` DATE NULL,
  `arme_idarme` INT UNSIGNED NOT NULL,
  INDEX `fk_personnel_arme_arme1_idx` (`arme_idarme` ASC),
  CONSTRAINT `fk_personnel_arme_arme1`
    FOREIGN KEY (`arme_idarme`)
    REFERENCES `sysgrh_db`.`arme` (`idarme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`hist_affectation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`hist_affectation` (
  `date_affectation` DATE NULL,
  `lettre_de_reference` VARCHAR(45) NULL,
  `memo` VARCHAR(45) NULL,
  `personnel_idpersonnel` INT UNSIGNED NOT NULL,
  INDEX `fk_hist_affectation_personnel1_idx` (`personnel_idpersonnel` ASC),
  CONSTRAINT `fk_hist_affectation_personnel1`
    FOREIGN KEY (`personnel_idpersonnel`)
    REFERENCES `sysgrh_db`.`personnel` (`idpersonnel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`hist_promotion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`hist_promotion` (
  `date_promotion` DATE NULL,
  `lettre_de_reference` VARCHAR(45) NULL,
  `memo` VARCHAR(45) NULL,
  `personnel_idpersonnel` INT UNSIGNED NOT NULL,
  INDEX `fk_hist_promotion_personnel1_idx` (`personnel_idpersonnel` ASC),
  CONSTRAINT `fk_hist_promotion_personnel1`
    FOREIGN KEY (`personnel_idpersonnel`)
    REFERENCES `sysgrh_db`.`personnel` (`idpersonnel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sysgrh_db`.`etudes_has_personnel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sysgrh_db`.`etudes_has_personnel` (
  `etudes_idetude` INT UNSIGNED NOT NULL,
  `personnel_idpersonnel` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`etudes_idetude`, `personnel_idpersonnel`),
  INDEX `fk_etudes_has_personnel_personnel1_idx` (`personnel_idpersonnel` ASC),
  INDEX `fk_etudes_has_personnel_etudes1_idx` (`etudes_idetude` ASC),
  CONSTRAINT `fk_etudes_has_personnel_etudes1`
    FOREIGN KEY (`etudes_idetude`)
    REFERENCES `sysgrh_db`.`etudes` (`idetude`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_etudes_has_personnel_personnel1`
    FOREIGN KEY (`personnel_idpersonnel`)
    REFERENCES `sysgrh_db`.`personnel` (`idpersonnel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data for table `sysgrh_db`.`etudes`
-- -----------------------------------------------------
START TRANSACTION;
USE `sysgrh_db`;
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'SCIENCE INFORMATIQUE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'MEDECINE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'GENIE CIVIL');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'SCIENCE COMPTABLE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'ECONOMIE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'GESTION');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'SCIENCE DE L\'EDUCATION');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'SCIENCE JURIDIQUE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'ARCHITECTURE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'PLOMBERIE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'ELECTRICITE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'MECANIQUE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'GENIE MECANIQUE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'TOPOGRAPHIE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'COMPTABILITE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'INFORMATIQUE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'EDUCATION PHYSIQUE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'STATISQUE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'JOURNALISME');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'PHOTGRAPHIE');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'NURSING');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'REFRIGERATION');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'TELECOMMUNICATION');
INSERT INTO `sysgrh_db`.`etudes` (`idetude`, `etudes`) VALUES (, 'JARDINNAGE');

COMMIT;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
