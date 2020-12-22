<html>
<body>

<form action='crud.php' method='post'>
	
	<div>
		<label>Código</label>
		<input type='text' id='codigo' name='codigo' disabled>
	</div>
	
	<div>
		<label>Nome</label>
		<input type='text' id='nome' name='nome'>
	</div>

	<div>
		<label>Url</label>
		<input type='text' id='url' name='url'>	
	</div>

	<div>
		<label>IP</label>
		<input type='text' id='ip' name='ip'>	
	</div>

	</BR>
	
	<input type='submit'></button>
</form> 

</body>
</html> 


<?php

// Isso faz reconhecer os comandos de php como o \n, alguns funcionam, mas o \n não
echo '<pre>';

echo 'Exercicio 2 - Crud';
echo "\n";



// conectar com banco de dados
// Open a Connection to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aulaphp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
    echo 'errado';
	return;
} 

echo "\n";
echo "\n";

// SELECIONAR BANCO QUE VAMOS TRABALHAR
$query = 'use aulaphp';
$result = $conn->query($query);

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$url = $_POST['url'];
$ip = $_POST['ip'];

echo $nome;

// verificando se já existe
$query = "select codigo from USUARIOS where codigo = " . "$codigo";
$result = $conn->query($query);

if( $result->num_rows > 0)
{
	// ATUALIZAR 
	//$query = "UPDATE USUARIOS SET nome = " . "'" . $login . "'" . ",senha = " . "'" . $senha . "'" .  "where codigo = " . $codigo )";	
}
else
{
	// INSERIR
	$query = "INSERT INTO USUARIOS ( codigo, nome, url,ip ) Values ( " . "0" .  ",'" . $nome . "'" . ",'" . $url . "' . ",'" . $ip . "' )";
}



echo "\n";