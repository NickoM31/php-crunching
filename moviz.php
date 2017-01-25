<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Moviz</title>
</head>
<body>
	<?php 
	$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
	$brut = json_decode($string, true);
	$top = $brut["feed"]["entry"];

	?>

	<?php 
	
	foreach ($top as $key => $value) {
		if ($key<=10) {

			 echo "<ul>"."<li>".($value['im:name']['label']). "</li>"."</ul>";
		}
	}
	?>
</body>
</html>