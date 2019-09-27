<?php  

session_start();

if (!isset($_SESSION['controle'])) 
{
  header('Location: Login.php');
} 




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Teste com sessão - Página 1</title>
    <meta charset="utf-8">
</head>

<body>

    <header>
        <h1>Teste com sessão - Página 1</h1>
    </header>

    <main>
        <section>
			<h2> Usuario logado: <?php $user = isset($_SESSION['controle']) ? $_SESSION['controle'] : 'Sem usuario'; echo $user;	?> </h2>		
			<span>Página 1</span>
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


