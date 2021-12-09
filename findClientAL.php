<?php
//if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
	require_once 'findClientDA.php';
	$conn = setConnection();
	$clientId = trim($_GET['id']);

	$clientFound = findClient($conn,$clientId);
	//$first_name, $last_name, $three;
	while($row=$clientFound->fetch()){
		$first_name = $row[2];
		$last_name = $row[3];
		$three = $row[5];
	}
	//$row = $clientFound->fetch_array(MYSQLI_ASSOC);
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>First name</label>
                        <p><b><?php echo "$first_name" ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <p><b><?php echo "$last_name" ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <p><b><?php echo "$three" ?></b></p>
                    </div>

                    <p><a href="allClientsAL.php" class="btn btn-primary">Edit</a></p>
                    <p><a href="allClientsAL.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>