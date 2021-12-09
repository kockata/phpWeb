<?php
    function setConnection(){
        return include_once 'DBAcess.php';
    }

    function createUser($conn, $title, $first_name, $last_name, $postal_address, $email_address) {
        $sql = "INSERT INTO clients (title , first_name , last_name , postal_address , email_address) VALUES (?, ?, ?, ?, ?);";
    	$statement=$conn -> prepare($sql);
        $statement->bindValue(1,$title);
        $statement->bindValue(2,$first_name);
        $statement->bindValue(3,$last_name);
        $statement->bindValue(4,$postal_address);
        $statement->bindValue(5,$email_address);
		$statement->execute();
        echo "Person with following details was successfully added to the DB: <br>";
        echo "<table>";
			echo "<tr><th>Title</th><th>First Name</th>
                      <th>Last Name</th><th>Postal Address</th><th>Email Address</th></tr>";
                      echo "<tr>";
                      echo "<td> $title </td>";
                      echo "<td> $first_name </td>";
                      echo "<td> $last_name </td>";
                      echo "<td> $postal_address </td>";
                      echo "<td> $email_address </td>";
                      echo "</tr>";
                  
                   echo "</table>";
        echo "$title " . "$first_name " .  "$last_name " . "$postal_address " . "$email_address <br>";
    }
?>