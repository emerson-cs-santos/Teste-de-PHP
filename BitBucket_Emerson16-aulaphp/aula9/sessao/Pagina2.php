<?php  

if(session_status() !== PHP_SESSION_ACTIVE)
{
	session_start();
}

if ( !isset($_SESSION['usuario_nome']) and !isset($_SESSION['codigo']) ) 
{
  header('Location: Login.php');
} 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Teste com sessão - Página 2</title>
    <meta charset="utf-8">
</head>

<body>

    <header>
        <h1>Teste com sessão - Página 2</h1>
    </header>

    <main>
        <section>
			<h2> Usuario logado: <?php $user = isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Sem usuario'; echo $user;	?> </h2>		
			<span>Página 2</span>
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


