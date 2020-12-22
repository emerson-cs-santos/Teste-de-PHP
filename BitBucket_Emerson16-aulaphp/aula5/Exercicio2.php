<?php

// Isso faz reconhecer os comandos de php como o \n, alguns funcionam, mas o \n não
echo '<pre>';

echo 'Exercicio 2';
echo "\n";
echo "\n";

// Mostrar valores do vetor bidimensional

// Vetor com mais de 1 dimensão
$alunos[0]['nome'] = 'Emerson0';
$alunos[0]['bitbucket'] = 'https://Emerson16@bitbucket.org/Emerson0/aulaphp.git';

$alunos[1]['nome'] = 'Emerson1';
$alunos[1]['bitbucket'] = 'https://Emerson16@bitbucket.org/Emerson1/aulaphp.git';

$alunos[2]['nome'] = 'Emerson2';
$alunos[2]['bitbucket'] = 'https://Emerson16@bitbucket.org/Emerson2/aulaphp.git';

$alunos[3]['nome'] = 'Emerson3';
$alunos[3]['bitbucket'] = 'https://Emerson16@bitbucket.org/Emerson3/aulaphp.git';

$alunos[4]['nome'] = 'Emerson4';
$alunos[4]['bitbucket'] = 'https://Emerson16@bitbucket.org/Emerson4/aulaphp.git';

echo "\n";

// Modo foreach
echo 'Modo - for each';

//Exibir em tabela html
echo "\n";
echo "<table border =1>";

echo '<thead>';

echo '<tr>';
echo '<th>Nome</th>';
echo '<th>bitbucket</th>';

echo '</tr>';

echo '</thead>';

echo '<tbody>';

// funciona tambem iniciar o foreach assim: foreach ($alunos as $linha) {
	// mas se vc precisa do indice do primeiro vetor, vc não teria
	
$Cor = "bgcolor='#FF0000'";
foreach ($alunos as $indice => $linha) {
    echo '<tr>';
	
	// Com comando alternário
	//$Cor = $Cor=="bgcolor='#FF0000'" ? "":"bgcolor='#FF0000'";
	
	// Com if classico
	if($Cor=="bgcolor='#FF0000'")
	{
		$Cor = "";
	}
	else
	{
		$Cor = "bgcolor='#FF0000'";
	}
	
	echo "<td " . $Cor. ">" . $linha['nome'] . '</td>' ;
	echo "<td " . $Cor. ">"  . $linha['bitbucket'] . '</td>';
	
	echo '</tr>';
}

echo '</tbody>';

echo '<\table>';


echo "\n";
echo "\n";


echo "\n";
echo "\n";



$string = "Emerson na string";
echo $string;

echo "\n";

echo 'Tem a letra a? Qual posição?';

echo "\n";

if(strpos($string,'a') !== false)
// também funcionaria: if(strpos($string,'a'))
{
	echo 'Tem sim a letra a';
	echo "\n";
	$teste = strpos($string,'a');
	echo "Posição: $teste";
}




