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

$senha = password_hash($senha, PASSWORD_DEFAULT);

$query = " UPDATE usuarios_login SET nome=?, email=?, senha=? where codigo = ? ";
$querytratada = $conn->prepare($query); 
$querytratada->bind_param("sssi",$nome,$email,$senha,$codigo);
$querytratada->execute();

if ($querytratada->affected_rows > 0) 
{
	header('Location: Index.php');
} 
else 
{
	echo 'Ocorreu uma falha ao atualizar dados no banco de dados';
}

?>