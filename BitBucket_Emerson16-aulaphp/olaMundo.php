<?php

// Isso faz reconhecer os comandos de php como o \n, alguns funcionam, mas o \n não
echo '<pre>';

echo 'teste';

echo "<h1>ola mundo</h1>";

// varivel constante - SEMPRE MAIUSCULA
//define('nome da variavel',value);
define('QTD_PAGINAS',10);

// concatenador no PHP é o ponto
echo "valor da constante: " . qtd_paginas;

// variavel normal
$ip_do_banco='192.168.45.12';

// passar valor para uma constante
define('ip_do_banco',$ip_do_banco);

echo "\nO ip do banco é: " . ip_do_banco;

// Constantes mágicas
echo "\nEstou na linha " . __LINE__;
echo "\nEstou na linha " . __LINE__;
echo "\nEsse é o arquivo " . __FILE__;

// Ver informações da variavel
echo "\n";
var_dump($ip_do_banco); 

// Vetor/array - formas de declarar

// Forma 1
$dias_semana=[1,2,3,4,5,6,7];

echo "\n";
var_dump($dias_semana); 

// destruir variavel, se for usar precisa declarar novamente,
unset($dias_semana);

// após destruir,remover a variavel podemos cria-la novamente

// Forma 2
$dias_semana[0] = 'Domingo';
$dias_semana[1] = 'Segunda';
$dias_semana[2] = 'Terça';
$dias_semana[3] = 'Quarta';
$dias_semana[4] = 'Quinta';
$dias_semana[5] = 'Sexta';
$dias_semana[6] = 'Sábado';

echo "\n";
var_dump($dias_semana); 

unset($dias_semana);

// Forma 3
$dias_semana = array(
                    0 => 'Dom'
                    ,1 => 'Seg'
                    ,2 => 'Ter'
                    ,3 => 'Qua'
                    ,4 => 'Qui'
                    ,5 => 'Sex'
                    ,6 => 'Sab'
);

echo "\n";
var_dump($dias_semana); 

echo '<\pre>';
