<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <fieldset>
    <?php

$n = $_POST['g'];
$n = rand(0, 99);

echo('O número é '.$n);
    ?>
</fieldset>
</body>
</html>