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
		// Conexão com banco de dados
		echo 'Conexão banco';
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

	// Descontrutor, é executado assim que inicia/instancia a classe "init" da classe
	public function __destruct()
	{
		// Conexão com banco de dados
		echo 'Fechando objeto, neste exemplo Fechando conexão com banco';
	}	
	
	
}




?>