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
	<h1>Top 10</h1>
	<?php 
	
	foreach ($top as $key => $value) {
		if ($key<=10) {

			echo $key. " ".$value['im:name']['label']."</br>";
		}
	}
	?>
	<h1>Classement du film « Gravity »</h1>
	<?php 
	foreach ($top as $key => $value) {
		if ($value['im:name']['label'] == "Gravity") {
		echo $key;
		}
		
	}
	?>
	<h2>Le réalisateur du film « The LEGO Movie »:</h2>

	<?php 
foreach ($top as $key => $value) {
	if ($value['im:name']['label'] == "The LEGO Movie") {
		echo $value['im:artist']['label'];
	}
}
?>
<h2>Nombre de films sont sortis avant 2000:</h2>
<?php  
foreach ($top as $key => $value) {

	if ($value['im:releaseDate']['label']< 2000) {
		echo $key. " ".$value['im:name']['label']."</br>";
	}
}


	 ?>
</body>
</html>