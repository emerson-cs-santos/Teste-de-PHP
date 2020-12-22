<?php  

		// Open a Connection to MySQL
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "aulaphp";

		// Create connection
		try
		{
            // Se não tiver usando a porta padrão (3306) é preciso especificar a porta depois do host
            $conn = new PDO("mysql:dbname=$dbname;host=127.0.0.1;port=3307", $username, $password);
        
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully";
		}
		catch(PDOException $e)
    	{
    		echo "Connection failed: " . $e->getMessage();
        }

        $codigo = 6;

		$query = "select * from usuarios_login where codigo > :codigo";
        $querytratada = $conn->prepare($query); 
        $querytratada-> execute(array(':codigo' => $codigo));

        // Pegar 1
        //$result = $querytratada->fetch(PDO::FETCH_ORI_NEXT);

        // Pegar todos
        $result = $querytratada->fetchAll();

        var_dump($result);
        


?>