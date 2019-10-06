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



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Revisão prova 1 de PHP</title>
    <meta charset="utf-8">
</head>

<body>

    <header>
        <h1>Revisão prova 1 de PHP</h1>
    </header>

    <main>
        <section>
		
            <form id="form" action="Login.php" method="POST">
                
                
				<label for="login">User - Email</label>
				<input type="text" id="login" class="" name="login">

				<label for="senha">senha</label>
				<input type="password" id="senha" class="" name="senha">  
		
				<div>
					<input type="submit" value="Enviar">
				</div>
                
            </form>		
        </section>
    </main>

    <footer>
		<span> footer </span>
    </footer>
</body>
</html>

