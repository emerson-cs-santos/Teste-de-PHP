<?php  

// Função para gravar logs
function logger(string $str):bool
{
    //code to be executed
	
	$fp = fopen('log.txt','a');
	
	if ( fwrite($fp,$str) )
	{
		fclose($fp);
		return true;
	}else
	{
		fclose($fp);
		return false;
	}
}

function logger_2(string $str, int $nr_linha):bool
{	
	$fp = fopen('log.txt','a');
	
	if ( fwrite($fp,"$nr_linha : $str") )
	{
		fclose($fp);
		return true;
	}else
	{
		fclose($fp);
		return false;
	}
}

// Parametro opcional, neste caso o segundo
function logger_3(string $str, int $nr_linha = null):bool
{	
	$fp = fopen('log.txt','a');
	
	$linha_exibir = '';
	
	if (!empty($nr_linha))
	{
		$linha_exibir = "$nr_linha :";
	}
	
	if ( fwrite($fp,"$linha_exibir $str") )
	{
		fclose($fp);
		return true;
	}else
	{
		fclose($fp);
		return false;
	}
}


?>