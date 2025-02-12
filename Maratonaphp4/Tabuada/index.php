<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada<h2>
    <?php  
    $t = 8;
    for ($contador = 1; $contador <= 10; $contador++) {
        $resultado = $contador * $t;
        echo "$t = $resultado <br>" . PHP_EOL;
    }
    echo "Fim de programa!" . PHP_EOL;
        
    ?>
</body>
</html>