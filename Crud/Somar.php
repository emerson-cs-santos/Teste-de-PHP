<?php

$numero1 = @$_POST['numero1'];
$numero2 = @$_POST['numero2'];

$resultado = $numero1 + $numero2;

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
            <form id="form" action="somar.php" method="POST">
                
                <!-- label for="nome" semanticamente para dizer para qual text a label se destina -->
                
				<label for="numero1">Numero 1</label>
				<input type="text" id="numero1" class="" name="numero1" placeholder="Número 1" value= <?php  echo $numero1 ; ?> >

				<label for="numero2">Número 2</label>
				<input type="text" id="numero2" class="" name="numero2" placeholder="Número 2" value= <?php  echo $numero2 ; ?>>  

				<div>
					<label for="resultado">Resultado</label>
					<input type="text" id="resultado" class="" name="resultado" placeholder="Resultado" value= <?php  echo $resultado ; ?>>  				
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