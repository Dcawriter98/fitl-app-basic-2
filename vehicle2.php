<!DOCTYPE html>
<html>
<head>
	<title>Vehicles</title>
</head>
<body>
<h1>Vehicle Display</h1>
</body>
</html>

<?php

//Request variable placed to determine what vehicle type appears on screen--car or truck
$id=$_REQUEST ['id'];

//vehicle arrays (make, model, year)
$vehicle = array('', '', '');
$vehicle1 = array("make"=> 'Toyota', "model" => 'Corolla', "year" => '2017',);
$vehicle2 = array('Ford', 'Explorer', '2018',);

//Determining what vehicle to place on screen

/*
For the if statements, I wanted to echo out a statement with the appropriate keys from the array 
*/

if (id == 'car') {

	echo "The car is a" . $vehicle1['make'] $vehicle1['model'] . ", made in year" . $vehicle1['year'] .<br></p>;
} 

if (id == 'truck') {

	echo "The truck is a" . $vehicle2[0] $vehicle2[1]. ", made in year" . $vehicle2[2] .<br></p>;

} else {
	
	echo $vehicle;
	echo "A car or truck was not selected.";

}
?>
