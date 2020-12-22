<?php  
include('usuario.class.php');

echo '<pre>';

$objUusuario = new Usuario;

var_dump($objUusuario);

$objUusuario->setcodigo(1);
$objUusuario->setnome('Emerson');
$objUusuario->setemail('emersoncs@outlook');
$objUusuario->setsenha('bla');

var_dump($objUusuario);

// Se a variavel estiver como public, é possivel usar a variavel dessa forma
$objUusuario->nome='TESTE';

var_dump($objUusuario);

echo '</pre>';

?>