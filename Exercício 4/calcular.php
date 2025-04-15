<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionador de frases dos times</title>
</head>
<body>
    <fieldset>
<?php

$fp = array('Sem Mundial','Vai Palmeiras!!!','Isso timão');
$fc = array('Vai Corinthians','Decepciona nunca','Eternos corinthianos');
$fsa = array('Isso São Paulo','Não perde uma','Faz denovo timão');
$fsn = array('Santista eterno','Santos!!!','Mais um gol!!!');
$o = $_POST['o'];
$fp = $fp[rand(0, count($fp) - 1)];
$fc = $fc[rand(0, count($fc) - 1)];
$fsa = $fsa[rand(0, count($fsa) - 1)];
$fsn = $fsn[rand(0, count($fsn) - 1)];


if ($o == 1) {
    echo($fp);

}else if ($o == 2) {
    echo($fc);
}
else if ($o == 3) {
    echo($fsa);
    
}else if ($o == 4) {
    echo($fsn);
}

?>
</fieldset>
</body>
</html>