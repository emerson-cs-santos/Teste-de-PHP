<?php

// Isso faz reconhecer os comandos de php como o \n, alguns funcionam, mas o \n não
echo '<pre>';

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

// outra forma de usar array
//$alunos = array(5 => array('nome' => 'Emerson5'));
//$alunos = array(5 => array('bitbucket' => 'https://Emerson16@bitbucket.org/Emerson5/aulaphp.git'));

var_dump($alunos);


//// Com while
echo "\n";
echo 'Com while';
for ($row = 0; $row < count($alunos); $row++) {
  for ($col = 0; $col < 1; $col++) {
	echo "\n";
	echo $alunos[$row]['nome'];
	echo "\n";
	echo $alunos[$row]['bitbucket'];
  }
}

$row = 0;
$col = 0;
while($row < count($alunos) and $col < 1) {
	
	echo "\n";
	echo $alunos[$row]['nome'];
	echo "\n";
	echo $alunos[$row]['bitbucket'];	
	
    
	$row++;
	
	if($row = count($alunos))
	{
		$col++;
		$row = 0;
	}
	
} 


// Modo for
echo "\n";
echo "\n";
echo 'Modo - for';
for ($row = 0; $row < count($alunos); $row++) {
  for ($col = 0; $col < 1; $col++) {
	echo "\n";
	echo $alunos[$row]['nome'];
	echo "\n";
	echo $alunos[$row]['bitbucket'];
  }
}

echo "\n";
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
foreach ($alunos as $indice => $linha) {
    echo '<tr>';
	
	echo '<td>' . $linha['nome'] . '</td>' ;
	echo '<td>' . $linha['bitbucket'] . '</td>';
	
	echo '</tr>';
}

echo '</tbody>';

echo '<\table>';



