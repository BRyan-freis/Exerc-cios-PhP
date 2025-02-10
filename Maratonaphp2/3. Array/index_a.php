<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigos</title>
</head>
<body>
    <?php 
    $array = ["Bryan", "Caleb", "Lucas", "Geovanna", "Kauan"];
    echo "<pre>";
    print_r($array);
    echo "<pre>";
    
    unset($array[2]);

    $array = array_values($array);
    echo "<br>";
    echo"<pre>";
    print_r($array);
    echo "<pre>";
    ?>
    
</body>
</html>