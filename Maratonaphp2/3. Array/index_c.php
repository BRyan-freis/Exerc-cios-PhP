<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMBINANDO ARRAYS</title>
</head>
<body>
    <?php 
    $array_1 = [1, 2, 3, 4, 5];
    $array_2 = [6,7,8,9,10]; 
    
    $array_combinado = array_merge($array_1, $array_2);

    echo '<pre>';
    print_r($array_combinado);
    echo '</pre>';
    
    ?>
    
</body>
</html>