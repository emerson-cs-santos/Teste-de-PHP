<?php
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

// SELECIONAR BANCO QUE VAMOS TRABALHAR
$query = 'use aulaphp';
$result = $conn->query($query);	

$codigo	= @$_GET['codigo'];

$query = "select codigo,nome,url,ip from usuarios where codigo = " . $codigo;
$result = $conn->query($query);   

$row = $result->fetch_assoc();
$codigo  = $row["codigo"];	
$nome    = $row["nome"];
$url     = $row["url"];    
$ip      = $row["ip"];			

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exercicio - Banco de dados</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <h1>Aula 7 - PHP - CRUD</h1>
    </header>

    <main>
        <section>
            <form id="form" action="crud.php" method="POST">
                
				<div>
					<label for="codigo" class='badge-pill'>Código</label>
					<input type="text" id="codigo" class="form-control-sm" name="codigo" placeholder="Código usuario" value = "<?php echo $codigo; ?>" >
				</div>

				<div>
					<label for="nome" class='label label-default'>Nome</label>
					<input type="text" id="nome" class="form-control" name="nome" placeholder="Nome" value = "<?php echo $nome; ?>">  
				</div>				

				<div>
					<label for="url" class='label label-default'>Url</label>
					<input type="text" id="url" class="form-control" name="url" placeholder="URL" value = "<?php echo $url; ?>">  
				</div>

				<div>
					<label for="ip" class='label label-default'>IP</label>
					<input type="text" id="ip" class="form-control" name="ip" placeholder="IP" value = "<?php echo $ip; ?>"> 
				</div> 

                <input type="submit" value="Gravar Alteração" class='btn btn-primary btn-lg'>
                
            </form>
        </section>
    </main>

    <footer>
        <span> footer </span>
    </footer>
</body>
</html>