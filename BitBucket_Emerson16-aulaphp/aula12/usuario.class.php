<?php  

class Usuario
{
	// Atributos
	private $codigo;
	public $nome; // ou var $nome, se usar var, vira public por padrão
	private $email;
	private $senha;

	// Contrutor, é executado assim que inicia/instancia a classe "init" da classe
	public function __construct()
	{
		
		// Open a Connection to MySQL
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "aulaphp";

		// Create connection
		$this->conn = new mysqli($servername, $username, $password,$dbname);
		// Check connection
		if ($this->conn->connect_error) 
		{
			die("Connection failed: " . $this->conn->connect_error);
			echo 'errado';
			return;
		} 

		// SELECIONAR BANCO QUE VAMOS TRABALHAR
		$query = 'use aulaphp';
		$result = $this->conn->query($query);			

	}

	
	// Métodos

	// Setar/Gravar na variavel
	public function setcodigo (int $codigo)
	{
		$this->codigo = $codigo;
	}
	
	public function setnome (string $nome)
	{
		$this->nome = $nome;
	}
	
	public function setemail (string $email)
	{
		$this->email = $email;
	}
	
	public function setsenha (string $senha)
	{
		$this->senha = $senha;
	}	
	
	
	// Pegar valor da variavel
	public function getcodigo (int $codigo): int
	{
		return $this->codigo;
	}
	
	public function getnome (string $nome): string
	{
		return $this->nome;
	}
	
	public function getemail (string $email): string
	{
		return $this->email;
	}
	
	public function getsenha (string $senha): string
	{
		return $this->senha;
	}	


	public function saveUser()
	{
		$codigo	= $this->codigo;
		$nome	= $this->nome;
		$email	= $this->email;
		$senha	= $this->senha;

		$senha = password_hash($senha, PASSWORD_DEFAULT);

		$existe = false;

		$query = " select codigo,senha from usuarios_login where codigo = ? ";
		$querytratada = $this->conn->prepare($query); 
		$querytratada->bind_param("s",$codigo);
		$querytratada->execute();
		$result = $querytratada->get_result();
		
		if( $result->num_rows > 0 )
		{
			
			$existe = true;
		}
		else
		{
			$existe = false;
		}

		// incluir
		if($existe == false)
		{

			$codigo = 0;
			
			$query = " INSERT INTO usuarios_login ( codigo, nome, email, senha ) Values (?, ?, ?, ?)";
			$querytratada = $this->conn->prepare($query); 
			$querytratada->bind_param("isss",$codigo,$nome,$email,$senha);		
			$querytratada->execute();
			
			if ($querytratada->affected_rows > 0) 
			{
				echo 'Usuário INCLUSO!';
			} 
			else 
			{
				echo 'Ocorreu uma falha ao inserir dados no banco de dados';
			}
		}

		// alterar
		if($existe == true)
		{

			$query = " UPDATE usuarios_login SET nome=?, email=?, senha=? where codigo = ? ";
			$querytratada = $this->conn->prepare($query); 
			$querytratada->bind_param("sssi",$nome,$email,$senha,$codigo);
			$querytratada->execute();
			
			preg_match_all ('/(\S[^:]+): (\d+)/', $this->conn->info, $querytratada);
			$info = array_combine ($querytratada[1], $querytratada[2]);	
			
			// Linhas encontradas com base na condição da where
			$linhas_encontradas = $info['Rows matched'];
		
			// Linhas que foram alteradas, quando os dados não forem alterados, mesmo o comando estando certo, não é retornado linhas afetadas
			$linhas_afetadas = $info['Changed'];
		
			// Avisos de problemas
			$avisos_problemas = $info['Warnings'];
			
			//if ($querytratada->affected_rows > 0) 
			if ($linhas_encontradas == '1' and $avisos_problemas == '0')
			{
				echo 'Usuário ALTERADO!';
			} 
			else 
			{
				echo 'Ocorreu uma falha ao atualizar dados no banco de dados';
			}
		}
	}	

	// Pegar valor da variavel
	public function delUser (int $codigo)
	{
		
		$query = " delete from usuarios_login where codigo = ?";
		$querytratada = $this->conn->prepare($query); 
		$querytratada->bind_param("i",$codigo);
		$querytratada->execute();

		if ($querytratada->affected_rows > 0) 
		{
			echo 'Usuário foi excluido!';
		} 
		else 
		{
			echo 'Ocorreu uma falha ao deletar registro do dados no banco de dados';
		}		
	}	

	// Pegar valor da variavel
	public function loadUser (int $codigo)
	{
		
		$query = "select * from usuarios_login where codigo = ?";
		$querytratada = $this->conn->prepare($query); 
		$querytratada->bind_param("i",$codigo);
		$querytratada->execute();
		$result = $querytratada->get_result();  
		
		if( $result->num_rows > 0 )
		{
			$row = $result->fetch_assoc();

			$this->codigo	= $row["codigo"];
			$this->nome		= $row["nome"];
			$this->email	= $row["email"];
			$this->senha	= $row["senha"];
		}
		else
		{
			echo 'Não encontrado!';
		}		
	}	
	
	// Pegar valor da variavel
	public function loadAllUsers(): array
	{
		
		$query = "select * from usuarios_login";
		$result = $this->conn->query($query);

		$cont = 0;
		
		// Códigos
		while($row = $result->fetch_assoc()) 
		{	
			$consulta[$cont][0] = 'Código:' .  $row["codigo"];
			$consulta[$cont][1] = 'Nome:' . $row["nome"];
			$consulta[$cont][2] = 'E-mail:' .  $row["email"];
			$consulta[$cont][3] = 'Senha:' . $row["senha"];			
			$cont = $cont + 1;
		}
		return $consulta;
	}		

	// Descontrutor, é executado assim que inicia/instancia a classe "init" da classe
	public function __destruct()
	{

		// FECHA CONEXAO
		mysqli_close($this->conn);

	}


	
	
}




?>