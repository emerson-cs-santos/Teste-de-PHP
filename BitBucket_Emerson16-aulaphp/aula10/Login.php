<?php  


//session_start();


// Se já iniciou sessão, não precisa logar novamente
//if ( isset($_SESSION['usuario_nome']) and isset($_SESSION['codigo']) ) 
//{
  //header('Location: Index.php');
//} 
 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Aula 10 - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</head>

<body>

    <header>
        <h1>Aula 10 - Login</h1>
    </header>

    <main>
        <section>
		
            <form id="form" action="Login_banco.php" method="POST">
                
				<label for="login">User - Email</label>
				<input type="text" id="login" class="" name="login" placeholder="login" value=""  >

				<label for="senha">senha</label>
				<input type="password" id="senha" class="" name="senha" placeholder="senha" value="" >  
		
				<div>
					<input type="submit" value="Entrar">
				</div>
                
            </form>		
        </section>
    </main>

    <footer>
		
    </footer>
</body>
</html>