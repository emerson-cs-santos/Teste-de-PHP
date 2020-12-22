<?php  

$login = @$_POST['login'];
$senha = @$_POST['senha'];

include('conexao.php');

if (isset($login))
{
	//exit();
	//return false;
}

$codigo = "";

if (isset($login))
{
	//$query = "select codigo,nome,email,senha from usuarios_login where email = ? and senha = ?";
	$query = "select codigo,nome,email,senha from usuarios_login where email = ?";
	$querytratada = $conn->prepare($query); 
	$querytratada->bind_param("s",$login);
	$querytratada->execute();
	$result = $querytratada->get_result();
	
	// número de linhas
	// $numero_linhas = $result->num_rows;
	
	$row	= $result->fetch_assoc();
	$codigo	= $row["codigo"];	
	$nome 	= $row["nome"];
	$hash	= $row["senha"];
	
	//if($codigo>0)
	if (password_verify($senha, $hash))
	{
		$_SESSION['usuario_nome'] = $nome;
		$_SESSION['codigo'] = $codigo;
		header('Location: Index.php');
	}
	else
	{
		echo 'Erro ao logar ou Dados incorretos! ';
	}	
}

?>