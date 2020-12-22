<?php  

include('sessao.php');
include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Aula 10 - Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</head>

<body>

    <header>
        <h1>Aula 10 - Menu</h1>
    </header>

    <main>
        <section>
			
			<h2> Usuario logado: <?php $user = isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Sem usuario'; echo $user;	?> </h2>		
			
			<div> <a href="Index.php">Listagem</a> </div>
			<div> <a href="Sair.php">Sair</a> </div>			
			
        </section>
    </main>

    <footer>
	
		<form id="form" action="sair.php" method="POST">
			
			<div>
				<input type="submit" value="Sair">
			</div>
		</form>	
		
        <div> 
			<a href="Index.php">Voltar ao inicio</a> 
		</div>
		
		<div> <a href="Login.php">Voltar ao Login</a> </div>
		
    </footer>
</body>
</html>