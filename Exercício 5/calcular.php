<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra o sentido da sua cor</title>
</head>
<body>
    <fieldset>
<?php
$b = $_POST["botao"];
$b = array('Azul','Verde','Vermelho','Amarelo','Roxo');
$b = $b[rand(0, count($b) - 1)];



if($b == 'Azul') {

    echo"$b: Como a cor do céu";

}else if($b == 'Verde'){

    echo"$b: Esperança";

}else if($b == 'Vermelho'){

    echo"$b: Intenso";

}else if($b == 'Amarelo'){

    echo"$b: Igual o Sol";

}else if($b == 'Roxo'){

    echo"$b: Apaixonante";
}

?>
</fieldset>
</body>
</html>