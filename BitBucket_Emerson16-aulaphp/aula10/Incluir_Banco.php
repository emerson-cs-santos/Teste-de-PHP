<?php  

include('sessao.php');
include('conexao.php');

$codigo	= @$_POST['codigo'];
$nome	= @$_POST['nome'];
$email 	= @$_POST['email'];
$senha 	= @$_POST['senha'];

if( !isset($codigo) or !isset($nome) or !isset($email) or !isset($senha) )
{
	echo 'Campos inválidos!';
	return false;
}

$codigo = 0;
$senha = password_hash($senha, PASSWORD_DEFAULT);

$query = " INSERT INTO usuarios_login ( codigo, nome, email, senha ) Values (?, ?, ?, ?)";
$querytratada = $conn->prepare($query); 
$querytratada->bind_param("isss",$codigo,$nome,$email,$senha);		
$querytratada->execute();

if ($querytratada->affected_rows > 0) 
{
	header('Location: Index.php');
} 
else 
{
	echo 'Ocorreu uma falha ao inserir dados no banco de dados';
}

?>