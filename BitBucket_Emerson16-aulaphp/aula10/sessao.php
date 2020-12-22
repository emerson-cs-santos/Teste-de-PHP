<?php  

if(session_status() !== PHP_SESSION_ACTIVE)
{
	session_start();
}

if ( !isset($_SESSION['usuario_nome']) and !isset($_SESSION['codigo']) ) 
{
  header('Location: Login.php');
} 

?>