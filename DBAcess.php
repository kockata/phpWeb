<?php
 		$dsn = "mysql:host=localhost;dbname=users";
		$user = "root";
		$password = "";
		
		try {
			// Create and return connection object
            $conn = new PDO($dsn, $user, $password);
			return $conn;
        }
		
		catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        } 
?>