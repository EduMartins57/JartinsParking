CREATE DATABASE JartinsParking;
use JartinsParking;
CREATE TABLE usuario(
  tipo varchar(50) NOT NULL,
  nome varchar(50) NOT NULL,
  login varchar (50) primary key,
  senha varchar(50) NOT NULL
);
insert into usuario values ("funcionario","ALINE","aline.jardim@ifsp.edu.br", md5("123"));
Insert into usuario values ("funcionario","EDUARDO","martins.eduardo@ifsp.edu.br", md5("123"));
Insert into usuario values ("administrador","ADMIN","admin@ifsp.edu.br", md5("123"));