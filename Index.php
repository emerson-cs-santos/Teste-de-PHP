<?php

echo('teste');

$serverName = "SERVERNAME"; 
$uid = "sa";   
$pwd = "g";  
$databaseName = "VolpeModelo_ERPDesenv"; 

$connectionInfo = array( "UID"=>$uid,                            
                         "PWD"=>$pwd,                            
                         "Database"=>$databaseName); 

/* Connect using SQL Server Authentication. */  
$conn = sqlsrv_connect( $serverName, $connectionInfo); 

/* Execute the query. */  

$stmt = sqlsrv_query( $conn, $tsql);  

if ( $stmt )  
{  
     echo "Statement executed.<br>\n";  
}   
else   
{  
     echo "Error in statement execution.\n";  
     die( print_r( sqlsrv_errors(), true));  
}   

?>

