-- -----------------------------------------------------
-- Table 'acme'.'TBL_Vehiculo'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS 'acme'.'TBL_Vehiculo' (
  'id' INT NOT NULL,
  'VHC_Placa_Vehiculo' VARCHAR(10) NOT NULL,
  'VHC_Color_Vehiculo' VARCHAR(10) NOT NULL,
  'VHC_Marca_Vehiculo' VARCHAR(25) NOT NULL,
  'VHC_Tipo_Vehiculo' VARCHAR(10) NOT NULL,
  PRIMARY KEY ('id'),
  UNIQUE INDEX 'VHC_Placa_Vehiculo_UNIQUE' ('VHC_Placa_Vehiculo' ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'acme'.'TBL_Persona'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS 'acme'.'TBL_Persona' (
  'id' INT NOT NULL,
  'PSN_Numero_Cedula_Persona' VARCHAR(15) NOT NULL,
  'PSN_Primer_Nombre_Persona' VARCHAR(25) NOT NULL,
  'PSN_Segundo_Nombre_Persona' VARCHAR(25) NULL,
  'PSN_Apellidos_Persona' VARCHAR(50) NOT NULL,
  'PSN_Direccion_Residencia_Persona' VARCHAR(100) NOT NULL,
  'PSN_Telefono_Persona' VARCHAR(15) NOT NULL,
  'PSN_Ciudad_Residencia_Persona' VARCHAR(30) NOT NULL,
  PRIMARY KEY ('id'),
  UNIQUE INDEX 'PSN_Numero_Cedula_Persona_UNIQUE' ('PSN_Numero_Cedula_Persona' ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'acme'.'TBL_Persona_has_TBL_Vehiculo'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS 'acme'.'TBL_Persona_has_TBL_Vehiculo' (
  'TBL_Persona_id' INT NOT NULL,
  'TBL_Vehiculo_id' INT NOT NULL,
  'PSN_VHC_Rol' VARCHAR(30) NOT NULL,
  PRIMARY KEY ('TBL_Persona_id', 'TBL_Vehiculo_id'),
  INDEX 'fk_TBL_Persona_has_TBL_Vehiculo_TBL_Vehiculo1_idx' ('TBL_Vehiculo_id' ASC) VISIBLE,
  INDEX 'fk_TBL_Persona_has_TBL_Vehiculo_TBL_Persona_idx' ('TBL_Persona_id' ASC) VISIBLE,
  CONSTRAINT 'fk_TBL_Persona_has_TBL_Vehiculo_TBL_Persona'
    FOREIGN KEY ('TBL_Persona_id')
    REFERENCES 'acme'.'TBL_Persona' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_TBL_Persona_has_TBL_Vehiculo_TBL_Vehiculo1'
    FOREIGN KEY ('TBL_Vehiculo_id')
    REFERENCES 'acme'.'TBL_Vehiculo' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;