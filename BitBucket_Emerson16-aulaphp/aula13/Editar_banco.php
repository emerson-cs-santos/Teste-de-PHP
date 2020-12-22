<?php  

//include('sessao.php');
//include('conexao.php');

include('usuario.class.php');
$objUusuario = new Usuario;

$codigo	= @$_POST['codigo'];
$nome	= @$_POST['nome'];
$email 	= @$_POST['email'];
$senha 	= @$_POST['senha'];

if( !isset($codigo) or !isset($nome) or !isset($email) or !isset($senha) )
{
	echo 'Campos inválidos!';
	return false;
}

$senha = password_hash($senha, PASSWORD_DEFAULT);

$objUusuario->setcodigo($codigo);
$objUusuario->setnome($nome);
$objUusuario->setemail($email);
$objUusuario->setsenha($senha);
$resposta = $objUusuario->saveUser();

if ($resposta == 'ok') 
{
	header('Location: Index.php');
} 
else 
{
	echo 'Ocorreu uma falha atuaizar dados no banco de dados';
}

?>