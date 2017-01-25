<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Dictionnaire</h1>

	<h2>Nombre de mots dans le dictionnaire:</h2>
	<?php 
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);
	print_r(sizeof($dico));
	?>
	<h2>Nombre de mots avec 15 caractères:</h2>
	<?php 
	$tabWord = array();
	foreach ($dico as $word) {
		if (strlen($word) == 15) {
			array_push($tabWord, $word);
		}
	}
	echo count($tabWord);
	?> 
	<h2>Nombre de mots qui contiennent la lettre w:</h2>

	<?php 
	$tabWord = array();
	foreach ($dico as $letter) {
		if (stripos($letter, 'w') !== false) {
			array_push($tabWord, $letter);
		}
	}
	echo count($tabWord);
	?> 

	<h2>Combien de mots finissent par la lettre q:</h2> 
	<?php   
	$tabWord = array();
	foreach ($dico as $letter) {
		if (substr($letter, -1) == 'q') {
			array_push($tabWord, $letter);
		}
	}
	echo count($tabWord);
	?> 
</body>
</html>