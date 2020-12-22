<?php  
include('usuario.class.php');

echo '<pre>';

$objUusuario = new Usuario;

var_dump($objUusuario);

// Incluir/Alterar usuário
    // $objUusuario->setcodigo(20);
    // $objUusuario->setnome('EEEmeson20');
    // $objUusuario->setemail('em20@out.com');
    // $objUusuario->setsenha('bla');
    //$objUusuario->saveUser();

// Excluir usuário - Poderia fazer um set do código como acima e deletar o código que estiver na propriedade do objeto, assim não precisa passar parametro, deixei passando para ter um exemplo de passar parametro na classe
    //$objUusuario->delUser(5);

// Carregar usuário  - Poderia fazer um set do código como acima e carregar o código que estiver na propriedade do objeto, assim não precisa passar parametro, deixei passando para ter um exemplo de passar parametro na classe
    //$objUusuario->loadUser(18);

// Listar usuários
    $lista = $objUusuario->loadAllUsers();
    var_dump($lista);
    

echo '</pre>';

?>