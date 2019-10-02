create database if not exists aulaphp;
use aulaphp;

create table usuarios
(
	codigo int not null auto_increment primary key
	,nome varchar(50)
	,url varchar(60)
	,ip varchar(50)
);