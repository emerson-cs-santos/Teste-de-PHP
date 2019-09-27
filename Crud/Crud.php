<?php

// Open a Connection to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aulabd";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
    echo 'errado';
	return;
} 

// SELECIONAR BANCO QUE VAMOS TRABALHAR
$query = 'use aulabd';
$result = $conn->query($query);	


$codcli	= @$_POST['codcli'];
$nome	= @$_POST['nome'];
$end	= @$_POST['end'];
$cid 	= @$_POST['cid'];
$cep	= @$_POST['cep'];
$uf		= @$_POST['uf'];


if ($nome <> '')
{
	// Prevenção de injection
	$query = " INSERT INTO CLIENTES ( cod_cli, nome, endereco, cidade, cep, uf ) Values (?, ?, ?, ?, ?, ?)";
	$querytratada = $conn->prepare($query); 
	
	$codigo = 0;
	$querytratada->bind_param("isssss",$codigo,$nome,$end,$cid,$cep,$uf);

	$querytratada->execute();

	if ($querytratada->affected_rows > 0) 
	{
		$resposta = 'ok';
	} 
	else 
	{
		$resposta = 'erro';
	}

}
	
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exercicio - Banco de dados</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <h1>Exercicio - Banco de dados</h1>
    </header>

    <main>
        <section>
            <form id="form" action="crud.php" method="POST">
                
				<div>
					<label for="codcli">Código do cliente</label>
					<input type="text" id="codcli" class="" name="codcli" placeholder="Código cliente" value= '' >
				</div>

				<div>
					<label for="nome">Nome</label>
					<input type="text" id="nome" class="" name="nome" placeholder="Nome" value= ''>  
				</div>				

				<div>
					<label for="end">Endereço</label>
					<input type="text" id="end" class="" name="end" placeholder="Endereço" value= ''>  
				</div>

				<div>
					<label for="cid">Cidade</label>
					<input type="text" id="cid" class="" name="cid" placeholder="Cidade" value= ''> 
				</div> 

				<div>
					<label for="cep">CEP</label>
					<input type="text" id="cep" class="" name="cep" placeholder="CEP" value= ''>
				</div>  

				<div>
					<label for="uf">UF</label>
					<input type="text" id="uf" class="" name="uf" placeholder="UF" value= ''>  												
				</div>
				
                <input type="submit" value="Enviar">
                
            </form>
        </section>
    </main>

    <footer>
        <div> <a href="index.html">Voltar ao inicio</a> </div>
    </footer>
</body>
</html>