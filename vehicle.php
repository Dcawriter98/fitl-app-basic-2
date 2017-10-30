<?php

//Request variable placed to determine what vehicle type appears on screen--car or truck
$id=$_REQUEST ['id'];

//vehicle arrays (make, model, year)
$vehicle = array('', '', '');
$vehicle1 = array('Toyota', 'Corolla', '2017',);
$vehicle2 = array('Ford', 'Explorer', '2018',);

//Determining what vehicle to place on screen

/*
For the if statements, I named an object variable so that I could refer to it in the html code. Another approach (commented out)
echoed the final statement in the php code. I decided to make an html page with php code ultimately. 
*/

if (id == 'car') {

	$object = $vehicle1;
	//echo "<p>The car is a" . $vehicle1[0] $vehicle1[1] ", made in " . $vehicle1[2] ".<br></p>";
}

if (id == 'truck') {

	$object = $vehicle2;
	//echo "<p>The truck is a" . $vehicle2[0] $vehicle2[1] ", made in " . $vehicle2[2] ".<br></p>";
} else {
	
	echo $vehicle;
	echo "A car or truck was not selected.";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vehicles</title>
</head>
<body>
<h1>Vehicle Display</h1>
<p>Vehicle selected: <?php echo $id; ?>.<br></p>
<p>Its make, model, and year is <?php echo $object; ?>.<br></p>
</body>
</html>