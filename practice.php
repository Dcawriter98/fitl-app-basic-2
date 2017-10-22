<?php
$title = 'Recipe Box';
$recipe = 'Rice';
$ingredients = 'Ingredients';
$ingredient1 = '2 cups rice';
$ingredient2 = '1 cup water';
$instructions = '(1) Wash the rice.<br>
(2) Combine ingredients in a pot. Then cook on stove for 30 minutes.';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $recipe; ?></h1>
	<hr>
	<h2><?php echo $ingredients;?></h2>
	<ul>
		<li><?php echo $ingredient1; ?></li>
		<li><?php echo $ingredient2; ?></li>
	</ul>
	<hr>
	<h2>Instructions</h2>
	<p><?php echo $instructions; ?></p>
	

</body>
</html>