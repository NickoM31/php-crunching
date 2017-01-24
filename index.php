<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
// print_r ($dico);
// print_r(sizeof($dico));
?>

<?php 
$tabWord = array();
foreach ($dico as $word) {
    if (strlen($word) == 15) {
        array_push($tabWord, $word);
    }
}
echo count($tabWord);
 ?>
 




</body>
</html>