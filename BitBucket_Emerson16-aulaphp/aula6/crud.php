<?php
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

$tipo = @$_GET['tipo'];

if ($tipo=='')
{
	$tipo = 'incluir';
}

$codigo	= @$_POST['codigo'];
$nome	= @$_POST['nome'];
$url	= @$_POST['url'];
$ip 	= @$_POST['ip'];

if($tipo=='incluir')
{
	if ($nome <> '')
	{
		// $acao = '';
		
		// $query = "select codigo,nome,url,ip from usuarios where codigo = " . $codigo;
		// $result = $conn->query($query);   
		
		// $row = $result->fetch_assoc();
		// $codigo  = $row["codigo"];	
		// $nome    = $row["nome"];
		// $url     = $row["url"];    
		// $ip      = $row["ip"];			

		// if($codigo>0)
		// {
			// $query = " UPDATE SET usuarios SET nome=?, url=?, ip=? where codigo = ? ";
			// $querytratada = $conn->prepare($query); 
			// $querytratada->bind_param("sssi",$nome,$url,$ip,$codigo);
		// }
		
		// if($codigo=0)
		// {
			// $query = " INSERT INTO USUARIOS ( codigo, nome, url, ip ) Values (?, ?, ?, ?)";
			// $codigo = 0;
			// $ip		= $_SERVER['SERVER_ADDR'];
			// $querytratada = $conn->prepare($query); 
			// $querytratada->bind_param("isss",$codigo,$nome,$url,$ip);			
		// }	

		$query = " INSERT INTO USUARIOS ( codigo, nome, url, ip ) Values (?, ?, ?, ?)";
		$codigo = 0;
		$ip		= $_SERVER['SERVER_ADDR'];
		$querytratada = $conn->prepare($query); 
		$querytratada->bind_param("isss",$codigo,$nome,$url,$ip);		
		
		$querytratada->execute();
		
		if ($querytratada->affected_rows > 0) 
		{
			$resposta = "Dados do $nome gravados com sucesso!";
		} 
		else 
		{
			$resposta = 'Ocorreu uma falha ao inserir/atualizar dados no banco de dados';
		}
		
		echo $resposta;
	}
}

if ($tipo=='del')
{
		
		$codigo	= @$_GET['codigo'];
		// Prevenção de injection
		$query = " delete from usuarios where codigo = ?";
		$querytratada = $conn->prepare($query); 
		$querytratada->bind_param("i",$codigo);
		$querytratada->execute();
		
		if ($querytratada->affected_rows > 0) 
		{
			$resposta = "Registro deletado com sucesso!";
		} 
		else 
		{
			$resposta = 'Ocorreu uma falha ao deletar registro do dados no banco de dados';
		}
		
		echo $resposta;
}

if ($tipo=='alt')
{
	$codigo	= @$_GET['codigo'];
	
    $query = "select codigo,nome,url,ip from usuarios where codigo = " . $codigo;
    $result = $conn->query($query);   
    
    $row = $result->fetch_assoc();
    $codigo  = $row["codigo"];
    $nome    = $row["nome"];
    $url     = $row["url"];    
    $ip      = $row["ip"];	
	
}

//$query = "select * from usuarios " . $where . " order by codigo desc";
$query = "select codigo,nome,url,ip from usuarios order by codigo desc";
$result = $conn->query($query);

echo "<div class='container mt-5'>";
	echo "<div class='row-fluid'>";
	
		echo "<div class='col-xs-6'>";
		echo "<div class='table-responsive'>";
		
			echo "<table id ='usuarios_table' class='table table-hover table-inverse'>";
			
			echo "<tr>";
			echo "<th>Codigo</th>";
			echo "<th>Nome</th>";
		    echo "<th>URL</th>";
			echo "<th>IP</th>";
			echo "</tr>";
	
			if ($result->num_rows > 0) {
				
				// output data of each row
				while($row = $result->fetch_assoc()) {
						
					echo "<tr>";
					echo "<td>" . $row["codigo"] . "</td>";
					echo "<td>" . $row["nome"] . "</td>";
				    echo "<td>" . $row["url"] . "</td>";
					echo "<td>" . $row["ip"] . "</td>";
					
					echo " <td> <a id='' type='button' class='btn btn-primary btn-lg' href='crud.php?codigo={$row["codigo"]}&tipo=alt'>Alterar</a> </td>";
					echo " <td> <a id='' type='button' class='btn btn-primary btn-lg' href='crud.php?codigo={$row["codigo"]}&tipo=del'>Deletar</a> </td>";
					echo "</tr>";			
				}
			} else {
				echo "0 results";
			}
			
		echo "</table>";
	
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exercicio - Banco de dados</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <h1>Aula 6 - PHP - CRUD</h1>
    </header>

    <main>
        <section>
            <form id="form" action="crud.php" method="POST">
                
				<div>
					<label for="codigo">Código</label>
					<input type="text" id="codigo" class="" name="codigo" placeholder="Código usuario" value = "<?php echo $tipo=="alt" ? $codigo:""; ?>" >
				</div>

				<div>
					<label for="nome">Nome</label>
					<input type="text" id="nome" class="" name="nome" placeholder="Nome" value = "<?php echo $tipo=="alt" ? $nome:""; ?>">  
				</div>				

				<div>
					<label for="url">Url</label>
					<input type="text" id="url" class="" name="url" placeholder="URL" value = "<?php echo $tipo=="alt" ? $url:""; ?>">  
				</div>

				<div>
					<label for="ip">IP</label>
					<input type="text" id="ip" class="" name="ip" placeholder="IP" value = "<?php echo $tipo=="alt" ? $ip:""; ?>"> 
				</div> 

                <input type="submit" value="Enviar">
                
            </form>
        </section>
    </main>

    <footer>
        <span> footer </span>
    </footer>
</body>
</html>