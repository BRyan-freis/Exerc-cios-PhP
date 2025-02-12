<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor da média de calculos</title>
</head>
<body>
    <H2> Valor da mèdia dos calculos <H2>
        <?php 
        $media = 0;
        for ($i = 0; $i < 10; $i++) {
        $numero = rand(1, 100);
        $array[] = $numero;

        $media += $numero;
               
        }
        $media /= count($array);
          
        echo "A media dos números é: " . $media . "\n";
        ?>
        
</body>
</html>