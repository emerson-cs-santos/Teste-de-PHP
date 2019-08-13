<?php

echo('teste');

// Open a Connection to MySQL

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// Carregando script
$file = file_get_contents('Script_Inicial.sql');
echo $file;

$sql = $file;

// Executa script
if ($conn->query($sql) === TRUE) {
 echo "Comando executado com sucesso!";
} else {
 echo "Falha ao executar comando: " . $conn->error;
}

// Create database
//$sql = "CREATE DATABASE myDB";
//if ($conn->query($sql) === TRUE) {
 //echo "Database created successfully";
//} else {
 //echo "Error creating database: " . $conn->error;
//}

// INSERT
//$sql = "INSERT INTO users (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

//if (mysqli_query($conn, $sql)) {
 //echo "New record created successfully";
//} else {
 //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}


mysqli_close($conn);





//$serverName = "SERVERNAME"; 
//$uid = "sa";   
//$pwd = "g";  
//$databaseName = "VolpeModelo_ERPDesenv"; 

//$connectionInfo = array( "UID"=>$uid,                            
  //                       "PWD"=>$pwd,                            
    //                     "Database"=>$databaseName); 

/* Connect using SQL Server Authentication. */  
//$conn = sqlsrv_connect( $serverName, $connectionInfo); 

/* Execute the query. */  

//$stmt = sqlsrv_query( $conn, $tsql);  

//if ( $stmt )  
//{  
  //   echo "Statement executed.<br>\n";  
//}   
//else   
//{  
  //   echo "Error in statement execution.\n";  
   //  die( print_r( sqlsrv_errors(), true));  
//}   

?>

