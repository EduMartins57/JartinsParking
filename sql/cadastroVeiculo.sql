use JartinsParking;

CREATE TABLE veiculos(
  ID int(11) NOT NULL AUTO_INCREMENT,
  automovel varchar (50) NOT NULL,
  placa varchar(50) primary key,
  modelo varchar(50) NOT NULL,
  cor varchar(50) NOT NULL,
  marca varchar(50) NOT NULL,
  Entrada timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  Saida timestamp NULL DEFAULT NULL,
  TarifaEstacionamento integer default 10,
  Convenio mediumtext  NULL,
  Status varchar(10) DEFAULT 'Dentro'
);