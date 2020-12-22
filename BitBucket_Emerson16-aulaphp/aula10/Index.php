<?php  

//include('sessao.php');
include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Aula 10 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</head>

<body>

    <header>
        <h1>Aula 10 - PHP - Lista de usuários</h1>
    </header>

    <main>
        <section>
		
			<h2> Usuario logado: <?php $user = isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Sem usuario'; echo $user;	?> </h2>
			
			<form id="form" action="Incluir.php" method="POST">
				<div>
					<input type="submit" value="Incluir" class='btn btn-primary btn-lg'>
				</div>
			</form>	
			
<?php  

$query = "select * from usuarios_login order by codigo desc";
$result = $conn->query($query);

echo "<div class='container mt-5'>";
	echo "<div class='row-fluid'>";
	
		echo "<div class='col-xs-6'>";
		echo "<div class='table-responsive'>";
		
			echo "<table id ='usuarios_table' class='table table-hover table-inverse'>";
			
			echo "<tr>";
			echo "<th>Codigo</th>";
			echo "<th>Nome</th>";
		    echo "<th>E-mail</th>";
			echo "<th>Editar</th>";
			echo "<th>Apagar</th>";
			echo "</tr>";
	
			if ($result->num_rows > 0) {
				
				// output data of each row
				while($row = $result->fetch_assoc()) {
						
					echo "<tr>";
					echo "<td>" . $row["codigo"] . "</td>";
					echo "<td>" . $row["nome"] . "</td>";
				    echo "<td>" . $row["email"] . "</td>";
					
					echo " <td> <a id='' type='button' class='btn btn-primary btn-lg' href='Editar.php?codigo={$row["codigo"]}'>Editar</a> </td>";
					echo " <td> <a id='' type='button' class='btn btn-primary btn-lg' href='Apagar.php?codigo={$row["codigo"]}'>Apagar</a> </td>";
					echo "</tr>";			
				}
			} else {
				echo "0 results";
			}
			
		echo "</table>";
?>			
			
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
		
		<div> 
			<a href="Menu.php">Voltar ao menu</a> 
		</div>
		
    </footer>
</body>
</html>