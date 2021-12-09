<html>
<?php
	require 'addClientDA.php';
	$conn= setConnection();
	$title= $_POST["title"];
	$first_name= $_POST["first_name"];
	$last_name= $_POST["last_name"];
	$postal_address= $_POST["home_address"];
	$email_address= $_POST["email_address"];
	createUser($conn, $title, $first_name, $last_name, $postal_address, $email_address); 
?>
<a href= "http://localhost/myFirstPHPWebNew/myFirstPHPWeb/addClientUI.html">Create new person</a><br>
<a href= "http://localhost/myFirstPHPWebNew/myFirstPHPWeb/allClientsAL.php">View all clients table</a>
</html>
