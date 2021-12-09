<?php
	
    // set the database connection
    function setConnection(){
        return include_once 'DBAcess.php';
    }

    function findClient($conn, $clientId) {
        $sql="SELECT * FROM clients WHERE id=?";
        $statement = $conn->prepare($sql); 
        $statement->bindValue(1, $clientId);
        $statement->execute();
        return $statement;
    }
?>