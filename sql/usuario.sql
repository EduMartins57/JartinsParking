CREATE DATABASE usuarios;
use usuarios;
CREATE TABLE usuario(
  login varchar (50) primary key,
  tipo varchar(50) NOT NULL,
  senha varchar(50) NOT NULL
);
insert into usuario values ("funcionario","aline.jardim@ifsp.edu.br", md5("123"));
Insert into usuario values ("funcionario","martins.eduardo@ifsp.edu.br", md5("123"));
Insert into usuario values ("administrador", "admin@ifsp.edu.br", md5("123"));