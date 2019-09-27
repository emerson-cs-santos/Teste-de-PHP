-- BANCO DE DADOS
CREATE DATABASE IF NOT EXISTS aulabd;

USE aulabd;

/* DROP DATABASE IF EXISTS TESTE_PI */

-- TABELA DE Clientes
CREATE TABLE IF NOT EXISTS clientes 
	(
		cod_cli		INTEGER NOT NULL PRIMARY KEY
		,nome		VARCHAR(20) NOT NULL
		,endereco	VARCHAR(50) NOT NULL
		,cidade		VARCHAR(30) NOT NULL
		,cep		CHAR(8) NOT NULL
		,uf			CHAR(2) NOT NULL
	);
	
	
-- INSERT, com todos os campos, se quiser menos campos, tem que mencionar quais na primeira lista e seguir essa ordem nos values
INSERT INTO 
	clientes 
	(
		cod_cli
		,nome
		,endereco
		,cidade
		,cep
		,uf
	)
Values
	(
		1
		,'Joao'
		,'Rua bla'
		,'pirutuba'
		,'06925666'
		,'AC'
	);
	