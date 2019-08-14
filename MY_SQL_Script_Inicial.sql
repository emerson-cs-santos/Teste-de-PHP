-- BANCO DE DADOS
CREATE DATABASE IF NOT EXISTS TESTE_PI;

USE TESTE_PI;

/* DROP DATABASE IF EXISTS TESTE_PI */

-- TABELA DE PRODUTOS
CREATE TABLE IF NOT EXISTS PRODUTOS 
	(
		ID		INTEGER NOT NULL PRIMARY KEY
		,NOME	VARCHAR(20) NOT NULL
	);
	
-- PRODUTOS  / QUANTIDADE
-- ALTER TABLE IF EXISTS PRODUTOS ADD COLUMN QUANTIDADE INTEGER;
ALTER TABLE PRODUTOS ADD COLUMN QUANTIDADE INTEGER;
UPDATE PRODUTOS SET QUANTIDADE = 0 WHERE QUANTIDADE IS NULL;