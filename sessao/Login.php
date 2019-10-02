<?php  

session_start();

if (isset($_SESSION['controle'])) 
{
  header('Location: Index.php');
} 

$login = @$_POST['login'];
$senha = @$_POST['senha'];

echo $login;
echo $senha;

if($login=='sa' and $senha =='spy')
{
	$_SESSION['controle'] = $login;
	header('Location: Index.php');
}
else
{
	echo 'qq merda';
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
                
                
				<label for="login">User</label>
				<input type="text" id="login" class="" name="login" placeholder="login" value=""  >

				<label for="senha">Número 2</label>
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

