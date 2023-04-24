use JartinsParking;

CREATE TABLE veiculos(
  ID int(11) NOT NULL AUTO_INCREMENT,
  automovel varchar (50) NOT NULL,
  placa varchar(50) primary key,
  modelo varchar(50) NOT NULL,
  cor varchar(50) NOT NULL,
  marca varchar(50) NOT NULL,
  entrada timestamp
);