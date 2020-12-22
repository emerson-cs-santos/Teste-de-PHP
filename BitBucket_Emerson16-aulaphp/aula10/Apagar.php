<?php  

include('sessao.php');
include('conexao.php');

$codigo	= @$_GET['codigo'];

// Prevenção de injection
$query = " delete from usuarios_login where codigo = ?";
$querytratada = $conn->prepare($query); 
$querytratada->bind_param("i",$codigo);
$querytratada->execute();

if ($querytratada->affected_rows > 0) 
{
	header('Location: Index.php');
} 
else 
{
	echo 'Ocorreu uma falha ao deletar registro do dados no banco de dados';
}

?>