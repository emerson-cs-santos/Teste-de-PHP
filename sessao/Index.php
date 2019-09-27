<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Teste com sessão</title>
    <meta charset="utf-8">
</head>

<body>

    <header>
        <h1>Teste com sessão</h1>
    </header>

    <main>
        <section>
		
			<h2> Usuario logado: <?php session_start();  $user = isset($_SESSION['controle']) ? $_SESSION['controle'] : 'Sem usuario'; echo $user;	?> </h2>
		
			<div> <a href="Login.php">Login</a> </div>
            <div> <a href="Pagina1.php">Pagina 1</a> </div>
			<div> <a href="Pagina2.php">Pagina 2</a> </div>
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