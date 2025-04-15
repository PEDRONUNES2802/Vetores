<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    <?php

$n = $_POST['n'];
$r = rand(0 , $n);

echo('O número é '.$r);
    ?>
</body>
</html>