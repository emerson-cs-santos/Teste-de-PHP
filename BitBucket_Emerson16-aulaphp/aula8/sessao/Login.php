<?php  

session_start();

if (isset($_SESSION['controle'])) 
{
  header('Location: Index.php');
} 

$login = @$_POST['login'];
$senha = @$_POST['senha'];

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

//$codigo	= @$_GET['codigo'];

$codigo = "";

if (!$login == '')
{
	//$query = "select codigo,nome,email,senha from usuarios_login where email = '$login' and senha = '$senha'";
	//$result = $conn->query($query);   

	//$row = $result->fetch_assoc();
	//$codigo  = $row["codigo"];	
	//$nome  = $row["nome"];	
	
	$query = "select codigo,nome,email,senha from usuarios_login where email = ? and senha = ?";
	$querytratada = $conn->prepare($query); 
	$querytratada->bind_param("ss",$login,$senha);
	$querytratada->execute();
	$result = $querytratada->get_result();
	
	$row = $result->fetch_assoc();
	$codigo  = $row["codigo"];	
	$nome  = $row["nome"];	
}
	


//if($login=='sa' and $senha =='spy')
if($codigo>0)
{
	$_SESSION['controle'] = $nome;
	header('Location: Index.php');
}
else
{
	echo 'erro ao logar';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Teste com sessão - Login </title>
    <meta charset="utf-8">
</head>

<body>

    <header>
        <h1>Teste com sessão - Login</h1>
    </header>

    <main>
        <section>
		
            <form id="form" action="Login.php" method="POST">
                
                
				<label for="login">User - Email</label>
				<input type="text" id="login" class="" name="login" placeholder="login" value=""  >

				<label for="senha">senha</label>
				<input type="password" id="senha" class="" name="senha" placeholder="senha" value="" >  
		
				<div>
					<input type="submit" value="Enviar">
				</div>
                
            </form>		
        </section>
    </main>

    <footer>
		<form id="form" action="sair.php" method="POST">
			
			<div>
				<input type="submit" value="Sair">
			</div>
			
		</form>		
        <div> <a href="Index.php">Voltar ao inicio</a> </div>
    </footer>
</body>
</html>
