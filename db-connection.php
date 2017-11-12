<?php

//Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//Create connection
$connection = new mysqli($servername, $username, $password);

//Check for an error
if ($connection->connect_error) {
	echo 'Connection failed: ' . $connection->connect_error;
	exit;
}

//Otherwise, connected successfully
//echo 'Connected successfully!';

//Connect to "fitl" database
//SELECT * FROM job_records WHERE id = 1
$connection->select_db('fitl');

//Query to select the object
	$sql = 'SELECT * FROM job_records WHERE id = ' . $id;

	//Execute the query
	$result = $connection->query($sql);

	//Check for and retrieve the object
	if ($result->num_rows > 0) {
		$jobrecord = $result->fetch_assoc();
		//echo '<pre>';
		//print_r($jobrecord);
		//echo '</pre>';
	}
?>
