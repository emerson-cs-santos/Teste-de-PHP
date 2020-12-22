<?php  

include('sessao.php');
include('conexao.php');

$codigo	= @$_GET['codigo'];

if (!isset($codigo))
{
	echo 'Cadastro não encontrado!';
	return false;
}

$query = "select * from usuarios_login where codigo = $codigo";
$result = $conn->query($query);   

$row = $result->fetch_assoc();

$codigo  = $row["codigo"];	
$nome    = $row["nome"];
$email   = $row["email"];    
$senha   = $row["senha"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Aula 10 - Editar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</head>

<body>

    <header>
        <h1>Aula 10 - Editar</h1>
    </header>

    <main>
        <section>
			<h2> Usuario logado: <?php $user = isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Sem usuario'; echo $user;	?> </h2>		
			
			
            <form id="form" action="Editar_Banco.php" method="POST">
                
				<div>
					<label for="codigo" class='badge-pill'>Código</label>
					<input type="text" id="codigo" class="form-control-sm" name="codigo" value = "<?php echo $codigo; ?>"  >
				</div>

				<div>
					<label for="nome" class='badge-pill' >Nome</label>
					<input type="text" id="nome" class="form-control" name="nome" placeholder="Mauro de Sousa..." value = "<?php echo $nome; ?>">  
				</div>				

				<div>
					<label for="email" class='label label-default'>E-mail</label>
					<input type="text" id="email" class="form-control" name="email" placeholder="email@server.com" value = "<?php echo $email; ?>">  
				</div>

				<div>
					<label for="senha" class='label label-default'>Senha</label>
					<input type="password" id="senha" class="form-control" name="senha" placeholder="Senha" value = "<?php echo $senha; ?>"> 
				</div> 

                <input type="submit" value="Gravar alteração" class='btn btn-primary btn-lg' name=''>
                
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


