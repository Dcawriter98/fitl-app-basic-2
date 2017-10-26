<?php
$object = array(
	'title' => 'Recipe Box',
	'recipe' => 'Rice',
	'ingredients' => '2 cups rice and<br>1 cup water',
	'instructions' => '(1) Wash the rice.<br>
(2) Combine ingredients in a pot. Then cook on stove for 30 minutes.',
);
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $object ['title'];?> </title>
</head>
<body>

	<h1><?php echo $object ['recipe']; ?> </h1>
	<hr>
	<h2>Ingredients</h2>
	<p><?php echo $object ['ingredients'];?> </p>
	<hr>
	<h2>Instructions</h2>
	<p><?php echo $object ['instructions']; ?> </p>
	

</body>
</html>