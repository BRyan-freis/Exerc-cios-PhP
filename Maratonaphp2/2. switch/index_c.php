<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa de Desconto</title>
</head>
<body>
    <?php 
    $código = 1; 
    
    switch ($código) {
        case 1:
            echo"Parabéns você ganhou 10% de Desconto";
        break;
        case 2:
            echo "Parabéns você ganhou 20% de Desconto";
        break;
        case 3: 
            echo "Parabéns você ganhou 30% de Desconto";
        break;
        default:
            echo "Desculpe não foi dessa vez";
        break;
    }
    ?>
</body>
</html>