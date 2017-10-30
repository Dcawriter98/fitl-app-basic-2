<?php

//Request variable placed to determine what vehicle type appears on screen--car or truck
$id=$_REQUEST ['id'];

//vehicle arrays (make, model, year)


//Determining what vehicle to place on screen

/*
Using the id number through the request superglobal, display the appropriate vehicle on the web page.

The empty array is at the top, if the id number is not 1 or 2. 
*/

$vehicle = array(
		'make' =>'',
		'model' => '',
		'year' => ''
	);

if ($id == 1) {

$vehicle = array(

'make' => 'Toyota',
'model' => 'Corolla',
'year' => '2017',
);
	
} 

if ($id == 2) {

	$vehicle = array(

'make' => 'Ford',
'model' => 'Explorer',
'year' => '2018',
);

} else {
	
	//echo "No vehicle selected";
	//this else statement did not work with the echo statement 

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehicles</title>
</head>
<body>
<!--Display selected information from php code above-->

<h1>Vehicle Display</h1>
<p>The vehicle selected is <br> <b>make</b> <?php echo $vehicle['make']; ?><br> <b>model</b> <?php echo $vehicle['model']; ?><br> <b>year</b> <?php echo $vehicle['year']; ?><br></p>
</body>
</html>
