<?php  

class Template
{
	// Atributos
	private $arquivo;
	private $variaveis;

	// Contrutor, é executado assim que inicia/instancia a classe "init" da classe
	public function __construct (string $arquivo)
	{
		$this->arquivo = $arquivo;
    }

	// Métodos

	// Setar/Gravar na variavel
    
    public function setavariaveis (array $vetor) : bool
	{
		$this->variaveis = $vetor;
    }
    
    public function mostrar()
	{
		include($this->arquivo);
	}
	    
	
	// Descontrutor, é executado assim que inicia/instancia a classe "init" da classe
	public function __destruct()
	{

        // // Fazer coisas após fechar a classe

	}


	
	
}




?>