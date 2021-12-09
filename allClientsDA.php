<!DOCTYPE html>

<html>
<head>
	<style >
	table, th, td {
  		border: 1px solid black;
  		border-collapse: collapse;
		padding: 10px;
		text-align: left;
	}
	</style>
</head>
<body>
<?php
	
    // set the database connection
    function setConnection(){
 		return include_once 'DBAcess.php';
    }

    function getAllClients ($conn) {
		$sql = "SELECT * FROM clients";
    	$statement = $conn -> prepare($sql);
		$statement->execute();
		return $statement;
    }

    function deleteUser ($conn, $id) {
        $sql="SELECT * FROM clients WHERE id=?";
        $statement = $conn->prepare($sql); 
        $statement->bindValue(1, $id);
        $statement->execute();
        while($row=$statement->fetch()){
                echo "$row[1] " . "$row[2] " .  "$row[3] " . "$row[4] " . "$row[5] <br>";
        }     
        if ($statement != null ) {
            $sql = "DELETE FROM clients WHERE id = ?";
            $statement = $conn -> prepare($sql); 
            $statement->bindValue(1, $id);
            $statement->execute();
            echo "Person with following details was successfully deleted from the DB: <br>";     
              
        }else {
            echo "Person with this data was not found in DB";
        }
    }
    function findClient($conn, $clientId) {
        $sql="SELECT * FROM clients WHERE id=?";
        $statement = $conn->prepare($sql); 
        $statement->bindValue(1, $clientId);
        $statement->execute();
        return $statement;
    }
?>
</body>
</html>