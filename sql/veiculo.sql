use JartinsParking;

CREATE TABLE veiculos(
  ID int(11) primary key AUTO_INCREMENT,
  automovel varchar (50) NOT NULL,
  placa varchar(50) NOT NULL,
  modelo varchar(50) NOT NULL,
  cor varchar(50) NOT NULL,
  marca varchar(50) NOT NULL,
  entrada timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  saida timestamp NULL DEFAULT NULL,
  tarifa integer default 10,
  Convenio mediumtext  NULL,
  Status varchar(10) DEFAULT 'Dentro'
);