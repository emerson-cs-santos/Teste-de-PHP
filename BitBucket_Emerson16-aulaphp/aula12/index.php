<?php  
include('usuario.class.php');

echo '<pre>';

$objUusuario = new Usuario;

var_dump($objUusuario);

$objUusuario->setcodigo(20);
$objUusuario->setnome('EEEmeson20');
$objUusuario->setemail('em20@out.com');
$objUusuario->setsenha('bla');

// Incluir/Alterar usuário
//$objUusuario->saveUser();

// Excluir usuário
//$objUusuario->delUser(5);

// Carregar usuário
//$objUusuario->loadUser(18);

// Listar usuários
$lista = $objUusuario->loadAllUsers();

var_dump($lista);

echo '</pre>';

?>