<?php  

include('funcao.php');

for ($x = 0; $x <= 5; $x++) {
   // logger("TESTE $x \r\n");
}


for ($x = 0; $x <= 5; $x++) {
    
	//logger_2("TESTE_2 $x \r\n", __LINE__);
}

for ($x = 0; $x <= 5; $x++) {
    
	logger_3("TESTE_3 $x \r\n");
}


echo 'ok';


?>