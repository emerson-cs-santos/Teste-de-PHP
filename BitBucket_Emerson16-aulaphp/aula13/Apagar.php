<?php  

//include('sessao.php');
//include('conexao.php');

$codigo	= @$_GET['codigo'];

if (!isset($codigo))
{
	echo 'Cadastro não encontrado!';
	return false;	
}

include('usuario.class.php');
$objUusuario = new Usuario;

$resposta = $objUusuario->delUser($codigo);

if ($resposta == 'ok') 
{
	header('Location: Index.php');
} 
else 
{
	echo 'Ocorreu uma falha atuaizar dados no banco de dados';
}

?>