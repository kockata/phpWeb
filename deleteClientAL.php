<?php
	require 'deleteClientDA.php';
	$conn = setConnection();
	$clientId = $_POST["clientId"];
	deleteUser($conn, $clientId);
?>

