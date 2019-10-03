create database if not exists aulaphp;

use aulaphp;

create table usuarios_login
(
	codigo int not null auto_increment primary key
    ,nome varchar(50) not null
    ,email varchar(50) not null unique
    ,senha varchar(60)
);

insert into usuarios_login(codigo,nome,email,senha) values(0,'Emerson','teste@bla','spy');