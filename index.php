<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h1>Dictionnaire</h1>
	<?php 
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);
// print_r ($dico);
// print_r(sizeof($dico));
	?>
	<!-- Nombre de mots avec 15 caractères -->
	<?php 
	$tabWord = array();
	foreach ($dico as $word) {
		if (strlen($word) == 15) {
			array_push($tabWord, $word);
		}
	}
	echo count($tabWord);
	?> 
	<!-- Nombre de mots qui contiennent la lettre w -->

	<?php 
	$tabWord = array();
	foreach ($dico as $letter) {
		if (stripos($letter, 'w') !== false) {
			array_push($tabWord, $letter);
		}
	}
	echo count($tabWord);
	?> 

	<!-- Combien de mots finissent par la lettre q -->
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