<?php

// Isso faz reconhecer os comandos de php como o \n, alguns funcionam, mas o \n não
echo '<pre>';

// mostra informações do php,variaveis entre outras coisas
//phpinfo();

// vetor super global, sempre vai existir e usa com _ antes do nome
var_dump($_SERVER);

echo "\n";

// é possivel deixar um vetor dentro da string em aspas duplas, mas deve estar entre chaves
echo "Servidor:  . {$_SERVER['SERVER_NAME']}";

echo "\n";

echo 'ip: ' . $_SERVER["REMOTE_ADDR"];

echo "\n";

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

// outra forma de usar array - essa 
//$alunos = array(0 => array('nome' => 'Emerson5'));
//$alunos = array(0 => array('bitbucket' => 'https://Emerson16@bitbucket.org/Emerson5/aulaphp.git'));

var_dump($alunos);


// Exemplo de for
//for (valor de inicio do contador; ate onde vai o contador; quanto aumenta em cada contador) {
  //  code to be executed;
//}

echo "\n";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 

echo "\n";

// varrer array monodimensional:
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) {
    echo "$value <br>";
}


// varrer vetor bidimensional
// Modo 1
for ($row = 0; $row < 5; $row++) {
  echo "<p>número da linha $row</p>";

  for ($col = 0; $col < 3; $col++) {
	echo $alunos[$row]['nome'];
  }
}
echo "\n";

// Modo 2
foreach ($alunos as $row) {
    echo "\n";
	echo $row['nome'];
	echo "\n";
    echo $row['bitbucket'];
	echo "\n";
}

echo "\n";
echo '<\pre>';