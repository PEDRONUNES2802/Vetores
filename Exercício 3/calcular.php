<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionador de frases</title>
</head>
<body>
    <fieldset>
<?php

$fh = array('Olá senhor, como vai ?','Seu sepato está bonito hoje.','Voçe é macho.');
$fm = array('Bonita sua bolsa','Voçe cortou o cabelo ?','Qual perfume você usa?');
$o = $_POST['o'];
$f1 = $fh[rand(0, count($fh) - 1)];
$f2 = $fm[rand(0, count($fm) - 1)];


if ($o == 1) {
    echo($f1);
}else if ($o == 2) {
    echo($f2);
}

?>
</fieldset>
</body>
</html>